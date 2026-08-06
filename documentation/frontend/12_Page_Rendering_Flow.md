# Page Rendering Flow

## Document Control

| Field | Details |
|---|---|
| Project | Nepack Website |
| Document Title | Page Rendering Flow |
| Technology Stack | HTML5, CSS3, Vanilla JavaScript, PHP 8.2, MySQL |
| Server Environment | Apache |
| Development Environment | XAMPP |
| Hosting Environment | Hostinger Shared Hosting |
| Architecture Approach | Modular, Component Driven, PHP Server Side Rendering, SEO Friendly, Mobile First |
| Document Status | Draft |
| Owner | Solution Architecture |
| Last Updated | August 6, 2026 |

## Revision History

| Version | Date | Description | Author |
|---|---|---|---|
| 1.0 | August 6, 2026 | Initial Page Rendering Flow documentation | Solution Architecture |

## 1. Introduction

This document defines the Page Rendering Flow for the Nepack Website project.

The Nepack Website uses PHP server-side rendering to generate public-facing and administrative pages. Each page is assembled through reusable includes, prepared data, SEO metadata, shared layout components, and page-specific content before the final HTML response is returned to the browser.

This document describes the conceptual rendering workflow from the initial browser request through Apache, PHP processing, data preparation, layout assembly, and final HTML delivery.

## 2. Objectives

The Page Rendering Flow is designed to achieve the following objectives:

- Define a consistent rendering lifecycle for every public page.
- Establish predictable include loading and page assembly order.
- Separate business logic from presentation responsibilities.
- Prepare dynamic data before rendering the view.
- Ensure SEO metadata is available before the document head is rendered.
- Support reusable layouts and shared frontend components.
- Improve maintainability across pages and modules.
- Support graceful rendering for missing, empty, invalid, or unavailable content.
- Optimize rendering performance for shared hosting.
- Preserve semantic, accessible, and SEO-friendly HTML output.

## 3. Rendering Philosophy

### Server Side Rendering

The Nepack Website uses PHP server-side rendering. Pages are generated on the server before being returned to the browser as complete HTML responses.

Server-side rendering supports SEO, faster meaningful content delivery, accessibility, compatibility with shared hosting, and graceful fallback when JavaScript is unavailable.

### Reusable Includes

Common layout sections should be rendered through reusable includes. Shared includes reduce duplication and ensure consistency across pages.

Examples include the header, navigation, footer, breadcrumb, and page banner.

### Dynamic Content

Dynamic content should be prepared before view rendering begins. Products, brands, gallery items, downloads, testimonials, and contact information should be retrieved, validated, and organized before they are displayed.

Rendering should not mix raw data access directly into presentation-heavy sections.

### Progressive Enhancement

The base page should render meaningful HTML without depending on JavaScript. JavaScript should enhance interactive behavior after the page is delivered.

Navigation, forms, content sections, and SEO-relevant content should remain available wherever practical without JavaScript.

### Clean HTML Output

The rendering process should produce valid, semantic, accessible, and SEO-friendly HTML.

The final output should avoid unnecessary duplication, broken markup, empty structural elements, and invalid nesting.

### Rendering Design Principles

The following principles must guide the rendering workflow:

- Every public page should follow a consistent rendering lifecycle.
- Shared layout components must be loaded in a predictable order.
- Business logic should be separated from presentation.
- Dynamic data should be prepared before rendering the view.
- Pages should render valid semantic HTML.
- SEO metadata should be generated before the `<head>` section is rendered.
- Rendering should gracefully handle missing or invalid content.

## 4. Request Lifecycle

The rendering lifecycle begins when the browser requests a page and ends when the server returns a complete HTML response.

The conceptual request sequence is:

Browser Request

↓

Apache

↓

PHP Entry Page

↓

Configuration Loading

↓

Session Initialization

↓

Database Connection

↓

Required Includes

↓

Business Logic

↓

Data Retrieval

↓

SEO Metadata Preparation

↓

Page Layout Assembly

↓

HTML Response

### Browser Request

The browser requests a public page, admin page, asset, or route from the Nepack Website.

The request may include a URL path, query parameters, form data, cookies, session identifiers, or headers.

### Apache

Apache receives the request and resolves it according to the server configuration, document root, and routing rules.

Apache forwards PHP page requests to the PHP runtime for processing.

### PHP Entry Page

The requested PHP entry page becomes the starting point for page execution.

The entry page should coordinate page-specific setup, required dependencies, data preparation, SEO metadata, and rendering assembly.

### Configuration Loading

Project configuration should be loaded before page-specific logic runs.

Configuration may include environment settings, database credentials, path constants, site configuration, security settings, and shared application settings.

### Session Initialization

Session handling should be initialized when the requested page or workflow requires session state.

Public pages should avoid unnecessary session usage unless required for forms, authentication, CSRF handling, or user-specific behavior.

### Database Connection

A database connection should be established when the page requires dynamic data from MySQL.

