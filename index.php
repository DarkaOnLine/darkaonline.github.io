<?php
define('BEGIN_YEAR', '2006-03-01');

function getYears($date)
{
    $date = strtotime($date.' 00:00:00');
    $years = floor((strtotime(date('Y-m-d H:i:s')) - $date) / 365 / 60 / 60 / 24);

    return $years;
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="keywords"
          content="Darius Matulionis, PHP, ZF, Zend Framework, PHP programmer, CSS, jQuery, JS, JavaScript, HTML, GIT, SVN"/>
    <meta name="description"
          content="Darius Matulionis: Web front and back ends developer; PHP addicted :); Zend Framework engineer"/>
    <meta name="author" content="Darius Matulionis">



    <link rel="apple-touch-icon" href="/favicon.png?v=1"/>
    <link rel="shortcut icon" href="/favicon.ico?v=1" type="image/vnd.microsoft.icon"/>
    <link rel="icon" href="/favicon.ico?v=1" type="image/vnd.microsoft.icon"/>

    <title>Darius Matulionis</title>

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Add custom CSS here -->

    <link href="css/style.css" rel="stylesheet">
    <link href="css/ekko-lightbox.css" rel="stylesheet">
    <link href="css/flexslider.css" rel="stylesheet">
    <link href="css/animate.min.css" rel="stylesheet">
    <link href="css/bootstrap-theme.min.css" rel="stylesheet">
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    <!--[if lt IE 9]>
    <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->
</head>

<body>

<!-- Google Tag Manager -->
<noscript><iframe src="//www.googletagmanager.com/ns.html?id=GTM-5NWFNJ"
                  height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
        new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
        j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
        '//www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
    })(window,document,'script','dataLayer','GTM-5NWFNJ');</script>
<!-- End Google Tag Manager -->


<div id="boxWrapp"  itemscope itemtype="http://schema.org/Person">

<meta itemprop="url" content="http://matulionis.lt"  property="url" />
<meta itemprop="jobTitle" content="Developer"  property="jobTitle" />
<meta itemprop="name" content="Darius Matulionis"  property="name" />
<meta itemprop="telephone" content="+370 652 41693"  property="name" />
<meta itemprop="email" content="darius@matulionis.lt"  property="email" />
<meta itemprop="image" content="http://matulionis.lt/img/avatar5.png"  property="image" />

<div class="main-nav clearfix">
    <!-- navbar -->
    <nav class="navbar navbar-inverse" role="navigation">
        <div class="container-fluid">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#NavCol">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand bg-primary" href="#about">Darius Matulionis</a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="NavCol">
                <ul class="nav navbar-nav navbar-right top-scroll">

                    <li class="current"><a href="#about" class="linear">Home</a></li>
                    <li><a href="#aboutMore" class="linear">About</a></li>
                    <li><a href="#open-source" class="linear">Open Source</a></li>
                    <li><a href="#cv" class="linear">CV</a></li>
                    <li><a href="#contact" class="linear">Contact</a></li>
                </ul>


            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container-fluid -->
    </nav>

</div>
<!-- Full Page Image Header Area -->
<div id="about" class="header">

    <div class="maskHeader"></div>
    <div class="main-caption">
        <div class="logo">
            <img src="img/darius-matulionis-logo.png" alt="logo"/>
        </div>
        <!-- slider -->
        <div id="flex-head" class="flexslider">
            <ul class="slides">
                <li>
                    <h1>Hi, I'm Darius</h1>

                    <h2>Welcome to My Portfolio</h2>
                </li>
                <li>
                    <h1>And I'm a Developer</h1>

                    <h2>Passionate about solving problems with clarity, simplicity & honestly</h2>
                </li>
            </ul>
        </div>
        <!-- end slider -->
        <a href="#aboutMore" class="btn btnAbout btn-hover border-color color-primary btn-lg linear">READ MORE</a>
    </div>
    <!--  end main caption -->

</div>
<!-- end header -->
<!-- /Full Page Image Header Area -->


