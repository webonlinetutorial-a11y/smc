# Adding New Products Checklist

## Document Control

| Field | Details |
|---|---|
| Project | Nepack Website |
| Document Title | Adding New Products Checklist |
| Technology Stack | HTML5, CSS3, Vanilla JavaScript, PHP 8.2, MySQL |
| Development Environment | XAMPP Localhost |
| Production Environment | Hostinger Shared Hosting |
| Architecture Approach | Modular, Server Side Rendering, SEO Friendly, Mobile First, CMS Based |
| Document Status | Draft |
| Owner | DevOps Architecture |
| Last Updated | August 31, 2026 |

## Revision History

| Version | Date | Description | Author |
|---|---|---|---|
| 1.0 | August 31, 2026 | Initial Adding New Products Checklist | DevOps Architecture |

## 1. Introduction

This document defines the step-by-step process for adding a new product to the live Nepack Website (Bharat Mill), covering both supported approaches: a CMS-managed product entry, and a fully custom static product detail page.

## 2. Two Ways to Add a Product

The website supports two different methods depending on how much content and design the product needs.

| Method | Use When | Result |
|---|---|---|
| A. CMS Product Entry | Product only needs a name, short description, and an enquiry link inside an existing category | Appears as a simple card on `category.php`, no custom layout |
| B. Custom Static Page | Product needs its own full page with images, specifications, features, tables (like Electric Actuators, Gas Generator, etc.) | A dedicated page with full design control |

Method B requires code files and cannot be done from the Admin Panel alone — a developer must create the page files.

## 3. Method A — CMS Product Entry (No Coding Required)

Use this when a quick, simple listing is enough.

1. Log in to `/admin/login.php`.
2. If the product needs a new top-level category card on `products.php`, go to **Categories** first:
   - Fill Name, Slug, Status = Active, Display Order, Image Path (e.g. `images/your-image.webp`), Description.
   - Click **Create Category**. It will appear immediately on the `products.php` category grid.
3. Go to **Products**:
   - Select the Category created above (or an existing one).
   - Fill Product Name, Slug, Short Description, Status = **Published** (Draft will not show publicly).
   - Click **Create**.
4. The product will appear on `category.php?category=<slug>` under its category, with an enquiry link.

## 4. Method B — Custom Static Product Page (Coding Required)

Use this for a product that needs its own fully designed detail page.

### Step 1 — Prepare the Image(s)

- Optimize/compress the image (WebP preferred) before uploading.
- On production: upload the image into `assets/images/` (or a relevant subfolder, e.g. `assets/images/Product-Name/`) using Hostinger **File Manager** or an **FTP client** (e.g. FileZilla).
- On local development: place the image in the same relative path under the local `assets/images/` folder.

### Step 2 — Create the View File

Create `app/views/automation-product-name.php`. This file contains the actual page content — heading, description, image(s), features, specifications, and the enquiry button. Use an existing file such as `app/views/automation-electric-actuators.php` as a starting template and edit its content.

### Step 3 — Create the Root Controller File

Create `automation-product-name.php` in the project root. This is a short file that only sets the page title, meta description, canonical URL, and breadcrumbs, then calls `renderView()`. Copy an existing file such as `automation-electric-actuators.php` in the root and update the title, description, and breadcrumb labels.

### Step 4 — Link the Product into a Category Grid

Add an entry for the new product into the relevant hardcoded array in `app/views/products.php` (Product Category grid, New Products section, or Featured Products carousel, depending on where it should appear), pointing to the new page created in Step 3.

### Step 5 — Test Locally

- Open the new page on the local XAMPP environment and confirm it loads with no errors.
- Confirm the image renders correctly.
- Confirm the enquiry/contact links work.
- Confirm the new card appears correctly on `products.php`.

### Step 6 — Deploy to Production

1. Commit and push the new/changed files to the Git repository.
2. Upload the same files to the Hostinger production server using File Manager or FTP:
   - The new image file(s) in `assets/images/`.
   - The new `app/views/automation-product-name.php` file.
   - The new root `automation-product-name.php` file.
   - The updated `app/views/products.php` (with the new card entry).
3. Verify the live page loads correctly, with no broken images or console errors, before announcing the new product.

## 5. Quick Reference

| Task | File(s) Involved | Where |
|---|---|---|
| Add category card (CMS) | None (Admin Panel only) | `/admin/categories.php` |
| Add simple product under a category (CMS) | None (Admin Panel only) | `/admin/products.php` |
| Add product image (custom page) | Image file | `assets/images/` |
| Add custom product content | View file | `app/views/automation-product-name.php` |
| Add custom product routing/meta | Controller file | root `automation-product-name.php` |
| Show custom product on Products page | Array entry | `app/views/products.php` |

## 6. Notes

- CMS product entries and custom static product pages are independent systems. A CMS product does not automatically get a custom detail page, and a custom static page does not appear in the Admin Panel Products list.
- Always test a new product page locally before uploading it to the production server.
- Keep image file sizes optimized (WebP format preferred) to protect page load performance.
