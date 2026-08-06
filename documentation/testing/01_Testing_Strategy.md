# Testing Strategy

## Document Control

| Field | Details |
|---|---|
| Project | Nepack Website |
| Document Title | Testing Strategy |
| Technology Stack | HTML5, CSS3, Vanilla JavaScript, PHP 8.2, MySQL |
| Server Environment | Apache |
| Development Environment | XAMPP Localhost |
| Hosting Environment | Hostinger Shared Hosting |
| Architecture Approach | Modular, Component Driven, Server Side Rendering, Mobile First, SEO Friendly |
| Document Status | Draft |
| Owner | QA Architecture |
| Last Updated | August 6, 2026 |

## Revision History

| Version | Date | Description | Author |
|---|---|---|---|
| 1.0 | August 6, 2026 | Initial Testing Strategy documentation | QA Architecture |

## 1. Introduction

This document defines the Testing Strategy for the Nepack Website project.

The Nepack Website is built using PHP 8.2, MySQL, Apache, HTML5, CSS3, and Vanilla JavaScript. The website uses server-side rendered pages, a dynamic CMS, mobile-first responsive layouts, SEO-friendly architecture, compressed images, optimized PDF downloads, and deployment on Hostinger Shared Hosting.

This strategy defines the testing methodology required to verify functional correctness, UI consistency, security, performance, maintainability, and deployment readiness before production release.

## 2. Objectives

The Testing Strategy is designed to achieve the following objectives:

- Validate all public website and Admin Panel functionality.
- Ensure server-side rendered pages behave correctly.
- Verify CMS-driven content rendering.
- Confirm UI consistency across pages, components, and devices.
- Validate responsive behavior across desktop, tablet, and mobile viewports.
- Confirm frontend behavior using pure HTML, CSS, and Vanilla JavaScript.
- Verify database integrity and backend workflows.
- Identify security risks before deployment.
- Validate SEO readiness and metadata rendering.
- Confirm performance suitability for Hostinger Shared Hosting.
- Reduce regression risk during future enhancements.

## 3. Testing Philosophy

### Quality First

Testing should be treated as an essential part of delivery, not a final correction activity. Quality should be validated throughout development so defects are found before they affect production readiness.

### Risk-Based Testing

Testing effort should prioritize areas with the highest business, technical, security, and user experience risk. Important workflows such as inquiries, contact submissions, product browsing, Admin Panel operations, authentication, file uploads, and downloads should receive focused attention.

### Incremental Testing

Testing should occur incrementally as pages, components, modules, backend workflows, and CMS features are completed. This helps prevent large defect accumulation near release.

### Early Bug Detection

Defects should be identified as early as possible through developer verification, local testing, integration checks, and structured QA review.

### Regression Prevention

Previously verified functionality should be retested when related changes are introduced. Regression testing should protect navigation, forms, CMS content, authentication, SEO metadata, asset loading, and core page rendering behavior.

## 4. Testing Levels

### Unit Testing

Unit testing verifies small, isolated pieces of logic such as validation rules, utility functions, formatting behavior, data processing, and backend helper logic.

The purpose is to confirm that individual logic units behave correctly before integration.

### Integration Testing

Integration testing verifies that connected parts of the system work together correctly. This includes PHP pages with includes, forms with backend handlers, Admin Panel workflows with database operations, AJAX requests with backend responses, and CMS data with frontend rendering.

### System Testing

System testing validates the complete website as an integrated application. It confirms that frontend, backend, database, assets, routing, rendering, forms, authentication, and CMS features work together in the intended environment.

### User Acceptance Testing

User Acceptance Testing validates whether the website supports expected business and user workflows. This includes product discovery, inquiry submission, contact access, downloads, gallery browsing, search, and Admin Panel content management.

### Regression Testing

Regression testing confirms that new changes do not break previously working functionality. It should be performed after changes to shared components, templates, navigation, backend logic, database structure, JavaScript modules, CSS architecture, and CMS workflows.

### Smoke Testing

Smoke testing verifies that the most critical website features work after deployment or major changes. It should confirm that the homepage loads, navigation works, key public pages render, forms are accessible, the Admin Panel can be reached, and no major server errors are present.

### Sanity Testing

Sanity testing verifies a focused area after a small change or fix. It confirms that the specific changed behavior works as expected without requiring a full regression cycle.

## 5. Functional Testing Scope

### Home

Testing should verify homepage rendering, hero carousel behavior, key content sections, CTA visibility, navigation access, responsive layout, and asset loading.

