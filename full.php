<!DOCTYPE html>
<html>

<!-- This project was done for wetham solutions to showcase my abilities with HTML5, CSS3, PHP and JavaScript/jQuery -->
<!-- This php fold was used to upload to cPanel and displayed using concrete5 -->
<head>
    
    <?php Loader::element('header_required') ?>

    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- link to my css stylesheet -->
    <link rel="stylesheet" href="<?= $view->getThemePath() ?>/css/style.css">
    
    <!-- Magnific Popup core CSS file -->
    <link rel="stylesheet" href="<?= $view->getThemePath() ?>/css/magnific-popup.css">

    <!-- popup css stylesheet -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery-modal/0.9.1/jquery.modal.min.css" />

    <!-- links to use google font Railway -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Raleway&display=swap" rel="stylesheet">

    <!-- link to library to use socail media icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

</head>

<body>
<div class="<?= $c->getPageWrapperClass() ?>">
    <header>
        <!-- simple navigation with comanpylogo and button -->
        <nav class="box">
            <ul>
                <!-- just did quick snip it of logo image and made my own in img folder -->
                <li class="logo"><img src="<?= $view->getThemePath() ?>/img/logo-icon.png" alt="logo-icon"><strong>COMPANY</strong>LOGO</li>
                <li><a href="#welcome-popup" rel="modal:open">MAKE THIS POPUP</a></li>
            </ul>
        </nav>
        <h1>WELCOME</h1>
    </header>
    <main class="box">
        <h2>Header 1</h2>
        <!-- this Area I used to test concrete5's editable areas -->
        <div>
            <?php
            $a = new Area('Header 2');
            $a->display($c); ?>
        </div>

        <!-- used a simple html paragraph random genrator to copy and paste this in -->
        <p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vestibulum
            tortor quam, feugiat vitae, ultricies eget, tempor sit amet, ante. Donec eu libero sit amet quam egestas
            semper. Aenean ultricies mi vitae est. Mauris placerat eleifend leo. Quisque sit amet est et sapien
            ullamcorper pharetra. Vestibulum erat wisi, condimentum sed, commodo vitae, ornare sit amet, wisi. Aenean
            fermentum, elit eget tincidunt condimentum, eros ipsum rutrum orci, sagittis tempus lacus enim ac dui. Donec
            non enim in turpis pulvinar facilisis. Ut felis. Praesent dapibus, neque id cursus faucibus, tortor neque
            egestas augue, eu vulputate magna eros eu erat. Aliquam erat volutpat. Nam dui mi, tincidunt quis, accumsan
            porttitor, facilisis luctus, metus</p>

        <!-- used three random photos genorated from picsum -->
        <div class="images-container" id="images-frame">
            <a href="https://picsum.photos/675/450?radnom=1">
                <!-- I added inline style here so the image is smaller but show full image on click with magnific  -->
                <img src="https://picsum.photos/675/450?radnom=1" id="image" width="225" height="150">
            </a>
            <a href="https://picsum.photos/675/450?radnom=2">
                <img src="https://picsum.photos/675/450?radnom=2" id="image" width="225" height="150">
            </a>
            <a href="https://picsum.photos/675/450?radnom=3">
                <img src="https://picsum.photos/675/450?radnom=3" id="image" width="225" height="150">
            </a>
        </div>
    </main>
    <footer>

        <!-- popup up window information -->
        <div id="welcome-popup" class="modal" height="300px" width="200px">
            <p>Welcome!</p>
            <p>This project was completed by Adam McNown for Whetham Solutions Inc.</p>
            <p>
                I found this project decently straight foward with very helpful jQuery documentation to follow! I built
                all my HTML and CSS to look like the jpg image and was able to use the jQuery documentation to build
                simple image zooms and this popup window.</p>
            <p>I hope you enjoy my work and thank you for this opportunity</p>
        </div>

        <p id="logo"><img src="<?= $view->getThemePath() ?>/img/logo-icon.png" alt="logo-icon"><strong>COMPANY</strong>LOGO</p>

        <!-- used a common online library for social media icons -->
        <div id="icon-links">
            <!-- can be used to add links to facebook pages and others dependant on website being designed -->
            <a href="#" class="fa fa-facebook" id="icon"></a>
            <a href="#" class="fa fa-google" id="icon"></a>
            <a href="#" class="fa fa-twitter" id="icon"></a>
            <a href="#" class="fa fa-youtube" id="icon"></a>
            <a href="#" class="fa fa-vimeo" id="icon"></a>
            <a href="#" class="fa fa-dribbble" id="icon"></a>
        </div>
        <p id="copyright">&#169; Copyright 2021. All rights reserved</p>
    </footer>

    </div>

    <!-- jQuery 1.7.2+ or Zepto.js 1.0+ -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>

    <!-- Magnific Popup core JS file -->
    <script src="<?= $view->getThemePath() ?>/js/jquery.magnific-popup.js"></script>

    <!-- my js folder for personal modifications -->
    <script src="<?= $view->getThemePath() ?>/js/magnific.js"></script>

    <!-- pop up jQuery -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-modal/0.9.1/jquery.modal.min.js"></script>

    <?php Loader::element('footer_required') ?>

</body>

</html>