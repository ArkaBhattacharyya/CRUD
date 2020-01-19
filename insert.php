<?php
include('dbcon.php');
if(isset($_POST['btn'])){

$name = $_POST['name'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$password = $_POST['password'];

$sql = "INSERT INTO user(name,email,phone,password)VALUES('$name','$email','$phone','$password')";
$result = mysqli_query($mysqli,$sql);
if($result == 1){
	?>
	<script type="text/javascript">alert('Data Insert Successfully');</script>
	<?php
	header("Refresh:0; url=index.php");
}
else{
	?>
	<script type="text/javascript">alert('Data Insert Not Successfully');</script>
	<?php
	header("Refresh:0; url=index.php");
}
}
else{
	echo "Not output";
}
?>