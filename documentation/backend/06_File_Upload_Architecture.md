# File Upload Architecture

## Document Control

| Field | Details |
|---|---|
| Project Name | Nepack Website |
| Project Type | Dynamic Industrial Automation Company Website with CMS |
| Technology Stack | HTML5, CSS3, Vanilla JavaScript, PHP 8.2 OOP, MySQL |
| Web Server | Apache |
| Hosting Environment | Hostinger Shared Hosting |
| Development Environment | XAMPP |
| Document Type | File Upload Architecture |
| Document Status | Draft |
| Prepared For | Pre-Implementation Planning |
| Prepared By | Project Technical Team |
| Version | 1.0 |

## Revision History

| Version | Date | Author | Description |
|---|---|---|---|
| 1.0 | 2026-08-06 | Project Technical Team | Initial File Upload Architecture document |

## 1. Introduction

This document defines the file upload architecture for the Nepack Website, a production-ready Industrial Automation Company Website with CMS functionality.

The website will manage multiple types of uploaded files, including product images, brand logos, gallery images, slider images, testimonial images, and downloadable PDF documents. The backend will be developed using PHP 8.2 with an object-oriented approach, MySQL database, Apache web server, XAMPP for local development, and Hostinger Shared Hosting for production deployment.

The purpose of this document is to establish a standardized upload strategy that all current and future modules must follow.

## 2. Objectives

The file upload architecture is designed to:

- Provide a consistent upload strategy across all CMS modules.
- Separate uploaded files from static frontend assets.
- Organize uploaded files by content type.
- Support secure upload validation.
- Protect the application from unsafe or executable file uploads.
- Maintain consistent database references to uploaded files.
- Support image optimization and future responsive image handling.
- Support PDF upload, replacement, deletion, and download workflows.
- Reduce broken file references during updates or deletion.
- Ensure uploaded files are included in backup and recovery planning.
- Remain compatible with XAMPP and Hostinger Shared Hosting.

## 3. Supported File Types

The system should support controlled upload handling for the following file categories.

### Product Images

Product images are used to represent industrial automation products, components, machines, panels, solutions, and related offerings.

Conceptual support includes:

- Uploading product display images.
- Replacing existing product images.
- Deleting unused product images.
- Associating images with product records.
- Supporting future thumbnails or optimized variants.

### Brand Logos

Brand logos represent supported brands, partners, manufacturers, or vendors.

Conceptual support includes:

- Uploading brand logo images.
- Replacing brand logos.
- Maintaining consistent logo display quality.
- Supporting transparent image formats where allowed.
- Optimizing logos for frontend performance.

### Gallery Images

Gallery images represent company facilities, projects, installations, panels, events, and industrial work.

Conceptual support includes:

- Uploading gallery images.
- Associating images with gallery records or categories.
- Supporting image captions or metadata through the database.
- Generating thumbnails where applicable.
- Optimizing images for public display.

### Slider Images

Slider images are used for homepage banners, carousel sections, promotional visuals, and major visual highlights.

Conceptual support includes:

- Uploading large banner-style images.
- Replacing active slider images.
- Maintaining display order through CMS metadata.
- Optimizing large images for page load performance.
- Supporting future responsive variants for different screen sizes.

### Testimonial Images

Testimonial images may represent customers, clients, projects, or related visual content.

Conceptual support includes:

- Uploading testimonial-related images.
- Associating images with testimonial records.
- Replacing outdated testimonial images.
- Deleting unused testimonial images.
- Supporting future thumbnail generation.

### PDF Documents

PDF documents are used for brochures, datasheets, catalogs, certificates, company profiles, manuals, and downloadable business documents.

Conceptual support includes:

- Uploading PDF documents.
- Replacing existing PDFs.
- Deleting outdated PDFs.
- Providing public download links where approved.
- Supporting future PDF version handling.

## 4. Upload Directory Strategy

Uploaded files should be stored under a dedicated `uploads/` directory and grouped by file category.

Conceptual folder organization:

```text
/uploads/
├── products/
├── brands/
├── gallery/
├── sliders/
├── testimonials/
└── pdfs/
```

Directory responsibilities:

- `uploads/products/` stores product-related images.
- `uploads/brands/` stores brand logo images.
- `uploads/gallery/` stores gallery images.
- `uploads/sliders/` stores slider or carousel images.
- `uploads/testimonials/` stores testimonial-related images.
- `uploads/pdfs/` stores downloadable PDF documents.

Upload directory principles:

- Uploaded files must be separated from static assets.
- Uploaded files must be separated from application source code.
- Each module should store files only in its assigned upload category.
- Folder names should remain stable to avoid broken references.
- Upload paths should be stored consistently in the database.
- Upload folders must be included in backup and recovery planning.
- Temporary upload handling, if required, should use a controlled temporary location.

## 5. File Naming Strategy

A consistent file naming strategy reduces conflicts, improves traceability, and prevents unsafe file names.

