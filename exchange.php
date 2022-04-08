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
         
         <h1>Exchange Blood Donor Registration</h1>  
         <center>
             <div id="form">
             <form action="" method="post">
                 <table>
                 <br>
                     <h3>Blood Exchange Registration Form</h3><br>
                     <tr>
                         <td> Name</td>
                         <td><input type="text"class="form-control" name="name" placeholder ="Enter name"></td>
                        </tr>
                        <tr><td> Age</td>
                         <td><input type="text"class="form-control" name="age" class="form-control" placeholder ="Enter Age"></td> </tr>
                       
                        <tr>
                            
                        <td>E-mail</td>
                         <td><input type="text"class="form-control" name="email" placeholder ="Enter e-mail"></td>
                         <td>Mobile No.</td>
                         <td><input type="text" class="form-control"name="mob" placeholder ="Enter mobile no"></td>
                        </tr>
                        <tr>
                        <td>Address</td>
                         <td><input type="text" name="address"class="form-control" placeholder ="Enter address"></td>
                         
                        <td><br><b>Gender:</b>
    <input type="radio"  name="gender" value="female">FEMALE
   <input type="radio" name="gender" value="male"> Male
   <input type="radio" name="gender" value="others"> Others
</td>
             
                         
                        </tr>
                        <tr>
                         
                         <td>Select Blood Group</td>
                         <td> <select name="bgroup" class=" btn-danger dropdown-toggle">
                             <option>A+</option>
                             <option>B+</option>
                             <option>AB+</option>
                             <option>O+</option>
                             <option>O-</option>
                             <option>A-</option>
                             <option>B-</option>
                             <option>AB-</option>
                             
                         </select></td>
                         <td>Exchange Blood Group</td>
                         <td> <select name="egroup"class=" btn-dark dropdown-toggle" >
                             <option>A+</option>
                             <option>B+</option>
                             <option>AB+</option>
                             <option>O+</option>
                             <option>O-</option>
                             <option>A-</option>
                             <option>B-</option>
                             <option>AB-</option>
                             
                         </select></td>
                        </tr>
                        
                        <td><br><input type="submit" name="sub" class=" btn-dark" value="Save"></td>
        </tr>
                 </table>
             </form>
             <?php
             if (isset($_POST['sub']))
             {
                 //front end data input
                 $name=$_POST['name'];
                 $age=$_POST['age'];
                 $email=$_POST['email'];
                $mob=$_POST['mob'];
                $address=$_POST['address'];  
                $gender=$_POST['gender'];               
                 $bgroup=$_POST['bgroup'];
                 $egroup=$_POST['egroup'];//frontend data input end

                 $q2="SELECT *FROM donor_registration where bgroup ='$bgroup'";
                 $st=$db->query($q2);
                $num_row=$st->fetch();
               $id=$num_row['id'];
               $name=$num_row['name'];
               $b1=$num_row['bgroup'];
               $mob=$num_row['mob'];
              $q1="INSERT INTO outstock_blood (bname,name,mob) values (?,?,?)";
              $st1=$db->prepare($q1);
              $st1->execute([$b1,$name,$mob]);
               
              $delete_q="delete donor_reistration where id='$id'";
               $st1=$db->prepare($delete_q);
               $st->execute();
              
               $q=$db->prepare("INSERT INTO exchange_registration (name,age,email,mob,address,gender,bgroup,egroup)values(:name,:age,:email,:mob,:address,:gender,:bgroup,:egroup)");
                $q->bindValue('name',$name);
                $q->bindValue('age',$age);
                $q->bindValue('email',$email);
                $q->bindValue('mob',$mob);
                $q->bindValue('address',$address);
                $q->bindValue('gender',$gender);
                $q->bindValue('bgroup',$bgroup);
                $q->bindValue('egroup',$egroup);
               if ($q->execute())
               {
                echo"<script>alert(' Exchange Blood Donor Registration Sucessful')</script>"; 
               
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