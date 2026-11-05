# GTR Backup & Rollback Guide
**Created:** 2026-11-04

## Backups Created Today

| File | Description |
|------|-------------|
| `backups/gtr-queue-backup-20261104_231736.json` | Blog publisher queue state (10 pending posts) |
| `backups/gtr-snippets-backup-*.json` | Active Code Snippets (if accessible) |
| `snippets/gtr-speed-v4-draft.php` | Speed optimization snippet (INACTIVE) |

## How to Activate the Speed Snippet (Safe Method)

### Step 1: Install Code Snippets Plugin
1. WP Admin → Plugins → Add New
2. Search "Code Snippets"
3. Install + Activate

### Step 2: Add the Snippet
1. Snippets → Add New
2. Title: `GTR Speed Optimization v4`
3. Paste code from: `~/goldenticketrealty-wp/snippets/gtr-speed-v4-draft.php`
4. Check "Run snippet everywhere"
5. Click **"Save Changes"** (NOT activate yet)

### Step 3: Test Before Activating
1. Open your site in incognito mode
2. Test: homepage, /our-deals/, /blog/
3. Check: layout looks correct, images load, forms work

### Step 4: Activate
1. If tests pass: click "Activate"
2. Re-test in incognito

### Step 5: Measure Speed
1. Run PageSpeed Insights
2. Compare before/after

## Instant Rollback (If Anything Breaks)

**Method 1 (Fastest):**
1. WP Admin → Snippets
2. Find "GTR Speed Optimization v4"
3. Click **"Deactivate"**
4. Site reverts instantly

**Method 2 (Nuclear):**
1. Rename `/wp-content/plugins/code-snippets/` folder via FTP
2. All snippets deactivate automatically

## Pre-Change Baseline (Record These)

Run these now so you can compare after:

```bash
# Homepage speed
curl -s -o /dev/null -w "TTFB: %{time_starttransfer}s | Total: %{time_total}s\n" "https://goldenticketrealty.com/"

# Portfolio speed
curl -s -o /dev/null -w "TTFB: %{time_starttransfer}s | Total: %{time_total}s\n" "https://goldenticketrealty.com/our-deals/"
```

**Record your scores:**
- PageSpeed Desktop: ___
- PageSpeed Mobile: ___
- TTFB (homepage): ___
- TTFB (portfolio): ___

## Related Files

- `../.hermes/skills/wordpress-shared-hosting-speed/` — Full skill documentation
- `snippets/gtr-speed-v4-draft.php` — The actual snippet code
