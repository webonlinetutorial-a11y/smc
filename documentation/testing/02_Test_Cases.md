# Test Cases

## Document Control

| Field | Details |
|---|---|
| Project | Nepack Website |
| Document Title | Test Cases |
| Technology Stack | HTML5, CSS3, Vanilla JavaScript, PHP 8.2, MySQL |
| Server Environment | Apache |
| Development Environment | XAMPP Localhost |
| Hosting Environment | Hostinger Shared Hosting |
| Architecture Approach | Modular, Component Driven, Server Side Rendering, Mobile First, SEO Friendly |
| Document Status | Draft |
| Owner | QA Architecture |
| Last Updated | August 6, 2026 |

## Revision History

| Version | Date | Description | Author |
|---|---|---|---|
| 1.0 | August 6, 2026 | Initial high-level Test Cases documentation | QA Architecture |

## 1. Introduction

This document defines the high-level functional and non-functional test cases for the Nepack Website project.

The purpose of this document is to define what must be tested across the public website, dynamic CMS, Admin Panel, database workflows, frontend UI, security controls, performance expectations, browser compatibility, accessibility, and SEO readiness.

This document does not define automation scripts, executable test scripts, or implementation code.

## 2. Objectives

The Test Cases document is designed to:

- Provide representative test coverage for all major website modules.
- Support functional validation of public and Admin Panel workflows.
- Verify dynamic CMS functionality.
- Validate product management with multiple images and PDFs.
- Confirm brand, gallery, and download management behavior.
- Verify contact and inquiry workflows.
- Confirm download counter functionality.
- Validate search behavior.
- Support UI, security, performance, accessibility, and SEO verification.
- Prepare the project for User Acceptance Testing.

## 3. Test Case Design Principles

### Positive Testing

Positive testing verifies that valid inputs, expected workflows, and normal user actions produce the correct results.

Examples include successful contact submission, valid login, product creation, gallery upload, and correct product detail rendering.

### Negative Testing

Negative testing verifies that invalid inputs, unauthorized actions, missing records, unavailable files, and incorrect workflows are handled safely and clearly.

Examples include invalid login, missing product ID, unsupported file upload, empty search, and unauthorized Admin Panel access.

### Boundary Testing

Boundary testing verifies behavior at the limits of expected input or system constraints.

Examples include maximum file size, minimum required field length, maximum title length, empty datasets, and large product listings.

### Validation Testing

Validation testing verifies that frontend and backend validation rules work together.

Client-side validation should improve usability, while server-side validation remains authoritative.

### Regression Coverage

Regression coverage ensures that changes to shared components, database workflows, page rendering, SEO metadata, forms, assets, and Admin Panel modules do not break previously verified functionality.

## 4. Functional Test Cases

### Home

| Test Case ID | Module | Scenario | Expected Result | Priority |
|---|---|---|---|---|
| TC-HOME-001 | Home | User opens the homepage | Homepage renders successfully with header, navigation, hero carousel, main content, CTA sections, and footer | High |
| TC-HOME-002 | Home | Hero carousel loads active slide | First slide displays correctly without layout shift or broken image | High |
| TC-HOME-003 | Home | User interacts with carousel controls | Carousel changes slides correctly and remains usable | Medium |
| TC-HOME-004 | Home | Homepage loads on mobile viewport | Layout adapts correctly using mobile-first responsive behavior | High |

### About

| Test Case ID | Module | Scenario | Expected Result | Priority |
|---|---|---|---|---|
| TC-ABOUT-001 | About | User opens About page | Page renders company content, page banner, navigation, and footer correctly | High |
| TC-ABOUT-002 | About | About page contains media or visual sections | Media loads correctly and does not break layout | Medium |
| TC-ABOUT-003 | About | User navigates from About to other pages | Navigation links function correctly | Medium |

### Products

| Test Case ID | Module | Scenario | Expected Result | Priority |
|---|---|---|---|---|
| TC-PROD-001 | Products | User opens product listing page | Product listing renders available products from CMS data | High |
| TC-PROD-002 | Products | Product has compressed image | Product image displays correctly in listing | High |
| TC-PROD-003 | Products | Product listing contains no products | Empty state renders clearly without layout failure | Medium |
| TC-PROD-004 | Products | User selects a product | User is routed to the correct product detail page | High |

### Product Details

| Test Case ID | Module | Scenario | Expected Result | Priority |
|---|---|---|---|---|
| TC-PDETAIL-001 | Product Details | User opens valid product detail page | Product details render correctly with title, description, images, and related content | High |
| TC-PDETAIL-002 | Product Details | Product contains multiple images | Images display correctly and gallery behavior works where applicable | High |
| TC-PDETAIL-003 | Product Details | Product contains PDF attachment | PDF link is available and opens or downloads correctly | High |
| TC-PDETAIL-004 | Product Details | Product does not exist | Appropriate 404 or safe missing-content response is rendered | High |
| TC-PDETAIL-005 | Product Details | Product has unique SEO metadata | Page renders product-specific title, description, canonical URL, and structured metadata | High |

