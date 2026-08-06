# Sitemap

## Document Control

| Item | Details |
|---|---|
| Project Name | Nepack Website |
| Website Type | Dynamic Industrial Automation Company Website |
| Document Title | Sitemap |
| Document Version | 1.0 |
| Document Status | Draft for Review |
| Technology Stack | HTML5, CSS3, Vanilla JavaScript, PHP 8.2, MySQL |
| Hosting Environment | Hostinger Shared Hosting |
| Development Environment | XAMPP |
| Prepared For | Nepack Website Project |
| Prepared By | Sitemap Architecture Team |

## Revision History

| Version | Date | Description | Author | Status |
|---|---:|---|---|---|
| 1.0 | 2026-08-05 | Initial Sitemap document created | Sitemap Architecture Team | Draft |

---

## 1. Introduction

This document defines the complete Sitemap for the Nepack Website, a dynamic industrial automation company website.

The Sitemap establishes the planned public website page hierarchy, conceptual URL organization, navigation mapping, breadcrumb structure, internal linking direction, and high-level admin panel structure.

This document is intended to guide routing, navigation, SEO planning, content organization, and future development phases.

This document does not include routing code, UI design, HTML, CSS, JavaScript, PHP implementation, SQL, or database schema.

---

## 2. Purpose

The purpose of this Sitemap document is to define a clear and scalable page structure for the Nepack Website before UI design and development begin.

This document will support:

| Area | Purpose |
|---|---|
| Routing | Define conceptual page paths and URL patterns. |
| Navigation | Identify pages required in main navigation, footer navigation, and contextual navigation. |
| Breadcrumbs | Establish hierarchical page trails for user orientation. |
| Internal Linking | Define how important pages should connect to one another. |
| SEO | Support crawlable, keyword-relevant, and readable page structures. |
| Menu Structure | Provide a foundation for header, footer, product, brand, download, and gallery menus. |
| Scalability | Allow future addition of products, brands, categories, downloads, and content sections. |

---

## 3. Sitemap Principles

| Principle | Description |
|---|---|
| Clear Hierarchy | Pages should be organized from broad sections to specific detail pages. |
| SEO-Friendly URLs | URLs should be readable, descriptive, lowercase, and hyphen-separated. |
| Product-First Discovery | Product and brand pages should be easy to reach from multiple areas. |
| Minimal Ambiguity | Each page should have a clear parent section and content purpose. |
| Scalable Structure | The sitemap should support future growth without disrupting existing URLs. |
| Consistent Naming | Page names, URL labels, breadcrumbs, and menu labels should remain aligned. |
| Crawlability | Important public pages should be accessible through navigation or internal links. |
| Conversion Support | Inquiry and contact paths should be available from relevant product and brand pages. |

---

## 4. Public Website Sitemap

The following tree represents the complete public-facing page hierarchy.

```text
Home
├── About Us
│   ├── Company Profile
│   ├── Capabilities
│   └── Industries Served
│
├── Products
│   ├── SMC Product Line
│   │   ├── Product Category
│   │   │   ├── Product Subcategory
│   │   │   │   └── Product Detail
│   │   │   └── Product Detail
│   │   └── Product Detail
│   │
│   ├── Other Product Line
│   │   ├── Product Category
│   │   │   ├── Product Subcategory
│   │   │   │   └── Product Detail
│   │   │   └── Product Detail
│   │   └── Product Detail
│   │
│   └── All Product Categories
│
├── Brands
│   ├── All Brands
│   ├── Brand Detail
│   │   ├── Brand Products
│   │   └── Brand Downloads
│   └── Featured Brands
│
├── Downloads
│   ├── Product Catalogs
│   ├── Datasheets
│   ├── Brochures
│   ├── Manuals
│   ├── Certificates
│   └── Brand Documents
│
├── Gallery
│   ├── Product Gallery
│   ├── Project Gallery
│   ├── Facility Gallery
│   ├── Event Gallery
│   └── Brand Gallery
│
├── Search
│   └── Search Results
│
├── Contact Us
│   ├── Contact Details
│   ├── Inquiry Form
│   └── Inquiry Confirmation
│
├── Utility Pages
│   ├── Privacy Policy
│   ├── Terms & Conditions
│   ├── Sitemap
│   └── 404 Page
│
└── Future Expansion
    ├── Applications
    ├── Case Studies
    ├── Services
    ├── Blog / Insights
    ├── Careers
    └── Regional Pages
```

