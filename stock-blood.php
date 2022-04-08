<?php
include('connection.php'); 

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <title>Admin Login</title>
    <link rel="stylesheet" type="text/css" href="css/design.css">
</head>
<body>
    <div id="full">
         <div id ="inner-full">
        <div id="header" ><h2><a href="home.php">Blood Bank Management System</a></h2></div>
        <div id="body">
      
         <br>
         
         <h1>Stock Blood List</h1>  
         
            <table width=95% class="table table-hover table-bordered">
                <tr class="table-dark" >
                    <td><center><b>Name</b></center></td>
                    <td><center><b>Quantity</b></center></td>
                </tr>

                <tr>
                    <td><center>A+</center></td>
                <td><center>
                <?php
                $q=$db->query("SELECT *FROM donor_registration where bgroup='A+'");
  echo $row=$q->rowCount();
             ?>
             </center></td>
                </tr>

                <tr>
                    <td><center>B+</center></td>
                <td><center>
                <?php
                $q=$db->query("SELECT *FROM donor_registration where bgroup='B+'");
  echo $row=$q->rowCount();
             ?>
             </center></td>
                </tr>

                <tr>
                    <td><center>AB+</center>
                    </td>
                <td><center>
                <?php
                $q=$db->query("SELECT *FROM donor_registration  where bgroup='AB+'");
  echo $row=$q->rowCount();
             ?>
             </center></td>
                </tr>

                <tr>
                    <td><center>O+</center>
                    </td>
                <td><center>
                <?php
                $q=$db->query("SELECT *FROM donor_registration where bgroup='O+'");
  echo $row=$q->rowCount();
             ?>
             </center></td>
                </tr>
                
                <tr>
                    <td><center>A-</center></td>
                <td><center>
                <?php
                $q=$db->query("SELECT *FROM donor_registration where bgroup='A-'");
  echo $row=$q->rowCount();
             ?>
             </center></td>
                </tr>
                <tr>
                    <td><center>B-</center></td>
                <td><center>
                <?php
                $q=$db->query("SELECT *FROM donor_registration where bgroup='B-'");
  echo $row=$q->rowCount();
             ?>
             </center></td>
                </tr>


                <tr>
                    <td><center>AB-</center></td>
                <td><center>
                <?php
                $q=$db->query("SELECT *FROM donor_registration where bgroup='AB-'");
  echo $row=$q->rowCount();
             ?>
             </center></td>
                </tr>
                <tr>
                    <td><center>O-</center></td>
                <td><center>
                <?php
                $q=$db->query("SELECT *FROM donor_registration where bgroup='O-'");
  echo $row=$q->rowCount();
             ?>
             </center></td>
                </tr>


               
            </table>
                 
  
      </div>
      <a href="logout.php"><input type="submit" name ="sub"  class="btn btn-primary"  value ="Logout" ></a></p>
      <div id="footer" >Donate Blood ,Save Lives </h4></div>
    </div>
        </div>
    </div>
</body>
</html> 