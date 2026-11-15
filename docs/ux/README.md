# FanaOne / GLPI — UX improvement workstream

Date: 2026-11-15. Scope: shared UI and representative ticket, asset, search and global-navigation journeys.

## Deliverables
- [UX audit](UX_AUDIT.md): source-evidence-backed hypotheses, not a claim of completed user testing.
- [User flow diagrams](USER_FLOWS.md): Mermaid as-is/to-be task flows.
- [Design tokens and component standards](DESIGN_SYSTEM.md): implementation-ready textual UI kit; a native Figma file has **not** been created.
- [Acceptance tests](ACCEPTANCE_TESTS.md): reproducible baseline and post-change measurements.
- Front-end: `public/fanaone-ux.css`, `js/fanaone-ux.js`, and shared Twig template adjustments.
- Validation feedback for native invalid GLPI asset forms; sticky save/action row in long forms.
- Keyboard-accessible sorting buttons on sortable GLPI table headers.
- Dependency-free Node smoke tests: `node --test tests/ux/fanaone-ux.test.cjs`; automated GitHub Actions workflow `ux-smoke.yml`.

## Implementation boundaries
Only a first shared-component pass is delivered. No production screenshots, authenticated UX test, full-module review or controlled human study has been performed. Users must review and test the PR in staging before merging into `main`. GLPI full-dataset filters remain server-driven; the added quick filter operates on the **current rendered page only**.

## Security escalation
This repository is publicly visible and currently tracks `config/config_db.php`, `config/config_db.php.bak`, `config/glpicrypt.key` and editor swap files. Treat these as potentially sensitive. Do **not** reproduce their contents in reports. Immediately audit exposure, rotate affected database credentials/cryptographic secrets using an application-safe rotation plan, restrict repository access, and remove tracked secrets **including history with security review**; adding to `.gitignore` alone will not revoke exposure. Changing `glpicrypt.key` blindly could break existing encrypted settings. Security remediation is out of scope for this visual-only PR.

## Rollout
Deploy on a staging clone with sanitized data, test ticket creation/edit, assets, search, login, RTL date inputs, plugins, modals and navigation at 320/375/768/1024/1440px, then collect baseline and post-change metrics before enabling in production.
