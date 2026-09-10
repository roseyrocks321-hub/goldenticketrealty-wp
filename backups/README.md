# GTR Backup Documentation

**Last Updated:** 2026-09-09
**Site:** goldenticketrealty.com
**Backup Source:** HostGator shared hosting (162.0.232.161)

---

## What's Backed Up

### 1. Database
- **File:** `latest/gtr-db-latest.sql.gz` (7.2 MB)
- **Date:** 2026-09-09 (fresh export)
- **Restore:** `gunzip gtr-db-latest.sql.gz && mysql -u USER -p DB_NAME < gtr-db-latest.sql`

### 2. Themes
- **File:** `latest/backup_2026-09-06_Golden_Ticket_Realty_7f46f74edc00-themes.zip` (0.6 MB)
- **Date:** 2026-09-06 (UpdraftPlus)
- **Contents:** Hello Elementor + child theme

### 3. Must-Use Plugins
- **File:** `latest/backup_2026-09-06_Golden_Ticket_Realty_7f46f74edc00-mu-plugins.zip`
- **Date:** 2026-09-06 (UpdraftPlus)

### 4. WordPress Config
- **File:** `latest/wp-config.php` (sanitized — DB password redacted)
- **Contains:** DB credentials (redacted), salts, table prefix, WP_DEBUG settings

### 5. Other Files
- **File:** `latest/backup_2026-09-06_Golden_Ticket_Realty_7f46f74edc00-others.zip` (22.2 MB)
- **Contents:** wp-includes, root files, non-plugin/non-theme WP core

---

## What's NOT in GitHub (Too Large)

| Component | Size | Location on Server |
|---|---|---|
| **Plugins** | 95.2 MB | `wp-content/updraft/backup_2026-09-06-0000_Golden_Ticket_Realty_7f46f74edc00-plugins.zip` |
| **Uploads** | 90.9 MB | `wp-content/updraft/backup_2026-09-06-0000_Golden_Ticket_Realty_7f46f74edc00-uploads.zip` |
| **All-in-One Migration** | 1.8 GB | `wp-content/ai1wm-backups/goldenticketrealty-com-20260322-164841-udrqtx2garu7.wpress` |

---

## How to Restore

### Full Restore (from server backups)
1. Download latest UpdraftPlus set from `wp-content/updraft/` on server
2. Install UpdraftPlus on new WP site
3. Upload backup files to `wp-content/updraft/`
4. UpdraftPlus → Restore → Select backup → Restore all components

### Quick DB Restore
```bash
gunzip latest/gtr-db-latest.sql.gz
mysql -u goldfvju_wp804 -p goldfvju_wp804 < latest/gtr-db-latest.sql
```

### Theme Restore
```bash
cd /path/to/wp-content/themes
unzip latest/backup_2026-09-06_Golden_Ticket_Realty_7f46f74edc00-themes.zip
```

---

## Auto-Backup
- **Daily 3 AM:** GitHub commit of configs + reports
- **Weekly (UpdraftPlus):** Full site backup (DB + files) stored on server
- **Location:** `wp-content/updraft/` on HostGator

---

## FTP Credentials (HostGator)
- **Host:** 162.0.232.161
- **User:** rosey-gtr@goldenticketrealty.com
- **Directory:** /home/goldfvju/public_html
