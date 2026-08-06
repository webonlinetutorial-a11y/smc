# Security Architecture

## Document Control

| Field | Details |
|---|---|
| Project Name | Nepack Website |
| Project Type | Dynamic Industrial Automation Company Website with CMS |
| Technology Stack | HTML5, CSS3, Vanilla JavaScript, PHP 8.2 OOP, MySQL |
| Web Server | Apache |
| Hosting Environment | Hostinger Shared Hosting |
| Development Environment | XAMPP |
| Document Type | Security Architecture |
| Document Status | Draft |
| Prepared For | Pre-Implementation Planning |
| Prepared By | Project Technical Team |
| Version | 1.0 |

## Revision History

| Version | Date | Author | Description |
|---|---|---|---|
| 1.0 | 2026-08-06 | Project Technical Team | Initial Security Architecture document |

## 1. Introduction

This document defines the application security architecture for the Nepack Website, a production-ready Industrial Automation Company Website with CMS functionality.

The project will be developed using PHP 8.2 with an object-oriented backend, MySQL database, Apache web server, XAMPP for local development, and Hostinger Shared Hosting for production deployment.

This document establishes the security standards that all current and future modules must follow. It covers authentication, authorization, sessions, validation, output protection, database interaction, file uploads, logging, backups, and future security enhancements.

## 2. Security Objectives

The security architecture is designed to:

- Protect the public website and CMS from unauthorized access.
- Protect administrative accounts and CMS functionality.
- Prevent common web application vulnerabilities.
- Protect business content, uploaded files, and database records.
- Ensure secure handling of images, PDFs, and CMS-managed data.
- Reduce the risk of account compromise.
- Reduce the risk of data leakage through errors, logs, backups, or misconfiguration.
- Support secure deployment on Hostinger Shared Hosting.
- Support secure local development using XAMPP.
- Establish reusable security standards for future modules.

## 3. Security Principles

The Nepack Website security architecture follows these principles:

- Security must be applied at every layer of the application.
- Authentication and authorization must be enforced server-side.
- All input must be treated as untrusted until validated.
- All dynamic output must be safely encoded before display.
- Database access must be controlled and protected from injection attacks.
- File uploads must be validated, restricted, and stored safely.
- Sessions must be protected from fixation, hijacking, and unauthorized reuse.
- Errors must not expose sensitive technical details.
- Logs and backups must not expose passwords, secrets, or confidential data.
- Access privileges should follow the principle of least privilege.
- Security must be reviewed before production deployment and after major changes.

## 4. Application Security Layers

The application security model is divided into multiple layers.

### Client Layer

The Client Layer includes the browser, public frontend pages, CMS interface, forms, JavaScript interactions, and user-submitted data.

Security responsibilities include:

- Providing user-friendly validation messages.
- Avoiding exposure of sensitive values in frontend code.
- Preventing reliance on client-side validation alone.
- Using safe form behavior.
- Avoiding unnecessary disclosure of internal paths, tokens, or configuration values.
- Ensuring CMS interfaces do not reveal restricted actions to unauthorized users where possible.

Client-side controls improve usability but must never replace server-side security checks.

### Server Layer

The Server Layer includes PHP application logic, routing, controllers, services, middleware, session handling, and configuration.

Security responsibilities include:

- Authenticating administrative users.
- Authorizing protected CMS routes.
- Validating all incoming requests.
- Protecting sessions.
- Enforcing CSRF protection for state-changing actions.
- Handling errors safely.
- Managing file uploads securely.
- Controlling access to internal backend files.
- Recording security-relevant events.
- Preventing sensitive configuration exposure.

The server layer is the primary enforcement point for application security.

### Database Layer

The Database Layer includes MySQL database records, credentials, CMS content, admin records, metadata, and structured application data.

Security responsibilities include:

- Preventing SQL injection.
- Restricting direct database access.
- Protecting database credentials.
- Applying least privilege database account usage.
- Avoiding storage of plain text passwords.
- Preserving integrity of CMS data.
- Supporting backup and recovery controls.
- Limiting exposure of sensitive administrative records.

