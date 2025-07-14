@extends('layouts.app')

{{--
@section('title')
Services v.1 &#8211; Consultio
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
<link rel="stylesheet" id="elementor-post-407-css" href="{{ asset('libraries/wp-content/uploads/elementor/css/post-407.css') }}?ver=1729683959" type="text/css" media="all" />

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
<script type="text/javascript" src="{{ asset('libraries/wp-content/plugins/case-theme-core/assets/js/lib/isotope.pkgd.min.js') }}?ver=3.0.5" id="isotope-js"></script>
<script type="text/javascript" src="{{ asset('libraries/wp-content/plugins/case-theme-core/assets/js/lib/slick.min.js') }}?ver=1.8.1" id="jquery-slick-js"></script>
<script type="text/javascript" src="{{ asset('libraries/wp-content/uploads/siteground-optimizer-assets/ct-post-carousel-widget-js.min.js') }}?ver=3.2.1" id="ct-post-carousel-widget-js-js"></script>
<link rel="https://api.w.org/" href="{{ asset('libraries/wp-json/index.htm') }}" />
<link rel="alternate" title="JSON" type="application/json" href="{{ asset('libraries/wp-json/wp/v2/pages/407') }}" />
<link rel="EditURI" type="application/rsd+xml" title="RSD" href="https://demo.casethemes.net/consultio-digital-marketing/xmlrpc.php?rsd" />
<meta name="generator" content="WordPress 6.8.1" />
<meta name="generator" content="WooCommerce 9.3.3" />
<link rel="canonical" href="index.htm" />
<link rel="shortlink" href="index.htm?p=407" />
<link rel="alternate" title="oEmbed (JSON)" type="application/json+oembed" href="{{ asset('libraries/wp-json/oembed/1.0/embed-10') }}?url=https%3A%2F%2Fdemo.casethemes.net%2Fconsultio-digital-marketing%2Fservices-v-1%2F" />
<link rel="alternate" title="oEmbed (XML)" type="text/xml+oembed" href="{{ asset('libraries/wp-json/oembed/1.0/embed-11') }}?url=https%3A%2F%2Fdemo.casethemes.net%2Fconsultio-digital-marketing%2Fservices-v-1%2F&#038;format=xml" />
<meta name="generator" content="Redux 4.5.0" />
<noscript>
    <style>
        .woocommerce-product-gallery {
            opacity: 1 !important;
        }
    </style>
</noscript>
@endsection

@section('content')
<div id="pagetitle" class="page-title bg-image text-center">
    <div class="container">
        <div class="page-title-inner">
            <div class="page-title-holder"><h1 class="page-title">Servicios</h1></div>
            <ul class="ct-breadcrumb">
                <li><a class="breadcrumb-entry" href="../index.htm">Home</a></li>
                <li><span class="breadcrumb-entry">Services v.1</span></li>
            </ul>
        </div>
    </div>
</div>
<div id="content" class="site-content">
    <div class="content-inner">
        <div class="ct-page-content content-container">
            <div class="row content-row">
                <div id="primary" class="content-area content-full-width col-12">
                    <main id="main" class="site-main">
                        <article id="post-407" class="post-407 page type-page status-publish hentry">
                            <div class="entry-content clearfix">
                                <div data-elementor-type="wp-page" data-elementor-id="407" class="elementor elementor-407">
                                    <section
                                        class="elementor-section elementor-top-section elementor-element elementor-element-f019bad elementor-section-content-middle elementor-section-boxed elementor-section-height-default elementor-section-height-default ct-header-fixed-none ct-row-max-none"
                                        data-id="f019bad"
                                        data-element_type="section"
                                    >
                                        <div class="elementor-container elementor-column-gap-extended">
                                            <div class="elementor-column elementor-col-50 elementor-top-column elementor-element elementor-element-5ce29c2" data-id="5ce29c2" data-element_type="column">
                                                <div class="elementor-widget-wrap elementor-element-populated">
                                                    <div
                                                        class="elementor-element elementor-element-d3b6aca elementor-widget elementor-widget-ct_heading"
                                                        data-id="d3b6aca"
                                                        data-element_type="widget"
                                                        data-widget_type="ct_heading.default"
                                                    >
                                                        <div class="elementor-widget-container">
                                                            <div id="ct_heading-d3b6aca" class="ct-heading h-align- sub-style1 ct-heading-left item-st-default">
                                                                <div class="ct-item--inner">
                                                                    <div
                                                                        class="ct-inline-css"
                                                                        data-css="
"
                                                                    ></div>
                                                                    <div class="item--sub-title style1 show-line">Services</div>
                                                                    <h3 class="item--title st-default case-animate-time" data-wow-delay="ms">
                                                                        <span class="sp-main"> We position our clients at the forefront of their field by advancing an agenda. </span>
                                                                    </h3>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="elementor-column elementor-col-50 elementor-top-column elementor-element elementor-element-877c444" data-id="877c444" data-element_type="column">
                                                <div class="elementor-widget-wrap elementor-element-populated">
                                                    <div
                                                        class="elementor-element elementor-element-8a619a7 elementor-widget elementor-widget-text-editor"
                                                        data-id="8a619a7"
                                                        data-element_type="widget"
                                                        data-widget_type="text-editor.default"
                                                    >
                                                        <div class="elementor-widget-container">
                                                            Easily apply to multiple jobs with one click! Quick Apply shows you recommended jobs based off your most recent search and allows you to apply to 25+ jobs in a matter
                                                            of seconds!
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </section>
                                    <section
                                        class="elementor-section elementor-top-section elementor-element elementor-element-7d640f1 elementor-section-boxed elementor-section-height-default elementor-section-height-default ct-header-fixed-none ct-row-max-none"
                                        data-id="7d640f1"
                                        data-element_type="section"
                                    >
                                        <div class="elementor-container elementor-column-gap-extended">
                                            <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-1e2ce89" data-id="1e2ce89" data-element_type="column">
                                                <div class="elementor-widget-wrap elementor-element-populated">
                                                    <div
                                                        class="elementor-element elementor-element-16d5b63 elementor-widget elementor-widget-ct_service_grid"
                                                        data-id="16d5b63"
                                                        data-element_type="widget"
                                                        data-widget_type="ct_service_grid.default"
                                                    >
                                                        <div class="elementor-widget-container">
                                                            <div
                                                                id="ct_service_grid-16d5b63"
                                                                class="ct-grid ct-service-grid1"
                                                                data-layout="masonry"
                                                                data-start-page="1"
                                                                data-max-pages="1"
                                                                data-total="6"
                                                                data-perpage="6"
                                                                data-next-link=""
                                                            >
                                                                <div class="ct-grid-overlay"></div>
                                                                <div class="ct-grid-inner ct-grid-masonry row animate-time" data-gutter="15">
                                                                    <div class="grid-item col-xl-4 col-lg-4 col-md-6 col-sm-6 col-12 digital">
                                                                        <div class="grid-item-inner wow fadeIn active-featured">
                                                                            <div class="grid-item-over">
                                                                                <div class="item--featured">
                                                                                    <img
                                                                                        fetchpriority="high"
                                                                                        decoding="async"
                                                                                        class="disable-lazy no-lazyload"
                                                                                        src="{{ asset('libraries/wp-content/uploads/2020/03/update-service-01-541x600.jpg') }}"
                                                                                        width="541"
                                                                                        height="600"
                                                                                        alt="update-service-01"
                                                                                        title="update-service-01"
                                                                                    />
                                                                                </div>
                                                                                <div class="item--holder">
                                                                                    <div class="item--holder-inner">
                                                                                        <div class="item--icon"><i class="text-gradient flaticonv5-online-marketing"></i></div>
                                                                                        <h3 class="item--title">Social Media Marketing</h3>
                                                                                        <div class="item--gap"></div>
                                                                                        <div class="item--content">
                                                                                            We understand the importance of approaching each work integrally and believe in the power of simple and easy...
                                                                                        </div>
                                                                                        <div class="item--icon-abs"><i class="text-gradient flaticonv5-online-marketing"></i></div>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="item--meta">
                                                                                    <h3 class="item--title">
                                                                                        <a target=""> href="https://demo.casethemes.net/consultio-digital-marketing/service/social-media-marketing/">Social Media Marketing</a>
                                                                                    </h3>
                                                                                    <div class="item--readmore"><a class="more-plus" target="" href="../service/social-media-marketing/index.htm">+</a></div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="grid-item col-xl-4 col-lg-4 col-md-6 col-sm-6 col-12 digital">
                                                                        <div class="grid-item-inner wow fadeIn active-featured">
                                                                            <div class="grid-item-over">
                                                                                <div class="item--featured">
                                                                                    <img
                                                                                        decoding="async"
                                                                                        class="disable-lazy no-lazyload"
                                                                                        src="{{ asset('libraries/wp-content/uploads/2020/03/update-service-02-541x600.jpg') }}"
                                                                                        width="541"
                                                                                        height="600"
                                                                                        alt="update-service-02"
                                                                                        title="update-service-02"
                                                                                    />
                                                                                </div>
                                                                                <div class="item--holder">
                                                                                    <div class="item--holder-inner">
                                                                                        <div class="item--icon"><i class="text-gradient flaticonv5-networking-1"></i></div>
                                                                                        <h3 class="item--title">Content Marketing</h3>
                                                                                        <div class="item--gap"></div>
                                                                                        <div class="item--content">
                                                                                            Your logo is the very heart of your identity, let our designers deliver the perfect & dreamy design, make a...
                                                                                        </div>
                                                                                        <div class="item--icon-abs"><i class="text-gradient flaticonv5-networking-1"></i></div>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="item--meta">
                                                                                    <h3 class="item--title">
                                                                                        <a target=""> href="https://demo.casethemes.net/consultio-digital-marketing/service/content-marketing/">Content Marketing</a>
                                                                                    </h3>
                                                                                    <div class="item--readmore"><a class="more-plus" target="" href="../service/content-marketing/index.htm">+</a></div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="grid-item col-xl-4 col-lg-4 col-md-6 col-sm-6 col-12 digital">
                                                                        <div class="grid-item-inner wow fadeIn active-featured">
                                                                            <div class="grid-item-over">
                                                                                <div class="item--featured">
                                                                                    <img
                                                                                        decoding="async"
                                                                                        class="disable-lazy no-lazyload"
                                                                                        src="{{ asset('libraries/wp-content/uploads/2019/11/update-blog3-541x600.jpg') }}"
                                                                                        width="541"
                                                                                        height="600"
                                                                                        alt="update-blog3"
                                                                                        title="update-blog3"
                                                                                    />
                                                                                </div>
                                                                                <div class="item--holder">
                                                                                    <div class="item--holder-inner">
                                                                                        <div class="item--icon"><i class="text-gradient flaticonv5-network"></i></div>
                                                                                        <h3 class="item--title">SEO Optimization</h3>
                                                                                        <div class="item--gap"></div>
                                                                                        <div class="item--content">
                                                                                            What separates mori from all other web design agencies is ability to offer the most Friendly Experience you can...
                                                                                        </div>
                                                                                        <div class="item--icon-abs"><i class="text-gradient flaticonv5-network"></i></div>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="item--meta">
                                                                                    <h3 class="item--title">
                                                                                        <a target=""> href="https://demo.casethemes.net/consultio-digital-marketing/service/seo-optimization-2/">SEO Optimization</a>
                                                                                    </h3>
                                                                                    <div class="item--readmore"><a class="more-plus" target="" href="../service/seo-optimization-2/index.htm">+</a></div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="grid-item col-xl-4 col-lg-4 col-md-6 col-sm-6 col-12 digital">
                                                                        <div class="grid-item-inner wow fadeIn active-featured">
                                                                            <div class="grid-item-over">
                                                                                <div class="item--featured">
                                                                                    <img
                                                                                        loading="lazy"
                                                                                        decoding="async"
                                                                                        class="disable-lazy no-lazyload"
                                                                                        src="{{ asset('libraries/wp-content/uploads/2019/11/theme-05-541x600.jpg') }}"
                                                                                        width="541"
                                                                                        height="600"
                                                                                        alt="theme-05"
                                                                                        title="theme-05"
                                                                                    />
                                                                                </div>
                                                                                <div class="item--holder">
                                                                                    <div class="item--holder-inner">
                                                                                        <div class="item--icon"><i class="text-gradient flaticon-internet"></i></div>
                                                                                        <h3 class="item--title">Web Development</h3>
                                                                                        <div class="item--gap"></div>
                                                                                        <div class="item--content">Increase social reach and productivity with our App Directory, a collection of famous applications like...</div>
                                                                                        <div class="item--icon-abs"><i class="text-gradient flaticon-internet"></i></div>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="item--meta">
                                                                                    <h3 class="item--title">
                                                                                        <a target=""> href="https://demo.casethemes.net/consultio-digital-marketing/service/web-development/">Web Development</a>
                                                                                    </h3>
                                                                                    <div class="item--readmore"><a class="more-plus" target="" href="../service/web-development/index.htm">+</a></div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="grid-item col-xl-4 col-lg-4 col-md-6 col-sm-6 col-12 digital">
                                                                        <div class="grid-item-inner wow fadeIn active-featured">
                                                                            <div class="grid-item-over">
                                                                                <div class="item--featured">
                                                                                    <img
                                                                                        loading="lazy"
                                                                                        decoding="async"
                                                                                        class="disable-lazy no-lazyload"
                                                                                        src="{{ asset('libraries/wp-content/uploads/2019/12/gallery-05-541x600.jpg') }}"
                                                                                        width="541"
                                                                                        height="600"
                                                                                        alt="gallery-05"
                                                                                        title="gallery-05"
                                                                                    />
                                                                                </div>
                                                                                <div class="item--holder">
                                                                                    <div class="item--holder-inner">
                                                                                        <div class="item--icon"><i class="text-gradient flaticonv5-idea"></i></div>
                                                                                        <h3 class="item--title">Media Promotion</h3>
                                                                                        <div class="item--gap"></div>
                                                                                        <div class="item--content">
                                                                                            Rounding up a bunch of specific designs & talking about the merits of each is perfect way to find common ground...
                                                                                        </div>
                                                                                        <div class="item--icon-abs"><i class="text-gradient flaticonv5-idea"></i></div>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="item--meta">
                                                                                    <h3 class="item--title">
                                                                                        <a target=""> href="https://demo.casethemes.net/consultio-digital-marketing/service/media-promotion/">Media Promotion</a>
                                                                                    </h3>
                                                                                    <div class="item--readmore"><a class="more-plus" target="" href="../service/media-promotion/index.htm">+</a></div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="grid-item col-xl-4 col-lg-4 col-md-6 col-sm-6 col-12 digital">
                                                                        <div class="grid-item-inner wow fadeIn active-featured">
                                                                            <div class="grid-item-over">
                                                                                <div class="item--featured">
                                                                                    <img
                                                                                        loading="lazy"
                                                                                        decoding="async"
                                                                                        class="disable-lazy no-lazyload"
                                                                                        src="{{ asset('libraries/wp-content/uploads/2019/11/theme-10-541x600.jpg') }}"
                                                                                        width="541"
                                                                                        height="600"
                                                                                        alt="theme-10"
                                                                                        title="theme-10"
                                                                                    />
                                                                                </div>
                                                                                <div class="item--holder">
                                                                                    <div class="item--holder-inner">
                                                                                        <div class="item--icon"><i class="text-gradient flaticon-report"></i></div>
                                                                                        <h3 class="item--title">Penalty Recovery</h3>
                                                                                        <div class="item--gap"></div>
                                                                                        <div class="item--content">
                                                                                            At its core, every brand has something special to reveal something that inspires people. We are an agency...
                                                                                        </div>
                                                                                        <div class="item--icon-abs"><i class="text-gradient flaticon-report"></i></div>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="item--meta">
                                                                                    <h3 class="item--title">
                                                                                        <a target=""> href="https://demo.casethemes.net/consultio-digital-marketing/service/penalty-recovery/">Penalty Recovery</a>
                                                                                    </h3>
                                                                                    <div class="item--readmore"><a class="more-plus" target="" href="../service/penalty-recovery/index.htm">+</a></div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="grid-sizer col-xl-4 col-lg-4 col-md-6 col-sm-6 col-12"></div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </section>
                                    <section
                                        class="elementor-section elementor-top-section elementor-element elementor-element-2b5b5683 elementor-section-boxed elementor-section-height-default elementor-section-height-default ct-header-fixed-none ct-row-max-none"
                                        data-id="2b5b5683"
                                        data-element_type="section"
                                    >
                                        <div class="elementor-container elementor-column-gap-extended">
                                            <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-4106b489" data-id="4106b489" data-element_type="column">
                                                <div class="elementor-widget-wrap elementor-element-populated">
                                                    <div
                                                        class="elementor-element elementor-element-5b8ee2df elementor-widget elementor-widget-ct_clients_list"
                                                        data-id="5b8ee2df"
                                                        data-element_type="widget"
                                                        data-widget_type="ct_clients_list.default"
                                                    >
                                                        <div class="elementor-widget-container">
                                                            <div class="ct-client1 ct-slick-slider style1">
                                                                <div class="ct-clients-list-inner">
                                                                    <div
                                                                        class="ct-slick-carousel"
                                                                        data-arrows=""
                                                                        data-dots=""
                                                                        data-pauseonhover=""
                                                                        data-autoplay="true"
                                                                        data-autoplayspeed="8000"
                                                                        data-infinite="true"
                                                                        data-speed="800"
                                                                        data-colxs="2"
                                                                        data-colsm="3"
                                                                        data-colmd="4"
                                                                        data-collg="4"
                                                                        data-colxl="4"
                                                                        data-dir="false"
                                                                        data-slidestoscroll="1"
                                                                    >
                                                                        <div class="slick-slide">
                                                                            <div class="client-image wow zoomIn">
                                                                                <a href="#">
                                                                                    <img
                                                                                        decoding="async"
                                                                                        width="169"
                                                                                        height="35"
                                                                                        src="{{ asset('libraries/wp-content/uploads/2019/11/client-01.png') }}"
                                                                                        class="ct-thumb-1 attachment-full"
                                                                                        alt=""
                                                                                        loading="eager"
                                                                                    />
                                                                                </a>
                                                                            </div>
                                                                        </div>
                                                                        <div class="slick-slide">
                                                                            <div class="client-image wow zoomIn">
                                                                                <a href="#">
                                                                                    <img
                                                                                        decoding="async"
                                                                                        width="143"
                                                                                        height="42"
                                                                                        src="{{ asset('libraries/wp-content/uploads/2019/11/client-02.png') }}"
                                                                                        class="ct-thumb-1 attachment-full"
                                                                                        alt=""
                                                                                        loading="eager"
                                                                                    />
                                                                                </a>
                                                                            </div>
                                                                        </div>
                                                                        <div class="slick-slide">
                                                                            <div class="client-image wow zoomIn">
                                                                                <a href="#">
                                                                                    <img
                                                                                        decoding="async"
                                                                                        width="166"
                                                                                        height="38"
                                                                                        src="{{ asset('libraries/wp-content/uploads/2019/11/client-03.png') }}"
                                                                                        class="ct-thumb-1 attachment-full"
                                                                                        alt=""
                                                                                        loading="eager"
                                                                                    />
                                                                                </a>
                                                                            </div>
                                                                        </div>
                                                                        <div class="slick-slide">
                                                                            <div class="client-image wow zoomIn">
                                                                                <a href="#">
                                                                                    <img
                                                                                        decoding="async"
                                                                                        width="170"
                                                                                        height="35"
                                                                                        src="{{ asset('libraries/wp-content/uploads/2019/11/client-04.png') }}"
                                                                                        class="ct-thumb-1 attachment-full"
                                                                                        alt=""
                                                                                        loading="eager"
                                                                                    />
                                                                                </a>
                                                                            </div>
                                                                        </div>
                                                                        <div class="slick-slide">
                                                                            <div class="client-image wow zoomIn">
                                                                                <a href="#">
                                                                                    <img
                                                                                        decoding="async"
                                                                                        width="196"
                                                                                        height="36"
                                                                                        src="{{ asset('libraries/wp-content/uploads/2019/12/client-05.png') }}"
                                                                                        class="ct-thumb-1 attachment-full"
                                                                                        alt=""
                                                                                        loading="eager"
                                                                                    />
                                                                                </a>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </section>
                                </div>
                            </div>
                            <!-- .entry-content -->
                        </article>
                        <!-- #post-407 -->
                    </main>
                    <!-- #main -->
                </div>
                <!-- #primary -->
            </div>
        </div>
    </div>
    <!-- #content inner -->
</div>
<!-- #content -->
@endsection

@section('down')
@endsection
--}}

























