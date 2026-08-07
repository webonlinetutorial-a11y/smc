# Core Framework

## Document Control

| Field | Details |
|---|---|
| Project | Nepack Website |
| Document Title | Core Framework |
| Phase | Implementation Phase 2 |
| Technology Stack | HTML5, CSS3, Vanilla JavaScript, PHP 8.2, MySQL |
| Development Environment | XAMPP Localhost |
| Production Environment | Hostinger Shared Hosting |
| Architecture Approach | Modular, OOP PHP, Server Side Rendering, CMS Based, SEO Friendly |
| Document Status | Draft |
| Owner | Implementation Architecture |
| Last Updated | August 6, 2026 |

## Revision History

| Version | Date | Description | Author |
|---|---|---|---|
| 1.0 | August 6, 2026 | Initial Core Framework implementation planning document | Implementation Architecture |

## 1. Introduction

This document defines the implementation plan for the Core Framework phase of the Nepack Website.

The Core Framework phase builds on the Project Bootstrap foundation. Its purpose is to establish the reusable internal PHP structure that future modules will use for controllers, models, services, helpers, rendering, validation, database access, security, and shared application behavior.

This document is an implementation planning document only. It does not generate code and does not change the approved architecture.

## 2. Objectives

The Core Framework phase is designed to:

- Establish reusable PHP application structure.
- Define base responsibilities for controllers, models, services, and helpers.
- Prepare shared rendering conventions.
- Prepare reusable database access patterns.
- Prepare validation and sanitization foundation.
- Prepare response handling for public, admin, AJAX, and future API flows.
- Reduce duplicated logic across future modules.
- Keep the system compatible with PHP 8.2 and Hostinger Shared Hosting.

## 3. Scope

Included:

- Core application structure.
- Base controller responsibility.
- Base model responsibility.
- Service layer responsibility.
- Helper layer responsibility.
- Shared rendering strategy.
- Shared validation strategy.
- Shared response strategy.
- Reusable module execution conventions.

Excluded:

- Authentication logic.
- Admin dashboard implementation.
- CMS module CRUD implementation.
- Public frontend page completion.
- File upload processing.
- SEO metadata management.
- Production deployment.

## 4. Architecture

The Core Framework should provide a simple, maintainable, project-specific PHP foundation without introducing a full external framework.

The project must remain:

- Lightweight.
- Modular.
- OOP-oriented where appropriate.
- Shared-hosting-compatible.
- Easy to debug.
- Easy to extend.
- Aligned with approved documentation.

The Core Framework should organize logic by responsibility:

- Controllers coordinate requests.
- Models communicate with database tables.
- Services handle business rules.
- Helpers provide reusable utility behavior.
- Includes handle shared rendering and bootstrap support.

Business logic should not be placed directly inside public page templates where avoidable.

## 5. Folder Structure

The Core Framework should use the existing `app` structure:

- `app/controllers`
- `app/models`
- `app/services`
- `app/helpers`

Additional approved folders may be used where appropriate:

- `includes`
- `routes`
- `ajax`
- `api`
- `storage/logs`
- `storage/cache`

The structure should remain predictable and should not introduce unnecessary folders.

## 6. Planned Files

The following files are planned conceptually for this phase.

| File | Purpose |
|---|---|
| `app/controllers/BaseController.php` | Defines shared controller responsibilities. |
| `app/models/BaseModel.php` | Defines shared model and database access responsibilities. |
| `app/services/BaseService.php` | Defines shared service-layer conventions. |
| `app/helpers/validation_helper.php` | Provides reusable validation support. |
| `app/helpers/sanitize_helper.php` | Provides reusable sanitization support. |
| `app/helpers/escape_helper.php` | Provides reusable output escaping support. |
| `app/helpers/url_helper.php` | Provides reusable URL and redirect support. |
| `includes/view.php` | Provides shared server-side rendering helper behavior. |
| `includes/response.php` | Provides shared response handling conventions. |
| `routes/web.php` | Defines public route mapping where required. |
| `routes/admin.php` | Defines admin route mapping where required. |

Exact files should be created only when they are needed by the implementation and aligned with the approved folder architecture.

## 7. Core Flow

The conceptual Core Framework flow is:

```text
Request

↓

Bootstrap

↓

Route or Entry Page

↓

Controller

↓

Service

↓

Model

↓

Database

↓

Prepared Data

↓

View / Include Rendering

↓

Response
```

