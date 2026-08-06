# SEO Rendering

## Document Control

| Field | Details |
|---|---|
| Project | Nepack Website |
| Document Title | SEO Rendering |
| Technology Stack | HTML5, CSS3, Vanilla JavaScript, PHP 8.2, MySQL |
| Server Environment | Apache |
| Hosting Environment | Hostinger Shared Hosting |
| Architecture Approach | Server Side Rendering, Dynamic CMS, SEO Friendly, Mobile First |
| Document Status | Draft |
| Owner | Technical SEO Architecture |
| Last Updated | August 6, 2026 |

## Revision History

| Version | Date | Description | Author |
|---|---|---|---|
| 1.0 | August 6, 2026 | Initial SEO Rendering documentation | Technical SEO Architecture |

## 1. Introduction

This document defines the SEO Rendering architecture for the Nepack Website project.

The Nepack Website uses PHP server-side rendering with a dynamic CMS backed by MySQL. SEO information is prepared during page generation and rendered into the initial HTML response so that search engines, social platforms, crawlers, and browsers receive complete metadata without relying on client-side JavaScript.

SEO metadata is managed through the Admin Panel where applicable. Every Product, Brand, and Download page must support unique SEO metadata.

## 2. Objectives

The SEO Rendering architecture is designed to achieve the following objectives:

- Ensure every public page has predictable SEO metadata.
- Support dynamic metadata generation through PHP and MySQL.
- Allow SEO metadata to be managed through the Admin Panel.
- Ensure Product, Brand, and Download pages support unique metadata.
- Render metadata during server-side page generation.
- Maintain consistent SEO behavior across all public pages.
- Support social sharing through Open Graph and Twitter Card metadata.
- Support structured data according to the approved SEO Structure.
- Define indexing behavior for search result pages and error pages.
- Support future modules using the same SEO rendering workflow.

## 3. SEO Rendering Philosophy

### Server-Side Rendering

SEO metadata should be prepared and rendered on the server before the final HTML response is returned.

This ensures metadata is immediately available to search engines, crawlers, browsers, and social platforms without requiring JavaScript execution.

### Dynamic Metadata Generation

Metadata should be generated dynamically based on page type, CMS-managed content, database records, routing context, and approved fallback rules.

Dynamic pages such as Product, Product Details, Brand, and Download pages must support unique SEO metadata.

### Consistent SEO Across Pages

All public pages should follow a consistent SEO rendering workflow. Each page should prepare metadata before the document head is rendered.

Consistency reduces missing metadata, duplicate titles, incorrect canonical URLs, and unpredictable indexing behavior.

### Maintainability

SEO metadata should be centrally managed where practical and editable through the Admin Panel for dynamic content.

The rendering workflow should reduce hardcoded duplication and allow controlled updates without requiring structural changes.

### Scalability

Future public pages, CMS modules, products, brands, downloads, and content types should inherit the same SEO rendering workflow.

The architecture should support growth without requiring a redesign of metadata preparation or rendering behavior.

## 4. Metadata Rendering Strategy

SEO metadata should be prepared before the page header and document head are rendered, as defined in the Page Rendering Flow.

### Page Title

Each public page should have a clear, unique, and relevant page title.

Dynamic page titles should be generated from CMS-managed metadata where available, with approved fallback values based on page content.

### Meta Description

Each public page should have a concise and meaningful meta description.

Descriptions should reflect the actual page content and should be manageable through the Admin Panel for dynamic CMS content where applicable.

### Meta Keywords

Meta keywords are considered a legacy SEO field.

The project may retain awareness of this field for backward compatibility or administrative completeness, but it should not be treated as a primary SEO ranking factor.

### Canonical URL

Each indexable page should define a canonical URL that represents the preferred URL for that content.

Canonical URLs should be generated from the current route, page type, and approved URL rules.

### Robots Meta

Robots meta behavior should define whether a page is indexable and whether links may be followed.

Search result pages, invalid pages, duplicate views, and error pages should use appropriate indexing rules.

### Language Declaration

The page language should be declared consistently according to the website language and content strategy.

Language declaration supports accessibility, browser behavior, and search engine understanding.

## 5. Open Graph Rendering

Open Graph metadata should be prepared for public pages that may be shared on social platforms.

### Title

The Open Graph title should align with the page title or a social-specific title when managed through the CMS.

### Description

The Open Graph description should summarize the page content and may align with the meta description.

### Image

The Open Graph image should represent the page content where available.

Product, Brand, and Download pages should use relevant images when supported by available CMS data.

### URL

The Open Graph URL should use the canonical public URL for the page.

### Type

The Open Graph type should reflect the page context where appropriate, such as website, article-like content, product-related content, or general page content.

## 6. Twitter Card Strategy

Twitter Card metadata should support consistent social sharing previews.

### Title

The Twitter Card title should align with the page title or CMS-managed social metadata where available.

### Description

The Twitter Card description should provide a concise summary of the page content.

### Image

The Twitter Card image should use the most relevant approved image available for the page.

### Card Type

The card type should be selected based on the content and available media, using a consistent site-wide policy.

## 7. Structured Data Strategy

Structured data should reference the approved SEO Structure.

Structured data should be prepared during server-side rendering and should describe the page accurately. It should not include unavailable, misleading, or inconsistent information.

### Organization

Organization structured data should describe Nepack as a business entity using approved company information.

It should be consistent across the website.

### Website

Website structured data should describe the website identity and may support site-level search or navigation features where applicable.

### Breadcrumb

Breadcrumb structured data should reflect the rendered breadcrumb hierarchy where breadcrumbs are applicable.

### Product

