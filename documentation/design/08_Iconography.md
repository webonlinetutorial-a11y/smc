# Iconography

## Document Control

| Field | Details |
|---|---|
| Project Name | Nepack Website |
| Project Type | Dynamic Industrial Automation Company Website with CMS |
| Reference Website | https://nepackassociates.co.in/ |
| Technology Stack | HTML5, CSS3, Vanilla JavaScript, PHP 8.2, MySQL, Apache |
| Hosting Environment | Hostinger Shared Hosting |
| Document Type | Iconography |
| Document Status | Draft |
| Prepared For | Pre-Implementation Planning |
| Prepared By | Project Design and Frontend Team |
| Version | 1.0 |

## Revision History

| Version | Date | Author | Description |
|---|---|---|---|
| 1.0 | 2026-08-06 | Project Design and Frontend Team | Initial Iconography System documentation |

## 1. Introduction

This document defines the Iconography System for the Nepack Website, a production-ready Industrial Automation Company Website with CMS functionality.

The icon system establishes consistent standards for icon library selection, style, size, color, usage, accessibility, performance, naming, and future scalability across the public website and admin panel.

## 2. Objectives

The Iconography System is designed to:

- Create visual consistency across website and CMS interfaces.
- Improve scanability of navigation, buttons, tables, and actions.
- Support professional industrial and technical communication.
- Improve admin panel usability.
- Maintain accessibility for decorative and informative icons.
- Keep icons lightweight and performance-friendly.
- Establish a clear standard for future icon selection and usage.

## 3. Icon Design Principles

### Consistency

Icons should follow a consistent visual style, size, stroke, alignment, and usage pattern across the project.

### Simplicity

Icons should be simple, recognizable, and easy to understand. Avoid overly detailed or decorative icons.

### Readability

Icons must remain legible at small sizes, especially in navigation, buttons, tables, badges, and admin actions.

### Accessibility

Icons should support accessible labeling when they communicate meaning or trigger actions.

### Scalability

The icon system should support future modules such as product filters, inquiry management, dashboards, analytics, and media libraries.

## 4. Icon Library Selection

### Primary Library: Lucide Icons

Lucide Icons is the official primary icon library.

Lucide Icons should be used for:

- Navigation icons.
- Admin sidebar icons.
- Button icons.
- Action icons.
- Table row icons.
- Status and notification icons.
- Search icons.
- Download icons.
- Gallery and media icons.
- Form and UI utility icons.

Lucide Icons are selected because they provide a clean, modern outline style, broad interface coverage, strong readability, and consistent visual construction suitable for both public website and admin panel use.

### Secondary Library: Font Awesome Brands

Font Awesome Brands may be used only for brand and social icons.

Font Awesome Brands should be used for:

- WhatsApp.
- Facebook.
- LinkedIn.
- Instagram.
- YouTube.
- Other official brand or social platform icons where required.

Font Awesome Brands is selected because brand icons should preserve recognizable platform identity and official brand shapes.

## 5. Icon Style

### Outline Icons

Outline icons should be the default style for the project. They are clean, lightweight, and consistent with a modern industrial interface.

### Filled Icons

Filled icons should be used sparingly and only when stronger emphasis is required, such as selected states, critical status indicators, or brand/social icons.

### Stroke Width

Icon stroke width should remain consistent across the interface. Icons from the primary library should not be visually mixed with inconsistent stroke weights unless reviewed.

### Corner Radius

Icons should maintain the natural corner radius and style of the selected library. Custom icons should visually match the rounded and balanced style of Lucide Icons.

### Visual Consistency

Icons should align with text, buttons, cards, and table rows. Mixed icon styles should be avoided within the same component group.

## 6. Icon Sizes

| Size | Conceptual Use |
|---|---|
| Extra Small | Inline labels, compact metadata, small badges, dense table indicators |
| Small | Buttons, form controls, breadcrumbs, compact admin actions |
| Medium | Navigation, sidebar, standard action buttons, table actions |
| Large | Feature highlights, empty states, dashboard cards, contact blocks |
| Extra Large | Hero support visuals, major empty states, large CTA sections |

Icon size should be selected based on context and should remain visually balanced with surrounding typography.

## 7. Icon Usage Guidelines

### Frontend

#### Navigation

