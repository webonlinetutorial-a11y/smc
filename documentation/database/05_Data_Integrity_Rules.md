# Data Integrity Rules

## Document Control

| Item | Details |
|---|---|
| Project Name | Nepack Website |
| Project Type | Dynamic Industrial Automation Company Website with CMS |
| Document Title | Data Integrity Rules |
| Document Version | 1.0 |
| Document Status | Draft for Review |
| Database Platform | MySQL |
| Backend Context | PHP 8.2 |
| Hosting Environment | Hostinger Shared Hosting |
| Prepared For | Nepack Website Project |
| Prepared By | Data Governance Architecture Team |

## Revision History

| Version | Date | Description | Author | Status |
|---|---:|---|---|---|
| 1.0 | 2026-08-05 | Initial Data Integrity Rules document created | Data Governance Architecture Team | Draft |

---

## 1. Introduction

This document defines the data integrity rules for the Nepack Website database and CMS.

The rules describe how the system should maintain valid, accurate, consistent, and reliable data across products, categories, brands, downloads, gallery, users, inquiries, SEO metadata, and settings.

This document is conceptual only. It does not include SQL, constraint syntax, triggers, code, or implementation logic.

---

## 2. Objectives

| Objective | Description |
|---|---|
| Ensure Data Accuracy | Maintain correct product, brand, category, document, and contact information. |
| Prevent Orphaned Records | Avoid media, documents, SEO metadata, or inquiries losing meaningful context. |
| Prevent Duplicate Content | Reduce duplicate slugs, products, brands, categories, and SEO records. |
| Preserve Public Website Reliability | Ensure published content does not show broken links, missing files, or invalid references. |
| Support CMS Governance | Define validation and modification rules for administrators. |
| Support Security | Protect sensitive admin and inquiry data from improper exposure. |
| Support Recovery | Preserve audit and soft-delete behavior for important business data. |
| Support Future Growth | Keep integrity rules scalable for future modules and larger content volume. |

---

## 3. Data Integrity Principles

| Principle | Description |
|---|---|
| Every Record Must Have Clear Identity | Each business record should be uniquely identifiable. |
| Relationships Must Remain Valid | Linked records should exist and remain meaningful. |
| Public Content Must Be Complete | Published content should meet minimum content, relationship, media, and SEO requirements. |
| Required Data Must Be Enforced | Critical business fields should be mandatory at validation level. |
| Optional Data Must Be Explicit | Optional relationships should be allowed only where meaningful. |
| Slugs Must Be Controlled | Public URLs depend on unique and stable slugs. |
| Archive Before Delete | Business records should usually be archived instead of permanently deleted. |
| Changes Must Be Traceable | Important content and administrative changes should support audit visibility. |
| Sensitive Data Must Be Protected | Inquiry and admin data require controlled access. |
| Integrity Rules Must Scale | Rules should support future content and workflow expansion. |

---

## 4. Entity Integrity Rules

Entity integrity ensures each entity is identifiable, valid, and managed consistently.

| Entity | Integrity Rule |
|---|---|
| Users | Each user must have a unique login identity and valid role assignment. |
| Roles | Each role must have a unique role identity and defined access purpose. |
| Products | Each product must have a unique identity and valid product classification. |
| Categories | Each category must have a unique identity and valid hierarchy position. |
| Brands | Each brand must have a unique identity and valid display status. |
| Product Images | Each product image must be linked to a valid product. |
| Product PDFs | Each document must have a valid document type and file reference. |
| Gallery | Each gallery item must have a valid image reference and album/category context. |
| Gallery Albums | Each album must have a unique identity and valid status. |
| Slider | Each slider item must have valid content and display status. |
| Testimonials | Each testimonial must have valid content and display status. |
| Contact Inquiries | Each inquiry must preserve submitted contact and message information. |
| SEO Metadata | Each metadata record must relate to a valid public page or dynamic entity. |
| Settings | Global settings must maintain valid company and contact information. |

---

## 5. Referential Integrity Rules

Referential integrity ensures relationships between entities remain meaningful.

