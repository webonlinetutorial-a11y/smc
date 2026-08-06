# Deployment Strategy

## Document Control

| Field | Details |
|---|---|
| Project | Nepack Website |
| Document Title | Deployment Strategy |
| Technology Stack | HTML5, CSS3, Vanilla JavaScript, PHP 8.2, MySQL |
| Development Environment | XAMPP Localhost |
| Production Environment | Hostinger Shared Hosting |
| Server Environment | Apache |
| Architecture Approach | Modular, Server Side Rendering, SEO Friendly, Mobile First, CMS Based |
| Document Status | Draft |
| Owner | DevOps Architecture |
| Last Updated | August 6, 2026 |

## Revision History

| Version | Date | Description | Author |
|---|---|---|---|
| 1.0 | August 6, 2026 | Initial Deployment Strategy documentation | DevOps Architecture |

## 1. Introduction

This document defines the Deployment Strategy for the Nepack Website project.

The Nepack Website is developed locally using XAMPP and deployed to Hostinger Shared Hosting. The application uses PHP 8.2, MySQL, Apache, HTML5, CSS3, Vanilla JavaScript, server-side rendered pages, and a dynamic CMS architecture.

This document explains the conceptual deployment workflow from development through testing, internal review, UAT, production deployment, and ongoing maintenance.

## 2. Objectives

The Deployment Strategy is designed to achieve the following objectives:

- Define a predictable path from local development to production deployment.
- Maintain quality through testing and review before production release.
- Protect production stability during deployment.
- Support version-controlled releases using Git.
- Ensure database and file assets are verified before deployment.
- Maintain security for configuration, credentials, and file permissions.
- Ensure optimized assets are production-ready.
- Support rollback readiness.
- Align deployment with Hostinger Shared Hosting constraints.
- Preserve SEO-friendly server-side rendering behavior after release.

## 3. Deployment Philosophy

### Stability First

Production deployment should prioritize stability over speed. Only reviewed, tested, and approved changes should be deployed to the live Hostinger environment.

### Repeatable Deployments

Deployment activities should follow a consistent process. Repeatability reduces missed steps, configuration mistakes, broken files, and inconsistent production behavior.

### Version Control

The project should remain version controlled using Git. Production releases should be traceable to approved project versions.

### Rollback Readiness

Every production deployment should have a rollback path. Application files, database state, and uploaded assets should be protected through appropriate backup planning before release.

### Security

Deployment should protect sensitive configuration, credentials, Admin Panel access, upload directories, and server-side files.

Security Architecture should guide all deployment decisions.

### Performance

Deployment should ensure production assets are optimized, images are compressed, PDFs are optimized, and page rendering remains suitable for Hostinger Shared Hosting.

## 4. Deployment Lifecycle

The deployment lifecycle should follow a controlled progression:

Development

↓

Local Testing

↓

Internal Review

↓

UAT

↓

Production Deployment

↓

Maintenance

### Development

Development occurs locally using XAMPP. Features, pages, CMS workflows, frontend assets, backend logic, and database changes are prepared in the development environment.

### Local Testing

Local testing verifies functionality, rendering, database behavior, forms, Admin Panel workflows, assets, and basic security behavior before internal review.

### Internal Review

Internal review confirms that development output aligns with approved documentation, architecture, coding standards, frontend expectations, backend expectations, database design, and testing strategy.

### UAT

User Acceptance Testing confirms business readiness. UAT validates public website behavior, Admin Panel workflows, product management, downloads, gallery, contact, inquiry, SEO, responsive behavior, and client approval.

### Production Deployment

Production deployment moves the approved release to Hostinger Shared Hosting. Deployment should occur only after review, testing, backup verification, and approval.

### Maintenance

Maintenance includes monitoring, bug fixes, CMS updates, content changes, asset updates, security reviews, and future enhancements.

## 5. Environment Strategy

### Development Environment

The development environment is XAMPP Localhost.

It should be used for active development, early testing, database schema validation, CMS workflow checks, frontend rendering, and integration testing.

### Testing Environment

Testing may occur locally during the current phase. A separate staging environment may be introduced in the future if project needs increase.

Testing should reference the Testing Documentation and validate both technical and business requirements before production deployment.

### Production Environment

The production environment is Hostinger Shared Hosting running Apache, PHP 8.2, and MySQL.

Production should contain only approved, tested, production-ready application files, optimized assets, required uploaded files, and validated database content.

## 6. Version Control Strategy

### Git Workflow

The project should use Git to track source changes, documentation updates, and release history.

All production releases should be traceable to version-controlled changes.

### Main Branch

The main branch should represent stable, reviewed, and release-ready code.

Production deployment should be based on an approved main branch state or approved release state.

### Feature Branches

Feature branches should be used for isolated development of new functionality, fixes, or documentation changes where appropriate.

Feature branches should be reviewed before merging into the release-ready branch.

### Release Readiness

A release should be considered ready when implementation, testing, documentation checks, security review, performance review, and UAT approval are complete.