Use icons only when they improve recognition or mobile usability. Text labels should remain clear.

#### Buttons

Use icons to reinforce button actions such as search, download, submit, view, edit, or contact.

#### Breadcrumb

Use simple separator or home icons where helpful, without making breadcrumbs visually heavy.

#### Contact Information

Use icons for phone, email, location, WhatsApp, and business hours to improve scanability.

#### Downloads

Use document or download icons to identify PDFs, brochures, datasheets, and catalogs.

#### Gallery

Use image, zoom, preview, or category icons where they improve interaction clarity.

#### Search

Use search icons in search boxes, filters, and product lookup interfaces.

#### Social Links

Use Font Awesome Brands only for social or brand platform icons.

### Admin Panel

#### Dashboard

Use icons for metrics, summaries, quick actions, and status blocks.

#### Sidebar

Use consistent Lucide icons for admin navigation modules.

#### Tables

Use icons for row actions such as view, edit, delete, status, download, and preview.

#### Actions

Action icons must be recognizable and should include labels or tooltips where needed.

#### Status

Use icons to reinforce status states such as active, inactive, warning, error, success, or pending.

#### Notifications

Use icons to help identify alert type, message severity, or action required.

## 8. Icon Color Guidelines

Icon colors should follow the Color System.

Guidelines:

- Default UI icons should use neutral or secondary text colors.
- Primary action icons should use the primary brand color when appropriate.
- Accent icons should be used sparingly for high-priority actions.
- Semantic icons should use success, warning, error, or information colors consistently.
- Disabled icons should use muted neutral colors.
- Icons should maintain sufficient contrast against their background.
- Icons should not rely on color alone to communicate meaning.

## 9. Accessibility Guidelines

### Decorative Icons

Decorative icons do not communicate essential meaning. They should not distract assistive technologies during implementation.

### Informative Icons

Informative icons communicate status, meaning, or action. They must have accessible labels or supporting text.

### ARIA Considerations

ARIA usage should distinguish between decorative and meaningful icons during implementation. Icon-only controls require accessible names.

### Keyboard Navigation

Icons used as controls must be part of keyboard-accessible interactive elements. Focus states must be visible.

## 10. Performance Considerations

### SVG Preference

SVG icons are preferred over icon fonts because they are lightweight, scalable, sharp on all displays, and easier to optimize.

### Sprite Strategy (Future)

A future SVG sprite strategy may be introduced if the number of icons grows significantly and performance review supports it.

### Lazy Loading

Large decorative or non-critical icon groups may be deferred where appropriate, but core navigation and action icons should remain immediately available.

Performance principles:

- Avoid loading entire icon libraries if only a small set is required.
- Avoid duplicate icon assets.
- Keep custom icons optimized.
- Use consistent icon sources to reduce maintenance overhead.

## 11. Naming Convention

Icon naming should be clear and purpose-based.

Naming standards:

- Use names based on the action or concept.
- Keep names consistent with component usage.
- Avoid vague names such as icon1, new-icon, misc, or final.
- Prefix brand icons where needed to distinguish them from UI icons.
- Maintain a documented list of approved icons during implementation.
- Reuse existing approved icons before introducing new ones.
- Use consistent names across design files, documentation, and frontend implementation.

## 12. Future Expansion

Future iconography expansion may include:

- Approved icon inventory.
- CMS icon picker for selected modules.
- Custom industrial product category icons.
- Dashboard analytics icons.
- Status icon library.
- SVG sprite optimization.
- Icon usage audit.
- Multilingual icon-label review.
- Print and PDF icon standards.
- Integration icons for future CRM or analytics systems.

Future icons must follow the same visual style, accessibility, performance, and naming standards.

## 13. Related Documents

This document should be maintained together with the following project documents:

- 01_Design_System.md
- 02_Color_System.md
- 07_Component_Library.md
- 03_Typography_System.md
- 04_Grid_and_Layout_System.md
- 05_Spacing_System.md
- 06_Breakpoint_System.md
- Frontend Documentation
- Accessibility Guidelines

## Approval Checklist

- [ ] Document Reviewed
- [ ] Icon Library Verified
- [ ] Accessibility Reviewed
- [ ] Performance Reviewed
- [ ] Approved for Next Phase

**End of Document**