<!-- content -->
<div id="aboutMore" class="page">
    <div class="container">
        <div class="row">
            <div class="col-md-10  col-md-offset-1">
                <div class="build title-page">
                    <h2 class="text-center">About</h2>

                    <div class="line-title bg-primary"></div>
                </div>
            </div>
            <!-- end col -->
        </div>
        <!-- end row -->

        <div class="row">
            <div class="col-md-6">
                <div class="build main-about">
                    <div class="row">
                        <div class="col-md-3">
                            <h2>&nbsp;</h2>
                            <div class="main-avatar text-center">
                                <div class="avatar img-thumbnail img-circle">
                                    <img src="/img/avatar5.png" alt="avatar"/>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-9">
                            <h2>Me</h2>
                            <div class="about-content">
                                <p>
                                    Hi, I'm Darius a front/back end developer based in Vilnius capital of <a
                                        href="http://en.wikipedia.org/wiki/Lithuania">Lithuania</a>. I have been working in IT industry for about <?php echo getYears('2004-02-01') ?> years and put my feet in the coding jungle more than <?php echo getYears(BEGIN_YEAR) ?> years ago. I would Love to help you take your product to the next level.
                                </p>
                                <a href="#contact"
                                   class="btn btn-clear btn-lg border-color linear hire">LETS GET IN TOUCH</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- end col -->

            <div class="col-md-6">
                <h2>Code</h2>
                <div class="build progressbar-a">
                    <div class="wrapp-progress">
                        <p class="pull-left">PHP</p>
                        <div class="progress">
                            <div class="progress-bar  clearfix" role="progressbar" aria-valuenow="80" data-years="<?php echo getYears(BEGIN_YEAR) ?>" aria-valuemin="0"
                                 aria-valuemax="100" style="width: 0%">
                                <span class="precent-value"></span>
                                <i class="fa fa-caret-down"></i>
                            </div>
                        </div>
                    </div>
                    <div class="wrapp-progress">
                        <p class="pull-left">MySql / DB design</p>
                        <div class="progress">
                            <div class="progress-bar  clearfix" role="progressbar" aria-valuenow="80" data-years="<?php echo getYears(BEGIN_YEAR) ?>" aria-valuemin="0"
                                 aria-valuemax="100" style="width: 0%">
                                <span class="precent-value"></span>
                                <i class="fa fa-caret-down"></i>
                            </div>
                        </div>
                    </div>
                    <div class="wrapp-progress">
                        <p class="pull-left">JavaScript / jQuery </p>
                        <div class="progress">
                            <div class="progress-bar  clearfix" role="progressbar" aria-valuenow="75" data-years="<?php echo getYears(BEGIN_YEAR) ?>" aria-valuemin="0"
                                 aria-valuemax="100" style="width: 0%">
                                <span class="precent-value"></span>
                                <i class="fa fa-caret-down"></i>
                            </div>
                        </div>
                    </div>
                    <div class="wrapp-progress">
                        <p class="pull-left">HTML5 & CSS3</p>
                        <div class="progress">
                            <div class="progress-bar  clearfix" role="progressbar" aria-valuenow="60" data-years="<?php echo getYears(BEGIN_YEAR) ?>" aria-valuemin="0"
                                 aria-valuemax="100" style="width: 0%">
                                <span class="precent-value"></span>
                                <i class="fa fa-caret-down"></i>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
        <!-- end row -->

        <div class="row">
            <div class="col-md-6">
                <h2>Frameworks</h2>
                <div class="build progressbar-a">
                    <div class="wrapp-progress">
                        <p class="pull-left">Zend Framework</p>
                        <div class="progress">
                            <div class="progress-bar  clearfix" role="progressbar" aria-valuenow="85" data-years="<?php echo getYears(BEGIN_YEAR) ?>" aria-valuemin="0"
                                 aria-valuemax="100" style="width: 0%">
                                <span class="precent-value"></span>
                                <i class="fa fa-caret-down"></i>
                            </div>
                        </div>
                    </div>
                    <div class="wrapp-progress">
                        <p class="pull-left">Laravel 5</p>
                        <div class="progress">
                            <div class="progress-bar  clearfix" role="progressbar" aria-valuenow="80" data-years="<?php echo getYears('2012-02-01') ?>" aria-valuemin="0"
                                 aria-valuemax="100" style="width: 0%">
                                <span class="precent-value"></span>
                                <i class="fa fa-caret-down"></i>
                            </div>
                        </div>
                    </div>
                    <div class="wrapp-progress">
                        <p class="pull-left">Symfony2</p>
                        <div class="progress">
                            <div class="progress-bar  clearfix" role="progressbar" aria-valuenow="28" data-years="<?php echo getYears('2013-02-01') ?>" aria-valuemin="0"
                                 aria-valuemax="100" style="width: 0%">
                                <span class="precent-value"></span>
                                <i class="fa fa-caret-down"></i>
                            </div>
                        </div>
                    </div>
                    <div class="wrapp-progress">
                        <p class="pull-left">Bootstrap2 / Bootstrap3 </p>
                        <div class="progress">
                            <div class="progress-bar  clearfix" role="progressbar" aria-valuenow="60" data-years="<?php echo getYears('2011-01-01') ?>" aria-valuemin="0"
                                 aria-valuemax="100" style="width: 0%">
                                <span class="precent-value"></span>
                                <i class="fa fa-caret-down"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <h2>Other</h2>
                <div class="build progressbar-a">
                    <div class="wrapp-progress">
                        <p class="pull-left">Git / Mercurial / SVN</p>
                        <div class="progress">
                            <div class="progress-bar  clearfix" role="progressbar" aria-valuenow="80" data-years="<?php echo getYears(date('Y-m-d', strtotime('-4 years'))) ?>" aria-valuemin="0"
                                 aria-valuemax="100" style="width: 0%">
                                <span class="precent-value"></span>
                                <i class="fa fa-caret-down"></i>
                            </div>
                        </div>
                    </div>
                    <div class="wrapp-progress">
                        <p class="pull-left">Linux / Servers / Shell</p>
                        <div class="progress">
                            <div class="progress-bar  clearfix" role="progressbar" aria-valuenow="70" data-years="<?php echo getYears(BEGIN_YEAR) ?>" aria-valuemin="0"
                                 aria-valuemax="100" style="width: 0%">
                                <span class="precent-value"></span>
                                <i class="fa fa-caret-down"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
