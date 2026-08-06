# Asset Loading Strategy

## Document Control

| Field | Details |
|---|---|
| Project | Nepack Website |
| Document Title | Asset Loading Strategy |
| Technology Stack | HTML5, CSS3, Vanilla JavaScript, PHP 8.2, MySQL |
| Server Environment | Apache |
| Development Environment | XAMPP |
| Hosting Environment | Hostinger Shared Hosting |
| Architecture Approach | Modular, SEO Friendly, Mobile First, Performance Focused |
| Document Status | Draft |
| Owner | Frontend Performance Architecture |
| Last Updated | August 6, 2026 |

## Revision History

| Version | Date | Description | Author |
|---|---|---|---|
| 1.0 | August 6, 2026 | Initial Asset Loading Strategy documentation | Frontend Performance Architecture |

## 1. Introduction

This document defines the Asset Loading Strategy for the Nepack Website project.

The Nepack Website uses HTML5, CSS3, Vanilla JavaScript, PHP 8.2, MySQL, and Apache on Hostinger Shared Hosting. The asset strategy is designed to ensure that frontend assets are organized, loaded, optimized, cached, and maintained in a predictable and performance-focused manner.

The strategy supports a modular, SEO-friendly, mobile-first architecture while remaining compatible with shared hosting constraints.

## 2. Objectives

The Asset Loading Strategy is designed to optimize:

- Initial page load.
- Largest Contentful Paint.
- First Contentful Paint.
- Cumulative Layout Shift.
- Interaction to Next Paint.
- Overall page speed.
- Asset maintainability.
- Browser caching efficiency.
- Shared hosting resource usage.
- Future scalability.

The strategy must also support the following approved project-specific decisions:

- Images will be compressed before upload.
- PDFs will be optimized before upload.
- Average monthly visitors are expected to be 500 to 1000.
- Estimated monthly downloads are approximately 500 MB.
- The hero section uses a carousel.
- WebP should be used wherever practical.
- All non-critical images should be lazy loaded.
- Unnecessary third-party libraries should be avoided.
- Performance should be prioritized for shared hosting.

## 3. Asset Loading Philosophy

### Performance First

Assets should be loaded in a way that protects page speed and rendering performance. Critical resources should be prioritized, while non-critical resources should be delayed, optimized, or conditionally loaded where appropriate.

The strategy should support strong Core Web Vitals, including LCP, FCP, CLS, and INP.

### Progressive Enhancement

The page should remain usable and meaningful even if non-critical assets load slowly or fail. CSS, JavaScript, fonts, and images should enhance the experience without making essential content inaccessible.

### Minimal Blocking Resources

Render-blocking resources should be minimized. CSS and fonts required for initial rendering should be handled carefully, while JavaScript should avoid blocking primary content rendering wherever possible.

### Reusable Assets

Shared assets should be reused across pages and components to reduce duplication, improve maintainability, and support browser caching.

### Cache Friendly Design

Assets should be organized and versioned so browsers can cache them efficiently. Static assets should remain stable unless their content changes.

## 4. Asset Categories

### CSS

CSS assets include global styles, design system styles, layout styles, component styles, utility styles, page-specific styles, responsive styles, and future print styles.

CSS should follow the approved CSS Architecture.

### JavaScript

JavaScript assets include core scripts, UI modules, component modules, page scripts, form scripts, gallery scripts, search scripts, admin scripts, and shared utilities.

JavaScript should follow the approved JavaScript Architecture.

### Images

Image assets include hero carousel images, product images, gallery images, brand logos, thumbnails, banners, icons where applicable, and SEO/social preview images.

Images should be compressed before upload and WebP should be used wherever practical.

### Icons

Icon assets include approved SVG icons, Lucide icons, and Font Awesome brand icons where required.

Icons should follow the approved Iconography direction.

### Fonts

Font assets include the approved typography families Montserrat and Cormorant, along with fallback fonts.

Font loading should follow the approved Typography System.

### PDF Files

PDF assets include downloadable catalogues, product sheets, brochures, technical documents, and other document downloads.

PDF files should be optimized before upload.

### Videos

Video assets are reserved for future use. If introduced, video files should be compressed, selectively loaded, and used only where they provide clear value.

### Third-party Assets

Third-party assets include external scripts, tracking tools, widgets, CDNs, embeds, and external libraries.

Third-party assets should be minimized and approved before use.

## 5. CSS Loading Strategy

### Global CSS

Global CSS should contain foundational styles that are required across the website. It should be loaded consistently and should support base rendering, typography, layout, utilities, and shared components.

### Component CSS

Component CSS should support reusable interface patterns defined in the Component Architecture.

