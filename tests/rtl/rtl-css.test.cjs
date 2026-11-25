'use strict';

const test = require('node:test');
const assert = require('node:assert/strict');
const fs = require('node:fs');
const path = require('node:path');

const root = path.resolve(__dirname, '../..');
const read = (file) => fs.readFileSync(path.join(root, file), 'utf8');

test('Bootstrap start/end utilities use CSS logical properties', () => {
  const css = read('css/lib/bootstrap/scss/_utilities.scss');
  assert.match(css, /start:\s*inline-start/);
  assert.match(css, /end:\s*inline-end/);
  assert.match(css, /property:\s*inset-inline-start/);
  assert.match(css, /property:\s*inset-inline-end/);
  assert.match(css, /property:\s*margin-inline-start/);
  assert.match(css, /property:\s*margin-inline-end/);
  assert.match(css, /property:\s*padding-inline-start/);
  assert.match(css, /property:\s*padding-inline-end/);
  assert.match(css, /start:\s*start,\s*end:\s*end/);
  assert.match(css, /border-start-start-radius/);
  assert.match(css, /border-start-end-radius/);
});

test('Knowledge-base card rows use logical text alignment', () => {
  const php = read('src/KnowbaseItem.php');
  const legacy = read('css/legacy/includes/_styles.scss');
  const fixes = read('public/fanaone-ui-fixes.css');
  assert.match(php, /<td class='text-start'><div class='kb'>/);
  assert.match(legacy, /\.kb\s*\{\s*text-align:\s*start;/);
  assert.match(legacy, /\.kb_resume\s*\{\s*text-align:\s*start;/);
  assert.match(fixes, /\.fanaone-kb\s+\.kb/);
  assert.match(fixes, /padding-inline:\s*25px 0/);
});

test('ITIL panels, footer and timeline arrows use logical edges', () => {
  const layout = read('css/includes/components/itilobject/_layout.scss');
  const footer = read('css/includes/components/itilobject/_footer.scss');
  const timeline = read('css/includes/components/itilobject/_timeline.scss');
  const mainDescription = read('templates/components/itilobject/timeline/main_description.html.twig');
  assert.match(layout, /border-inline-start:/);
  assert.match(footer, /border-inline-start:/);
  assert.match(timeline, /inset-inline-start:\s*-14px/);
  assert.match(timeline, /inset-inline-end:\s*-14px/);
  assert.match(timeline, /border-block-start-color:/);
  assert.match(timeline, /border-start-start-radius:/);
  assert.match(timeline, /border-start-end-radius:/);
  assert.match(mainDescription, /timeline-content text-start card/);
});

test('Shared navigation, search, documentation and drawers mirror in RTL', () => {
  const search = read('css/includes/pages/_search.scss');
  const docs = read('css/includes/components/_documentation.scss');
  const menu = read('css/includes/components/_global-menu.scss');
  const saved = read('css/includes/components/_saved-searches.scss');
  const kanban = read('css/includes/components/_kanban.scss');
  const planning = read('css/legacy/includes/_planning.scss');
  const dashboard = read('css/standalone/dashboard.scss');
  const marketplace = read('css/standalone/marketplace.scss');
  assert.match(search, /inset-inline-start:\s*22px/);
  assert.match(search, /inset-inline-end:\s*22px/);
  assert.match(docs, /margin-inline-start:/);
  assert.match(menu, /inset-inline-start:\s*calc\(100% \+ 1px\)/);
  assert.match(saved, /inset-inline-start:\s*\$sidebar-width/);
  assert.match(kanban, /inset-inline-start:\s*100%/);
  assert.match(planning, /float:\s*inline-end/);
  assert.match(dashboard, /text-align:\s*start/);
  assert.match(marketplace, /text-align:\s*start/);
});

test('Explicit LTR fields and physical grid coordinates remain protected', () => {
  const theme = read('css/palettes/fanava.scss');
  const grid = read('css/standalone/gridstack-grids.scss');
  const dashboard = read('css/standalone/dashboard.scss');
  const legacy = read('css/legacy/includes/_styles.scss');
  assert.match(theme, /type="email"/);
  assert.match(theme, /\.fanaone-ltr/);
  assert.match(theme, /unicode-bidi:\s*isolate/);
  // GridStack x coordinates and its southeast resize handle are physical data.
  assert.match(grid, /\[gs-x="#\{\$i\}"\]\s*\{\s*left:/);
  assert.match(dashboard, /&\s*>\s*\.ui-resizable-se\s*\{\s*bottom:\s*14px;\s*right:\s*3px;/);
  assert.match(legacy, /\.numeric\s*\{\s*\/\/ Numeric columns retain their physical right alignment/);
});

test('RTL cache versions are refreshed and no malformed logical properties were introduced', () => {
  const html = read('templates/layout/parts/head.html.twig');
  const php = read('src/Html.php');
  const files = [
    'css/lib/bootstrap/scss/_utilities.scss',
    'css/includes/components/itilobject/_timeline.scss',
    'css/includes/pages/_search.scss',
    'css/includes/components/_kanban.scss',
    'css/legacy/includes/_styles.scss',
    'css/standalone/dashboard.scss',
    'css/standalone/marketplace.scss'
  ];
  assert.match(html, /fanaone-ui-fixes\.css'\)\s*\}\}\?v=20261126/);
  assert.match(php, /version'\s*=>\s*'fanaone-rtl-26'/);
  for (const file of files) {
    const content = read(file);
    assert.doesNotMatch(content, /(?:margin|padding|border)-inset-inline-/);
    assert.doesNotMatch(content, /inset-inline-(?:start|end)\s*:\s*undefined/);
  }
});
