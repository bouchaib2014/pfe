<?php
/**
 * Created by PhpStorm.
 * User: enkre
 * Date: 2/17/2018
 * Time: 12:28 PM
 */

ob_start();

?>

    <!-- Web Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Lato:300,400,400i|Montserrat:400,700" rel="stylesheet">

    <!-- Vendor Styles -->
    <link href="../vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
    <link href="../css/animate.css" rel="stylesheet" type="text/css"/>
    <link href="../vendor/themify/themify.css" rel="stylesheet" type="text/css"/>
    <link href="../vendor/scrollbar/scrollbar.min.css" rel="stylesheet" type="text/css"/>
    <link href="../vendor/swiper/swiper.min.css" rel="stylesheet" type="text/css"/>
    <link href="../vendor/cubeportfolio/css/cubeportfolio.min.css" rel="stylesheet" type="text/css"/>

    <!-- Theme Styles -->
    <link href="../css/style.css" rel="stylesheet" type="text/css"/>
    <link href="../css/global/global.css" rel="stylesheet" type="text/css"/>
    <link href="../css/theme/red.css" rel="stylesheet" type="text/css"/>

    <!-- Favicon -->
    <link rel="shortcut icon" href="../img/favicon.ico" type="image/x-icon">
    <link rel="apple-touch-icon" href="../img/apple-touch-icon.png">


<?php

$links = ob_get_clean();

?>