@section('title')
Services &#8211; Consultio
@endsection

@section('up')
<link rel="stylesheet" id="consultio-style-css" href="{{ asset('libraries/wp-content/themes/csuti/consultio-style.min.css') }}?ver=6.8.1" type="text/css" media="all" />


<link rel="stylesheet" id="meks-flickr-widget-css" href="{{ asset('libraries/wp-content/plugins/meks-simple-flickr-widget/css/meks-flickr-widget.min.css') }}?ver=1.3" type="text/css" media="all" />
<link rel="stylesheet" id="newsletter-css" href="{{ asset('libraries/wp-content/plugins/newsletter/newsletter.min.css') }}?ver=8.6.0" type="text/css" media="all" />
<link rel="stylesheet" id="elementor-icons-css" href="{{ asset('libraries/wp-content/plugins/elementor/assets/lib/eicons/css/elementor-icons.min.css') }}?ver=5.31.0" type="text/css" media="all" />
<link rel="stylesheet" id="elementor-frontend-css" href="{{ asset('libraries/wp-content/plugins/elementor/assets/css/frontend.min.css') }}?ver=3.25.4" type="text/css" media="all" />
<link rel="stylesheet" id="swiper-css" href="{{ asset('libraries/wp-content/plugins/elementor/assets/lib/swiper/v8/css/swiper.min.css') }}?ver=8.4.5" type="text/css" media="all" />
<link rel="stylesheet" id="e-swiper-css" href="{{ asset('libraries/wp-content/plugins/elementor/assets/css/conditionals/e-swiper.min.css') }}?ver=3.25.4" type="text/css" media="all" />
<link rel="stylesheet" id="elementor-post-4540-css" href="{{ asset('libraries/wp-content/uploads/elementor/css/post-4540.css') }}?ver=1729675946" type="text/css" media="all" />
<link rel="stylesheet" id="sbistyles-css" href="{{ asset('libraries/wp-content/plugins/instagram-feed/css/sbi-styles.min.css') }}?ver=6.6.0" type="text/css" media="all" />
<link rel="stylesheet" id="widget-text-editor-css" href="{{ asset('libraries/wp-content/plugins/elementor/assets/css/widget-text-editor.min.css') }}?ver=3.25.4" type="text/css" media="all" />
<link rel="stylesheet" id="elementor-post-407-css" href="{{ asset('libraries/wp-content/uploads/elementor/css/post-407.css') }}?ver=1729683959" type="text/css" media="all" />

