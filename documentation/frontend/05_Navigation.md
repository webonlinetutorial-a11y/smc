# Navigation Architecture

## Document Control

| Item | Details |
|---|---|
| Project Name | Nepack Website |
| Project Type | Dynamic Industrial Automation Company Website with CMS |
| Document Title | Navigation Architecture |
| Document Version | 1.0 |
| Document Status | Draft for Review |
| Technology Stack | HTML5, CSS3, Vanilla JavaScript, PHP 8.2, MySQL |
| Hosting Environment | Hostinger Shared Hosting |
| Prepared For | Nepack Website Project |
| Prepared By | UX / Information Architecture Team |

## Revision History

| Version | Date | Description | Author | Status |
|---|---:|---|---|---|
| 1.0 | 2026-08-05 | Initial Navigation Architecture document created | UX / Information Architecture Team | Draft |

---

## 1. Introduction

This document defines the complete navigation architecture for the Nepack Website. It describes how users move through the public website, discover products and brands, access downloads, submit inquiries, use search, and recover from errors.

The navigation architecture is intended to guide frontend development, content planning, SEO structure, accessibility planning, and CMS-managed navigation behavior.

This document does not include UI mockups, wireframes, source code, database schema, or implementation logic.

---

## 2. Navigation Principles

| Principle | Description |
|---|---|
| Product-First Navigation | Product discovery must remain the strongest navigation path because industrial users often browse by product need. |
| Clear Section Ownership | Every public page should have a clear parent section such as Products, Brands, Downloads, Gallery, or Contact. |
| Multiple Discovery Paths | Users should be able to find products through navigation, search, brands, downloads, gallery, and internal links. |
| Persistent Contact Access | Contact and inquiry paths should be available from all major public sections. |
| Consistent Labels | Navigation labels must match page titles, sitemap labels, and breadcrumb labels where possible. |
| Scalable Structure | Navigation must support future products, categories, brands, documents, and content sections. |
| SEO Alignment | Navigation should expose important crawlable pages without creating clutter. |
| Accessibility | Navigation must be understandable and operable for keyboard and assistive technology users. |
| Mobile Usability | Navigation should remain clear and task-oriented on smaller screens. |

---

## 3. Primary Navigation

Primary navigation represents the main public website sections.

| Primary Item | Destination | Purpose | Priority |
|---|---|---|---|
| Home | `/` | Entry point and summary of key website sections. | High |
| About Us | `/about-us` | Company profile, credibility, capabilities, and service context. | Medium |
| Products | `/products` | Main product discovery path. | Highest |
| Brands | `/brands` | Brand-based product and document discovery. | High |
| Downloads | `/downloads` | Access to catalogs, datasheets, brochures, manuals, and certificates. | High |
| Gallery | `/gallery` | Visual reference for products, projects, facilities, and events. | Medium |
| Contact Us | `/contact-us` | Direct contact and inquiry submission. | Highest |
| Search | `/search` | Direct content lookup across the website. | High |

### Primary Navigation Tree

```text
Primary Navigation
├── Home
├── About Us
├── Products
├── Brands
├── Downloads
├── Gallery
├── Contact Us
└── Search
```

### Primary Navigation Rules

| Rule | Requirement |
|---|---|
| Products must be prominent | Products should be easy to access from every public page. |
| Contact must be persistent | Contact Us or inquiry access must be globally available. |
| Search should be accessible | Search should be available from the header or utility area. |
| Navigation labels should remain stable | Avoid frequent renaming of primary labels. |
| Main navigation should avoid excessive depth | Deeper product hierarchy should be handled by dropdowns, mega menus, filters, breadcrumbs, and listing pages. |

---

## 4. Secondary Navigation

Secondary navigation supports movement within major sections and helps users refine their path.

