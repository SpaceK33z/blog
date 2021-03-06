
<!DOCTYPE html>
<!--[if IE 8]>               <html class="no-js lt-ie9" lang="en" > <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang="en" > <!--<![endif]-->

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width">
    <title><?php echo($page_title); ?></title>
    <?php echo($page_meta); ?>

    <link rel="stylesheet" href="<?php echo($template_dir_url); ?>css/foundation.min.css">
    <link rel="stylesheet" href="<?php echo($template_dir_url); ?>css/animate.css">
    <link rel="stylesheet" href="<?php echo($template_dir_url); ?>css/custom.css">

    <link rel="shortcut icon" href="<?php echo($template_dir_url); ?>img/favicon.ico">
    <link rel="image_src" href="<?php echo($template_dir_url); ?>img/logo_fb.png">

    <script src="<?php echo($template_dir_url); ?>js/vendor/custom.modernizr.js"></script>
    <script src="<?php echo($template_dir_url); ?>js/respond.min.js"></script>

    <meta name="author" content="Kees Kluskens">
</head>
<body class="geen-tabs blog">

    <div id="wrap">
        <header>
            <div class="contain-to-grid">
                <nav class="top-bar large-9">
                    <ul class="title-area">
                        <li class="name">
                        <h1 class="ir" id="logo"><a href="index.html" title="Keer terug naar de homepage">WebDuck </a></h1>
                        </li>
                        <li class="toggle-topbar menu-icon"><a href="#"><span>Menu</span></a></li>
                    </ul>

                    <section class="top-bar-section">
                        <ul class="right">
                            <li><a href="http://webduck.nl/index.php">Home</a></li>
                            <li><a href="http://webduck.nl/about.php">Over mij</a></li>
                            <li class="active"><a href="http://webduck.nl/blog">Blog</a></li>
                            <li><a href="http://webduck.nl/portfolio.php">Portfolio</a></li>
                            <li><a href="http://webduck.nl/contact.php">Contact</a></li>
                        </ul>
                    </section>
                </nav>
            </div>
            <?php if($is_home) { ?>
            <div class="small-12 large-9 large-centered columns no-padding-for-small">
                <div class="small-12 large-12 columns no-padding-for-small animated fadeInDown">
                    <div id="header-tekst">
                        <h2>Blog</h2>
                        <p>
                            De blog van WebDuck gaat over responsive design en alles wat erbij komt kijken.<br>
                        </p>
                    </div>
                </div>
            </div>
            <?php } ?>
        </header>


        <div class="small-12 large-9 large-centered columns" id="main">



            <?php echo($content); ?>
        </div>
    </div>

    <footer>
        <div class="small-12 large-9 large-centered columns footer-container">
            <div class="small-6 large-4 columns">
                <h3>Meer informatie nodig?</h3>
                <p>
                    Voor meer informatie over de diensten die WebDuck levert, neemt u het beste <a href="contact.php" title="Contacteer WebDuck">contact</a> op.
                </p>
            </div>
            <div class="small-6 large-4 columns">
                <h3>Bedrijfsinformatie</h3>
                <p>
                    WebDuck is ingeschreven in het handelsregister te Eindhoven onder 543 78435.
                </p>
                <p class="geen-margin">
                    &copy; WebDuck.
                </p>
            </div>
            <div class="hide-for-small large-4 columns">
                <h3>Tweets</h3>
                <div id="tweets">
                    &ldquo;<em>Er zijn op dit moment geen tweets te vinden.</em>&rdquo;
                </div>
                <span id="twitter_acc">&mdash; @<a href="http://twitter.com/webduck_nl" target="_blank">webduck_nl</a></span>
            </div>
        </div>
    </footer>

    <script src="<?php echo($template_dir_url); ?>js/vendor/jquery.min.js"></script>

    <script src="<?php echo($template_dir_url); ?>js/foundation.min.js"></script>

    <script src="<?php echo($template_dir_url); ?>js/script.js"></script>

    <!--[if lt IE 7 ]>
        <script src="//ajax.googleapis.com/ajax/libs/chrome-frame/1.0.3/CFInstall.min.js"></script>
        <script>window.attachEvent('onload',function(){CFInstall.check({mode:'overlay'})})</script>
    <![endif]-->
</body>
</html>