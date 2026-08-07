# Frontend Foundation

## Document Control

| Field | Details |
|---|---|
| Project | Nepack Website |
| Document Title | Frontend Foundation |
| Phase | Implementation Phase 5 |
| Technology Stack | HTML5, CSS3, Vanilla JavaScript, PHP 8.2, MySQL |
| Development Environment | XAMPP Localhost |
| Production Environment | Hostinger Shared Hosting |
| Architecture Approach | Modular, Server Side Rendering, Mobile First, SEO Friendly, CMS Based |
| Document Status | Draft |
| Owner | Implementation Architecture |
| Last Updated | August 6, 2026 |

## Revision History

| Version | Date | Description | Author |
|---|---|---|---|
| 1.0 | August 6, 2026 | Initial Frontend Foundation implementation planning document | Implementation Architecture |

## 1. Introduction

This document defines the implementation plan for the Frontend Foundation phase of the Nepack Website.

Frontend Foundation establishes the public website structure after Bootstrap, Core Framework, Authentication, and Admin Foundation are planned. Its purpose is to prepare reusable public layout includes, base page rendering, global frontend assets, navigation structure, and frontend conventions before CMS-driven pages and modules are implemented.

This document is an implementation planning document only. It does not generate code and does not change the approved architecture.

## 2. Objectives

The Frontend Foundation phase is designed to:

- Establish public website layout structure.
- Prepare reusable public includes.
- Prepare header, navigation, footer, breadcrumb, and page banner foundations.
- Prepare global CSS loading.
- Prepare global Vanilla JavaScript loading.
- Prepare mobile-first responsive foundation.
- Prepare SEO metadata rendering points.
- Prepare asset loading conventions.
- Ensure future public pages follow one consistent rendering flow.

## 3. Scope

Included:

- Public layout foundation.
- Shared frontend includes.
- Public navigation foundation.
- Breadcrumb foundation.
- Page banner foundation.
- Base frontend asset references.
- Global CSS and JavaScript structure planning.
- Initial public page rendering pattern.
- Basic empty public page shells where required.

Excluded:

- Full homepage content.
- Hero carousel implementation.
- Product listing functionality.
- Product detail functionality.
- Brand pages.
- Gallery functionality.
- Downloads functionality.
- Search functionality.
- Contact and inquiry processing.
- Admin CMS module CRUD.

## 4. Architecture

Frontend Foundation should follow PHP server-side rendering.

Public pages should load through a consistent lifecycle:

- Bootstrap loads.
- Page-specific configuration is prepared.
- SEO metadata is prepared.
- Header include renders.
- Navigation include renders.
- Breadcrumb or page banner renders where applicable.
- Main content renders.
- Footer include renders.
- JavaScript assets load.

The frontend foundation should not depend on JavaScript for essential content rendering. JavaScript should progressively enhance interactive behavior.

## 5. Folder Structure

Frontend Foundation should use approved folders:

- `includes`
- `public`
- `assets/css`
- `assets/js`
- `assets/images`
- `assets/fonts`
- `assets/icons`
- `modules`

Public website includes should remain separate from admin includes.

Recommended include responsibilities:

- Header
- Navbar
- Breadcrumb
- Page banner
- Footer
- SEO metadata area
- Asset loading references

## 6. Planned Files

The following files are planned conceptually for this phase.

| File | Purpose |
|---|---|
| `includes/header.php` | Shared public document head and layout opening. |
| `includes/navbar.php` | Shared public navigation. |
| `includes/breadcrumb.php` | Shared breadcrumb rendering foundation. |
| `includes/page-banner.php` | Shared page banner foundation. |
| `includes/footer.php` | Shared public footer and layout closing. |
| `includes/seo.php` | Shared SEO metadata rendering support where appropriate. |
| `assets/css/main.css` | Main public website stylesheet. |
| `assets/css/responsive.css` | Responsive overrides where approved. |
| `assets/js/main.js` | Main public Vanilla JavaScript entry file. |
| `public/home.php` | Optional public homepage rendering file. |
| `public/about.php` | Optional public about page shell. |
| `public/contact.php` | Optional public contact page shell. |
| `index.php` | Public entry or routing file using the frontend foundation. |

Exact files should follow approved architecture and should be created only where required by implementation.

## 7. Rendering Flow

The conceptual public page rendering flow is:

```text
Browser Request

↓

Public Entry Page

↓

Bootstrap

↓

Page Configuration

↓

SEO Metadata Preparation

↓

Header Include

↓

Navigation Include

↓

Breadcrumb / Page Banner

↓

Main Content

↓

CTA Section Where Applicable

↓

Footer Include

↓

JavaScript Loading

↓

HTML Response
```

This flow should align with the approved Page Rendering Flow documentation.

## 8. CSS Foundation

CSS should follow the approved CSS Architecture.

CSS foundation expectations:

- External CSS only.
- Mobile-first styling.
- Low specificity.
- Reusable classes.
- Design token usage where applicable.
- Consistent typography.
- Consistent spacing.
- Consistent layout containers.
- Component-ready structure.
- No inline CSS.
- No unnecessary framework dependency.

