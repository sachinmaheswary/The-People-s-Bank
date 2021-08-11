<!DOCTYPE html>
<html>
<head>
<style>
.card {
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
  max-width: 400px;
  margin: auto;
  text-align: center;
  font-family: arial;
}

.title {
  color: grey;
  font-size: 18px;
}

button {
  border: none;
  outline: 0;
  display: inline-block;
  padding: 8px;
  color: white;
  background-color: #000;
  text-align: center;
  cursor: pointer;
  width: 100%;
  font-size: 18px;
}

a {
  text-decoration: none;
  font-size: 22px;
  color: black;
}

button:hover, a:hover {
  opacity: 0.7;
}
h1{
    color:rgb(60, 60, 224);
}
</style>
</head>
<body>
<?php
    include 'host.php';
    $sql = "SELECT * FROM customers";
    $result = mysqli_query($conn,$sql);
    
?>




<h1 style="text-align:center">User Details</h2>
<br>
<br>
<br>
<br>



<div class="card">
  <!-- <img src="face.png" alt="face" style="width:100%"> -->
  <h1>Sachin Maheswary</h1>
  <p class="title">A/C No : <?php $row = $result->fetch_assoc(); echo $row["Ac no."] ;?></p>
  <p>Email:sachin@gmail.com</p>
  <p>Balance: <?php $row = $result->fetch_assoc(); echo $row["Balance"] ;?></p>
  <!-- <p>City:Jamshedpur</p>
  <div style="margin: 24px 0;">
    <a href="#"><i class="fa fa-dribbble"></i></a> 
    <a href="#"><i class="fa fa-twitter"></i></a>  
    <a href="#"><i class="fa fa-linkedin"></i></a>  
    <a href="#"><i class="fa fa-facebook"></i></a> 
  </div> -->
  <p><button onclick="document.location='paynow.php'">Transfer Money</button></p>
</div>

</body>
</html>