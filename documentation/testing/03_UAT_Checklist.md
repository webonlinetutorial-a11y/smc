# User Acceptance Testing (UAT) Checklist

## Document Control

| Field | Details |
|---|---|
| Project | Nepack Website |
| Document Title | User Acceptance Testing (UAT) Checklist |
| Technology Stack | HTML5, CSS3, Vanilla JavaScript, PHP 8.2, MySQL |
| Server Environment | Apache |
| Hosting Environment | Hostinger Shared Hosting |
| Architecture Approach | Modular, Component Driven, Server Side Rendering, Mobile First, SEO Friendly |
| Document Status | Draft |
| Owner | UAT Review |
| Last Updated | August 6, 2026 |

## Revision History

| Version | Date | Description | Author |
|---|---|---|---|
| 1.0 | August 6, 2026 | Initial User Acceptance Testing Checklist documentation | UAT Review |

## 1. Introduction

This document defines the User Acceptance Testing Checklist for the Nepack Website project.

User Acceptance Testing verifies that the completed website satisfies approved business requirements, functional expectations, content requirements, usability goals, SEO expectations, media handling needs, and deployment readiness before production release.

This document focuses on business validation and final acceptance. It does not define technical scripts, automation steps, or implementation procedures.

## 2. Objectives

The objectives of UAT are to:

- Confirm that approved business requirements have been implemented.
- Validate public website functionality from a business user perspective.
- Confirm Admin Panel workflows support content management needs.
- Verify product, brand, gallery, download, contact, inquiry, and search functionality.
- Confirm media assets display and download correctly.
- Validate responsive behavior across major device sizes.
- Confirm SEO readiness before launch.
- Verify production readiness for Hostinger Shared Hosting.
- Support final client sign-off before deployment.

## 3. UAT Scope

User Acceptance Testing covers the final business validation of the Nepack Website before production deployment.

UAT includes public website workflows, Admin Panel workflows, CMS-managed content, product pages with multiple images and PDF downloads, brand management, gallery functionality, homepage hero carousel, responsive layout behavior, compressed images, optimized PDF downloads, SEO readiness, security expectations, and performance from a user-facing perspective.

UAT does not replace technical QA, security testing, database testing, or performance engineering. It confirms whether the delivered system is acceptable for business use.

## 4. Website Functional Checklist

### Home Page

- [ ] Home page loads successfully.
- [ ] Header and navigation display correctly.
- [ ] Hero carousel displays approved slides.
- [ ] Hero carousel controls function as expected.
- [ ] Key homepage sections display correct content.
- [ ] CTA sections are visible and link to correct destinations.
- [ ] Homepage images display correctly.
- [ ] Homepage appears consistent on mobile and desktop.

### About Page

- [ ] About page loads successfully.
- [ ] Company information is accurate.
- [ ] Page sections are displayed in the approved order.
- [ ] Images or media display correctly.
- [ ] CTA links function correctly.

### Products

- [ ] Products page loads successfully.
- [ ] Product listings display approved products.
- [ ] Product categories or groupings display correctly where applicable.
- [ ] Product cards show correct names, images, and summary details.
- [ ] Product links navigate to correct product detail pages.
- [ ] Empty or unavailable product states are handled gracefully.

### Product Details

- [ ] Product detail page loads successfully.
- [ ] Product title and description are accurate.
- [ ] Multiple product images display correctly.
- [ ] Product PDFs are available where applicable.
- [ ] Product PDF downloads work correctly.
- [ ] Product inquiry CTA works correctly.
- [ ] Related product or brand information displays correctly where applicable.
- [ ] Product-specific SEO information is present.

### Brands

- [ ] Brands page loads successfully.
- [ ] Brand listings display approved brands.
- [ ] Brand logos display correctly.
- [ ] Brand detail pages display correct information where applicable.
- [ ] Brand-related products display correctly where applicable.
- [ ] Brand management output appears consistent on public pages.

### Downloads

- [ ] Downloads page loads successfully.
- [ ] Downloadable PDFs are listed correctly.
- [ ] PDF names and descriptions are accurate.
- [ ] PDF files open correctly.
- [ ] PDF downloads work correctly.
- [ ] Download counter behavior works where applicable.
- [ ] Missing or unavailable downloads are handled gracefully.

### Gallery

- [ ] Gallery page loads successfully.
- [ ] Gallery images display correctly.
- [ ] Gallery thumbnails are clear and optimized.
- [ ] Gallery interactions work as expected.
- [ ] Gallery layout remains consistent across devices.
- [ ] Empty gallery state is handled gracefully where applicable.

### Search

- [ ] Search input is visible and usable.
- [ ] Search returns relevant results for valid terms.
- [ ] Search handles no-result queries clearly.
- [ ] Search handles empty input appropriately.
- [ ] Search results link to correct pages.
- [ ] Search performance is acceptable.

### Contact

