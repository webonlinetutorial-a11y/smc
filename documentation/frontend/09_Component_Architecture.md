# Component Architecture

## Document Control

| Field | Details |
|---|---|
| Project Name | Nepack Website |
| Project Type | Dynamic Industrial Automation Company Website with CMS |
| Frontend Technology | HTML5, CSS3, Vanilla JavaScript |
| Backend Technology | PHP 8.2 |
| Database | MySQL |
| Hosting Environment | Hostinger Shared Hosting |
| Architecture | Modular, Component Driven, Reusable, SEO Friendly, Mobile First |
| Document Type | Component Architecture |
| Document Status | Draft |
| Prepared For | CSS Architecture Readiness |
| Prepared By | Project Frontend Architecture Team |
| Version | 1.0 |

## Revision History

| Version | Date | Author | Description |
|---|---|---|---|
| 1.0 | 2026-08-06 | Project Frontend Architecture Team | Initial Component Architecture documentation |

## 1. Introduction

This document defines the Component Architecture for the Nepack Website.

The Component Architecture explains how reusable frontend components are organized, structured, composed, and reused throughout the public website and admin panel. It supports a modular, maintainable, SEO-friendly, mobile-first implementation using HTML5, CSS3, Vanilla JavaScript, and PHP 8.2 server-side rendering.

The homepage layout is finalized and approved. Its sections must be treated as reusable content components and must not be redesigned.

## 2. Objectives

The Component Architecture is designed to:

- Establish a reusable component model.
- Improve frontend maintainability.
- Reduce repeated layout and UI patterns.
- Support consistent UI across public and admin interfaces.
- Maintain low coupling between components.
- Support scalable module development.
- Improve development workflow clarity.
- Preserve the approved homepage structure.
- Support accessibility and responsive behavior.

## 3. Component Architecture Philosophy

### Component Driven Development

The frontend should be built from reusable, well-defined components. Pages should be assembled from layouts, sections, components, subcomponents, and UI elements.

### Separation of Concerns

Components should separate structure, styling, behavior, and data responsibilities. Components should not contain unrelated business logic.

### Reusability

Reusable components should be designed once and applied consistently across pages and modules.

### Predictability

Components should behave consistently across similar contexts. Users and developers should be able to predict layout, interaction, and state behavior.

### Scalability

The architecture should allow future components and modules to be added without disrupting existing pages or requiring major restructuring.

## 4. Component Categories

### Layout Components

Layout components define repeated page structure.

#### Header

Provides brand identity, top-level page structure, and access to navigation.

#### Navbar

Provides primary public website navigation and responsive mobile navigation behavior.

#### Footer

Provides secondary navigation, contact information, company details, and supporting links.

#### Breadcrumb

Provides page hierarchy and navigation context for inner pages and admin areas.

#### Page Banner

Provides reusable title or banner presentation for internal public pages.

### UI Components

UI components are reusable interface elements used across pages and modules.

#### Buttons

Support primary, secondary, outline, ghost, text, icon, and action-based interactions.

#### Cards

Present repeated content such as products, brands, downloads, gallery items, testimonials, and dashboard summaries.

#### Forms

Provide structured user input areas for contact, inquiry, admin create/edit, uploads, and settings.

#### Inputs

Support text fields, textareas, selects, checkboxes, radio buttons, toggles, file inputs, and search fields.

#### Tables

Display structured data, especially in admin listing pages.

#### Pagination

Supports navigation through long lists such as products, downloads, gallery items, and admin records.

#### Alerts

Provide success, warning, error, and information feedback.

#### Badges

Display compact status, category, or metadata indicators.

#### Modals

Provide focused overlays for confirmation, previews, forms, images, and PDFs.

#### Loaders

Represent loading, skeleton, spinner, and progress feedback states.

### Content Components

Content components represent reusable website content sections, including the approved homepage structure.

#### Hero Carousel

Displays key homepage messages, visuals, and primary call-to-action content.

#### Statistics Section

Displays business credibility indicators and measurable highlights.

#### About Preview

Provides a summary of company background and links to deeper about content.

#### Why Choose Us

Presents trust factors, capabilities, differentiators, and business strengths.