The database should only be accessed through approved backend data access components.

### File Storage Layer

The File Storage Layer includes uploaded product images, gallery images, brand images, slider images, PDFs, logs, cache, and runtime storage.

Security responsibilities include:

- Validating uploaded file types.
- Restricting file sizes.
- Preventing executable files from being uploaded as media.
- Separating uploads from application code.
- Protecting logs and private storage from public access.
- Preserving safe file naming standards.
- Including uploads in backup and recovery planning.
- Avoiding storage of sensitive files in public directories.

## 5. Authentication Security

Authentication security is defined in detail in the Authentication Architecture document.

The security architecture requires:

- Secure admin login.
- Secure password hashing and verification.
- Session regeneration after successful login.
- Generic login failure messages.
- Failed login tracking.
- Temporary lockout after repeated failures.
- Secure logout.
- Protection of all CMS routes.
- Future support for password reset and multi-role access.

Authentication security must be reviewed before production deployment and whenever admin access functionality changes.

## 6. Authorization Strategy

Authorization controls what authenticated users are allowed to access.

The initial system supports the Admin role. Future architecture should support Role-Based Access Control for roles such as Super Admin, Manager, and Content Editor.

Authorization principles include:

- Authorization must be checked server-side.
- Protected routes must not rely only on hidden menus or disabled buttons.
- Admin-only modules must require authenticated admin access.
- Future permissions should be assigned by role.
- Sensitive modules such as settings and user management should be restricted to higher privilege roles in future phases.
- Unauthorized access attempts should be denied safely and logged where appropriate.

Authorization should apply to:

- Dashboard.
- Products.
- Categories.
- Brands.
- Gallery.
- Downloads.
- SEO.
- Settings.
- Users.

## 7. Session Security

Session security protects authenticated CMS activity.

### Session Regeneration

Session identifiers should be regenerated after successful login and during sensitive authentication events where applicable.

This reduces the risk of session fixation and unauthorized session reuse.

### Secure Session Cookies

Session cookies should be configured conceptually to reduce exposure.

Session cookie considerations include:

- Restricting access from client-side scripts where supported.
- Sending cookies only through secure transport in production where SSL is enabled.
- Limiting cookie scope to the required application path or domain.
- Using appropriate same-site behavior to reduce cross-site request risks.
- Avoiding storage of sensitive information directly inside cookies.

### Idle Timeout

Idle timeout should end sessions after a period of inactivity.

Idle timeout considerations include:

- Tracking last activity time.
- Invalidating sessions that exceed the idle limit.
- Redirecting inactive users to login.
- Balancing administrative usability with security risk.

### Session Expiry

Session expiry defines the maximum allowed session lifetime.

Session expiry considerations include:

- Expiring sessions after a defined duration.
- Requiring re-authentication after expiry.
- Destroying invalid or expired sessions.
- Applying stricter rules for administrative users than for public visitors.

## 8. Input Validation Strategy

All input must be considered untrusted.

Input validation should apply to:

- Login forms.
- CMS content forms.
- Product forms.
- Category forms.
- Brand forms.
- Gallery forms.
- Download/PDF forms.
- SEO fields.
- Settings forms.
- File uploads.
- Search fields.
- URL parameters.
- AJAX requests.
- API requests.

Validation principles include:

- Validate required fields.
- Validate data type and expected format.
- Validate length limits.
- Validate allowed values.
- Validate file type and size.
- Reject unexpected input.
- Normalize input where appropriate.
- Apply validation server-side even when client-side validation exists.
- Provide safe and user-friendly validation messages.

Validation should occur before business logic and database operations.

## 9. Output Encoding Strategy

Output encoding prevents unsafe content from being interpreted as executable code by browsers.

Output encoding should apply to:

- CMS-managed page content.
- Product names and descriptions.
- Category names.
- Brand names.
- Gallery titles and captions.
- PDF titles and descriptions.
- SEO metadata.
- Search results.
- User-facing messages.
- Admin interface output.

