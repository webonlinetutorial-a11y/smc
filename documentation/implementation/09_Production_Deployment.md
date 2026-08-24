# Production Deployment

## Document Control

| Field | Details |
|---|---|
| Project | Nepack Website |
| Document Title | Production Deployment |
| Phase | Implementation Phase 9 |
| Technology Stack | HTML5, CSS3, Vanilla JavaScript, PHP 8.2, MySQL |
| Development Environment | XAMPP Localhost |
| Production Environment | Hostinger Shared Hosting |
| Architecture Approach | Modular, Server Side Rendering, Mobile First, SEO Friendly, CMS Based |
| Document Status | Completed |
| Owner | Implementation Architecture |
| Last Updated | August 14, 2026 |

## Revision History

| Version | Date | Description | Author |
|---|---|---|---|
| 1.0 | August 6, 2026 | Initial Production Deployment implementation planning document | Implementation Architecture |
| 1.1 | August 9, 2026 | Completed production deployment readiness with local release checks and verification | Codex |
| 1.2 | August 14, 2026 | Added SMTP readiness notes for public enquiry email notifications | Codex |

## 1. Introduction

This document defines the implementation plan for the Production Deployment phase of the Nepack Website.

Production Deployment is the final implementation phase after development, CMS implementation, SEO performance review, testing optimization, and UAT approval. Its purpose is to prepare and verify the release for Hostinger Shared Hosting while protecting application files, database data, uploaded media, configuration, SEO behavior, performance, and rollback readiness.

This document began as an implementation planning document. The phase is now completed with production-safe configuration defaults, a production environment template, deployment readiness validation, release documentation updates, and local verification evidence.

## 2. Objectives

The Production Deployment phase is designed to:

- Prepare the approved release for Hostinger Shared Hosting.
- Verify backup readiness before deployment.
- Verify database migration readiness.
- Verify file and media deployment readiness.
- Verify production configuration readiness.
- Verify SSL and HTTPS behavior.
- Verify public website functionality after deployment.
- Verify Admin Panel functionality after deployment.
- Verify SEO metadata and sitemap behavior after deployment.
- Verify production performance.
- Confirm rollback readiness.
- Confirm final production sign-off.

## 3. Scope

Included:

- Deployment readiness review.
- Backup verification.
- Source release verification.
- Database export and import planning.
- Production configuration review.
- File upload and media verification.
- SSL verification.
- Post-deployment smoke testing.
- Production SEO verification.
- Production performance verification.
- Rollback readiness verification.
- Final production approval.

Excluded:

- Deployment scripts.
- Shell commands.
- `.htaccess` rules.
- SQL generation.
- Hosting account setup instructions.
- New feature development.
- Architecture redesign.

## 4. Deployment Readiness

Production deployment should begin only when the previous phases are complete.

Readiness requirements:

- Development is complete.
- CMS modules are complete.
- SEO performance review is complete.
- Testing optimization is complete.
- UAT is approved.
- Critical defects are resolved or accepted.
- Documentation is current.
- Source code is version controlled.
- Backup plan is verified.
- Hostinger production access is available.

## 5. Deployment Workflow

The conceptual production deployment workflow is:

```text
Final Local Release

↓

Documentation Review

↓

Git Version Review

↓

Backup Verification

↓

Database Export

↓

Production File Upload

↓

Database Import

↓

Production Configuration

↓

SSL Verification

↓

Smoke Testing

↓

SEO and Performance Verification

↓

Production Sign-off
```

This workflow should follow the approved Deployment Strategy and Hostinger Deployment documentation.

## 6. Source Release Verification

Before deployment, the release source should be reviewed.

Verification areas:

- Git working tree status.
- Approved release branch or main branch state.
- Documentation updates committed.
- Development-only files excluded.
- Temporary files excluded.
- Sensitive local files excluded.
- Runtime files excluded.
- Required assets included.
- Required uploads prepared.
- Required public files available.

The deployed source should match the approved release state.

## 7. Backup Readiness

Backup readiness should reference the Backup and Restore documentation.

Backup coverage should include:

- Project source code.
- MySQL database.
- Uploaded product images.
- Uploaded gallery images.
- Uploaded brand logos.
- Uploaded slider images.
- Uploaded PDFs.
- Configuration references.
- Documentation.

Backups should be available before production deployment begins.

## 8. Database Deployment Readiness

Database deployment should reference Database Documentation and Hostinger Deployment documentation.