<link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin />
<script type="text/javascript" src="{{ asset('libraries/wp-includes/js/jquery/jquery.min.js') }}?ver=3.7.1" id="jquery-core-js"></script>
<script type="text/javascript" src="{{ asset('libraries/wp-includes/js/jquery/jquery-migrate.min.js') }}?ver=3.4.1" id="jquery-migrate-js"></script>
<script type="text/javascript" src="{{ asset('libraries/wp-content/plugins/case-theme-core/assets/js/lib/waypoints.min.js') }}?ver=2.0.5" id="waypoints-js"></script>
<script type="text/javascript" src="{{ asset('libraries/wp-content/plugins/woocommerce/assets/js/jquery-blockui/jquery.blockUI.min.js') }}?ver=2.7.0-wc.9.3.3" id="jquery-blockui-js" defer="defer" data-wp-strategy="defer"></script>
<script type="text/javascript" id="wc-add-to-cart-js-extra"></script>

{{--
<link
    rel="stylesheet"
    id="consultio-google-fonts-css"
    href="../../css?family=Roboto%3A300%2C400%2C400i%2C500%2C500i%2C600%2C600i%2C700%2C700i%7CPoppins%3A300%2C400%2C400i%2C500%2C500i%2C600%2C600i%2C700%2C700i%7CPlayfair+Display%3A400%2C400i%2C700%2C700i%2C800%2C900%7CMuli%3A400%7CLato%3A400%7CBarlow%3A400%2C700%7CNunito+Sans%3A400%2C600%2C700%2C900%7CKalam%3A400%7CRubik%3A400%7CInter%3A400%2C500%2C600%2C700&#038;subset=latin%2Clatin-ext&#038;ver=6.8.1"
    type="text/css"
    media="all"
/>
--}}

