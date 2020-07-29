<?php 
    //Scripts & styles

    add_action( 'wp_enqueue_scripts', 'my_theme_enqueue_styles' );
    function my_theme_enqueue_styles() {
    
        $parent_style = 'sotrefront-style';
    
        // Why enqueue parent style again? The child theme works perfectly without this line
        wp_enqueue_style( $parent_style, get_template_directory_uri() . '/style.css' );
    
        wp_enqueue_style( 'child-style',
            get_stylesheet_directory_uri() . '/style.css',
            array( $parent_style ),
            wp_get_theme()->get('Version')
        );
    }

    function storefront_enqueue_script() {
        wp_enqueue_script('show_modal_js', get_stylesheet_directory_uri() .'/assets/js/show-modal.js', false);
        wp_enqueue_script('modal_jquery', '//cdnjs.cloudflare.com/ajax/libs/jquery/3.0.0/jquery.min.js', false);
        wp_enqueue_script('modal_js', '//cdnjs.cloudflare.com/ajax/libs/jquery-modal/0.9.1/jquery.modal.min.js', false);
    }

    add_action( 'wp_enqueue_scripts', 'storefront_enqueue_script' );

    function storefront_enqueue_style() {
        wp_enqueue_style('modal_css', '//cdnjs.cloudflare.com/ajax/libs/jquery-modal/0.9.1/jquery.modal.min.css', false);
    }

    add_action( 'wp_enqueue_scripts', 'storefront_enqueue_style' );


    //Header

    function storefront_skip_links() {
		?>
        <div class='header_top'>
            <p>Javite nam se s upitom na (01) 617 0718 </p>
            <div class='header__social-links'>
                <img src='http://localhost/kontaktne-lece.eu/wp-content/uploads/2020/07/logo-facebook.jpeg'>
                <img src='http://localhost/kontaktne-lece.eu/wp-content/uploads/2020/07/logo-instagram.jpeg'>
            </div>
        </div>
        <hr class='header__hr'>
		<?php
    }
    
    function header_nav_icons() {
        ?>
        <div class='nav-icons'>
            <a class='nav-icons__link'>
                <img class='nav-icons__img' src='http://localhost/kontaktne-lece.eu/wp-content/uploads/2020/07/icon-user.png'>
                <span class='nav-icons__text'>Prijavi se</span>
            </a>
            <a class='nav-icons__link'>
                <img class='nav-icons__img' src='http://localhost/kontaktne-lece.eu/wp-content/uploads/2020/07/icon-question.png'>
                <span class='nav-icons__text'>Česta pitanja</span>
            </a>
            <a class='nav-icons__link'>
                <img class='nav-icons__img'src='http://localhost/kontaktne-lece.eu/wp-content/uploads/2020/07/icon-checkout.png'>
                <span class='nav-icons__text'>Plačanje</span>
            </a>
        </div>
        <?php
    }

    add_action('storefront_header', 'header_nav_icons', 41);

    add_action( 'storefront_header', 'storefront_header_container_close', 10 );

    add_action( 'storefront_header', 'storefront_header_container', 11 );

    function mobile_header_elements() {?>
        <span class='mobile-header__icon-box'>
            <a class='mobile-header__icon'><img src='http://localhost/kontaktne-lece.eu/wp-content/uploads/2020/07/icon-user.png'></a>
            <a class='mobile-header__icon'><img src='http://localhost/kontaktne-lece.eu/wp-content/uploads/2020/07/icon-user.png'></a>
        </span>
    <?php }

    add_action( 'storefront_header', 'mobile_header_elements', 51 );

    //Catalog & Search results

    function compare_button() { ?>
        <a class='button_compare'>Dodaj u usporedbu</a>
    <?php }

    add_action('woocommerce_after_shop_loop_item', 'compare_button');

    add_action('woocommerce_after_add_to_cart_button', 'compare_button');

    function set_catalog_sidebar(){
        if( !is_product_category() && !is_search() )remove_action( 'storefront_sidebar', 'storefront_get_sidebar', 10 );
    }

    add_action( 'get_header', 'set_catalog_sidebar');

    //Single product

    function discount_notice() { ?>
        <span>5 kom -20%</span>
    <?php }

    add_action('woocommerce_after_single_variation', 'discount_notice');

    function lens_parameters(){ ?>
        <div class='lens-parameters-wrapper'>
            <form class='lens-parameters'>
                <label></label>
                <label>Desno</label>
                <label>Lijevo</label>
                <label>Dioptrija</label>
                <input type='number'>
                <input type='number'>
                <label>BC</label>
                <input type='number'>
                <input type='number'>
                <label>Promjer</label>
                <input type='number'>
                <input type='number'>
            </form>
        </div>
    <?php }

    add_action('woocommerce_before_add_to_cart_form', 'lens_parameters');


    //Cart & checkout

    function ordering_process(){
       if ( is_checkout() ): ?>
            <div class='checkout-process_box'>
                <img src='http://localhost/kontaktne-lece.eu/wp-content/uploads/2020/07/checkout_01.png' />
                Košarica<img class='checkout-process__arrow' src='http://localhost/kontaktne-lece.eu/wp-content/uploads/2020/07/icon-arrow.png' >
                <img src='http://localhost/kontaktne-lece.eu/wp-content/uploads/2020/07/checkout_02.png' />
                Dostava i plačanje<img class='checkout-process__arrow' src='http://localhost/kontaktne-lece.eu/wp-content/uploads/2020/07/icon-arrow.png' >
                <img src='http://localhost/kontaktne-lece.eu/wp-content/uploads/2020/07/checkout_03.png' />
                Naručeno!
            </div>
       <?php endif;
       if ( is_cart() ): ?>
        <div class='checkout-process_box'>
            <img src='http://localhost/kontaktne-lece.eu/wp-content/uploads/2020/07/cart_01.png' />
            Košarica<img class='checkout-process__arrow' src='http://localhost/kontaktne-lece.eu/wp-content/uploads/2020/07/icon-arrow.png' >
            <img src='http://localhost/kontaktne-lece.eu/wp-content/uploads/2020/07/cart_02.png' />
            Dostava i plačanje<img class='checkout-process__arrow' src='http://localhost/kontaktne-lece.eu/wp-content/uploads/2020/07/icon-arrow.png' >
            <img src='http://localhost/kontaktne-lece.eu/wp-content/uploads/2020/07/cart_03.png' />
            Naručeno!
       </div>
       <?php endif;
    }

    add_action('storefront_page', 'ordering_process');

    function cart_head(){ 
        if( !is_user_logged_in() ):?>
            <div class='cart-head'>
                <a class='button__continue-shopping'>Nastavi kupnju</a>
                <p class='cart__head-text'>Prijavite se kako bi ostvarili bonus za narudžbu</p>
            </div>
        <?php else: ?>
            <div class='cart-head'>
                <a class='button__continue-shopping'>Nastavi kupnju</a>
                <p class='cart__head-text'>Svaka peta narudžba vam donosi poklon paket!</p>
            </div>
        <?php endif;
    }

    add_action('woocommerce_before_cart', 'cart_head');

    function proceed_to_checkout(){?>
        <div class='button__continue-shopping_wrapper'>
            <div>
                <p class='cart-total__amount'>Ukupno: 800 kn</p>
                <a class="button__continue-shopping">Plačanje</a>
            </div>
    </div>
    <?php }

    add_action('woocommerce_after_cart_table', 'proceed_to_checkout' );
    
    //Upsales modal

    function upsales_modal(){
        if( is_product_category() || is_product() ) include('templates/upsales-modal.php');
    }

    add_action('storefront_before_footer', 'upsales_modal');


    //My Account

    function remove_my_account_links( $menu_links ){
     
        unset( $menu_links['dashboard'] ); 
     
        return $menu_links;
    }

    add_filter ( 'woocommerce_account_menu_items', 'remove_my_account_links' );
    
    function add_my_account_reminders_link( $menu_links ){
        $new = array( 'reminders' => 'Moji podsjetnici' );
 
        $menu_links = array_slice( $menu_links, 0, 1, true ) 
        + $new 
        + array_slice( $menu_links, 1, NULL, true );
    
    
        return $menu_links;
    }

    add_filter ( 'woocommerce_account_menu_items', 'add_my_account_reminders_link' );

    function register_my_account_reminders_endpoint(){
        add_rewrite_endpoint( 'reminders', EP_PAGES );
    }

    add_action('init', 'register_my_account_reminders_endpoint');

    function add_my_account_reminders_endpoint(){
        include('templates/reminders-template.php');
    }      

    add_action( 'woocommerce_account_reminders_endpoint', 'add_my_account_reminders_endpoint', 10, 4 );

    function my_profile_navigation_wrapper_start(){ ?>
        <div class='my-profile__navigation-wrapper'>
            <span class='navigation-wrapper__title'>Moj profil</span>
    <?php }

    add_action( 'woocommerce_before_account_navigation', 'my_profile_navigation_wrapper_start' );

    function my_profile_navigation_wrapper_end(){ ?>
        </div>
    <?php }

    add_action( 'woocommerce_after_account_navigation', 'my_profile_navigation_wrapper_end' );
  
?>