</div>

<div id="open-source" class="page clearfix">
    <div class="container">
        <div class="row">
            <div class="col-md-10  col-md-offset-1">
                <div class="build title-page">
                    <h2 class="text-center">Open Source</h2>
                    <div class="line-title bg-primary"></div>
                </div>
            </div>
            <!-- end col -->
        </div>

        <div class="row open-source">
            <div class="col-md-4 br-1">
                <div class="project">
                    <a href="https://github.com/DarkaOnLine/L5-Swagger">
                        <div class="title">L5-Swagger</div>
                        <div class="description">
                            This package is a wrapper of Swagger-php and swagger-ui adapted to work with Laravel.
                        </div>
                    </a>
                    <div class="badges">
                        <a href="https://packagist.org/packages/DarkaOnLine/L5-Swagger" rel="nofollow"><img src="https://poser.pugx.org/DarkaOnLine/L5-Swagger/downloads.svg" alt="Total Downloads" style="max-width:100%;"></a>
                        <a href="https://travis-ci.org/DarkaOnLine/L5-Swagger" rel="nofollow"><img src="https://travis-ci.org/DarkaOnLine/L5-Swagger.svg?branch=master" alt="Build Status"  style="max-width:100%;"></a>
                        <a href="https://coveralls.io/github/DarkaOnLine/L5-Swagger?branch=master" rel="nofollow"><img src="https://coveralls.io/repos/github/DarkaOnLine/L5-Swagger/badge.svg?branch=master" alt="Coverage Status" style="max-width:100%;"></a>
                        <a href="https://codeclimate.com/github/DarkaOnLine/L5-Swagger" rel="nofollow"><img src="https://codeclimate.com/github/DarkaOnLine/L5-Swagger/badges/gpa.svg" alt="Code Climate" style="max-width:100%;"></a>
                        <a href="https://styleci.io/repos/32315619" rel="nofollow"><img src="https://styleci.io/repos/32315619/shield" alt="StyleCI" style="max-width:100%;"></a>
                    </div>
                </div>
            </div>

            <div class="col-md-4 br-1">
                <div class="project">
                    <a href="https://github.com/DarkaOnLine/SwaggerLume">
                        <div class="title">SwaggerLume</div>
                        <div class="description">
                            This package is a wrapper of Swagger-php and swagger-ui adapted to work with Lumen.
                        </div>
                    </a>
                    <div class="badges">
                        <a href="https://packagist.org/packages/DarkaOnLine/swagger-lume" rel="nofollow"><img src="https://poser.pugx.org/DarkaOnLine/swagger-lume/downloads.svg" alt="Total Downloads" style="max-width:100%;"></a>
                        <a href="https://travis-ci.org/DarkaOnLine/SwaggerLume" rel="nofollow"><img src="https://travis-ci.org/DarkaOnLine/SwaggerLume.svg?branch=master" alt="Build Status" style="max-width:100%;"></a>
                        <a href="https://coveralls.io/github/DarkaOnLine/SwaggerLume?branch=master" rel="nofollow"><img src="https://coveralls.io/repos/github/DarkaOnLine/SwaggerLume/badge.svg?branch=master" alt="Coverage Status" style="max-width:100%;"></a>
                        <a href="https://codeclimate.com/github/DarkaOnLine/SwaggerLume" rel="nofollow"><img src="https://codeclimate.com/github/DarkaOnLine/SwaggerLume/badges/gpa.svg" alt="Code Climate" style="max-width:100%;"></a>
                        <a href="https://styleci.io/repos/50113229" rel="nofollow"><img src="https://styleci.io/repos/50113229/shield" alt="StyleCI" style="max-width:100%;"></a>
                    </div>
                </div>
            </div>

            <div class="col-md-4">
                <div class="project">
                    <a href="https://github.com/DarkaOnLine/Ripcord">
                        <div class="title">Ripcord</div>
                        <div class="description">
                            XML RPC client and server for PHP
                        </div>
                    </a>
                    <div class="badges">
                        <a href="https://packagist.org/packages/DarkaOnLine/Ripcord" rel="nofollow"><img src="https://poser.pugx.org/DarkaOnLine/Ripcord/downloads.svg" alt="Total Downloads" style="max-width:100%;"></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- /Intro -->