Output encoding principles include:

- Encode dynamic text before displaying it in HTML.
- Treat database content as untrusted when rendering.
- Apply context-appropriate encoding.
- Avoid rendering raw user-managed content unless explicitly trusted and sanitized.
- Ensure CMS content does not introduce unsafe scripts into public pages or admin screens.

## 10. CSRF Protection Strategy

Cross-Site Request Forgery protection is required for state-changing CMS actions.

CSRF protection should apply to:

- Login where appropriate.
- Logout where appropriate.
- Create actions.
- Update actions.
- Delete actions.
- File uploads.
- Settings changes.
- User management actions.
- SEO updates.

CSRF principles include:

- State-changing requests should require a valid anti-CSRF control.
- CSRF controls should be tied to the user's session.
- Invalid or missing CSRF controls should cause the request to be rejected.
- CSRF failures should be logged where appropriate.
- Public read-only pages generally do not require CSRF protection.

## 11. XSS Prevention Strategy

Cross-Site Scripting prevention protects users and administrators from malicious script execution.

XSS prevention principles include:

- Validate input before storage.
- Encode dynamic output before rendering.
- Sanitize rich text content if rich text editing is introduced.
- Avoid rendering unsafe HTML from CMS fields.
- Restrict uploaded files to safe types.
- Prevent SVG or script-capable uploads unless explicitly reviewed.
- Avoid exposing sensitive tokens in frontend scripts.
- Apply security headers conceptually where hosting supports them.
- Review CMS content fields for safe rendering.

XSS prevention must apply to both the public website and Admin Panel.

## 12. SQL Injection Prevention Strategy

SQL injection prevention protects MySQL data from unauthorized access, modification, or deletion.

SQL injection prevention principles include:

- Use controlled data access components.
- Avoid direct database interaction from presentation files.
- Use parameterized database operations conceptually.
- Validate input before database access.
- Avoid constructing database operations from untrusted raw input.
- Restrict database user privileges based on application needs.
- Handle database errors without exposing query details.
- Log database errors securely for technical review.

All database access must follow the Data Access Layer and repository principles defined in the Backend Architecture.

## 13. File Upload Security

File upload security is critical because the CMS allows media and PDF management.

### Images

Image upload security should include:

- Allowing only approved image types.
- Validating uploaded files before storage.
- Restricting image file size.
- Avoiding executable or script-capable uploads.
- Separating uploaded images from application code.
- Using controlled file names.
- Storing image paths consistently for CMS use.

### PDFs

PDF upload security should include:

- Allowing only approved PDF files.
- Validating file type before storage.
- Restricting PDF file size.
- Avoiding storage of unknown document types.
- Ensuring PDFs are stored in the correct upload category.
- Reviewing business-critical PDFs before publication where appropriate.

### MIME Validation

MIME validation should include:

- Checking the declared file type.
- Verifying the actual file type where possible.
- Rejecting files with mismatched type information.
- Avoiding reliance on file extension alone.
- Applying separate rules for images and PDFs.

### File Size Limits

File size limits should be defined for each upload category.

File size strategy should include:

- Maximum size for product images.
- Maximum size for gallery images.
- Maximum size for brand images.
- Maximum size for slider images.
- Maximum size for testimonial media.
- Maximum size for PDFs.
- User-friendly rejection messages for oversized files.
- Periodic review as hosting storage and business needs change.

### File Name Strategy

File names should be managed safely.

File name strategy should include:

- Avoiding direct use of unsafe original file names.
- Removing special characters where appropriate.
- Preventing path traversal patterns.
- Preventing overwriting existing files unintentionally.
- Maintaining traceability where needed.
- Using consistent naming standards across upload categories.

### Storage Location

Upload storage should be organized by category.

Storage location principles include:

- Store product images separately from gallery images.
- Store PDFs separately from images.
- Keep uploads separate from application source code.
- Avoid storing uploads in configuration, database, or logs folders.
- Ensure upload directories are included in backups.
- Prevent uploaded files from being executed as backend code.

