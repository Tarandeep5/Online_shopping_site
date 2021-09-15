<?php
$con = mysqli_connect("localhost", "root", "", "ecommerce")or die($mysqli_error($con));
$select_query = "SELECT  id, email_id, first_name , last_name ,phone FROM users";
$select_query_result = mysqli_query($con, $select_query) or die(mysqli_error($con));
?>
<?php

function number_of_products_purchased($con, $user_id) {
  $users_products_query = "SELECT  id FROM users_products WHERE user_id = '$user_id'";
  $users_products_result = mysqli_query($con, $users_products_query);
  $number_of_products = mysqli_num_rows($users_products_result);
  return $number_of_products;
}
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Users</title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >
        <!--jQuery library--> 
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <!--Latest compiled and minified JavaScript--> 
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <meta name="viewport" content="width=device-width, initial-scale=1">
    </head>
</head>
<body>
    <div class="container">
        <?php while ($row = mysqli_fetch_array($select_query_result)) { ?>
          <div class="row">
              <div class="col-lg-12"><h4>User</h4></div>
          </div>
          <div class="row">
              <div class="col-xs-2">ID</div>
              <div class="col-xs-10"><?php echo $row['id']; ?></div>
          </div>
          <div class="row">
              <div class="col-xs-2">Email</div>
              <div class="col-xs-10"><?php echo $row['email_id']; ?></div>
          </div>
          <div class="row">
              <div class="col-xs-2">First Name</div>
              <div class="col-xs-10"><?php echo $row['first_name']; ?></div>
          </div>
        <div class="row">
              <div class="col-xs-2">last name</div>
              <div class="col-xs-10"><?php echo $row['last_name']; ?></div>
          </div>
        <div class="row">
              <div class="col-xs-2">phone no.</div>
              <div class="col-xs-10"><?php echo $row['phone']; ?></div>
          </div>
        
        
          <div class="row">
              <div class="col-xs-2">Products</div>
              <div class="col-xs-10"><?php echo number_of_products_purchased($con, $row['id']); ?></div>
          </div>
          <hr/>
        <?php
          
        ?>
    </div>
</body>
</html>
<?php
  include_once('fetch.php');
  $query = "select * from question_table";
  $result = mysql_query($query);
?>
<html>
    <title>
    <head>fetch data from database </head>
    </title>
    <body>
        <table align="center" border="1px" style="width:600px; line-height:40px;">
            <tr>
                <th colspan="5"> <h2> stackoverflow data</h2> </th>
            <t>
                <th> ID </th>
                 <th> TITLE</th>
                  <th> BODY </th>
                   <th>TAG </th>
                    <th> CREATED ON </th>
             
            </t>
          
                <?php
                while($rows = mysql_fetch_assoc($result))
                {
                ?>
                    <tr>
                     <td> <?php echo $rows[id]; ?>    </td>
                     <td> <?php echo $rows[Title]; ?>    </td>
                    <td> <?php echo $rows[Body]; ?>    </td>
                    <td> <?php echo $rows[Tag]; ?>    </td>
                    <td> <?php echo $rows[CreatedOn]; ?>    </td>
                         
                    </tr>
                
                
      
                
            </tr>
            
            
            <?php
                }
                ?>
           
         
        </table>
        
    </body>
 
</html>
            
      