<?php /*
<!-- Portfolio -->
<div id="work" class="page clearfix">
    <div class="container">
        <div class="row">
            <div class="col-md-10  col-md-offset-1">
                <div class="build title-page">
                    <h2 class="text-center">LATEST WORK</h2>

                    <div class="line-title bg-primary"></div>
                </div>
            </div>
            <!-- end col -->
        </div>
        <!-- end row -->
        <div class="col-md-12">

            <ul id="filterOptions" class="clearfix">
                <li class="cur"><a class="btn btn-link linear" href="#" data-group="all">All</a></li>
                <li><span>/</span></li>
                <li><a class="btn btn-link linear" href="#" data-group="shop">E-Shop</a></li>
                <li><span>/</span></li>
                <li><a class="btn btn-link linear" href="#" data-group="real_estate">Real Estate</a></li>
                <li><span>/</span></li>
                <li><a class="btn btn-link linear" href="#" data-group="other">Other</a></li>
            </ul>

        </div>
        <!--end-col-->
        <div class="col-md-12">
            <div class="folio-content clearfix">
                <div class="row">
                    <div class="container_folio clearfix gallery" id="grid">

                        <div class="col-xs-12 col-sm-4 col-md-4 box" data-groups='["all","shop"]'>
                            <div class="folio-img">
                                <div class="portfolio-item">
                                    <div class="thumbnail">
                                        <div class="thumb-img">
                                            <div class="link-attr">
                                                <a href="projects/FitFood.lt.png" data-gallery="global-gallery" data-parent="" data-toggle="lightbox" data-title=""  class="link-search animated linear"><i class="fa fa-search"></i></a>
                                                <a href="http://FitFood.lt" class="link-chain animated linear"><i class="fa  fa-chain"></i></a>
                                            </div>
                                            <img class="linear img-portfolio img-responsive" src="projects/FitFood.lt.png" alt="FitFood.lt">

                                            <div class="link"><a href="http://FitFood.lt">http://FitFood.lt</a></div>
                                            <div class="folio-caption"><i class="fa fa-caret-up"></i>
                                                <p>http://FitFood.lt</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-xs-12 col-sm-4 col-md-4 box" data-groups='["all","other"]'>
                            <div class="folio-img">
                                <div class="portfolio-item">
                                    <div class="thumbnail">
                                        <div class="thumb-img">
                                            <div class="link-attr">
                                                <a href="projects/chillandgrill.lt.png" data-gallery="global-gallery" data-parent="" data-toggle="lightbox" data-title=""  class="link-search animated linear"><i class="fa fa-search"></i></a>
                                                <a href="http://chillandgrill.lt" class="link-chain animated linear"><i class="fa  fa-chain"></i></a>
                                            </div>
                                            <img class="linear img-portfolio img-responsive" src="projects/chillandgrill.lt.png" alt="chillandgrill.lt">

                                            <div class="link"><a href="http://chillandgrill.lt">http://chillandgrill.lt</a></div>
                                            <div class="folio-caption"><i class="fa fa-caret-up"></i>
                                                <p>http://chillandgrill.lt</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-xs-12 col-sm-4 col-md-4 box" data-groups='["all","real_estate"]'>
                            <div class="folio-img">
                                <div class="portfolio-item">
                                    <div class="thumbnail">
                                        <div class="thumb-img">
                                            <div class="link-attr">
                                                <a href="projects/vingriusaltiniai.lt.png" data-gallery="global-gallery" data-parent="" data-toggle="lightbox" data-title=""  class="link-search animated linear"><i class="fa fa-search"></i></a>
                                                <a href="http://vingriusaltiniai.lt" class="link-chain animated linear"><i class="fa  fa-chain"></i></a>
                                            </div>
                                            <img class="linear img-portfolio img-responsive" src="projects/vingriusaltiniai.lt.png" alt="vingriusaltiniai.lt">

                                            <div class="link"><a href="http://vingriusaltiniai.lt">http://vingriusaltiniai.lt</a></div>
                                            <div class="folio-caption"><i class="fa fa-caret-up"></i>
                                                <p>http://vingriusaltiniai.lt</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-xs-12 col-sm-4 col-md-4 box" data-groups='["all","other"]'>
                            <div class="folio-img">
                                <div class="portfolio-item">
                                    <div class="thumbnail">
                                        <div class="thumb-img">
                                            <div class="link-attr">
                                                <a href="projects/corporategovernance.lt.png" data-gallery="global-gallery" data-parent="" data-toggle="lightbox" data-title=""  class="link-search animated linear"><i class="fa fa-search"></i></a>
                                                <a href="http://corporategovernance.lt" class="link-chain animated linear"><i class="fa  fa-chain"></i></a>
                                            </div>
                                            <img class="linear img-portfolio img-responsive" src="projects/corporategovernance.lt.png" alt="corporategovernance.lt">

                                            <div class="link"><a href="http://corporategovernance.lt">http://corporategovernance.lt</a></div>
                                            <div class="folio-caption"><i class="fa fa-caret-up"></i>
                                                <p>http://corporategovernance.lt</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-xs-12 col-sm-4 col-md-4 box" data-groups='["all","real_estate"]'>
                            <div class="folio-img">
                                <div class="portfolio-item">
                                    <div class="thumbnail">
                                        <div class="thumb-img">
                                            <div class="link-attr">
                                                <a href="projects/fizikunamai.lt.png" data-gallery="global-gallery" data-parent="" data-toggle="lightbox" data-title=""  class="link-search animated linear"><i class="fa fa-search"></i></a>
                                                <a href="http://fizikunamai.lt" class="link-chain animated linear"><i class="fa  fa-chain"></i></a>
                                            </div>
                                            <img class="linear img-portfolio img-responsive" src="projects/fizikunamai.lt.png" alt="fizikunamai.lt">

                                            <div class="link"><a href="http://fizikunamai.lt">http://fizikunamai.lt</a></div>
                                            <div class="folio-caption"><i class="fa fa-caret-up"></i>
                                                <p>http://fizikunamai.lt</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>


                        <div class="col-xs-12 col-sm-4 col-md-4 box" data-groups='["all","real_estate"]'>
                            <div class="folio-img">
                                <div class="portfolio-item">
                                    <div class="thumbnail">
                                        <div class="thumb-img">
                                            <div class="link-attr">
                                                <a href="projects/kraziu.lt.png" data-gallery="global-gallery" data-parent="" data-toggle="lightbox" data-title=""  class="link-search animated linear"><i class="fa fa-search"></i></a>
                                                <a href="http://kraziu.lt" class="link-chain animated linear"><i class="fa  fa-chain"></i></a>
                                            </div>
                                            <img class="linear img-portfolio img-responsive" src="projects/kraziu.lt.png" alt="kraziu.lt">

                                            <div class="link"><a href="http://kraziu.lt">http://kraziu.lt</a></div>
                                            <div class="folio-caption"><i class="fa fa-caret-up"></i>
                                                <p>http://kraziu.lt</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-xs-12 col-sm-4 col-md-4 box" data-groups='["all","real_estate"]'>
                            <div class="folio-img">
                                <div class="portfolio-item">
                                    <div class="thumbnail">
                                        <div class="thumb-img">
                                            <div class="link-attr">
                                                <a href="projects/jogailosrezidencija.lt.png" data-gallery="global-gallery" data-parent="" data-toggle="lightbox" data-title=""  class="link-search animated linear"><i class="fa fa-search"></i></a>
                                                <a href="http://jogailosrezidencija.lt" class="link-chain animated linear"><i class="fa  fa-chain"></i></a>
                                            </div>
                                            <img class="linear img-portfolio img-responsive" src="projects/jogailosrezidencija.lt.png" alt="jogailosrezidencija.lt">

                                            <div class="link"><a href="http://jogailosrezidencija.lt">http://jogailosrezidencija.lt</a></div>
                                            <div class="folio-caption"><i class="fa fa-caret-up"></i>
                                                <p>http://jogailosrezidencija.lt</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-xs-12 col-sm-4 col-md-4 box" data-groups='["all","real_estate"]'>
                            <div class="folio-img">
                                <div class="portfolio-item">
                                    <div class="thumbnail">
                                        <div class="thumb-img">
                                            <div class="link-attr">
                                                <a href="projects/justiniskiunamai.lt.png" data-gallery="global-gallery" data-parent="" data-toggle="lightbox" data-title=""  class="link-search animated linear"><i class="fa fa-search"></i></a>
                                                <a href="http://justiniskiunamai.lt" class="link-chain animated linear"><i class="fa  fa-chain"></i></a>
                                            </div>
                                            <img class="linear img-portfolio img-responsive" src="projects/justiniskiunamai.lt.png" alt="justiniskiunamai.lt">

                                            <div class="link"><a href="http://justiniskiunamai.lt">http://justiniskiunamai.lt</a></div>
                                            <div class="folio-caption"><i class="fa fa-caret-up"></i>
                                                <p>http://justiniskiunamai.lt</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-xs-12 col-sm-4 col-md-4 box" data-groups='["all","real_estate"]'>
                            <div class="folio-img">
                                <div class="portfolio-item">
                                    <div class="thumbnail">
                                        <div class="thumb-img">
                                            <div class="link-attr">
                                                <a href="projects/karolinosparkas.lt.png" data-gallery="global-gallery" data-parent="" data-toggle="lightbox" data-title=""  class="link-search animated linear"><i class="fa fa-search"></i></a>
                                                <a href="http://karolinosparkas.lt" class="link-chain animated linear"><i class="fa  fa-chain"></i></a>
                                            </div>
                                            <img class="linear img-portfolio img-responsive" src="projects/karolinosparkas.lt.png" alt="karolinosparkas.lt">

                                            <div class="link"><a href="http://karolinosparkas.lt">http://karolinosparkas.lt</a></div>
                                            <div class="folio-caption"><i class="fa fa-caret-up"></i>
                                                <p>http://karolinosparkas.lt</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-xs-12 col-sm-4 col-md-4 box" data-groups='["all","other"]'>
                            <div class="folio-img">
                                <div class="portfolio-item">
                                    <div class="thumbnail">
                                        <div class="thumb-img">
                                            <div class="link-attr">
                                                <a href="projects/kmarine.ru.jpg" data-gallery="global-gallery" data-parent="" data-toggle="lightbox" data-title=""  class="link-search animated linear"><i class="fa fa-search"></i></a>
                                                <a href="http://kmarine.ru" class="link-chain animated linear"><i class="fa  fa-chain"></i></a>
                                            </div>
                                            <img class="linear img-portfolio img-responsive" src="projects/kmarine.ru.jpg" alt="kmarine.ru">

                                            <div class="link"><a href="http://kmarine.ru">http://kmarine.ru</a></div>
                                            <div class="folio-caption"><i class="fa fa-caret-up"></i>
                                                <p>http://kmarine.ru</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-xs-12 col-sm-4 col-md-4 box" data-groups='["all","other"]'>
                            <div class="folio-img">
                                <div class="portfolio-item">
                                    <div class="thumbnail">
                                        <div class="thumb-img">
                                            <div class="link-attr">
                                                <a href="projects/kondicionieriai.lt.png" data-gallery="global-gallery" data-parent="" data-toggle="lightbox" data-title=""  class="link-search animated linear"><i class="fa fa-search"></i></a>
                                                <a href="http://kondicionieriai.lt" class="link-chain animated linear"><i class="fa  fa-chain"></i></a>
                                            </div>
                                            <img class="linear img-portfolio img-responsive" src="projects/kondicionieriai.lt.png" alt="kondicionieriai.lt">

                                            <div class="link"><a href="http://kondicionieriai.lt">http://kondicionieriai.lt</a></div>
                                            <div class="folio-caption"><i class="fa fa-caret-up"></i>
                                                <p>http://kondicionieriai.lt</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-xs-12 col-sm-4 col-md-4 box" data-groups='["all","shop"]'>
                            <div class="folio-img">
                                <div class="portfolio-item">
                                    <div class="thumbnail">
                                        <div class="thumb-img">
                                            <div class="link-attr">
                                                <a href="projects/agarda.lt.png" data-gallery="global-gallery" data-parent="" data-toggle="lightbox" data-title=""  class="link-search animated linear"><i class="fa fa-search"></i></a>
                                                <a href="http://agarda.lt" class="link-chain animated linear"><i class="fa  fa-chain"></i></a>
                                            </div>
                                            <img class="linear img-portfolio img-responsive" src="projects/agarda.lt.png" alt="agarda.lt">

                                            <div class="link"><a href="http://agarda.lt">http://agarda.lt</a></div>
                                            <div class="folio-caption"><i class="fa fa-caret-up"></i>
                                                <p>http://agarda.lt</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-xs-12 col-sm-4 col-md-4 box" data-groups='["all","real_estate"]'>
                            <div class="folio-img">
                                <div class="portfolio-item">
                                    <div class="thumbnail">
                                        <div class="thumb-img">
                                            <div class="link-attr">
                                                <a href="projects/angelonamai.lt.png" data-gallery="global-gallery" data-parent="" data-toggle="lightbox" data-title=""  class="link-search animated linear"><i class="fa fa-search"></i></a>
                                                <a href="http://angelonamai.lt" class="link-chain animated linear"><i class="fa  fa-chain"></i></a>
                                            </div>
                                            <img class="linear img-portfolio img-responsive" src="projects/angelonamai.lt.png" alt="angelonamai.lt">

                                            <div class="link"><a href="http://angelonamai.lt">http://angelonamai.lt</a></div>
                                            <div class="folio-caption"><i class="fa fa-caret-up"></i>
                                                <p>http://angelonamai.lt</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-xs-12 col-sm-4 col-md-4 box" data-groups='["all","other"]'>
                            <div class="folio-img">
                                <div class="portfolio-item">
                                    <div class="thumbnail">
                                        <div class="thumb-img">
                                            <div class="link-attr">
                                                <a href="projects/infraplanas.lt.png" data-gallery="global-gallery" data-parent="" data-toggle="lightbox" data-title=""  class="link-search animated linear"><i class="fa fa-search"></i></a>
                                                <a href="http://infraplanas.lt" class="link-chain animated linear"><i class="fa  fa-chain"></i></a>
                                            </div>
                                            <img class="linear img-portfolio img-responsive" src="projects/infraplanas.lt.png" alt="infraplanas.lt">

                                            <div class="link"><a href="http://infraplanas.lt">http://infraplanas.lt</a></div>
                                            <div class="folio-caption"><i class="fa fa-caret-up"></i>
                                                <p>http://infraplanas.lt</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-xs-12 col-sm-4 col-md-4 box" data-groups='["all","real_estate"]'>
                            <div class="folio-img">
                                <div class="portfolio-item">
                                    <div class="thumbnail">
                                        <div class="thumb-img">
                                            <div class="link-attr">
                                                <a href="projects/ambercity.jpg" data-gallery="global-gallery" data-parent="" data-toggle="lightbox" data-title=""  class="link-search animated linear"><i class="fa fa-search"></i></a>
                                                <a href="http://ambercity.lt" class="link-chain animated linear"><i class="fa  fa-chain"></i></a>
                                            </div>
                                            <img class="linear img-portfolio img-responsive" src="projects/ambercity.jpg" alt="ambercity.lt">

                                            <div class="link"><a href="http://ambercity.lt">http://ambercity.lt</a></div>
                                            <div class="folio-caption"><i class="fa fa-caret-up"></i>
                                                <p>http://ambercity.lt</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-xs-12 col-sm-4 col-md-4 box" data-groups='["all","real_estate","other"]'>
                            <div class="folio-img">
                                <div class="portfolio-item">
                                    <div class="thumbnail">
                                        <div class="thumb-img">
                                            <div class="link-attr">
                                                <a href="projects/ppigroup.lt.png" data-gallery="global-gallery" data-parent="" data-toggle="lightbox" data-title=""  class="link-search animated linear"><i class="fa fa-search"></i></a>
                                                <a href="http://ppigroup.lt" class="link-chain animated linear"><i class="fa  fa-chain"></i></a>
                                            </div>
                                            <img class="linear img-portfolio img-responsive" src="projects/ppigroup.lt.png" alt="ppigroup.lt">

                                            <div class="link"><a href="http://ppigroup.lt">http://ppigroup.lt</a></div>
                                            <div class="folio-caption"><i class="fa fa-caret-up"></i>
                                                <p>http://ppigroup.lt</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-xs-12 col-sm-4 col-md-4 box" data-groups='["all","other"]'>
                            <div class="folio-img">
                                <div class="portfolio-item">
                                    <div class="thumbnail">
                                        <div class="thumb-img">
                                            <div class="link-attr">
                                                <a href="projects/ppmi.lt.png" data-gallery="global-gallery" data-parent="" data-toggle="lightbox" data-title=""  class="link-search animated linear"><i class="fa fa-search"></i></a>
                                                <a href="http://ppmi.lt" class="link-chain animated linear"><i class="fa  fa-chain"></i></a>
                                            </div>
                                            <img class="linear img-portfolio img-responsive" src="projects/ppmi.lt.png" alt="ppmi.lt">

                                            <div class="link"><a href="http://ppmi.lt">http://ppmi.lt</a></div>
                                            <div class="folio-caption"><i class="fa fa-caret-up"></i>
                                                <p>http://ppmi.lt</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-xs-12 col-sm-4 col-md-4 box" data-groups='["all","other"]'>
                            <div class="folio-img">
                                <div class="portfolio-item">
                                    <div class="thumbnail">
                                        <div class="thumb-img">
                                            <div class="link-attr">
                                                <a href="projects/saltytour.lt.png" data-gallery="global-gallery" data-parent="" data-toggle="lightbox" data-title=""  class="link-search animated linear"><i class="fa fa-search"></i></a>
                                                <a href="http://saltytour.lt" class="link-chain animated linear"><i class="fa  fa-chain"></i></a>
                                            </div>
                                            <img class="linear img-portfolio img-responsive" src="projects/saltytour.lt.png" alt="saltytour.lt">

                                            <div class="link"><a href="http://saltytour.lt">http://saltytour.lt</a></div>
                                            <div class="folio-caption"><i class="fa fa-caret-up"></i>
                                                <p>http://saltytour.lt</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>

                </div>
            </div>
            <!-- end folio content -->
        </div>
        <!-- end col -->
    </div>
    <!--end container-->


</div>
<!-- /Portfolio -->
*/?>

