<div class="navbar navbar-inverse navbar-fixed-top">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span> 
                <span class="icon-bar"></span>
            </button> <a class="navbar-brand" href="index.php">Lifestyle Store</a>
            <div class="collapse navbar-collapse" id="myNavbar"> 
                
                    <ul class="navbar-nav navbar-right navbar-icons-margin"> 
                        <?php if (isset($_SESSION['email'])) {
                            ?>

                            <li><a href="cart.php.html"><span class="glyphicon glyphicon-shopping-cart"></span> cart</a> </li>
                            <li><a href="#"><span class="glyphicon glyphicon-user"></span> Settings </a> </li>
                            <li><a href="logout.php"><span class="glyphicon glyphicon-log-in"></span> Logout</a> </li>
                            <?php
                        } else {
                            ?>
                            <li class="signupicon"><a href="signup.php"><span class="glyphicon glyphicon-user"></span> Sign Up </a></li>
                            <li class="loginicon"><a href="login.php"><span class="glyphicon glyphicon-log-in"></span> login </a></li>

                            <?php
                        }
                        ?>
                    </ul> 
            </div> 
        </div> 
    </div>
</div>