| Section | Secondary Navigation Items |
|---|---|
| About Us | Company Profile, Capabilities, Industries Served |
| Products | Product Lines, Categories, Subcategories, Related Products |
| Brands | All Brands, Featured Brands, Brand Products, Brand Downloads |
| Downloads | Catalogs, Datasheets, Brochures, Manuals, Certificates, Brand Documents |
| Gallery | Product Gallery, Project Gallery, Facility Gallery, Event Gallery, Brand Gallery |
| Contact Us | Contact Details, Inquiry Form, Location Information |
| Search | Product Results, Brand Results, Download Results, Gallery Results, Page Results |

### Secondary Navigation Behavior

| Behavior | Description |
|---|---|
| Contextual Display | Secondary navigation should appear only where it supports the current section. |
| Parent Awareness | Secondary navigation should show the current parent section when users are deep inside a hierarchy. |
| Related Discovery | Product, brand, and download pages should expose related links relevant to the current page. |
| Controlled Depth | Secondary navigation should not overwhelm users with every available item at once. |
| CMS Awareness | Secondary navigation should include only active and published content. |

---

## 5. Mobile Navigation

Mobile navigation should preserve the same content hierarchy while prioritizing simple access and short decision paths.

| Mobile Navigation Area | Requirement |
|---|---|
| Main Menu | Include all primary navigation items. |
| Product Access | Provide clear path to product lines and categories. |
| Contact Access | Keep contact or inquiry action easy to reach. |
| Search Access | Make search accessible without requiring deep navigation. |
| Expandable Groups | Product, Download, Gallery, and About sections may expand into child items. |
| Active State | Current section should remain identifiable. |
| Footer Access | Footer navigation should remain structured and readable on mobile. |

### Mobile Navigation Tree

```text
Mobile Navigation
├── Home
├── About Us
│   ├── Company Profile
│   ├── Capabilities
│   └── Industries Served
├── Products
│   ├── SMC Product Line
│   ├── Other Product Line
│   └── Product Categories
├── Brands
├── Downloads
│   ├── Catalogs
│   ├── Datasheets
│   ├── Brochures
│   ├── Manuals
│   └── Certificates
├── Gallery
│   ├── Product Gallery
│   ├── Project Gallery
│   ├── Facility Gallery
│   └── Event Gallery
├── Search
└── Contact Us
```

---

## 6. Mega Menu Strategy

A mega menu may be used for complex product navigation if the product catalog becomes too large for a simple dropdown.

| Mega Menu Area | Recommended Content |
|---|---|
| Products | Product lines, top product categories, featured categories, quick inquiry link. |
| Brands | Featured brands, all brands link, brand product path. |
| Downloads | Document categories, featured catalogs, brand documents link. |

### Product Mega Menu Structure

```text
Products Mega Menu
├── SMC Product Line
│   ├── Featured Categories
│   └── View All SMC Products
├── Other Product Line
│   ├── Featured Categories
│   └── View All Other Products
└── Quick Links
    ├── All Product Categories
    ├── Downloads
    └── Product Inquiry
```

### Mega Menu Rules

| Rule | Description |
|---|---|
| Use only for dense sections | Mega menus should be used where they reduce navigation effort. |
| Limit visible items | Display high-priority categories and provide view-all links for deeper content. |
| Preserve hierarchy | Group menu items by product line, brand, or document type. |
| Avoid hidden critical actions | Contact and search should remain accessible outside the mega menu. |
| CMS-driven but curated | Featured menu items may be CMS-managed but should follow editorial priority. |

---

## 7. Product Navigation

Product navigation is the most important discovery path for the website.

```text
Products
├── Product Lines
│   ├── SMC Product Line
│   └── Other Product Line
├── Product Categories
│   ├── Category
│   │   ├── Subcategory
│   │   └── Product Detail
│   └── Product Detail
└── Product Inquiry
```

### Product Navigation Paths

| User Goal | Recommended Path |
|---|---|
| Browse all products | Home > Products |
| Browse SMC products | Home > Products > SMC Product Line |
| Browse non-SMC products | Home > Products > Other Product Line |
| Browse by category | Products > Product Line > Category |
| View product details | Products > Product Line > Category > Product Detail |
| Download product document | Product Detail > Related Downloads |
| Submit product inquiry | Product Detail > Product Inquiry |

