<!DOCTYPE html>
<!--[if lt IE 10 ]>
<html lang="en-US" class="old-ie no-js">
<![endif]-->
<!--[if !(IE 6) | !(IE 7) | !(IE 8)  ]><!-->
<html lang="en-US" class="no-js">
<!--<![endif]-->

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <link rel="profile" href="http://gmpg.org/xfn/11" />
    <link rel="pingback" href="https://rigwise.com/xmlrpc.php" />
    <title>Rig Moves &amp; Marine Consultant &#8211; Rigwise Technologies Pte Ltd</title>
    <meta name='robots' content='max-image-preview:large' />
    <style>
        img:is([sizes="auto" i], [sizes^="auto," i]) {
            contain-intrinsic-size: 3000px 1500px
        }
    </style>
    <link rel='dns-prefetch' href='//cdnjs.cloudflare.com' />
    <link rel='dns-prefetch' href='//fonts.googleapis.com' />
    <link rel='preconnect' href='//i0.wp.com' />
    <link rel="alternate" type="application/rss+xml" title="Rig Moves &amp; Marine Consultant &raquo; Feed" href="https://rigwise.com/feed/" />
    <link rel="alternate" type="application/rss+xml" title="Rig Moves &amp; Marine Consultant &raquo; Comments Feed" href="https://rigwise.com/comments/feed/" />
    <script type="text/javascript">
        /* <![CDATA[ */
        window._wpemojiSettings = {
            "baseUrl": "https:\/\/s.w.org\/images\/core\/emoji\/15.0.3\/72x72\/",
            "ext": ".png",
            "svgUrl": "https:\/\/s.w.org\/images\/core\/emoji\/15.0.3\/svg\/",
            "svgExt": ".svg",
            "source": {
                "concatemoji": "https:\/\/rigwise.com\/wp-includes\/js\/wp-emoji-release.min.js?ver=6.7.2"
            }
        };
        /*! This file is auto-generated */
        ! function(i, n) {
            var o, s, e;

            function c(e) {
                try {
                    var t = {
                        supportTests: e,
                        timestamp: (new Date).valueOf()
                    };
                    sessionStorage.setItem(o, JSON.stringify(t))
                } catch (e) {}
            }

            function p(e, t, n) {
                e.clearRect(0, 0, e.canvas.width, e.canvas.height), e.fillText(t, 0, 0);
                var t = new Uint32Array(e.getImageData(0, 0, e.canvas.width, e.canvas.height).data),
                    r = (e.clearRect(0, 0, e.canvas.width, e.canvas.height), e.fillText(n, 0, 0), new Uint32Array(e.getImageData(0, 0, e.canvas.width, e.canvas.height).data));
                return t.every(function(e, t) {
                    return e === r[t]
                })
            }

            function u(e, t, n) {
                switch (t) {
                    case "flag":
                        return n(e, "\ud83c\udff3\ufe0f\u200d\u26a7\ufe0f", "\ud83c\udff3\ufe0f\u200b\u26a7\ufe0f") ? !1 : !n(e, "\ud83c\uddfa\ud83c\uddf3", "\ud83c\uddfa\u200b\ud83c\uddf3") && !n(e, "\ud83c\udff4\udb40\udc67\udb40\udc62\udb40\udc65\udb40\udc6e\udb40\udc67\udb40\udc7f", "\ud83c\udff4\u200b\udb40\udc67\u200b\udb40\udc62\u200b\udb40\udc65\u200b\udb40\udc6e\u200b\udb40\udc67\u200b\udb40\udc7f");
                    case "emoji":
                        return !n(e, "\ud83d\udc26\u200d\u2b1b", "\ud83d\udc26\u200b\u2b1b")
                }
                return !1
            }

            function f(e, t, n) {
                var r = "undefined" != typeof WorkerGlobalScope && self instanceof WorkerGlobalScope ? new OffscreenCanvas(300, 150) : i.createElement("canvas"),
                    a = r.getContext("2d", {
                        willReadFrequently: !0
                    }),
                    o = (a.textBaseline = "top", a.font = "600 32px Arial", {});
                return e.forEach(function(e) {
                    o[e] = t(a, e, n)
                }), o
            }

            function t(e) {
                var t = i.createElement("script");
                t.src = e, t.defer = !0, i.head.appendChild(t)
            }
            "undefined" != typeof Promise && (o = "wpEmojiSettingsSupports", s = ["flag", "emoji"], n.supports = {
                everything: !0,
                everythingExceptFlag: !0
            }, e = new Promise(function(e) {
                i.addEventListener("DOMContentLoaded", e, {
                    once: !0
                })
            }), new Promise(function(t) {
                var n = function() {
                    try {
                        var e = JSON.parse(sessionStorage.getItem(o));
                        if ("object" == typeof e && "number" == typeof e.timestamp && (new Date).valueOf() < e.timestamp + 604800 && "object" == typeof e.supportTests) return e.supportTests
                    } catch (e) {}
                    return null
                }();
                if (!n) {
                    if ("undefined" != typeof Worker && "undefined" != typeof OffscreenCanvas && "undefined" != typeof URL && URL.createObjectURL && "undefined" != typeof Blob) try {
                        var e = "postMessage(" + f.toString() + "(" + [JSON.stringify(s), u.toString(), p.toString()].join(",") + "));",
                            r = new Blob([e], {
                                type: "text/javascript"
                            }),
                            a = new Worker(URL.createObjectURL(r), {
                                name: "wpTestEmojiSupports"
                            });
                        return void(a.onmessage = function(e) {
                            c(n = e.data), a.terminate(), t(n)
                        })
                    } catch (e) {}
                    c(n = f(s, u, p))
                }
                t(n)
            }).then(function(e) {
                for (var t in e) n.supports[t] = e[t], n.supports.everything = n.supports.everything && n.supports[t], "flag" !== t && (n.supports.everythingExceptFlag = n.supports.everythingExceptFlag && n.supports[t]);
                n.supports.everythingExceptFlag = n.supports.everythingExceptFlag && !n.supports.flag, n.DOMReady = !1, n.readyCallback = function() {
                    n.DOMReady = !0
                }
            }).then(function() {
                return e
            }).then(function() {
                var e;
                n.supports.everything || (n.readyCallback(), (e = n.source || {}).concatemoji ? t(e.concatemoji) : e.wpemoji && e.twemoji && (t(e.twemoji), t(e.wpemoji)))
            }))
        }((window, document), window._wpemojiSettings);
        /* ]]> */
    </script>
    <link rel='stylesheet' id='dashicons-css' href='https://rigwise.com/wp-includes/css/dashicons.min.css?ver=6.7.2' type='text/css' media='all' />
    <link rel='stylesheet' id='admin-bar-css' href='https://rigwise.com/wp-includes/css/admin-bar.min.css?ver=6.7.2' type='text/css' media='all' />
    <style id='admin-bar-inline-css' type='text/css'>
        @media screen {
            html {
                margin-top: 32px !important;
            }
        }

        @media screen and (max-width: 782px) {
            html {
                margin-top: 46px !important;
            }
        }

        @media print {
            #wpadminbar {
                display: none;
            }
        }

        #wpadminbar #wp-admin-bar-options-framework-parent>.ab-item:before {
            content: "\f111";
        }
    </style>
    <link rel='stylesheet' id='layerslider-front-css' href='https://rigwise.com/wp-content/plugins/LayerSlider/static/public/front.css?ver=6.0.6' type='text/css' media='all' />
    <link rel='stylesheet' id='layerslider-css' href='https://rigwise.com/wp-content/plugins/LayerSlider/static/layerslider/css/layerslider.css?ver=6.0.6' type='text/css' media='all' />
    <link rel='stylesheet' id='ls-google-fonts-css' href='https://fonts.googleapis.com/css?family=Lato:100,300,regular,700,900%7COpen+Sans:300%7CIndie+Flower:regular%7COswald:300,regular,700&#038;subset=latin%2Clatin-ext' type='text/css' media='all' />
    <style id='wp-emoji-styles-inline-css' type='text/css'>
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
    <link rel='stylesheet' id='wp-block-library-css' href='https://rigwise.com/wp-includes/css/dist/block-library/style.min.css?ver=6.7.2' type='text/css' media='all' />
    <link rel='stylesheet' id='mediaelement-css' href='https://rigwise.com/wp-includes/js/mediaelement/mediaelementplayer-legacy.min.css?ver=4.2.17' type='text/css' media='all' />
    <link rel='stylesheet' id='wp-mediaelement-css' href='https://rigwise.com/wp-includes/js/mediaelement/wp-mediaelement.min.css?ver=6.7.2' type='text/css' media='all' />
    <style id='jetpack-sharing-buttons-style-inline-css' type='text/css'>
        .jetpack-sharing-buttons__services-list {
            display: flex;
            flex-direction: row;
            flex-wrap: wrap;
            gap: 0;
            list-style-type: none;
            margin: 5px;
            padding: 0
        }

        .jetpack-sharing-buttons__services-list.has-small-icon-size {
            font-size: 12px
        }

        .jetpack-sharing-buttons__services-list.has-normal-icon-size {
            font-size: 16px
        }

        .jetpack-sharing-buttons__services-list.has-large-icon-size {
            font-size: 24px
        }

        .jetpack-sharing-buttons__services-list.has-huge-icon-size {
            font-size: 36px
        }

        @media print {
            .jetpack-sharing-buttons__services-list {
                display: none !important
            }
        }

        .editor-styles-wrapper .wp-block-jetpack-sharing-buttons {
            gap: 0;
            padding-inline-start: 0
        }

        ul.jetpack-sharing-buttons__services-list.has-background {
            padding: 1.25em 2.375em
        }
    </style>
    <style id='classic-theme-styles-inline-css' type='text/css'>
        /*! This file is auto-generated */
        .wp-block-button__link {
            color: #fff;
            background-color: #32373c;
            border-radius: 9999px;
            box-shadow: none;
            text-decoration: none;
            padding: calc(.667em + 2px) calc(1.333em + 2px);
            font-size: 1.125em
        }

        .wp-block-file__button {
            background: #32373c;
            color: #fff;
            text-decoration: none
        }
    </style>
    <style id='global-styles-inline-css' type='text/css'>
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

        .is-layout-flex> :is(*, div) {
            margin: 0;
        }

        body .is-layout-grid {
            display: grid;
        }

        .is-layout-grid> :is(*, div) {
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
    <link rel='stylesheet' id='contact-form-7-css' href='https://rigwise.com/wp-content/plugins/contact-form-7/includes/css/styles.css?ver=6.0.4' type='text/css' media='all' />
    <link rel='stylesheet' id='go-pricing-styles-css' href='https://rigwise.com/wp-content/plugins/go_pricing/assets/css/go_pricing_styles.css?ver=3.3.3' type='text/css' media='all' />
    <link rel='stylesheet' id='tp_twitter_plugin_css-css' href='https://rigwise.com/wp-content/plugins/recent-tweets-widget/tp_twitter_plugin.css?ver=1.0' type='text/css' media='screen' />
    <link rel='stylesheet' id='rs-plugin-settings-css' href='https://rigwise.com/wp-content/plugins/revslider/public/assets/css/settings.css?ver=5.3.0.2' type='text/css' media='all' />
    <style id='rs-plugin-settings-inline-css' type='text/css'>
        #rs-demo-id {}
    </style>
    <link rel='stylesheet' id='theme-my-login-css' href='https://rigwise.com/wp-content/plugins/theme-my-login/assets/styles/theme-my-login.min.css?ver=7.1.10' type='text/css' media='all' />
    <style id='akismet-widget-style-inline-css' type='text/css'>
        .a-stats {
            --akismet-color-mid-green: #357b49;
            --akismet-color-white: #fff;
            --akismet-color-light-grey: #f6f7f7;

            max-width: 350px;
            width: auto;
        }

        .a-stats * {
            all: unset;
            box-sizing: border-box;
        }

        .a-stats strong {
            font-weight: 600;
        }

        .a-stats a.a-stats__link,
        .a-stats a.a-stats__link:visited,
        .a-stats a.a-stats__link:active {
            background: var(--akismet-color-mid-green);
            border: none;
            box-shadow: none;
            border-radius: 8px;
            color: var(--akismet-color-white);
            cursor: pointer;
            display: block;
            font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', 'Roboto', 'Oxygen-Sans', 'Ubuntu', 'Cantarell', 'Helvetica Neue', sans-serif;
            font-weight: 500;
            padding: 12px;
            text-align: center;
            text-decoration: none;
            transition: all 0.2s ease;
        }

        /* Extra specificity to deal with TwentyTwentyOne focus style */
        .widget .a-stats a.a-stats__link:focus {
            background: var(--akismet-color-mid-green);
            color: var(--akismet-color-white);
            text-decoration: none;
        }

        .a-stats a.a-stats__link:hover {
            filter: brightness(110%);
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.06), 0 0 2px rgba(0, 0, 0, 0.16);
        }

        .a-stats .count {
            color: var(--akismet-color-white);
            display: block;
            font-size: 1.5em;
            line-height: 1.4;
            padding: 0 13px;
            white-space: nowrap;
        }
    </style>
    <link rel='stylesheet' id='wpforms-admin-bar-css' href='https://rigwise.com/wp-content/plugins/wpforms-lite/assets/css/admin-bar.min.css?ver=1.9.4.1' type='text/css' media='all' />
    <style id='wpforms-admin-bar-inline-css' type='text/css'>
        #wpadminbar .wpforms-menu-notification-counter,
        #wpadminbar .wpforms-menu-notification-indicator {
            background-color: #d63638 !important;
            color: #ffffff !important;
        }
    </style>
    <link rel='stylesheet' id='optionsframework-global-css' href='https://rigwise.com/wp-content/themes/dt-the7/inc/extensions/options-framework/css/admin-stylesheet.css?ver=4.2.0' type='text/css' media='all' />
    <link rel='stylesheet' id='js_composer_front-css' href='https://rigwise.com/wp-content/plugins/js_composer/assets/css/js_composer.min.css?ver=7.9' type='text/css' media='all' />
    <link rel='stylesheet' id='dt-web-fonts-css' href='//fonts.googleapis.com/css?family=Open+Sans%3A400%2C600%2C700&#038;ver=6.7.2' type='text/css' media='all' />
    <link rel='stylesheet' id='dt-main-css' href='https://rigwise.com/wp-content/themes/dt-the7/css/main.min.css?ver=4.2.0' type='text/css' media='all' />
    <style id='dt-main-inline-css' type='text/css'>
        body #load {
            display: block;
            height: 100%;
            overflow: hidden;
            position: fixed;
            width: 100%;
            z-index: 9901;
            opacity: 1;
            visibility: visible;
            -webkit-transition: all .35s ease-out;
            transition: all .35s ease-out;
        }

        body #load.loader-removed {
            opacity: 0;
            visibility: hidden;
        }

        .load-wrap {
            width: 100%;
            height: 100%;
            background-position: center center;
            background-repeat: no-repeat;
            text-align: center;
        }

        .load-wrap>svg {
            position: absolute;
            top: 50%;
            left: 50%;
            -ms-transform: translate(-50%, -50%);
            -webkit-transform: translate(-50%, -50%);
            transform: translate(-50%, -50%);
        }

        #load {
            background-color: rgba(255, 255, 255, 0.35);
        }

        .uil-default rect:not(.bk) {
            fill: #e2e2e2;
        }

        .uil-ring>path {
            fill: #e2e2e2;
        }

        .ring-loader .circle {
            fill: #e2e2e2;
        }

        .ring-loader .moving-circle {
            fill: #e2e2e2;
        }

        .uil-hourglass .glass {
            stroke: #e2e2e2;
        }

        .uil-hourglass .sand {
            fill: #e2e2e2;
        }

        .spinner-loader .load-wrap {
            background-image: url("data:image/svg+xml,%3Csvg width='75px' height='75px' xmlns='http://www.w3.org/2000/svg' viewBox='0 0 100 100' preserveAspectRatio='xMidYMid' class='uil-default'%3E%3Crect x='0' y='0' width='100' height='100' fill='none' class='bk'%3E%3C/rect%3E%3Crect  x='46.5' y='40' width='7' height='20' rx='5' ry='5' fill='%23e2e2e2' transform='rotate(0 50 50) translate(0 -30)'%3E  %3Canimate attributeName='opacity' from='1' to='0' dur='1s' begin='0s' repeatCount='indefinite'/%3E%3C/rect%3E%3Crect  x='46.5' y='40' width='7' height='20' rx='5' ry='5' fill='%23e2e2e2' transform='rotate(30 50 50) translate(0 -30)'%3E  %3Canimate attributeName='opacity' from='1' to='0' dur='1s' begin='0.08333333333333333s' repeatCount='indefinite'/%3E%3C/rect%3E%3Crect  x='46.5' y='40' width='7' height='20' rx='5' ry='5' fill='%23e2e2e2' transform='rotate(60 50 50) translate(0 -30)'%3E  %3Canimate attributeName='opacity' from='1' to='0' dur='1s' begin='0.16666666666666666s' repeatCount='indefinite'/%3E%3C/rect%3E%3Crect  x='46.5' y='40' width='7' height='20' rx='5' ry='5' fill='%23e2e2e2' transform='rotate(90 50 50) translate(0 -30)'%3E  %3Canimate attributeName='opacity' from='1' to='0' dur='1s' begin='0.25s' repeatCount='indefinite'/%3E%3C/rect%3E%3Crect  x='46.5' y='40' width='7' height='20' rx='5' ry='5' fill='%23e2e2e2' transform='rotate(120 50 50) translate(0 -30)'%3E  %3Canimate attributeName='opacity' from='1' to='0' dur='1s' begin='0.3333333333333333s' repeatCount='indefinite'/%3E%3C/rect%3E%3Crect  x='46.5' y='40' width='7' height='20' rx='5' ry='5' fill='%23e2e2e2' transform='rotate(150 50 50) translate(0 -30)'%3E  %3Canimate attributeName='opacity' from='1' to='0' dur='1s' begin='0.4166666666666667s' repeatCount='indefinite'/%3E%3C/rect%3E%3Crect  x='46.5' y='40' width='7' height='20' rx='5' ry='5' fill='%23e2e2e2' transform='rotate(180 50 50) translate(0 -30)'%3E  %3Canimate attributeName='opacity' from='1' to='0' dur='1s' begin='0.5s' repeatCount='indefinite'/%3E%3C/rect%3E%3Crect  x='46.5' y='40' width='7' height='20' rx='5' ry='5' fill='%23e2e2e2' transform='rotate(210 50 50) translate(0 -30)'%3E  %3Canimate attributeName='opacity' from='1' to='0' dur='1s' begin='0.5833333333333334s' repeatCount='indefinite'/%3E%3C/rect%3E%3Crect  x='46.5' y='40' width='7' height='20' rx='5' ry='5' fill='%23e2e2e2' transform='rotate(240 50 50) translate(0 -30)'%3E  %3Canimate attributeName='opacity' from='1' to='0' dur='1s' begin='0.6666666666666666s' repeatCount='indefinite'/%3E%3C/rect%3E%3Crect  x='46.5' y='40' width='7' height='20' rx='5' ry='5' fill='%23e2e2e2' transform='rotate(270 50 50) translate(0 -30)'%3E  %3Canimate attributeName='opacity' from='1' to='0' dur='1s' begin='0.75s' repeatCount='indefinite'/%3E%3C/rect%3E%3Crect  x='46.5' y='40' width='7' height='20' rx='5' ry='5' fill='%23e2e2e2' transform='rotate(300 50 50) translate(0 -30)'%3E  %3Canimate attributeName='opacity' from='1' to='0' dur='1s' begin='0.8333333333333334s' repeatCount='indefinite'/%3E%3C/rect%3E%3Crect  x='46.5' y='40' width='7' height='20' rx='5' ry='5' fill='%23e2e2e2' transform='rotate(330 50 50) translate(0 -30)'%3E  %3Canimate attributeName='opacity' from='1' to='0' dur='1s' begin='0.9166666666666666s' repeatCount='indefinite'/%3E%3C/rect%3E%3C/svg%3E");
        }

        .ring-loader .load-wrap {
            background-image: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 32 32' width='72' height='72' fill='%23e2e2e2'%3E   %3Cpath opacity='.25' d='M16 0 A16 16 0 0 0 16 32 A16 16 0 0 0 16 0 M16 4 A12 12 0 0 1 16 28 A12 12 0 0 1 16 4'/%3E   %3Cpath d='M16 0 A16 16 0 0 1 32 16 L28 16 A12 12 0 0 0 16 4z'%3E     %3CanimateTransform attributeName='transform' type='rotate' from='0 16 16' to='360 16 16' dur='0.8s' repeatCount='indefinite' /%3E   %3C/path%3E %3C/svg%3E");
        }

        .hourglass-loader .load-wrap {
            background-image: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 32 32' width='72' height='72' fill='%23e2e2e2'%3E   %3Cpath transform='translate(2)' d='M0 12 V20 H4 V12z'%3E      %3Canimate attributeName='d' values='M0 12 V20 H4 V12z; M0 4 V28 H4 V4z; M0 12 V20 H4 V12z; M0 12 V20 H4 V12z' dur='1.2s' repeatCount='indefinite' begin='0' keytimes='0;.2;.5;1' keySplines='0.2 0.2 0.4 0.8;0.2 0.6 0.4 0.8;0.2 0.8 0.4 0.8' calcMode='spline'  /%3E   %3C/path%3E   %3Cpath transform='translate(8)' d='M0 12 V20 H4 V12z'%3E     %3Canimate attributeName='d' values='M0 12 V20 H4 V12z; M0 4 V28 H4 V4z; M0 12 V20 H4 V12z; M0 12 V20 H4 V12z' dur='1.2s' repeatCount='indefinite' begin='0.2' keytimes='0;.2;.5;1' keySplines='0.2 0.2 0.4 0.8;0.2 0.6 0.4 0.8;0.2 0.8 0.4 0.8' calcMode='spline'  /%3E   %3C/path%3E   %3Cpath transform='translate(14)' d='M0 12 V20 H4 V12z'%3E     %3Canimate attributeName='d' values='M0 12 V20 H4 V12z; M0 4 V28 H4 V4z; M0 12 V20 H4 V12z; M0 12 V20 H4 V12z' dur='1.2s' repeatCount='indefinite' begin='0.4' keytimes='0;.2;.5;1' keySplines='0.2 0.2 0.4 0.8;0.2 0.6 0.4 0.8;0.2 0.8 0.4 0.8' calcMode='spline' /%3E   %3C/path%3E   %3Cpath transform='translate(20)' d='M0 12 V20 H4 V12z'%3E     %3Canimate attributeName='d' values='M0 12 V20 H4 V12z; M0 4 V28 H4 V4z; M0 12 V20 H4 V12z; M0 12 V20 H4 V12z' dur='1.2s' repeatCount='indefinite' begin='0.6' keytimes='0;.2;.5;1' keySplines='0.2 0.2 0.4 0.8;0.2 0.6 0.4 0.8;0.2 0.8 0.4 0.8' calcMode='spline' /%3E   %3C/path%3E   %3Cpath transform='translate(26)' d='M0 12 V20 H4 V12z'%3E     %3Canimate attributeName='d' values='M0 12 V20 H4 V12z; M0 4 V28 H4 V4z; M0 12 V20 H4 V12z; M0 12 V20 H4 V12z' dur='1.2s' repeatCount='indefinite' begin='0.8' keytimes='0;.2;.5;1' keySplines='0.2 0.2 0.4 0.8;0.2 0.6 0.4 0.8;0.2 0.8 0.4 0.8' calcMode='spline' /%3E   %3C/path%3E %3C/svg%3E");
        }
    </style>
    <!--[if lt IE 10]>
