# Backup and Recovery Strategy

## Document Control

| Field | Details |
|---|---|
| Project Name | Nepack Website |
| Project Type | Dynamic Industrial Automation Company Website with CMS |
| Technology Stack | HTML5, CSS3, Vanilla JavaScript, PHP 8.2, MySQL |
| Hosting Environment | Hostinger Shared Hosting |
| Development Environment | XAMPP |
| Document Type | Backup and Recovery Strategy |
| Document Status | Draft |
| Prepared For | Pre-Deployment Planning |
| Prepared By | Project Technical Team |
| Version | 1.0 |

## Revision History

| Version | Date | Author | Description |
|---|---|---|---|
| 1.0 | 2026-08-06 | Project Technical Team | Initial Backup and Recovery Strategy document |

## 1. Introduction

This document defines the backup, restore, and disaster recovery strategy for the Nepack Website, a production-ready Industrial Automation Company Website with CMS functionality.

The strategy covers all critical project assets, including the MySQL database, uploaded images, PDF documents, configuration files, and source code. It applies to both the local development environment using XAMPP and the production hosting environment on Hostinger Shared Hosting.

The purpose of this document is to ensure that the website can be restored reliably in the event of accidental deletion, database corruption, hosting failure, deployment error, security incident, or data loss.

## 2. Backup Objectives

The primary backup objectives are:

- Protect all business-critical website data.
- Ensure CMS content can be restored after accidental or technical failure.
- Preserve uploaded product images, gallery images, PDFs, and other media assets.
- Maintain recoverable copies of configuration and source code.
- Support restoration for both development and production environments.
- Reduce downtime during incidents.
- Provide a clear recovery approach before deployment.
- Establish retention, verification, and security expectations for backups.

The backup strategy should support the following recovery goals:

| Objective | Target |
|---|---|
| Recovery Point Objective | Restore to the most recent approved backup |
| Recovery Time Objective | Restore service within an acceptable business-defined timeframe |
| Data Integrity | Backups must be complete, consistent, and restorable |
| Environment Support | XAMPP and Hostinger Shared Hosting |
| Business Continuity | Website content and core functionality must be recoverable |

## 3. Backup Principles

The Nepack Website backup strategy follows these principles:

- Backups must include both database and file assets.
- Database backups alone are not sufficient because CMS uploads, product images, gallery images, and PDFs are stored outside the database.
- File backups alone are not sufficient because CMS content, user-entered data, metadata, and dynamic records are stored in MySQL.
- Backups must be taken before production deployment, major content updates, CMS changes, hosting changes, and application updates.
- Backup files must be stored separately from the live website wherever possible.
- Restore procedures must be periodically verified.
- Backup access must be limited to authorized personnel only.
- Backup retention must balance recovery needs, storage cost, and security risk.
- Production backups must be handled more strictly than local development backups.

## 4. Database Backup Strategy

The MySQL database is a critical asset for the Nepack Website. It may contain CMS-managed content, product information, page content, gallery metadata, PDF references, user/admin records, settings, and other dynamic website data.

The database backup strategy should include:

- Full database backups before deployment.
- Full database backups before major CMS or application updates.
- Regular production database backups based on website update frequency.
- Manual database backups before risky administrative changes.
- Separate storage of database backups from the live hosting account where possible.
- Clear naming conventions that include project name, environment, and backup date.
- Protection of database backups because they may contain sensitive operational or administrative information.

Database backups should capture:

- Database schema.
- Tables.
- CMS content.
- Product records.
- Gallery records.
- PDF/document references.
- Admin or system configuration records.
- Any lookup or master data required by the website.

Database restore planning should include:

- Confirming the target environment.
- Restoring the correct backup version.
- Validating table structure and records after restore.
- Confirming that website pages display expected dynamic content.
- Confirming that image and PDF references still match uploaded file locations.

## 5. Uploaded Files Backup Strategy

Uploaded files are essential for the website's business presentation and CMS functionality. These files must be backed up together with the database because the database may store references to file paths.

Uploaded file backups should include all media and document folders used by the website.

### Product Images

Product images represent industrial automation products, machinery, components, and service offerings.

The backup strategy should ensure:

- All product image folders are included.
- Original image names and folder structure are preserved.
- Images remain linked correctly to product records after restore.
- Backups are taken after bulk product uploads or product catalog updates.
- Deleted or replaced product images are recoverable within the defined retention period.

