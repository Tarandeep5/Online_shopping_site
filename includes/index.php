<?php
require 'common.php';
?>
<?php
if (isset($_SESSION['email'])) {
    header('location: products.php') ;
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
        include 'header.php';
        ?>


        <div class="row">  

            <div class="col-sm-4"> 
                <div class="thumbnail">
                    <a href="products.php">  <img src="img/camera.jpg" class="img-responsive img-thumbnail" alt="responsive image"></a>
                    <div class="caption">
                        <h3> cameras </h3>
                        <p> choose among the best in the world </p>

                    </div>

                </div>
            </div>
            <div class="col-sm-4"> 
                <div class="thumbnail">
                    <a href="products.php"> <img src="img/shirt.jpg" class="img-responsive  img-thumbnail" alt="responsive image"></a>
                    <div class="caption">
                        <h3> shirts </h3>
                        <p>our equisite collection of the shirts </p>

                    </div>   

                </div>
            </div>
            <div class="col-sm-4">
                <div class="thumbnail">                  
                    <a href="products.php">   <img src="img/watch.jpg" class="img-responsive img-thumbnail" alt="responsive image"></a>
                    <div class="caption">
                        <h3> watches </h3>
                        <p> original watches of best brand in the world </p>

                    </div>

                </div>
            </div>





        </div>

        <?php
        include 'footer.php';
        ?>

    </body>
</html>     