### Version Tagging

Version tagging should be used conceptually to identify approved release points.

Tags help support traceability, rollback readiness, and release documentation.

## 7. Release Management

### Release Preparation

Release preparation should confirm that all application files, frontend assets, backend logic, database updates, uploaded media, optimized PDFs, and documentation references are ready for production.

### Documentation Verification

Relevant planning, backend, database, frontend, testing, and deployment documentation should be reviewed before production deployment.

### Database Verification

Database structure, required records, CMS data, Admin Panel data, product records, brand records, gallery records, download records, SEO metadata, and settings should be verified before release.

### Backup Verification

Backups should be confirmed before production deployment.

Backup planning should include application files, database data, uploaded media, PDFs, and configuration references where applicable.

### Deployment Approval

Deployment should proceed only after internal approval and UAT sign-off.

Deployment approval should confirm that the release is ready for Hostinger production deployment.

## 8. Rollback Strategy

### Backup Availability

Rollback readiness depends on verified backups of production files, database, media uploads, PDF files, and configuration references.

Backups should be available before deployment begins.

### Rollback Decision

A rollback may be required if production deployment causes critical errors, data issues, broken public pages, Admin Panel failure, security exposure, or unacceptable performance degradation.

### Recovery Process

Recovery should restore the last known stable application state, database state, uploaded media state, and required configuration state.

The recovery approach should match the approved backup and hosting capabilities.

### Verification

After rollback, the website should be verified through smoke testing, Admin Panel access checks, key public page checks, database connection checks, asset checks, and form workflow checks.

## 9. Security Considerations

Security considerations should reference the Security Architecture.

### Secure Deployment

Only approved files should be deployed to production. Development-only files, temporary files, unnecessary documentation exports, or sensitive local files should not be exposed publicly.

### Configuration Protection

Configuration files should be protected from public access and should follow the approved backend and security architecture.

### Credential Handling

Database credentials, admin credentials, and production secrets should not be exposed in public files, frontend scripts, version history, or shared documentation.

### File Permissions

File and directory permissions should support the principle of least privilege.

Upload directories should allow required CMS operations without allowing unsafe execution or unauthorized access.

## 10. Performance Considerations

### Optimized Assets

Production assets should be reviewed for size, duplication, and loading impact before deployment.

CSS, JavaScript, images, fonts, icons, and documents should follow the approved Asset Loading Strategy.

### Compressed Images

Images should be compressed before upload.

WebP should be used wherever practical, and non-critical images should support lazy loading.

### Optimized PDFs

PDF files should be optimized before upload to protect bandwidth and download performance.

This is especially important because estimated monthly downloads are approximately 500 MB.

### Cache Readiness

Production assets should be cache friendly and versioned where appropriate to prevent stale assets after deployment.

### Shared Hosting Limitations

Deployment should remain suitable for Hostinger Shared Hosting and expected average monthly visitors of 500 to 1000.

The project should avoid unnecessary heavy processing, oversized assets, inefficient database queries, and excessive third-party dependencies.

## 11. Risk Management

| Risk | Impact | Mitigation |
|---|---|---|
| Missing production backup | High | Verify file, database, media, and configuration backups before deployment |
| Database mismatch between local and production | High | Validate schema, required records, CMS data, and migration readiness before release |
| Broken uploaded media paths | Medium | Verify images, PDFs, gallery files, and brand logos after deployment |
| Unoptimized hero carousel images | High | Confirm compression and loading behavior before release |
| Incorrect production configuration | High | Review environment-specific settings before deployment |
| Exposed sensitive files | High | Ensure only approved production files are deployed |
| SEO metadata missing after deployment | Medium | Verify page titles, descriptions, canonical URLs, structured data, sitemap, and robots behavior |
| Admin Panel access issue | High | Verify authentication and protected routes after deployment |
| Performance degradation on shared hosting | Medium | Review assets, queries, page load behavior, and hosting constraints |
| Rollback delay | High | Confirm rollback plan and backup availability before deployment |

## 12. Success Criteria

A deployment is considered successful when:

- Approved release files are deployed.
- Production database is available and valid.
- Public pages render successfully.
- Admin Panel is accessible to authorized users.
- Product, Brand, Gallery, Download, Contact, Inquiry, and Search workflows function correctly.
- Images display correctly and are optimized.
- PDFs open or download correctly.
- SEO metadata renders correctly.
- Navigation and responsive layouts work across supported devices.
- No critical server errors are present.
- Performance is acceptable for Hostinger Shared Hosting.
- Security checks pass for protected areas and sensitive files.
- Smoke testing is completed after deployment.

## 13. Related Documents

This Deployment Strategy document should be used together with the following project documentation:

- Planning Documentation
- Database Documentation
- Backend Documentation
- Frontend Documentation
- Testing Documentation

## Approval Checklist

- [ ] Document Reviewed
- [ ] Deployment Lifecycle Verified
- [ ] Rollback Strategy Verified
- [ ] Ready for Hostinger Deployment

**End of Document**
