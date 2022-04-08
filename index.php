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

    <title>Admin Login</title>
    <link rel="stylesheet" type="text/css" href="css/design.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>
    <div id="full">
         <div id ="inner-full">
        <div id="header" ><h2>Blood Bank Management System </h2></div>
        <div id="log" >
        <table>
                <form action="" method="post">
                    <tr>
                <td height="100px" align="center"><b> LOGIN</b></td>
                    </tr>
   <tr>  
                    <td width="150px">Enter Username</td>
                    <td width="200px" ><input type ="text"  class="form-control" name="un" palceholder ="Enteer Username"
                   ></td>
                </tr>
                <tr>
                    <td >Enter Password</td>
                    <td ><input type ="text" class="form-control" name="ps" palceholder ="Enter Pasword"></td>
                </tr>
                <tr>
                    <td><center><input type="submit" name ="sub"  class="btn btn-primary"  value ="Login" ></center></td>
                </tr>
            </table>
</form>
<?php
if (isset($_POST['sub']))
{
    $un=$_POST['un'];
  $ps=$_POST['ps'];
  $q=$db->prepare("SELECT *FROM admin WHERE name='$un' && pass='$ps' ");
  $q->execute();
  $res=$q->fetchALL(PDO::FETCH_OBJ);
  if($res){
$_SESSION ['un']=$un;



     header("Location: home.php");
  }
  else{
      echo"<script>alert('Wrong User') </script>"; 
  }
}
     ?>
      </div>
        <div id="footer" >Donate Blood <svg xmlns="http://www.w3.org/2000/svg" width="25" height="20" fill="rgb(230,115,104)" class="bi bi-droplet-half" viewBox="0 0 16 16">
  <path fill-rule="evenodd" d="M7.21.8C7.69.295 8 0 8 0c.109.363.234.708.371 1.038.812 1.946 2.073 3.35 3.197 4.6C12.878 7.096 14 8.345 14 10a6 6 0 0 1-12 0C2 6.668 5.58 2.517 7.21.8zm.413 1.021A31.25 31.25 0 0 0 5.794 3.99c-.726.95-1.436 2.008-1.96 3.07C3.304 8.133 3 9.138 3 10c0 0 2.5 1.5 5 .5s5-.5 5-.5c0-1.201-.796-2.157-2.181-3.7l-.03-.032C9.75 5.11 8.5 3.72 7.623 1.82z"/>
  <path fill-rule="evenodd" d="M4.553 7.776c.82-1.641 1.717-2.753 2.093-3.13l.708.708c-.29.29-1.128 1.311-1.907 2.87l-.894-.448z"/>
  </svg>,Save Lives </h4></div>
        </div>
    </div>
</body>
</html>