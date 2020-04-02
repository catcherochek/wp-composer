<?php
//register css

/*
* Small frame  with thumb, require bootstrap
 * */

wp_enqueue_style( 'thumbs', monwesta_css('thumb.css') );
extract(myglobal::getvar('context'),EXTR_PREFIX_ALL,'thumbs');
$col = (int)((12-1) / $thumbs_col);
//monwesta_console_log($col.' '.$thumbs_col);
?>
<div class="row px-auto" style="justify-content: center;">

    <?php foreach ($thumbs_values as $key=>$val){?>
        <div class="col-md-<?php echo $col; ?> col-sm-5 col-mx-10 thumb">
            <div class="team-member">
                <div class="team-img">
                    <img src="<?php echo monwesta_images($val['img']);?>" alt="team member" class="img-responsive">
                </div>
                <div class="team-hover">
                    <div class="desk">
                        <h4><?php echo $val['title']?></h4>
                        <p><?php echo $val['text']?></p>
                        <a href="<?php echo $val['href']?>"><?php echo $val['href_text']?></a>
                    </div>
                    <div class="s-link">
                       <?php if (isset($val['fb_href'])) {?> <a href="<?php echo $val['fb_href']; ?>>"><i class="fab fa-facebook"></i></a><?php }?>
                       <?php if (isset($val['tw_href'])) {?> <a href="<?php echo $val['tw_href']; ?>"><i class="fab fa-twitter"></i></a><?php }?>
                        <?php if (isset($val['in_href'])) {?> <a href="<?php echo $val['in_href']; ?>"><i class="fab fa-instagram"></i></a><?php }?>
                    </div>
                </div>
            </div>
            <div class="team-title">
                <h5>Franklin Harbet</h5>
                <span>HR Manager</span>
            </div>
        </div>
    <?php } ?>

</div>