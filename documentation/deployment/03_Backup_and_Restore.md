# Backup and Restore

## Document Control

| Field | Details |
|---|---|
| Project | Nepack Website |
| Document Title | Backup and Restore |
| Technology Stack | HTML5, CSS3, Vanilla JavaScript, PHP 8.2, MySQL |
| Development Environment | XAMPP Localhost |
| Production Environment | Hostinger Shared Hosting |
| Architecture Approach | Modular, CMS Based, Server Side Rendering, SEO Friendly |
| Document Status | Draft |
| Owner | DevOps Architecture |
| Last Updated | August 6, 2026 |

## Revision History

| Version | Date | Description | Author |
|---|---|---|---|
| 1.0 | August 6, 2026 | Initial Backup and Restore documentation | DevOps Architecture |

## 1. Introduction

This document defines the Backup and Restore strategy for the Nepack Website project.

The Nepack Website uses PHP 8.2, MySQL, server-side rendering, and a dynamic CMS architecture. The project includes source code, database content, uploaded product images, uploaded PDFs, gallery images, brand logos, SEO-related data, website settings, user accounts, contact records, and inquiry records.

This document explains how application data, uploaded files, configuration, documentation, and project source are protected and restored to support business continuity and disaster recovery.

## 2. Objectives

The Backup and Restore strategy is designed to achieve the following objectives:

- Protect project source code and documentation.
- Protect MySQL database content.
- Preserve CMS-managed content and settings.
- Preserve uploaded images, PDFs, gallery media, and brand logos.
- Preserve SEO metadata, user accounts, contact records, and inquiry records.
- Support recovery from accidental deletion, corruption, hosting failure, database failure, and configuration errors.
- Maintain rollback readiness for deployments.
- Reduce risk of data loss.
- Support production continuity on Hostinger Shared Hosting.
- Ensure backups can be verified and restored when required.

## 3. Backup Philosophy

### Data Protection

All critical project assets should be protected through backup planning. This includes source code, database data, uploaded files, configuration, and documentation.

### Business Continuity

Backups should support continued business operations after data loss, corruption, failed deployment, or hosting-related issues.

### Recovery Readiness

A backup is useful only if it can be restored. Backup planning must include restoration readiness and periodic validation.

### Version Preservation

Backups should preserve known stable project states, especially before production deployment, major CMS changes, database changes, media updates, and configuration changes.

### Minimal Data Loss

Backup planning should reduce the amount of data that may be lost during recovery. Dynamic CMS data, user accounts, inquiries, contacts, uploads, and SEO metadata require special attention because they may change after deployment.

## 4. Backup Scope

### Project Source Code

Project source code includes PHP files, frontend files, shared includes, backend logic, Admin Panel files, public pages, assets, and supporting project structure.

Source code should be protected through Git and release backups.

### Database

The MySQL database is a critical backup item.

Database backups should include CMS data, products, brands, categories, gallery records, downloads, SEO metadata, website settings, user accounts, contact records, inquiry records, and other approved dynamic data.

### Uploaded Images

Uploaded images include product images, gallery images, brand logos, page images, and other CMS-managed visual assets.

Compressed media files should be preserved because they represent approved production assets.

### Uploaded PDFs

Uploaded PDFs include product documents, catalogues, brochures, downloads, and other CMS-managed PDF files.

Optimized PDFs should be backed up together with their related database records.

### Configuration Files

Configuration files include environment settings, database connection references, URL settings, path settings, and other production-specific configuration values.

Configuration backups should be protected because they may contain sensitive information.

### Documentation

Project documentation should be backed up because it defines the approved architecture, testing strategy, deployment process, and maintenance model.

### Git Repository

The Git repository preserves source history, release points, and documentation changes.

Git should remain the primary version preservation mechanism for source-controlled files.

## 5. Backup Types

### Full Backup

A full backup captures the complete backup scope at a specific point in time.

Full backups are appropriate before production deployment, before major releases, before database changes, before large media updates, and when creating a known stable recovery point.

### Incremental Backup

An incremental backup captures changes since the previous backup.

Incremental backups are appropriate for frequently changing data such as CMS updates, inquiries, contact records, uploaded media, and recent database changes where supported by the backup process.

### Differential Backup

A differential backup captures changes since the last full backup.

Differential backups are appropriate when the project needs a balance between full backup size and simpler recovery compared with many incremental restore points.

## 6. Backup Frequency

### Source Code

Source code should be protected continuously through Git commits and backed up around release milestones.

Important changes should be committed before deployment, review, or major refactoring.

### Database

Database backups should be taken before deployment, before database structure changes, before major Admin Panel updates, and at regular intervals during production operation.

The database should receive higher backup attention because CMS content, SEO metadata, settings, users, contact records, and inquiry records may change over time.

### Uploads

Uploaded images and PDFs should be backed up before major media changes, before deployment, and at regular intervals during production operation.

Uploads should remain synchronized with related database records.

### Documentation

Documentation should be backed up when major architecture, testing, deployment, or operational documents are created or updated.

Documentation changes should be version controlled where practical.

## 7. Backup Storage Strategy

### Local Machine

The local development machine may store development backups, local database exports, project source copies, and documentation snapshots.

Local backups should not be the only backup location.

