# Nepack Website - Project Scope Document

## 1. Executive Summary

The **Nepack Website** is planned as a production-ready, dynamic website for an industrial automation company. The website will present company information, product categories, brands, product details, downloadable PDF resources, gallery items, industry applications, contact information, inquiry forms, and search functionality through a structured content management system.

The project will be built using a lightweight and shared-hosting-compatible technology stack: **HTML5, CSS3, Vanilla JavaScript, PHP 8.2, MySQL, Apache, XAMPP, and Hostinger Shared Hosting**.

The website must be scalable enough to support unlimited products, categories, brands, images, PDF downloads, and CMS-managed content while remaining secure, fast, SEO-friendly, and easy to maintain.

---

## 2. Project Overview

### Project Name

Nepack Website

### Project Type

Dynamic industrial automation company website with CMS and admin panel.

### Reference Website

https://nepackassociates.co.in/

The reference website represents the existing business presence and indicates a product inquiry-driven industrial automation business model. The new website will improve structure, scalability, content management, user experience, SEO readiness, and admin control.

### Primary Purpose

The website will act as a digital product catalog, company profile, lead generation platform, downloadable resource center, and content management system for Nepack.

---

## 3. Business Objectives

The business objectives of the Nepack Website are:

- Establish a professional and trustworthy online presence for an industrial automation company.
- Present Nepack as a reliable supplier or partner for automation products, industrial components, and related solutions.
- Generate qualified business inquiries from customers, engineers, purchase departments, and industry buyers.
- Make products, brands, catalogs, and technical resources easy to discover.
- Reduce dependency on developers for routine product, brand, image, PDF, and content updates.
- Support future growth into additional products, industries, applications, and digital services.
- Improve visibility in search engines for industrial automation-related keywords.
- Build a scalable platform that can evolve with the company.

---

## 4. Website Objectives

The website objectives are:

- Provide a clear and professional public website experience.
- Allow users to browse products by category, brand, industry, and application.
- Provide detailed product information with images and PDF downloads.
- Support fast and accurate search across product and content areas.
- Allow users to submit contact and product inquiries.
- Provide a secure admin panel for website management.
- Support CMS-driven updates without direct code editing.
- Maintain SEO-friendly URLs, metadata, headings, and content structure.
- Deliver a responsive experience across mobile, tablet, laptop, and desktop devices.
- Maintain good performance on Hostinger Shared Hosting.
- Keep the project easy to extend in future milestones.

---

## 5. Target Audience

The target audience includes:

- Industrial automation buyers
- Factory owners
- Plant managers
- Maintenance engineers
- Electrical engineers
- Pneumatic and automation engineers
- Machine builders
- OEM companies
- System integrators
- Purchase departments
- Dealers and distributors
- Existing customers looking for catalogs, products, or support

The website should be practical, professional, fast, easy to search, and focused on helping users find the right products or submit inquiries quickly.

---

## 6. Functional Scope

The functional scope defines the features and modules planned for the website.

### Public Website

The public website will include:

- Home page
- About page
- Products page
- Product category pages
- Product detail pages
- Brands page
- Brand detail pages
- Downloads page for PDF catalogs and datasheets
- Gallery page
- Applications page
- Industries page
- Contact page
- Search functionality
- Inquiry form
- Product-specific inquiry option
- SEO-friendly public pages
- Responsive navigation

### Dynamic CMS

The CMS will support management of:

- Products
- Product categories
- Brands
- Product images
- Product PDF downloads
- Gallery images
- Applications
- Industries
- SEO metadata
- Contact inquiries
- General website settings where required

### Admin Panel

The admin panel will include:

- Secure admin login
- Dashboard
- Product management
- Category management
- Brand management
- PDF download management
- Gallery management
- Application management
- Industry management
- Inquiry management
- SEO field management
- Admin logout

### Search

Search functionality will support users in finding:

- Products
- Categories
- Brands
- Applications
- Industries
- Downloads where applicable

### Inquiry System

The inquiry system will support:

- General contact inquiries
- Product-related inquiries
- Required field validation
- Admin-side inquiry viewing
- Secure form processing

---

## 7. Non Functional Scope

The non functional scope defines quality, security, performance, and maintainability expectations.

### Security

- Prepared statements for all dynamic database queries
- Input validation
- Output escaping
- CSRF protection for sensitive forms
- XSS protection
- Secure admin authentication
- Password hashing
- Restricted file uploads
- Safe error handling

### Performance

- Lightweight frontend without unnecessary frameworks
- Optimized images
- WebP image usage where practical
- Compressed PDF files
- Pagination for large content lists
- Efficient MySQL queries
- Indexed searchable fields
- Minimal CSS and JavaScript

### Maintainability

- Clean folder structure
- Reusable PHP includes
- Separated HTML, CSS, and JavaScript
- Clear file responsibilities
- Professional documentation
- Module-by-module development

### Compatibility

- Apache compatible
- PHP 8.2 compatible
- MySQL compatible
- XAMPP localhost compatible
- Hostinger Shared Hosting compatible
- Responsive across common modern browsers and devices

### Accessibility

- Semantic HTML5
- Proper labels for forms
- Meaningful image alt text
- Keyboard-friendly navigation
- Readable typography
- Sufficient color contrast

---

## 8. Technical Scope

### Frontend Technology

- HTML5 for page structure
- CSS3 for styling and responsive design
- Vanilla JavaScript for interactivity
- No inline CSS
- No inline JavaScript
- No frontend framework by default

### Backend Technology

- PHP 8.2
- Reusable includes for layout, configuration, authentication, validation, and database operations
- Secure request handling
- Server-side validation
- Admin panel logic
- CMS content rendering

### Database Technology

- MySQL
- Relational database structure
- Tables for products, categories, brands, images, PDFs, applications, industries, inquiries, admin users, and SEO metadata
- Indexing for performance
- Prepared statements for all dynamic queries

### Server Environment

- Apache
- XAMPP for local development
- Hostinger Shared Hosting for production deployment
- `.htaccess` support where clean URLs or routing rules are required

### File Storage

- Product images
- Brand images or logos
- Gallery images
- PDF catalogs and datasheets
- Organized upload folders
- Safe file naming conventions
- File validation before upload

---

## 9. Deliverables

The expected project deliverables include:

- Project planning documentation
- Coding standards documentation
- Permanent project rules documentation
- Folder structure documentation
- Database design documentation
- Public website pages
- Admin panel
- Dynamic CMS modules
- Product management module
- Category management module
- Brand management module
- PDF download module
- Gallery module
- Applications module
- Industries module
- Search module
- Contact inquiry module
- SEO management support
- Testing checklist documentation
- Deployment documentation for Hostinger Shared Hosting
- Production-ready website files
- MySQL database schema

---

## 10. Assumptions

The project scope is based on the following assumptions:

- The website will be hosted on Hostinger Shared Hosting.
- PHP 8.2 and MySQL will be available on the hosting account.
- Apache configuration and `.htaccess` usage will be supported by the hosting environment.
- XAMPP will be used for local development and testing.
- The client will provide final company content, product data, brand details, images, PDFs, and contact information.
- Product and catalog data may grow significantly over time.
- The admin panel will be used by authorized internal users only.
- The first production version will focus on a strong CMS foundation and core business features.
- Advanced integrations such as CRM, ERP, payment systems, or third-party APIs are outside the initial scope unless added later.

---

## 11. Constraints

The project has the following constraints:

- The website must remain compatible with Hostinger Shared Hosting.
- The project must use HTML5, CSS3, Vanilla JavaScript, PHP 8.2, and MySQL.
- No application framework is planned for the initial version.
- The website must not depend on server-level features unavailable on shared hosting.
- File uploads must respect shared hosting size and storage limits.
- Performance must be optimized for shared hosting resources.
- All development must happen module by module.
- Inline CSS and inline JavaScript are not allowed.
- All dynamic SQL operations must use prepared statements.
- Security must be included from the beginning, not added as a final step.

---

## 12. Risks

