<?php
session_start();
unset($_SESSION['arka']);
?>
	<script type="text/javascript">alert('You are Logout Successfully');</script>
	<?php
header("Refresh:0; url=index.php");
?>