### Product Navigation Rules

| Rule | Requirement |
|---|---|
| Product detail pages must show parent context | Product line and category should be visible through breadcrumb and contextual links. |
| Related products should be available | Detail pages should help users continue discovery. |
| Product inquiry should carry product context | Inquiry path should conceptually retain selected product reference. |
| Categories should be browsable | Product categories should be available from Products landing and relevant menus. |
| Archived products should not appear publicly | Archived or inactive products must be removed from public navigation. |

---

## 8. Brand Navigation

Brand navigation supports users who browse by manufacturer or official product association.

```text
Brands
├── All Brands
├── Featured Brands
└── Brand Detail
    ├── Brand Products
    ├── Brand Downloads
    └── Brand Inquiry
```

| User Goal | Recommended Path |
|---|---|
| View all brands | Home > Brands |
| View featured brands | Home > Brands > Featured Brands |
| View a brand profile | Brands > Brand Detail |
| Browse brand products | Brand Detail > Brand Products |
| Access brand documents | Brand Detail > Brand Downloads |
| Submit brand inquiry | Brand Detail > Brand Inquiry |

### Brand Navigation Rules

| Rule | Requirement |
|---|---|
| Brand pages should not be dead ends | Brand detail must link to products, downloads, and inquiry. |
| Brand logos must link consistently | Brand logo links should lead to brand detail pages where available. |
| Featured brands should support priority promotion | Featured brands may appear on Home, Brands, and footer navigation. |
| Inactive brands should not appear publicly | Only active brands should appear in public navigation and listings. |

---

## 9. Download Navigation

Download navigation supports technical evaluation and procurement workflows.

```text
Downloads
├── Product Catalogs
├── Datasheets
├── Brochures
├── Manuals
├── Certificates
└── Brand Documents
```

| User Goal | Recommended Path |
|---|---|
| Browse all downloads | Home > Downloads |
| Browse by document type | Downloads > Document Category |
| Access product document | Product Detail > Related Downloads |
| Access brand document | Brand Detail > Brand Downloads |
| Download PDF | Download Detail > Download PDF |
| Ask about a document | Download Detail > Document Inquiry |

### Download Navigation Rules

| Rule | Requirement |
|---|---|
| Downloads should be reachable from product pages | Product users should not need to return to the Downloads landing page. |
| Downloads should link back to context | Documents should link to related products or brands. |
| Document categories should remain consistent | Use stable labels such as Catalogs, Datasheets, Brochures, Manuals, and Certificates. |
| Missing files should not create broken links | Unavailable documents should be hidden or handled through a controlled state. |

---

## 10. Gallery Navigation

Gallery navigation supports visual credibility and discovery through product, project, and business imagery.

```text
Gallery
├── Product Gallery
├── Project Gallery
├── Facility Gallery
├── Event Gallery
└── Brand Gallery
```

| User Goal | Recommended Path |
|---|---|
| Browse all gallery items | Home > Gallery |
| View product images | Gallery > Product Gallery |
| View project images | Gallery > Project Gallery |
| View facility images | Gallery > Facility Gallery |
| View event images | Gallery > Event Gallery |
| View related product or brand | Gallery Detail > Related Product / Brand |

### Gallery Navigation Rules

| Rule | Requirement |
|---|---|
| Gallery categories should be clearly labeled | Users should understand the subject of each gallery group. |
| Gallery details may link to products or brands | Related navigation should be used only when the relationship is meaningful. |
| Images should not replace product pages | Gallery should support discovery, not serve as the primary product catalog. |
| Inactive gallery items should not appear publicly | Only published gallery items should be visible. |

---

## 11. Search Navigation

Search navigation allows users to bypass hierarchy and directly locate specific content.

```text
Search
├── Search Input
├── Search Results
│   ├── Product Results
│   ├── Brand Results
│   ├── Download Results
│   ├── Gallery Results
│   └── Page Results
└── No Results Found
```

