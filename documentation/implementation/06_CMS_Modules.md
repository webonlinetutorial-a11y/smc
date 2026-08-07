# CMS Modules

## Document Control

| Field | Details |
|---|---|
| Project | Nepack Website |
| Document Title | CMS Modules |
| Phase | Implementation Phase 6 |
| Technology Stack | HTML5, CSS3, Vanilla JavaScript, PHP 8.2, MySQL |
| Development Environment | XAMPP Localhost |
| Production Environment | Hostinger Shared Hosting |
| Architecture Approach | Modular, OOP PHP, Server Side Rendering, CMS Based, SEO Friendly |
| Document Status | Draft |
| Owner | Implementation Architecture |
| Last Updated | August 6, 2026 |

## Revision History

| Version | Date | Description | Author |
|---|---|---|---|
| 1.0 | August 6, 2026 | Initial CMS Modules implementation planning document | Implementation Architecture |

## 1. Introduction

This document defines the implementation plan for the CMS Modules phase of the Nepack Website.

CMS Modules are the functional content management layer of the project. This phase builds on Project Bootstrap, Core Framework, Authentication, Admin Foundation, and Frontend Foundation. Its purpose is to implement the approved dynamic CMS features in a controlled, modular, secure, and maintainable sequence.

This document is an implementation planning document only. It does not generate code and does not change the approved architecture.

## 2. Objectives

The CMS Modules phase is designed to:

- Implement approved CMS-managed content areas.
- Enable admin management of products, brands, categories, gallery, downloads, sliders, testimonials, inquiries, SEO metadata, and settings.
- Support public rendering of CMS-managed content.
- Preserve modular backend and frontend architecture.
- Use approved database structure and relationships.
- Support secure file upload handling.
- Support compressed images and optimized PDF downloads.
- Support SEO-friendly server-side rendering.
- Prepare all CMS features for testing and UAT.

## 3. Scope

Included:

- Settings Module.
- Media Management Module.
- Category Management Module.
- Brand Management Module.
- Product Management Module.
- Product Images and PDFs.
- Downloads Module.
- Gallery Module.
- Contact and Inquiry Module.
- Search Module.
- Slider Module.
- Testimonials Module.
- SEO Metadata Module.
- Public rendering integration for CMS content.

Excluded:

- E-commerce cart.
- Payment gateway.
- Inventory management.
- CRM integration.
- ERP integration.
- Public customer accounts.
- Advanced analytics dashboard.
- Multilingual support.
- AI-powered search.

## 4. Architecture

Each CMS module should follow the approved modular architecture:

- Admin page handles module UI.
- Controller coordinates request flow.
- Service handles business logic.
- Model handles database access.
- Helpers support validation, sanitization, escaping, uploads, and URLs.
- Public pages consume approved active CMS data.

CMS logic must not be duplicated across pages.

CMS modules should be implemented one module at a time, with each module reviewed and tested before moving to the next.

## 5. Recommended Implementation Order

The recommended CMS implementation order is:

1. Settings Module
2. Media Management Module
3. Categories Module
4. Brands Module
5. Products Module
6. Product Images and PDFs
7. Downloads Module
8. Gallery Module
9. Contact and Inquiry Module
10. SEO Metadata Module
11. Search Module
12. Slider Module
13. Testimonials Module
14. Public CMS Rendering Integration

This order prioritizes dependencies before dependent modules.

## 6. Module Breakdown

### Settings Module

Purpose:

- Manage global website settings, company details, contact information, logo, favicon, and default SEO values.

Key responsibilities:

- Admin settings form.
- Settings retrieval for public header, footer, contact page, and SEO defaults.
- Validation of contact and business information.
- Safe rendering of settings data.

Primary database table:

- `settings`

### Media Management Module

Purpose:

- Provide secure handling of uploaded images and PDFs used by CMS modules.

Key responsibilities:

- Validate image uploads.
- Validate PDF uploads.
- Normalize file names.
- Store files in approved directories.
- Store media references in database where applicable.
- Support replacement and removal workflows.

Primary affected areas:

- Product images.
- Product PDFs.
- Brand logos.
- Gallery images.
- Slider images.
- Testimonial images.
- Download PDFs.

### Categories Module

Purpose:

- Manage product categories and category-based browsing.

Key responsibilities:

- Create, edit, archive, and list categories.
- Validate unique slugs.
- Support category status.
- Support category display order.
- Prepare category data for products and public pages.

Primary database table:

- `categories`

### Brands Module

Purpose:

- Manage represented brands and manufacturer information.

Key responsibilities:

- Create, edit, archive, and list brands.
- Upload and manage brand logos.
- Support brand status and display order.
- Support brand-specific SEO metadata.
- Prepare brand data for public listing and product relationships.

Primary database table:

- `brands`

### Products Module

Purpose:

- Manage public product catalog content.

Key responsibilities:

- Create, edit, archive, and list products.
- Assign category and brand relationships.
- Manage product descriptions, features, and status.
- Support product slugs.
- Support featured product behavior where approved.
- Prepare products for public listing and detail pages.

Primary database table:

- `products`

### Product Images and PDFs

Purpose:

- Manage product-specific media and downloadable documents.

Key responsibilities:

- Add multiple product images.
- Mark primary product image.
- Add product PDF files.
- Validate image and PDF uploads.
- Preserve media relationships.
- Support product detail rendering.

Primary database tables:

- `product_images`
- `product_pdfs`

### Downloads Module

Purpose:

- Manage downloadable PDFs such as catalogues, brochures, datasheets, and documents.

Key responsibilities:

- Upload optimized PDFs.
- Manage download title and description.
- Associate downloads with products, brands, or categories where applicable.
- Support public downloads page.
- Support download counter functionality where approved.

Primary database table:

- `product_pdfs`

### Gallery Module

Purpose:

- Manage public gallery albums and images.

Key responsibilities:

- Create and manage gallery albums.
- Upload gallery images.
- Manage captions, alt text, status, and display order.
- Render public gallery pages.
- Support optimized thumbnails and lazy loading.

Primary database tables:

- `gallery_albums`
- `gallery_images`

### Contact and Inquiry Module

Purpose:

- Capture public contact and product inquiry submissions.

Key responsibilities:

- Render contact form.
- Render inquiry form.
- Validate public submissions.
- Store inquiry records.
- Preserve product context where applicable.
- Display safe success and error messages.
- Allow admin review of inquiries.

Primary database table:

- `contact_inquiries`

### SEO Metadata Module

Purpose:

- Manage SEO metadata for public pages and dynamic content.

Key responsibilities:

- Manage meta titles and descriptions.
- Manage slugs where applicable.
- Manage canonical and indexing preferences.
- Support Product, Brand, Category, Download, and static page metadata.
- Provide metadata to page rendering layer before header output.

Primary database table:

- `seo_metadata`

### Search Module

Purpose:

- Allow public search across approved active CMS content.

Key responsibilities:

- Search products, brands, categories, downloads, and public CMS content.
- Sanitize search queries.
- Use indexed searchable fields.
- Render results safely.
- Handle empty and no-result states.

Primary affected tables:

- `products`
- `categories`
- `brands`
- `product_pdfs`
- `seo_metadata`

### Slider Module

Purpose:

- Manage homepage hero carousel or slider content.

Key responsibilities:

- Create and manage slider records.
- Upload optimized slider images.
- Manage slide title, description, link, status, and display order.
- Render active homepage slides.
- Keep first hero image optimized for performance.

Primary database table:

- `sliders`

### Testimonials Module

Purpose:

- Manage public testimonial content.

Key responsibilities:

- Create and manage testimonials.
- Manage display order and status.
- Upload optional testimonial image or logo.
- Render active testimonials on homepage or relevant sections.

Primary database table:

- `testimonials`

## 7. Admin Flow

The conceptual admin CMS flow is:

```text
Admin Login

↓

Dashboard

↓

Module Navigation

↓

List Records

↓

Create / Edit / Archive

↓

Validate Request

↓

Process Uploads Where Applicable

↓

Persist Data

↓

Render Success or Error Message

↓

Verify Public Output Where Applicable
```

Every CMS action must require authentication.

## 8. Public Rendering Flow

The conceptual public CMS rendering flow is:

```text
Public Page Request

↓

Bootstrap

↓

Page Context

↓

Retrieve Active CMS Data

↓

Prepare SEO Metadata

↓

Render Shared Includes

↓

Render CMS Content

↓

Render Footer and Assets
```

Only active or published content should appear publicly.

## 9. Database Impact

CMS Modules use the approved database specifications.

Primary tables:

- `settings`
- `categories`
- `brands`
- `products`
- `product_images`
- `product_pdfs`
- `gallery_albums`
- `gallery_images`
- `sliders`
- `testimonials`
- `contact_inquiries`
- `seo_metadata`

Supporting tables:

- `users`
- `roles`

Database requirements:

- Use prepared statements.
- Maintain relationships.
- Validate foreign keys conceptually.
- Support active, inactive, draft, published, archived, and resolved statuses where applicable.
- Use timestamps.
- Avoid hard deletion where archive behavior is approved.

## 10. Security Considerations

CMS Modules are security-sensitive.

Security expectations:

- Admin actions require authentication.
- Future role checks should be supported where applicable.
- Forms must use CSRF protection.
- Inputs must be validated.
- Stored data must be sanitized where appropriate.
- Public output must be escaped.
- SQL queries must use prepared statements.
- File uploads must validate type, extension, size, and name.
- Unsafe uploads must be rejected.
- Admin pages must not be indexed.
- Error messages must not expose sensitive internals.

## 11. Performance Considerations

CMS Modules must remain suitable for Hostinger Shared Hosting.

Performance expectations:

- Use pagination for admin lists.
- Use pagination for large public listings.
- Optimize product and gallery images.
- Use WebP wherever practical.
- Compress PDFs before upload.
- Avoid loading full-size gallery images unnecessarily.
- Index searchable fields.
- Avoid unnecessary database queries.
- Keep homepage slider limited and optimized.

## 12. SEO Considerations

CMS Modules must support SEO-friendly rendering.

SEO expectations:

- Product pages support unique metadata.
- Brand pages support unique metadata.
- Category pages support unique metadata where applicable.
- Download pages support unique metadata where applicable.
- Public pages support canonical URLs.
- Search pages follow approved indexing rules.
- Archived content should not appear in sitemap or public listings.
- Metadata should be prepared before header rendering.

## 13. Testing Checklist

- [ ] Settings can be managed by authenticated admin.
- [ ] Media uploads validate file type and size.
- [ ] Categories can be created, edited, listed, and archived.
- [ ] Brands can be created, edited, listed, archived, and shown publicly.
- [ ] Products can be created, edited, listed, archived, and shown publicly.
- [ ] Product images support multiple image records.
- [ ] Product PDFs open or download correctly.
- [ ] Downloads page renders active PDF records.
- [ ] Gallery albums and images render correctly.
- [ ] Contact form validates and stores inquiries.
- [ ] Product inquiry preserves product context.
- [ ] Admin can view inquiry records.
- [ ] SEO metadata renders on public pages.
- [ ] Search returns relevant active results.
- [ ] Slider renders approved homepage slides.
- [ ] Testimonials render approved records.
- [ ] Archived records are hidden publicly.
- [ ] Admin pages require authentication.
- [ ] CSRF protection works for sensitive actions.
- [ ] Public output is escaped.
- [ ] CMS modules work on XAMPP.
- [ ] CMS modules remain compatible with Hostinger Shared Hosting.

## 14. Acceptance Checklist

- [ ] CMS Modules architecture is approved.
- [ ] Implementation order is followed.
- [ ] Settings Module is complete.
- [ ] Media Management Module is complete.
- [ ] Categories Module is complete.
- [ ] Brands Module is complete.
- [ ] Products Module is complete.
- [ ] Product Images and PDFs are complete.
- [ ] Downloads Module is complete.
- [ ] Gallery Module is complete.
- [ ] Contact and Inquiry Module is complete.
- [ ] SEO Metadata Module is complete.
- [ ] Search Module is complete.
- [ ] Slider Module is complete.
- [ ] Testimonials Module is complete.
- [ ] Security checks pass.
- [ ] Performance checks pass.
- [ ] Local verification is completed.
- [ ] CMS Modules phase is committed to Git.

## 15. Next Phase

After CMS Modules are completed and verified, the next phase should be:

`07_SEO_Performance.md`

The SEO Performance phase should verify metadata, structured data readiness, sitemap behavior, asset loading, image optimization, PDF optimization, Core Web Vitals readiness, and shared hosting performance.

## 16. Related Documents

This document should be used together with:

- `99_Project_Freeze_v1.0.md`
- `00_Project_Context.md`
- `00_AI_Instructions.md`
- `00_Coding_Standards.md`
- `implementation/01_Project_Bootstrap.md`
- `implementation/02_Core_Framework.md`
- `implementation/03_Authentication.md`
- `implementation/04_Admin_Foundation.md`
- `implementation/05_Frontend_Foundation.md`
- `planning/03_Feature_Breakdown.md`
- `database/03_Table_Specifications.md`
- `backend/06_File_Upload_Architecture.md`
- `frontend/14_SEO_Rendering.md`
- `testing/02_Test_Cases.md`

**End of Document**
