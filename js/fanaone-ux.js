/* FanaOne UX: progressive current-page filtering; no server search is altered. */
(function () {
  'use strict';

  function normalize(value) {
    return String(value || '').normalize('NFKC')
      .replace(/[ي]/g, 'ی').replace(/[ك]/g, 'ک')
      .replace(/[\u200c\u200d]/g, ' ').toLocaleLowerCase().trim();
  }

  function updateFilter(input) {
    var id = input.getAttribute('data-fanaone-page-filter');
    var table = document.getElementById(id);
    if (!table || !table.tBodies.length) return;
    var term = normalize(input.value);
    var rows = Array.prototype.filter.call(table.tBodies[0].rows, function (row) {
      return row.querySelector('td') !== null;
    });
    var visible = 0;
    rows.forEach(function (row) {
      var match = !term || normalize(row.textContent).indexOf(term) !== -1;
      row.hidden = !match;
      row.style.display = match ? '' : 'none';
      if (match) visible++;
    });
    var status = document.querySelector('[data-fanaone-filter-count="' + CSS.escape(id) + '"]');
    if (status) {
      status.textContent = term
        ? visible + ' ردیف از ' + rows.length + ' ردیف صفحه نمایش داده می‌شود'
        : rows.length + ' ردیف در صفحهٔ جاری (برای جست‌وجوی همهٔ رکوردها از فیلترهای اصلی استفاده کنید)';
    }
  }

  var pending = new WeakMap();
  document.addEventListener('input', function (event) {
    var input = event.target.closest('[data-fanaone-page-filter]');
    if (!input) return;
    clearTimeout(pending.get(input));
    pending.set(input, setTimeout(function () { updateFilter(input); }, 140));
  });
  document.addEventListener('click', function (event) {
    var clear = event.target.closest('[data-fanaone-filter-clear]');
    if (!clear) return;
    var id = clear.getAttribute('data-fanaone-filter-clear');
    var input = Array.prototype.find.call(document.querySelectorAll('[data-fanaone-page-filter]'), function (node) {
      return node.getAttribute('data-fanaone-page-filter') === id;
    });
    if (!input) return;
    input.value = '';
    updateFilter(input);
    input.focus();
  });

  /*
   * Native form validation recovery. This does not override GLPI's server
   * validation or submit handlers. Feedback is only shown on an invalid event.
   */
  document.addEventListener('invalid', function (event) {
    var field = event.target;
    var form = field && field.form;
    if (!form || !form.matches('form[name="asset_form"]')) return;
    window.requestAnimationFrame(function () {
      if (!form.isConnected) return;
      var first = form.querySelector('input:invalid, select:invalid, textarea:invalid');
      if (!first) return;
      var summary = form.querySelector('[data-fanaone-validation-summary]');
      if (!summary) {
        summary = document.createElement('div');
        summary.className = 'alert alert-danger fanaone-validation-summary';
        summary.setAttribute('role', 'alert');
        summary.setAttribute('aria-live', 'assertive');
        summary.setAttribute('data-fanaone-validation-summary', '');
        form.insertBefore(summary, form.firstChild);
      }
      var label = first.labels && first.labels.length
        ? first.labels[0].textContent.trim()
        : (first.getAttribute('aria-label') || first.name || 'این فیلد');
      summary.textContent = 'امکان ثبت فرم وجود ندارد. مقدار «' + label +
        '» را بررسی کنید. ' + (first.validationMessage || 'فیلد الزامی یا نامعتبر است.');
    });
  }, true);
  document.addEventListener('input', function (event) {
    var field = event.target;
    var form = field && field.form;
    if (!form || !form.matches('form[name="asset_form"]')) return;
    var summary = form.querySelector('[data-fanaone-validation-summary]');
    if (summary) summary.remove();
  });

  /*
   * Dirty-state protection for ordinary GLPI asset forms. This does not store
   * form contents, alter requests, or override the server's saving rules.
   */
  function markFormEdited(event) {
    var field = event.target;
    if (!field || !field.matches || !field.matches('input, select, textarea')) return;
    if (field.matches('input[type="hidden"], input[type="submit"], input[type="button"], input[type="reset"]')) return;
    var form = field.form;
    if (!form || !form.matches('form[name="asset_form"]') || !form.querySelector('.fanaone-form-actions')) return;
    form.dataset.fanaoneDirty = 'true';
    form.dataset.fanaoneSubmitting = '';
    var status = form.querySelector('.fanaone-unsaved-status');
    if (status) status.hidden = false;
  }

  document.addEventListener('input', markFormEdited);
  document.addEventListener('change', markFormEdited);
  document.addEventListener('submit', function (event) {
    var form = event.target;
    if (!form || !form.matches || !form.matches('form[name="asset_form"]')) return;
    // Suppress the warning during normal submission, but restore it if a
    // client-side AJAX handler cancels navigation or leaves the form in place.
    form.dataset.fanaoneSubmitting = 'true';
    setTimeout(function () {
      if (form.isConnected) form.dataset.fanaoneSubmitting = '';
    }, 2500);
  });
  window.addEventListener('beforeunload', function (event) {
    var dirty = Array.prototype.some.call(
      document.querySelectorAll('form[name="asset_form"][data-fanaone-dirty="true"]'),
      function (form) { return form.dataset.fanaoneSubmitting !== 'true'; }
    );
    if (!dirty) return;
    event.preventDefault();
    event.returnValue = '';
  });

  /* GLPI replaces search result panels with AJAX. Reapply a current search to new rows. */
  var queued = false;
  var observer = new MutationObserver(function (mutations) {
    if (queued || !mutations.some(function (m) {
      return Array.prototype.some.call(m.addedNodes, function (node) {
        return node.nodeType === 1 && (node.matches('[data-fanaone-page-filter]') || node.querySelector('[data-fanaone-page-filter]'));
      });
    })) return;
    queued = true;
    requestAnimationFrame(function () {
      queued = false;
      document.querySelectorAll('[data-fanaone-page-filter]').forEach(updateFilter);
    });
  });
  function start() {
    document.querySelectorAll('[data-fanaone-page-filter]').forEach(updateFilter);
    if (document.querySelector('#page')) observer.observe(document.querySelector('#page'), { childList: true, subtree: true });
  }
  if (document.readyState === 'loading') document.addEventListener('DOMContentLoaded', start);
  else start();
})();
