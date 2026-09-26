<?php
/**
 * GTR Custom Header & Footer — Variant 3: Compact Mobile-First
 * Code Snippet for Code Snippets plugin (run on front-end)
 */

add_action( 'wp_head', function() {
    ?>
    <style id="gtr-custom-header-footer-v3">
        .site-header, .site-footer,
        [data-elementor-type="header"],
        [data-elementor-type="footer"] {
            display: none !important;
        }

        .gtr-header {
            background: #fff;
            border-bottom: 1px solid #eee;
            padding: 12px 16px;
            position: sticky;
            top: 0;
            z-index: 1000;
        }
        .gtr-header-inner {
            max-width: 1200px;
            margin: 0 auto;
            display: flex;
            align-items: center;
            justify-content: space-between;
            gap: 12px;
        }
        .gtr-logo img { height: 44px; display: block; }
        .gtr-phone a {
            font-family: 'Montserrat', sans-serif;
            font-weight: 700;
            font-size: 14px;
            color: #000;
            text-decoration: none;
        }
        .gtr-menu-toggle {
            background: none;
            border: none;
            cursor: pointer;
            padding: 6px;
            display: flex;
            flex-direction: column;
            gap: 5px;
        }
        .gtr-menu-toggle span {
            display: block;
            width: 24px;
            height: 2px;
            background: #000;
            transition: 0.3s;
        }
        .gtr-menu-toggle[aria-expanded="true"] span:nth-child(1) { transform: rotate(45deg) translate(5px, 5px); }
        .gtr-menu-toggle[aria-expanded="true"] span:nth-child(2) { opacity: 0; }
        .gtr-menu-toggle[aria-expanded="true"] span:nth-child(3) { transform: rotate(-45deg) translate(5px, -5px); }
        .gtr-nav-drawer {
            position: fixed;
            top: 0; right: -100%;
            width: min(320px, 85vw);
            height: 100vh;
            background: #fff;
            box-shadow: -4px 0 20px rgba(0,0,0,0.15);
            padding: 80px 28px 28px;
            transition: right 0.3s ease;
            z-index: 999;
            overflow-y: auto;
        }
        .gtr-nav-drawer.open { right: 0; }
        .gtr-nav-drawer ul {
            list-style: none;
            margin: 0; padding: 0;
            display: flex;
            flex-direction: column;
            gap: 18px;
        }
        .gtr-nav-drawer a {
            font-family: 'Montserrat', sans-serif;
            font-weight: 700;
            font-size: 15px;
            text-transform: uppercase;
            letter-spacing: 0.5px;
            color: #000;
            text-decoration: none;
        }
        .gtr-nav-drawer a:hover { color: #e2c23f; }
        .gtr-nav-cta {
            margin-top: 24px;
            display: inline-block;
            background: #e2c23f;
            color: #000;
            padding: 12px 20px;
            border-radius: 4px;
            font-family: 'Montserrat', sans-serif;
            font-weight: 700;
            font-size: 13px;
            text-transform: uppercase;
            width: 100%;
            text-align: center;
            text-decoration: none;
        }
        .gtr-nav-social {
            margin-top: 24px;
            display: flex;
            gap: 12px;
        }
        .gtr-nav-social a {
            display: inline-flex;
            width: 36px; height: 36px;
            align-items: center; justify-content: center;
            background: #f0f0f0;
            border-radius: 50%;
            color: #333;
            text-decoration: none;
        }
        .gtr-nav-social a:hover { background: #e2c23f; color: #000; }
        .gtr-nav-social svg { width: 16px; height: 16px; fill: currentColor; }
        .gtr-overlay {
            position: fixed;
            inset: 0;
            background: rgba(0,0,0,0.4);
            opacity: 0;
            pointer-events: none;
            transition: opacity 0.3s;
            z-index: 998;
        }
        .gtr-overlay.open { opacity: 1; pointer-events: auto; }

        .gtr-footer {
            background: #0a0a0a;
            color: #999;
            padding: 32px 16px 24px;
            text-align: center;
        }
        .gtr-footer-inner { max-width: 1200px; margin: 0 auto; }
        .gtr-footer-nav {
            display: flex;
            justify-content: center;
            flex-wrap: wrap;
            gap: 12px 20px;
            list-style: none;
            margin: 0 0 20px;
            padding: 0;
        }
        .gtr-footer-nav a {
            color: #ccc;
            font-size: 13px;
            font-weight: 600;
            text-transform: uppercase;
            letter-spacing: 0.4px;
            text-decoration: none;
        }
        .gtr-footer-nav a:hover { color: #e2c23f; }
        .gtr-footer-social {
            display: flex;
            justify-content: center;
            gap: 10px;
            margin-bottom: 16px;
        }
        .gtr-footer-social a {
            display: inline-flex;
            width: 32px; height: 32px;
            align-items: center; justify-content: center;
            background: #1a1a1a;
            border-radius: 50%;
            color: #aaa;
            text-decoration: none;
        }
        .gtr-footer-social a:hover { background: #e2c23f; color: #000; }
        .gtr-footer-social svg { width: 14px; height: 14px; fill: currentColor; }
        .gtr-footer-interlinks {
            font-size: 12px;
            margin-bottom: 12px;
            color: #777;
        }
        .gtr-footer-interlinks a {
            color: #e2c23f;
            font-weight: 600;
            margin: 0 6px;
            text-decoration: none;
        }
        .gtr-copyright { font-size: 12px; color: #555; }

        @media (min-width: 901px) {
            .gtr-menu-toggle { display: none; }
            .gtr-nav-drawer {
                position: static;
                width: auto;
                height: auto;
                box-shadow: none;
                padding: 0;
                background: transparent;
                display: flex;
            }
            .gtr-nav-drawer ul {
                flex-direction: row;
                gap: 24px;
            }
            .gtr-nav-cta { width: auto; margin-top: 0; margin-left: 16px; }
            .gtr-nav-social { display: none; }
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
            <div class="gtr-phone"><a href="tel:321-294-2081">321-294-2081</a></div>
            <button class="gtr-menu-toggle" aria-label="Open menu" aria-expanded="false" onclick="gtrToggleMenu()">
                <span></span><span></span><span></span>
            </button>
            <nav class="gtr-nav-drawer" id="gtrMobileNav">
                <ul>
                    <li><a href="https://goldenticketrealty.com/sell-your-house/">Sell Your House</a></li>
                    <li><a href="https://goldenticketrealty.com/how-we-buy-houses/">How It Works</a></li>
                    <li><a href="https://goldenticketrealty.com/testimonials/">Reviews</a></li>
                    <li><a href="https://goldenticketrealty.com/our-company/">Our Company</a></li>
                    <li><a href="https://goldenticketrealty.com/faqs/">FAQs</a></li>
                    <li><a href="https://goldenticketrealty.com/our-projects/">Projects</a></li>
                </ul>
                <a href="https://goldenticketrealty.com/sell-your-house/" class="gtr-nav-cta">Get Cash Offer</a>
                <div class="gtr-nav-social">
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
            </nav>
        </div>
    </header>
    <div class="gtr-overlay" id="gtrNavOverlay" onclick="gtrToggleMenu()"></div>
    <script>
    function gtrToggleMenu() {
        var nav = document.getElementById('gtrMobileNav');
        var overlay = document.getElementById('gtrNavOverlay');
        var btn = document.querySelector('.gtr-menu-toggle');
        var isOpen = nav.classList.contains('open');
        nav.classList.toggle('open');
        overlay.classList.toggle('open');
        btn.setAttribute('aria-expanded', String(!isOpen));
    }
    </script>
    <?php
}, 1 );

add_action( 'wp_footer', function() {
    ?>
    <footer class="gtr-footer">
        <div class="gtr-footer-inner">
            <ul class="gtr-footer-nav">
                <li><a href="https://goldenticketrealty.com/sell-your-house/">Cash Offer</a></li>
                <li><a href="https://goldenticketrealty.com/contact/">Contact</a></li>
                <li><a href="https://goldenticketrealty.com/how-we-buy-houses/">How It Works</a></li>
                <li><a href="https://goldenticketrealty.com/faqs/">FAQ</a></li>
                <li><a href="https://goldenticketrealty.com/privacy-policy/">Privacy</a></li>
                <li><a href="https://goldenticketrealty.com/terms-conditions/">Terms</a></li>
            </ul>
            <div class="gtr-footer-social">
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
            <div class="gtr-footer-interlinks">
                We also buy houses in <a href="https://sellmyhousefastbrevardfl.com" target="_blank">Brevard County</a> and <a href="https://sellmyhousefastcocoa.com" target="_blank">Cocoa</a>.
            </div>
            <div class="gtr-copyright">
                <p>&copy; <?php echo date('Y'); ?> Golden Ticket Realty | All Rights Reserved.</p>
            </div>
        </div>
    </footer>
    <?php
}, 99 );
