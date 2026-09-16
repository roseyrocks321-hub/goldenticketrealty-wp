# GTR WordPress Speed Fix — README

**Site:** goldenticketrealty.com  
**Goal:** Cut Total Blocking Time (TBT) by deferring non-critical JS and disabling unused plugin scripts.

---

## What the Snippet Does

1. **Defers Elementor frontend scripts** (`elementor-frontend`, `elementor-pro-frontend`, etc.) so they don’t block the main thread during initial paint.
2. **Defers jQuery-migrate** (safe). Core jQuery defer is included but **commented out** because many inline scripts expect `$` immediately; only enable it after testing every page.
3. **Removes Burst Statistics JS** from the frontend queue. This plugin is a known TBT contributor.
4. **Removes Alt Manager JS** from the frontend queue. If you still need alt-text management, keep the plugin active for the admin panel only; the front-end script is unnecessary for most sites.
5. **Defers msgsndr / HighLevel form embeds** (`link.msgsndr.com`) via handle matching and a fallback src-string matcher.
6. **Bonus:** Disables WordPress emoji detection script and the `wp-embed` script to shave off a few more milliseconds.

---

## Before You Apply

### Step 1: Disable the Heavy Plugins (Recommended)
Go to **WP Admin → Plugins** and **Deactivate**:
- ❌ **Burst Statistics**
- ❌ **Alt Manager**

If you need Alt Manager for bulk alt-tag editing later, you can reactivate it temporarily in the admin; the snippet will still strip its frontend JS.

### Step 2: Clear All Caches
- **NitroPack:** Dashboard → Purge Cache
- **HostGator caching:** If enabled via cPanel or a plugin, flush it.
- **Browser:** Test in an incognito / private window.

---

## How to Install the Snippet

### Option A: Code Snippets Plugin (Safest & Recommended)
1. Install **Code Snippets** from the WP plugin repository.
2. Go to **Snippets → Add New**.
3. Paste the entire contents of `functions-speed-fix.php` into the code box.
4. Select **“Run snippet everywhere”**.
5. Click **Save Changes and Activate**.
6. If anything breaks, simply deactivate the snippet — no FTP needed.

### Option B: Theme File Editor (Direct edit)
1. Go to **Appearance → Theme File Editor**.
2. Select `functions.php` from the right-hand file list.
3. Scroll to the **very bottom**.
4. Paste the entire contents of `functions-speed-fix.php`.
5. Click **Update File**.
6. If the site whitescreens, restore `functions.php` via FTP/cPanel File Manager by removing the pasted code.

---

## Testing Checklist

After applying, test these pages in an **incognito window** on both **desktop and mobile**:
- [ ] Homepage — do all images, sliders, and menus render correctly?
- [ ] Any page with an Elementor form — does the form display and submit?
- [ ] Any page with a msgsndr / HighLevel embed — does the form still load?
- [ ] Mobile hamburger menu — does it open/close?
- [ ] Any popups or sticky headers — do they behave normally?
- [ ] Check **Chrome DevTools → Console** for red JS errors.

If you see errors related to `jQuery is not defined`, the site has inline scripts that need jQuery synchronously. In that case:
1. Revert the snippet (or deactivate it).
2. Edit the snippet and **leave the jQuery block commented out** (it is by default).
3. Re-apply and re-test.

---

## Expected Impact

- **Burst Stats + Alt Manager removal:** Should drop TBT by 500–1,500 ms depending on how aggressively they were loading.
- **Elementor script deferral:** Should improve Speed Index and reduce main-thread blocking.
- **msgsndr deferral:** Form embeds will load after the page is painted, improving perceived speed.

After changes, rerun **Google PageSpeed Insights** and compare:
- Performance score
- Total Blocking Time
- Speed Index
- CLS (should stay ~0.136 or improve, since we’re not shifting layout)

---

## Support / Rollback

- **Code Snippets users:** Deactivate the snippet instantly.
- **functions.php editors:** Remove the pasted block from `functions.php` and save.
- Always keep a backup of `functions.php` before editing.