Potential project risks include:

- Incomplete or delayed product data from the client.
- Large image or PDF files affecting website performance.
- Shared hosting limitations affecting upload size, email delivery, or execution time.
- Poorly structured product data making search and categorization difficult.
- Admin panel misuse if user permissions are not managed carefully.
- SEO impact if URLs, metadata, and page structure are not planned early.
- Security vulnerabilities if validation, prepared statements, CSRF protection, and XSS protection are not enforced.
- Future growth causing performance issues if database indexing and pagination are ignored.
- Inconsistent content formatting if CMS inputs are not controlled.

Risk mitigation must be considered during each module.

---

## 13. Success Criteria

The project will be considered successful when:

- The website is fully responsive and works across common devices.
- Public users can browse company information, products, brands, downloads, gallery, applications, industries, and contact pages.
- Users can search for relevant products or content.
- Users can submit inquiries successfully.
- Admin users can securely manage CMS content.
- Products, categories, brands, images, and PDFs can be expanded without structural limitations.
- The website uses SEO-friendly page structure and URLs.
- The website performs well on Hostinger Shared Hosting.
- Security protections are implemented for database queries, forms, sessions, uploads, and admin pages.
- Documentation exists for architecture, database, modules, testing, and deployment.
- The website is ready for production deployment.

---

## 14. Future Scope

Future expansion may include:

- Advanced product filters
- Product comparison
- Related products
- Download tracking
- Inquiry email notifications through SMTP
- WhatsApp inquiry integration
- Blog or knowledge base
- Case studies
- Testimonials
- Client logo section
- Multi-admin user roles
- Activity logs
- Advanced SEO sitemap generation
- Structured data for products and organization
- CRM integration
- ERP integration
- Inventory visibility
- Dealer or distributor portal
- Multi-language support
- Analytics dashboard

Future scope items should be added only after the core CMS and public website modules are stable.

---

## 15. Milestones

### Milestone 1 - Project Planning

- Project scope document
- Project context document
- Coding standards document
- AI development instructions
- Permanent project rules
- Initial module planning

### Milestone 2 - Architecture and Folder Structure

- Final folder structure
- File responsibility map
- Public/admin separation
- Includes strategy
- Uploads strategy
- Documentation structure

### Milestone 3 - Database Planning

- Database schema design
- Table relationships
- Naming conventions
- Index planning
- Security and backup considerations

### Milestone 4 - Core Backend Foundation

- Configuration structure
- Database connection approach
- Helper structure
- Validation strategy
- Security foundation

### Milestone 5 - Public Website Foundation

- Public layout
- Header and footer
- Navigation
- Home page structure
- Responsive base styling

### Milestone 6 - Admin Foundation

- Admin login
- Admin dashboard
- Authentication protection
- Admin layout
- Session security

### Milestone 7 - CMS Modules

- Categories
- Brands
- Products
- Product images
- PDF downloads
- Gallery
- Applications
- Industries

### Milestone 8 - Public Dynamic Pages

- Product listing
- Product details
- Brand pages
- Download pages
- Gallery pages
- Application pages
- Industry pages

### Milestone 9 - Inquiry and Search

- Contact inquiry form
- Product inquiry flow
- Search functionality
- Admin inquiry management

### Milestone 10 - SEO, Security, and Performance

- SEO metadata
- SEO-friendly URLs
- Security hardening
- Upload hardening
- Performance optimization
- Responsive testing

### Milestone 11 - Testing and Deployment

- Local testing on XAMPP
- Browser testing
- Admin testing
- Database testing
- Hostinger deployment documentation
- Production deployment checklist

---

## Acceptance Checklist

- Project scope is clearly defined.
- Business objectives are documented.
- Website objectives are documented.
- Target audience is identified.
- Functional scope is documented.
- Non functional scope is documented.
- Technical scope is documented.
- Deliverables are listed.
- Assumptions are identified.
- Constraints are identified.
- Risks are documented.
- Success criteria are measurable.
- Future scope is documented.
- Milestones are defined.
- No application source code is included in this document.
