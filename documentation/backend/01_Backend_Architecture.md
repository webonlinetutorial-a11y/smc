# Backend Architecture

## Document Control

| Field | Details |
|---|---|
| Project Name | Nepack Website |
| Project Type | Dynamic Industrial Automation Company Website with CMS |
| Technology Stack | HTML5, CSS3, Vanilla JavaScript, PHP 8.2, MySQL |
| Backend Technology | PHP 8.2 Object-Oriented |
| Web Server | Apache |
| Hosting Environment | Hostinger Shared Hosting |
| Development Environment | XAMPP |
| Document Type | Backend Architecture |
| Document Status | Draft |
| Prepared For | Pre-Implementation Planning |
| Prepared By | Project Technical Team |
| Version | 1.0 |

## Revision History

| Version | Date | Author | Description |
|---|---|---|---|
| 1.0 | 2026-08-06 | Project Technical Team | Initial Backend Architecture document |

## 1. Introduction

This document defines the backend architecture for the Nepack Website, a dynamic Industrial Automation Company Website with CMS functionality.

The backend will be developed using PHP 8.2 with an object-oriented approach and MySQL as the database. The application will run on Apache and be deployed on Hostinger Shared Hosting, with local development supported through XAMPP.

The purpose of this document is to establish a clear, maintainable, scalable, and production-ready backend architecture before implementation begins.

## 2. Backend Objectives

The backend architecture aims to:

- Support dynamic website content through CMS functionality.
- Provide structured handling of pages, products, gallery items, PDFs, and business content.
- Separate responsibilities across clear application layers.
- Improve maintainability through reusable backend components.
- Support secure database interaction.
- Enable consistent request and response handling.
- Provide a foundation for future feature expansion.
- Remain compatible with Hostinger Shared Hosting constraints.
- Support local development using XAMPP.
- Maintain clear boundaries between presentation, business logic, and data access.

## 3. Architectural Principles

The backend architecture follows these principles:

- Separation of concerns across distinct layers.
- Object-oriented PHP design for maintainability and reuse.
- Centralized configuration management.
- Controlled database access through defined data access components.
- Validation before business logic execution.
- Consistent error handling and logging practices.
- Minimal duplication across controllers, services, and helpers.
- Secure handling of sessions, admin access, form submissions, and uploaded files.
- Environment awareness for local and production configuration.
- Practical scalability within shared hosting limitations.

## 4. Layered Architecture

The backend will use a layered architecture to separate responsibilities and reduce direct coupling between application concerns.

### Presentation Layer

The Presentation Layer is responsible for handling the visible website and CMS interface.

Its responsibilities include:

- Rendering frontend pages.
- Displaying CMS forms and dashboards.
- Presenting product, gallery, PDF, and content data to users.
- Passing user input to the application layer.
- Displaying validation messages, success messages, and error states.
- Avoiding direct database access.

This layer should focus on presentation and user interaction only.

### Application Layer

The Application Layer coordinates requests between controllers, services, validators, and other backend components.

Its responsibilities include:

- Receiving routed requests.
- Calling the appropriate controller action.
- Managing request-level flow.
- Coordinating validation and business operations.
- Preparing data for responses.
- Applying middleware checks where required.

This layer acts as the bridge between HTTP requests and business functionality.

### Business Logic Layer

The Business Logic Layer contains the rules and workflows of the application.

Its responsibilities include:

- Managing CMS operations.
- Applying rules for products, galleries, PDFs, pages, and admin actions.
- Enforcing business constraints.
- Coordinating reusable service logic.
- Preventing controllers from becoming overloaded with business rules.
- Keeping application behavior consistent across different entry points.

This layer should not directly render pages and should not expose raw database operations to the presentation layer.

### Data Access Layer

The Data Access Layer manages communication between backend services and the database.

Its responsibilities include:

- Encapsulating database queries conceptually.
- Retrieving records for services and controllers.
- Persisting CMS-managed data.
- Updating, deleting, and reading structured data.
- Isolating database interaction from business logic.
- Supporting maintainable data operations.

This layer should provide controlled access to MySQL and avoid spreading database logic throughout the application.

### Database Layer

The Database Layer consists of the MySQL database and its schema.

Its responsibilities include:

- Storing CMS content.
- Storing product records.
- Storing gallery metadata.
- Storing PDF and document references.
- Storing admin and configuration-related data where required.
- Maintaining relationships between website entities.
- Preserving structured data integrity.

The database should remain independent of presentation logic and should support the functional needs defined by the backend architecture.

## 5. Request Lifecycle

A typical backend request should follow this lifecycle:

