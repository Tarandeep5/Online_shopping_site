<?php 
require 'common.php'
?>

<?php
if (isset($_SESSION['email'])) {
    header('location: index.php') ;
}
?>

<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
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
       
        <br> <br> <br>  
          <div class="container">
        <div class="row top_margin">
            <div class="col-xs-6 col-xs-offset-3">
                <div class="panel panel-primary">
                    <div class="panel-heading">signup</div>
                    <div class="panel-body">
                        <form method="post" action="signup_script.php">
                           <div class="form-group">
                                <label for="name">name</label>
                                <input type="name" class="form-control" id="name" name="name">
                            </div> 
                            
                            
                            <div class="form-group">
                                <label for="email">Email</label>
                                <input type="email" class="form-control" id="email" name="email">
                            </div>
                            <div class="form-group">
                                <label for="password">password</label>
                                <input type="password" class="form-control" id="password" name="password">
                            </div>
                            <div class="form-group">
                                <label for="contact">contact</label>
                                <input type="number" class="form-control" id="contact" name="contact">
                            </div>
                            <div class="form-group">
                                <label for="city">city</label>
                                <input type="text" class="form-control" id="city" name="city">
                            </div>
                            <div class="form-group">
                                <label for="address">address</label>
                                <input type="text" class="form-control" id="address" name="address">
                            </div>
                            
                            
                            <button href="products.php" type="submit" class="btn btn-primary" value=”registration_submit”>Submit</button>
                            <h4>already have an account <a href="login.php"> login </a> here </h4>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
         <?php
        include 'footer.php';
        ?>
</body>
</html>