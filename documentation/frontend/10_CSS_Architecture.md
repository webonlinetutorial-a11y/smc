# CSS Architecture

## Document Control

| Field | Details |
|---|---|
| Project | Nepack Website |
| Document Title | CSS Architecture |
| Technology Stack | HTML5, CSS3, Vanilla JavaScript, PHP 8.2 |
| Hosting Environment | Hostinger Shared Hosting |
| Architecture Approach | Modular, Component Driven, Mobile First, Responsive, SEO Friendly |
| Document Status | Draft |
| Owner | Frontend Architecture |
| Last Updated | August 6, 2026 |

## Revision History

| Version | Date | Description | Author |
|---|---|---|---|
| 1.0 | August 6, 2026 | Initial CSS Architecture documentation | Frontend Architecture |

## 1. Introduction

This document defines the CSS architecture for the Nepack Website project.

The purpose of this architecture is to establish a scalable, maintainable, predictable, and reusable styling system for the website. The CSS architecture supports a modular frontend built with HTML5, CSS3, Vanilla JavaScript, and PHP 8.2, without relying on Bootstrap or external CSS frameworks.

The architecture is designed for long-term project growth, consistent user interface implementation, responsive behavior, performance efficiency, and ease of maintenance across global styles, layouts, components, pages, and future enhancements.

## 2. Objectives

The CSS architecture aims to achieve the following objectives:

- Provide a clear structure for organizing styles.
- Maintain low specificity and reduce style conflicts.
- Encourage reusable component-based styling.
- Support mobile-first responsive development.
- Align all styling decisions with the approved Design System.
- Improve maintainability across current and future pages.
- Enable consistent implementation of typography, spacing, colors, and layouts.
- Reduce duplication through shared utilities and reusable patterns.
- Support performance-conscious CSS delivery.
- Ensure accessibility requirements are supported at the styling layer.

## 3. CSS Architecture Philosophy

### Modular CSS

CSS should be written in a modular manner, where each styling concern has a clear responsibility. Global styles, layout rules, components, utilities, and page-specific styles should remain logically separated.

Modular CSS allows the project to grow without creating unnecessary dependencies between unrelated sections of the website.

### Separation of Concerns

Styling responsibilities should be divided by purpose. Base styles should define foundational behavior, layout styles should control structure, component styles should define reusable interface elements, and page styles should handle page-specific visual requirements.

CSS should not be used to compensate for unclear markup structure or JavaScript behavior. Each layer should serve its own role.

### Mobile First

All styling should begin with the smallest supported viewport and progressively enhance for larger screens using the approved Breakpoint System.

This ensures that the website remains accessible, performant, and usable on mobile devices before additional desktop enhancements are introduced.

### Component-Based Styling

Reusable UI elements should be styled as components. Components should be self-contained, predictable, and reusable across multiple pages.

Examples include headers, navigation elements, buttons, cards, forms, tables, product cards, galleries, CTA sections, and footer modules.

### Utility-First Support

The project may use custom utility classes for common, repeatable styling patterns. Utilities should support the design system and reduce unnecessary duplication.

Utility classes should be limited, purposeful, and project-specific. They should not replace component styling or create a full utility framework.

### Low Specificity Strategy

CSS selectors should remain simple and predictable. The architecture should avoid deep nesting, overly specific selectors, and dependency on complex parent-child chains.

Low specificity makes styles easier to override, easier to debug, and safer to extend.

## 4. CSS Layer Strategy

The CSS architecture should follow a layered strategy where each layer has a defined purpose.

### Reset / Normalize

This layer establishes consistent browser defaults across supported browsers. It should remove inconsistencies in margin, padding, sizing, form elements, media behavior, and default rendering differences.

### Base

The base layer defines foundational styles for core HTML elements. It should include default behavior for body text, links, images, media, form controls, and general document behavior.

### Typography

The typography layer manages text-related styling using the approved Typography System. It should define consistent usage of headings, paragraphs, lists, labels, captions, and supporting text styles.

### Layout

The layout layer defines structural patterns such as containers, grids, sections, alignment systems, and page-level layout behavior.

### Utilities

The utilities layer provides small, reusable helper classes for common styling needs. Utilities should remain generic, predictable, and aligned with the approved Design System.

### Components

The components layer defines reusable interface elements. Each component should be styled independently and should support approved states, variants, and responsive behavior.

### Pages

The pages layer contains styles that apply only to specific pages or page-level compositions. Page styles should be minimal and should not duplicate component logic.

### Responsive Overrides

