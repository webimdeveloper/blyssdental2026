<?php
/**
 * Blyss functions and definitions
 *
 * @package WordPress
 * @subpackage Blyss
 * @since Blyss 1.0
 */

require_once 'author_widget.php';

add_theme_support( 'post-thumbnails' );

add_action(
    'after_setup_theme',
    function() {
        add_theme_support( 'html5', [ 'script', 'style' ] );
    }
);

register_nav_menu('header', 'Header menu');
register_nav_menu('footer', 'Footer menu');

class Header_Nav_Menu_Walker extends Walker_Nav_Menu {

    // add classes to ul sub-menus
    function start_lvl( &$output, $depth = 0, $args = null ) {
        // depth dependent classes
        $indent = ( $depth > 0  ? str_repeat( "\t", $depth ) : '' ); // code indent
        $display_depth = ( $depth + 1); // because it counts the first submenu as 0
        $classes = array(
            ( $display_depth > 0 ? 'dropdown-menu' : '' ),
        );
        $attributes = array(
            
        );
        $class_names = implode( ' ', $classes );
        $attributes = implode( ' ', $attributes );

        // build html
        $output .= "\n" . $indent . '<div class="' . $class_names . '"' . $attributes . '>' . "\n";
    }

    public function end_lvl( &$output, $depth = 0, $args = null ) {
        if ( isset( $args->item_spacing ) && 'discard' === $args->item_spacing ) {
            $t = '';
            $n = '';
        } else {
            $t = "\t";
            $n = "\n";
        }
        $indent  = str_repeat( $t, $depth );
        $output .= "$indent</div>{$n}";
    }

    // add main/sub classes to li's and links
    function start_el( &$output, $item, $depth = 0, $args = NULL, $id = 0 ) {
        global $wp_query;
        $indent = ( $depth > 0 ? str_repeat( "\t", $depth ) : '' ); // code indent

        // depth dependent classes
        $depth_classes = array(
            ( $depth == 0 ? 'nav-item' : 'dropdown-menu' ),
            ( in_array('menu-item-has-children', $item->classes) ? 'dropdown' : '' ),
        );
        $depth_class_names = esc_attr( implode( ' ', $depth_classes ) );

        // passed classes
        $class_names = '';

        // build html
        if ($depth == 0) {
            $output .= $indent . '<div class="' . $depth_class_names . ' ' . $class_names . '">';
        } else if ($depth == 2) {
            $output .= $indent . '<div class="dropdown-child-items">';
        }
        else {
            $output .= $indent . '<div class="dropdown-sub-items">';
        }

        // link attributes
        $attributes  = ! empty( $item->attr_title ) ? ' title="'  . esc_attr( $item->attr_title ) .'"' : '';
        $attributes .= ! empty( $item->target )     ? ' target="' . esc_attr( $item->target     ) .'"' : '';
        $attributes .= ! empty( $item->xfn )        ? ' rel="'    . esc_attr( $item->xfn        ) .'"' : '';
        $attributes .= ! empty( $item->url )        ? ' href="'   . esc_attr( $item->url        ) .'"' : '';
        $attributes .= ' class="' . ( $depth > 0 ? 'dropdown-item' : 'nav-link' ) . ( in_array('menu-item-has-children', $item->classes) ? ' dropdown-toggle' : '' ) . '"';
        $attributes .= ' itemprop="url"';
        $attributes .= (in_array('menu-item-has-children', $item->classes) ? ' aria-haspopup="true" aria-expanded="false"' : '');

        $item_output = sprintf( '%1$s<a%2$s>%3$s%4$s%5$s</a>%6$s',
            $args->before,
            $attributes,
            $args->link_before,
            apply_filters( 'the_title', $item->title, $item->ID ),
            $args->link_after,
            $args->after
        );

        // build html
        $output .= apply_filters( 'walker_nav_menu_start_el', $item_output, $item, $depth, $args );
    }

    public function end_el( &$output, $item, $depth = 0, $args = null ) {
        if ( isset( $args->item_spacing ) && 'discard' === $args->item_spacing ) {
            $t = '';
            $n = '';
        } else {
            $t = "\t";
            $n = "\n";
        }
        if ($depth == 0) {
            $output .= "</div>{$n}";
        }  else {
            $output .= "</div>{$n}";
        }
    }
}