Not every page must use every layer. Simple pages may use lighter flow, but reusable logic should move into the appropriate layer as complexity grows.

## 8. Layer Responsibilities

### Controllers

Controllers should coordinate request handling.

Responsibilities:

- Receive request context.
- Validate required parameters at coordination level.
- Call services.
- Prepare data for views.
- Select appropriate response.
- Avoid direct SQL queries.

### Models

Models should handle database access for specific entities.

Responsibilities:

- Use prepared statements.
- Encapsulate table-specific queries.
- Return structured data.
- Avoid rendering HTML.
- Avoid direct business decision logic where possible.

### Services

Services should handle business logic.

Responsibilities:

- Coordinate multiple models.
- Apply business rules.
- Prepare module-level decisions.
- Keep controllers thin.
- Keep reusable workflows centralized.

### Helpers

Helpers should provide reusable utility behavior.

Responsibilities:

- Validation helpers.
- Sanitization helpers.
- Escaping helpers.
- URL helpers.
- Formatting helpers.
- Security-related utility support where appropriate.

Helpers should not become large business modules.

### Includes

Includes should support rendering and shared application structure.

Responsibilities:

- Shared layout includes.
- Common response helpers.
- View rendering support.
- Header, footer, navigation, and reusable page fragments in later phases.

## 9. Database Impact

The Core Framework phase does not create business tables directly.

It prepares reusable database access conventions for future modules.

Database expectations:

- All dynamic queries must use prepared statements.
- Models should centralize query behavior.
- Database errors should be handled safely.
- Query results should be predictable.
- Future modules should not duplicate database connection logic.

## 10. Security Considerations

Security must be built into the framework layer.

Security expectations:

- All output should support escaping before display.
- All input should support validation and sanitization.
- Models must use prepared statements.
- Admin flows must later require authentication checks.
- Error output must remain safe for public users.
- Redirects should avoid unsafe external targets.
- Helpers should encourage secure defaults.
- Sensitive configuration must not be exposed.

The Core Framework should prepare the ground for the Authentication phase.

## 11. Performance Considerations

The Core Framework must stay lightweight.

Performance expectations:

- Avoid unnecessary abstraction.
- Avoid heavy routing systems.
- Avoid loading unused modules.
- Keep database access efficient.
- Keep shared helpers focused.
- Support caching expansion later.
- Keep compatible with shared hosting limits.

## 12. Testing Checklist

- [ ] Bootstrap still loads correctly.
- [ ] Core framework files load without fatal errors.
- [ ] Base controller responsibility is clear.
- [ ] Base model responsibility is clear.
- [ ] Service layer responsibility is clear.
- [ ] Helper files are reusable and focused.
- [ ] Database access pattern supports prepared statements.
- [ ] Public entry page still renders successfully.
- [ ] Error handling remains safe.
- [ ] No business module logic is added prematurely.
- [ ] Folder structure remains aligned with documentation.
- [ ] Project remains compatible with XAMPP.
- [ ] Project remains compatible with Hostinger Shared Hosting.

## 13. Acceptance Checklist

- [ ] Core Framework architecture is approved.
- [ ] Layer responsibilities are defined.
- [ ] Planned files are reviewed.
- [ ] Reusable database access pattern is ready.
- [ ] Validation helper strategy is ready.
- [ ] Sanitization helper strategy is ready.
- [ ] Escaping helper strategy is ready.
- [ ] Rendering helper strategy is ready.
- [ ] No feature-specific business logic is introduced.
- [ ] Security foundation supports Authentication phase.
- [ ] Local verification is completed.
- [ ] Core Framework phase is committed to Git.

## 14. Next Phase

After Core Framework completion, the next phase should be:

`03_Authentication.md`

The Authentication phase should implement secure admin login, logout, session protection, password hashing, protected admin routes, and the foundation for user management.

## 15. Related Documents

This document should be used together with:

- `99_Project_Freeze_v1.0.md`
- `00_Project_Context.md`
- `00_AI_Instructions.md`
- `00_Coding_Standards.md`
- `implementation/01_Project_Bootstrap.md`
- `backend/01_Backend_Architecture.md`
- `backend/02_Folder_Architecture.md`
- `backend/04_Security_Architecture.md`
- `backend/05_Error_Handling_Architecture.md`
- `backend/09_API_Architecture.md`
- `database/01_Database_Plan.md`
- `frontend/12_Page_Rendering_Flow.md`

**End of Document**
