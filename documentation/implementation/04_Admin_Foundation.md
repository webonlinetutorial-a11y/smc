# Admin Foundation

## Document Control

| Field | Details |
|---|---|
| Project | Nepack Website |
| Document Title | Admin Foundation |
| Phase | Implementation Phase 4 |
| Technology Stack | HTML5, CSS3, Vanilla JavaScript, PHP 8.2, MySQL |
| Development Environment | XAMPP Localhost |
| Production Environment | Hostinger Shared Hosting |
| Architecture Approach | Modular, OOP PHP, Server Side Rendering, CMS Based, SEO Friendly |
| Document Status | Draft |
| Owner | Implementation Architecture |
| Last Updated | August 6, 2026 |

## Revision History

| Version | Date | Description | Author |
|---|---|---|---|
| 1.0 | August 6, 2026 | Initial Admin Foundation implementation planning document | Implementation Architecture |

## 1. Introduction

This document defines the implementation plan for the Admin Foundation phase of the Nepack Website.

Admin Foundation builds on the completed Bootstrap, Core Framework, and Authentication phases. Its purpose is to establish the protected Admin Panel structure, shared admin layout, dashboard foundation, navigation, reusable admin UI patterns, and base CMS management experience.

This document is an implementation planning document only. It does not generate code and does not change the approved architecture.

## 2. Objectives

The Admin Foundation phase is designed to:

- Establish protected Admin Panel structure.
- Create a consistent admin layout foundation.
- Prepare dashboard entry after login.
- Prepare admin navigation.
- Prepare shared admin header, sidebar, footer, and message areas.
- Prepare reusable admin table and form patterns.
- Prepare CMS module entry points.
- Keep admin pages secure, responsive, and maintainable.
- Ensure future CMS modules can be added consistently.

## 3. Scope

Included:

- Protected admin layout foundation.
- Admin dashboard shell.
- Admin navigation structure.
- Shared admin includes.
- Reusable admin UI conventions.
- Admin feedback message pattern.
- Admin page structure standards.
- Placeholder entry points for future CMS modules where useful.

Excluded:

- Full Product CRUD.
- Full Brand CRUD.
- Full Category CRUD.
- Full Gallery CRUD.
- Full Download CRUD.
- Full SEO management.
- File upload implementation.
- Advanced dashboard analytics.
- Role and permission management UI beyond authentication protection.

## 4. Architecture

The Admin Foundation should define the base structure that all future Admin Panel modules use.

Admin pages should follow a consistent lifecycle:

- Bootstrap loads.
- Authentication guard runs.
- Admin layout includes load.
- Page-specific controller or service prepares data.
- Admin content renders.
- Shared messages and footer render.

The Admin Foundation must not duplicate authentication logic. It should consume authentication helpers and guards created in the Authentication phase.

The Admin Panel must remain server-side rendered and compatible with Hostinger Shared Hosting.

## 5. Folder Structure

The Admin Foundation should use approved folders:

- `admin`
- `includes`
- `app/controllers`
- `app/models`
- `app/services`
- `app/helpers`
- `assets/css`
- `assets/js`

Admin-specific assets should be clearly separated from public website assets where practical.

Recommended admin areas:

- Dashboard
- Products
- Categories
- Brands
- Gallery
- Downloads
- Inquiries
- SEO
- Users
- Settings

Only foundation-level placeholders should be introduced in this phase. Full module logic belongs to later phases.

## 6. Planned Files

The following files are planned conceptually for this phase.

| File | Purpose |
|---|---|
| `admin/dashboard.php` | Protected admin dashboard entry page. |
| `admin/index.php` | Optional admin landing redirect or entry handler. |
| `includes/admin-header.php` | Shared admin document header and layout opening. |
| `includes/admin-sidebar.php` | Shared admin navigation/sidebar. |
| `includes/admin-topbar.php` | Shared admin topbar where applicable. |
| `includes/admin-footer.php` | Shared admin footer and layout closing. |
| `includes/admin-messages.php` | Shared success, error, warning, and info message rendering. |
| `app/controllers/AdminController.php` | Coordinates dashboard or admin foundation requests. |
| `app/services/AdminDashboardService.php` | Prepares dashboard summary data where required. |
| `assets/css/admin.css` | Admin panel stylesheet. |
| `assets/js/admin.js` | Admin panel JavaScript enhancements. |

Exact files should be created only when needed and should remain aligned with approved architecture.

## 7. Admin Flow

The conceptual Admin Panel flow is:

```text
Admin Requests Protected Page

↓

Bootstrap Loaded

↓

Authentication Guard Checked

↓

Admin Layout Loaded

↓

Admin Navigation Rendered

↓

Page Data Prepared

↓

Admin Content Rendered

↓

Messages Rendered

↓

Admin Footer Rendered
```

