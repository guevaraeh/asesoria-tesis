<!-- https://codeformater.com/es/ -->

<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        @include('layouts.icon')
        <link rel="profile" href="//gmpg.org/xfn/11" />
        <script>
            document.documentElement.className = document.documentElement.className + " yes-js js_active js";
        </script>
        <title>@yield('title')</title>
        <meta name="robots" content="max-image-preview:large" />
        <style>
            img:is([sizes="auto" i], [sizes^="auto," i]) {
                contain-intrinsic-size: 3000px 1500px;
            }
        </style>
        <link rel="dns-prefetch" href="//fonts.googleapis.com" />
{{--
        <link rel="alternate" type="application/rss+xml" title="Consultio &raquo; Feed" href="../feed/index.htm" />
        <link rel="alternate" type="application/rss+xml" title="Consultio &raquo; Comments Feed" href="../comments/feed/index.htm" />
--}}
        <script type="text/javascript">
            /* <![CDATA[ */
            window._wpemojiSettings = {
                baseUrl: "https:\/\/s.w.org\/images\/core\/emoji\/15.1.0\/72x72\/",
                ext: ".png",
                svgUrl: "https:\/\/s.w.org\/images\/core\/emoji\/15.1.0\/svg\/",
                svgExt: ".svg",
                source: { concatemoji: "https:\/\/demo.casethemes.net\/consultio-digital-marketing\/wp-includes\/js\/wp-emoji-release.min.js') }}?ver=6.8.1" },
            };
            /*! This file is auto-generated */
            !(function (i, n) {
                var o, s, e;
                function c(e) {
                    try {
                        var t = { supportTests: e, timestamp: new Date().valueOf() };
                        sessionStorage.setItem(o, JSON.stringify(t));
                    } catch (e) {}
                }
                function p(e, t, n) {
                    e.clearRect(0, 0, e.canvas.width, e.canvas.height), e.fillText(t, 0, 0);
                    var t = new Uint32Array(e.getImageData(0, 0, e.canvas.width, e.canvas.height).data),
                        r = (e.clearRect(0, 0, e.canvas.width, e.canvas.height), e.fillText(n, 0, 0), new Uint32Array(e.getImageData(0, 0, e.canvas.width, e.canvas.height).data));
                    return t.every(function (e, t) {
                        return e === r[t];
                    });
                }
                function u(e, t, n) {
                    switch (t) {
                        case "flag":
                            return n(e, "\ud83c\udff3\ufe0f\u200d\u26a7\ufe0f", "\ud83c\udff3\ufe0f\u200b\u26a7\ufe0f")
                                ? !1
                                : !n(e, "\ud83c\uddfa\ud83c\uddf3", "\ud83c\uddfa\u200b\ud83c\uddf3") &&
                                      !n(
                                          e,
                                          "\ud83c\udff4\udb40\udc67\udb40\udc62\udb40\udc65\udb40\udc6e\udb40\udc67\udb40\udc7f",
                                          "\ud83c\udff4\u200b\udb40\udc67\u200b\udb40\udc62\u200b\udb40\udc65\u200b\udb40\udc6e\u200b\udb40\udc67\u200b\udb40\udc7f"
                                      );
                        case "emoji":
                            return !n(e, "\ud83d\udc26\u200d\ud83d\udd25", "\ud83d\udc26\u200b\ud83d\udd25");
                    }
                    return !1;
                }
                function f(e, t, n) {
                    var r = "undefined" != typeof WorkerGlobalScope && self instanceof WorkerGlobalScope ? new OffscreenCanvas(300, 150) : i.createElement("canvas"),
                        a = r.getContext("2d", { willReadFrequently: !0 }),
                        o = ((a.textBaseline = "top"), (a.font = "600 32px Arial"), {});
                    return (
                        e.forEach(function (e) {
                            o[e] = t(a, e, n);
                        }),
                        o
                    );
                }
                function t(e) {
                    var t = i.createElement("script");
                    (t.src = e), (t.defer = !0), i.head.appendChild(t);
                }
                "undefined" != typeof Promise &&
                    ((o = "wpEmojiSettingsSupports"),
                    (s = ["flag", "emoji"]),
                    (n.supports = { everything: !0, everythingExceptFlag: !0 }),
                    (e = new Promise(function (e) {
                        i.addEventListener("DOMContentLoaded", e, { once: !0 });
                    })),
                    new Promise(function (t) {
                        var n = (function () {
                            try {
                                var e = JSON.parse(sessionStorage.getItem(o));
                                if ("object" == typeof e && "number" == typeof e.timestamp && new Date().valueOf() < e.timestamp + 604800 && "object" == typeof e.supportTests) return e.supportTests;
                            } catch (e) {}
                            return null;
                        })();
                        if (!n) {
                            if ("undefined" != typeof Worker && "undefined" != typeof OffscreenCanvas && "undefined" != typeof URL && URL.createObjectURL && "undefined" != typeof Blob)
                                try {
                                    var e = "postMessage(" + f.toString() + "(" + [JSON.stringify(s), u.toString(), p.toString()].join(",") + "));",
                                        r = new Blob([e], { type: "text/javascript" }),
                                        a = new Worker(URL.createObjectURL(r), { name: "wpTestEmojiSupports" });
                                    return void (a.onmessage = function (e) {
                                        c((n = e.data)), a.terminate(), t(n);
                                    });
                                } catch (e) {}
                            c((n = f(s, u, p)));
                        }
                        t(n);
                    })
                        .then(function (e) {
                            for (var t in e) (n.supports[t] = e[t]), (n.supports.everything = n.supports.everything && n.supports[t]), "flag" !== t && (n.supports.everythingExceptFlag = n.supports.everythingExceptFlag && n.supports[t]);
                            (n.supports.everythingExceptFlag = n.supports.everythingExceptFlag && !n.supports.flag),
                                (n.DOMReady = !1),
                                (n.readyCallback = function () {
                                    n.DOMReady = !0;
                                });
                        })
                        .then(function () {
                            return e;
                        })
                        .then(function () {
                            var e;
                            n.supports.everything || (n.readyCallback(), (e = n.source || {}).concatemoji ? t(e.concatemoji) : e.wpemoji && e.twemoji && (t(e.twemoji), t(e.wpemoji)));
                        }));
            })((window, document), window._wpemojiSettings);
            /* ]]> */
        </script>
        <link rel="stylesheet" id="sbi_styles-css" href="{{ asset('libraries/wp-content/plugins/instagram-feed/css/sbi-styles.min.css') }}?ver=6.6.0" type="text/css" media="all" />
        <style id="wp-emoji-styles-inline-css" type="text/css">
            img.wp-smiley,
            img.emoji {
                display: inline !important;
                border: none !important;
                box-shadow: none !important;
                height: 1em !important;
                width: 1em !important;
                margin: 0 0.07em !important;
                vertical-align: -0.1em !important;
                background: none !important;
                padding: 0 !important;
            }
        </style>
        <style id="classic-theme-styles-inline-css" type="text/css">
            /*! This file is auto-generated */
            .wp-block-button__link {
                color: #fff;
                background-color: #32373c;
                border-radius: 9999px;
                box-shadow: none;
                text-decoration: none;
                padding: calc(0.667em + 2px) calc(1.333em + 2px);
                font-size: 1.125em;
            }
            .wp-block-file__button {
                background: #32373c;
                color: #fff;
                text-decoration: none;
            }
        </style>
        <link rel="stylesheet" id="jquery-selectBox-css" href="{{ asset('libraries/wp-content/plugins/yith-woocommerce-wishlist/assets/css/jquery-selectBox.min.css') }}?ver=1.2.0" type="text/css" media="all" />
        <link rel="stylesheet" id="woocommerce_prettyPhoto_css-css" href="{{ asset('libraries/wp-content/plugins/woocommerce/assets/css/woocommerce_prettyPhoto_css.min.css') }}?ver=3.1.6" type="text/css" media="all" />
        <link rel="stylesheet" id="yith-wcwl-main-css" href="{{ asset('libraries/wp-content/plugins/yith-woocommerce-wishlist/assets/css/yith-wcwl-main.min.css') }}?ver=4.0.1" type="text/css" media="all" />
        <style id="yith-wcwl-main-inline-css" type="text/css">
            :root {
                --rounded-corners-radius: 16px;
                --color-add-to-cart-background: #333333;
                --color-add-to-cart-text: #ffffff;
                --color-add-to-cart-border: #333333;
                --color-add-to-cart-background-hover: #4f4f4f;
                --color-add-to-cart-text-hover: #ffffff;
                --color-add-to-cart-border-hover: #4f4f4f;
                --add-to-cart-rounded-corners-radius: 16px;
                --color-button-style-1-background: #333333;
                --color-button-style-1-text: #ffffff;
                --color-button-style-1-border: #333333;
                --color-button-style-1-background-hover: #4f4f4f;
                --color-button-style-1-text-hover: #ffffff;
                --color-button-style-1-border-hover: #4f4f4f;
                --color-button-style-2-background: #333333;
                --color-button-style-2-text: #ffffff;
                --color-button-style-2-border: #333333;
                --color-button-style-2-background-hover: #4f4f4f;
                --color-button-style-2-text-hover: #ffffff;
                --color-button-style-2-border-hover: #4f4f4f;
                --color-wishlist-table-background: #ffffff;
                --color-wishlist-table-text: #6d6c6c;
                --color-wishlist-table-border: #ffffff;
                --color-headers-background: #f4f4f4;
                --color-share-button-color: #ffffff;
                --color-share-button-color-hover: #ffffff;
                --color-fb-button-background: #39599e;
                --color-fb-button-background-hover: #595a5a;
                --color-tw-button-background: #45afe2;
                --color-tw-button-background-hover: #595a5a;
                --color-pr-button-background: #ab2e31;
                --color-pr-button-background-hover: #595a5a;
                --color-em-button-background: #fbb102;
                --color-em-button-background-hover: #595a5a;
                --color-wa-button-background: #00a901;
                --color-wa-button-background-hover: #595a5a;
                --feedback-duration: 3s;
            }
            :root {
                --rounded-corners-radius: 16px;
                --color-add-to-cart-background: #333333;
                --color-add-to-cart-text: #ffffff;
                --color-add-to-cart-border: #333333;
                --color-add-to-cart-background-hover: #4f4f4f;
                --color-add-to-cart-text-hover: #ffffff;
                --color-add-to-cart-border-hover: #4f4f4f;
                --add-to-cart-rounded-corners-radius: 16px;
                --color-button-style-1-background: #333333;
                --color-button-style-1-text: #ffffff;
                --color-button-style-1-border: #333333;
                --color-button-style-1-background-hover: #4f4f4f;
                --color-button-style-1-text-hover: #ffffff;
                --color-button-style-1-border-hover: #4f4f4f;
                --color-button-style-2-background: #333333;
                --color-button-style-2-text: #ffffff;
                --color-button-style-2-border: #333333;
                --color-button-style-2-background-hover: #4f4f4f;
                --color-button-style-2-text-hover: #ffffff;
                --color-button-style-2-border-hover: #4f4f4f;
                --color-wishlist-table-background: #ffffff;
                --color-wishlist-table-text: #6d6c6c;
                --color-wishlist-table-border: #ffffff;
                --color-headers-background: #f4f4f4;
                --color-share-button-color: #ffffff;
                --color-share-button-color-hover: #ffffff;
                --color-fb-button-background: #39599e;
                --color-fb-button-background-hover: #595a5a;
                --color-tw-button-background: #45afe2;
                --color-tw-button-background-hover: #595a5a;
                --color-pr-button-background: #ab2e31;
                --color-pr-button-background-hover: #595a5a;
                --color-em-button-background: #fbb102;
                --color-em-button-background-hover: #595a5a;
                --color-wa-button-background: #00a901;
                --color-wa-button-background-hover: #595a5a;
                --feedback-duration: 3s;
            }
        </style>
        <style id="global-styles-inline-css" type="text/css">
            :root {
                --wp--preset--aspect-ratio--square: 1;
                --wp--preset--aspect-ratio--4-3: 4/3;
                --wp--preset--aspect-ratio--3-4: 3/4;
                --wp--preset--aspect-ratio--3-2: 3/2;
                --wp--preset--aspect-ratio--2-3: 2/3;
                --wp--preset--aspect-ratio--16-9: 16/9;
                --wp--preset--aspect-ratio--9-16: 9/16;
                --wp--preset--color--black: #000000;
                --wp--preset--color--cyan-bluish-gray: #abb8c3;
                --wp--preset--color--white: #ffffff;
                --wp--preset--color--pale-pink: #f78da7;
                --wp--preset--color--vivid-red: #cf2e2e;
                --wp--preset--color--luminous-vivid-orange: #ff6900;
                --wp--preset--color--luminous-vivid-amber: #fcb900;
                --wp--preset--color--light-green-cyan: #7bdcb5;
                --wp--preset--color--vivid-green-cyan: #00d084;
                --wp--preset--color--pale-cyan-blue: #8ed1fc;
                --wp--preset--color--vivid-cyan-blue: #0693e3;
                --wp--preset--color--vivid-purple: #9b51e0;
                --wp--preset--gradient--vivid-cyan-blue-to-vivid-purple: linear-gradient(135deg, rgba(6, 147, 227, 1) 0%, rgb(155, 81, 224) 100%);
                --wp--preset--gradient--light-green-cyan-to-vivid-green-cyan: linear-gradient(135deg, rgb(122, 220, 180) 0%, rgb(0, 208, 130) 100%);
                --wp--preset--gradient--luminous-vivid-amber-to-luminous-vivid-orange: linear-gradient(135deg, rgba(252, 185, 0, 1) 0%, rgba(255, 105, 0, 1) 100%);
                --wp--preset--gradient--luminous-vivid-orange-to-vivid-red: linear-gradient(135deg, rgba(255, 105, 0, 1) 0%, rgb(207, 46, 46) 100%);
                --wp--preset--gradient--very-light-gray-to-cyan-bluish-gray: linear-gradient(135deg, rgb(238, 238, 238) 0%, rgb(169, 184, 195) 100%);
                --wp--preset--gradient--cool-to-warm-spectrum: linear-gradient(135deg, rgb(74, 234, 220) 0%, rgb(151, 120, 209) 20%, rgb(207, 42, 186) 40%, rgb(238, 44, 130) 60%, rgb(251, 105, 98) 80%, rgb(254, 248, 76) 100%);
                --wp--preset--gradient--blush-light-purple: linear-gradient(135deg, rgb(255, 206, 236) 0%, rgb(152, 150, 240) 100%);
                --wp--preset--gradient--blush-bordeaux: linear-gradient(135deg, rgb(254, 205, 165) 0%, rgb(254, 45, 45) 50%, rgb(107, 0, 62) 100%);
                --wp--preset--gradient--luminous-dusk: linear-gradient(135deg, rgb(255, 203, 112) 0%, rgb(199, 81, 192) 50%, rgb(65, 88, 208) 100%);
                --wp--preset--gradient--pale-ocean: linear-gradient(135deg, rgb(255, 245, 203) 0%, rgb(182, 227, 212) 50%, rgb(51, 167, 181) 100%);
                --wp--preset--gradient--electric-grass: linear-gradient(135deg, rgb(202, 248, 128) 0%, rgb(113, 206, 126) 100%);
                --wp--preset--gradient--midnight: linear-gradient(135deg, rgb(2, 3, 129) 0%, rgb(40, 116, 252) 100%);
                --wp--preset--font-size--small: 13px;
                --wp--preset--font-size--medium: 20px;
                --wp--preset--font-size--large: 36px;
                --wp--preset--font-size--x-large: 42px;
                --wp--preset--font-family--inter: "Inter", sans-serif;
                --wp--preset--font-family--cardo: Cardo;
                --wp--preset--spacing--20: 0.44rem;
                --wp--preset--spacing--30: 0.67rem;
                --wp--preset--spacing--40: 1rem;
                --wp--preset--spacing--50: 1.5rem;
                --wp--preset--spacing--60: 2.25rem;
                --wp--preset--spacing--70: 3.38rem;
                --wp--preset--spacing--80: 5.06rem;
                --wp--preset--shadow--natural: 6px 6px 9px rgba(0, 0, 0, 0.2);
                --wp--preset--shadow--deep: 12px 12px 50px rgba(0, 0, 0, 0.4);
                --wp--preset--shadow--sharp: 6px 6px 0px rgba(0, 0, 0, 0.2);
                --wp--preset--shadow--outlined: 6px 6px 0px -3px rgba(255, 255, 255, 1), 6px 6px rgba(0, 0, 0, 1);
                --wp--preset--shadow--crisp: 6px 6px 0px rgba(0, 0, 0, 1);
            }
            :where(.is-layout-flex) {
                gap: 0.5em;
            }
            :where(.is-layout-grid) {
                gap: 0.5em;
            }
            body .is-layout-flex {
                display: flex;
            }
            .is-layout-flex {
                flex-wrap: wrap;
                align-items: center;
            }
            .is-layout-flex > :is(*, div) {
                margin: 0;
            }
            body .is-layout-grid {
                display: grid;
            }
            .is-layout-grid > :is(*, div) {
                margin: 0;
            }
            :where(.wp-block-columns.is-layout-flex) {
                gap: 2em;
            }
            :where(.wp-block-columns.is-layout-grid) {
                gap: 2em;
            }
            :where(.wp-block-post-template.is-layout-flex) {
                gap: 1.25em;
            }
            :where(.wp-block-post-template.is-layout-grid) {
                gap: 1.25em;
            }
            .has-black-color {
                color: var(--wp--preset--color--black) !important;
            }
            .has-cyan-bluish-gray-color {
                color: var(--wp--preset--color--cyan-bluish-gray) !important;
            }
            .has-white-color {
                color: var(--wp--preset--color--white) !important;
            }
            .has-pale-pink-color {
                color: var(--wp--preset--color--pale-pink) !important;
            }
            .has-vivid-red-color {
                color: var(--wp--preset--color--vivid-red) !important;
            }
            .has-luminous-vivid-orange-color {
                color: var(--wp--preset--color--luminous-vivid-orange) !important;
            }
            .has-luminous-vivid-amber-color {
                color: var(--wp--preset--color--luminous-vivid-amber) !important;
            }
            .has-light-green-cyan-color {
                color: var(--wp--preset--color--light-green-cyan) !important;
            }
            .has-vivid-green-cyan-color {
                color: var(--wp--preset--color--vivid-green-cyan) !important;
            }
            .has-pale-cyan-blue-color {
                color: var(--wp--preset--color--pale-cyan-blue) !important;
            }
            .has-vivid-cyan-blue-color {
                color: var(--wp--preset--color--vivid-cyan-blue) !important;
            }
            .has-vivid-purple-color {
                color: var(--wp--preset--color--vivid-purple) !important;
            }
            .has-black-background-color {
                background-color: var(--wp--preset--color--black) !important;
            }
            .has-cyan-bluish-gray-background-color {
                background-color: var(--wp--preset--color--cyan-bluish-gray) !important;
            }
            .has-white-background-color {
                background-color: var(--wp--preset--color--white) !important;
            }
            .has-pale-pink-background-color {
                background-color: var(--wp--preset--color--pale-pink) !important;
            }
            .has-vivid-red-background-color {
                background-color: var(--wp--preset--color--vivid-red) !important;
            }
            .has-luminous-vivid-orange-background-color {
                background-color: var(--wp--preset--color--luminous-vivid-orange) !important;
            }
            .has-luminous-vivid-amber-background-color {
                background-color: var(--wp--preset--color--luminous-vivid-amber) !important;
            }
            .has-light-green-cyan-background-color {
                background-color: var(--wp--preset--color--light-green-cyan) !important;
            }
            .has-vivid-green-cyan-background-color {
                background-color: var(--wp--preset--color--vivid-green-cyan) !important;
            }
            .has-pale-cyan-blue-background-color {
                background-color: var(--wp--preset--color--pale-cyan-blue) !important;
            }
            .has-vivid-cyan-blue-background-color {
                background-color: var(--wp--preset--color--vivid-cyan-blue) !important;
            }
            .has-vivid-purple-background-color {
                background-color: var(--wp--preset--color--vivid-purple) !important;
            }
            .has-black-border-color {
                border-color: var(--wp--preset--color--black) !important;
            }
            .has-cyan-bluish-gray-border-color {
                border-color: var(--wp--preset--color--cyan-bluish-gray) !important;
            }
            .has-white-border-color {
                border-color: var(--wp--preset--color--white) !important;
            }
            .has-pale-pink-border-color {
                border-color: var(--wp--preset--color--pale-pink) !important;
            }
            .has-vivid-red-border-color {
                border-color: var(--wp--preset--color--vivid-red) !important;
            }
            .has-luminous-vivid-orange-border-color {
                border-color: var(--wp--preset--color--luminous-vivid-orange) !important;
            }
            .has-luminous-vivid-amber-border-color {
                border-color: var(--wp--preset--color--luminous-vivid-amber) !important;
            }
            .has-light-green-cyan-border-color {
                border-color: var(--wp--preset--color--light-green-cyan) !important;
            }
            .has-vivid-green-cyan-border-color {
                border-color: var(--wp--preset--color--vivid-green-cyan) !important;
            }
            .has-pale-cyan-blue-border-color {
                border-color: var(--wp--preset--color--pale-cyan-blue) !important;
            }
            .has-vivid-cyan-blue-border-color {
                border-color: var(--wp--preset--color--vivid-cyan-blue) !important;
            }
            .has-vivid-purple-border-color {
                border-color: var(--wp--preset--color--vivid-purple) !important;
            }
            .has-vivid-cyan-blue-to-vivid-purple-gradient-background {
                background: var(--wp--preset--gradient--vivid-cyan-blue-to-vivid-purple) !important;
            }
            .has-light-green-cyan-to-vivid-green-cyan-gradient-background {
                background: var(--wp--preset--gradient--light-green-cyan-to-vivid-green-cyan) !important;
            }
            .has-luminous-vivid-amber-to-luminous-vivid-orange-gradient-background {
                background: var(--wp--preset--gradient--luminous-vivid-amber-to-luminous-vivid-orange) !important;
            }
            .has-luminous-vivid-orange-to-vivid-red-gradient-background {
                background: var(--wp--preset--gradient--luminous-vivid-orange-to-vivid-red) !important;
            }
            .has-very-light-gray-to-cyan-bluish-gray-gradient-background {
                background: var(--wp--preset--gradient--very-light-gray-to-cyan-bluish-gray) !important;
            }
            .has-cool-to-warm-spectrum-gradient-background {
                background: var(--wp--preset--gradient--cool-to-warm-spectrum) !important;
            }
            .has-blush-light-purple-gradient-background {
                background: var(--wp--preset--gradient--blush-light-purple) !important;
            }
            .has-blush-bordeaux-gradient-background {
                background: var(--wp--preset--gradient--blush-bordeaux) !important;
            }
            .has-luminous-dusk-gradient-background {
                background: var(--wp--preset--gradient--luminous-dusk) !important;
            }
            .has-pale-ocean-gradient-background {
                background: var(--wp--preset--gradient--pale-ocean) !important;
            }
            .has-electric-grass-gradient-background {
                background: var(--wp--preset--gradient--electric-grass) !important;
            }
            .has-midnight-gradient-background {
                background: var(--wp--preset--gradient--midnight) !important;
            }
            .has-small-font-size {
                font-size: var(--wp--preset--font-size--small) !important;
            }
            .has-medium-font-size {
                font-size: var(--wp--preset--font-size--medium) !important;
            }
            .has-large-font-size {
                font-size: var(--wp--preset--font-size--large) !important;
            }
            .has-x-large-font-size {
                font-size: var(--wp--preset--font-size--x-large) !important;
            }
            :where(.wp-block-post-template.is-layout-flex) {
                gap: 1.25em;
            }
            :where(.wp-block-post-template.is-layout-grid) {
                gap: 1.25em;
            }
            :where(.wp-block-columns.is-layout-flex) {
                gap: 2em;
            }
            :where(.wp-block-columns.is-layout-grid) {
                gap: 2em;
            }
            :root :where(.wp-block-pullquote) {
                font-size: 1.5em;
                line-height: 1.6;
            }
        </style>
        <link rel="stylesheet" id="ct-main-css-css" href="{{ asset('libraries/wp-content/plugins/case-theme-core/assets/css/ct-main-css.min.css') }}?ver=1.0.0" type="text/css" media="all" />
        <link rel="stylesheet" id="progressbar-lib-css-css" href="{{ asset('libraries/wp-content/plugins/case-theme-core/assets/css/lib/progressbar.min.css') }}?ver=0.7.1" type="text/css" media="all" />
        <link rel="stylesheet" id="oc-css-css" href="{{ asset('libraries/wp-content/plugins/case-theme-core/assets/css/lib/owl.carousel.min.css') }}?ver=2.2.1" type="text/css" media="all" />
        <link rel="stylesheet" id="ct-slick-css-css" href="{{ asset('libraries/wp-content/plugins/case-theme-core/assets/css/lib/ct-slick-css.min.css') }}?ver=1.0.0" type="text/css" media="all" />
        <link rel="stylesheet" id="ct-font-awesome-css" href="{{ asset('libraries/wp-content/plugins/case-theme-core/assets/plugin/font-awesome/css/font-awesome.min.css') }}?ver=4.7.0" type="text/css" media="all" />
{{--
        <link rel="stylesheet" id="contact-form-7-css" href="{{ asset('libraries/wp-content/plugins/contact-form-7/includes/css/contact-form-7.min.css') }}?ver=6.0" type="text/css" media="all" />
--}}
        <link rel="stylesheet" id="purchase-link-css-css" href="{{ asset('libraries/wp-content/plugins/envato-purchase-link/css/purchase-link-css.min.css') }}?ver=1.0.0" type="text/css" media="all" />
        <link rel="stylesheet" id="woocommerce-layout-css" href="{{ asset('libraries/wp-content/plugins/woocommerce/assets/css/woocommerce-layout.min.css') }}?ver=9.3.3" type="text/css" media="all" />
        <link rel="stylesheet" id="woocommerce-smallscreen-css" href="{{ asset('libraries/wp-content/plugins/woocommerce/assets/css/woocommerce-smallscreen.min.css') }}?ver=9.3.3" type="text/css" media="only screen and (max-width: 768px)" />
        <link rel="stylesheet" id="woocommerce-general-css" href="{{ asset('libraries/wp-content/plugins/woocommerce/assets/css/woocommerce-general.min.css') }}?ver=9.3.3" type="text/css" media="all" />
        <style id="woocommerce-inline-inline-css" type="text/css">
            .woocommerce form .form-row .required {
                visibility: visible;
            }
        </style>
        <link rel="stylesheet" id="yith-quick-view-css" href="{{ asset('libraries/wp-content/plugins/yith-woocommerce-quick-view/assets/css/yith-quick-view.min.css') }}?ver=1.43.0" type="text/css" media="all" />
        <style id="yith-quick-view-inline-css" type="text/css">
            #yith-quick-view-modal .yith-wcqv-main {
                background: #ffffff;
            }
            #yith-quick-view-close {
                color: #cdcdcd;
            }
            #yith-quick-view-close:hover {
                color: #ff0000;
            }
        </style>
        <link rel="stylesheet" id="bootstrap-css" href="{{ asset('libraries/wp-content/themes/csuti/assets/css/bootstrap.min.css') }}?ver=4.0.0" type="text/css" media="all" />
        <link rel="stylesheet" id="font-awesome-css" href="{{ asset('libraries/wp-content/plugins/elementor/assets/lib/font-awesome/css/font-awesome.min.css') }}?ver=4.7.0" type="text/css" media="all" />
        <style id="font-awesome-inline-css" type="text/css">
            [data-font="FontAwesome"]:before {
                font-family: "FontAwesome" !important;
                content: attr(data-icon) !important;
                speak: none !important;
                font-weight: normal !important;
                font-variant: normal !important;
                text-transform: none !important;
                line-height: 1 !important;
                font-style: normal !important;
                -webkit-font-smoothing: antialiased !important;
                -moz-osx-font-smoothing: grayscale !important;
            }
        </style>

        <link rel="stylesheet" id="font-awesome-v5-css" href="{{ asset('libraries/wp-content/themes/csuti/assets/css/font-awesome5.min.css') }}?ver=5.8.0" type="text/css" media="all" />
        <link rel="stylesheet" id="font-flaticon-css" href="{{ asset('libraries/wp-content/themes/csuti/assets/css/font-flaticon.min.css') }}?ver=3.2.1" type="text/css" media="all" />
        <link rel="stylesheet" id="font-flaticon-v2-css" href="{{ asset('libraries/wp-content/themes/csuti/assets/css/font-flaticon-v2.min.css') }}?ver=3.2.1" type="text/css" media="all" />
        <link rel="stylesheet" id="font-flaticon-v3-css" href="{{ asset('libraries/wp-content/themes/csuti/assets/css/font-flaticon-v3.min.css') }}?ver=3.2.1" type="text/css" media="all" />
        <link rel="stylesheet" id="font-flaticon-v4-css" href="{{ asset('libraries/wp-content/themes/csuti/assets/css/font-flaticon-v4.min.css') }}?ver=3.2.1" type="text/css" media="all" />
        <link rel="stylesheet" id="font-flaticon-v5-css" href="{{ asset('libraries/wp-content/themes/csuti/assets/css/font-flaticon-v5.min.css') }}?ver=3.2.1" type="text/css" media="all" />
        <link rel="stylesheet" id="font-flaticon-v6-css" href="{{ asset('libraries/wp-content/themes/csuti/assets/css/font-flaticon-v6.min.css') }}?ver=3.2.1" type="text/css" media="all" />
        <link rel="stylesheet" id="font-flaticon-v7-css" href="{{ asset('libraries/wp-content/themes/csuti/assets/css/font-flaticon-v7.min.css') }}?ver=3.2.1" type="text/css" media="all" />
        <link rel="stylesheet" id="font-flaticon-v8-css" href="{{ asset('libraries/wp-content/themes/csuti/assets/css/font-flaticon-v8.min.css') }}?ver=3.2.1" type="text/css" media="all" />

        <link rel="stylesheet" id="font-material-icon-css" href="{{ asset('libraries/wp-content/themes/csuti/assets/css/material-design-iconic-font.min.css') }}?ver=2.2.0" type="text/css" media="all" />
        <link rel="stylesheet" id="magnific-popup-css" href="{{ asset('libraries/wp-content/themes/csuti/assets/css/magnific-popup.min.css') }}?ver=1.0.0" type="text/css" media="all" />
        <link rel="stylesheet" id="animate-css" href="{{ asset('libraries/wp-content/themes/csuti/assets/css/animate.min.css') }}?ver=1.0.0" type="text/css" media="all" />
        <link rel="stylesheet" id="consultio-theme-css" href="{{ asset('libraries/wp-content/themes/csuti/assets/css/consultio-theme-global.min.css') }}?ver=3.2.1" type="text/css" media="all" />
        <style id="consultio-theme-inline-css" type="text/css">
            :root {
                --gradient-color-from: #ffc000;
                --gradient-color-to: #ffc000;
                --gradient-color-from-rgb: 255, 192, 0;
                --gradient-color-to-rgb: 255, 192, 0;
            }
            @media screen and (min-width: 1200px) {
                #ct-header-wrap .ct-header-branding a img {
                    max-height: 61px !important;
                }
                #ct-header-wrap .ct-header-main.h-fixed .ct-header-branding a img {
                    max-height: 61px !important;
                }
            }
            @media screen and (max-width: 1199px) {
                #ct-header-wrap .ct-header-branding a img,
                #ct-header-wrap .ct-logo-mobile img,
                #ct-header-elementor .ct-header-mobile .ct-header-branding img {
                    max-height: 51px !important;
                }
            }
            @media screen and (min-width: 1200px) {
            }
            .ct-heading .item--sub-title.style1::before {
                width: 44px;
                height: 4px;
            }
            .ct-heading .item--sub-title.style1 {
                padding-left: 60px;
            }
            .ct-heading .item--title cite {
                font-family: inherit;
                font-style: normal;
            }
        </style>
        <link rel="stylesheet" id="consultio-style-css" href="{{ asset('libraries/wp-content/themes/csuti/consultio-style.min.css') }}?ver=6.8.1" type="text/css" media="all" />



        
        @yield('up')






        <meta name="generator" content="Elementor 3.25.4; features: additional_custom_breakpoints; settings: css_print_method-external, google_font-enabled, font_display-auto" />
        <style>
            .e-con.e-parent:nth-of-type(n + 4):not(.e-lazyloaded):not(.e-no-lazyload),
            .e-con.e-parent:nth-of-type(n + 4):not(.e-lazyloaded):not(.e-no-lazyload) * {
                background-image: none !important;
            }
            @media screen and (max-height: 1024px) {
                .e-con.e-parent:nth-of-type(n + 3):not(.e-lazyloaded):not(.e-no-lazyload),
                .e-con.e-parent:nth-of-type(n + 3):not(.e-lazyloaded):not(.e-no-lazyload) * {
                    background-image: none !important;
                }
            }
            @media screen and (max-height: 640px) {
                .e-con.e-parent:nth-of-type(n + 2):not(.e-lazyloaded):not(.e-no-lazyload),
                .e-con.e-parent:nth-of-type(n + 2):not(.e-lazyloaded):not(.e-no-lazyload) * {
                    background-image: none !important;
                }
            }
        </style>
        <meta name="generator" content="Powered by Slider Revolution 6.6.20 - responsive, Mobile-Friendly Slider Plugin for WordPress with comfortable drag and drop interface." />
        <style class="wp-fonts-local" type="text/css">
            @font-face {
                font-family: Inter;
                font-style: normal;
                font-weight: 300 900;
                font-display: fallback;
                src: url("{{ asset('libraries/wp-content/plugins/woocommerce/assets/fonts/Inter-VariableFont_slnt,wght.woff2') }}") format("woff2");
                font-stretch: normal;
            }
            @font-face {
                font-family: Cardo;
                font-style: normal;
                font-weight: 400;
                font-display: fallback;
                src: url("{{ asset('libraries/wp-content/plugins/woocommerce/assets/fonts/cardo_normal_400.woff2') }}") format("woff2");
            }
        </style>
        <script>
            function setREVStartSize(e) {
                //window.requestAnimationFrame(function() {
                window.RSIW = window.RSIW === undefined ? window.innerWidth : window.RSIW;
                window.RSIH = window.RSIH === undefined ? window.innerHeight : window.RSIH;
                try {
                    var pw = document.getElementById(e.c).parentNode.offsetWidth,
                        newh;
                    pw = pw === 0 || isNaN(pw) || e.l == "fullwidth" || e.layout == "fullwidth" ? window.RSIW : pw;
                    e.tabw = e.tabw === undefined ? 0 : parseInt(e.tabw);
                    e.thumbw = e.thumbw === undefined ? 0 : parseInt(e.thumbw);
                    e.tabh = e.tabh === undefined ? 0 : parseInt(e.tabh);
                    e.thumbh = e.thumbh === undefined ? 0 : parseInt(e.thumbh);
                    e.tabhide = e.tabhide === undefined ? 0 : parseInt(e.tabhide);
                    e.thumbhide = e.thumbhide === undefined ? 0 : parseInt(e.thumbhide);
                    e.mh = e.mh === undefined || e.mh == "" || e.mh === "auto" ? 0 : parseInt(e.mh, 0);
                    if (e.layout === "fullscreen" || e.l === "fullscreen") newh = Math.max(e.mh, window.RSIH);
                    else {
                        e.gw = Array.isArray(e.gw) ? e.gw : [e.gw];
                        for (var i in e.rl) if (e.gw[i] === undefined || e.gw[i] === 0) e.gw[i] = e.gw[i - 1];
                        e.gh = e.el === undefined || e.el === "" || (Array.isArray(e.el) && e.el.length == 0) ? e.gh : e.el;
                        e.gh = Array.isArray(e.gh) ? e.gh : [e.gh];
                        for (var i in e.rl) if (e.gh[i] === undefined || e.gh[i] === 0) e.gh[i] = e.gh[i - 1];
                        var nl = new Array(e.rl.length),
                            ix = 0,
                            sl;
                        e.tabw = e.tabhide >= pw ? 0 : e.tabw;
                        e.thumbw = e.thumbhide >= pw ? 0 : e.thumbw;
                        e.tabh = e.tabhide >= pw ? 0 : e.tabh;
                        e.thumbh = e.thumbhide >= pw ? 0 : e.thumbh;
                        for (var i in e.rl) nl[i] = e.rl[i] < window.RSIW ? 0 : e.rl[i];
                        sl = nl[0];
                        for (var i in nl)
                            if (sl > nl[i] && nl[i] > 0) {
                                sl = nl[i];
                                ix = i;
                            }
                        var m = pw > e.gw[ix] + e.tabw + e.thumbw ? 1 : (pw - (e.tabw + e.thumbw)) / e.gw[ix];
                        newh = e.gh[ix] * m + (e.tabh + e.thumbh);
                    }
                    var el = document.getElementById(e.c);
                    if (el !== null && el) el.style.height = newh + "px";
                    el = document.getElementById(e.c + "_wrapper");
                    if (el !== null && el) {
                        el.style.height = newh + "px";
                        el.style.display = "block";
                    }
                } catch (e) {
                    console.log("Failure at Presize of Slider:" + e);
                }
                //});
            }
        </script>
        <style type="text/css" id="wp-custom-css">
            .ct-hidden-sidebar section.widget.logo-hidden-sidebar img {
                max-height: 50px;
            }
        </style>
        <style id="ct_theme_options-dynamic-css" title="dynamic-css" class="redux-options-output">
            body #pagetitle {
                background-image: url("{{ asset('libraries/wp-content/uploads/2021/02/bg-page-title.jpg') }}");
            }
            a {
                color: #ffc000;
            }
            a:hover {
                color: #ff9d12;
            }
            a:active {
                color: #ff9d12;
            }
        </style>
        <style id="ct-page-dynamic-css" data-type="redux-output-css">
            #content {
                padding-top: 0px;
                padding-bottom: 0px;
            }
        </style>
    </head>
    <body
        class="wp-singular page-template-default page page-id-26 wp-theme-csuti theme-csuti woocommerce-no-js redux-page site-h1 body-default-font heading-default-font header-sticky ct-gradient-same btn-type-normal mobile-header-light site-404-default elementor-default elementor-kit-4540 elementor-page elementor-page-26"
    >
        <div id="page" class="site">
            <div id="ct-loadding" class="ct-loader style9"><div class="ct-dual-ring"></div></div>



            

            @include('layouts.header')
            @yield('content')
            @include('layouts.footer')





            <a href="#" class="scroll-top"><i class="zmdi zmdi-long-arrow-up"></i></a>
        </div>
        <!-- #page -->
        <div class="ct-modal ct-modal-search">
            <div class="ct-modal-close"><i class="ct-icon-close ct-center"></i></div>
            <div class="ct-modal-overlay"></div>
            <div class="ct-modal-content">
                <form role="search" method="get" class="search-form-popup" action="https://demo.casethemes.net/consultio-digital-marketing/">
                    <div class="searchform-wrap">
                        <input type="text" placeholder="Enter Keywords..." id="search" name="s" class="search-field" /> <button type="submit" class="search-submit"><i class="zmdi zmdi-search"></i></button>
                    </div>
                </form>
            </div>
        </div>
        <div class="ct-hidden-sidebar-wrap">
            <div class="ct-hidden-sidebar-overlay"></div>
            <div class="ct-hidden-sidebar">
                <div class="ct-hidden-close"><i class="zmdi zmdi-close"></i></div>
                <div class="ct-hidden-sidebar-inner">
                    <div class="ct-hidden-sidebar-holder">
                        <section id="media_image-3" class="logo-hidden-sidebar widget widget_media_image">
                            <div class="widget-content">
                                <a href="../index.htm">
                                    <img
                                        width="466"
                                        height="122"
                                        src="{{ asset('libraries/wp-content/uploads/2021/02/logo-dark.png') }}"
                                        class="image wp-image-6276 attachment-full size-full"
                                        alt=""
                                        style="max-width: 100%; height: auto;"
                                        decoding="async"
                                        srcset="{{ asset('libraries/wp-content/uploads/2021/02/logo-dark.png') }} 466w, {{ asset('libraries/wp-content/uploads/2021/02/logo-dark-300x79.png') }} 300w"
                                        sizes="(max-width: 466px) 100vw, 466px"
                                        loading="eager"
                                    />
                                </a>
                            </div>
                        </section>
                        <section id="text-2" class="widget widget_text">
                            <div class="widget-content">
                                <div class="textwidget"><p>At vero eos et accusamus et iusto odio digni goikussimos ducimus qui to bonfo blanditiis praese. Ntium voluum deleniti atque.</p></div>
                            </div>
                        </section>
                        <section class="ct-getintouch widget">
                            <div class="ct-getintouch-inner">
                                <div class="ct-getintouch-item">
                                    <div class="ct-getintouch-icon"><i class="flaticon-map text-gradient"></i></div>
                                    <div class="ct-getintouch-meta"><label>380 St Kilda Road,</label> <span>Melbourne, Australia</span></div>
                                </div>
                                <div class="ct-getintouch-item">
                                    <div class="ct-getintouch-icon"><i class="flaticon-phone-call text-gradient"></i></div>
                                    <div class="ct-getintouch-meta"><label>Call Us: (210) 123-451</label> <span>(Sat - Thursday)</span></div>
                                </div>
                                <div class="ct-getintouch-item">
                                    <div class="ct-getintouch-icon"><i class="far fac-clock text-gradient"></i></div>
                                    <div class="ct-getintouch-meta"><label>Monday - Friday</label> <span>(10am - 05 pm)</span></div>
                                </div>
                                <div class="ct-getintouch-item">
                                    <a class="btn btn-effect2" href="../contact/index.htm"><i class="fac fac-location-arrow"></i>Contact us</a>
                                </div>
                            </div>
                        </section>
                        <section id="cs_social_widget-2" class="preset2 widget widget_cs_social_widget">
                            <div class="widget-content">
                                <ul class="ct-social">
                                    <li>
                                        <a class="social-facebook" target="_blank" href="#"><i class="zmdi zmdi-facebook"></i></a>
                                    </li>
                                    <li>
                                        <a class="social-twitter" target="_blank" href="#"><i class="zmdi zmdi-twitter"></i></a>
                                    </li>
                                    <li>
                                        <a class="social-dribbble" target="_blank" href="#"><i class="zmdi zmdi-dribbble"></i></a>
                                    </li>
                                    <li>
                                        <a class="social-instagram" target="_blank" href="#"><i class="zmdi zmdi-instagram"></i></a>
                                    </li>
                                </ul>
                            </div>
                        </section>
                    </div>
                </div>
            </div>
        </div>
{{--
        <div class="ct-widget-cart-wrap">
            <div class="ct-widget-cart-overlay"></div>
            <div class="ct-widget-cart-sidebar">
                <div class="ct-close"><i class="ct-icon-close ct-center"></i></div>
                <div class="widget_shopping_cart">
                    <div class="widget_shopping_title">Shopping Cart <span class="widget_cart_counter">(0 items)</span></div>
                    <div class="widget_shopping_cart_content">
                        <ul class="cart_list product_list_widget">
                            <li class="empty"><i class="fal fac-dolly-flatbed-empty"></i> <span>Your cart is empty</span> <a class="btn" href="../shop/index.htm">Browse Shop</a></li>
                        </ul>
                        <!-- end product list -->
                    </div>
                </div>
            </div>
        </div>
--}}
{{--
        <div id="ct-newsletter-popup">
            <div class="ct-newsletter-content">
                <div class="ct-newsletter-content-inner">
                    <div class="ct-newsletter-close"><i class="zmdi zmdi-close"></i></div>
                    <div class="ct-newsletter-holder">
                        <div class="ct-newsletter-meta">
                            <h4 class="ct-newsletter-title">Subscribe to our newsletter</h4>
                            <div class="ct-newsletter-desc">Sign up to receive latest news, updates, promotions, and special offers delivered directly to your inbox.</div>
                            <form method="post" action="https://demo.casethemes.net/consultio-digital-marketing/wp-admin/admin-ajax.php?action=tnp&amp;na=s" class="tnp-subscription" style="">
                                <input type="hidden" name="nlang" value="" />
                                <div class="tnp-field tnp-field-email"><label for="tnp-1">Your mail address</label> <input class="tnp-email" type="email" name="ne" id="tnp-1" value="" placeholder="" required /></div>
                                <div class="tnp-field tnp-field-button" style="text-align: left;"><input class="tnp-submit" type="submit" value="Subscrib now" style="" /></div>
                            </form>
                            <div class="ct-newsletter-hide"><span> No, thanks </span></div>
                        </div>
                        <div class="ct-newsletter-image"><img src="{{ asset('libraries/wp-content/themes/csuti/assets/images/newsletter-icon.png') }}" alt="" /></div>
                    </div>
                </div>
            </div>
        </div>
--}}
        <div id="ct-mouse-move" style="display: none;">
            <div class="circle-cursor circle-cursor--outer"></div>
            <div class="circle-cursor circle-cursor--inner"></div>
        </div>
        <div class="ct-header-elementor-popup">
            <div class="ct-close"><i class="ct-icon-close ct-center"></i></div>
            <div class="ct-header-popup-inner">
                <div class="ct-header-popup-scroll">
                    <div class="ct-header-popup-main">
                        <div class="elementor-popup-social">
                            <a href="#" target="_blank"><i class="fab fac-tripadvisor"></i></a>
                            <a href="#" target="_blank"><i class="fab fac-twitter"></i></a>
                            <a href="#" target="_blank"><i class="fab fac-instagram"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <script>
            window.RS_MODULES = window.RS_MODULES || {};
            window.RS_MODULES.modules = window.RS_MODULES.modules || {};
            window.RS_MODULES.waiting = window.RS_MODULES.waiting || [];
            window.RS_MODULES.defered = true;
            window.RS_MODULES.moduleWaiting = window.RS_MODULES.moduleWaiting || {};
            window.RS_MODULES.type = "compiled";
        </script>
        <script type="speculationrules">
            {"prefetch":[{"source":"document","where":{"and":[{"href_matches":"\/consultio-digital-marketing\/*"},{"not":{"href_matches":["\/consultio-digital-marketing\/wp-*.php","\/consultio-digital-marketing\/wp-admin\/*","\/consultio-digital-marketing\/wp-content\/uploads\/*","\/consultio-digital-marketing\/wp-content\/*","\/consultio-digital-marketing\/wp-content\/plugins\/*","\/consultio-digital-marketing\/wp-content\/themes\/csuti\/*","\/consultio-digital-marketing\/*\\?(.+)"]}},{"not":{"selector_matches":"a[rel~=\"nofollow\"]"}},{"not":{"selector_matches":".no-prefetch, .no-prefetch a"}}]},"eagerness":"conservative"}]}
        </script>
        {{--<a class="pxl-buy-now" href="https://api.whatsapp.com/send?phone=51951677400" target="_blank"> <span>Whatsapp</span> </a>--}}
        
        
        <style>
            .call-us {
                width: 48px;
                height: 48px;
                background-color: #017762;
                border-radius: 100%;
                /*background-image: url(https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/svgs/solid/user.svg);*/
                background-image: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 448 512'%3E%3Cpath fill='%23ffffff' d='M380.9 97.1C339 55.1 283.2 32 223.9 32c-122.4 0-222 99.6-222 222 0 39.1 10.2 77.3 29.6 111L0 480l117.7-30.9c32.4 17.7 68.9 27 106.1 27h.1c122.3 0 224.1-99.6 224.1-222 0-59.3-25.2-115-67.1-157zm-157 341.6c-33.2 0-65.7-8.9-94-25.7l-6.7-4-69.8 18.3L72 359.2l-4.4-7c-18.5-29.4-28.2-63.3-28.2-98.2 0-101.7 82.8-184.5 184.6-184.5 49.3 0 95.6 19.2 130.4 54.1 34.8 34.9 56.2 81.2 56.1 130.5 0 101.8-84.9 184.6-186.6 184.6zm101.2-138.2c-5.5-2.8-32.8-16.2-37.9-18-5.1-1.9-8.8-2.8-12.5 2.8-3.7 5.6-14.3 18-17.6 21.8-3.2 3.7-6.5 4.2-12 1.4-32.6-16.3-54-29.1-75.5-66-5.7-9.8 5.7-9.1 16.3-30.3 1.8-3.7 .9-6.9-.5-9.7-1.4-2.8-12.5-30.1-17.1-41.2-4.5-10.8-9.1-9.3-12.5-9.5-3.2-.2-6.9-.2-10.6-.2-3.7 0-9.7 1.4-14.8 6.9-5.1 5.6-19.4 19-19.4 46.3 0 27.3 19.9 53.7 22.6 57.4 2.8 3.7 39.1 59.7 94.8 83.8 35.2 15.2 49 16.5 66.6 13.9 10.7-1.6 32.8-13.4 37.4-26.4 4.6-13 4.6-24.1 3.2-26.4-1.3-2.5-5-3.9-10.5-6.6z'/%3E%3C/svg%3E");
                background-repeat: no-repeat;
                background-position: 50%;
                display: block;
                position: fixed;
                bottom: 40px;
                left: 40px;
                z-index: 1001;
                box-shadow: 0 5px 10px rgba(0,0,0,8%);
            }
        </style>
        <a class="call-us" href="https://api.whatsapp.com/send?phone=51{{ isset($main_phone) ? $main_phone->number : '#' }}" target="_blank"> <span></span> </a>


        <script>
            (function () {
                function maybePrefixUrlField() {
                    const value = this.value.trim();
                    if (value !== "" && value.indexOf("http") !== 0) {
                        this.value = "http://" + value;
                    }
                }
                const urlFields = document.querySelectorAll('.mc4wp-form input[type="url"]');
                for (let j = 0; j < urlFields.length; j++) {
                    urlFields[j].addEventListener("blur", maybePrefixUrlField);
                }
            })();
        </script>
        <!-- Instagram Feed JS -->
        <script type="text/javascript">
            var sbiajaxurl = "https://demo.casethemes.net/consultio-digital-marketing/wp-admin/admin-ajax.php";
        </script>
        <div id="yith-quick-view-modal">
            <div class="yith-quick-view-overlay"></div>
            <div class="yith-wcqv-wrapper">
                <div class="yith-wcqv-main">
                    <div class="yith-wcqv-head"><a href="#" id="yith-quick-view-close" class="yith-wcqv-close">X</a></div>
                    <div id="yith-quick-view-content" class="woocommerce single-product"></div>
                </div>
            </div>
        </div>
        <script type="text/javascript">
            jQuery(function ($) {
                if (typeof wc_add_to_cart_params === "undefined") return false;
                $(document.body).on("added_to_cart", function (event, fragments, cart_hash, $button) {
                    var $pid = $button.data("product_id");
                    $.ajax({
                        type: "POST",
                        url: wc_add_to_cart_params.ajax_url,
                        data: {
                            action: "item_added",
                            id: $pid,
                        },
                        success: function (response) {
                            $(".ct-widget-cart-wrap").addClass("open");
                        },
                    });
                });
            });
        </script>
        <script type="text/javascript">
            const lazyloadRunObserver = () => {
                const lazyloadBackgrounds = document.querySelectorAll(`.e-con.e-parent:not(.e-lazyloaded)`);
                const lazyloadBackgroundObserver = new IntersectionObserver(
                    (entries) => {
                        entries.forEach((entry) => {
                            if (entry.isIntersecting) {
                                let lazyloadBackground = entry.target;
                                if (lazyloadBackground) {
                                    lazyloadBackground.classList.add("e-lazyloaded");
                                }
                                lazyloadBackgroundObserver.unobserve(entry.target);
                            }
                        });
                    },
                    { rootMargin: "200px 0px 200px 0px" }
                );
                lazyloadBackgrounds.forEach((lazyloadBackground) => {
                    lazyloadBackgroundObserver.observe(lazyloadBackground);
                });
            };
            const events = ["DOMContentLoaded", "elementor/lazyload/observe"];
            events.forEach((event) => {
                document.addEventListener(event, lazyloadRunObserver);
            });
        </script>
        <script type="text/javascript">
            (function () {
                var c = document.body.className;
                c = c.replace(/woocommerce-no-js/, "woocommerce-js");
                document.body.className = c;
            })();
        </script>
        <div class="pswp" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="pswp__bg"></div>
            <div class="pswp__scroll-wrap">
                <div class="pswp__container">
                    <div class="pswp__item"></div>
                    <div class="pswp__item"></div>
                    <div class="pswp__item"></div>
                </div>
                <div class="pswp__ui pswp__ui--hidden">
                    <div class="pswp__top-bar">
                        <div class="pswp__counter"></div>
                        <button class="pswp__button pswp__button--close" aria-label="Close (Esc)"></button> <button class="pswp__button pswp__button--share" aria-label="Share"></button>
                        <button class="pswp__button pswp__button--fs" aria-label="Toggle fullscreen"></button> <button class="pswp__button pswp__button--zoom" aria-label="Zoom in/out"></button>
                        <div class="pswp__preloader">
                            <div class="pswp__preloader__icn">
                                <div class="pswp__preloader__cut"><div class="pswp__preloader__donut"></div></div>
                            </div>
                        </div>
                    </div>
                    <div class="pswp__share-modal pswp__share-modal--hidden pswp__single-tap"><div class="pswp__share-tooltip"></div></div>
                    <button class="pswp__button pswp__button--arrow--left" aria-label="Previous (arrow left)"></button> <button class="pswp__button pswp__button--arrow--right" aria-label="Next (arrow right)"></button>
                    <div class="pswp__caption"><div class="pswp__caption__center"></div></div>
                </div>
            </div>
        </div>
{{--
        <script type="text/template" id="tmpl-variation-template">
            <div class="woocommerce-variation-description">{{{ data.variation.variation_description }}}</div><div class="woocommerce-variation-price">{{{ data.variation.price_html }}}</div><div class="woocommerce-variation-availability">{{{ data.variation.availability_html }}}</div>
        </script>
--}}
        <script type="text/template" id="tmpl-unavailable-variation-template">
            <p role="alert">Sorry, this product is unavailable. Please choose a different combination.</p>
        </script>
        <link rel="stylesheet" id="wc-blocks-style-css" href="{{ asset('libraries/wp-content/plugins/woocommerce/assets/client/blocks/wc-blocks.css') }}?ver=wc-9.3.3" type="text/css" media="all" />
        <link rel="stylesheet" id="elementor-post-5137-css" href="{{ asset('libraries/wp-content/uploads/elementor/css/post-5137.css') }}?ver=1729675947" type="text/css" media="all" />
{{--
        <link rel="stylesheet" id="elementor-post-20-css" href="{{ asset('libraries/wp-content/uploads/elementor/css/post-20.css') }}?ver=1729675948" type="text/css" media="all" />
--}}
        <link rel="stylesheet" id="elementor-post-20-css" href="{{ asset('libraries/wp-content/uploads/elementor/css/post-20-global.css') }}?ver=1729675948" type="text/css" media="all" />
        <link rel="stylesheet" id="photoswipe-css" href="{{ asset('libraries/wp-content/plugins/woocommerce/assets/css/photoswipe/photoswipe.min.css') }}?ver=9.3.3" type="text/css" media="all" />
        <link rel="stylesheet" id="photoswipe-default-skin-css" href="{{ asset('libraries/wp-content/plugins/woocommerce/assets/css/photoswipe/default-skin/default-skin.min.css') }}?ver=9.3.3" type="text/css" media="all" />
{{--
        <link
            rel="stylesheet"
            id="google-fonts-2-css"
            href="{{ asset('libraries/ct-css/css-3') }}?family=Nunito%3A100%2C100italic%2C200%2C200italic%2C300%2C300italic%2C400%2C400italic%2C500%2C500italic%2C600%2C600italic%2C700%2C700italic%2C800%2C800italic%2C900%2C900italic&#038;display=auto&#038;ver=6.8.1"
            type="text/css"
            media="all"
        />
--}}
        <link rel="stylesheet" id="elementor-icons-fa-brands-css" href="{{ asset('libraries/wp-content/plugins/elementor/assets/lib/font-awesome/css/brands.min.css') }}?ver=5.15.3" type="text/css" media="all" />
        <link rel="stylesheet" id="rs-plugin-settings-css" href="{{ asset('libraries/wp-content/plugins/revslider/public/assets/css/rs6.css') }}?ver=6.6.20" type="text/css" media="all" />
        <style id="rs-plugin-settings-inline-css" type="text/css">
            #rs-demo-id {
            }
        </style>
        <script type="text/javascript" src="{{ asset('libraries/wp-content/plugins/yith-woocommerce-wishlist/assets/js/jquery.selectBox.min.js') }}?ver=1.2.0" id="jquery-selectBox-js"></script>
        <script type="text/javascript" src="{{ asset('libraries/wp-content/plugins/woocommerce/assets/js/prettyPhoto/jquery.prettyPhoto.min.js') }}?ver=3.1.6" id="prettyPhoto-js" data-wp-strategy="defer"></script>
        <script type="text/javascript" id="jquery-yith-wcwl-js-extra">
            /* <![CDATA[ */
            var yith_wcwl_l10n = {
                ajax_url: "\/consultio-digital-marketing\/wp-admin\/admin-ajax.php",
                redirect_to_cart: "no",
                yith_wcwl_button_position: "add-to-cart",
                multi_wishlist: "",
                hide_add_button: "1",
                enable_ajax_loading: "",
                ajax_loader_url: "https:\/\/demo.casethemes.net\/consultio-digital-marketing\/wp-content\/plugins\/yith-woocommerce-wishlist\/assets\/images\/ajax-loader-alt.svg",
                remove_from_wishlist_after_add_to_cart: "1",
                is_wishlist_responsive: "1",
                time_to_close_prettyphoto: "3000",
                fragments_index_glue: ".",
                reload_on_found_variation: "1",
                mobile_media_query: "768",
                labels: {
                    cookie_disabled: "We are sorry, but this feature is available only if cookies on your browser are enabled.",
                    added_to_cart_message: '<div class="woocommerce-notices-wrapper"><div class="woocommerce-message" role="alert">Product added to cart successfully<\/div><\/div>',
                },
                actions: {
                    add_to_wishlist_action: "add_to_wishlist",
                    remove_from_wishlist_action: "remove_from_wishlist",
                    reload_wishlist_and_adding_elem_action: "reload_wishlist_and_adding_elem",
                    load_mobile_action: "load_mobile",
                    delete_item_action: "delete_item",
                    save_title_action: "save_title",
                    save_privacy_action: "save_privacy",
                    load_fragments: "load_fragments",
                },
                nonce: {
                    add_to_wishlist_nonce: "034be0f7e7",
                    remove_from_wishlist_nonce: "1f2b23ec1b",
                    reload_wishlist_and_adding_elem_nonce: "152ebc9e80",
                    load_mobile_nonce: "5c1b1ba284",
                    delete_item_nonce: "086b01bcc7",
                    save_title_nonce: "54a3d161ff",
                    save_privacy_nonce: "8dffd700a5",
                    load_fragments_nonce: "66dd287e0a",
                },
                redirect_after_ask_estimate: "",
                ask_estimate_redirect_url: "https:\/\/demo.casethemes.net\/consultio-digital-marketing",
            };
            /* ]]> */
        </script>
        <script type="text/javascript" src="{{ asset('libraries/wp-content/plugins/yith-woocommerce-wishlist/assets/js/jquery.yith-wcwl.min.js') }}?ver=4.0.1" id="jquery-yith-wcwl-js"></script>
        <script type="text/javascript" src="{{ asset('libraries/wp-content/uploads/siteground-optimizer-assets/ct-core-main.min.js') }}?ver=1.0.0" id="ct-core-main-js"></script>
        <script type="text/javascript" src="{{ asset('libraries/wp-includes/js/dist/hooks.min.js') }}?ver=4d63a3d491d11ffd8ac6" id="wp-hooks-js"></script>
        <script type="text/javascript" src="{{ asset('libraries/wp-includes/js/dist/i18n.min.js') }}?ver=5e580eb46a90c2b997e6" id="wp-i18n-js"></script>
        <script type="text/javascript" id="wp-i18n-js-after">
            /* <![CDATA[ */
            wp.i18n.setLocaleData({ "text direction\u0004ltr": ["ltr"] });
            /* ]]> */
        </script>
        <script type="text/javascript" src="{{ asset('libraries/wp-content/uploads/siteground-optimizer-assets/swv.min.js') }}?ver=6.0" id="swv-js"></script>
{{--
        <script type="text/javascript" id="contact-form-7-js-before">
            /* <![CDATA[ */
            var wpcf7 = {
                api: {
                    root: "https:\/\/demo.casethemes.net\/consultio-digital-marketing\/wp-json\/",
                    namespace: "contact-form-7\/v1",
                },
            };
            /* ]]> */
        </script>
        <script type="text/javascript" src="{{ asset('libraries/wp-content/uploads/siteground-optimizer-assets/contact-form-7.min.js') }}?ver=6.0" id="contact-form-7-js"></script>
--}}
        <script type="text/javascript" src="{{ asset('libraries/wp-content/plugins/revslider/public/assets/js/rbtools.min.js') }}?ver=6.6.20" defer async id="tp-tools-js"></script>
        <script type="text/javascript" src="{{ asset('libraries/wp-content/plugins/revslider/public/assets/js/rs6.min.js') }}?ver=6.6.20" defer async id="revmin-js"></script>
        <script type="text/javascript" id="yith-wcqv-frontend-js-extra">
            /* <![CDATA[ */
            var yith_qv = {
                ajaxurl: "\/consultio-digital-marketing\/wp-admin\/admin-ajax.php",
                loader: "https:\/\/demo.casethemes.net\/consultio-digital-marketing\/wp-content\/plugins\/yith-woocommerce-quick-view\/assets\/image\/qv-loader.gif",
                lang: "",
            };
            /* ]]> */
        </script>
        <script type="text/javascript" src="{{ asset('libraries/wp-content/plugins/yith-woocommerce-quick-view/assets/js/frontend.min.js') }}?ver=1.43.0" id="yith-wcqv-frontend-js"></script>
        <script type="text/javascript" src="{{ asset('libraries/wp-content/themes/csuti/assets/js/bootstrap.min.js') }}?ver=4.0.0" id="bootstrap-js"></script>
        <script type="text/javascript" src="{{ asset('libraries/wp-content/themes/csuti/assets/js/nice-select.min.js') }}?ver=all" id="nice-select-js"></script>
        <script type="text/javascript" src="{{ asset('libraries/wp-content/uploads/siteground-optimizer-assets/match-height.min.js') }}?ver=1.0.0" id="match-height-js"></script>
        <script type="text/javascript" src="{{ asset('libraries/wp-content/themes/csuti/assets/js/magnific-popup.min.js') }}?ver=1.0.0" id="magnific-popup-js"></script>
        <script type="text/javascript" src="{{ asset('libraries/wp-content/themes/csuti/assets/js/progressbar.min.js') }}?ver=1.0.0" id="progressbar-js"></script>
        <script type="text/javascript" src="{{ asset('libraries/wp-content/themes/csuti/assets/js/wow.min.js') }}?ver=1.0.0" id="wow-js"></script>
        <script type="text/javascript" src="{{ asset('libraries/wp-includes/js/jquery/ui/core.min.js') }}?ver=1.13.3" id="jquery-ui-core-js"></script>
        <script type="text/javascript" src="{{ asset('libraries/wp-includes/js/jquery/ui/mouse.min.js') }}?ver=1.13.3" id="jquery-ui-mouse-js"></script>
        <script type="text/javascript" src="{{ asset('libraries/wp-includes/js/jquery/ui/slider.min.js') }}?ver=1.13.3" id="jquery-ui-slider-js"></script>
        <script type="text/javascript" src="{{ asset('libraries/wp-content/uploads/siteground-optimizer-assets/consultio-main.min.js') }}?ver=3.2.1" id="consultio-main-js"></script>
        <script type="text/javascript" src="{{ asset('libraries/wp-content/uploads/siteground-optimizer-assets/consultio-woocommerce.min.js') }}?ver=3.2.1" id="consultio-woocommerce-js"></script>
        <script type="text/javascript" src="{{ asset('libraries/wp-content/plugins/woocommerce/assets/js/sourcebuster/sourcebuster.min.js') }}?ver=9.3.3" id="sourcebuster-js-js"></script>
        <script type="text/javascript" id="wc-order-attribution-js-extra">
            /* <![CDATA[ */
            var wc_order_attribution = {
                params: {
                    lifetime: 1.0000000000000000818030539140313095458623138256371021270751953125e-5,
                    session: 30,
                    base64: false,
                    ajaxurl: "https:\/\/demo.casethemes.net\/consultio-digital-marketing\/wp-admin\/admin-ajax.php",
                    prefix: "wc_order_attribution_",
                    allowTracking: true,
                },
                fields: {
                    source_type: "current.typ",
                    referrer: "current_add.rf",
                    utm_campaign: "current.cmp",
                    utm_source: "current.src",
                    utm_medium: "current.mdm",
                    utm_content: "current.cnt",
                    utm_id: "current.id",
                    utm_term: "current.trm",
                    utm_source_platform: "current.plt",
                    utm_creative_format: "current.fmt",
                    utm_marketing_tactic: "current.tct",
                    session_entry: "current_add.ep",
                    session_start_time: "current_add.fd",
                    session_pages: "session.pgs",
                    session_count: "udata.vst",
                    user_agent: "udata.uag",
                },
            };
            /* ]]> */
        </script>
        <script type="text/javascript" src="{{ asset('libraries/wp-content/plugins/woocommerce/assets/js/frontend/order-attribution.min.js') }}?ver=9.3.3" id="wc-order-attribution-js"></script>
        <script type="text/javascript" src="{{ asset('libraries/wp-content/themes/csuti/assets/js/libs/gsap.min.js') }}?ver=3.5.0" id="gsap-js"></script>
        <script type="text/javascript" src="{{ asset('libraries/wp-content/uploads/siteground-optimizer-assets/pxl-scroll-trigger.min.js') }}?ver=3.10.5" id="pxl-scroll-trigger-js"></script>
        <script type="text/javascript" src="{{ asset('libraries/wp-content/uploads/siteground-optimizer-assets/pxl-splitText.min.js') }}?ver=3.6.1" id="pxl-splitText-js"></script>
        <script type="text/javascript" src="{{ asset('libraries/wp-includes/js/imagesloaded.min.js') }}?ver=5.0.0" id="imagesloaded-js"></script>
        <script type="text/javascript" id="ct-post-masonry-widget-js-js-extra">
            /* <![CDATA[ */
            var main_data = { ajax_url: "https:\/\/demo.casethemes.net\/consultio-digital-marketing\/wp-admin\/admin-ajax.php" };
            /* ]]> */
        </script>
        <script type="text/javascript" src="{{ asset('libraries/wp-content/uploads/siteground-optimizer-assets/ct-post-masonry-widget-js.min.js') }}?ver=3.2.1" id="ct-post-masonry-widget-js-js"></script>
        <script type="text/javascript" src="{{ asset('libraries/wp-content/uploads/siteground-optimizer-assets/ct-post-grid-widget-js.min.js') }}?ver=3.2.1" id="ct-post-grid-widget-js-js"></script>
        <script type="text/javascript" id="sbi_scripts-js-extra">
            /* <![CDATA[ */
            var sb_instagram_js_options = {
                font_method: "svg",
                resized_url: "https:\/\/demo.casethemes.net\/consultio-digital-marketing\/wp-content\/uploads\/sb-instagram-feed-images\/",
                placeholder: "https:\/\/demo.casethemes.net\/consultio-digital-marketing\/wp-content\/plugins\/instagram-feed\/img\/placeholder.png') }}",
                ajax_url: "https:\/\/demo.casethemes.net\/consultio-digital-marketing\/wp-admin\/admin-ajax.php",
            };
            /* ]]> */
        </script>
        <script type="text/javascript" src="{{ asset('libraries/wp-content/plugins/instagram-feed/js/sbi-scripts.min.js') }}?ver=6.6.0" id="sbi_scripts-js"></script>
        <script type="text/javascript" src="{{ asset('libraries/wp-content/themes/csuti/assets/js/jquery.cookie.js') }}?ver=1.4.1" id="ct-cookie-js"></script>
        <script type="text/javascript" src="{{ asset('libraries/wp-content/themes/csuti/assets/js/newsletter-popup.js') }}?ver=all" id="newsletter-popup-js"></script>
        <script type="text/javascript" defer src="{{ asset('libraries/wp-content/plugins/mailchimp-for-wp/assets/js/forms.js') }}?ver=4.9.18" id="mc4wp-forms-api-js"></script>
        <script type="text/javascript" src="{{ asset('libraries/wp-includes/js/underscore.min.js') }}?ver=1.13.7" id="underscore-js"></script>
        <script type="text/javascript" id="wp-util-js-extra">
            /* <![CDATA[ */
            var _wpUtilSettings = { ajax: { url: "\/consultio-digital-marketing\/wp-admin\/admin-ajax.php" } };
            /* ]]> */
        </script>
        <script type="text/javascript" src="{{ asset('libraries/wp-includes/js/wp-util.min.js') }}?ver=6.8.1" id="wp-util-js"></script>
        <script type="text/javascript" id="wc-add-to-cart-variation-js-extra">
            /* <![CDATA[ */
            var wc_add_to_cart_variation_params = {
                wc_ajax_url: "\/consultio-digital-marketing\/?wc-ajax=%%endpoint%%",
                i18n_no_matching_variations_text: "Sorry, no products matched your selection. Please choose a different combination.",
                i18n_make_a_selection_text: "Please select some product options before adding this product to your cart.",
                i18n_unavailable_text: "Sorry, this product is unavailable. Please choose a different combination.",
            };
            /* ]]> */
        </script>
        <script type="text/javascript" src="{{ asset('libraries/wp-content/plugins/woocommerce/assets/js/frontend/add-to-cart-variation.min.js') }}?ver=9.3.3" id="wc-add-to-cart-variation-js" defer="defer" data-wp-strategy="defer"></script>
        <script type="text/javascript" src="{{ asset('libraries/wp-content/plugins/woocommerce/assets/js/zoom/jquery.zoom.min.js') }}?ver=1.7.21-wc.9.3.3" id="zoom-js" defer="defer" data-wp-strategy="defer"></script>
        <script type="text/javascript" src="{{ asset('libraries/wp-content/plugins/woocommerce/assets/js/photoswipe/photoswipe.min.js') }}?ver=4.1.1-wc.9.3.3" id="photoswipe-js" defer="defer" data-wp-strategy="defer"></script>
        <script type="text/javascript" src="{{ asset('libraries/wp-content/plugins/woocommerce/assets/js/photoswipe/photoswipe-ui-default.min.js') }}?ver=4.1.1-wc.9.3.3" id="photoswipe-ui-default-js" defer="defer" data-wp-strategy="defer"></script>
        <script type="text/javascript" id="wc-single-product-js-extra">
            /* <![CDATA[ */
            var wc_single_product_params = {
                i18n_required_rating_text: "Please select a rating",
                review_rating_required: "yes",
                flexslider: { rtl: false, animation: "slide", smoothHeight: true, directionNav: false, controlNav: "thumbnails", slideshow: false, animationSpeed: 500, animationLoop: false, allowOneSlide: false },
                zoom_enabled: "1",
                zoom_options: [],
                photoswipe_enabled: "1",
                photoswipe_options: { shareEl: false, closeOnScroll: false, history: false, hideAnimationDuration: 0, showAnimationDuration: 0 },
                flexslider_enabled: "1",
            };
            /* ]]> */
        </script>
        <script type="text/javascript" src="{{ asset('libraries/wp-content/plugins/woocommerce/assets/js/frontend/single-product.min.js') }}?ver=9.3.3" id="wc-single-product-js" defer="defer" data-wp-strategy="defer"></script>
        <script type="text/javascript" src="{{ asset('libraries/wp-content/plugins/elementor/assets/js/webpack.runtime.min.js') }}?ver=3.25.4" id="elementor-webpack-runtime-js"></script>
        <script type="text/javascript" src="{{ asset('libraries/wp-content/plugins/elementor/assets/js/frontend-modules.min.js') }}?ver=3.25.4" id="elementor-frontend-modules-js"></script>
        <script type="text/javascript" id="elementor-frontend-js-before">
            /* <![CDATA[ */
            var elementorFrontendConfig = {
                environmentMode: { edit: false, wpPreview: false, isScriptDebug: false },
                i18n: {
                    shareOnFacebook: "Share on Facebook",
                    shareOnTwitter: "Share on Twitter",
                    pinIt: "Pin it",
                    download: "Download",
                    downloadImage: "Download image",
                    fullscreen: "Fullscreen",
                    zoom: "Zoom",
                    share: "Share",
                    playVideo: "Play Video",
                    previous: "Previous",
                    next: "Next",
                    close: "Close",
                    a11yCarouselWrapperAriaLabel: "Carousel | Horizontal scrolling: Arrow Left & Right",
                    a11yCarouselPrevSlideMessage: "Previous slide",
                    a11yCarouselNextSlideMessage: "Next slide",
                    a11yCarouselFirstSlideMessage: "This is the first slide",
                    a11yCarouselLastSlideMessage: "This is the last slide",
                    a11yCarouselPaginationBulletMessage: "Go to slide",
                },
                is_rtl: false,
                breakpoints: { xs: 0, sm: 480, md: 768, lg: 1025, xl: 1440, xxl: 1600 },
                responsive: {
                    breakpoints: {
                        mobile: { label: "Mobile Portrait", value: 767, default_value: 767, direction: "max", is_enabled: true },
                        mobile_extra: { label: "Mobile Landscape", value: 880, default_value: 880, direction: "max", is_enabled: false },
                        tablet: { label: "Tablet Portrait", value: 1024, default_value: 1024, direction: "max", is_enabled: true },
                        tablet_extra: { label: "Tablet Landscape", value: 1200, default_value: 1200, direction: "max", is_enabled: false },
                        laptop: { label: "Laptop", value: 1366, default_value: 1366, direction: "max", is_enabled: false },
                        widescreen: { label: "Widescreen", value: 2400, default_value: 2400, direction: "min", is_enabled: false },
                    },
                    hasCustomBreakpoints: false,
                },
                version: "3.25.4",
                is_static: false,
                experimentalFeatures: {
                    additional_custom_breakpoints: true,
                    e_swiper_latest: true,
                    e_nested_atomic_repeaters: true,
                    e_onboarding: true,
                    e_css_smooth_scroll: true,
                    home_screen: true,
                    "landing-pages": true,
                    "nested-elements": true,
                    editor_v2: true,
                    "link-in-bio": true,
                    "floating-buttons": true,
                },
                urls: {
                    assets: "https:\/\/demo.casethemes.net\/consultio-digital-marketing\/wp-content\/plugins\/elementor\/assets\/",
                    ajaxurl: "https:\/\/demo.casethemes.net\/consultio-digital-marketing\/wp-admin\/admin-ajax.php",
                    uploadUrl: "https:\/\/demo.casethemes.net\/consultio-digital-marketing\/wp-content\/uploads",
                },
                nonces: { floatingButtonsClickTracking: "004098a7d5" },
                swiperClass: "swiper",
                settings: { page: [], editorPreferences: [] },
                kit: {
                    global_image_lightbox: "yes",
                    active_breakpoints: ["viewport_mobile", "viewport_tablet"],
                    lightbox_enable_counter: "yes",
                    lightbox_enable_fullscreen: "yes",
                    lightbox_enable_zoom: "yes",
                    lightbox_enable_share: "yes",
                    lightbox_title_src: "title",
                    lightbox_description_src: "description",
                },
                post: { id: 26, title: "About%20%E2%80%93%20Consultio", excerpt: "", featuredImage: false },
            };
            /* ]]> */
        </script>
        <script type="text/javascript" src="{{ asset('libraries/wp-content/plugins/elementor/assets/js/frontend.min.js') }}?ver=3.25.4" id="elementor-frontend-js"></script>
    </body>
</html>
