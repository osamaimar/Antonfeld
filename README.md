## Antonfeld – WordPress + Elementor Site Documentation

This repository contains the source for the Antonfeld website built on WordPress, using the Astra theme and Elementor/Elementor Pro for page building.

### At a Glance
- **WordPress**: classic install under `app/public`
- **Theme**: `astra` (child theme not present; customizations live via Elementor and Astra settings)
- **Builder**: Elementor + Elementor Pro
- **Key Plugins**: Elementor, Elementor Pro, Astra (theme), UpdraftPlus (backups), All‑in‑One WP Migration (migrations), Disable Gutenberg, Site Mailer (custom plugin)
- **Site URL (local)**: `http://localhost:10104`
- **Permalinks**: `/%postname%/`

---

### Contents
1. Prerequisites
2. Local Development Setup
3. Project Structure
4. Configuration
5. Database and Content
6. Theme and Styling
7. Elementor Usage
8. Plugins
9. Backups and Migrations
10. Deployments and Environments
11. Maintenance Tasks
12. Troubleshooting

---

### 1) Prerequisites
- macOS or Linux recommended (Windows works with WSL2)
- PHP 8.x, MySQL 5.7+/MariaDB 10.3+
- Node 18+ only if working with the separate `Medical website/` demo (not required for WordPress runtime)
- WP-CLI (optional but recommended)

### 2) Local Development Setup
The WordPress application lives at `app/public`. A ready-to-import SQL dump is provided at `app/sql/local.sql`.

Steps:
1. Create a local MySQL database named `local` and user `root:root` or adjust credentials in `app/public/wp-config.php`.
2. Import database:
   ```bash
   mysql -uroot -proot local < "app/sql/local.sql"
   ```
3. Ensure the `uploads` folder has write permissions:
   ```bash
   chmod -R 775 "app/public/wp-content/uploads"
   ```
4. Start PHP/Nginx or use your local stack (e.g., Local by Flywheel). Access: `http://localhost:10104`.

Admin credentials are not stored here. Use your local environment’s credentials or reset via WP-CLI:
```bash
wp user update admin --user_pass="NewSecurePass123" --path="app/public"
```

### 3) Project Structure
```
app/
  public/             # WordPress root
    wp-content/
      themes/
        astra/        # Active theme
        twentytwentyfive/
      plugins/
        elementor/
        elementor-pro/
        updraftplus/
        all-in-one-wp-migration/
        disable-gutenberg/
        site-mailer/  # Custom plugin
    wp-config.php
  sql/
    local.sql         # Database dump
Medical website/      # Separate Vite+TS+Tailwind demo (not used by WP site)
```

### 4) Configuration
- `app/public/wp-config.php` sets the DB to `local` with `root:root`, enables debugging/logging, and sets memory limits.
- Environment type: `WP_ENVIRONMENT_TYPE=local`.
- Permalinks: `/%postname%/`.
- Site/Home URL (local): `http://localhost:10104`.

If you change the domain locally, run a search-replace to update serialized URLs:
```bash
wp search-replace 'http://localhost:10104' 'http://new-local.test' --all-tables --precise --path="app/public"
```

### 5) Database and Content
- Import from `app/sql/local.sql`.
- Media files are under `app/public/wp-content/uploads/`.
- Elementor stores page designs in `wp_posts` and `wp_postmeta`; exporting templates is recommended for portability (see below).

### 6) Theme and Styling
- Active theme: `astra` (`template` and `stylesheet` both set to `astra`).
- No child theme included; custom design is primarily via Elementor templates and Astra Customizer.
- Astra options live in the database; export Customizer settings from WP Admin if needed.

Custom CSS locations:
- Elementor page/template CSS
- Astra Customizer Additional CSS
- Theme-specific CSS in `wp-content/themes/astra/` (avoid editing core theme files; prefer Customizer or a child theme if code changes are needed).

### 7) Elementor Usage
- Page builder: Elementor + Elementor Pro.
- Importable Elementor templates are included under `wp-content/themes/astra/elementor-templates/`:
  - `medical-hero-template.json`, `immediate-care-card.json`, `medical-testimonials-template.json`, etc.
- HTML/PHP wrappers for some templates are included (e.g., `medical-hero-template.php`, `immediate-care-card.php`). These can serve as references for theme integration.

Recommended workflow:
1. Build sections/pages in Elementor and save as templates.
2. Export templates (Templates → Saved Templates → Export) for versioning.
3. Keep template JSON exports in version control (e.g., the `elementor-templates` folder here).

Global settings:
- Manage site-wide fonts/colors via Elementor Site Settings and Astra Global Palette.
- Disable Gutenberg plugin is active to ensure classic editor compatibility with Elementor.

### 8) Plugins
Active plugins (from database):
- All‑in‑One WP Migration
- Disable Gutenberg
- Elementor
- Elementor Pro
- Site Mailer (custom) – located at `wp-content/plugins/site-mailer/`
- UpdraftPlus – scheduled backups and on-demand backups

Notes:
- Keep Elementor and Elementor Pro versions in sync.
- Verify Site Mailer configuration in its settings or `site-mailer` plugin code if emails are involved.

### 9) Backups and Migrations
Two approaches are available:
1. UpdraftPlus: Configure remote storage (e.g., Drive/S3) in WP Admin. Use for scheduled backups.
2. All‑in‑One WP Migration: Create full-site export/import packages (`wp-content/ai1wm-backups/`).

Manual migration checklist:
- Export DB (or use `local.sql`).
- Sync `wp-content/uploads/`.
- Ensure the same plugin/theme versions on target.
- Run search-replace for domain changes.

### 10) Deployments and Environments
- Local domain: `http://localhost:10104`.
- For staging/production, update `wp-config.php` credentials and set correct `WP_ENVIRONMENT_TYPE`.
- Use a child theme if code-level theme changes are required.
- Keep Elementor Pro license active on production to enable templates and widgets.

### 11) Maintenance Tasks
- Update WordPress core, Astra, Elementor, Elementor Pro, and other plugins monthly.
- Verify backups complete and can be restored.
- Optimize database occasionally (e.g., WP-Optimize) and regenerate CSS/JS via Elementor if styles appear stale.
- Export and version Elementor templates after major design changes.

### 12) Troubleshooting
- White screen after update: enable `WP_DEBUG_LOG` (already enabled) and check `app/public/wp-content/debug.log`.
- Broken styles in Elementor pages: Elementor → Tools → Regenerate CSS & Data; clear caches.
- Mixed content after domain change: run `wp search-replace` to update URLs.
- Permalink 404s: Settings → Permalinks → Save to flush rules.
- Missing media: ensure `uploads/` synced and permissions are correct.

---

### FAQs
- Do I need the `Medical website/` folder? It’s a separate Vite/React demo not used by the WordPress runtime. Ignore unless working on that standalone demo.
- Where are Elementor templates? See `wp-content/themes/astra/elementor-templates/` and export/import via WP Admin.
- How do I make code changes to the theme? Create and activate an Astra child theme, or use custom hooks via a small site plugin; avoid editing Astra core files.

### Credits
- Theme: Astra
- Page Builder: Elementor + Elementor Pro
- Backups: UpdraftPlus
- Migration: All‑in‑One WP Migration


# Antonfeld
