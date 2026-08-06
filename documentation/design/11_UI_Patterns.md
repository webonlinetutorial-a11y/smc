# UI Patterns

## Document Control

| Field | Details |
|---|---|
| Project Name | Nepack Website |
| Project Type | Dynamic Industrial Automation Company Website with CMS |
| Reference Website | https://nepackassociates.co.in/ |
| Technology Stack | HTML5, CSS3, Vanilla JavaScript, PHP 8.2, MySQL, Apache |
| Hosting Environment | Hostinger Shared Hosting |
| Document Type | UI Patterns |
| Document Status | Draft |
| Prepared For | Pre-Implementation Planning |
| Prepared By | Project Design and Frontend Team |
| Version | 1.0 |

## Revision History

| Version | Date | Author | Description |
|---|---|---|---|
| 1.0 | 2026-08-06 | Project Design and Frontend Team | Initial UI Patterns documentation |

## 1. Introduction

This document defines the UI Pattern Library for the Nepack Website, a production-ready Industrial Automation Company Website with CMS functionality.

The UI Pattern Library establishes reusable page, layout, navigation, content, data display, form, empty, loading, and error patterns for both the public website and admin panel. It focuses on architecture, layout composition, user flow, component placement, consistency, and usability.

## 2. Objectives

The UI Patterns documentation is designed to:

- Standardize reusable page structures.
- Improve consistency across the public website and admin panel.
- Support predictable user journeys.
- Improve maintainability for future frontend modules.
- Define clear placement of navigation, content, CTAs, and footer regions.
- Support accessibility and responsive behavior.
- Reduce design ambiguity before implementation.

## 3. UI Pattern Philosophy

### Consistency

Repeated page and component structures should behave consistently across the website and admin panel.

### Reusability

Common patterns such as hero sections, card grids, listing pages, forms, CTAs, and dashboards should be reusable across modules.

### Predictability

Users should know where to find navigation, actions, filters, content, downloads, and contact options.

### Accessibility

Patterns should preserve semantic order, keyboard access, readable hierarchy, and clear interaction states.

### Scalability

Patterns should support future modules such as blogs, case studies, careers, inquiry management, reports, and media libraries.

## 4. Public Website Page Patterns

### Home Page

Purpose: Introduce the company, communicate industrial automation expertise, highlight products, brands, and inquiry paths.

Typical Layout Structure:

- Header.
- Hero section.
- Product/category highlights.
- About summary.
- Brand or partner section.
- Gallery or project highlights.
- Downloads or brochure CTA.
- Contact CTA.
- Footer.

Main Sections:

- Hero Pattern.
- Section Header Pattern.
- Product Grid Pattern.
- Gallery Pattern.
- CTA Pattern.
- Footer Pattern.

Navigation Behaviour: Full desktop navigation and mobile hamburger navigation.

CTA Placement: Primary CTA in hero, secondary CTAs after product and company sections.

Footer Placement: At the bottom of the page with contact and navigation links.

### About Page

Purpose: Present company background, capabilities, experience, and trust-building information.

Typical Layout Structure:

- Header.
- Page hero or title block.
- Company overview.
- Mission, vision, or values.
- Capabilities.
- Statistics section.
- CTA.
- Footer.

Main Sections:

- Hero Pattern.
- Two-Column Layout.
- Statistics Section.
- CTA Pattern.
- Footer Pattern.

Navigation Behaviour: Active navigation state for About.

CTA Placement: Near the end of the page, encouraging contact or enquiry.

Footer Placement: Standard footer.

### Product Listing

Purpose: Allow users to browse product categories or product items.

Typical Layout Structure:

- Header.
- Page title.
- Filters or category navigation.
- Product grid.
- Pagination where needed.
- CTA.
- Footer.

Main Sections:

- Section Header Pattern.
- Product Grid Pattern.
- Search or filter controls.
- Pagination.
- CTA Pattern.

Navigation Behaviour: Product navigation may use mega menu or category links.

CTA Placement: Product cards and bottom CTA section.

Footer Placement: Standard footer.

### Product Detail

Purpose: Present detailed product information and encourage enquiry.

Typical Layout Structure:

- Header.
- Breadcrumb.
- Product image and summary.
- Description.
- Specifications.
- Related products.
- Inquiry CTA.
- Footer.

Main Sections:

- Product Detail Pattern.
- Product Specifications.
- Image Gallery.
- CTA Pattern.
- Related Product Grid.

Navigation Behaviour: Breadcrumb supports return to product listing or category.

CTA Placement: Near product summary and after specifications.

Footer Placement: Standard footer.

### Brand Listing

Purpose: Display supported brands, partners, or manufacturers.

Typical Layout Structure:

- Header.
- Page title.
- Brand grid.
- Brand details or links where applicable.
- CTA.
- Footer.

Main Sections:

- Section Header Pattern.
- Card Grid.
- Brand cards.
- CTA Pattern.

Navigation Behaviour: Active navigation state for brands.

