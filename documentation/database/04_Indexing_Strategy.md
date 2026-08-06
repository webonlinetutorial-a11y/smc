# Database Indexing Strategy

## Document Control

| Item | Details |
|---|---|
| Project Name | Nepack Website |
| Project Type | Dynamic Industrial Automation Company Website with CMS |
| Document Title | Database Indexing Strategy |
| Document Version | 1.0 |
| Document Status | Draft for Review |
| Database Platform | MySQL |
| Backend Context | PHP 8.2 |
| Hosting Environment | Hostinger Shared Hosting |
| Prepared For | Nepack Website Project |
| Prepared By | Database Performance Architecture Team |

## Revision History

| Version | Date | Description | Author | Status |
|---|---:|---|---|---|
| 1.0 | 2026-08-05 | Initial Database Indexing Strategy document created | Database Performance Architecture Team | Draft |

---

## 1. Introduction

This document defines the conceptual indexing strategy for the Nepack Website database.

The indexing strategy explains how database indexes should support product browsing, category filtering, brand filtering, search, slug lookup, PDF retrieval, gallery loading, SEO metadata access, and admin dashboard performance.

This document is planning-level only. It does not include SQL, index creation statements, implementation code, or query execution plans.

---

## 2. Indexing Objectives

| Objective | Description |
|---|---|
| Improve Product Browsing | Help retrieve published products by category, brand, product line, and status efficiently. |
| Improve Search Performance | Support keyword-based lookup across products, categories, brands, PDFs, and gallery content. |
| Improve Filtering | Support product, brand, category, document, and gallery filtering. |
| Improve Slug Resolution | Enable fast public URL lookup for products, brands, categories, downloads, gallery pages, and SEO metadata. |
| Improve Admin Performance | Support quick CMS list views, filters, status counts, and dashboard summaries. |
| Support Pagination | Help large product, gallery, download, inquiry, and admin lists remain responsive. |
| Preserve Data Integrity | Support uniqueness and relationship lookup where appropriate. |
| Support Shared Hosting Constraints | Keep indexing practical and efficient for Hostinger Shared Hosting. |

---

## 3. Indexing Principles

| Principle | Description |
|---|---|
| Index High-Value Access Paths | Prioritize indexes on fields used frequently for lookup, filtering, sorting, and relationships. |
| Avoid Over-Indexing | Too many indexes can slow writes and increase storage usage. |
| Match Business Workflows | Indexes should support actual website and admin workflows. |
| Support Published Content First | Public-facing queries usually require status, slug, category, or brand access. |
| Use Composite Indexes Carefully | Combined indexes should reflect common multi-condition access patterns. |
| Keep Slug Lookup Fast | Public dynamic pages rely heavily on slug-based resolution. |
| Plan for Growth | Index strategy should scale with increasing products, documents, gallery images, and inquiries. |
| Review After Real Usage | Indexes should be reviewed after launch based on real content and traffic patterns. |

---

## 4. Primary Key Index Strategy

Primary key indexes uniquely identify records and support direct lookups.

| Table / Entity | Primary Key Strategy |
|---|---|
| users | Unique user identifier for authentication ownership and admin references. |
| roles | Unique role identifier for user access grouping. |
| categories | Unique category identifier for hierarchy and product classification. |
| brands | Unique brand identifier for product and document relationships. |
| products | Unique product identifier for product details and relationships. |
| product_images | Unique image identifier for product media management. |
| product_pdfs | Unique document identifier for downloadable files and relationships. |
| gallery_albums | Unique album identifier for gallery grouping. |
| gallery_images | Unique gallery image identifier for gallery management. |
| sliders | Unique slider item identifier for homepage content. |
| testimonials | Unique testimonial identifier for public trust content. |
| contact_inquiries | Unique inquiry identifier for inquiry management. |
| seo_metadata | Unique SEO metadata identifier for metadata governance. |
| settings | Unique setting identifier or controlled global settings record reference. |

### Primary Key Rules

| Rule | Description |
|---|---|
| Primary keys should be stable | They should not change when business names or slugs change. |
| Primary keys should remain internal | Public URLs should use slugs rather than technical identifiers. |
| Every table should have a primary key | All CMS and operational records require reliable identification. |

---

## 5. Foreign Key Index Strategy

Relationship fields should be indexed conceptually to support joins, filtering, and dependency checks.

| Relationship Area | Indexing Purpose |
|---|---|
| users to roles | Support user access lookup by role. |
| categories to parent categories | Support category hierarchy loading. |
| products to categories | Support product listing by category and subcategory. |
| products to brands | Support product listing by brand. |
| product_images to products | Support product detail image loading. |
| product_pdfs to products | Support product-related document loading. |
| product_pdfs to brands | Support brand-related document loading. |
| gallery_images to albums | Support gallery category/album listing. |
| gallery_images to products | Support product-related gallery lookup. |
| gallery_images to brands | Support brand-related gallery lookup. |
| contact_inquiries to products | Support filtering product inquiries. |
| contact_inquiries to brands | Support filtering brand inquiries. |
| contact_inquiries to PDFs | Support filtering document inquiries. |
| seo_metadata to public entities | Support metadata lookup for dynamic pages. |