Product structured data should be used for product-related pages where sufficient product information is available.

It should align with CMS-managed product data and should not invent missing attributes.

### Contact

Contact structured data should use approved contact information and should remain consistent with rendered contact content.

### FAQ

FAQ structured data is reserved for future use.

If introduced, it should only be rendered for visible FAQ content that exists on the page.

## 8. Dynamic SEO Rendering

Dynamic SEO rendering should prepare metadata according to page type before the header is rendered.

### Home

The home page should use site-level SEO metadata that clearly represents Nepack's industrial automation and packaging machinery focus.

### About

The about page should use metadata that describes the company, its capabilities, and its business context.

### Products

Product listing pages should use metadata that describes product categories, packaging machinery, and industrial automation offerings.

### Product Details

Product detail pages must support unique SEO metadata managed through the Admin Panel.

Metadata should reflect the specific product name, description, category, image, and canonical URL.

### Brands

Brand pages must support unique SEO metadata where brand-specific pages exist.

Metadata should describe the brand relationship, relevant products, and available brand-specific content.

### Downloads

Download pages must support unique SEO metadata for downloadable catalogues, brochures, or technical documents where applicable.

Metadata should describe the purpose and content of the download.

### Gallery

Gallery pages should use metadata that reflects the visual content, machinery, installations, products, or business context represented in the gallery.

### Contact

The contact page should use metadata that supports inquiries, business contact intent, and customer communication.

### Search Results

Search result pages should use appropriate indexing rules.

Search result pages should generally avoid creating indexable duplicate or thin content unless a specific SEO strategy approves indexing for curated search landing pages.

### 404 Page

The 404 page should have appropriate metadata indicating that the requested page was not found.

404 pages should not be treated as normal indexable content.

## 9. Canonical URL Strategy

Canonical URLs should identify the preferred URL for each indexable page.

Conceptual rules include:

- Each public indexable page should define one canonical URL.
- Canonical URLs should use the approved production domain and URL structure.
- Dynamic pages should generate canonical URLs from their official route and content identifier.
- Query parameters should not create duplicate canonical URLs unless explicitly approved.
- Search result pages should follow approved indexing and canonical rules.
- Error pages should not conflict with canonical rules for valid content.
- Product, Brand, and Download pages should use their unique public URLs as canonical targets.

## 10. Breadcrumb SEO

Breadcrumb SEO should reference the Navigation documentation.

Breadcrumbs help users understand page hierarchy and help search engines interpret content structure.

Breadcrumb metadata should be prepared from the same page hierarchy used to render visual breadcrumbs. The visual breadcrumb and structured breadcrumb data should remain consistent.

Breadcrumbs should be rendered where they improve navigation clarity, including product details, brand pages, downloads, gallery sections, and other deeper page structures.

## 11. XML Sitemap Relationship

The XML sitemap should reference the approved SEO Structure.

The sitemap and SEO rendering architecture should remain aligned. Public indexable pages that have valid canonical URLs should be eligible for sitemap inclusion according to the approved sitemap rules.

Dynamic Product, Brand, and Download pages should be represented consistently between their rendered canonical URLs and sitemap entries.

Non-indexable pages, invalid pages, search results, and error pages should follow the approved sitemap exclusion rules.

## 12. robots.txt Relationship

The robots.txt file provides crawler-level guidance for the website.

The SEO rendering architecture should align robots meta behavior, canonical strategy, and sitemap availability with robots.txt responsibilities.

Robots.txt should not be used as the only method for controlling indexing of individual dynamic pages. Page-level robots metadata should be used where page-specific indexing behavior is required.

## 13. Performance Considerations

### Metadata Generation Efficiency

SEO metadata should be prepared efficiently during page rendering.

Metadata retrieval should avoid unnecessary database queries and should use prepared page data where possible.

### Server-Side Rendering Benefits

Server-side rendering ensures SEO metadata, structured information, and semantic content are available in the initial HTML response.

This improves crawler reliability and reduces dependence on client-side JavaScript.

### Structured Data Optimization

Structured data should be limited to relevant page-specific information.

The rendering process should avoid bloated, duplicate, misleading, or unnecessary structured data.

## 14. Accessibility Relationship

Semantic HTML and accessibility support SEO by improving content structure, readability, and machine interpretation.

The SEO rendering workflow should align with accessible page rendering by supporting:

- Clear page titles.
- Logical heading hierarchy.
- Descriptive link text.
- Meaningful image alternative text.
- Semantic landmarks.
- Accessible breadcrumbs.
- Readable content structure.
- Consistent language declaration.

SEO should not be handled only through metadata. It should be supported by the semantic quality of the rendered page content.

## 15. Future Expansion

Future pages and modules should integrate with the existing SEO rendering architecture.

Each new public page or module should define:

- Page type.
- Metadata source.
- Fallback metadata behavior.
- Canonical URL behavior.
- Robots meta behavior.
- Open Graph behavior.
- Twitter Card behavior.
- Structured data eligibility.
- Sitemap relationship.
- Breadcrumb relationship where applicable.

Future modules should inherit the same SEO rendering workflow and should not introduce separate, inconsistent metadata handling.

## 16. Related Documents

This SEO Rendering document should be used together with the following project documentation:

- 06_SEO_Structure.md
- 07_Frontend_Architecture.md
- 12_Page_Rendering_Flow.md
- 13_Asset_Loading_Strategy.md

## Approval Checklist

- [ ] Document Reviewed
- [ ] Metadata Strategy Verified
- [ ] Structured Data Verified
- [ ] Canonical Strategy Verified
- [ ] Ready for Frontend Review

**End of Document**