---

## 5. Main Navigation Sitemap

The main navigation should provide direct access to the most important user and business paths.

| Main Navigation Item | Primary Destination | Child Pages / Menu Items |
|---|---|---|
| Home | `/` | None |
| About Us | `/about-us` | Company Profile, Capabilities, Industries Served |
| Products | `/products` | SMC Product Line, Other Product Line, Product Categories |
| Brands | `/brands` | All Brands, Featured Brands |
| Downloads | `/downloads` | Catalogs, Datasheets, Brochures, Manuals, Certificates |
| Gallery | `/gallery` | Product Gallery, Project Gallery, Facility Gallery, Event Gallery |
| Contact Us | `/contact-us` | Contact Details, Inquiry Form |
| Search | `/search` | Search Results |

### Main Navigation Tree

```text
Main Navigation
├── Home
├── About Us
├── Products
│   ├── SMC Product Line
│   ├── Other Product Line
│   └── Product Categories
├── Brands
├── Downloads
├── Gallery
├── Contact Us
└── Search
```

---

## 6. Footer Navigation Sitemap

The footer navigation should support secondary discovery, SEO access, trust-building, and quick contact.

| Footer Group | Footer Links |
|---|---|
| Company | Home, About Us, Contact Us |
| Products | Products, SMC Product Line, Other Product Line, Product Categories |
| Brands | All Brands, Featured Brands |
| Downloads | Product Catalogs, Datasheets, Brochures, Manuals, Certificates |
| Gallery | Product Gallery, Project Gallery, Facility Gallery, Event Gallery |
| Support | Inquiry Form, Phone, Email, Location |
| Legal | Privacy Policy, Terms & Conditions, Sitemap |
| SEO Links | Key Product Categories, Key Brand Pages, Location-Based Pages |

### Footer Navigation Tree

```text
Footer Navigation
├── Company
│   ├── Home
│   ├── About Us
│   └── Contact Us
│
├── Products
│   ├── Products
│   ├── SMC Product Line
│   ├── Other Product Line
│   └── Product Categories
│
├── Brands
│   ├── All Brands
│   └── Featured Brands
│
├── Downloads
│   ├── Product Catalogs
│   ├── Datasheets
│   ├── Brochures
│   ├── Manuals
│   └── Certificates
│
├── Gallery
│   ├── Product Gallery
│   ├── Project Gallery
│   ├── Facility Gallery
│   └── Event Gallery
│
├── Support
│   ├── Inquiry Form
│   ├── Phone
│   ├── Email
│   └── Location
│
└── Legal
    ├── Privacy Policy
    ├── Terms & Conditions
    └── Sitemap
```

---

## 7. Products Sitemap

The Products section should support browsing by product line, category, subcategory, and product detail.

```text
Products
├── SMC Product Line
│   ├── Category
│   │   ├── Subcategory
│   │   │   └── Product Detail
│   │   └── Product Detail
│   └── Product Detail
│
├── Other Product Line
│   ├── Category
│   │   ├── Subcategory
│   │   │   └── Product Detail
│   │   └── Product Detail
│   └── Product Detail
│
└── All Product Categories
```

### Products URL Map

| Page Type | Conceptual URL Pattern |
|---|---|
| Products Landing | `/products` |
| Product Line | `/products/{product-line}` |
| Product Category | `/products/{product-line}/{category}` |
| Product Subcategory | `/products/{product-line}/{category}/{subcategory}` |
| Product Detail | `/products/{product-line}/{category}/{product-slug}` |
| Product Detail with Subcategory | `/products/{product-line}/{category}/{subcategory}/{product-slug}` |

