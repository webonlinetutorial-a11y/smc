# Nepack Website

PHP 8.2 website foundation for Nepack, designed for XAMPP localhost development and Hostinger shared hosting deployment.

## Local Setup

1. Copy `.env.example` to `.env`.
2. Update database values in `.env`.
3. Run through XAMPP Apache at `http://localhost/nepack-website`.

The first implementation phase provides configuration loading, bootstrap initialization, session setup, safe error handling, helper functions, and a reusable PDO database connection foundation.

## Production Readiness

Before preparing a Hostinger release, copy `.env.production.example` to the production `.env` file and replace the placeholder domain and database credentials.

Run the local QA and deployment readiness checks with XAMPP PHP:

```powershell
C:\xampp\php\php.exe scripts\qa_check.php
C:\xampp\php\php.exe scripts\deploy_check.php
```

The deployment readiness check validates required release files, production-safe defaults, protected paths, upload execution protection, migration availability, environment templates, and the Phase 8 QA suite.

## Database Setup

Create the local database:

```powershell
C:\xampp\mysql\bin\mysql.exe -u root -e "CREATE DATABASE IF NOT EXISTS nepack_website CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci;"
```

Run authentication tables:

```powershell
C:\xampp\mysql\bin\mysql.exe -u root nepack_website --execute="source database/migrations/001_create_auth_tables.sql"
```

Run settings table:

```powershell
C:\xampp\mysql\bin\mysql.exe -u root nepack_website --execute="source database/migrations/002_create_settings_table.sql"
```

Run media library table:

```powershell
C:\xampp\mysql\bin\mysql.exe -u root nepack_website --execute="source database/migrations/003_create_media_files_table.sql"
```

Run categories table:

```powershell
C:\xampp\mysql\bin\mysql.exe -u root nepack_website --execute="source database/migrations/004_create_categories_table.sql"
```

Run remaining CMS tables:

```powershell
C:\xampp\mysql\bin\mysql.exe -u root nepack_website --execute="source database/migrations/005_create_remaining_cms_tables.sql"
```

Create or update the local admin user:

```powershell
C:\xampp\php\php.exe database\seeds\create_admin.php --name="Nepack Admin" --email="admin@nepack.local" --username="admin" --password="strong-password"
```
