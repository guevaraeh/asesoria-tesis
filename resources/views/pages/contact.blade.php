@extends('layouts.app')

@section('title')
Contact v.2 &#8211; Consultio
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

@section('content')
<div id="pagetitle" class="page-title bg-image text-center">
    <div class="container">
        <div class="page-title-inner">
            <div class="page-title-holder"><h1 class="page-title">Contáctenos</h1></div>
            <ul class="ct-breadcrumb">
                <li><a class="breadcrumb-entry" href="../index.htm">Home</a></li>
                <li><span class="breadcrumb-entry">Contact v.2</span></li>
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
                        <article id="post-3510" class="post-3510 page type-page status-publish hentry">
                            <div class="entry-content clearfix">
                                <div data-elementor-type="wp-page" data-elementor-id="3510" class="elementor elementor-3510">
                                    <section
                                        class="elementor-section elementor-top-section elementor-element elementor-element-1ef182c3 elementor-section-stretched elementor-section-boxed elementor-section-height-default elementor-section-height-default ct-header-fixed-none ct-row-max-none"
                                        data-id="1ef182c3"
                                        data-element_type="section"
                                        data-settings='{"stretch_section":"section-stretched","background_background":"classic"}'
                                    >
                                        <div class="elementor-background-overlay"></div>
                                        <div class="elementor-container elementor-column-gap-extended">
                                            <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-566b9921" data-id="566b9921" data-element_type="column">
                                                <div class="elementor-widget-wrap elementor-element-populated">
                                                    <section
                                                        class="elementor-section elementor-inner-section elementor-element elementor-element-4ef0cfbf elementor-section-content-middle elementor-section-boxed elementor-section-height-default elementor-section-height-default ct-header-fixed-none ct-row-max-none"
                                                        data-id="4ef0cfbf"
                                                        data-element_type="section"
                                                    >
                                                        <div class="elementor-container elementor-column-gap-extended">
                                                            <div class="elementor-column elementor-col-50 elementor-inner-column elementor-element elementor-element-7758a428" data-id="7758a428" data-element_type="column">
                                                                <div class="elementor-widget-wrap elementor-element-populated">
                                                                    <div
                                                                        class="elementor-element elementor-element-2df05f23 elementor-widget elementor-widget-ct_heading"
                                                                        data-id="2df05f23"
                                                                        data-element_type="widget"
                                                                        data-widget_type="ct_heading.default"
                                                                    >
                                                                        <div class="elementor-widget-container">
                                                                            <div id="ct_heading-2df05f23" class="ct-heading h-align- sub- ct-heading-left item-st-line-left1">
                                                                                <div class="ct-item--inner">
                                                                                    <div
                                                                                        class="ct-inline-css"
                                                                                        data-css="
