/* FanaOne date-picker compatibility fix.
 * GLPI already initializes Flatpickr and js/persian-ui.js provides the Jalali adapter.
 * Never hide or destroy the original input: that breaks required project date fields.
 * This script intentionally does not replace, clone, or mask date controls.
 */
(function () {
  'use strict';
  function restoreNativeFields(root) {
    if (!root || !root.querySelectorAll) return;
    root.querySelectorAll('.flatpickr.input-group').forEach(function (wrapper) {
      if (wrapper.style.display === 'none') wrapper.style.removeProperty('display');
    });
  }
  if (document.readyState === 'loading') {
    document.addEventListener('DOMContentLoaded', function () { restoreNativeFields(document); });
  } else {
    restoreNativeFields(document);
  }
})();