class Footer_Nav_Menu_Walker extends Walker_Nav_Menu {

    // add classes to ul sub-menus
    function start_lvl( &$output, $depth = 0, $args = null ) {
        // depth dependent classes
        $indent = ( $depth > 0  ? str_repeat( "\t", $depth ) : '' ); // code indent

        // build html
        $output .= "\n" . $indent . '<div class="nav-list">' . "\n";
    }

    public function end_lvl( &$output, $depth = 0, $args = null ) {
        if ( isset( $args->item_spacing ) && 'discard' === $args->item_spacing ) {
            $t = '';
            $n = '';
        } else {
            $t = "\t";
            $n = "\n";
        }
        $indent  = str_repeat( $t, $depth );
        $output .= "$indent</div>{$n}";
    }

    // add main/sub classes to li's and links
    function start_el( &$output, $item, $depth = 0, $args = NULL, $id = 0 ) {
        $indent = ( $depth > 0 ? str_repeat( "\t", $depth ) : '' ); // code indent

        // build html
        $output .= $indent;

        // link attributes
        $attributes  = ! empty( $item->attr_title ) ? ' title="'  . esc_attr( $item->attr_title ) .'"' : '';
        $attributes .= ! empty( $item->target )     ? ' target="' . esc_attr( $item->target     ) .'"' : '';
        $attributes .= ! empty( $item->xfn )        ? ' rel="'    . esc_attr( $item->xfn        ) .'"' : '';
        $attributes .= ! empty( $item->url )        ? ' href="'   . esc_attr( $item->url        ) .'"' : '';

        if ($depth > 0) {
            $item_output = sprintf('%1$s<a%2$s>%3$s%4$s%5$s</a>%6$s',
                $args->before,
                $attributes,
                $args->link_before,
                apply_filters('the_title', $item->title, $item->ID),
                $args->link_after,
                $args->after
            );
        } else {
            $item_output = '';
        }

        // build html
        $output .= apply_filters( 'walker_nav_menu_start_el', $item_output, $item, $depth, $args );
    }

    public function end_el( &$output, $item, $depth = 0, $args = null ) {
        if ( isset( $args->item_spacing ) && 'discard' === $args->item_spacing ) {
            $t = '';
            $n = '';
        } else {
            $t = "\t";
            $n = "\n";
        }
        $output .= "{$n}";
    }
}

add_action('admin_menu', 'add_plugin_page');

function add_plugin_page(){
    add_options_page( 'Blyss Settings', 'Blyss Settings', 'manage_options', 'blyss_settings', 'blyss_settings_options_page_output' );
}

function blyss_settings_options_page_output(){
    ?>
    <div class="wrap">
        <h2><?php echo get_admin_page_title() ?></h2>

        <form action="options.php" method="POST">
            <?php
            settings_fields( 'blyss_option_group' );
            do_settings_sections( 'blyss_settings_page' );
            submit_button();
            ?>
        </form>
    </div>
    <?php
}

add_action('admin_init', 'plugin_settings');

function plugin_settings(){
    register_setting( 'blyss_option_group', 'blyss_option', 'blyss_sanitize_callback' );

    add_settings_section( 'blyss_section_id', 'Main Settings', '', 'blyss_settings_page' );

    $options = array(
        'tel' => 'Phone',
        'email' => 'Email',
        'addr' => 'Address',
        'city' => 'City',
        'monday_thursday' => 'Mondays and Thursdays',
        'tuesday_wednesday' => 'Tuesdays and Wednesdays',
        'fridays' => 'Fridays',
        'appointment_link' => 'Appointment Link',
        'map_lat' => 'Map Latitude',
        'map_long' => 'Map Longitude',
    );

    foreach ($options as $id => $option) {
        add_settings_field('blyss_' . $id, $option, 'fill_field', 'blyss_settings_page', 'blyss_section_id', array(
            'id' => 'blyss_' . $id,
            'option_name' => $id
        ) );
    }
}

function fill_field($arg){
    $options = get_option('blyss_option');
    $val = $options ? $options[$arg['option_name']] : null;
    ?>
    <input type="text" name="blyss_option[<?=$arg['option_name'];?>]" value="<?php echo esc_attr( $val ) ?>" id="<?=$arg['id'];?>" />
    <?php
}

