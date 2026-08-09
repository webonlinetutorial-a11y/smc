# Nepack Website

PHP 8.2 website foundation for Nepack, designed for XAMPP localhost development and Hostinger shared hosting deployment.

## Local Setup

1. Copy `.env.example` to `.env`.
2. Update database values in `.env`.
3. Run through XAMPP Apache at `http://localhost/nepack-website`.

The first implementation phase provides configuration loading, bootstrap initialization, session setup, safe error handling, helper functions, and a reusable PDO database connection foundation.

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

Create or update the local admin user:

```powershell
C:\xampp\php\php.exe database\seeds\create_admin.php --name="Nepack Admin" --email="admin@nepack.local" --username="admin" --password="strong-password"
```
