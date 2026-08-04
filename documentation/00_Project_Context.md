Nepack Website - Project Context

1. Project Overview
   Project Name: Nepack Website
   The Nepack Website is a dynamic industrial automation company website designed to showcase products, categories, brands, downloadable catalogs, gallery items, and company information in a scalable and maintainable way.
   The website will be developed using a lightweight, shared-hosting-friendly technology stack: HTML5, CSS3, Vanilla JavaScript, PHP 8.2, and MySQL.
   The reference website, nepackassociates.co.in, indicates an industrial automation/product inquiry-focused business presence with product lines, inquiry forms, and contact-driven conversion as key elements.
   The new website should improve structure, scalability, administration, SEO, product discoverability, and long-term maintainability.
2. Business Goals
   The website should support Nepack’s business by:
   Presenting the company as a professional industrial automation supplier.
   Building trust with industrial buyers, engineers, purchase teams, and OEM clients.
   Showcasing unlimited products, categories, and brands.
   Making product discovery simple through search, categories, brands, and downloadable PDFs.
   Generating qualified inquiries through contact and product inquiry forms.
   Supporting future business growth without requiring frequent developer intervention.
   Allowing the internal team to manage website content through an admin panel.
3. Target Audience
   The primary audience includes:
   Industrial automation buyers
   Factory owners and plant managers
   Maintenance engineers
   Purchase departments
   OEM manufacturers
   Machine builders
   Electrical and pneumatic system integrators
   Dealers, distributors, and resellers
   Existing customers looking for catalogs, products, or contact details
   The website should feel practical, fast, trustworthy, and easy to navigate.
4. Website Goals
   The website should provide:
   Dynamic product listing
   Unlimited categories
   Unlimited brands
   Multiple images per product
   PDF catalog/download support
   Product search
   Gallery section
   SEO-friendly pages
   Contact inquiry forms
   Product-specific inquiry forms
   Admin panel for managing content
   Mobile-friendly responsive layout
   Fast loading on shared hosting
   Clean URL structure where possible
   Easy future expansion
   The website should not behave like a static brochure. It should function as a manageable product catalog and inquiry-generation platform.
5. Technology Stack
   Frontend
   HTML5
   CSS3
   Vanilla JavaScript
   The frontend should remain lightweight, dependency-free, and optimized for shared hosting.
   Backend
   PHP 8.2
   PHP will handle routing, database communication, form processing, admin authentication, content management, and dynamic page rendering.
   Database
   MySQL
   MySQL will store products, categories, brands, images, PDFs, gallery entries, inquiries, admin users, SEO metadata, and site settings.
   Hosting
   Hostinger Shared Hosting
   The project must be compatible with standard shared hosting limitations, including cPanel-style file management, PHP/MySQL support, and limited server-level customization.
   Local Development
   XAMPP Localhost
   Development and testing will happen locally using XAMPP with Apache, PHP, and MySQL.
   Editor
   VS Code
   VS Code will be used for development, file management, formatting, and project organization.
6. Development Workflow
   The recommended workflow:
   Develop locally using XAMPP.
   Maintain a clean folder structure from the beginning.
   Design the database schema before building admin features.
   Build public-facing pages and admin panel as separate concerns.
   Test all modules locally.
   Use sample product, category, brand, image, and PDF data during development.
   Validate form submissions and database operations.
   Optimize images and assets before upload.
   Deploy to Hostinger shared hosting.
   Test production URLs, forms, file uploads, and admin login after deployment.
   The project should be built incrementally, module by module, instead of as one large unstructured website.
7. Project Modules
   Public Website Modules
   Home page
   About page
   Product categories
   Product listing
   Product detail pages
   Brand pages
   Gallery
   PDF downloads/catalogs
   Search
   Contact page
   Inquiry forms
   SEO metadata rendering
   Mobile navigation
   Admin Panel Modules
   Admin login/logout
   Dashboard
   Manage products
   Manage categories
   Manage brands
   Manage product images
   Manage PDF downloads
   Manage gallery
   Manage inquiries
   Manage SEO fields
   Manage basic site settings
   Change password/admin profile
   Database Modules
   Products
   Categories
   Brands
   Product images
   Product PDFs
   Gallery images
   Contact inquiries
   Product inquiries
   Admin users
   SEO metadata
   Site settings