### Gallery Images

Gallery images may represent factory work, installations, panels, machinery, projects, events, or company infrastructure.

The backup strategy should ensure:

- Gallery upload folders are included in file backups.
- Folder hierarchy is preserved.
- Image references in CMS records are restorable.
- Gallery backups are synchronized with related database backups.
- Restored galleries are visually verified after recovery.

### PDFs

PDF files may include brochures, product catalogs, company profiles, certificates, datasheets, manuals, and downloadable documents.

The backup strategy should ensure:

- All uploaded PDF folders are included.
- Download paths remain valid after restore.
- PDF files are backed up after document updates.
- Important business documents are stored in an additional controlled location where appropriate.
- Restored PDFs are tested by opening or downloading them from the website.

## 6. Configuration Backup

Configuration files are required to reconnect the application to the correct environment after restore.

Configuration backups should include:

- Database connection configuration.
- Environment-specific settings.
- CMS configuration files.
- PHP application configuration.
- Hosting-related configuration files where applicable.
- Any routing, rewrite, or access-control configuration used by the website.

Configuration backup principles:

- Sensitive values must be protected.
- Production credentials must not be stored in insecure local folders.
- Configuration files should be backed up before changes.
- Local and production configuration values must be clearly separated.
- Restored configuration must be reviewed before bringing the site online.

Configuration backups should never be shared publicly or committed to an unsecured repository if they contain passwords, tokens, or hosting credentials.

## 7. Source Code Backup

Source code includes all PHP, HTML, CSS, JavaScript, templates, CMS logic, and project assets required to run the website.

The source code backup strategy should include:

- Maintaining a version-controlled copy of the project source code.
- Backing up source code before production deployment.
- Preserving stable release versions.
- Separating development changes from production-ready code.
- Keeping a copy of the deployed production version.
- Documenting which source code version is live in production.

Source code backups should cover:

- PHP backend files.
- Frontend files.
- CMS files.
- Static assets bundled with the application.
- Project documentation.
- Deployment-related configuration files.
- Any custom modules or reusable components.

Source code restoration should ensure that the restored application version matches the expected database structure and uploaded file references.

## 8. Local Development Backup

The local development environment uses XAMPP and is intended for development, testing, and pre-deployment validation.

Local backup scope should include:

- Local MySQL database.
- Project source code directory.
- Uploaded test images and PDFs.
- Local configuration files.
- Documentation files.

Local development backups should be taken:

- Before major code changes.
- Before database structure changes.
- Before CMS feature changes.
- Before replacing local data with production data.
- Before deployment preparation.

Local backup considerations:

- Local backups are not a replacement for production backups.
- Local database credentials must remain separate from production credentials.
- Production data copied locally should be handled securely.
- Local backups may be retained for a shorter duration than production backups.
- Developers should avoid mixing test uploads with production media unless clearly controlled.

## 9. Production Backup

Production hosting is on Hostinger Shared Hosting. Production backups must protect the live website and business content.

Production backup scope should include:

- Full MySQL database.
- All website files.
- Uploaded product images.
- Uploaded gallery images.
- Uploaded PDFs.
- CMS configuration.
- Source code currently deployed.
- Any hosting-level configuration required for operation.

Production backups should be taken:

- Before initial deployment.
- Before each production release.
- Before CMS structural changes.
- Before database changes.
- Before major content imports.
- After major content updates.
- On a regular recurring schedule based on business needs.

Production backup storage should follow these expectations:

- Keep at least one backup outside the live hosting file system.
- Avoid storing the only backup inside the same hosting account.
- Restrict backup access to authorized personnel.
- Label backups clearly by date, environment, and purpose.
- Retain known-good backups from major releases.

Hostinger-provided backup features may be used as part of the strategy, but they should not be the only recovery control. Project-managed backup copies should also be maintained where feasible.

## 10. Disaster Recovery Guidelines

Disaster recovery applies when normal restore activity is insufficient due to major failure, compromise, or service disruption.

Possible disaster scenarios include:

- Database corruption.
- Accidental deletion of CMS content.
- Deleted or overwritten uploads.
- Failed deployment.
- Website defacement.
- Hosting account issue.
- Malware or unauthorized file modification.
- Loss of configuration.
- Broken production release.
- Full hosting restoration requirement.

Disaster recovery response should follow these steps:

1. Identify the incident type and affected assets.
2. Prevent further changes to the affected environment.
3. Preserve evidence if a security incident is suspected.
4. Identify the most recent known-good backup.
5. Confirm whether database, files, configuration, or all assets must be restored.
6. Restore first in a controlled environment where possible.
7. Verify database integrity and file references.
8. Validate website pages, CMS functions, uploads, and downloads.
9. Restore production only after the recovery copy is confirmed.
10. Monitor the website after recovery.
11. Document the incident, root cause, recovery action, and preventive measures.

For security-related incidents, backups should be checked carefully before restore to avoid reintroducing compromised files.

## 11. Restore Verification

Backups are only useful if they can be restored successfully. Restore verification must be part of the backup strategy.

Restore verification should confirm:

- Database backup can be imported successfully.
- Tables and records are present.
- CMS pages display correctly.
- Product images load correctly.
- Gallery images load correctly.
- PDF files open or download correctly.
- Admin login and CMS functions work as expected.
- Configuration points to the correct environment.
- File permissions are appropriate for hosting.
- No broken links appear for restored media.
- Website frontend pages render correctly.
- PHP errors are not visible on production pages.

Verification should be performed:

- After initial backup setup.
- After major structural changes.
- Before production deployment.
- After any disaster recovery event.
- Periodically as part of operational readiness.

A backup should not be considered valid until restore verification has been completed at least once for the applicable environment.

## 12. Backup Retention Strategy

Backup retention defines how long backup copies are kept.

Recommended retention approach:

| Backup Type | Suggested Retention |
|---|---|
| Pre-deployment backup | Keep permanently or until replaced by a verified release baseline |
| Production database backup | Retain recent daily, weekly, and monthly copies based on storage availability |
| Production file backup | Retain with matching database backup versions |
| Major release backup | Retain as long-term rollback point |
| Local development backup | Retain short-term based on development needs |
| Incident recovery backup | Retain until incident review is complete |

Retention principles:

- Database and file backups from the same point in time should be retained together.
- Backups should be reviewed periodically to remove obsolete or unsafe copies.
- Important release backups should be clearly marked.
- Sensitive backups should not be retained longer than necessary.
- Retention should be adjusted as the website grows and business requirements mature.

## 13. Backup Security Considerations

Backups may contain sensitive information and must be protected.

Security requirements include:

- Restrict backup access to authorized personnel only.
- Store production database backups securely.
- Avoid exposing backup files in publicly accessible web directories.
- Protect backups containing credentials or administrative data.
- Use secure transfer methods when moving backups between systems.
- Do not share production backups through unsecured channels.
- Separate production credentials from local development credentials.
- Remove obsolete backups from public or temporary locations.
- Review backup storage permissions periodically.
- Treat configuration backups as sensitive assets.

Additional security considerations:

- Backup files should not be downloadable from the public website.
- Backup storage locations should be documented internally.
- Recovery personnel should know who owns backup access.
- Backups should be included in security review scope.

## 14. Future Scalability

As the Nepack Website grows, the backup and recovery strategy should evolve.

Future scalability considerations include:

- Automated backup scheduling through hosting or managed services.
- Offsite backup storage.
- Cloud-based backup repositories.
- Versioned object storage for uploads.
- Separate staging environment for restore testing.
- Backup monitoring and failure alerts.
- Formal disaster recovery drills.
- Defined recovery time and recovery point service levels.
- Role-based access control for backup management.
- Encryption of sensitive backup archives.
- Integration with CI/CD deployment release records.
- Migration planning if moving from shared hosting to VPS, cloud hosting, or managed database hosting.

The strategy should be reviewed whenever there are major changes to hosting, database design, CMS functionality, file storage, or deployment process.

## 15. Related Documents

This document should be maintained together with the following project documents:

- Database Documentation
- Deployment Documentation
- CMS Administration Documentation
- Security Guidelines
- Production Readiness Checklist
- Incident Response Documentation

The Deployment Documentation is currently planned as a future document and should reference this Backup and Recovery Strategy before production release.

## Approval Checklist

- [ ] Document Reviewed
- [ ] Technical Review Completed
- [ ] Scope Verified
- [ ] No Open Issues
- [ ] Approved for Next Phase

## Database Review Checklist

- [ ] Backup strategy covers all critical assets
- [ ] Recovery process documented
- [ ] Suitable for XAMPP
- [ ] Suitable for Hostinger Shared Hosting
- [ ] Supports future scalability

**End of Document**
