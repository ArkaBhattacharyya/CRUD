<?php
include('dbcon.php');
?>

<!DOCTYPE html>
<html>
<head>
  <title></title>
 <link rel="stylesheet" type="text/css" href="css/custom.css">
</head>
<body>
<div class="container">  
  <form id="contact" action="update.php" method="post">
    <h3>Register Form</h3>
    <h4>Register us for custom quote</h4>
   <?php
    $pid = $_REQUEST['pid'];
    $sql =  "SELECT * FROM user WHERE id='$pid'";

    $result = mysqli_query($mysqli,$sql);
    while($row = mysqli_fetch_array($result, MYSQLI_ASSOC)){ 
   ?>
   <fieldset>
      <input placeholder="Your name" type="hidden" name="id" value="<?php echo $row['id']; ?>" tabindex="1" required autofocus>
    </fieldset>
    <fieldset>
      <input placeholder="Your name" type="text" name="name" value="<?php echo $row['name']; ?>" tabindex="1" required autofocus>
    </fieldset>
    <fieldset>
      <input placeholder="Your Email Address" type="email" name="email"  value="<?php echo $row['email']; ?>" tabindex="2" required>
    </fieldset>
    <fieldset>
      <input placeholder="Your Phone Number" type="text" name="phone"  value="<?php echo $row['phone']; ?>" tabindex="3" required>
    </fieldset>
    <fieldset>
      <input placeholder="Your Password" type="password" name="password"  value="<?php echo $row['password']; ?>" tabindex="3" required>
    </fieldset>
    <fieldset>
      <button type="submit" name="updatebtn" id="contact-submit" data-submit="...Sending">Submit</button>
    </fieldset>
  <?php  } ?>
  </form>
</div>
</body>
</html>