# UX acceptance & measurement — repeatable test protocol

**Status:** criteria and method defined; no measured before/after results yet.

## Success metrics
Record at least 10 representative completions per task and role on both the baseline and candidate, or document insufficient sample size. Run paired or comparable sessions in a staging environment and track median, p75 and failure rate.

- Click reduction = (baseline mean clicks - candidate mean clicks) / baseline mean clicks × 100%.
- Time reduction = (baseline mean seconds - candidate mean seconds) / baseline mean seconds × 100%.
- Target: at least **20–30% fewer clicks and shorter completion time** for agreed frequent tasks, not guaranteed by a code patch alone.
- CES: ask user \"How easy was completing this task?\" with a consistent 1–7 scale; report mean and distribution, not clicks as a substitute.
- Confusion: log hesitations, wrong menu selections, help requests, and unclear active states. Aim for zero *reported* occurrences in the agreed acceptance sample; do not claim a literal zero system-wide.

## Task scenarios
| Task | Start state | Success endpoint | Measures |
|---|---|---|---|
| Global lookup on phone | Authorized central GLPI user at width 375px | Open correct result | clicks/time/errors |
| Ticket lookup | Tickets listing | Locate known ticket | clicks/time/filter mistakes |
| Asset inspection | Assets listing | Open target asset | clicks/time |
| Save new ticket | New ticket form | Validation passes and record created | clicks/time/corrections |
| Correct invalid form | Server rejects submission | Fix field and save | recovery time/retries |
| Dismiss warning | Operation triggers warning | Read and explicitly dismiss | detection and comprehension |
| Keyboard table navigation | Search result list | Open a matching record via keyboard | keypresses/blocks |
| RTL date input | Asset or ticket form with Jalali UI | Valid date stored | failed attempts |

## Required functional checks
- [x] New JavaScript filter syntax and dependency-free smoke tests passed in GitHub Actions on 2026-11-15 (checks `43706407782` and `43706408230`)
- [ ] Twig templates compile without warnings in target GLPI version
- [ ] Existing `main` branch unaffected before approved merge
- [ ] Global mobile search is absent for unauthorized/non-central profiles
- [ ] Global search submits a normal query
- [ ] Current-page filter does not claim to search unrendered records
- [ ] Table selection, sorting, pagination and export still work
- [ ] AJAX-refreshed result tables allow filtering again
- [ ] Warning/error toast remains until dismissal
- [ ] Informational toast disappears after 10 seconds
- [ ] Form save, destructive action and CSRF token remain unchanged
- [ ] RTL flatpickr, Select2 and custom plugins still work
- [ ] Native invalid-field summary appears only on invalid submission and clears on editing
- [ ] Sticky action row does not obstruct form content or modal interaction
- [ ] Table sort controls work with keyboard and mouse, and `aria-sort` is accurate
- [ ] Keyboard focus visible; screen-reader labels verified
- [ ] Browser zoom 200%, reduced-motion preference, and 320px through 1440px checked
- [ ] Check contrast and reflow against WCAG 2.2 AA
- [ ] Open standalone `docs/ux/UI_KIT_PREVIEW.html` and verify keyboard focus, dialog, filter and example form across viewports
- [ ] Trigger unsaved asset-form warning on user edits, then verify normal submit and canceled navigation
- [ ] Run Playwright or browser regression checks against staging plus PHP/Twig tests

## Evidence log schema
`date | commit | role | task | viewport | baseline clicks | candidate clicks | baseline seconds | candidate seconds | failure | CES 1–7 | notes | screenshot (redacted)`

Do not mark these criteria passing until actual measurements and screenshots have been collected.
