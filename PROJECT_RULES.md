# Nepack Website - Project Rules

## 1. Purpose

This document defines the permanent rules for the **Nepack Website** project.

These rules apply to every future development task, module, feature, documentation update, database change, admin panel change, frontend change, backend change, and deployment activity.

The AI must never violate these rules.

---

## 2. Permanent AI Rule

The AI must always follow this document before generating, modifying, reviewing, or explaining any project work.

If a future request conflicts with this document, the AI must clearly identify the conflict before proceeding.

The AI must not silently ignore these rules.

---

## 3. Technology Rules

The project must use only the approved technology stack.

### Frontend

- HTML5 only
- CSS3 only
- Vanilla JavaScript only
- No frontend frameworks unless explicitly approved in a future architecture decision
- No unnecessary external libraries

### Backend

- PHP 8.2
- Reusable PHP includes
- Secure PHP coding practices
- Shared-hosting-compatible PHP structure

### Database

- MySQL
- Proper relational structure
- Prepared statements for all dynamic queries

### Server

- Apache
- Hostinger Shared Hosting compatible
- XAMPP localhost compatible for development

### Hosting Compatibility

The project must remain compatible with:

- Hostinger Shared Hosting
- Apache server environment
- PHP 8.2
- MySQL database
- Standard file upload limits
- Standard `.htaccess` support where available

The AI must not assume access to VPS-only, cloud-only, or server-level features unless explicitly confirmed.

---

## 4. Development Rules

The project must be developed in a controlled and modular way.

The AI must:

- Never generate the entire project together
- Always generate one module at a time
- Always explain architecture first
- Always explain folder structure
- Always explain files
- Always explain database impact
- Always explain testing
- Always think about security before implementation
- Always think about performance before implementation
- Always think about future scalability before implementation

The AI must not combine unrelated modules into one development step.

---

## 5. Module Development Rule

Every module must be planned before implementation.

Each module must include:

- Architecture
- Folder structure
- Database design or database impact
- Files to be created or modified
- User flow or admin flow
- Security considerations
- Performance considerations
- Testing checklist
- Acceptance checklist

The AI must not treat any module as complete until these items are covered.

---

## 6. Coding Rules

All code generated for the project must be clean, reusable, secure, and maintainable.

The AI must:

- Use reusable PHP includes
- Avoid duplicated code
- Separate layout, logic, assets, and configuration
- Keep files focused on a clear responsibility
- Use prepared statements only
- Use CSRF protection for sensitive forms
- Use XSS protection for all output
- Validate all input
- Sanitize data before storage where appropriate
- Escape data before display
- Use SEO-friendly URLs where possible
- Build responsive layouts
- Use optimized WebP images where practical
- Use compressed PDF files

The AI must not:

- Use inline CSS
- Use inline JavaScript
- Use inline event handlers
- Mix large amounts of PHP logic directly inside page markup
- Duplicate database logic across many files
- Concatenate user input directly into SQL
- Expose sensitive errors to users
- Create unexplained files or folders

---

## 7. HTML Rules

HTML must follow professional HTML5 standards.

The AI must:

- Use semantic HTML5 elements
- Use proper heading hierarchy
- Use accessible form labels
- Use meaningful image alt text
- Use valid HTML structure
- Use links for navigation
- Use buttons for actions
- Keep HTML focused on structure

The AI must not:

- Use inline CSS
- Use inline JavaScript
- Use duplicate IDs
- Use non-semantic markup where semantic markup is appropriate

---

## 8. CSS Rules

CSS must follow professional CSS3 standards.

The AI must:

- Use external CSS files
- Keep CSS organized and readable
- Use responsive design
- Use mobile-first styling where practical
- Use reusable classes
- Avoid unnecessary repetition
- Optimize for maintainability

The AI must not:

- Use inline styles
- Overuse `!important`
- Create overly specific selectors without reason
- Leave unused CSS

---

## 9. JavaScript Rules

JavaScript must use Vanilla JavaScript only.

The AI must:

- Use external JavaScript files
- Keep JavaScript modular and readable
- Use event listeners
- Validate client-side forms where useful
- Keep backend validation mandatory
- Avoid unnecessary global variables
- Handle errors gracefully

The AI must not:

- Use inline JavaScript
- Use inline event handlers
- Depend on JavaScript for critical security
- Add external JavaScript frameworks without approval

---

## 10. PHP Rules

PHP must be secure, reusable, and compatible with PHP 8.2.

The AI must:

- Use reusable includes
- Use prepared statements
- Validate all request data
- Escape output
- Hash passwords securely
- Protect admin pages with authentication
- Use secure sessions
- Use CSRF tokens for sensitive actions
- Keep configuration separate
- Keep database logic reusable
- Handle errors safely

The AI must not:

- Write unsafe SQL
- Display raw database errors in production
- Store plain text passwords
- Trust client-side validation
- Allow unrestricted uploads

---

## 11. MySQL Rules

Database design must be scalable and consistent.

The AI must:

- Use lowercase table names
- Use lowercase column names
- Use underscores for multi-word names
- Use primary keys
- Use indexes for searchable fields
- Use appropriate data types
- Use timestamps where useful
- Plan relationships before creating tables
- Explain database changes before implementation

The AI must not:

- Use vague table names
- Use reserved SQL keywords as column names
- Store duplicate data unnecessarily
- Create database changes without explaining their purpose

---

## 12. Security Rules

Security is mandatory for every module.

The AI must include:

- Prepared statements
- CSRF protection
- XSS protection
- Input validation
- Output escaping
- Secure password hashing
- Secure admin sessions
- File upload validation
- Restricted upload types
- Safe error handling
- HTTPS readiness

