# Software Requirement Specification

## Document Control

| Field | Value |
| --- | --- |
| Document ID | SRS-NEPACK-001 |
| Document Name | Software Requirement Specification |
| Version | 1.0 |
| Status | Draft |
| Project | Nepack Website |
| Author | Project Documentation Team |
| Last Updated | 2026-08-05 |
| Review Cycle | At each major milestone or release |

## Revision History

| Version | Date | Author | Description | Status |
| --- | --- | --- | --- | --- |
| 1.0 | 2026-08-05 | Project Documentation Team | Initial SRS document created for Nepack Website | Draft |

---

## 1. Introduction

The Nepack Website is a dynamic industrial automation company website with a content management system. The system will provide a professional corporate web presence, product catalog, brand listing, downloadable resources, gallery, search, inquiry handling, SEO management, and a secure admin panel.

The application will be developed using HTML5, CSS3, Vanilla JavaScript, PHP 8.2, MySQL, Apache, and XAMPP for local development. The production deployment target is Hostinger Shared Hosting using Apache, PHP 8.2, and MySQL.

---

## 2. Purpose

The purpose of this document is to define the functional, non-functional, technical, security, SEO, hosting, and operational requirements for the Nepack Website.

This document is intended for:

- Project stakeholders
- Development team
- QA team
- Deployment team
- Future maintenance team

---

## 3. Scope

The scope includes a production-ready dynamic website with frontend pages, CMS-managed content, admin panel, inquiry management, media management, PDF management, SEO support, and search functionality.

The scope includes:

- Corporate website pages
- Product and category management
- Brand management
- Gallery management
- Download/PDF management
- Slider management
- Testimonial management
- Inquiry management
- SEO management
- Admin authentication
- User management
- Settings management
- Responsive design
- Security implementation
- Hostinger-compatible deployment

The scope does not include CRM, ERP, payment gateway, inventory visibility, dealer portal, or third-party API integrations unless added in future scope.

---

## 4. Business Objectives

| Objective | Description |
| --- | --- |
| Professional Presence | Establish a credible online identity for an industrial automation company. |
| Lead Generation | Enable visitors to submit contact and product inquiries. |
| Product Discovery | Allow users to browse products, categories, brands, downloads, and gallery content. |
| Content Control | Allow authorized admin users to manage website content without code changes. |
| SEO Visibility | Improve discoverability through SEO-friendly structure and metadata. |
| Future Growth | Support scalable content expansion over time. |

---

## 5. Project Objectives

The project objectives are:

- Build a fully dynamic PHP/MySQL website.
- Provide a secure CMS and admin panel.
- Support unlimited products, categories, brands, images, PDFs, gallery albums, testimonials, and SEO pages.
- Deliver a mobile responsive frontend.
- Maintain fast loading performance on shared hosting.
- Implement SEO-friendly URLs, metadata, sitemap, and structured data support.
- Provide secure inquiry submission and admin-side inquiry management.
- Ensure the system is easy to maintain and extend.

---

## 6. Stakeholders

| Stakeholder | Responsibility |
| --- | --- |
| Business Owner | Provides business goals, content approval, and final acceptance. |
| Admin Users | Manage products, brands, gallery, downloads, SEO, inquiries, and settings. |
| Website Visitors | Browse content, search products, download resources, and submit inquiries. |
| Development Team | Builds, tests, and maintains the application. |
| QA Team | Verifies functional, responsive, security, and browser compatibility requirements. |
| Hosting/Deployment Team | Deploys and maintains the application on Hostinger Shared Hosting. |

---

## 7. User Roles

| Role | Description |
| --- | --- |
| Public Visitor | Can browse website pages, search content, view products, download PDFs, and submit inquiries. |
| Admin User | Can access the admin panel and manage assigned CMS modules. |
| Super Admin | Can manage users, settings, SEO, content modules, and system-level admin functions. |

---

## 8. User Characteristics

| User Type | Characteristics |
| --- | --- |
| Industrial Buyers | Need quick access to product and brand information. |
| Engineers | Need product details, technical downloads, and easy search. |
| Purchase Departments | Need product inquiry and contact options. |
| Existing Customers | Need catalogs, support information, and downloads. |
| Admin Staff | Need simple CMS controls for routine content updates. |

---

## 9. System Overview