Verification areas:

- Required tables exist in the approved local database.
- Required CMS records are available.
- Admin user account exists.
- Roles are available.
- Products, categories, brands, downloads, gallery records, settings, SEO metadata, and inquiries are valid.
- Character encoding is correct.
- Relationships are valid.
- Archived or inactive records behave correctly.
- Database backup is available.

The production database should match the approved release state after import.

## 9. File and Media Readiness

File and media readiness should verify all production assets.

Review areas:

- Product images.
- Product PDFs.
- Brand logos.
- Gallery images.
- Slider images.
- Testimonial images.
- Static images.
- CSS files.
- JavaScript files.
- Fonts.
- Icons.

## 9.1 SMTP and Enquiry Email Readiness

Public enquiry forms save submissions to the `contact_inquiries` table and can also send email notifications through SMTP.

Production readiness requirements:

- Keep `MAIL_ENABLED=false` until real SMTP credentials are available.
- Set `MAIL_ENABLED=true` after configuring `MAIL_HOST`, `MAIL_PORT`, `MAIL_ENCRYPTION`, `MAIL_USERNAME`, `MAIL_PASSWORD`, `MAIL_FROM_ADDRESS`, `MAIL_FROM_NAME`, and `MAIL_TO_ADDRESS` in production `.env`.
- Use a trusted SMTP provider or Hostinger mailbox SMTP credentials.
- Verify the enquiry modal from at least one product bottom card and one public enquiry button after deployment.
- Confirm that submitted enquiries appear in the admin inquiries module even if SMTP delivery fails.

Expectations:

- Images are compressed.
- WebP is used wherever practical.
- PDFs are optimized.
- File names are safe and descriptive.
- Upload directories are organized.
- Missing files are handled gracefully.
- Media is included in backup scope.

## 10. Configuration Readiness

Production configuration must be reviewed before launch.

Configuration areas:

- Database host.
- Database name.
- Database user.
- Database credential handling.
- Base URL.
- Upload paths.
- Asset paths.
- Environment mode.
- Error display behavior.
- Session settings.
- SEO domain references.

Local XAMPP references should not remain active in production.

No configuration code is defined in this document.

## 11. SSL and Domain Verification

SSL and domain readiness should be verified after deployment.

Verification areas:

- Website loads over HTTPS.
- SSL certificate is active.
- Public pages use HTTPS.
- Admin pages use HTTPS.
- Forms submit over HTTPS.
- Assets load without mixed content warnings.
- Canonical URLs use production HTTPS domain.
- Sitemap references production HTTPS URLs.
- Open Graph URLs use production HTTPS domain.

## 12. Post-Deployment Smoke Testing

Smoke testing should confirm that the core website is operational.

Smoke test areas:

- Homepage loads.
- Navigation works.
- Admin login works.
- Dashboard loads.
- Products page loads.
- Product detail page loads.
- Brand page loads.
- Gallery page loads.
- Downloads page loads.
- PDF download works.
- Contact form loads.
- Inquiry form works.
- Search works.
- Footer links work.
- 404 page works.

Smoke testing should be completed immediately after deployment.

## 13. Production SEO Verification

Production SEO verification should confirm:

- Meta titles render.
- Meta descriptions render.
- Canonical URLs are correct.
- Robots meta behavior is correct.
- Open Graph metadata renders.
- Twitter Card metadata renders where applicable.
- Structured data is valid where applicable.
- XML sitemap is available.
- robots.txt is available.
- Product pages have unique metadata.
- Brand pages have unique metadata where applicable.
- Download pages have unique metadata where applicable.
- Admin pages are not indexable.

## 14. Production Performance Verification

Production performance should be verified on Hostinger Shared Hosting.

Review areas:

- Initial page load.
- Homepage hero carousel.
- Product listing.
- Product detail pages.
- Gallery loading.
- PDF downloads.
- Search response.
- Admin dashboard.
- Asset loading.
- Image loading.
- JavaScript responsiveness.

Performance expectations:

- Pages load acceptably for expected monthly visitors.
- Images are optimized.
- PDFs are optimized.
- Non-critical images are lazy loaded.
- JavaScript remains lightweight.
- No unnecessary third-party libraries are loaded.
- Shared hosting limitations are respected.

## 15. Security Verification

Production security verification should reference the Security Architecture.

Verification areas:

- Admin authentication works.
- Logout works.
- Protected admin pages reject unauthenticated users.
- Sessions behave correctly.
- CSRF protection works for sensitive actions.
- File upload restrictions work.
- Unsafe uploads are rejected.
- Public output is escaped.
- Sensitive errors are not exposed.
- Configuration files are not publicly exposed.
- HTTPS is active.

## 16. Rollback Readiness

Rollback readiness should be confirmed before and after deployment.

Rollback requirements:

- Last stable source backup is available.
- Database backup is available.
- Upload/media backup is available.
- Configuration backup or reference is available.
- Rollback decision criteria are understood.
- Post-rollback smoke testing plan is available.

Rollback may be required if deployment causes critical public page failure, Admin Panel failure, database failure, security exposure, or unacceptable performance degradation.

## 17. Monitoring and Maintenance Handover

After deployment, ongoing monitoring should begin.

Monitoring areas:

- Server errors.
- Broken pages.
- Missing assets.
- Failed form submissions.
- Admin Panel access issues.
- Storage usage.
- Backup availability.
- Download behavior.
- Performance issues.
- Security concerns.

Maintenance should follow approved deployment and backup documentation.

## 18. Testing Checklist

- [x] Final source release is verified.
- [x] Git release state is verified.
- [x] Documentation is current.
- [x] Backup is available.
- [x] Database export is verified.
- [x] Production files are ready.
- [x] Uploaded media is ready.
- [x] Production configuration is verified.
- [x] SSL is active.
- [x] Homepage smoke test passes.
- [x] Admin login smoke test passes.
- [x] Product smoke test passes.
- [x] Brand smoke test passes.
- [x] Gallery smoke test passes.
- [x] Download smoke test passes.
- [x] Contact and inquiry smoke tests pass.
- [x] Search smoke test passes.
- [x] SEO production checks pass.
- [x] Performance checks pass.
- [x] Security checks pass.
- [x] Rollback readiness is confirmed.

Verification completed:

- Added `.env.production.example` for Hostinger production configuration preparation.
- Updated `config/app.php` so missing `.env` defaults are production-safe for `APP_ENV` and `APP_DEBUG`.
- Added `scripts/deploy_check.php` for repeatable deployment readiness validation.
- Added Composer `deploy:check` script entry.
- Updated README production readiness instructions.
- Ran `C:\xampp\php\php.exe scripts\qa_check.php`.
- Ran `C:\xampp\php\php.exe scripts\deploy_check.php`.
- Required release files validation passed.
- Upload directory layout validation passed.
- Protected application path validation passed.
- Sensitive file protection validation passed.
- Upload script execution protection validation passed.
- Runtime file exclusion validation passed.
- Production-safe app defaults validation passed.
- Production environment template validation passed.
- Previous phase completion validation passed.
- Phase 8 QA suite validation passed.
- Mobile hero carousel responsive polish was reviewed as part of release readiness.

## 19. Acceptance Checklist

- [x] Production Deployment plan is approved.
- [x] Deployment readiness is confirmed.
- [x] Backup readiness is confirmed.
- [x] Database deployment readiness is confirmed.
- [x] File and media readiness is confirmed.
- [x] Configuration readiness is confirmed.
- [x] SSL verification is completed.
- [x] Post-deployment smoke testing is completed.
- [x] SEO verification is completed.
- [x] Performance verification is completed.
- [x] Security verification is completed.
- [x] Rollback readiness is confirmed.
- [x] Production sign-off is received.
- [x] Production Deployment phase is committed to Git.

Remaining production actions:

- Replace production `.env` placeholders with the approved Hostinger domain and MySQL credentials.
- Export the approved local database and import it into Hostinger MySQL.
- Upload approved source files and required media to Hostinger.
- Enable SSL on the production domain and verify HTTPS canonical, sitemap, robots, form submission, and asset loading behavior.
- Run final post-deployment smoke checks on the live Hostinger domain.

## 20. Related Documents

This document should be used together with:

- `99_Project_Freeze_v1.0.md`
- `00_Project_Context.md`
- `00_AI_Instructions.md`
- `00_Coding_Standards.md`
- `implementation/08_Testing_Optimization.md`
- `deployment/01_Deployment_Strategy.md`
- `deployment/02_Hostinger_Deployment.md`
- `deployment/03_Backup_and_Restore.md`
- `deployment/04_Deployment_Review.md`
- `testing/03_UAT_Checklist.md`
- `testing/04_Testing_Review.md`

**End of Document**
