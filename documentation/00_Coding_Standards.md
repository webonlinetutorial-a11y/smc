Nepack Website - Coding Standards

1. Purpose
   This document defines the coding standards for the Nepack Website project.
   The goal is to keep the codebase clean, consistent, secure, maintainable, and scalable across HTML, CSS, JavaScript, PHP, and MySQL.
   These standards should be followed by all developers working on the project.
2. HTML Standards
   Use valid HTML5.
   Use semantic tags wherever appropriate.
   Keep markup clean, readable, and properly indented.
   Use headings in logical order.
   Use meaningful alt text for images.
   Avoid inline CSS and inline JavaScript.
   Use lowercase tag names and attribute names.
   Use double quotes for attribute values.
   Keep forms accessible with labels.
   Use buttons for actions and links for navigation.
   Do not duplicate IDs on the same page.
   Keep HTML focused on structure, not styling or behavior.
3. CSS Standards
   Use external CSS files.
   Keep styles organized by purpose or section.
   Use readable class names.
   Avoid overly specific selectors.
   Avoid unnecessary !important.
   Use consistent spacing and indentation.
   Prefer reusable utility classes where helpful.
   Keep responsive styles organized.
   Use mobile-first responsive design.
   Use CSS variables for common colors, spacing, and typography values.
   Avoid unused CSS.
   Keep animations subtle and performance-friendly.
   Do not place large layout logic inside inline styles.
4. JavaScript Standards
   Use Vanilla JavaScript only unless a library is approved.
   Keep JavaScript in external files.
   Use modern JavaScript syntax supported by target browsers.
   Use meaningful function and variable names.
   Avoid global variables where possible.
   Keep DOM selectors clear and specific.
   Validate forms on the client side, but always validate again in PHP.
   Handle errors gracefully.
   Avoid unnecessary browser alerts.
   Keep JavaScript behavior separate from HTML structure.
   Use event listeners instead of inline event attributes.
   Avoid duplicating business logic from the backend.
   Keep scripts small, focused, and easy to debug.
5. PHP Standards
   Use PHP 8.2-compatible syntax.
   Keep PHP files readable and consistently formatted.
   Separate configuration, database connection, helpers, public pages, and admin logic.
   Use prepared statements for database queries.
   Validate all incoming data.
   Sanitize output before displaying it.
   Use password hashing for admin credentials.
   Do not hardcode sensitive credentials in public files.
   Keep reusable functions in dedicated helper files.
   Avoid mixing too much business logic directly inside page templates.
   Use clear error handling.
   Disable detailed error display in production.
   Use sessions securely for admin authentication.
   Keep file upload handling strict and controlled.
6. MySQL Standards
   Use clear and descriptive table names.
   Use lowercase table and column names.
   Use underscores for multi-word names.
   Use appropriate data types.
   Use primary keys on all tables.
   Use foreign keys where practical.
   Add indexes for frequently searched or filtered columns.
   Avoid storing duplicate data.
   Store timestamps for created and updated records.
   Use consistent naming for status fields.
   Avoid using reserved SQL keywords as column names.
   Keep database structure normalized unless there is a clear reason not to.
   Back up the database before major changes.
7. Folder Naming
   Use lowercase folder names.
   Use hyphens or underscores consistently.
   Prefer short, descriptive names.
   Avoid spaces in folder names.
   Group files by responsibility.
   Recommended naming style:
   admin
   assets
   includes
   uploads
   products
   categories
   brands
   downloads
   gallery
8. File Naming
   Use lowercase file names.
   Use hyphens for multi-word public-facing files.
   Use underscores for backend helper files if preferred by the project convention.
   Avoid spaces and special characters.
   File names should describe their purpose clearly.
   Keep extensions lowercase.
   Examples:
   product-detail.php
   contact.php
   main.css
   admin.js
   db_connection.php
   form_helpers.php
9. Class Naming
   CSS Classes
   Use lowercase names.
   Use hyphens between words.
   Use names based on purpose, not visual appearance only.
   Avoid vague names.
   Examples:
   product-card
   category-list
   brand-logo
   inquiry-form
   admin-table
   PHP Classes
   If PHP classes are used:
   Use PascalCase.
   Use descriptive names.
   One class should have one clear responsibility.
   Examples:
   ProductManager
   CategoryRepository
   InquiryService
10. Function Naming
    Use camelCase for PHP and JavaScript functions.
    Function names should describe the action being performed.
    Use verbs where possible.
    Avoid unclear abbreviations.
    Keep functions focused on one task.
    Examples:
    getProducts
    saveInquiry
    validateEmail
    uploadProductImage
    deleteCategory
