<?php
//register css

/*
* Small frame  with thumb, require bootstrap
 * */

//wp_enqueue_style( 'parralax', monwesta_css('parralaxstripe.css') );

if ( ! wp_script_is( 'Parralax', 'enqueued' )) {
    //Enqueue
    wp_enqueue_script('Parralax',monwesta_script('parallax.min.js'),array(),true,true);
    //wp_enqu
    add_action('wp_footer', 'wpshout_action_example');
    function wpshout_action_example() {
       //monwesta_console_log('logget');
    }
}
extract(myglobal::getvar('context'), EXTR_PREFIX_ALL, "par");
//wp_enqueue_script('simpleParralax','http://jarallax.com/download/jarallax-
if (!isset($par_height)){
    $par_height = 200;
}


?>

<style>


</style>

<div class="parallax-window d-none d-sm-block" data-speed="<?php echo $par_speed;?>" data-parallax="scroll"  style="height: <?php echo $par_height; ?>px" data-image-src="<?php  echo $par_img;?>"></div>

