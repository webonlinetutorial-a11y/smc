# JavaScript Architecture

## Document Control

| Field | Details |
|---|---|
| Project | Nepack Website |
| Document Title | JavaScript Architecture |
| Technology Stack | HTML5, CSS3, Vanilla JavaScript ES6+, PHP 8.2, MySQL |
| Hosting Environment | Hostinger Shared Hosting |
| Architecture Approach | Modular, Component Driven, Responsive, SEO Friendly, Mobile First |
| Document Status | Draft |
| Owner | Frontend Architecture |
| Last Updated | August 6, 2026 |

## Revision History

| Version | Date | Description | Author |
|---|---|---|---|
| 1.0 | August 6, 2026 | Initial JavaScript Architecture documentation | Frontend Architecture |

## 1. Introduction

This document defines the JavaScript architecture for the Nepack Website project.

The project uses Vanilla JavaScript ES6+ only. No JavaScript framework is required for the frontend architecture. JavaScript should be used to progressively enhance user interactions, improve usability, support dynamic behavior, and communicate with backend services where required.

The architecture is designed to keep frontend behavior maintainable, scalable, predictable, loosely coupled, reusable, easy to debug, and optimized for performance across public website pages and administrative interfaces.

## 2. Objectives

The JavaScript architecture aims to achieve the following objectives:

- Provide a modular structure for all frontend behavior.
- Keep JavaScript reusable across pages and components.
- Reduce coupling between UI behavior, business rules, and backend communication.
- Support predictable component initialization and state management.
- Improve debugging through clear module responsibilities.
- Avoid unnecessary global variables and side effects.
- Support progressive enhancement for interactive components.
- Maintain accessibility across keyboard, focus, and ARIA-driven interactions.
- Optimize performance through efficient DOM access, event handling, and request management.
- Align frontend behavior with approved Component Architecture, CSS Architecture, Backend API Architecture, Security Architecture, and Error Handling Architecture.

## 3. JavaScript Philosophy

### Modular JavaScript

JavaScript should be organized into small, focused modules. Each module should have a clear responsibility and should avoid unnecessary dependencies on unrelated modules.

Modules should be reusable wherever possible and should support the component-driven architecture of the Nepack Website.

### Progressive Enhancement

All interactive components should be progressively enhanced. Core page content, navigation, forms, and important user journeys should remain functional without JavaScript wherever practical.

JavaScript should enhance usability rather than become the only path to accessing essential website content.

### Separation of Concerns

JavaScript should be responsible for behavior, not structure or presentation. HTML should define semantic content, CSS should define styling, and JavaScript should define interaction and dynamic behavior.

Business logic should remain separate from UI logic. UI modules should manage interface behavior, while validation rules, request handling, and shared utilities should be kept in appropriate dedicated modules.

### Reusable Functions

Repeated behavior should be handled through reusable functions or modules. Common patterns such as class toggling, focus management, AJAX handling, validation handling, debounce, throttle, and notification behavior should not be duplicated across unrelated scripts.

### Event Driven Architecture

The frontend should use an event-driven approach for user interactions and component behavior. Events should be handled predictably, with clear ownership over which module responds to which interaction.

Where applicable, event delegation should be preferred to reduce repeated event listeners and improve performance.

### Minimal Global Scope

Global scope usage should be minimized. Modules should avoid exposing unnecessary variables, functions, or state globally.

Any required global configuration should be intentionally defined, documented, and kept limited.

### JavaScript Design Principles

The following principles must guide all JavaScript implementation:

- Keep JavaScript modular and reusable.
- Avoid inline JavaScript.
- Prefer event delegation where applicable.
- Minimize DOM queries through caching.
- Keep business logic separate from UI logic.
- All interactive components should be progressively enhanced.
- The website must remain functional even if JavaScript is unavailable wherever practical.
- All modules should be independent and loosely coupled.

## 4. JavaScript Responsibilities

JavaScript should be used only where behavior or interaction is required. It should not replace semantic HTML, CSS-based layout, or server-side responsibilities.

### Navigation Interaction

JavaScript may manage navigation behavior such as active states, menu toggles, sticky behavior, scroll-aware changes, and responsive interactions.

### Hero Carousel

JavaScript may control carousel slide transitions, navigation controls, autoplay behavior, pause behavior, accessibility states, and interaction timing.

### Dropdown Menus

JavaScript may manage opening, closing, keyboard support, focus behavior, outside-click handling, and accessible state updates for dropdown menus.

