@extends('layouts.app')

@section('title')
Inicio
@endsection

@section('up')
<link rel="stylesheet" id="meks-flickr-widget-css" href="{{ asset('libraries/wp-content/plugins/meks-simple-flickr-widget/css/meks-flickr-widget.min.css') }}?ver=1.3" type="text/css" media="all" />
<link rel="stylesheet" id="newsletter-css" href="{{ asset('libraries/wp-content/plugins/newsletter/newsletter.min.css') }}?ver=8.6.0" type="text/css" media="all" />
<link rel="stylesheet" id="elementor-icons-css" href="{{ asset('libraries/wp-content/plugins/elementor/assets/lib/eicons/css/elementor-icons.min.css') }}?ver=5.31.0" type="text/css" media="all" />
<link rel="stylesheet" id="elementor-frontend-css" href="{{ asset('libraries/wp-content/plugins/elementor/assets/css/frontend.min.css') }}?ver=3.25.4" type="text/css" media="all" />
<link rel="stylesheet" id="swiper-css" href="{{ asset('libraries/wp-content/plugins/elementor/assets/lib/swiper/v8/css/swiper.min.css') }}?ver=8.4.5" type="text/css" media="all" />
<link rel="stylesheet" id="e-swiper-css" href="{{ asset('libraries/wp-content/plugins/elementor/assets/css/conditionals/e-swiper.min.css') }}?ver=3.25.4" type="text/css" media="all" />
<link rel="stylesheet" id="elementor-post-4540-css" href="{{ asset('libraries/wp-content/uploads/elementor/css/post-4540.css') }}?ver=1729675946" type="text/css" media="all" />
<link rel="stylesheet" id="sbistyles-css" href="{{ asset('libraries/wp-content/plugins/instagram-feed/css/sbi-styles.min.css') }}?ver=6.6.0" type="text/css" media="all" />
<link rel="stylesheet" id="widget-text-editor-css" href="{{ asset('libraries/wp-content/plugins/elementor/assets/css/widget-text-editor.min.css') }}?ver=3.25.4" type="text/css" media="all" />
<link rel="stylesheet" id="widget-google_maps-css" href="{{ asset('libraries/wp-content/plugins/elementor/assets/css/widget-google_maps.min.css') }}?ver=3.25.4" type="text/css" media="all" />
<link rel="stylesheet" id="elementor-post-3510-css" href="{{ asset('libraries/wp-content/uploads/elementor/css/post-3510.css') }}?ver=1729683939" type="text/css" media="all" />
{{--
<link
    rel="stylesheet"
    id="google-fonts-1-css"
    href="../../css-1?family=Roboto%3A100%2C100italic%2C200%2C200italic%2C300%2C300italic%2C400%2C400italic%2C500%2C500italic%2C600%2C600italic%2C700%2C700italic%2C800%2C800italic%2C900%2C900italic%7CRoboto+Slab%3A100%2C100italic%2C200%2C200italic%2C300%2C300italic%2C400%2C400italic%2C500%2C500italic%2C600%2C600italic%2C700%2C700italic%2C800%2C800italic%2C900%2C900italic&#038;display=auto&#038;ver=6.8.1"
    type="text/css"
    media="all"
/>
--}}
<link rel="stylesheet" id="elementor-icons-shared-0-css" href="{{ asset('libraries/wp-content/plugins/elementor/assets/lib/font-awesome/css/fontawesome.min.css') }}?ver=5.15.3" type="text/css" media="all" />
<link rel="stylesheet" id="elementor-icons-fa-solid-css" href="{{ asset('libraries/wp-content/plugins/elementor/assets/lib/font-awesome/css/solid.min.css') }}?ver=5.15.3" type="text/css" media="all" />
<link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin />
<script type="text/javascript" src="{{ asset('libraries/wp-includes/js/jquery/jquery.min.js') }}?ver=3.7.1" id="jquery-core-js"></script>
<script type="text/javascript" src="{{ asset('libraries/wp-includes/js/jquery/jquery-migrate.min.js') }}?ver=3.4.1" id="jquery-migrate-js"></script>
<script type="text/javascript" src="{{ asset('libraries/wp-content/plugins/case-theme-core/assets/js/lib/waypoints.min.js') }}?ver=2.0.5" id="waypoints-js"></script>
<script type="text/javascript" src="{{ asset('libraries/wp-content/plugins/woocommerce/assets/js/jquery-blockui/jquery.blockUI.min.js') }}?ver=2.7.0-wc.9.3.3" id="jquery-blockui-js" defer="defer" data-wp-strategy="defer"></script>
<script type="text/javascript" id="wc-add-to-cart-js-extra">
    /* <![CDATA[ */
    var wc_add_to_cart_params = {
        ajax_url: "\/consultio-digital-marketing\/wp-admin\/admin-ajax.php",
        wc_ajax_url: "\/consultio-digital-marketing\/?wc-ajax=%%endpoint%%",
        i18n_view_cart: "View cart",
        cart_url: "https:\/\/demo.casethemes.net\/consultio-digital-marketing\/cart\/",
        is_cart: "",
        cart_redirect_after_add: "no",
    };
    /* ]]> */