| Search Element | Navigation Role |
|---|---|
| Search Input | Entry point for keyword-based discovery. |
| Search Results | Routes users to relevant detail or listing pages. |
| Filters | Help users narrow results by content type or category. |
| No Results Found | Provides recovery through refined search, products, downloads, or contact. |

### Search Navigation Rules

| Rule | Requirement |
|---|---|
| Search should be globally accessible | Users should not need to locate a specific section before searching. |
| Result links should be specific | Search results should open the most relevant detail page. |
| No-results state should offer recovery | Provide links to Products, Downloads, and Contact. |
| Search terms should be safely handled | User-entered terms must not create unsafe output. |

---

## 12. Contact Navigation

Contact navigation supports inquiry conversion and company communication.

```text
Contact Navigation
├── Contact Us
├── Inquiry Form
│   ├── General Inquiry
│   ├── Product Inquiry
│   ├── Brand Inquiry
│   └── Document Inquiry
└── Confirmation
```

| Contact Entry Point | Destination |
|---|---|
| Header Contact Link | Contact Us page |
| Footer Contact Link | Contact Us page |
| Product Detail CTA | Product inquiry path |
| Brand Detail CTA | Brand inquiry path |
| Download Detail CTA | Document inquiry path |
| 404 Page Recovery | Contact Us or Search |
| No Results Found Recovery | Contact Us or Products |

### Contact Navigation Rules

| Rule | Requirement |
|---|---|
| Contact should be available globally | Users should always have a clear route to communication. |
| Inquiry context should be preserved | Product, brand, or document context should conceptually carry into inquiry. |
| Confirmation should provide next steps | After submission, users should receive acknowledgement and navigation options. |
| Contact information should match settings | Header, footer, and contact page details should remain consistent. |

---

## 13. Footer Navigation

Footer navigation provides secondary access to important pages, legal links, product paths, resources, and contact information.

```text
Footer Navigation
├── Company
│   ├── Home
│   ├── About Us
│   └── Contact Us
├── Products
│   ├── Products
│   ├── SMC Product Line
│   ├── Other Product Line
│   └── Product Categories
├── Brands
│   ├── All Brands
│   └── Featured Brands
├── Downloads
│   ├── Product Catalogs
│   ├── Datasheets
│   ├── Brochures
│   ├── Manuals
│   └── Certificates
├── Gallery
│   ├── Product Gallery
│   ├── Project Gallery
│   ├── Facility Gallery
│   └── Event Gallery
├── Support
│   ├── Inquiry Form
│   ├── Phone
│   ├── Email
│   └── Location
└── Legal
    ├── Privacy Policy
    ├── Terms & Conditions
    └── Sitemap
```

| Footer Group | Purpose |
|---|---|
| Company | Gives quick access to company and contact pages. |
| Products | Supports product discovery and SEO crawl paths. |
| Brands | Supports manufacturer-based browsing. |
| Downloads | Supports technical document discovery. |
| Gallery | Supports visual browsing and credibility. |
| Support | Provides inquiry and contact access. |
| Legal | Provides required utility/legal pages. |

---

## 14. Utility Navigation

Utility navigation includes supporting pages that should remain accessible but do not need to dominate the main navigation.

| Utility Page | Recommended Location | Purpose |
|---|---|---|
| Privacy Policy | Footer Legal group | Communicates data and privacy practices. |
| Terms & Conditions | Footer Legal group | Defines website usage terms. |
| Sitemap | Footer Legal or Utility group | Provides human-readable page structure. |
| 404 Page | System-driven recovery page | Handles invalid or missing URLs. |

### Utility Navigation Rules

| Rule | Requirement |
|---|---|
| Legal links should be globally reachable | Privacy Policy and Terms & Conditions should appear in the footer. |
| Sitemap should expose important public pages | Sitemap should include active public sections and key dynamic pages. |
| Utility pages should not clutter primary navigation | Keep them in footer or contextual recovery areas. |
| Admin pages must not appear in public utility navigation | Public users should not see administrative navigation paths. |

---

## 15. Breadcrumb Strategy

