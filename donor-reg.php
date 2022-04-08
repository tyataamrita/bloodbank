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
         
         <h1>Donor Registration</h1>  
         <center>
             <div id="form">
             <form action="" method="post">
                 <table>
                     <br>
                     <h3>Donor Registration Form</h3>
                     
                     <tr><td> Name</td>
                         <td><input type="text" class="form-control" name="name" placeholder ="Enter full name"></td> </tr>
                         
       
        <tr><td> Age</td>
                         <td><input type="text" name="age" class="form-control" placeholder ="Enter Age"></td> </tr>
                       
                      
                         
                         <tr> <td>Select Blood Group</td>
                         <td> <select name="bgroup" class=" btn-dark dropdown-toggle"  >
                             <option>A+</option>
                             <option>B+</option>
                             <option>AB+</option>
                             <option>O+</option>
                             <option>O-</option>
                             <option>A-</option>
                             <option>B-</option>
                             <option>AB-</option>
                             
                         </select>

<td><br><b>Gender:</b>
    <input type="radio"  name="gender" value="female">FEMALE
   <input type="radio" name="gender" value="male"> Male
   <input type="radio" name="gender" value="others"> Others<br>
</td>
                        </tr>
                        <tr>
                        <td> E-mail</td>
                         <td><input type="text" class="form-control" name="email" placeholder ="Enter e-mail"></td>
                        </tr>
                        <tr>
                         <td> <br>Mobile No.</td>
                         <td><input type="text" class="form-control"name="mob" placeholder ="Enter mobile no"></td>
                        </tr>
                        <tr>
                        
                         <td>Address</td>
                         <td><input type="textarea" name="address" class="form-control" placeholder ="Enter address"></td>
                        
                         <td >City </td>
                         <td><input type="text" name="city" class="form-control" placeholder ="Enter city name"></td>
                        </tr>
                        
                        <tr>
                        <td><input type="submit" name="sub" class=" btn-dark" value="Save"></td>
        </tr>
                 </table>
             </form>
             <?php
             if (isset($_POST['sub']))
             {
                 $name=$_POST['name'];
                 $age=$_POST['age'];
                 $bgroup=$_POST['bgroup'];
                 $gender=$_POST['gender'];
                 $email=$_POST['email'];
                $mob=$_POST['mob'];  
                 $address=$_POST['address'];               
                 $city=$_POST['city'];
                
                 
                $q=$db->prepare("INSERT INTO donor_registration (name,age,bgroup,gender,email,mob,address,city)values(:name,:age,:bgroup,:gender,:email,:mob,:address,:city)");
                $q->bindValue('name',$name);
                $q->bindValue('age',$age);
                $q->bindValue('bgroup',$bgroup);
                $q->bindValue('gender',$gender);
                $q->bindValue('email',$email);
                $q->bindValue('mob',$mob);
                $q->bindValue('address',$address);
                $q->bindValue('city',$city);
                
                
               if ($q->execute())
               {
                echo"<script>alert('Donor Registration Sucessful')</script>"; 
               }



                  
             else{
                 echo"<script>alert('Donor Registration Failed')</script>";
             }  
            }          
             ?>
             </div>
         </center>     
  
      </div>
      
      <a href="logout.php"><input type="submit" name ="sub"  class="btn btn-primary"  value ="Logout" ></a></p>
      <div id="footer" >Donate Blood ,Save Lives </h4></div>
   
    
    </div>
        </div>
    </div>
</body>
</html> 