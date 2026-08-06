# Error Handling Architecture

## Document Control

| Field | Details |
|---|---|
| Project Name | Nepack Website |
| Project Type | Dynamic Industrial Automation Company Website with CMS |
| Technology Stack | HTML5, CSS3, Vanilla JavaScript, PHP 8.2 OOP, MySQL |
| Web Server | Apache |
| Hosting Environment | Hostinger Shared Hosting |
| Development Environment | XAMPP |
| Document Type | Error Handling Architecture |
| Document Status | Draft |
| Prepared For | Pre-Implementation Planning |
| Prepared By | Project Technical Team |
| Version | 1.0 |

## Revision History

| Version | Date | Author | Description |
|---|---|---|---|
| 1.0 | 2026-08-06 | Project Technical Team | Initial Error Handling Architecture document |

## 1. Introduction

This document defines the error handling architecture for the Nepack Website, a production-ready Industrial Automation Company Website with CMS functionality.

The project will be developed using PHP 8.2 with an object-oriented backend, MySQL database, Apache web server, XAMPP for local development, and Hostinger Shared Hosting for production deployment.

The purpose of this document is to establish a consistent strategy for detecting, handling, logging, reporting, and recovering from errors across the application.

## 2. Objectives

The error handling architecture is designed to:

- Provide consistent error handling across public pages, Admin Panel, AJAX requests, and future APIs.
- Prevent exposure of sensitive technical details to users.
- Support clear and helpful user-facing messages.
- Ensure technical errors are logged for troubleshooting.
- Separate validation feedback from system failures.
- Support secure handling of authentication and authorization failures.
- Improve maintainability by defining standard error responsibilities.
- Support debugging in local development and safe behavior in production.
- Enable future monitoring and incident response improvements.

## 3. Error Handling Principles

The Nepack Website error handling strategy follows these principles:

- Errors must be handled consistently across application layers.
- User-facing messages must be safe, clear, and non-technical.
- Internal logs must capture enough detail for diagnosis.
- Sensitive information must never be displayed in production errors.
- Validation errors should guide users toward correction.
- Authentication and authorization errors should not reveal sensitive access details.
- Database errors should not expose queries, table names, credentials, or internal structure.
- File upload errors should clearly explain acceptable corrective action.
- Unexpected exceptions should be captured and logged.
- Production error handling must prioritize security and stability.
- Local development error handling may provide more technical visibility.

## 4. Error Categories

### Validation Errors

Validation errors occur when user input does not meet required rules.

Examples include:

- Required field missing.
- Invalid email format.
- Text exceeds allowed length.
- Unsupported file type.
- Invalid numeric value.
- Missing CMS form input.

Conceptual handling:

- Display clear validation feedback near the relevant form area.
- Preserve safe user-entered values where appropriate.
- Prevent invalid data from reaching business logic or the database.
- Avoid logging routine validation failures unless operationally useful.
- Log repeated suspicious validation failures where security review is needed.

### Authentication Errors

Authentication errors occur when login or session validation fails.

Examples include:

- Invalid username or password.
- Expired session.
- Invalid session.
- Account disabled.
- Too many failed login attempts.

Conceptual handling:

- Display generic login failure messages.
- Avoid confirming whether a username or email exists.
- Redirect expired or invalid sessions to the login page.
- Track failed login attempts.
- Log repeated failures and lockout events.
- Avoid exposing authentication internals.

### Authorization Errors

Authorization errors occur when an authenticated user attempts to access a restricted function.

Examples include:

- Accessing a restricted CMS module.
- Attempting a protected action without permission.
- Accessing future role-restricted features.

Conceptual handling:

- Deny access safely.
- Display a simple access-denied message or redirect to an allowed area.
- Log unauthorized access attempts where appropriate.
- Avoid revealing details about restricted resources.
- Enforce checks server-side.

### Database Errors

Database errors occur when MySQL operations fail.

Examples include:

- Database connection failure.
- Query failure.
- Constraint-related failure.
- Missing or unavailable database.
- Timeout or hosting-level database issue.

Conceptual handling:

- Display a generic service or processing error to users.
- Log technical details internally.
- Avoid exposing queries, schema names, credentials, or stack traces.
- Prevent partial or inconsistent operations where possible.
- Escalate recurring database errors for technical review.

### File Upload Errors

File upload errors occur during image, PDF, or media upload operations.

Examples include:

- Unsupported file type.
- File exceeds size limit.
- Upload interrupted.
- Invalid file name.
- Failed file validation.
- Storage destination unavailable.

