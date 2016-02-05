<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="api for tibia information">
    <meta name="author" content="thusk">

    <title>TibiaQueries</title>

    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">


    <link rel="stylesheet" href="https://highlightjs.org/static/demo/styles/monokai-sublime.css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
    <script src="https://highlightjs.org/static/highlight.pack.js"></script>
    <style>
        body {
            padding-top: 70px; /* Required padding for .navbar-fixed-top. Remove if using .navbar-static-top. Change if height of navigation changes. */
        }
    </style>
</head>

<body>

<!-- Navigation -->
<nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
    <div class="container">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="#">TibiaQueries</a>
        </div>
        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav">
                <li class="active">
                    <a href="#">About</a>
                </li>
            </ul>
        </div>
        <!-- /.navbar-collapse -->
    </div>
    <!-- /.container -->
</nav>

<!-- Page Content -->
<div class="container">

    <!-- Row -->
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">Worlds
                <small>list all worlds available</small>
            </h1>
        </div>
    </div>
    <!-- /.row -->
    <!-- Row -->
    <div class="row">
        <div class="col-lg-12">
            <div class="panel panel-primary">
                <div class="panel-heading">GET: http://server.name/worlds</div>
                <div class="panel-body">
                    It will return somethings like:
<pre><code class="json">[
        {"type":"world","name":"Garnera","pvp_type":"pvp"},
        {"type":"world","name":"Pythera","pvp_type":"pvp"},
        {"type":"world","name":"Mortera","pvp_type":"retro-pvp"},
        {"type":"world","name":"Astera","pvp_type":"non-pvp"}
]
</code></pre>
                </div>
            </div>
        </div>
    </div>
    <!-- /.row -->


    <!-- Row -->
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">Online in
                <small>list all characters online in a world</small>
            </h1>
        </div>
    </div>
    <!-- /.row -->
    <!-- Row -->
    <div class="row">
        <div class="col-lg-12">
            <div class="panel panel-primary">
                <div class="panel-heading">GET: http://server.name/world/Garnera</div>
                <div class="panel-body">
                    It will return somethings like:
<pre><code class="json">[
        {"type":"character","name":"Dann iel","level":"429","vocation":"Elite Knight"},
        {"type":"character","name":"Aexa","level":"429","vocation":"Royal Paladin"},
        {"type":"character","name":"Maluk'Oz","level":"361","vocation":"Royal Paladin"},
        {"type":"character","name":"Weinhard","level":"7","vocation":"Druid"}
]</code></pre>
                </div>
            </div>
        </div>
    </div>
    <!-- /.row -->

    <!-- Row -->
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">Online in
                <small>list all characters online in a world</small>
            </h1>
        </div>
    </div>
    <!-- /.row -->
    <!-- Row -->
    <div class="row">
        <div class="col-lg-12">
            <div class="panel panel-primary">
                <div class="panel-heading">GET: http://server.name/world/Garnera</div>
                <div class="panel-body">
                    It will return somethings like:
<pre><code class="json">[
        {"type":"character","name":"Dann iel","level":"429","vocation":"Elite Knight"},
        {"type":"character","name":"Aexa","level":"429","vocation":"Royal Paladin"},
        {"type":"character","name":"Maluk'Oz","level":"361","vocation":"Royal Paladin"},
        {"type":"character","name":"Weinhard","level":"7","vocation":"Druid"}
]</code></pre>
                </div>
            </div>
        </div>
    </div>
    <!-- /.row -->


    <hr>

    <!-- Footer -->
    <footer>
        <div class="row">
            <div class="col-lg-12">
                <p>Copyright &copy; Thusk 2016</p>
            </div>
        </div>
        <!-- /.row -->
    </footer>

</div>
<!-- /.container -->

<!-- jQuery -->
<script src="js/jquery.js"></script>

<!-- Bootstrap Core JavaScript -->
<script src="js/bootstrap.min.js"></script>
<script>hljs.initHighlightingOnLoad();</script>
<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
</body>

</html>
