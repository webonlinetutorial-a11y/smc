# Hostinger Deployment

## Document Control

| Field | Details |
|---|---|
| Project | Nepack Website |
| Document Title | Hostinger Deployment |
| Technology Stack | HTML5, CSS3, Vanilla JavaScript, PHP 8.2, MySQL |
| Development Environment | XAMPP Localhost |
| Production Environment | Hostinger Shared Hosting |
| Architecture Approach | Modular, Server Side Rendering, SEO Friendly, Mobile First, CMS Based |
| Document Status | Draft |
| Owner | DevOps Architecture |
| Last Updated | August 6, 2026 |

## Revision History

| Version | Date | Description | Author |
|---|---|---|---|
| 1.0 | August 6, 2026 | Initial Hostinger Deployment documentation | DevOps Architecture |

## 1. Introduction

This document defines the Hostinger Deployment workflow for the Nepack Website project.

The Nepack Website is developed locally using XAMPP and deployed to Hostinger Shared Hosting. The project uses PHP 8.2, MySQL, HTML5, CSS3, Vanilla JavaScript, server-side rendered pages, a dynamic CMS architecture, optimized media, and an SEO-friendly mobile-first frontend.

This document explains how the project is prepared, migrated, verified, and maintained after deployment to Hostinger Shared Hosting.

## 2. Objectives

The Hostinger Deployment documentation is designed to:

- Define the deployment workflow from XAMPP Localhost to Hostinger Shared Hosting.
- Ensure deployment occurs only after testing, review, and approval.
- Support PHP 8.2 and MySQL production compatibility.
- Preserve dynamic CMS functionality after migration.
- Protect project files, configuration, uploaded assets, and database data.
- Ensure compressed images and optimized PDF downloads remain available.
- Confirm SSL-enabled production access.
- Verify public website, Admin Panel, forms, search, downloads, and media after deployment.
- Support performance expectations for 500 to 1000 average monthly visitors.
- Provide a maintainable post-deployment operating model.

## 3. Deployment Prerequisites

### Completed Development

Deployment should begin only after planned development work is complete for the approved release.

Public pages, Admin Panel workflows, CMS modules, database updates, assets, forms, search, SEO rendering, and responsive behavior should be ready for release.

### Successful Testing

Testing must be completed according to the approved Testing Documentation.

Functional testing, UI testing, database testing, security testing, performance testing, accessibility testing, SEO testing, and browser compatibility checks should be completed before deployment.

### UAT Approval

User Acceptance Testing should be completed and approved before production deployment.

Business stakeholders should confirm that the public website, Admin Panel, product management, brand management, gallery, downloads, contact, inquiry, and search workflows meet approved requirements.

### Documentation Approval

Relevant planning, backend, database, frontend, testing, and deployment documentation should be reviewed before deployment.

Documentation should reflect the approved release state.

### Backup Availability

Backups should be available before migration and deployment.

Backup coverage should include local project files, database export, uploaded media, PDFs, and relevant configuration references.

## 4. Hosting Environment Overview

### Shared Hosting

Hostinger Shared Hosting provides a managed hosting environment suitable for the approved expected traffic level of 500 to 1000 average monthly visitors.

The deployment strategy should remain lightweight and compatible with shared hosting constraints.

### Apache

The production server uses Apache for serving the website and handling PHP requests.

The project should remain compatible with Apache behavior on shared hosting.

### PHP 8.2

The production environment should be configured to use PHP 8.2.

PHP version compatibility should be verified before deployment approval.

### MySQL

The production database uses MySQL.

Database structure, character encoding, relationships, and CMS data should be verified after import.

### File Manager

Hostinger File Manager may be used for reviewing, uploading, replacing, or validating deployed files when appropriate.

### FTP/SFTP

FTP or SFTP may be used for file transfer depending on approved project access and hosting configuration.

Secure transfer methods should be preferred where available.

### SSL