#### Product Selection Process

Explains how users can identify or choose products or solutions.

#### Product Category Cards

Displays product categories using reusable card patterns.

#### Authorized Brands

Presents supported or authorized brand logos and related information.

#### Company Introduction

Provides a structured introduction to Nepack and its industrial automation expertise.

#### Testimonials

Displays customer feedback or credibility statements.

#### Contact CTA

Encourages users to contact, enquire, or take the next business action.

### Business Components

Business components represent domain-specific public website functionality.

#### Product Grid

Displays product listings or categories in a responsive grid.

#### Product Detail

Displays product images, descriptions, specifications, related products, and inquiry action.

#### Brand Listing

Displays brand cards, logos, and related brand information.

#### Download List

Displays brochures, catalogs, datasheets, certificates, or PDF resources.

#### Gallery Grid

Displays image collections with filtering and preview behavior.

#### Search Results

Displays search result summaries, result items, empty states, and pagination.

### Admin Components

Admin components support CMS management workflows.

#### Sidebar

Provides admin navigation for CMS modules.

#### Dashboard Cards

Display admin metrics, summaries, status, and quick actions.

#### Data Tables

Display CMS records with row actions, status badges, filters, and pagination.

#### CRUD Forms

Support create, read, update, and delete workflows for CMS content.

#### Upload Components

Support image and PDF upload, validation, preview, replace, and delete workflows.

#### Filters

Support admin list filtering, search, status selection, and sorting.

## 5. Component Hierarchy

The component hierarchy is defined as:

```text
Application
|
|-- Page
|   |
|   |-- Layout
|       |
|       |-- Section
|           |
|           |-- Component
|               |
|               |-- Subcomponent
|                   |
|                   |-- UI Element
```

### Application

The complete website and admin system, including all public pages, CMS pages, assets, shared includes, and backend-rendered content.

### Page

A complete user-facing screen such as Home, About, Products, Product Detail, Gallery, Contact, Search, Login, Dashboard, or Listing Page.

### Layout

The structural arrangement of a page, including header, navigation, main content, CTA areas, sidebars, and footer.

### Section

A major content block within a page, such as Hero, Product Categories, Gallery, Contact, Dashboard Summary, or Admin Table Area.

### Component

A reusable functional or visual unit such as Product Card, Contact Form, Alert, Modal, Table, or CTA Block.

### Subcomponent

A smaller reusable part inside a component, such as card image, card title, form field group, table row action, badge, or modal footer.

### UI Element

The smallest interface unit, such as label, input, icon, button text, link, status dot, or helper text.

## 6. Component Composition

Complex pages should be assembled from reusable layouts, sections, and components.

Composition principles:

- Pages should reuse shared layout components.
- Sections should reuse common UI components.
- Components should remain focused on a single responsibility.
- Public and admin components may share base UI patterns where appropriate.
- Homepage sections should be treated as approved reusable content components.
- Product, brand, gallery, download, and search pages should reuse card, grid, form, pagination, and alert patterns.
- Admin pages should reuse sidebar, table, form, filter, upload, alert, and dashboard card patterns.

Component composition should reduce duplication and keep future changes manageable.

## 7. Component Communication

Component communication should remain simple and compatible with server-side rendering.

### Parent Component

A parent component provides layout context, passes required data conceptually, and determines which child components appear.

### Child Component

A child component renders a focused part of the interface, such as a card, field, alert, row action, or badge.

### Shared Data

Shared data may come from CMS records, configuration, page context, route context, or reusable include data.

### Dynamic Rendering

Dynamic rendering should occur server-side through PHP where CMS content is required. JavaScript may enhance selected interactions but should not become the primary rendering model.

Component communication should avoid framework-specific assumptions and should remain suitable for PHP server-side rendering.

## 8. Component Reusability Rules

### Single Responsibility

Each component should have one clear purpose. Components should not mix unrelated layout, business, and interaction responsibilities.

### Configurable Components

Reusable components should support controlled variation, such as title, image, status, action, alignment, or display mode, without requiring new component types for minor differences.

### Shared Behaviour

