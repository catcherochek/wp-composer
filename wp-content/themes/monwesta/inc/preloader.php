<?php
//wp_enqueue_style( 'preloader', monwesta_css('preloader.css') );
//wp_enqueue_script('preloaderjs',monwesta_script('preloader.js'),array(),true,false);
//wp_enqueue_script('simpleParralax','http://jarallax.com/download/jarallax-0.2.4b.min.js',array(),true,true);
//$img = myglobal::getvar('context');
$img = monwesta_images('logo_2699a72404984e13f95c7b934f031f6c_1x.png');
?>

<script>

    (function ($)
        { "use strict"

            /* Preloader */
            $(window).on('load', function () {

                $('#preloader-active').delay(450).fadeOut('slow');
                $('body').delay(450).css({
                    'overflow': 'visible'
                });
            });

        }
    )(jQuery);

</script>

<style>
    /*Preloader*/


    .rotateme {
        -webkit-animation-name: rotateme;
        animation-name: rotateme;
        -webkit-animation-duration: 30s;
        animation-duration: 30s;
        -webkit-animation-iteration-count: infinite;
        animation-iteration-count: infinite;
        -webkit-animation-timing-function: linear;
        animation-timing-function: linear
    }

    @keyframes rotateme {
        from {
            -webkit-transform: rotate(0deg);
            transform: rotate(0deg)
        }

        to {
            -webkit-transform: rotate(360deg);
            transform: rotate(360deg)
        }
    }

    @-webkit-keyframes rotateme {
        from {
            -webkit-transform: rotate(0deg)
        }

        to {
            -webkit-transform: rotate(360deg)
        }
    }

    .preloader {
        background-color: #f7f7f7;
        width: 100%;
        height: 100%;
        position: fixed;
        top: 0;
        left: 0;
        right: 0;
        bottom: 0;
        z-index: 999999;
        -webkit-transition: 0.6s;
        -o-transition: 0.6s;
        transition: 0.6s;
        margin: 0 auto;
    }
    .preloader .preloader-circle {
        width: 100px;
        height: 100px;
        position: relative;
        border-style: solid;
        border-width: 3px;
        border-top-color: #ff656a;
        border-bottom-color: transparent;
        border-left-color: transparent;
        border-right-color: transparent;
        z-index: 10;
        border-radius: 50%;
        -webkit-box-shadow: 0 1px 5px 0 rgba(35, 181, 185, 0.15);
        box-shadow: 0 1px 5px 0 rgba(35, 181, 185, 0.15);
        background-color: #ffffff;
        -webkit-animation: zoom;
        -webkit-animation-duration: 3s;
        -webkit-animation-iteration-count: 2;
        -webkit-animation-timing-function: linear;
        -webkit-animation-fill-mode: forwards;


        animation: zoom 2000ms infinite ease;
        -webkit-transition: 0.6s;
        -o-transition: 0.6s;
        transition: 0.6s;
    }
    .preloader .preloader-circle2 {
        border-top-color: #0078ff;
    }
    .preloader .preloader-img {
        position: absolute;
        top: 50%;
        z-index: 200;
        left: 0;
        right: 0;
        margin: 0 auto;
        text-align: center;
        display: inline-block;
        -webkit-transform: translateY(-50%);
        -ms-transform: translateY(-50%);
        transform: translateY(-50%);
        padding-top: 6px;
        -webkit-transition: 0.6s;
        -o-transition: 0.6s;
        transition: 0.6s;
    }
    .preloader .preloader-img img {
        max-width: 80px;
        display: inline-block;
    }
    .preloader .pere-text strong {
        font-weight: 800;
        color: #dca73a;
        text-transform: uppercase;
    }

    @-webkit-keyframes zoom {
        0% {
            -webkit-transform: rotate(0deg);
            -moz-transform: rotate(0deg);
            -ms-transform: rotate(0deg);
            -o-transform: rotate(0deg);
            transform: rotate(0deg);

            -webkit-transition: 0.6s;
            -o-transition: 0.6s;
            transition: 0.6s;
        }
        100% {
            -webkit-transform: rotate(360deg);
            -moz-transform: rotate(360deg);
            -ms-transform: rotate(360deg);
            -o-transform: rotate(360deg);
            transform: rotate(360deg);


            -webkit-transition: 0.6s;
            -o-transition: 0.6s;
            transition: 0.6s;
        }
    }
    @keyframes zoom {
        0% {
            -webkit-transform: rotate(0deg);
            -moz-transform: rotate(0deg);
            -ms-transform: rotate(0deg);
            -o-transform: rotate(0deg);
            transform: rotate(0deg);
            -webkit-transition: 0.6s;
            -o-transition: 0.6s;
            transition: 0.6s;
        }
        100% {
            -webkit-transform: rotate(360deg);
            -moz-transform: rotate(360deg);
            -ms-transform: rotate(360deg);
            -o-transform: rotate(360deg);
            transform: rotate(360deg);
            -webkit-transition: 0.6s;
            -o-transition: 0.6s;
            transition: 0.6s;
        }
    }

    /*# sourceMappingURL=preloader.css.map */



</style>


 <!-- Preloader Start -->
        <div id="preloader-active" >
            <div class="preloader d-flex align-items-center justify-content-center">
                <div class="preloader-inner position-relative">
                    <div class="preloader-circle"></div>
                    <div class="preloader-img pere-text">
                        <img src="<?php echo $img; ?>" alt="">
                    </div>
                </div>
            </div>
        </div>
  <!-- Preloader End -->

