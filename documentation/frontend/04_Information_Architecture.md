# Information Architecture

## Document Control

| Item | Details |
|---|---|
| Project Name | Nepack Website |
| Website Type | Dynamic Industrial Automation Company Website |
| Document Title | Information Architecture |
| Technology Context | HTML5, CSS3, Vanilla JavaScript, PHP 8.2, MySQL |
| Hosting Context | Hostinger Shared Hosting |
| Document Version | 1.0 |
| Document Status | Draft for Review |
| Prepared For | Nepack Website Project |
| Prepared By | Information Architecture Team |

## Revision History

| Version | Date | Description | Author | Status |
|---|---:|---|---|---|
| 1.0 | 2026-08-05 | Initial Information Architecture document created | Information Architecture Team | Draft |

---

## 1. Introduction

This document defines the Information Architecture for the Nepack Website, a dynamic industrial automation company website intended to organize company information, product information, brand information, downloads, gallery assets, search discovery, and contact pathways in a clear and scalable structure.

The Information Architecture establishes how website content should be grouped, labeled, related, navigated, and expanded before UI design, database design, and development begin.

This document does not define visual design, UI layouts, wireframes, database schema, or implementation code.

---

## 2. Purpose

The purpose of this document is to provide a structured content and navigation foundation for the Nepack Website.

The Information Architecture will support:

| Objective | Description |
|---|---|
| Content Organization | Define how pages, categories, products, brands, downloads, and support content are grouped. |
| Navigation Planning | Establish primary, secondary, footer, breadcrumb, and contextual navigation relationships. |
| User Discovery | Help users find products, brands, downloads, contact options, and company information efficiently. |
| Search Readiness | Define searchable content groups and result relationships. |
| Scalability | Support future addition of products, categories, brands, documents, industries, services, and resources. |
| Development Alignment | Provide a clear foundation for sitemap, UI architecture, search logic, and database planning. |

---

## 3. Information Architecture Principles

| Principle | Application |
|---|---|
| Clarity | Labels should be direct, industry-recognizable, and easy to understand. |
| Hierarchy | Content should move from broad company/product groups to specific detail pages. |
| Findability | Products, brands, downloads, and contact options should be reachable through multiple logical paths. |
| Consistency | Similar content types should follow consistent naming, grouping, and page structure. |
| Scalability | The architecture should support expansion without restructuring core navigation. |
| User Intent Alignment | Navigation should reflect common visitor goals such as finding products, downloading catalogs, locating brands, and submitting enquiries. |
| SEO Readiness | Content hierarchy should support crawlable category, brand, product, and informational pages. |
| Accessibility | Navigation and content groupings should be understandable for keyboard, screen reader, and assistive technology users. |
| Maintainability | Content should be structured so administrators can update products, brands, downloads, and gallery items efficiently. |

---

## 4. Website Hierarchy

The website hierarchy is organized around major user intents: understanding the company, browsing products, exploring brands, accessing downloads, viewing gallery content, searching, and contacting the company.

| Level 1 | Level 2 | Level 3 | Level 4 |
|---|---|---|---|
| Home | Featured Product Categories | Product Category | Product Detail |
| Home | Featured Brands | Brand Detail | Brand Products |
| Home | Enquiry Entry Points | Contact Form | Submission Confirmation |
| About Us | Company Overview | Capabilities | Industries Served |
| Products | Product Group | Product Category | Product Detail |
| Brands | Brand Listing | Brand Detail | Products by Brand |
| Downloads | Download Categories | Download Listing | Download Detail/File |
| Gallery | Gallery Categories | Gallery Listing | Gallery Detail |
| Search | Search Results | Filtered Results | Result Detail |
| Contact Us | Contact Information | Enquiry Form | Confirmation |

---

## 5. Navigation Hierarchy

Navigation should be structured into primary navigation, secondary contextual navigation, footer navigation, breadcrumb navigation, and search-driven navigation.

| Navigation Type | Purpose |
|---|---|
| Primary Navigation | Gives access to major website sections. |
| Dropdown Navigation | Gives access to high-priority product groups and major content categories. |
| Contextual Navigation | Links related products, brands, downloads, and enquiries. |
| Breadcrumb Navigation | Shows the user's current location in the hierarchy. |
| Footer Navigation | Provides persistent access to key pages, legal links, product groups, brands, downloads, and contact information. |
| Search Navigation | Allows users to bypass hierarchy and directly locate products, brands, downloads, or pages. |