Frontend Foundation should prepare the base styles, not all final component styling.

## 9. JavaScript Foundation

JavaScript should follow the approved JavaScript Architecture.

JavaScript foundation expectations:

- Vanilla JavaScript only.
- External JavaScript files only.
- Progressive enhancement.
- Event listeners instead of inline event handlers.
- Minimal global scope.
- Foundation for navigation, back-to-top, and future components.
- No frontend framework.
- No unnecessary third-party libraries.

Frontend Foundation should prepare JavaScript structure, not complete all interactions.

## 10. SEO Foundation

Frontend Foundation must prepare SEO rendering points.

SEO expectations:

- Page title support.
- Meta description support.
- Canonical URL support.
- Robots meta support where applicable.
- Open Graph support where applicable.
- Structured data support in later phases.
- SEO metadata prepared before header rendering.

Actual CMS-managed SEO workflows belong to later CMS and SEO phases.

## 11. Accessibility Considerations

Accessibility should be built into the public frontend foundation.

Accessibility expectations:

- Semantic HTML structure.
- Proper heading hierarchy.
- Keyboard-friendly navigation foundation.
- Accessible form structure when forms are introduced.
- Visible focus states in CSS foundation.
- Meaningful image alt text where images are used.
- Mobile usability.
- Reduced motion awareness for future interactive components.

## 12. Database Impact

Frontend Foundation does not require new database tables.

It may later consume:

- Settings.
- SEO metadata.
- CMS pages.
- Products.
- Brands.
- Gallery.
- Downloads.
- Testimonials.
- Sliders.

The foundation should be prepared to receive dynamic data from future CMS modules.

## 13. Security Considerations

Frontend rendering must remain safe.

Security expectations:

- Escape dynamic output before display.
- Do not expose admin-only data publicly.
- Do not expose sensitive configuration.
- Do not trust frontend validation.
- Prepare form CSRF support for future contact and inquiry forms.
- Avoid unsafe inline scripts.
- Avoid unsafe third-party embeds.

## 14. Performance Considerations

Frontend Foundation must support fast public page loading.

Performance expectations:

- Load only required CSS and JavaScript.
- Avoid render-blocking JavaScript.
- Prepare image optimization conventions.
- Prepare lazy loading conventions for non-critical images.
- Keep base layout lightweight.
- Avoid heavy third-party libraries.
- Support Hostinger Shared Hosting constraints.

## 15. Testing Checklist

- [ ] Public homepage shell loads successfully.
- [ ] Header include loads correctly.
- [ ] Navigation include loads correctly.
- [ ] Footer include loads correctly.
- [ ] Breadcrumb include loads where applicable.
- [ ] Page banner include loads where applicable.
- [ ] Main CSS loads externally.
- [ ] Main JavaScript loads externally.
- [ ] No inline CSS is used.
- [ ] No inline JavaScript is used.
- [ ] Mobile layout foundation works.
- [ ] Navigation is usable on desktop and mobile.
- [ ] SEO metadata placeholders render correctly.
- [ ] Page output uses semantic structure.
- [ ] Dynamic output escaping strategy is available.
- [ ] Public pages work on XAMPP.
- [ ] Structure remains compatible with Hostinger Shared Hosting.

## 16. Acceptance Checklist

- [ ] Frontend Foundation architecture is approved.
- [ ] Shared public includes are available.
- [ ] Public navigation foundation is available.
- [ ] Public footer foundation is available.
- [ ] Page banner foundation is available.
- [ ] Breadcrumb foundation is available.
- [ ] Base CSS structure is available.
- [ ] Base JavaScript structure is available.
- [ ] SEO rendering point is prepared.
- [ ] Accessibility foundation is considered.
- [ ] No CMS module logic is introduced prematurely.
- [ ] Local verification is completed.
- [ ] Frontend Foundation phase is committed to Git.

## 17. Next Phase

After Frontend Foundation is completed and verified, the next phase should be:

`06_CMS_Modules.md`

The CMS Modules phase should define implementation planning for Settings, Media Management, Categories, Brands, Products, Downloads, Gallery, Contact, Inquiry, Search, Slider, Testimonials, and related public rendering.

## 18. Related Documents

This document should be used together with:

- `99_Project_Freeze_v1.0.md`
- `00_Project_Context.md`
- `00_AI_Instructions.md`
- `00_Coding_Standards.md`
- `implementation/01_Project_Bootstrap.md`
- `implementation/02_Core_Framework.md`
- `implementation/04_Admin_Foundation.md`
- `frontend/07_Frontend_Architecture.md`
- `frontend/09_Component_Architecture.md`
- `frontend/10_CSS_Architecture.md`
- `frontend/11_JavaScript_Architecture.md`
- `frontend/12_Page_Rendering_Flow.md`
- `frontend/13_Asset_Loading_Strategy.md`
- `frontend/14_SEO_Rendering.md`
- `design/01_Design_System.md`

**End of Document**
