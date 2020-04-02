<?php
/**
 * Displays the menus and widgets at the end of the main element.
 * Visually, this output is presented as part of the footer element.
 *
 * @package WordPress
 * @subpackage Twenty_Twenty
 * @since 1.0.0
 */

$has_footer_menu = has_nav_menu( 'footer' );
$has_social_menu = has_nav_menu( 'social' );

$has_sidebar_1 = is_active_sidebar( 'sidebar-1' );
$has_sidebar_2 = is_active_sidebar( 'sidebar-2' );?>


    <div class="request-back-area section-padding30" style="margin-top: 50px;">
        <div class="container">
            <div class="row d-flex justify-content-between">
                <div class="col-xl-4 col-lg-5 col-md-5">
                    <div class="request-content">
                        <h3>Заказать звонок</h3>
                        <p>Оставьте номер имя и номер и мы вам перезвоним ASAP</p>
                    </div>
                </div>
                <div class="col-xl-7 col-lg-7 col-md-7">
                    <!-- Contact form Start -->
                    <div class="form-wrapper">
                        <form id="contact-form" action="#" method="POST">
                            <div class="row">
                                <div class="col-lg-6 col-md-6">
                                    <div class="form-box  mb-30">
                                        <input type="text" name="name" placeholder="Name">
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6">
                                    <div class="form-box mb-30">
                                        <input type="text" name="email" placeholder="Phone">
                                    </div>
                                </div>

                                <div class="col-lg-4 col-md-4" style = "margin:20px;">
                                    <button type="submit" class="send-btn">Send</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>     <!-- Contact form End -->
            </div>
        </div>
    </div>

<?php if ( $has_footer_menu || $has_social_menu || $has_sidebar_1 || $has_sidebar_2 ) {?>

    <footer>

        <!-- Footer Start-->
        <div class="footer-area footer-padding">
            <div class="container">
                <div class="row d-flex justify-content-between">


                    <div class="col-xl-4 col-lg-4 col-md-4 col-sm-6">
                        <div class="single-footer-caption mb-50">
                            <div class="single-footer-caption mb-30">


                                <!-- logo -->
                                <div class="footer-logo">

                                    <a href="index.html"><img src="wp-content/uploads/2020/03/logo_2699a72404984e13f95c7b934f031f6c_1x.png" alt=""></a>
                                </div>



                                <div class="footer-tittle">
                                    <div class="footer-pera">
                                        <?php dynamic_sidebar( 'sidebar-2' ); ?>
                                    </div>
                                </div>
                                <!-- social -->



                                <div class="footer-social">
                                    <a href="#"><i class="fab fa-facebook-square"></i></a>
                                    <a href="#"><i class="fab fa-twitter-square"></i></a>
                                    <a href="#"><i class="fab fa-linkedin"></i></a>
                                    <a href="#"><i class="fab fa-pinterest-square"></i></a>
                                </div>


                            </div>
                        </div>
                    </div>

                    <?php dynamic_sidebar( 'sidebar-1' ); ?>


                </div>
            </div>
        </div>


<?php }; ?>