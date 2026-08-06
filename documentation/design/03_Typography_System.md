# Typography System

## Document Control

| Field | Details |
|---|---|
| Project Name | Nepack Website |
| Project Type | Dynamic Industrial Automation Company Website with CMS |
| Reference Website | https://nepackassociates.co.in/ |
| Document Type | Typography System |
| Document Status | Draft |
| Prepared For | Pre-Implementation Planning |
| Prepared By | Project Design and Technical Team |
| Version | 1.0 |

## Revision History

| Version | Date | Author | Description |
|---|---|---|---|
| 1.0 | 2026-08-06 | Project Design and Technical Team | Initial Typography System documentation |

## 1. Introduction

This document defines the Typography System for the Nepack Website, a production-ready Industrial Automation Company Website with CMS functionality.

The Typography System establishes the official font usage, hierarchy, readability standards, responsive behavior, and component-level typography guidance for the public website and admin panel.

The official typography decision is fixed:

- Body and UI Font: Montserrat
- Heading Font: Cormorant

This typography system should be used consistently across all future design and frontend implementation work.

## 2. Typography Objectives

The Typography System is designed to:

- Establish consistent typography across the public website and admin panel.
- Improve readability for technical, product, and company content.
- Support a premium industrial brand identity.
- Maintain clear visual hierarchy across all pages.
- Support responsive typography across desktop, laptop, tablet, and mobile.
- Improve CMS usability for administrators.
- Support accessibility and WCAG readability expectations.
- Reduce typography inconsistency during future development.
- Maintain frontend performance by limiting unnecessary font weights.

## 3. Typography Principles

### Readability

Typography must support comfortable reading for product descriptions, specifications, CMS tables, forms, and company content.

### Consistency

Font families, weights, sizes, spacing, and transformations should remain consistent across repeated components.

### Accessibility

Text must remain readable across devices, backgrounds, and color combinations. Typography should support keyboard users, assistive technologies, and users with low vision.

### Visual Hierarchy

Headings, section titles, body text, captions, labels, and UI controls must have clear hierarchy so users can scan content efficiently.

### Performance

Only required font families and weights should be loaded. Font usage should not create unnecessary page load delays.

### Scalability

The typography system should support future CMS modules, product catalogs, blogs, dashboards, and integrations without requiring redesign.

### Brand Identity

Cormorant provides a premium editorial quality for headings, while Montserrat provides modern clarity for body and interface text. Together they create a professional industrial identity that feels both technical and refined.

## 4. Font Family Strategy

### Primary Body Font

Montserrat is the official body and UI font.

Use Montserrat for:

- Body text.
- Paragraphs.
- Navigation.
- Forms.
- Tables.
- Buttons.
- UI components.
- Admin interface.
- Captions.
- Helper text.
- Product descriptions.
- Specifications.
- Lists.
- Breadcrumbs.
- Badges.
- Pagination.
- Sidebar.
- Footer text.

Montserrat is suitable for interface and body text because it is clean, geometric, readable, and modern. It supports technical content well and works effectively in dense admin panel layouts.

### Primary Heading Font

Cormorant is the official heading font.

Use Cormorant for:

- H1.
- H2.
- H3.
- H4.
- H5.
- H6.
- Hero titles.
- Page titles.
- Section titles.
- Product titles.
- Banner headings.
- CTA headings.

Cormorant gives the website a premium and distinctive brand character. It helps key headings feel more refined while maintaining a professional identity suitable for an industrial automation company.

### Fallback Stack

Montserrat fallback:

- Arial.
- Helvetica.
- sans-serif.

Cormorant fallback:

- Georgia.
- "Times New Roman".
- serif.

Fallback fonts should preserve readability if the primary fonts fail to load.

## 5. Font Loading Strategy

The font loading strategy should prioritize performance and visual stability.

Conceptual guidance:

- Fonts may be loaded from Google Fonts during the initial phase.
- Only approved and required font weights should be loaded.
- Font loading should support visible text during loading.
- The selected font-display behavior should reduce invisible text delays.
- Font requests should be minimized.
- Font caching should be supported through the broader caching strategy.
- Future self-hosting may be considered for performance control, privacy, and reliability.

Self-hosting may be reviewed after the initial design and implementation stabilize.

