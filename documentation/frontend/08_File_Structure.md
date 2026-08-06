# File Structure

## Document Control

| Field | Details |
|---|---|
| Project Name | Nepack Website |
| Project Type | Dynamic Industrial Automation Company Website with CMS |
| Technology Stack | HTML5, CSS3, Vanilla JavaScript, PHP 8.2, MySQL |
| Server | Apache |
| Development Environment | XAMPP |
| Hosting Environment | Hostinger Shared Hosting |
| Architecture | Modular, Reusable Components, SEO Friendly, Mobile First, OOP PHP, Shared Hosting Compatible |
| Document Type | File Structure |
| Document Status | Draft |
| Prepared For | Project Organization Planning |
| Prepared By | Project Architecture Team |
| Version | 1.0 |

## Revision History

| Version | Date | Author | Description |
|---|---|---|---|
| 1.0 | 2026-08-06 | Project Architecture Team | Initial File Structure documentation |

## 1. Introduction

This document defines the official File Structure for the Nepack Website project.

It establishes the responsibilities, organization principles, naming standards, security rules, and scalability expectations for project folders and files. This document acts as the single source of truth for project organization during development and production deployment.

## 2. Objectives

The File Structure is designed to:

- Improve project maintainability.
- Support reusable frontend and backend components.
- Support modular CMS functionality.
- Separate public assets from protected application logic.
- Support secure configuration and upload handling.
- Improve performance through organized assets.
- Support SEO-friendly server-rendered pages.
- Remain compatible with XAMPP and Hostinger Shared Hosting.
- Allow future modules without restructuring the project.

## 3. Project Root Structure

### admin/

The `admin/` folder contains CMS and administrative interface entry points.

Responsibilities include:

- Admin dashboard access.
- CMS management screens.
- Login-related admin interfaces.
- Admin-only workflows.
- Protected content management areas.

Access to this folder must be protected through authentication and authorization.

### app/

The `app/` folder contains core backend application logic.

Responsibilities include:

- Controllers.
- Models.
- Services.
- Helpers.
- Middleware.
- Core application classes.
- Shared backend workflows.

This folder should not contain static frontend assets or public uploads.

### assets/

The `assets/` folder contains static frontend resources.

Responsibilities include:

- CSS files.
- JavaScript files.
- Static images.
- Fonts.
- Icons.
- Future video assets where applicable.

Static assets should be optimized and organized by type.

### config/

The `config/` folder contains application configuration.

Responsibilities include:

- Database configuration.
- Environment-specific settings.
- Application settings.
- Security-related configuration.

Configuration files may contain sensitive values and must be protected from public access.

### database/

The `database/` folder contains database-related project materials.

Responsibilities include:

- Database planning files.
- Migration planning.
- Seed planning.
- Backup references.
- Database documentation support.

Production database backups must not be publicly accessible.

### documentation/

The `documentation/` folder contains project documentation.

Responsibilities include:

- Planning documentation.
- Frontend documentation.
- Backend documentation.
- Database documentation.
- Design documentation.
- Deployment documentation.
- Testing documentation.

This folder is the official reference area for project documentation.

### includes/

The `includes/` folder contains reusable presentation and shared include files.

Responsibilities include:

- Header includes.
- Navbar includes.
- Footer includes.
- Breadcrumb includes.
- Page banner includes.
- Pagination includes.
- Admin sidebar includes.

Includes should improve reuse and consistency across pages.

### modules/

The `modules/` folder contains module-specific website and CMS functionality.

Responsibilities include:

- Product module.
- Category module.
- Brand module.
- Download module.
- Gallery module.
- Contact module.
- Search module.
- Future business modules.

Each module should remain focused on its own responsibility.

### public/

The `public/` folder represents public-facing entry resources where supported by hosting configuration.

Responsibilities include:

- Public website entry resources.
- Public-safe frontend resources.
- Public-facing route handling where applicable.

Hostinger Shared Hosting behavior should be confirmed during deployment planning.

### routes/

The `routes/` folder contains route organization materials.

Responsibilities include:

- Public route definitions.
- Admin route definitions.
- Future API route definitions.
- Request mapping references.

Routes should not contain business logic.

### storage/

The `storage/` folder contains runtime storage that should not be directly public.

Responsibilities include:

- Cache.
- Logs.
- Sessions.
- Temporary runtime files.

Storage should be protected and monitored for growth.

### uploads/

The `uploads/` folder contains CMS-managed uploaded files.

Responsibilities include:

- Product images.
- Brand logos.
- Gallery images.
- Slider images.
- PDF files.
- Temporary uploads.

Upload handling must follow the File Upload Architecture.

### vendor/ Future

The `vendor/` folder is reserved for future Composer dependency management if adopted.

Responsibilities may include:

- Composer-managed dependencies.
- Third-party PHP packages.
- Autoloading support.

This folder should not be introduced unless the project formally adopts Composer or external PHP dependencies.

## 4. Frontend Structure

### CSS

CSS files should be organized by purpose, such as global styles, layout styles, component styles, page-specific styles, and admin styles.

CSS organization should support:

- Maintainability.
- Reusability.
- Design System consistency.
- Responsive behavior.
- Performance optimization.

### JavaScript

JavaScript files should be organized by feature or interaction type.

JavaScript organization should support:

- Vanilla JavaScript behavior.
- Reusable interaction patterns.
- Public website interactions.
- Admin panel interactions.
- AJAX operations where required.
- Deferred or selective loading where appropriate.

### Images

Static images should be separated from CMS-uploaded images.

Image organization should support:

- Logos.
- Banners.
- Icons where not SVG-managed.
- Static visual assets.
- Optimized public page loading.

### Fonts

Fonts should be organized consistently and aligned with the Typography System.

Font organization should support:

- Montserrat.
- Cormorant.
- Future self-hosting if adopted.
- Browser caching.

### Icons

Icons should follow the Iconography document.

Icon organization should support:

- Lucide Icons.
- Font Awesome Brands for brand/social icons only.
- SVG preference.
- Consistent naming.

### Videos Future

Video assets may be introduced in future phases.

Video organization should support:

- Optimized file storage.
- Performance review.
- Lazy loading readiness.
- Clear separation from images and documents.

## 5. Backend Structure

### Controllers

Controllers handle request-level coordination.

Responsibilities include:

- Receiving routed requests.
- Validating request intent.
- Calling services.
- Preparing responses.
- Avoiding direct database logic.

### Models

Models represent structured application data.

Responsibilities include:

- Product data representation.
- Category data representation.
- Brand data representation.
- Gallery data representation.
- Download data representation.
- Admin-related entities.

### Services

Services contain business logic and workflows.

Responsibilities include:

- Product workflows.
- CMS operations.
- Upload coordination.
- Content management rules.
- Reusable business behavior.

### Helpers

Helpers contain small reusable utility functions or support behavior.

Responsibilities include:

- Formatting.
- Common UI support.
- Safe reusable utilities.
- Shared non-business helper logic.

Helpers should not become a dumping ground for business logic.

### Middleware

Middleware handles request-level checks.

Responsibilities include:

- Authentication checks.
- Authorization checks.
- Session validation.
- CSRF validation where applicable.
- Request access control.

### Core Classes

Core classes provide shared application infrastructure.

Responsibilities include:

- Configuration loading.
- Database connection abstraction.
- Routing support.
- Session management.
- Error handling support.
- Logging support.

## 6. Includes Structure

Reusable include files should support consistent page layout and reduce duplication.

### header

Used for common top-level page structure and shared header output.

### navbar

Used for public website navigation.

### footer

Used for shared footer content and footer navigation.

### breadcrumb

Used for page hierarchy and navigation context.

### page banner

Used for reusable inner page title or banner sections.

### sidebar Admin

Used for admin panel sidebar navigation.

### pagination

Used for product lists, gallery lists, download lists, search results, and admin tables.

Includes should remain presentation-focused and should not contain complex business logic.

## 7. Module Structure

Each module should be organized around its own domain responsibility.

### Products

Expected conceptual organization:

- Public product listing behavior.
- Product detail behavior.
- Admin product management.
- Product image handling.
- Product category association.
- Product search support.

### Categories

Expected conceptual organization:

- Category listing.
- Category management.
- Product grouping.
- Category-based navigation or filtering.

### Brands

Expected conceptual organization:

- Brand listing.
- Brand detail or reference.
- Brand logo handling.
- Admin brand management.

### Downloads

Expected conceptual organization:

- Public PDF listing.
- Download metadata.
- PDF upload, replace, and delete workflows.
- Admin download management.

### Gallery

Expected conceptual organization:

- Public gallery listing.
- Gallery filtering.
- Image preview.
- Admin gallery management.
- Gallery image handling.

### Contact

Expected conceptual organization:

- Contact page display.
- Contact form submission.
- Inquiry routing.
- Contact information rendering.

### Search

Expected conceptual organization:

- Public search interface.
- Search result rendering.
- No-results handling.
- Future AJAX search support.

Each module should use shared backend services, frontend components, and includes where applicable.

## 8. Upload Structure

Upload organization must follow the File Upload Architecture.

### Product Images

Product images should be stored in the product upload area and associated with product records.

### Brand Logos

Brand logos should be stored separately from product and gallery images.

### Gallery Images

Gallery images should be stored in the gallery upload area and support preview and filtering.

### Slider Images

Slider images should support homepage or banner carousel content.

### PDF Files

PDF files should be stored separately from images and associated with download records.

### Temporary Uploads

Temporary uploads should be used only for controlled upload workflows and cleaned when no longer needed.

Upload folders must be included in backup and recovery planning.

## 9. Storage Structure

Storage organization should align with the Backend Architecture.

### Cache

Cache storage may support future public content caching or temporary rendered data.

### Logs

Logs should store application, error, security, upload, and admin activity logs where applicable.

### Sessions

Session storage should support secure authenticated admin usage where applicable.

### Temporary Files

Temporary files should support short-lived processing and should not be retained unnecessarily.

Storage areas should not be publicly browsable.

## 10. Naming Conventions

### Folder Names

Folder names should be lowercase, descriptive, and consistent. Avoid spaces and vague names.

### File Names

File names should clearly describe purpose. Documentation files may use numeric prefixes where sequence matters.

### PHP Classes

PHP class names should be descriptive and aligned with object-oriented responsibility.

### CSS Files

CSS file names should reflect purpose, such as layout, component, page, or admin responsibility.

### JavaScript Files

JavaScript file names should reflect behavior, module, or interaction purpose.

### Images

Image names should be descriptive, normalized, and safe for web usage.

### PDFs

PDF file names should be descriptive, safe, and traceable to the related document or business purpose.

Naming should remain consistent across development, uploads, documentation, and deployment.

## 11. Security Considerations

Security considerations include:

- Protect configuration folders from public access.
- Protect storage folders from public access.
- Protect logs from public download.
- Keep database materials and backups out of public paths.
- Restrict admin access through authentication.
- Validate and protect uploaded files.
- Prevent uploaded files from executing as backend code.
- Avoid exposing internal folder paths in user-facing errors.
- Keep sensitive credentials out of public assets.
- Confirm Hostinger public root behavior during deployment.

## 12. Performance Considerations

Performance considerations include:

- Organize assets for browser caching.
- Separate static assets from uploaded media.
- Optimize product, gallery, slider, brand, and testimonial images.
- Support WebP and responsive image strategies where applicable.
- Keep JavaScript modular and loaded only where required.
- Support lazy loading readiness for image-heavy pages.
- Keep CSS organized for maintainability and future minification.
- Avoid duplicate assets across modules.
- Keep upload folders structured for backup and CDN readiness.

## 13. Future Expansion

The file structure should support future modules without major restructuring.

Future additions may include:

- Blog.
- Case studies.
- Careers.
- Inquiry management.
- Product comparison.
- Media library.
- Reports.
- User role management.
- API integrations.
- Multilingual content.
- Composer dependencies.
- Cloud storage or CDN integration.

New modules should follow the same module, naming, security, and asset organization standards.

## 14. Related Documents

This document should be maintained together with the following project documents:

- 01_Backend_Architecture.md
- 02_Folder_Architecture.md
- 06_File_Upload_Architecture.md
- 07_Frontend_Architecture.md
- 01_Design_System.md
- 07_Component_Library.md
- 11_UI_Patterns.md
- Deployment Documentation
- Backup and Recovery Strategy

## Approval Checklist

- [ ] Document Reviewed
- [ ] Folder Structure Verified
- [ ] Naming Standards Verified
- [ ] Security Reviewed
- [ ] Ready for Component Architecture

**End of Document**