### Categories

| Test Case ID | Module | Scenario | Expected Result | Priority |
|---|---|---|---|---|
| TC-CAT-001 | Categories | User opens a valid product category | Category page displays relevant products | High |
| TC-CAT-002 | Categories | Category has no products | Empty state renders clearly | Medium |
| TC-CAT-003 | Categories | Invalid category is requested | Safe fallback, empty state, or 404 response is rendered | High |

### Brands

| Test Case ID | Module | Scenario | Expected Result | Priority |
|---|---|---|---|---|
| TC-BRAND-001 | Brands | User opens brands page | Brand listing renders correctly from CMS data | High |
| TC-BRAND-002 | Brands | Brand logo is available | Brand logo displays correctly and is optimized | Medium |
| TC-BRAND-003 | Brands | User opens brand detail page | Brand-specific content and related products render correctly | High |
| TC-BRAND-004 | Brands | Brand has unique SEO metadata | Brand page renders unique SEO metadata | High |

### Downloads

| Test Case ID | Module | Scenario | Expected Result | Priority |
|---|---|---|---|---|
| TC-DOWN-001 | Downloads | User opens downloads page | Download list renders available optimized PDFs | High |
| TC-DOWN-002 | Downloads | User downloads a PDF | PDF opens or downloads correctly and download counter updates where applicable | High |
| TC-DOWN-003 | Downloads | PDF file is missing | Clear error or unavailable state is shown without broken layout | High |
| TC-DOWN-004 | Downloads | Download has unique SEO metadata | Download page renders unique SEO metadata where applicable | Medium |

### Gallery

| Test Case ID | Module | Scenario | Expected Result | Priority |
|---|---|---|---|---|
| TC-GAL-001 | Gallery | User opens gallery page | Gallery items render correctly from CMS data | High |
| TC-GAL-002 | Gallery | Gallery uses thumbnails | Thumbnails load efficiently and maintain layout consistency | Medium |
| TC-GAL-003 | Gallery | User opens image preview | Image preview or gallery interaction works correctly | Medium |
| TC-GAL-004 | Gallery | Gallery has no items | Empty state renders clearly without layout failure | Medium |

### Search

| Test Case ID | Module | Scenario | Expected Result | Priority |
|---|---|---|---|---|
| TC-SEARCH-001 | Search | User submits valid search term | Relevant results are displayed | High |
| TC-SEARCH-002 | Search | User submits empty search | Validation or empty-state behavior is shown | Medium |
| TC-SEARCH-003 | Search | User submits search with no matches | No-results message is displayed clearly | Medium |
| TC-SEARCH-004 | Search | Search term contains unsafe characters | Input is handled safely without script execution or SQL error | High |

### Contact

| Test Case ID | Module | Scenario | Expected Result | Priority |
|---|---|---|---|---|
| TC-CONTACT-001 | Contact | User opens contact page | Contact details and contact form render correctly | High |
| TC-CONTACT-002 | Contact | User submits valid contact form | Submission is accepted and success message is displayed | High |
| TC-CONTACT-003 | Contact | User submits missing required fields | Validation messages are displayed clearly | High |
| TC-CONTACT-004 | Contact | User submits invalid email format | Email validation message is displayed | Medium |

### Inquiry

| Test Case ID | Module | Scenario | Expected Result | Priority |
|---|---|---|---|---|
| TC-INQ-001 | Inquiry | User opens inquiry form | Inquiry form renders correctly with required fields | High |
| TC-INQ-002 | Inquiry | User submits valid inquiry | Inquiry is saved or processed and confirmation is shown | High |
| TC-INQ-003 | Inquiry | Inquiry is linked to product context | Product context is preserved during inquiry flow where applicable | Medium |
| TC-INQ-004 | Inquiry | Invalid inquiry data is submitted | Validation errors are shown and unsafe input is rejected | High |

### Authentication

| Test Case ID | Module | Scenario | Expected Result | Priority |
|---|---|---|---|---|
| TC-AUTH-001 | Authentication | Admin logs in with valid credentials | User is authenticated and redirected to authorized area | High |
| TC-AUTH-002 | Authentication | Admin logs in with invalid credentials | Login fails with secure error message | High |
| TC-AUTH-003 | Authentication | Unauthenticated user accesses protected page | Access is denied and user is redirected or shown appropriate response | High |
| TC-AUTH-004 | Authentication | Admin logs out | Session is ended and protected pages are no longer accessible | High |

