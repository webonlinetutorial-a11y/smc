# Table Specifications

## Document Control

| Item | Details |
|---|---|
| Project Name | Nepack Website |
| Project Type | Dynamic Industrial Automation Company Website with CMS |
| Document Title | Table Specifications |
| Document Version | 1.0 |
| Document Status | Draft for Review |
| Database Platform | MySQL |
| Backend Context | PHP 8.2 |
| Hosting Environment | Hostinger Shared Hosting |
| Prepared For | Nepack Website Project |
| Prepared By | Database Architecture Team |

## Revision History

| Version | Date | Description | Author | Status |
|---|---:|---|---|---|
| 1.0 | 2026-08-05 | Initial Table Specifications document created | Database Architecture Team | Draft |

---

## 1. users

| Specification Area | Details |
|---|---|
| Purpose | Store administrator accounts for CMS access. |
| Business Responsibility | Authentication, admin identity, content ownership, and access control. |
| Primary Key | Unique user identifier. |
| Foreign Keys | References role ownership through role relationship. |
| Expected Columns | User identity, login email/username, password credential reference, role reference, account status, profile information, last login information. |
| Recommended Data Types | Integer identifier, short text, secure credential text, status value, date-time. |
| Constraints | Unique login identity, required role, required active/inactive status, protected credential storage. |
| Relationships | Many users may belong to one role; one user may manage many CMS records. |
| Audit Fields | Created timestamp, updated timestamp, created by, updated by where applicable. |
| Soft Delete Strategy | Prefer account deactivation over permanent deletion. |
| Future Expansion | Two-factor authentication, password reset, activity logs, granular permissions. |

---

## 2. roles

| Specification Area | Details |
|---|---|
| Purpose | Store administrator role groups. |
| Business Responsibility | Define CMS access levels and permission direction. |
| Primary Key | Unique role identifier. |
| Foreign Keys | None required conceptually. |
| Expected Columns | Role name, role description, role status, display order or priority. |
| Recommended Data Types | Integer identifier, short text, long text, status value, numeric order. |
| Constraints | Unique role name, required status. |
| Relationships | One role may be assigned to many users. |
| Audit Fields | Created timestamp, updated timestamp, created by, updated by. |
| Soft Delete Strategy | Prefer deactivation if users depend on the role. |
| Future Expansion | Permission groups, module-level access, action-level authorization. |

---

## 3. categories

| Specification Area | Details |
|---|---|
| Purpose | Store product categories and subcategories. |
| Business Responsibility | Organize products into browsable hierarchy. |
| Primary Key | Unique category identifier. |
| Foreign Keys | Optional parent category reference; optional user ownership reference. |
| Expected Columns | Category name, slug, parent category reference, description, image/icon reference, status, display order, SEO relationship. |
| Recommended Data Types | Integer identifier, short text, long text, status value, numeric order, date-time. |
| Constraints | Unique slug within category context, valid parent relationship, no invalid circular hierarchy. |
| Relationships | One category may contain many products; one category may contain child categories. |
| Audit Fields | Created timestamp, updated timestamp, created by, updated by. |
| Soft Delete Strategy | Archive category after checking child categories and products. |
| Future Expansion | Category icons, advanced filters, application mapping, multi-level hierarchy controls. |

---

## 4. brands

| Specification Area | Details |
|---|---|
| Purpose | Store brand and manufacturer information. |
| Business Responsibility | Manage represented brands and brand-based product discovery. |
| Primary Key | Unique brand identifier. |
| Foreign Keys | Optional user ownership reference. |
| Expected Columns | Brand name, slug, logo reference, overview, featured status, publication status, display order, SEO relationship. |
| Recommended Data Types | Integer identifier, short text, long text, media reference, boolean/status value, numeric order, date-time. |
| Constraints | Unique brand name or slug, valid status, valid logo reference where used. |
| Relationships | One brand may have many products, documents, gallery images, and inquiries. |
| Audit Fields | Created timestamp, updated timestamp, created by, updated by. |
| Soft Delete Strategy | Archive brand after reviewing related products and documents. |
| Future Expansion | Brand certificates, authorization documents, brand landing pages, brand category mapping. |

---

## 5. products