Similar interactions should reuse the same behavior patterns. For example, modals, dropdowns, tabs, accordions, and upload feedback should behave consistently.

### Shared Styling

Components should use the approved Design System, Color System, Typography System, Spacing System, Breakpoint System, and Component Library standards.

Reusability should not create overly generic components that are hard to understand or maintain.

## 9. Naming Conventions

Naming should follow the Coding Standards document.

### Components

Component names should describe purpose or domain, such as Product Card, Download Card, Gallery Grid, Contact Form, Dashboard Card, or Alert.

### Include Files

Include names should describe reusable layout or section responsibility, such as header, navbar, footer, breadcrumb, page banner, sidebar, or pagination.

### CSS Classes

CSS class names should be descriptive, consistent, and aligned with component purpose. Avoid vague names and one-off naming.

### JavaScript Modules

JavaScript module names should describe interaction behavior or feature purpose, such as navigation behavior, carousel behavior, form validation, upload preview, or modal interaction.

Naming should remain consistent across documentation, design references, frontend files, and backend-rendered sections.

## 10. Responsive Integration

Component responsive behavior should follow the Responsive Design document.

Guidelines:

- Components should support mobile-first behavior.
- Product and gallery grids should reduce columns across breakpoints.
- Forms should become full width on mobile.
- Tables should support responsive handling.
- Sidebars should collapse or become off-canvas on smaller screens.
- Cards should stack gracefully.
- Modals should fit within viewport limits.
- Navigation should collapse into mobile-friendly patterns.
- Buttons and action groups should remain touch-friendly.

Components should not require page-specific responsive exceptions unless clearly justified.

## 11. Accessibility

Component accessibility responsibilities include:

- Use logical structure during implementation.
- Support keyboard navigation for interactive components.
- Preserve visible focus states.
- Provide accessible labels for icon-only actions.
- Ensure forms have labels, helper text, and validation feedback.
- Avoid color-only meaning.
- Maintain readable text and contrast.
- Ensure modals, dropdowns, accordions, tabs, and navigation are accessible.
- Maintain touch target guidance.
- Ensure loading and error states are understandable.

Accessibility must be considered at the component level, not only at the page level.

## 12. Performance Considerations

### Lazy Loading

Image-heavy components such as product cards, gallery grids, brand listings, and testimonial images should support lazy loading where appropriate.

### Image Optimization

Components that display images should support optimized image usage, WebP where applicable, and predictable aspect ratios.

### Conditional Rendering

Only required components should be rendered for the current page or state. Avoid unnecessary hidden duplicates.

### Minimal DOM Complexity

Components should avoid excessive wrappers, deeply nested structures, and repeated unused elements.

Performance principles:

- Keep components lightweight.
- Avoid JavaScript when native HTML and CSS behavior is sufficient.
- Avoid duplicating components for responsive layouts.
- Prevent layout shifts through stable media sizing.
- Use reusable components to reduce asset and style duplication.

## 13. Future Expansion

Future components can be added while preserving architecture consistency.

Future additions may include:

- Blog cards.
- Case study cards.
- Careers listing components.
- Inquiry management components.
- Media library components.
- Product comparison components.
- Analytics dashboard cards.
- Advanced filter panels.
- Multi-step forms.
- Role and permission components.
- Multilingual content components.

New components should:

- Follow the same hierarchy.
- Use existing UI elements where practical.
- Follow naming conventions.
- Support responsive behavior.
- Meet accessibility expectations.
- Avoid duplicating existing component responsibilities.

## 14. Related Documents

This document should be maintained together with the following project documents:

- 07_Component_Library.md
- 11_UI_Patterns.md
- 07_Frontend_Architecture.md
- 08_File_Structure.md
- 01_Design_System.md
- 02_Color_System.md
- 03_Typography_System.md
- 04_Grid_and_Layout_System.md
- 05_Spacing_System.md
- 06_Breakpoint_System.md
- 09_Responsive_Design.md
- 10_Animation_Guidelines.md

## Approval Checklist

- [ ] Document Reviewed
- [ ] Component Hierarchy Verified
- [ ] Reusability Verified
- [ ] Accessibility Reviewed
- [ ] Ready for CSS Architecture

**End of Document**
