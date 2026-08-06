# Breakpoint System

## Document Control

| Field | Details |
|---|---|
| Project Name | Nepack Website |
| Project Type | Dynamic Industrial Automation Company Website with CMS |
| Reference Website | https://nepackassociates.co.in/ |
| Technology Stack | HTML5, CSS3, Vanilla JavaScript, PHP 8.2, MySQL, Apache |
| Hosting Environment | Hostinger Shared Hosting |
| Document Type | Breakpoint System |
| Document Status | Draft |
| Prepared For | Pre-Implementation Planning |
| Prepared By | Project Design and Frontend Team |
| Version | 1.0 |

## Revision History

| Version | Date | Author | Description |
|---|---|---|---|
| 1.0 | 2026-08-06 | Project Design and Frontend Team | Initial Breakpoint System documentation |

## 1. Introduction

This document defines the Breakpoint System for the Nepack Website, a production-ready Industrial Automation Company Website with CMS functionality.

The Breakpoint System establishes consistent responsive behavior for the public website and admin panel. It defines how layouts, containers, grids, typography, spacing, components, images, and admin interfaces should adapt across device widths.

## 2. Objectives

The Breakpoint System is designed to:

- Establish consistent responsive standards across the project.
- Support a mobile-first implementation approach.
- Improve usability across mobile, tablet, laptop, desktop, and large desktop devices.
- Maintain layout consistency between public pages and admin screens.
- Support responsive product listings, galleries, forms, tables, and dashboards.
- Reduce ad hoc breakpoint decisions during implementation.
- Improve maintainability for future frontend modules.
- Support accessibility and performance across viewport sizes.

## 3. Responsive Design Philosophy

### Mobile-First Approach

The project should follow a mobile-first responsive strategy. Base layouts should support smaller screens first, then progressively enhance for larger screens.

Mobile-first design helps ensure:

- Core content remains accessible.
- Layouts remain readable on small devices.
- Navigation works on touch devices.
- Forms and actions remain usable.
- Additional layout complexity is introduced only when space allows.

### Progressive Enhancement

Larger screen layouts should enhance the experience with additional columns, wider containers, expanded navigation, larger visual hierarchy, and richer dashboard layouts.

### Consistent Breakpoints

All modules should use the shared breakpoint system. Individual components should not introduce custom breakpoints unless there is a justified design or usability need.

### Responsive Consistency

Similar components should behave consistently across breakpoints. Product cards, gallery grids, forms, tables, navigation, and admin modules should follow predictable adaptation patterns.

## 4. Breakpoint Strategy

| Breakpoint | Pixel Range | Device Category | Purpose |
|---|---:|---|---|
| XS | Up to 479px | Extra Small Mobile | Supports compact mobile devices with single-column layouts and simplified navigation |
| SM | 480-767px | Mobile / Large Mobile | Supports larger phones with improved spacing, stacked sections, and touch-friendly controls |
| MD | 768-991px | Tablet | Supports two-column layouts where practical, tablet navigation patterns, and wider content containers |
| LG | 992-1199px | Laptop / Small Desktop | Supports standard desktop-style layouts, multi-column grids, and expanded admin interfaces |
| XL | 1200-1399px | Desktop | Supports full desktop layouts, larger containers, product grids, and dashboard layouts |
| XXL | 1400px and above | Large Desktop | Supports wider layouts with controlled maximum widths and enhanced spacing |
| Ultra Wide Future | 1600px and above | Ultra Wide / Future | Optional future refinement for very large displays without stretching content excessively |

### XS: Extra Small Mobile

XS supports narrow screens where layouts should be single-column, spacing should be compact, and navigation should be simplified.

### SM: Mobile / Large Mobile

SM supports larger phones with improved readability, slightly larger containers, and better spacing while still keeping layouts mostly stacked.

### MD: Tablet

MD supports tablet layouts. Some sections may move from single-column to two-column layouts where content remains readable.

### LG: Laptop / Small Desktop

LG supports more complete desktop-style layouts, including multi-column grids, horizontal navigation, and larger admin panels.

### XL: Desktop

XL supports standard desktop experiences with full layout structure, balanced spacing, and richer content presentation.

### XXL: Large Desktop

XXL supports large desktop displays while maintaining controlled content width and avoiding excessive stretching.

### Ultra Wide Future

Ultra wide behavior may be introduced later if analytics show meaningful usage on very wide screens. Content should remain contained and readable.

## 5. Container Behavior

Containers should adapt progressively across breakpoints.

Container behavior principles:

- XS and SM should use compact horizontal padding and single-column content.
- MD should increase container width and allow selected two-column layouts.
- LG should introduce full desktop container behavior.
- XL should use standard maximum content width.
- XXL should preserve readable maximum width and avoid stretching text too far.
- Full-width sections may span the viewport, but their inner content should remain aligned to the container system.
- Admin screens should maintain usable content widths while avoiding cramped tables and forms.

## 6. Grid Adaptation

The project uses a 12-column grid conceptually, adapted by breakpoint.

Grid adaptation guidance:

| Breakpoint | Grid Behavior |
|---|---|
| XS | Single-column layout; grids stack vertically |
| SM | Single-column or two-column only for simple, compact cards |
| MD | Two-column layouts for product cards, content blocks, and selected admin widgets |
| LG | Three-column or structured multi-column layouts where content supports it |
| XL | Full grid usage with product listings, gallery layouts, and dashboard widgets |
| XXL | Full grid usage with controlled maximum width and balanced gaps |

The 12-column grid should not force dense layouts on small screens. Readability and usability should determine column count.

## 7. Typography Adaptation

Typography should follow the Typography System.

Typography adaptation principles:

- Headings should reduce progressively on smaller screens.
- Body text should remain readable on mobile.
- Hero titles should scale down to prevent awkward wrapping.
- Admin table and form text should remain legible.
- Typography should preserve hierarchy without overwhelming small screens.
- Fluid typography may be used conceptually within controlled minimum and maximum ranges.

## 8. Spacing Adaptation

Spacing should follow the Spacing System.

Spacing adaptation principles:

- Large section spacing should reduce on tablet and mobile.
- Container padding should remain sufficient on mobile.
- Grid gaps should reduce progressively on smaller screens.
- Card padding should reduce slightly on mobile while preserving readability.
- Form spacing should remain touch-friendly.
- Admin spacing should remain compact but not cramped.
- Footer spacing should stack cleanly on smaller screens.

## 9. Component Adaptation

### Header

The header should move from full horizontal layout on desktop to compact mobile-friendly layout on smaller screens.

### Navigation

Navigation should be horizontal on larger screens and simplified for mobile. Mobile navigation should remain easy to open, scan, and use.

### Hero

Hero sections should reduce heading size, spacing, and layout complexity on smaller screens while preserving message clarity and primary action visibility.

### Cards

Cards should move from multi-column grids on desktop to fewer columns or single-column layouts on mobile.

### Product Grid

Product grids should adapt from multi-column desktop layouts to two-column or single-column layouts depending on screen width and content density.

### Gallery

Gallery layouts should reduce column count on smaller screens while preserving image quality and consistent gaps.

### Tables

Tables should remain readable and usable on smaller screens. Admin tables may require responsive patterns such as horizontal scrolling, simplified columns, or stacked details where appropriate.

### Forms

Forms should stack fields vertically on mobile. Inline field groups should only appear when sufficient width is available.

### Footer

Footer columns should collapse into stacked sections on mobile while preserving readable contact information and links.

### Sidebar

Sidebars should collapse, stack, or convert into mobile-friendly navigation/filter controls on smaller screens.

### Admin Dashboard

Admin dashboards should move from multi-column widget layouts on desktop to stacked or simplified layouts on tablet and mobile.

## 10. Image Responsiveness

Images should scale responsively within their containers.

Image responsiveness principles:

- Images should not overflow their containers.
- Product and gallery images should preserve aspect ratio.
- Hero and slider images should remain visually meaningful across breakpoints.
- Logos should remain sharp and not be distorted.
- Large images should be optimized for performance.
- Future responsive image variants may be introduced for different devices.
- Image dimensions should be planned to reduce layout shift.

## 11. Accessibility Considerations

Accessibility considerations include:

- Content order should remain logical across responsive layouts.
- Visual reordering should not confuse keyboard or screen reader users.
- Touch targets should remain comfortable on mobile.
- Navigation should remain keyboard accessible.
- Forms should remain readable and easy to complete.
- Tables should remain usable on smaller screens.
- Focus states should remain visible across breakpoints.
- Text should not become too small on compact screens.
- Horizontal scrolling should be avoided for normal page content.

## 12. Performance Considerations

Performance considerations include:

- Avoid loading unnecessary large images on small screens.
- Avoid JavaScript-driven layout changes when CSS layout can handle them.
- Use responsive image planning for product, gallery, and hero visuals.
- Reduce layout shifts by planning image and content dimensions.
- Keep mobile layouts lightweight.
- Avoid excessive hidden duplicate content across breakpoints.
- Test key pages on real mobile viewport sizes.
- Ensure admin pages remain usable with realistic data volume.

## 13. Future Expansion

Future responsive enhancements may include:

- Ultra-wide layout refinements.
- Responsive image variants.
- Advanced product filtering layouts.
- Mobile admin dashboard refinements.
- Tablet-specific CMS workflows.
- Responsive comparison tables.
- Progressive web app considerations.
- Analytics-driven breakpoint review.
- Component-specific responsive documentation.

Future expansion should preserve the official breakpoint system unless a documented need requires adjustment.

## 14. Related Documents

This document should be maintained together with the following project documents:

- 01_Design_System.md
- 03_Typography_System.md
- 04_Grid_and_Layout_System.md
- 05_Spacing_System.md
- 02_Color_System.md
- Frontend Documentation
- Backend Documentation
- Admin Panel Documentation
- Accessibility Guidelines

## Approval Checklist

- [ ] Document Reviewed
- [ ] Breakpoints Verified
- [ ] Responsive Strategy Verified
- [ ] Accessibility Reviewed
- [ ] Approved for Next Phase

**End of Document**