CTA Placement: End of listing or near relevant brand content.

Footer Placement: Standard footer.

### Downloads

Purpose: Provide access to brochures, datasheets, catalogs, certificates, and PDFs.

Typical Layout Structure:

- Header.
- Page title.
- Download categories or filters.
- Download list or cards.
- Footer.

Main Sections:

- Downloads Pattern.
- Download List.
- PDF Preview where supported.
- CTA Pattern where appropriate.

Navigation Behaviour: Active navigation state for downloads.

CTA Placement: Near important brochures or at page end.

Footer Placement: Standard footer.

### Gallery

Purpose: Present company, project, product, event, or facility images.

Typical Layout Structure:

- Header.
- Page title.
- Gallery filters.
- Gallery grid.
- Image preview pattern.
- CTA.
- Footer.

Main Sections:

- Gallery Pattern.
- Gallery Grid.
- Image Gallery.
- CTA Pattern.

Navigation Behaviour: Active navigation state for gallery.

CTA Placement: End of gallery or after featured images.

Footer Placement: Standard footer.

### Contact

Purpose: Enable users to contact the company or submit enquiries.

Typical Layout Structure:

- Header.
- Page title.
- Contact information.
- Contact form.
- Map or location reference.
- Business hours.
- Footer.

Main Sections:

- Contact Pattern.
- Contact Form.
- Inquiry Form.
- CTA Pattern where applicable.

Navigation Behaviour: Active navigation state for contact.

CTA Placement: Main contact form and contact detail area.

Footer Placement: Standard footer.

### Search Results

Purpose: Display search results for products, pages, downloads, or gallery items.

Typical Layout Structure:

- Header.
- Search form.
- Results summary.
- Results list or grid.
- Empty state when no results exist.
- Pagination where required.
- Footer.

Main Sections:

- Search Results Pattern.
- Empty State Pattern.
- Pagination.

Navigation Behaviour: Search remains accessible from header or search page.

CTA Placement: Contextual CTAs within results or after no-results content.

Footer Placement: Standard footer.

### 404 Page

Purpose: Inform users that the requested page cannot be found and guide them back to useful areas.

Typical Layout Structure:

- Header.
- Error message.
- Helpful navigation links.
- Search or contact option.
- Footer.

Main Sections:

- 404 Pattern.
- Error State.
- CTA Pattern.

Navigation Behaviour: Standard navigation remains available.

CTA Placement: Return home, browse products, or contact action.

Footer Placement: Standard footer.

## 5. Admin Panel Patterns

### Login

Purpose: Authenticate administrators securely.

Pattern includes:

- Centered login panel.
- Logo or brand identifier.
- Username or email field.
- Password field.
- Submit action.
- Error feedback.
- Future reset password link.

### Dashboard

Purpose: Provide operational overview after login.

Pattern includes:

- Sidebar.
- Header or topbar.
- Dashboard cards.
- Quick actions.
- Recent activity.
- Status summaries.
- Optional reports.

### Listing Pages

Purpose: Display CMS records for management.

Pattern includes:

- Page title.
- Primary create action.
- Search and filters.
- Admin data table.
- Row actions.
- Status badges.
- Pagination.
- Empty state.

### Create/Edit Forms

Purpose: Create or update CMS records.

Pattern includes:

- Page title.
- Breadcrumb.
- Form sections.
- Validation feedback.
- Save and cancel actions.
- Upload controls where applicable.

### Upload Pages

Purpose: Manage images, PDFs, and media records.

Pattern includes:

- Upload area.
- File validation guidance.
- Preview.
- Metadata fields.
- Save action.
- Existing media list.
- Error and success feedback.

### Settings

Purpose: Manage site-level CMS settings.

Pattern includes:

- Grouped settings sections.
- Tabs or accordions where appropriate.
- Save action.
- Validation feedback.
- Security-sensitive confirmation where required.

### User Management

Purpose: Manage future CMS users and roles.

Pattern includes:

- User listing.
- Create/edit user form.
- Role assignment.
- Status management.
- Permission-related messaging.

### Reports

Purpose: Present future operational or CMS reports.

Pattern includes:

- Filters.
- Summary cards.
- Tables or charts.
- Export or download actions where applicable.
- Empty and loading states.

### Profile

Purpose: Allow administrators to view or update their profile.

Pattern includes:

- Profile details.
- Password change area.
- Session or account information.
- Save action.
- Security feedback.

## 6. Navigation Patterns

### Primary Navigation

Primary navigation provides access to major public website areas such as Home, About, Products, Brands, Gallery, Downloads, and Contact.

### Secondary Navigation

Secondary navigation may support product categories, footer links, related pages, or admin sub-sections.

### Mega Menu

Mega menu may be used for product categories or large structured navigation. It should remain clear and not overwhelm users.

### Breadcrumb

Breadcrumbs should show page hierarchy and support backtracking through nested content.

### Sidebar

Sidebar is primarily used for admin navigation, filters, or secondary content navigation.