<!--cv-->
<div id="cv" class="page page-bgcolor">
    <div class="container">
        <div class="row">
            <div class="col-md-10  col-md-offset-1">
                <div class="build title-page">
                    <h2 class="text-center">Curriculum Vitae <span style="color: #bebebd">(CV)</span></h2>

                    <div class="line-title bg-primary"></div>
                </div>
            </div>
            <!-- end col -->
        </div>
        <!-- end row -->
        <div class="row">
            <div class="col-md-12 ">
                <div class="thumbnail" style="margin-top: 10px">
                    <div class="thumb-img">
                        <div class="link-attr">
                            <a href="/cv/darius.matulionis.cv.pdf" class="link-chain animated linear"><i class="fa  fa-chain"></i></a>
                        </div>
                        <img class="img-responsive" src="cv/cv.png" alt="Darius Matulionis CV">
                    </div>
                </div>
            </div>
        </div>
        <!-- end row -->

    </div>
    <!-- end container -->
</div>
<!--contact-->

<!--contact-->
<div id="contact" class="page page-bgcolor">
    <div class="container">
        <div class="row">
            <div class="col-md-10  col-md-offset-1">
                <div class="build title-page">
                    <h2 class="text-center">GET IN TOUCH</h2>

                    <div class="line-title bg-primary"></div>
                </div>
            </div>
            <!-- end col -->
        </div>
        <!-- end row -->
        <div class="row">
            <div class="col-md-6 ">
                <div class="build contact clearfix text-center">
                    <span class="fa fa-phone"></span>

                    <p><a href="tel:+370 652 41 693">+370 652 41 693</a></p>

                </div>
            </div>
            <div class="col-md-6 ">
                <div class="build contact clearfix text-center">
                    <span class="fa fa-envelope"></span>

                    <p>darius@matulionis.lt</p>
                </div>
            </div>
        </div>
        <!-- end row -->

    </div>
    <!-- end container -->