| Relationship | Integrity Rule |
|---|---|
| Users to Roles | A user should not reference a missing or invalid role. |
| Categories to Parent Categories | A child category should reference only a valid parent category and must not create circular hierarchy. |
| Products to Categories | A published product must belong to a valid active category or approved category context. |
| Products to Brands | A product brand reference must point to a valid brand where brand is assigned. |
| Product Images to Products | Product images must reference an existing product. |
| Product PDFs to Products | Product PDFs linked to products must reference valid products. |
| Product PDFs to Brands | Brand documents must reference valid brands where assigned. |
| Gallery Images to Albums | Gallery images must belong to a valid album or gallery category. |
| Gallery Images to Products | Product-related gallery images must reference valid products. |
| Gallery Images to Brands | Brand-related gallery images must reference valid brands. |
| Contact Inquiries to Products | Product inquiries should preserve product context when available. |
| Contact Inquiries to Brands | Brand inquiries should preserve brand context when available. |
| Contact Inquiries to PDFs | Document inquiries should preserve document context when available. |
| SEO Metadata to Public Entities | SEO metadata should not reference missing or invalid public content. |
| Settings to Public Website | Global settings must remain available for shared website content. |

---

## 6. Business Validation Rules

### Users

| Rule Area | Validation Rule |
|---|---|
| Identity | User login identity must be unique. |
| Role | User must have a valid role. |
| Status | User must have a controlled status such as active or inactive. |
| Credentials | Credentials must follow secure storage and update policy. |
| Access | Inactive users must not access CMS. |

### Products

| Rule Area | Validation Rule |
|---|---|
| Name | Product name is required before publishing. |
| Slug | Product slug must be unique within the selected URL strategy. |
| Category | Published product must have valid category context. |
| Brand | Brand must be valid where assigned. |
| Content | Published product should have sufficient description or feature information. |
| Media | Product image should be available for public display where product listing requires it. |
| Status | Product must use controlled lifecycle status. |
| SEO | Published product should have SEO metadata. |

### Categories

| Rule Area | Validation Rule |
|---|---|
| Name | Category name is required. |
| Slug | Category slug must be unique within category context. |
| Parent | Parent category must be valid if assigned. |
| Hierarchy | Circular parent-child hierarchy must be prevented. |
| Status | Inactive categories should not appear in public navigation. |
| Dependency | Categories with active products should not be deleted without review. |

### Brands

| Rule Area | Validation Rule |
|---|---|
| Name | Brand name is required. |
| Slug | Brand slug must be unique. |
| Logo | Logo is recommended for public display but may be optional. |
| Status | Inactive brands should not appear publicly. |
| Dependency | Brands linked to products or documents should not be deleted without review. |
| SEO | Public brand pages should have SEO metadata. |

### Gallery

| Rule Area | Validation Rule |
|---|---|
| Image | Gallery item must have a valid image file reference. |
| Album | Gallery item must belong to a valid gallery album/category. |
| Title | Image title is recommended for public clarity and admin management. |
| Alt Text | Alt text is recommended for accessibility and SEO. |
| Related Content | Product or brand references must be valid where used. |
| Status | Only published gallery items should appear publicly. |

### Downloads

| Rule Area | Validation Rule |
|---|---|
| Title | Document title is required. |
| File | PDF file reference is required for downloadable records. |
| Type | Document type must be controlled, such as catalog, datasheet, brochure, manual, certificate, or brand document. |
| Related Entity | Product, brand, or category references must be valid where assigned. |
| Availability | Published downloads should not point to missing files. |
| SEO | Public document detail pages should have metadata where indexable. |

### Contact Inquiries

| Rule Area | Validation Rule |
|---|---|
| Name | Visitor name should be required. |
| Contact | Email or phone should be required based on inquiry policy. |
| Message | Inquiry message or requirement details should be required. |
| Context | Product, brand, or document context should be preserved where inquiry originates from those pages. |
| Status | Inquiry status should use controlled values such as new, reviewed, resolved, or archived. |
| Sensitive Data | Inquiry information must be accessible only to authorized administrators. |

### SEO Metadata

| Rule Area | Validation Rule |
|---|---|
| Entity Context | SEO metadata should relate to a valid static or dynamic page. |
| Meta Title | Indexable public pages should have a meta title. |
| Meta Description | Indexable public pages should have a meta description. |
| Slug | Public dynamic slugs should be unique within context. |
| Canonical | Canonical reference should align with the preferred public URL strategy. |
| Indexing Preference | Indexing status should align with content lifecycle. |

### Settings

| Rule Area | Validation Rule |
|---|---|
| Company Identity | Company name should be available for public website identity. |
| Contact Data | Phone, email, and address should follow valid format expectations. |
| Global Assets | Logo and favicon references should be valid where used. |
| SEO Defaults | Default SEO values should be defined for fallback behavior. |
| Access | Settings should be editable only by authorized administrators. |

---

## 7. Required vs Optional Data Guidelines

