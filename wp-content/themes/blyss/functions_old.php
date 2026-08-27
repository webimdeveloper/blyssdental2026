<?php
/**
 * Blyss functions and definitions
 *
 * Sets up the theme and provides some helper functions, which are used
 * in the theme as custom template tags. Others are attached to action and
 * filter hooks in WordPress to change core functionality.
 *
 * When using a child theme you can override certain functions (those wrapped
 * in a function_exists() call) by defining them first in your child theme's
 * functions.php file. The child theme's functions.php file is included before
 * the parent theme's file, so the child theme functions would be used.
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 * @link https://developer.wordpress.org/themes/advanced-topics/child-themes/
 *
 * Functions that are not pluggable (not wrapped in function_exists()) are instead attached
 * to a filter or action hook.
 *
 * For more information on hooks, actions, and filters, @link https://developer.wordpress.org/plugins/
 *
 * @package WordPress
 * @subpackage Blyss
 * @since Blyss 1.0
 */

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
            ( $display_depth > 0 ? ' aria-labelledby="dropdown01"' : '' ),
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
        //var_dump($item);
        global $wp_query;
        $indent = ( $depth > 0 ? str_repeat( "\t", $depth ) : '' ); // code indent

        // depth dependent classes
        $depth_classes = array(
            ( $depth == 0 ? 'nav-item' : 'dropdown-menu' ),
            ( in_array('menu-item-has-children', $item->classes) ? 'dropdown' : '' ),
        );
        $depth_class_names = esc_attr( implode( ' ', $depth_classes ) );

        // passed classes
        //$classes = empty( $item->classes ) ? array() : (array) $item->classes;
        //$class_names = esc_attr( implode( ' ', apply_filters( 'nav_menu_css_class', array_filter( $classes ), $item ) ) );
        $class_names = '';

        // build html
        if ($depth == 0) {
            $output .= $indent . '<div class="' . $depth_class_names . ' ' . $class_names . '">';
        } else {
            $output .= $indent;
        }

        // link attributes
        $attributes  = ! empty( $item->attr_title ) ? ' title="'  . esc_attr( $item->attr_title ) .'"' : '';
        $attributes .= ! empty( $item->target )     ? ' target="' . esc_attr( $item->target     ) .'"' : '';
        $attributes .= ! empty( $item->xfn )        ? ' rel="'    . esc_attr( $item->xfn        ) .'"' : '';
        $attributes .= ! empty( $item->url )        ? ' href="'   . esc_attr( $item->url        ) .'"' : '';
        $attributes .= ' class="' . ( $depth > 0 ? 'dropdown-item' : 'nav-link' ) . ( in_array('menu-item-has-children', $item->classes) ? ' dropdown-toggle' : '' ) . '"';
        $attributes .= (in_array('menu-item-has-children', $item->classes) ? ' id="dropdown01" aria-haspopup="true" aria-expanded="false" itemprop="name"' : '');

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
        } else {
            $output .= "{$n}";
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

/**
 * Создаем страницу настроек плагина
 */
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
            settings_fields( 'blyss_option_group' );     // скрытые защитные поля
            do_settings_sections( 'blyss_settings_page' ); // секции с настройками (опциями). У нас она всего одна 'section_id'
            submit_button();
            ?>
        </form>
    </div>
    <?php
}

/**
 * Регистрируем настройки.
 * Настройки будут храниться в массиве, а не одна настройка = одна опция.
 */
add_action('admin_init', 'plugin_settings');
function plugin_settings(){
    // параметры: $option_group, $option_name, $sanitize_callback
    register_setting( 'blyss_option_group', 'blyss_option', 'blyss_sanitize_callback' );

    // параметры: $id, $title, $callback, $page
    add_settings_section( 'blyss_section_id', 'Main Settings', '', 'blyss_settings_page' );

    $options = array(
        'tel' => 'Phone',
        'email' => 'Email',
        'addr' => 'Address',
        'city' => 'City',
        'weekdays_hours' => 'Weekdays Hours',
        'Saturdays' => 'Saturdays',
        'appointment_link' => 'Appointment Link',
        'map_lat' => 'Map Latitude',
        'map_long' => 'Map Longitude',
    );

    // параметры: $id, $title, $callback, $page, $section, $args
    foreach ($options as $id => $option) {
        add_settings_field('blyss_' . $id, $option, 'fill_field', 'blyss_settings_page', 'blyss_section_id', array(
            'id' => 'blyss_' . $id,
            'option_name' => $id
        ) );
    }
    //add_settings_field('blyss_phone', 'Phone', 'fill_field', 'blyss_settings_page', 'blyss_section_id' );
    //add_settings_field('primer_field2', 'Другая опция', 'fill_field', 'blyss_settings_page', 'blyss_section_id' );
}

## Заполняем опцию 1
function fill_field($arg){
    $options = get_option('blyss_option');
    $val = $options ? $options[$arg['option_name']] : null;
    ?>
    <input type="text" name="blyss_option[<?=$arg['option_name'];?>]" value="<?php echo esc_attr( $val ) ?>" id="<?=$arg['id'];?>" />
    <?php
}

## Очистка данных
function sanitize_callback( $options ){
    // очищаем
    /*foreach( $options as $name => & $val ){
        if( $name == 'input' )
            $val = strip_tags( $val );

        if( $name == 'checkbox' )
            $val = intval( $val );
    }*/

    //die(print_r( $options )); // Array ( [input] => aaaa [checkbox] => 1 )

    return $options;
}