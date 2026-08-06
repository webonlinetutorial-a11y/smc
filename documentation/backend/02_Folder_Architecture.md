# Folder Architecture

## Document Control

| Field | Details |
|---|---|
| Project Name | Nepack Website |
| Project Type | Dynamic Industrial Automation Company Website with CMS |
| Technology Stack | HTML5, CSS3, Vanilla JavaScript, PHP 8.2 OOP, MySQL |
| Web Server | Apache |
| Hosting Environment | Hostinger Shared Hosting |
| Development Environment | XAMPP |
| Document Type | Folder Architecture |
| Document Status | Draft |
| Prepared For | Pre-Implementation Planning |
| Prepared By | Project Technical Team |
| Version | 1.0 |

## Revision History

| Version | Date | Author | Description |
|---|---|---|---|
| 1.0 | 2026-08-06 | Project Technical Team | Initial Folder Architecture document |

## 1. Introduction

This document defines the official folder architecture for the Nepack Website, a production-ready Industrial Automation Company Website with CMS functionality.

The project will be developed using PHP 8.2 with an object-oriented backend, MySQL database, Apache web server, XAMPP for local development, and Hostinger Shared Hosting for production deployment.

The purpose of this document is to establish a clear and consistent folder structure before implementation begins. This structure will guide development, deployment, maintenance, documentation, backups, and future scalability.

## 2. Folder Architecture Objectives

The folder architecture is designed to:

- Separate public files from private application files.
- Organize backend, frontend, configuration, database, and uploaded assets clearly.
- Support CMS functionality and future application modules.
- Improve maintainability for developers and administrators.
- Reduce duplication and misplaced files.
- Support both XAMPP and Hostinger Shared Hosting environments.
- Keep sensitive files away from direct public access where possible.
- Provide predictable locations for assets, uploads, logs, documentation, and configuration.
- Allow future expansion without major restructuring.

## 3. Root Directory Structure

The following conceptual structure defines the planned root-level folder architecture for the Nepack Website:

```text
/
├── admin/
├── ajax/
├── api/
├── assets/
│   ├── css/
│   ├── js/
│   ├── images/
│   └── fonts/
├── config/
├── database/
├── documentation/
├── includes/
├── logs/
├── public/
├── routes/
├── storage/
├── uploads/
│   ├── products/
│   ├── gallery/
│   ├── brands/
│   ├── sliders/
│   ├── testimonials/
│   └── pdfs/
├── vendor/ (future)
└── index.php
```

This structure is conceptual and may be adjusted during implementation only when justified by technical, hosting, or security requirements.

## 4. Folder Responsibilities

### `/admin/`

The `admin` folder contains CMS-related backend interfaces and administrative entry points.

Responsibilities include:

- CMS dashboard pages.
- Admin login and logout interfaces.
- Product management screens.
- Gallery management screens.
- PDF or document management screens.
- Website content management screens.
- Admin-only operational pages.

This folder must be protected from unauthorized access.

### `/ajax/`

The `ajax` folder contains request endpoints intended for asynchronous browser interactions.

Responsibilities include:

- CMS form interactions.
- Dynamic admin actions.
- Lightweight background requests.
- Frontend dynamic content interactions where applicable.

This folder should only contain endpoint-level handlers and should delegate business logic to backend services.

### `/api/`

The `api` folder is reserved for structured application endpoints.

Responsibilities include:

- Future API endpoints.
- Internal or external data access endpoints.
- Structured response handling.
- Integration points for future systems.

For the initial website, this folder may remain minimal or reserved for future expansion.

### `/assets/`

The `assets` folder contains static frontend resources used by the public website and CMS interface.

Responsibilities include:

- CSS files.
- JavaScript files.
- Static images.
- Font files.
- Icons and other frontend resources if required.

Assets should be organized by type and should not contain sensitive backend files.

### `/assets/css/`

The `css` folder contains stylesheet files.

Responsibilities include:

- Public website styles.
- CMS interface styles.
- Responsive layout styles.
- Reusable visual styling.

### `/assets/js/`

The `js` folder contains JavaScript files.

Responsibilities include:

- Public website interactions.
- CMS interface interactions.
- Form behavior.
- Client-side enhancements.

### `/assets/images/`

The `images` folder contains static design images.

Responsibilities include:

- Logo files.
- Banner images.
- UI images.
- Static website graphics.
- Non-CMS-managed images.

CMS-uploaded images should be stored in the `uploads` directory, not in static assets.

### `/assets/fonts/`

The `fonts` folder contains font files used by the website.

Responsibilities include:

- Locally hosted font files.
- Font assets required by the frontend design.

### `/config/`

The `config` folder contains application configuration files.

Responsibilities include:

- Database configuration.
- Environment-specific settings.
- Application settings.
- Security-related configuration.
- CMS configuration.

Configuration files may contain sensitive data and should not be directly accessible from the public web where hosting allows.

### `/database/`

The `database` folder contains database-related project materials.

Responsibilities include:

- Database documentation support files.
- Migration planning materials.
- Seed data planning materials.
- Backup references.
- Database schema documentation.

This folder should not expose production database backups publicly.

### `/documentation/`

The `documentation` folder contains project documentation.

Responsibilities include:

- Planning documentation.
- Frontend documentation.
- Backend documentation.
- Database documentation.
- Deployment documentation.
- Testing documentation.
- Security and backup documentation.

This folder is the official location for project reference documents.

### `/includes/`

The `includes` folder contains reusable PHP include files and shared backend components.

Responsibilities include:

- Common layout includes.
- Shared backend initialization files.
- Reusable page fragments.
- Shared utility files.
- Common CMS includes.

Include files should be organized clearly and should not directly expose sensitive logic through public access.

### `/logs/`

The `logs` folder is reserved for application log files.

Responsibilities include:

- Application error logs.
- CMS activity logs.
- Security-related logs.
- Debug logs for controlled development use.

Logs should not be publicly accessible and should not store passwords or secret values.

### `/public/`

The `public` folder contains publicly accessible web entry resources where supported by hosting configuration.

Responsibilities include:

- Public entry points.
- Publicly accessible frontend files if the deployment model supports it.
- Website-facing resources that are safe to expose.

On shared hosting, the exact public root may depend on Hostinger configuration. The architecture should adapt while keeping private files protected.

### `/routes/`

The `routes` folder contains route definition materials.

Responsibilities include:

- Public route organization.
- Admin route organization.
- API route organization.
- Request mapping documentation or configuration.

Routes should define request paths conceptually and should not contain business logic.

### `/storage/`

The `storage` folder contains non-public runtime storage.

Responsibilities include:

- Cache files.
- Temporary runtime files.
- Session-related storage where applicable.
- Internal generated files.
- Non-public application storage.

This folder should remain separate from public uploads and static assets.

### `/uploads/`

The `uploads` folder contains CMS-managed uploaded files.

Responsibilities include:

- Product images.
- Gallery images.
- Brand logos.
- Slider images.
- Testimonial media.
- PDF documents.
- Other admin-uploaded media.

This folder must be included in backup and recovery planning.

### `/uploads/products/`

Stores CMS-managed product images.

### `/uploads/gallery/`

Stores CMS-managed gallery images.

### `/uploads/brands/`

Stores CMS-managed brand or partner images.

### `/uploads/sliders/`

Stores CMS-managed slider or carousel images.

### `/uploads/testimonials/`

Stores testimonial-related uploaded media where applicable.

### `/uploads/pdfs/`

Stores uploaded PDF files such as brochures, datasheets, catalogs, certificates, or company documents.

### `/vendor/ (future)`

The `vendor` folder is reserved for future dependency management if Composer or third-party PHP packages are introduced.

Responsibilities may include:

- Third-party PHP libraries.
- Composer-managed dependencies.
- Autoloading support.

This folder is not required unless dependency management is adopted in a future phase.

### `/index.php`

The `index.php` file is the main application entry point.

Responsibilities include:

- Receiving public website requests.
- Initializing application flow.
- Connecting routing and response handling conceptually.
- Acting as the primary entry point for the website.

The file should remain focused on application startup and should not contain large amounts of business logic.

## 5. Public vs Private Directories

The architecture separates public-facing files from private application files.

Public-facing directories may include:

- `/assets/`
- `/uploads/`
- `/public/`
- `/index.php`

Private or restricted directories should include:

- `/config/`
- `/database/`
- `/documentation/`
- `/includes/`
- `/logs/`
- `/routes/`
- `/storage/`
- `/vendor/`

Public directories contain files that browsers may request directly, such as CSS, JavaScript, images, fonts, and uploaded media.

Private directories contain application logic, configuration, logs, database materials, documentation, and internal runtime files. These should be protected from direct browser access wherever hosting configuration allows.

## 6. Upload Directory Strategy

The upload directory must be structured, predictable, and backup-friendly.

Upload strategy principles:

- CMS uploads must be separated from static design assets.
- Uploads must be grouped by content type.
- Folder names should be stable and descriptive.
- Product images must be stored separately from gallery images.
- PDFs must be stored separately from image files.
- Uploaded files should be validated before storage.
- Upload paths should be stored consistently in the database.
- Deleted or replaced uploads should be managed carefully.
- Upload folders must be included in backup and recovery planning.

Upload categories include:

- Products.
- Gallery.
- Brands.
- Sliders.
- Testimonials.
- PDFs.

The upload structure should support future categories without requiring major changes.

## 7. Asset Organization Standards

Static assets should be organized by type and purpose.

Asset organization standards include:

- CSS files should be placed under `/assets/css/`.
- JavaScript files should be placed under `/assets/js/`.
- Static images should be placed under `/assets/images/`.
- Font files should be placed under `/assets/fonts/`.
- CMS-uploaded media should not be mixed with static assets.
- Asset names should be descriptive and consistent.
- Unused assets should be removed during review.
- Production assets should be optimized where appropriate.

Static assets should support both public website pages and CMS interface pages while remaining organized and maintainable.