- [ ] Contact page loads successfully.
- [ ] Contact information is accurate.
- [ ] Contact form displays correctly.
- [ ] Required field validation works.
- [ ] Valid contact submission succeeds.
- [ ] Success message displays correctly.
- [ ] Error messages are clear and understandable.

### Inquiry

- [ ] Inquiry form loads successfully.
- [ ] Inquiry fields match approved business requirements.
- [ ] Product context is preserved where applicable.
- [ ] Required field validation works.
- [ ] Valid inquiry submission succeeds.
- [ ] Confirmation or success message displays correctly.
- [ ] Invalid inquiry submission shows clear errors.

### Navigation

- [ ] Primary navigation displays correctly.
- [ ] Navigation links route to correct pages.
- [ ] Mobile navigation works correctly.
- [ ] Dropdowns work where applicable.
- [ ] Active page indication is clear.
- [ ] Breadcrumbs display where applicable.
- [ ] Navigation remains usable across devices.

### Footer

- [ ] Footer displays correctly.
- [ ] Footer links route to correct pages.
- [ ] Contact details in footer are accurate.
- [ ] Social or brand links work where applicable.
- [ ] Footer layout remains consistent on mobile and desktop.

## 5. Admin Panel Checklist

### Login

- [ ] Admin login page loads successfully.
- [ ] Valid credentials allow access.
- [ ] Invalid credentials are rejected.
- [ ] Logout works correctly.
- [ ] Protected pages are inaccessible after logout.

### Dashboard

- [ ] Admin dashboard loads successfully.
- [ ] Dashboard navigation is clear.
- [ ] Dashboard data or summaries display correctly where applicable.
- [ ] Admin interface is usable on supported screen sizes.

### Product Management

- [ ] Admin can create product records.
- [ ] Admin can edit product records.
- [ ] Admin can remove or disable product records where applicable.
- [ ] Admin can upload multiple product images.
- [ ] Admin can attach product PDFs.
- [ ] Product updates appear correctly on public pages.
- [ ] Product SEO metadata can be managed.

### Brand Management

- [ ] Admin can create brand records.
- [ ] Admin can edit brand records.
- [ ] Admin can upload or replace brand logos.
- [ ] Brand updates appear correctly on public pages.
- [ ] Brand SEO metadata can be managed where applicable.

### Category Management

- [ ] Admin can create categories.
- [ ] Admin can edit categories.
- [ ] Admin can assign products to categories.
- [ ] Category updates appear correctly on public pages.
- [ ] Empty categories are handled appropriately.

### Gallery Management

- [ ] Admin can upload gallery images.
- [ ] Admin can edit gallery image details.
- [ ] Admin can remove gallery items where applicable.
- [ ] Gallery updates appear correctly on public pages.
- [ ] Uploaded gallery images display correctly.

### Downloads Management

- [ ] Admin can upload optimized PDF documents.
- [ ] Admin can edit download titles and descriptions.
- [ ] Admin can replace PDF files.
- [ ] Admin can remove or disable downloads where applicable.
- [ ] Download counter displays or updates where applicable.
- [ ] Download updates appear correctly on public pages.

### SEO Management

- [ ] Admin can manage page meta titles.
- [ ] Admin can manage page meta descriptions.
- [ ] Admin can manage Product SEO metadata.
- [ ] Admin can manage Brand SEO metadata where applicable.
- [ ] Admin can manage Download SEO metadata where applicable.
- [ ] Updated SEO metadata renders correctly on public pages.

### User Management

- [ ] Authorized admin can view users.
- [ ] Authorized admin can create users.
- [ ] Authorized admin can edit users.
- [ ] Unauthorized users cannot manage users.
- [ ] User status or role changes behave correctly where applicable.

### Settings

- [ ] Admin can view website settings.
- [ ] Admin can update approved settings.
- [ ] Settings changes appear correctly on public pages where applicable.
- [ ] Invalid settings are rejected or handled clearly.

## 6. Media Verification

- [ ] Public images display correctly.
- [ ] Admin-uploaded images display correctly.
- [ ] Images are compressed before upload.
- [ ] WebP is used wherever practical.
- [ ] Product images support multiple image display where required.
- [ ] Gallery images display correctly.
- [ ] Brand logos display clearly.
- [ ] PDFs open correctly in supported browsers.
- [ ] PDF downloads work correctly.
- [ ] PDFs are optimized before upload.
- [ ] File replacements update public pages correctly.
- [ ] Missing media files are handled gracefully.

## 7. Responsive Verification

Responsive verification should reference the Responsive Design documentation.

### Mobile

- [ ] Website layout works correctly on mobile screens.
- [ ] Mobile navigation is usable.
- [ ] Forms are usable on mobile.
- [ ] Product cards and gallery items adapt correctly.
- [ ] Text remains readable on mobile.

### Tablet

- [ ] Website layout works correctly on tablet screens.
- [ ] Navigation and content spacing remain usable.
- [ ] Images and cards scale correctly.
- [ ] Forms remain readable and usable.

