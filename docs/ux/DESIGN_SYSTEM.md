# FanaOne shared UX system — v0.1 (code tokens + UI specification)

This is a **repository-based design specification**. A complete Figma component library has not yet been created or linked. Do not label it as a delivered native Figma UI kit.

## Tokens
| Token | Value | Use |
|---|---|---|
| `--fanaone-ux-primary` | `#066a9b` | Primary interactive identity |
| `--fanaone-ux-primary-hover` | `#07577c` | Hover state |
| `--fanaone-ux-focus` | `#147fb5` | Keyboard focus outline |
| `--fanaone-ux-border` | `#d3e1e9` | Input and section borders |
| `--fanaone-ux-surface` | `#fff` | Panels |
| `--fanaone-ux-text` | `#19394b` | Content |
| `--fanaone-ux-radius` | `.65rem` | Inputs/cards/buttons |

Existing GLPI and brand themes retain authority outside the scoped UX layer. Validate all token contrast combinations against WCAG AA (at least 4.5:1 for normal text), including themes and disabled states.

## Component contracts
**Buttons:** use actual `button` for actions and `a` for navigation; label icon-only buttons; the primary action is visually stronger, destructive actions remain separate and confirmed; do not add unexpected submit actions.

**Forms:** associate labels with inputs; preserve native validation and data; minimum 2.5rem control height; expose clear hints and actionable server validation errors; no auto-submit on mere focus.

**Tables:** retain GLPI server-side sorts/filters and selection; optional local filter is explicitly scoped to current page; supply named selection checkboxes, column scope, and a clear-filter action; allow horizontal scrolling rather than clipping columns.

**Notifications:** informational status is polite and transient; error/warning messages persist until explicitly dismissed, with distinct visible header and close button; never rely only on color.

**Modals:** keep Bootstrap's focus handling, clear close label and bounded viewport width; verify escape-close, backdrop and nested-editor behavior in staging.

**Navigation:** visible focus indicator, keyboard skip link and mobile-accessible global search (authorized profile only).

## RTL / Persian
Respect `dir=rtl`, logical CSS properties, existing date-picker shims, Persian/Arabic ی/ي and ک/ك equivalence when matching currently rendered rows. Retain numbers and server request values without forced conversion.

## Figma handoff checklist
Create library pages: Foundations (color, typography, spacing, states), Buttons, Inputs and Selects, Tables and Pagination, Dialogs and Toasts, App Shell, RTL variants, responsive breakpoints; define interactive/disabled/loading/error states; link library version to implementation commit. Verify brand approval and actual components in Figma before claiming delivery.