## 6. Font Weight Guidelines

### Montserrat

| Weight | Usage |
|---|---|
| 400 Regular | Body text, paragraphs, helper text, table content, descriptions |
| 500 Medium | Navigation, form labels, subtle emphasis, UI labels |
| 600 SemiBold | Buttons, table headings, sidebar items, badges, important UI text |
| 700 Bold | Strong emphasis, key admin labels, important actions, selected highlights |

Montserrat should remain the default for readable and functional interface text.

### Cormorant

| Weight | Usage |
|---|---|
| 500 Medium | Section headings, secondary headings, refined page content headings |
| 600 SemiBold | Page titles, product titles, banner headings, CTA headings |
| 700 Bold | Hero titles, major landing headings, high-impact brand headings |

Cormorant weights should be used carefully so headings feel premium without becoming difficult to read.

## 7. Typography Scale

### Cormorant Headings

| Element | Desktop Range | Mobile Range | Recommended Weight |
|---|---:|---:|---|
| H1 | 48-64px | 34-42px | 700 |
| H2 | 38-48px | 30-36px | 600-700 |
| H3 | 30-38px | 26-30px | 600 |
| H4 | 24-30px | 22-26px | 600 |
| H5 | 20-24px | 18-22px | 500-600 |
| H6 | 18-20px | 16-18px | 500-600 |

### Montserrat Text

| Text Style | Desktop Range | Mobile Range | Recommended Weight |
|---|---:|---:|---|
| Body Large | 18-20px | 16-18px | 400 |
| Body | 16-18px | 15-16px | 400 |
| Small Text | 14-15px | 13-14px | 400-500 |
| Caption | 12-14px | 12-13px | 400 |
| Label | 14-16px | 13-15px | 500-600 |
| Button Text | 14-16px | 14-15px | 600 |
| Table Text | 14-16px | 13-15px | 400-500 |
| Navbar Text | 14-16px | 14-15px | 500-600 |

Typography should scale smoothly across breakpoints while preserving hierarchy and readability.

## 8. Line Height Guidelines

| Text Type | Recommended Line Height |
|---|---|
| Headings | 1.1-1.25 |
| Paragraphs | 1.5-1.7 |
| UI Text | 1.3-1.5 |
| Tables | 1.35-1.5 |

Headings should feel compact and structured. Paragraphs should have more generous line height for comfortable reading.

## 9. Letter Spacing Guidelines

| Text Type | Guidance |
|---|---|
| Headings | Use normal or very subtle spacing; avoid excessive spacing |
| Body | Use normal spacing for readability |
| Buttons | Slight spacing may be used for clarity, but should remain readable |
| Navigation | Use normal or subtle spacing depending on menu density |
| Labels | Use normal spacing; prioritize clarity over styling |

Letter spacing should not reduce readability, especially on mobile screens.

## 10. Text Alignment Guidelines

### Left Alignment

Use left alignment for:

- Body content.
- Product descriptions.
- Specifications.
- Forms.
- Tables.
- Admin screens.
- Lists.
- Footer text blocks.

Left alignment should be the default because it supports readability and scanning.

### Center Alignment

Use center alignment for:

- Hero headings.
- Short section introductions.
- CTA blocks.
- Empty states.
- Confirmation messages.
- Selected homepage promotional sections.

Center alignment should be used selectively and avoided for long paragraphs.

### Right Alignment

Use right alignment for:

- Numeric table values where appropriate.
- Certain dashboard metrics.
- Action groups where layout requires it.

Right alignment should be limited and should not be used for long readable content.

## 11. Text Transformation Rules

### Sentence Case

Use Sentence Case for:

- Paragraphs.
- Form labels.
- Helper text.
- Alerts.
- Validation messages.
- Admin instructions.
- Table content.

Sentence Case should be the default for readable interface copy.

### Title Case

Use Title Case for:

- Page titles.
- Section titles.
- Product titles.
- Card headings.
- Modal titles.
- Dashboard widget titles.

Title Case should support hierarchy and professional presentation.

### Uppercase

Use Uppercase sparingly for:

- Small badges.
- Short labels.
- Table status indicators.
- Compact metadata labels.

Uppercase should not be used for long text, paragraphs, or dense navigation.

## 12. Typography Usage by Component