8. Coding Philosophy
   The project should follow a simple, disciplined PHP architecture suitable for shared hosting.
   Core principles:
   Keep the code readable and maintainable.
   Avoid unnecessary frameworks.
   Avoid overengineering.
   Use reusable components for header, footer, navigation, forms, and admin layouts.
   Separate public website logic from admin panel logic.
   Keep database access organized and consistent.
   Validate all user input.
   Sanitize all output.
   Use meaningful file names and folder names.
   Keep business logic separate from visual markup where practical.
   Prefer simple, stable solutions over complex abstractions.
   The goal is a professional, durable website that can be maintained easily by future developers.
9. Folder Philosophy
   The folder structure should separate responsibilities clearly.
   Recommended philosophy:
   Public pages should be easy to locate.
   Admin files should be isolated from public website files.
   Uploaded images and PDFs should have dedicated folders.
   Reusable includes should be centralized.
   Configuration files should be separated from page templates.
   CSS, JavaScript, images, and uploaded assets should not be mixed with backend logic.
   Database connection and helper functions should be reusable.
   Sensitive files should not be publicly editable.
   The structure should make it obvious where to place products, admin logic, uploads, frontend assets, and configuration.
10. Scalability Goals
    The website should be planned for:
    Unlimited products
    Unlimited categories
    Unlimited brands
    Unlimited product images
    Unlimited PDF downloads
    Growing gallery content
    Increasing inquiries
    SEO expansion through product and category pages
    Future content pages
    Better filtering and search in later versions
    Database relationships should support growth without requiring structural redesign every time a new product line, brand, or catalog is added.
11. Hosting Environment
    The project must work smoothly on Hostinger Shared Hosting.
    Hosting considerations:
    PHP 8.2 compatibility
    MySQL database support
    Apache server environment
    .htaccess support if clean URLs are used
    File upload limits
    Image and PDF storage management
    SSL certificate configuration
    Email sending limitations on shared hosting
    cPanel or Hostinger control panel deployment
    Regular database backups
    The system should avoid server features that may not be available on shared hosting.
12. Performance Goals
    The website should be fast and lightweight.
    Performance priorities:
    Optimized images
    Minimized CSS and JavaScript
    No unnecessary frontend libraries
    Pagination for large product lists
    Efficient database queries
    Search optimization
    Lazy loading for gallery and product images
    Compressed assets where possible
    Clean HTML structure
    Mobile-first responsive design
    Fast admin panel operations
    The website should load quickly even on average mobile networks.
13. Security Goals
    Security must be considered from the beginning.
    Key goals:
    Secure admin login
    Password hashing
    Session protection
    Input validation
    Output escaping
    Protection against SQL injection
    Protection against cross-site scripting
    File upload validation
    Restrict uploads to allowed image and PDF formats
    Prevent direct access to sensitive files
    Admin-only access for content management
    CSRF protection for important admin actions
    Secure database credentials
    Regular backups
    The admin panel should be treated as a sensitive business system, not just a convenience feature.
14. Future Expansion
    The website should be designed so future features can be added without rebuilding the foundation.
    Possible future additions:
    Product filters
    Product comparison
    Downloadable brand catalogs
    Blog or knowledge base
    Case studies
    Client logos
    Testimonials
    WhatsApp inquiry integration
    Email notification system
    SMTP integration
    Advanced SEO sitemap generation
    Google Analytics/Search Console setup
    Role-based admin users
    Inventory visibility
    Dealer/distributor portal
    Multi-location contact management
    API integration with CRM or ERP systems
    The first version should be simple and stable, while leaving room for the business to grow.