---

## 6. Main Navigation Structure

The main navigation should prioritize product discovery and business enquiry.

| Navigation Item | Child Items | Purpose |
|---|---|---|
| Home | None | Entry point for company overview, product discovery, featured brands, and enquiry actions. |
| About Us | Company Profile, Capabilities, Industries Served | Helps users understand company credibility and operating focus. |
| Products | SMC Product Line, Other Product Line, Product Categories | Primary path for product browsing. |
| Brands | Brand Listing, Brand Detail Pages | Allows users to browse products by manufacturer or partner brand. |
| Downloads | Catalogs, Brochures, Datasheets, Certificates, Manuals | Provides access to technical and commercial documents. |
| Gallery | Product Gallery, Project Gallery, Facility Gallery, Event Gallery | Organizes image-based proof and visual references. |
| Contact Us | Contact Details, Enquiry Form, Location Information | Supports lead generation and customer communication. |
| Search | Search Input, Search Results | Enables direct discovery across website content. |

### Main Navigation Rules

| Rule | Description |
|---|---|
| Products must remain prominent | Industrial users commonly arrive with product-led intent. |
| Contact must be globally available | Enquiry conversion should be accessible from all major pages. |
| Search must be available globally | Product-heavy websites require quick direct lookup. |
| Dropdown depth should be controlled | Main navigation should avoid excessive nested menus. |
| Product groups should support expansion | Additional product lines should be addable without changing the main structure. |

---

## 7. Footer Navigation Structure

The footer should provide a structured secondary access layer for users who reach the bottom of pages or need quick reference links.

| Footer Group | Links |
|---|---|
| Company | Home, About Us, Contact Us |
| Products | SMC Product Line, Other Product Line, Product Categories |
| Brands | All Brands, Featured Brands |
| Resources | Downloads, Catalogs, Brochures, Manuals, Datasheets |
| Media | Gallery, Product Images, Project Images |
| Support | Enquiry Form, Phone, Email, Location |
| Legal | Privacy Policy, Terms of Use, Disclaimer |
| SEO Links | Key Product Categories, Key Brand Pages, Location-Based Pages |

### Footer Navigation Principles

| Principle | Description |
|---|---|
| Repeat critical paths | Products, downloads, and contact should be repeated in the footer. |
| Support SEO | Footer can expose important category and brand pages without cluttering the header. |
| Support trust | Contact details, location, and legal pages should be easy to locate. |
| Avoid overload | Footer links should be grouped logically and limited to useful destinations. |

---

## 8. Product Information Hierarchy

Product information should be organized from broad product grouping to specific product details.

| Level | Content Type | Example Purpose |
|---|---|---|
| Level 1 | Products Landing Page | Introduces all product lines and browsing options. |
| Level 2 | Product Line | Separates SMC product line from other product lines. |
| Level 3 | Product Category | Groups related industrial automation products. |
| Level 4 | Product Subcategory | Supports detailed classification where needed. |
| Level 5 | Product Detail Page | Provides product-specific information, features, part numbers, downloads, brand, and enquiry links. |

### Product Content Model

| Information Group | Description |
|---|---|
| Product Name | Official product or series name. |
| Product Category | Parent category for classification. |
| Product Line | SMC Product Line or Other Product Line. |
| Brand | Associated manufacturer or brand. |
| Product Image | Primary product image. |
| Short Description | Brief summary for listing and search results. |
| Detailed Description | Product overview and application context. |
| Key Features | Bullet-based technical or commercial features. |
| Specifications | Structured product attributes where available. |
| Part Numbers | Related part number list or table. |
| Downloads | Linked catalogs, datasheets, brochures, or manuals. |
| Related Products | Products in same category, brand, or application area. |
| Enquiry Action | Product-specific enquiry path. |
| SEO Metadata | Title, description, keywords, and structured content cues. |

### Product Page Relationships

