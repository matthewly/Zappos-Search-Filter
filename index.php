<?php
    session_start();
    $budget = number_format((float)$_POST['budget'], 2, '.', '');
    $_SESSION['budget'] = $budget;
?>
<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <title>Zappos Shoe Filter</title>
    <link href="css/style.css" type="text/css" rel="stylesheet" media="screen"/>
    <link href="css/animate.css" type="text/css" rel="stylesheet" />

    <link href="css/bootstrap.css" type="text/css" rel="stylesheet" />
</head>
<body>

<nav class="navbar navbar-default">
    <div class="container-fluid">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
            <a class="navbar-brand" href="#">Zappos Search Filter</a>
        </div>
        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav">
                <li class="active"><a href="#">Home <span class="sr-only">(current)</span></a></li>
                <li><a href="about.php">About</a></li>
            </ul>
        </div><!-- /.navbar-collapse -->
    </div><!-- /.container-fluid -->
</nav>

<div class="jumbotron">
    <div class="container">
        <h1 align="center">Zappos Search Filter</h1>
    </div>
</div>


<!-- Input field -->
<div align="center">
    <form id="form" class="navbar-form" role="search" action=index.php method="post">
        <div class="form-group">
            <div class="input-group">
                <span class="input-group-addon"><span class="glyphicon glyphicon-usd"></span></span>
                <input type="text" id="currencyField" value="<?php if (isset($_POST["submit"])) {echo $_SESSION['budget'];} ?>" name="budget" class="form-control currency" placeholder="Enter budget">
            </div><br>
            <div class="form-group">
                <label for="sel1">Select product:</label>
                <select class="form-control" id="sel1" name="productType">
                    <option>Shoes</option>
                    <option>Pants</option>
                    <option>Tops</option>
                    <option>Hand bags</option>
                    <option>Hats</option>
                </select>
            </div><br><br><br>
            <button type="submit" name="submit" class="btn btn-default">Submit</button><br>
        </div>
    </form>
</div>
</div>


    <?php include 'FormSubmit.php';?>
</table>
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
<script type="text/javascript" src="js/jquery.formatCurrency-1.4.0.js"></script>
<!-- Include all compiled plugins (below), or include individual files as needed -->
<script src="js/currencyformat.js"></script>
    <script src="js/scripts.js"></script>
</body>
</html>