The Nepack Website will consist of:

- Public frontend website
- Secure admin panel
- CMS-managed database content
- Media and PDF management
- Inquiry management
- SEO management
- Search functionality

The system will use PHP 8.2 for backend processing, MySQL for data storage, Apache as the web server, and HTML5/CSS3/Vanilla JavaScript for frontend presentation and interaction.

---

## 10. Functional Requirements

### 10.1 Frontend Requirements

| ID | Requirement |
| --- | --- |
| FR-FE-001 | The system shall provide a Home page. |
| FR-FE-002 | The system shall provide an About page. |
| FR-FE-003 | The system shall provide Products listing pages. |
| FR-FE-004 | The system shall provide Product Details pages. |
| FR-FE-005 | The system shall provide Brands pages. |
| FR-FE-006 | The system shall provide Downloads pages for PDFs. |
| FR-FE-007 | The system shall provide Gallery pages. |
| FR-FE-008 | The system shall provide a Contact page with inquiry form. |
| FR-FE-009 | The system shall provide Search functionality. |
| FR-FE-010 | The system shall provide Privacy Policy, Terms & Conditions, and Sitemap pages. |

### 10.2 Admin Dashboard

| ID | Requirement |
| --- | --- |
| FR-ADM-001 | The system shall provide a secure admin dashboard. |
| FR-ADM-002 | The dashboard shall summarize key CMS areas such as products, inquiries, downloads, and gallery content. |
| FR-ADM-003 | The dashboard shall be accessible only after authentication. |

### 10.3 Authentication

| ID | Requirement |
| --- | --- |
| FR-AUTH-001 | The system shall provide secure admin login. |
| FR-AUTH-002 | The system shall provide secure admin logout. |
| FR-AUTH-003 | The system shall restrict admin pages to authenticated users only. |
| FR-AUTH-004 | The system shall protect admin sessions from unauthorized access. |

### 10.4 User Management

| ID | Requirement |
| --- | --- |
| FR-USR-001 | The system shall allow authorized users to manage admin users. |
| FR-USR-002 | The system shall support active and inactive admin user states. |
| FR-USR-003 | The system shall protect user management from unauthorized access. |

### 10.5 Products

| ID | Requirement |
| --- | --- |
| FR-PRD-001 | The system shall allow admins to create, update, view, and delete products. |
| FR-PRD-002 | The system shall support unlimited products. |
| FR-PRD-003 | The system shall associate products with categories and brands where applicable. |
| FR-PRD-004 | The system shall support product images. |
| FR-PRD-005 | The system shall support product-related PDFs where applicable. |
| FR-PRD-006 | The system shall display product details on the frontend. |

### 10.6 Categories

| ID | Requirement |
| --- | --- |
| FR-CAT-001 | The system shall allow admins to manage product categories. |
| FR-CAT-002 | The system shall support unlimited categories. |
| FR-CAT-003 | The system shall display category-based product listings. |

### 10.7 Brands

| ID | Requirement |
| --- | --- |
| FR-BRD-001 | The system shall allow admins to manage brands. |
| FR-BRD-002 | The system shall support unlimited brands. |
| FR-BRD-003 | The system shall display brand information on the frontend. |
| FR-BRD-004 | The system shall allow products to be associated with brands where applicable. |

### 10.8 Gallery

| ID | Requirement |
| --- | --- |
| FR-GAL-001 | The system shall allow admins to manage gallery albums and images. |
| FR-GAL-002 | The system shall support unlimited gallery albums. |
| FR-GAL-003 | The system shall support unlimited gallery images. |
| FR-GAL-004 | The system shall display gallery content on the frontend. |

### 10.9 Downloads

| ID | Requirement |
| --- | --- |
| FR-DWN-001 | The system shall allow admins to upload and manage PDF downloads. |
| FR-DWN-002 | The system shall support unlimited PDFs. |
| FR-DWN-003 | The system shall display downloadable PDFs on the frontend. |
| FR-DWN-004 | The system shall validate uploaded PDF files. |

### 10.10 Slider

| ID | Requirement |
| --- | --- |
| FR-SLD-001 | The system shall allow admins to manage website slider content. |
| FR-SLD-002 | Slider content shall be manageable through the CMS. |
| FR-SLD-003 | Slider content shall be displayed on applicable frontend pages. |