## 8. Include File Organization

Include files should be used for reusable backend and presentation components.

Include organization standards include:

- Shared header and footer includes should be grouped clearly.
- Common backend initialization includes should be separated from presentation includes.
- Reusable navigation components should be organized consistently.
- Admin includes should be separated from public website includes where practical.
- Includes should not contain uncontrolled business logic.
- Include files should not directly expose sensitive configuration values.
- Reusable logic should move into appropriate backend components when it becomes complex.

The includes folder should improve reuse without becoming an unstructured collection of unrelated files.

## 9. Configuration File Placement

Configuration files should be placed in the `/config/` directory.

Configuration placement standards include:

- Database configuration belongs in `/config/`.
- Environment settings belong in `/config/`.
- Application constants or settings belong in `/config/`.
- Production and local configuration should be clearly separated.
- Sensitive configuration values must be protected.
- Configuration should not be duplicated across multiple folders.
- Configuration files should be backed up securely.

Configuration files must be handled carefully because they may contain credentials or operational settings.

## 10. Logging Directory Guidelines

The `/logs/` directory is reserved for application logging.

Logging directory guidelines include:

- Logs should be separated by purpose where appropriate.
- Production logs should avoid exposing sensitive information.
- Log files should not be publicly downloadable.
- Log files should be reviewed during troubleshooting.
- Old logs should be cleaned based on retention requirements.
- Debug logs should not remain enabled unnecessarily in production.
- Security-related logs should be protected from modification or exposure.

If hosting restrictions make root-level logs unsuitable, an alternate protected storage location should be defined during deployment planning.

## 11. Naming Conventions

Consistent naming improves readability and maintainability.

Recommended naming conventions:

- Folder names should use lowercase letters.
- Folder names should be descriptive and short.
- Use plural names for collections such as `products`, `gallery`, `brands`, and `pdfs`.
- Avoid spaces in folder and file names.
- Use hyphens or underscores consistently when separators are required.
- Static asset names should describe their purpose.
- Uploaded file names should be normalized where appropriate.
- Documentation files should use numbered prefixes where sequence matters.
- Configuration file names should clearly identify their purpose.
- Avoid vague names such as `misc`, `new`, `old`, or `final`.

Naming conventions should be reviewed during implementation and maintained consistently across the project.

## 12. File Permission Considerations

File permissions must support secure operation on both XAMPP and Hostinger Shared Hosting.

Permission considerations include:

- Public assets should be readable by the web server.
- Upload folders must allow controlled write access where CMS upload features require it.
- Configuration files should have restricted access.
- Logs should be writable by the application where supported.
- Private folders should not be publicly browsable.
- Backup files should not be stored in publicly accessible folders.
- Writable folders should be limited to uploads, logs, cache, and runtime storage.
- Permissions should follow the principle of least privilege.

Final permission values should be confirmed during deployment based on Hostinger requirements.

## 13. Scalability Considerations

The folder architecture should support growth without major restructuring.

Scalability considerations include:

- New CMS modules should have predictable file locations.
- Upload categories can be added under `/uploads/`.
- Static assets can be expanded without mixing with uploads.
- Future API development can use `/api/`.
- Future dependency management can use `/vendor/`.
- Logs and storage can be expanded or moved if hosting changes.
- Documentation can grow by domain area.
- Route organization can expand as the website gains features.
- The structure should support future migration to VPS or cloud hosting.

The architecture should remain simple enough for shared hosting while avoiding short-term decisions that block long-term maintainability.

## 14. Hostinger Shared Hosting Compatibility

The folder architecture must remain compatible with Hostinger Shared Hosting.

Compatibility considerations include:

- Apache-based request handling.
- PHP 8.2 support.
- MySQL database integration.
- Shared hosting file permission limitations.
- Public web root behavior defined by Hostinger.
- Controlled placement of sensitive files.
- Practical logging within allowed writable paths.
- Upload folder write permissions.
- Backup-friendly folder organization.
- Avoiding dependency on server-level access that may not be available.

If Hostinger does not support a fully private application root in the selected plan, additional access restrictions should be applied during deployment planning.

## 15. Future Expansion

The folder architecture should support future features such as:

- Blog module.
- Case studies module.
- Careers module.
- Downloads module.
- Product catalog filtering.
- Lead inquiry management.
- Admin role management.
- Audit logging.
- API integrations.
- Multilingual content.
- Composer-based dependencies.
- Staging environment.
- Cloud or VPS migration.

Future expansion must respect the same principles of organization, separation, security, and maintainability.

## 16. Related Documents

This document should be maintained together with the following project documents:

- Planning Documentation
- Frontend Documentation
- Database Documentation
- 01_Backend_Architecture.md
- Backup and Recovery Strategy
- Deployment Documentation
- Security Documentation
- Testing Documentation

## Approval Checklist

- [ ] Document Reviewed
- [ ] Technical Review Completed
- [ ] Folder Structure Verified
- [ ] No Open Issues
- [ ] Approved for Next Phase

**End of Document**
