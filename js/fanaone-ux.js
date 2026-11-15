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

  /* GLPI replaces search result panels with AJAX. Reapply a current search to new rows. */
  var queued = false;
  var observer = new MutationObserver(function (mutations) {
    if (queued || !mutations.some(function (m) { return m.addedNodes.length > 0 || m.removedNodes.length > 0; })) return;
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
