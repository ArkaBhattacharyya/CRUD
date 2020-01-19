<?php
include('dbcon.php');
if(isset($_POST['updatebtn'])){
$id = $_REQUEST['id'];
$name = $_POST['name'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$password = $_POST['password'];

$sql = "UPDATE user SET name='$name',email='$email',phone='$phone',password='$password' WHERE id='$id'";
$result = mysqli_query($mysqli,$sql);
if($result == 1){
	?>
	<script type="text/javascript">alert('Data Update Successfully');</script>
	<?php
	header("Refresh:0; url=index.php");
}
else{
	?>
	<script type="text/javascript">
	alert('Data Update Successfully');
    </script>
	<?php
	header("Refresh:0; url=index.php");
}
}
else{
	echo "Not output";
}
?>