
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
       
        <br> 
        
        <nav class="navbar navbar-inverse navbar-fixed-top">    
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#mynavbar">
                        
                        
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    
                    </button>
                 
                    
                    
                    
                    <a href="index.html" class="navbar-brand"> Lifestyle store</a>
                    </div>
            <div class="collapse navbar-collapse" id="mynavbar">
                <ul class="nav navbar-nav navbar-right">
                     <li><a href="cart.php"><span class="glyphicon glyphicon-shopping-cart"></span> cart</a> </li>
                    <li><a href="settings.php"><span class="glyphicon glyphicon-user"></span> Settings </a> </li>
                    <li><a href="logout.php"><span class="glyphicon glyphicon-log-in"></span> Logout</a> </li>
                </ul>
            </div>
             </div>
                   
           </nav>
        <br> <br> <br> <br> <br>
         <div class="container">
            <div class="row_style">
                <div class="col-xs-4 col-xs-offset-4">
                    <h3> change password </h3>
            <form>
              <div class="form-group">
                                    <input type="password" class="form-control"  placeholder="old password" id="oldpassword">
                                </div>
                                <div class="form-group">
                                    <input type="password" class="form-control" placeholder="new password" id="newpassword">
                                </div>
                                
                <div class="form-group">
                                    <input type="password" class="form-control" placeholder="Re-type password" id="password">
                                </div>
                                <div class="form-group"> 
                               <a href="products.html" class="button btn  btn-lg btn-primary"> change </a>
                           </div>
          
                            </form>
                
                
                
              </div>
        
            </div>
        
        
        </div>
        
        <br>  <br>  <br>  <br>  <br>  <br>  <br>  <br>  <br>  <br> 
        <footer>
             <div class="container">
                 <center>
            <p>Copyright Â© Lifestyle Store. All Rights Reserved | Contact Us: +91 90000 00000.</p>
                 </center>
             </div>
    
        </footer>
        
        
        
        
        
        
    </body>
</html>


