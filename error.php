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
<!-- sidebar -->
<div class="row row-offcanvas row-offcanvas-left">
    <div class="col-xs-6 col-sm-3 sidebar-offcanvas" id="sidebar" role="navigation">
        <ul class="nav">
            <li><a href=index.php>Introduction</a></li>
            <li><a href="send.php">Send</a></li>
            <li><a href="read.php">Read</a></li>
            <li><a href="carrier.php">Carrier</a></li>
            <li class="active"><a href="error.php">Error</a></li>
        </ul>
    </div>
        <!-- main area -->
    <div class="col-xs-12 col-sm-9">
    <h3>1 - Authentication Exception</h3>
    <hr>
    <h5>1.1 - Method Not Allowed</h5>
    <p>A request was made of a resource using a request method not supported by that resource; for example, using PUT on a read-only resource.</p>
    <h6>Response Header</h6>
    <pre class="prettyprint">status: 405</pre>
    <h6>Sample Response</h6>
        <pre class="prettyprint linenums">
        {
            "transactionStatus": 0,
            "error": {
                "message": "Method Not Allowed",
                "type": "AuthException",
                "code": 1001
            }
        }
        </pre>
    <h5>1.2 - Unauthorized</h5>
    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
    <h6>Response Header</h6>
    <pre class="prettyprint">status: 401</pre>
    <h6>Sample Response</h6>
        <pre class="prettyprint linenums">
        {
            "transactionStatus": 0,
            "error": {
                "message": "Unauthorized",
                "type": "AuthException",
                "code": 1002
            }
        }
        </pre>
    <h5>1.3 - Inactive account</h5>
    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
    <h6>Response Header</h6>
    <pre class="prettyprint">status: 403</pre>
    <h6>Sample Response</h6>
        <pre class="prettyprint linenums">
        {
            "transactionStatus": 0,
            "error": {
                "message": "Inactive account",
                "type": "AuthException",
                "code": 1003
            }
        }
        </pre>
    <h5>1.4 - Inactive subscription</h5>
    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
    <h6>Response Header</h6>
    <pre class="prettyprint">status: 403</pre>
    <h6>Sample Response</h6>
        <pre class="prettyprint linenums">
        {
            "transactionStatus": 0,
            "error": {
                "message": "Inactive subscription",
                "type": "AuthException",
                "code": 1004
            }
        }
        </pre>
    <h5>1.5 - Insufficient balance</h5>
    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
    <h6>Response Header</h6>
    <pre class="prettyprint">status: 403</pre>
    <h6>Sample Response</h6>
        <pre class="prettyprint linenums">
        {
            "transactionStatus": 0,
            "error": {
                "message": "Insufficient balance",
                "type": "AuthException",
                "code": 1005
            }
        }
        </pre>
    <h3>2 - Validator Exception</h3>
    <hr>
    <h5>2.1 - Missing parameter accesstoken</h5>
    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
    <h6>Response Header</h6>
    <pre class="prettyprint">status: 400</pre>
    <h6>Sample Response</h6>
        <pre class="prettyprint linenums">
        {
            "transactionStatus": 0,
            "error": {
                "message": "Bad Request. Missing parameter accesstoken",
                "type": "ValidatorException",
                "code": 2001
            }
        }
        </pre>
    <h5>2.2 - Missing parameter apikey</h5>
    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
    <h6>Response Header</h6>
    <pre class="prettyprint">status: 400</pre>
    <h6>Sample Response</h6>
        <pre class="prettyprint linenums">
        {
            "transactionStatus": 0,
            "error": {
                "message": "Bad Request. Missing parameter apikey",
                "type": "ValidatorException",
                "code": 2002
            }
        }
        </pre>
    <h5>2.3 - Empty accesstoken/apikey</h5>
    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
    <h6>Response Header</h6>
    <pre class="prettyprint">status: 200</pre>
    <h6>Sample Response</h6>
        <pre class="prettyprint linenums">
        {
            "transactionStatus": 0,
            "error": {
                "message": {
                    "accesstoken": {
                        "isEmpty": "Value is required and can't be empty"
                    },
                    "apikey": {
                        "isEmpty": "Value is required and can't be empty"
                    }
                },
                "type": "ValidatorException",
                "code": 2003
            }
        }
        </pre>
    <h5>2.4 - Empty accesstoken</h5>
    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
    <h6>Response Header</h6>
    <pre class="prettyprint">status: 200</pre>
    <h6>Sample Response</h6>
        <pre class="prettyprint linenums">
        {
            "transactionStatus": 0,
            "error": {
                "message": {
                    "accesstoken": {
                        "isEmpty": "Value is required and can't be empty"
                    }
                },
                "type": "ValidatorException",
                "code": 2004
            }
        }
        </pre>
    <h5>2.5 - Empty apikey</h5>
    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
    <h6>Response Header</h6>
    <pre class="prettyprint">status: 200</pre>
    <h6>Sample Response</h6>
        <pre class="prettyprint linenums">
        {
            "transactionStatus": 0,
            "error": {
                "message": {
                    "apikey": {
                        "isEmpty": "Value is required and can't be empty"
                    }
                },
                "type": "ValidatorException",
                "code": 2005
            }
        }
        </pre>
    <h5>2.6 - Missing parameter number</h5>
    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
    <h6>Response Header</h6>
    <pre class="prettyprint">status: 200</pre>
    <h6>Sample Response</h6>
        <pre class="prettyprint linenums">
        {
            "transactionStatus": 0,
            "error": {
                "message": "Bad Request. Missing parameter number.",
                "type": "ValidatorException",
                "code": 2006
            }
        }
        </pre>
    <h5>2.7 - Missing parameter message</h5>
    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
    <h6>Response Header</h6>
    <pre class="prettyprint">status: 200</pre>
    <h6>Sample Response</h6>
        <pre class="prettyprint linenums">
        {
            "transactionStatus": 0,
            "error": {
                "message": "Bad Request. Missing parameter message.",
                "type": "ValidatorException",
                "code": 2007
            }
        }
        </pre>
    <h5>2.8 - Empty number/message</h5>
    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
    <h6>Response Header</h6>
    <pre class="prettyprint">status: 200</pre>
    <h6>Sample Response</h6>
        <pre class="prettyprint linenums">
        {
            "transactionStatus": 0,
            "error": {
                "message": {
                    "number": {
                        "phoneNumberNoMatch": "The input does not match a phone number format"
                    },
                    "message": {
                        "isEmpty": "Value is required and can't be empty"
                    }
                },
                "type": "ValidatorException",
                "code": 2008
            }
        }
        </pre>
    <h5>2.9 - Invalid number</h5>
    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
    <h6>Response Header</h6>
    <pre class="prettyprint">status: 200</pre>
    <h6>Sample Response</h6>
        <pre class="prettyprint linenums">
        {
            "transactionStatus": 0,
            "error": {
                "message": {
                    "number": {
                        "phoneNumberNoMatch": "The input does not match a phone number format"
                    }
                },
                "type": "ValidatorException",
                "code": 2009
            }
        }
        </pre>
    <h5>2.10 - Empty message</h5>
    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
    <h6>Response Header</h6>
    <pre class="prettyprint">status: 200</pre>
    <h6>Sample Response</h6>
        <pre class="prettyprint linenums">
        {
            "transactionStatus": 0,
            "error": {
                "message": {
                    "message": {
                        "isEmpty": "Value is required and can't be empty"
                    }
                },
                "type": "ValidatorException",
                "code": 2010
            }
        }
        </pre>
    <h5>2.11 - Invalid message length</h5>
    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
    <h6>Response Header</h6>
    <pre class="prettyprint">status: 200</pre>
    <h6>Sample Response</h6>
        <pre class="prettyprint linenums">
        {
            "transactionStatus": 0,
            "maxChar": {{maxChar}}
            "error": {
                "message": [
                    "Your subscription allows a maximum of {{X}} characters long",
                    "The input is more than {{X}} characters long"
                ],
                "type": "ValidatorException",
                "code": 2011
            }
        }
        </pre>
    <h5>2.12 - Invalid message length/coding scheme</h5>
    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
    <h6>Response Header</h6>
    <pre class="prettyprint">status: 200</pre>
    <h6>Sample Response</h6>
        <pre class="prettyprint linenums">
        {
            "transactionStatus": 0,
            "maxChar": {{maxChar}}
            "error": {
                "message": [
                    "The input contains a different data coding scheme",
                    "Your subscription allows a maximum of {{X}} characters long for this type of message",
                    "The input is more than {{X}} characters long"
                ],
                "type": "ValidatorException",
                "code": 2012
            }
        }
        </pre>
    </div>
</div>

</div><!--/.page-container-->

<script src="Flat-UI-master/js/jquery-1.8.3.min.js"></script>
<script src="Flat-UI-master/js/bootstrap.min.js"></script>
<script src="Flat-UI-master/bootstrap/js/google-code-prettify/prettify.js"></script>
<script src="js/plugins.js"></script>
<script src="js/main.js"></script>
<script type="text/javascript">
    //<!--
    prettyPrint();
    //-->
</script>
<script type="text/javascript">
    //<!--
    $(document).ready(function() { $('[data-toggle=offcanvas]').click(function() { $('.row-offcanvas').toggleClass('active');});});
    //-->
</script>
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