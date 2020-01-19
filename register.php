<!DOCTYPE html>
<html>
<head>
  <title></title>
 <link rel="stylesheet" type="text/css" href="css/custom.css">
</head>
<body>
<div class="container">  
  <form id="contact" action="insert.php" method="post">
    <h3>Register Form</h3>
    <h4>Register us for custom quote</h4>
    <fieldset>
      <input placeholder="Your name" type="text" name="name" tabindex="1" required autofocus>
    </fieldset>
    <fieldset>
      <input placeholder="Your Email Address" type="email" name="email" tabindex="2" required>
    </fieldset>
    <fieldset>
      <input placeholder="Your Phone Number" type="text" name="phone" tabindex="3" required>
    </fieldset>
    <fieldset>
      <input placeholder="Your Password" type="password" name="password" tabindex="3" required>
    </fieldset>
    <fieldset>
      <button type="submit" name="btn" id="contact-submit" data-submit="...Sending">Submit</button>
     <!--  <input type="submit" name="btn" id="contact-submit" value="submit"> -->
    </fieldset>
  </form>
</div>
</body>
</html>