| Relationship | Description |
|---|---|
| Product to Category | Each product belongs to at least one category. |
| Product to Brand | Each product may be associated with one brand. |
| Product to Downloads | Product pages may link to datasheets, catalogs, brochures, or manuals. |
| Product to Gallery | Product pages may link to relevant product images or application images. |
| Product to Enquiry | Product pages should support direct enquiry with product context. |
| Product to Related Products | Similar or complementary products should be cross-linked. |

---

## 9. Brand Information Hierarchy

Brand information should support users who browse by manufacturer, authorized association, or product origin.

| Level | Content Type | Description |
|---|---|---|
| Level 1 | Brands Landing Page | Lists all represented or associated brands. |
| Level 2 | Brand Detail Page | Describes brand relationship, product scope, and available categories. |
| Level 3 | Brand Product Listing | Shows products associated with the selected brand. |
| Level 4 | Product Detail Page | Provides full product-level details. |

### Brand Content Model

| Information Group | Description |
|---|---|
| Brand Name | Official brand name. |
| Brand Logo | Brand identity asset. |
| Brand Overview | Short description of the brand or association. |
| Product Categories | Categories available under the brand. |
| Product Listing | Products linked to the brand. |
| Downloads | Brand catalogs, brochures, datasheets, or certificates. |
| Enquiry Action | Brand-specific enquiry path. |
| SEO Metadata | Brand-focused SEO content. |

### Brand Relationships

| Relationship | Description |
|---|---|
| Brand to Products | A brand can have multiple products. |
| Brand to Categories | A brand can be linked to multiple product categories. |
| Brand to Downloads | A brand can have catalogs, brochures, and certificates. |
| Brand to Gallery | Brand assets or product images may appear in gallery sections. |
| Brand to Enquiry | Users can enquire about a brand or brand product range. |

---

## 10. Download Information Hierarchy

Downloads should be organized to help technical buyers, engineers, and procurement users quickly access documentation.

| Level | Content Type | Description |
|---|---|---|
| Level 1 | Downloads Landing Page | Main document library entry point. |
| Level 2 | Download Category | Groups documents by type. |
| Level 3 | Download Listing | Lists documents within a category. |
| Level 4 | Download Detail or File | Provides direct file access or file metadata. |

### Download Categories

| Category | Purpose |
|---|---|
| Product Catalogs | Full product range or category catalogs. |
| Datasheets | Technical product specifications. |
| Brochures | Marketing or overview documents. |
| Manuals | Installation, operation, or usage documents. |
| Certificates | Authorization, compliance, or quality documents. |
| Brand Documents | Documents grouped by brand. |

### Download Content Model

| Information Group | Description |
|---|---|
| Document Title | Clear title of the downloadable file. |
| Document Type | Catalog, datasheet, brochure, manual, certificate, or other. |
| Related Product | Product linked to the document. |
| Related Category | Category linked to the document. |
| Related Brand | Brand linked to the document. |
| File Format | PDF or supported document format. |
| File Size | Optional metadata for user awareness. |
| Version or Date | Document currency information where available. |
| Download Action | Direct file access. |
| SEO Metadata | Search-friendly document description. |

---

## 11. Gallery Information Hierarchy

Gallery content should provide visual evidence of products, installations, facilities, participation, and business credibility.

| Level | Content Type | Description |
|---|---|---|
| Level 1 | Gallery Landing Page | Entry point for visual content. |
| Level 2 | Gallery Category | Groups images by subject. |
| Level 3 | Gallery Listing | Displays images within a selected category. |
| Level 4 | Gallery Detail | Optional detailed image page with caption and relationships. |

### Gallery Categories

| Category | Description |
|---|---|
| Product Gallery | Product images and product range visuals. |
| Project Gallery | Installed systems, applications, or project references. |
| Facility Gallery | Office, warehouse, or operational environment images. |
| Event Gallery | Exhibitions, seminars, training, or business events. |
| Brand Gallery | Brand-related visual assets where applicable. |

### Gallery Content Model

| Information Group | Description |
|---|---|
| Image Title | Descriptive image name. |
| Image Category | Gallery grouping. |
| Image Caption | Short contextual description. |
| Related Product | Optional product association. |
| Related Brand | Optional brand association. |
| Related Project or Event | Optional contextual relationship. |
| Alt Text | Accessibility and SEO description. |
| Display Status | Controls whether image appears publicly. |