| Data Type | Required When | Optional When |
|---|---|---|
| Product Name | Always required for product records. | Not optional. |
| Product Brand | Required if business policy demands brand association. | Optional for generic or unbranded products. |
| Product Image | Required if product listing design depends on image display. | Optional for draft records. |
| Product PDF | Required only when a document is being published. | Optional for products without documents. |
| Category Parent | Required for subcategories. | Optional for top-level categories. |
| Brand Logo | Recommended for public brand display. | Optional during draft or for unavailable brand assets. |
| Gallery Related Product | Required only for product-specific gallery use. | Optional for facility, event, or general images. |
| Inquiry Product Reference | Required for product-origin inquiries. | Optional for general inquiries. |
| SEO Metadata | Required for indexable public pages. | Optional for admin-only, draft, or non-indexable records. |
| Settings | Required for global company and contact display. | Optional for non-critical social or extended fields. |

---

## 8. Uniqueness Rules

| Entity / Data Area | Uniqueness Rule |
|---|---|
| Users | Login email or username must be unique. |
| Roles | Role name must be unique. |
| Categories | Category slug must be unique within the chosen hierarchy context. |
| Brands | Brand slug must be unique. |
| Products | Product slug must be unique within the chosen public URL strategy. |
| Product PDFs | Document slug should be unique within document context if public detail pages exist. |
| Gallery Albums | Album slug should be unique. |
| Gallery Images | Gallery item slug should be unique if public detail pages exist. |
| SEO Metadata | One public entity should not have multiple active SEO metadata records. |
| Settings | Global setting keys or controlled records should not duplicate. |

---

## 9. Duplicate Prevention Strategy

| Duplicate Risk | Prevention Strategy |
|---|---|
| Duplicate Products | Validate product name, slug, category, and brand context before publishing. |
| Duplicate Categories | Validate category name and slug within hierarchy context. |
| Duplicate Brands | Validate brand name and slug before publishing. |
| Duplicate PDFs | Check document title, file reference, document type, and related entity context. |
| Duplicate Gallery Images | Check image file reference, title, album, and related content where applicable. |
| Duplicate SEO Metadata | Ensure one active SEO metadata record per public entity. |
| Duplicate Inquiries | Avoid blocking genuine repeated inquiries, but identify likely spam or accidental repeated submissions. |
| Duplicate Settings | Enforce controlled global configuration ownership. |

---

## 10. Soft Delete Policy

| Entity | Soft Delete / Archive Rule |
|---|---|
| Users | Deactivate instead of deleting. |
| Roles | Deactivate or restrict deletion when users depend on the role. |
| Products | Archive instead of deleting from public catalog. |
| Categories | Archive after dependency review. |
| Brands | Archive after dependency review. |
| Product Images | Archive or detach only after product dependency review. |
| Product PDFs | Archive outdated or replaced documents. |
| Gallery Albums | Archive after checking gallery image dependency. |
| Gallery Images | Archive instead of immediate deletion. |
| Sliders | Archive inactive slides. |
| Testimonials | Archive inactive testimonials. |
| Contact Inquiries | Retain based on business policy; avoid casual deletion. |
| SEO Metadata | Archive or revise based on public content lifecycle. |
| Settings | Do not soft delete; update through controlled changes. |

---

## 11. Audit Trail Guidelines

| Audit Area | Guideline |
|---|---|
| Content Creation | Track creation timestamp and creator where applicable. |
| Content Updates | Track update timestamp and updating administrator. |
| Publishing | Track when content becomes public where applicable. |
| Archiving | Track when content is archived where applicable. |
| User Changes | Track user status and role changes conceptually. |
| SEO Changes | Track metadata and slug changes because they affect public visibility. |
| File Uploads | Track uploader and update context for images and PDFs. |
| Inquiry Handling | Track inquiry status changes where workflow requires it. |
| Settings Changes | Track updates because settings affect global website behavior. |

---

## 12. Data Modification Rules

| Modification Type | Rule |
|---|---|
| Create | Required fields and valid relationships must be checked before saving or publishing. |
| Edit | Updates must preserve valid relationships and avoid duplicate slugs. |
| Publish | Content must meet minimum completeness, status, SEO, and relationship requirements. |
| Archive | Related links, navigation, sitemap inclusion, and SEO behavior should be reviewed. |
| Delete | Permanent deletion should require dependency and business-retention review. |
| Restore | Restored content must be revalidated before public display. |
| Slug Change | Slug changes should trigger redirect planning and SEO review. |
| File Replacement | Replacing images or PDFs should preserve public reliability and prevent broken references. |
| Settings Update | Settings changes should be restricted and reviewed because they affect global output. |