| Specification Area | Details |
|---|---|
| Purpose | Store product catalog records. |
| Business Responsibility | Manage public product information, classification, media, documents, and inquiry context. |
| Primary Key | Unique product identifier. |
| Foreign Keys | Category reference, brand reference, user ownership reference. |
| Expected Columns | Product name, slug, category reference, brand reference, product line, short description, detailed description, features, specifications summary, part numbers, status, featured flag, display order. |
| Recommended Data Types | Integer identifier, short text, long text, structured text, status value, boolean value, numeric order, date-time. |
| Constraints | Required product name, required category, unique slug, valid status, valid brand/category references where used. |
| Relationships | Product belongs to category and may belong to brand; product has many images, PDFs, gallery links, and inquiries. |
| Audit Fields | Created timestamp, updated timestamp, created by, updated by, published timestamp where applicable. |
| Soft Delete Strategy | Archive product instead of immediate deletion. |
| Future Expansion | Technical attributes, comparison fields, application mapping, industry mapping, related product groups. |

---

## 6. product_images

| Specification Area | Details |
|---|---|
| Purpose | Store product image metadata and product image relationships. |
| Business Responsibility | Manage product visual assets. |
| Primary Key | Unique product image identifier. |
| Foreign Keys | Product reference; optional user ownership reference. |
| Expected Columns | Product reference, image file reference, image title, alt text, caption, primary image flag, display order, status. |
| Recommended Data Types | Integer identifier, media reference, short text, long text, boolean/status value, numeric order, date-time. |
| Constraints | Required product reference, valid image reference, recommended alt text, controlled primary image behavior. |
| Relationships | Many images may belong to one product. |
| Audit Fields | Created timestamp, updated timestamp, uploaded by, updated by. |
| Soft Delete Strategy | Archive or detach after dependency review. |
| Future Expansion | Multiple image sizes, image optimization metadata, image focal point, image usage tracking. |

---

## 7. product_pdfs

| Specification Area | Details |
|---|---|
| Purpose | Store downloadable document metadata for products and brands. |
| Business Responsibility | Manage catalogs, datasheets, brochures, manuals, certificates, and brand documents. |
| Primary Key | Unique PDF/document identifier. |
| Foreign Keys | Optional product reference, brand reference, category reference, user ownership reference. |
| Expected Columns | Document title, slug, document type, file reference, file size, version/date label, description, related product, related brand, related category, status. |
| Recommended Data Types | Integer identifier, short text, long text, file reference, status value, date/date-time, numeric value. |
| Constraints | Required title, required document type, valid PDF reference, valid related entity references where used. |
| Relationships | Product or brand may have many PDFs; PDFs may be referenced by inquiries. |
| Audit Fields | Created timestamp, updated timestamp, uploaded by, updated by. |
| Soft Delete Strategy | Archive outdated or replaced documents. |
| Future Expansion | Version control, download tracking, gated downloads, document expiry. |

---

## 8. gallery_albums

| Specification Area | Details |
|---|---|
| Purpose | Store gallery album or gallery category groupings. |
| Business Responsibility | Organize gallery images by product, project, facility, event, or brand context. |
| Primary Key | Unique gallery album identifier. |
| Foreign Keys | Optional user ownership reference. |
| Expected Columns | Album name, slug, description, cover image reference, album type, status, display order. |
| Recommended Data Types | Integer identifier, short text, long text, media reference, status value, numeric order, date-time. |
| Constraints | Unique slug, required album name, valid status. |
| Relationships | One album may contain many gallery images. |
| Audit Fields | Created timestamp, updated timestamp, created by, updated by. |
| Soft Delete Strategy | Archive album after checking gallery image dependencies. |
| Future Expansion | Nested albums, event albums, project albums, video albums. |

---

## 9. gallery_images

| Specification Area | Details |
|---|---|
| Purpose | Store gallery image metadata. |
| Business Responsibility | Manage public visual content and optional product/brand references. |
| Primary Key | Unique gallery image identifier. |
| Foreign Keys | Gallery album reference, optional product reference, optional brand reference, user ownership reference. |
| Expected Columns | Album reference, image file reference, image title, caption, alt text, related product, related brand, status, display order. |
| Recommended Data Types | Integer identifier, media reference, short text, long text, status value, numeric order, date-time. |
| Constraints | Required image reference, required album reference, valid optional product/brand references. |
| Relationships | Many gallery images belong to one album; gallery images may reference products or brands. |
| Audit Fields | Created timestamp, updated timestamp, uploaded by, updated by. |
| Soft Delete Strategy | Archive image rather than immediate deletion. |
| Future Expansion | Video support, case study linking, project metadata, location tagging. |