Conceptual handling:

- Show clear corrective messages.
- Explain allowed file type or size at a user-friendly level.
- Reject unsafe files.
- Log suspicious or repeated upload failures.
- Avoid storing partially validated files.
- Ensure failed uploads do not create broken CMS records.

### File System Errors

File system errors occur when the application cannot read, write, move, or delete files.

Examples include:

- Upload folder not writable.
- Missing file path.
- Permission issue.
- Disk space limitation.
- File deletion failure.
- Backup or storage path issue.

Conceptual handling:

- Show a safe generic message to the user.
- Log the affected path internally where safe.
- Avoid exposing server paths publicly.
- Preserve data consistency between database records and files.
- Escalate persistent permission or storage issues for hosting review.

### Network Errors

Network errors occur when external or hosting-related communication fails.

Examples include:

- Hosting connectivity issue.
- SSL-related access issue.
- External integration failure in future phases.
- Email delivery failure in future phases.
- API communication failure in future phases.

Conceptual handling:

- Display a temporary service issue message where appropriate.
- Log endpoint or operation context internally without exposing secrets.
- Retry only where safe and defined in future workflows.
- Avoid blocking unrelated website features where possible.

### Application Errors

Application errors occur due to expected but unsuccessful application conditions.

Examples include:

- Requested CMS record not found.
- Invalid route.
- Unsupported action.
- Missing configuration.
- Invalid application state.
- Business rule conflict.

Conceptual handling:

- Return a controlled error response.
- Display a safe user-facing message.
- Log errors that indicate misconfiguration or technical failure.
- Avoid treating routine not-found behavior as a critical system failure.
- Preserve a consistent user experience.

### Unexpected Exceptions

Unexpected exceptions are unplanned failures that escape normal control flow.

Examples include:

- Unhandled runtime exception.
- Undefined application state.
- Unexpected service failure.
- Unexpected dependency failure.
- Unhandled data processing issue.

Conceptual handling:

- Capture the exception at a central boundary.
- Show a generic error message in production.
- Log full technical context internally where safe.
- Avoid exposing stack traces or file paths to users.
- Prioritize restoring stable application behavior.
- Review and remediate root cause.

## 5. Error Response Strategy

### Frontend Pages

Public frontend pages should provide safe and simple error responses.

Conceptual behavior:

- Show user-friendly messages.
- Avoid technical details.
- Use consistent not-found or unavailable page behavior.
- Keep navigation available where possible.
- Avoid exposing backend paths, database errors, or stack traces.
- Preserve brand trust through calm, clear messaging.

### Admin Panel

The Admin Panel should provide more actionable but still safe error responses.

Conceptual behavior:

- Display validation messages near relevant fields.
- Show operation-level success or failure messages.
- Explain corrective actions for uploads, forms, and content operations.
- Redirect safely after authentication or authorization errors.
- Avoid exposing sensitive technical details.
- Log technical failures for administrator or developer review.

### AJAX Requests

AJAX requests should return structured and predictable error responses.

Conceptual behavior:

- Indicate whether the request succeeded or failed.
- Provide safe user-facing messages.
- Include validation feedback where applicable.
- Avoid exposing internal exception details.
- Use consistent response status handling.
- Ensure frontend behavior can display errors gracefully.

### API Responses

Future API responses should use consistent error contracts.

Conceptual behavior:

- Return predictable success or failure structures.
- Use appropriate status categories conceptually.
- Provide safe error messages.
- Avoid exposing internals.
- Include trace or reference identifiers in future phases if monitoring is introduced.
- Support client-side handling without requiring knowledge of internal implementation.

## 6. Exception Management Strategy

Exception management should provide a controlled way to handle unexpected failures.

The strategy includes:

- Centralizing exception handling where possible.
- Separating expected validation failures from unexpected exceptions.
- Capturing technical details internally.
- Returning safe messages to users.
- Avoiding duplicated exception handling logic.
- Supporting different behavior for local and production environments.
- Ensuring exceptions do not leave the application in an inconsistent state.
- Reviewing recurring exceptions as defects or operational risks.

Exception management should align with the layered backend architecture.

## 7. User-Friendly Error Messages

User-facing error messages should be clear, safe, and helpful.

Message guidelines include:

- Use plain language.
- Explain what went wrong at a high level.
- Suggest a corrective action where appropriate.
- Avoid technical terms unless needed for administrators.
- Avoid revealing credentials, file paths, queries, table names, or stack traces.
- Avoid confirming whether sensitive records or accounts exist.
- Keep messages consistent across modules.
- Use generic messages for security-sensitive failures.

