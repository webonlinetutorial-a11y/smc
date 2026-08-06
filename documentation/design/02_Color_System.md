# Color System

## Document Control

| Field | Details |
|---|---|
| Project Name | Nepack Website |
| Project Type | Dynamic Industrial Automation Company Website with CMS |
| Reference Website | https://nepackassociates.co.in/ |
| Document Type | Color System |
| Document Status | Draft |
| Prepared For | Pre-Implementation Planning |
| Prepared By | Project Design and Technical Team |
| Version | 1.0 |

## Revision History

| Version | Date | Author | Description |
|---|---|---|---|
| 1.0 | 2026-08-06 | Project Design and Technical Team | Initial Color System documentation |

## 1. Introduction

This document defines the Color System for the Nepack Website, a production-ready Industrial Automation Company Website with CMS functionality.

The Color System establishes a consistent visual language for the public website and admin panel. It supports a professional industrial automation identity while maintaining accessibility, readability, brand trust, and long-term design consistency.

The reference website positions Nepack Associates as an industrial automation and product dealer website with inquiry-led user flows, product navigation, and business contact interactions.

## 2. Color System Objectives

The Color System is designed to:

- Establish a professional industrial brand identity.
- Create visual consistency across public pages and CMS screens.
- Support clear hierarchy for content, navigation, forms, and actions.
- Maintain accessible contrast for readability.
- Provide semantic colors for success, warning, error, and information states.
- Support reusable UI components.
- Improve admin panel usability.
- Maintain a practical color palette suitable for engineering, manufacturing, automation, and technical services.

## 3. Color Design Principles

The Nepack Website color system follows these principles:

- Use color to support clarity, not decoration.
- Maintain strong readability across all screen sizes.
- Use brand colors consistently for recognition and trust.
- Reserve accent colors for important calls to action.
- Use semantic colors consistently across alerts, validation, and status indicators.
- Avoid relying on color alone to communicate meaning.
- Keep admin panel colors calm, functional, and productivity-focused.
- Maintain enough contrast between text, surfaces, borders, and backgrounds.
- Support future extension without requiring a full redesign.

## 4. Brand Color Philosophy

The intended color identity should communicate:

- Industrial reliability.
- Technical precision.
- Engineering trust.
- Clean professionalism.
- Action-oriented inquiry and conversion flows.
- Compatibility with automation, pneumatics, manufacturing, and control systems.

The recommended palette uses a strong industrial blue as the primary brand color, a steel-gray secondary base for structure, and a controlled safety-orange accent for calls to action. This creates a practical engineering identity without making the interface feel overly decorative.

## 5. Primary Color Palette

| Role | Recommended HEX | Purpose |
|---|---|---|
| Primary | `#0B4F8A` | Main brand color for headers, primary buttons, active navigation, important links, and key interface highlights |
| Secondary | `#374151` | Structural color for admin navigation, secondary buttons, headings support, tables, and industrial neutral emphasis |
| Accent | `#F97316` | High-visibility action color for enquiry buttons, important CTAs, highlights, and selected promotional elements |

### Primary

The primary blue should represent trust, engineering reliability, and business professionalism. It should be used consistently for the strongest brand signals and primary user actions.

### Secondary

The secondary steel-gray should support structure and readability. It is suitable for admin interfaces, table headers, secondary actions, and neutral UI areas.

### Accent

The accent orange should be used sparingly for high-priority actions such as enquiry, contact, submit, download highlights, or promotional calls to action. It should not dominate the entire interface.

## 6. Neutral Color Palette

| Role | Recommended HEX | Purpose |
|---|---|---|
| Background | `#F8FAFC` | Main page background for public and admin layouts |
| Surface | `#FFFFFF` | Cards, forms, panels, tables, modals, and content containers |
| Border | `#D1D5DB` | Form borders, card borders, table lines, and component outlines |
| Divider | `#E5E7EB` | Section separation, subtle table dividers, and layout separators |

Neutral colors should create a clean, professional base that allows products, images, and calls to action to stand out.

## 7. Text Colors