### Foreign Key Index Rules

| Rule | Description |
|---|---|
| Index relationship fields used in joins | Common parent-child retrieval paths should be indexed. |
| Index optional relationships only when useful | Optional relationships should be indexed if used for filtering or lookup. |
| Support admin dependency checks | Relationship indexes help determine whether content can be archived or deleted safely. |
| Keep relationship indexes aligned with table specifications | Final physical indexes should follow documented relationships. |

---

## 6. Unique Index Strategy

Unique indexes should protect business uniqueness and SEO-safe URL behavior.

| Area | Uniqueness Requirement |
|---|---|
| users | Login email or username should be unique. |
| roles | Role name should be unique. |
| categories | Category slug should be unique within the intended category context. |
| brands | Brand slug should be unique. |
| products | Product slug should be unique within the chosen URL strategy. |
| product_pdfs | Document slug should be unique within document context. |
| gallery_albums | Album slug should be unique. |
| gallery_images | Gallery item slug may be unique if gallery detail pages are public. |
| seo_metadata | Entity SEO metadata should be unique per public entity. |
| settings | Controlled setting keys or records should avoid duplicates. |

### Unique Index Rules

| Rule | Description |
|---|---|
| Protect public URLs | Slug duplication should be prevented for public dynamic pages. |
| Protect login identities | Admin login identities must not duplicate. |
| Match canonical strategy | Unique slugs should align with final URL hierarchy. |
| Avoid unnecessary uniqueness | Do not force uniqueness on fields that may legitimately repeat, such as titles or captions. |

---

## 7. Composite Index Guidelines

Composite indexes should support common multi-condition access patterns.

| Use Case | Conceptual Composite Index Direction |
|---|---|
| Published products by category | Category plus publication/status information. |
| Published products by brand | Brand plus publication/status information. |
| Product listing order | Category or brand plus status plus display order. |
| Product line browsing | Product line plus status plus category. |
| Active categories by parent | Parent category plus status plus display order. |
| Active brand listing | Status plus featured flag plus display order. |
| Download listing | Document type plus status plus display order or date. |
| Gallery listing | Album/category plus status plus display order. |
| Inquiry management | Inquiry status plus date or source type. |
| SEO lookup | Entity type plus entity reference or slug context. |

### Composite Index Rules

| Rule | Description |
|---|---|
| Match real filters | Composite indexes should reflect actual listing/filter combinations. |
| Keep index width reasonable | Avoid very large multi-column combinations. |
| Prioritize public reads | Product, category, brand, download, and gallery listing paths should be prioritized. |
| Support admin lists selectively | Admin filters should be indexed where volume is expected to grow. |
| Review with real content | Composite indexes should be validated after data volume increases. |

---

## 8. Search Optimization Strategy

Search indexing should support public keyword discovery and admin lookup.

### Product Search

| Search Area | Indexing Direction |
|---|---|
| Product Name | Support direct product name lookup. |
| Product Slug | Support URL and exact lookup. |
| Product Category | Support filtered product search by category. |
| Product Brand | Support filtered product search by brand. |
| Product Line | Support product line browsing and filtering. |
| Part Numbers | Support technical search where part numbers are stored. |
| Status | Ensure only published products appear publicly. |

### Category Search

| Search Area | Indexing Direction |
|---|---|
| Category Name | Support browsing and admin lookup. |
| Category Slug | Support category URL lookup. |
| Parent Category | Support hierarchy retrieval. |
| Status | Support active category listing. |

### Brand Search

| Search Area | Indexing Direction |
|---|---|
| Brand Name | Support direct brand search. |
| Brand Slug | Support public brand page lookup. |
| Featured Status | Support homepage and featured brand sections. |
| Status | Support active brand listing. |

### PDF Search

| Search Area | Indexing Direction |
|---|---|
| Document Title | Support document search. |
| Document Slug | Support detail page lookup. |
| Document Type | Support category-based download listing. |
| Related Product | Support product-specific download retrieval. |
| Related Brand | Support brand-specific download retrieval. |
| Status | Support public document visibility. |

### Gallery Search

| Search Area | Indexing Direction |
|---|---|
| Gallery Title | Support gallery item search. |
| Album Reference | Support album/category listing. |
| Related Product | Support product-related gallery content. |
| Related Brand | Support brand-related gallery content. |
| Status | Support public gallery visibility. |

### Search Rules

| Rule | Description |
|---|---|
| Public search should respect publication status | Draft and archived content should not appear publicly. |
| Admin search may include all statuses | Admin search should allow management of draft, published, archived, and inactive content. |
| Search fields should be purposeful | Index fields that users are likely to search or filter by. |
| Full-text strategy can be evaluated later | MySQL full-text search may be considered after content fields are finalized. |

---

## 9. Slug Lookup Strategy

