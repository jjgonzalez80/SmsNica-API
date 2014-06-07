<!doctype html>
<html class="no-js" lang="">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title></title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- Place favicon.ico and apple-touch-icon(s) in the root directory -->

        <link rel="stylesheet" href="css/normalize.css">
        <link rel="stylesheet" href="Flat-UI-master/bootstrap/css/bootstrap.css">
        <link rel="stylesheet" href="Flat-UI-master/css/flat-ui.css">
        <link rel="stylesheet" href="css/prettify.css">
        <link rel="stylesheet" href="css/main.css">
        <script src="js/vendor/modernizr-2.8.0.min.js"></script>
        <link href="/img/favicon.ico" rel="shortcut icon" type="image/vnd.microsoft.icon">
        <noscript>
            <style type="text/css">
                .prettyprint{
                    color: #FFFFFF;
                    padding-left:60px
                }
            </style>
        </noscript>
    </head>
    <body>
        <a class="hidden-xs img-responsive" href="https://github.com/BruceLampson/SmsNicaApi"><img style="position: absolute; top: 0; right: 0; border: 0;" src="https://camo.githubusercontent.com/e7bbb0521b397edbd5fe43e7f760759336b5e05f/68747470733a2f2f73332e616d617a6f6e6177732e636f6d2f6769746875622f726962626f6e732f666f726b6d655f72696768745f677265656e5f3030373230302e706e67" alt="Fork me on GitHub" data-canonical-src="https://s3.amazonaws.com/github/ribbons/forkme_right_green_007200.png"></a>
        <div class="page-container">

            <!-- top navbar -->
            <div class="navbar navbar-default" role="navigation">
                <div class="container">
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle" data-toggle="offcanvas" data-target=".sidebar-nav">
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                        <a class="navbar-brand" href="#">

                        </a>
                    </div>
                </div>
            </div>

            <div class="container">
                <!--[if lt IE 8]>
                <p class="browsehappy">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
                <![endif]-->
                <noscript><h1>We recommend enabling JavaScript for a better user experience ;)</h1></noscript>
                <img src="/img/smsnica180x180.png" class="img-circle img-responsive"  > <h3 class="hidden-xs">SmsNica API</h3>
                <hr>
                <div class="row row-offcanvas row-offcanvas-left">
                    <!-- sidebar -->
                    <div class="col-xs-6 col-sm-3 sidebar-offcanvas" id="sidebar" role="navigation">
                        <ul class="nav">
                            <li class="active"><a href=index.php>Introduction</a></li>
                            <li><a href="send.php">Send</a></li>
                            <li><a href="read.php">Read</a></li>
                            <li><a href="carrier.php">Carrier</a></li>
                            <li><a href="error.php">Error</a></li>
                        </ul>
                    </div>
                    <!-- main area -->
                    <div class="col-xs-12 col-sm-9">
                        <p>Welcome to SmsNica's API documentation. We have created a simple name spaced API that allows you full control over your account.</p>
                        <p>All of the functionality that you find in our web control panel will be made available via the API allowing you to build your own control interface using our API.</p>
                    </div><!-- /.col-xs-12 main -->
                </div><!--/.row-->
            </div><!--/.container-->
        </div><!--/.page-container-->

        <script src="Flat-UI-master/js/jquery-1.8.3.min.js"></script>
        <script src="Flat-UI-master/js/bootstrap.min.js"></script>
        <script src="js/plugins.js"></script>
        <script src="js/main.js"></script>

        <!-- Google Analytics: change UA-XXXXX-X to be your site's ID. -->
        <script>
            (function(b,o,i,l,e,r){b.GoogleAnalyticsObject=l;b[l]||(b[l]=
            function(){(b[l].q=b[l].q||[]).push(arguments)});b[l].l=+new Date;
            e=o.createElement(i);r=o.getElementsByTagName(i)[0];
            e.src='//www.google-analytics.com/analytics.js';
            r.parentNode.insertBefore(e,r)}(window,document,'script','ga'));
            ga('create','UA-XXXXX-X');ga('send','pageview');
        </script>
    </body>
</html>