Admin panel pages must always be protected.

Public forms must always be validated and protected against abuse where practical.

---

## 13. SEO Rules

Public-facing pages must be SEO-friendly.

The AI must consider:

- SEO-friendly URLs
- Unique page titles
- Unique meta descriptions
- Proper heading structure
- Descriptive product URLs
- Descriptive category URLs
- Descriptive brand URLs
- Image alt text
- Canonical URLs where needed
- Future sitemap support
- Future structured data support

SEO must be planned during module development, not added only at the end.

---

## 14. Responsive Design Rules

The website must work properly on:

- Mobile phones
- Tablets
- Laptops
- Desktop screens

The AI must ensure:

- Flexible layouts
- Readable typography
- Usable navigation
- Touch-friendly controls
- Optimized images
- No broken layouts on small screens

Responsive design is mandatory for all public pages and admin pages.

---

## 15. Image Rules

Images must be optimized and named professionally.

The AI must:

- Prefer WebP images where practical
- Use compressed images
- Use descriptive image names
- Use lowercase file names
- Use hyphens between words
- Avoid spaces and special characters
- Add meaningful alt text for public images

Image naming examples:

- `smc-air-cylinder.webp`
- `industrial-control-panel.webp`
- `brand-smc-logo.webp`
- `gallery-automation-system.webp`

---

## 16. PDF Rules

PDF files must be optimized and named professionally.

The AI must:

- Use compressed PDF files
- Use lowercase file names
- Use hyphens between words
- Include product, brand, or catalog context
- Avoid spaces and special characters

PDF naming examples:

- `smc-pneumatic-valves-catalog.pdf`
- `industrial-sensors-datasheet.pdf`
- `nepack-product-brochure.pdf`

---

## 17. Folder Naming Rules

Folders must be named clearly and consistently.

The AI must:

- Use lowercase folder names
- Avoid spaces
- Avoid special characters
- Use short descriptive names
- Group files by responsibility

Folder naming examples:

- `admin`
- `assets`
- `includes`
- `uploads`
- `products`
- `categories`
- `brands`
- `downloads`
- `gallery`
- `docs`

---

## 18. File Naming Rules

Files must be named clearly and consistently.

The AI must:

- Use lowercase file names
- Avoid spaces
- Avoid special characters
- Use descriptive names
- Keep extensions lowercase

File naming examples:

- `index.php`
- `product-detail.php`
- `category-list.php`
- `brand-detail.php`
- `main.css`
- `admin.css`
- `main.js`
- `admin.js`
- `database.php`
- `auth.php`

---

## 19. Variable Naming Rules

Variables must be meaningful and consistent.

The AI must:

- Use camelCase for PHP variables
- Use camelCase for JavaScript variables
- Use descriptive names
- Avoid unclear abbreviations
- Use boolean names that read clearly

Variable naming examples:

- `productName`
- `categoryId`
- `brandId`
- `imagePath`
- `pdfFileName`
- `isActive`
- `hasPermission`

---

## 20. Function Naming Rules

Functions must describe the action they perform.

The AI must:

- Use camelCase for PHP functions
- Use camelCase for JavaScript functions
- Start function names with verbs where practical
- Keep functions focused on one responsibility

Function naming examples:

- `getProducts`
- `createProduct`
- `updateCategory`
- `deleteBrand`
- `validateInquiry`
- `uploadProductImage`
- `generateSeoSlug`

---

## 21. Database Naming Rules

Database names, table names, and column names must be consistent.

The AI must:

- Use lowercase names
- Use underscores for multi-word names
- Use plural table names where appropriate
- Use descriptive column names
- Use consistent ID naming

Database naming examples:

- `products`
- `categories`
- `brands`
- `product_images`
- `product_pdfs`
- `contact_inquiries`
- `created_at`
- `updated_at`
- `is_active`

---

## 22. Documentation Rules

Every module must include documentation.

Documentation must be written in professional Markdown.

Every module document must include:

- Architecture
- Folder structure
- Database
- Files
- Flow
- Testing
- Acceptance checklist

Documentation must explain what was built, why it exists, how it works, and how it should be tested.

The AI must update documentation whenever a module changes.

---

## 23. Required Module Output Format

For every future module, the AI must provide the following sections:

1. Architecture
2. Folder Structure
3. Database
4. Files
5. Flow
6. Security
7. Performance
8. Testing
9. Acceptance Checklist

If implementation is requested, code generation must happen only after these sections are explained.

If the user requests documentation only, the AI must not generate code.

---

## 24. Testing Rules

Every module must include a testing checklist.

Testing must cover:

- Functional behavior
- Form validation
- Database operations
- Security checks
- Responsive layout
- Browser compatibility
- Error handling
- Admin access control, if applicable
- Performance considerations
- SEO checks, if applicable

The AI must not mark a module complete without testing guidance.

---

## 25. Acceptance Checklist Rules

Every module must include an acceptance checklist.

The checklist must define clear completion criteria, such as:

- Module architecture is explained
- Folder structure is explained
- Files are explained
- Database impact is explained
- Security requirements are covered
- Performance requirements are covered
- Testing checklist is provided
- Documentation is updated
- Module works as intended

Acceptance criteria must be specific enough for review.

---

## 26. Final Rule

The Nepack Website must always be developed with professional discipline.

Every decision must support:

- Security
- Maintainability
- Scalability
- Performance
- SEO
- Accessibility
- Shared hosting compatibility
- Clear documentation

The AI must treat this document as the permanent source of project rules.
