# Frontend Architecture

## Document Control

| Field | Details |
|---|---|
| Project Name | Nepack Website |
| Project Type | Dynamic Industrial Automation Company Website with CMS |
| Frontend Technology | HTML5, CSS3, Vanilla JavaScript |
| Backend Technology | PHP 8.2 |
| Database | MySQL |
| Server | Apache |
| Development Environment | XAMPP |
| Hosting Environment | Hostinger Shared Hosting |
| Document Type | Frontend Architecture |
| Document Status | Draft |
| Prepared For | Frontend Implementation Planning |
| Prepared By | Project Frontend Architecture Team |
| Version | 1.0 |

## Revision History

| Version | Date | Author | Description |
|---|---|---|---|
| 1.0 | 2026-08-06 | Project Frontend Architecture Team | Initial Frontend Architecture documentation |

## 1. Introduction

This document defines the Frontend Architecture for the Nepack Website, a production-ready Industrial Automation Company Website with CMS functionality.

The website will use HTML5, CSS3, Vanilla JavaScript, and PHP 8.2 for server-side rendering. The architecture supports maintainable public pages, reusable UI sections, dynamic CMS-driven content, SEO-friendly rendering, and compatibility with Apache, XAMPP, and Hostinger Shared Hosting.

The approved homepage UI pattern is fixed and must not be changed. It includes:

- Sticky Header
- Navigation
- Hero Carousel
- Statistics Section
- About Preview
- Why Choose Us
- Product Selection Process
- Product Categories
- Authorized Brands
- Company Introduction
- Testimonial
- Contact CTA
- Footer

## 2. Objectives

The Frontend Architecture is designed to:

- Support scalable and maintainable frontend development.
- Use reusable layouts and shared includes.
- Preserve the approved homepage structure.
- Support CMS-driven dynamic content.
- Maintain mobile-first responsive behavior.
- Integrate the approved Design System.
- Support SEO-friendly server-rendered pages.
- Improve performance through optimized assets.
- Maintain accessibility across public and admin interfaces.
- Remain compatible with Hostinger Shared Hosting.

## 3. Frontend Philosophy

### Component Driven

Frontend sections and UI elements should be treated as reusable components wherever possible. Repeated patterns such as cards, buttons, forms, navigation, breadcrumbs, CTAs, tables, alerts, and pagination should follow the Component Library.

### Reusable Layouts

Common page areas such as header, navbar, footer, breadcrumbs, banners, and shared CTA sections should be reused across pages to reduce duplication.

### Mobile First

Frontend implementation should begin with mobile-friendly layouts and progressively enhance for tablet, laptop, desktop, and large desktop screens.

### Progressive Enhancement

Core content and navigation should work reliably first. Enhanced interactions such as carousel behavior, dropdown menus, animations, and AJAX should improve the experience without breaking the core page.

### Accessibility

Frontend structure should support semantic markup, keyboard navigation, readable content hierarchy, visible focus states, accessible forms, and meaningful image alternatives.

### Performance

Frontend decisions should prioritize fast loading, optimized images, efficient CSS, deferred non-critical JavaScript, and reduced layout shifts.

## 4. Frontend Architecture Overview

The frontend architecture is organized around pages, reusable components, assets, layouts, and shared includes.

### Pages

Pages represent user-facing website routes such as Home, About, Products, Product Details, Brands, Downloads, Gallery, Contact, Search, and 404.

Each page should:

- Use the shared layout structure.
- Render CMS-driven content where applicable.
- Follow the approved UI patterns.
- Include SEO-ready content structure.
- Remain responsive and accessible.

### Components

Components represent reusable interface elements such as buttons, cards, forms, tables, navigation items, alerts, modals, badges, breadcrumbs, pagination, and CTAs.

Components should:

- Follow the Component Library.
- Use the Design System.
- Support responsive behavior.
- Preserve accessibility requirements.
- Avoid duplicated visual patterns.

### Assets

Assets include CSS, JavaScript, images, fonts, icons, and uploaded media.

Assets should:

- Be organized by type.
- Be optimized for performance.
- Support caching.
- Avoid unnecessary duplication.
- Keep static assets separate from CMS uploads.