11. Variable Naming
    Use camelCase for PHP and JavaScript variables.
    Use meaningful names.
    Avoid single-letter names except in very small loops.
    Boolean variables should read clearly.
    Examples:
    productName
    categoryId
    brandList
    isActive
    hasImages
    searchKeyword
12. Image Naming
    Use lowercase names.
    Use hyphens between words.
    Include meaningful product, brand, or gallery context.
    Avoid spaces and special characters.
    Avoid generic names like image1.jpg.
    Use optimized file formats.
    Examples:
    smc-air-cylinder-front.jpg
    control-panel-installation.jpg
    brand-smc-logo.png
    gallery-factory-automation-line.webp
13. PDF Naming
    Use lowercase names.
    Use hyphens between words.
    Include product, brand, or catalog context.
    Avoid spaces and special characters.
    Include version or year if relevant.
    Examples:
    smc-pneumatic-valves-catalog.pdf
    industrial-sensors-datasheet.pdf
    nepack-product-brochure-2026.pdf
14. Comment Standards
    Comments should explain why something exists, not obvious behavior.
    Avoid excessive comments.
    Keep comments short and useful.
    Update comments when code changes.
    Remove outdated or misleading comments.
    Use comments for complex logic, security-sensitive sections, and non-obvious decisions.
    Comments should support maintainability, not compensate for unclear code.
15. Documentation Standards
    Keep project documentation in Markdown.
    Use clear headings and short sections.
    Document setup steps, database structure, deployment process, and admin usage.
    Update documentation when functionality changes.
    Keep documentation professional and understandable for future developers.
    Avoid undocumented business rules.
    Maintain separate documents for architecture, coding standards, database design, and deployment if needed.
16. Security Standards
    Validate all form input on both client and server.
    Escape all output displayed in HTML.
    Use prepared statements for all database queries.
    Hash passwords securely.
    Protect admin routes with authentication.
    Regenerate sessions after login.
    Restrict file uploads by type, size, and extension.
    Rename uploaded files before saving.
    Do not allow executable file uploads.
    Store database credentials outside public logic when possible.
    Disable detailed errors in production.
    Use HTTPS in production.
    Add CSRF protection for admin forms.
    Limit login attempts where possible.
    Keep backups of database and uploaded files.
17. Git Commit Standards
    Use clear and meaningful commit messages.
    Recommended format:
    feat: add product management module
    fix: resolve inquiry form validation issue
    style: update product card spacing
    refactor: simplify database helper functions
    docs: add deployment instructions
    security: improve admin session handling
    perf: optimize product image loading
    Commit guidelines:
    Keep commits focused.
    Do not mix unrelated changes.
    Write messages in lowercase after the type.
    Use present tense.
    Avoid vague messages like update files or final changes.
18. Performance Standards
    Optimize all images before upload.
    Use modern image formats where appropriate.
    Keep CSS and JavaScript lightweight.
    Avoid unnecessary dependencies.
    Use pagination for large product lists.
    Index searchable database columns.
    Avoid loading all product images on listing pages.
    Lazy-load images below the fold.
    Minimize database queries per page.
    Cache reusable data where appropriate.
    Compress assets on production hosting if supported.
    Keep pages fast on mobile networks.
19. SEO Standards
    Use unique page titles.
    Use unique meta descriptions.
    Use clean and descriptive URLs where possible.
    Use proper heading hierarchy.
    Add alt text to all meaningful images.
    Use readable product and category names.
    Create SEO fields for products, categories, brands, and pages.
    Avoid duplicate content.
    Use canonical URLs where needed.
    Generate XML sitemap in future versions.
    Maintain robots.txt.
    Ensure pages are mobile-friendly.
    Use structured data where useful in future phases.
20. Accessibility Standards
    Use semantic HTML.
    Ensure sufficient color contrast.
    Provide alt text for images.
    Use labels for form fields.
    Make navigation keyboard accessible.
    Do not rely only on color to communicate meaning.
    Use readable font sizes.
    Keep focus states visible.
    Ensure buttons and links are clearly identifiable.
    Avoid auto-playing distracting media.
    Keep forms easy to understand.
    Display clear validation messages.
21. Coding Best Practices
    Keep code simple and readable.
    Follow the existing project structure.
    Reuse components and helper functions.
    Avoid duplicate logic.
    Keep each file focused on a clear responsibility.
    Validate data before processing.
    Fail safely when errors occur.
    Do not expose technical errors to users.
    Test changes locally before deployment.
    Keep frontend, backend, and database responsibilities clear.
    Prefer maintainability over cleverness.
    Build for future developers as well as current requirements.
