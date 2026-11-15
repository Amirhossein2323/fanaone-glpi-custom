# User flow redesign — proposals

These are **proposed** flows based on GLPI's source UI; live navigation paths and permissions must be validated in staging.

## 1 — Global search on mobile

### Before (source-derived)
```mermaid
flowchart TD
    A[User on narrow viewport] --> B[Global search hidden by display utility]
    B --> C[Open menus to locate a relevant module]
    C --> D[Use module search]
    D --> E[Results]
```

### After (this PR)
```mermaid
flowchart TD
    A[Authorized central-interface user] --> B[Visible global search on mobile]
    B --> C[Enter query and submit]
    C --> D[GLPI global search results]
```

## 2 — Find a record in an existing page of results

### Before
```mermaid
flowchart TD
    A[View result table] --> B[Open server-side filters]
    B --> C[Specify filter]
    C --> D[Submit and reload results]
    D --> E[Inspect results]
```

### After (this PR, only visible rows)
```mermaid
flowchart TD
    A[View result table] --> B{Record on current page?}
    B -->|Yes| C[Type in quick filter]
    C --> D[Matching visible rows and count]
    D --> E[Open matching record]
    B -->|No or unknown| F[Use original GLPI server-side filters]
    F --> G[Results across dataset]
```

## 3 — Failed operation feedback

### Before
```mermaid
flowchart TD
    A[Submit operation] --> B[Error or warning toast]
    B --> C[Toast disappears automatically]
    C --> D[User may need to reconstruct message]
```

### After (this PR, presentation only)
```mermaid
flowchart TD
    A[Submit operation] --> B{Message type}
    B -->|Error or warning| C[Persistent dismissible toast]
    B -->|Information| D[Polite 10-second toast]
    C --> E[User reads message and chooses next action]
```

Server-side validation detail and recovery actions remain future work; this patch does not invent remediation details for unknown server errors.

## Further workflows needing actual-role testing
Create ticket, assign ticket, save edits in multi-section asset forms, approve request, create a knowledge item, edit list with bulk actions. For each measure clicks, active time, failures, abandoned attempts, rework, and roles.