### Product Page Types

| Page Type | Purpose |
|---|---|
| Products Landing | Presents available product lines and category entry points. |
| Product Line Page | Groups products under SMC or other product lines. |
| Product Category Page | Lists related products within a category. |
| Product Subcategory Page | Organizes deeper product families where required. |
| Product Detail Page | Provides product-specific information and inquiry path. |

---

## 8. Brands Sitemap

The Brands section should support browsing by brand and reaching brand-related products and documents.

```text
Brands
├── All Brands
├── Featured Brands
└── Brand Detail
    ├── Brand Products
    └── Brand Downloads
```

### Brands URL Map

| Page Type | Conceptual URL Pattern |
|---|---|
| Brands Landing | `/brands` |
| Featured Brands | `/brands/featured` |
| Brand Detail | `/brands/{brand-slug}` |
| Brand Products | `/brands/{brand-slug}/products` |
| Brand Downloads | `/brands/{brand-slug}/downloads` |

### Brand Page Types

| Page Type | Purpose |
|---|---|
| Brands Landing | Lists all available brands. |
| Featured Brands | Highlights priority brands. |
| Brand Detail | Provides brand overview and related product categories. |
| Brand Products | Lists all products associated with a brand. |
| Brand Downloads | Lists documents associated with a brand. |

---

## 9. Downloads Sitemap

The Downloads section should organize technical and commercial documents by document type and related content.

```text
Downloads
├── Product Catalogs
│   └── Download Detail / File
├── Datasheets
│   └── Download Detail / File
├── Brochures
│   └── Download Detail / File
├── Manuals
│   └── Download Detail / File
├── Certificates
│   └── Download Detail / File
└── Brand Documents
    └── Download Detail / File
```

### Downloads URL Map

| Page Type | Conceptual URL Pattern |
|---|---|
| Downloads Landing | `/downloads` |
| Download Category | `/downloads/{document-type}` |
| Download Detail | `/downloads/{document-type}/{document-slug}` |
| Product-Related Downloads | `/products/{product-line}/{category}/{product-slug}/downloads` |
| Brand-Related Downloads | `/brands/{brand-slug}/downloads` |

### Download Page Types

| Page Type | Purpose |
|---|---|
| Downloads Landing | Provides entry point to all downloadable resources. |
| Download Category Page | Lists documents by type. |
| Download Detail / File Page | Provides document metadata and file access. |
| Product-Related Downloads | Shows documents associated with a product. |
| Brand-Related Downloads | Shows documents associated with a brand. |

---

## 10. Gallery Sitemap

The Gallery section should organize visual assets by content category.

```text
Gallery
├── Product Gallery
│   └── Gallery Detail
├── Project Gallery
│   └── Gallery Detail
├── Facility Gallery
│   └── Gallery Detail
├── Event Gallery
│   └── Gallery Detail
└── Brand Gallery
    └── Gallery Detail
```

### Gallery URL Map

| Page Type | Conceptual URL Pattern |
|---|---|
| Gallery Landing | `/gallery` |
| Gallery Category | `/gallery/{gallery-category}` |
| Gallery Detail | `/gallery/{gallery-category}/{gallery-item-slug}` |

### Gallery Page Types

| Page Type | Purpose |
|---|---|
| Gallery Landing | Provides entry point to visual content. |
| Gallery Category Page | Displays images within a selected category. |
| Gallery Detail Page | Provides image title, caption, and related product or brand context where applicable. |

---

## 11. Contact & Inquiry Sitemap

The Contact & Inquiry section should support direct communication and product-specific lead capture.

```text
Contact Us
├── Contact Details
├── Inquiry Form
│   ├── General Inquiry
│   ├── Product Inquiry
│   ├── Brand Inquiry
│   └── Document Inquiry
└── Inquiry Confirmation
```

### Contact & Inquiry URL Map