Responsive overrides should follow the approved Breakpoint System and mobile-first methodology. Overrides should enhance layouts, spacing, typography, and components at larger screen sizes.

### Print Styles

Print styles are reserved for future requirements. If introduced, they should focus on readability, simplified layout, hidden non-print UI, and clean document output.

## 5. CSS Organization

### Global Styles

Global styles define foundational behavior across the website. They should include resets, base element behavior, typography defaults, media handling, and shared document-level styling.

### Layout Styles

Layout styles define reusable structural systems including containers, page sections, grids, flex layouts, spacing patterns, and alignment rules.

### Component Styles

Component styles define reusable UI elements. Each component should be scoped around a clear class naming convention and should avoid dependencies on page-specific context.

### Page Styles

Page styles should be used only when a page requires layout or presentation rules that are unique to that page. Page styles should rely on global, layout, utility, and component rules wherever possible.

### Utility Styles

Utility styles should provide single-purpose or narrow-purpose helpers. They should support common spacing, alignment, visibility, display, and text treatment needs where appropriate.

### Animation Styles

Animation styles should be centralized conceptually and aligned with approved motion behavior. Animations should be purposeful, lightweight, and respectful of reduced-motion preferences.

### Form Styles

Form styles should define consistent behavior for inputs, labels, validation states, field groups, buttons, helper text, error messages, and accessible focus states.

### Table Styles

Table styles should support readable, responsive, and accessible presentation of structured data. Tables should maintain clear hierarchy, spacing, alignment, and contrast.

## 6. CSS Variables

CSS variables should be used as the primary mechanism for applying approved design tokens throughout the project.

The variables must reference the finalized Design System and related system documents, including the approved Color System, Typography System, Spacing System, Grid & Layout System, and Breakpoint System.

Variables should be used for:

- Colors
- Fonts
- Font sizes
- Font weights
- Spacing
- Border radius
- Shadows
- Z-index values
- Transition durations
- Container widths

CSS variables should improve consistency, reduce duplication, and simplify future design updates. Values should not be hardcoded repeatedly when an approved system token exists.

The CSS architecture must not redefine the approved Design System. It should consume and apply the finalized tokens consistently.

## 7. Naming Convention

Naming should be clear, predictable, and aligned with project Coding Standards.

The project should use a BEM-inspired naming approach without requiring strict BEM syntax in every case. Class names should communicate purpose, structure, state, and variation clearly.

### CSS Files

CSS file names should be lowercase, descriptive, and purpose-based. Names should reflect whether a file is related to global styles, layout, components, utilities, pages, animations, forms, or tables.

### CSS Classes

Class names should be semantic and reusable. They should describe the role of the element rather than its visual appearance.

Component classes should identify the component clearly and allow child elements to be understood in relation to the component.

### State Classes

State classes should describe temporary or interactive states such as active, open, disabled, selected, expanded, collapsed, loading, valid, or invalid.

State classes should be applied consistently across components and should not be tied to one-off page behavior.

### Utility Classes

Utility classes should be short, predictable, and limited to common reusable styling needs. They should support the approved Design System and should not override component architecture unnecessarily.

### Modifier Classes

Modifier classes should represent approved component variants, sizes, styles, or contextual differences. Modifiers should extend a base component rather than replacing it.

## 8. Component Styling Strategy

Component styling should follow the approved Component Architecture and Component Library.

### Header

The header should be styled as a reusable site-level component. It should support responsive layout behavior, brand visibility, navigation placement, and consistent spacing across viewports.

### Navbar

The navbar should provide clear navigation hierarchy, accessible interaction states, responsive behavior, and predictable active-state styling.

### Hero Carousel

The hero carousel should support responsive image presentation, readable text overlays where applicable, accessible controls, and smooth interaction states. Styling should avoid layout shifts and maintain strong visual hierarchy.

### Cards

Cards should be reusable content containers for grouped information. Card styling should remain consistent across use cases while allowing approved variants where required.

### Buttons

Buttons should use consistent sizing, spacing, hierarchy, states, and interaction feedback. Primary, secondary, and contextual button treatments should align with the approved Design System.

### Forms

Forms should provide consistent spacing, readable labels, clear validation states, accessible focus styles, and predictable field grouping.

### Tables

Tables should prioritize readability, alignment, spacing, and responsive behavior. Styling should support structured data without reducing accessibility.

### Gallery

Gallery styling should support responsive media layouts, consistent image treatment, predictable spacing, and accessible interaction where images are clickable or expandable.

### Product Cards

