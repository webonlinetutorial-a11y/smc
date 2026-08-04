Nepack Website - AI Development Instructions

1. Purpose
   This document defines the mandatory instructions for AI-assisted development of the Nepack Website project.
   It must be reused in every future Codex conversation related to this project.
   The AI must follow these instructions before generating, modifying, reviewing, or explaining any project files.
2. Core Development Rule
   The AI must never generate the entire project at once.
   The project must be developed module by module, with planning, architecture, implementation, documentation, and testing handled in a controlled sequence.
   Every module must be understandable, maintainable, secure, and scalable before moving to the next module.
3. Mandatory Planning Requirement
   The AI must never skip planning.
   Before generating or modifying any code, the AI must first provide:
   Module objective
   Required files
   Folder impact
   Database impact, if any
   Security considerations
   Performance considerations
   Testing approach
   The AI must not proceed directly to code generation unless the module plan is clear.
4. Architecture-First Approach
   The AI must always explain the architecture before implementation.
   For every feature or module, the AI must describe:
   Where the module belongs in the project
   How the frontend, backend, and database interact
   Which files are responsible for which behavior
   How reusable logic will be separated
   How the module fits future scalability
   How security is handled
   Architecture explanation is mandatory even for small modules.
5. Module-by-Module Development
   The website must be built in small, controlled modules.
   Recommended module order:
   Project folder structure
   Configuration and database connection
   Public layout structure
   Admin authentication
   Admin dashboard
   Category management
   Brand management
   Product management
   Product image management
   PDF download management
   Public product listing
   Product detail page
   Search
   Gallery
   Contact inquiry
   SEO management
   Performance optimization
   Security hardening
   Deployment documentation
   The AI must not jump ahead or combine too many modules unless explicitly instructed.
6. Reusable Code Requirement
   The AI must generate reusable code.
   Reusable parts should be separated wherever appropriate, including:
   Header
   Footer
   Navigation
   Database connection
   Helper functions
   Validation logic
   Form handling
   Admin layout
   Authentication checks
   Upload handling
   SEO metadata rendering
   Duplicate logic must be avoided.
7. PHP Security Requirements
   All PHP generated for this project must be secure by default.
   The AI must:
   Use PHP 8.2-compatible syntax
   Validate all input
   Escape all output
   Use prepared statements for database queries
   Hash passwords securely
   Protect admin-only pages
   Regenerate sessions after login
   Use CSRF protection for sensitive forms
   Restrict file uploads
   Validate file extensions and MIME types
   Prevent executable file uploads
   Avoid exposing database errors to users
   Disable detailed error output in production
   Keep configuration separated from public page logic
   The AI must never generate unsafe PHP patterns.
8. Prepared Statement Requirement
   All MySQL queries that use dynamic values must use prepared statements.
   The AI must not generate SQL by directly concatenating user input into queries.
   This applies to:
   Login forms
   Search
   Product filters
   Admin CRUD operations
   Contact inquiries
   Upload records
   Delete actions
   Update actions
   Public product pages
   Prepared statements are mandatory.
9. Frontend Separation Rules
   The AI must keep HTML, CSS, and JavaScript separate.
   The AI must not use:
   Inline CSS
   Inline JavaScript
   Inline event handlers
   Style attributes
   Script logic inside HTML pages unless structurally unavoidable and explicitly justified
   Required separation:
   HTML/PHP templates for structure
   CSS files for styling
   JavaScript files for behavior
   This improves maintainability, caching, readability, and scalability.
10. Clean Architecture Requirement
    The AI must follow clean architecture principles suitable for a PHP shared-hosting project.
    The project should separate:
    Configuration
    Database access
    Business logic
    Validation
    Page rendering
    Admin functionality
    Public website functionality
    Assets
    Uploads
    Documentation
    Each file should have a clear responsibility.
    The AI must avoid large mixed files that combine database queries, validation, business rules, markup, styling, and scripts without structure.
11. Documentation Requirement
    The AI must always create or update documentation when a module is added or changed.
    Documentation should explain:
    Module purpose
    Files created or modified
    Database tables involved
    Admin usage
    Public website impact
    Security notes
    Testing checklist
    Future improvement notes
    Documentation must be professional Markdown.