### 10.11 Testimonials

| ID | Requirement |
| --- | --- |
| FR-TST-001 | The system shall allow admins to manage testimonials. |
| FR-TST-002 | The system shall support unlimited testimonials. |
| FR-TST-003 | Approved testimonials shall be displayed on the frontend where applicable. |

### 10.12 Inquiry Management

| ID | Requirement |
| --- | --- |
| FR-INQ-001 | The system shall allow visitors to submit contact inquiries. |
| FR-INQ-002 | The system shall validate inquiry form inputs. |
| FR-INQ-003 | The system shall allow admins to view submitted inquiries. |
| FR-INQ-004 | The system shall protect inquiry forms from invalid or unsafe input. |

### 10.13 Search

| ID | Requirement |
| --- | --- |
| FR-SRC-001 | The system shall provide frontend search functionality. |
| FR-SRC-002 | Search shall support products, categories, brands, downloads, and relevant CMS content. |
| FR-SRC-003 | Search results shall be displayed in a user-friendly format. |

### 10.14 SEO Management

| ID | Requirement |
| --- | --- |
| FR-SEO-001 | The system shall allow admins to manage SEO metadata. |
| FR-SEO-002 | The system shall support unlimited SEO pages. |
| FR-SEO-003 | The system shall support SEO-friendly URLs. |
| FR-SEO-004 | The system shall support sitemap and robots.txt requirements. |

### 10.15 Settings

| ID | Requirement |
| --- | --- |
| FR-SET-001 | The system shall allow authorized admins to manage general website settings. |
| FR-SET-002 | Settings shall be protected from unauthorized modification. |

---

## 11. Non-Functional Requirements

### 11.1 Performance

- Pages should load efficiently on shared hosting.
- Images should be optimized before use.
- Large content lists should support pagination where required.
- Database queries should be efficient and indexed where appropriate.

### 11.2 Security

- All dynamic database operations must use prepared statements.
- User inputs must be validated.
- Outputs must be escaped where required.
- Admin access must require authentication.
- File uploads must be validated.

### 11.3 Scalability

- The system must support unlimited products, categories, brands, images, PDFs, gallery albums, testimonials, and SEO pages.
- The database and CMS design must support future content growth.
- The system should be extendable for future modules.

### 11.4 Reliability

- Core frontend pages should remain accessible during normal hosting operation.
- Admin actions should use validation to prevent invalid data storage.
- Error handling should avoid exposing sensitive technical details.

### 11.5 Maintainability

- Code and documentation should be organized for long-term maintenance.
- CMS modules should follow consistent behavior and terminology.
- The system should be easy for another development team to understand.

### 11.6 Availability

- The system should operate within Hostinger Shared Hosting limits.
- Public pages should remain available except during planned maintenance or hosting outage.

### 11.7 Accessibility

- The frontend should use semantic HTML5.
- Forms should use proper labels.
- Images should use meaningful alt text.
- Navigation should be keyboard-friendly where practical.

### 11.8 Compatibility

- The system must be compatible with Apache, PHP 8.2, and MySQL.
- The frontend must work across common modern browsers.
- The system must support both XAMPP local development and Hostinger production hosting.

### 11.9 Usability

- Public visitors should be able to find products, brands, downloads, and contact options easily.
- Admin users should be able to manage CMS content without direct code editing.
- Forms should provide clear validation behavior.

---

## 12. Business Rules

| ID | Rule |
| --- | --- |
| BR-001 | Only authorized admin users may access the admin panel. |
| BR-002 | Products must be manageable through the CMS. |
| BR-003 | Categories and brands must be reusable across products where applicable. |
| BR-004 | Uploaded files must pass validation before storage. |
| BR-005 | Public inquiry forms must validate required fields. |
| BR-006 | SEO metadata must be manageable for relevant pages. |
| BR-007 | Future integrations are outside the initial scope unless separately approved. |

---

## 13. System Constraints

- The system must use PHP 8.2 and MySQL.
- The system must remain compatible with Apache.
- The system must run locally on XAMPP.
- The production system must run on Hostinger Shared Hosting.
- No frontend framework is required for the initial version.
- The frontend must use HTML5, CSS3, and Vanilla JavaScript.
- File upload size and execution behavior must respect shared hosting limits.
- Server-level features unavailable on shared hosting must not be required.

