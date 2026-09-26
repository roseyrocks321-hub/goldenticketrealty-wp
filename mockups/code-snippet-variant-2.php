<?php
/**
 * GTR Custom Header & Footer — Variant 2: Clean Modern
 * Code Snippet for Code Snippets plugin (run on front-end)
 */

add_action( 'wp_head', function() {
    ?>
    <style id="gtr-custom-header-footer-v2">
        .site-header, .site-footer,
        [data-elementor-type="header"],
        [data-elementor-type="footer"] {
            display: none !important;
        }

        .gtr-header {
            background: #fff;
            border-bottom: 1px solid #eaeaea;
            padding: 16px 24px;
            position: sticky;
            top: 0;
            z-index: 1000;
            box-shadow: 0 2px 8px rgba(0,0,0,0.04);
        }
        .gtr-header-inner {
            max-width: 1200px;
            margin: 0 auto;
            display: flex;
            align-items: center;
            justify-content: space-between;
            gap: 16px;
        }
        .gtr-logo img { height: 52px; display: block; }
        .gtr-nav-main {
            display: flex;
            gap: 28px;
            list-style: none;
            margin: 0; padding: 0;
        }
        .gtr-nav-main a {
            font-family: 'Montserrat', sans-serif;
            font-weight: 600;
            font-size: 13px;
            text-transform: uppercase;
            letter-spacing: 0.6px;
            color: #222;
            position: relative;
            text-decoration: none;
        }
        .gtr-nav-main a::after {
            content: '';
            position: absolute;
            bottom: -6px; left: 0; width: 0; height: 2px;
            background: #e2c23f;
            transition: width 0.25s ease;
        }
        .gtr-nav-main a:hover::after { width: 100%; }
        .gtr-header-actions {
            display: flex;
            align-items: center;
            gap: 20px;
        }
        .gtr-phone a {
            font-family: 'Montserrat', sans-serif;
            font-weight: 700;
            font-size: 15px;
            color: #000;
            white-space: nowrap;
            text-decoration: none;
        }
        .gtr-btn {
            background: #e2c23f;
            color: #000;
            padding: 10px 20px;
            border-radius: 4px;
            font-family: 'Montserrat', sans-serif;
            font-weight: 700;
            font-size: 12px;
            text-transform: uppercase;
            letter-spacing: 0.5px;
            text-decoration: none;
            display: inline-block;
            transition: transform 0.15s, box-shadow 0.15s;
        }
        .gtr-btn:hover {
            transform: translateY(-1px);
            box-shadow: 0 4px 12px rgba(226,194,63,0.35);
        }
        .gtr-social {
            display: flex;
            gap: 10px;
        }
        .gtr-social a {
            display: inline-flex;
            width: 30px; height: 30px;
            align-items: center; justify-content: center;
            background: #f0f0f0;
            border-radius: 50%;
            color: #333;
            transition: background 0.2s, color 0.2s;
            text-decoration: none;
        }
        .gtr-social a:hover { background: #e2c23f; color: #000; }
        .gtr-social svg { width: 14px; height: 14px; fill: currentColor; }

        .gtr-footer {
            background: #0f0f0f;
            color: #aaa;
            padding: 48px 24px 28px;
        }
        .gtr-footer-inner {
            max-width: 1200px;
            margin: 0 auto;
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 32px;
            text-align: left;
        }
        .gtr-footer-col h4 {
            font-family: 'Montserrat', sans-serif;
            font-size: 14px;
            text-transform: uppercase;
            letter-spacing: 1px;
            color: #fff;
            margin-bottom: 16px;
        }
        .gtr-footer-col ul {
            list-style: none;
            margin: 0; padding: 0;
            display: flex;
            flex-direction: column;
            gap: 10px;
        }
        .gtr-footer-col a {
            color: #aaa;
            font-size: 14px;
            text-decoration: none;
            transition: color 0.2s;
        }
        .gtr-footer-col a:hover { color: #e2c23f; }
        .gtr-footer-interlinks {
            margin-top: 8px;
            font-size: 13px;
        }
        .gtr-footer-interlinks a {
            color: #e2c23f;
            font-weight: 600;
            text-decoration: none;
        }
        .gtr-footer-interlinks a:hover { text-decoration: underline; }
        .gtr-footer-bottom {
            max-width: 1200px;
            margin: 32px auto 0;
            padding-top: 20px;
            border-top: 1px solid #222;
            display: flex;
            justify-content: space-between;
            align-items: center;
            flex-wrap: wrap;
            gap: 12px;
        }
        .gtr-footer-bottom .gtr-social a { background: #222; color: #aaa; }
        .gtr-footer-bottom .gtr-social a:hover { background: #e2c23f; color: #000; }
        .gtr-copyright { font-size: 13px; color: #666; }

        @media (max-width: 900px) {
            .gtr-nav-main { display: none; }
            .gtr-footer-inner { grid-template-columns: 1fr 1fr; }
        }
        @media (max-width: 600px) {
            .gtr-footer-inner { grid-template-columns: 1fr; text-align: center; }
            .gtr-footer-bottom { justify-content: center; text-align: center; }
            .gtr-header-actions { width: 100%; justify-content: center; }
        }
    </style>
    <?php
}, 99 );

add_action( 'wp_body_open', function() {
    ?>
    <header class="gtr-header">
        <div class="gtr-header-inner">
            <a href="https://goldenticketrealty.com/" class="gtr-logo">
                <img src="https://goldenticketrealty.com/wp-content/uploads/2024/08/1.png" alt="Golden Ticket Realty Logo">
            </a>
            <ul class="gtr-nav-main">
                <li><a href="https://goldenticketrealty.com/sell-your-house/">Sell Your House</a></li>
                <li><a href="https://goldenticketrealty.com/how-we-buy-houses/">How It Works</a></li>
                <li><a href="https://goldenticketrealty.com/testimonials/">Reviews</a></li>
                <li><a href="https://goldenticketrealty.com/our-company/">Our Company</a></li>
                <li><a href="https://goldenticketrealty.com/faqs/">FAQs</a></li>
                <li><a href="https://goldenticketrealty.com/our-projects/">Projects</a></li>
            </ul>
            <div class="gtr-header-actions">
                <div class="gtr-phone"><a href="tel:321-294-2081">321-294-2081</a></div>
                <a href="https://goldenticketrealty.com/sell-your-house/" class="gtr-btn">Get Started</a>
                <div class="gtr-social">
                    <a href="https://www.facebook.com/goldenticketrealty" target="_blank" aria-label="Facebook">
                        <svg viewBox="0 0 512 512"><path d="M504 256C504 119 393 8 256 8S8 119 8 256c0 123.78 90.69 226.38 209.25 245V327.69h-63V256h63v-54.64c0-62.15 37-96.48 93.67-96.48 27.14 0 55.52 4.84 55.52 4.84v61h-31.28c-30.8 0-40.41 19.12-40.41 38.73V256h68.78l-11 71.69h-57.78V501C413.31 482.38 504 379.78 504 256z"/></svg>
                    </a>
                    <a href="https://www.instagram.com/golden_ticket_realty" target="_blank" aria-label="Instagram">
                        <svg viewBox="0 0 448 512"><path d="M224.1 141c-63.6 0-114.9 51.3-114.9 114.9s51.3 114.9 114.9 114.9S339 319.5 339 255.9 287.7 141 224.1 141zm0 189.6c-41.1 0-74.7-33.5-74.7-74.7s33.5-74.7 74.7-74.7 74.7 33.5 74.7 74.7-33.6 74.7-74.7 74.7zm146.4-194.3c0 14.9-12 26.8-26.8 26.8-14.9 0-26.8-12-26.8-26.8s12-26.8 26.8-26.8 26.8 12 26.8 26.8zm76.1 27.2c-1.7-35.9-9.9-67.7-36.2-93.9-26.2-26.2-58-34.4-93.9-36.2-37-2.1-147.9-2.1-184.9 0-35.8 1.7-67.6 9.9-93.9 36.1s-34.4 58-36.2 93.9c-2.1 37-2.1 147.9 0 184.9 1.7 35.9 9.9 67.7 36.2 93.9s58 34.4 93.9 36.2c37 2.1 147.9 2.1 184.9 0 35.9-1.7 67.7-9.9 93.9-36.2 26.2-26.2 34.4-58 36.2-93.9 2.1-37 2.1-147.8 0-184.8zM398.8 388c-7.8 19.6-22.9 34.7-42.6 42.6-29.5 11.7-99.5 9-132.1 9s-102.7 2.6-132.1-9c-19.6-7.8-34.7-22.9-42.6-42.6-11.7-29.5-9-99.5-9-132.1s-2.6-102.7 9-132.1c7.8-19.6 22.9-34.7 42.6-42.6 29.5-11.7 99.5-9 132.1-9s102.7-2.6 132.1 9c19.6 7.8 34.7 22.9 42.6 42.6 11.7 29.5 9 99.5 9 132.1s2.7 102.7-9 132.1z"/></svg>
                    </a>
                    <a href="https://www.linkedin.com/in/winwithpacheco/" target="_blank" aria-label="LinkedIn">
                        <svg viewBox="0 0 448 512"><path d="M416 32H31.9C14.3 32 0 46.5 0 64.3v383.4C0 465.5 14.3 480 31.9 480H416c17.6 0 32-14.5 32-32.3V64.3c0-17.8-14.4-32.3-32-32.3zM135.4 416H69V202.2h66.5V416zm-33.2-243c-21.3 0-38.5-17.3-38.5-38.5S80.9 96 102.2 96c21.2 0 38.5 17.3 38.5 38.5 0 21.3-17.2 38.5-38.5 38.5zm282.1 243h-66.4V312c0-24.8-.5-56.7-34.5-56.7-34.6 0-39.9 27-39.9 54.9V416h-66.4V202.2h63.7v29.2h.9c8.9-16.8 30.6-34.5 62.9-34.5 67.2 0 79.7 44.3 79.7 101.9V416z"/></svg>
                    </a>
                </div>
            </div>
        </div>
    </header>
    <?php
}, 1 );

add_action( 'wp_footer', function() {
    ?>
    <footer class="gtr-footer">
        <div class="gtr-footer-inner">
            <div class="gtr-footer-col">
                <h4>Quick Links</h4>
                <ul>
                    <li><a href="https://goldenticketrealty.com/sell-your-house/">Get A Cash Offer</a></li>
                    <li><a href="https://goldenticketrealty.com/how-we-buy-houses/">How It Works</a></li>
                    <li><a href="https://goldenticketrealty.com/testimonials/">Reviews</a></li>
                    <li><a href="https://goldenticketrealty.com/our-company/">Our Company</a></li>
                </ul>
            </div>
            <div class="gtr-footer-col">
                <h4>Support</h4>
                <ul>
                    <li><a href="https://goldenticketrealty.com/contact/">Contact Us</a></li>
                    <li><a href="https://goldenticketrealty.com/faqs/">FAQs</a></li>
                    <li><a href="https://goldenticketrealty.com/privacy-policy/">Privacy Policy</a></li>
                    <li><a href="https://goldenticketrealty.com/terms-conditions/">Terms &amp; Conditions</a></li>
                </ul>
            </div>
            <div class="gtr-footer-col">
                <h4>Service Areas</h4>
                <ul>
                    <li><a href="https://goldenticketrealty.com/">Melbourne, FL</a></li>
                    <li><a href="https://sellmyhousefastbrevardfl.com" target="_blank">Brevard County</a></li>
                    <li><a href="https://sellmyhousefastcocoa.com" target="_blank">Cocoa</a></li>
                </ul>
                <div class="gtr-footer-interlinks">
                    Phase 0 interlinks: <a href="https://sellmyhousefastbrevardfl.com">Brevard</a> &middot; <a href="https://sellmyhousefastcocoa.com">Cocoa</a>
                </div>
            </div>
        </div>
        <div class="gtr-footer-bottom">
            <div class="gtr-copyright">
                <p>&copy; <?php echo date('Y'); ?> Golden Ticket Realty | All Rights Reserved.</p>
            </div>
            <div class="gtr-social">
                <a href="https://www.facebook.com/goldenticketrealty" target="_blank" aria-label="Facebook">
                    <svg viewBox="0 0 512 512"><path d="M504 256C504 119 393 8 256 8S8 119 8 256c0 123.78 90.69 226.38 209.25 245V327.69h-63V256h63v-54.64c0-62.15 37-96.48 93.67-96.48 27.14 0 55.52 4.84 55.52 4.84v61h-31.28c-30.8 0-40.41 19.12-40.41 38.73V256h68.78l-11 71.69h-57.78V501C413.31 482.38 504 379.78 504 256z"/></svg>
                </a>
                <a href="https://www.instagram.com/golden_ticket_realty" target="_blank" aria-label="Instagram">
                    <svg viewBox="0 0 448 512"><path d="M224.1 141c-63.6 0-114.9 51.3-114.9 114.9s51.3 114.9 114.9 114.9S339 319.5 339 255.9 287.7 141 224.1 141zm0 189.6c-41.1 0-74.7-33.5-74.7-74.7s33.5-74.7 74.7-74.7 74.7 33.5 74.7 74.7-33.6 74.7-74.7 74.7zm146.4-194.3c0 14.9-12 26.8-26.8 26.8-14.9 0-26.8-12-26.8-26.8s12-26.8 26.8-26.8 26.8 12 26.8 26.8zm76.1 27.2c-1.7-35.9-9.9-67.7-36.2-93.9-26.2-26.2-58-34.4-93.9-36.2-37-2.1-147.9-2.1-184.9 0-35.8 1.7-67.6 9.9-93.9 36.1s-34.4 58-36.2 93.9c-2.1 37-2.1 147.9 0 184.9 1.7 35.9 9.9 67.7 36.2 93.9s58 34.4 93.9 36.2c37 2.1 147.9 2.1 184.9 0 35.9-1.7 67.7-9.9 93.9-36.2 26.2-26.2 34.4-58 36.2-93.9 2.1-37 2.1-147.8 0-184.8zM398.8 388c-7.8 19.6-22.9 34.7-42.6 42.6-29.5 11.7-99.5 9-132.1 9s-102.7 2.6-132.1-9c-19.6-7.8-34.7-22.9-42.6-42.6-11.7-29.5-9-99.5-9-132.1s-2.6-102.7 9-132.1c7.8-19.6 22.9-34.7 42.6-42.6 29.5-11.7 99.5-9 132.1-9s102.7-2.6 132.1 9c19.6 7.8 34.7 22.9 42.6 42.6 11.7 29.5 9 99.5 9 132.1s2.7 102.7-9 132.1z"/></svg>
                </a>
                <a href="https://www.linkedin.com/in/winwithpacheco/" target="_blank" aria-label="LinkedIn">
                    <svg viewBox="0 0 448 512"><path d="M416 32H31.9C14.3 32 0 46.5 0 64.3v383.4C0 465.5 14.3 480 31.9 480H416c17.6 0 32-14.5 32-32.3V64.3c0-17.8-14.4-32.3-32-32.3zM135.4 416H69V202.2h66.5V416zm-33.2-243c-21.3 0-38.5-17.3-38.5-38.5S80.9 96 102.2 96c21.2 0 38.5 17.3 38.5 38.5 0 21.3-17.2 38.5-38.5 38.5zm282.1 243h-66.4V312c0-24.8-.5-56.7-34.5-56.7-34.6 0-39.9 27-39.9 54.9V416h-66.4V202.2h63.7v29.2h.9c8.9-16.8 30.6-34.5 62.9-34.5 67.2 0 79.7 44.3 79.7 101.9V416z"/></svg>
                </a>
                <a href="https://www.tiktok.com/@goldenticketrealty" target="_blank" aria-label="TikTok">
                    <svg viewBox="0 0 448 512"><path d="M448 209.9a210.1 210.1 0 0 1 -122.8-39.3V349.4A162.6 162.6 0 1 1 185 188.3V278.2a74.6 74.6 0 1 0 52.2 71.2V0l88.1 0a121.2 121.2 0 0 0 1.9 22.2h0A122.2 122.2 0 0 0 381 102.4a121.4 121.4 0 0 0 67 20.1z"/></svg>
                </a>
                <a href="https://www.youtube.com/@goldenticketrealty" target="_blank" aria-label="YouTube">
                    <svg viewBox="0 0 576 512"><path d="M549.7 124.1c-6.3-23.7-24.8-42.3-48.3-48.6C458.8 64 288 64 288 64S117.2 64 74.6 75.5c-23.5 6.3-42 24.9-48.3 48.6-11.4 42.9-11.4 132.3-11.4 132.3s0 89.4 11.4 132.3c6.3 23.7 24.8 41.5 48.3 47.8C117.2 448 288 448 288 448s170.8 0 213.4-11.5c23.5-6.3 42-24.2 48.3-47.8 11.4-42.9 11.4-132.3 11.4-132.3s0-89.4-11.4-132.3zM232 336V200l142.8 68-142.8 68z"/></svg>
                </a>
            </div>
        </div>
    </footer>
    <?php
}, 99 );
