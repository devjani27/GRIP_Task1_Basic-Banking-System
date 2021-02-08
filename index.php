<?php
	session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel ="stylesheet" type="text/css" href="home.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>
    <script src="https://kit.fontawesome.com/f935d9d29d.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    

    <title>The Sparks Foundation Bank</title>
</head>
<body>
    <div class="menu_bar">
    <image class="im" src="images/logo.png" ></image> 
    <h1>THE SPARKS FOUNDATION BANK</h1>
    <h3>....the name you can bank upon</h3>
       <div class="menu_icons">
       <ul style="list-style:none;">
               <li><a href="index.php"><i class=" ic fa fa-home" style="color:red;" ></i> Home</a></li>       
       </ul>
       <ul style="list-style:none;">
               <li><a href="view_customer.php" ><i class=" ic fa fa-user" style="color:red;" ></i> View Customers</a></li>       
       </ul>
       <ul style="list-style:none;">
              <li><a href="view_transaction.php" ><i class=" ic fa fa-clipboard" style="color:red;" ></i> View Transactions</a></li>       
       </ul>
       </div>
       </div>
    <div class="box">
        <form>
            <label><i class="far fa-calendar-check"></i>HASSLE FREE TRANSACTIONS</label>
            <label><i class="far fa-calendar-check"></i>24/7 CUSTOMER SERVICE</label>
            <label><i class="far fa-calendar-check"></i>10,910 BRANCHES ACROSS INDIA</label>
            <label><i class="far fa-calendar-check"></i>EASY LOANS</label>
        </form>
    </div>
    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
  </ol>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img class="d-block w-100" src="images/img1.jfif" alt="..">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="images/img2.jfif" alt="..">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="images/img3.jfif" alt="..">
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
<div class="details">
    <div class="box1">
        <p>This project has been designed and developed by DEVJANI MALLICK as a part of GRIP(Graduate Rotational Internship Program) at The Sparks Foundation.</p>
</div>  
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script> 
</body>
</html>