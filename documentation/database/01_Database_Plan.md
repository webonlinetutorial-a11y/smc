# Database Plan

## Document Control

| Item | Details |
|---|---|
| Project Name | Nepack Website |
| Project Type | Dynamic Industrial Automation Company Website with CMS |
| Document Title | Database Plan |
| Document Version | 1.0 |
| Document Status | Draft for Review |
| Technology Stack | HTML5, CSS3, Vanilla JavaScript, PHP 8.2, MySQL |
| Hosting Environment | Hostinger Shared Hosting |
| Development Environment | XAMPP |
| Prepared For | Nepack Website Project |
| Prepared By | Database Architecture Team |

## Revision History

| Version | Date | Description | Author | Status |
|---|---:|---|---|---|
| 1.0 | 2026-08-05 | Initial Database Plan document created | Database Architecture Team | Draft |

---

## 1. Introduction

This document defines the conceptual database architecture plan for the Nepack Website, a dynamic industrial automation company website with CMS functionality.

The database will support public website content, product catalog management, brand management, downloads, gallery content, slider content, testimonials, inquiries, SEO metadata, admin users, and global settings.

This document is intentionally architecture-focused. It does not include SQL, table definitions, column-level specifications, CREATE TABLE statements, indexes, or ER diagrams.

---

## 2. Database Objectives

| Objective | Description |
|---|---|
| Support Dynamic Content | Store and manage website content through the CMS. |
| Support Product Catalog | Organize products, categories, brands, images, documents, and SEO data. |
| Support Admin Operations | Allow authorized administrators to create, update, publish, archive, and manage content. |
| Support Public Website Performance | Provide structured data for fast loading public pages. |
| Support Search and Filtering | Enable product, brand, download, gallery, and page discovery. |
| Support SEO Management | Store metadata, slugs, and page-level SEO information. |
| Support Inquiry Capture | Store contact and product inquiry submissions. |
| Support Scalability | Allow future expansion into applications, industries, blogs, case studies, and services. |
| Support Data Integrity | Maintain reliable relationships between content entities. |
| Support Security | Protect admin data, user submissions, and uploaded file references. |

---

## 3. Database Design Principles

| Principle | Description |
|---|---|
| Normalized Core Data | Core entities should be organized to reduce unnecessary duplication. |
| Clear Ownership | Each entity should have a clear business purpose and data owner. |
| Relationship Integrity | Products, brands, categories, documents, and media should be connected through controlled relationships. |
| CMS-Friendly Structure | Content should support draft, published, archived, and inactive states where required. |
| SEO Readiness | Dynamic public pages should support metadata and readable slug management. |
| Audit Awareness | Important content changes should be traceable conceptually through timestamps and ownership fields. |
| Security by Design | Admin access, file references, and inquiry data should be protected. |
| Performance Consciousness | Frequently accessed content should be structured for efficient retrieval. |
| Future Flexibility | The structure should allow new content modules without redesigning the entire database. |
| Implementation Independence | This plan describes database architecture only, not final SQL or schema details. |

---

## 4. Database Architecture Overview

The database should be organized around CMS-managed business content, public website data, administrative access, and operational records.

| Database Area | Purpose |
|---|---|
| User & Access Data | Stores administrator accounts and access-related information. |
| Product Catalog Data | Stores products, product categories, product media, and product documents. |
| Brand Data | Stores brand information and brand relationships. |
| Media & Download Data | Stores metadata for images, PDFs, gallery assets, and downloadable documents. |
| Marketing Content Data | Stores slider, testimonials, homepage highlights, and reusable content sections. |
| Inquiry Data | Stores visitor contact and inquiry submissions. |
| SEO Data | Stores page-level and dynamic-content SEO metadata. |
| Settings Data | Stores global company, contact, branding, and website configuration values. |

### Conceptual Architecture Layers

| Layer | Description |
|---|---|
| Public Content Layer | Data used to render public pages such as products, brands, downloads, gallery, and contact. |
| CMS Management Layer | Data used by administrators to create, update, publish, archive, and organize content. |
| Relationship Layer | Conceptual links between products, categories, brands, documents, gallery items, and SEO metadata. |
| Operational Layer | Inquiry records, admin users, settings, and future audit-related information. |
| SEO Layer | Metadata, slugs, canonical references, and indexing preferences for public content. |

---

## 5. Core Business Entities

