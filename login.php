<!DOCTYPE html>
<html>
<head>
  <title></title>
  <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
<link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>
  <div class="login-page">
  <div class="form">
     <form class="login-form" method="post" action="login.php">
      <input type="text" name="email" placeholder="email"/>
      <input type="password" name="password" placeholder="password"/>
      <button name="login">login</button>
    </form>
  </div>
</div>
</body>
</html>
<?php
session_start();
include('dbcon.php');
if(isset($_POST['login'])){
  $email = $_POST['email'];
  $password = $_POST['password'];

  $sql = "SELECT * FROM user WHERE email = '$email' AND password = '$password'";
  $result = mysqli_query($mysqli,$sql);
   $success = mysqli_num_rows($result); 
   if($success){
   ?>
   <script type="text/javascript">
   	alert("Login Successfull");
   </script>
   <?php
   $_SESSION["arka"] = $email;
   header("Refresh:0; url=dashboard.php");
   }
   	else{ ?>
   <script type="text/javascript">
   	alert("Login UnSuccessfull");
   </script>
   <?php
      header("Refresh:0; url=login.php");
}
	}
	else{

}

?>