### Footer Navigation

Footer navigation provides access to important pages, contact details, business links, and secondary resources.

## 7. Content Patterns

### Hero Section

Hero Pattern introduces major pages with a strong title, supporting message, and primary CTA.

### Section Heading

Section Header Pattern introduces content groups with title, optional subtitle, and clear hierarchy.

### Card Grid

Card Grid Pattern displays repeated content such as products, brands, gallery items, downloads, or dashboard summaries.

### Two-Column Layout

Two-Column Layout supports text and media, content and sidebar, or summary and detail structures.

### CTA Block

CTA Pattern guides users toward enquiry, contact, downloads, or product exploration.

### Feature Grid

Feature Grid presents services, capabilities, benefits, or product categories.

### Statistics Section

Statistics Section communicates credibility through measurable business highlights.

### Testimonial Section

Testimonial Section presents customer or business feedback where available.

### FAQ Section

FAQ Section organizes common questions using accordion or structured list patterns.

## 8. Data Display Patterns

### Tables

Tables display structured data, especially in the admin panel.

### Cards

Cards display repeated visual or summary content.

### Gallery Grid

Gallery Grid presents images with consistent spacing, aspect ratio, and preview behavior.

### Download List

Download List presents PDFs with title, type, description, and download action.

### Product Specifications

Product Specifications present structured technical attributes in readable groups.

### Image Gallery

Image Gallery supports image browsing, preview, and related metadata.

### PDF Preview

PDF Preview may be used where supported and should preserve accessible download fallback.

## 9. Form Patterns

### Contact Form

Contact Form collects general user enquiries.

### Inquiry Form

Inquiry Form collects product or service-specific enquiry details.

### Admin Forms

Admin Forms support CMS create, edit, settings, and upload workflows.

### Search Form

Search Form supports product, download, gallery, or content search.

### Validation Feedback

Validation Feedback should appear close to the related field and use clear, accessible messaging.

## 10. Empty, Loading and Error Patterns

### Empty State

Empty states explain when no content exists and provide a helpful next action where appropriate.

### No Search Results

No search results pattern should suggest modifying the search, browsing products, or contacting the company.

### Loading State

Loading states indicate that content or action processing is in progress.

### Skeleton Loader

Skeleton loaders may be used for product grids, dashboards, AJAX content, or media-heavy sections.

### Error Page

Error pages should provide safe messages, navigation recovery, and contact or home actions.

## 11. Responsive Behaviour

Responsive behavior should follow the Responsive Design document.

Patterns should ensure:

- Public pages stack gracefully on mobile.
- Product grids reduce column count.
- Gallery grids adapt to viewport width.
- Forms become full width on mobile.
- Tables remain usable with responsive handling.
- Sidebar navigation becomes off-canvas or stacked.
- Footer columns stack progressively.
- CTAs remain visible and accessible.
- No normal page content causes horizontal scrolling.

## 12. Accessibility Guidelines

Accessibility guidelines include:

- Preserve logical reading order.
- Use clear headings and hierarchy.
- Ensure keyboard navigation for interactive patterns.
- Provide visible focus states.
- Use accessible labels for forms and controls.
- Ensure icon-only actions have accessible names.
- Avoid color-only meaning.
- Keep touch targets usable.
- Ensure modals, dropdowns, tabs, and accordions are accessible.
- Provide clear error and validation feedback.

## 13. Performance Considerations

Performance considerations include:

- Reuse patterns instead of creating one-off layouts.
- Avoid unnecessary JavaScript-driven UI behavior.
- Optimize image-heavy patterns such as gallery and product grids.
- Keep loading states lightweight.
- Avoid hidden duplicate content for responsive layouts.
- Prevent layout shifts through predictable media sizing.
- Keep admin tables and dashboards efficient.
- Support caching and asset optimization strategies.

## 14. Future Expansion

Future UI patterns may include:

- Blog listing and blog detail.
- Case study listing and detail.
- Careers listing and job detail.
- Inquiry management dashboard.
- Media library.
- Product comparison.
- Advanced filter panel.
- Analytics dashboard.
- Timeline.
- Multi-step forms.
- Role and permission management.
- Multilingual content patterns.
- Advanced search experience.

Future patterns should follow the established design system, component library, layout, spacing, responsive, and accessibility standards.

## 15. Related Documents

This document should be maintained together with the following project documents:

- 01_Design_System.md
- 04_Grid_and_Layout_System.md
- 07_Component_Library.md
- 09_Responsive_Design.md
- 10_Animation_Guidelines.md
- 02_Color_System.md
- 03_Typography_System.md
- 05_Spacing_System.md
- 06_Breakpoint_System.md
- 08_Iconography.md

## Approval Checklist

- [ ] Document Reviewed
- [ ] UI Patterns Verified
- [ ] Accessibility Reviewed
- [ ] Responsive Behaviour Verified
- [ ] Approved for Next Phase

**End of Document**