| Entity | Purpose | Primary Data Owner |
|---|---|---|
| Users | Represents CMS administrators and authorized backend users. | Administrator |
| Products | Represents public product records displayed on the website. | Administrator |
| Categories | Represents product category and subcategory hierarchy. | Administrator |
| Brands | Represents product brands or represented manufacturers. | Administrator |
| Product Images | Represents images associated with product records. | Administrator |
| Product Documents PDFs | Represents product-related catalogs, datasheets, brochures, manuals, or certificates. | Administrator |
| Gallery | Represents public image items used for product, project, facility, event, or brand gallery sections. | Administrator |
| Gallery Albums | Represents gallery grouping or album-level organization. | Administrator |
| Slider | Represents homepage or promotional slider/banner content. | Administrator |
| Testimonials | Represents customer, partner, or business testimonial content. | Administrator |
| Contact Inquiries | Represents visitor-submitted contact, product, brand, or document inquiries. | Visitor / Administrator |
| SEO | Represents metadata and search engine visibility information for public pages and dynamic content. | Administrator / SEO Manager |
| Settings | Represents global company, contact, branding, and site configuration data. | Administrator |

### Entity Grouping

| Group | Entities |
|---|---|
| Access Management | Users |
| Product Catalog | Products, Categories, Brands, Product Images, Product Documents PDFs |
| Media Management | Product Images, Gallery, Gallery Albums, Slider |
| Marketing Content | Slider, Testimonials |
| Communication | Contact Inquiries |
| SEO Management | SEO |
| Configuration | Settings |

---

## 6. Conceptual Entity Relationships

The following relationships are conceptual only and do not define physical tables, columns, keys, or indexes.

| Relationship | Conceptual Description |
|---|---|
| Users manage content | Authorized users create and update CMS-managed content. |
| Categories organize products | Products belong to product categories or subcategories. |
| Categories may have hierarchy | A category may contain child categories or subcategories. |
| Brands relate to products | A brand may be associated with multiple products. |
| Products relate to images | A product may have one or more product images. |
| Products relate to documents | A product may have one or more related PDFs such as catalogs or datasheets. |
| Brands relate to documents | A brand may have brand-specific documents such as catalogs or certificates. |
| Gallery items may relate to albums | Gallery content may be grouped into gallery albums or categories. |
| Gallery items may relate to products | A gallery item may optionally reference a product. |
| Gallery items may relate to brands | A gallery item may optionally reference a brand. |
| Slider items may link to content | Slider content may conceptually link to product, brand, download, or contact pages. |
| Testimonials may be displayed publicly | Testimonials may be published or archived for public visibility. |
| Inquiries may reference content | Contact inquiries may optionally reference a product, brand, or document. |
| SEO metadata relates to public content | SEO data may be associated with static pages or dynamic entities. |
| Settings support global content | Settings provide shared values for header, footer, contact page, and site identity. |

---

## 7. Data Lifecycle

Data lifecycle rules should define how content moves from creation to public use, archive, and removal.

| Lifecycle Stage | Description |
|---|---|
| Create | Administrator creates a new record or visitor submits an inquiry. |
| Draft | CMS content may remain unpublished while incomplete or under review. |
| Validate | Required fields, relationships, media, and metadata are checked conceptually. |
| Publish | Approved content becomes visible on the public website. |
| Update | Existing content is modified by authorized administrators. |
| Archive | Content is removed from public listings but retained for administrative reference. |
| Delete | Content is permanently removed only when business rules allow. |
| Restore | Archived content may be restored if still valid. |

### Lifecycle by Entity

| Entity | Lifecycle Notes |
|---|---|
| Users | Created by authorized admin; inactive users should lose access without deleting historical ownership references. |
| Products | Created as draft, published when complete, archived when unavailable or discontinued. |
| Categories | Should be archived carefully because they may contain products. |
| Brands | Should be archived carefully because they may relate to products and downloads. |
| Product Images | Should remain linked only to valid products and should not be orphaned. |
| Product Documents PDFs | Should be archived or replaced when outdated. |
| Gallery | Published gallery items appear publicly; archived items are hidden. |
| Slider | Active slider items appear publicly based on publication status and order. |
| Testimonials | Published testimonials may appear publicly; archived items remain hidden. |
| Contact Inquiries | Created by visitors; retained for business follow-up and compliance policy. |
| SEO | Updated when public page content or URL strategy changes. |
| Settings | Updated rarely and controlled by authorized administrators. |

### Deletion Principles

| Principle | Description |
|---|---|
| Prefer Archive Over Delete | Business content should generally be archived instead of deleted. |
| Avoid Orphaned Relationships | Related images, documents, SEO records, and links should be reviewed before deletion. |
| Protect Inquiry Records | Visitor inquiry data should not be deleted casually and should follow business retention rules. |
| Preserve Audit Context | Where possible, content history and ownership should remain understandable. |

