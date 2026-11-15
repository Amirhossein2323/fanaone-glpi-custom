/**
 * Dependency-free smoke tests for the current-page search enhancement.
 * Run: node --test tests/ux/fanaone-ux.test.cjs
 */
const test = require('node:test');
const assert = require('node:assert/strict');
const fs = require('node:fs');
const path = require('node:path');
const vm = require('node:vm');

function environment(texts) {
  const listeners = Object.create(null);
  const rows = texts.map((text) => ({
    textContent: text,
    style: { display: '' },
    hidden: false,
    querySelector(selector) { return selector === 'td' ? {} : null; }
  }));
  const table = { tBodies: [{ rows }] };
  const status = { textContent: '' };
  const input = {
    value: '',
    focused: false,
    getAttribute(key) { return key === 'data-fanaone-page-filter' ? 'search_test' : null; },
    closest(selector) { return selector === '[data-fanaone-page-filter]' ? this : null; },
    focus() { this.focused = true; }
  };
  const clear = {
    getAttribute(key) { return key === 'data-fanaone-filter-clear' ? 'search_test' : null; },
    closest(selector) { return selector === '[data-fanaone-filter-clear]' ? this : null; }
  };
  const doc = {
    readyState: 'complete',
    addEventListener(type, fn) { (listeners[type] ||= []).push(fn); },
    getElementById(id) { return id === 'search_test' ? table : null; },
    querySelector(selector) {
      if (selector === '#page') return {};
      if (selector.includes('data-fanaone-filter-count')) return status;
      return null;
    },
    querySelectorAll(selector) {
      return selector === '[data-fanaone-page-filter]' ? [input] : [];
    }
  };
  const source = fs.readFileSync(path.join(__dirname, '../../js/fanaone-ux.js'), 'utf8');
  const raf = (callback) => callback();
  vm.runInNewContext(source, {
    document: doc, window: { requestAnimationFrame: raf },
    MutationObserver: class { observe() {} },
    CSS: { escape: (value) => value },
    requestAnimationFrame: raf,
    setTimeout: (fn) => { fn(); return 1; }, clearTimeout() {}
  });
  return {
    input, clear, rows, status,
    dispatch(type, target) {
      (listeners[type] || []).forEach((listener) => listener({ target }));
    }
  };
}

test('on load describes the scope of the current page', () => {
  const h = environment(['تیکت یک', 'دارایی دو']);
  assert.match(h.status.textContent, /2 ردیف/);
  assert.match(h.status.textContent, /صفحهٔ جاری/);
});

test('matches Persian and Arabic letter variants without removing rows', () => {
  const h = environment(['يک كارت شبکه', 'میز خدمت', 'یک کارت حافظه']);
  h.input.value = 'یک کارت';
  h.dispatch('input', h.input);
  assert.deepEqual(h.rows.map((r) => r.hidden), [false, true, false]);
  assert.match(h.status.textContent, /2 ردیف از 3/);
  assert.equal(h.rows.length, 3);
});

test('empty result is visible in status; clearing restores original rows', () => {
  const h = environment(['تیکت', 'دارایی']);
  h.input.value = 'ناموجود';
  h.dispatch('input', h.input);
  assert.ok(h.rows.every((r) => r.hidden));
  assert.match(h.status.textContent, /0 ردیف/);
  h.dispatch('click', h.clear);
  assert.ok(h.rows.every((r) => !r.hidden));
  assert.equal(h.input.value, '');
  assert.equal(h.input.focused, true);
});
