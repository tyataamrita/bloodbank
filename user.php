<?php
include('connection.php'); 

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User</title>
    <link rel="stylesheet" type="text/css" href="css/user.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>
<div id="head" ><h2>Blood Bank Management System </h2></div>
    <div class ="header">
            <div class="logo">
                <img src="images/logo.png" width="95%" height="60px">
            </div>
        <div class="menu">
            <ul>
               <li> <a href="user.php" class="active">Home</a></li>
               <li> <a href="index.php">Admin</a></li>
              <li> <a href="stock-blood.php">Stock Blood</a></li>
              <li> <a href="donor-reg.php">Donor Registration</a></li>
              <li> <a href="exchange.php">Exchange Registration</a></li>
            </ul>
        </div>
        </div>




        <table><tr><td width=75%>
       <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="images/c.jpg" class="d-block w-100" >
    </div>
    <div class="carousel-item">
      <img src="images/b.jpg" class="d-block w-100" >
    </div>
    <div class="carousel-item">
      <img src="images/e.jpg" class="d-block w-100" >
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>

</td><td width="25%">
    <h2 class="text-danger">WHO ARE WE?</h2>
    <h4 class="text-warning"><q>  DONATE BLOOD , SAVE LIVES  </q></h4>
   <p> In Nepal, we need hundreds of blood donations every day. Blood products are used in the treatment of surgical patients, accident victims, cancer patients, and premature babies, just to mention something.</p>


<p>A blood bank is a place where blood is collected and stored before it is used for transfusions. Blood banking takes place in the lab.
 This is to make sure that donated blood and blood products are safe before they are used.</p>
 <p>Blood bank is a center where blood gathered as a result of blood donation is stored and preserved for later use in blood transfusion.The term "blood bank" typically refers to a division of a hospital where the storage of blood product occurs and where proper testing is performed (to reduce the risk of transfusion related adverse events). However, it sometimes refers to a collection center, and some hospitals also perform collection. Blood banking includes tasks related to blood collection, processing, testing, separation, and storage.<p>
<p>So, we help to provide the blood to the people who are in need of blood throughout Nepal.This blood bank Management System will be used for blood bank which is more convinient and comfortable to use.
</table>



<div id="why">
<h1 class="text-danger">WHY CHOOSE US?<br><br></h1>
<div class="row">
<div class="col-sm-3 ">
<svg xmlns="http://www.w3.org/2000/svg" width="90" height="90" fill="currentColor" class="bi bi-gear-fill" viewBox="0 0 16 16">
  <path d="M9.405 1.05c-.413-1.4-2.397-1.4-2.81 0l-.1.34a1.464 1.464 0 0 1-2.105.872l-.31-.17c-1.283-.698-2.686.705-1.987 1.987l.169.311c.446.82.023 1.841-.872 2.105l-.34.1c-1.4.413-1.4 2.397 0 2.81l.34.1a1.464 1.464 0 0 1 .872 2.105l-.17.31c-.698 1.283.705 2.686 1.987 1.987l.311-.169a1.464 1.464 0 0 1 2.105.872l.1.34c.413 1.4 2.397 1.4 2.81 0l.1-.34a1.464 1.464 0 0 1 2.105-.872l.31.17c1.283.698 2.686-.705 1.987-1.987l-.169-.311a1.464 1.464 0 0 1 .872-2.105l.34-.1c1.4-.413 1.4-2.397 0-2.81l-.34-.1a1.464 1.464 0 0 1-.872-2.105l.17-.31c.698-1.283-.705-2.686-1.987-1.987l-.311.169a1.464 1.464 0 0 1-2.105-.872l-.1-.34zM8 10.93a2.929 2.929 0 1 1 0-5.86 2.929 2.929 0 0 1 0 5.858z"/>
</svg>
<h4>Provides blood agencies with donor recruitment and management tools.</h4>
</div>
    <div class="col-sm-3 ">
    <svg xmlns="http://www.w3.org/2000/svg" width="90" height="90" fill="currentColor" class="bi bi-people-fill" viewBox="0 0 16 16">
  <path d="M7 14s-1 0-1-1 1-4 5-4 5 3 5 4-1 1-1 1H7zm4-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6z"/>
  <path fill-rule="evenodd" d="M5.216 14A2.238 2.238 0 0 1 5 13c0-1.355.68-2.75 1.936-3.72A6.325 6.325 0 0 0 5 9c-4 0-5 3-5 4s1 1 1 1h4.216z"/>
  <path d="M4.5 8a2.5 2.5 0 1 0 0-5 2.5 2.5 0 0 0 0 5z"/>
</svg>
<br>
<h4> Donor can regularly gives blood at their local blood center.</h4>
</div>
<div class="col-sm-3 ">
<svg xmlns="http://www.w3.org/2000/svg" width="90" height="90" fill="currentColor" class="bi bi-gift-fill" viewBox="0 0 16 16">
  <path d="M3 2.5a2.5 2.5 0 0 1 5 0 2.5 2.5 0 0 1 5 0v.006c0 .07 0 .27-.038.494H15a1 1 0 0 1 1 1v1a1 1 0 0 1-1 1H1a1 1 0 0 1-1-1V4a1 1 0 0 1 1-1h2.038A2.968 2.968 0 0 1 3 2.506V2.5zm1.068.5H7v-.5a1.5 1.5 0 1 0-3 0c0 .085.002.274.045.43a.522.522 0 0 0 .023.07zM9 3h2.932a.56.56 0 0 0 .023-.07c.043-.156.045-.345.045-.43a1.5 1.5 0 0 0-3 0V3zm6 4v7.5a1.5 1.5 0 0 1-1.5 1.5H9V7h6zM2.5 16A1.5 1.5 0 0 1 1 14.5V7h6v9H2.5z"/>
</svg>
<h4>The blood center thanks donor with an appreciation gift.</h4>
</div>
<div class="col-sm-3 ">
<svg xmlns="http://www.w3.org/2000/svg" width="90" height="90" fill="currentColor" class="bi bi-emoji-smile-fill" viewBox="0 0 16 16">
  <path d="M8 16A8 8 0 1 0 8 0a8 8 0 0 0 0 16zM7 6.5C7 7.328 6.552 8 6 8s-1-.672-1-1.5S5.448 5 6 5s1 .672 1 1.5zM4.285 9.567a.5.5 0 0 1 .683.183A3.498 3.498 0 0 0 8 11.5a3.498 3.498 0 0 0 3.032-1.75.5.5 0 1 1 .866.5A4.498 4.498 0 0 1 8 12.5a4.498 4.498 0 0 1-3.898-2.25.5.5 0 0 1 .183-.683zM10 8c-.552 0-1-.672-1-1.5S9.448 5 10 5s1 .672 1 1.5S10.552 8 10 8z"/>
</svg>
    <h4>Donors give twice by helping people locally and globally.</h4>
</div>


</div>
</div>















   
    
                





<div id="footer" >
    
<i class="fab fa-facebook"> </i>  &nbsp;&nbsp;&nbsp;
<i class="fab fa-instagram"></i>&nbsp;&nbsp;&nbsp;
<i class="fab fa-twitter-square"></i>&nbsp;&nbsp;
<i class="fab fa-youtube"></i>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;

<script src="https://kit.fontawesome.com/8c599e3191.js" crossorigin="anonymous"></script>
Tel:1066456, 01556489&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Location: kamaladimod,Kathmandu
</div>



    
</body>
</html>