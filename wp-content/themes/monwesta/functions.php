<?php
add_action( 'wp_enqueue_scripts', 'enqueue_parent_styles' );

function enqueue_parent_styles() {
    wp_enqueue_style( 'parent-styles', get_template_directory_uri().'/style.css' );
}

function monwesta_get_template_part($name,$var){

}

//browser console   debugger
/**
 * @param string $txt
 * prints to browser console
 */
function monwesta_console_log($txt = 'FooBar'){

    //$log = Log::getMonolog();
    global $mw_log;

    if (empty($mw_log)) {
        $mw_log = new Monolog\Logger('Testlogger'); //doesn't make any difference
        $mw_log->pushHandler(new Monolog\Handler\BrowserConsoleHandler(\Psr\Log\LogLevel::INFO));
    }

    // add records to the log
    $mw_log->Warning($txt);
    $mw_log->Error($txt);
}

//log into monolog.txt on server
function monwesta_file_log($txt){

    $logger = new  Monolog\Logger('channel-name');
    $logger->pushHandler(new Monolog\Handler\StreamHandler(get_temp_dir().'/monolog.log', Logger::DEBUG));
    $logger->info($txt);
    $logger->warning($txt);
    //$logger->error('This is a log error! ^_^ ');
}

//TODO Loading React Scripts For Slider
function monwesta_load_react(){


    //array_unshift(wp_styles()->queue, 'handle');

    wp_enqueue_style( 'react-css', monwesta_css('react-style.css') );
    array_unshift(wp_styles()->queue, 'react-css');
    wp_enqueue_script('react-script1',monwesta_script('react.min.js'),array(),false,false);
    wp_enqueue_script('react-script2',monwesta_script('react-dom.min.js'),array(),false,false);
    wp_enqueue_script('react-script3',monwesta_script('index-react.min.js'), array(),false,false);
    wp_enqueue_script('react-script4',monwesta_script('app-react.js'), array(),false,true);


}

//class for global  values
class myglobal{
    static $reg;
    static function setvar($name,$val){
        myglobal::$reg[$name]=$val;
    }
    static function  getvar($name){
        return myglobal::$reg[$name];
    }
}


function monwesta_load_needed_assets(){
    //monwesta_console_log( get_stylesheet_directory_uri());
    wp_enqueue_style( 'bootstrap', monwesta_css('bootstrap.min.css' ));
    wp_enqueue_style( 'fontawesome', monwesta_css('fontawesome-all.min.css') );
   // wp_enqueue_style( 'main', monwesta_css('/assets/css/

    wp_enqueue_style( 'oldstyle', monwesta_css('oldstyle.css')  );
    //TODO add js needed
    wp_enqueue_script( 'jquery-js', monwesta_script('jquery-1.12.4.min.js'), array(), wp_get_theme()->get( 'Version' ), false );
    wp_enqueue_script( 'monwesta-js', monwesta_script('monwesta.js'), array(), wp_get_theme()->get( 'Version' ), false);
}
monwesta_load_needed_assets();
monwesta_load_react();
//TODO aditional monwesta functions
/**
 * @param $fname
 * @return string
 * navigates monwesta assets image folder
 */
function monwesta_images($fname){
    return get_stylesheet_directory_uri() . '/assets/images/'.$fname;
}

function monwesta_script($name){
    return get_stylesheet_directory_uri() . '/assets/js/'.$name;
}

function monwesta_css($name){
    return get_stylesheet_directory_uri() . '/assets/css/'.$name;
}

// TODO registering custom blocks
add_action( 'customize_register', 'monwesta_register_theme_customizer' );
/*
 * Register Our Customizer Stuff Here
 * @var $wp_wp_customize WP_Customize_Manager
 *
 */