### Laptop

- [ ] Website layout works correctly on laptop screens.
- [ ] Content width and section spacing are appropriate.
- [ ] Navigation and footer display correctly.

### Desktop

- [ ] Website layout works correctly on desktop screens.
- [ ] CSS Grid and Flexbox layouts appear consistent.
- [ ] Hero carousel, products, gallery, and footer use available space appropriately.

## 8. Browser Verification

- [ ] Website works correctly in Chrome.
- [ ] Website works correctly in Firefox.
- [ ] Website works correctly in Edge.
- [ ] Website works correctly in Safari.
- [ ] Mobile browser behavior is acceptable on supported devices.
- [ ] Forms work consistently across supported browsers.
- [ ] PDF downloads behave acceptably across supported browsers.

## 9. SEO Verification

- [ ] Meta titles are present and accurate.
- [ ] Meta descriptions are present and accurate.
- [ ] Canonical URLs are present and correct.
- [ ] Open Graph metadata is present where applicable.
- [ ] Structured data is present where applicable.
- [ ] XML sitemap is available and accurate.
- [ ] robots.txt is available and aligned with SEO strategy.
- [ ] Product pages have unique SEO metadata.
- [ ] Brand pages have unique SEO metadata where applicable.
- [ ] Download pages have unique SEO metadata where applicable.
- [ ] Search result pages follow approved indexing behavior.

## 10. Security Verification

Security verification should reference the Security Architecture.

- [ ] Authentication works correctly.
- [ ] Authorization rules are enforced.
- [ ] Sessions expire or end correctly.
- [ ] Protected Admin Panel pages are not accessible without login.
- [ ] File uploads accept only approved file types.
- [ ] Unsafe file uploads are rejected.
- [ ] CSRF protection is active for state-changing actions.
- [ ] User input is protected against XSS.
- [ ] Admin inputs are safely handled.
- [ ] Error messages do not expose sensitive technical information.

## 11. Performance Verification

- [ ] Public pages load quickly under expected usage conditions.
- [ ] Homepage hero carousel performs smoothly.
- [ ] First hero image is optimized.
- [ ] Images load without major layout shifts.
- [ ] Non-critical images are lazy loaded.
- [ ] Gallery loads acceptably with multiple images.
- [ ] Product listing loads acceptably.
- [ ] Search results return within acceptable time.
- [ ] PDF downloads work reliably.
- [ ] Asset loading does not include unnecessary third-party libraries.
- [ ] Website performance is suitable for Hostinger Shared Hosting.

## 12. Business Requirement Verification

Business requirement verification should reference the Planning Documentation, Project Scope, and SRS.

- [ ] Website reflects approved Nepack business goals.
- [ ] Website supports industrial automation and packaging machinery customers.
- [ ] Public pages match approved scope.
- [ ] Dynamic CMS supports approved content management needs.
- [ ] Product management supports multiple images and PDF downloads.
- [ ] Brand management supports approved brand workflows.
- [ ] Gallery functionality meets approved requirements.
- [ ] Download functionality meets approved requirements.
- [ ] Contact and inquiry workflows meet approved requirements.
- [ ] SEO-friendly architecture has been implemented.
- [ ] Mobile-first responsive behavior has been implemented.
- [ ] Shared hosting constraints have been respected.
- [ ] No unapproved business features have been introduced.

## 13. Client Sign-off

| Item | Status | Reviewer | Date | Remarks |
|---|---|---|---|---|
| Public Website Review | Pending |  |  |  |
| Admin Panel Review | Pending |  |  |  |
| Product Management Review | Pending |  |  |  |
| Brand Management Review | Pending |  |  |  |
| Gallery Review | Pending |  |  |  |
| Downloads Review | Pending |  |  |  |
| SEO Review | Pending |  |  |  |
| Security Review | Pending |  |  |  |
| Performance Review | Pending |  |  |  |
| Final Business Approval | Pending |  |  |  |

## 14. Final Acceptance Criteria

Production deployment may proceed when:

- UAT checklist items are completed or formally accepted.
- Approved business requirements from the Project Scope and SRS are satisfied.
- Public website workflows are validated.
- Admin Panel workflows are validated.
- Product, Brand, Gallery, Download, Contact, Inquiry, and Search functionality are accepted.
- SEO verification is completed.
- Security verification is completed.
- Responsive behavior is accepted across supported devices.
- Browser compatibility is accepted.
- Performance is suitable for Hostinger Shared Hosting.
- Critical business defects are resolved.
- Client approval is received.

## 15. Related Documents

This UAT Checklist should be used together with the following project documentation:

- Project Scope
- SRS
- Testing Strategy
- Test Cases
- Frontend Review
- Backend Documentation
- Database Documentation

## Approval Checklist

- [ ] UAT Completed
- [ ] Business Requirements Verified
- [ ] Client Approval Received
- [ ] Production Deployment Approved

**End of Document**