All future CMS modules should follow this pattern.

## 8. Dashboard Foundation

The dashboard should provide a simple protected landing page after login.

Initial dashboard responsibilities:

- Confirm successful admin access.
- Show basic CMS navigation.
- Provide entry points to future modules.
- Display lightweight summary areas where available.
- Avoid complex analytics in this phase.

Future dashboard enhancements may include counts for products, brands, downloads, gallery items, inquiries, and recent activity.

## 9. Admin Navigation Strategy

Admin navigation should be predictable and module-based.

Navigation should include approved CMS areas:

- Dashboard
- Products
- Categories
- Brands
- Gallery
- Downloads
- Inquiries
- SEO
- Users
- Settings
- Logout

Navigation should support:

- Active state.
- Clear labels.
- Responsive behavior.
- Protected access.
- Future role-based visibility where approved.

## 10. UI Strategy

Admin UI should be practical, clear, and work-focused.

UI expectations:

- Clean layout.
- Clear hierarchy.
- Consistent navigation.
- Readable tables.
- Accessible forms.
- Clear buttons.
- Consistent message areas.
- Mobile and tablet usability.
- No inline CSS.
- No inline JavaScript.

Admin UI should reference the approved Design Documentation and Frontend Architecture.

## 11. Database Impact

Admin Foundation may read lightweight dashboard summary data if available, but it should not create new business tables directly.

Database dependencies:

- `users`
- `roles`
- future CMS tables when implemented

No CMS CRUD tables should be added solely for this phase unless already required by Authentication or Core Framework.

## 12. Security Considerations

Admin Foundation is part of the protected system area.

Security expectations:

- Every admin page must require authentication.
- Unauthorized users must be redirected or blocked.
- Admin pages must not be indexed.
- Admin output must be escaped.
- Admin forms must support CSRF protection in future module actions.
- Sensitive errors must not be displayed.
- Navigation must not grant access by visibility alone.
- Future role-based permissions should be supported conceptually.

## 13. Performance Considerations

Admin Foundation should stay lightweight.

Performance expectations:

- Dashboard should not load heavy datasets.
- Navigation should be reusable.
- Shared includes should avoid duplicated markup.
- Admin CSS and JavaScript should be loaded predictably.
- Future tables should use pagination where data may grow.
- Compatible with Hostinger Shared Hosting.

## 14. Testing Checklist

- [ ] Admin dashboard requires authentication.
- [ ] Unauthenticated users cannot access admin pages.
- [ ] Authenticated admin can access dashboard.
- [ ] Shared admin header loads correctly.
- [ ] Shared admin sidebar or navigation loads correctly.
- [ ] Shared admin footer loads correctly.
- [ ] Logout link is available.
- [ ] Admin navigation links are visible and clear.
- [ ] Active navigation state works where applicable.
- [ ] Admin layout is responsive.
- [ ] Admin messages render correctly.
- [ ] Admin output is escaped.
- [ ] Admin pages are not indexable.
- [ ] No CMS business logic is implemented prematurely.
- [ ] Admin foundation works on XAMPP.
- [ ] Admin foundation remains compatible with Hostinger Shared Hosting.

## 15. Acceptance Checklist

- [ ] Admin Foundation architecture is approved.
- [ ] Admin dashboard shell is available.
- [ ] Admin shared includes are available.
- [ ] Admin navigation is available.
- [ ] Admin message pattern is available.
- [ ] Admin layout is protected by authentication.
- [ ] Admin UI follows approved design direction.
- [ ] Admin CSS and JavaScript are external.
- [ ] No unrelated CMS CRUD logic is included.
- [ ] Security checks pass.
- [ ] Local verification is completed.
- [ ] Admin Foundation phase is committed to Git.

## 16. Next Phase

After Admin Foundation is completed and verified, the next phase should be:

`05_Frontend_Foundation.md`

The Frontend Foundation phase should define public layout includes, header, navigation, footer, base CSS, base JavaScript, page rendering pattern, and public website structure.

## 17. Related Documents

This document should be used together with:

- `99_Project_Freeze_v1.0.md`
- `00_Project_Context.md`
- `00_AI_Instructions.md`
- `00_Coding_Standards.md`
- `implementation/01_Project_Bootstrap.md`
- `implementation/02_Core_Framework.md`
- `implementation/03_Authentication.md`
- `backend/01_Backend_Architecture.md`
- `backend/03_Authentication_Architecture.md`
- `backend/04_Security_Architecture.md`
- `frontend/09_Component_Architecture.md`
- `frontend/10_CSS_Architecture.md`
- `frontend/11_JavaScript_Architecture.md`
- `testing/02_Test_Cases.md`

**End of Document**