<link rel="stylesheet" id="meks-flickr-widget-css" href="{{ asset('libraries/wp-content/plugins/meks-simple-flickr-widget/css/meks-flickr-widget.min.css') }}?ver=1.3" type="text/css" media="all" />
<link rel="stylesheet" id="newsletter-css" href="{{ asset('libraries/wp-content/plugins/newsletter/newsletter.min.css') }}?ver=8.6.0" type="text/css" media="all" />
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
<link rel="https://api.w.org/" href="{{ asset('libraries/wp-json/index.htm') }}" />
<link rel="EditURI" type="application/rsd+xml" title="RSD" href="https://demo.casethemes.net/consultio-digital-marketing/xmlrpc.php?rsd" />
<meta name="generator" content="WordPress 6.8.1" />
<meta name="generator" content="WooCommerce 9.3.3" />
<meta name="generator" content="Redux 4.5.0" />
<noscript>
    <style>
        .woocommerce-product-gallery {
            opacity: 1 !important;
        }
    </style>
</noscript>
@endsection

@section('content')
<div id="pagetitle" class="page-title bg-image text-center">
    <div class="container">
        <div class="page-title-inner">
            <div class="page-title-holder"><h1 class="page-title">Servicios</h1></div>
            <ul class="ct-breadcrumb">
                <li><a class="breadcrumb-entry" href="../index.htm">Home</a></li>
                <li><span class="breadcrumb-entry">Services</span></li>
            </ul>
        </div>
    </div>