Pages that do not require database data should avoid unnecessary database access.

### Required Includes

Required shared files, helpers, and layout includes should be loaded in a predictable order.

Includes should be responsible for their intended rendering or support role only.

### Business Logic

Business logic should execute before presentation rendering. This may include validation of request parameters, route-level decisions, access checks, content selection, and preparation of page-specific values.

Business logic should remain separate from layout markup.

### Data Retrieval

Dynamic data should be retrieved from approved data sources before the view is assembled.

Data retrieval should include validation, filtering, ordering, and fallback handling where required.

### SEO Metadata Preparation

SEO metadata should be prepared before the page header and `<head>` section are rendered.

This ensures the page title, meta description, canonical URL, Open Graph values, and structured data are available at the correct point in the rendering lifecycle.

### Page Layout Assembly

The page is assembled from shared includes, page-specific sections, prepared data, and required assets.

The layout should follow the approved frontend architecture, component architecture, CSS architecture, and JavaScript architecture.

### HTML Response

PHP returns the final HTML response to Apache, and Apache delivers it to the browser.

The browser then parses the HTML, loads assets, applies CSS, and executes JavaScript enhancements.

## 5. Page Composition Flow

Each page should be composed using a predictable rendering order.

The typical page composition order is:

- Configuration
- Header
- Navigation
- Breadcrumb, when applicable
- Hero or page banner
- Main content
- CTA sections
- Footer
- JavaScript loading

### Configuration

Configuration and page-specific variables should be prepared before output begins.

This includes page identity, route context, dynamic data, SEO metadata, and any required state.

### Header

The header should render the document head and top-level page structure according to the approved frontend architecture.

SEO metadata must already be available before the header is rendered.

### Navigation

Navigation should render consistently across public pages. Active states should be determined from the current page context.

Navigation markup should remain semantic and accessible.

### Breadcrumb

Breadcrumbs should be rendered when they improve navigation hierarchy, SEO structure, or user orientation.

Breadcrumbs should use prepared page hierarchy data.

### Hero / Page Banner

Hero sections or page banners should establish page identity and context.

They should render using prepared content and approved component patterns.

### Main Content

Main content should contain the primary page-specific content.

Dynamic data should already be available before this section renders.

### CTA Sections

CTA sections should be rendered where appropriate to support business goals such as inquiries, contact actions, product exploration, or downloads.

### Footer

The footer should render shared site information, links, contact details, and other globally relevant content.

### JavaScript Loading

JavaScript should be loaded after core HTML content where appropriate, using the strategy defined in the JavaScript Architecture and future Asset Loading Strategy.

## 6. Dynamic Content Rendering

Dynamic content should be prepared before rendering and displayed through approved page and component patterns.

### Products

Product data should be retrieved, validated, categorized, and prepared before rendering product lists, detail sections, or product cards.

Missing or unavailable products should render an appropriate empty state or error state.

### Brands

Brand data should be prepared before brand listings, brand associations, product-brand relationships, or brand-specific page sections are rendered.

### Gallery

Gallery data should be prepared with image paths, captions, categories, ordering, and availability checks before gallery output is assembled.

Unavailable gallery items should not break the page layout.

### Downloads

Download data should be prepared with file metadata, labels, availability status, and access rules before rendering.

Invalid or unavailable downloads should be handled gracefully.

### Testimonials

Testimonials should be retrieved, filtered, ordered, and prepared before rendering.

Empty testimonial sets should not create broken or empty interface sections.

### Contact Information

Contact details should be managed consistently and prepared before rendering contact sections, footer details, inquiry forms, and business information areas.

Contact data should remain accurate and should avoid duplication across unrelated templates.

## 7. Shared Include Flow

Shared includes should render in a predictable order and should have clear responsibilities.

### header.php

The header include should render the document opening structure, metadata, CSS references, and any global head-level requirements.

SEO metadata should be prepared before this include is rendered.

### navbar.php

The navbar include should render primary navigation and related navigation controls.

It should use the current page context to support active navigation states where applicable.

### breadcrumb.php

The breadcrumb include should render page hierarchy when applicable.

It should receive prepared breadcrumb data and should not determine complex page routing by itself.

### page-banner.php

The page banner include should render page identity content such as page title, supporting copy, image, or contextual banner content where applicable.

It should rely on prepared page-specific content.

### footer.php

The footer include should render global footer content, closing layout structure, and footer-level asset loading where applicable.

It should remain consistent across public pages unless a documented page-specific variation is required.

### Conceptual Include Order

The conceptual shared include order is:

- header.php
- navbar.php
- breadcrumb.php, when applicable
- page-banner.php, when applicable
- page-specific content
- footer.php

## 8. Error Rendering Strategy

Error rendering should reference the Error Handling Architecture.

The frontend rendering layer should provide consistent, user-friendly output for failed or incomplete requests.

### 404

A 404 page should render when a requested page, product, resource, route, or content item cannot be found.

The 404 response should preserve site navigation, provide a clear message, and help the user continue browsing.