Component styles should be reusable and should not be duplicated across page-specific styles.

### Page-Specific CSS

Page-specific CSS should be loaded only where the page requires unique styling that cannot be handled by global, layout, utility, or component styles.

Page-specific CSS should remain minimal.

### Critical CSS Concept

Critical CSS refers to the styles required to render the initial visible portion of a page. The project should prioritize above-the-fold rendering without overcomplicating deployment on shared hosting.

Critical styling should be considered especially for the header, navigation, hero carousel, page banner, primary typography, and main layout container.

### Print CSS

Print CSS is reserved for future use. If added, it should support readable document output, simplified layout, hidden non-print elements, and clean printing of relevant content.

## 6. JavaScript Loading Strategy

### Core Scripts

Core scripts should manage common site behavior and shared initialization. They should be lightweight and loaded in a way that does not block primary page rendering.

### Page Scripts

Page scripts should be loaded only on pages that require them. This prevents unnecessary JavaScript from being downloaded and executed on unrelated pages.

### Module Scripts

Module scripts should support reusable behavior for components, forms, gallery interactions, search, navigation, and admin functionality.

Modules should remain independent and loosely coupled.

### Deferred Loading

JavaScript that is not required to render initial content should be deferred where appropriate.

Deferred loading helps protect FCP, LCP, and initial page responsiveness.

### Async Usage

Async loading may be used for independent scripts that do not rely on execution order and do not control critical page behavior.

Async should be used carefully to avoid race conditions or unpredictable initialization.

## 7. Image Loading Strategy

Image loading should reference the File Upload Architecture.

Images are among the most important assets for page speed and user experience. All project images should be compressed before upload, properly sized, and prepared for the context in which they are displayed.

### WebP

WebP should be used wherever practical to reduce file size while preserving visual quality.

Fallback formats may be maintained when required for compatibility or operational reasons.

### Lazy Loading

All non-critical images should be lazy loaded.

Images that are not immediately visible on initial page load should not compete with critical rendering resources.

### Responsive Images

Images should be prepared for responsive layouts. Different visual contexts should use appropriately sized images to avoid serving oversized assets to small devices.

### Thumbnail Strategy

Thumbnails should be used for product listings, gallery previews, downloads, and any repeated image grids.

Thumbnails should be optimized separately from full-size images.

### Hero Carousel Images

Hero carousel images are likely to affect LCP and should be treated as critical visual assets.

The first visible hero image should be optimized carefully for size, dimensions, compression, and loading priority. Additional carousel images should not delay the initial page render.

### Product Images

Product images should be optimized for both listing and detail views. Product cards should use appropriately sized images, while detail pages may use larger optimized versions when necessary.

### Gallery Images

Gallery images should use thumbnails for grid display and optimized larger images only when the user requests a larger view.

Gallery images should be lazy loaded when outside the initial viewport.

### Brand Logos

Brand logos should be lightweight, consistently sized, and optimized for clear rendering.

SVG should be preferred where suitable. Raster logos should be compressed and sized appropriately.

## 8. Font Loading Strategy

Font loading should reference the approved Typography System.

The Nepack Website uses Montserrat and Cormorant as approved typography families. Font loading should balance brand consistency with rendering performance.

### Montserrat

Montserrat should be used according to the Typography System for approved interface, body, heading, or supporting text roles.

Only required weights and styles should be loaded.

### Cormorant

Cormorant should be used according to the Typography System for approved display or brand-supported typography roles.

Only required weights and styles should be loaded.

### Font Display Strategy

Fonts should use a loading strategy that allows text to remain visible while custom fonts load.

The website should avoid invisible text during font loading.

### Font Loading Optimization

Font files should be limited to approved families, weights, and styles. Unused font variants should not be loaded.

Font loading should support stable layout and avoid causing visible layout shifts.

### Fallback Fonts

Fallback fonts should be defined according to the Typography System.

Fallbacks should preserve readability and reduce layout instability while custom fonts load.

## 9. Icon Loading Strategy

Icon loading should reference the approved Iconography direction.

### Lucide Icons

Lucide icons should be used for general interface icons where applicable.

They should support consistent stroke style, sizing, and visual language across the website.

### Font Awesome

Font Awesome should be limited to brand icons only where required.

The project should avoid loading broad icon libraries unnecessarily.

### SVG Preference

SVG should be preferred for icons because it is scalable, lightweight, and visually sharp across screen densities.

SVG usage should remain consistent and accessible.

### Icon Consistency

Icons should use consistent sizing, alignment, color treatment, and interaction states.

Icon usage should support meaning and usability rather than decoration alone.

## 10. PDF Loading Strategy

PDF files should be optimized before upload and handled in a way that protects bandwidth and usability.