## 14. Error Disclosure Policy

Error handling must avoid exposing sensitive technical information.

The error disclosure policy includes:

- Public users should see safe, generic error messages.
- CMS users should receive useful but non-sensitive error messages.
- Production errors should not expose stack traces, database details, file paths, credentials, or query information.
- Detailed technical errors should be recorded in protected logs.
- Validation errors should be clear and user-friendly.
- Security failures should not reveal whether accounts, files, or internal routes exist.
- Error behavior should be reviewed before deployment.

## 15. Security Headers (Conceptual)

Security headers can improve browser-side protection where hosting configuration supports them.

Conceptual security header goals include:

- Reducing risk of clickjacking.
- Reducing MIME sniffing risks.
- Supporting safer browser content handling.
- Controlling referrer information.
- Supporting transport security where SSL is active.
- Supporting content security policy planning in future phases.

Actual security header implementation should be defined during deployment planning and must remain compatible with Hostinger Shared Hosting.

## 16. Logging & Audit Security

Logging and audit records support troubleshooting and security review.

Security-relevant logs may include:

- Login success and failure.
- Logout.
- Account lockout.
- Unauthorized access attempts.
- CMS create, update, and delete actions.
- Upload success and failure.
- Configuration changes.
- Database errors.
- Application exceptions.
- Backup and restore events where applicable.

Logging security principles include:

- Logs must not contain passwords.
- Logs must not contain full secret tokens.
- Logs must not expose database credentials.
- Logs should be protected from public access.
- Logs should be reviewed during incidents.
- Logs should have retention limits.
- Logs should provide enough context for investigation without leaking sensitive data.

## 17. Security Monitoring

Security monitoring helps detect suspicious behavior and operational issues.

Monitoring considerations include:

- Review failed login patterns.
- Review repeated lockouts.
- Review unauthorized access attempts.
- Review unexpected upload failures.
- Review CMS changes made by administrators.
- Review database and application error patterns.
- Review suspicious file changes where feasible.
- Review hosting security notices.
- Monitor SSL certificate status where applicable.
- Monitor backup availability and restore readiness.

For shared hosting, monitoring may be limited, but available logs and hosting tools should be reviewed regularly.

## 18. Backup Security

Backups must be protected because they may contain database records, uploaded files, configuration, and administrative information.

Backup security principles include:

- Store backups outside public web directories.
- Restrict access to backup files.
- Protect database backups containing administrative records.
- Protect configuration backups containing credentials.
- Avoid sharing backups through unsecured channels.
- Remove obsolete backups from temporary locations.
- Retain backups according to the Backup and Recovery Strategy.
- Verify backups without exposing sensitive data.
- Review backup storage permissions.
- Treat production backups as confidential assets.

Backup security should align with the Backup and Recovery Strategy document.

## 19. Future Security Enhancements

Future security improvements may include:

- Multi-role authorization.
- Permission-level access control.
- Two-factor authentication.
- Password reset workflow.
- Account lockout management interface.
- Admin audit dashboard.
- Centralized logging.
- Security alerting.
- Malware scanning for uploaded files.
- File integrity monitoring.
- Content Security Policy refinement.
- Automated backup verification.
- Staging environment security checks.
- Vulnerability assessment before major releases.
- Migration to VPS or cloud hosting for stronger control.

Future enhancements should be evaluated based on business risk, hosting capability, and operational maturity.

## 20. Related Documents

This document should be maintained together with the following project documents:

- Database Documentation
- Backend Documentation
- Authentication Architecture
- 01_Backend_Architecture.md
- 02_Folder_Architecture.md
- 03_Authentication_Architecture.md
- Backup and Recovery Strategy
- Deployment Documentation
- Testing Documentation

## Approval Checklist

- [ ] Document Reviewed
- [ ] Technical Review Completed
- [ ] Security Requirements Verified
- [ ] Security Layers Verified
- [ ] Approved for Next Phase

**End of Document**