### Admin Dashboard

| Test Case ID | Module | Scenario | Expected Result | Priority |
|---|---|---|---|---|
| TC-ADMIN-001 | Admin Dashboard | Authorized admin opens dashboard | Dashboard renders correctly with accessible admin navigation | High |
| TC-ADMIN-002 | Admin Dashboard | Dashboard data is unavailable | Safe error or empty state is displayed | Medium |
| TC-ADMIN-003 | Admin Dashboard | Unauthorized user attempts access | Access is blocked | High |

### User Management

| Test Case ID | Module | Scenario | Expected Result | Priority |
|---|---|---|---|---|
| TC-USER-001 | User Management | Admin views user list | User records render correctly | Medium |
| TC-USER-002 | User Management | Admin creates user with valid data | User is created successfully | High |
| TC-USER-003 | User Management | Admin submits invalid user data | Validation errors are displayed | High |
| TC-USER-004 | User Management | Unauthorized user attempts user management action | Action is blocked | High |

### Settings

| Test Case ID | Module | Scenario | Expected Result | Priority |
|---|---|---|---|---|
| TC-SET-001 | Settings | Admin opens settings page | Settings render correctly | Medium |
| TC-SET-002 | Settings | Admin updates valid settings | Settings are saved and reflected where applicable | High |
| TC-SET-003 | Settings | Admin submits invalid settings | Validation errors are displayed | Medium |
| TC-SET-004 | Settings | Settings affect public content | Public pages reflect approved updated settings correctly | High |

## 5. UI Test Cases

| Test Case ID | Module | Scenario | Expected Result | Priority |
|---|---|---|---|---|
| TC-UI-001 | Responsive Layout | Page is viewed on mobile, tablet, and desktop | Layout adapts correctly without overflow or broken alignment | High |
| TC-UI-002 | Navigation | User interacts with desktop and mobile navigation | Navigation is clear, usable, and consistent | High |
| TC-UI-003 | Typography | Page displays headings, body text, and labels | Typography follows approved Design Documentation | Medium |
| TC-UI-004 | Components | Reusable components render across pages | Components remain visually consistent | High |
| TC-UI-005 | Forms | Form fields, labels, errors, and buttons render correctly | Forms are clear, accessible, and responsive | High |
| TC-UI-006 | Tables | Admin or data tables render with multiple rows | Tables remain readable and usable | Medium |
| TC-UI-007 | Cards | Product, brand, or content cards render in grids | Cards remain consistent and responsive | Medium |
| TC-UI-008 | Buttons | Buttons appear in different states | Button states are visually clear and consistent | Medium |

## 6. Database Validation Cases

Database validation should reference the Database Documentation.

| Test Case ID | Module | Scenario | Expected Result | Priority |
|---|---|---|---|---|
| TC-DB-001 | CRUD Operations | CMS record is created, viewed, updated, and deleted where applicable | Database operation completes correctly and UI reflects the result | High |
| TC-DB-002 | Foreign Keys | Related records are created or removed | Relationships remain valid and orphaned data is avoided | High |
| TC-DB-003 | Constraints | Required, unique, and constrained fields are tested | Invalid data is rejected and valid data is stored | High |
| TC-DB-004 | Transactions | Multi-step operation succeeds or fails | Data remains consistent without partial updates | Medium |
| TC-DB-005 | Data Integrity | Public page renders CMS data | Rendered content matches stored database values | High |

## 7. Security Test Cases

Security testing should reference the Security Architecture.

| Test Case ID | Module | Scenario | Expected Result | Priority |
|---|---|---|---|---|
| TC-SEC-001 | Login Security | Invalid login credentials are submitted | Authentication fails securely without exposing sensitive details | High |
| TC-SEC-002 | Session Handling | User logs out then accesses protected page | Protected page is inaccessible after logout | High |
| TC-SEC-003 | CSRF | State-changing request is submitted without valid token | Request is rejected | High |
| TC-SEC-004 | XSS | Script-like input is submitted through forms or CMS fields | Input is safely handled and does not execute | High |
| TC-SEC-005 | SQL Injection Prevention | Malicious query-like input is submitted | Input does not alter database query behavior or expose errors | High |
| TC-SEC-006 | File Upload Validation | Unsupported or unsafe file is uploaded | File is rejected safely | High |
| TC-SEC-007 | Authorization | User attempts unauthorized admin action | Action is blocked | High |

## 8. Performance Test Cases