### Preview

PDF preview behavior should be used only where it improves user experience. Previews should not force large files to load automatically when a simple download link is sufficient.

### Download

PDF downloads should be clearly labeled and should set user expectations where file size or document type matters.

Downloads should not require unnecessary frontend scripts.

### Compression

PDF files should be compressed and optimized before upload.

Large PDF files should be reviewed carefully because the estimated monthly downloads are approximately 500 MB.

### Browser Handling

PDFs may open in the browser depending on user settings and browser behavior.

The website should support both browser viewing and direct downloading where appropriate.

## 11. Browser Caching Strategy

Browser caching should be used conceptually to reduce repeated asset downloads and improve returning visitor performance.

No specific server rules are defined in this document.

### Static Assets

Static assets such as CSS, JavaScript, icons, and stable media should be cache friendly and versioned when changed.

### Images

Images should be cacheable where they are stable. Replaced images should use a versioning or naming approach that prevents stale browser cache issues.

### Fonts

Font files should be cacheable because they are shared across pages and rarely change.

Only approved font files should be served.

### PDFs

PDFs should be cacheable when stable. Updated PDFs should use versioning or replacement policies that prevent users from receiving outdated documents.

## 12. Versioning Strategy

Asset versioning should support cache busting when files change.

Versioning may be handled conceptually through file naming, query-based version references, deployment version references, or another approved project convention.

The versioning strategy should ensure that users receive updated CSS, JavaScript, images, fonts, and PDFs after changes while still allowing stable assets to benefit from browser caching.

Versioning should be predictable and manageable on Hostinger Shared Hosting.

## 13. Third-party Asset Policy

Third-party assets should be added only when they provide clear value and cannot reasonably be handled by existing project capabilities.

Before adding an external library, script, widget, tracking tool, or CDN dependency, the project should consider:

- Performance impact.
- Privacy impact.
- Security impact.
- Maintenance requirements.
- Hosting compatibility.
- Dependency size.
- Availability and reliability.
- Whether Vanilla JavaScript can meet the requirement.

Unnecessary third-party libraries should be avoided.

Third-party scripts should not block rendering of critical content.

## 14. Performance Best Practices

### Minification

Production CSS and JavaScript should be minified to reduce transfer size.

Minification should preserve maintainability through source organization while optimizing deployed assets.

### Compression

Images and PDFs should be compressed before upload.

Text-based assets should be served in a compression-friendly way where supported by the hosting environment.

### Avoid Duplicate Assets

The project should avoid loading the same asset multiple times across shared includes, page templates, or components.

Shared assets should be centralized through approved loading patterns.

### Reduce HTTP Requests

Asset loading should reduce unnecessary HTTP requests, especially on initial page load.

Small repeated assets should be consolidated where appropriate, while page-specific assets should remain conditional to avoid loading unused resources.

### Lazy Loading

Lazy loading should be used for non-critical images, galleries, media, and future heavy assets where appropriate.

Critical above-the-fold assets should be prioritized.

### Efficient Asset Organization

Assets should be organized by purpose and reused consistently.

The organization should support maintainability, predictable loading, caching, and future expansion.

## 15. Accessibility Considerations

Asset loading should not negatively impact accessibility.

The asset strategy should ensure:

- Text remains readable while fonts load.
- Images include appropriate alternative text when rendered.
- Decorative images do not interfere with assistive technologies.
- Icons used as controls have accessible names.
- Lazy loaded content remains discoverable and usable.
- Loading states are understandable and not based only on animation.
- PDF documents are labeled clearly.
- Motion-heavy assets respect reduced-motion preferences.
- Missing assets do not make core content unusable.

Accessibility should be preserved even when non-critical assets fail to load.

## 16. Future Expansion

Future assets can be integrated without affecting the architecture when they follow the approved asset categories, optimization rules, loading patterns, caching expectations, and performance standards.

New asset types should be introduced only when there is a clear project need. They should be reviewed for performance, accessibility, SEO, security, maintainability, and shared hosting compatibility.

Future video assets, additional document types, new icon sets, or third-party tools should follow the same performance-first approval process.

## 17. Related Documents

This Asset Loading Strategy document should be used together with the following project documentation:

- 03_Typography_System.md
- 08_Iconography.md
- 10_CSS_Architecture.md
- 11_JavaScript_Architecture.md
- 12_Page_Rendering_Flow.md
- 06_File_Upload_Architecture.md

## Approval Checklist

- [ ] Document Reviewed
- [ ] Asset Categories Verified
- [ ] Performance Strategy Verified
- [ ] Font Strategy Verified
- [ ] Ready for SEO Rendering

**End of Document**