Slug lookup is critical for SEO-friendly public URLs.

| Entity | Slug Lookup Purpose |
|---|---|
| categories | Resolve product category and subcategory URLs. |
| brands | Resolve brand detail URLs. |
| products | Resolve product detail URLs. |
| product_pdfs | Resolve document detail URLs where applicable. |
| gallery_albums | Resolve gallery category/album URLs. |
| gallery_images | Resolve gallery detail URLs where applicable. |
| seo_metadata | Resolve static or dynamic SEO-managed URLs if centralized. |

### Slug Rules

| Rule | Description |
|---|---|
| Slugs should be indexed | Public URL resolution depends on fast slug lookup. |
| Slugs should be unique within context | Uniqueness should match the URL hierarchy. |
| Slug changes should be controlled | Changes may require redirect planning. |
| Slugs should exclude archived duplicates from public conflicts | Final policy should define whether archived slugs remain reserved. |
| Slugs should align with SEO metadata | Public URL and SEO record should not conflict. |

---

## 10. Sorting & Pagination Considerations

Indexes should support sorting and pagination for public and admin listings.

| Listing Area | Sorting / Pagination Needs |
|---|---|
| Product Listings | Sort by display order, name, category, brand, or publication status. |
| Category Listings | Sort by parent category and display order. |
| Brand Listings | Sort by featured status, display order, or name. |
| Download Listings | Sort by document type, display order, date, or title. |
| Gallery Listings | Sort by album, display order, or date. |
| Inquiry Listings | Sort by submission date, status, inquiry type, or source. |
| Admin Lists | Support filtering by status and sorting by recent update. |

### Pagination Rules

| Rule | Description |
|---|---|
| Large lists should be paginated | Avoid loading all products, downloads, gallery items, or inquiries at once. |
| Pagination should use stable ordering | Sorting logic should produce predictable results. |
| Public pagination should respect active status | Only published/active records should appear publicly. |
| Admin pagination should support management filters | Admin users need status and keyword filtering. |

---

## 11. Performance Best Practices

| Practice | Description |
|---|---|
| Index frequent lookups | Prioritize slugs, relationships, statuses, and listing filters. |
| Avoid indexing every field | Indexes should be based on access patterns, not every column. |
| Keep text-heavy indexing intentional | Long descriptions should not be indexed casually unless search strategy requires it. |
| Combine indexes thoughtfully | Use composite indexes only where combined filters are common. |
| Review write impact | More indexes increase cost for create, update, archive, and delete operations. |
| Monitor real usage | Index strategy should be reviewed after launch and content growth. |
| Keep shared hosting limits in mind | Avoid unnecessary storage and maintenance overhead. |
| Support admin dashboard summaries | Status and date-based fields may need indexing for dashboard counts. |

---

## 12. Index Maintenance Guidelines

| Maintenance Area | Guideline |
|---|---|
| Review After Launch | Reassess index usefulness after real traffic and content are available. |
| Review After Catalog Growth | Revisit indexes when product, PDF, or gallery volume increases significantly. |
| Remove Unused Indexes | Unused indexes should be removed in future optimization cycles. |
| Check Duplicate Indexes | Avoid overlapping indexes that provide no additional benefit. |
| Align with Feature Changes | New filters, search fields, and admin modules may require index updates. |
| Monitor Write Performance | Content management operations should remain responsive. |
| Document Index Decisions | Important index choices should be recorded in implementation documentation. |

---

## 13. Future Scalability

| Future Area | Indexing Impact |
|---|---|
| Advanced Product Filters | Product attribute indexes may be required. |
| Application-Based Browsing | Application-product relationship indexes may be required. |
| Industry-Based Browsing | Industry-product relationship indexes may be required. |
| Case Studies | Indexes may be needed for industry, brand, product, and publication status. |
| Blog / Insights | Indexes may be needed for article category, tags, author, and publish date. |
| FAQ | Indexes may be needed for category, related product, and status. |
| Redirect Management | Old URL and target URL lookup indexes may be required. |
| Audit Logs | Indexes may be needed for entity type, entity reference, user, and timestamp. |
| Multilingual Content | Language plus slug or entity reference indexes may be required. |
| Inquiry Workflow | Assignment, status history, and follow-up indexes may be required. |

---

## 14. Related Documents

| Document | Purpose |
|---|---|
| 01_Database_Plan.md | Defines conceptual database architecture strategy. |
| 02_ER_Diagram.md | Defines conceptual entity relationships and ERD structure. |
| 03_Table_Specifications.md | Defines table-level database planning before SQL implementation. |

---

## Approval Checklist

- [ ] Document Reviewed
- [ ] Technical Review Completed
- [ ] Scope Verified
- [ ] No Open Issues
- [ ] Approved for Next Phase

## Database Review Checklist

- [ ] Index strategy is scalable
- [ ] Compatible with MySQL
- [ ] Supports future growth
- [ ] Supports search optimization
- [ ] Hostinger Shared Hosting compatible

---

**End of Document**
