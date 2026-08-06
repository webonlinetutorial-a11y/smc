# API Architecture

## Document Control

| Field | Details |
|---|---|
| Project Name | Nepack Website |
| Project Type | Dynamic Industrial Automation Company Website with CMS |
| Application Style | Traditional PHP Server-Side Rendered CMS with optional APIs |
| Technology Stack | HTML5, CSS3, Vanilla JavaScript, PHP 8.2 OOP, MySQL |
| Web Server | Apache |
| Hosting Environment | Hostinger Shared Hosting |
| Development Environment | XAMPP |
| Document Type | API Architecture |
| Document Status | Draft |
| Prepared For | Pre-Implementation Planning |
| Prepared By | Project Technical Team |
| Version | 1.0 |

## Revision History

| Version | Date | Author | Description |
|---|---|---|---|
| 1.0 | 2026-08-06 | Project Technical Team | Initial API Architecture document |

## 1. Introduction

This document defines the API architecture for the Nepack Website, a dynamic Industrial Automation Company Website with CMS functionality.

The project is not API-first. It is primarily a traditional PHP Server-Side Rendered application, where public pages and CMS screens are rendered by the backend. APIs are used selectively to support AJAX operations, smoother CMS interactions, public form submissions, search behavior, filtering, counters, and future integrations.

The API architecture must remain lightweight, secure, maintainable, and compatible with Hostinger Shared Hosting.

## 2. API Objectives

The API architecture is designed to:

- Support AJAX-based interactions without changing the SSR-first architecture.
- Provide structured request and response behavior for selected dynamic operations.
- Improve user experience for forms, search, filtering, and admin actions.
- Keep API logic aligned with backend layers, services, validators, and repositories.
- Avoid duplicating business logic between SSR pages and API-style operations.
- Protect admin and CMS operations through authentication and authorization.
- Support future integration needs without overcomplicating the initial application.
- Maintain compatibility with PHP 8.2, MySQL, Apache, XAMPP, and Hostinger Shared Hosting.

## 3. API Design Principles

The API architecture follows these principles:

- APIs are secondary support interfaces, not the primary application architecture.
- Public website rendering remains server-side.
- APIs should serve specific interaction needs only.
- API requests must pass through validation, security, and error handling controls.
- API handlers should delegate business logic to services.
- API handlers should not directly bypass backend architecture layers.
- API responses must be consistent and predictable.
- Sensitive operations must require authentication and authorization.
- APIs should expose only required data.
- Future external APIs should be introduced only when there is a clear integration requirement.

## 4. API Scope

### Internal APIs

Internal APIs are backend-facing conceptual interfaces used by application components.

They may support:

- Reuse between controllers and AJAX operations.
- Shared service workflows.
- Internal module communication.
- Consistent business operations across SSR and AJAX flows.

Internal APIs are not public integration contracts and should not be treated as externally stable interfaces.

### AJAX Endpoints

AJAX endpoints support browser-based dynamic behavior for the public website and Admin Panel.

They may support:

- Product search.
- Gallery filtering.
- Contact form submission.
- Inquiry form submission.
- Download counters.
- Admin CMS actions.
- Validation-assisted interactions.
- Dynamic UI updates.

AJAX endpoints must still follow server-side validation and security rules.

### Future External APIs

Future external APIs may be introduced for integrations if business needs require them.

Possible future uses include:

- CRM integration.
- Analytics integration.
- Product catalog synchronization.
- Partner or vendor data exchange.
- Mobile application support.
- Third-party lead management.
- Download tracking integration.

External APIs should include stronger versioning, authentication, authorization, rate limiting, logging, and monitoring requirements.

## 5. API Categories

### Product Search

Product search APIs may support dynamic product lookup or filtering on public pages.

Conceptual responsibilities include:

- Accepting search or filter input.
- Validating search criteria.
- Returning safe product result data.
- Avoiding exposure of internal database structure.
- Supporting future category or brand filters.
- Preventing excessive search load.

### Contact Form

