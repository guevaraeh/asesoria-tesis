<header id="ct-masthead">
    <div id="ct-header-wrap" class="ct-header-layout1 fixed-height is-sticky">
        <div id="ct-header-top" class="ct-header-top1">
            <div class="container">
                <div class="row">
                    <div class="ct-header-wellcome">Welcome to our consulting company <span>Consultio!</span></div>
                    <div class="ct-header-social">
                        <a href="#" target="_blank"><i class="fab fac-facebook-f"></i></a>
                        <a href="#" target="_blank"><i class="fab fac-twitter"></i></a>
                        <a href="#" target="_blank"><i class="fab fac-linkedin-in"></i></a>
                        <a href="#" target="_blank"><i class="fab fac-instagram"></i></a>
                        <a href="https://api.whatsapp.com/send?phone=51{{ $main_phone->number }}" target="_blank"><i class="fab fac-whatsapp" style="color: #017762;"></i></a>
                    </div>
                </div>
            </div>
        </div>
        <div id="ct-header-middle">
            <div class="container">
                <div class="row">
                    <div class="ct-header-branding">
                        <a class="logo-dark" href="../index.htm" title="Consultio" rel="home"><img src="{{ asset('libraries/wp-content/uploads/2021/02/logo-dark.png') }}" alt="Consultio" /></a>
                        <a class="logo-light" href="../index.htm" title="Consultio" rel="home"><img src="{{ asset('libraries/wp-content/uploads/2021/02/logo-light.png') }}" alt="Consultio" /></a>
                        <a class="logo-mobile" href="../index.htm" title="Consultio" rel="home"><img src="{{ asset('libraries/wp-content/uploads/2021/02/logo-dark.png') }}" alt="Consultio" /></a>
                    </div>
                    <div class="ct-header-holder">
                        <div class="ct-header-info-item ct-header-call">
                            <div class="h-item-icon"><i class="flaticon-telephone text-gradient"></i></div>
                            <div class="h-item-meta"><label>Llámanos: +51 {{ preg_replace("/^(\d{3})(\d{3})(\d{3})$/", "$1 $2 $3", $main_phone->number) }}</label> <span>(Lunes - Sabado)</span></div>
                            <a href="https://api.whatsapp.com/send?phone=51{{ $main_phone->number }}" target="_blank" class="h-item-link"></a>
                        </div>
                        <div class="ct-header-info-item ct-header-mail">
                            <div class="h-item-icon"><i class="flaticonv3-envelope text-gradient"></i></div>
                            <div class="h-item-meta"><label>Correo para consulta:</label> <span>{{ $main_email->email }}</span></div>
                            <a href="mailto:{{ $main_email->email }}" target="_blank" class="h-item-link"></a>
                        </div>
                        <div class="ct-header-info-item ct-header-address">
                            <div class="h-item-icon"><i class="flaticon-map text-gradient"></i></div>
                            <div class="h-item-meta"><label>380 St Kilda Road,</label> <span>Melbourne, Australia</span></div>
                            <a href="https://www.google.com/maps?q=380+St+Kilda+Road,+Melbourne,+Australia" target="_blank" class="h-item-link"></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div id="ct-header" class="ct-header-main">
            <div class="container">
                <div class="row">
                    <div class="ct-header-branding">
                        <a class="logo-dark" href="../index.htm" title="Consultio" rel="home"><img src="{{ asset('libraries/wp-content/uploads/2021/02/logo-dark.png') }}" alt="Consultio" /></a>
                        <a class="logo-light" href="../index.htm" title="Consultio" rel="home"><img src="{{ asset('libraries/wp-content/uploads/2021/02/logo-light.png') }}" alt="Consultio" /></a>
                        <a class="logo-mobile" href="../index.htm" title="Consultio" rel="home"><img src="{{ asset('libraries/wp-content/uploads/2021/02/logo-dark.png') }}" alt="Consultio" /></a>
                    </div>
                    <div class="ct-header-navigation">
                        <div class="ct-header-navigation-bg">
                            <nav class="ct-main-navigation">
                                <div class="ct-main-navigation-inner">
                                    <div class="ct-logo-mobile">
                                        <a href="" title="" rel="home"><img src="{{ asset('libraries/wp-content/uploads/2021/02/logo-dark.png') }}" alt="" /></a>
                                    </div>
                                    <div class="header-mobile-search">
                                        <form role="search" method="get" action="https://demo.casethemes.net/consultio-digital-marketing/">
                                            <input type="text" placeholder="Search..." name="s" class="search-field" /> <button type="submit" class="search-submit"><i class="fac fac-search"></i></button>
                                        </form>
                                    </div>
                                    <ul id="menu-main-menu" class="ct-main-menu sub-hover children-plus clearfix">
                                        <li id="menu-item-3911" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-3911">
                                            <a href="{{ route('welcome') }}">
                                                <span>Inicio</span>
                                            </a>
                                        </li>
                                        <li id="menu-item-3911" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-3911">
                                            <a href="{{ route('about') }}">
                                                <span>Acerca de nosotros</span>
                                            </a>
                                        </li>
                                        <li id="menu-item-3912" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-3911">
                                            <a href="{{ route('services') }}">
                                                <span>Servicios</span>
                                            </a>
                                        </li>
                                        <li id="menu-item-3913" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-3911">
                                            <a href="{{ route('contact') }}">
                                                <span>Contáctenos</span>
                                            </a>
                                        </li>
                                        <li id="menu-item-3914" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-3911">
                                            <a href="{{ route('index') }}" target="_blank">
                                                <span>Administrador</span>
                                            </a>
                                        </li>
{{--
                                        <li id="menu-item-42" class="menu-item menu-item-type-custom menu-item-object-custom current-menu-ancestor current-menu-parent menu-item-has-children menu-item-42">
                                            <a href="#"><span>Pages</span></a>
                                            <ul class="sub-menu">
                                                <li
                                                    id="menu-item-40"
                                                    class="menu-item menu-item-type-post_type menu-item-object-page current-menu-item page_item page-item-26 current_page_item current-menu-ancestor current-menu-parent current_page_parent current_page_ancestor menu-item-has-children menu-item-40"
                                                >
                                                    <a href="index.htm" aria-current="page"><span>About us</span></a>
                                                    <ul class="sub-menu">
                                                        <li id="menu-item-3560" class="menu-item menu-item-type-post_type menu-item-object-page current-menu-item page_item page-item-26 current_page_item menu-item-3560">
                                                            <a href="index.htm" aria-current="page"><span>About v.1</span></a>
                                                        </li>
                                                        <li id="menu-item-3559" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-3559">
                                                            <a href="../about-v-2/index.htm"><span>About v.2</span></a>
                                                        </li>
                                                        <li id="menu-item-3558" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-3558">
                                                            <a href="../about-v-3/index.htm"><span>About v.3</span></a>
                                                        </li>
                                                        <li id="menu-item-3557" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-3557">
                                                            <a href="../about-v-4/index.htm"><span>About v.4</span></a>
                                                        </li>
                                                    </ul>
                                                </li>
                                                <li id="menu-item-5199" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-5199">
                                                    <a href="../services-v-1/index.htm"><span>Our Services</span></a>
                                                </li>
                                                <li id="menu-item-39" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children menu-item-39">
                                                    <a href="../team/index.htm"><span>Our Team</span></a>
                                                    <ul class="sub-menu">
                                                        <li id="menu-item-3563" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-3563">
                                                            <a href="../team/index.htm"><span>Team v.1</span></a>
                                                        </li>
                                                        <li id="menu-item-3547" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-3547">
                                                            <a href="../team-v-2/index.htm"><span>Team v.2</span></a>
                                                        </li>
                                                        <li id="menu-item-3546" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-3546">
                                                            <a href="../team-v-3/index.htm"><span>Team v.3</span></a>
                                                        </li>
                                                        <li id="menu-item-3545" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-3545">
                                                            <a href="../team-v-4/index.htm"><span>Team v.4</span></a>
                                                        </li>
                                                    </ul>
                                                </li>
                                                <li id="menu-item-366" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-366">
                                                    <a href="../team-details/index.htm"><span>Team Details</span></a>
                                                </li>
                                                <li id="menu-item-1974" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1974">
                                                    <a href="../careers/index.htm"><span>Careers</span></a>
                                                </li>
                                                <li id="menu-item-369" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children menu-item-369">
                                                    <a href="../testimonials/index.htm"><span>Testimonials</span></a>
                                                    <ul class="sub-menu">
                                                        <li id="menu-item-3564" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-3564">
                                                            <a href="../testimonials/index.htm"><span>Testimonials v.1</span></a>
                                                        </li>
                                                        <li id="menu-item-3556" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-3556">
                                                            <a href="../testimonials-v-2/index.htm"><span>Testimonials v.2</span></a>
                                                        </li>
                                                        <li id="menu-item-3555" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-3555">
                                                            <a href="../testimonials-v-3/index.htm"><span>Testimonials v.3</span></a>
                                                        </li>
                                                        <li id="menu-item-3554" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-3554">
                                                            <a href="../testimonials-v-4/index.htm"><span>Testimonials v.4</span></a>
                                                        </li>
                                                    </ul>
                                                </li>
                                                <li id="menu-item-37" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children menu-item-37">
                                                    <a href="../pricing/index.htm"><span>Pricing</span></a>
                                                    <ul class="sub-menu">
                                                        <li id="menu-item-3562" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-3562">
                                                            <a href="../pricing/index.htm"><span>Pricing v.1</span></a>
                                                        </li>
                                                        <li id="menu-item-3553" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-3553">
                                                            <a href="../pricing-v-2/index.htm"><span>Pricing v.2</span></a>
                                                        </li>
                                                    </ul>
                                                </li>
                                                <li id="menu-item-38" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-38">
                                                    <a href="../faq/index.htm"><span>FAQs</span></a>
                                                </li>
                                                <li id="menu-item-41" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children menu-item-41">
                                                    <a href="../contact/index.htm"><span>Contact us</span></a>
                                                    <ul class="sub-menu">
                                                        <li id="menu-item-3561" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-3561">
                                                            <a href="../contact/index.htm"><span>Contact v.1</span></a>
                                                        </li>
                                                        <li id="menu-item-3550" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-3550">
                                                            <a href="../contact-v-2/index.htm"><span>Contact v.2</span></a>
                                                        </li>
                                                        <li id="menu-item-3549" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-3549">
                                                            <a href="../contact-v-3/index.htm"><span>Contact v.3</span></a>
                                                        </li>
                                                        <li id="menu-item-3548" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-3548">
                                                            <a href="../contact-v-4/index.htm"><span>Contact v.4</span></a>
                                                        </li>
                                                    </ul>
                                                </li>
                                                <li id="menu-item-395" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-395">
                                                    <a href="https://demo.casethemes.net/consultio-digital-marketing/404-page/"><span>Error 404</span></a>
                                                </li>
                                                <li id="menu-item-756" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children menu-item-756">
                                                    <a href="../shop/index.htm"><span>Shop</span></a>
                                                    <ul class="sub-menu">
                                                        <li id="menu-item-755" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-755">
                                                            <a href="../shop/index.htm"><span>Products</span></a>
                                                        </li>
                                                        <li id="menu-item-794" class="menu-item menu-item-type-post_type menu-item-object-product menu-item-794">
                                                            <a href="../product/black-suit/index.htm"><span>Product Details</span></a>
                                                        </li>
                                                        <li id="menu-item-786" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-786">
                                                            <a href="../shop-wishlist/index.htm"><span>Wishlist</span></a>
                                                        </li>
                                                        <li id="menu-item-754" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-754">
                                                            <a href="../cart/index.htm"><span>Cart</span></a>
                                                        </li>
                                                    </ul>
                                                </li>
                                            </ul>
                                        </li>
                                        <li id="menu-item-414" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children menu-item-414">
                                            <a href="../services-v-1/index.htm"><span>Services</span></a>
                                            <ul class="sub-menu">
                                                <li id="menu-item-5640" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-5640">
                                                    <a href="../services-v-1/index.htm"><span>Our Services</span></a>
                                                </li>
                                                <li id="menu-item-4477" class="menu-item menu-item-type-post_type menu-item-object-service menu-item-4477">
                                                    <a href="../service/content-marketing/index.htm"><span>Content Marketing</span></a>
                                                </li>
                                                <li id="menu-item-4029" class="menu-item menu-item-type-post_type menu-item-object-service menu-item-4029">
                                                    <a href="../service/seo-optimization-2/index.htm"><span>SEO Optimization</span></a>
                                                </li>
                                                <li id="menu-item-5200" class="menu-item menu-item-type-post_type menu-item-object-service menu-item-5200">
                                                    <a href="../service/penalty-recovery/index.htm"><span>Penalty Recovery</span></a>
                                                </li>
                                                <li id="menu-item-4030" class="menu-item menu-item-type-post_type menu-item-object-service menu-item-4030">
                                                    <a href="../service/web-development/index.htm"><span>Web Development</span></a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li id="menu-item-421" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children menu-item-421">
                                            <a href="../portfolio-grid/index.htm"><span>Portfolio</span></a>
                                            <ul class="sub-menu">
                                                <li id="menu-item-420" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children menu-item-420">
                                                    <a href="../portfolio-grid/index.htm"><span>Portfolio Grid</span></a>
                                                    <ul class="sub-menu">
                                                        <li id="menu-item-4363" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-4363">
                                                            <a href="../portfolio-grid-2-columns/index.htm"><span>2 Columns</span></a>
                                                        </li>
                                                        <li id="menu-item-4362" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-4362">
                                                            <a href="../portfolio-grid-3-columns/index.htm"><span>3 Columns</span></a>
                                                        </li>
                                                        <li id="menu-item-4364" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-4364">
                                                            <a href="../portfolio-grid/index.htm"><span>4 Columns</span></a>
                                                        </li>
                                                        <li id="menu-item-4361" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-4361">
                                                            <a href="../portfolio-grid-4-columns-wide/index.htm"><span>4 Columns Wide</span></a>
                                                        </li>
                                                    </ul>
                                                </li>
                                                <li id="menu-item-419" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-419">
                                                    <a href="../portfolio-masonry/index.htm"><span>Portfolio Masonry</span></a>
                                                </li>
                                                <li id="menu-item-695" class="menu-item menu-item-type-post_type menu-item-object-portfolio menu-item-695">
                                                    <a href="../portfolio/data-analytics/index.htm"><span>Portfolio Details</span></a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li id="menu-item-138" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children menu-item-138">
                                            <a href="../blog-standard/index.htm"><span>Blog</span></a>
                                            <ul class="sub-menu">
                                                <li id="menu-item-141" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-141">
                                                    <a href="../blog-carousel/index.htm"><span>Blog Carousel</span></a>
                                                </li>
                                                <li id="menu-item-140" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children menu-item-140">
                                                    <a href="../blog-grid-3-columns/index.htm"><span>Blog Grid</span></a>
                                                    <ul class="sub-menu">
                                                        <li id="menu-item-144" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-144">
                                                            <a href="../blog-grid-2-columns-sidebar-left/index.htm"><span>Left Sidebar</span></a>
                                                        </li>
                                                        <li id="menu-item-142" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-142">
                                                            <a href="../blog-grid-3-columns/index.htm"><span>Without Sidebar</span></a>
                                                        </li>
                                                        <li id="menu-item-143" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-143">
                                                            <a href="../blog-grid-2-columns-sidebar-right/index.htm"><span>Right Sidebar</span></a>
                                                        </li>
                                                    </ul>
                                                </li>
                                                <li id="menu-item-139" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children menu-item-139">
                                                    <a href="../blog-standard/index.htm"><span>Blog Standard</span></a>
                                                    <ul class="sub-menu">
                                                        <li id="menu-item-146" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-146">
                                                            <a href="../blog-standard-left-sidebar/index.htm"><span>Left Sidebar</span></a>
                                                        </li>
                                                        <li id="menu-item-145" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-145">
                                                            <a href="../blog-standard-without-sidebar/index.htm"><span>Without Sidebar</span></a>
                                                        </li>
                                                        <li id="menu-item-147" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-147">
                                                            <a href="../blog-standard/index.htm"><span>Right Sidebar</span></a>
                                                        </li>
                                                    </ul>
                                                </li>
                                                <li id="menu-item-185" class="menu-item menu-item-type-post_type menu-item-object-post menu-item-has-children menu-item-185">
                                                    <a href="../you-can-use-it-for-any-kind-website-like/index.htm"><span>Blog Details</span></a>
                                                    <ul class="sub-menu">
                                                        <li id="menu-item-247" class="menu-item menu-item-type-post_type menu-item-object-post menu-item-247">
                                                            <a href="../why-youll-never-succeed-at-7-habits-of-highly/index.htm"><span>Left Sidebar</span></a>
                                                        </li>
                                                        <li id="menu-item-248" class="menu-item menu-item-type-post_type menu-item-object-post menu-item-248">
                                                            <a href="../how-to-go-about-intiating-an-start-up/index.htm"><span>Without Sidebar</span></a>
                                                        </li>
                                                        <li id="menu-item-246" class="menu-item menu-item-type-post_type menu-item-object-post menu-item-246">
                                                            <a href="../you-can-use-it-for-any-kind-website-like/index.htm"><span>Right Sidebar</span></a>
                                                        </li>
                                                    </ul>
                                                </li>
                                            </ul>
                                        </li>
                                        <li id="menu-item-5145" class="menu-item menu-item-type-custom menu-item-object-custom megamenu megamenu-style-alt menu-item-has-children menu-item-5145">
                                            <a href="#"><span>Elements</span></a>
                                            <ul class="sub-menu">
                                                <li>
                                                    <div class="container">
                                                        <div data-elementor-type="wp-post" data-elementor-id="5137" class="elementor elementor-5137">
                                                            <section
                                                                class="elementor-section elementor-top-section elementor-element elementor-element-11f7370 elementor-section-boxed elementor-section-height-default elementor-section-height-default ct-header-fixed-none ct-row-max-none"
                                                                data-id="11f7370"
                                                                data-element_type="section"
                                                            >
                                                                <div class="elementor-container elementor-column-gap-default">
                                                                    <div class="elementor-column elementor-col-25 elementor-top-column elementor-element elementor-element-27051da4" data-id="27051da4" data-element_type="column">
                                                                        <div class="elementor-widget-wrap elementor-element-populated">
                                                                            <div
                                                                                class="elementor-element elementor-element-27f95fa2 elementor-widget elementor-widget-ct_heading"
                                                                                data-id="27f95fa2"
                                                                                data-element_type="widget"
                                                                                data-widget_type="ct_heading.default"
                                                                            >
                                                                                <div class="elementor-widget-container">
                                                                                    <div id="ct_heading-27f95fa2" class="ct-heading h-align- sub-style1 ct-heading-left item-st-default">
                                                                                        <div class="ct-item--inner">
                                                                                            <div
                                                                                                class="ct-inline-css"
                                                                                                data-css="
"
                                                                                            ></div>
                                                                                            <h3 class="item--title st-default case-animate-time" data-wow-delay="ms"><span class="sp-main"> Interactive Elements </span></h3>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                            <div
                                                                                class="elementor-element elementor-element-43420956 elementor-widget elementor-widget-ct_menu_item"
                                                                                data-id="43420956"
                                                                                data-element_type="widget"
                                                                                data-widget_type="ct_menu_item.default"
                                                                            >
                                                                                <div class="elementor-widget-container">
                                                                                    <ul class="ct-menu-item">
                                                                                        <li>
                                                                                            <a href="http://demo.casethemes.net/consultio/elements/testimonials-2/">
                                                                                                <i aria-hidden="true" class="fas fa-quote-left"></i> Testimonials
                                                                                            </a>
                                                                                        </li>
                                                                                        <li>
                                                                                            <a href="http://demo.casethemes.net/consultio/blog-slider/">
                                                                                                <i aria-hidden="true" class="flaticonv3 flaticonv3-newspaper"></i> Blog Slider
                                                                                            </a>
                                                                                        </li>
                                                                                        <li>
                                                                                            <a href="http://demo.casethemes.net/consultio/elements/elements-portfolio-carousel/">
                                                                                                <i aria-hidden="true" class="flaticonv3 flaticonv3-portfolio"></i> Portfolio Carousel
                                                                                            </a>
                                                                                        </li>
                                                                                        <li>
                                                                                            <a href="http://demo.casethemes.net/consultio/elements/service-carousel/">
                                                                                                <i aria-hidden="true" class="flaticonv3 flaticonv3-portfolio"></i> Service Carousel
                                                                                            </a>
                                                                                        </li>
                                                                                        <li>
                                                                                            <a href="http://demo.casethemes.net/consultio/elements/clients/"> <i aria-hidden="true" class="fas fa-user"></i> Clients </a>
                                                                                        </li>
                                                                                        <li>
                                                                                            <a href="http://demo.casethemes.net/consultio/elements/history/"> <i aria-hidden="true" class="fas fa-history"></i> History </a>
                                                                                        </li>
                                                                                        <li>
                                                                                            <a href="http://demo.casethemes.net/consultio/elements/video-button/">
                                                                                                <i aria-hidden="true" class="fas fa-play-circle"></i> Video Button
                                                                                            </a>
                                                                                        </li>
                                                                                        <li>
                                                                                            <a href="http://demo.casethemes.net/consultio/elements/columns/"> <i aria-hidden="true" class="fas fa-columns"></i> Columns </a>
                                                                                        </li>
                                                                                        <li>
                                                                                            <a href="http://demo.casethemes.net/consultio/row-background/">
                                                                                                <i aria-hidden="true" class="material zmdi zmdi-open-in-browser"></i> Row background
                                                                                            </a>
                                                                                        </li>
                                                                                    </ul>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div
                                                                        class="elementor-column elementor-col-25 elementor-top-column elementor-element elementor-element-48fd0d3c col-line-mega"
                                                                        data-id="48fd0d3c"
                                                                        data-element_type="column"
                                                                    >
                                                                        <div class="elementor-widget-wrap elementor-element-populated">
                                                                            <div
                                                                                class="elementor-element elementor-element-22b25e08 elementor-widget elementor-widget-ct_heading"
                                                                                data-id="22b25e08"
                                                                                data-element_type="widget"
                                                                                data-widget_type="ct_heading.default"
                                                                            >
                                                                                <div class="elementor-widget-container">
                                                                                    <div id="ct_heading-22b25e08" class="ct-heading h-align- sub-style1 ct-heading-left item-st-default">
                                                                                        <div class="ct-item--inner">
                                                                                            <div
                                                                                                class="ct-inline-css"
                                                                                                data-css="
"
                                                                                            ></div>
                                                                                            <h3 class="item--title st-default case-animate-time" data-wow-delay="ms"><span class="sp-main"> Standard Elements </span></h3>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                            <div
                                                                                class="elementor-element elementor-element-1014293 elementor-widget elementor-widget-ct_menu_item"
                                                                                data-id="1014293"
                                                                                data-element_type="widget"
                                                                                data-widget_type="ct_menu_item.default"
                                                                            >
                                                                                <div class="elementor-widget-container">
                                                                                    <ul class="ct-menu-item">
                                                                                        <li>
                                                                                            <a href="http://demo.casethemes.net/consultio/team-variations/"> <i aria-hidden="true" class="fas fa-users"></i> Team Variations </a>
                                                                                        </li>
                                                                                        <li>
                                                                                            <a href="http://demo.casethemes.net/consultio/elements/buttons/"> <i aria-hidden="true" class="fas fa-dice-d6"></i> Buttons </a>
                                                                                        </li>
                                                                                        <li>
                                                                                            <a href="http://demo.casethemes.net/consultio/tabs-tours/"> <i aria-hidden="true" class="fas fa-ellipsis-h"></i> Tabs & Tours </a>
                                                                                        </li>
                                                                                        <li>
                                                                                            <a href="http://demo.casethemes.net/consultio/elements/accordions-toggles/">
                                                                                                <i aria-hidden="true" class="fas fa-server"></i> Accordions & Toggles
                                                                                            </a>
                                                                                        </li>
                                                                                        <li>
                                                                                            <a href="http://demo.casethemes.net/consultio/elements/google-maps/">
                                                                                                <i aria-hidden="true" class="material zmdi zmdi-google-maps"></i> Google Maps
                                                                                            </a>
                                                                                        </li>
                                                                                        <li>
                                                                                            <a href="http://demo.casethemes.net/consultio/elements/contact-forms-7/">
                                                                                                <i aria-hidden="true" class="material zmdi zmdi-account-box-phone"></i> Contact Forms 7
                                                                                            </a>
                                                                                        </li>
                                                                                        <li>
                                                                                            <a href="http://demo.casethemes.net/consultio/elements/dividers/">
                                                                                                <i aria-hidden="true" class="material zmdi zmdi-cut"></i> Dividers
                                                                                            </a>
                                                                                        </li>
                                                                                        <li>
                                                                                            <a href="http://demo.casethemes.net/consultio/elements/pricing-tables/">
                                                                                                <i aria-hidden="true" class="fas fa-table"></i> Pricing Tables
                                                                                            </a>
                                                                                        </li>
                                                                                    </ul>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div
                                                                        class="elementor-column elementor-col-25 elementor-top-column elementor-element elementor-element-2d73d8d6 col-line-mega"
                                                                        data-id="2d73d8d6"
                                                                        data-element_type="column"
                                                                    >
                                                                        <div class="elementor-widget-wrap elementor-element-populated">
                                                                            <div
                                                                                class="elementor-element elementor-element-2ce67e5c elementor-widget elementor-widget-ct_heading"
                                                                                data-id="2ce67e5c"
                                                                                data-element_type="widget"
                                                                                data-widget_type="ct_heading.default"
                                                                            >
                                                                                <div class="elementor-widget-container">
                                                                                    <div id="ct_heading-2ce67e5c" class="ct-heading h-align- sub-style1 ct-heading-left item-st-default">
                                                                                        <div class="ct-item--inner">
                                                                                            <div
                                                                                                class="ct-inline-css"
                                                                                                data-css="
"
                                                                                            ></div>
                                                                                            <h3 class="item--title st-default case-animate-time" data-wow-delay="ms"><span class="sp-main"> Infographics </span></h3>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                            <div
                                                                                class="elementor-element elementor-element-50694cfe elementor-widget elementor-widget-ct_menu_item"
                                                                                data-id="50694cfe"
                                                                                data-element_type="widget"
                                                                                data-widget_type="ct_menu_item.default"
                                                                            >
                                                                                <div class="elementor-widget-container">
                                                                                    <ul class="ct-menu-item">
                                                                                        <li>
                                                                                            <a href="http://demo.casethemes.net/consultio/elements/counters/">
                                                                                                <i aria-hidden="true" class="fas fa-sort-numeric-up"></i> Counters
                                                                                            </a>
                                                                                        </li>
                                                                                        <li>
                                                                                            <a href="http://demo.casethemes.net/consultio/elements/progress-bars/">
                                                                                                <i aria-hidden="true" class="fas fa-chart-line"></i> Progress Bars
                                                                                            </a>
                                                                                        </li>
                                                                                        <li>
                                                                                            <a href="http://demo.casethemes.net/consultio/elements/icon-with-text/">
                                                                                                <i aria-hidden="true" class="fas fa-gift"></i> Icon With Text
                                                                                            </a>
                                                                                        </li>
                                                                                        <li>
                                                                                            <a href="http://demo.casethemes.net/consultio/elements/icon-grid/"> <i aria-hidden="true" class="fas fa-crown"></i> Icon Grid </a>
                                                                                        </li>
                                                                                        <li>
                                                                                            <a href="http://demo.casethemes.net/consultio/elements/image-box-fancy/">
                                                                                                <i aria-hidden="true" class="material zmdi zmdi-collection-folder-image"></i> Image Box Fancy
                                                                                            </a>
                                                                                        </li>
                                                                                        <li>
                                                                                            <a href="http://demo.casethemes.net/consultio/elements/cover-boxes/">
                                                                                                <i aria-hidden="true" class="fas fa-ticket-alt"></i> Cover Boxes
                                                                                            </a>
                                                                                        </li>
                                                                                        <li>
                                                                                            <a href="http://demo.casethemes.net/consultio/elements/newsletters/">
                                                                                                <i aria-hidden="true" class="fas fa-envelope-open-text"></i> Newsletters
                                                                                            </a>
                                                                                        </li>
                                                                                    </ul>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div
                                                                        class="elementor-column elementor-col-25 elementor-top-column elementor-element elementor-element-5a87c3ab col-line-mega"
                                                                        data-id="5a87c3ab"
                                                                        data-element_type="column"
                                                                    >
                                                                        <div class="elementor-widget-wrap elementor-element-populated">
                                                                            <div
                                                                                class="elementor-element elementor-element-480355a2 elementor-widget elementor-widget-ct_heading"
                                                                                data-id="480355a2"
                                                                                data-element_type="widget"
                                                                                data-widget_type="ct_heading.default"
                                                                            >
                                                                                <div class="elementor-widget-container">
                                                                                    <div id="ct_heading-480355a2" class="ct-heading h-align- sub-style1 ct-heading-left item-st-default">
                                                                                        <div class="ct-item--inner">
                                                                                            <div
                                                                                                class="ct-inline-css"
                                                                                                data-css="
"
                                                                                            ></div>
                                                                                            <h3 class="item--title st-default case-animate-time" data-wow-delay="ms"><span class="sp-main"> Typography </span></h3>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                            <div
                                                                                class="elementor-element elementor-element-acd6f6b elementor-widget elementor-widget-ct_menu_item"
                                                                                data-id="acd6f6b"
                                                                                data-element_type="widget"
                                                                                data-widget_type="ct_menu_item.default"
                                                                            >
                                                                                <div class="elementor-widget-container">
                                                                                    <ul class="ct-menu-item">
                                                                                        <li>
                                                                                            <a href="http://demo.casethemes.net/consultio/elements/custom-fonts/">
                                                                                                <i aria-hidden="true" class="material zmdi zmdi-font"></i> Custom Fonts
                                                                                            </a>
                                                                                        </li>
                                                                                        <li>
                                                                                            <a href="http://demo.casethemes.net/consultio/elements/highlights/"> <i aria-hidden="true" class="fas fa-coffee"></i> Highlights </a>
                                                                                        </li>
                                                                                        <li>
                                                                                            <a href="http://demo.casethemes.net/consultio/elements/blockquote/">
                                                                                                <i aria-hidden="true" class="flaticonv2 flaticonv2-right-quotation-mark"></i> Blockquote
                                                                                            </a>
                                                                                        </li>
                                                                                        <li>
                                                                                            <a href="http://demo.casethemes.net/consultio/elements/dropcaps/"> <i aria-hidden="true" class="fas fa-text-width"></i> Dropcaps </a>
                                                                                        </li>
                                                                                        <li>
                                                                                            <a href="http://demo.casethemes.net/consultio/elements/message-box/">
                                                                                                <i aria-hidden="true" class="material zmdi zmdi-assignment-alert"></i> Message Box
                                                                                            </a>
                                                                                        </li>
                                                                                        <li>
                                                                                            <a href="http://demo.casethemes.net/consultio/elements/lists/"> <i aria-hidden="true" class="fas fa-list"></i> Lists </a>
                                                                                        </li>
                                                                                        <li>
                                                                                            <a href="http://demo.casethemes.net/consultio/elements/titles/"> <i aria-hidden="true" class="fas fa-text-height"></i> Titles </a>
                                                                                        </li>
                                                                                    </ul>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </section>
                                                        </div>
                                                    </div>
                                                </li>
                                            </ul>
                                        </li>
--}}
                                    </ul>
                                    <div class="ct-header-holder ct-header-holder-mobile">
                                        <div class="ct-header-info-item ct-header-call">
                                            <div class="h-item-icon"><i class="flaticon-telephone text-gradient"></i></div>
                                            <div class="h-item-meta"><label>Llámanos: 51 {{ $main_phone->number }}</label> <span>(Sat - Thursday)</span></div>
                                            <a href="https://api.whatsapp.com/send?phone=51{{ $main_phone->number }}" target="_blank" class="h-item-link"></a>
                                        </div>
                                        <div class="ct-header-info-item ct-header-mail">
                                            <div class="h-item-icon"><i class="flaticonv3-envelope text-gradient"></i></div>
                                            <div class="h-item-meta"><label>Correo:</label> <span>{{ $main_email->email }}</span></div>
                                            <a href="mailto:{{ $main_email->email }}" target="_blank" class="h-item-link"></a>
                                        </div>
                                        <div class="ct-header-info-item ct-header-address">
                                            <div class="h-item-icon"><i class="flaticon-map text-gradient"></i></div>
                                            <div class="h-item-meta"><label>380 St Kilda Road,</label> <span>Melbourne, Australia</span></div>
                                            <a href="https://www.google.com/maps?q=380+St+Kilda+Road,+Melbourne,+Australia" target="_blank" class="h-item-link"></a>
                                        </div>
                                    </div>
                                    <div class="ct-header-button-mobile"><a class="btn btn-default" href="../contact/index.htm" target="_self">Appionment</a></div>
                                </div>
                            </nav>

                            <div class="ct-header-meta">
{{--
                                <div class="header-right-item h-btn-search"><i class="fac fac-search"></i></div>
                                <div class="header-right-item h-btn-cart"><i class="fac fac-shopping-basket"></i> <span class="widget_cart_counter_header">0</span></div>
--}}
                            </div>
                        </div>
                    </div>
                    <div class="ct-header-button">
                        <a class="btn btn-default" href="../contact/index.htm" target="_self">Appionment<i class="ct-arrow-right arrow-white"></i></a>
                    </div>
                </div>
            </div>

            <div id="ct-menu-mobile">
                <span class="btn-nav-mobile open-menu"> 
                    <span></span> 
                </span>
            </div>
        </div>
    </div>
</header>