| Page Type | Conceptual URL Pattern |
|---|---|
| Contact Us | `/contact-us` |
| Inquiry Form | `/contact-us/inquiry` |
| Product Inquiry | `/contact-us/inquiry?product={product-slug}` |
| Brand Inquiry | `/contact-us/inquiry?brand={brand-slug}` |
| Document Inquiry | `/contact-us/inquiry?document={document-slug}` |
| Inquiry Confirmation | `/contact-us/thank-you` |

### Inquiry Entry Points

| Source | Destination |
|---|---|
| Header Contact Link | Contact Us |
| Footer Contact Link | Contact Us |
| Product Detail Page | Product Inquiry |
| Brand Detail Page | Brand Inquiry |
| Download Detail Page | Document Inquiry |
| Floating Inquiry Action | General Inquiry |
| Search Result Detail | Relevant detail page or inquiry page |

---

## 12. Search Sitemap

The Search section should support direct content discovery across products, brands, downloads, gallery, and pages.

```text
Search
└── Search Results
    ├── Product Results
    ├── Brand Results
    ├── Download Results
    ├── Gallery Results
    └── Page Results
```

### Search URL Map

| Page Type | Conceptual URL Pattern |
|---|---|
| Search Page | `/search` |
| Search Results | `/search?q={search-term}` |
| Filtered Product Results | `/search?q={search-term}&type=products` |
| Filtered Brand Results | `/search?q={search-term}&type=brands` |
| Filtered Download Results | `/search?q={search-term}&type=downloads` |
| Filtered Gallery Results | `/search?q={search-term}&type=gallery` |
| Filtered Page Results | `/search?q={search-term}&type=pages` |

### Search Result Destinations

| Result Type | Destination |
|---|---|
| Product Result | Product Detail Page |
| Brand Result | Brand Detail Page |
| Download Result | Download Detail / File Page |
| Gallery Result | Gallery Detail Page |
| Page Result | Relevant Static or Dynamic Page |

---

## 13. Utility Pages

Utility pages support legal, operational, SEO, and error-handling requirements.

```text
Utility Pages
├── Privacy Policy
├── Terms & Conditions
├── Sitemap
└── 404 Page
```

### Utility Page URL Map

| Page | Conceptual URL |
|---|---|
| Privacy Policy | `/privacy-policy` |
| Terms & Conditions | `/terms-and-conditions` |
| Sitemap | `/sitemap` |
| 404 Page | `/404` |

### Utility Page Purpose

| Page | Purpose |
|---|---|
| Privacy Policy | Explains collection and handling of user information. |
| Terms & Conditions | Defines website usage terms and limitations. |
| Sitemap | Provides human-readable website structure for users and search engines. |
| 404 Page | Helps users recover from broken, removed, or incorrect URLs. |

---

## 14. Admin Panel Sitemap

The admin panel sitemap is high-level only and defines management areas required to operate the dynamic website.

```text
Admin Panel
├── Login
├── Dashboard
│
├── Content Management
│   ├── Pages
│   ├── Home Page Content
│   ├── About Us Content
│   └── SEO Content
│
├── Product Management
│   ├── Product Lines
│   ├── Product Categories
│   ├── Product Subcategories
│   ├── Products
│   └── Product Display Order
│
├── Brand Management
│   ├── Brands
│   ├── Brand Products
│   └── Brand Documents
│
├── Download Management
│   ├── Download Categories
│   ├── Documents
│   └── File Management
│
├── Gallery Management
│   ├── Gallery Categories
│   ├── Gallery Items
│   └── Image Metadata
│
├── Inquiry Management
│   ├── General Inquiries
│   ├── Product Inquiries
│   ├── Brand Inquiries
│   └── Document Inquiries
│
├── Search & SEO Management
│   ├── Meta Titles
│   ├── Meta Descriptions
│   ├── URL Slugs
│   └── Redirect References
│
├── User Management
│   ├── Admin Users
│   └── Roles & Permissions
│
└── Settings
    ├── Company Information
    ├── Contact Details
    ├── Social Links
    └── Website Configuration
```

