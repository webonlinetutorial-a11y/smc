# Logging Architecture

## Document Control

| Field | Details |
|---|---|
| Project Name | Nepack Website |
| Project Type | Dynamic Industrial Automation Company Website with CMS |
| Technology Stack | HTML5, CSS3, Vanilla JavaScript, PHP 8.2 OOP, MySQL |
| Web Server | Apache |
| Hosting Environment | Hostinger Shared Hosting |
| Development Environment | XAMPP |
| Document Type | Logging Architecture |
| Document Status | Draft |
| Prepared For | Pre-Implementation Planning |
| Prepared By | Project Technical Team |
| Version | 1.0 |

## Revision History

| Version | Date | Author | Description |
|---|---|---|---|
| 1.0 | 2026-08-06 | Project Technical Team | Initial Logging Architecture document |

## 1. Introduction

This document defines the logging architecture for the Nepack Website, a production-ready Industrial Automation Company Website with CMS functionality.

The website will use PHP 8.2 with an object-oriented backend, MySQL database, Apache web server, XAMPP for local development, and Hostinger Shared Hosting for production deployment.

The purpose of this document is to establish a consistent logging strategy before implementation. The strategy defines what events should be logged, where logs should be stored, how logs should be categorized, and how logs should support debugging, monitoring, auditing, incident investigation, and future maintenance.

## 2. Logging Objectives

The logging architecture is designed to:

- Support debugging during local development.
- Support production troubleshooting.
- Record important CMS administrative activities.
- Track authentication and authorization events.
- Support security monitoring and incident investigation.
- Capture file upload and file management failures.
- Capture database and application errors.
- Provide operational visibility without exposing sensitive data.
- Support future audit reporting.
- Remain practical for Hostinger Shared Hosting.
- Support future migration to centralized monitoring tools.

## 3. Logging Principles

The Nepack Website logging strategy follows these principles:

- Log events that help diagnose, monitor, audit, or secure the application.
- Avoid logging sensitive data such as passwords, tokens, session identifiers, and database credentials.
- Use consistent log categories and severity levels.
- Separate routine operational logs from security-relevant logs where practical.
- Ensure logs are protected from public access.
- Ensure logs do not interrupt normal user experience unless failure requires it.
- Capture enough context to investigate issues.
- Avoid excessive logging that harms performance or consumes hosting storage.
- Review logs during troubleshooting and after suspicious activity.
- Retain logs according to defined operational and storage requirements.

## 4. Log Categories

### Authentication Events

Authentication logs record login-related activity.

Conceptual events include:

- Successful admin login.
- Failed login attempt.
- Session expiration.
- Idle timeout.
- Logout.
- Temporary account lockout.
- Password change in future phases.
- Password reset request in future phases.

Authentication logs support account security, brute force detection, and incident investigation.

### Authorization Events

Authorization logs record attempts to access protected functionality.

Conceptual events include:

- Access denied due to insufficient permission.
- Attempted access to protected Admin Panel areas without valid session.
- Future role-based permission denial.
- Attempts to perform restricted actions.

Authorization logs support detection of privilege misuse and access-control issues.

### File Upload Events

File upload logs record upload and file management activity.

Conceptual events include:

- Successful image upload.
- Failed image upload.
- Successful PDF upload.
- Failed PDF upload.
- File replacement.
- File deletion.
- Invalid file type rejection.
- File size rejection.
- Corrupt file rejection.
- Storage or permission failure.

File upload logs support troubleshooting, security review, and media management.

### Database Events

Database logs record database-related failures and operational concerns.

Conceptual events include:

- Database connection failure.
- Database operation failure.
- Timeout or unavailable database.
- Data consistency issue.
- Failed CMS data save.
- Failed CMS data update.
- Failed CMS data delete.

Database logs should never expose credentials, raw sensitive queries, or confidential data.

### Validation Errors

Validation logs record invalid input where useful.

Conceptual events include:

- Repeated invalid form submissions.
- Suspicious input patterns.
- Invalid upload metadata.
- Repeated malformed requests.
- Invalid AJAX or future API payloads.

Routine validation failures do not always require logging. Suspicious or repeated failures should be logged for review.

### Application Errors

Application logs record expected and unexpected application-level problems.

