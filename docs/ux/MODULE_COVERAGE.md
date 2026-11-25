# UX module coverage & validation register

Assessment date: 2026-11-15. Evidence: project source tree, not a signed-in production environment.

**Status vocabulary**
- **Shared implemented:** some reused interface components changed; this is not a claim that every page in the module is validated.
- **Source reviewed:** inspected representative files and identified hypotheses.
- **Runtime pending:** user-role access, real task completion, screenshots, responsive behavior and plugin interactions not yet exercised.

| Module | Evidence / source entry points | Shared improvements possibly inherited | Target next validation |
|---|---|---|---|
| Global navigation and dashboard | `templates/layout/parts/page_header.html.twig`, `templates/central`, `js/dashboard.js`, `css/includes/components/_global-menu.scss` | Mobile search, keyboard skip link, focus indicators, collapsed RTL flyout positioning | Verify menu depth, shortcuts, roles, personalized dashboard and collapsed-sidebar flyouts in staging |
| Tickets, requests and incidents | `templates/components/itilobject/*`, `src/Ticket.php`, `front/ticket.form.php` | Table filtering, notifications, global search, RTL footer action-group placement | New ticket, follow-up, assignment, SLA, attachments; test footer in regular/expanded/collapsed layouts |
| Problems and changes | `src/Problem.php`, `src/Change.php`, ITIL shared templates | Search table and warnings | Change approvals and timeline actions |
| Assets and inventory | `templates/pages/assets/*`, `src/Computer.php`, `src/Monitor.php` | Long form controls and save state, list actions, errors | Bulk editing and CSV import, item relations, equipment forms |
| Software and licenses | `templates/pages/assets/software.html.twig`, `templates/pages/management/softwarelicense.html.twig` | Table/field standards | Permission-sensitive edit, search by license, expiry alerts |
| Contracts and vendors | `templates/pages/management/contract.html.twig` | Shared forms/tables | Multi-step contract creation and renewal |
| Certificates and services | `templates/pages/management/certificate.html.twig`, `appliance.html.twig` | Shared forms, errors | Date selection, expiration actions, relations |
| Projects and tasks | `templates/pages/tools/project_task.html.twig` | Common form/table styling | Assign and close tasks; relationships |
| Knowledge base | `src/Knowbase.php`, `src/KnowbaseItem.php`, `css/legacy/includes/_styles.scss`, `public/fanaone-ui-fixes.css` | Targeted RTL alignment for overview cards, article title/content and legacy KB helpers | Public / authenticated search, article findability, empty states, mixed Persian/English content |
| Self-service | `templates/pages/self-service/home.html.twig` | Optional native quick-start guide plus shared typography/focus rules | Confirm clarity of guide, actual menu labels and service catalog navigation |
| Administration | `templates/pages/admin/*` | Shared search and actions | Rule creation, event logs, role management |
| Setup and notifications | `templates/pages/setup/*`, `templates/components/messages_after_redirect_toasts.html.twig` | Actionable feedback and persistent warnings | Test configuration failures, recovery instructions |
| Account profiles & permissions | `templates/layout/parts/user_header.html.twig`, `profile_selector.html.twig` | Global navigation | Validate multiple profiles/entities and permission boundaries |
| Login and recovery | `templates/pages/login.html.twig`, `public/css/golpakhsh-overrides.css` | Mostly deliberately unchanged to preserve branding | Failed sign-in, password recovery, 320px, keyboard and reduced motion |
| SMS plugin | `plugins/fanaonesms/*` | Shared styling only where GLPI templates used | Draft/read/send/error/retry and relevant access permissions |
| Formcreator | `plugins/formcreator/*`, especially `plugins/formcreator/css/styles.scss` | Static scan found LTR physical alignment in form builder, catalog tiles and wizard; no speculative override applied | Validate rendered forms, catalog, wizard and drag-and-drop builder in RTL before scoped fixes |
| Genericobject | `plugins/genericobject/*` | Shared table/actions possibly inherited | Generic item creation, editing and custom fields |
| Persian date plugins | `plugins/persian_date/*`, `plugins/persian_datepicker/*`, `js/persian-ui.js` | Shared RTL field focus; other date logic unchanged | Jalali/Gregorian round trips, timezone, invalid values |
| Reports and marketplace extensions | `marketplace/reports/*`, `marketplace/gappessentials/*` | Limited/unknown | Rendering, exports and access to plugin-specific controls |

## Priority baseline journeys
1. New employee: locate "create ticket", submit correctly, find resulting ticket.
2. Agent: search and assign a ticket, change priority, post a follow-up.
3. Asset administrator: locate an asset, edit a field, save, verify persistence.
4. Manager: inspect status of request and approve where authorized.
5. User: search knowledge base, understand empty results and find a solution.
6. System administrator: recover from an invalid form and read an actionable warning.

For each use `ACCEPTANCE_TESTS.md`, record screenshots with personal information redacted, errors, click count, completion time, and CES. Do not mark a module as fully accepted until a representative role has completed tests in staging.

## Engineering follow-up candidates
- Add field-level server-validation summary with link/focus to the exact invalid control.
- Make data-grid filters usable without opening secondary dialogs where roles allow.
- Provide consistent empty/loading/error states to all module listings.
- Extract override selectors and date-picker standards into tokenized components.
- Offer first-use contextual onboarding for self-service users.
- Review desktop dashboard density and table layout at 1280×720 and 1920×1080.
- Consolidate legacy custom CSS with explicit specificity and visual regression snapshots.