### Mobile Navigation

JavaScript may control mobile menu toggles, menu visibility, focus trapping where required, body scroll handling, and ARIA state updates.

### Search Interaction

JavaScript may support search input behavior, live suggestions, result filtering, AJAX search requests, loading states, and empty-state messaging.

### Gallery Interaction

JavaScript may manage image filtering, lightbox behavior, carousel-style galleries, keyboard navigation, image loading states, and modal viewing.

### Tabs

JavaScript may manage tab switching, active states, keyboard navigation, ARIA attributes, and content visibility.

### Accordion

JavaScript may manage expandable content sections, single-open or multi-open behavior, keyboard support, and ARIA state updates.

### Modal Windows

JavaScript may manage modal opening, closing, focus trapping, backdrop behavior, escape-key handling, and restoration of focus after closing.

### Form Validation

JavaScript may provide client-side validation, inline feedback, field state updates, and submission readiness checks.

Client-side validation must support usability but must not replace server-side validation.

### AJAX Requests

JavaScript may communicate with backend endpoints defined by the Backend API Architecture. AJAX behavior should include consistent request flow, response handling, error handling, loading states, and security requirements.

### Back To Top

JavaScript may control visibility and smooth interaction behavior for back-to-top controls, while respecting reduced-motion preferences.

### Lazy Loading

JavaScript may enhance lazy loading for images, galleries, media, or deferred content where native browser behavior is insufficient.

### Loading Indicators

JavaScript may manage loading indicators for forms, AJAX requests, searches, galleries, and dynamic UI updates.

### Notification Messages

JavaScript may display success, warning, error, and informational messages in a consistent and accessible manner.

## 5. Module Organization

JavaScript should be conceptually organized by responsibility. Modules should be independent, reusable, and aligned with the project's component-driven architecture.

### Core Modules

Core modules should manage application initialization, shared configuration, common startup behavior, and cross-page coordination.

They should remain lightweight and should not contain page-specific logic.

### UI Modules

UI modules should manage common interface behavior such as menu toggles, focus handling, scroll behavior, back-to-top controls, notifications, and loading states.

### Component Modules

Component modules should manage reusable interactive components such as carousel, tabs, accordions, dropdowns, modals, cards with interactions, CTA interactions, and navigation components.

Component modules should reference the approved Component Architecture and should not redefine component structure.

### Utility Modules

Utility modules should provide reusable helper behavior such as debounce, throttle, DOM helpers, class helpers, validation helpers, request helpers, formatting helpers, and accessibility helpers.

Utilities should remain generic and should not contain page-specific business behavior.

### Form Modules

Form modules should manage client-side validation, field state handling, submission behavior, success states, error messaging, and AJAX form communication where applicable.

Contact, inquiry, login, and admin forms should use consistent validation and messaging patterns.

### Gallery Modules

Gallery modules should manage gallery-specific interactions such as filtering, media preview, lightbox behavior, image loading, navigation, and responsive interaction behavior.

### Search Modules

Search modules should manage search input interactions, filtering, suggestion behavior, AJAX search requests, loading indicators, empty states, and error states.

### Admin Modules

Admin modules should support administrative interface behavior such as data tables, form controls, dashboard interactions, confirmation dialogs, filters, and AJAX-powered admin workflows.

Admin behavior should remain separate from public website behavior unless using shared utilities.

### Future Modules

Future modules should be added according to the same architectural principles. Each new module should have a clear responsibility, limited dependencies, predictable initialization, and documented relationship to existing modules.

## 6. DOM Interaction Strategy

### Event Delegation

Event delegation should be used where multiple similar elements require the same behavior, especially for navigation items, dropdown triggers, tabs, accordions, gallery items, table actions, and dynamically inserted content.

Delegation should be applied thoughtfully and should not make event ownership unclear.

### DOM Selection

DOM selection should be intentional, limited, and cached where repeated access is required. Modules should avoid excessive queries during repeated interactions such as scroll, resize, input, or animation-driven behavior.

Selectors used by JavaScript should be stable and should not rely on fragile styling classes where avoidable.

### Dynamic Content Handling

Modules that manage dynamic content should support elements added after initial page load. This applies to AJAX results, filtered galleries, search results, admin table rows, validation messages, and notification messages.

Dynamic content should preserve accessibility requirements and consistent state handling.

### State Updates

State changes should be predictable and centralized within the responsible module. UI state may include active, open, expanded, selected, disabled, loading, valid, invalid, and error states.

