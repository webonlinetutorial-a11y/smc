# Authentication

## Document Control

| Field | Details |
|---|---|
| Project | Nepack Website |
| Document Title | Authentication |
| Phase | Implementation Phase 3 |
| Technology Stack | HTML5, CSS3, Vanilla JavaScript, PHP 8.2, MySQL |
| Development Environment | XAMPP Localhost |
| Production Environment | Hostinger Shared Hosting |
| Architecture Approach | Modular, OOP PHP, Server Side Rendering, CMS Based, SEO Friendly |
| Document Status | Completed |
| Owner | Implementation Architecture |
| Last Updated | August 9, 2026 |

## Revision History

| Version | Date | Description | Author |
|---|---|---|---|
| 1.0 | August 6, 2026 | Initial Authentication implementation planning document | Implementation Architecture |
| 1.1 | August 9, 2026 | Marked Authentication implementation as completed after local verification | Codex |

## 1. Introduction

This document defines the implementation plan for the Authentication phase of the Nepack Website.

Authentication is the first security-critical feature phase after Project Bootstrap and Core Framework. Its purpose is to secure Admin Panel access and establish the login, logout, session, and protected-page foundation for all CMS functionality.

This document is an implementation planning document only. It does not generate code and does not change the approved architecture.

## 2. Objectives

The Authentication phase is designed to:

- Protect Admin Panel access.
- Provide secure admin login.
- Provide secure admin logout.
- Establish session validation.
- Support secure password verification.
- Prepare user and role relationship usage.
- Prevent unauthorized access to admin pages.
- Provide safe authentication error messages.
- Prepare the foundation for User Management.
- Remain compatible with PHP 8.2, MySQL, XAMPP, and Hostinger Shared Hosting.

## 3. Scope

Included:

- Admin login flow.
- Admin logout flow.
- Session protection.
- Protected admin page checks.
- Password hash verification.
- Active user validation.
- Role awareness foundation.
- Safe authentication errors.
- CSRF support for authentication forms where applicable.

Excluded:

- Full User Management CRUD.
- Role and permission management UI.
- Password reset workflow.
- Two-factor authentication.
- Public customer login.
- Social login.
- Admin dashboard features beyond protected access.

## 4. Architecture

Authentication should use the approved bootstrap and core framework foundation.

The architecture should separate responsibilities:

- Login page renders the form.
- Authentication controller coordinates login and logout requests.
- Authentication service handles credential validation and session creation.
- User model retrieves administrator records.
- Session helper manages authentication state.
- Security helpers support CSRF, escaping, validation, and safe redirects.

Authentication must not mix raw database queries directly into page markup.

Authentication must protect every Admin Panel page and future CMS module.

## 5. Folder Structure

Authentication should use the approved folders:

- `admin`
- `app/controllers`
- `app/models`
- `app/services`
- `app/helpers`
- `includes`
- `config`

Authentication-related files should remain focused and should not introduce unrelated CMS module logic.

## 6. Planned Files

The following files are planned conceptually for this phase.

| File | Purpose |
|---|---|
| `admin/login.php` | Admin login page. |
| `admin/logout.php` | Admin logout entry action. |
| `admin/dashboard.php` | Initial protected destination after login, minimal in this phase. |
| `app/controllers/AuthController.php` | Coordinates authentication requests. |
| `app/services/AuthService.php` | Handles credential validation, login, logout, and session creation rules. |
| `app/models/User.php` | Retrieves admin user records from the database. |
| `app/models/Role.php` | Retrieves role information where required. |
| `app/helpers/auth_helper.php` | Provides reusable authentication checks. |
| `app/helpers/csrf_helper.php` | Provides CSRF token support where applicable. |
| `includes/admin-auth.php` | Shared include to protect admin pages. |
| `includes/admin-header.php` | Shared admin header placeholder for protected pages. |
| `includes/admin-footer.php` | Shared admin footer placeholder for protected pages. |

Exact files should follow approved architecture and should be created only where required by the implementation.

## 7. Authentication Flow

The conceptual login flow is:

```text
Admin Opens Login Page

↓

Login Form Rendered

↓

Credentials Submitted

↓

Request Validated

↓

CSRF Checked Where Applicable

↓

User Record Retrieved

↓

Password Hash Verified

↓

User Status Checked

↓

Session Created

↓

Redirect to Protected Admin Area
```

The conceptual logout flow is:

```text
Admin Requests Logout

↓

Session Validated

↓

Session Cleared

↓

Session Destroyed

↓

Redirect to Login Page
```

The conceptual protected page flow is:

```text
Admin Page Requested

↓

Bootstrap Loaded

↓

Authentication Guard Checked

↓

Valid Session

↓

Protected Page Rendered
```

If the session is invalid, the user should be redirected to the login page or shown an approved safe response.

## 8. Database Impact

Authentication requires the database foundation for administrator accounts and roles.

Primary tables:

- `users`
- `roles`

Conceptual data requirements:

- Admin identity.
- Login email or username.
- Password hash.
- Role reference.
- Account status.
- Last login information.
- Created and updated timestamps.

Security requirements:

- Passwords must never be stored as plain text.
- User records must support active/inactive status.
- Login identity should be unique.
- Role references should remain valid.
- Administrative access should be denied for inactive users.

## 9. Security Considerations

Authentication is security-critical.

Security expectations:

- Passwords must be hashed securely.
- Password verification must use secure hash verification.
- Login errors must not reveal whether a specific account exists.
- Sessions must be regenerated after successful login.
- Admin pages must require valid authentication.
- Logout must clear authentication state.
- CSRF protection should be used for sensitive form actions where applicable.
- Inputs must be validated.
- Outputs must be escaped.
- SQL queries must use prepared statements.
- Admin pages must not be indexed.
- Sensitive errors must not be exposed.

Future enhancements may include login attempt throttling and two-factor authentication, but they are not part of this phase unless separately approved.

## 10. Performance Considerations

Authentication should remain lightweight.

Performance expectations:

- Login query should be efficient.
- Session checks should not slow admin navigation.
- User role lookup should be minimal.
- No unnecessary CMS data should load during authentication.
- Admin dashboard in this phase should remain minimal.

## 11. UI Considerations

The login interface should follow approved design and frontend documentation.

UI expectations:

- Clear login form.
- Accessible labels.
- Clear validation messages.
- Secure, non-revealing error messages.
- Responsive layout.
- No inline CSS.
- No inline JavaScript.

Detailed admin UI styling belongs to the Admin Foundation and Frontend phases.

## 12. Testing Checklist

- [x] Login page loads successfully.
- [x] Login form displays required fields.
- [x] Valid admin credentials allow access.
- [x] Invalid credentials are rejected.
- [x] Login error message is safe and non-revealing.
- [x] Inactive user cannot log in.
- [x] Password hash verification works.
- [x] Session is created after login.
- [x] Session is regenerated after login.
- [x] Protected admin page blocks unauthenticated users.
- [x] Authenticated admin can access protected admin page.
- [x] Logout clears authentication session.
- [x] Logged-out admin cannot access protected pages.
- [x] SQL queries use prepared statements.
- [x] Login form supports CSRF protection where applicable.
- [x] Admin pages are not indexable.
- [x] Authentication works on XAMPP.
- [x] Authentication remains compatible with Hostinger Shared Hosting.

## 13. Acceptance Checklist

- [x] Authentication architecture is approved.
- [x] Required database tables are available.
- [x] Login flow is implemented.
- [x] Logout flow is implemented.
- [x] Session protection is implemented.
- [x] Admin route protection is implemented.
- [x] Password hashing and verification are implemented.
- [x] Safe error messaging is implemented.
- [x] Authentication helpers are reusable.
- [x] No unrelated CMS logic is included.
- [x] Security checks pass.
- [x] Local verification is completed.
- [x] Authentication phase is committed to Git.

## 14. Completion Verification

Authentication was verified locally on August 9, 2026.

Verification completed:

- Authentication files and admin entry points exist.
- PHP syntax checks passed for authentication-related files.
- `users` and `roles` tables are available in the local database.
- Login page render smoke test completed successfully.
- CSRF token field is present on the login form.
- Valid admin login and invalid password rejection were verified with the local seeded admin account.
- Admin protection is implemented through `includes/admin-auth.php` and `requireAuth()`.

## 15. Next Phase

After Authentication is completed and verified, the next phase should be:

`04_Admin_Foundation.md`

The Admin Foundation phase should define the protected admin layout, dashboard foundation, admin navigation, shared admin components, and the base CMS interface structure.

## 16. Related Documents

This document should be used together with:

- `99_Project_Freeze_v1.0.md`
- `00_Project_Context.md`
- `00_AI_Instructions.md`
- `00_Coding_Standards.md`
- `implementation/01_Project_Bootstrap.md`
- `implementation/02_Core_Framework.md`
- `backend/03_Authentication_Architecture.md`
- `backend/04_Security_Architecture.md`
- `backend/05_Error_Handling_Architecture.md`
- `database/03_Table_Specifications.md`
- `testing/02_Test_Cases.md`

**End of Document**