### Admin URL Map

| Admin Area | Conceptual URL Pattern |
|---|---|
| Admin Login | `/admin/login` |
| Dashboard | `/admin/dashboard` |
| Pages | `/admin/pages` |
| Products | `/admin/products` |
| Product Categories | `/admin/product-categories` |
| Brands | `/admin/brands` |
| Downloads | `/admin/downloads` |
| Gallery | `/admin/gallery` |
| Inquiries | `/admin/inquiries` |
| SEO Management | `/admin/seo` |
| Users | `/admin/users` |
| Settings | `/admin/settings` |

---

## 15. URL Structure Guidelines

URLs should be conceptual, SEO-friendly, readable, and consistent across the website.

### General URL Rules

| Rule | Guideline |
|---|---|
| Lowercase Only | Use lowercase characters in all public URLs. |
| Hyphen Separation | Use hyphens between words. |
| No Spaces | Spaces should not appear in URLs. |
| No Special Characters | Avoid symbols, punctuation, and unnecessary parameters in public URLs. |
| Descriptive Slugs | Use meaningful page, category, brand, and product slugs. |
| Stable URLs | Avoid changing live URLs once indexed or shared. |
| Logical Parent Paths | URLs should reflect the content hierarchy where useful. |
| Avoid Exposed IDs | Public URLs should avoid visible database IDs where possible. |

### Conceptual URL Examples

| Content | Example URL |
|---|---|
| Product Line | `/products/smc-product-line` |
| Product Category | `/products/smc-product-line/pneumatics` |
| Product Detail | `/products/smc-product-line/pneumatics/one-touch-fittings-kq2-series` |
| Brand Detail | `/brands/smc` |
| Brand Products | `/brands/smc/products` |
| Download Category | `/downloads/datasheets` |
| Download Detail | `/downloads/datasheets/kq2-series-datasheet` |
| Gallery Category | `/gallery/product-gallery` |
| Gallery Detail | `/gallery/product-gallery/pneumatic-fitting-display` |
| Contact Page | `/contact-us` |
| Inquiry Page | `/contact-us/inquiry` |

### Query Parameter Usage

| Use Case | Example |
|---|---|
| Search Term | `/search?q=pneumatic-cylinder` |
| Search Filter | `/search?q=fittings&type=products` |
| Product Inquiry Context | `/contact-us/inquiry?product=one-touch-fittings-kq2-series` |
| Brand Inquiry Context | `/contact-us/inquiry?brand=smc` |

---

## 16. Breadcrumb Structure

Breadcrumbs should follow the page hierarchy and help users move back to parent sections.

| Page Type | Breadcrumb Pattern |
|---|---|
| Home | Home |
| About Us | Home > About Us |
| Company Profile | Home > About Us > Company Profile |
| Products | Home > Products |
| Product Line | Home > Products > Product Line |
| Product Category | Home > Products > Product Line > Category |
| Product Subcategory | Home > Products > Product Line > Category > Subcategory |
| Product Detail | Home > Products > Product Line > Category > Product Name |
| Product Detail with Subcategory | Home > Products > Product Line > Category > Subcategory > Product Name |
| Brands | Home > Brands |
| Brand Detail | Home > Brands > Brand Name |
| Brand Products | Home > Brands > Brand Name > Products |
| Brand Downloads | Home > Brands > Brand Name > Downloads |
| Downloads | Home > Downloads |
| Download Category | Home > Downloads > Document Type |
| Download Detail | Home > Downloads > Document Type > Document Title |
| Gallery | Home > Gallery |
| Gallery Category | Home > Gallery > Gallery Category |
| Gallery Detail | Home > Gallery > Gallery Category > Gallery Item |
| Search Results | Home > Search |
| Contact Us | Home > Contact Us |
| Inquiry Form | Home > Contact Us > Inquiry |
| Privacy Policy | Home > Privacy Policy |
| Terms & Conditions | Home > Terms & Conditions |
| Sitemap | Home > Sitemap |
| 404 Page | Home > Page Not Found |