### Unique Filenames

Uploaded files should receive unique filenames before storage.

Unique filename principles:

- Each stored file name should be unique within its upload category.
- Generated names should prevent accidental overwrite.
- Names should remain stable after database association.
- File names should support future backup and restore operations.

### Slug-Based Naming

Where appropriate, file names may use a safe slug derived from the related record name.

Slug-based naming principles:

- Use readable and predictable naming where it does not create security risk.
- Normalize text to a safe format.
- Remove unsafe characters.
- Avoid spaces and special symbols.
- Keep names short enough for reliable filesystem use.
- Combine readable slugs with uniqueness controls.

### Collision Prevention

Collision prevention ensures that a new upload does not overwrite an existing file unintentionally.

Collision prevention principles:

- Check whether the target file name already exists.
- Use a uniqueness suffix, timestamp, identifier, or equivalent strategy.
- Avoid relying only on the original filename.
- Preserve the correct database reference after final name selection.

### Original Filename Handling

Original filenames should be treated as untrusted user input.

Original filename handling principles:

- Do not store unsafe original names directly as filesystem names.
- Remove path fragments and special characters.
- Avoid using original names for authorization or trust decisions.
- Store original display names only where there is a business need.
- Do not expose sensitive local file names in public output.

## 6. Image Processing Strategy

Image processing improves performance, consistency, and frontend display quality.

### Compression

Images should be compressed where practical to reduce page weight.

Compression principles:

- Reduce file size without unacceptable visual quality loss.
- Apply stronger optimization to large gallery and slider images.
- Preserve adequate quality for product inspection.
- Review compression settings as frontend requirements mature.

### WebP Generation

WebP generation may be introduced where supported.

WebP generation considerations:

- Generate WebP variants for public performance where applicable.
- Preserve original or fallback formats where browser compatibility requires it.
- Use WebP primarily for frontend delivery optimization.
- Keep database references and display logic consistent if multiple variants exist.

### Thumbnail Generation

Thumbnails may be generated for CMS listings and frontend previews.

Thumbnail generation considerations:

- Product thumbnails for listing pages.
- Gallery thumbnails for grid views.
- Brand logo display variants where required.
- Slider preview thumbnails for the Admin Panel.
- Testimonial thumbnails for compact displays.

### Image Optimization

Image optimization should support frontend performance and visual consistency.

Optimization principles:

- Remove unnecessary image weight.
- Resize oversized uploads where appropriate.
- Preserve aspect ratios where required by design.
- Avoid distortion of logos and product images.
- Optimize large visual areas such as sliders.
- Keep original quality requirements in mind for industrial product visuals.

### Responsive Image Considerations (Future)

Responsive image handling may be introduced in future phases.

Future considerations include:

- Multiple image sizes for desktop, tablet, and mobile.
- Different slider image variants by viewport.
- Optimized thumbnails for listing pages.
- Reduced mobile image payloads.
- Consistent metadata linking between original and generated variants.

## 7. PDF Management Strategy

PDF management must support reliable upload and download workflows.

### Upload

PDF upload strategy:

- Accept only approved PDF documents.
- Validate file type and size before storage.
- Store PDFs under the dedicated PDF upload directory.
- Associate stored PDF paths with CMS records.
- Ensure PDF titles and descriptions are managed through the database where applicable.

### Replace

PDF replacement strategy:

- Allow replacement of outdated documents.
- Ensure database references are updated consistently.
- Avoid breaking public download links unexpectedly.
- Preserve previous versions only if future version handling is introduced.
- Confirm replacement behavior before removing the old file.

### Delete

PDF deletion strategy:

- Delete only files that are no longer referenced.
- Prevent orphaned database references.
- Confirm destructive actions in the CMS workflow.
- Log deletion actions where appropriate.
- Ensure deleted files remain recoverable through backups within the retention period.

### Download

PDF download strategy:

- Public downloads should reference approved PDF records.
- Download links should not expose private storage paths unnecessarily.
- Missing PDFs should produce a safe not-found or unavailable response.
- Download access should respect future authorization rules if protected documents are introduced.

### Version Handling (Future)

Future PDF version handling may support:

- Multiple versions of a document.
- Active and archived versions.
- Version labels or release dates.
- Controlled replacement history.
- Rollback to previous PDF versions.
- Download analytics or audit tracking.

## 8. Validation Strategy

Validation must occur before files are permanently stored or associated with database records.

### MIME Validation

MIME validation principles:

- Validate declared file type.
- Verify actual file type where possible.
- Reject mismatched or suspicious files.
- Apply different MIME rules for images and PDFs.
- Do not rely only on browser-provided file type information.

### Extension Validation

Extension validation principles:

- Allow only approved extensions.
- Compare extension rules against the expected upload category.
- Reject double-extension or suspicious file names.
- Normalize extensions where appropriate.
- Avoid accepting executable script extensions.

### File Size Limits

File size validation principles:

- Define maximum file sizes per upload category.
- Use stricter limits for logos and thumbnails.
- Allow larger limits for approved brochures or catalogs where needed.
- Reject oversized files before permanent storage.
- Provide user-friendly messages explaining accepted limits.

### Image Dimensions

Image dimension validation may apply to visual categories.

Dimension considerations include:

- Minimum dimensions for slider images.
- Recommended dimensions for product images.
- Recommended dimensions for gallery images.
- Logo dimension and aspect ratio guidelines.
- Prevention of extremely large images that may affect performance.
- Preservation of design consistency.

### Corrupt File Handling

Corrupt file handling principles:

- Detect files that cannot be processed or read.
- Reject corrupt images or PDFs.
- Avoid storing broken files.
- Provide safe user-facing error messages.
- Log repeated corrupt upload attempts where appropriate.
- Ensure failed uploads do not create incomplete CMS records.

## 9. Storage Strategy

The storage strategy defines where and how uploaded files are retained.

Storage principles include:

- Store uploaded files in dedicated upload directories.
- Keep uploaded files separate from application code.
- Store only approved and validated files.
- Store database references using consistent relative paths.
- Keep public files accessible only where intended.
- Keep private or future restricted files in controlled locations.
- Include upload directories in backup and recovery processes.
- Avoid storing temporary files longer than necessary.
- Review storage usage periodically on shared hosting.

The storage strategy should remain compatible with Hostinger Shared Hosting while allowing future migration to VPS or cloud object storage.

## 10. File Replacement Policy

File replacement must protect content integrity and prevent broken references.

Replacement policy principles:

- Validate the new file before replacing the existing file.
- Update database references only after successful storage.
- Avoid deleting the old file until the replacement is confirmed.
- Preserve rollback ability through backups.
- Prevent replacement with unsupported or unsafe file types.
- Log important replacement actions where appropriate.
- Ensure frontend pages reference the correct updated file.

Replacement workflows should be designed to avoid partially completed updates.

## 11. File Deletion Policy

File deletion must be controlled and traceable.

Deletion policy principles:

- Confirm deletion intent for CMS users.
- Check whether a file is still referenced before deletion where possible.
- Remove or update related database references.
- Avoid orphaned records pointing to deleted files.
- Avoid orphaned files where cleanup is safe and controlled.
- Log deletion actions where appropriate.
- Do not delete files during failed validation or failed replacement workflows.
- Rely on backups for recovery of mistakenly deleted files.

Deletion policies must align with Backup and Recovery requirements.

## 12. Security Considerations

File upload security is a high-priority application concern.

Security considerations include:

- Treat all uploaded files as untrusted.
- Allow only approved file types.
- Validate MIME type and extension.
- Restrict file size.
- Avoid executable file uploads.
- Prevent path traversal through file names.
- Avoid direct use of unsafe original filenames.
- Store uploads outside application logic folders.
- Prevent uploaded files from executing as backend code.
- Restrict access to upload management features through authentication and authorization.
- Do not expose private server paths in error messages.
- Log suspicious upload activity.
- Include upload handling in security testing.
- Avoid accepting SVG or script-capable formats unless separately reviewed.
- Ensure file upload failures are handled safely.

## 13. Performance Considerations

Uploaded files can significantly affect website performance.

Performance considerations include:

- Compress uploaded images.
- Optimize large slider and gallery images.
- Generate thumbnails where useful.
- Avoid loading full-size images in listing views.
- Maintain reasonable file size limits.
- Review PDF sizes before publication.
- Avoid unnecessary duplicate files.
- Clean unused files where safe.
- Monitor storage usage on Hostinger Shared Hosting.
- Support future responsive image delivery.

File performance should be reviewed during frontend and production readiness testing.

## 14. Scalability Considerations

The upload architecture should support future growth.

Scalability considerations include:

- Additional upload categories can be added under the upload structure.
- Future responsive image variants can be introduced.
- Future cloud storage or object storage can be adopted.
- Future CDN integration may improve public media delivery.
- Future media library management may centralize uploaded assets.
- Future versioning may apply to PDFs and important documents.
- Future image processing services may be used after hosting upgrade.
- Future audit logging may track upload, replacement, and deletion actions.
- Future storage cleanup tools may identify orphaned files.

The architecture should remain simple for the current shared hosting environment while keeping a clean path for expansion.

## 15. Related Documents

This document should be maintained together with the following project documents:

- 01_Backend_Architecture.md
- 02_Folder_Architecture.md
- 04_Security_Architecture.md
- 05_Error_Handling_Architecture.md
- Database Documentation
- Backup and Recovery Strategy
- Deployment Documentation
- Frontend Documentation
- Testing Documentation

## Approval Checklist

- [ ] Document Reviewed
- [ ] Technical Review Completed
- [ ] Upload Strategy Verified
- [ ] Security Requirements Verified
- [ ] Approved for Next Phase

**End of Document**
