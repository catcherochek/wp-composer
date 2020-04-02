<?php
/**
 * Template Name: Monwesta Main Page Template
 * Template Post Type: post, page
 *
 * @package WordPress
 * @subpackage Monwesta
 * @since 1.0
 */
get_header();
?>




<main id="site-content" role="main">
    <div id="app-react"></div>
    <?php
        $context = array(
                'values'=> array(
                        ['img'=>'2020-square-2.png',
                            'text'=>'Imatext',
                            'title'=>'description'],
                        ['img'=>'regal1.jpg',
                            'text'=>'Imatext',
                            'title'=>'description'],
                        ['img'=>'regal2.jpg',
                            'text'=>'Imatext',
                            'title'=>'description'],
                        ['img'=>'regal3.webp',
                            'text'=>'Imatext',
                            'title'=>'description',
                            'href'=>'#',
                            'href_text'=>'hreftext',
                            'fb_href'=>'https:/\/\www.facebook.com',
                            'tw_href'=>'https:/\/\www.twitter.com',
                            'in_href'=>'https:/\/\www.instagram.com']),
                'col'=> '4'
        );
        myglobal::setvar('context',$context);

        get_template_part('inc/thumbs');?>
<br/>



    <?php

    myglobal::setvar('context',array('img'=>monwesta_images('back6.jpg'),
                                           'speed'=>0.9));
    get_template_part('inc/parralaxstripe');



    $postss = get_posts( array(
        'meta_query' => array(
            array(
                'key'   => 'show_on_mainpage',
                'value' => 'yes'
            )
        )
    ) );



    myglobal::setvar('context',$postss);

    get_template_part('inc/mediacards');
    echo ' </br>';

   // myglobal::setvar('context',monwesta_images('back1.jpg'));
   // get_template_part('inc/parralaxstripe');

    wp_reset_query();


    myglobal::setvar('context',array('img'=>monwesta_images('back1.jpg'),
                   'speed'=>0.9));
    get_template_part('inc/parralaxstripe');

    ?>




    </div>

	<?php

	if ( have_posts() ) {

		while ( have_posts() ) {
			the_post();

			get_template_part( 'template-parts/content', get_post_type() );
		}
	}

	?>



</main><!-- #site-content -->



<?php get_template_part( 'template-parts/footer-menus-widgets' ); ?>



<?php get_footer(); ?>
