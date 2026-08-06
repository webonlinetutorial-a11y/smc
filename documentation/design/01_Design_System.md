# Design System

## Document Control

| Field | Details |
|---|---|
| Project Name | Nepack Website |
| Project Type | Dynamic Industrial Automation Company Website with CMS |
| Technology Stack | HTML5, CSS3, Vanilla JavaScript, PHP 8.2, MySQL |
| Hosting Environment | Hostinger Shared Hosting |
| Development Environment | XAMPP |
| Reference Website | https://nepackassociates.co.in/ |
| Document Type | Design System |
| Document Status | Draft |
| Prepared For | Pre-Implementation Planning |
| Prepared By | Project Design and Technical Team |
| Version | 1.0 |

## Revision History

| Version | Date | Author | Description |
|---|---|---|---|
| 1.0 | 2026-08-06 | Project Design and Technical Team | Initial Design System documentation |

## 1. Introduction

This document defines the Design System for the Nepack Website, a production-ready Industrial Automation Company Website with CMS functionality.

The Design System establishes the visual, structural, responsive, and usability standards for both the public website and the admin panel. It provides a consistent foundation for future design, frontend implementation, CMS screens, reusable components, and long-term maintenance.

## 2. Design Objectives

The Design System is designed to:

- Establish a consistent visual identity across the public website and admin panel.
- Support a professional industrial automation brand presence.
- Improve readability, usability, and navigation clarity.
- Support responsive layouts across desktop, tablet, and mobile devices.
- Create reusable UI patterns for future modules.
- Maintain frontend performance awareness.
- Support accessibility and inclusive usage.
- Ensure CMS interfaces remain practical, structured, and easy to operate.
- Provide clear design standards before implementation begins.

## 3. Design Principles

### Consistency

All pages, sections, and components should follow consistent layout, spacing, alignment, interaction, and messaging patterns.

### Simplicity

The interface should avoid unnecessary visual complexity. Public pages should communicate trust, capability, and professionalism. Admin screens should prioritize task completion and clarity.

### Readability

Content should be easy to scan and understand. Headings, body text, labels, tables, and CMS controls should maintain clear hierarchy and sufficient spacing.

### Accessibility

The design should support semantic structure, keyboard navigation, visible focus states, readable contrast, and clear interactive controls.

### Responsiveness

Layouts should adapt gracefully across screen sizes without content overlap, broken alignment, or excessive scrolling.

### Reusability

Common components such as buttons, cards, forms, tables, alerts, navigation, and pagination should follow shared design patterns.

### Performance Awareness

Design decisions should consider page speed, asset size, image optimization, and efficient rendering, especially for product listings, gallery pages, and CMS dashboards.

## 4. Visual Design Philosophy

The intended visual identity should communicate:

- Industrial reliability.
- Engineering precision.
- Professional trust.
- Technical capability.
- Clean business presentation.
- Modern but practical usability.

The public website should feel polished, credible, and industry-focused. It should support product discovery, company information, downloads, gallery presentation, and inquiry workflows.

The admin panel should feel operational and efficient. It should avoid decorative excess and instead prioritize clear navigation, readable tables, predictable forms, and fast content management.

## 5. Layout Philosophy

### Grid Usage

Grid-based layout should be used to create structured, predictable page composition. It should support product listings, gallery sections, multi-column content, dashboard widgets, and footer columns.

### Content Width

Content should be placed within controlled containers to maintain readability. Very wide screens should not stretch text or interface elements beyond comfortable scanning width.

### Section Spacing

Sections should have consistent vertical spacing. Public pages may use more open spacing for visual flow, while admin pages should use denser spacing for productivity.

### Visual Hierarchy

Visual hierarchy should guide users through content in a logical order:

- Primary page heading.
- Supporting introduction or summary.
- Key actions.
- Main content.
- Secondary information.
- Supporting links or references.

Admin hierarchy should prioritize:

- Page title.
- Primary action.
- Filters or search.
- Data table or form.
- Secondary actions.
- Status messages.

## 6. Component Philosophy

### Buttons

Buttons should communicate clear actions. Primary actions, secondary actions, destructive actions, and neutral actions should be visually distinct.

### Cards

Cards should be used for grouped content such as products, gallery items, dashboard summaries, and reusable content blocks. Cards should remain simple and should not be overused for full-page layouts.

### Forms

Forms should be clear, accessible, and easy to complete. Labels, required states, validation messages, and help text should follow consistent placement.

### Tables

Tables should be used for admin lists and structured data. They should support scanning, sorting or filtering where required, clear actions, and readable spacing.

### Navigation

Navigation should be predictable and consistent across public pages and the admin panel. Active states should clearly identify the current location.

### Breadcrumbs

Breadcrumbs should help users understand location in deeper page structures, especially in the admin panel and product sections.

### Alerts