### 500

A 500 page should render when an unexpected server-side error prevents normal page rendering.

The public error output should avoid exposing sensitive technical details.

### Empty Results

Empty result states should render when a valid page or request returns no matching content.

Examples include product lists, gallery filters, search results, downloads, or testimonials.

Empty states should be clear, useful, and should not be treated as system errors.

### Invalid Parameters

Invalid query parameters, route values, filters, identifiers, or request values should be validated before rendering.

When invalid parameters are detected, the page should either render a safe fallback, an empty state, a validation message, or an appropriate error page based on the request context.

## 9. SEO Rendering Flow

SEO rendering should reference the approved SEO Structure.

SEO metadata should be prepared before the `<head>` section is rendered. This ensures search engines, crawlers, and social platforms receive complete metadata in the initial HTML response.

### Meta Title

Each page should prepare a unique and meaningful meta title before the header renders.

Dynamic pages should generate titles based on prepared page data such as product, brand, category, or content name.

### Meta Description

Each page should prepare a concise and relevant meta description before rendering the head section.

Descriptions should accurately reflect the page content.

### Canonical URL

Each page should prepare its canonical URL during metadata preparation.

Canonical URLs should account for route structure, dynamic pages, and duplicate-content prevention.

### Open Graph

Open Graph metadata should be prepared for pages that may be shared socially.

Dynamic pages should use relevant prepared data such as title, description, image, and URL.

### Structured Data

Structured data should be prepared where applicable to support search visibility.

Structured data should align with page type, available content, and approved SEO rules.

## 10. Asset Integration

Asset integration should reference the future Asset Loading Strategy document.

Assets should be loaded in a predictable and performance-conscious manner.

### CSS Loading

CSS should be loaded according to the approved CSS Architecture and future Asset Loading Strategy.

Critical global styles should be available early enough to prevent poor rendering experiences.

### JavaScript Loading

JavaScript should be loaded according to the JavaScript Architecture.

Non-critical scripts should not block initial content rendering where practical.

### Font Loading

Fonts should be loaded in a way that supports readability, performance, and stable rendering.

Font behavior should align with the approved Typography System and future Asset Loading Strategy.

### Image Loading

Images should be optimized, properly sized, and loaded according to their importance in the page.

Non-critical images should support lazy loading where appropriate.

## 11. Performance Considerations

The rendering flow should support performance on both local XAMPP development and Hostinger Shared Hosting.

### Server-Side Rendering Benefits

Server-side rendering provides complete HTML in the initial response, supporting SEO, accessibility, faster content visibility, and reduced reliance on client-side rendering.

### Reduced HTTP Requests

Shared assets and reusable includes should reduce unnecessary duplication and support efficient loading.

Asset grouping and loading strategy should be defined in the future Asset Loading Strategy.

### Shared Includes

Shared includes reduce repeated markup, improve consistency, and simplify maintenance.

Includes should remain efficient and should not perform unnecessary heavy processing.

### Lazy Loading

Lazy loading should be used for non-critical images, media, and deferred content where appropriate.

### Image Optimization

Images should be optimized for format, size, compression, dimensions, and responsive usage.

Large unoptimized images should not be introduced into the rendering flow.

### Cache Awareness

Rendering should account for browser caching, server caching opportunities, static asset cache headers, and shared hosting constraints.

Dynamic content should be cached only where appropriate and safe.

## 12. Accessibility

Rendering must support semantic, accessible HTML output.

The page rendering process should ensure:

- Meaningful page structure.
- Correct heading hierarchy.
- Semantic landmarks where appropriate.
- Descriptive link and button text.
- Accessible form labels and messages.
- Proper image alternative text where required.
- Valid document structure.
- Keyboard-friendly navigation foundations.
- Compatibility with progressive enhancement.
- Clear error and empty-state messaging.

Accessibility responsibilities should be considered before the final HTML response is delivered, not added only through JavaScript.

## 13. Future Expansion

New pages can be added without changing the rendering architecture when they follow the established lifecycle.

Each new page should prepare configuration, validate request data, retrieve required dynamic content, prepare SEO metadata, render shared includes in the approved order, render page-specific content, and load required assets according to the approved strategies.

New includes should be introduced only when they represent reusable layout or component responsibilities.

New dynamic content types should follow the same data preparation, validation, rendering, empty-state, SEO, performance, and error-handling principles.

## 14. Related Documents

This Page Rendering Flow document should be used together with the following project documentation:

- 07_Frontend_Architecture.md
- 08_File_Structure.md
- 09_Component_Architecture.md
- 10_CSS_Architecture.md
- 11_JavaScript_Architecture.md
- 01_Backend_Architecture.md
- 09_API_Architecture.md

## Approval Checklist

- [ ] Document Reviewed
- [ ] Rendering Flow Verified
- [ ] Include Strategy Verified
- [ ] SEO Rendering Verified
- [ ] Ready for Asset Loading Strategy

**End of Document**