JavaScript should update state classes and accessibility attributes consistently, while CSS remains responsible for visual presentation.

## 7. Event Handling Strategy

### Click Events

Click events should be used for buttons, toggles, navigation controls, carousel controls, dropdowns, modals, tabs, accordions, galleries, and admin actions.

Click handlers should prevent default behavior only when necessary and should preserve expected browser behavior where possible.

### Input Events

Input events should be used for real-time validation, search suggestions, filtering, and dynamic form feedback.

Input handlers should be optimized to avoid excessive computation and unnecessary DOM updates.

### Scroll Events

Scroll events should be used sparingly for behavior such as sticky header states, back-to-top visibility, lazy loading enhancements, or scroll-aware navigation.

Scroll handlers should use throttling, passive listeners where appropriate, and minimal DOM work.

### Resize Events

Resize events should be used only when layout-dependent behavior cannot be handled by CSS alone.

Resize handlers should be debounced and should avoid recalculating layout unnecessarily.

### Keyboard Events

Keyboard events should support accessibility for menus, dropdowns, tabs, accordions, modals, galleries, and form controls.

Keyboard behavior should follow expected interaction patterns and should not interfere with native browser input behavior.

### Form Events

Form events should manage validation, submission, loading states, error messaging, success messaging, and AJAX submission where applicable.

Form submission behavior must remain coordinated with server-side validation and backend response handling.

## 8. AJAX Strategy

The AJAX strategy should reference the Backend API Architecture.

AJAX should be used for interactions that benefit from dynamic communication with the PHP backend, such as contact form submission, inquiry form submission, search behavior, admin actions, filtering, and asynchronous data updates.

### Request Flow

AJAX requests should follow a consistent flow: prepare request data, apply required security tokens, show loading state, send request, process response, update UI state, and complete cleanup.

Requests should be scoped to the module responsible for the interaction.

### Response Handling

Responses should be handled consistently based on the backend response format defined in the Backend API Architecture.

Successful responses should update the interface clearly and should avoid unnecessary page reloads where dynamic handling is appropriate.

### Error Handling

AJAX errors should be handled gracefully. Frontend modules should account for validation errors, server errors, network errors, timeout behavior, and unexpected response formats.

Error handling should align with the Backend Error Handling Architecture.

### Loading State

Loading states should be shown for interactions where the user must wait for a backend response. Loading indicators should be clear, accessible, and removed when the request completes.

Repeated submissions should be prevented during active requests where appropriate.

### Validation

Client-side validation should run before submission where practical. Server-side validation remains authoritative and must always be respected.

Validation errors returned by the backend should be displayed near the relevant fields or in a suitable message area.

### Security

AJAX requests must follow the Security Architecture. Required CSRF tokens, authentication context, request methods, and response handling expectations must be respected.

Sensitive data should not be exposed unnecessarily in frontend scripts.

## 9. Form Validation Strategy

Form validation should apply consistently across contact, inquiry, login, and admin forms.

### Contact Forms

Contact forms should validate required fields, email format, message content, consent requirements where applicable, and submission readiness.

Feedback should help users correct errors without losing entered information.

### Inquiry Forms

Inquiry forms should validate required contact details, product or service interest fields, message details, and any business-specific inquiry requirements defined by backend validation.

### Login Forms

Login forms should validate required credentials before submission and should display authentication errors in a clear, secure, and non-revealing manner.

Login validation messaging should avoid exposing whether a specific account exists.

### Admin Forms

Admin forms should support validation for required fields, field formats, content constraints, file or media inputs where applicable, and server-returned validation errors.

Admin validation should prioritize clarity and data integrity.

### Client-Side Validation

Client-side validation should provide immediate usability feedback. It should reduce avoidable submission errors but must never be treated as the only validation layer.

### Server-Side Validation Relationship

Server-side validation is authoritative. JavaScript must respect and display server validation responses consistently.

Frontend validation rules should mirror backend expectations where practical to reduce user friction.

### Error Messaging

Error messages should be specific, readable, accessible, and associated with the relevant field or form section.

Error states should be visually clear and should include accessibility state updates.

### Success Messaging

Success messages should clearly confirm completed actions. For AJAX forms, success states should explain the result without requiring a page reload unless the workflow requires navigation.

## 10. Performance Strategy

JavaScript should be implemented with performance as a core architectural concern.

### Lazy Loading

Lazy loading should be used for images, galleries, media, or non-critical dynamic content where it improves initial page performance.