### About

Testing should verify company content rendering, section hierarchy, media assets, navigation path, SEO metadata, and responsive behavior.

### Products

Testing should verify product listing, category display, filtering or grouping where applicable, product card rendering, image loading, and links to product details.

### Product Details

Testing should verify product-specific content, images, descriptions, related data, inquiry paths, SEO metadata, canonical URL behavior, and missing product handling.

### Brands

Testing should verify brand listing, brand detail rendering where applicable, associated products, logo loading, unique SEO metadata, and empty-state behavior.

### Downloads

Testing should verify downloadable documents, PDF availability, labels, optimized file handling, browser download behavior, and unique SEO metadata.

### Gallery

Testing should verify gallery item rendering, thumbnails, image optimization, lazy loading, filtering or viewing behavior where applicable, and responsive layout.

### Search

Testing should verify search input behavior, result accuracy, empty results, invalid searches, indexing rules, and performance impact.

### Contact

Testing should verify contact details, form fields, validation, submission behavior, success messaging, error messaging, and accessibility.

### Inquiry

Testing should verify inquiry form flow, product or service context, validation, backend submission handling, confirmation messaging, and security controls.

### Admin Panel

Testing should verify CMS content management workflows, dashboard access, data creation, updates, deletion where applicable, file management, SEO metadata management, and error handling.

### Authentication

Testing should verify login, logout, access restrictions, invalid credentials, session behavior, authorization rules, and secure error messaging.

## 6. UI Testing

UI testing should reference the approved Design Documentation.

### Layout Consistency

Testing should verify that pages follow approved layout rules, container behavior, spacing rhythm, section alignment, and visual hierarchy.

### Responsive Behavior

Testing should verify mobile-first behavior across supported viewport sizes using the approved grid system, breakpoints, CSS Grid, and Flexbox.

### Typography

Testing should verify approved font usage, font sizes, font weights, heading hierarchy, line height, readability, and fallback behavior.

### Colors

Testing should verify that approved colors are used consistently and that contrast expectations are met.

### Components

Testing should verify reusable components such as header, navigation, hero carousel, cards, buttons, forms, tables, gallery, product cards, CTA sections, and footer.

### Navigation

Testing should verify desktop navigation, mobile navigation, active states, dropdown behavior where applicable, breadcrumbs, and keyboard accessibility.

### Forms

Testing should verify form layout, labels, field states, validation messages, success messages, error states, and responsive behavior.

### Tables

Testing should verify table readability, alignment, responsive handling, data display, and Admin Panel usability.

## 7. Database Testing

Database testing should reference the Database Documentation.

### CRUD Operations

Testing should verify that create, read, update, and delete operations work correctly for CMS-managed entities.

### Relationships

Testing should verify relationships between products, brands, downloads, gallery items, testimonials, contact data, users, and related CMS records where applicable.

### Constraints

Testing should verify database constraints such as required fields, uniqueness, foreign key behavior, valid data formats, and deletion rules.

### Data Integrity

Testing should confirm that stored data remains accurate, consistent, and complete across public rendering and Admin Panel workflows.

### Transactions

Where transactions are used, testing should verify that multi-step database operations complete fully or fail safely without partial inconsistent data.

## 8. Security Testing

Security testing should reference the Security Architecture.

### Authentication

Testing should verify secure login behavior, failed login handling, logout behavior, password handling, and access to protected areas.

### Authorization

Testing should verify that users can access only the pages, actions, and data permitted by their role or authentication state.

### Session Management

Testing should verify session creation, expiration, logout invalidation, protected route access, and session misuse prevention.

### CSRF

Testing should verify that state-changing form submissions and AJAX requests require valid CSRF protection where applicable.

### XSS

Testing should verify that user-generated, CMS-managed, and dynamic content cannot inject executable scripts into rendered pages.

### SQL Injection Prevention

Testing should verify that user input, route parameters, search terms, form fields, and Admin Panel inputs are handled safely by the backend.

### File Upload Validation

Testing should verify file type restrictions, file size limits, upload validation, naming behavior, storage rules, and prevention of unsafe executable uploads.

## 9. Performance Testing

### Page Load Speed

Testing should verify that public pages load efficiently on desktop and mobile conditions appropriate for the target audience.

### Image Optimization

Testing should verify that uploaded images are compressed, appropriately sized, WebP is used where practical, and non-critical images are lazy loaded.