SSL should be enabled so the website is accessible over HTTPS.

HTTPS should be verified after deployment.

### Domain

The production domain should point to the deployed website and should be used consistently for canonical URLs, SEO metadata, sitemap references, and public asset paths.

## 5. Deployment Workflow

The Hostinger deployment workflow should follow a controlled sequence:

Local Development

↓

Testing

↓

Final Review

↓

Project Backup

↓

Database Export

↓

File Upload

↓

Database Import

↓

Configuration Update

↓

Verification

↓

Production Ready

### Local Development

The website is developed and integrated locally using XAMPP.

### Testing

Testing verifies functionality, UI, database behavior, security, performance, compatibility, accessibility, SEO, and CMS workflows.

### Final Review

Final review confirms that documentation, testing, UAT, assets, database, configuration, and deployment readiness have been approved.

### Project Backup

A backup of the approved project state should be preserved before deployment.

### Database Export

The local database should be exported from the approved release state for migration to Hostinger MySQL.

### File Upload

Approved project files should be uploaded to the Hostinger hosting environment.

Only production-ready files should be deployed.

### Database Import

The approved database export should be imported into the Hostinger MySQL environment.

### Configuration Update

Environment-specific configuration should be updated for production values, including database connection details, URLs, file paths, and environment references.

### Verification

Post-deployment verification should confirm public website behavior, Admin Panel access, forms, media, search, downloads, SEO, SSL, and performance.

### Production Ready

The deployment is considered production ready after successful verification and approval.

## 6. File Deployment Strategy

### Public Files

Public files should include the files required to render the website, load assets, serve public pages, and support public functionality.

Only necessary production files should be publicly accessible.

### Protected Files

Protected files include configuration references, backend logic, sensitive includes, non-public storage, and any files that should not be directly accessed by visitors.

Protected files should follow the approved Backend Documentation and Security Architecture.

### Upload Directory

The upload directory should support CMS-managed images, PDFs, gallery files, brand logos, and product media.

Uploaded files should remain organized, optimized, and validated.

### Configuration Files

Configuration files should be environment-aware and protected from public exposure.

Production configuration should use Hostinger MySQL credentials, production URLs, and production-safe settings.

### Asset Organization

Assets should follow the approved frontend and asset loading documentation.

CSS, JavaScript, images, icons, fonts, PDFs, and other assets should remain organized, optimized, and cache friendly.

## 7. Database Deployment Strategy

Database deployment should reference the Database Documentation.

### Export

The local XAMPP MySQL database should be exported from the approved release state.

The export should include required tables, relationships, CMS data, settings, SEO metadata, product data, brand data, gallery data, downloads data, and required admin data.

### Import

The database should be imported into the Hostinger MySQL environment.

The imported database should match the approved release version.

### Verification

After import, database verification should confirm that public pages and Admin Panel workflows can access the required data correctly.

### Character Encoding

Character encoding should be verified to ensure content displays correctly across public pages, Admin Panel forms, metadata, product content, and downloadable references.

### Relationships

Database relationships should remain valid after migration.

Products, brands, categories, downloads, gallery records, users, SEO metadata, and settings should retain expected relationships.

## 8. Configuration Management

### Environment Configuration

Environment-specific values should be reviewed during deployment.

Local development references should not remain active in production.

### Database Configuration

Production database configuration should point to the Hostinger MySQL database.

Credentials should remain protected and should not be exposed through public files or frontend assets.

### URL Configuration

Production URLs should use the approved domain and HTTPS.

URL configuration should support canonical URLs, sitemap entries, public navigation, asset paths, Admin Panel paths, and media references.

### File Paths

File paths should be validated for the Hostinger directory structure.

Upload paths, asset paths, include paths, and protected paths should work correctly after deployment.

## 9. SSL Verification

SSL verification confirms that the deployed website is available through HTTPS.

The following should be conceptually verified:

- HTTPS loads the website correctly.
- The SSL certificate is active.
- Public pages are accessible over HTTPS.
- Admin Panel access uses HTTPS.
- Forms submit securely.
- Mixed content warnings are avoided.
- Canonical URLs use HTTPS.
- Sitemap and SEO metadata reference HTTPS URLs.

## 10. Post Deployment Verification

Post-deployment verification should confirm core business and technical workflows.

### Homepage

The homepage should load correctly with header, navigation, hero carousel, content sections, CTA areas, assets, and footer.

### Navigation

Primary navigation, mobile navigation, dropdowns where applicable, breadcrumbs, and footer links should route correctly.

### Products

Product listings, product details, product images, product PDFs, categories, brands, and product inquiry paths should work correctly.

### Downloads

Download listings, PDF links, optimized PDF files, and download counter behavior should work correctly.

### Gallery

Gallery images, thumbnails, layout, interactions, and CMS-managed gallery content should display correctly.

### Contact Form

The contact form should render, validate, submit, and display success or error messages correctly.

### Search

Search should return relevant results, handle no-result states, and remain performant.

### Admin Panel

The Admin Panel should load correctly and provide access to approved CMS workflows for authorized users.

### Login

Admin login, logout, protected route behavior, and invalid credential handling should work correctly.

## 11. Performance Verification

### Images

Images should be compressed, properly displayed, and loaded efficiently.

Hero carousel images, product images, gallery images, and brand logos should be reviewed after deployment.

### PDFs

PDFs should be optimized, downloadable, and accessible through approved public workflows.

### Asset Loading

CSS, JavaScript, fonts, icons, images, and PDFs should load correctly without unnecessary duplication.

### Responsive Layout

Responsive layout should be verified across mobile, tablet, laptop, and desktop viewports using the approved CSS Grid and Flexbox approach.

### Browser Compatibility

The website should be checked across Chrome, Firefox, Edge, and Safari where practical.

## 12. Security Verification

Security verification should reference the Security Architecture.

### Authentication

Admin authentication should work correctly and reject invalid credentials.

### Session

Session behavior should protect Admin Panel access and end correctly after logout.

### File Upload

File upload workflows should accept only approved file types and reject unsafe files.

### Permissions

File and directory permissions should protect sensitive files while allowing approved CMS operations.

### HTTPS

HTTPS should be active for public pages, Admin Panel access, form submissions, and production URLs.

## 13. Monitoring

### Error Monitoring

Production errors should be monitored after deployment.

Server-side errors, broken pages, failed forms, missing assets, and Admin Panel issues should be reviewed and resolved promptly.

### Storage Monitoring

Hosting storage usage should be monitored because the project includes images, PDFs, gallery uploads, product media, and CMS-managed files.

### Backup Monitoring

Backups should be reviewed regularly to ensure recoverability.

Backup coverage should include application files, database data, uploaded images, PDFs, and configuration references.

### Performance Monitoring

Page speed, asset loading, download performance, and database responsiveness should be monitored after launch.

Monitoring should consider the expected visitor range of 500 to 1000 monthly visitors.

## 14. Maintenance Recommendations

### Updates

Website updates should follow the approved deployment strategy, testing process, and documentation review expectations.

### Backups

Backups should be maintained before and after significant changes.

Database, media, PDFs, configuration, and application files should be included where applicable.

### Monitoring

Monitoring should continue after deployment to identify errors, storage growth, performance issues, and security concerns.

### Documentation Updates

Documentation should be updated when deployment behavior, hosting configuration, database structure, file organization, or major workflows change.

## 15. Related Documents

This Hostinger Deployment document should be used together with the following project documentation:

- Deployment Strategy
- Backup and Recovery
- Backend Documentation
- Database Documentation
- Testing Documentation

## Approval Checklist

- [ ] Deployment Process Reviewed
- [ ] Database Strategy Verified
- [ ] Security Verified
- [ ] Production Ready

**End of Document**