Native browser capabilities should be preferred where sufficient.

### Debouncing

Debouncing should be used for high-frequency events where the final user action is most important, such as search input, resize handling, and form field validation.

### Throttling

Throttling should be used for repeated events that require periodic updates, such as scroll-based behavior or continuous viewport observation.

### Request Optimization

AJAX requests should avoid duplication, unnecessary polling, and repeated submissions. Modules should prevent redundant requests where the same result is already available or a request is already in progress.

### Efficient DOM Updates

DOM updates should be batched where possible. Modules should avoid repeated layout reads and writes during the same interaction cycle.

Frequently accessed elements should be cached within the responsible module.

### Deferred Script Loading

Non-critical scripts should be deferred where appropriate to protect page rendering performance.

Critical content and SEO-relevant content should not depend on delayed JavaScript execution.

## 11. Accessibility

JavaScript must support accessible interaction patterns across all enhanced components.

### Keyboard Navigation

Interactive components should be operable with the keyboard where applicable. This includes navigation menus, dropdowns, tabs, accordions, modals, galleries, and forms.

Keyboard support should follow expected behavior for each component type.

### Focus Management

JavaScript should manage focus for modals, mobile navigation, dropdowns, validation errors, and dynamically inserted messages where required.

Focus should not be moved unexpectedly unless the movement supports the user's current task.

### ARIA State Updates

JavaScript should update ARIA states when component state changes. This includes expanded, selected, hidden, pressed, invalid, disabled, and live-region behavior where applicable.

ARIA should support semantic HTML and should not be used to compensate for avoidable structural issues.

### Reduced Motion

JavaScript-driven animations and transitions should respect reduced-motion user preferences.

Motion should not be required to understand content, complete forms, or operate navigation.

## 12. Error Handling

Frontend error handling should reference the Backend Error Handling Architecture.

JavaScript should handle predictable frontend and backend error scenarios gracefully. This includes validation errors, failed AJAX requests, unexpected responses, unavailable network conditions, missing DOM elements, component initialization failures, and permission-related admin errors.

Frontend responsibilities include:

- Showing clear and accessible error messages.
- Preserving user input where possible.
- Preventing duplicate actions after failure.
- Logging useful debugging information during development.
- Avoiding exposure of sensitive backend details to public users.
- Maintaining stable UI state after an error occurs.

Error messages should help users recover from the issue without exposing implementation details.

## 13. Security

Frontend security responsibilities should reference the Security Architecture.

JavaScript cannot provide complete security by itself, but it must support secure interaction patterns and avoid introducing unnecessary risk.

### XSS Awareness

JavaScript should avoid unsafe insertion of untrusted content into the DOM. Any dynamic content displayed from backend responses, user input, or external sources should follow the sanitization and escaping rules defined by the Security Architecture.

### CSRF Token Integration

AJAX requests that modify server-side state should include the required CSRF token or approved security mechanism defined by the backend.

Missing or invalid CSRF responses should be handled gracefully.

### Secure AJAX Requests

AJAX requests should use approved endpoints, expected request methods, and secure response handling patterns.

Sensitive data should not be stored in client-side scripts, browser-visible configuration, or unnecessary DOM attributes.

### Input Sanitization Relationship

Client-side validation may help detect invalid input, but sanitization and authoritative validation must occur on the server.

JavaScript should not assume that client-side checks make submitted data safe.

## 14. Future Expansion

New JavaScript modules can be added without restructuring the architecture when they follow the established module principles.

Each new module should:

- Have a clear single responsibility.
- Avoid inline JavaScript.
- Use stable DOM hooks.
- Keep business logic separate from UI logic.
- Reuse existing utilities where appropriate.
- Support progressive enhancement.
- Respect accessibility requirements.
- Avoid unnecessary global scope.
- Follow the approved event handling, AJAX, validation, performance, security, and error handling strategies.

Future features should extend the existing module categories or introduce a new category only when there is a clear architectural need.

## 15. Related Documents

This JavaScript Architecture document should be used together with the following project documentation:

- 09_Component_Architecture.md
- 10_CSS_Architecture.md
- 09_API_Architecture.md
- 04_Security_Architecture.md
- 05_Error_Handling_Architecture.md

## Approval Checklist

- [ ] Document Reviewed
- [ ] Module Organization Verified
- [ ] Event Strategy Verified
- [ ] Performance Reviewed
- [ ] Ready for Page Rendering Flow

**End of Document**
