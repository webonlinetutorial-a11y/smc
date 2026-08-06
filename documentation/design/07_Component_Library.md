# Component Library

## Document Control

| Field | Details |
|---|---|
| Project Name | Nepack Website |
| Project Type | Dynamic Industrial Automation Company Website with CMS |
| Reference Website | https://nepackassociates.co.in/ |
| Technology Stack | HTML5, CSS3, Vanilla JavaScript, PHP 8.2, MySQL, Apache |
| Hosting Environment | Hostinger Shared Hosting |
| Document Type | Component Library |
| Document Status | Draft |
| Prepared For | Pre-Implementation Planning |
| Prepared By | Project Design and Frontend Team |
| Version | 1.0 |

## Revision History

| Version | Date | Author | Description |
|---|---|---|---|
| 1.0 | 2026-08-06 | Project Design and Frontend Team | Initial Component Library documentation |

## 1. Introduction

This document defines the Component Library for the Nepack Website, a production-ready Industrial Automation Company Website with CMS functionality.

The Component Library establishes reusable UI components for the public website and admin panel. It defines component purpose, behavior, usage, states, accessibility expectations, and maintainability standards before implementation begins.

## 2. Objectives

The Component Library is designed to:

- Ensure consistent UI patterns across the website and admin panel.
- Improve reusability across future pages and CMS modules.
- Support accessible and responsive interactions.
- Reduce duplicated design and frontend decisions.
- Improve maintainability during long-term development.
- Support scalable design for future modules.
- Provide clear standards for component naming, states, and behavior.

## 3. Component Design Principles

### Consistency

Components should look and behave consistently across public and admin interfaces.

### Reusability

Components should be designed once and reused across similar contexts wherever practical.

### Accessibility

Components should support keyboard navigation, readable labels, focus indicators, and assistive technology compatibility.

### Responsive Design

Components should adapt cleanly across desktop, laptop, tablet, and mobile breakpoints.

### Performance

Components should remain lightweight and avoid unnecessary JavaScript or heavy visual effects.

### Simplicity

Components should be clear, predictable, and easy to understand. Decorative complexity should not reduce usability.

## 4. Global Component Rules

### Border Radius

Border radius should be consistent across buttons, cards, inputs, modals, badges, and panels. Radius should support a professional and modern appearance without making components feel overly playful.

### Shadows

Shadows should be subtle and used only to clarify elevation or focus. Heavy decorative shadows should be avoided.

### Elevation

Elevation should indicate hierarchy, overlays, modals, dropdowns, and interactive surfaces. Elevation should be consistent and restrained.

### Transitions

Transitions should be short, smooth, and functional. They should clarify state changes without slowing interaction.

### Hover States

Hover states should provide visible feedback for clickable elements such as buttons, links, cards, table rows, navigation items, and dropdown options.

### Focus States

Focus states must be clearly visible for keyboard users. Focus indicators should not be removed.

### Disabled States

Disabled states should appear visually inactive and should communicate that interaction is unavailable. Disabled components should not rely on color alone.

### Active States

Active states should identify selected navigation items, pressed buttons, active filters, selected tabs, and current pagination items.

## 5. Button Components

### Primary Button

Purpose: Represents the main action on a page or section.

Usage:

- Enquiry actions.
- Form submissions.
- Save actions.
- Primary admin operations.

States:

- Default.
- Hover.
- Focus.
- Active.
- Disabled.
- Loading.

Accessibility:

- Must have clear text.
- Must be keyboard accessible.
- Must provide visible focus state.

### Secondary Button

Purpose: Supports secondary actions.

Usage:

- Cancel.
- Back.
- View details.
- Secondary CMS actions.

States:

- Default.
- Hover.
- Focus.
- Active.
- Disabled.

Accessibility:

- Must remain visually distinct from primary buttons.
- Must use readable labels.

### Outline Button

Purpose: Provides medium-emphasis action without strong fill.

Usage:

- Alternative actions.
- Filter actions.
- Download or view options.

States:

- Default.
- Hover.
- Focus.
- Active.
- Disabled.

Accessibility:

- Border and text must meet contrast requirements.

### Ghost Button

Purpose: Provides low-emphasis action with minimal visual weight.

Usage:

- Toolbar actions.
- Header actions.
- Secondary admin controls.

States:

- Default.
- Hover.
- Focus.
- Active.
- Disabled.

Accessibility:

- Must still be identifiable as interactive.

### Text Button

Purpose: Used for lightweight actions within content.

Usage:

- Learn more.
- Inline actions.
- Small admin actions.

States:

- Default.
- Hover.
- Focus.
- Active.
- Disabled.

Accessibility:

- Should not rely only on color to appear interactive.

### Icon Button

Purpose: Compact action represented by an icon.

Usage:

- Edit.
- Delete.
- View.
- Download.
- Close.
- Search.
- Menu.

States:

- Default.
- Hover.
- Focus.
- Active.
- Disabled.

Accessibility:

- Must have an accessible label.
- Icon meaning must be clear.
- Destructive icon actions require confirmation where appropriate.

### Button Sizes

| Size | Usage |
|---|---|
| Small | Dense admin tables, compact toolbars, secondary inline actions |
| Medium | Standard forms, cards, navigation actions, admin operations |
| Large | Hero CTAs, major public page actions, important conversion buttons |

## 6. Form Components

### Text Field

Used for short text input such as name, title, phone, email, category, or short metadata.

### Textarea

Used for longer content such as descriptions, messages, product details, and CMS content fields.

### Select

Used when users must choose from predefined options such as category, status, brand, or type.

### Checkbox

Used for independent yes/no selections or multi-select options.

### Radio Button

Used when one option must be selected from a small set of mutually exclusive choices.

### Toggle

Used for quick binary settings such as active/inactive or visible/hidden states.

### File Upload

Used for product images, gallery images, brand logos, slider images, testimonial images, and PDFs.

### Search Box

Used for product search, admin table filtering, gallery filtering, and future CMS search.

### Input Group

Used when an input requires supporting controls, prefixes, suffixes, icons, or grouped actions.

Form components must include labels, validation states, helper text where required, and accessible focus behavior.

## 7. Card Components

### Product Card

Used to present product image, title, category, short description, and action.

### Brand Card

Used to present brand logos or partner/manufacturer information.

### Gallery Card

Used to present gallery images, captions, categories, and preview actions.

### Download Card

Used to present PDF documents, brochure details, file type, and download action.

### Team Card

Reserved for future team or leadership presentation.

### Testimonial Card

Used to present customer feedback, name, role, company, and optional image.

### Dashboard Card

Used in the admin panel to show metrics, summaries, quick actions, and status indicators.

Cards should maintain consistent spacing, surface treatment, hover behavior where clickable, and responsive behavior.

## 8. Navigation Components

### Header

The header contains brand identity, primary navigation, inquiry actions, and mobile navigation trigger.

### Navbar

The navbar provides access to major public website sections.

### Mega Menu

The mega menu may be used for product categories or large navigation structures.

### Mobile Navigation

Mobile navigation should support clear, touch-friendly access to website sections.

### Breadcrumb

Breadcrumbs show page hierarchy and help users navigate deeper sections.

### Sidebar

Sidebars support admin navigation, filters, or secondary page navigation.

### Footer Navigation

Footer navigation provides secondary links, contact paths, product references, and business information.

## 9. Table Components

### Standard Table

Used for structured content where rows and columns improve readability.

### Responsive Table

Used when table content must remain usable across smaller screens.

### Admin Data Table

Used for CMS listings such as products, brands, gallery items, downloads, users, settings, and inquiries.

Admin data tables should support clear headers, row actions, status badges, pagination, and filtering where needed.

## 10. Feedback Components

### Alert

Used for persistent success, warning, error, or information messages.

### Toast

Used for short non-blocking system feedback, especially in the admin panel.

### Notification

Used for important operational or CMS status messages.

### Success Message

Used when actions complete successfully, such as save, upload, submit, or delete confirmation.

### Error Message

Used when validation, upload, authentication, authorization, or system actions fail.

### Loading Indicator

Used when a user action requires waiting.

### Skeleton Loader

Used for future loading states in dynamic lists, dashboards, or AJAX-driven sections.

Feedback components should be clear, accessible, and not rely on color alone.

## 11. Modal Components

### Standard Modal

Used for focused short interactions, forms, or detail previews.

### Confirmation Modal

Used for destructive or important confirmation actions.

### Image Preview Modal

Used for gallery, product, or CMS image preview.

### PDF Preview Modal

Used for document preview where supported.

Modals must support keyboard interaction, visible close controls, focus management, and clear dismissal behavior.

## 12. Pagination Components

Pagination is used for product listings, gallery listings, downloads, admin data tables, and future content modules.

Pagination should include:

- Current page state.
- Previous and next controls.
- Disabled states.
- Responsive behavior.
- Keyboard accessibility.
- Clear labels.

## 13. Tabs

Tabs are used to separate related content within the same context.

Use tabs for:

- Admin settings sections.
- Product detail sections.
- Dashboard views.
- Future reporting views.

Tabs should clearly indicate the active section and support keyboard navigation.

## 14. Accordion

Accordions are used for expandable and collapsible content.

Use accordions for:

- FAQs.
- Product specifications.
- Mobile filter groups.
- Admin configuration groups.
- Long supporting content.

Accordions should preserve content hierarchy and provide clear expanded/collapsed states.

## 15. Badge

Badges are used for compact status or category indicators.

Use badges for:

- Product status.
- Admin status.
- Download type.
- Category labels.
- Availability indicators.
- Small metadata.

Badges should be readable and semantically consistent.

## 16. Chips

Chips are used for compact selectable or removable labels.

Use chips for:

- Active filters.
- Selected categories.
- Tags.
- Search filters.
- Future product attributes.

Chips should clearly indicate selected, removable, or disabled states.

## 17. Tooltip

Tooltips provide short contextual explanations.

Use tooltips for:

- Icon-only buttons.
- Admin table actions.
- Compact controls.
- Status explanations.

Tooltips should be concise, accessible, and should not contain critical information unavailable elsewhere.

## 18. Dropdown

Dropdowns are used for option lists, action menus, and compact navigation.

Use dropdowns for:

- User menus.
- Admin row actions.
- Filter options.
- Navigation groups.
- Sorting controls.

Dropdowns must support keyboard navigation, clear focus states, and predictable dismissal behavior.

## 19. Empty State

Empty states communicate that no content is available.

Use empty states for:

- No products found.
- No gallery items.
- No downloads.
- No search results.
- Empty admin tables.
- No inquiries.

Empty states should explain the situation and provide a helpful next action where appropriate.

## 20. Error State

Error states communicate that something failed.

Use error states for:

- Failed form submission.
- Failed upload.
- Failed data loading.
- Access denied.
- Missing record.
- Server issue.

Error states should provide safe, useful messaging and avoid exposing technical details.

## 21. Loading State

Loading states communicate that work is in progress.

Use loading states for:

- Form submission.
- File upload.
- AJAX search.
- Filtering.
- Admin actions.
- Future dashboard data loading.

Loading states should prevent duplicate actions where appropriate.

## 22. Component Naming Convention

Component naming should be clear, consistent, and purpose-based.

Naming standards:

- Use descriptive component names.
- Prefer functional names over visual-only names.
- Use consistent terminology across documentation and implementation.
- Avoid vague names such as box, block, item, new, final, or misc.
- Use module-specific prefixes only when a component is not reusable.
- Maintain consistent naming between public and admin components where possible.
- Document new component names before adding them to the design system.

## 23. Accessibility Guidelines

### Keyboard Navigation

Interactive components must support keyboard access, including buttons, links, forms, dropdowns, tabs, accordions, modals, and pagination.

### Focus Indicators

Focus indicators must be visible and consistent. Focus should not be hidden or removed.

### Screen Reader Support

Components should support meaningful labels, logical order, status messaging, and semantic structure during implementation.

Accessibility standards should apply equally to public website components and admin panel components.

## 24. Performance Considerations

Performance considerations include:

- Keep components lightweight.
- Avoid unnecessary JavaScript for simple interactions.
- Reuse component patterns to reduce duplicated styling.
- Avoid excessive shadows, animations, or layout complexity.
- Optimize image-heavy components such as cards and galleries.
- Keep admin data tables efficient.
- Ensure loading states do not cause layout shifts.
- Avoid rendering unnecessary hidden component duplicates.

## 25. Future Expansion

Future components may include:

- Product comparison component.
- Inquiry management component.
- Media library component.
- Advanced filter panel.
- Analytics dashboard widgets.
- Stepper or wizard.
- Timeline.
- File preview manager.
- Multi-select component.
- Date range selector.
- Role and permission matrix.
- Rich text editor wrapper.
- Advanced search component.

Future components should follow the established design, accessibility, spacing, typography, and responsive standards.

## 26. Related Documents

This document should be maintained together with the following project documents:

- 01_Design_System.md
- 02_Color_System.md
- 03_Typography_System.md
- 04_Grid_and_Layout_System.md
- 05_Spacing_System.md
- 06_Breakpoint_System.md
- Frontend Documentation
- Backend Documentation
- Admin Panel Documentation
- Accessibility Guidelines

## Approval Checklist

- [ ] Document Reviewed
- [ ] Component Standards Verified
- [ ] Accessibility Reviewed
- [ ] Responsive Behaviour Verified
- [ ] Approved for Next Phase

**End of Document**
