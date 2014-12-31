<?php
session_start();
$budget = number_format((float)$_POST['budget'], 2, '.', '');
$_SESSION['budget'] = $budget;
?>
<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <title>Zappos Search Filter</title>
    <link href="css/style.css" type="text/css" rel="stylesheet" media="screen"/>
    <link href="css/animate.css" type="text/css" rel="stylesheet" />

    <link href="css/bootstrap.css" type="text/css" rel="stylesheet" />
</head>
<body>

<nav class="navbar navbar-default">
    <div class="container-fluid">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
            <a class="navbar-brand" href="index.php">Zappos Search Filter</a>
        </div>
        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav">
                <li><a href="index.php">Home</a></li>
                <li class="active"><a href=#>About<span class="sr-only">(current)</span></a></li>
            </ul>
        </div><!-- /.navbar-collapse -->
    </div><!-- /.container-fluid -->
</nav>

<div class="jumbotron">
    <h2>Zappos Search Filter</h2><hr>
    <p><i>PHP web application that filters the Zappos catalog based on the user's given budget.</i></p><hr>
    <h2>Technologies Involved</h2>
    <p><b>Front End</b>: PHP, HTML/CSS, JavaScript, Bootstrap</p>
    <p><b>Back End</b>: PHP, JSON Parsing</p><br>
</div>




<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
<!-- Include all compiled plugins (below), or include individual files as needed -->
<script src="js/bootstrap.min.js"></script>
</body>
</html>