---

## 10. sliders

| Specification Area | Details |
|---|---|
| Purpose | Store homepage or promotional slider/banner items. |
| Business Responsibility | Manage featured homepage messaging and promotional navigation. |
| Primary Key | Unique slider item identifier. |
| Foreign Keys | Optional user ownership reference. |
| Expected Columns | Slide title, supporting text, image reference, link target, button label, status, display order, scheduling information if needed. |
| Recommended Data Types | Integer identifier, short text, long text, media reference, URL/reference text, status value, numeric order, date-time. |
| Constraints | Required image or content depending on slide type, valid link target if provided, controlled status. |
| Relationships | Slider may link conceptually to products, brands, downloads, or contact pages. |
| Audit Fields | Created timestamp, updated timestamp, created by, updated by. |
| Soft Delete Strategy | Archive inactive slides. |
| Future Expansion | Campaign scheduling, multiple slider zones, analytics tagging. |

---

## 11. testimonials

| Specification Area | Details |
|---|---|
| Purpose | Store testimonial content. |
| Business Responsibility | Manage public trust and credibility content. |
| Primary Key | Unique testimonial identifier. |
| Foreign Keys | Optional user ownership reference. |
| Expected Columns | Person/client name, designation/company, testimonial text, image/logo reference, featured status, status, display order. |
| Recommended Data Types | Integer identifier, short text, long text, media reference, boolean/status value, numeric order, date-time. |
| Constraints | Required testimonial text, required display name where applicable, valid status. |
| Relationships | Testimonials are generally independent CMS content. |
| Audit Fields | Created timestamp, updated timestamp, created by, updated by. |
| Soft Delete Strategy | Archive rather than delete. |
| Future Expansion | Client logos, industry tagging, approval status, source attribution. |

---

## 12. contact_inquiries

| Specification Area | Details |
|---|---|
| Purpose | Store visitor-submitted inquiries. |
| Business Responsibility | Support sales, support, and follow-up workflows. |
| Primary Key | Unique inquiry identifier. |
| Foreign Keys | Optional product reference, brand reference, document reference. |
| Expected Columns | Inquiry type, visitor name, email, phone, location, message, related product, related brand, related document, inquiry status, source page/context. |
| Recommended Data Types | Integer identifier, short text, long text, contact text, status value, date-time. |
| Constraints | Required contact details, required message or requirement, valid email/phone format conceptually, valid inquiry status. |
| Relationships | Inquiry may reference product, brand, or document; administrators review inquiries. |
| Audit Fields | Created timestamp, updated timestamp, reviewed by, status updated timestamp where applicable. |
| Soft Delete Strategy | Avoid deletion unless retention policy allows; prefer archive/resolved state. |
| Future Expansion | Assignment workflow, notes, follow-up history, email notification tracking, CRM integration. |

---

## 13. seo_metadata

| Specification Area | Details |
|---|---|
| Purpose | Store SEO metadata for public pages and dynamic content. |
| Business Responsibility | Support search visibility, metadata governance, and URL consistency. |
| Primary Key | Unique SEO metadata identifier. |
| Foreign Keys | Conceptual reference to public content entity where applicable. |
| Expected Columns | Entity type, entity reference, meta title, meta description, slug, canonical reference, indexing preference, Open Graph fields, Twitter Card fields. |
| Recommended Data Types | Integer identifier, short text, long text, URL/reference text, status/indexing value, date-time. |
| Constraints | Unique slug within context, required metadata for indexable public content, valid entity reference. |
| Relationships | SEO metadata may describe products, brands, categories, downloads, gallery images, and static pages. |
| Audit Fields | Created timestamp, updated timestamp, created by, updated by. |
| Soft Delete Strategy | Archive or update based on related content lifecycle. |
| Future Expansion | Redirect references, XML sitemap controls, SEO scoring, multilingual metadata. |

---

## 14. settings