12. Folder Structure Explanation
    Whenever creating or modifying folders, the AI must explain the folder structure.
    The explanation must include:
    Folder name
    Purpose
    What type of files belong there
    Whether it is public-facing, admin-only, configuration-related, or upload-related
    The AI must not create unexplained folders.
13. File Purpose Explanation
    Whenever creating or modifying files, the AI must explain each file’s purpose.
    For every file, the AI should provide:
    File path
    Responsibility
    Whether it is public, admin, configuration, asset, upload, or documentation
    How it connects to the rest of the module
    The AI must avoid generating unexplained files.
14. Testing Checklist Requirement
    Every module must include a testing checklist.
    The checklist should cover:
    Functional testing
    Form validation
    Database testing
    Security testing
    Responsive layout testing
    Browser testing
    Error handling
    Admin permission testing, if relevant
    Performance testing, if relevant
    The AI must not consider a module complete until a testing checklist is provided.
15. Performance Requirement
    The AI must always consider performance.
    For every module, the AI should consider:
    Efficient database queries
    Proper indexes
    Pagination for large data sets
    Avoiding unnecessary queries
    Optimized images
    Lazy loading where useful
    Minimal CSS and JavaScript
    Browser caching
    Shared hosting limitations
    Mobile network performance
    Performance should be considered from the start, not added only at the end.
16. Scalability Requirement
    The AI must always think about future scalability.
    The website must support:
    Unlimited products
    Unlimited categories
    Unlimited brands
    Unlimited images
    Unlimited PDF downloads
    Growing inquiry records
    Growing gallery
    SEO expansion
    Future admin features
    Future filtering/search improvements
    Database design, folder structure, and reusable code should support growth.
17. Database Design Rules
    The AI must plan database changes before generating SQL.
    For every database-related module, the AI must explain:
    Tables needed
    Columns needed
    Relationships
    Indexes
    Data types
    Status fields
    Created and updated timestamps
    Deletion strategy
    Future scalability impact
    Database changes must be designed carefully before implementation.
18. Admin Panel Rules
    Admin panel development must be secure and modular.
    The AI must:
    Protect all admin pages behind authentication
    Use reusable admin layout files
    Validate every form submission
    Use CSRF protection
    Use prepared statements
    Escape admin output
    Add confirmation for destructive actions
    Restrict uploads
    Keep admin UI consistent
    Separate admin assets from public assets where useful
    Admin functionality must never be treated casually.
19. SEO Rules
    The AI must include SEO considerations in all public-facing modules.
    SEO planning should include:
    Page title
    Meta description
    Clean URL strategy
    Heading hierarchy
    Image alt text
    Canonical URL where needed
    Search-friendly product/category/brand names
    Future sitemap support
    Future structured data support
    SEO must be planned as part of the module, not added after launch.
20. Accessibility Rules
    The AI must consider accessibility in frontend modules.
    The AI should ensure:
    Semantic HTML
    Proper labels
    Keyboard-friendly navigation
    Clear focus states
    Sufficient contrast
    Meaningful alt text
    Clear error messages
    Buttons used for actions
    Links used for navigation
    Accessibility must be part of normal development quality.
21. Response Format for Future Codex Conversations
    For every future module request, the AI should respond in this order:
    Module Plan
    Architecture Explanation
    Folder Structure
    File Purpose Explanation
    Security Notes
    Performance Notes
    Scalability Notes
    Implementation
    Documentation Updates
    Testing Checklist
    If the user asks for planning only, the AI must stop before implementation.
    If the user asks for no code, the AI must generate documentation only.
22. Strict Restrictions
    The AI must never:
    Skip planning
    Generate the entire project in one response
    Use inline CSS
    Use inline JavaScript
    Mix unrelated modules together
    Use unsafe SQL queries
    Concatenate user input into SQL
    Ignore security
    Ignore documentation
    Ignore testing
    Create unexplained files or folders
    Build only for the current feature while blocking future scalability
    Assume shared hosting supports advanced server features without confirmation
23. Final Development Principle
    Every AI-generated change must make the Nepack Website more:
    Secure
    Maintainable
    Scalable
    Performant
    Search-friendly
    Accessible
    Easy to understand
    Easy to extend
    The website should be built patiently, module by module, with professional discipline from the first file onward.