## Очистка данных
function sanitize_callback( $options ){
    return $options;
}

function custom_post_type() {

    // Testimonials custom type
    $labels = array(
        'name'                => 'Testimonials',
        'singular_name'       => 'Testimonial',
        'menu_name'           => 'Testimonials',
        'all_items'           => 'All Testimonials',
        'view_item'           => 'View Testimonial',
        'add_new_item'        => 'Add New Testimonial',
        'add_new'             => 'Add New',
        'edit_item'           => 'Edit Testimonial',
        'update_item'         => 'Update Testimonial',
        'search_items'        => 'Search Testimonials',
        'not_found'           => 'Not Found',
        'not_found_in_trash'  => 'Not found in Trash',
    );

    $args = array(
        'label'               => 'testimonials',
        'description'         => 'Testimonials about Blyss for Home page',
        'labels'              => $labels,
        'supports'            => array( 'title', 'thumbnail', 'editor', ),
        'hierarchical'        => false,
        'public'              => true,
        'show_ui'             => true,
        'show_in_menu'        => true,
        'show_in_nav_menus'   => false,
        'show_in_admin_bar'   => true,
        'menu_position'       => 5,
        'can_export'          => true,
        'has_archive'         => true,
        'exclude_from_search' => true,
        'publicly_queryable'  => false,
        'capability_type'     => 'post',
        'show_in_rest'        => true,

    );

    register_post_type( 'testimonials', $args );

    // Youtube custom type
    $labels = array(
        'name'                => 'Videos',
        'singular_name'       => 'Video',
        'menu_name'           => 'Videos',
        'all_items'           => 'All Videos',
        'view_item'           => 'View Video',
        'add_new_item'        => 'Add New Video',
        'add_new'             => 'Add New',
        'edit_item'           => 'Edit Video',
        'update_item'         => 'Update Video',
        'search_items'        => 'Search Videos',
        'not_found'           => 'Not Found',
        'not_found_in_trash'  => 'Not found in Trash',
    );

    $args = array(
        'label'               => 'videos',
        'description'         => 'Youtube videos about Blyss for Resource page',
        'labels'              => $labels,
        'supports'            => array( 'title', 'author', 'custom-fields', ),
        'hierarchical'        => false,
        'public'              => true,
        'show_ui'             => true,
        'show_in_menu'        => true,
        'show_in_nav_menus'   => false,
        'show_in_admin_bar'   => true,
        'menu_position'       => 5,
        'can_export'          => true,
        'has_archive'         => true,
        'exclude_from_search' => true,
        'publicly_queryable'  => false,
        'capability_type'     => 'post',
        'show_in_rest'        => true,

    );

    register_post_type( 'videos', $args );

}

add_action( 'init', 'custom_post_type', 0 );

function cspd_call_after_for_submit( $contact_data ){
    // Our code will goes here
    if($_POST['_wpcf7'] == 100)
    {
        $url="https://flow.zoho.com/761578113/flow/webhook/incoming?zapikey=1001.7f8c2e9765321933bae88a5768ae8162.1107bc420fa162b6a8bf546aea3f6982&isdebug=false";
        $response = wp_remote_post( $url, array(
            'method'      => 'POST',
            'timeout'     => 45,
            'redirection' => 5,
            'httpversion' => '1.0',
            'blocking'    => true,
            'headers'     => array(),
            'body'        => array(
                'firstname' => $_POST['contact-firstname'],
                'lastname' => $_POST['contact-lastname'],
                'phone' => $_POST['contact-phone'],
                'email' => $_POST['contact-email'],
                'postcode' => $_POST['contact-code'],
                'comments' => $_POST['contact-comment']
            ),
            'cookies'     => array()
        ));
    }
    
}