---

## 12. Search Information Hierarchy

Search should support direct discovery across product-heavy and document-heavy content.

| Search Scope | Searchable Content |
|---|---|
| Products | Product names, categories, part numbers, descriptions, features, specifications. |
| Brands | Brand names, brand descriptions, associated product categories. |
| Downloads | Document titles, document types, related products, related brands. |
| Gallery | Image titles, captions, categories, alt text. |
| Pages | Home, About Us, Contact Us, policy pages, resource pages. |

### Search Result Grouping

| Result Group | Result Information |
|---|---|
| Product Result | Product name, image, category, brand, short description. |
| Brand Result | Brand name, logo, overview, product count where applicable. |
| Download Result | Document title, type, related product or brand, download action. |
| Gallery Result | Image title, category, thumbnail. |
| Page Result | Page title and short description. |

### Search Filters

| Filter | Purpose |
|---|---|
| Content Type | Products, Brands, Downloads, Gallery, Pages. |
| Product Line | SMC Product Line or Other Product Line. |
| Category | Product or gallery category. |
| Brand | Filter content by brand. |
| Document Type | Catalog, datasheet, brochure, manual, certificate. |

---

## 13. Contact Information Structure

Contact information should support quick communication, enquiry submission, and product-specific lead capture.

| Information Group | Description |
|---|---|
| Company Name | Nepack Associates or official business name. |
| Address | Physical business address. |
| Phone Number | Primary contact number. |
| Email Address | Primary business email. |
| Location Map | Optional map reference. |
| Business Hours | Optional operating hours. |
| Enquiry Form | Structured form for user requests. |
| Product Context | Product or service selected before form submission. |
| Confirmation Message | Post-submission acknowledgement. |

### Enquiry Form Information Hierarchy

| Field Group | Fields |
|---|---|
| Enquiry Context | Product or service looking for. |
| Personal Information | Name, email, phone number. |
| Location Information | City, pincode, state where applicable. |
| Message Information | Enquiry message or requirement details. |
| Submission State | Success message, validation errors, failure message. |

### Contact Entry Points

| Source Page | Contact Path |
|---|---|
| Header | Contact Us page or enquiry form. |
| Product Detail | Product-specific enquiry. |
| Brand Detail | Brand-specific enquiry. |
| Downloads | Document-related enquiry. |
| Footer | Phone, email, contact page, location. |
| Floating Contact Action | Quick enquiry or messaging option where supported. |

---

## 14. SEO Content Hierarchy

SEO content should follow the website's real information hierarchy and avoid creating disconnected or duplicate pages.

| SEO Level | Content Type | Purpose |
|---|---|---|
| Level 1 | Home Page | Company identity, location, industrial automation relevance. |
| Level 2 | Product Line Pages | Broad product discovery and keyword targeting. |
| Level 3 | Product Category Pages | Category-level search visibility. |
| Level 4 | Product Detail Pages | Product, series, part number, and brand-specific visibility. |
| Level 5 | Brand Pages | Brand-related search visibility. |
| Level 6 | Download Pages | Catalog, datasheet, brochure, and manual discovery. |
| Level 7 | Location Content | Local relevance for service area and business enquiries. |

### SEO Content Grouping

| Content Group | SEO Focus |
|---|---|
| Company | Industrial automation company, dealer, supplier, distributor relevance. |
| Products | Product names, product categories, part numbers, technical terms. |
| Brands | Brand names and authorized/associated product references. |
| Location | Guwahati, Assam, Northeast India or approved service regions. |
| Downloads | Catalogs, datasheets, brochures, manuals. |
| Contact | Enquiry, support, product assistance, dealer contact. |

---

## 15. Breadcrumb Hierarchy

Breadcrumbs should reflect the user's location within the content hierarchy and support reverse navigation.