### Layouts

Layouts define page-level structure such as header, navigation, hero/banner, main content, CTA sections, and footer.

Layouts should:

- Be consistent across pages.
- Support CMS content blocks.
- Support mobile-first responsiveness.
- Keep visual hierarchy predictable.

### Includes

Includes provide reusable server-rendered sections shared across multiple pages.

Includes should:

- Reduce repeated markup.
- Maintain consistent navigation and layout.
- Support dynamic data where required.
- Remain focused on presentation structure.

## 5. Layout Structure

### Header

The header provides brand identity, primary actions, and access to navigation. It may support sticky behavior as defined in the approved UI pattern.

### Navbar

The navbar provides access to major public website sections and should support desktop and mobile navigation behavior.

### Hero

The hero area introduces the homepage or page-specific content. The homepage hero carousel is approved and should be preserved.

### Main Content

Main content contains page-specific sections such as product grids, company content, downloads, gallery items, contact forms, and search results.

### CTA Sections

CTA sections guide users toward enquiry, contact, product exploration, downloads, or other key business actions.

### Footer

The footer contains secondary navigation, business details, contact information, and supporting links.

## 6. Common Includes Strategy

### header.php

Conceptually represents the shared top-level page header area, including common document structure and reusable header-related output.

### navbar.php

Conceptually represents the shared public navigation structure used across website pages.

### footer.php

Conceptually represents the shared footer structure used across public pages.

### sidebar.php

Conceptually represents the admin-only sidebar navigation used within CMS screens.

### breadcrumb.php

Conceptually represents reusable breadcrumb navigation for product details, inner pages, admin screens, and search contexts.

### page-banner.php

Conceptually represents reusable page title or banner sections for inner public pages.

Includes should remain reusable, focused, and aligned with the broader frontend architecture.

## 7. Page Architecture

### Home

The homepage follows the finalized approved structure and must not be redesigned. It should use reusable sections for hero carousel, statistics, about preview, why choose us, product process, product categories, brands, company introduction, testimonial, contact CTA, and footer.

### About

The About page presents company information, capabilities, trust-building content, and CTA placement.

### Products

The Products page presents product categories or product listings using reusable product grid and filtering patterns.

### Product Details

Product Details pages present product images, descriptions, specifications, related products, breadcrumbs, and enquiry CTA.

### Brands

The Brands page presents authorized or supported brands using reusable brand cards or listing patterns.

### Downloads

The Downloads page presents brochures, catalogs, datasheets, certificates, or PDFs using download list or download card patterns.

### Gallery

The Gallery page presents image collections using responsive gallery grid and preview patterns.

### Contact

The Contact page presents contact information, contact form, inquiry paths, location details, and business communication options.

### Search

The Search page presents search input, result summaries, result listings, no-results state, and pagination where required.

### 404

The 404 page provides a safe not-found message, navigation recovery, search or contact option, and standard footer.

## 8. Component Reusability

Reusable frontend components should follow the Component Library.

Core reusable components include:

- Buttons.
- Cards.
- Forms.
- Tables.
- Navigation.
- Breadcrumbs.
- Alerts.
- Modals.
- Badges.
- Pagination.
- Tabs.
- Accordions.
- Tooltips.
- Dropdowns.
- Empty states.
- Loading states.
- Error states.

Each reusable component should follow the approved color, typography, spacing, layout, responsive, iconography, and animation guidelines.

## 9. Rendering Strategy

### Server Side Rendering

The website should use PHP-based server-side rendering for public pages and CMS-driven content. This supports SEO, shared hosting compatibility, and stable page delivery.

### Shared Includes

Shared includes should render common areas such as header, navbar, footer, breadcrumbs, banners, and admin sidebar.

### Dynamic Content Rendering

CMS-managed content such as products, brands, gallery images, downloads, settings, and page content should be rendered dynamically by PHP.

### Reusable Sections

Repeated homepage and inner-page sections should be treated as reusable frontend sections to improve maintainability and consistency.

## 10. Responsive Integration

Responsive behavior should follow the Responsive Design document.

Frontend architecture should ensure:

- Mobile-first layouts.
- Responsive grid behavior.
- Hamburger navigation on smaller screens.
- Off-canvas or collapsible sidebar behavior where applicable.
- Product cards stack gracefully.
- Tables remain usable on small screens.
- Forms use full width on mobile.
- Images scale proportionally.
- Footer columns stack progressively.

## 11. Design System Integration

Frontend implementation must follow the approved Design System.

### Color System

Use the approved color roles for brand, neutral, text, semantic, and interactive states.

### Typography

Use Cormorant for headings and Montserrat for body and UI text.

### Grid

Use CSS Grid for page layouts and multi-column structures.

### Spacing

Use the approved spacing scale and responsive spacing rules.

### Components

Use the Component Library for reusable UI elements.

### Animations

Use subtle, professional animations that follow the Animation Guidelines.

## 12. SEO Integration

Frontend SEO responsibilities include:

- Rendering meaningful page titles and headings.
- Preserving logical heading hierarchy.
- Supporting SEO-friendly page content.
- Rendering CMS-managed metadata where applicable.
- Supporting descriptive image alternative text.
- Using readable URLs where supported by backend routing.
- Avoiding hidden or duplicated content that weakens SEO.
- Ensuring important content is server-rendered.
- Supporting structured internal navigation.

SEO implementation details should align with the SEO Structure document.

## 13. Performance Considerations

Performance considerations include:

- Optimize product, gallery, slider, brand, and testimonial images.
- Use WebP where applicable.
- Lazy load non-critical images.
- Load only required font weights.
- Minimize CSS and JavaScript assets for production.
- Defer non-critical JavaScript.
- Avoid unnecessary JavaScript for layout behavior.
- Reduce layout shifts through planned image dimensions.
- Prefer SVG icons.
- Support browser caching for static assets.
- Keep public pages and admin screens lightweight.

## 14. Accessibility

Frontend accessibility responsibilities include:

- Use semantic page structure.
- Maintain correct heading hierarchy.
- Provide keyboard-accessible navigation and controls.
- Preserve visible focus states.
- Ensure forms have clear labels and validation feedback.
- Provide meaningful alternative text for images.
- Avoid color-only communication.
- Maintain readable contrast.
- Ensure modals, dropdowns, tabs, accordions, and mobile navigation are accessible.
- Support responsive zoom behavior.

## 15. Coding Standards

Frontend coding standards should align with the Coding Standards document.

Frontend implementation should emphasize:

- Clean and readable structure.
- Consistent naming.
- Separation of structure, presentation, and behavior.
- Reusable sections and components.
- Minimal duplication.
- Accessibility-first markup decisions.
- Performance-conscious asset usage.
- Maintainable Vanilla JavaScript interactions.

## 16. Future Expansion

The frontend architecture should support new pages and modules without major restructuring.

Future additions may include:

- Blog.
- Case studies.
- Careers.
- Product comparison.
- Inquiry management.
- Media library.
- Advanced product filtering.
- Download analytics.
- Admin dashboard enhancements.
- Multilingual content.
- Progressive Web App enhancements.

Future pages should reuse approved layouts, components, includes, and design system standards.

## 17. Related Documents

### Planning

- 02_Software_Requirement_Specification.md

### Frontend

- 01_Information_Architecture.md
- 02_Sitemap.md
- 03_User_Flow.md
- 04_Page_Specifications.md
- 05_Navigation.md
- 06_SEO_Structure.md

### Backend

- 01_Backend_Architecture.md

### Design

- 01_Design_System.md
- 02_Color_System.md
- 03_Typography_System.md
- 04_Grid_and_Layout_System.md
- 05_Spacing_System.md
- 06_Breakpoint_System.md
- 07_Component_Library.md
- 08_Iconography.md
- 09_Responsive_Design.md
- 10_Animation_Guidelines.md
- 11_UI_Patterns.md
- 12_Design_Review.md

## Approval Checklist

- [ ] Document Reviewed
- [ ] Architecture Verified
- [ ] Reusable Layout Verified
- [ ] Responsive Strategy Verified
- [ ] Ready for File Structure

**End of Document**