add_action( 'wpcf7_before_send_mail', 'cspd_call_after_for_submit' );
function book_appointment_trigger_zoho( $contact_data ){
    // Our code will goes here
    if($_POST['_wpcf7'] == 229)
    {
        $url="https://flow.zoho.com/761578113/flow/webhook/incoming?zapikey=1001.056b289f749868a777b145561a5335c2.09b7f8801096752f023dc33535a520a2&isdebug=false";
        $response = wp_remote_post( $url, array(
            'method'      => 'POST',
            'timeout'     => 45,
            'redirection' => 5,
            'httpversion' => '1.0',
            'blocking'    => true,
            'headers'     => array(),
            'body'        => array(
                'firstname' => $_POST['firstname'],
                'lastname' => $_POST['lastname'],
                'phone' => $_POST['phone'],
                'email' => $_POST['email'],
                'appointment_type' => $_POST['reason'],
                'description' => $_POST['comment']
            ),
            'cookies'     => array()
        ));
    }
    
}

add_action( 'wpcf7_before_send_mail', 'book_appointment_trigger_zoho' );
add_filter('wpcf7_spam', '__return_false');

add_action('init','blyss_register_param');
function blyss_register_param() {
    global $wp;
    $wp->add_query_var('category');
    $wp->add_query_var('form');
}

/*add_action('wp_print_scripts', function () {
    wp_dequeue_script('google-recaptcha');
    wp_dequeue_script('wpcf7-recaptcha');
});*/

/*function cf7_defer_recaptcha() {
    wp_enqueue_script('cf7recap', get_template_directory_uri() . '/assets/js/recaptcha.js', array('jquery'), '1.0', true);
    wp_enqueue_script('wpcf7-recaptcha', wpcf7_plugin_url( 'modules/recaptcha/index.js' ), array('cf7recap'), WPCF7_VERSION, true);
}*/
//add_action('get_footer', 'cf7_defer_recaptcha');

// ajax
add_action( 'wp_enqueue_scripts', 'blyssajax_data', 99 );
function blyssajax_data() {
    global  $cat;
    $page_info = get_post();

    wp_dequeue_style( 'wp-block-library' );
    
    wp_enqueue_script('common-script', get_template_directory_uri() . '/assets/js/common.js', array(), '', true);

    //if ($page_info->ID == 313 && $page_info->post_type == 'page' || is_category()) {
    if (is_page_template('category.php')) {

        //wp_enqueue_style('blyss-modal-video-style', get_template_directory_uri() . '/modal-video.min.css', array(), '', true);

        wp_enqueue_script('blyss-owlcarousel', 'https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js', array(), '', true);
        wp_enqueue_script('blyss-modal-video', get_template_directory_uri() . '/assets/js/jquery-modal-video.min.js', array(), '1.0', true);
        wp_enqueue_script('blyss-ajax-request', get_template_directory_uri() . '/assets/js/custom-script.js', array('blyss-owlcarousel', 'blyss-modal-video'), '1.0', true);

        $category = 'all';
        //if ($cat) {
        if (get_query_var('category')) {
            //$category_info = get_category($cat);
            $category = get_query_var('category');
            //$category = $category_info->slug;
        }
        wp_localize_script('blyss-ajax-request', 'blyssajax',
            array(
                'url' => admin_url('admin-ajax.php'),
                'category' => $category
            )
        );
    }

    if (get_post_type() === 'post') {

        wp_enqueue_script('blyss-scrolltable', get_template_directory_uri() . '/assets/js/jquery.scroltable.js', array('jquery'), '1.0', true);
        wp_enqueue_script('blyss-post-script', get_template_directory_uri() . '/assets/js/post-script.js', array('blyss-scrolltable'), '1.0', true);
        wp_enqueue_script('blyss-common-script', get_template_directory_uri() . '/assets/js/script.js', array('jquery'), '1.0', true);

    }
}

add_action( 'wp_ajax_category_posts', 'category_posts_callback' );
add_action( 'wp_ajax_nopriv_category_posts', 'category_posts_callback' );