| Page Type | Breadcrumb Pattern |
|---|---|
| Home | Home |
| About Us | Home > About Us |
| Products Landing | Home > Products |
| Product Line | Home > Products > Product Line |
| Product Category | Home > Products > Product Line > Category |
| Product Detail | Home > Products > Product Line > Category > Product Name |
| Brands Landing | Home > Brands |
| Brand Detail | Home > Brands > Brand Name |
| Brand Product Listing | Home > Brands > Brand Name > Products |
| Downloads Landing | Home > Downloads |
| Download Category | Home > Downloads > Document Type |
| Gallery Landing | Home > Gallery |
| Gallery Category | Home > Gallery > Category |
| Search Results | Home > Search |
| Contact Us | Home > Contact Us |

---

## 16. URL Hierarchy Conceptual Only

The URL structure should be readable, hierarchical, SEO-friendly, and stable. The following is conceptual only and does not define implementation routes.

| Content Type | Conceptual URL Pattern |
|---|---|
| Home | `/` |
| About Us | `/about-us` |
| Contact Us | `/contact-us` |
| Products Landing | `/products` |
| Product Line | `/products/{product-line}` |
| Product Category | `/products/{product-line}/{category}` |
| Product Detail | `/products/{product-line}/{category}/{product-slug}` |
| Brands Landing | `/brands` |
| Brand Detail | `/brands/{brand-slug}` |
| Brand Products | `/brands/{brand-slug}/products` |
| Downloads Landing | `/downloads` |
| Download Category | `/downloads/{document-type}` |
| Gallery Landing | `/gallery` |
| Gallery Category | `/gallery/{category}` |
| Search Results | `/search` |
| Privacy Policy | `/privacy-policy` |
| Terms of Use | `/terms-of-use` |

### URL Naming Principles

| Principle | Description |
|---|---|
| Use lowercase words | URLs should use lowercase text. |
| Use hyphens | Multi-word URL segments should use hyphens. |
| Avoid unnecessary depth | Deep paths should exist only when hierarchy improves clarity. |
| Keep URLs stable | Product and category URLs should not change frequently. |
| Avoid technical identifiers in public URLs | Public URLs should prefer readable slugs over database IDs where possible. |

---

## 17. Content Relationships

The website should be designed around reusable relationships between content types.

| Source Content | Related Content | Relationship Purpose |
|---|---|---|
| Product | Category | Defines classification and browse path. |
| Product | Product Line | Separates SMC and other products. |
| Product | Brand | Supports brand-based browsing. |
| Product | Downloads | Connects users to technical documents. |
| Product | Gallery | Provides supporting visual assets. |
| Product | Contact Form | Enables product-specific enquiry. |
| Brand | Products | Shows available product range by brand. |
| Brand | Downloads | Provides brand catalogs and certificates. |
| Category | Products | Lists relevant products. |
| Category | Downloads | Provides category-level documents. |
| Gallery Item | Product | Adds visual context to product pages. |
| Gallery Item | Brand | Connects brand visuals where relevant. |
| Download | Product | Supports technical decision-making. |
| Download | Brand | Supports brand documentation access. |
| Search Result | Detail Page | Sends users to the most specific useful destination. |

---

## 18. Internal Linking Strategy

Internal linking should support discovery, SEO, and enquiry conversion without overwhelming users.

| Link Source | Recommended Internal Links |
|---|---|
| Home | Product lines, featured categories, featured brands, downloads, contact. |
| Product Line Page | Categories, featured products, related downloads, enquiry. |
| Product Category Page | Product detail pages, related categories, downloads, brands. |
| Product Detail Page | Parent category, brand page, downloads, related products, enquiry form. |
| Brand Detail Page | Brand products, brand downloads, related product categories, enquiry. |
| Downloads Page | Related product pages, brand pages, product categories. |
| Gallery Page | Related products, brands, project references where applicable. |
| About Us Page | Products, brands, contact, downloads. |
| Contact Page | Products, downloads, brand pages, enquiry form. |
| Footer | High-priority product categories, brands, downloads, contact, legal pages. |

### Internal Linking Rules

| Rule | Description |
|---|---|
| Link from general to specific | Broad pages should guide users to more detailed content. |
| Link from specific to related | Detail pages should expose related products, brands, and documents. |
| Preserve user context | Enquiry links from product pages should carry product context conceptually. |
| Avoid orphan pages | Every public page should be reachable through navigation, search, or internal links. |
| Use descriptive labels | Link text should describe the destination clearly. |

---

## 19. User Navigation Considerations

