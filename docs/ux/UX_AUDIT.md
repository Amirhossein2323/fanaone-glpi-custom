# UX Audit — FanaOne GLPI (source inspection, preliminary)

**Evidence basis:** static source inspection of branch `main` on 2026-11-15. This is not a field-validated UX audit. Severity means hypothesized impact, to verify with users. Screenshots from the running application are **not available** in this source-only pass; capture them in staging without PII.

| ID | Scope and evidence in repository | Likely issue / failure mode | Severity | This PR / next step |
|---|---|---|---|---|
| UX-01 | `templates/layout/parts/page_header.html.twig` globally hides search behind `d-none d-lg-block` in vertical layout and `d-none d-md-block` in horizontal layout | Search feature disappears at narrower widths, increasing navigation effort | High | Additional mobile search entry included for authorized central-interface users |
| UX-02 | `templates/layout/parts/global_search_form.html.twig` contains malformed `type"text"` and lacks programmatic label | Inconsistent browser behavior and accessibility | High | Correct `type="search"`, add `aria-label` |
| UX-03 | `templates/components/search/table.html.twig` only exposes full GLPI filter/search journey, with no local in-page text filter | Repeated filtering for visible rows is costly | Medium | Current-page-only text filter with count, clear button and Persian/Arabic character normalization; no implication of full-dataset search |
| UX-04 | `templates/components/search/table.html.twig` provides a checkbox with empty `aria-label`, and table columns with no scope | Screen-reader users cannot distinguish row actions reliably | High | Add row ID label and column scope |
| UX-05 | `templates/components/messages_after_redirect_toasts.html.twig` forces `aria-live=assertive` for informational messages and auto-closes errors after ten seconds | High-priority errors can disappear before users resolve them; frequent interruptions | High | Errors and warnings persist until dismissed; normal info uses polite announcements |
| UX-06 | `templates/components/form/buttons.html.twig` has an unmatched opening `<span>` around the permanent-delete action | Potential layout and focus-order problems | Medium | Close span correctly |
| UX-07 | `public/css/golpakhsh-overrides.css` contains extensive login-specific overrides, `public/fanaone-ui-fixes.css` adds other page-specific rules | Repeated ad hoc styles risk component drift | Medium | Introduce additive scoped tokens, avoid replacing brand-specific work |
| UX-08 | Shared search toolbar `templates/components/search/controls.html.twig` relies on icon-only controls/tooltips | Accessible purpose may be unclear before hover | Medium | Label export/config/filter controls |
| UX-09 | `templates/layout/parts/page_header.html.twig` begins content without a keyboard skip shortcut | Keyboard navigation may traverse repetitive menus on each page | Medium | Add skip-to-content |
| UX-10 | `js/modules/Search/Table.js` registers click on sortable column `<th>`; original table header lacks a focusable control | Keyboard users cannot initiate sorting reliably | High | Wrap sortable labels in native buttons, preserve existing delegated click behavior and `aria-sort` |
| UX-11 | Asset forms have action buttons at the bottom of potentially long content; native browser validation has limited task context | Extra scroll to save, unclear invalid field during submission | Medium | Sticky action row plus summary for native invalid events; retain server-side validation |
| UX-12 | `templates/pages/self-service/home.html.twig` displayed dashboard content without a dedicated compact first-use guide | New users may struggle to identify request submission and follow-up steps | Medium | Add optional native `<details>` guide; validate wording and actual menu labels with users |
| SEC-01 | `config/config_db.php`, backup, `config/glpicrypt.key` are tracked in the public repo | Potential secret disclosure, not a UX issue | Critical/security | Escalate immediately; do not expose contents or rotate blind; separate security PR #2 prepared |

## Screenshot collection template (pending)
For each issue record: unique screenshot filename (e.g. `UX-01-mobile-search-before.png`), tested Git commit, environment, user role, viewport width, browser, page URL without tokens or PII, expected/actual outcome, and redacted before/after capture. No real screenshots are claimed or attached.

## Priority next audits
Ticket lifecycle and ticket form validation; knowledge-base discovery; assets list and bulk actions; approval/request workflows; plugins (Formcreator, Genericobject, SMS, Persian date); dashboard density; error states from server responses; keyboard/screen-reader navigation; profile permissions. Source review cannot establish zero confusion or actual improvements in task completion.

## Observed vs unverified
The source defects above are reproducible in code. Whether users are affected and by how much is unverified until staging tests and measured user sessions. Check conflict risk between `fanaone-ux.css`, theme styles and both existing override layers.