---

## 14. Assumptions

- Hostinger Shared Hosting supports PHP 8.2, MySQL, Apache, and `.htaccess`.
- The client will provide final product, brand, company, image, PDF, and policy content.
- Product and catalog data may grow over time.
- Admin users will be trained to manage CMS content responsibly.
- The reference website and reference landing page are used for business and content understanding.

---

## 15. Dependencies

| Dependency | Description |
| --- | --- |
| Hosting Account | Hostinger Shared Hosting account with PHP 8.2 and MySQL. |
| Local Environment | XAMPP and VS Code for development. |
| Content | Final business, product, brand, media, and policy content from the client. |
| Browser Support | Modern browsers for frontend access. |
| Admin Users | Authorized internal users for CMS operations. |

---

## 16. Technology Stack

| Layer | Technology |
| --- | --- |
| Frontend | HTML5, CSS3, Vanilla JavaScript |
| Backend | PHP 8.2 |
| Database | MySQL |
| Web Server | Apache |
| Local Development | XAMPP, VS Code |
| Production Hosting | Hostinger Shared Hosting |

---

## 17. Hosting Requirements

- Production hosting must support Apache, PHP 8.2, and MySQL.
- Hosting must support file uploads within configured limits.
- Hosting must support `.htaccess` where clean URLs or routing rules are required.
- Hosting storage must be sufficient for product images, gallery images, and PDF downloads.
- Hosting performance must be suitable for a lightweight PHP/MySQL CMS website.

---

## 18. Browser Compatibility

The website must support common modern browsers:

- Chrome
- Edge
- Firefox
- Safari

The website must support desktop, tablet, and mobile browsing.

---

## 19. Responsive Design Requirements

- The website must be mobile responsive.
- Layouts must adapt to desktop, tablet, and mobile screen sizes.
- Navigation must remain usable on smaller screens.
- Product listings, gallery, downloads, and forms must remain readable and accessible on mobile devices.
- Images must scale appropriately without breaking layout.

---

## 20. File Upload Requirements

### 20.1 Image Rules

- Supported image formats: JPEG, PNG, WebP.
- Images should be optimized before use.
- Image uploads must be validated.
- Image filenames should be safe and consistent.
- Image alt text should be supported where applicable.

### 20.2 PDF Rules

- Supported document format: PDF.
- PDF files must be manageable through the CMS.
- PDF uploads must be validated.
- PDF files should be compressed before use where practical.
- PDF filenames should be safe and consistent.

### 20.3 File Validation

- Uploaded files must be checked for allowed file type.
- Uploaded files must respect configured size limits.
- Unsafe filenames must not be accepted.
- Invalid files must be rejected.
- File upload errors must be handled safely.

### 20.4 Compression Standards

- Images should be optimized before publishing.
- WebP should be used where practical.
- PDF files should be compressed before upload where practical.
- Compression should not make content unreadable or unsuitable for business use.

### 20.5 Storage Guidelines

- Uploaded media should be stored in organized upload areas.
- File paths should be managed securely.
- Public access should be limited to intended downloadable or displayable files.
- Sensitive files should not be exposed publicly.

---

## 21. Security Requirements

### 21.1 Authentication

- Admin panel access must require authentication.
- Login attempts must be validated securely.
- Logout must terminate the admin session.

### 21.2 Authorization

- Admin-only pages must not be accessible to public users.
- User management and settings must be restricted to authorized users.
- Unauthorized access attempts must be blocked.

### 21.3 Prepared Statements

- All dynamic SQL operations must use prepared statements.
- Direct unsafe query construction must not be used.

### 21.4 CSRF Protection

- Sensitive admin forms must include CSRF protection.
- Invalid CSRF tokens must cause the request to be rejected.

### 21.5 XSS Protection

- User input must be validated.
- Output must be escaped where required.
- CMS content must be handled safely before display.

### 21.6 Session Management

- Admin sessions must be protected.
- Session data must not expose sensitive information.
- Sessions must be cleared on logout.

### 21.7 File Upload Validation

- File uploads must be restricted to approved formats.
- Uploaded files must be validated before storage.
- Unsafe file types must be rejected.
- File upload errors must not expose sensitive server details.

### 21.8 Password Security