| Component | Font Family | Weight | Relative Size Category |
|---|---|---:|---|
| Navbar | Montserrat | 500-600 | Navbar Text |
| Hero Title | Cormorant | 700 | H1 |
| Hero Subtitle | Montserrat | 400-500 | Body Large |
| Section Title | Cormorant | 600-700 | H2 |
| Product Title | Cormorant | 600 | H3-H4 |
| Product Description | Montserrat | 400 | Body |
| Specifications | Montserrat | 400-500 | Table Text / Small Text |
| Cards | Montserrat / Cormorant | 400-600 | Body / H4-H5 |
| Buttons | Montserrat | 600 | Button Text |
| Forms | Montserrat | 400-500 | Body / Label |
| Labels | Montserrat | 500-600 | Label |
| Tables | Montserrat | 400-600 | Table Text |
| Sidebar | Montserrat | 500-600 | Small Text / Navbar Text |
| Footer | Montserrat | 400-500 | Small Text / Body |
| Breadcrumb | Montserrat | 400-500 | Small Text |
| Pagination | Montserrat | 500-600 | Small Text / Button Text |
| Admin Dashboard | Montserrat / Cormorant | 400-700 | Body / H3-H5 |
| Alerts | Montserrat | 400-600 | Body / Small Text |
| Badges | Montserrat | 600 | Caption / Small Text |
| Captions | Montserrat | 400 | Caption |

## 13. Responsive Typography Strategy

Typography should adapt across device categories without breaking hierarchy.

### Desktop

Desktop typography may use the largest heading sizes and comfortable body text. Hero, section, and product titles should establish strong visual hierarchy.

### Laptop

Laptop typography should remain close to desktop but may reduce large heading sizes slightly to preserve layout balance.

### Tablet

Tablet typography should reduce large headings, maintain readable body text, and prevent line breaks from becoming awkward.

### Mobile

Mobile typography should prioritize readability, compact hierarchy, and reduced heading sizes. Body text should remain comfortably readable without zooming.

### Fluid Typography

Fluid typography may be used conceptually to scale text smoothly between minimum and maximum ranges. It should be controlled so text does not become too small on mobile or too large on wide screens.

## 14. Accessibility Guidelines

Accessibility guidelines include:

- Maintain WCAG readability expectations.
- Use readable minimum text sizes.
- Ensure sufficient color contrast for all text.
- Keep paragraph line length comfortable.
- Avoid very long centered paragraphs.
- Preserve correct heading hierarchy.
- Do not skip heading levels for visual reasons.
- Ensure buttons and labels remain legible.
- Avoid using thin weights for important content.
- Ensure text remains readable over images or colored backgrounds.
- Use semantic headings during implementation.

Typography should support both visual users and assistive technology users.

## 15. Performance Considerations

Performance considerations include:

- Load only required Montserrat and Cormorant weights.
- Avoid unnecessary font variants.
- Minimize font requests.
- Support browser caching for font files.
- Avoid excessive font usage in admin screens.
- Review font loading impact during performance testing.
- Consider future self-hosting if it improves reliability or speed.
- Avoid using icon fonts if lightweight SVG or image icons are more appropriate.

Typography performance should be reviewed together with the caching and frontend performance strategy.

## 16. Future Expansion

Future typography enhancements may include:

- Variable font usage if performance and browser support are suitable.
- Multilingual typography support.
- Additional rules for Hindi or regional language content if required.
- Icon font review and replacement strategy.
- Print typography for brochures, downloadable content, or printable product pages.
- Typography rules for future dashboards and analytics modules.
- Expanded editorial typography for blogs, case studies, and long-form content.

Future expansion must preserve the official font decision: Montserrat for body/UI and Cormorant for headings.

## 17. Related Documents

This document should be maintained together with the following project documents:

- 01_Design_System.md
- 02_Color_System.md
- Frontend Documentation
- Backend Documentation
- Accessibility Guidelines
- Caching Architecture
- File Upload Architecture

## Approval Checklist

- [ ] Document Reviewed
- [ ] Font Strategy Verified
- [ ] Accessibility Reviewed
- [ ] Responsive Typography Verified
- [ ] Component Mapping Verified
- [ ] Approved for Next Phase

**End of Document**
