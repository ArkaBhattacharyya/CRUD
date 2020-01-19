<?php
include('dbcon.php');
$id = $_GET['pid'];
$sql = "DELETE FROM user WHERE id='$id'";
$result = mysqli_query($mysqli,$sql);
if($result){
	?>
	<script type="text/javascript">alert('Deta Deleted Successfully')</script>
	<?php
	header("Refresh:0; url=index.php");
}
else{
	?>
	<script type="text/javascript">alert('Deta Deleted Not Successfully')</script>
	<?php
	header("Refresh:0; url=index.php");
}

?>