| Test Case ID | Module | Scenario | Expected Result | Priority |
|---|---|---|---|---|
| TC-PERF-001 | Initial Page Load | Public page loads on typical connection | Page loads within acceptable performance expectations for shared hosting | High |
| TC-PERF-002 | Hero Carousel | Homepage hero carousel images load | First visible image is optimized and does not create major layout shift | High |
| TC-PERF-003 | Product Listing | Product listing renders multiple products | Page remains responsive and images are optimized | Medium |
| TC-PERF-004 | Gallery | Gallery page renders multiple images | Thumbnails and lazy loading protect performance | Medium |
| TC-PERF-005 | Downloads | User downloads optimized PDF | Download completes reliably and counter behavior remains stable | Medium |
| TC-PERF-006 | Search | Search query is submitted | Results return without excessive delay | Medium |
| TC-PERF-007 | Asset Loading | Page loads CSS, JavaScript, fonts, and images | Assets load without unnecessary duplication or blocking | High |

## 9. Browser Compatibility Cases

| Test Case ID | Module | Scenario | Expected Result | Priority |
|---|---|---|---|---|
| TC-BROWSER-001 | Chrome | Website is tested in Chrome desktop and mobile | Layout and functionality work correctly | High |
| TC-BROWSER-002 | Firefox | Website is tested in Firefox desktop and mobile | Layout and functionality work correctly | High |
| TC-BROWSER-003 | Edge | Website is tested in Edge desktop and mobile | Layout and functionality work correctly | High |
| TC-BROWSER-004 | Safari | Website is tested in Safari desktop and mobile | Layout and functionality work correctly where supported | High |

## 10. Accessibility Test Cases

| Test Case ID | Module | Scenario | Expected Result | Priority |
|---|---|---|---|---|
| TC-A11Y-001 | Keyboard Navigation | User navigates interactive elements by keyboard | Interactive elements are reachable and usable | High |
| TC-A11Y-002 | Focus States | User tabs through links, buttons, and fields | Focus indicators are visible and consistent | High |
| TC-A11Y-003 | Semantic HTML | Page structure is reviewed | Headings, landmarks, forms, and links are semantically meaningful | High |
| TC-A11Y-004 | Color Contrast | Text and controls are reviewed against approved colors | Contrast supports readability | High |
| TC-A11Y-005 | Screen Reader Readiness | Dynamic messages and important UI states are reviewed | Content and states are understandable to assistive technologies | Medium |

## 11. SEO Verification Cases

SEO testing should reference the SEO Documentation.

| Test Case ID | Module | Scenario | Expected Result | Priority |
|---|---|---|---|---|
| TC-SEO-001 | Meta Tags | Public page is rendered | Title, description, robots, Open Graph, and Twitter metadata are present where applicable | High |
| TC-SEO-002 | Canonical URLs | Static and dynamic pages are rendered | Canonical URLs match approved page URLs | High |
| TC-SEO-003 | Structured Data | Page with structured data eligibility is rendered | Structured data is valid, accurate, and aligned with visible content | Medium |
| TC-SEO-004 | XML Sitemap | Sitemap is reviewed | Indexable public pages are represented correctly | High |
| TC-SEO-005 | robots.txt | robots.txt is reviewed | Crawler directives align with SEO strategy | High |

## 12. Test Data Guidelines

Test data should be representative of real Nepack Website usage and should support both public and Admin Panel validation.

Test data should include:

- Products with complete details.
- Products with multiple images.
- Products with associated PDFs.
- Products with missing optional fields.
- Product categories with and without products.
- Brands with logos and associated products.
- Downloads with optimized PDF files.
- Gallery items with compressed images.
- Contact and inquiry form submissions.
- Admin users with valid roles.
- Invalid and boundary input values.
- Search terms with results and no results.
- SEO metadata for Products, Brands, and Downloads.
- Empty datasets for validating fallback rendering.

Test data should avoid using sensitive real customer information unless explicitly approved and protected.

## 13. Entry and Exit Criteria

Entry and exit criteria should reference the Testing Strategy.

### Entry Criteria

Testing should begin when the relevant feature, page, module, or workflow is implemented, available in the agreed testing environment, and stable enough for review.

Required data, configuration, dependencies, and access permissions should be available before testing begins.

### Exit Criteria

Testing for a release or module may be considered complete when planned functional, UI, security, performance, accessibility, browser compatibility, SEO, and database checks have been completed.

Critical and high-priority defects should be resolved or formally accepted before approval for UAT or deployment.

## 14. Related Documents

This Test Cases document should be used together with the following project documentation:

- 01_Testing_Strategy.md
- Backend Documentation
- Database Documentation
- Frontend Documentation
- Design Documentation

## Approval Checklist

- [ ] Document Reviewed
- [ ] Functional Coverage Verified
- [ ] Security Coverage Verified
- [ ] Performance Coverage Verified
- [ ] Ready for UAT

**End of Document**
