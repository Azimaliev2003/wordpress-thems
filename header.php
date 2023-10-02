
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">

    <title>Plot Listing HTML5 Website Template</title>

    <!-- Bootstrap core CSS -->


    <!-- Additional CSS Files -->
    <?php  wp_head();  ?>
    <!--

    TemplateMo 564 Plot Listing

    https://templatemo.com/tm-564-plot-listing

    -->
</head>

<body>

<!-- ***** Preloader Start ***** -->
<!--<div id="js-preloader" class="js-preloader">-->
<!--    <div class="preloader-inner">-->
<!--        <span class="dot"></span>-->
<!--        <div class="dots">-->
<!--            <span></span>-->
<!--            <span></span>-->
<!--            <span></span>-->
<!--        </div>-->
<!--    </div>-->
<!--</div>-->
<!-- ***** Preloader End ***** -->

<!-- ***** Header Area Start ***** -->
<header class="header-area header-sticky wow slideInDown" data-wow-duration="0.75s" data-wow-delay="0s">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <nav class="main-nav">
                    <!-- ***** Logo Start ***** -->
                    <a href="index.html" class="logo">
                    </a>
                    <!-- ***** Logo End ***** -->
                    <!-- ***** Menu Start ***** -->
                    <ul class="nav">
                        <?php

                        wp_nav_menu(array(
                            'theme_location'=>'top',
                            'container'=>null,
                            'menu_class'=>'nav',
                            'menu_id'=>'nav'
                        ));

                        ?>
                        <li><div class="main-white-button"><a href="#"><i class="fa fa-plus"></i> Add Your Listing</a></div></li>
                    </ul>
                    <a class='menu-trigger'>
                        <span>Menu</span>
                    </a>
                    <!-- ***** Menu End ***** -->
                </nav>
            </div>
        </div>
    </div>
</header>