Alerts should communicate success, warning, error, and informational states clearly. Messages should be concise and action-oriented.

### Modals

Modals should be reserved for focused interactions such as confirmations, previews, or short forms. They should not replace full-page workflows for complex tasks.

### Pagination

Pagination should be used for large product, gallery, download, or admin data lists. It should be clear, accessible, and consistent.

## 7. Accessibility Guidelines

Accessibility guidelines include:

- Use semantic HTML structure during implementation.
- Ensure all interactive elements are keyboard accessible.
- Provide visible focus states for links, buttons, fields, menus, and controls.
- Maintain readable color contrast between text and background.
- Use clear form labels and validation messages.
- Avoid relying on color alone to communicate meaning.
- Ensure navigation can be understood by assistive technologies.
- Maintain readable typography across devices.
- Ensure alerts and errors are easy to identify and understand.
- Avoid layout patterns that cause content overlap on smaller screens.

## 8. Responsive Design Philosophy

The design should follow a responsive-first approach.

Responsive behavior should ensure:

- Content remains readable on mobile devices.
- Navigation adapts cleanly to smaller screens.
- Product and gallery grids adjust by available space.
- Forms remain easy to use on touch devices.
- Tables remain usable through responsive patterns.
- Images scale without distortion.
- Admin controls remain accessible on smaller screens.
- Spacing adapts without breaking visual hierarchy.

Responsive layouts should be tested across common desktop, tablet, and mobile viewport sizes before approval.

## CSS Layout Strategy

The project should use both CSS Grid and Flexbox as complementary layout tools.

### CSS Grid

CSS Grid should be used for two-dimensional layout structures where rows and columns matter.

Use Grid for:

- Overall page layouts.
- Section layouts.
- Product listing pages.
- Gallery layouts.
- Dashboard widgets.
- Card grids.
- Footer columns.
- Multi-column content.
- Admin dashboard layouts.

Grid should define the macro structure of pages and sections. It is best suited for layouts where multiple items must align across both columns and rows.

### Flexbox

Flexbox should be used for one-dimensional alignment where items flow in a row or column.

Use Flexbox for:

- Navigation bars.
- Header alignment.
- Footer alignment.
- Buttons.
- Form controls.
- Card content alignment.
- Breadcrumbs.
- Pagination.
- Toolbars.
- Action buttons.
- Icon and text alignment.
- Mobile navigation.

Flexbox should define alignment inside components and smaller interface groups.

### Responsive Strategy

Grid and Flexbox should work together:

- Containers define readable content boundaries.
- Rows organize vertical content flow.
- Columns define page and section structure.
- Gaps provide consistent spacing between layout items.
- Wrapping allows components to adapt to smaller screens.
- Alignment controls cross-axis positioning.
- Justification controls distribution of available space.
- Grid should manage large layout regions.
- Flexbox should manage internal component alignment.

The responsive system should avoid fixed layouts that break on smaller screens. Components should adapt naturally within their containers.

## 9. Performance Considerations

Performance considerations include:

- Avoid unnecessary visual complexity.
- Optimize images before use.
- Use appropriate image sizes for product, gallery, and slider areas.
- Avoid excessive font variants.
- Keep static assets organized and reusable.
- Design reusable components to reduce duplicated frontend work.
- Avoid layout patterns that require heavy JavaScript.
- Support caching strategy for static assets.
- Keep admin screens lightweight and fast.
- Ensure public pages load quickly on typical business network conditions.

## 10. Maintainability Guidelines

Maintainability guidelines include:

- Use consistent component patterns across the project.
- Avoid creating one-off styles unless there is a clear need.
- Keep public website and admin panel design related but purpose-specific.
- Document reusable UI decisions.
- Use predictable naming in design references and documentation.
- Keep forms, tables, alerts, and buttons consistent across modules.
- Review new modules against this Design System before implementation.
- Maintain separation between content, structure, behavior, and presentation.
- Ensure future CMS modules can reuse existing interface patterns.

## 11. Future Expansion

The Design System should support future additions such as:

- Blog or news module.
- Case studies module.
- Careers module.
- Inquiry management.
- Product filtering.
- Download management.
- Multi-admin CMS roles.
- Dashboard analytics.
- Media library.
- Multilingual content.
- Additional landing pages.
- Customer testimonials.
- Partner or brand showcase sections.

Future expansion should preserve visual consistency, accessibility, responsiveness, and performance standards.

## 12. Related Documents

This document should be maintained together with the following project documents:

- Frontend Documentation
- Backend Documentation
- Database Documentation
- Backend Architecture
- Folder Architecture
- File Upload Architecture
- Caching Architecture
- Deployment Documentation
- Testing Documentation

## Approval Checklist

- [ ] Document Reviewed
- [ ] Design Principles Verified
- [ ] Accessibility Reviewed
- [ ] Responsive Strategy Verified
- [ ] Approved for Next Phase

**End of Document**