</div>
<!--contact-->

<!-- Footer -->
<footer class="bg-black">
    <div class="container">
        <div class="row">
            <div class="col-md-6 ">
                <div class="cp-right">
                    <p>
                        &copy; <?php echo date('Y') ?> Template from
                        <a href="http://omahpsd.com" class="color-primary linear">OmahPSD</a>. All Rights Reserved.
                    </p>
                </div>
                <!-- end build -->
            </div>
            <!-- end col -->

            <div class="col-md-6 text-right">

                <ul class="list-inline">
                    <li><a href="https://www.github.com/DarkaOnLine" class="socIcon color-primary linear"><i
                                class="fa fa-github fa-2x"></i></a></li>
                    <li><a href="https://www.facebook.com/darius.matulionis" class="socIcon color-primary linear"><i
                                class="fa fa-facebook fa-2x"></i></a></li>
                    <li><a href="https://www.linkedin.com/in/dariusmatulionis" class="socIcon color-primary linear"><i
                                class="fa fa-linkedin fa-2x"></i></a></li>
                    <li><a href="https://twitter.com/DarkaOnLine" class="socIcon color-primary linear"><i
                                class="fa fa-twitter fa-2x"></i></a></li>
                    <li><a href="https://www.youtube.com/user/DarkaOnLine" class="socIcon color-primary linear"><i
                                class="fa fa-youtube fa-2x"></i></a></li>
                    <li><a href="httpss://plus.google.com/110738065975686141076" rel="publisher" class="socIcon color-primary linear"><i
                                class="fa fa-google-plus fa-2x"></i></a></li>
                    <li><a href="skype:darsem?chat" class="socIcon color-primary linear"><i
                                class="fa fa-skype fa-3x"></i></a></li>
                </ul>

            </div>
        </div>
    </div>
</footer>
<!-- /Footer -->

<!-- JavaScript -->
<script src="js/jquery-1.10.2.js"></script>
<script src="js/bootstrap.js"></script>
<script src="js/jquery.sticky.js"></script>
<script src="js/jquery.nav.js"></script>
<script src="js/jquery.scrollTo.js"></script>
<script src="js/jquery.flexslider.js"></script>
<script type="text/javascript" src="js/ekko-lightbox.js"></script>
<script src="js/jquery.easing.1.3.js"></script>
<script src="js/jquery.shuffle.js"></script>
<script src="js/script.js"></script>

<!-- Custom JavaScript for the Side Menu and Smooth Scrolling -->

</div>
</body>

</html>
