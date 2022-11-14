<!DOCTYPE html>
<html lang="en">

<head>
    <?php
    wp_head();
    ?>
    <!--<![endif]-->
</head>

<body <?php body_class(); ?>>

<!--header start-->
<header class="app-header">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <!--<div class="branding-wrap">-->
                <!--brand start-->
                <div class="navbar-brand float-left">
                    <a class="" href="<?php echo esc_url(home_url()) ?>">
                        <?php
                        if(has_custom_logo()){
                            the_custom_logo();
                        }
                        ?>
                    </a>
                </div>
                <!--brand end-->
                <!--start responsive nav toggle button-->
                <div class="nav-btn hamburger hamburger--slider js-hamburger ">
                    <div class="hamburger-box">
                        <div class="hamburger-inner"></div>
                    </div>
                </div>
                <!--end responsive nav toggle button-->
                <!--</div>-->

                <!--top mega menu start-->
                <nav id="vl-menu">
                    <!--extra links start-->
                    <div class="float-right nav-extra-link">
                        <a href="javascript:;" data-toggle="modal" data-target="#f-modal" class="nav-search"><i
                                    class="vl-search"></i></a>
                    </div>
                    <!--extra links end-->

                    <!--start nav-->
                    <?php
                    wp_nav_menu(array(
                       'theme_location' => 'primary_menu',
                        'menu_class'    => 'vlmenu dark-sub-menu slide-effect float-right'
                    ));
                    ?>

                </nav>
                <!--top mega menu end-->
            </div>
        </div>
    </div>
</header>
<!--header end-->


<!-- search modal start-->
<div class="modal fade" id="f-modal" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
        <div class="modal-content border-0">
            <div class="modal-body">
                <?php
                get_search_form();
                ?>
            </div>
        </div>
    </div>
</div>
<!-- search modal end-->