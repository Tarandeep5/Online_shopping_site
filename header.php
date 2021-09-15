<div class="navbar navbar-inverse navbar-fixed-top">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span> 
                <span class="icon-bar"></span>
            </button> <a class="navbar-brand" href="index.php">Lifestyle Store</a>
            <div class="collapse navbar-collapse" id="myNavbar"> 
                <ul class="nav navbar-nav navbar-right">
                    <ul class="navbar-nav navbar-right"> 
                        <?php 
                        if (isset($_SESSION['email_id'])) {
                           

                           echo '<li><a href="cart.html"><span class="glyphicon glyphicon-shopping-cart"></span> cart</a> </li>';
                           echo '<li><a href="#"><span class="glyphicon glyphicon-user"></span> Settings </a> </li>';
                           echo '<li><a href="index.html"><span class="glyphicon glyphicon-log-in"></span> Logout</a> </li>';
                            
                        } 
                        else 
                            {
                             echo '<li><a href="signup.php"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>';
                            echo '<li><a href="login.php"><span class="glyphicon glyphicon-log-in"></span>';
                                   
                            }
                           
                                
                        ?>
                    </ul>
            </div>
        </div> 
    </div>
</div>