</div>
<div id="content" class="site-content">
    <div class="content-inner">
        <div class="container content-container">
            <div class="row content-row">
                <div id="primary" class="col-12">
                    <main id="main" class="site-main">
                        <br>
                        @foreach($services as $service)
                        <article id="post-4177" class="single-hentry archive post-4177 service type-service status-publish hentry service-category-business">
                            <div class="entry-body">
                                <div class="entry-holder">
                                    <h2 class="entry-title"><a href="#"> {{ $service->title }} </a></h2>
                                    <ul class="entry-meta">
                                        <li class="item-date"><i class="fac fac-calendar-alt"></i>21 Mar, 2020</li>
                                        <li class="item-author"><i class="fac fac-user"></i><a href="../author/admin/index.htm" title="Posts by Rinnah" rel="author">Rinnah</a></li>
                                        <li class="item-comment"><i class="fac fac-comments"></i><a href="business-planning-2/index.htm">No Comments</a></li>
                                    </ul>
                                    <div class="entry-excerpt">
                                        {{ $service->content }}
                                    </div>
                                    <div class="entry-readmore">
                                        <a href="#" class="btn-text text-gradient"> <i class="fac fac-angle-right"></i> <span>Read More</span> </a>
                                    </div>
                                </div>
                            </div>
                        </article>
                        @endforeach
{{--
                        <article id="post-4177" class="single-hentry archive post-4177 service type-service status-publish hentry service-category-business">
                            <div class="entry-body">
                                <div class="entry-holder">
                                    <h2 class="entry-title"><a href="business-planning-2/index.htm"> Business Planning </a></h2>
                                    <ul class="entry-meta">
                                        <li class="item-date"><i class="fac fac-calendar-alt"></i>21 Mar, 2020</li>
                                        <li class="item-author"><i class="fac fac-user"></i><a href="../author/admin/index.htm" title="Posts by Rinnah" rel="author">Rinnah</a></li>
                                        <li class="item-comment"><i class="fac fac-comments"></i><a href="business-planning-2/index.htm">No Comments</a></li>
                                    </ul>
                                    <div class="entry-excerpt">
                                        We give the best Services There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words
                                        which don&#8217;t look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to&hellip;
                                    </div>
                                    <div class="entry-readmore">
                                        <a href="business-planning-2/index.htm" class="btn-text text-gradient"> <i class="fac fac-angle-right"></i> <span>Read More</span> </a>
                                    </div>
                                </div>
                            </div>
                        </article>
                        <!-- #post -->
                        <article id="post-4174" class="single-hentry archive post-4174 service type-service status-publish hentry service-category-business">
                            <div class="entry-body">
                                <div class="entry-holder">
                                    <h2 class="entry-title"><a href="brand-package/index.htm"> Brand &#038; Package </a></h2>
                                    <ul class="entry-meta">
                                        <li class="item-date"><i class="fac fac-calendar-alt"></i>21 Mar, 2020</li>
                                        <li class="item-author"><i class="fac fac-user"></i><a href="../author/admin/index.htm" title="Posts by Rinnah" rel="author">Rinnah</a></li>
                                        <li class="item-comment"><i class="fac fac-comments"></i><a href="brand-package/index.htm">No Comments</a></li>
                                    </ul>
                                    <div class="entry-excerpt">
                                        We give the best Services There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words
                                        which don&#8217;t look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to&hellip;
                                    </div>
                                    <div class="entry-readmore">
                                        <a href="brand-package/index.htm" class="btn-text text-gradient"> <i class="fac fac-angle-right"></i> <span>Read More</span> </a>
                                    </div>
                                </div>
                            </div>
                        </article>
                        <!-- #post -->
                        <article id="post-4171" class="single-hentry archive post-4171 service type-service status-publish hentry service-category-business">
                            <div class="entry-body">
                                <div class="entry-holder">
                                    <h2 class="entry-title"><a href="web-desiging/index.htm"> Web Desiging </a></h2>
                                    <ul class="entry-meta">
                                        <li class="item-date"><i class="fac fac-calendar-alt"></i>21 Mar, 2020</li>
                                        <li class="item-author"><i class="fac fac-user"></i><a href="../author/admin/index.htm" title="Posts by Rinnah" rel="author">Rinnah</a></li>
                                        <li class="item-comment"><i class="fac fac-comments"></i><a href="web-desiging/index.htm">No Comments</a></li>
                                    </ul>
                                    <div class="entry-excerpt">
                                        We give the best Services There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words
                                        which don&#8217;t look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to&hellip;
                                    </div>
                                    <div class="entry-readmore">
                                        <a href="web-desiging/index.htm" class="btn-text text-gradient"> <i class="fac fac-angle-right"></i> <span>Read More</span> </a>
                                    </div>
                                </div>
                            </div>
                        </article>
                        <!-- #post -->
                        <article id="post-448" class="single-hentry archive post-448 service type-service status-publish has-post-thumbnail hentry service-category-digital">
                            <div class="entry-featured">
                                <a href="social-media-marketing/index.htm" style="background-image: url({{ asset('libraries/wp-content/uploads/2020/03/update-service-01.jpg') }});">
                                    <img
                                        width="1200"
                                        height="800"
                                        src="{{ asset('libraries/wp-content/uploads/2020/03/update-service-01.jpg') }}"
                                        class="attachment-full size-full wp-post-image"
                                        alt=""
                                        decoding="async"
                                        srcset="
                                            {{ asset('libraries/wp-content/uploads/2020/03/update-service-01.jpg') }}          1200w,
                                            {{ asset('libraries/wp-content/uploads/2020/03/update-service-01-300x200.jpg') }}   300w,
                                            {{ asset('libraries/wp-content/uploads/2020/03/update-service-01-1024x683.jpg') }} 1024w,
                                            {{ asset('libraries/wp-content/uploads/2020/03/update-service-01-768x512.jpg') }}   768w,
                                            {{ asset('libraries/wp-content/uploads/2020/03/update-service-01-600x400.jpg') }}   600w
                                        "
                                        sizes="(max-width: 1200px) 100vw, 1200px"
                                        loading="eager"
                                    />
                                </a>
                                <div class="entry-date"><span>11</span> <span>Mar 20</span></div>
                            </div>
                            <div class="entry-body">
                                <div class="entry-holder">
                                    <h2 class="entry-title"><a href="social-media-marketing/index.htm"> Social Media Marketing </a></h2>
                                    <ul class="entry-meta">
                                        <li class="item-author"><i class="fac fac-user"></i><a href="../author/admin/index.htm" title="Posts by Rinnah" rel="author">Rinnah</a></li>
                                        <li class="item-comment"><i class="fac fac-comments"></i><a href="social-media-marketing/index.htm">No Comments</a></li>
                                    </ul>
                                    <div class="entry-excerpt">
                                        We give the best Services There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words
                                        which don&#8217;t look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to&hellip;
                                    </div>
                                    <div class="entry-readmore">
                                        <a href="social-media-marketing/index.htm" class="btn-text text-gradient"> <i class="fac fac-angle-right"></i> <span>Read More</span> </a>
                                    </div>
                                </div>
                            </div>
                        </article>
                        <!-- #post -->
                        <article id="post-446" class="single-hentry archive post-446 service type-service status-publish has-post-thumbnail hentry service-category-digital">
                            <div class="entry-featured">
                                <a href="content-marketing/index.htm" style="background-image: url({{ asset('libraries/wp-content/uploads/2020/03/update-service-02.jpg') }});">
                                    <img
                                        width="1200"
                                        height="800"
                                        src="{{ asset('libraries/wp-content/uploads/2020/03/update-service-02.jpg') }}"
                                        class="attachment-full size-full wp-post-image"
                                        alt=""
                                        decoding="async"
                                        srcset="
                                            {{ asset('libraries/wp-content/uploads/2020/03/update-service-02.jpg') }}          1200w,
                                            {{ asset('libraries/wp-content/uploads/2020/03/update-service-02-300x200.jpg') }}   300w,
                                            {{ asset('libraries/wp-content/uploads/2020/03/update-service-02-1024x683.jpg') }} 1024w,
                                            {{ asset('libraries/wp-content/uploads/2020/03/update-service-02-768x512.jpg') }}   768w,
                                            {{ asset('libraries/wp-content/uploads/2020/03/update-service-02-600x400.jpg') }}   600w
                                        "
                                        sizes="(max-width: 1200px) 100vw, 1200px"
                                        loading="eager"
                                    />
                                </a>
                                <div class="entry-date"><span>11</span> <span>Mar 20</span></div>
                            </div>
                            <div class="entry-body">
                                <div class="entry-holder">
                                    <h2 class="entry-title"><a href="content-marketing/index.htm"> Content Marketing </a></h2>
                                    <ul class="entry-meta">
                                        <li class="item-author"><i class="fac fac-user"></i><a href="../author/admin/index.htm" title="Posts by Rinnah" rel="author">Rinnah</a></li>
                                        <li class="item-comment"><i class="fac fac-comments"></i><a href="content-marketing/index.htm">No Comments</a></li>
                                    </ul>
                                    <div class="entry-excerpt">
                                        We give the best Services There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words
                                        which don&#8217;t look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to&hellip;
                                    </div>
                                    <div class="entry-readmore">
                                        <a href="content-marketing/index.htm" class="btn-text text-gradient"> <i class="fac fac-angle-right"></i> <span>Read More</span> </a>
                                    </div>
                                </div>
                            </div>
                        </article>
                        <!-- #post -->
--}}
                        {{ $services->links('layouts.paginate') }}
                        <br>
{{--
                        <nav class="navigation posts-pagination">
                            <div class="posts-page-links">
                                <a class="prev page-numbers" href="page/2/index.htm">
                                    <i class="far fac-angle-left"></i>
                                </a>
                                <span aria-current="page" class="page-numbers current">1</span> 
                                <a class="page-numbers" href="page/2/index.htm">2</a> 
                                <a class="page-numbers" href="page/3/index.htm">3</a>
                                <a class="next page-numbers" href="page/2/index.htm">
                                    <i class="far fac-angle-right"></i>
                                </a>
                            </div>
                        </nav>
--}}
                    </main>
                    <!-- #main -->
                </div>
                <!-- #primary -->
            </div>
        </div>
    </div>
    <!-- #content inner -->
</div>
<!-- #content -->
@endsection
