# GTR Rebuild-from-Scratch Guide

If the live site is completely destroyed, follow these steps to rebuild `goldenticketrealty.com` to its exact current state.

---

## Phase 0: Fresh WordPress Install

1. Install WordPress (latest stable) on new host
2. Set permalink structure to `/%postname%/` (Settings → Permalinks)
3. Install Hello Elementor theme (free from WP.org)

---

## Phase 1: Install Plugins

Install all plugins from BACKUP-MANIFEST.md in this order:

1. **Elementor** (free) — activate
2. **Elementor Pro** (3.27.0) — activate, connect license
3. **Yoast SEO** — activate
4. All other active plugins from manifest

**Critical:** Elementor Pro MUST be installed and licensed BEFORE importing templates, or header/footer will break.

---

## Phase 2: Import Elementor Templates

The header (ID 472) and footer (ID 33) are Elementor Pro Theme Builder templates stored in the database.

**From UpdraftPlus backup:**
1. Restore database from latest UpdraftPlus backup
2. OR: Use Elementor Pro → Tools → Import/Export to import `.json` template files

**If you have the template JSON exports:**
- WP Admin → Elementor → Tools → Import Templates
- Import `header-472.json` and `footer-33.json`
- Go to Templates → Theme Builder → assign header/footer to entire site

---

## Phase 3: Import Custom CSS

Copy these files from backup to the new site:

```
wp-content/uploads/elementor/css/post-472.css  → Header styles
wp-content/uploads/elementor/css/post-33.css   → Footer styles
wp-content/uploads/elementor/css/post-7.css    → Homepage styles
wp-content/uploads/elementor/css/post-37.css   → Page styles
```

**How to get them:** Download from cPanel File Manager or UpdraftPlus "Uploads" backup.

---

## Phase 4: Recreate Pages

Use the page list in BACKUP-MANIFEST.md. For each page:

1. Create page with matching slug
2. Copy content from `~/goldenticketrealty-wp/blog-posts/` or live site curl
3. Set Elementor template if applicable

**Fastest way:** Restore UpdraftPlus database backup — all pages come back automatically.

---

## Phase 5: Recreate Blog Posts

Blog post content is saved locally in `~/goldenticketrealty-wp/blog-posts/`:

- `blog-2026-09-15-sell-my-house-fast-melbourne-fl.html`
- `blog-2026-09-19-ultimate-guide-sell-house-fast-melbourne.html`
- `blog-2026-09-23-proven-strategies-sell-house-fast-melbourne.html`

Paste HTML content into new posts with matching slugs and backdated publish dates.

---

## Phase 6: Re-Add Code Snippets

### Speed Fix (CRITICAL)
File: `~/goldenticketrealty-wp/functions-speed-fix.php`

1. Install Code Snippets plugin
2. Add New Snippet
3. Paste code from `functions-speed-fix.php`
4. Name: "GTR Speed Fix"
5. Scope: global
6. Activate

### Footer Interlinks (Phase 0)
```php
<?php
add_action("wp_footer", function() {
    echo "<p style=\"text-align:center;padding:15px 0;font-size:0.9rem;background:#f8f9fa;\">Also serving: <a href=\"https://sellmyhousefastbrevardfl.com\">Brevard County</a> | <a href=\"https://sellmyhousefastcocoa.com\">Cocoa</a></p>";
});
```

---

## Phase 7: Configure Integrations

| Integration | Setting |
|-------------|---------|
| Google Analytics | G-41EWR9PZYV (Site Kit or direct gtag) |
| GHL Form | `api.leadconnectorhq.com/widget/form/MbdqrnKd0M4nklPDwtIK` |
| Phone | 321-294-2081 |
| Yoast SEO | Enable, verify sitemap |
| LiteSpeed Cache | Install, purge after all changes |

---

## Phase 8: Upload Images

Copy these folders from backup:

```
wp-content/uploads/2024/08/  → Logos, project photos
wp-content/uploads/2024/09/  → Additional project photos
wp-content/uploads/2025/10/  → Blog featured images
wp-content/uploads/elementor/ → Elementor thumbs/assets
```

---

## Phase 9: Test Everything

- [ ] Homepage loads with header/footer
- [ ] All 13 pages accessible
- [ ] All 12 blog posts load
- [ ] /blog/ page lists posts
- [ ] Contact form works
- [ ] Phone links dial correctly
- [ ] Footer shows Brevard + Cocoa links
- [ ] GA tag firing
- [ ] Yoast sitemap at `/sitemap_index.xml`
- [ ] Mobile responsive

---

## Alternative: Full Database Restore

**Fastest rebuild method:**

1. Fresh WP install + Hello Elementor
2. Install Elementor Pro, activate license
3. Restore UpdraftPlus database backup (from this backup date)
4. Restore UpdraftPlus uploads/themes/plugins backups
5. Re-add Code Snippets (speed fix + interlinks)
6. Purge LiteSpeed Cache

This brings back EVERYTHING including templates, pages, posts, settings in one shot.

---

## What This Repo Contains

| File/Folder | Purpose |
|-------------|---------|
| `BACKUP-MANIFEST.md` | Complete inventory of plugins, pages, posts |
| `REBUILD-GUIDE.md` | This file — step-by-step rebuild instructions |
| `functions-speed-fix.php` | Speed optimization Code Snippet |
| `blog-posts/` | All blog post HTML content |
| `mockups/` | Header/footer rebuild variants (if Elementor Pro fails) |
| `index.html` | Sep 17 snapshot of original designed homepage |
| `sitemap.xml` | Original sitemap structure |
| `backups/` | UpdraftPlus backup references |
