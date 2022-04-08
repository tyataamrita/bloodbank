<?php
include('connection.php'); 
session_start();
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
    <style>

</style>
</head>
<body>
    <div id="full">
         <div id ="inner-full">
        <div id="header"><h2><a href="home.php">Blood Bank Management System</a></h2></div>
        <div id="body">
      
         <br>
         <?php
          $un=$_SESSION['un'];
          if(!$un)
          {
              header("Location:index.php");
          }
         ?>
         <h1>Exchange Blood List</h1>  
         
             <table border="2"  class="table table-hover table-bordered" > 
                 
                <thead class="table-dark"><tr>
                    <th>Name</th>
                    <th>Age</th>
        
                    
                    <th>Email</th>
                    <th>Mob No</th>
                     <th>Address</th>
                     <th>Gender</th>
                    <th>Select Blood Group</th>
                    <th>Exchange Blood Group</th>
                   </tr>
                </thead>
                <?php
                $q=$db->query("SELECT *FROM exchange_registration");
   while($r1=$q->fetch(PDO::FETCH_OBJ)){
            
               ?>
                <tr>
                    <td><?=$r1->name;?></td>
                    <td><?=$r1->age;?></td>
                    <td><?=$r1->email;?></td>
                    <td><?=$r1->mob;?></td>
                    <td><?=$r1->address;?></td>
                    <td><?=$r1->gender;?></td>
                    <td><?=$r1->bgroup;?></td>
                    <td><?=$r1->egroup;?></td>
                </tr>
                <?php
                }
                ?>
            </table>
         
  
      </div>
      <a href="logout.php"><input type="submit" name ="sub"  class="btn btn-primary"  value ="Logout" ></a></p>
      <div id="footer" >Donate Blood ,Save Lives </h4></div>
    </div>
        </div>
    </div>
</body>
</html> 