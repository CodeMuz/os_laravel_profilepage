
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Profile Page and portfolio of Murray Wynnes">
    <meta name="author" content="Murray Wynnes">
    <link rel="icon" href="../../favicon.ico">

    <title>Murray Wynnes // London Web developer</title>

    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css" rel="stylesheet">

    <!-- Custom Compiled CSS -->
    <link rel="stylesheet" href="{{ config('app.env') == "production" ? secure_asset(elixir("css/all.css")) : elixir("css/all.css") }}">

    <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

    <link href='https://fonts.googleapis.com/css?family=Montserrat' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/css?family=Open+Sans" />
</head>

<body id="page-top" class="index">

<!-- Navigation -->
<nav class="navbar navbar-default navbar-fixed-top">
    <div class="container">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header page-scroll">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="#page-top">Murray Wynnes</a>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav navbar-right">
                <li class="hidden">
                    <a href="#page-top"></a>
                </li>
                <li class="page-scroll">
                    <a href="#portfolio">Work</a>
                </li>
                <li class="page-scroll">
                    <a href="#about">About</a>
                </li>
                <li class="page-scroll">
                    <a href="#contact">Contact</a>
                </li>
            </ul>
        </div>
        <!-- /.navbar-collapse -->
    </div>
    <!-- /.container-fluid -->
</nav>

<!-- Header -->
<header>
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="intro-text">
                    <span class="intro-header" style="visibility:hidden;">My name is Murray Wynnes and I'm a web developer in London.</span>
                </div>
            </div>
        </div>
    </div>
</header>


<!-- Footer -->
<footer class="text-center">
    <div class="footer-above">
        <div class="container">
            <div class="row">
                <div class="footer-col col-md-4">
                    <h3>Location</h3>
                    <p>Ashford, Middlesex<br/>United Kingdom</p>
                </div>
                <div class="footer-col col-md-4">
                    <h3>Profile</h3>
                    <ul class="list-inline">
                        <li>
                            <a target="_blank" data-toggle="tooltip" title="GitHub" href="https://github.com/CodeMuz" class="btn-social btn-outline">
                                <i class="fa fa-fw fa-github" aria-hidden="true"></i>
                            </a>
                        </li>
                        <li>
                            <a target="_blank" data-toggle="tooltip" title="CV" href="CV.pdf" class="btn-social btn-outline"><i class="fa fa-fw fa-file"></i></a>
                        </li>
                        <li>
                            <a target="_blank" data-toggle="tooltip" title="LinkedIn" href="https://www.linkedin.com/in/murraywynnes" class="btn-social btn-outline"><i class="fa fa-fw fa-linkedin"></i></a>
                        </li>
                    </ul>
                </div>
                <div class="footer-col col-md-4">
                    <h3>Social</h3>
                    <ul class="list-inline">
                        <li>
                            <a target="_blank" data-toggle="tooltip" title="Twitter" href="https://twitter.com/MurrayWynnes?lang=en-gb" class="btn-social btn-outline"><i class="fa fa-fw fa-twitter"></i></a>
                        </li>
                        <li>
                            <a target="_blank" data-toggle="tooltip" title="Instagram" href="https://www.instagram.com/muzzaaaaaa" class="btn-social btn-outline"><i class="fa fa-fw fa-instagram"></i></a>
                        </li>
                        <li>
                            <a target="_blank" data-toggle="tooltip" title="Google+" href="https://plus.google.com/u/0/110225041102740556595" class="btn-social btn-outline"><i class="fa fa-fw fa-google-plus-official"></i></a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div class="footer-below">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    © 2016 Murray Wynnes. All rights reserved.
                </div>
            </div>
        </div>
    </div>
</footer>

<!-- Bootstrap core JavaScript
================================================== -->
<!-- Placed at the end of the document so the pages load faster -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery.min.js"><\/script>')</script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>

<!-- Plugin JavaScript -->
<script src="http://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js"></script>
<script src="{{ config('app.env') == "production" ? secure_asset(elixir("js/all.js")) : elixir("js/all.js") }}"></script>


</body>

</html>