| Specification Area | Details |
|---|---|
| Purpose | Store global website and company configuration. |
| Business Responsibility | Provide shared company, contact, branding, and default SEO values. |
| Primary Key | Unique setting identifier or controlled global settings record. |
| Foreign Keys | Optional user ownership reference for updates. |
| Expected Columns | Company name, address, phone, email, map/location reference, social links, logo reference, favicon reference, default SEO values, website status/configuration values. |
| Recommended Data Types | Integer identifier, short text, long text, media reference, URL/reference text, status value, date-time. |
| Constraints | Required core company/contact fields, valid email/phone/link formats conceptually, restricted admin access. |
| Relationships | Used globally by header, footer, contact page, SEO defaults, and organization identity. |
| Audit Fields | Created timestamp, updated timestamp, updated by. |
| Soft Delete Strategy | Settings should not be soft-deleted; changes should be controlled and auditable. |
| Future Expansion | Multi-location settings, notification settings, integration settings, business hours, multilingual defaults. |

---

# 15. Common Audit Columns

| Audit Field Type | Purpose |
|---|---|
| Created Timestamp | Records when a record was created. |
| Updated Timestamp | Records when a record was last updated. |
| Created By | Identifies the administrator who created the record where applicable. |
| Updated By | Identifies the administrator who last updated the record where applicable. |
| Published Timestamp | Records when public content became visible where applicable. |
| Archived Timestamp | Records when content was archived where applicable. |
| Reviewed By | Useful for inquiry management and approval workflows. |

---

# 16. Common Naming Standards

| Area | Standard |
|---|---|
| Table Names | Lowercase, plural, underscore-separated, business-readable. |
| Column Names | Lowercase, underscore-separated, descriptive, consistent across tables. |
| Primary Keys | Use a consistent project-wide identifier pattern. |
| Foreign Keys | Use names that clearly identify the related entity. |
| Status Fields | Use consistent names and values for active, inactive, draft, published, archived, and resolved states. |
| Slugs | Use lowercase hyphenated public-facing slugs. |
| Media References | Use clear names that identify whether the reference is an image, PDF, logo, or general file. |

---

# 17. Timestamp Strategy

| Timestamp Type | Usage |
|---|---|
| Created Timestamp | Required for major CMS and operational records. |
| Updated Timestamp | Required for records that can be edited. |
| Published Timestamp | Recommended for products, brands, downloads, gallery images, sliders, and testimonials. |
| Archived Timestamp | Recommended for soft-deleted or archived content. |
| Login Timestamp | Recommended for users. |
| Inquiry Timestamp | Required for contact inquiries. |
| Status Change Timestamp | Recommended for inquiry and publishing workflows. |

### Timestamp Rules

| Rule | Description |
|---|---|
| Use consistent timezone policy | Store timestamps consistently across environments. |
| Preserve creation history | Created timestamp should not change after record creation. |
| Update modification time reliably | Updated timestamp should reflect meaningful content changes. |
| Use timestamps for lifecycle tracking | Publish and archive timestamps support audit and SEO decisions. |

---

# 18. Soft Delete Guidelines

| Guideline | Description |
|---|---|
| Prefer Archive for Public Content | Products, categories, brands, downloads, gallery images, sliders, and testimonials should be archived instead of immediately deleted. |
| Prefer Deactivate for Users | User accounts should be disabled rather than deleted. |
| Protect Inquiry Records | Contact inquiries should follow business retention rules. |
| Review Dependencies First | Related images, PDFs, SEO metadata, and navigation links should be checked before deletion. |
| Exclude Archived Content Publicly | Archived records should not appear in public listings, navigation, search, or sitemap. |
| Preserve Restore Option | Soft-deleted content should be recoverable where business rules allow. |

---

# 19. Related Documents

| Document | Purpose |
|---|---|
| 01_Database_Plan.md | Defines conceptual database architecture strategy. |
| 02_ER_Diagram.md | Defines conceptual entity relationships and ERD structure. |
| Frontend Documentation | Defines public content, navigation, SEO, user flow, and page requirements. |
| Planning Documentation | Defines scope, requirements, and feature planning. |

---

## Approval Checklist

- [ ] Document Reviewed
- [ ] Technical Review Completed
- [ ] Scope Verified
- [ ] No Open Issues
- [ ] Approved for Next Phase

## Database Review Checklist

- [ ] Table names are consistent
- [ ] Relationships are valid
- [ ] Naming conventions followed
- [ ] Supports scalability
- [ ] Compatible with MySQL
- [ ] Compatible with PHP OOP
- [ ] Hostinger Shared Hosting compatible

---

**End of Document**
