# Authentication Architecture

## Document Control

| Field | Details |
|---|---|
| Project Name | Nepack Website |
| Project Type | Dynamic Industrial Automation Company Website with CMS |
| Technology Stack | HTML5, CSS3, Vanilla JavaScript, PHP 8.2 OOP, MySQL |
| Web Server | Apache |
| Hosting Environment | Hostinger Shared Hosting |
| Development Environment | XAMPP |
| Document Type | Authentication Architecture |
| Document Status | Draft |
| Prepared For | Pre-Implementation Planning |
| Prepared By | Project Technical Team |
| Version | 1.0 |

## Revision History

| Version | Date | Author | Description |
|---|---|---|---|
| 1.0 | 2026-08-06 | Project Technical Team | Initial Authentication Architecture document |

## 1. Introduction

This document defines the authentication and authorization architecture for the Nepack Website, a production-ready Industrial Automation Company Website with CMS functionality.

The website backend will be developed using PHP 8.2 with an object-oriented approach, MySQL database, Apache web server, XAMPP for local development, and Hostinger Shared Hosting for production deployment.

The current system supports an Admin Panel with administrative login access. The architecture must remain extensible for future multi-role support such as Super Admin, Manager, and Content Editor.

## 2. Authentication Objectives

The authentication architecture is designed to:

- Protect the CMS/Admin Panel from unauthorized access.
- Authenticate administrative users securely.
- Maintain secure user sessions.
- Support controlled access to protected backend features.
- Provide a foundation for future role-based access control.
- Prevent common login-related attacks.
- Support secure logout and session cleanup.
- Enable future password reset capability.
- Provide audit visibility through authentication logging.
- Remain compatible with XAMPP and Hostinger Shared Hosting.

## 3. Authentication Principles

The authentication architecture follows these principles:

- All CMS/Admin Panel access must require authentication.
- Authentication and authorization must be treated as separate concerns.
- Passwords must never be stored in plain text.
- Sessions must be protected from fixation, hijacking, and unauthorized reuse.
- Access to protected routes must be validated on every request.
- Failed login attempts must be monitored and controlled.
- Security-sensitive events should be logged conceptually.
- User-facing authentication errors should not reveal sensitive information.
- Administrative privileges should follow the principle of least privilege.
- The system should support future expansion to multiple roles and permissions.

## 4. Authentication Flow

The authentication flow defines the lifecycle from login to logout.

### Login

The login process begins when an administrative user submits credentials through the Admin Panel login interface.

Conceptual login flow:

1. The user submits a username or email and password.
2. The request is validated for required fields and acceptable format.
3. The system checks whether the account is active and allowed to authenticate.
4. The provided password is verified against the stored password hash.
5. Failed attempts are recorded for login attempt protection.
6. If authentication succeeds, failed attempt counters are cleared where applicable.
7. A secure authenticated session is created.
8. The user is redirected to the authorized Admin Panel area.

Login responses should be generic when authentication fails to avoid revealing whether the username, email, or password was incorrect.

### Session Creation

After successful login, the system creates an authenticated session.

Session creation should conceptually include:

- Regenerating the session identifier.
- Storing only required user identity and role information.
- Avoiding storage of passwords or sensitive credentials in session data.
- Recording login timestamp.
- Recording last activity timestamp.
- Preparing session data for authorization checks.

### Session Validation

Session validation occurs on every protected request.

Session validation should confirm:

- The session exists.
- The user identity is present.
- The user is authenticated.
- The user account is still active where applicable.
- The session has not expired.
- The idle timeout has not been exceeded.
- The requested area is allowed for the user's role.

Invalid sessions should be destroyed or cleared and redirected to the login flow.

### Protected Route Access

Protected route access applies to all Admin Panel and CMS features.

The protected route lifecycle should include:

1. Request reaches a protected admin route.
2. Authentication middleware checks session validity.
3. Authorization rules check whether the authenticated role may access the requested feature.
4. Valid requests continue to the appropriate controller or backend component.
5. Invalid or unauthorized requests are denied safely.
6. Access attempts may be logged where appropriate.

Protected routes should never rely only on menu visibility or frontend hiding. Server-side access checks are required.

### Logout

Logout ends the authenticated session.

Logout should conceptually include:

- Clearing authentication session values.
- Destroying the active session.
- Invalidating remember-me tokens where applicable.
- Redirecting the user to the login page or public website.
- Preventing reuse of the logged-out session.
- Recording logout activity where appropriate.

## 5. Authorization Strategy

Authorization defines what an authenticated user is allowed to access.

The Nepack Website should use a Role-Based Access Control model. RBAC assigns users to roles, and roles are granted permissions for administrative features.