</script>
<script type="text/javascript" src="{{ asset('libraries/wp-content/plugins/woocommerce/assets/js/frontend/add-to-cart.min.js') }}?ver=9.3.3" id="wc-add-to-cart-js" defer="defer" data-wp-strategy="defer"></script>
<script type="text/javascript" src="{{ asset('libraries/wp-content/plugins/woocommerce/assets/js/js-cookie/js.cookie.min.js') }}?ver=2.1.4-wc.9.3.3" id="js-cookie-js" defer="defer" data-wp-strategy="defer"></script>
<script type="text/javascript" id="woocommerce-js-extra">
    /* <![CDATA[ */
    var woocommerce_params = { ajax_url: "\/consultio-digital-marketing\/wp-admin\/admin-ajax.php", wc_ajax_url: "\/consultio-digital-marketing\/?wc-ajax=%%endpoint%%" };
    /* ]]> */
</script>
<script type="text/javascript" src="{{ asset('libraries/wp-content/plugins/woocommerce/assets/js/frontend/woocommerce.min.js') }}?ver=9.3.3" id="woocommerce-js" defer="defer" data-wp-strategy="defer"></script>
<script type="text/javascript" src="{{ asset('libraries/wp-content/uploads/siteground-optimizer-assets/ct-inline-css-js.min.js') }}?ver=3.2.1" id="ct-inline-css-js-js"></script>
<script type="text/javascript" src="{{ asset('libraries/wp-content/uploads/siteground-optimizer-assets/ct-elementor-js.min.js') }}?ver=3.2.1" id="ct-elementor-js-js"></script>
<link rel="https://api.w.org/" href="{{ asset('libraries/wp-json/index.htm') }}" />
<link rel="alternate" title="JSON" type="application/json" href="{{ asset('libraries/wp-json/wp/v2/pages/3510') }}" />
<link rel="EditURI" type="application/rsd+xml" title="RSD" href="https://demo.casethemes.net/consultio-digital-marketing/xmlrpc.php?rsd" />
<meta name="generator" content="WordPress 6.8.1" />
<meta name="generator" content="WooCommerce 9.3.3" />
<link rel="canonical" href="index.htm" />
<link rel="shortlink" href="index.htm?p=3510" />
<link rel="alternate" title="oEmbed (JSON)" type="application/json+oembed" href="{{ asset('libraries/wp-json/oembed/1.0/embed-40') }}?url=https%3A%2F%2Fdemo.casethemes.net%2Fconsultio-digital-marketing%2Fcontact-v-2%2F" />
<link rel="alternate" title="oEmbed (XML)" type="text/xml+oembed" href="{{ asset('libraries/wp-json/oembed/1.0/embed-41') }}?url=https%3A%2F%2Fdemo.casethemes.net%2Fconsultio-digital-marketing%2Fcontact-v-2%2F&#038;format=xml" />
<meta name="generator" content="Redux 4.5.0" />
<noscript>
    <style>
        .woocommerce-product-gallery {
            opacity: 1 !important;
        }
    </style>
</noscript>
@endsection