- Admin passwords must be hashed securely.
- Plain-text passwords must not be stored.
- Password handling must follow current PHP security practices.

---

## 22. SEO Requirements

### 22.1 Meta Tags

- Relevant pages must support meta title and meta description.
- Metadata should be manageable from the CMS where applicable.

### 22.2 Canonical URLs

- Relevant pages should support canonical URLs to reduce duplicate content issues.

### 22.3 XML Sitemap

- The system should provide XML sitemap support for SEO indexing.

### 22.4 Robots.txt

- The system should support robots.txt configuration.

### 22.5 Open Graph

- Relevant pages should support Open Graph metadata for social sharing.

### 22.6 Twitter Cards

- Relevant pages should support Twitter Card metadata.

### 22.7 Structured Data

- Relevant pages should support structured data where applicable.

### 22.8 Breadcrumbs

- Product, category, brand, and other nested pages should support breadcrumbs where applicable.

### 22.9 SEO-Friendly URLs

- Public pages should use readable SEO-friendly URLs where practical.
- URL structure should remain consistent across public modules.

---

## 23. Logging & Audit Requirements

- The system should record important admin activities where applicable.
- Audit logging should include login and logout events.
- Audit logging should include major content actions such as product creation, update, deletion, PDF upload, and settings changes.
- Logs should support operational review without exposing sensitive information.

---

## 24. Backup & Recovery Requirements

- The database should be backed up before major deployments or data changes.
- Uploaded media and PDFs should be included in backup planning.
- Backup files should be stored securely.
- Recovery procedures should allow restoration of website content and CMS data.
- Backup frequency should be defined before production launch.

---

## 25. Performance Requirements

- Public pages should load quickly on Hostinger Shared Hosting.
- Images must be optimized to reduce page weight.
- PDF files should be compressed where practical.
- Large lists should use pagination where required.
- Search queries should be optimized for expected content volume.
- CSS and JavaScript should remain lightweight.
- The system should avoid unnecessary frontend frameworks in the initial version.

---

## 26. Future Scope

Future scope may include:

- Advanced product filters
- Product comparison
- Related products
- Download tracking
- Inquiry email notifications through SMTP
- WhatsApp inquiry integration
- Blog or knowledge base
- Case studies
- Testimonials expansion
- Client logo section
- Multi-admin user roles
- Activity logs expansion
- Advanced SEO sitemap generation
- CRM integration
- ERP integration
- Inventory visibility
- Dealer or distributor portal
- Multi-language support
- Analytics dashboard

Future scope items require separate approval before implementation.

---

## 27. Acceptance Criteria

The system will be accepted when:

- Public website pages are functional and responsive.
- Products, categories, brands, gallery, downloads, slider, testimonials, inquiries, SEO, users, and settings are manageable from the admin panel.
- Public visitors can search website content.
- Public visitors can submit inquiries successfully.
- Admin authentication and protected access are implemented.
- File uploads are validated.
- Images and PDFs are manageable through the CMS.
- SEO requirements are implemented for relevant pages.
- Website works on supported browsers.
- Website performs acceptably on Hostinger Shared Hosting.
- Security requirements are implemented.
- The system is ready for production deployment.

---

## 28. Related Documents

| Document | Purpose |
| --- | --- |
| 00_Project_Context.md | Defines project background and business context. |
| 00_Coding_Standards.md | Defines coding and implementation standards. |
| 00_AI_Instructions.md | Defines AI-assisted development instructions. |
| 01_Project_Scope.md | Defines approved project scope. |

---

## 29. Appendix

### 29.1 Approved Technology Stack

- HTML5
- CSS3
- Vanilla JavaScript
- PHP 8.2
- MySQL
- Apache
- XAMPP
- Hostinger Shared Hosting

### 29.2 Approved Media Types

- JPEG
- PNG
- WebP
- PDF

### 29.3 Approved Frontend Modules

- Home
- About
- Products
- Product Details
- Brands
- Downloads
- Gallery
- Contact
- Search
- Privacy Policy
- Terms & Conditions
- Sitemap

### 29.4 Approved Admin Modules

- Dashboard
- Authentication
- Users
- Products
- Categories
- Brands
- Gallery
- Downloads
- Slider
- Testimonials
- Inquiry
- SEO
- Settings

---

## 30. End of Document