### Current Role

#### Admin

The initial system role is `Admin`.

The Admin role is responsible for managing the CMS and website content. In the initial phase, Admin may have access to all protected CMS modules required to operate the website.

### Future Roles

#### Super Admin

The Super Admin role may be introduced for full system control.

Possible responsibilities:

- User management.
- Role and permission management.
- System settings.
- Full CMS access.
- Security and audit review.

#### Manager

The Manager role may be introduced for operational oversight.

Possible responsibilities:

- Review CMS content.
- Manage business modules.
- Access reports or inquiries.
- Approve selected updates where workflow is introduced.

#### Content Editor

The Content Editor role may be introduced for limited content management.

Possible responsibilities:

- Manage pages.
- Manage products.
- Manage gallery items.
- Manage downloads.
- Update SEO fields where permitted.

RBAC should be designed so new roles can be added without restructuring the entire authentication system.

## 6. Session Management Strategy

Session management protects authenticated access throughout the user's activity.

### Session Creation

Sessions should be created only after successful authentication.

Session creation guidelines:

- Create authenticated sessions after password verification.
- Store only minimal identity data.
- Store role or permission reference data as needed.
- Record login and last activity timestamps.
- Avoid storing credentials or sensitive secrets in session data.

### Session Regeneration

Session identifiers should be regenerated during sensitive authentication events.

Session regeneration should occur:

- After successful login.
- After privilege changes where applicable.
- When re-authentication is required for sensitive actions in future phases.

This helps reduce the risk of session fixation.

### Session Timeout

Session timeout defines the maximum lifetime of an authenticated session.

Session timeout guidelines:

- Sessions should expire after a defined duration.
- Expired sessions should require re-authentication.
- Timeout rules should be suitable for administrative CMS usage.
- Production timeout values should balance security and usability.

### Session Destruction

Session destruction should occur when authentication ends or becomes invalid.

Session destruction should occur:

- During logout.
- When the session expires.
- When the user account is disabled.
- When suspicious session activity is detected.
- When session validation fails.

### Idle Timeout

Idle timeout protects against unattended authenticated sessions.

Idle timeout guidelines:

- Track the user's last activity timestamp.
- Compare last activity against the configured idle limit.
- Destroy or invalidate sessions that exceed idle limits.
- Redirect inactive users to the login page.
- Provide clear user-facing messaging where appropriate.

## 7. Password Security Strategy

Password handling must follow secure storage and verification practices.

### Password Hashing

Password hashing strategy:

- Passwords must never be stored in plain text.
- Passwords must be stored using a secure one-way password hashing mechanism.
- Hashing must include appropriate salting through the selected hashing approach.
- Stored password hashes should not be exposed through logs, errors, or public output.
- Password hash policies should be reviewed as PHP and security standards evolve.

### Password Verification

Password verification strategy:

- Submitted passwords must be verified against stored hashes.
- Password comparison must not reveal whether the account exists.
- Failed verification should be handled with generic messages.
- Failed attempts should be recorded for login protection.
- Successful verification should lead to secure session creation.

### Password Policy

The password policy should require strong administrative passwords.

Recommended policy considerations:

- Minimum password length.
- Use of letters, numbers, and special characters.
- Avoidance of common or predictable passwords.
- Avoidance of reuse where future password history is supported.
- Password changes when administrative accounts are created or transferred.
- Immediate change if compromise is suspected.

Password policy should balance usability with the elevated risk of CMS administrator access.

### Password Reset (Future)

Password reset may be introduced in a future phase.

Future password reset strategy should include:

- Secure reset request process.
- Time-limited reset tokens.
- Single-use reset tokens.
- Generic user-facing responses.
- Reset activity logging.
- Token invalidation after successful password change.
- Notification to the account owner where appropriate.

Password reset should not be introduced without appropriate security controls.

## 8. Remember Me Strategy

The remember-me feature allows users to remain authenticated across browser sessions.

For the initial Admin Panel, remember-me functionality should be considered carefully because it increases authentication risk.

Conceptual remember-me principles:

- Remember-me should be optional, not automatic.
- It should use secure, random, revocable tokens.
- Tokens should be stored separately from passwords.
- Tokens should have a defined expiration period.
- Tokens should be invalidated during logout.
- Tokens should be rotated after use where practical.
- Remember-me should not bypass authorization checks.
- Sensitive admin actions may still require re-authentication in future phases.

If remember-me is not required for the initial release, it may be deferred to reduce security risk.

## 9. Login Attempt Protection

Login attempt protection reduces brute force and credential guessing risks.

### Failed Login Tracking

Failed login tracking should conceptually include:

- Tracking failed attempts by account identifier where possible.
- Tracking failed attempts by client source where appropriate.
- Recording timestamps of failed attempts.
- Resetting failed attempt counters after successful login.
- Avoiding detailed failure messages that help attackers.

### Temporary Lockout

Temporary lockout should be applied after repeated failed login attempts.

Temporary lockout guidelines:

- Lock authentication temporarily after a defined number of failed attempts.
- Use a reasonable lockout duration.
- Avoid permanent lockout without administrator recovery options.
- Continue using generic login failure messaging.
- Log repeated failures for review.

### Brute Force Protection

Brute force protection should include layered controls.

Conceptual controls include:

- Failed attempt limits.
- Temporary lockout.
- Secure password policy.
- Generic error messages.
- Authentication logging.
- Optional CAPTCHA or additional verification in future phases.
- Monitoring of unusual login patterns.

## 10. Authentication Middleware (Conceptual)

Authentication middleware protects CMS routes before controller execution.

Conceptual responsibilities include:

- Checking whether a session exists.
- Confirming that the user is authenticated.
- Validating session timeout and idle timeout.
- Confirming role-based access permissions.
- Redirecting unauthenticated users to the login page.
- Denying unauthorized access safely.
- Preventing protected controller actions from running without authentication.

Middleware should be applied consistently to all protected admin routes.

## 11. Access Control Rules

Access control rules define which roles may access CMS modules.

For the initial release, the Admin role may access all protected CMS areas.

| Module | Current Admin Access | Future RBAC Consideration |
|---|---|---|
| Dashboard | Full access | Available to all authenticated CMS roles with role-specific summaries |
| Products | Full access | Managers and Content Editors may receive limited create, update, or publish permissions |
| Categories | Full access | Managers may manage; Content Editors may have limited access |
| Brands | Full access | Managers and Content Editors may manage depending on workflow |
| Gallery | Full access | Content Editors may manage approved image content |
| Downloads | Full access | Content Editors may manage PDFs and downloadable documents |
| SEO | Full access | Restricted to Admin, Super Admin, or trained Content Editors |
| Settings | Full access | Restricted to Admin or Super Admin |
| Users | Full access | Future restriction to Super Admin only |

Access control must be enforced server-side. Navigation visibility, hidden buttons, or disabled frontend controls are not sufficient authorization controls.

## 12. Authentication Logging (Conceptual)

Authentication logging supports security review and troubleshooting.

Authentication events to log conceptually include:

- Successful login.
- Failed login attempt.
- Logout.
- Session timeout.
- Idle timeout.
- Temporary lockout.
- Unauthorized access attempt.
- Password change.
- Password reset request in future phases.
- User role or permission changes in future phases.

Authentication logs should avoid storing:

- Plain text passwords.
- Password hashes.
- Full sensitive tokens.
- Confidential configuration values.

Logs should be protected from public access and reviewed during security incidents.

## 13. Security Considerations

Authentication security considerations include:

- Use secure password storage.
- Validate all login inputs.
- Protect against brute force attacks.
- Regenerate sessions after login.
- Enforce session timeout and idle timeout.
- Destroy sessions during logout.
- Restrict CMS routes through server-side middleware.
- Use generic authentication failure messages.
- Avoid exposing account existence.
- Protect configuration files containing database credentials.
- Protect logs from public download.
- Avoid storing sensitive data in sessions.
- Apply least privilege authorization.
- Review admin accounts periodically.
- Remove unused or inactive accounts.
- Ensure production error messages do not expose internals.
- Review authentication flows before deployment.

Authentication should be included in security testing before production launch.

## 14. Future Expansion

The authentication architecture should support future enhancements such as:

- Multi-role RBAC.
- Permission-level access control.
- Super Admin account management.
- Manager and Content Editor roles.
- Password reset workflow.
- Password change workflow.
- Account status management.
- Account lockout management.
- Audit logs.
- Two-factor authentication.
- Device/session management.
- Re-authentication for sensitive settings.
- Login notifications.
- CAPTCHA after repeated failures.
- Centralized security monitoring after hosting upgrade.

Future authentication features should follow the same security principles defined in this document.

## 15. Related Documents

This document should be maintained together with the following project documents:

- Planning Documentation
- Database Documentation
- 01_Backend_Architecture.md
- 02_Folder_Architecture.md
- Security Documentation
- Deployment Documentation
- Backup and Recovery Strategy
- Testing Documentation

## Approval Checklist

- [ ] Document Reviewed
- [ ] Technical Review Completed
- [ ] Authentication Flow Verified
- [ ] Security Requirements Verified
- [ ] Approved for Next Phase

**End of Document**