<link rel='stylesheet' id='dt-old-ie-css' href='https://rigwise.com/wp-content/themes/dt-the7/css/old-ie.css?ver=4.2.0' type='text/css' media='all' />
<![endif]-->
    <link rel='stylesheet' id='dt-awsome-fonts-css' href='https://rigwise.com/wp-content/themes/dt-the7/fonts/FontAwesome/css/font-awesome.min.css?ver=4.2.0' type='text/css' media='all' />
    <link rel='stylesheet' id='dt-fontello-css' href='https://rigwise.com/wp-content/themes/dt-the7/fonts/fontello/css/fontello.min.css?ver=4.2.0' type='text/css' media='all' />
    <link rel='stylesheet' id='the7pt-static-css' href='https://rigwise.com/wp-content/themes/dt-the7/css/post-type.css?ver=4.2.0' type='text/css' media='all' />
    <!--[if lt IE 10]>
<link rel='stylesheet' id='dt-custom-old-ie.less-css' href='https://rigwise.com/wp-content/uploads/wp-less/dt-the7/css/custom-old-ie-afb1ba07b6.css?ver=4.2.0' type='text/css' media='all' />
<![endif]-->
    <link rel='stylesheet' id='dt-custom.less-css' href='https://rigwise.com/wp-content/uploads/wp-less/dt-the7/css/custom-afb1ba07b6.css?ver=4.2.0' type='text/css' media='all' />
    <link rel='stylesheet' id='dt-media.less-css' href='https://rigwise.com/wp-content/uploads/wp-less/dt-the7/css/media-afb1ba07b6.css?ver=4.2.0' type='text/css' media='all' />
    <link rel='stylesheet' id='the7pt.less-css' href='https://rigwise.com/wp-content/uploads/wp-less/dt-the7/css/post-type-dynamic-afb1ba07b6.css?ver=4.2.0' type='text/css' media='all' />
    <link rel='stylesheet' id='style-css' href='https://rigwise.com/wp-content/themes/dt-the7/style.css?ver=4.2.0' type='text/css' media='all' />
    <link rel='stylesheet' id='bsf-Defaults-css' href='https://rigwise.com/wp-content/uploads/smile_fonts/Defaults/Defaults.css?ver=6.7.2' type='text/css' media='all' />
    <link rel='stylesheet' id='cp-perfect-scroll-style-css' href='https://rigwise.com/wp-content/plugins/convertplug/modules/slide_in/../../admin/assets/css/perfect-scrollbar.min.css?ver=6.7.2' type='text/css' media='all' />
    <script type="text/javascript" id="jquery-core-js-extra">
        /* <![CDATA[ */
        var slide_in = {
            "demo_dir": "https:\/\/rigwise.com\/wp-content\/plugins\/convertplug\/modules\/slide_in\/assets\/demos"
        };
        /* ]]> */
    </script>
    <script type="text/javascript" src="https://rigwise.com/wp-includes/js/jquery/jquery.min.js?ver=3.7.1" id="jquery-core-js"></script>
    <script type="text/javascript" src="https://rigwise.com/wp-includes/js/jquery/jquery-migrate.min.js?ver=3.4.1" id="jquery-migrate-js"></script>
    <script type="text/javascript" src="https://rigwise.com/wp-content/plugins/LayerSlider/static/layerslider/js/greensock.js?ver=1.19.0" id="greensock-js"></script>
    <script type="text/javascript" id="layerslider-js-extra">
        /* <![CDATA[ */
        var LS_Meta = {
            "v": "6.0.6"
        };
        /* ]]> */
    </script>
    <script type="text/javascript" src="https://rigwise.com/wp-content/plugins/LayerSlider/static/layerslider/js/layerslider.kreaturamedia.jquery.js?ver=6.0.6" id="layerslider-js"></script>
    <script type="text/javascript" src="https://rigwise.com/wp-content/plugins/LayerSlider/static/layerslider/js/layerslider.transitions.js?ver=6.0.6" id="layerslider-transitions-js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/gsap/1.11.2/TweenMax.min.js" id="gw-tweenmax-js"></script>
    <script type="text/javascript" src="https://rigwise.com/wp-content/plugins/revslider/public/assets/js/jquery.themepunch.tools.min.js?ver=5.3.0.2" id="tp-tools-js"></script>
    <script type="text/javascript" src="https://rigwise.com/wp-content/plugins/revslider/public/assets/js/jquery.themepunch.revolution.min.js?ver=5.3.0.2" id="revmin-js"></script>
    <script type="text/javascript" id="dt-above-fold-js-extra">
        /* <![CDATA[ */
        var dtLocal = {
            "themeUrl": "https:\/\/rigwise.com\/wp-content\/themes\/dt-the7",
            "passText": "To view this protected post, enter the password below:",
            "moreButtonText": {
                "loading": "Loading..."
            },
            "postID": "49593",
            "ajaxurl": "https:\/\/rigwise.com\/wp-admin\/admin-ajax.php",
            "contactNonce": "91cc740f5a",
            "ajaxNonce": "c0d83dc339",
            "pageData": {
                "type": "page",
                "template": "page",
                "layout": null
            },
            "themeSettings": {
                "smoothScroll": "off",
                "lazyLoading": false,
                "accentColor": {
                    "mode": "gradient",
                    "color": ["#00357f", "#3bbfd3"]
                },
                "floatingHeader": {
                    "showAfter": 94,
                    "showMenu": true,
                    "height": 60,
                    "logo": {
                        "showLogo": true,
                        "html": "<img class=\" preload-me\" src=\"https:\/\/rigwise.com\/wp-content\/uploads\/2017\/05\/logo-5.png\" srcset=\"https:\/\/rigwise.com\/wp-content\/uploads\/2017\/05\/logo-5.png 157w, https:\/\/rigwise.com\/wp-content\/uploads\/2017\/05\/logo-big-1.png 240w\" width=\"157\" height=\"54\"   sizes=\"157px\" alt=\"Rig Moves &amp; Marine Consultant\" \/>"
                    }
                },
                "mobileHeader": {
                    "firstSwitchPoint": 990,
                    "secondSwitchPoint": 500
                },
                "content": {
                    "responsivenessTreshold": 970,
                    "textColor": "#5b5b5b",
                    "headerColor": "#111111"
                },
                "stripes": {
                    "stripe1": {
                        "textColor": "#5b5b5b",
                        "headerColor": "#111111"
                    },
                    "stripe2": {
                        "textColor": "#999999",
                        "headerColor": "#ffffff"
                    },
                    "stripe3": {
                        "textColor": "#ffffff",
                        "headerColor": "#ffffff"
                    }
                }
            },
            "VCMobileScreenWidth": "768"
        };
        /* ]]> */
    </script>
    <script type="text/javascript" src="https://rigwise.com/wp-content/themes/dt-the7/js/above-the-fold.min.js?ver=4.2.0" id="dt-above-fold-js"></script>
    <script></script>
    <meta name="generator" content="Powered by LayerSlider 6.0.6 - Multi-Purpose, Responsive, Parallax, Mobile-Friendly Slider Plugin for WordPress." />
    <!-- LayerSlider updates and docs at: https://layerslider.kreaturamedia.com -->
    <link rel="https://api.w.org/" href="https://rigwise.com/wp-json/" />
    <link rel="alternate" title="JSON" type="application/json" href="https://rigwise.com/wp-json/wp/v2/pages/49593" />
    <link rel="EditURI" type="application/rsd+xml" title="RSD" href="https://rigwise.com/xmlrpc.php?rsd" />
    <meta name="generator" content="WordPress 6.7.2" />
    <link rel="canonical" href="https://rigwise.com/" />
    <link rel='shortlink' href='https://rigwise.com/' />
    <link rel="alternate" title="oEmbed (JSON)" type="application/json+oembed" href="https://rigwise.com/wp-json/oembed/1.0/embed?url=https%3A%2F%2Frigwise.com%2F" />
    <link rel="alternate" title="oEmbed (XML)" type="text/xml+oembed" href="https://rigwise.com/wp-json/oembed/1.0/embed?url=https%3A%2F%2Frigwise.com%2F&#038;format=xml" />
    <meta name="generator" content="Redux 4.5.6" />
    <meta property="og:site_name" content="Rig Moves &amp; Marine Consultant" />
    <meta property="og:title" content="Home" />
    <meta property="og:url" content="https://rigwise.com/" />
    <meta property="og:type" content="website" />
    <meta name="generator" content="Powered by WPBakery Page Builder - drag and drop page builder for WordPress." />
    <meta name="generator" content="Powered by Slider Revolution 5.3.0.2 - responsive, Mobile-Friendly Slider Plugin for WordPress with comfortable drag and drop interface." />
    <script type="text/javascript">
        document.addEventListener("DOMContentLoaded", function(event) {
            var $load = document.getElementById("load");

            var removeLoading = setTimeout(function() {
                $load.className += " loader-removed";
            }, 500);
        });
    </script>
    <!-- icon -->
    <link rel="icon" href="https://rigwise.com/wp-content/uploads/2017/05/favicon-1.png" type="image/png" />
    <link rel="shortcut icon" href="https://rigwise.com/wp-content/uploads/2017/05/favicon-1.png" type="image/png" />

    <style data-ampdevmode type='text/css'>
        #wpadminbar .quicklinks li#wp-admin-bar-stats {
            height: 32px;
        }

        #wpadminbar .quicklinks li#wp-admin-bar-stats a {
            height: 32px;
            padding: 0;
        }

        #wpadminbar .quicklinks li#wp-admin-bar-stats a div {
            height: 32px;
            width: 95px;
            overflow: hidden;
            margin: 0 10px;
        }

        #wpadminbar .quicklinks li#wp-admin-bar-stats a:hover div {
            width: auto;
            margin: 0 8px 0 10px;
        }

        #wpadminbar .quicklinks li#wp-admin-bar-stats a img {
            height: 24px;
            margin: 4px 0;
            max-width: none;
            border: none;
        }
    </style>
    <noscript>
        <style>
            .wpb_animate_when_almost_visible {
                opacity: 1;
            }
        </style>
    </noscript>
