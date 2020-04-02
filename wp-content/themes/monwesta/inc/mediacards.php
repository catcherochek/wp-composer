<?php
//register css

/*
 *
 *
 *  */
//
wp_enqueue_style( 'mediacards', monwesta_css('mediacards.css') );
$mediacards = myglobal::getvar('context');
//Bootstrap
//ACF




?>
<div class ="mediacard-wrapper">

<?php foreach($mediacards as $post):
    $fields = get_fields($post->ID);?>

        <div class="cont col-xl-3 col-sm-6 col-xs-3 ">
            <div class="service-box">
                <div class="service-box-icon">
                    <img  src="<?php echo $fields['mp_icon'];?>">
                </div>
                <div class="service-box-title">
                    <h5><?php echo $fields['mp_title'];?></h5>
                </div>
                <div class="service-box-content">
                    <?php echo $fields['mp_desc'];?>
                </div>
                <div class="service-box-button">
                    <a href="<?php echo $post->guid;?>">Click here</a>
                </div>
            </div>
        </div>
<?php endforeach;?>
</div>