Breadcrumbs should reinforce hierarchy and improve user orientation on inner pages.

| Page Type | Breadcrumb Pattern |
|---|---|
| Home | Home |
| About Us | Home > About Us |
| Products | Home > Products |
| Product Line | Home > Products > Product Line |
| Product Category | Home > Products > Product Line > Category |
| Product Subcategory | Home > Products > Product Line > Category > Subcategory |
| Product Detail | Home > Products > Product Line > Category > Product Name |
| Brand Detail | Home > Brands > Brand Name |
| Brand Products | Home > Brands > Brand Name > Products |
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

### Breadcrumb Rules

| Rule | Description |
|---|---|
| Breadcrumbs should appear on inner pages | Homepage does not require a breadcrumb. |
| Breadcrumbs should reflect content hierarchy | Breadcrumbs should not be based only on browser history. |
| Current page should be last item | The active page appears at the end of the breadcrumb trail. |
| Breadcrumb labels should match page labels | Avoid mismatched naming between navigation and breadcrumbs. |
| Product hierarchy should be preserved | Product pages should show product line and category context. |

---

## 16. CTA Placement Strategy

Calls to action should guide users toward inquiry and contact without interrupting browsing.

| Page / Section | Recommended CTA |
|---|---|
| Header | Contact Us or Enquiry action. |
| Home | Browse Products, View Brands, Enquire Now. |
| Product Listing | View Details, Enquire About Product. |
| Product Detail | Product Inquiry, Download Catalog/Datasheet. |
| Brand Detail | View Brand Products, Brand Inquiry. |
| Downloads | Download PDF, Ask About Document. |
| Gallery Detail | View Related Product/Brand where applicable. |
| Search Results | Open Result, Contact if no suitable result is found. |
| 404 Page | Go Home, Search, Browse Products, Contact Us. |
| Footer | Contact Us, Products, Downloads. |

### CTA Rules

| Rule | Description |
|---|---|
| CTAs must match user intent | Product pages should prioritize product inquiry and related downloads. |
| CTAs should preserve context | Inquiry CTAs should carry product, brand, or document context conceptually. |
| CTAs should not replace navigation | Navigation remains the primary discovery structure. |
| CTAs should be consistent | Similar actions should use consistent labels across the website. |
| Recovery pages need helpful CTAs | 404 and no-results states should provide clear next steps. |

---

## 17. Active Navigation Rules

Active states help users understand where they are within the website.

| Page Type | Active Navigation Item |
|---|---|
| Home | Home |
| About page and child pages | About Us |
| Product listing, category, subcategory, and detail pages | Products |
| Brand listing, brand detail, brand products, and brand downloads | Brands |
| Download landing, category, and detail pages | Downloads |
| Gallery landing, category, and detail pages | Gallery |
| Search page and results | Search |
| Contact and inquiry pages | Contact Us |
| Privacy Policy, Terms & Conditions, Sitemap | No primary active item or Utility |
| 404 Page | No primary active item |

### Active State Rules

| Rule | Description |
|---|---|
| Parent section remains active | Deep pages should highlight their top-level parent. |
| Utility pages should not mislead users | Legal pages should not highlight unrelated primary sections. |
| Search results should maintain search context | Search should appear active when users are on results pages. |
| Admin navigation follows module context | Admin pages should highlight the current management module. |

---

## 18. Internal Linking Strategy

Internal linking should improve discoverability, SEO, and user task completion.

| Source Page | Recommended Links |
|---|---|
| Home | Products, featured categories, featured brands, downloads, gallery, contact. |
| About Us | Products, brands, industries served, contact. |
| Products Landing | Product lines, product categories, featured products, downloads, inquiry. |
| Product Category | Product details, subcategories, related categories, downloads. |
| Product Detail | Parent category, brand detail, related products, downloads, product inquiry. |
| Brands Landing | Brand detail pages, featured brands, brand products. |
| Brand Detail | Brand products, brand downloads, related product categories, brand inquiry. |
| Downloads Landing | Download categories, related products, related brands. |
| Download Detail | Related product, related brand, document inquiry. |
| Gallery Landing | Gallery categories, related products, related brands. |
| Gallery Detail | Related gallery category, related product, related brand. |
| Search Results | Relevant result destinations, Products, Downloads, Contact for recovery. |
| Contact Us | Products, downloads, brands. |
| 404 Page | Home, Search, Products, Contact. |
| Footer | High-priority pages, legal pages, product categories, brands, downloads. |