Product cards should present product information clearly and consistently. Styling should support image display, titles, descriptions, metadata, actions, and responsive arrangement.

### Footer

The footer should provide clear information hierarchy, consistent spacing, responsive layout behavior, and accessible links.

### CTA Sections

CTA sections should create clear visual emphasis while remaining aligned with the overall Design System. They should support strong hierarchy, readable copy, and clear action placement.

## 9. Layout Strategy

The layout strategy should reference the approved Grid & Layout System.

### CSS Grid Usage

CSS Grid should be used for two-dimensional layouts such as page sections, card grids, product listings, galleries, and structured content areas.

Grid usage should support responsive behavior and predictable alignment across breakpoints.

### Flexbox Usage

Flexbox should be used for one-dimensional alignment such as navigation rows, button groups, form rows, inline content alignment, header controls, and footer link groups.

### Containers

Containers should control content width and horizontal spacing consistently across the website. Container widths should use approved design tokens and should respond appropriately across breakpoints.

### Section Spacing

Section spacing should follow the approved Spacing System. Vertical rhythm should remain consistent across pages and should scale appropriately for different viewport sizes.

### Alignment

Alignment should be intentional and consistent. Content should align to the approved grid, and component alignment should support readability and visual balance.

### White Space Management

White space should be used to improve readability, hierarchy, and scanning. Spacing should be system-driven rather than manually adjusted for each section.

## 10. Responsive Strategy

The responsive strategy should reference the approved Breakpoint System.

### Mobile-First Workflow

Styles should be authored for mobile viewports first. Enhancements for tablet, laptop, desktop, and larger viewports should be added progressively.

### Progressive Enhancement

Larger viewport styles should enhance layout, spacing, typography, and component composition without breaking the mobile experience.

### Responsive Typography

Typography should scale according to the approved Typography System. Text should remain readable, accessible, and visually balanced across devices.

### Responsive Spacing

Spacing should follow the approved Spacing System and adjust appropriately across breakpoints to preserve rhythm and proportion.

### Responsive Components

Components should define their own responsive behavior where necessary. Components should not depend on page-specific overrides for standard responsive behavior.

## 11. Performance Strategy

CSS should be written and maintained with performance in mind.

### Minification

Production CSS should be minified before deployment to reduce file size and improve load performance.

### Reduced Duplication

Repeated styling patterns should be consolidated through components, utilities, and variables.

### Reusable Utilities

Utilities should reduce repeated declarations for common patterns while remaining limited and controlled.

### Efficient Selectors

Selectors should be simple and efficient. Deep nesting and complex selector chains should be avoided.

### Avoid Deep Nesting

Deeply nested selectors increase specificity and reduce maintainability. Component styles should remain as flat and predictable as possible.

### Minimal Repaint and Reflow Considerations

Animations and transitions should be lightweight. Styling choices should avoid unnecessary layout recalculation, repaint, or reflow where possible.

## 12. Accessibility

CSS has a direct role in supporting accessibility across the Nepack Website.

### Focus States

All interactive elements should have visible and consistent focus states. Focus indicators should be clear, accessible, and aligned with the Design System.

### Contrast

Text, buttons, links, form fields, and interactive states should meet approved contrast expectations based on the Color System.

### Reduced Motion

Motion effects should respect reduced-motion user preferences. Essential content or interaction should not depend solely on animation.

### Readability

Typography, spacing, line length, line height, and contrast should support comfortable reading across all supported devices.

### Interactive Elements

Interactive elements should have clear visual states for hover, focus, active, disabled, expanded, selected, and error conditions where applicable.

## 13. Future Expansion

The CSS architecture should allow new pages, components, and layout patterns to be added without restructuring the existing styling system.

New components should follow the established naming conventions, consume approved variables, align with the Component Architecture, and define responsive behavior using the Breakpoint System.

New page styles should remain minimal and should reuse global styles, layouts, utilities, and components wherever possible.

Future design updates should be handled primarily through approved design tokens and documented system changes rather than widespread manual overrides.

## 14. Related Documents

This CSS Architecture document should be used together with the following project documentation:

- 01_Design_System.md
- 02_Color_System.md
- 03_Typography_System.md
- 04_Grid_and_Layout_System.md
- 05_Spacing_System.md
- 06_Breakpoint_System.md
- 07_Component_Library.md
- 09_Component_Architecture.md

## Approval Checklist

- [ ] Document Reviewed
- [ ] CSS Organization Verified
- [ ] Naming Standards Verified
- [ ] Responsive Strategy Verified
- [ ] Ready for JavaScript Architecture

**End of Document**