1. The browser sends a request to the Apache server.
2. Apache forwards the request to the PHP application.
3. The router identifies the requested path and intended action.
4. Middleware checks are applied where required, such as session validation or admin access.
5. The request is passed to the appropriate controller.
6. The controller validates request intent and delegates processing.
7. Validators check input format, required fields, and allowed values.
8. Services apply business rules and coordinate application behavior.
9. Repositories interact with the database layer when data is required.
10. Models represent structured application data where applicable.
11. The controller prepares the response.
12. The presentation layer renders the final output or the application returns an appropriate response.
13. Logs are recorded where relevant for errors, exceptions, or important operational events.

## 6. Response Lifecycle

The response lifecycle defines how output is prepared and returned to the user.

A typical response should include:

- Processed data from services or repositories.
- Validated result status.
- User-facing success or error messages.
- Appropriate view or page rendering.
- Redirect behavior where required after CMS actions.
- Safe output handling to prevent exposure of sensitive information.
- Consistent error presentation for invalid requests or failures.

For public website pages, responses should prioritize speed, readability, and reliability.

For CMS pages, responses should prioritize correctness, validation feedback, session safety, and administrative usability.

## 7. Core Components

### Router

The Router is responsible for mapping incoming requests to the correct backend action.

Conceptual responsibilities include:

- Identifying public website routes.
- Identifying CMS/admin routes.
- Forwarding requests to controllers.
- Supporting clean request organization.
- Preventing uncontrolled access to internal application components.
- Providing a single request entry flow.

### Controllers

Controllers manage request handling at the application boundary.

Conceptual responsibilities include:

- Receiving routed requests.
- Calling validators for user input.
- Delegating business operations to services.
- Preparing data for views or responses.
- Managing redirects and response status.
- Avoiding direct database logic.
- Keeping request handling concise and readable.

### Services

Services contain application workflows and business rules.

Conceptual responsibilities include:

- Managing product workflows.
- Managing gallery workflows.
- Managing PDF and document workflows.
- Managing CMS content workflows.
- Applying business validation beyond basic input checks.
- Coordinating repositories and other reusable components.
- Keeping controllers thin and focused.

### Repositories

Repositories manage data access operations.

Conceptual responsibilities include:

- Retrieving data from MySQL.
- Persisting CMS-managed records.
- Updating existing records.
- Removing records where allowed.
- Encapsulating database access rules.
- Providing data to services in a controlled way.
- Reducing duplication in data access logic.

### Models

Models represent structured application entities or data concepts.

Conceptual responsibilities include:

- Representing products, galleries, documents, pages, and admin-related entities.
- Providing consistent data structures.
- Supporting clarity between raw database records and application-level concepts.
- Helping services and repositories communicate using predictable structures.

### Validators

Validators are responsible for checking request input before processing.

Conceptual responsibilities include:

- Checking required fields.
- Validating text, numeric, file, and selection inputs.
- Validating uploaded file type and size rules.
- Supporting CMS form validation.
- Returning meaningful validation messages.
- Reducing invalid data entering business logic or the database.

### Helpers

Helpers provide reusable utility functionality.

Conceptual responsibilities include:

- Formatting common output values.
- Supporting safe redirects.
- Supporting common string or date formatting.
- Assisting with reusable presentation-related utilities.
- Avoiding duplication of simple repeated logic.

Helpers should not become a location for business rules or database access.

### Middleware

Middleware provides request-level checks before controller execution.

Conceptual responsibilities include:

- Admin authentication checks.
- Session validation.
- Access control checks.
- Request method checks.
- Security-related request filtering.
- Preventing unauthorized access to CMS functions.

Middleware should keep cross-cutting request concerns outside controllers.

### Session Manager

The Session Manager controls session-related behavior.

Conceptual responsibilities include:

- Starting and managing user sessions.
- Tracking admin authentication status.
- Supporting secure login and logout workflows.
- Managing session timeout rules.
- Reducing direct session handling across the application.
- Supporting consistent access to session values.

### Configuration Loader

The Configuration Loader manages application configuration.

Conceptual responsibilities include:

- Loading environment-specific settings.
- Providing database connection settings to approved components.
- Supporting local and production configuration separation.
- Centralizing application-level configuration.
- Preventing scattered configuration logic.
- Protecting sensitive values from public exposure.

## 8. Dependency Rules

The backend architecture should follow clear dependency rules:

- Presentation Layer may communicate with controllers but must not access the database directly.
- Controllers may use validators, services, helpers, and response handling components.
- Controllers should not contain database queries or complex business rules.
- Services may use repositories, models, validators, helpers, and configuration where appropriate.
- Services should contain business workflows and reusable operations.
- Repositories may communicate with the database layer.
- Repositories should not render views or control user-facing responses.
- Models should remain focused on representing application data.
- Validators should validate input but should not perform unrelated business operations.
- Helpers should provide reusable utilities but should not become core business components.
- Middleware should run before protected controller actions.
- Configuration should be loaded centrally and consumed only where needed.
- Database credentials should not be exposed outside approved backend components.

