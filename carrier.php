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
<img src="/img/smsnica180x180.png" class="img-circle img-responsive"  > <h3 class="hidden-xs">SmsNica::API</h3>
<hr>
<!-- sidebar -->
<div class="row row-offcanvas row-offcanvas-left">
    <div class="col-xs-6 col-sm-3 sidebar-offcanvas" id="sidebar" role="navigation">
        <ul class="nav">
            <li><a href=index.php>Introduction</a></li>
            <li><a href="send.php">Send</a></li>
            <li><a href="read.php">Read</a></li>
            <li class="active"><a href="carrier.php">Carrier</a></li>
            <li><a href="error.php">Error</a></li>
        </ul>
    </div>
        <!-- main area -->
    <div class="col-xs-12 col-sm-9">
        <h6>Requesting Mobile Carrier</h6>

        <p>
            This is one our favorite methods since is pretty strait forward and it does not require any authentication to get you going.
        </p>


        <h6>Request URL:</h6>
        <p>Use the following url for determine a number's carrier.</p>
<pre class="prettyprint">
    GET|POST https://www.smsnica.com/api/v1/carrier
</pre>
        <br>
        <h6>Required Parameters:</h6>
        <div class="table-responsive">
            <table class="table table-striped">
                <thead>
                <tr>
                    <th style="width: 100px;">Name</th>
                    <th style="width: 50px;">Type</th>
                    <th>Description</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                    <td>number</td>
                    <td>string</td>
                    <td>The mobile number you wish to get carrier's name</td>
                </tr>
                </tbody>
            </table>
        </div>
        <br>
        <!-- Nav tabs -->
        <h6>Sample Snippets:</h6>
        <ul class="nav nav-tabs">
            <li class="active"><a href="#php" data-toggle="tab">PHP</a></li>
            <li><a href="#jquery" data-toggle="tab">jQuery.ajax()</a></li>
            <li><a href="#getjson" data-toggle="tab">jQuery.getJSON()</a></li>
            <li><a href="#node" data-toggle="tab">NodeJs</a></li>
            <li><a href="#ruby" data-toggle="tab">Ruby</a></li>
        </ul>

        <!-- Tab panes -->
        <div class="tab-content">
            <div class="tab-pane active" id="php">
<pre class="prettyprint linenums">
// Get cURL resource
$curl = curl_init();
// Set some options
curl_setopt_array($curl, array(
    CURLOPT_RETURNTRANSFER => 1,
    CURLOPT_SSL_VERIFYPEER => 0,
    CURLOPT_URL => 'https://www.smsnica.com/api/v1/carrier',
    CURLOPT_POST => 1,
    CURLOPT_POSTFIELDS => array(
        'number' => {{number}}
    )
));
// Send the request & save response to $resp
$resp = curl_exec($curl);
// Close request to clear up some resources
curl_close($curl);
</pre>
            </div>
            <div class="tab-pane" id="jquery">
<pre class="prettyprint lang-js linenums">
(function($){
    $.ajax({
        type: 'POST',
        url: 'https://www.smsnica.com/api/v1/carrier',
        dataType: 'json',
        data: {
            number: "{{number}}"
        },
        success: function(data){
            console.log(data);
        },
        complete: function(){
            //Implement your logic
        },
        error: function(jqXHR, textStatus, errorThrown){
            console.log(errorThrown);
        }
    });
})(jQuery);
</pre>
            </div>
            <div class="tab-pane" id="getjson">
<pre class="prettyprint lang-js linenums">
    (function($){
        $.getJSON( 'https://www.smsnica.com/api/v1/carrier', {
            number: "{{number}}"
        })
            .done(function( data ) {
                console.log(data);
            });
    })(jQuery);
</pre>
            </div>
            <div class="tab-pane" id="node">
<pre class="prettyprint lang-js linenums">
var https = require('https');

var options = {
  hostname: 'https://www.smsnica.com/api/v1/carrier',
  port: 443,
  path: '/number={{number}},
  method: 'GET'
};

var req = https.request(options, function(res) {
  console.log("statusCode: ", res.statusCode);
  console.log("headers: ", res.headers);

  res.on('data', function(d) {
    process.stdout.write(d);
  });
});
req.end();

req.on('error', function(e) {
  console.error(e);
});
</pre>
            </div>
            <div class="tab-pane" id="ruby">
<pre class="prettyprint lang-rb linenums">
require "net/https"
require "uri"

uri = URI.parse('https://www.smsnica.com/api/v1/carrier')

http = Net::HTTP.new(uri.host, uri.port)

request = Net::HTTP::Post.new(uri.request_uri)
request.set_form_data(
        number => "{{number}}"
)

response = http.request(request)
</pre>
            </div>
        </div>
        <br>
        <h6>Sample Response:</h6>
<pre class="prettyprint linenums">
{
    "transactionStatus": 1,
    "processId": "MjEzMA==",
    "number": "50583240355",
    "carrier": "movistar",
    "dateTime": {
        "date": "2014-04-11 17:46:48",
        "timezone_type": 3,
        "timezone": "America/Managua"
    },
    "code": 200
}
</pre>
        <br>


    </div><!-- /.col-xs-12 main -->
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