Contact form APIs may support asynchronous submission of public contact forms.

Conceptual responsibilities include:

- Validating submitted form data.
- Preventing spam or repeated abusive submissions.
- Returning user-friendly validation or success messages.
- Avoiding exposure of mail or backend processing details.
- Logging failures where useful.

### Inquiry Form

Inquiry form APIs may support product or service inquiry submissions.

Conceptual responsibilities include:

- Validating inquiry details.
- Associating inquiry context with product or service where applicable.
- Supporting future CRM or email workflows.
- Returning safe user-facing responses.
- Preventing spam and malformed submissions.

### Gallery Filtering

Gallery filtering APIs may support dynamic filtering of gallery items.

Conceptual responsibilities include:

- Accepting approved filter criteria.
- Returning safe gallery metadata.
- Supporting category-based filtering.
- Avoiding excessive data return.
- Keeping public display behavior responsive.

### Download Counter

Download counter APIs may support tracking brochure, catalog, datasheet, or PDF downloads.

Conceptual responsibilities include:

- Recording approved download activity.
- Avoiding exposure of private file paths.
- Supporting future analytics.
- Handling repeated or invalid download attempts safely.
- Maintaining download availability even if counter tracking fails where appropriate.

### Admin AJAX Operations

Admin AJAX operations may support CMS productivity features.

Conceptual responsibilities include:

- Inline status changes.
- Sorting or ordering records.
- Deleting selected records.
- Upload workflow assistance.
- Validation checks.
- Dynamic listing updates.
- Settings interactions.

Admin AJAX operations must require authentication, authorization, CSRF protection where applicable, validation, logging, and safe error handling.

### Future Integrations

Future integration APIs may support external systems.

Conceptual responsibilities include:

- Exchanging selected approved data.
- Supporting integration-specific authentication.
- Maintaining stable contracts through versioning.
- Logging integration activity.
- Applying rate limits and access controls.
- Protecting business and customer data.

## 6. Request Lifecycle

A typical API or AJAX request should follow this lifecycle:

1. The browser or approved client sends a request.
2. Apache forwards the request to the PHP application.
3. The route or endpoint handler identifies the requested operation.
4. Request method and allowed operation are validated.
5. Authentication is checked where required.
6. Authorization is checked for protected operations.
7. CSRF protection is checked for state-changing browser-based requests where applicable.
8. Input is validated and normalized.
9. The request is delegated to the appropriate service.
10. The service applies business rules.
11. Repositories or data access components are used where database interaction is required.
12. The result is converted into a structured response.
13. Errors are handled through the standard error handling strategy.
14. Relevant activity is logged according to the logging architecture.

## 7. Response Strategy

API responses should be consistent, safe, and predictable.

### Success Responses

Success responses should conceptually include:

- Clear indication that the operation succeeded.
- User-safe message where appropriate.
- Required result data only.
- No sensitive internal details.
- Data formatted for the specific frontend or integration need.

### Validation Errors

Validation error responses should conceptually include:

- Clear indication that validation failed.
- Field-level or operation-level feedback where appropriate.
- User-safe correction guidance.
- No technical internals.
- No database or file system details.

### Authentication Errors

Authentication error responses should conceptually include:

- Clear indication that authentication is required or invalid.
- Generic messaging.
- No account enumeration details.
- Guidance to re-authenticate where appropriate.
- Safe behavior for expired sessions.

### Authorization Errors

Authorization error responses should conceptually include:

- Clear indication that access is denied.
- No disclosure of restricted resource details.
- No confirmation of hidden resource existence.
- Logging where appropriate.

### Server Errors

Server error responses should conceptually include:

- Generic failure message.
- No stack traces.
- No server paths.
- No database queries.
- No credentials or configuration values.
- Internal logging for technical investigation.

## 8. Authentication Strategy for APIs

API authentication must align with the Authentication Architecture.

Authentication strategy includes:

- Public read-only APIs may not require authentication if they expose only approved public data.
- Public form APIs should include anti-abuse controls.
- Admin AJAX APIs must require authenticated admin sessions.
- Future external APIs should use dedicated authentication mechanisms.
- Session validation should apply to browser-based admin API requests.
- Authentication failures must use generic messages.
- Logout, expired sessions, and invalid sessions must be handled consistently.

## 9. Security Considerations

API security must align with the Security Architecture.

Security considerations include:

- Validate all API inputs server-side.
- Enforce authorization server-side.
- Apply CSRF protection to browser-based state-changing requests.
- Avoid exposing internal database structure.
- Avoid exposing private file paths.
- Avoid returning sensitive configuration values.
- Restrict admin operations to authenticated users.
- Return only required data.
- Log suspicious activity.
- Apply anti-spam controls to public forms.
- Avoid detailed technical error messages.
- Review future external APIs before production release.

## 10. Versioning Strategy

Because the project is not API-first, initial AJAX endpoints may not require formal external versioning.

Versioning strategy:

- Internal AJAX endpoints should remain stable for the frontend features that depend on them.
- Future external APIs should use formal versioning.
- Breaking changes should not be introduced without updating dependent clients.
- API behavior should be documented when used by external systems.
- Versioning should be introduced before third-party integrations depend on the API.
- Deprecated API behavior should be phased out through controlled change management.

## 11. Rate Limiting Strategy (Conceptual)

Rate limiting helps protect APIs from abuse and excessive traffic.

Conceptual rate limiting should apply to:

- Login-related requests.
- Contact form submissions.
- Inquiry form submissions.
- Product search requests if abused.
- Download counter requests.
- Future external APIs.
- Admin actions where repeated calls may cause risk.

Rate limiting principles include:

- Apply stricter limits to unauthenticated public actions.
- Track repeated suspicious behavior where feasible.
- Avoid blocking legitimate business inquiries unnecessarily.
- Use user-friendly messages when requests are temporarily limited.
- Log repeated abuse patterns.
- Keep implementation compatible with shared hosting limitations.

## 12. Error Handling Integration

API error handling must align with the Error Handling Architecture.

Integration principles include:

- Use consistent validation error behavior.
- Use safe authentication and authorization errors.
- Use generic server error messages.
- Log internal technical details.
- Avoid exposing stack traces, database details, file paths, or credentials.
- Provide predictable response structures for frontend handling.
- Support future correlation identifiers for troubleshooting.

## 13. Logging Integration

API logging must align with the Logging Architecture.

Events to log conceptually include:

- Failed authentication for protected API requests.
- Authorization denial.
- Validation failures where suspicious or repeated.
- Public form submission failures.
- Upload-related API failures.
- Admin AJAX changes.
- Server errors.
- Future external API access and failure patterns.

Logging should provide operational visibility without storing sensitive request data.

## 14. Future Expansion

Future API architecture enhancements may include:

- Formal external API versioning.
- API documentation for integration partners.
- Dedicated integration authentication.
- Webhook support.
- CRM integration.
- Lead management API.
- Product catalog API.
- Download analytics API.
- Admin dashboard data APIs.
- API rate limiting dashboard.
- API monitoring and alerting.
- API correlation identifiers.
- Migration to VPS or cloud hosting for stronger API controls.

Future APIs should be introduced only when they provide clear business or operational value.

## 15. Related Documents

This document should be maintained together with the following project documents:

- Backend Architecture
- Authentication Architecture
- Security Architecture
- Error Handling Architecture
- Logging Architecture
- Caching Architecture
- 01_Backend_Architecture.md
- 03_Authentication_Architecture.md
- 04_Security_Architecture.md
- 05_Error_Handling_Architecture.md
- 07_Logging_Architecture.md
- 08_Caching_Architecture.md
- Database Documentation
- Deployment Documentation
- Testing Documentation

## Approval Checklist

- [ ] Document Reviewed
- [ ] Technical Review Completed
- [ ] API Scope Verified
- [ ] Security Requirements Verified
- [ ] Approved for Next Phase

**End of Document**