"
                                                                                    ></div>
                                                                                    <h3 class="item--title st-line-left1 wow wow fadeInLeft" data-wow-delay="ms">
                                                                                        <span class="sp-main"> <i></i> Póngase en contacto con nosotros para cualquier tipo de ayuda e información. </span>
                                                                                    </h3>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="elementor-column elementor-col-50 elementor-inner-column elementor-element elementor-element-63bcdcfc" data-id="63bcdcfc" data-element_type="column">
                                                                <div class="elementor-widget-wrap elementor-element-populated">
                                                                    <div
                                                                        class="elementor-element elementor-element-3c6d7533 wow fadeInRight elementor-widget elementor-widget-text-editor"
                                                                        data-id="3c6d7533"
                                                                        data-element_type="widget"
                                                                        data-widget_type="text-editor.default"
                                                                    >
                                                                        <div class="elementor-widget-container">
                                                                            Nos complace hablar sobre su situación. Contáctenos a través de los datos a continuación o envíe su solicitud.
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </section>
                                                    <section
                                                        class="elementor-section elementor-inner-section elementor-element elementor-element-2fc27fd7 elementor-section-boxed elementor-section-height-default elementor-section-height-default ct-header-fixed-none ct-row-max-none"
                                                        data-id="2fc27fd7"
                                                        data-element_type="section"
                                                    >
                                                        <div class="elementor-container elementor-column-gap-extended">
                                                            <div class="elementor-column elementor-col-50 elementor-inner-column elementor-element elementor-element-37ecd392" data-id="37ecd392" data-element_type="column">
                                                                <div class="elementor-widget-wrap elementor-element-populated">
                                                                    <div
                                                                        class="elementor-element elementor-element-60636a70 elementor-widget elementor-widget-ct_fancy_box"
                                                                        data-id="60636a70"
                                                                        data-element_type="widget"
                                                                        data-widget_type="ct_fancy_box.default"
                                                                    >
                                                                        <div class="elementor-widget-container">
                                                                            <div class="ct-fancy-box ct-fancy-box-layout3 style1 wow fadeInUp" data-wow-delay="ms">
                                                                                <div class="item--icon"><i aria-hidden="true" class="fas fa-map-marker-alt"></i></div>
                                                                                <div class="item--holder">
                                                                                    <h3 class="item--title">Dirección de nuestra oficina central:</h3>
                                                                                    <div class="item--description">{{ isset($general) ? json_decode($general->address)->address.', '.json_decode($general->address)->region.', '.json_decode($general->address)->country : '-' }}</div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div
                                                                        class="elementor-element elementor-element-18b7ca15 elementor-widget elementor-widget-ct_fancy_box"
                                                                        data-id="18b7ca15"
                                                                        data-element_type="widget"
                                                                        data-widget_type="ct_fancy_box.default"
                                                                    >
                                                                        <div class="elementor-widget-container">
                                                                            <div class="ct-fancy-box ct-fancy-box-layout3 style1 wow fadeInUp" data-wow-delay="ms">
                                                                                <div class="item--icon"><i aria-hidden="true" class="fas fa-phone-alt"></i></div>
                                                                                <div class="item--holder">
                                                                                    <h3 class="item--title">Llamar para consultas:</h3>
                                                                                    <div class="item--description">
{{--
                                                                                        (734) 697-2907<br />
                                                                                        (843) 971-1906
--}}
                                                                                        @foreach($phones as $phone)
                                                                                        {{ preg_replace("/^(\d{3})(\d{3})(\d{3})$/", "$1 $2 $3", $phone->number) }}<br />
                                                                                        @endforeach
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div
                                                                        class="elementor-element elementor-element-1b301a3e elementor-widget elementor-widget-ct_fancy_box"
                                                                        data-id="1b301a3e"
                                                                        data-element_type="widget"
                                                                        data-widget_type="ct_fancy_box.default"
                                                                    >
                                                                        <div class="elementor-widget-container">
                                                                            <div class="ct-fancy-box ct-fancy-box-layout3 style1 wow fadeInUp" data-wow-delay="ms">
                                                                                <div class="item--icon"><i aria-hidden="true" class="fas fa-envelope"></i></div>
                                                                                <div class="item--holder">
                                                                                    <h3 class="item--title">Correo para información:</h3>
                                                                                    <div class="item--description">
{{--
                                                                                        noreply@envato.com<br />
                                                                                        noreply@consultio.com
--}}
                                                                                        @foreach($emails as $email)
                                                                                        {{ $email->email }}<br />
                                                                                        @endforeach
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="elementor-column elementor-col-50 elementor-inner-column elementor-element elementor-element-2c6b7216" data-id="2c6b7216" data-element_type="column">
                                                                <div class="elementor-widget-wrap elementor-element-populated">
                                                                    <div
                                                                        class="elementor-element elementor-element-13694b3f elementor-widget elementor-widget-ct_ctf7"
                                                                        data-id="13694b3f"
                                                                        data-element_type="widget"
                                                                        data-widget_type="ct_ctf7.default"
                                                                    >
                                                                        <div class="elementor-widget-container">
                                                                            <div class="ct-contact-form-layout1 style3 wow fadeInRight">
                                                                                <div class="ct-contact-form-inner">
                                                                                    <div class="ct-contact-form">
                                                                                        <div class="wpcf7 no-js" id="wpcf7-f5003-p3510-o1" lang="en-US" dir="ltr" data-wpcf7-id="5003">
                                                                                            <div class="screen-reader-response">
                                                                                                <p role="status" aria-live="polite" aria-atomic="true"></p>
                                                                                                <ul></ul>
                                                                                            </div>
                                                                                            @if(Session::has('success'))
                                                                                            <div class="alert alert-warning alert-dismissible fade show" role="alert">
                                                                                                <strong>¡Mensaje enviado!</strong> Nos pondremos en contacto en un tiempo.
                                                                                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                                                                                    <span aria-hidden="true">&times;</span>
                                                                                                </button>
                                                                                            </div>
                                                                                            @elseif(Session::has('error'))
                                                                                            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                                                                                                <strong>¡No se pudo enviar!</strong> Hubo un problema para enviar, inténtelo luego.
                                                                                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                                                                                    <span aria-hidden="true">&times;</span>
                                                                                                </button>
                                                                                            </div>
                                                                                            @endif
                                                                                            <form
                                                                                                action="{{ route('contact.email') }}"
                                                                                                method="POST"
{{--
                                                                                                class="wpcf7-form init"
                                                                                                aria-label="Contact form"
                                                                                                novalidate="novalidate"
                                                                                                data-status="init"
--}}
                                                                                            >
                                                                                                @csrf
                                                                                                <div style="display: none;">
                                                                                                    <input type="hidden" name="_wpcf7" value="5003" /> <input type="hidden" name="_wpcf7_version" value="6.0" />
                                                                                                    <input type="hidden" name="_wpcf7_locale" value="en_US" />
                                                                                                    <input type="hidden" name="_wpcf7_unit_tag" value="wpcf7-f5003-p3510-o1" />
                                                                                                    <input type="hidden" name="_wpcf7_container_post" value="3510" />
                                                                                                    <input type="hidden" name="_wpcf7_posted_data_hash" value="" />
                                                                                                </div>
                                                                                                <div class="row">
                                                                                                    <div class="input-filled col-lg-6 col-md-6">
                                                                                                        <p>
                                                                                                            <span class="wpcf7-form-control-wrap" data-name="first-name">
                                                                                                                <input
                                                                                                                    size="40"
                                                                                                                    maxlength="400"
                                                                                                                    class="wpcf7-form-control wpcf7-text wpcf7-validates-as-required"
                                                                                                                    aria-required="true"
                                                                                                                    aria-invalid="false"
                                                                                                                    placeholder="Nombres *"
                                                                                                                    value=""
                                                                                                                    type="text"
                                                                                                                    name="first-name"
                                                                                                                />
                                                                                                            </span>
                                                                                                        </p>
                                                                                                    </div>
                                                                                                    <div class="input-filled col-lg-6 col-md-6">
                                                                                                        <p>
                                                                                                            <span class="wpcf7-form-control-wrap" data-name="last-name">
                                                                                                                <input
                                                                                                                    size="40"
                                                                                                                    maxlength="400"
                                                                                                                    class="wpcf7-form-control wpcf7-text wpcf7-validates-as-required"
                                                                                                                    aria-required="true"
                                                                                                                    aria-invalid="false"
                                                                                                                    placeholder="Apellidos *"
                                                                                                                    value=""
                                                                                                                    type="text"
                                                                                                                    name="last-name"
                                                                                                                />
                                                                                                            </span>
                                                                                                        </p>
                                                                                                    </div>
                                                                                                </div>
                                                                                                <div class="row">
                                                                                                    <div class="input-filled col-lg-6 col-md-6">
                                                                                                        <p>
                                                                                                            <span class="wpcf7-form-control-wrap" data-name="your-email">
                                                                                                                <input
                                                                                                                    size="40"
                                                                                                                    maxlength="400"
                                                                                                                    class="wpcf7-form-control wpcf7-email wpcf7-validates-as-required wpcf7-text wpcf7-validates-as-email"
                                                                                                                    aria-required="true"
                                                                                                                    aria-invalid="false"
                                                                                                                    placeholder="Correo electrónico *"
                                                                                                                    value=""
                                                                                                                    type="email"
                                                                                                                    name="your-email"
                                                                                                                />
                                                                                                            </span>
                                                                                                        </p>
                                                                                                    </div>
                                                                                                    <div class="input-filled col-lg-6 col-md-6">
                                                                                                        <p>
                                                                                                            <span class="wpcf7-form-control-wrap" data-name="your-phone">
                                                                                                                <input
                                                                                                                    size="40"
                                                                                                                    maxlength="400"
                                                                                                                    class="wpcf7-form-control wpcf7-text wpcf7-validates-as-required"
                                                                                                                    aria-required="true"
                                                                                                                    aria-invalid="false"
                                                                                                                    placeholder="Número de Teléfono *"
                                                                                                                    value=""
                                                                                                                    type="text"
                                                                                                                    name="your-phone"
                                                                                                                />
                                                                                                            </span>
                                                                                                        </p>
                                                                                                    </div>
                                                                                                </div>
{{--
                                                                                                <div class="row">
                                                                                                    <div class="input-filled col-lg-6 col-md-6">
                                                                                                        <p>
                                                                                                            <span class="wpcf7-form-control-wrap" data-name="your-web-address">
                                                                                                                <input
                                                                                                                    size="40"
                                                                                                                    maxlength="400"
                                                                                                                    class="wpcf7-form-control wpcf7-text wpcf7-validates-as-required"
                                                                                                                    aria-required="true"
                                                                                                                    aria-invalid="false"
                                                                                                                    placeholder="Dirección Web *"
                                                                                                                    value=""
                                                                                                                    type="text"
                                                                                                                    name="your-web-address"
                                                                                                                />
                                                                                                            </span>
                                                                                                        </p>
                                                                                                    </div>
                                                                                                    <div class="input-filled col-lg-6 col-md-6">
                                                                                                        <p>
                                                                                                            <span class="wpcf7-form-control-wrap" data-name="your-service">
                                                                                                                <select
                                                                                                                    class="wpcf7-form-control wpcf7-select wpcf7-validates-as-required"
                                                                                                                    aria-required="true"
                                                                                                                    aria-invalid="false"
                                                                                                                    name="your-service"
                                                                                                                >
                                                                                                                    <option value="Services">Services</option>
                                                                                                                    <option value="Success fullfill">Success fullfill</option>
                                                                                                                    <option value="StartUp Business">StartUp Business</option>
                                                                                                                    <option value="Business Growth">Business Growth</option>
                                                                                                                </select>
                                                                                                            </span>
                                                                                                        </p>
                                                                                                    </div>
                                                                                                </div>
--}}
                                                                                                <input type="hidden" name="your-web-address" value="no pagina"/>
                                                                                                <input type="hidden" name="your-service" value="Services"/>

                                                                                                <div class="row">
                                                                                                    <div class="input-filled col-12">
                                                                                                        <p>
                                                                                                            <span class="wpcf7-form-control-wrap" data-name="your-message">
                                                                                                                <textarea
                                                                                                                    cols="40"
                                                                                                                    rows="10"
                                                                                                                    maxlength="2000"
                                                                                                                    class="wpcf7-form-control wpcf7-textarea wpcf7-validates-as-required"
                                                                                                                    aria-required="true"
                                                                                                                    aria-invalid="false"
                                                                                                                    placeholder="Mensaje..."
                                                                                                                    name="your-message"
                                                                                                                ></textarea>
                                                                                                            </span>
                                                                                                        </p>
                                                                                                    </div>
                                                                                                    <div class="input-filled col-12">
                                                                                                        <p>
                                                                                                            <button type="submit" class="wpcf7-submit btn btn-block hover-white">
                                                                                                                <i class="fac fac-arrow-circle-right space-right"></i>Enviar
                                                                                                            </button>
                                                                                                        </p>
                                                                                                    </div>
                                                                                                </div>
                                                                                                <div class="wpcf7-response-output" aria-hidden="true"></div>
                                                                                            </form>
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
                                        </div>
                                    </section>
                                    <section
                                        class="elementor-section elementor-top-section elementor-element elementor-element-dd756b3 elementor-section-stretched elementor-section-full_width elementor-section-height-default elementor-section-height-default ct-header-fixed-none ct-row-max-none"
                                        data-id="dd756b3"
                                        data-element_type="section"
                                        data-settings='{"stretch_section":"section-stretched"}'
                                    >
                                        <div class="elementor-container elementor-column-gap-no">
                                            <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-eda45db" data-id="eda45db" data-element_type="column">
                                                <div class="elementor-widget-wrap elementor-element-populated">
                                                    <div
                                                        class="elementor-element elementor-element-2d29b35 elementor-widget elementor-widget-google_maps"
                                                        data-id="2d29b35"
                                                        data-element_type="widget"
                                                        data-widget_type="google_maps.default"
                                                    >
                                                        <div class="elementor-widget-container">
                                                            <div class="elementor-custom-embed">
{{--
                                                                <iframe
                                                                    loading="lazy"
                                                                    src="https://maps.google.com/maps?q=London%20Eye%2C%20London%2C%20United%20Kingdom&t=m&z=10&output=embed&iwloc=near"
                                                                    title="London Eye, London, United Kingdom"
                                                                    aria-label="London Eye, London, United Kingdom"
                                                                ></iframe>
--}}
                                                                @if(isset($general))
                                                                <iframe
                                                                    loading="lazy"
                                                                    src="{{ $general->map_embed }}"
                                                                    title="{{ json_decode($general->address)->address }}"
                                                                ></iframe>
                                                                @endif
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
                        <!-- #post-3510 -->
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