---

## 8. Naming Conventions

Naming conventions should remain consistent across future database design and documentation.

### Table Naming Guidelines

| Guideline | Description |
|---|---|
| Use lowercase names | Table names should use lowercase characters. |
| Use plural nouns | Entity table names should use plural naming where appropriate. |
| Use underscores | Multi-word table names should use underscores. |
| Be descriptive | Table names should clearly describe the stored entity. |
| Avoid abbreviations | Use full business terms unless abbreviation is widely accepted. |
| Avoid reserved words | Table names should not conflict with MySQL reserved terms. |

### Column Naming Guidelines

| Guideline | Description |
|---|---|
| Use lowercase names | Column names should use lowercase characters. |
| Use underscores | Multi-word column names should use underscores. |
| Be descriptive | Column names should clearly indicate meaning. |
| Avoid ambiguous names | Names such as value, data, or type should be used only with clear context. |
| Keep consistency | Common attributes should use consistent names across entities. |
| Avoid implementation leakage | Column names should reflect business meaning, not UI-specific labels. |

### Primary Key Naming Guidelines

| Guideline | Description |
|---|---|
| Use consistent primary key naming | Primary keys should follow a predictable project-wide convention. |
| Keep keys technical | Primary keys should not depend on business text values that may change. |
| Avoid exposing public keys | Public URLs should prefer readable slugs instead of technical identifiers. |

### Foreign Key Naming Guidelines

| Guideline | Description |
|---|---|
| Use relationship clarity | Foreign key names should make the related entity obvious. |
| Follow consistent suffix rules | Relationship fields should follow a standard project-wide naming pattern. |
| Avoid vague references | Names should not obscure the target entity or relationship purpose. |

### Index Naming Guidelines

| Guideline | Description |
|---|---|
| Use clear index purpose | Index names should identify the related entity or search purpose. |
| Keep names consistent | Indexes should follow a predictable naming convention. |
| Avoid overly generic names | Names should be specific enough for maintenance. |
| Document important indexes later | Detailed index naming should be finalized in table specifications. |

---

## 9. Data Integrity Principles

| Principle | Description |
|---|---|
| Required Business Data | Key fields needed for publishing should be mandatory at validation level. |
| Unique Slugs | Public dynamic pages should not have duplicate slugs within their context. |
| Valid Relationships | Products should not reference inactive or invalid categories and brands without defined rules. |
| Controlled Status Values | Draft, published, archived, active, and inactive states should be standardized. |
| Referential Awareness | Linked images, documents, categories, brands, and SEO records should remain consistent. |
| No Broken Public Content | Public pages should not show missing files, invalid images, or broken relationships. |
| Media Validation | Images and PDFs should be validated before public use. |
| Inquiry Completeness | Submitted inquiries should retain required contact and message information. |
| SEO Completeness | Indexable public pages should have required metadata and valid slugs. |
| Settings Consistency | Global contact and company data should remain synchronized across public pages. |

---

## 10. Scalability Considerations

| Area | Scalability Consideration |
|---|---|
| Product Growth | Product structure should support many products, categories, and subcategories. |
| Brand Growth | Brand records should support expansion without navigation restructuring. |
| Download Growth | PDF documents should be categorized and searchable as volume increases. |
| Gallery Growth | Gallery albums and categories should support larger media collections. |
| Search Growth | Content should be organized to support future advanced search and filtering. |
| SEO Growth | Metadata structure should support static and dynamic pages. |
| User Growth | Admin user management should support future roles and permissions. |
| Inquiry Growth | Inquiry storage should support filtering, status tracking, and retention. |
| Future Modules | Architecture should allow applications, industries, case studies, services, and blogs. |
| Hosting Constraints | Database growth should account for shared hosting resource limits. |

---

## 11. Performance Considerations

| Area | Performance Strategy |
|---|---|
| Product Listings | Support efficient retrieval of active products by category, brand, and status. |
| Product Details | Retrieve product, images, documents, brand, category, and SEO data efficiently. |
| Search | Plan for searchable fields across products, brands, downloads, gallery, and pages. |
| Admin Lists | Support pagination and filtering for products, inquiries, gallery, and downloads. |
| Media Metadata | Store file references and metadata cleanly to avoid heavy file-system lookups. |
| Homepage Content | Featured products, brands, slider, and gallery highlights should be efficient to load. |
| SEO Metadata | Metadata should be quickly accessible for each public page. |
| Settings | Global settings should be designed for low-overhead access. |
| Inquiries | Inquiry lists should support date, status, and source filtering in future. |
| Archives | Archived records should not slow public listing queries. |

