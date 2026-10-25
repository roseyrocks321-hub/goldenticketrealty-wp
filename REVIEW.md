# GTR Portfolio & Blog Review Document
**Date:** October 25, 2026

---

## ✅ PORTFOLIO PAGE: `/our-deals/`

**File:** `~/goldenticketrealty-wp/our-deals-page.html`

**To deploy:** Create new WP page → Code editor → paste HTML → slug: `/our-deals/`

### Card 1: 362 Nikomas Way
- **Badge:** Full Reno
- **City:** Melbourne Beach, FL — 2025-2026
- **Hero Image:** [View Photo](https://goldenticketrealty.com/wp-content/uploads/2026/10/001_dsc07366-edit-2_twi_900.jpg)
- **After Image:** [View Photo](https://goldenticketrealty.com/wp-content/uploads/2026/10/010_dsc07432-edit_394.jpg)
- **Before Image:** ⚠️ PLACEHOLDER (needs upload from Google Photos)
- **Description:** Complete interior renovation: exposed framing to finished great room, modern staircase, updated kitchen with island, and master suite with en-suite bath.

### Card 2: 1112 Banana River Dr
- **Badge:** Kitchen & Bath
- **City:** Indian Harbour Beach, FL — 2025
- **Hero Image:** [View Photo](https://goldenticketrealty.com/wp-content/uploads/2026/10/001__amp2005-edit-2_509-scaled.jpg)
- **Before Image:** ⚠️ PLACEHOLDER (needs upload from Google Photos)
- **After Image:** ⚠️ PLACEHOLDER (needs upload from Google Photos)
- **Description:** Mid-century modern refresh: full kitchen renovation with new cabinetry and countertops, bathroom updates, and exterior curb appeal overhaul.

### Card 3: 4470 Lakeridge Dr
- **Badge:** Kitchen Flip
- **City:** Melbourne, FL — 2024
- **Hero Image:** [View Photo](https://goldenticketrealty.com/wp-content/uploads/2026/10/001_i77a5788-edit-2.jpg)
- **Before Image:** ⚠️ PLACEHOLDER (needs upload from Google Photos)
- **After Image:** ⚠️ PLACEHOLDER (needs upload from Google Photos)
- **Description:** Ranch-style kitchen and living area transformation: opened floor plan, new cabinetry, countertops, and modern finishes throughout.

### Card 4: 355 Yuma Dr
- **Badge:** Family Refresh
- **City:** Indian Harbour Beach, FL — 2025
- **Hero Image:** [View Photo](https://goldenticketrealty.com/wp-content/uploads/2026/10/001_img_7605-edit-edit_800-scaled.jpg)
- **Before Image:** ⚠️ PLACEHOLDER (needs upload from Google Photos)
- **After Image:** ⚠️ PLACEHOLDER (needs upload from Google Photos)
- **Description:** Split-level family home refresh: interior updates, pool area, and exterior improvements. Move-in ready for the next family.

### Card 5: Trotters Trail
- **Badge:** Commercial Cleanup
- **City:** Cocoa, FL — 2025
- **Hero Image:** [View Photo](https://goldenticketrealty.com/wp-content/uploads/2026/10/001_dsc_0555-edit-2-edit-edit_125.jpg)
- **Before Image:** ⚠️ PLACEHOLDER (needs upload from Google Photos)
- **After Image:** ⚠️ PLACEHOLDER (needs upload from Google Photos)
- **Description:** Industrial property converted to residential farmhouse charm. Exterior cleanup, landscaping, and full cosmetic overhaul.

### Card 6: Sunflower Dr
- **Badge:** Full Conversion
- **City:** Port St John, FL — 2024
- **Hero Image:** [View Photo](https://goldenticketrealty.com/wp-content/uploads/2026/10/image1.png)
- **Before Image:** ⚠️ PLACEHOLDER (needs upload from Google Photos)
- **After Image:** ⚠️ PLACEHOLDER (needs upload from Google Photos)
- **Description:** Commercial kitchen space converted to modern residential home. Complete gut renovation with new kitchen, bedrooms, and systems.

---

## ✅ BLOG POST DRAFTS (6 total)

All files in: `~/goldenticketrealty-wp/blog-posts/`

| # | File | Date | City | Status |
|---|------|------|------|--------|
| 1 | `blog-2026-12-30-nikomas-way-transformation-melbourne.html` | Dec 30 | Melbourne Beach | Drafted, hero image live |
| 2 | `blog-2027-01-13-banana-river-mid-century-modern-cocoa.html` | Jan 13 | Indian Harbour Beach | Drafted, hero image live |
| 3 | `blog-2027-01-27-lakeridge-ranch-kitchen-flip-palm-bay.html` | Jan 27 | Melbourne | Drafted, hero image live |
| 4 | `blog-2027-02-10-yuma-family-refresh-melbourne.html` | Feb 10 | Indian Harbour Beach | Drafted, hero image live |
| 5 | `blog-2027-02-24-trotters-commercial-cleanup-melbourne.html` | Feb 24 | Cocoa | Drafted, hero image live |
| 6 | `blog-2027-03-10-sunflower-commercial-conversion-palm-bay.html` | Mar 10 | Port St John | Drafted, hero image live |

**All posts include:**
- 400-500 words of body copy
- 1-2 embedded hero images (live WP URLs)
- City-specific SEO keywords
- Soft CTA to `/contact`
- Social proof (reviews, location)

---

## ✅ GTR BLOG QUEUE (Interleaved)

**File:** `~/hermes-scripts/blog-publisher/queues/gtr.json`

| Date | Type | Post |
|------|------|------|
| Nov 4 | EDIT | Cash Buyer vs. Agent |
| **Nov 11** | **DEAL** | **Sunflower Dr (Port St John)** |
| Nov 18 | EDIT | How Fast to Close |
| **Nov 25** | **DEAL** | **Nikomas Way (Melbourne Beach)** |
| Dec 2 | EDIT | Selling As-Is |
| **Dec 9** | **DEAL** | **Banana River (Indian Harbour Beach)** |
| Dec 16 | EDIT | Brevard Market Update |
| **Dec 23** | **DEAL** | **Lakeridge Dr (Melbourne)** |
| Jan 6 | EDIT | Questions to Ask a Cash Buyer |
| **Jan 13** | **DEAL** | **Yuma Dr (Indian Harbour Beach)** |
| **Jan 20** | **DEAL** | **Trotters Trail (Cocoa)** |

---

## ⚠️ OUTSTANDING ITEMS

### Before Photos
The portfolio page has placeholder paths for "before" images. We need to:
1. Download before photos from Google Photos albums
2. Upload them to WP media library
3. Update the portfolio HTML with live URLs

**Option A:** Skip before/after pairs for now — launch with hero images only
**Option B:** I can download the before photos from your Google Photos links and upload them

### GBP Test Posts
**Status:** 8 days post-strike. Safe to test.

**GTR Test Copy:**
```
Just wrapped another transformation in Melbourne Beach. This property went from raw framing to a finished, move-in-ready home.

Swipe to see the before and after.
```
**Photo:** Nikomas exterior (media ID 2806)

**Brevard Test Copy:**
```
Another project complete in Brevard County. From dated kitchen to modern living space — this home is move-in ready.

See the full transformation on our site.
```
**Photo:** Banana River exterior (media ID 2807)

---

## 🎯 YOUR DECISIONS NEEDED

1. **Before photos:** Skip them for launch, or should I download/upload them?
2. **Deploy portfolio now?** I can create the WP page via REST API immediately
3. **GBP test:** Will you test manually, or should I attempt via browser automation?
4. **Blog posts:** Queue is ready — publish on schedule, or push any posts live early?

**What's the next move?**
