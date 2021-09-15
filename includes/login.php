<?php
require 'common.php';
?>
<?php
if (isset($_SESSION['email'])) {
    header('location: index.php') ;
}
?>
<html>
    <head>


        <link rel="stylesheet" href="../bootstrap/css/bootstrap.css" type="text/css">
        <script type="text/javascript" src="../bootstrap/js/jquery-3.5.1.min.js"></script>
        <script type="text/javascript" src="../bootstrap/js/bootstrap.js"></script>


        <title>glyphicons</title>
        <link href="stylesheet.css" rel="stylesheet" type="text/css">
    </head>
    <body>
        <?php
        include 'header1.php';
        ?>
        <br> <br> <br> <br> <br> <br> <br>

<div class="container">
            <div class="row">
                <div class="col-xs-4 col-xs-offset-4">
                    <div class="panel panel-primary" >
                        <div class="panel-heading">
                            <h4>LOGIN</h4>
                        </div>
                        <div class="panel-body">
                            <form method="post" action="login_submit.php">
                            <p class="text-warning"> login to make purchase </p>
                            
                                <div class="form-group">
                                    <input type="email" class="form-control"  placeholder="Email" name="email">
                                </div>
                                <div class="form-group">
                                    <input type="password" class="form-control" placeholder="Password" name="password">
                                </div>
                            <button type="submit" name="submit" class=" btn btn-primary"> login  </button><br><br>
                            </form><br/>
                        </div>
                        <div class="panel-footer"><p>Don't have an account? <a href="signup.php?action=signup">Register</a></p></div>
                    </div>
                </div>
            </div>
        </div>
   

        <br> <br> <br> <br> 

<?php
include 'footer.php';
?>
 </body>
</html>