</head>

<body class="home page-template-default page page-id-49593 logged-in admin-bar no-customize-support slideshow-on large-hover-icons accent-gradient srcset-enabled btn-flat custom-btn-color custom-btn-hover-color contact-form-minimal accent-bullets bold-icons phantom-fade phantom-shadow-decoration phantom-main-logo-on floating-mobile-menu-icon top-header first-switch-logo-left first-switch-menu-right second-switch-logo-left second-switch-menu-right right-mobile-menu layzr-loading-on wpb-js-composer js-comp-ver-7.9 vc_responsive semitransparent-portfolio-icons album-minuatures-style-2">
    <div id="load" class="">
        <div class="load-wrap">
            <html>

            <head>
                <style>
                    .loading {
                        width: 100px;
                        height: 100px;
                        margin: 30px auto;
                        position: relative;
                    }

                    .bar div {
                        width: 10px;
                        height: 30px;
                        border-radius: 2px;
                        background: #033333;
                        position: absolute;
                        top: 35px;
                        left: 45px;
                        -webkit-animation: fadeit 0.4s ease infinite;
                        animation: fadeit 0.4s ease infinite;
                    }

                    .bar div:nth-child(1) {
                        opacity: 1;
                        -webkit-transform: rotate(0deg) translate(0, -30px);
                        transform: rotate(0deg) translate(0, -30px);
                        -webkit-animation-delay: 0.1s;
                        animation-delay: 0.1s;
                    }

                    .bar div:nth-child(2) {
                        opacity: 0.66;
                        -webkit-transform: rotate(30deg) translate(0, -30px);
                        transform: rotate(30deg) translate(0, -30px);
                        -webkit-animation-delay: 0.2s;
                        animation-delay: 0.2;
                    }

                    .bar div:nth-child(3) {
                        opacity: 0.33;
                        -webkit-transform: rotate(60deg) translate(0, -30px);
                        transform: rotate(60deg) translate(0, -30px);
                        -webkit-animation-delay: 0.3s;
                        animation-delay: 0.3s;
                    }

                    .bar div:nth-child(4) {
                        opacity: 0;
                        -webkit-transform: rotate(90deg) translate(0, -30px);
                        transform: rotate(90deg) translate(0, -30px);
                        -webkit-animation-delay: 0.4s;
                        animation-delay: 0.4s;
                    }

                    .bar div:nth-child(5) {
                        opacity: 1;
                        -webkit-transform: rotate(120deg) translate(0, -30px);
                        transform: rotate(120deg) translate(0, -30px);
                        -webkit-animation-delay: 0.1s;
                        animation-delay: 0.1s;
                    }

                    .bar div:nth-child(6) {
                        opacity: 0.66;
                        -webkit-transform: rotate(150deg) translate(0, -30px);
                        transform: rotate(150deg) translate(0, -30px);
                        -webkit-animation-delay: 0.2s;
                        animation-delay: 0.2s;
                    }

                    .bar div:nth-child(7) {
                        opacity: 0.33;
                        -webkit-transform: rotate(180deg) translate(0, -30px);
                        transform: rotate(180deg) translate(0, -30px);
                        -webkit-animation-delay: 0.3s;
                        animation-delay: 0.3s;
                    }

                    .bar div:nth-child(8) {
                        opacity: 0;
                        -webkit-transform: rotate(210deg) translate(0, -30px);
                        transform: rotate(210deg) translate(0, -30px);
                        -webkit-animation-delay: 0.4s;
                        animation-delay: 0.4s;
                    }

                    .bar div:nth-child(9) {
                        opacity: 1;
                        -webkit-transform: rotate(240deg) translate(0, -30px);
                        transform: rotate(240deg) translate(0, -30px);
                        -webkit-animation-delay: 0.1s;
                        animation-delay: 0.1s;
                    }

                    .bar div:nth-child(10) {
                        opacity: 0.66;
                        -webkit-transform: rotate(270deg) translate(0, -30px);
                        transform: rotate(270deg) translate(0, -30px);
                        -webkit-animation-delay: 0.2s;
                        animation-delay: 0.2s;
                    }

                    .bar div:nth-child(11) {
                        opacity: 0.33;
                        -webkit-transform: rotate(300deg) translate(0, -30px);
                        transform: rotate(300deg) translate(0, -30px);
                        -webkit-animation-delay: 0.3s;
                        animation-delay: 0.3s;
                    }

                    .bar div:nth-child(12) {
                        opacity: 0;
                        -webkit-transform: rotate(330deg) translate(0, -30px);
                        transform: rotate(330deg) translate(0, -30px);
                        -webkit-animation-delay: 0.4s;
                        animation-delay: 0.4s;
                    }

                    <body>@-webkit-keyframes fadeit {
                        1% {
                            opacity: 1;
                        }

                        100% {
                            opacity: 0;
                        }
                    }

                    @keyframes fadeit {
                        1% {
                            opacity: 1;
                        }

                        100% {
                            opacity: 0;
                        }
                    }
                </style>
            </head>

            <div class="loading bar">
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
            </div>
        </div>
    </div>
    <div id="page">
        <a class="skip-link screen-reader-text" href="#content">Skip to content</a>

        <div class="masthead inline-header center widgets full-height shadow-decoration show-device-logo show-mobile-logo" role="banner">

            <div class="top-bar solid-bg">
                <div class="left-widgets mini-widgets"><span class="mini-contacts address show-on-desktop near-logo-first-switch in-menu-second-switch">140 Paya Lebar Road #10-09 AZ - Singapore 409015</span></div>
                <div class="right-widgets mini-widgets"><span class="mini-contacts email show-on-desktop near-logo-first-switch in-menu-second-switch">info@rigwise.com</span><span class="mini-contacts clock show-on-desktop near-logo-first-switch in-menu-second-switch">Monday – Friday 9 AM – 5 PM</span></div>
            </div>

            <header class="header-bar">

                <div class="branding">

                    <a href="https://rigwise.com/"><img class=" preload-me" src="https://rigwise.com/wp-content/uploads/2017/05/logo-5.png" srcset="https://rigwise.com/wp-content/uploads/2017/05/logo-5.png 157w, https://rigwise.com/wp-content/uploads/2017/05/logo-big-1.png 240w" width="157" height="54" sizes="157px" alt="Rig Moves &amp; Marine Consultant" /><img class="mobile-logo preload-me" src="https://rigwise.com/wp-content/uploads/2017/05/logo-5.png" srcset="https://rigwise.com/wp-content/uploads/2017/05/logo-5.png 157w, https://rigwise.com/wp-content/uploads/2017/05/logo-5.png 157w" width="157" height="54" sizes="157px" alt="Rig Moves &amp; Marine Consultant" /></a>
                    <div id="site-title" class="assistive-text">Rig Moves &amp; Marine Consultant</div>
                    <div id="site-description" class="assistive-text">Rigwise Technologies Pte Ltd</div>



                </div>
                <ul id="primary-menu" class="main-nav underline-decoration upwards-line gradient-hover outside-item-remove-margin" role="menu">
                    <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-home current-menu-item page_item page-item-49593 current_page_item menu-item-52074 act first"><a href='https://rigwise.com/' data-level='1'><span class="menu-item-text"><span class="menu-text">Home</span></span></a></li>
                    <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-52107 dt-mega-menu mega-auto-width mega-column-3"><a href='https://rigwise.com/about-us/' data-level='1'><span class="menu-item-text"><span class="menu-text">About us</span></span></a></li>
                    <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-52073"><a href='https://rigwise.com/contact/' data-level='1'><span class="menu-item-text"><span class="menu-text">Contact</span></span></a></li>
                </ul>
                <div class="mini-widgets">
                    <div class="mini-search show-on-desktop near-logo-first-switch near-logo-second-switch">
                        <form class="searchform" role="search" method="get" action="https://rigwise.com/">
                            <input type="text" class="field searchform-s" name="s" value="" placeholder="Type and hit enter &hellip;" />
                            <input type="submit" class="assistive-text searchsubmit" value="Go!" />
                            <a href="#go" id="trigger-overlay" class="submit text-disable">&nbsp;</a>
                        </form>
                    </div>
                </div>
            </header>

        </div>
        <div class='dt-close-mobile-menu-icon'><span></span></div>
        <div class='dt-mobile-header'>
            <ul id="mobile-menu" class="mobile-main-nav" role="menu">
                <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-home current-menu-item page_item page-item-49593 current_page_item menu-item-52074 act first"><a href='https://rigwise.com/' data-level='1'><span class="menu-item-text"><span class="menu-text">Home</span></span></a></li>
                <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-52107 dt-mega-menu mega-auto-width mega-column-3"><a href='https://rigwise.com/about-us/' data-level='1'><span class="menu-item-text"><span class="menu-text">About us</span></span></a></li>
                <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-52073"><a href='https://rigwise.com/contact/' data-level='1'><span class="menu-item-text"><span class="menu-text">Contact</span></span></a></li>
            </ul>
            <div class='mobile-mini-widgets-in-menu'></div>
        </div>
        <div id="main-slideshow">
            <link href="https://fonts.googleapis.com/css?family=Montserrat%3A400%2C700" rel="stylesheet" property="stylesheet" type="text/css" media="all" />
            <link href="https://fonts.googleapis.com/css?family=Raleway%3A700%2C800" rel="stylesheet" property="stylesheet" type="text/css" media="all" />
            <link href="https://fonts.googleapis.com/css?family=Open+Sans%3A400" rel="stylesheet" property="stylesheet" type="text/css" media="all" />
            <div id="rev_slider_2_1_wrapper" class="rev_slider_wrapper fullwidthbanner-container" data-alias="the7-construction-slider" data-source="gallery" style="margin:0px auto;background-color:#6d6d6d;padding:0px;margin-top:0px;margin-bottom:0px;">
                <!-- START REVOLUTION SLIDER 5.3.0.2 auto mode -->
                <div id="rev_slider_2_1" class="rev_slider fullwidthabanner" style="display:none;" data-version="5.3.0.2">
                    <ul> <!-- SLIDE  -->
                        <li data-index="rs-4" data-transition="random-premium" data-slotamount="default" data-hideafterloop="0" data-hideslideonmobile="off" data-easein="default" data-easeout="default" data-masterspeed="300" data-thumb="https://rigwise.com/wp-content/uploads/2017/05/slider-1-crop-sence-3-100x50.jpg" data-rotate="0" data-fstransition="random-premium" data-fsmasterspeed="300" data-fsslotamount="15" data-saveperformance="off" data-title="Slide" data-param1="" data-param2="" data-param3="" data-param4="" data-param5="" data-param6="" data-param7="" data-param8="" data-param9="" data-param10="" data-description="">
                            <!-- MAIN IMAGE -->
                            <img src="https://rigwise.com/wp-content/plugins/revslider/admin/assets/images/dummy.png" alt="" title="slider-1-crop-sence-3" width="1920" height="716" data-lazyload="https://rigwise.com/wp-content/uploads/2017/05/slider-1-crop-sence-3.jpg" data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat" data-bgparallax="off" class="rev-slidebg" data-no-retina>
                            <!-- LAYERS -->

                            <!-- LAYER NR. 1 -->
                            <div class="tp-caption tp-shape tp-shapewrapper  tp-resizeme"
                                id="slide-4-layer-7"
                                data-x="['center','center','center','center']" data-hoffset="['28','0','1','1']"
                                data-y="['middle','middle','middle','middle']" data-voffset="['-2','0','1','1']"
                                data-width="1950"
                                data-height="750"
                                data-whitespace="normal"

                                data-type="shape"
                                data-responsive_offset="on"

                                data-frames='[{"delay":0,"speed":300,"frame":"0","from":"opacity:0;","to":"o:1;","ease":"Power2.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;","ease":"nothing"}]'
                                data-textAlign="['left','left','left','left']"
                                data-paddingtop="[0,0,0,0]"
                                data-paddingright="[0,0,0,0]"
                                data-paddingbottom="[0,0,0,0]"
                                data-paddingleft="[0,0,0,0]"

                                style="z-index: 5;background-color:rgba(18, 18, 18, 0.60);border-color:rgba(0, 0, 0, 0.50);"> </div>

                            <!-- LAYER NR. 2 -->
                            <div class="tp-caption   tp-resizeme"
                                id="slide-4-layer-1"
                                data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']"
                                data-y="['middle','middle','middle','middle']" data-voffset="['0','0','0','0']"
                                data-fontsize="['40','44','40','28']"
                                data-lineheight="['40','50','50','28']"
                                data-fontweight="['400','700','700','700']"
                                data-width="none"
                                data-height="none"
                                data-whitespace="nowrap"

                                data-type="text"
                                data-basealign="slide"
                                data-responsive_offset="on"

                                data-frames='[{"delay":990,"speed":1200,"frame":"0","from":"y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;","mask":"x:0px;y:[100%];s:inherit;e:inherit;","to":"o:1;","ease":"Power2.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;","ease":"nothing"}]'
                                data-textAlign="['center','center','center','center']"
                                data-paddingtop="[0,0,0,0]"
                                data-paddingright="[0,0,0,0]"
                                data-paddingbottom="[0,0,0,0]"
                                data-paddingleft="[0,0,0,0]"

                                style="z-index: 6; white-space: nowrap; font-size: 40px; line-height: 40px; font-weight: 400; color: rgba(255, 255, 255, 1.00);font-family:Montserrat;">WE ARE RECONSTRUCTING<BR>
                                THIS WEBSITE </div>
                        </li>
                        <!-- SLIDE  -->
                        <li data-index="rs-3" data-transition="random-premium" data-slotamount="default" data-hideafterloop="0" data-hideslideonmobile="off" data-easein="default" data-easeout="default" data-masterspeed="300" data-thumb="https://rigwise.com/wp-content/uploads/2017/05/PS-100x50.png" data-delay="9000" data-rotate="0" data-saveperformance="off" data-mediafilter="lofi" data-title="Slide" data-param1="" data-param2="" data-param3="" data-param4="" data-param5="" data-param6="" data-param7="" data-param8="" data-param9="" data-param10="" data-description="">
                            <!-- MAIN IMAGE -->
                            <img src="https://rigwise.com/wp-content/plugins/revslider/admin/assets/images/dummy.png" alt="" title="PS" width="1600" height="909" data-lazyload="https://rigwise.com/wp-content/uploads/2017/05/PS.png" data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat" data-bgparallax="off" class="rev-slidebg" data-no-retina>
                            <!-- LAYERS -->

                            <!-- LAYER NR. 3 -->
                            <div class="tp-caption Furniture-Title tp-layer-selectable  tp-resizeme"
                                id="slide-3-layer-1"
                                data-x="['left','left','center','center']" data-hoffset="['150','111','-128','-50']"
                                data-y="['top','top','middle','middle']" data-voffset="['143','122','-69','-53']"
                                data-fontsize="['54','44','30','24']"
                                data-lineheight="['54','50','30','24']"
                                data-fontweight="['700','700','700','800']"
                                data-width="['628','583','none','none']"
                                data-height="['139','100','none','none']"
                                data-whitespace="nowrap"

                                data-type="text"
                                data-responsive_offset="on"

                                data-frames='[{"delay":1050,"split":"chars","splitdelay":0.1000000000000000055511151231257827021181583404541015625,"speed":300,"frame":"0","from":"x:[-105%];z:0;rX:0deg;rY:0deg;rZ:-90deg;sX:1;sY:1;skX:0;skY:0;","mask":"x:0px;y:0px;s:inherit;e:inherit;","to":"o:1;","ease":"Power4.easeIn"},{"delay":"wait","speed":1000,"frame":"999","ease":"nothing"}]'
                                data-textAlign="['left','left','left','left']"
                                data-paddingtop="[0,0,0,0]"
                                data-paddingright="[0,0,0,0]"
                                data-paddingbottom="[0,0,0,0]"
                                data-paddingleft="[0,0,0,0]"

                                style="z-index: 5; min-width: 628px; max-width: 628px; max-width: 139px; max-width: 139px; white-space: nowrap; font-size: 54px; line-height: 54px;border-width:0px 0px 0px 0px;">RIG MOVERS &<BR>
                                MARINE CONSULTANT </div>
                        </li>
                        <!-- SLIDE  -->
                        <li data-index="rs-30" data-transition="random-premium" data-slotamount="default" data-hideafterloop="0" data-hideslideonmobile="off" data-easein="default" data-easeout="default" data-masterspeed="300" data-thumb="https://rigwise.com/wp-content/uploads/2017/05/West-Vencedor-1-100x50.jpg" data-rotate="0" data-saveperformance="off" data-mediafilter="lofi" data-title="Slide" data-param1="" data-param2="" data-param3="" data-param4="" data-param5="" data-param6="" data-param7="" data-param8="" data-param9="" data-param10="" data-description="">
                            <!-- MAIN IMAGE -->
                            <img src="https://rigwise.com/wp-content/plugins/revslider/admin/assets/images/dummy.png" alt="" title="West-Vencedor" width="640" height="360" data-lazyload="https://rigwise.com/wp-content/uploads/2017/05/West-Vencedor-1.jpg" data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat" data-bgparallax="off" class="rev-slidebg" data-no-retina>
                            <!-- LAYERS -->
                        </li>
                        <!-- SLIDE  -->
                        <li data-index="rs-2" data-transition="random-premium" data-slotamount="default" data-hideafterloop="0" data-hideslideonmobile="off" data-easein="default" data-easeout="default" data-masterspeed="300" data-thumb="https://rigwise.com/wp-content/uploads/2017/05/19-IMG_0665-100x50.jpg" data-rotate="0" data-saveperformance="off" data-mediafilter="lofi" data-title="Slide" data-param1="" data-param2="" data-param3="" data-param4="" data-param5="" data-param6="" data-param7="" data-param8="" data-param9="" data-param10="" data-description="">
                            <!-- MAIN IMAGE -->
                            <img src="https://rigwise.com/wp-content/plugins/revslider/admin/assets/images/dummy.png" alt="" title="19-IMG_0665" width="600" height="336" data-lazyload="https://rigwise.com/wp-content/uploads/2017/05/19-IMG_0665.jpg" data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat" data-bgparallax="off" class="rev-slidebg" data-no-retina>
                            <!-- LAYERS -->

                            <!-- LAYER NR. 4 -->
                            <div class="tp-caption   tp-resizeme"
                                id="slide-2-layer-13"
                                data-x="['left','left','left','center']" data-hoffset="['58','58','44','0']"
                                data-y="['top','top','top','middle']" data-voffset="['44','44','26','-66']"
                                data-width="none"
                                data-height="none"
                                data-whitespace="nowrap"

                                data-type="image"
                                data-responsive_offset="on"

                                data-frames='[{"delay":570,"speed":1000,"frame":"0","from":"z:0;rX:0deg;rY:0;rZ:0;sX:2;sY:2;skX:0;skY:0;opacity:0;","mask":"x:0px;y:0px;s:inherit;e:inherit;","to":"o:1;","ease":"Power2.easeOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;","ease":"Power3.easeInOut"}]'
                                data-textAlign="['inherit','inherit','inherit','inherit']"
                                data-paddingtop="[0,0,0,0]"
                                data-paddingright="[0,0,0,0]"
                                data-paddingbottom="[0,0,0,0]"
                                data-paddingleft="[0,0,0,0]"

                                style="z-index: 5;"><img src="https://rigwise.com/wp-content/plugins/revslider/admin/assets/images/dummy.png" alt="" data-ww="['400px','400px','400px','400px']" data-hh="['225px','225px','225px','225px']" width="400" height="225" data-lazyload="https://rigwise.com/wp-content/uploads/2017/05/Makakai-01-2.jpg" data-no-retina> </div>

                            <!-- LAYER NR. 5 -->
                            <div class="tp-caption   tp-resizeme"
                                id="slide-2-layer-14"
                                data-x="['left','left','left','center']" data-hoffset="['117','121','109','0']"
                                data-y="['top','top','top','middle']" data-voffset="['83','63','51','-66']"
                                data-width="none"
                                data-height="none"
                                data-whitespace="nowrap"

                                data-type="image"
                                data-responsive_offset="on"

                                data-frames='[{"delay":2450,"speed":1000,"frame":"0","from":"z:0;rX:0deg;rY:0;rZ:0;sX:2;sY:2;skX:0;skY:0;opacity:0;","mask":"x:0px;y:0px;s:inherit;e:inherit;","to":"o:1;","ease":"Power2.easeOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;","ease":"Power3.easeInOut"}]'
                                data-textAlign="['inherit','inherit','inherit','inherit']"
                                data-paddingtop="[0,0,0,0]"
                                data-paddingright="[0,0,0,0]"
                                data-paddingbottom="[0,0,0,0]"
                                data-paddingleft="[0,0,0,0]"

                                style="z-index: 6;"><img src="https://rigwise.com/wp-content/plugins/revslider/admin/assets/images/dummy.png" alt="" data-ww="['400px','400px','400px','400px']" data-hh="['225px','225px','225px','225px']" width="400" height="225" data-lazyload="https://rigwise.com/wp-content/uploads/2017/05/Malakai-04-1.jpg" data-no-retina> </div>

                            <!-- LAYER NR. 6 -->
                            <div class="tp-caption   tp-resizeme"
                                id="slide-2-layer-12"
                                data-x="['left','left','left','center']" data-hoffset="['183','187','176','0']"
                                data-y="['top','top','top','middle']" data-voffset="['130','95','86','-66']"
                                data-width="none"
                                data-height="none"
                                data-whitespace="nowrap"

                                data-type="image"
                                data-responsive_offset="on"

                                data-frames='[{"delay":4530,"speed":1000,"frame":"0","from":"z:0;rX:0deg;rY:0;rZ:0;sX:2;sY:2;skX:0;skY:0;opacity:0;","mask":"x:0px;y:0px;s:inherit;e:inherit;","to":"o:1;","ease":"Power2.easeOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;","ease":"Power3.easeInOut"}]'
                                data-textAlign="['inherit','inherit','inherit','inherit']"
                                data-paddingtop="[0,0,0,0]"
                                data-paddingright="[0,0,0,0]"
                                data-paddingbottom="[0,0,0,0]"
                                data-paddingleft="[0,0,0,0]"

                                style="z-index: 7;"><img src="https://rigwise.com/wp-content/plugins/revslider/admin/assets/images/dummy.png" alt="" data-ww="['400px','400px','400px','400px']" data-hh="['225px','225px','225px','225px']" width="400" height="225" data-lazyload="https://rigwise.com/wp-content/uploads/2017/05/Malakai-03-2.jpg" data-no-retina> </div>

                            <!-- LAYER NR. 7 -->
                            <div class="tp-caption   tp-resizeme"
                                id="slide-2-layer-11"
                                data-x="['center','center','center','center']" data-hoffset="['-181','-65','47','0']"
                                data-y="['middle','middle','middle','middle']" data-voffset="['-14','-62','-17','-66']"
                                data-width="none"
                                data-height="none"
                                data-whitespace="nowrap"

                                data-type="image"
                                data-responsive_offset="on"

                                data-frames='[{"delay":6640,"speed":1000,"frame":"0","from":"z:0;rX:0deg;rY:0;rZ:0;sX:2;sY:2;skX:0;skY:0;opacity:0;","mask":"x:0px;y:0px;s:inherit;e:inherit;","to":"o:1;","ease":"Power2.easeOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;","ease":"Power3.easeInOut"}]'
                                data-textAlign="['inherit','inherit','inherit','inherit']"
                                data-paddingtop="[0,0,0,0]"
                                data-paddingright="[0,0,0,0]"
                                data-paddingbottom="[0,0,0,0]"
                                data-paddingleft="[0,0,0,0]"

                                style="z-index: 8;"><img src="https://rigwise.com/wp-content/plugins/revslider/admin/assets/images/dummy.png" alt="" data-ww="['400px','400px','400px','400px']" data-hh="['225px','225px','225px','225px']" width="400" height="225" data-lazyload="https://rigwise.com/wp-content/uploads/2017/05/Malakai-02-2.jpg" data-no-retina> </div>

                            <!-- LAYER NR. 8 -->
                            <div class="tp-caption rev-btn  tp-resizeme"
                                id="slide-2-layer-4"
                                data-x="['center','left','left','left']" data-hoffset="['133','567','564','153']"
                                data-y="['top','top','middle','bottom']" data-voffset="['352','463','152','32']"
                                data-fontsize="['14','18','14','15']"
                                data-lineheight="['17','18','14','17']"
                                data-width="['none','none','154','none']"
                                data-height="['none','none','45','none']"
                                data-whitespace="nowrap"

                                data-type="button"
                                data-actions='[{"event":"click","action":"simplelink","target":"_self","url":"http:\/\/the7.dream-demo.com\/demo\/construction\/services\/","delay":""}]'
                                data-responsive_offset="on"

                                data-frames='[{"delay":7800,"speed":1200,"frame":"0","from":"y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;","mask":"x:0px;y:[100%];s:inherit;e:inherit;","to":"o:1;","ease":"Power2.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;","ease":"nothing"},{"frame":"hover","speed":"0","ease":"Linear.easeNone","force":true,"to":"o:1;rX:0;rY:0;rZ:0;z:0;","style":"c:rgba(255, 255, 255, 1.00);bg:rgba(252, 168, 0, 1.00);bs:solid;bw:0 0 0 0;"}]'
                                data-textAlign="['left','left','left','left']"
                                data-paddingtop="[15,15,15,15]"
                                data-paddingright="[18,18,18,18]"
                                data-paddingbottom="[15,15,15,15]"
                                data-paddingleft="[18,18,18,18]"

                                style="z-index: 9; white-space: nowrap; font-size: 14px; line-height: 17px; font-weight: 700; color: rgba(255, 255, 255, 1.00);font-family:Montserrat;background-color:rgba(255, 192, 0, 1.00);border-color:rgba(0, 0, 0, 1.00);border-radius:3px 3px 3px 3px;outline:none;box-shadow:none;box-sizing:border-box;-moz-box-sizing:border-box;-webkit-box-sizing:border-box;cursor:pointer;">See Our Services </div>

                            <!-- LAYER NR. 9 -->
                            <div class="tp-caption   tp-resizeme"
                                id="slide-2-layer-15"
                                data-x="['left','left','left','left']" data-hoffset="['66','57','42','46']"
                                data-y="['top','top','top','top']" data-voffset="['422','376','382','268']"
                                data-fontsize="['30','30','20','16']"
                                data-lineheight="['30','30','20','18']"
                                data-fontweight="['400','400','700','700']"
                                data-width="['730','730','none','none']"
                                data-height="['98','98','none','none']"
                                data-whitespace="['normal','normal','nowrap','nowrap']"

                                data-type="text"
                                data-responsive_offset="on"

                                data-frames='[{"delay":500,"split":"chars","splitdelay":0.1000000000000000055511151231257827021181583404541015625,"speed":500,"frame":"0","from":"z:0;rX:0deg;rY:0;rZ:0;sX:2;sY:2;skX:0;skY:0;opacity:0;","mask":"x:0px;y:0px;s:inherit;e:inherit;","to":"o:1;","ease":"Power3.easeIn"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;","ease":"Power3.easeInOut"}]'
                                data-textAlign="['inherit','inherit','inherit','inherit']"
                                data-paddingtop="[0,0,0,0]"
                                data-paddingright="[0,0,0,0]"
                                data-paddingbottom="[0,0,0,0]"
                                data-paddingleft="[0,0,0,0]"

                                style="z-index: 10; min-width: 730px; max-width: 730px; max-width: 98px; max-width: 98px; white-space: normal; font-size: 30px; line-height: 30px; font-weight: 400; color: rgba(255, 255, 255, 1.00);font-family:Montserrat;">From shipping and offshore services <br>
                                with the highest levels of customer satisfaction. </div>
                        </li>
                        <!-- SLIDE  -->
                        <li data-index="rs-19" data-transition="random-premium" data-slotamount="default" data-hideafterloop="0" data-hideslideonmobile="off" data-easein="default" data-easeout="default" data-masterspeed="300" data-thumb="https://rigwise.com/wp-content/uploads/2017/05/TD-15-045-100x50.jpg" data-rotate="0" data-saveperformance="off" data-mediafilter="clarendon" data-title="Slide" data-param1="" data-param2="" data-param3="" data-param4="" data-param5="" data-param6="" data-param7="" data-param8="" data-param9="" data-param10="" data-description="">
                            <!-- MAIN IMAGE -->
                            <img src="https://rigwise.com/wp-content/plugins/revslider/admin/assets/images/dummy.png" alt="" title="TD-15-045" width="1600" height="900" data-lazyload="https://rigwise.com/wp-content/uploads/2017/05/TD-15-045.jpg" data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat" data-bgparallax="off" class="rev-slidebg" data-no-retina>
                            <!-- LAYERS -->
                        </li>
                        <!-- SLIDE  -->
                        <li data-index="rs-20" data-transition="random-premium" data-slotamount="default" data-hideafterloop="0" data-hideslideonmobile="off" data-easein="default" data-easeout="default" data-masterspeed="300" data-thumb="https://rigwise.com/wp-content/uploads/2017/05/TD-15-084-100x50.jpg" data-rotate="0" data-saveperformance="off" data-title="Slide" data-param1="" data-param2="" data-param3="" data-param4="" data-param5="" data-param6="" data-param7="" data-param8="" data-param9="" data-param10="" data-description="">
                            <!-- MAIN IMAGE -->
                            <img src="https://rigwise.com/wp-content/plugins/revslider/admin/assets/images/dummy.png" alt="" title="TD-15-084" width="1600" height="900" data-lazyload="https://rigwise.com/wp-content/uploads/2017/05/TD-15-084.jpg" data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat" data-bgparallax="off" class="rev-slidebg" data-no-retina>
                            <!-- LAYERS -->
                        </li>
                        <!-- SLIDE  -->
                        <li data-index="rs-22" data-transition="random-premium" data-slotamount="default" data-hideafterloop="0" data-hideslideonmobile="off" data-easein="default" data-easeout="default" data-masterspeed="300" data-thumb="https://rigwise.com/wp-content/uploads/2017/05/TD-15-036-100x50.jpg" data-rotate="0" data-saveperformance="off" data-mediafilter="clarendon" data-title="Slide" data-param1="" data-param2="" data-param3="" data-param4="" data-param5="" data-param6="" data-param7="" data-param8="" data-param9="" data-param10="" data-description="">
                            <!-- MAIN IMAGE -->
                            <img src="https://rigwise.com/wp-content/plugins/revslider/admin/assets/images/dummy.png" alt="" title="TD-15-036" width="1600" height="900" data-lazyload="https://rigwise.com/wp-content/uploads/2017/05/TD-15-036.jpg" data-bgposition="center center" data-bgfit="100% 100%" data-bgrepeat="no-repeat" data-bgparallax="off" class="rev-slidebg" data-no-retina>
                            <!-- LAYERS -->
                        </li>
                        <!-- SLIDE  -->
                        <li data-index="rs-21" data-transition="random-premium" data-slotamount="default" data-hideafterloop="0" data-hideslideonmobile="off" data-easein="default" data-easeout="default" data-masterspeed="300" data-thumb="https://rigwise.com/wp-content/uploads/2017/05/36-1000625-100x50.jpg" data-rotate="0" data-saveperformance="off" data-mediafilter="lofi" data-title="Slide" data-param1="" data-param2="" data-param3="" data-param4="" data-param5="" data-param6="" data-param7="" data-param8="" data-param9="" data-param10="" data-description="">
                            <!-- MAIN IMAGE -->
                            <img src="https://rigwise.com/wp-content/plugins/revslider/admin/assets/images/dummy.png" alt="" title="36-1000625" width="960" height="540" data-lazyload="https://rigwise.com/wp-content/uploads/2017/05/36-1000625.jpg" data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat" data-bgparallax="off" class="rev-slidebg" data-no-retina>
                            <!-- LAYERS -->
                        </li>
                        <!-- SLIDE  -->
                        <li data-index="rs-23" data-transition="random-premium" data-slotamount="default" data-hideafterloop="0" data-hideslideonmobile="off" data-easein="default" data-easeout="default" data-masterspeed="300" data-thumb="https://rigwise.com/wp-content/uploads/2017/05/DSCF0414-1-100x50.jpg" data-rotate="0" data-saveperformance="off" data-mediafilter="clarendon" data-title="Slide" data-param1="" data-param2="" data-param3="" data-param4="" data-param5="" data-param6="" data-param7="" data-param8="" data-param9="" data-param10="" data-description="">
                            <!-- MAIN IMAGE -->
                            <img src="https://rigwise.com/wp-content/plugins/revslider/admin/assets/images/dummy.png" alt="" title="DSCF0414-1" width="1024" height="576" data-lazyload="https://rigwise.com/wp-content/uploads/2017/05/DSCF0414-1.jpg" data-bgposition="center center" data-bgfit="100% 100%" data-bgrepeat="no-repeat" data-bgparallax="off" class="rev-slidebg" data-no-retina>
                            <!-- LAYERS -->
                        </li>
                        <!-- SLIDE  -->
                        <li data-index="rs-25" data-transition="random-premium" data-slotamount="default" data-hideafterloop="0" data-hideslideonmobile="off" data-easein="default" data-easeout="default" data-masterspeed="300" data-thumb="https://rigwise.com/wp-content/uploads/2017/05/13-IMG_0649-100x50.jpg" data-rotate="0" data-saveperformance="off" data-mediafilter="lofi" data-title="Slide" data-param1="" data-param2="" data-param3="" data-param4="" data-param5="" data-param6="" data-param7="" data-param8="" data-param9="" data-param10="" data-description="">
                            <!-- MAIN IMAGE -->
                            <img src="https://rigwise.com/wp-content/plugins/revslider/admin/assets/images/dummy.png" alt="" title="13-IMG_0649" width="760" height="428" data-lazyload="https://rigwise.com/wp-content/uploads/2017/05/13-IMG_0649.jpg" data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat" data-bgparallax="off" class="rev-slidebg" data-no-retina>
                            <!-- LAYERS -->
                        </li>
                        <!-- SLIDE  -->
                        <li data-index="rs-26" data-transition="random-premium" data-slotamount="default" data-hideafterloop="0" data-hideslideonmobile="off" data-easein="default" data-easeout="default" data-masterspeed="300" data-thumb="https://rigwise.com/wp-content/uploads/2017/05/42-IMG_0974-100x50.jpg" data-rotate="0" data-saveperformance="off" data-mediafilter="lofi" data-title="Slide" data-param1="" data-param2="" data-param3="" data-param4="" data-param5="" data-param6="" data-param7="" data-param8="" data-param9="" data-param10="" data-description="">
                            <!-- MAIN IMAGE -->
                            <img src="https://rigwise.com/wp-content/plugins/revslider/admin/assets/images/dummy.png" alt="" title="42-IMG_0974" width="960" height="540" data-lazyload="https://rigwise.com/wp-content/uploads/2017/05/42-IMG_0974.jpg" data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat" data-bgparallax="off" class="rev-slidebg" data-no-retina>
                            <!-- LAYERS -->
                        </li>
                        <!-- SLIDE  -->
                        <li data-index="rs-27" data-transition="random-premium" data-slotamount="default" data-hideafterloop="0" data-hideslideonmobile="off" data-easein="default" data-easeout="default" data-masterspeed="300" data-thumb="https://rigwise.com/wp-content/uploads/2017/05/39-P1000644-100x50.jpg" data-rotate="0" data-saveperformance="off" data-mediafilter="mayfair" data-title="Slide" data-param1="" data-param2="" data-param3="" data-param4="" data-param5="" data-param6="" data-param7="" data-param8="" data-param9="" data-param10="" data-description="">
                            <!-- MAIN IMAGE -->
                            <img src="https://rigwise.com/wp-content/plugins/revslider/admin/assets/images/dummy.png" alt="" title="39-P1000644" width="800" height="450" data-lazyload="https://rigwise.com/wp-content/uploads/2017/05/39-P1000644.jpg" data-bgposition="center center" data-bgfit="100% 100%" data-bgrepeat="no-repeat" data-bgparallax="off" class="rev-slidebg" data-no-retina>
                            <!-- LAYERS -->
                        </li>
                        <!-- SLIDE  -->
                        <li data-index="rs-28" data-transition="random-premium" data-slotamount="default" data-hideafterloop="0" data-hideslideonmobile="off" data-easein="default" data-easeout="default" data-masterspeed="300" data-thumb="https://rigwise.com/wp-content/uploads/2017/05/TD-15-102-100x50.jpg" data-rotate="0" data-saveperformance="off" data-mediafilter="mayfair" data-title="Slide" data-param1="" data-param2="" data-param3="" data-param4="" data-param5="" data-param6="" data-param7="" data-param8="" data-param9="" data-param10="" data-description="">
                            <!-- MAIN IMAGE -->
                            <img src="https://rigwise.com/wp-content/plugins/revslider/admin/assets/images/dummy.png" alt="" title="TD-15-102" width="1600" height="900" data-lazyload="https://rigwise.com/wp-content/uploads/2017/05/TD-15-102.jpg" data-bgposition="center center" data-bgfit="100% 100%" data-bgrepeat="no-repeat" data-bgparallax="off" class="rev-slidebg" data-no-retina>
                            <!-- LAYERS -->
                        </li>
                        <!-- SLIDE  -->
                        <li data-index="rs-29" data-transition="random-premium" data-slotamount="default" data-hideafterloop="0" data-hideslideonmobile="off" data-easein="default" data-easeout="default" data-masterspeed="300" data-thumb="https://rigwise.com/wp-content/uploads/2017/05/RolldockSun-050-100x50.jpg" data-rotate="0" data-saveperformance="off" data-mediafilter="_1977" data-title="Slide" data-param1="" data-param2="" data-param3="" data-param4="" data-param5="" data-param6="" data-param7="" data-param8="" data-param9="" data-param10="" data-description="">
                            <!-- MAIN IMAGE -->
                            <img src="https://rigwise.com/wp-content/plugins/revslider/admin/assets/images/dummy.png" alt="" title="RolldockSun-050" width="400" height="225" data-lazyload="https://rigwise.com/wp-content/uploads/2017/05/RolldockSun-050.jpg" data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat" data-bgparallax="off" class="rev-slidebg" data-no-retina>
                            <!-- LAYERS -->
                        </li>
                        <!-- SLIDE  -->
                        <li data-index="rs-31" data-transition="random-premium" data-slotamount="default" data-hideafterloop="0" data-hideslideonmobile="off" data-easein="default" data-easeout="default" data-masterspeed="300" data-thumb="https://rigwise.com/wp-content/uploads/2017/05/rig-100x50.jpg" data-rotate="0" data-saveperformance="off" data-mediafilter="clarendon" data-title="Slide" data-param1="" data-param2="" data-param3="" data-param4="" data-param5="" data-param6="" data-param7="" data-param8="" data-param9="" data-param10="" data-description="">
                            <!-- MAIN IMAGE -->
                            <img src="https://rigwise.com/wp-content/plugins/revslider/admin/assets/images/dummy.png" alt="" title="rig" width="1600" height="900" data-lazyload="https://rigwise.com/wp-content/uploads/2017/05/rig.jpg" data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat" data-bgparallax="off" class="rev-slidebg" data-no-retina>
                            <!-- LAYERS -->
                        </li>
                    </ul>
                    <script>
                        var htmlDiv = document.getElementById("rs-plugin-settings-inline-css");
                        var htmlDivCss = "";
                        if (htmlDiv) {
                            htmlDiv.innerHTML = htmlDiv.innerHTML + htmlDivCss;
                        } else {
                            var htmlDiv = document.createElement("div");
                            htmlDiv.innerHTML = "<style>" + htmlDivCss + "</style>";
                            document.getElementsByTagName("head")[0].appendChild(htmlDiv.childNodes[0]);
                        }
                    </script>
                    <div class="tp-bannertimer tp-bottom" style="visibility: hidden !important;"></div>
                </div>
                <script>
                    var htmlDiv = document.getElementById("rs-plugin-settings-inline-css");
                    var htmlDivCss = ".tp-caption.Furniture-Title,.Furniture-Title{color:rgba(0,0,0,1.00);font-size:20px;line-height:20px;font-weight:700;font-style:normal;font-family:\"Raleway\";text-decoration:none;background-color:transparent;border-color:transparent;border-style:none;border-width:0px;border-radius:0px 0px 0px 0px;text-shadow:none;letter-spacing:3px}";
                    if (htmlDiv) {
                        htmlDiv.innerHTML = htmlDiv.innerHTML + htmlDivCss;
                    } else {
                        var htmlDiv = document.createElement("div");
                        htmlDiv.innerHTML = "<style>" + htmlDivCss + "</style>";
                        document.getElementsByTagName("head")[0].appendChild(htmlDiv.childNodes[0]);
                    }
                </script>
                <script type="text/javascript">
                    /******************************************
				-	PREPARE PLACEHOLDER FOR SLIDER	-
			******************************************/

                    var setREVStartSize = function() {
                        try {
                            var e = new Object,
                                i = jQuery(window).width(),
                                t = 9999,
                                r = 0,
                                n = 0,
                                l = 0,
                                f = 0,
                                s = 0,
                                h = 0;
                            e.c = jQuery('#rev_slider_2_1');
                            e.responsiveLevels = [1240, 1024, 778, 480];
                            e.gridwidth = [1240, 1024, 778, 480];
                            e.gridheight = [600, 600, 500, 400];

                            e.sliderLayout = "auto";
                            if (e.responsiveLevels && (jQuery.each(e.responsiveLevels, function(e, f) {
                                    f > i && (t = r = f, l = e), i > f && f > r && (r = f, n = e)
                                }), t > r && (l = n)), f = e.gridheight[l] || e.gridheight[0] || e.gridheight, s = e.gridwidth[l] || e.gridwidth[0] || e.gridwidth, h = i / s, h = h > 1 ? 1 : h, f = Math.round(h * f), "fullscreen" == e.sliderLayout) {
                                var u = (e.c.width(), jQuery(window).height());
                                if (void 0 != e.fullScreenOffsetContainer) {
                                    var c = e.fullScreenOffsetContainer.split(",");
                                    if (c) jQuery.each(c, function(e, i) {
                                        u = jQuery(i).length > 0 ? u - jQuery(i).outerHeight(!0) : u
                                    }), e.fullScreenOffset.split("%").length > 1 && void 0 != e.fullScreenOffset && e.fullScreenOffset.length > 0 ? u -= jQuery(window).height() * parseInt(e.fullScreenOffset, 0) / 100 : void 0 != e.fullScreenOffset && e.fullScreenOffset.length > 0 && (u -= parseInt(e.fullScreenOffset, 0))
                                }
                                f = u
                            } else void 0 != e.minHeight && f < e.minHeight && (f = e.minHeight);
                            e.c.closest(".rev_slider_wrapper").css({
                                height: f
                            })

                        } catch (d) {
                            console.log("Failure at Presize of Slider:" + d)
                        }
                    };

                    setREVStartSize();

                    var tpj = jQuery;

                    var revapi2;
                    tpj(document).ready(function() {
                        if (tpj("#rev_slider_2_1").revolution == undefined) {
                            revslider_showDoubleJqueryError("#rev_slider_2_1");
                        } else {
                            revapi2 = tpj("#rev_slider_2_1").show().revolution({
                                sliderType: "standard",
                                jsFileLocation: "//rigwise.com/wp-content/plugins/revslider/public/assets/js/",
                                sliderLayout: "auto",
                                dottedOverlay: "none",
                                delay: 9000,
                                navigation: {
                                    keyboardNavigation: "off",
                                    keyboard_direction: "horizontal",
                                    mouseScrollNavigation: "off",
                                    mouseScrollReverse: "default",
                                    onHoverStop: "off",
                                    touch: {
                                        touchenabled: "on",
                                        swipe_threshold: 75,
                                        swipe_min_touches: 50,
                                        swipe_direction: "horizontal",
                                        drag_block_vertical: false
                                    },
                                    arrows: {
                                        style: "gyges",
                                        enable: true,
                                        hide_onmobile: true,
                                        hide_under: 600,
                                        hide_onleave: true,
                                        hide_delay: 200,
                                        hide_delay_mobile: 1200,
                                        tmp: '',
                                        left: {
                                            h_align: "left",
                                            v_align: "center",
                                            h_offset: 30,
                                            v_offset: 0
                                        },
                                        right: {
                                            h_align: "right",
                                            v_align: "center",
                                            h_offset: 30,
                                            v_offset: 0
                                        }
                                    }
                                },
                                responsiveLevels: [1240, 1024, 778, 480],
                                visibilityLevels: [1240, 1024, 778, 480],
                                gridwidth: [1240, 1024, 778, 480],
                                gridheight: [600, 600, 500, 400],
                                lazyType: "smart",
                                parallax: {
                                    type: "mouse",
                                    origo: "slidercenter",
                                    speed: 2000,
                                    levels: [2, 3, 4, 5, 6, 7, 12, 16, 10, 50, 47, 48, 49, 50, 51, 55],
                                    type: "mouse",
                                },
                                shadow: 0,
                                spinner: "off",
                                stopLoop: "off",
                                stopAfterLoops: -1,
                                stopAtSlide: -1,
                                shuffle: "off",
                                autoHeight: "off",
                                disableProgressBar: "on",
                                hideThumbsOnMobile: "off",
                                hideSliderAtLimit: 0,
                                hideCaptionAtLimit: 0,
                                hideAllCaptionAtLilmit: 0,
                                startWithSlide: 0,
                                debugMode: false,
                                fallbacks: {
                                    simplifyAll: "off",
                                    nextSlideOnWindowFocus: "off",
                                    disableFocusListener: true,
                                }
                            });
                        }
                    }); /*ready*/
                </script>
            </div><!-- END REVOLUTION SLIDER -->
        </div>

        <div id="main" class="sidebar-none sidebar-divider-off">


            <div class="main-gradient"></div>
            <div class="wf-wrap">
                <div class="wf-container-main">




                    <div id="content" class="content" role="main">



                        <div class="wpb-content-wrapper">
                            <div class="vc_row wpb_row vc_row-fluid dt-default" style="margin-top: 0px;margin-bottom: 20px">
                                <div class="wpb_column vc_column_container vc_col-sm-12 vc_col-lg-6 vc_col-md-6 vc_col-xs-12">
                                    <div class="vc_column-inner ">
                                        <div class="wpb_wrapper">
                                            <div class="wpb_text_column wpb_content_element ">
                                                <div class="wpb_wrapper">
                                                    <h4>WELCOME TO RIGWISE.COM</h4>

                                                </div>
                                            </div>

                                            <div class="wpb_text_column wpb_content_element ">
                                                <div class="wpb_wrapper">
                                                    <p><strong>Rigs, Ships and The Vessels that move them.</strong></p>
                                                    <p>We are a top-performing Marine Consultant credited with managing all phases of rig operations, international marine operations, and expertise to deliver cost savings and budgetary efficiency in international, multi-cultural markets.</p>
                                                    <p>Our skilled Marine Team include Rig Movers and Pilots for both anchored and jack-up MODU’s, Reconnect Pilots for FPSO Operations, Shuttle Pilots for FPSO Operations.</p>
                                                    <p>Our skilled Rig Team include Rig Manager, Bull Pusher and Performance Pusher, Completions Manager and Sub Sea Experts.</p>
                                                    <p>Our highly accomplished team can proactively manage your needs with the ability to build and maintain relationships, a core skill in business today.</p>

                                                </div>
                                            </div>
                                            <div class="vc_empty_space" style="height: 40px"><span class="vc_empty_space_inner"></span></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="wpb_column vc_column_container vc_col-sm-12 vc_col-lg-6 vc_col-md-6 vc_col-xs-12">
                                    <div class="vc_column-inner ">
                                        <div class="wpb_wrapper">
                                            <div class="wpb_text_column wpb_content_element ">
                                                <div class="wpb_wrapper">
                                                    <h4>KEY<strong> SKILLS</strong></h4>

                                                </div>
                                            </div>

                                            <div class="wpb_accordion wpb_content_element  not-column-inherit dt-style dt-accordion-text-big" data-collapsible="" data-vc-disable-keydown="false" data-active-tab="1">
                                                <div class="wpb_wrapper wpb_accordion_wrapper ui-accordion">


                                                    <div class="wpb_accordion_section group">
                                                        <h3 class="wpb_accordion_header ui-accordion-header"><a href="#marine-waranty"><span>MARINE WARANTY</span></a></h3>
                                                        <div class="wpb_accordion_content ui-accordion-content vc_clearfix">

                                                            <div class="wpb_text_column wpb_content_element ">
                                                                <div class="wpb_wrapper">
                                                                    <ul>
                                                                        <li>Extensive work in Australia and S.E.A. managing and delivering Marine Operations.</li>
                                                                        <li>OVID and CMID qualified inspectors for AHTS &#8211; Jack Ups &#8211; SemiSubs &#8211; Drill Ships.</li>
                                                                    </ul>

                                                                </div>
                                                            </div>

                                                        </div>
                                                    </div>

                                                    <div class="wpb_accordion_section group">
                                                        <h3 class="wpb_accordion_header ui-accordion-header"><a href="#rig-mover"><span>RIG MOVER</span></a></h3>
                                                        <div class="wpb_accordion_content ui-accordion-content vc_clearfix">

                                                            <div class="wpb_text_column wpb_content_element ">
                                                                <div class="wpb_wrapper">
                                                                    <ul>
                                                                        <li>For Jack–Up and Floating MODU Operations.</li>
                                                                        <li>FPSO Reconnect Pilot.</li>
                                                                        <li>FPSO Shuttle Pilot.</li>
                                                                        <li>Published FPSO Pilot guide for local FPSO Operations.</li>
                                                                    </ul>

                                                                </div>
                                                            </div>

                                                        </div>
                                                    </div>

                                                    <div class="wpb_accordion_section group">
                                                        <h3 class="wpb_accordion_header ui-accordion-header"><a href="#rig-specialists"><span>RIG SPECIALISTS</span></a></h3>
                                                        <div class="wpb_accordion_content ui-accordion-content vc_clearfix">

                                                            <div class="wpb_text_column wpb_content_element ">
                                                                <div class="wpb_wrapper">
                                                                    <ul>
                                                                        <li>For Jack-Up and Floating MODU Operation.</li>
                                                                        <li>Well safe consultant for operations.</li>
                                                                        <li>Rig Manager and Performance Coaching.</li>
                                                                        <li>Bull Pusher for Operations Performance.</li>
                                                                        <li>Cyber Rig Manegement and Operations.</li>
                                                                        <li>World Class Sub Sea Specialists.</li>
                                                                    </ul>

                                                                </div>
                                                            </div>

                                                        </div>
                                                    </div>

                                                    <div class="wpb_accordion_section group">
                                                        <h3 class="wpb_accordion_header ui-accordion-header"><a href="#international-consultancy"><span>INTERNATIONAL CONSULTANCY</span></a></h3>
                                                        <div class="wpb_accordion_content ui-accordion-content vc_clearfix">

                                                            <div class="wpb_text_column wpb_content_element ">
                                                                <div class="wpb_wrapper">
                                                                    <ul>
                                                                        <li>Have consulted cross cultural change creating a more stable workforce and delivered positive profit from the yard after consecutive years of reporting revenue losses.</li>
                                                                    </ul>

                                                                </div>
                                                            </div>

                                                        </div>
                                                    </div>

                                                    <div class="wpb_accordion_section group">
                                                        <h3 class="wpb_accordion_header ui-accordion-header"><a href="#customer-relations"><span>CUSTOMER RELATIONS</span></a></h3>
                                                        <div class="wpb_accordion_content ui-accordion-content vc_clearfix">

                                                            <div class="wpb_text_column wpb_content_element ">
                                                                <div class="wpb_wrapper">
                                                                    <ul>
                                                                        <li>Coach and support companies and individuals from diverse cultures and backgrounds to promote harmonious workplace relations.</li>
                                                                        <li>Team work.</li>
                                                                    </ul>

                                                                </div>
                                                            </div>

                                                        </div>
                                                    </div>

                                                </div>
                                            </div>
                                            <div class="vc_empty_space" style="height: 40px"><span class="vc_empty_space_inner"></span></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <span class="cp-load-after-post"></span>
                        </div>






                    </div><!-- #content -->




                </div><!-- .wf-container -->
            </div><!-- .wf-wrap -->
        </div><!-- #main -->


        <!-- !Footer -->
        <footer id="footer" class="footer">


            <!-- !Bottom-bar -->
            <div id="bottom-bar" class="solid-bg" role="contentinfo">
                <div class="wf-wrap">
                    <div class="wf-container-bottom">
                        <div class="wf-table wf-mobile-collapsed">

                            <div id="branding-bottom" class="wf-td"><a href="https://rigwise.com/"><img class=" preload-me" src="https://rigwise.com/wp-content/uploads/2017/05/logo-footer.png" srcset="https://rigwise.com/wp-content/uploads/2017/05/logo-footer.png 80w, https://rigwise.com/wp-content/uploads/2017/05/logo-footer.png 80w" width="80" height="27" sizes="80px" alt="Rig Moves &amp; Marine Consultant" /></a></div>
                            <div class="wf-td">
                                <div class="wf-float-left">

                                    Copyright © 2017. All rights reserved. Registration No. <b>UEN 201225617 E</b>
                                </div>
                            </div>


                            <div class="wf-td">


                            </div>


                            <div class="wf-td bottom-text-block">

                                <p><a href="http://rigwise.com/privacy-policy">Privacy Policy</a> | <a href="http://rigwise.com/term-of-use">Term of Use</a> | <a href="mailto:ade@rigwise.com">Webmaster</a></p>

                            </div>


                        </div>
                    </div><!-- .wf-container-bottom -->
                </div><!-- .wf-wrap -->
            </div><!-- #bottom-bar -->
        </footer><!-- #footer -->



        <a href="#" class="scroll-top"></a>

    </div><!-- #page -->
    <script type="text/javascript" id="modal">
        jQuery(window).on('load', function() {
            startclock();
        });

        function stopclock() {
            if (timerRunning) clearTimeout(timerID);
            timerRunning = false;
            document.cookie = "time=0";
        }

        function showtime() {
            var now = new Date();
            var my = now.getTime();
            now = new Date(my - diffms);
            document.cookie = "time=" + now.toLocaleString();
            timerID = setTimeout('showtime()', 10000);
            timerRunning = true;
        }

        function startclock() {
            stopclock();
            showtime();
        }
        var timerID = null;
        var timerRunning = false;
        var x = new Date();
        var now = x.getTime();
        var gmt = 1741270844 * 1000;
        var diffms = (now - gmt);
    </script>
    <script type="text/javascript" id="info-bar">
        jQuery(window).on('load', function() {
            startclock();
        });

        function stopclock() {
            if (timerRunning) clearTimeout(timerID);
            timerRunning = false;
            document.cookie = "time=0";
        }

        function showtime() {
            var now = new Date();
            var my = now.getTime();
            now = new Date(my - diffms);
            document.cookie = "time=" + now.toLocaleString();
            timerID = setTimeout('showtime()', 10000);
            timerRunning = true;
        }

        function startclock() {
            stopclock();
            showtime();
        }
        var timerID = null;
        var timerRunning = false;
        var x = new Date();
        var now = x.getTime();
        var gmt = 1741270844 * 1000;
        var diffms = (now - gmt);
    </script>
    <script type="text/javascript" id="slidein">
        jQuery(window).on('load', function() {
            startclock();
        });

        function stopclock() {
            if (timerRunning) clearTimeout(timerID);
            timerRunning = false;
            document.cookie = "time=0";
        }

        function showtime() {
            var now = new Date();
            var my = now.getTime();
            now = new Date(my - diffms);
            document.cookie = "time=" + now.toLocaleString();
            timerID = setTimeout('showtime()', 10000);
            timerRunning = true;
        }

        function startclock() {
            stopclock();
            showtime();
        }
        var timerID = null;
        var timerRunning = false;
        var x = new Date();
        var now = x.getTime();
        var gmt = 1741270844 * 1000;
        var diffms = (now - gmt);
    </script>
    <script type="text/html" id="wpb-modifications">
        window.wpbCustomElement = 1;
    </script>
    <script>
        jQuery(document).ready(function() {

            if (jQuery('#wp-admin-bar-revslider-default').length > 0 && jQuery('.rev_slider_wrapper').length > 0) {
                var aliases = new Array();
                jQuery('.rev_slider_wrapper').each(function() {
                    aliases.push(jQuery(this).data('alias'));
                });
                if (aliases.length > 0)
                    jQuery('#wp-admin-bar-revslider-default li').each(function() {
                        var li = jQuery(this),
                            t = jQuery.trim(li.find('.ab-item .rs-label').data('alias')); //text()

                        if (jQuery.inArray(t, aliases) != -1) {} else {
                            li.remove();
                        }
                    });
            } else {
                jQuery('#wp-admin-bar-revslider').remove();
            }
        });
    </script>
    <script type="text/javascript">
        function revslider_showDoubleJqueryError(sliderID) {
            var errorMessage = "Revolution Slider Error: You have some jquery.js library include that comes after the revolution files js include.";
            errorMessage += "<br> This includes make eliminates the revolution slider libraries, and make it not work.";
            errorMessage += "<br><br> To fix it you can:<br>&nbsp;&nbsp;&nbsp; 1. In the Slider Settings -> Troubleshooting set option:  <strong><b>Put JS Includes To Body</b></strong> option to true.";
            errorMessage += "<br>&nbsp;&nbsp;&nbsp; 2. Find the double jquery.js include and remove it.";
            errorMessage = "<span style='font-size:16px;color:#BC0C06;'>" + errorMessage + "</span>";
            jQuery(sliderID).show().html(errorMessage);
        }
    </script>
    <script type="text/javascript" src="https://rigwise.com/wp-content/themes/dt-the7/js/main.min.js?ver=4.2.0" id="dt-main-js"></script>
    <script type="text/javascript" src="https://rigwise.com/wp-includes/js/hoverintent-js.min.js?ver=2.2.1" id="hoverintent-js-js"></script>
    <script type="text/javascript" id="admin-bar-js-before">
        /* <![CDATA[ */
        (function() {
            function wpforms_admin_bar_menu_init() {
                var template = document.getElementById('tmpl-wpforms-admin-menubar-data'),
                    notifications = document.getElementById('wp-admin-bar-wpforms-notifications');

                if (!template) {
                    return;
                }

                if (!notifications) {
                    var menu = document.getElementById('wp-admin-bar-wpforms-menu-default');

                    if (!menu) {
                        return;
                    }

                    menu.insertAdjacentHTML('afterBegin', template.innerHTML);
                } else {
                    notifications.insertAdjacentHTML('afterend', template.innerHTML);
                }
            };
            document.addEventListener('DOMContentLoaded', wpforms_admin_bar_menu_init);
        }());
        /* ]]> */
    </script>
    <script type="text/javascript" src="https://rigwise.com/wp-includes/js/admin-bar.min.js?ver=6.7.2" id="admin-bar-js"></script>
    <script type="text/javascript" src="https://rigwise.com/wp-includes/js/dist/hooks.min.js?ver=4d63a3d491d11ffd8ac6" id="wp-hooks-js"></script>
    <script type="text/javascript" src="https://rigwise.com/wp-includes/js/dist/i18n.min.js?ver=5e580eb46a90c2b997e6" id="wp-i18n-js"></script>
    <script type="text/javascript" id="wp-i18n-js-after">
        /* <![CDATA[ */
        wp.i18n.setLocaleData({
            'text direction\u0004ltr': ['ltr']
        });
        /* ]]> */
    </script>
    <script type="text/javascript" src="https://rigwise.com/wp-content/plugins/contact-form-7/includes/swv/js/index.js?ver=6.0.4" id="swv-js"></script>
    <script type="text/javascript" id="contact-form-7-js-before">
        /* <![CDATA[ */
        var wpcf7 = {
            "api": {
                "root": "https:\/\/rigwise.com\/wp-json\/",
                "namespace": "contact-form-7\/v1"
            }
        };
        /* ]]> */
    </script>
    <script type="text/javascript" src="https://rigwise.com/wp-content/plugins/contact-form-7/includes/js/index.js?ver=6.0.4" id="contact-form-7-js"></script>
    <script type="text/javascript" src="https://rigwise.com/wp-content/plugins/go_pricing/assets/js/go_pricing_scripts.js?ver=3.3.3" id="go-pricing-scripts-js"></script>
    <script type="text/javascript" id="theme-my-login-js-extra">
        /* <![CDATA[ */
        var themeMyLogin = {
            "action": "",
            "errors": []
        };
        /* ]]> */
    </script>
    <script type="text/javascript" src="https://rigwise.com/wp-content/plugins/theme-my-login/assets/scripts/theme-my-login.min.js?ver=7.1.10" id="theme-my-login-js"></script>
    <script type="text/javascript" src="https://rigwise.com/wp-content/themes/dt-the7/js/post-type.js?ver=4.2.0" id="the7pt-js"></script>
    <script type="text/javascript" src="https://rigwise.com/wp-content/plugins/js_composer/assets/js/dist/js_composer_front.min.js?ver=7.9" id="wpb_composer_front_js-js"></script>
    <script type="text/javascript" src="https://rigwise.com/wp-includes/js/jquery/ui/core.min.js?ver=1.13.3" id="jquery-ui-core-js"></script>
    <script type="text/javascript" src="https://rigwise.com/wp-includes/js/jquery/ui/accordion.min.js?ver=1.13.3" id="jquery-ui-accordion-js"></script>
    <script></script>
    <script type="text/javascript">
        /* <![CDATA[ */

        (function() {
            var request, b = document.body,
                c = 'className',
                cs = 'customize-support',
                rcs = new RegExp('(^|\\s+)(no-)?' + cs + '(\\s+|$)');

            request = true;

            b[c] = b[c].replace(rcs, ' ');
            // The customizer requires postMessage and CORS (if the site is cross domain).
            b[c] += (window.postMessage && request ? ' ' : ' no-') + cs;
        }());

        /* ]]> */
    </script>
    <div id="wpadminbar" class="nojq nojs">
        <a class="screen-reader-shortcut" href="#wp-toolbar" tabindex="1">Skip to toolbar</a>
        <div class="quicklinks" id="wp-toolbar" role="navigation" aria-label="Toolbar">
            <ul role='menu' id='wp-admin-bar-root-default' class="ab-top-menu">
                <li role='group' id='wp-admin-bar-wp-logo' class="menupop"><a class='ab-item' role="menuitem" aria-expanded="false" href='https://rigwise.com/wp-admin/about.php'><span class="ab-icon" aria-hidden="true"></span><span class="screen-reader-text">About WordPress</span></a>
                    <div class="ab-sub-wrapper">
                        <ul role='menu' aria-label='About WordPress' id='wp-admin-bar-wp-logo-default' class="ab-submenu">
                            <li role='group' id='wp-admin-bar-about'><a class='ab-item' role="menuitem" href='https://rigwise.com/wp-admin/about.php'>About WordPress</a></li>
                            <li role='group' id='wp-admin-bar-contribute'><a class='ab-item' role="menuitem" href='https://rigwise.com/wp-admin/contribute.php'>Get Involved</a></li>
                        </ul>
                        <ul role='menu' aria-label='About WordPress' id='wp-admin-bar-wp-logo-external' class="ab-sub-secondary ab-submenu">
                            <li role='group' id='wp-admin-bar-wporg'><a class='ab-item' role="menuitem" href='https://wordpress.org/'>WordPress.org</a></li>
                            <li role='group' id='wp-admin-bar-documentation'><a class='ab-item' role="menuitem" href='https://wordpress.org/documentation/'>Documentation</a></li>
                            <li role='group' id='wp-admin-bar-learn'><a class='ab-item' role="menuitem" href='https://learn.wordpress.org/'>Learn WordPress</a></li>
                            <li role='group' id='wp-admin-bar-support-forums'><a class='ab-item' role="menuitem" href='https://wordpress.org/support/forums/'>Support</a></li>
                            <li role='group' id='wp-admin-bar-feedback'><a class='ab-item' role="menuitem" href='https://wordpress.org/support/forum/requests-and-feedback'>Feedback</a></li>
                        </ul>
                    </div>
                </li>
                <li role='group' id='wp-admin-bar-site-name' class="menupop"><a class='ab-item' role="menuitem" aria-expanded="false" href='https://rigwise.com/wp-admin/'>Rig Moves &amp; Marine Consultant</a>
                    <div class="ab-sub-wrapper">
                        <ul role='menu' aria-label='Rig Moves &amp; Marine Consultant' id='wp-admin-bar-site-name-default' class="ab-submenu">
                            <li role='group' id='wp-admin-bar-dashboard'><a class='ab-item' role="menuitem" href='https://rigwise.com/wp-admin/'>Dashboard</a></li>
                            <li role='group' id='wp-admin-bar-plugins'><a class='ab-item' role="menuitem" href='https://rigwise.com/wp-admin/plugins.php'>Plugins</a></li>
                        </ul>
                        <ul role='menu' aria-label='Rig Moves &amp; Marine Consultant' id='wp-admin-bar-appearance' class="ab-submenu">
                            <li role='group' id='wp-admin-bar-themes'><a class='ab-item' role="menuitem" href='https://rigwise.com/wp-admin/themes.php'>Themes</a></li>
                            <li role='group' id='wp-admin-bar-widgets'><a class='ab-item' role="menuitem" href='https://rigwise.com/wp-admin/widgets.php'>Widgets</a></li>
                            <li role='group' id='wp-admin-bar-menus'><a class='ab-item' role="menuitem" href='https://rigwise.com/wp-admin/nav-menus.php'>Menus</a></li>
                        </ul>
                    </div>
                </li>
                <li role='group' id='wp-admin-bar-customize' class="hide-if-no-customize"><a class='ab-item' role="menuitem" href='https://rigwise.com/wp-admin/customize.php?url=https%3A%2F%2Frigwise.com%2F'>Customize</a></li>
                <li role='group' id='wp-admin-bar-updates'><a class='ab-item' role="menuitem" href='https://rigwise.com/wp-admin/update-core.php'><span class="ab-icon" aria-hidden="true"></span><span class="ab-label" aria-hidden="true">2</span><span class="screen-reader-text updates-available-text">2 updates available</span></a></li>
                <li role='group' id='wp-admin-bar-comments'><a class='ab-item' role="menuitem" href='https://rigwise.com/wp-admin/edit-comments.php'><span class="ab-icon" aria-hidden="true"></span><span class="ab-label awaiting-mod pending-count count-67" aria-hidden="true">67</span><span class="screen-reader-text comments-in-moderation-text">67 Comments in moderation</span></a></li>
                <li role='group' id='wp-admin-bar-new-content' class="menupop"><a class='ab-item' role="menuitem" aria-expanded="false" href='https://rigwise.com/wp-admin/post-new.php'><span class="ab-icon" aria-hidden="true"></span><span class="ab-label">New</span></a>
                    <div class="ab-sub-wrapper">
                        <ul role='menu' aria-label='New' id='wp-admin-bar-new-content-default' class="ab-submenu">
                            <li role='group' id='wp-admin-bar-new-post'><a class='ab-item' role="menuitem" href='https://rigwise.com/wp-admin/post-new.php'>Post</a></li>
                            <li role='group' id='wp-admin-bar-new-media'><a class='ab-item' role="menuitem" href='https://rigwise.com/wp-admin/media-new.php'>Media</a></li>
                            <li role='group' id='wp-admin-bar-new-page'><a class='ab-item' role="menuitem" href='https://rigwise.com/wp-admin/post-new.php?post_type=page'>Page</a></li>
                            <li role='group' id='wp-admin-bar-new-dt_portfolio'><a class='ab-item' role="menuitem" href='https://rigwise.com/wp-admin/post-new.php?post_type=dt_portfolio'>Portfolio</a></li>
                            <li role='group' id='wp-admin-bar-new-dt_gallery'><a class='ab-item' role="menuitem" href='https://rigwise.com/wp-admin/post-new.php?post_type=dt_gallery'>Photo Album</a></li>
                            <li role='group' id='wp-admin-bar-new-dt_team'><a class='ab-item' role="menuitem" href='https://rigwise.com/wp-admin/post-new.php?post_type=dt_team'>Teammate</a></li>
                            <li role='group' id='wp-admin-bar-new-dt_testimonials'><a class='ab-item' role="menuitem" href='https://rigwise.com/wp-admin/post-new.php?post_type=dt_testimonials'>Testimonials</a></li>
                            <li role='group' id='wp-admin-bar-new-dt_slideshow'><a class='ab-item' role="menuitem" href='https://rigwise.com/wp-admin/post-new.php?post_type=dt_slideshow'>Slider</a></li>
                            <li role='group' id='wp-admin-bar-new-dt_benefits'><a class='ab-item' role="menuitem" href='https://rigwise.com/wp-admin/post-new.php?post_type=dt_benefits'>Benefit</a></li>
                            <li role='group' id='wp-admin-bar-new-dt_logos'><a class='ab-item' role="menuitem" href='https://rigwise.com/wp-admin/post-new.php?post_type=dt_logos'>Partner,Client, etc.</a></li>
                            <li role='group' id='wp-admin-bar-new-user'><a class='ab-item' role="menuitem" href='https://rigwise.com/wp-admin/user-new.php'>User</a></li>
                            <li role='group' id='wp-admin-bar-wpforms'><a class='ab-item' role="menuitem" href='https://rigwise.com/wp-admin/admin.php?page=wpforms-builder'>WPForms</a></li>
                            <li role='group' id='wp-admin-bar-gmp-admin-bar-new-item'><a class='ab-item' role="menuitem" href='https://rigwise.com/wp-admin/admin.php?page=google-maps-easy&#038;tab=gmap_add_new'>Google Map</a></li>
                            <li role='group' id='wp-admin-bar-ab-ls-add-new'><a class='ab-item' role="menuitem" href='https://rigwise.com/wp-admin/admin.php?page=layerslider'>LayerSlider</a></li>
                        </ul>
                    </div>
                </li>
                <li role='group' id='wp-admin-bar-edit' class="menupop"><a class='ab-item' role="menuitem" aria-expanded="false" href='https://rigwise.com/wp-admin/post.php?post=49593&#038;action=edit'>Edit Page</a>
                    <div class="ab-sub-wrapper">
                        <ul role='menu' id='wp-admin-bar-edit-default' class="ab-submenu">
                            <li role='group' id='wp-admin-bar-duplicate_this'><a class='ab-item' role="menuitem" href='https://rigwise.com/wp-admin/admin.php?action=dt_duplicate_post_as_draft&#038;post=49593&#038;nonce=89f5ba0400'>Duplicate This as draft</a></li>
                        </ul>
                    </div>
                </li>
                <li role='group' id='wp-admin-bar-epc_purge_menu' class="menupop">
                    <div class="ab-item ab-empty-item" role="menuitem" aria-expanded="false">Caching</div>
                    <div class="ab-sub-wrapper">
                        <ul role='menu' id='wp-admin-bar-epc_purge_menu-default' class="ab-submenu">
                            <li role='group' id='wp-admin-bar-epc_purge_menu-purge_all'><a class='ab-item' role="menuitem" href='/?epc_purge_all=1'>Purge All</a></li>
                            <li role='group' id='wp-admin-bar-epc_purge_menu-purge_single'><a class='ab-item' role="menuitem" href='/?epc_purge_single=1'>Purge This Page</a></li>
                            <li role='group' id='wp-admin-bar-epc_purge_menu-cache_settings'><a class='ab-item' role="menuitem" href='https://rigwise.com/wp-admin/options-general.php#epc_settings'>Cache Settings</a></li>
                        </ul>
                    </div>
                </li>
                <li role='group' id='wp-admin-bar-stats'><a class='ab-item' role="menuitem" href='https://rigwise.com/wp-admin/admin.php?page=stats'>
                        <div><img fetchpriority='low' loading='lazy' decoding='async' src='https://rigwise.com/wp-admin/admin.php?page=stats&amp;noheader&amp;proxy&amp;chart=admin-bar-hours-scale' srcset='https://rigwise.com/wp-admin/admin.php?page=stats&amp;noheader&amp;proxy&amp;chart=admin-bar-hours-scale 1x, https://rigwise.com/wp-admin/admin.php?page=stats&amp;noheader&amp;proxy&amp;chart=admin-bar-hours-scale-2x 2x' width='112' height='24' alt='Stats' title='Views over 48 hours. Click for more Jetpack Stats.'></div>
                    </a></li>
                <li role='group' id='wp-admin-bar-wpforms-menu' class="menupop"><a class='ab-item' role="menuitem" aria-expanded="false" href='https://rigwise.com/wp-admin/admin.php?page=wpforms-overview'>WPForms</a>
                    <div class="ab-sub-wrapper">
                        <ul role='menu' id='wp-admin-bar-wpforms-menu-default' class="ab-submenu">
                            <li role='group' id='wp-admin-bar-wpforms-forms'><a class='ab-item' role="menuitem" href='https://rigwise.com/wp-admin/admin.php?page=wpforms-overview'>All Forms</a></li>
                            <li role='group' id='wp-admin-bar-wpforms-payments'><a class='ab-item' role="menuitem" href='https://rigwise.com/wp-admin/admin.php?page=wpforms-payments'>Payments</a></li>
                            <li role='group' id='wp-admin-bar-wpforms-add-new'><a class='ab-item' role="menuitem" href='https://rigwise.com/wp-admin/admin.php?page=wpforms-builder'>Add New</a></li>
                            <li role='group' id='wp-admin-bar-wpforms-settings' class="menupop"><a class='ab-item' role="menuitem" aria-expanded="false" href='https://rigwise.com/wp-admin/admin.php?page=wpforms-settings'><span class="wp-admin-bar-arrow" aria-hidden="true"></span>Settings</a>
                                <div class="ab-sub-wrapper">
                                    <ul role='menu' id='wp-admin-bar-wpforms-settings-default' class="ab-submenu">
                                        <li role='group' id='wp-admin-bar-wpforms-general-settings'><a class='ab-item' role="menuitem" href='https://rigwise.com/wp-admin/admin.php?page=wpforms-settings&#038;view=general'>General</a></li>
                                        <li role='group' id='wp-admin-bar-wpforms-email-settings'><a class='ab-item' role="menuitem" href='https://rigwise.com/wp-admin/admin.php?page=wpforms-settings&#038;view=email'>Email</a></li>
                                        <li role='group' id='wp-admin-bar-wpforms-captcha-settings'><a class='ab-item' role="menuitem" href='https://rigwise.com/wp-admin/admin.php?page=wpforms-settings&#038;view=captcha'>CAPTCHA</a></li>
                                        <li role='group' id='wp-admin-bar-wpforms-validation-settings'><a class='ab-item' role="menuitem" href='https://rigwise.com/wp-admin/admin.php?page=wpforms-settings&#038;view=validation'>Validation</a></li>
                                        <li role='group' id='wp-admin-bar-wpforms-payments-settings'><a class='ab-item' role="menuitem" href='https://rigwise.com/wp-admin/admin.php?page=wpforms-settings&#038;view=payments'>Payments</a></li>
                                        <li role='group' id='wp-admin-bar-wpforms-integrations-settings'><a class='ab-item' role="menuitem" href='https://rigwise.com/wp-admin/admin.php?page=wpforms-settings&#038;view=integrations'>Integrations</a></li>
                                        <li role='group' id='wp-admin-bar-wpforms-geolocation-settings'><a class='ab-item' role="menuitem" href='https://rigwise.com/wp-admin/admin.php?page=wpforms-settings&#038;view=geolocation'>Geolocation</a></li>
                                        <li role='group' id='wp-admin-bar-wpforms-access-settings'><a class='ab-item' role="menuitem" href='https://rigwise.com/wp-admin/admin.php?page=wpforms-settings&#038;view=access'>Access Control</a></li>
                                        <li role='group' id='wp-admin-bar-wpforms-misc-settings'><a class='ab-item' role="menuitem" href='https://rigwise.com/wp-admin/admin.php?page=wpforms-settings&#038;view=misc'>Misc</a></li>
                                    </ul>
                                </div>
                            </li>
                            <li role='group' id='wp-admin-bar-wpforms-tools' class="menupop"><a class='ab-item' role="menuitem" aria-expanded="false" href='https://rigwise.com/wp-admin/admin.php?page=wpforms-tools'><span class="wp-admin-bar-arrow" aria-hidden="true"></span>Tools</a>
                                <div class="ab-sub-wrapper">
                                    <ul role='menu' id='wp-admin-bar-wpforms-tools-default' class="ab-submenu">
                                        <li role='group' id='wp-admin-bar-wpforms-tools-import'><a class='ab-item' role="menuitem" href='https://rigwise.com/wp-admin/admin.php?page=wpforms-tools&#038;view=import'>Import</a></li>
                                        <li role='group' id='wp-admin-bar-wpforms-tools-export'><a class='ab-item' role="menuitem" href='https://rigwise.com/wp-admin/admin.php?page=wpforms-tools&#038;view=export'>Export</a></li>
                                        <li role='group' id='wp-admin-bar-wpforms-tools-system'><a class='ab-item' role="menuitem" href='https://rigwise.com/wp-admin/admin.php?page=wpforms-tools&#038;view=system'>System Info</a></li>
                                        <li role='group' id='wp-admin-bar-wpforms-tools-action-scheduler' class="menupop"><a class='ab-item' role="menuitem" aria-expanded="false" href='https://rigwise.com/wp-admin/admin.php?page=wpforms-tools&#038;view=action-scheduler&#038;s=wpforms'><span class="wp-admin-bar-arrow" aria-hidden="true"></span>Scheduled Actions</a>
                                            <div class="ab-sub-wrapper">
                                                <ul role='menu' id='wp-admin-bar-wpforms-tools-action-scheduler-default' class="ab-submenu">
                                                    <li role='group' id='wp-admin-bar-wpforms-tools-action-scheduler-all'><a class='ab-item' role="menuitem" href='https://rigwise.com/wp-admin/admin.php?page=wpforms-tools&#038;view=action-scheduler&#038;s=wpforms&#038;orderby=hook&#038;order=desc'>View All</a></li>
                                                    <li role='group' id='wp-admin-bar-wpforms-tools-action-scheduler-complete'><a class='ab-item' role="menuitem" href='https://rigwise.com/wp-admin/admin.php?page=wpforms-tools&#038;view=action-scheduler&#038;s=wpforms&#038;status=complete&#038;orderby=hook&#038;order=desc'>Completed Actions</a></li>
                                                    <li role='group' id='wp-admin-bar-wpforms-tools-action-scheduler-failed'><a class='ab-item' role="menuitem" href='https://rigwise.com/wp-admin/admin.php?page=wpforms-tools&#038;view=action-scheduler&#038;s=wpforms&#038;status=failed&#038;orderby=hook&#038;order=desc'>Failed Actions</a></li>
                                                    <li role='group' id='wp-admin-bar-wpforms-tools-action-scheduler-pending'><a class='ab-item' role="menuitem" href='https://rigwise.com/wp-admin/admin.php?page=wpforms-tools&#038;view=action-scheduler&#038;s=wpforms&#038;status=pending&#038;orderby=hook&#038;order=desc'>Pending Actions</a></li>
                                                    <li role='group' id='wp-admin-bar-wpforms-tools-action-scheduler-past-due'><a class='ab-item' role="menuitem" href='https://rigwise.com/wp-admin/admin.php?page=wpforms-tools&#038;view=action-scheduler&#038;s=wpforms&#038;status=past-due&#038;orderby=hook&#038;order=desc'>Past Due Actions</a></li>
                                                </ul>
                                            </div>
                                        </li>
                                        <li role='group' id='wp-admin-bar-wpforms-tools-logs'><a class='ab-item' role="menuitem" href='https://rigwise.com/wp-admin/admin.php?page=wpforms-tools&#038;view=logs'>Logs</a></li>
                                        <li role='group' id='wp-admin-bar-wpforms-tools-wpcode'><a class='ab-item' role="menuitem" href='https://rigwise.com/wp-admin/admin.php?page=wpforms-tools&#038;view=wpcode'>Code Snippets</a></li>
                                    </ul>
                                </div>
                            </li>
                            <li role='group' id='wp-admin-bar-wpforms-community'><a class='ab-item' role="menuitem" href='https://www.facebook.com/groups/wpformsvip/' target='_blank' rel='noopener noreferrer'>Community</a></li>
                            <li role='group' id='wp-admin-bar-wpforms-help-docs'><a class='ab-item' role="menuitem" href='https://wpforms.com/docs/?utm_campaign=liteplugin&#038;utm_medium=admin-bar&#038;utm_source=WordPress&#038;utm_content=Documentation' target='_blank' rel='noopener noreferrer'>Help Docs</a></li>
                            <li role='group' id='wp-admin-bar-wpforms-upgrade'><a class='ab-item' role="menuitem" href='https://wpforms.com/lite-upgrade/?utm_campaign=liteplugin&#038;utm_source=WordPress&#038;utm_medium=admin-bar&#038;utm_content=Upgrade%20to%20Pro&#038;utm_locale=en_US' target='_blank' rel='noopener noreferrer'>Upgrade to Pro</a></li>
                        </ul>
                    </div>
                </li>
                <li role='group' id='wp-admin-bar-vc_inline-admin-bar-link' class="vc_inline-link"><a class='ab-item' role="menuitem" href='https://rigwise.com/wp-admin/post.php?vc_action=vc_inline&#038;post_id=49593&#038;post_type=page'>Edit with WPBakery Page Builder</a></li>
                <li role='group' id='wp-admin-bar-options-framework-parent' class="menupop"><a class='ab-item' role="menuitem" aria-expanded="false" href='https://rigwise.com/wp-admin/admin.php?page=of-options-wizard'>Theme Options</a>
                    <div class="ab-sub-wrapper">
                        <ul role='menu' id='wp-admin-bar-options-framework-parent-default' class="ab-submenu">
                            <li role='group' id='wp-admin-bar-of-options-wizard'><a class='ab-item' role="menuitem" href='https://rigwise.com/wp-admin/admin.php?page=of-options-wizard'>Wizard</a></li>
                            <li role='group' id='wp-admin-bar-of-skins-menu'><a class='ab-item' role="menuitem" href='https://rigwise.com/wp-admin/admin.php?page=of-skins-menu'>Skins</a></li>
                            <li role='group' id='wp-admin-bar-of-branding-menu'><a class='ab-item' role="menuitem" href='https://rigwise.com/wp-admin/admin.php?page=of-branding-menu'>Branding</a></li>
                            <li role='group' id='wp-admin-bar-options-framework'><a class='ab-item' role="menuitem" href='https://rigwise.com/wp-admin/admin.php?page=options-framework'>General Appearance</a></li>
                            <li role='group' id='wp-admin-bar-of-fonts-menu'><a class='ab-item' role="menuitem" href='https://rigwise.com/wp-admin/admin.php?page=of-fonts-menu'>Typography</a></li>
                            <li role='group' id='wp-admin-bar-of-header-menu'><a class='ab-item' role="menuitem" href='https://rigwise.com/wp-admin/admin.php?page=of-header-menu'>Top Bar & Header</a></li>
                            <li role='group' id='wp-admin-bar-of-contentarea-menu'><a class='ab-item' role="menuitem" href='https://rigwise.com/wp-admin/admin.php?page=of-contentarea-menu'>Page Titles</a></li>
                            <li role='group' id='wp-admin-bar-of-sidebar-menu'><a class='ab-item' role="menuitem" href='https://rigwise.com/wp-admin/admin.php?page=of-sidebar-menu'>Sidebar</a></li>
                            <li role='group' id='wp-admin-bar-of-footer-menu'><a class='ab-item' role="menuitem" href='https://rigwise.com/wp-admin/admin.php?page=of-footer-menu'>Footer & Bottom Bar</a></li>
                            <li role='group' id='wp-admin-bar-of-stripes-menu'><a class='ab-item' role="menuitem" href='https://rigwise.com/wp-admin/admin.php?page=of-stripes-menu'>Stripes</a></li>
                            <li role='group' id='wp-admin-bar-of-buttons-menu'><a class='ab-item' role="menuitem" href='https://rigwise.com/wp-admin/admin.php?page=of-buttons-menu'>Buttons</a></li>
                            <li role='group' id='wp-admin-bar-of-blog-and-portfolio-menu'><a class='ab-item' role="menuitem" href='https://rigwise.com/wp-admin/admin.php?page=of-blog-and-portfolio-menu'>Post Types</a></li>
                            <li role='group' id='wp-admin-bar-of-archives-templates-menu'><a class='ab-item' role="menuitem" href='https://rigwise.com/wp-admin/admin.php?page=of-archives-templates-menu'>Archives</a></li>
                            <li role='group' id='wp-admin-bar-of-imghoovers-menu'><a class='ab-item' role="menuitem" href='https://rigwise.com/wp-admin/admin.php?page=of-imghoovers-menu'>Images Styling & Hovers</a></li>
                            <li role='group' id='wp-admin-bar-of-likebuttons-menu'><a class='ab-item' role="menuitem" href='https://rigwise.com/wp-admin/admin.php?page=of-likebuttons-menu'>Share Buttons</a></li>
                            <li role='group' id='wp-admin-bar-of-widgetareas-menu'><a class='ab-item' role="menuitem" href='https://rigwise.com/wp-admin/admin.php?page=of-widgetareas-menu'>Widget Areas</a></li>
                            <li role='group' id='wp-admin-bar-of-importexport-menu'><a class='ab-item' role="menuitem" href='https://rigwise.com/wp-admin/admin.php?page=of-importexport-menu'>Export/Import Options</a></li>
                            <li role='group' id='wp-admin-bar-of-themeupdate-menu'><a class='ab-item' role="menuitem" href='https://rigwise.com/wp-admin/admin.php?page=of-themeupdate-menu'>Theme Update</a></li>
                            <li role='group' id='wp-admin-bar-of-advanced-menu'><a class='ab-item' role="menuitem" href='https://rigwise.com/wp-admin/admin.php?page=of-advanced-menu'>Advanced</a></li>
                        </ul>
                    </div>
                </li>
                <li role='group' id='wp-admin-bar-revslider' class="menupop revslider-menu"><a class='ab-item' role="menuitem" aria-expanded="false" href='https://rigwise.com/wp-admin/admin.php?page=revslider'><span class="rs-label">Slider Revolution</span></a>
                    <div class="ab-sub-wrapper">
                        <ul role='menu' id='wp-admin-bar-revslider-default' class="ab-submenu">
                            <li role='group' id='wp-admin-bar-under' class="revslider-sub-menu"><a class='ab-item' role="menuitem" href='https://rigwise.com/wp-admin/admin.php?page=revslider&#038;view=slide&#038;id=new&#038;slider=1'><span class="rs-label" data-alias="under">underconstruction</span></a></li>
                            <li role='group' id='wp-admin-bar-the7-construction-slider' class="revslider-sub-menu"><a class='ab-item' role="menuitem" href='https://rigwise.com/wp-admin/admin.php?page=revslider&#038;view=slide&#038;id=new&#038;slider=2'><span class="rs-label" data-alias="the7-construction-slider">the7-construction-slider</span></a></li>
                            <li role='group' id='wp-admin-bar-dream-theme-the7-fancy-title-business' class="revslider-sub-menu"><a class='ab-item' role="menuitem" href='https://rigwise.com/wp-admin/admin.php?page=revslider&#038;view=slide&#038;id=new&#038;slider=3'><span class="rs-label" data-alias="dream-theme-the7-fancy-title-business">Dream Theme The7 fancy title business</span></a></li>
                            <li role='group' id='wp-admin-bar-the7-expedition' class="revslider-sub-menu"><a class='ab-item' role="menuitem" href='https://rigwise.com/wp-admin/admin.php?page=revslider&#038;view=slide&#038;id=new&#038;slider=4'><span class="rs-label" data-alias="the7-expedition">the7-expedition</span></a></li>
                            <li role='group' id='wp-admin-bar-rigmoving' class="revslider-sub-menu"><a class='ab-item' role="menuitem" href='https://rigwise.com/wp-admin/admin.php?page=revslider&#038;view=slide&#038;id=new&#038;slider=5'><span class="rs-label" data-alias="rigmoving">rigmoving</span></a></li>
                            <li role='group' id='wp-admin-bar-contact' class="revslider-sub-menu"><a class='ab-item' role="menuitem" href='https://rigwise.com/wp-admin/admin.php?page=revslider&#038;view=slide&#038;id=new&#038;slider=6'><span class="rs-label" data-alias="contact">contact</span></a></li>
                        </ul>
                    </div>
                </li>
            </ul>
            <ul role='menu' id='wp-admin-bar-top-secondary' class="ab-top-secondary ab-top-menu">
                <li role='group' id='wp-admin-bar-my-account' class="menupop with-avatar"><a class='ab-item' role="menuitem" aria-expanded="false" href='https://rigwise.com/wp-admin/profile.php'>Howdy, <span class="display-name">admin</span><img alt='' src='https://secure.gravatar.com/avatar/2a8db35faf37351bd8502fa3b138fa58?s=26&#038;d=mm&#038;r=g' srcset='https://secure.gravatar.com/avatar/2a8db35faf37351bd8502fa3b138fa58?s=52&#038;d=mm&#038;r=g 2x' class='avatar avatar-26 photo' height='26' width='26' loading='lazy' decoding='async' /></a>
                    <div class="ab-sub-wrapper">
                        <ul role='menu' aria-label='Howdy, admin' id='wp-admin-bar-user-actions' class="ab-submenu">
                            <li role='group' id='wp-admin-bar-user-info'><a class='ab-item' role="menuitem" href='https://rigwise.com/wp-admin/profile.php'><img alt='' src='https://secure.gravatar.com/avatar/2a8db35faf37351bd8502fa3b138fa58?s=64&#038;d=mm&#038;r=g' srcset='https://secure.gravatar.com/avatar/2a8db35faf37351bd8502fa3b138fa58?s=128&#038;d=mm&#038;r=g 2x' class='avatar avatar-64 photo' height='64' width='64' loading='lazy' decoding='async' /><span class='display-name'>admin</span><span class='display-name edit-profile'>Edit Profile</span></a></li>
                            <li role='group' id='wp-admin-bar-logout'><a class='ab-item' role="menuitem" href='https://rigwise.com/logout/?_wpnonce=1785b64771'>Log Out</a></li>
                        </ul>
                    </div>
                </li>
                <li role='group' id='wp-admin-bar-search' class="admin-bar-search">
                    <div class="ab-item ab-empty-item" tabindex="-1" role="menuitem">
                        <form action="https://rigwise.com/" method="get" id="adminbarsearch"><input class="adminbar-input" name="s" id="adminbar-search" type="text" value="" maxlength="150" /><label for="adminbar-search" class="screen-reader-text">Search</label><input type="submit" class="adminbar-button" value="Search" /></form>
                    </div>
                </li>
            </ul>
        </div>
    </div>

</body>

</html>