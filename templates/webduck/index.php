
<!DOCTYPE html>
<!--[if IE 8]>               <html class="no-js lt-ie9" lang="en" > <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang="en" > <!--<![endif]-->

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width">
    <title><?php echo($page_title); ?></title>
    <?php echo($page_meta); ?>

    <link rel="stylesheet" href="templates/webduck/css/foundation.min.css">
    <link rel="stylesheet" href="templates/webduck/css/animate.css">
    <link rel="stylesheet" href="templates/webduck/css/custom.css">
    <link rel="stylesheet" href="<?php echo($template_dir_url); ?>subdiv.css">
    <link href='http://fonts.googleapis.com/css?family=Merriweather:400,300,700' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600' rel='stylesheet' type='text/css'>

    <link rel="shortcut icon" href="img/favicon.ico">
    <link rel="image_src" href="/img/logo_fb.png">

    <script src="js/vendor/custom.modernizr.js"></script>
    <script src="js/respond.min.js"></script>

    <meta name="author" content="Kees Kluskens">

    <?php get_header(); ?>
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
                            <li><a href="index.php">Home</a></li>
                            <li><a href="about.php">Over mij</a></li>
                            <li class="active"><a href="index.php">Blog</a></li>
                            <li><a href="portfolio.php">Portfolio</a></li>
                            <li><a href="contact.php">Contact</a></li>
                        </ul>
                    </section>
                </nav>
            </div>
            <div class="small-12 large-9 large-centered columns no-padding-for-small">
                <div class="small-12 large-12 columns no-padding-for-small animated fadeInDown">
                    <div id="header-tekst">
                        <h2>Blog</h2>
                        <p>
                            WebDuck is een in 2012 begonnen bedrijf gefocust op web-<br>
                            development, opgericht door Kees Kluskens.
                        </p>
                    </div>
                </div>
            </div>
        </header>


        <div class="small-12 large-9 large-centered columns" id="main">
            <?php if($is_home) { ?>

            <?php } ?>


            <?php echo($content); ?>

            <?php get_footer(); ?>
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
                <p>
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

    <script src="js/vendor/jquery.min.js"></script>

    <script src="js/foundation.min.js"></script>

    <script src="js/script.js"></script>

    <!--[if lt IE 7 ]>
        <script src="//ajax.googleapis.com/ajax/libs/chrome-frame/1.0.3/CFInstall.min.js"></script>
        <script>window.attachEvent('onload',function(){CFInstall.check({mode:'overlay'})})</script>
    <![endif]-->
</body>
</html>