### Performance Planning Rules

| Rule | Description |
|---|---|
| Use Pagination for Large Lists | Product, download, gallery, and inquiry records should not be loaded all at once. |
| Separate Public and Admin Needs | Public queries should focus on published content; admin queries may include all statuses. |
| Plan Searchable Fields | Search-relevant data should be identified before final schema design. |
| Avoid Unnecessary Duplication | Duplicate data should be minimized unless justified for performance. |
| Optimize for Shared Hosting | Database design should be efficient under Hostinger shared hosting constraints. |

---

## 12. Security Considerations

| Security Area | Consideration |
|---|---|
| Admin Authentication | CMS access must require valid administrator login. |
| Authorization | Admin actions should be limited by role or permission where applicable. |
| Password Protection | User credentials must be stored securely using accepted password handling practices. |
| Session Safety | Admin sessions should expire and require re-authentication when needed. |
| Input Validation | Admin forms and public inquiry forms must validate submitted data. |
| File Upload Safety | Image and PDF uploads must be validated before storage or public use. |
| Sensitive Data | Inquiry contact details should be protected from unauthorized access. |
| Public Exposure | Admin-only data and unpublished content must not appear publicly. |
| SQL Injection Prevention | Database access should use secure query practices during implementation. |
| CSRF Protection | Sensitive admin and inquiry submissions should include conceptual request authenticity protection. |
| Error Disclosure | Database errors should not expose internal details to public users. |
| Backup Security | Database backups must be stored securely and access-controlled. |

---

## 13. Backup & Recovery Considerations

| Backup Area | Recommendation |
|---|---|
| Database Backup Frequency | Regular backups should be scheduled based on update frequency and business importance. |
| Pre-Deployment Backup | Backup should be taken before major releases, migrations, or bulk content changes. |
| Media Backup Alignment | Database backups should be coordinated with uploaded images and PDFs. |
| Restore Testing | Backup restoration should be tested periodically. |
| Backup Retention | Retention policy should define how long backups are kept. |
| Access Control | Backup access should be limited to authorized personnel. |
| Off-Hosting Copy | A separate backup copy should be considered outside the hosting account. |
| Recovery Priority | Inquiries, products, categories, brands, downloads, and settings are high-priority data. |
| Rollback Planning | Major content or database changes should have a recovery path. |

### Recovery Considerations

| Scenario | Recovery Approach |
|---|---|
| Accidental Content Deletion | Restore from archive where possible or database backup if required. |
| Broken Product Relationships | Restore valid category, brand, document, or product references. |
| Missing Media Files | Restore media from file backup and verify database references. |
| Corrupted Settings | Restore last valid settings backup. |
| Failed Deployment | Roll back to stable database and application state. |

---

## 14. Future Database Expansion

The database architecture should support planned and optional future modules.

| Future Module | Database Planning Consideration |
|---|---|
| Applications | Support application pages connected to products and industries. |
| Industries | Support industry pages connected to products, case studies, and gallery items. |
| Case Studies | Support case study content linked to products, brands, gallery, and industries. |
| Services | Support service pages and service inquiry types. |
| Blog / Insights | Support articles, categories, authors, tags, and SEO metadata. |
| FAQ | Support question-answer content linked to products, categories, or support pages. |
| Advanced Product Filters | Support technical attributes and filterable product properties. |
| Product Comparison | Support structured comparable attributes across product groups. |
| Inquiry Workflow | Support inquiry assignment, status history, follow-up notes, and notifications. |
| Role-Based Access Control | Support granular permissions for administrators. |
| Audit Logging | Support content change tracking and admin activity logs. |
| Redirect Management | Support old-to-new URL references for SEO preservation. |
| Multilingual Content | Support language-specific content and metadata if required in future. |
| Analytics Integration | Support storing lightweight event references if needed, without replacing analytics tools. |

---

## 15. Related Documents

| Document | Purpose |
|---|---|
| 01_Project_Scope.md | Defines project scope, objectives, constraints, assumptions, and deliverables. |
| 02_Software_Requirement_Specification.md | Defines functional and non-functional software requirements. |
| 03_Feature_Breakdown.md | Defines feature-level planning and implementation scope. |
| Frontend Documentation | Defines information architecture, sitemap, user flows, page specifications, navigation, and SEO structure. |

---

## Approval Checklist

- [ ] Document Reviewed
- [ ] Technical Review Completed
- [ ] Scope Verified
- [ ] No Open Issues
- [ ] Approved for Next Phase

---

**End of Document**