Examples of message categories include:

- Required input missing.
- Invalid file type.
- File too large.
- Login failed.
- Session expired.
- Access denied.
- Requested content unavailable.
- Unable to complete request.
- Temporary service issue.

## 8. Internal Error Logging Strategy

Internal logs should support diagnosis, security review, and operational improvement.

Error logging should capture:

- Error category.
- Date and time.
- Request context.
- Affected module.
- User or admin identifier where safe and applicable.
- Operation being attempted.
- Technical error summary.
- Severity level.
- Environment.
- Source location where appropriate.
- Correlation or reference identifier in future phases.

Logs should avoid capturing:

- Plain text passwords.
- Password hashes.
- Full session identifiers.
- Full reset or remember-me tokens.
- Database credentials.
- Sensitive configuration values.
- Unnecessary personal or confidential information.

Logs should be stored in protected locations and reviewed according to operational needs.

## 9. Error Monitoring Guidelines

Error monitoring helps identify recurring failures and security concerns.

Monitoring should include:

- Repeated login failures.
- Repeated authorization failures.
- Database connection issues.
- Upload failures.
- File permission errors.
- Repeated not-found errors for sensitive paths.
- Unexpected exceptions.
- Admin operation failures.
- Hosting-level service issues.
- Backup or restore failures where applicable.

Monitoring frequency should be based on operational maturity and hosting capability. For shared hosting, monitoring may initially depend on application logs, hosting panel logs, and manual review.

## 10. Recovery Strategy

The recovery strategy defines how the application should respond after errors.

Recovery principles include:

- Validation errors should return users to a correctable state.
- Authentication errors should redirect users to login where appropriate.
- Authorization errors should deny access safely.
- Database failures should avoid data corruption.
- File upload failures should not create incomplete records.
- File system failures should preserve existing files and records where possible.
- Unexpected exceptions should be logged and handled without exposing details.
- Critical or repeated failures should trigger technical review.
- Production recovery may require restoring from backup if data or files are compromised.

Recovery procedures should align with the Backup and Recovery Strategy and Security Architecture.

## 11. Debug vs Production Environment

Error behavior must differ between local development and production.

### Local Development

In XAMPP/local development:

- Technical errors may be visible to developers.
- Detailed debugging information may be enabled.
- Logs should still be reviewed.
- Test data should be used carefully.
- Production credentials should not be exposed locally.
- Debugging should support faster development and issue resolution.

### Production

On Hostinger Shared Hosting:

- Technical errors must not be displayed publicly.
- Users should receive safe generic messages.
- Detailed errors should be logged internally.
- Debug output should be disabled.
- Sensitive data must never be exposed in browser output.
- Critical errors should be reviewed promptly.
- Error behavior should preserve business credibility and security.

## 12. Security Considerations

Security considerations for error handling include:

- Do not expose stack traces in production.
- Do not expose database queries.
- Do not expose database credentials.
- Do not expose server file paths publicly.
- Do not expose session identifiers or tokens.
- Use generic messages for authentication failures.
- Use generic messages for authorization failures.
- Avoid revealing whether protected resources exist.
- Protect log files from public access.
- Avoid logging sensitive data.
- Review errors after suspicious activity.
- Ensure error pages cannot be used for information disclosure.
- Ensure failed uploads do not store executable or unsafe files.

Error handling must support the Security Architecture and Authentication Architecture.

## 13. Future Expansion

Future error handling enhancements may include:

- Centralized error tracking.
- Error reference IDs displayed to users.
- Admin error dashboard.
- Severity-based alerting.
- Email or notification alerts for critical failures.
- Integration with monitoring services after hosting upgrade.
- API error standardization.
- Audit reporting.
- Automated log rotation.
- Incident response workflow integration.
- Staging environment error validation.
- Business continuity reporting.

Future enhancements should preserve the same principles of safe disclosure, consistent handling, and useful internal diagnostics.

## 14. Related Documents

This document should be maintained together with the following project documents:

- 01_Backend_Architecture.md
- 03_Authentication_Architecture.md
- 04_Security_Architecture.md
- Database Documentation
- Backup and Recovery Strategy
- Deployment Documentation
- Testing Documentation
- Incident Response Documentation

## Approval Checklist

- [ ] Document Reviewed
- [ ] Technical Review Completed
- [ ] Error Flow Verified
- [ ] Logging Strategy Verified
- [ ] Approved for Next Phase

**End of Document**