Conceptual events include:

- Missing required application configuration.
- Invalid route handling.
- Missing CMS record.
- Failed business operation.
- Unexpected service failure.
- Unexpected exception captured by central error handling.

Application logs support technical diagnosis and maintenance.

### System Errors

System logs record hosting, filesystem, and runtime-level issues.

Conceptual events include:

- File permission failure.
- Missing storage directory.
- Disk storage limitation.
- Runtime configuration issue.
- Apache or PHP environment-related issues where visible to the application.
- Hosting-level restrictions affecting application behavior.

System logs support deployment review and hosting troubleshooting.

### Security Events

Security logs record events with potential security relevance.

Conceptual events include:

- Repeated failed login attempts.
- Temporary lockouts.
- Unauthorized access attempts.
- Suspicious upload attempts.
- CSRF validation failures.
- Session validation failures.
- Attempted access to restricted paths.
- Suspicious request patterns.

Security logs should be reviewed more carefully than routine operational logs.

### Admin Activities

Admin activity logs record important CMS changes.

Conceptual events include:

- Content creation.
- Content update.
- Content deletion.
- Product management actions.
- Brand management actions.
- Gallery management actions.
- Download management actions.
- Settings changes.
- User management actions in future phases.

Admin logs support accountability and operational traceability.

## 5. Log Levels

### INFO

`INFO` represents normal operational events.

Examples include:

- Successful login.
- Successful logout.
- Successful product update.
- Successful file upload.
- Routine CMS action completion.

INFO logs help track normal activity and support audit history.

### WARNING

`WARNING` represents unusual or recoverable conditions that may require attention.

Examples include:

- Failed login attempt.
- Invalid upload attempt.
- Validation pattern that appears suspicious.
- Missing optional file.
- Repeated user correction failure.
- Attempted access to a restricted area without sufficient permission.

WARNING logs help identify early signs of misuse, misconfiguration, or user friction.

### ERROR

`ERROR` represents failures that prevent a requested operation from completing.

Examples include:

- Database operation failure.
- File upload storage failure.
- File deletion failure.
- Application service failure.
- Failed CMS update.
- Unexpected but recoverable exception.

ERROR logs should be reviewed during troubleshooting.

### CRITICAL

`CRITICAL` represents severe failures that may affect application availability, security, or data integrity.

Examples include:

- Database unavailable.
- Repeated system-level failure.
- Major configuration failure.
- Suspected compromise.
- Failure affecting the Admin Panel.
- Data corruption risk.
- Backup or restore failure in future operational workflows.

CRITICAL logs should trigger prompt technical review.

## 6. Log Storage Strategy

Logs should be stored in a protected application logging location.

Conceptual storage strategy:

- Store application logs outside publicly accessible directories where possible.
- Use a dedicated logging directory such as the project-level logs area.
- Separate logs by category or purpose where practical.
- Keep development logs separate from production logs.
- Ensure logs are not downloadable through the public website.
- Ensure logs are included in operational review but not treated as public documentation.
- Avoid storing sensitive values in logs.
- Avoid long-term storage of unnecessary logs on shared hosting.

Retention should balance troubleshooting needs, audit requirements, storage limits, and privacy considerations.

Recommended conceptual retention:

| Log Type | Retention Approach |
|---|---|
| Development logs | Short-term retention for debugging |
| Application error logs | Retain long enough for troubleshooting and release review |
| Security logs | Retain longer for incident investigation |
| Admin activity logs | Retain according to business audit needs |
| Upload logs | Retain long enough to investigate media issues |
| Critical incident logs | Retain until incident review is complete |

## 7. Log Rotation Strategy

Log rotation prevents uncontrolled log growth.

Log rotation principles include:

- Limit individual log file size.
- Archive or replace older logs based on retention policy.
- Remove obsolete logs after review or retention expiry.
- Avoid allowing logs to consume shared hosting storage.
- Preserve security and critical incident logs long enough for investigation.
- Keep rotation practical for Hostinger Shared Hosting limitations.
- Review log growth during production monitoring.

Formal automated rotation may be introduced later, but the initial strategy should still define ownership and review responsibility.

## 8. Audit Logging

Audit logging records important administrative actions.

Audit logs should conceptually capture:

- Who performed the action.
- What action was performed.
- Which module was affected.
- Which record or resource was affected where safe.
- When the action occurred.
- Whether the action succeeded or failed.
- Relevant non-sensitive context.

### Login

Log successful login, failed login attempts, session expiry, idle timeout, temporary lockout, and logout.

### Logout

Log successful logout and forced logout caused by timeout or invalid session where applicable.

### Product CRUD

Log product creation, update, deletion, status changes, image replacement, and important product metadata changes.

### Brand CRUD

Log brand creation, update, deletion, logo replacement, and status changes.

### Gallery CRUD

Log gallery item creation, update, deletion, image upload, image replacement, and display status changes.

### Download Management

Log PDF upload, replacement, deletion, title or description updates, and publication status changes.

### User Management

Future user management audit logs should include user creation, status change, role change, password reset initiation, and account disabling.

### Settings Changes

Log changes to CMS settings, site-level settings, SEO configuration, contact settings, and other operational configuration controlled from the Admin Panel.

## 9. Error Correlation

Error correlation helps connect user-facing issues with internal logs.

Correlation strategy considerations:

- Assign a conceptual reference identifier to significant errors in future phases.
- Include the reference identifier in internal logs.
- Show a safe reference identifier to administrators or users where appropriate.
- Use correlation identifiers to connect application errors, AJAX failures, and security events.
- Avoid exposing sensitive technical details through correlation references.

Error correlation is especially useful for production troubleshooting and future support workflows.

## 10. Monitoring Guidelines

Monitoring should use logs to identify operational and security issues.

Monitoring guidelines include:

- Review authentication failures regularly.
- Review unauthorized access attempts.
- Review upload failures and rejected files.
- Review repeated validation failures.
- Review database error patterns.
- Review file system and permission errors.
- Review critical application failures promptly.
- Review Admin Panel activity after suspicious events.
- Review storage usage caused by logs.
- Review logs after each production deployment.

For Hostinger Shared Hosting, monitoring may initially rely on application logs, hosting panel information, and manual operational checks.

## 11. Privacy Considerations

Logs must respect privacy and data minimization principles.

Privacy considerations include:

- Do not log passwords.
- Do not log password hashes.
- Do not log full session identifiers.
- Do not log full remember-me or reset tokens.
- Do not log database credentials.
- Avoid logging unnecessary personal data.
- Avoid logging full file contents.
- Avoid logging confidential business information unless required for audit.
- Restrict log access to authorized technical personnel.
- Remove logs that are no longer needed based on retention policy.

Logs should provide diagnostic value without becoming a source of sensitive data exposure.

## 12. Performance Considerations

Logging must not degrade website performance.

Performance considerations include:

- Avoid excessive logging during normal public page views.
- Log important events rather than every minor operation.
- Keep log write operations lightweight.
- Avoid large log entries.
- Avoid logging full request payloads or file contents.
- Monitor log file growth.
- Disable verbose debug logging in production.
- Keep logging practical for shared hosting constraints.

The logging strategy should support troubleshooting without overloading storage or request processing.

## 13. Scalability Considerations

The logging architecture should support future growth.

Scalability considerations include:

- Future centralized logging.
- Future log dashboards.
- Future alerting for critical events.
- Future audit reports for admin activity.
- Future correlation IDs.
- Future security monitoring integration.
- Future separation of audit, application, and security logs.
- Future automated log rotation.
- Future integration with incident response workflows.
- Future migration to VPS or cloud hosting for stronger monitoring control.

The initial logging strategy should remain simple and practical while preserving a clear path for enterprise-level monitoring.

## 14. Related Documents

This document should be maintained together with the following project documents:

- Backend Architecture
- Security Architecture
- Error Handling Architecture
- File Upload Architecture
- 01_Backend_Architecture.md
- 04_Security_Architecture.md
- 05_Error_Handling_Architecture.md
- 06_File_Upload_Architecture.md
- Database Documentation
- Deployment Documentation
- Backup and Recovery Strategy

## Approval Checklist

- [ ] Document Reviewed
- [ ] Technical Review Completed
- [ ] Logging Strategy Verified
- [ ] Audit Requirements Verified
- [ ] Approved for Next Phase

**End of Document**
