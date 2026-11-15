# Public repository: tracked runtime secrets — incident response

**Date observed:** 2026-11-15. **Priority:** urgent. Sensitive-looking runtime paths were present on the public `main` branch, including `config/config_db.php`, backup, `config/glpicrypt.key` and editor swap files. Their contents were not copied into this document.

## What this PR changes
- Deletes tracked runtime configuration and encryption-key files **from the proposed new HEAD only**, keeping `config/.htaccess`.
- Ignores those files for future commits.
- Does not change the running server, its active database credentials, or Git history.
- Does not claim the incident is resolved.

## Operations required before merge/deployment
1. Restrict visibility of the repository promptly while investigating; pause automatic public deployments and distribution of release archives containing sensitive files.
2. Identify all copies in git history, release assets, packages and public mirrors using approved incident-response tooling; record exposed scope. Do **not** post credential or key values in tickets.
3. Backup the live application and database securely and verify restore procedures.
4. Rotate exposed database credentials and affected tokens in the source systems; update the production deployment configuration securely and validate connectivity. An exposed cryptographic key requires a GLPI-compatible migration/re-encryption plan; replacing it without migration can make encrypted configuration unreadable.
5. Arrange runtime injection/provisioning of `config/config_db.php` and the necessary `glpicrypt.key` *outside source control*. GLPI will fail if it cannot access required configuration. Ensure permissions prevent serving this folder publicly.
6. In a controlled deployment window, merge the sanitized repository state and deploy while retaining externally provisioned configuration files. Verify login, DB connectivity, integrations, mail/notifications and any encrypted secrets.
7. With a coordinated backup and stakeholder notification, remove secrets from **all** git history using an approved rewrite tool (e.g. git-filter-repo), account for force-push consequences and invalidate existing clones. Deleting in one commit does not erase prior versions.
8. Check GitHub secret-scanning alerts where available, enable push protection/branch review, and add CI detection for future accidental secrets.

## Operational caveats
If your deployment runs `git clean -fdx` or replaces the entire working tree, make sure runtime secrets are provisioned again before application startup. The removal PR is intentionally separate from UX code for independent review and rollback.

## Verification criteria
- [ ] Running instance obtains config/key from a secret store / out-of-repo path
- [ ] Git HEAD of merged code does not track runtime secret files
- [ ] Git history and release artifacts addressed
- [ ] Credentials rotated, encryption migrated safely where required
- [ ] Staging and production smoke tests passed
- [ ] Security owner signs off