These rules are intended to reduce coupling and improve long-term maintainability.

## 9. Error Handling Strategy

The backend should use a consistent error handling strategy for public and CMS areas.

Error handling objectives include:

- Prevent exposing sensitive technical details to public users.
- Provide useful feedback to CMS administrators.
- Record technical errors for troubleshooting.
- Separate user-facing messages from internal error details.
- Handle validation errors gracefully.
- Handle database failures safely.
- Handle missing pages or invalid routes consistently.
- Support production-safe error reporting.

Public website errors should display safe, user-friendly messages.

CMS errors should provide clear guidance without exposing sensitive internal details such as database credentials, server paths, or stack traces.

Production error visibility should be restricted, while internal logs should retain enough information for technical investigation.

## 10. Logging Strategy (Conceptual)

Logging should support troubleshooting, operational monitoring, and incident investigation.

The logging strategy should conceptually cover:

- Application errors.
- Database connection or query failures.
- CMS administrative actions.
- Failed login attempts.
- Upload failures.
- Validation failures where operationally useful.
- Unexpected exceptions.
- Security-relevant events.

Logs should be:

- Stored outside publicly accessible website paths where possible.
- Protected from unauthorized access.
- Reviewed during troubleshooting.
- Rotated or cleaned according to hosting limitations.
- Free from unnecessary sensitive data such as passwords or secret values.

Logging should remain practical for Hostinger Shared Hosting while supporting future migration to centralized logging if the application grows.

## 11. Scalability Considerations

The backend architecture should support future growth while remaining suitable for shared hosting.

Scalability considerations include:

- Keeping business logic reusable across public pages and CMS features.
- Separating data access to simplify future database optimization.
- Designing services so new modules can be added without major rewrites.
- Avoiding tight coupling between CMS features.
- Supporting future migration from shared hosting to VPS or cloud hosting.
- Maintaining clean configuration boundaries for environment changes.
- Keeping upload handling organized for future storage expansion.
- Preparing for future caching strategies.
- Supporting additional content modules such as case studies, blogs, catalogs, downloads, or lead management.

The architecture should remain simple enough for the current project while avoiding decisions that would block future expansion.

## 12. Performance Considerations

Backend performance should be considered from the beginning.

Performance considerations include:

- Efficient database access through controlled repository logic.
- Avoiding unnecessary database calls.
- Loading only required data for each page.
- Optimizing CMS listing pages as data volume grows.
- Keeping public pages lightweight and responsive.
- Avoiding duplicated business operations.
- Supporting future caching for frequently accessed content.
- Managing uploaded files efficiently.
- Keeping configuration loading efficient.
- Monitoring slow operations during development and production testing.

Performance must be balanced with maintainability and the limitations of shared hosting.

## 13. Security Considerations

Security is a core part of the backend architecture.

Security considerations include:

- Secure admin authentication.
- Session protection.
- Input validation for all CMS forms.
- Protection against unauthorized CMS access.
- Safe handling of uploaded images and PDFs.
- Restricting allowed upload types and sizes.
- Preventing direct exposure of sensitive configuration files.
- Protecting database credentials.
- Using controlled database access patterns.
- Escaping output where user-managed content is displayed.
- Preventing public access to internal backend files.
- Handling errors without exposing technical details.
- Applying least privilege principles for database and hosting access.
- Maintaining secure backup and recovery practices.

Security should be reviewed before deployment and whenever new CMS functionality is added.

## 14. Future Expansion

The backend architecture should support future enhancements such as:

- Blog or news module.
- Case studies module.
- Careers module.
- Inquiry or lead management module.
- Product catalog filtering.
- Brochure and datasheet management.
- Multi-admin CMS roles.
- Audit logging.
- Search functionality.
- API endpoints for selected data.
- Multilingual content support.
- Integration with analytics or CRM tools.
- Migration to VPS, cloud hosting, or managed database services.

Future expansion should follow the same architectural principles defined in this document.

## 15. Related Documents

This document should be maintained together with the following project documents:

- Planning Documentation
- Frontend Documentation
- Database Documentation
- Backup and Recovery Strategy
- Deployment Documentation
- Security Guidelines
- CMS Administration Documentation
- Testing Documentation

## Approval Checklist

- [ ] Document Reviewed
- [ ] Technical Review Completed
- [ ] Architecture Verified
- [ ] No Open Issues
- [ ] Approved for Next Phase

**End of Document**