### External Storage

External storage may be used to protect backups from local machine failure.

External backups should be organized, labeled, and protected from unauthorized access.

### Cloud Storage

Cloud storage may provide off-device redundancy for source backups, database backups, media backups, and documentation archives.

Access to cloud backups should be controlled.

### Hostinger Backup

Hostinger backup capabilities may be used as part of the overall backup strategy.

Hosting provider backups should supplement, not replace, independent backups where critical business continuity is required.

### Redundancy Principles

Backup storage should follow redundancy principles:

- Keep more than one copy of critical backups.
- Avoid storing all backups in the same location.
- Protect sensitive backup content.
- Preserve known stable release backups.
- Ensure database and uploaded media backups remain aligned.

## 8. Restore Strategy

### Source Code

Source code restoration should use the approved Git repository state or release backup.

The restored source should match the intended release version.

### Database

Database restoration should use the selected database backup that matches the desired recovery point.

After restore, CMS content, products, brands, categories, gallery records, downloads, SEO metadata, settings, users, contact records, and inquiry records should be verified.

### Uploaded Media

Uploaded media restoration should restore images, PDFs, gallery files, product files, and brand logos corresponding to the restored database state.

Media and database records should remain synchronized.

### Configuration

Configuration restoration should restore the appropriate environment-specific values for production or local development.

Configuration should be verified carefully after restoration to avoid database connection errors, incorrect URLs, broken paths, or security exposure.

### Documentation

Documentation restoration should use version-controlled documentation or stored documentation backups.

Restored documentation should match the project state being recovered.

## 9. Disaster Recovery

### Database Failure

If database failure occurs, the recovery process should restore the most appropriate verified database backup.

After recovery, dynamic CMS pages, Admin Panel workflows, contact records, inquiry records, users, settings, SEO metadata, and relationships should be verified.

### File Corruption

If application files or uploaded files are corrupted, the recovery process should restore clean files from Git, release backups, or media backups.

Public pages, Admin Panel behavior, images, PDFs, and asset loading should be verified afterward.

### Hosting Failure

If hosting failure occurs, recovery should use available Hostinger recovery options and independent backups.

Critical backups should allow the website to be restored to a stable state if hosting data becomes unavailable.

### Accidental Deletion

If records or files are accidentally deleted, recovery should identify whether database records, uploaded files, or both need restoration.

The recovery action should avoid overwriting newer valid data unnecessarily.

### Configuration Errors

If configuration errors cause production failure, the recovery process should restore known working configuration values.

Database connectivity, URLs, file paths, SSL behavior, and protected areas should be verified after correction.

## 10. Backup Verification

### Backup Integrity

Backups should be checked for completeness, readability, and availability.

A backup should include all expected files or data for its backup category.

### Restore Validation

Restoration should be periodically validated in a safe environment where practical.

Validation confirms that backups can actually support recovery.

### Version Verification

Backups should be labeled or tracked so the project version, database state, media state, and documentation state can be understood during recovery.

Version verification helps prevent restoring mismatched source files, database records, and uploaded media.

## 11. Recovery Objectives

### Recovery Time Objective

Recovery Time Objective defines the acceptable time required to restore the website or a specific system capability after failure.

The project should conceptually define recovery expectations based on business impact, hosting capabilities, available backups, and operational needs.

### Recovery Point Objective

Recovery Point Objective defines the acceptable amount of data that may be lost during recovery.

For the Nepack Website, CMS content, inquiries, contact records, user accounts, SEO metadata, uploaded files, and website settings should be considered when assessing acceptable recovery points.

Exact SLA values are not defined in this document.

## 12. Security Considerations

Security considerations should reference the Security Documentation.

### Backup Encryption

Backups containing sensitive information should be protected conceptually through encryption or equivalent secure storage controls where available.

### Access Control

Backup access should be limited to authorized personnel.

Database backups, configuration files, user data, contact records, inquiry records, and credentials require strict access control.

### Backup Confidentiality

Backups should not be shared through unsecured channels.

Sensitive backup contents should be treated with the same confidentiality as production data.

### Secure Storage

Backup storage locations should be protected from unauthorized access, accidental deletion, and uncontrolled public exposure.

## 13. Maintenance Recommendations

### Periodic Backup Review

Backup coverage should be reviewed periodically to confirm that all critical project areas remain protected.

New modules, new upload types, new database tables, and new configuration files should be added to the backup scope when introduced.

### Restore Testing

Restore testing should be performed periodically where practical.

Restore validation helps confirm recovery readiness before an actual incident occurs.

### Storage Cleanup

Old backups should be reviewed and cleaned according to retention needs.

Cleanup should avoid deleting known stable release backups or required recovery points.

### Documentation Updates

Backup and restore documentation should be updated when hosting setup, database structure, upload handling, configuration strategy, or deployment process changes.

## 14. Related Documents

This Backup and Restore document should be used together with the following project documentation:

- Deployment Strategy
- Hostinger Deployment
- Database Backup Documentation
- Security Architecture
- Testing Documentation

## Approval Checklist

- [ ] Backup Strategy Reviewed
- [ ] Restore Workflow Verified
- [ ] Disaster Recovery Verified
- [ ] Ready for Production

**End of Document**
