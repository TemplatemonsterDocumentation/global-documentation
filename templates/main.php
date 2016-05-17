<!doctype html>
<html>
<head>
    <title></title>
    <meta charset="utf-8">
    <meta name="format-detection" content="telephone=no"/>
    <link rel="icon" href="<?php echo $this->getProjectPath('img/favicon_' . $this->getProjectName() . '.ico'); ?>"
          type="image/x-icon">

    <link rel="stylesheet" href="<?php echo $this->getPath('css/grid.css'); ?>">
    <link rel="stylesheet" href="<?php echo $this->getPath('css/style.css'); ?>">
    <link rel="stylesheet" href="<?php echo $this->getPath('css/prettify.css'); ?>">
    <link rel="stylesheet" href="<?php echo $this->getPath('css/jquery.fancybox.css'); ?>">
    <link rel="stylesheet" href="<?php echo $this->getProjectPath('css/project_styles.css'); ?>">
    <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
    <link href='https://fonts.googleapis.com/css?family=Montserrat:400,700|Montserrat+Alternates:400,700' rel='stylesheet' type='text/css'>
    <link href='//fonts.googleapis.com/css?family=Roboto:400,500,700' rel='stylesheet' type='text/css'>
    <script src="<?php echo $this->getPath( 'js/jquery.js' ); ?>"></script>
    <script src="<?php echo $this->getPath( 'js/jquery-migrate-1.2.1.js' ); ?>"></script>

    <!--[if lt IE 9]>
    <html class="lt-ie9">
    <div style='clear: both; text-align:center; position: relative;'>
        <a href="http://windows.microsoft.com/en-US/internet-explorer/">
            <img src="<?php echo $this->getPath( 'img/ie8-panel/warning_bar_0000_us.jpg' ); ?>" border="0" height="42"
                 width="820"
                 alt="You are using an outdated browser. For a faster, safer browsing experience, upgrade for free today."/>
        </a>
    </div>
    <script src="/js/html5shiv.js"></script>
    <![endif]-->

    <script src='<?php echo $this->getPath( 'js/device.min.js' ); ?>'></script>
</head>
<body data-section="<?php /*echo $section_param;*/ ?>"
      onload="prettyPrint()"
      data-project="<?php echo $this->getProjectName();
?>">
<div class="page-wrap">

<!--    Navigation-->
    <div class="rd-mobilemenu active">
        <div class="logo logo__<?php echo $this->getProjectName(); ?>">
            <a href="<?php echo $this->getProjectUrl(); ?>">
                <img src="<?php echo $this->getProjectPath('img/logo_' . $this->getProjectName() . '.png'); ?>"
                     alt="<?php echo $this->getProjectTextLogo(); ?>">
                <?php echo $this->getProjectTextLogo(); ?>
            </a>
        </div>
        <div class="panel">
            <!-- <div class="select select-version">
                <select>
                    <option data-href="#">Version v3-0</option>
                    <option data-href="#" selected>Version v3-1</option>
                    <option data-href="#">Version v2-4</option>
                    <option data-href="#">Version v2-3</option>
                </select>
            </div>
            <div class="select select-lang">
                <select>
                    <option data-href="#">EN</option>
                    <option data-href="#">RU</option>
                </select>
            </div> -->
        </div>
        <p class="copyright">TemplateMonster &copy;
            <a href="http://www.templatemonster.com/privacy-policy.php">Privacy Policy</a>
        </p>
    </div>

<!--Page content-->
    <div class="page-content active">
        <button class="rd-mobilepanel_toggle active"><span></span></button>
        <div class="rd-mobilepanel<?php /*if ('introduction' !== $section_param) :*/ ?> fixed<?php /*endif;*/ ?>">
            <h1 class="rd-mobilepanel_title">
                <?php echo $this->getProjectTitle(); ?>
            </h1>
            <div class="tm-title-caption"><?php echo $this->getProjectTitleCaption(); ?></div>
        </div>
        <div class="page">
            <!--========================================================
                HEADER
            =========================================================-->
            <header>
                <nav class="nav">
                    <ul class="menu" data-type="navbar">
                        <?php $this->getNavigation(); ?>
                    </ul>
                </nav>
            </header>
            <!--========================================================
                CONTENT
            =========================================================-->
            <main id="main">
                <div class="container">
                    <?php $this->loadProject(); ?>
                </div>
            </main>

            <!--========================================================
                FOOTER
            =========================================================-->
            <footer>
                <!-- <div class="navigate">
                    <div class="next_wrapper navigated-section-2">
                        <div class="container">
                            <a href="/section/template-installatiamework-installation.html" class="next">
                                <span>Next</span>
                                <em>Template installation</em>
                            </a>
                        </div>
                    </div>
                </div> -->

            </footer>
        </div>
    </div>
</div>

<script src="<?php echo $this->getPath( 'js/jquery.easing.1.3.js' ); ?>"></script>
<script src="<?php echo $this->getPath( 'js/jquery.rd-navbar.js' ); ?>"></script>
<script src="<?php echo $this->getPath( 'js/prettify.js' ); ?>"></script>
<script src="<?php echo $this->getPath( 'js/jquery.fancybox.js' ); ?>"></script>
<script src="<?php echo $this->getPath( 'js/jquery.ui.totop.js' ); ?>"></script>

</body>
</html>
