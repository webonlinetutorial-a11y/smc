# Caching Architecture

## Document Control

| Field | Details |
|---|---|
| Project Name | Nepack Website |
| Project Type | Dynamic Industrial Automation Company Website with CMS |
| Technology Stack | HTML5, CSS3, Vanilla JavaScript, PHP 8.2 OOP, MySQL |
| Web Server | Apache |
| Hosting Environment | Hostinger Shared Hosting |
| Development Environment | XAMPP |
| Document Type | Caching Architecture |
| Document Status | Draft |
| Prepared For | Pre-Implementation Planning |
| Prepared By | Project Technical Team |
| Version | 1.0 |

## Revision History

| Version | Date | Author | Description |
|---|---|---|---|
| 1.0 | 2026-08-06 | Project Technical Team | Initial Caching Architecture document |

## 1. Introduction

This document defines the caching architecture for the Nepack Website, a production-ready Industrial Automation Company Website with CMS functionality.

The website will use PHP 8.2 with an object-oriented backend, MySQL database, Apache web server, XAMPP for local development, and Hostinger Shared Hosting for production deployment.

The purpose of this document is to define how caching can improve application performance while remaining compatible with shared hosting constraints. The caching strategy must support fast public page delivery without compromising content accuracy, CMS behavior, or security.

## 2. Caching Objectives

The caching architecture is designed to:

- Improve public website loading speed.
- Reduce repeated browser downloads of static assets.
- Reduce unnecessary server processing where practical.
- Reduce repeated database reads for stable content where future implementation supports it.
- Improve user experience on desktop and mobile.
- Support efficient delivery of images, fonts, PDFs, CSS, and JavaScript.
- Remain compatible with Hostinger Shared Hosting.
- Avoid caching sensitive Admin Panel data.
- Preserve freshness of CMS-managed content after updates.
- Provide a foundation for future advanced caching strategies.

## 3. Caching Principles

The Nepack Website caching strategy follows these principles:

- Cache public, non-sensitive, and relatively stable content where practical.
- Do not cache sensitive Admin Panel responses.
- Do not cache authentication-specific content.
- Do not cache user-specific session data in publicly accessible caches.
- Ensure cache invalidation occurs when CMS content changes.
- Use conservative cache durations for frequently changing content.
- Use longer cache durations for versioned static assets.
- Keep caching simple and reliable for shared hosting.
- Avoid introducing external cache dependencies during the initial phase.
- Review caching behavior after deployment and content updates.

## 4. Browser Caching Strategy

Browser caching allows repeat visitors to reuse previously downloaded resources.

Browser caching should apply to:

- Static CSS files.
- Static JavaScript files.
- Static images.
- Font files.
- Public PDFs.
- CMS-uploaded media that changes infrequently.

Browser caching should not apply to:

- Admin Panel pages.
- Login pages.
- Logout responses.
- Session-specific responses.
- Error pages containing dynamic or sensitive context.
- State-changing requests.

Browser caching principles include:

- Use longer caching for stable versioned assets.
- Use shorter caching for CMS-uploaded files that may be replaced.
- Ensure updated files can be refreshed reliably.
- Avoid caching authenticated responses.
- Review browser caching behavior during deployment testing.

## 5. Static Asset Caching

Static assets should be optimized for browser reuse and fast delivery.

### CSS

CSS caching guidance:

- Cache public stylesheets where practical.
- Use versioning or controlled naming for changed CSS files.
- Avoid forcing users to repeatedly download unchanged CSS.
- Ensure CSS updates become visible after deployment.

### JavaScript

JavaScript caching guidance:

- Cache public JavaScript files where practical.
- Use versioning or controlled naming for changed JavaScript files.
- Avoid caching scripts that expose sensitive values.
- Ensure frontend behavior updates correctly after deployment.

### Images

Image caching guidance:

- Cache static design images for longer durations.
- Cache uploaded product, gallery, brand, slider, and testimonial images with appropriate freshness rules.
- Use shorter cache assumptions for images commonly replaced through the CMS.
- Optimize images before or during publication where possible.
- Ensure replaced images do not continue showing outdated versions unexpectedly.

### Fonts

Font caching guidance:

- Cache font files for longer durations because they change rarely.
- Ensure font files are stored consistently.
- Avoid unnecessary font file variants.
- Review font loading impact on page performance.

### PDFs

PDF caching guidance:

- Cache public PDFs where practical.
- Use controlled replacement behavior to avoid stale document downloads.
- Consider versioned file names for updated brochures, catalogs, certificates, or datasheets.
- Ensure outdated PDFs are removed or replaced consistently through CMS workflows.

## 6. Dynamic Content Caching

Dynamic content includes CMS-managed pages, product listings, gallery pages, downloads, settings, and other database-backed content.

Content that may be cached conceptually:

- Public product listing data that changes infrequently.
- Public product detail data.
- Public gallery listings.
- Public brand listings.
- Public download listings.
- Public homepage content.
- Public SEO metadata where stable.
- Navigation data if CMS-managed and stable.

Content that should not be cached:

- Admin Panel pages.
- Login and logout responses.
- Authenticated CMS actions.
- Forms containing security tokens.
- User/session-specific content.
- Validation error responses.
- Authorization failure responses.
- Sensitive settings.
- Any response that depends on current authentication state.

Dynamic content caching should be introduced carefully. Accuracy after CMS updates is more important than aggressive caching.

## 7. Database Query Caching (Conceptual)

Database query caching may be introduced to reduce repeated MySQL reads for stable public content.

Conceptual candidates include:

- Public product categories.
- Brand listings.
- Gallery categories.
- Homepage sections.
- Footer contact information.
- Public download categories.
- Common CMS settings used on public pages.

Query caching should avoid:

- Authentication queries.
- Authorization checks.
- Session validation.
- Admin Panel state.
- Security token validation.
- Recently changed CMS records until invalidation is complete.

Database query caching principles:

- Cache only read-heavy, low-change data.
- Keep cache entries scoped by module or content type.
- Invalidate cache when related CMS records change.
- Avoid serving stale business-critical content for long periods.
- Use shared-hosting-compatible storage if implemented in the future.
- Ensure cached data does not include sensitive information.

## 8. Cache Invalidation Strategy

Cache invalidation ensures users see updated content after CMS changes.

Cache invalidation should occur conceptually when:

- Product records are created, updated, deleted, published, or unpublished.
- Product images are replaced or deleted.
- Categories are changed.
- Brands are changed.
- Gallery items are changed.
- Slider images are changed.
- Testimonial content is changed.
- PDF documents are uploaded, replaced, or deleted.
- SEO metadata is updated.
- Website settings are changed.
- Navigation or footer content is updated.

Invalidation principles include:

- Invalidate only affected cache groups where practical.
- Use broader invalidation when dependencies are unclear.
- Ensure CMS actions update public-facing cached content.
- Avoid requiring manual browser refresh for normal visitors where possible.
- Prefer predictable invalidation over overly complex caching.

## 9. Cache Expiration Guidelines

Cache expiration defines how long cached content remains valid.

Recommended conceptual expiration approach:

| Content Type | Suggested Cache Behavior |
|---|---|
| Versioned CSS and JavaScript | Longer cache duration |
| Fonts | Longer cache duration |
| Static design images | Longer cache duration |
| Uploaded product images | Moderate cache duration, refresh on replacement |
| Gallery images | Moderate cache duration |
| Slider images | Moderate or shorter duration due to visual updates |
| PDFs | Moderate to long duration if versioned |
| Public CMS page content | Short to moderate duration |
| Admin Panel pages | No public/browser caching |
| Authentication/session responses | No caching |
| Error responses | No caching or very short caching |

Expiration should be adjusted based on real content update frequency and hosting behavior.

## 10. Performance Considerations

Caching supports performance but must be balanced with correctness.

Performance considerations include:

- Cache static assets to reduce repeat downloads.
- Optimize images before caching.
- Avoid caching oversized or unoptimized files.
- Avoid unnecessary database reads for stable public content.
- Keep cache lookup overhead lower than the operation being cached.
- Avoid complex caching that is difficult to invalidate.
- Measure public page performance after implementation.
- Review CMS update behavior to ensure cache freshness.
- Avoid caching sensitive content for performance gains.

Performance testing should include first-time visits, repeat visits, mobile behavior, and CMS update scenarios.

## 11. Shared Hosting Compatibility

The caching strategy must remain compatible with Hostinger Shared Hosting.

Compatibility considerations include:

- Avoid dependence on Redis, Memcached, or server-level cache services in the initial phase.
- Use browser and static asset caching where practical.
- Use file-based or simple application-level caching only if suitable and controlled.
- Respect hosting storage limits.
- Avoid cache directories that become publicly browsable.
- Avoid cache growth that consumes shared hosting quota.
- Ensure cache cleanup is practical.
- Validate behavior in both XAMPP and Hostinger environments.
- Keep caching configuration aligned with available Apache and hosting controls.

If the project later moves to VPS or cloud hosting, more advanced caching layers may be introduced.

## 12. Future Scalability

Future caching enhancements may include:

- File-based application cache for public CMS content.
- Full-page caching for selected public pages.
- CDN delivery for images, CSS, JavaScript, fonts, and PDFs.
- Image CDN or media optimization service.
- Object storage for uploaded media.
- Redis or Memcached after hosting upgrade.
- Cache warming after deployment.
- Cache purge controls in the Admin Panel.
- Automated invalidation after CMS updates.
- Separate cache namespaces by module.
- Performance dashboards and cache hit-rate monitoring.
- Edge caching for global delivery.

Future enhancements should preserve security, freshness, and maintainability.

## 13. Related Documents

This document should be maintained together with the following project documents:

- Backend Architecture
- Security Architecture
- File Upload Architecture
- Logging Architecture
- 01_Backend_Architecture.md
- 04_Security_Architecture.md
- 06_File_Upload_Architecture.md
- 07_Logging_Architecture.md
- Database Documentation
- Deployment Documentation
- Testing Documentation

## Approval Checklist

- [ ] Document Reviewed
- [ ] Technical Review Completed
- [ ] Caching Strategy Verified
- [ ] Performance Requirements Verified
- [ ] Approved for Next Phase

**End of Document**
