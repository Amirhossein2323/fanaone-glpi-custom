/**
 * Source-level regression checks for the two reported RTL defects.
 * These guard selector scope and the GLPI Twig structure; browser visual
 * acceptance is still required on a staging instance.
 */
const test = require('node:test');
const assert = require('node:assert/strict');
const fs = require('node:fs');
const path = require('node:path');

const root = path.join(__dirname, '../..');
const kbCss = fs.readFileSync(path.join(root, 'public/fanaone-ui-fixes.css'), 'utf8');
const uxCss = fs.readFileSync(path.join(root, 'public/fanaone-ux.css'), 'utf8');
const footerTwig = fs.readFileSync(
  path.join(root, 'templates/components/itilobject/footer.html.twig'),
  'utf8'
);

test('legacy Knowledge Base list cells and text helpers are RTL aligned', () => {
  assert.match(kbCss, /html\[dir="rtl"\]\s+\.fanaone-kb\s+\.tab_cadrehov\s+td\.left/);
  assert.match(kbCss, /html\[dir="rtl"\]\s+\.fanaone-kb\s+\.kb,/);
  assert.match(kbCss, /html\[dir="rtl"\]\s+\.tab_cadre_fixe\s+\.kb_resume/);
  assert.match(kbCss, /text-align:\s*start\s*!important/);
  assert.match(kbCss, /padding-inline-start:\s*25px/);
  assert.match(kbCss, /html\[dir="rtl"\]\s+#kbanswer\s*\{/);
});

test('Knowledge Base fix does not globally flip every legacy .left cell', () => {
  assert.doesNotMatch(kbCss, /html\[dir="rtl"\]\s+\.left\s*\{/);
  assert.match(kbCss, /td\.left:has\(> h2\)/);
});

test('ITIL footer keeps timeline actions and form actions under matching panes', () => {
  assert.match(footerTwig, /<div class="buttons-bar d-flex py-2">/);
  const timelineIndex = footerTwig.indexOf('timeline-buttons d-flex');
  const formIndex = footerTwig.indexOf('form-buttons ');
  assert.ok(timelineIndex >= 0 && formIndex > timelineIndex, 'expected timeline group before form group');

  assert.match(uxCss, /html\[dir="rtl"\]\s+#itil-footer\s*>\s*\.buttons-bar\s*\{\s*direction:\s*ltr;/);
  assert.match(uxCss, /#itil-footer\s*>\s*\.buttons-bar\s*>\s*\.timeline-buttons\s*\{\s*direction:\s*rtl;\s*justify-content:\s*flex-end;/);
  assert.match(uxCss, /#itil-footer\s*>\s*\.buttons-bar\s*>\s*\.form-buttons\s*\{\s*direction:\s*ltr;/);
  assert.match(uxCss, /#itil-footer\s*>\s*\.buttons-bar\s*>\s*\.form-buttons\s*>\s*span:last-child\s*\{\s*direction:\s*rtl;/);
});

test('ITIL footer direction overrides are scoped to RTL and the footer only', () => {
  assert.doesNotMatch(uxCss, /(?:^|\n)\s*\.buttons-bar\s*\{\s*direction:\s*ltr;/);
  assert.doesNotMatch(uxCss, /html\[dir="rtl"\]\s+body\s*\{\s*direction:\s*ltr;/);
});