---

## 17. Internal Linking Strategy

Internal linking should guide users toward discovery, technical validation, and inquiry submission.

| Source Page | Recommended Links |
|---|---|
| Home | Products, featured product categories, featured brands, downloads, gallery, contact. |
| About Us | Products, brands, industries served, contact. |
| Products Landing | Product lines, product categories, featured products, inquiry. |
| Product Line | Product categories, featured products, related downloads. |
| Product Category | Product details, subcategories, related downloads, related brands. |
| Product Detail | Parent category, brand detail, downloads, related products, inquiry form. |
| Brands Landing | Brand detail pages, brand product listings. |
| Brand Detail | Brand products, brand downloads, related product categories, inquiry form. |
| Downloads Landing | Download categories, related products, related brands. |
| Download Detail | Related product, related brand, inquiry form. |
| Gallery Landing | Gallery categories, related products, related brands. |
| Gallery Detail | Related gallery category, related product, related brand. |
| Search Results | Relevant product, brand, download, gallery, and page destinations. |
| Contact Us | Products, downloads, brands, inquiry form. |
| Footer | High-priority public pages, legal pages, contact paths, key SEO pages. |

### Internal Linking Rules

| Rule | Description |
|---|---|
| Product pages should link to inquiry | Every product detail page should provide a clear path to inquiry. |
| Product pages should link to documents | Relevant catalogs, datasheets, and manuals should be accessible from product detail pages. |
| Brand pages should link to products | Brand pages should not be dead-end informational pages. |
| Download pages should link back to context | Downloads should link back to related product or brand pages. |
| Search should lead to detail pages | Search results should route users to the most specific useful page. |
| Footer should expose important sections | Product, brand, download, contact, and legal pages should be available in the footer. |
| Avoid orphan pages | Every public page should be reachable through navigation, search, sitemap, or contextual links. |

---

## 18. Future Expansion

The sitemap should support future additions without requiring major restructuring.

| Future Section | Recommended Sitemap Placement |
|---|---|
| Applications | Add under Products or as a new top-level section if content volume grows. |
| Industries Served | Expand under About Us or promote to top-level if strategically important. |
| Case Studies | Add as a new section linked to products, brands, gallery, and industries. |
| Services | Add as a top-level section if service offerings become a core business focus. |
| Blog / Insights | Add as a resource section for articles, product guides, and company updates. |
| Careers | Add under Company or as a standalone section when recruitment is active. |
| Customer Support | Add support pages for FAQs, warranty, service requests, and technical help. |
| Regional Pages | Add location-based pages for SEO and service-area discovery. |
| Application-Based Product Pages | Add paths such as `/applications/{application-slug}` linked to relevant products. |
| Comparison Pages | Add product comparison pages if product catalog depth requires it. |

### Future Expansion Tree

```text
Future Expansion
├── Applications
│   └── Application Detail
│
├── Industries
│   └── Industry Detail
│
├── Case Studies
│   └── Case Study Detail
│
├── Services
│   └── Service Detail
│
├── Blog / Insights
│   ├── Article Category
│   └── Article Detail
│
├── Careers
│   └── Job Detail
│
├── Customer Support
│   ├── FAQ
│   ├── Service Request
│   └── Warranty Information
│
└── Regional Pages
    └── Location Detail
```

---

## 19. Related Documents

| Document | Purpose |
|---|---|
| 01_Project_Scope.md | Defines project scope, objectives, assumptions, constraints, and deliverables. |
| 02_Software_Requirement_Specification.md | Defines functional and non-functional software requirements. |
| 03_Feature_Breakdown.md | Defines feature-level planning and implementation scope. |
| 01_Information_Architecture.md | Defines content hierarchy, navigation hierarchy, and content relationships. |

---

## Approval Checklist

- [ ] Document Reviewed
- [ ] Technical Review Completed
- [ ] Scope Verified
- [ ] No Open Issues
- [ ] Approved for Next Phase

---

**End of Document**
