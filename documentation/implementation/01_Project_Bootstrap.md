# Project Bootstrap

## Document Control

| Field | Details |
|---|---|
| Project | Nepack Website |
| Document Title | Project Bootstrap |
| Phase | Implementation Phase 1 |
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
| 1.0 | August 6, 2026 | Initial Project Bootstrap implementation planning document | Implementation Architecture |
| 1.1 | August 9, 2026 | Marked Project Bootstrap implementation as completed after local verification | Codex |

## 1. Introduction

This document defines the implementation plan for the Project Bootstrap phase of the Nepack Website.

Project Bootstrap is the first implementation phase after Project Freeze v1.0. Its purpose is to prepare the base application foundation before authentication, Admin Panel, frontend pages, CMS modules, testing, and deployment work begins.

This document does not replace the approved architecture documentation. It converts the approved documentation into a practical implementation plan for the first development phase.

## 2. Objectives

The Project Bootstrap phase is designed to:

- Establish the initial application startup flow.
- Align the physical project structure with approved architecture.
- Prepare configuration loading.
- Prepare reusable path and URL constants.
- Prepare database connection foundation.
- Prepare session initialization foundation.
- Prepare safe error handling foundation.
- Prepare common helper loading.
- Prepare shared include readiness.
- Keep the project compatible with XAMPP and Hostinger Shared Hosting.

## 3. Scope

Project Bootstrap includes only the core technical foundation required before feature development.

Included:

- Folder structure alignment.
- Core bootstrap loader.
- Configuration file planning.
- Database connection foundation.
- Session foundation.
- Error handling foundation.
- Common constants and helpers.
- Basic public entry readiness.

Excluded:

- Authentication implementation.
- Admin Panel UI.
- CMS modules.
- Product management.
- Brand management.
- Gallery management.
- File upload implementation.
- Frontend page design.
- SEO metadata implementation.
- Deployment execution.

## 4. Architecture

The bootstrap architecture should act as the common initialization layer for public pages, admin pages, AJAX endpoints, and future API endpoints.

The bootstrap layer should be lightweight and reusable. It should prepare the environment but should not contain business logic.

Bootstrap responsibilities:

- Load application configuration.
- Define reusable paths.
- Define reusable URLs.
- Register safe error handling behavior.
- Prepare session handling.
- Prepare database connection access.
- Load shared helper functions.
- Prepare the application for page rendering.

Bootstrap must support:

- PHP 8.2.
- MySQL.
- Apache.
- XAMPP Localhost.
- Hostinger Shared Hosting.
- Server-side rendered pages.
- Modular future development.

## 5. Folder Structure

The existing scaffold should be reviewed and aligned with the approved folder architecture before coding begins.

Required or expected folders:

- `admin`
- `app`
- `assets`
- `config`
- `database`
- `documentation`
- `includes`
- `modules`
- `public`
- `storage`

Recommended architecture folders to add where approved:

- `ajax`
- `api`
- `logs`
- `routes`
- `uploads`

The project must avoid creating random folders during implementation. Every folder must have a clear responsibility and must match the approved architecture or an approved documentation update.

## 6. Planned Files

The following files are planned for Project Bootstrap.

| File | Purpose |
|---|---|
| `index.php` | Main public entry file and first bootstrap consumer. |
| `config/app.php` | Application configuration, environment values, site name, base URL, and path references. |
| `config/database.php` | Database configuration for local and production environments. |
| `config/security.php` | Security-related default configuration. |
| `includes/bootstrap.php` | Main bootstrap loader used by public, admin, AJAX, and future API entry points. |
| `includes/constants.php` | Shared path and URL constants. |
| `includes/functions.php` | Common reusable helper functions. |
| `includes/database.php` | Database connection initialization and access foundation. |
| `includes/session.php` | Session initialization and secure session handling foundation. |
| `includes/error-handler.php` | Central error handling and safe error display foundation. |
| `storage/cache/.gitkeep` | Preserves cache directory without tracking generated cache files. |
| `storage/logs/.gitkeep` | Preserves logs directory without tracking generated logs. |
| `storage/sessions/.gitkeep` | Preserves session storage directory where applicable. |