### Internal Linking Rules

| Rule | Description |
|---|---|
| Link to specific destinations | Prefer linking to exact product, brand, document, or category pages. |
| Avoid orphan pages | Every public page should be reachable through navigation, search, footer, sitemap, or contextual links. |
| Use meaningful labels | Link labels should describe the destination clearly. |
| Support bidirectional relationships | Products should link to downloads and downloads should link back to products. |
| Preserve hierarchy | Internal links should support the planned information architecture. |
| Avoid excessive links | Pages should expose useful links without becoming cluttered. |

---

## 19. Accessibility Guidelines

Navigation must be usable for all visitors, including keyboard and assistive technology users.

| Area | Guideline |
|---|---|
| Navigation Labels | Use clear, descriptive, and consistent labels. |
| Keyboard Access | Menus, dropdowns, search, and CTA links should be keyboard operable. |
| Focus Order | Navigation order should follow a logical reading and interaction sequence. |
| Active State | Current section should be programmatically and visually identifiable. |
| Breadcrumbs | Breadcrumbs should be structured as navigation aids. |
| Search | Search input and result filters should have understandable labels. |
| Mobile Menu | Expanded/collapsed states should be understandable. |
| Link Text | Avoid vague labels when context is not obvious. |
| Error Recovery | 404 and no-results navigation should provide clear next steps. |
| Touch Targets | Mobile navigation items should be comfortable to select. |

---

## 20. Future Navigation Expansion

The navigation architecture should support future sections without disrupting existing paths.

| Future Area | Navigation Placement |
|---|---|
| Applications | Add under Products or as a new primary navigation item if content volume grows. |
| Industries | Add under About Us or as a new primary navigation item if strategically important. |
| Case Studies | Add as Resource/Insights or top-level section if sales enablement becomes important. |
| Services | Add as a primary navigation item if services become a core offering. |
| Blog / Insights | Add under Resources or as a top-level item if content marketing grows. |
| Careers | Add under About Us or footer Company group. |
| Customer Support | Add under Contact/Support or as top-level item if support workflows expand. |
| Regional Pages | Expose through footer SEO links and relevant location content. |
| Advanced Product Filters | Add within Products listing and product category pages. |
| Product Comparison | Add from product listing and product detail pages. |

### Future Navigation Rules

| Rule | Description |
|---|---|
| Preserve existing URLs | New navigation should not require renaming established pages. |
| Promote only mature sections | New primary items should be added only when content volume and user need justify them. |
| Footer can absorb early expansion | Early-stage future pages can be exposed in the footer before becoming primary navigation. |
| Use contextual links for specialized content | Case studies, applications, and industries should link to related products and brands. |

---

## 21. Related Documents

| Document | Purpose |
|---|---|
| 01_Project_Scope.md | Defines project scope, objectives, constraints, and deliverables. |
| 02_Software_Requirement_Specification.md | Defines functional and non-functional software requirements. |
| 03_Feature_Breakdown.md | Defines feature-level planning and implementation scope. |
| 01_Information_Architecture.md | Defines content hierarchy, navigation hierarchy, and content relationships. |
| 02_Sitemap.md | Defines page hierarchy, conceptual URL structure, and sitemap planning. |
| 03_User_Flow.md | Defines visitor and administrator interaction flows. |
| 04_Page_Specifications.md | Defines public and admin page-level specifications. |

---

## Approval Checklist

- [ ] Document Reviewed
- [ ] Technical Review Completed
- [ ] Scope Verified
- [ ] No Open Issues
- [ ] Approved for Next Phase

---

**End of Document**