---

## 13. Cascade Behavior Conceptual

Cascade behavior should be conservative and business-aware. Automatic destructive behavior should be avoided unless clearly justified.

| Parent Entity | Child / Related Entity | Conceptual Cascade Rule |
|---|---|---|
| Role | Users | Do not delete role if users depend on it; reassign or deactivate first. |
| Category | Products | Do not delete category with active products; reassign, archive, or block deletion. |
| Category | Child Categories | Do not delete parent category without reviewing child categories. |
| Brand | Products | Do not delete brand with active products; reassign, archive, or block deletion. |
| Product | Product Images | Archive or review images when product is archived. |
| Product | Product PDFs | Archive, reassign, or review PDFs when product is archived. |
| Product | Contact Inquiries | Preserve inquiry context even if product is archived. |
| Brand | Contact Inquiries | Preserve inquiry context even if brand is archived. |
| Gallery Album | Gallery Images | Do not delete album without reviewing gallery images. |
| Product PDF | Contact Inquiries | Preserve inquiry context even if PDF is archived. |
| Public Content | SEO Metadata | Update, archive, or redirect SEO metadata when content changes state. |
| Settings | Public Website | Settings should not be deleted because public pages depend on them. |

---

## 14. Error Handling Guidelines

| Error Type | Handling Guideline |
|---|---|
| Missing Required Data | Prevent publishing and show validation guidance in CMS. |
| Invalid Relationship | Prevent save or publish until relationship is corrected. |
| Duplicate Slug | Require administrator to choose a unique slug. |
| Missing File | Prevent public display or show controlled unavailable state. |
| Archived Parent | Prevent child content from appearing publicly unless explicitly allowed. |
| Invalid Inquiry Submission | Show user-friendly validation message without losing entered data. |
| Unauthorized Modification | Deny action and preserve existing data. |
| Failed Settings Update | Keep previous valid settings active. |
| SEO Conflict | Prevent conflicting active SEO metadata or public slug conflict. |

---

## 15. Data Retention Considerations

| Data Area | Retention Consideration |
|---|---|
| Products | Retain archived products for business history and inquiry context. |
| Categories | Retain archived categories if products or SEO references depend on them. |
| Brands | Retain archived brands if products, documents, or inquiries reference them. |
| Product PDFs | Retain archived documents if still needed for historical context. |
| Gallery Images | Retain archived images based on media governance policy. |
| Contact Inquiries | Retain according to business, privacy, and operational follow-up requirements. |
| Users | Retain inactive users where needed for audit context. |
| SEO Metadata | Retain historical slug/metadata information where redirect planning requires it. |
| Settings | Retain update history where audit strategy requires it. |
| Audit Data | Retention should balance accountability, privacy, and storage limits. |

---

## 16. Future Scalability

| Future Area | Integrity Consideration |
|---|---|
| Applications | Ensure product-application relationships remain valid and non-duplicated. |
| Industries | Ensure industry-product mappings are controlled. |
| Case Studies | Maintain valid relationships to products, brands, industries, and gallery items. |
| Blog / Insights | Ensure article slugs, authors, categories, and SEO metadata remain consistent. |
| FAQ | Keep question-answer content linked to valid products, categories, or support topics. |
| Product Attributes | Validate attribute names, groups, and allowed values. |
| Product Comparison | Ensure comparable attributes remain consistent across product groups. |
| Inquiry Workflow | Preserve assignment, status history, and follow-up integrity. |
| Role-Based Permissions | Prevent users from receiving conflicting permissions. |
| Redirect Management | Prevent duplicate old URLs and invalid redirect targets. |
| Multilingual Content | Maintain language-specific uniqueness and content relationships. |

---

## 17. Related Documents

| Document | Purpose |
|---|---|
| 01_Database_Plan.md | Defines conceptual database architecture strategy. |
| 02_ER_Diagram.md | Defines conceptual entity relationships and ERD structure. |
| 03_Table_Specifications.md | Defines table-level database planning before SQL implementation. |
| 04_Indexing_Strategy.md | Defines conceptual index planning for performance and search. |

---

## Approval Checklist

- [ ] Document Reviewed
- [ ] Technical Review Completed
- [ ] Scope Verified
- [ ] No Open Issues
- [ ] Approved for Next Phase

## Database Review Checklist

- [ ] Integrity rules are consistent
- [ ] Supports MySQL
- [ ] Compatible with PHP OOP
- [ ] Prevents duplicate and orphaned data
- [ ] Supports future scalability

---

**End of Document**