| Role | Recommended HEX | Purpose |
|---|---|---|
| Primary Text | `#111827` | Main body text and important readable content |
| Secondary Text | `#4B5563` | Supporting descriptions, table secondary data, and helper text |
| Muted Text | `#6B7280` | Metadata, timestamps, placeholders, low-emphasis labels |
| Heading Text | `#0F172A` | Page titles, section headings, admin headings, high-emphasis labels |

Text colors should maintain strong contrast on white and light neutral backgrounds.

## 8. Semantic Colors

| State | Recommended HEX | Purpose |
|---|---|---|
| Success | `#15803D` | Successful form submission, saved records, completed actions |
| Warning | `#D97706` | Caution messages, incomplete actions, review-required states |
| Error | `#DC2626` | Validation failures, delete warnings, failed operations |
| Information | `#2563EB` | Informational alerts, guidance messages, neutral notices |

Semantic colors must be used consistently across public forms, CMS validation, alerts, badges, and system feedback.

## 9. Interactive States

| State | Conceptual Color Guidance |
|---|---|
| Hover | Slightly deeper or stronger version of the base action color |
| Focus | High-contrast outline or ring using primary or information color |
| Active | Pressed state should appear stronger, darker, or more grounded than hover |
| Disabled | Use muted neutral background, muted text, and reduced visual emphasis |

Interactive states should be visible and consistent across buttons, links, form controls, navigation items, pagination, and admin actions.

## 10. Component Color Usage

### Buttons

Primary buttons should use the primary brand color. High-priority enquiry or conversion buttons may use the accent color. Secondary buttons should use neutral or secondary styling. Destructive actions should use the error color.

### Navigation

Public navigation should use primary and neutral colors for clarity. Active navigation items should use the primary color. Admin navigation may use darker neutral or primary tones for structure.

### Cards

Cards should use surface backgrounds with subtle borders. Product and gallery cards should allow images to remain the visual focus. Accent colors should be used only for labels, links, or actions.

### Forms

Forms should use neutral surfaces, clear border colors, readable labels, visible focus states, and semantic validation colors. Required and error states must be visually clear.

### Tables

Admin tables should use neutral backgrounds, subtle dividers, strong heading text, and semantic badge colors for status indicators.

### Alerts

Alerts should use semantic colors consistently. Success, warning, error, and information alerts should include both color and text so meaning is not color-dependent.

### Badges

Badges should use semantic or muted colors depending on purpose. Status badges should be easy to scan in admin lists.

### Breadcrumbs

Breadcrumbs should use muted and primary text colors. The current page should be visually distinct but not overly dominant.

### Footer

The footer should use a stable dark or structured neutral base with readable light text. Links should maintain sufficient contrast and clear hover states.

## 11. Accessibility Guidelines

### WCAG Contrast

Color combinations should meet WCAG contrast expectations for normal text, large text, buttons, links, form controls, and status messages.

### Readability

Text should remain readable across public pages and admin screens. Low-contrast gray text should be avoided for important content, form labels, buttons, and navigation.

### Color Blind Friendly Practices

The design should not rely on color alone. Status indicators should include labels, icons, patterns, or supporting text where appropriate.

Examples:

- Error states should include message text.
- Required fields should include textual indicators.
- Status badges should include readable labels.
- Charts or future dashboards should avoid color-only distinctions.

## 12. Future Dark Mode Considerations

Dark mode is not required for the initial release, but the color system should remain extensible.

Future dark mode considerations include:

- Define separate dark background and surface colors.
- Maintain accessible contrast for all text.
- Adjust semantic colors for dark backgrounds.
- Test product images, gallery images, and PDFs against dark surfaces.
- Ensure admin tables, forms, and modals remain readable.
- Avoid using only inverted colors without design review.

Dark mode should be introduced only after the core public website and admin panel design are stable.

## 13. Related Documents

This document should be maintained together with the following project documents:

- 01_Design_System.md
- Frontend Documentation
- Backend Documentation
- Database Documentation
- Accessibility Guidelines
- Frontend Architecture
- Admin Panel Documentation

## Approval Checklist

- [ ] Document Reviewed
- [ ] Brand Colors Verified
- [ ] Accessibility Reviewed
- [ ] Component Color Usage Verified
- [ ] Approved for Next Phase

**End of Document**