function category_posts_callback() {
    $category = !empty($_POST['category']) ? htmlspecialchars($_POST['category']) : '';
    $offset = isset($_POST['offset']) ? intval($_POST['offset']) : 0;

    $args = array(
        'numberposts' => 6,
        'orderby'     => 'date',
        'order'       => 'DESC',
        'post_type'   => 'post',
    );
    if (empty($category)) {
        $category = 'all';
    }
    if ($category != 'all') {
        $args['category_name'] = $category;
    }
    if ($offset) {
        $args['offset'] = $offset;
    }

    $my_posts = get_posts( $args );

    $results = array();
    foreach ($my_posts as $my_post) {
        $categories = get_categories( [
            'taxonomy'     => 'category',
            'type'         => 'post',
            'object_ids'   => $my_post->ID,
        ] );
        $cats = array();
        foreach ($categories as $category_item) {
            $cats[] = $category_item->name;
        }
        $results['posts'][] = array(
            'image'         => get_post_featured_image( $my_post, 'full'),
            'title'         => $my_post->post_title,
            'excerpt'       => $my_post->post_excerpt,
            'link'          => get_permalink( $my_post->ID ),
            'categories'    => $cats,
        );
    }
    $count = count($my_posts) + ($offset ? $offset : 0);
    if (isset($args['category_name'])) {
        $category_info = get_category_by_slug($args['category_name']);
        if ($category_info->count > $count) {
            $results['next'] = true;
        }
    } else {
        $counts = wp_count_posts();
        if ($counts->publish > $count) {
            $results['next'] = true;
        }
    }
    wp_reset_query();

    echo json_encode($results);

    wp_die();
}

function blyss_widgets_init() {

    register_widget( 'about_author' );

    register_sidebar( array(
        'name'          => 'Post right sidebar',
        'id'            => 'post_right_1',
        'before_widget' => '<div class="side_bar_block">',
        'after_widget'  => '</div>',
        'before_title'  => '<h2>',
        'after_title'   => '</h2>',
    ) );
}
add_action( 'widgets_init', 'blyss_widgets_init' );

function get_post_featured_image($post = null, $size) {
    $post_thumbnail_id = get_post_thumbnail_id( $post );

    if ( ! $post_thumbnail_id ) {
        return '';
    }

    $post_image = get_post($post_thumbnail_id);

    if (! $post_image) {
        return '';
    }

    $output = get_the_post_thumbnail( $post->ID, $size, array(
        'title'   => $post_image->post_title,
    ) );

    return  $output;
}

// add nofollow for all categories links
add_filter('wp_list_categories', 'add_rel_nofollow_to_wp_list_categories');

function add_rel_nofollow_to_wp_list_categories($a) {
    return str_replace('<a ', '<a rel="nofollow" ', $a);
}

add_filter('style_loader_tag', 'blyss_remove_type_attr', 10, 2);
add_filter('script_loader_tag', 'blyss_remove_type_attr', 10, 2);

function blyss_remove_type_attr($tag, $handle) {
    return preg_replace( "/ type=['\"]text\/(javascript|css)['\"]/", '', $tag );
}

remove_filter('widget_text_content', 'wpautop');
//remove_filter( 'the_content', 'wpautop' );

function cc_mime_types($mimes) {
    $mimes['svg'] = 'image/svg+xml';
    return $mimes;
  }
add_filter('upload_mimes', 'cc_mime_types');

// Batch Change Canonical URLs
function change_canonical($url) {
    global $post;
    if ( is_front_page() ) {
        return home_url( '/' );
    }
    return 'https://blyssdental.com/' . $post->post_name."/";
}
add_filter( 'wpseo_canonical', 'change_canonical' );


function talk_to_our_team_trigger_zoho( $contact_data ){
    // Our code will goes here
    if($_POST['_wpcf7'] == 374)
    {
        $url="https://flow.zoho.com/761578113/flow/webhook/incoming?zapikey=1001.086ae39e8199707cdd42ca80cba4c136.26f6c4cea3c8d9e0ecd69499610ab120&isdebug=false";
        $response = wp_remote_post( $url, array(
            'method'      => 'POST',
            'timeout'     => 45,
            'redirection' => 5,
            'httpversion' => '1.0',
            'blocking'    => true,
            'headers'     => array(),
            'body'        => array(
                'firstname' => $_POST['userfirstname'],
                'lastname' => $_POST['userlastname'],
                'phone' => $_POST['phone'],
                'email' => $_POST['email'],
                'blogpost' => $_POST['blogpost'],
                'question' => $_POST['comment']
            ),
            'cookies'     => array()
        ));
    }
    
}

add_action( 'wpcf7_before_send_mail', 'talk_to_our_team_trigger_zoho' );