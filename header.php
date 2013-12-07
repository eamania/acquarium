<?php
require_once 'class/autoloader.php';
$dbDate = new MysqlData();
$db = new myPDO("mysql:host=$dbDate->DatabaseServer;dbname=$dbDate->DatabaseName", $dbDate->DatabaseUsername, $dbDate->DatabasePassword);
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Acquarium</title>
        <link href="css/bootstrap.min.css" rel="stylesheet" media="screen">
        <script src="http://code.jquery.com/jquery-latest.min.js"type="text/javascript"></script>
        <script src="//ajax.googleapis.com/ajax/libs/jqueryui/1.10.3/jquery-ui.min.js"></script>
        <script src="http://netdna.bootstrapcdn.com/bootstrap/3.0.2/js/bootstrap.min.js"></script>

    </head>
    <body>

        <nav class="navbar navbar-default" role="navigation">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.php">MyAcquarium</a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav">
                    <li class="active"><a href="index.php">Acquarium Home Page</a></li>
                    <li><a href="acquarium.php">Acquarium</a></li>
                    <li class="dropdown">
                        <a href="fish.php" class="dropdown-toggle" data-toggle="dropdown">Fish <b class="caret"></b></a>
                        <ul class="dropdown-menu">
                            <li><a href="fish.php">Add</a></li>
                        </ul>
                    </li>
                </ul>

                <form class="navbar-form navbar-right" role="search">
                    <div class="form-group">
                        <input type="text" class="form-control" placeholder="Search">
                    </div>
                    <button type="submit" class="btn btn-default">Cerca</button>
                </form>



            </div><!-- /.navbar-collapse -->
        </nav>