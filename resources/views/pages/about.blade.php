@extends('layouts.app')

@section('title')
About &#8211; Consultio
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
<link rel="stylesheet" id="widget-image-css" href="{{ asset('libraries/wp-content/plugins/elementor/assets/css/widget-image.min.css') }}?ver=3.25.4" type="text/css" media="all" />
<link rel="stylesheet" id="elementor-post-26-css" href="{{ asset('libraries/wp-content/uploads/elementor/css/post-26.css') }}?ver=1729686440" type="text/css" media="all" />
{{--
<link
    rel="stylesheet"
    id="google-fonts-1-css"
    href="{{ asset('libraries/ct-css/css-1') }}?family=Roboto%3A100%2C100italic%2C200%2C200italic%2C300%2C300italic%2C400%2C400italic%2C500%2C500italic%2C600%2C600italic%2C700%2C700italic%2C800%2C800italic%2C900%2C900italic%7CRoboto+Slab%3A100%2C100italic%2C200%2C200italic%2C300%2C300italic%2C400%2C400italic%2C500%2C500italic%2C600%2C600italic%2C700%2C700italic%2C800%2C800italic%2C900%2C900italic&#038;display=auto&#038;ver=6.8.1"
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
<script type="text/javascript" src="{{ asset('libraries/wp-content/plugins/case-theme-core/assets/js/lib/isotope.pkgd.min.js') }}?ver=3.0.5" id="isotope-js"></script>
<script type="text/javascript" src="{{ asset('libraries/wp-content/plugins/case-theme-core/assets/js/lib/slick.min.js') }}?ver=1.8.1" id="jquery-slick-js"></script>
<script type="text/javascript" src="{{ asset('libraries/wp-content/uploads/siteground-optimizer-assets/ct-post-carousel-widget-js.min.js') }}?ver=3.2.1" id="ct-post-carousel-widget-js-js"></script>
<link rel="https://api.w.org/" href="{{ asset('libraries/wp-json/index.htm') }}" />
<link rel="alternate" title="JSON" type="application/json" href="{{ asset('libraries/wp-json/wp/v2/pages/26') }}" />
<link rel="EditURI" type="application/rsd+xml" title="RSD" href="https://demo.casethemes.net/consultio-digital-marketing/xmlrpc.php?rsd" />
<meta name="generator" content="WordPress 6.8.1" />
<meta name="generator" content="WooCommerce 9.3.3" />
<link rel="canonical" href="index.htm" />
<link rel="shortlink" href="index.htm?p=26" />
<link rel="alternate" title="oEmbed (JSON)" type="application/json+oembed" href="{{ asset('libraries/wp-json/oembed/1.0/embed-2') }}?url=https%3A%2F%2Fdemo.casethemes.net%2Fconsultio-digital-marketing%2Fabout%2F" />
<link rel="alternate" title="oEmbed (XML)" type="text/xml+oembed" href="{{ asset('libraries/wp-json/oembed/1.0/embed-3') }}?url=https%3A%2F%2Fdemo.casethemes.net%2Fconsultio-digital-marketing%2Fabout%2F&#038;format=xml" />
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
            <div class="page-title-holder"><h1 class="page-title">Acerca de Nosotros</h1></div>
            <ul class="ct-breadcrumb">
                <li><a class="breadcrumb-entry" href="../index.htm">Home</a></li>
                <li><span class="breadcrumb-entry">About</span></li>
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
                        <article id="post-26" class="post-26 page type-page status-publish hentry">
                            <div class="entry-content clearfix">
                                <div data-elementor-type="wp-page" data-elementor-id="26" class="elementor elementor-26">
                                    <section
                                        class="elementor-section elementor-top-section elementor-element elementor-element-bf4d915 elementor-section-boxed elementor-section-height-default elementor-section-height-default ct-header-fixed-none ct-row-max-none"
                                        data-id="bf4d915"
                                        data-element_type="section"
                                    >
                                        <div class="elementor-container elementor-column-gap-extended">
                                            <div class="elementor-column elementor-col-50 elementor-top-column elementor-element elementor-element-5282614" data-id="5282614" data-element_type="column">
                                                <div class="elementor-widget-wrap elementor-element-populated">
                                                    <div
                                                        class="elementor-element elementor-element-9d091b6 elementor-widget elementor-widget-ct_heading"
                                                        data-id="9d091b6"
                                                        data-element_type="widget"
                                                        data-widget_type="ct_heading.default"
                                                    >
                                                        <div class="elementor-widget-container">
                                                            <div id="ct_heading-9d091b6" class="ct-heading h-align- sub- ct-heading-left item-st-line-left1">
                                                                <div class="ct-item--inner">
                                                                    <div
                                                                        class="ct-inline-css"
                                                                        data-css="
"
                                                                    ></div>
                                                                    <h3 class="item--title st-line-left1 case-animate-time" data-wow-delay="ms">
{{--
                                                                        <span class="sp-main"> <i></i> We’re a global stakeholder relations and partnership building consultancy. </span>
--}}
                                                                        <span class="sp-main"> <i></i> {{ isset($general) ? json_decode($general->description)->main : '-' }} </span>
                                                                    </h3>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <section
                                                        class="elementor-section elementor-inner-section elementor-element elementor-element-6b326e2 elementor-section-boxed elementor-section-height-default elementor-section-height-default ct-header-fixed-none ct-row-max-none"
                                                        data-id="6b326e2"
                                                        data-element_type="section"
                                                    >
                                                        <div class="elementor-container elementor-column-gap-extended">
                                                            <div class="elementor-column elementor-col-100 elementor-inner-column elementor-element elementor-element-71555f1" data-id="71555f1" data-element_type="column">
                                                                <div class="elementor-widget-wrap elementor-element-populated">
{{--
                                                                    <div
                                                                        class="elementor-element elementor-element-176c3a2 elementor-widget elementor-widget-text-editor"
                                                                        data-id="176c3a2"
                                                                        data-element_type="widget"
                                                                        data-widget_type="text-editor.default"
                                                                    >
                                                                        <div class="elementor-widget-container">
                                                                            Collaborate Consulting exists to find the place where to being seemingly disparate interests meet. From that point of the connection, we create
                                                                            platforms.
                                                                        </div>
                                                                    </div>
                                                                    <div
                                                                        class="elementor-element elementor-element-4b32f49 elementor-widget elementor-widget-text-editor"
                                                                        data-id="4b32f49"
                                                                        data-element_type="widget"
                                                                        data-widget_type="text-editor.default"
                                                                    >
                                                                        <div class="elementor-widget-container">We bring more than 24 years’ senior experience forging of collaborations across government.</div>
                                                                    </div>
--}}
                                                                    @if(isset($general))
                                                                    @foreach(json_decode($general->description)->text as $text)
                                                                    <div
                                                                        class="elementor-element elementor-element-176c3a2 elementor-widget elementor-widget-text-editor"
                                                                        data-id="176c3a2"
                                                                        data-element_type="widget"
                                                                        data-widget_type="text-editor.default"
                                                                    >
                                                                        <div class="elementor-widget-container">
                                                                            {{ $text }}
                                                                        </div>
                                                                    </div>
                                                                    @endforeach
                                                                    @endif

                                                                    <div
                                                                        class="elementor-element elementor-element-11f730c elementor-widget elementor-widget-ct_list"
                                                                        data-id="11f730c"
                                                                        data-element_type="widget"
                                                                        data-widget_type="ct_list.default"
                                                                    >
                                                                        <div class="elementor-widget-container">
                                                                            <div class="ct-list style2 tow-column">
                                                                                <div class="ct-list-item" data-wow-delay="ms">
                                                                                    <div class="ct-list-icon"><i class="fac fac-check-circle"></i></div>
                                                                                    <div class="ct-list-meta"><div class="ct-list-desc">Praesent feugiat sem mattis.</div></div>
                                                                                </div>
                                                                                <div class="ct-list-item" data-wow-delay="ms">
                                                                                    <div class="ct-list-icon"><i class="fac fac-check-circle"></i></div>
                                                                                    <div class="ct-list-meta"><div class="ct-list-desc">A wonderful serenity.</div></div>
                                                                                </div>
                                                                                <div class="ct-list-item" data-wow-delay="ms">
                                                                                    <div class="ct-list-icon"><i class="fac fac-check-circle"></i></div>
                                                                                    <div class="ct-list-meta"><div class="ct-list-desc">Premium services for you.</div></div>
                                                                                </div>
                                                                                <div class="ct-list-item" data-wow-delay="ms">
                                                                                    <div class="ct-list-icon"><i class="fac fac-check-circle"></i></div>
                                                                                    <div class="ct-list-meta"><div class="ct-list-desc">Set a link back to photo.</div></div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div
                                                                        class="elementor-element elementor-element-596ae67 elementor-widget elementor-widget-text-editor"
                                                                        data-id="596ae67"
                                                                        data-element_type="widget"
                                                                        data-widget_type="text-editor.default"
                                                                    >
                                                                        <div class="elementor-widget-container">
                                                                            <div class="about-call">Call to ask <a href="#">any question</a> <span>540-325-1523</span></div>
                                                                        </div>
                                                                    </div>
                                                                    <div
                                                                        class="elementor-element elementor-element-dffa2c1 elementor-widget elementor-widget-image"
                                                                        data-id="dffa2c1"
                                                                        data-element_type="widget"
                                                                        data-widget_type="image.default"
                                                                    >
                                                                        <div class="elementor-widget-container">
                                                                            <img
                                                                                decoding="async"
                                                                                width="350"
                                                                                height="1"
                                                                                src="{{ asset('libraries/wp-content/uploads/2019/12/about-gap.png') }}"
                                                                                class="attachment-full size-full wp-image-1896"
                                                                                alt=""
                                                                                srcset="
                                                                                    {{ asset('libraries/wp-content/uploads/2019/12/about-gap.png') }}       350w,
                                                                                    {{ asset('libraries/wp-content/uploads/2019/12/about-gap-300x1.png') }} 300w,
                                                                                    {{ asset('libraries/wp-content/uploads/2019/12/about-gap-150x1.png') }} 150w,
                                                                                    {{ asset('libraries/wp-content/uploads/2019/12/about-gap-250x1.png') }} 250w
                                                                                "
                                                                                sizes="(max-width: 350px) 100vw, 350px"
                                                                                loading="eager"
                                                                            />
                                                                        </div>
                                                                    </div>
                                                                    <div
                                                                        class="elementor-element elementor-element-41e6e03 elementor-widget elementor-widget-ct_signature"
                                                                        data-id="41e6e03"
                                                                        data-element_type="widget"
                                                                        data-widget_type="ct_signature.default"
                                                                    >
                                                                        <div class="elementor-widget-container">
                                                                            <div class="ct-signature1 style1">
                                                                                <div class="signature-image">
                                                                                    <img decoding="async" width="95" height="85" src="{{ asset('libraries/wp-content/uploads/2019/12/signature.png') }}" class="attachment-full" alt="" loading="eager" />
                                                                                </div>
                                                                                <div class="signature-meta">
                                                                                    <h3>Natalia Duke</h3>
                                                                                    <span>(Chairman and founder)</span>
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
                                            <div class="elementor-column elementor-col-50 elementor-top-column elementor-element elementor-element-07e4861" data-id="07e4861" data-element_type="column">
                                                <div class="elementor-widget-wrap elementor-element-populated">
                                                    <div class="elementor-element elementor-element-1548748 elementor-widget elementor-widget-image" data-id="1548748" data-element_type="widget" data-widget_type="image.default">
                                                        <div class="elementor-widget-container">
                                                            <img
                                                                fetchpriority="high"
                                                                decoding="async"
                                                                width="558"
                                                                height="631"
                                                                src="{{ asset('libraries/wp-content/uploads/2019/12/about1.png') }}"
                                                                class="attachment-full size-full wp-image-1877"
                                                                alt=""
                                                                srcset="{{ asset('libraries/wp-content/uploads/2019/12/about1.png') }} 558w, {{ asset('libraries/wp-content/uploads/2019/12/about1-265x300.png') }} 265w"
                                                                sizes="(max-width: 558px) 100vw, 558px"
                                                                loading="eager"
                                                            />
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </section>
                                    <section
                                        class="elementor-section elementor-top-section elementor-element elementor-element-3328b5d elementor-section-boxed elementor-section-height-default elementor-section-height-default ct-header-fixed-none ct-row-max-none"
                                        data-id="3328b5d"
                                        data-element_type="section"
                                    >
                                        <div class="elementor-container elementor-column-gap-extended">
                                            <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-2933d62" data-id="2933d62" data-element_type="column">
                                                <div class="elementor-widget-wrap elementor-element-populated">
                                                    <div
                                                        class="elementor-element elementor-element-1a03c0b elementor-widget elementor-widget-ct_cta"
                                                        data-id="1a03c0b"
                                                        data-element_type="widget"
                                                        data-widget_type="ct_cta.default"
                                                    >
                                                        <div class="elementor-widget-container">
                                                            <div class="ct-cta1">
                                                                <div class="item--holder"><span class="item--title">¿Quieres saber más sobre nosotros?</span> <span class="item--desc">Descarga el CV...</span></div>
                                                                <div class="item--button">
                                                                    <a class="btn btn-white" href="{{ route('download_cv') }}"> <i aria-hidden="true" class="fas fa-cloud-download-alt"></i> Descargar </a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <section
                                                        class="elementor-section elementor-inner-section elementor-element elementor-element-b7c7989 elementor-section-content-middle elementor-section-boxed elementor-section-height-default elementor-section-height-default ct-header-fixed-none ct-row-max-none"
                                                        data-id="b7c7989"
                                                        data-element_type="section"
                                                    >
                                                        <div class="elementor-container elementor-column-gap-extended">
                                                            <div class="elementor-column elementor-col-50 elementor-inner-column elementor-element elementor-element-0f1e849" data-id="0f1e849" data-element_type="column">
                                                                <div class="elementor-widget-wrap elementor-element-populated">
                                                                    <div
                                                                        class="elementor-element elementor-element-4cae67e elementor-widget elementor-widget-ct_heading"
                                                                        data-id="4cae67e"
                                                                        data-element_type="widget"
                                                                        data-widget_type="ct_heading.default"
                                                                    >
                                                                        <div class="elementor-widget-container">
                                                                            <div id="ct_heading-4cae67e" class="ct-heading h-align- sub- ct-heading-left item-st-line-left1">
                                                                                <div class="ct-item--inner">
                                                                                    <div
                                                                                        class="ct-inline-css"
                                                                                        data-css="
"
                                                                                    ></div>
                                                                                    <h3 class="item--title st-line-left1 case-animate-time" data-wow-delay="ms">
                                                                                        <span class="sp-main"> <i></i> We position our clients at the forefront of their field by advanced services. </span>
                                                                                    </h3>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="elementor-column elementor-col-50 elementor-inner-column elementor-element elementor-element-0399c33" data-id="0399c33" data-element_type="column">
                                                                <div class="elementor-widget-wrap elementor-element-populated">
                                                                    <div
                                                                        class="elementor-element elementor-element-83f630e elementor-widget elementor-widget-text-editor"
                                                                        data-id="83f630e"
                                                                        data-element_type="widget"
                                                                        data-widget_type="text-editor.default"
                                                                    >
                                                                        <div class="elementor-widget-container">
                                                                            We bring more than 20 years’ senior experience forging collaborations across government, private sector and international forums.
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </section>
                                                    <div
                                                        class="elementor-element elementor-element-584b9d6 elementor-widget elementor-widget-ct_service_grid"
                                                        data-id="584b9d6"
                                                        data-element_type="widget"
                                                        data-widget_type="ct_service_grid.default"
                                                    >
                                                        <div class="elementor-widget-container">
                                                            <div
                                                                id="ct_service_grid-584b9d6"
                                                                class="ct-grid ct-service-grid2"
                                                                data-layout="masonry"
                                                                data-start-page="1"
                                                                data-max-pages="2"
                                                                data-total="6"
                                                                data-perpage="4"
                                                                data-next-link="https://demo.casethemes.net/consultio-digital-marketing/about/page/2/"
                                                            >
                                                                <div class="ct-grid-overlay"></div>
                                                                <div class="ct-grid-inner ct-grid-masonry row animate-time" data-gutter="15">

                                                                    @foreach($services as $service)
                                                                    <div class="grid-item col-xl-3 col-lg-3 col-md-6 col-sm-6 col-12 digital">
                                                                        <div class="grid-item-inner active-featured">
                                                                            <div class="item--featured">
                                                                                <img
                                                                                    decoding="async"
                                                                                    class="disable-lazy no-lazyload"
                                                                                    src="{{ asset('libraries/wp-content/uploads/2020/03/update-service-01-450x450.jpg') }}"
                                                                                    width="450"
                                                                                    height="450"
                                                                                    alt="update-service-01"
                                                                                    title="update-service-01"
                                                                                />
                                                                            </div>
                                                                            <div class="item--meta"><h3 class="item--title">{{ $service->title }}</h3></div>
                                                                            <div class="item--holder">
                                                                                <div class="item--holder-inner">
                                                                                    <h3 class="item--title">{{ $service->title }}</h3>
                                                                                    <div class="item--content">{{ $service->content }}</div>
                                                                                    <div class="entry-readmore"><a class="btn btn-default" href="{{ route('services') }}"> Leer mas... </a></div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    @endforeach
{{--
                                                                    <div class="grid-item col-xl-3 col-lg-3 col-md-6 col-sm-6 col-12 digital">
                                                                        <div class="grid-item-inner active-featured">
                                                                            <div class="item--featured">
                                                                                <img
                                                                                    decoding="async"
                                                                                    class="disable-lazy no-lazyload"
                                                                                    src="{{ asset('libraries/wp-content/uploads/2020/03/update-service-01-450x450.jpg') }}"
                                                                                    width="450"
                                                                                    height="450"
                                                                                    alt="update-service-01"
                                                                                    title="update-service-01"
                                                                                />
                                                                            </div>
                                                                            <div class="item--meta"><h3 class="item--title">Social Media Marketing</h3></div>
                                                                            <div class="item--holder">
                                                                                <div class="item--holder-inner">
                                                                                    <h3 class="item--title">Social Media Marketing</h3>
                                                                                    <div class="item--content">We understand the importance of approaching each work integrally and&hellip;</div>
                                                                                    <div class="entry-readmore"><a class="btn btn-default" href="../service/social-media-marketing/index.htm"> Read more </a></div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="grid-item col-xl-3 col-lg-3 col-md-6 col-sm-6 col-12 digital">
                                                                        <div class="grid-item-inner active-featured">
                                                                            <div class="item--featured">
                                                                                <img
                                                                                    decoding="async"
                                                                                    class="disable-lazy no-lazyload"
                                                                                    src="{{ asset('libraries/wp-content/uploads/2020/03/update-service-02-450x450.jpg') }}"
                                                                                    width="450"
                                                                                    height="450"
                                                                                    alt="update-service-02"
                                                                                    title="update-service-02"
                                                                                />
                                                                            </div>
                                                                            <div class="item--meta"><h3 class="item--title">Content Marketing</h3></div>
                                                                            <div class="item--holder">
                                                                                <div class="item--holder-inner">
                                                                                    <h3 class="item--title">Content Marketing</h3>
                                                                                    <div class="item--content">Your logo is the very heart of your identity, let&hellip;</div>
                                                                                    <div class="entry-readmore"><a class="btn btn-default" href="../service/content-marketing/index.htm"> Read more </a></div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="grid-item col-xl-3 col-lg-3 col-md-6 col-sm-6 col-12 digital">
                                                                        <div class="grid-item-inner active-featured">
                                                                            <div class="item--featured">
                                                                                <img
                                                                                    decoding="async"
                                                                                    class="disable-lazy no-lazyload"
                                                                                    src="{{ asset('libraries/wp-content/uploads/2019/11/update-blog3-450x450.jpg') }}"
                                                                                    width="450"
                                                                                    height="450"
                                                                                    alt="update-blog3"
                                                                                    title="update-blog3"
                                                                                />
                                                                            </div>
                                                                            <div class="item--meta"><h3 class="item--title">SEO Optimization</h3></div>
                                                                            <div class="item--holder">
                                                                                <div class="item--holder-inner">
                                                                                    <h3 class="item--title">SEO Optimization</h3>
                                                                                    <div class="item--content">What separates mori from all other web design agencies is&hellip;</div>
                                                                                    <div class="entry-readmore"><a class="btn btn-default" href="../service/seo-optimization-2/index.htm"> Read more </a></div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="grid-item col-xl-3 col-lg-3 col-md-6 col-sm-6 col-12 digital">
                                                                        <div class="grid-item-inner active-featured">
                                                                            <div class="item--featured">
                                                                                <img
                                                                                    loading="lazy"
                                                                                    decoding="async"
                                                                                    class="disable-lazy no-lazyload"
                                                                                    src="{{ asset('libraries/wp-content/uploads/2019/11/theme-05-450x450.jpg') }}"
                                                                                    width="450"
                                                                                    height="450"
                                                                                    alt="theme-05"
                                                                                    title="theme-05"
                                                                                />
                                                                            </div>
                                                                            <div class="item--meta"><h3 class="item--title">Web Development</h3></div>
                                                                            <div class="item--holder">
                                                                                <div class="item--holder-inner">
                                                                                    <h3 class="item--title">Web Development</h3>
                                                                                    <div class="item--content">Increase social reach and productivity with our App Directory, a&hellip;</div>
                                                                                    <div class="entry-readmore"><a class="btn btn-default" href="../service/web-development/index.htm"> Read more </a></div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
--}}

                                                                    <div class="grid-sizer col-xl-3 col-lg-3 col-md-6 col-sm-6 col-12"></div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div
                                                        class="elementor-element elementor-element-8ddf128 elementor-widget elementor-widget-ct_service_grid"
                                                        data-id="8ddf128"
                                                        data-element_type="widget"
                                                        data-widget_type="ct_service_grid.default"
                                                    >
                                                        <div class="elementor-widget-container">
                                                            <div
                                                                id="ct_service_grid-8ddf128"
                                                                class="ct-grid ct-service-grid1"
                                                                data-layout="masonry"
                                                                data-start-page="1"
                                                                data-max-pages="0"
                                                                data-total="0"
                                                                data-perpage="8"
                                                                data-next-link="https://demo.casethemes.net/consultio-digital-marketing/about/page/2/"
                                                            >
                                                                <div class="ct-grid-overlay"></div>
                                                                <div class="ct-grid-inner ct-grid-masonry row animate-time" data-gutter="15"><div class="grid-sizer col-xl-4 col-lg-6 col-md-6 col-sm-6 col-12"></div></div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </section>
{{--               
                                    <section
                                        class="elementor-section elementor-top-section elementor-element elementor-element-a158a9e elementor-section-stretched elementor-section-boxed elementor-section-height-default elementor-section-height-default ct-header-fixed-none ct-row-max-none"
                                        data-id="a158a9e"
                                        data-element_type="section"
                                        data-settings='{"stretch_section":"section-stretched","background_background":"classic"}'>
                                        <div class="elementor-background-overlay"></div>
                                        <div class="elementor-container elementor-column-gap-extended">
                                            <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-30c4d43" data-id="30c4d43" data-element_type="column">
                                                <div class="elementor-widget-wrap elementor-element-populated">
                                                    <section
                                                        class="elementor-section elementor-inner-section elementor-element elementor-element-7a3aa06 elementor-section-content-middle elementor-section-boxed elementor-section-height-default elementor-section-height-default ct-header-fixed-none ct-row-max-none"
                                                        data-id="7a3aa06"
                                                        data-element_type="section"
                                                    >
                                                        <div class="elementor-container elementor-column-gap-extended">
                                                            <div class="elementor-column elementor-col-50 elementor-inner-column elementor-element elementor-element-ba6ff94" data-id="ba6ff94" data-element_type="column">
                                                                <div class="elementor-widget-wrap elementor-element-populated">
                                                                    <div
                                                                        class="elementor-element elementor-element-78cbbb6f elementor-widget elementor-widget-ct_heading"
                                                                        data-id="78cbbb6f"
                                                                        data-element_type="widget"
                                                                        data-widget_type="ct_heading.default"
                                                                    >
                                                                        <div class="elementor-widget-container">
                                                                            <div id="ct_heading-78cbbb6f" class="ct-heading h-align- sub- ct-heading-left item-st-line-left1">
                                                                                <div class="ct-item--inner">
                                                                                    <div
                                                                                        class="ct-inline-css"
                                                                                        data-css=""
                                                                                    ></div>
                                                                                    <h3 class="item--title st-line-left1 case-animate-time" data-wow-delay="ms">
                                                                                        <span class="sp-main"> <i></i> Consultio is a professional consulting company </span>
                                                                                    </h3>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="elementor-column elementor-col-50 elementor-inner-column elementor-element elementor-element-0de7bd2" data-id="0de7bd2" data-element_type="column">
                                                                <div class="elementor-widget-wrap elementor-element-populated">
                                                                    <div
                                                                        class="elementor-element elementor-element-7398b831 elementor-widget elementor-widget-text-editor"
                                                                        data-id="7398b831"
                                                                        data-element_type="widget"
                                                                        data-widget_type="text-editor.default"
                                                                    >
                                                                        <div class="elementor-widget-container">
                                                                            At vero eos et accusamus et iusto odio digni goiku ssimos ducimus qui blanditiis praese. Ntium voluum deleniti atque corrupti quos.
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </section>
                                                    <div
                                                        class="elementor-element elementor-element-861b1e7 elementor-widget elementor-widget-ct_history"
                                                        data-id="861b1e7"
                                                        data-element_type="widget"
                                                        data-widget_type="ct_history.default"
                                                    >
                                                        <div class="elementor-widget-container">
                                                            <div class="ct-history1">
                                                                <div class="ct-history--start">Start</div>
                                                                <div class="ct-history--holder">
                                                                    <div class="ct-history--odd">
                                                                        <div class="ct-history--item">
                                                                            <div class="ct-history--meta">
                                                                                <h3>2nd Feb, 2018</h3>
                                                                                <span>Exhibition Planning & Exhibition Management</span>
                                                                            </div>
                                                                        </div>
                                                                        <div class="ct-history--item">
                                                                            <div class="ct-history--meta">
                                                                                <h3>21st Jul, 2018</h3>
                                                                                <span>Growth internationallyfirst half of the 2018s</span>
                                                                            </div>
                                                                        </div>
                                                                        <div class="ct-history--item">
                                                                            <div class="ct-history--meta">
                                                                                <h3>19th Aug, 2018</h3>
                                                                                <span>The purpose of the business plan</span>
                                                                            </div>
                                                                        </div>
                                                                        <div class="ct-history--item">
                                                                            <div class="ct-history--meta">
                                                                                <h3>2nd Jan, 2019</h3>
                                                                                <span>Focus business history on what matters to planning</span>
                                                                            </div>
                                                                        </div>
                                                                        <div class="ct-history--item">
                                                                            <div class="ct-history--meta">
                                                                                <h3>22nd Sep, 2019</h3>
                                                                                <span>History to Unite and Inspire People</span>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="ct-history--even">
                                                                        <div class="ct-history--item">
                                                                            <div class="ct-history--meta">
                                                                                <h3>12th Jan, 2018</h3>
                                                                                <span>Establishment of Constrio</span>
                                                                            </div>
                                                                        </div>
                                                                        <div class="ct-history--item">
                                                                            <div class="ct-history--meta">
                                                                                <h3>8th Jul, 2018</h3>
                                                                                <span>Registered as a construction company</span>
                                                                            </div>
                                                                        </div>
                                                                        <div class="ct-history--item">
                                                                            <div class="ct-history--meta">
                                                                                <h3>18th Aug, 2018</h3>
                                                                                <span>Construction bought the Greek company Delta</span>
                                                                            </div>
                                                                        </div>
                                                                        <div class="ct-history--item">
                                                                            <div class="ct-history--meta">
                                                                                <h3>27th Sep, 2018</h3>
                                                                                <span>For lean business plans, operational plans, and strategic plans</span>
                                                                            </div>
                                                                        </div>
                                                                        <div class="ct-history--item">
                                                                            <div class="ct-history--meta">
                                                                                <h3>8th Jul, 2019</h3>
                                                                                <span>Award winner</span>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="ct-history--image">
                                                                    <img
                                                                        loading="lazy"
                                                                        decoding="async"
                                                                        class=""
                                                                        src="{{ asset('libraries/wp-content/uploads/2019/12/theme-15-150x150.jpg') }}"
                                                                        width="150"
                                                                        height="150"
                                                                        alt="theme-15"
                                                                        title="theme-15"
                                                                    />
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </section>
--}}

                                    @if(isset($comments))
                                    <section
                                        class="elementor-section elementor-top-section elementor-element elementor-element-7d781fc elementor-section-stretched elementor-section-boxed elementor-section-height-default elementor-section-height-default ct-header-fixed-none ct-row-max-none"
                                        data-id="7d781fc"
                                        data-element_type="section"
                                        data-settings='{"stretch_section":"section-stretched","background_background":"classic"}'>
                                        <div class="elementor-container elementor-column-gap-extended">
                                            <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-957d09c" data-id="957d09c" data-element_type="column">
                                                <div class="elementor-widget-wrap elementor-element-populated">
                                                    <section
                                                        class="elementor-section elementor-inner-section elementor-element elementor-element-e4ee5a1 elementor-section-boxed elementor-section-height-default elementor-section-height-default ct-header-fixed-none ct-row-max-none"
                                                        data-id="e4ee5a1"
                                                        data-element_type="section"
                                                    >
                                                        <div class="elementor-container elementor-column-gap-extended">
                                                            <div class="elementor-column elementor-col-50 elementor-inner-column elementor-element elementor-element-5805aec" data-id="5805aec" data-element_type="column">
                                                                <div class="elementor-widget-wrap elementor-element-populated">
                                                                    <div
                                                                        class="elementor-element elementor-element-876857f elementor-widget elementor-widget-ct_heading"
                                                                        data-id="876857f"
                                                                        data-element_type="widget"
                                                                        data-widget_type="ct_heading.default"
                                                                    >
                                                                        <div class="elementor-widget-container">
                                                                            <div id="ct_heading-876857f" class="ct-heading h-align- sub- ct-heading-left item-st-line-left1">
                                                                                <div class="ct-item--inner">
                                                                                    <div
                                                                                        class="ct-inline-css"
                                                                                        data-css=""
                                                                                    ></div>
                                                                                    <h3 class="item--title st-line-left1 case-animate-time" data-wow-delay="ms">
                                                                                        <span class="sp-main"> <i></i> Tenemos muchas reseñas de nuestros clientes satisfechos. </span>
                                                                                    </h3>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="elementor-column elementor-col-50 elementor-inner-column elementor-element elementor-element-a69669a" data-id="a69669a" data-element_type="column">
                                                                <div class="elementor-widget-wrap"></div>
                                                            </div>
                                                        </div>
                                                    </section>
                                                    <div
                                                        class="elementor-element elementor-element-f11685b elementor-widget elementor-widget-ct_testimonial_carousel"
                                                        data-id="f11685b"
                                                        data-element_type="widget"
                                                        data-widget_type="ct_testimonial_carousel.default"
                                                    >
                                                        <div class="elementor-widget-container">
                                                            <div class="ct-testimonial ct-testimonial-carousel1 ct-slick-slider style1">
                                                                <div class="ct-carousel-inner">
                                                                    <div
                                                                        class="ct-slick-carousel slick-arrow-style2 nav-middle1"
                                                                        data-arrows="true"
                                                                        data-dots=""
                                                                        data-pauseonhover=""
                                                                        data-autoplay=""
                                                                        data-autoplayspeed="5000"
                                                                        data-infinite="true"
                                                                        data-speed="500"
                                                                        data-colxs="1"
                                                                        data-colsm="2"
                                                                        data-colmd="2"
                                                                        data-collg="3"
                                                                        data-colxl="3"
                                                                        data-dir="false"
                                                                        data-slidestoscroll="1"
                                                                    >
                                                                        @foreach($comments as $comment)
                                                                        <div class="slick-slide">
                                                                            <div class="item--inner">
                                                                                <div class="item-icon"><i>”</i></div>
                                                                                <div class="item--image">
                                                                                    <img
                                                                                        loading="lazy"
                                                                                        decoding="async"
                                                                                        class=""
                                                                                        src="{{ asset('libraries/wp-content/uploads/2019/12/testimonial-07.jpg') }}"
                                                                                        width="130"
                                                                                        height="130"
                                                                                        alt="testimonial-07"
                                                                                        title="testimonial-07"
                                                                                    />
                                                                                </div>
                                                                                <div class="item--holder">
                                                                                    <div class="item--description">{{ $comment->comment }}</div>
                                                                                    <h3 class="item--title">{{ $comment->name }}</h3>
                                                                                    <div class="item--position">{{ $comment->position }}</div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        @endforeach
{{--
                                                                        <div class="slick-slide">
                                                                            <div class="item--inner">
                                                                                <div class="item-icon"><i>”</i></div>
                                                                                <div class="item--image">
                                                                                    <img
                                                                                        loading="lazy"
                                                                                        decoding="async"
                                                                                        class=""
                                                                                        src="{{ asset('libraries/wp-content/uploads/2019/12/testimonial-07.jpg') }}"
                                                                                        width="130"
                                                                                        height="130"
                                                                                        alt="testimonial-07"
                                                                                        title="testimonial-07"
                                                                                    />
                                                                                </div>
                                                                                <div class="item--holder">
                                                                                    <div class="item--description">We also bring a strong interest in coaching and capability building, with an emphasis on emotional.</div>
                                                                                    <h3 class="item--title">Kathleen Smith</h3>
                                                                                    <div class="item--position">Senior Director</div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="slick-slide">
                                                                            <div class="item--inner">
                                                                                <div class="item-icon"><i>”</i></div>
                                                                                <div class="item--image">
                                                                                    <img
                                                                                        loading="lazy"
                                                                                        decoding="async"
                                                                                        class=""
                                                                                        src="{{ asset('libraries/wp-content/uploads/2019/12/testimonial-08.jpg') }}"
                                                                                        width="130"
                                                                                        height="130"
                                                                                        alt="testimonial-08"
                                                                                        title="testimonial-08"
                                                                                    />
                                                                                </div>
                                                                                <div class="item--holder">
                                                                                    <div class="item--description">
                                                                                        I love that moment when we find the connections between organisations and envisage the initiative or platform.
                                                                                    </div>
                                                                                    <h3 class="item--title">Van Hunter</h3>
                                                                                    <div class="item--position">Senior Director</div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="slick-slide">
                                                                            <div class="item--inner">
                                                                                <div class="item-icon"><i>”</i></div>
                                                                                <div class="item--image">
                                                                                    <img
                                                                                        loading="lazy"
                                                                                        decoding="async"
                                                                                        class=""
                                                                                        src="{{ asset('libraries/wp-content/uploads/2019/12/testimonial-09.jpg') }}"
                                                                                        width="130"
                                                                                        height="130"
                                                                                        alt="testimonial-09"
                                                                                        title="testimonial-09"
                                                                                    />
                                                                                </div>
                                                                                <div class="item--holder">
                                                                                    <div class="item--description">
                                                                                        He was great in planting the seed and allowing the group to transition into a collaborative discussion pertaining.
                                                                                    </div>
                                                                                    <h3 class="item--title">Macquarie Telecom</h3>
                                                                                    <div class="item--position">Leadership Group</div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="slick-slide">
                                                                            <div class="item--inner">
                                                                                <div class="item-icon"><i>”</i></div>
                                                                                <div class="item--image">
                                                                                    <img
                                                                                        loading="lazy"
                                                                                        decoding="async"
                                                                                        class=""
                                                                                        src="{{ asset('libraries/wp-content/uploads/2019/11/testimonial-06.jpg') }}"
                                                                                        width="109"
                                                                                        height="109"
                                                                                        alt="testimonial-06"
                                                                                        title="testimonial-06"
                                                                                    />
                                                                                </div>
                                                                                <div class="item--holder">
                                                                                    <div class="item--description">We also bring a strong interest in coaching and capability building, with an emphasis on emotional.</div>
                                                                                    <h3 class="item--title">Fred L Smith</h3>
                                                                                    <div class="item--position">Senior Director</div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
--}}

                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </section>
                                    @endif

                                    <section
                                        class="elementor-section elementor-top-section elementor-element elementor-element-720bd044 elementor-section-stretched elementor-section-boxed elementor-section-height-default elementor-section-height-default ct-header-fixed-none ct-row-max-none"
                                        data-id="720bd044"
                                        data-element_type="section"
                                        data-settings='{"stretch_section":"section-stretched","background_background":"classic"}'
                                    >
                                        <div class="elementor-container elementor-column-gap-extended">
                                            <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-1f6a8df8" data-id="1f6a8df8" data-element_type="column">
                                                <div class="elementor-widget-wrap elementor-element-populated">
                                                    <div
                                                        class="elementor-element elementor-element-49fda913 elementor-widget elementor-widget-ct_clients_list"
                                                        data-id="49fda913"
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
                                                                        data-colxs="1"
                                                                        data-colsm="3"
                                                                        data-colmd="4"
                                                                        data-collg="4"
                                                                        data-colxl="4"
                                                                        data-dir="false"
                                                                        data-slidestoscroll="1"
                                                                    >
                                                                        <div class="slick-slide">
                                                                            <div class="client-image">
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
                                                                            <div class="client-image">
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
                                                                            <div class="client-image">
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
                                                                            <div class="client-image">
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
                                                                            <div class="client-image">
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
                        <!-- #post-26 -->
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