### PDF Downloads

Testing should verify that PDFs are optimized before upload and that download behavior remains reliable under expected usage.

### Asset Loading

Testing should verify CSS, JavaScript, fonts, icons, images, and PDFs load predictably without unnecessary duplication or blocking.

### Database Queries

Testing should verify that dynamic pages do not perform excessive or inefficient database queries.

### Shared Hosting Suitability

Testing should confirm that the website remains suitable for Hostinger Shared Hosting, expected monthly visitors of 500 to 1000, and estimated monthly downloads of approximately 500 MB.

## 10. Compatibility Testing

Compatibility testing should verify behavior across supported browsers and devices.

### Desktop Browsers

Testing should include:

- Chrome
- Edge
- Firefox
- Safari

### Mobile Browsers

Testing should include mobile browser behavior on common Android and iOS environments where practical.

### Desktop and Mobile Compatibility

Testing should verify layout, navigation, forms, media, downloads, JavaScript interactions, typography, and responsive behavior across desktop and mobile contexts.

## 11. Accessibility Testing

Accessibility testing should conceptually verify:

### Keyboard Navigation

All interactive elements should be reachable and usable through keyboard navigation where applicable.

### Focus Visibility

Focusable elements should provide clear visible focus indicators.

### Color Contrast

Text, buttons, links, form fields, messages, and interactive states should meet approved contrast expectations.

### Semantic HTML

Rendered pages should use semantic structure, meaningful headings, accessible forms, descriptive links, appropriate image alternatives, and clear landmark behavior.

## 12. SEO Testing

SEO testing should reference the SEO Documentation.

### Meta Tags

Testing should verify page titles, meta descriptions, robots metadata, language declaration, Open Graph metadata, and Twitter Card metadata.

### Canonical URLs

Testing should verify canonical URL accuracy for static pages, dynamic product pages, brand pages, download pages, search pages, and error pages.

### Structured Data

Testing should verify that structured data is accurate, relevant, valid, and aligned with visible page content.

### XML Sitemap

Testing should verify that indexable pages are represented correctly according to the approved sitemap strategy.

### robots.txt

Testing should verify that robots.txt guidance aligns with page-level indexing rules and sitemap references.

## 13. Testing Environment

Testing should progress through controlled environments.

Development

↓

Local Testing

↓

Staging, Future

↓

Production

### Development

Development testing occurs while features are being built. Developers should validate basic functionality, rendering, and integration before handing work to QA review.

### Local Testing

Local testing should be performed on XAMPP Localhost using PHP 8.2, MySQL, and Apache to validate behavior before deployment.

### Staging

A staging environment is reserved for future use. When introduced, it should mirror production as closely as practical.

### Production

Production testing should be limited to smoke testing, deployment verification, monitoring, and validation of environment-specific behavior.

## 14. Defect Management

### Bug Reporting

Each defect should be reported with a clear title, description, affected area, expected behavior, actual behavior, severity, priority, environment, and reproduction context.

### Severity Levels

Severity should describe technical or business impact.

Common severity levels include critical, high, medium, and low.

### Priority Levels

Priority should describe how urgently the defect should be resolved.

Priority may differ from severity depending on release timing, business impact, and workaround availability.

### Resolution Workflow

Defects should move through a controlled workflow from reporting, triage, assignment, fixing, retesting, and closure.

Closed defects should be verified before release where they affect critical workflows.

## 15. Entry and Exit Criteria

### Entry Criteria

Testing should begin when:

- Relevant documentation is approved.
- Required functionality is implemented.
- Required environment is available.
- Test data is prepared where needed.
- Dependencies are available.
- Known blockers are identified.
- Build or deployment is stable enough for review.

### Exit Criteria

Testing may be considered complete when:

- Critical workflows are verified.
- High-severity defects are resolved or formally accepted.
- Functional, UI, security, performance, SEO, and accessibility checks are completed.
- Regression testing is completed for affected areas.
- Deployment readiness is confirmed.
- Remaining known issues are documented.
- Approval is provided for the next phase.

## 16. Related Documents

This Testing Strategy document should be used together with the following project documentation:

- Planning Documentation
- Backend Documentation
- Database Documentation
- Frontend Documentation
- Design Documentation

## Approval Checklist

- [ ] Document Reviewed
- [ ] Testing Levels Verified
- [ ] Security Testing Verified
- [ ] Performance Strategy Verified
- [ ] Ready for Test Case Design

**End of Document**