The architecture should support multiple user journeys based on visitor intent.

| User Type | Primary Goal | Recommended Path |
|---|---|---|
| Procurement User | Find product and submit enquiry | Home > Products > Category > Product Detail > Enquiry |
| Engineer or Technical User | Find specifications or datasheets | Products/Search > Product Detail > Downloads |
| Brand-Oriented User | Browse products by manufacturer | Home > Brands > Brand Detail > Brand Products |
| Returning User | Quickly find a product or document | Search > Result Detail |
| New Visitor | Understand company credibility | Home > About Us > Products/Brands > Contact |
| Local Business Lead | Contact the company | Home/Header/Footer > Contact Us |
| Document-Seeking User | Download catalog or datasheet | Downloads > Document Type > File |

### Navigation Behavior Considerations

| Consideration | Requirement |
|---|---|
| Product discovery should be fast | Product paths should be available from header, home, search, and footer. |
| Search should support technical terms | Search should recognize product names, categories, part numbers, and brands. |
| Contact should be persistent | Contact options should remain easy to access across the site. |
| Navigation labels should be familiar | Use industry-standard labels such as Products, Brands, Downloads, Gallery, Contact Us. |
| Deep product structures should remain understandable | Breadcrumbs and category labels should help users maintain orientation. |

---

## 20. Accessibility Considerations

Information architecture should support accessible navigation and content comprehension.

| Area | Consideration |
|---|---|
| Navigation Labels | Labels should be clear and descriptive. |
| Heading Structure | Content should follow logical heading order. |
| Breadcrumbs | Breadcrumbs should be available on inner pages. |
| Search | Search input and results should have understandable labels and result groupings. |
| Link Text | Links should describe their destination. |
| Forms | Form fields should have clear labels, validation states, and error messages. |
| Images | Gallery, product, and brand images should include meaningful alt text. |
| Documents | Download titles should clearly describe file purpose and related product or brand. |
| Keyboard Navigation | Menus, dropdowns, filters, forms, and search should be reachable by keyboard. |
| Screen Reader Support | Page hierarchy and navigation landmarks should be structurally meaningful. |

---

## 21. Scalability Considerations

The architecture should allow the website to grow without disrupting existing navigation.

| Growth Area | Scalability Requirement |
|---|---|
| Product Lines | Additional product lines should be addable under Products. |
| Product Categories | Categories and subcategories should support multiple levels where needed. |
| Brands | New brands should be addable without changing the main navigation. |
| Downloads | New document types should be supported through categorized downloads. |
| Gallery | New gallery categories should be supported. |
| Search | Search indexing should expand with products, downloads, brands, gallery, and pages. |
| SEO Pages | Location, industry, and application pages may be added in future phases. |
| Admin Management | Content types should be organized for efficient future administration. |

---

## 22. Future Expansion Strategy

The website architecture should support future business and content growth.

| Future Area | Recommended IA Extension |
|---|---|
| Industries Served | Add industry pages under About Us or as a dedicated main section if content grows. |
| Applications | Add application-based product browsing for users searching by use case. |
| Case Studies | Add project or solution stories linked to products, brands, and gallery. |
| Services | Add service pages for installation, consultation, maintenance, or support if applicable. |
| Blog or Insights | Add technical articles, updates, product guides, or industry news. |
| Dealer or Authorization Pages | Add certification and authorization content under Brands or About Us. |
| Careers | Add a Careers section if recruitment becomes a website objective. |
| Customer Support | Add FAQ, service request, warranty, or ticketing information. |
| Regional Pages | Add location-based pages for important service areas. |
| Advanced Filters | Add product filtering by technical attributes when product data maturity supports it. |

---

## 23. Related Documents

| Document | Purpose |
|---|---|
| 01_Project_Scope.md | Defines project scope, boundaries, assumptions, and deliverables. |
| 02_Software_Requirement_Specification.md | Defines functional and non-functional software requirements. |
| 03_Feature_Breakdown.md | Defines feature-level planning and implementation breakdown. |

---

## Approval Checklist

- [ ] Document Reviewed
- [ ] Technical Review Completed
- [ ] Scope Verified
- [ ] No Open Issues
- [ ] Approved for Next Phase

---

End of Document