function monwesta_add_textblock(WP_Customize_Manager &$wp_customize, $settingname, $description, $value, $labelname,$panelname = 'text_blocks',$sectionname = 'main_section' ){
    // Add Footer Text
    // Add section.

   // $varname = 'custom_'.$settingname;
    $wp_customize->add_section( $sectionname.'_'.$settingname , array(
        'title'    => __($description,'genesischild'),
        'panel'    => $panelname,
        'priority' => 10
    ) );

    // Add setting
    $wp_customize->add_setting( $settingname, array(
        'default'           => __( $value, 'genesischild' ),
        'sanitize_callback' =>  function( $text ) {
            return sanitize_text_field( $text );
        }
    ) );
    // Add control
    $wp_customize->add_control( new WP_Customize_Control(
            $wp_customize,
            $sectionname.'_'.$settingname ,
            array(
                'label'    => __( $labelname, 'genesischild' ),
                'section'  => $sectionname.'_'.$settingname ,
                'settings' => $settingname,
                'type'     => 'text'
            )
        )
    );
}
function monwesta_register_theme_customizer( $wp_customize ) {
    // Create custom panel.
    $wp_customize->add_panel( 'text_blocks', array(
        'priority'       => 500,
        'theme_supports' => '',
        'title'          => __( 'Text Blocks', 'genesischild' ),
        'description'    => __( 'Set editable text for certain content.', 'genesischild' ),
    ) );

    monwesta_add_textblock($wp_customize,'set_address','set adress','','address');
    monwesta_add_textblock($wp_customize,'set_email','set email','root@localhost','set email');
    monwesta_add_textblock($wp_customize,'set_fb','set facebook','','set email');
    monwesta_add_textblock($wp_customize,'set_twitter','set twitter','','set twitter');
    monwesta_add_textblock($wp_customize,'set_instagramm','set instagramm','','set instagramm');
    monwesta_add_textblock($wp_customize,'set_telefone','set telephone','','set telephone');

}
function monwesta_text($settingname) {
    if( get_theme_mod( $settingname) != "" ) {
        echo get_theme_mod( $settingname);
    }
    else{
        echo 'error'; // Add you default footer text here
    }

}

//Register custom widgets
/**
 * Register widget areas.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function monwesta_sidebar_registration() {

    // Arguments used in all register_sidebar() calls.
    $shared_args = array(
        'before_title'  => '',
        'after_title'   => '',
        'before_widget' => '',
        'after_widget'  => '',
    );

    // Button
    register_sidebar(
        array_merge(
            $shared_args,
            array(
                'name'        => __( 'Widget For Button', 'monwesta' ),
                'id'          => 'button-1',
                'description' => __( 'Widgets in this area will be displayed in the menu', 'twentytwenty' ),
            )
        )
    );



}

add_action( 'widgets_init', 'monwesta_sidebar_registration' );

//Register custom widget
class My_Widget extends WP_Widget {

    /**
     * Sets up the widgets name etc
     */
    public function __construct() {
        $widget_ops = array(
            'classname' => 'my_widget',
            'description' => 'My Widget is awesome',
        );
        parent::__construct( 'my_widget', 'My Widget', $widget_ops );
    }

    /**
     * Outputs the content of the widget
     *
     * @param array $args
     * @param array $instance
     */
    public function widget( $args, $instance ) {
        // outputs the content of the widget
    }

    /**
     * Outputs the options form on admin
     *
     * @param array $instance The widget options
     */
    public function form( $instance ) {
        // outputs the options form on admin
    }

    /**
     * Processing widget options on save
     *
     * @param array $new_instance The new options
     * @param array $old_instance The previous options
     *
     * @return array
     */
    public function update( $new_instance, $old_instance ) {
        // processes widget options to be saved
    }
}

add_action( 'widgets_init', function(){
    register_widget( 'My_Widget' );
});



/**
 * Register widget areas.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */


add_action( 'after_setup_theme', 'monwesta_parent_override' );
function monwesta_parent_override() {

    unregister_sidebar('sidebar-2');
    /** I have looked for the ID of the sidebar by looking at
     *  the source code in the admin.. and saw the widget's id="sidebar-4"
     */
    $shared_args = array(
        'before_title'  => '<h2 class="widget-title subheading heading-size-3">',
        'after_title'   => '</h2>',
        'before_widget' => '<div class="widget %2$s"><div class="widget-content">',
        'after_widget'  => '</div></div>',
    );

    register_sidebar(array(
        'name' => 'sidebar-2',
        'before_widget' => '<div class="span3">',
        'after_widget' => '</div>',
        'before_title' => '<h6 class="footer-widgets-item">',
        'after_title' => '</h6><hr>',
    ));
}


function monwesta_sidebarr_registration() {

    // Arguments used in all register_sidebar() calls.
    $shared_args = array(
        'before_title'  => '<h2 class="widget-title subheading heading-size-3">',
        'after_title'   => '</h2>',
        'before_widget' => '<div class="widget %2$s"><div class="widget-content">',
        'after_widget'  => '</div></div>',
    );
    unregister_widget('sidebar-1');
    // Footer #2.
    register_sidebar(
        array_merge(
            $shared_args,
            array(
                'name'        => __( 'Footer #2', 'twentytwenty' ),
                'id'          => 'sidebar-2',
                'description' => __( 'Widgets in this area will be displayed in the second column in the footer.', 'twentytwenty' ),
            )
        )
    );

}

add_action( 'widgets_init', 'monwesta_sidebarr_registration' );









?>