Business module files should not be created during this phase.

## 7. Bootstrap Flow

The conceptual bootstrap flow is:

```text
Browser Request

↓

Entry File

↓

Bootstrap Loader

↓

Path Constants

↓

Application Configuration

↓

Error Handling Setup

↓

Session Foundation

↓

Database Configuration

↓

Shared Helpers

↓

Page Logic

↓

Server-Side Rendered Response
```

The bootstrap loader should remain reusable across public and admin areas.

## 8. Database Impact

Project Bootstrap does not create CMS tables directly.

However, it prepares the database foundation for future modules.

Database preparation responsibilities:

- Define database configuration strategy.
- Prepare reusable database connection handling.
- Ensure future database queries use prepared statements.
- Avoid exposing database errors to public users.
- Support local XAMPP and Hostinger production database values.

The first future database implementation should support Authentication and User Management.

## 9. Security Considerations

Security must be included from the first implementation phase.

Bootstrap security expectations:

- Sensitive configuration must not be exposed publicly.
- Public users must not see raw PHP errors in production.
- Database credentials must remain protected.
- Sessions must be initialized securely where required.
- Future CSRF token support should be prepared.
- Future output escaping helpers should be available.
- Future input validation helpers should be available.
- Admin pages must later consume the same bootstrap foundation.

No security-critical behavior should depend only on frontend validation.

## 10. Performance Considerations

The bootstrap layer must be lightweight.

Performance expectations:

- Load only required core files.
- Avoid heavy business logic during startup.
- Avoid unnecessary database calls.
- Avoid external framework overhead.
- Keep initialization compatible with shared hosting.
- Prepare cache and logs structure without adding runtime complexity.

## 11. Testing Checklist

- [x] Project folders match approved architecture.
- [x] `index.php` loads successfully.
- [x] Bootstrap file loads without fatal error.
- [x] Application configuration loads correctly.
- [x] Path constants are available.
- [x] URL constants are available.
- [x] Error handling foundation works.
- [x] Session foundation works where required.
- [x] Database configuration file is available.
- [x] Database connection succeeds with valid local credentials.
- [x] Database connection failure is handled safely.
- [x] No sensitive details are exposed in browser output.
- [x] Runtime folders exist.
- [x] Generated cache, logs, and sessions are not committed.
- [x] Project remains compatible with XAMPP.
- [x] Structure remains compatible with Hostinger Shared Hosting.

## 12. Acceptance Checklist

- [x] Bootstrap architecture is approved.
- [x] Folder structure is aligned.
- [x] Planned files are created.
- [x] Configuration foundation is available.
- [x] Database foundation is available.
- [x] Session foundation is available.
- [x] Error handling foundation is available.
- [x] Common helper foundation is available.
- [x] `index.php` uses the bootstrap.
- [x] No business logic is added to bootstrap.
- [x] Security foundation is ready for Authentication phase.
- [x] Local verification is completed.
- [x] Project Bootstrap is committed to Git.

## 13. Completion Verification

Project Bootstrap was verified locally on August 9, 2026.

Verification completed:

- Required folder structure exists.
- Planned bootstrap, configuration, database, session, helper, and error handling files exist.
- PHP syntax checks passed for Phase 1 files.
- `includes/bootstrap.php` loads successfully.
- Database connection smoke test completed successfully with local XAMPP defaults.

## 14. Next Phase

After Project Bootstrap is completed and verified, the next phase should be:

`02_Core_Framework.md`

The Core Framework phase should define the reusable PHP application structure, base model/service/controller responsibilities, shared rendering approach, and module execution pattern.

## 15. Related Documents

This document should be used together with:

- `99_Project_Freeze_v1.0.md`
- `00_Project_Context.md`
- `00_AI_Instructions.md`
- `00_Coding_Standards.md`
- `backend/01_Backend_Architecture.md`
- `backend/02_Folder_Architecture.md`
- `backend/04_Security_Architecture.md`
- `backend/05_Error_Handling_Architecture.md`
- `database/01_Database_Plan.md`
- `frontend/12_Page_Rendering_Flow.md`
- `deployment/01_Deployment_Strategy.md`

**End of Document**
