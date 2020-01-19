<?php
session_start();
include('dbcon.php');
?>	
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.20/css/dataTables.bootstrap.min.css">
</head>
<body>
	<h1 style="text-align: center;">Welcome Arka Crud System</h1>
<table id="example" class="table table-striped table-bordered" style="width:100%">
        <thead>
            <tr>
            	<th>Sl NO.</th>
                <th>Name</th>
                <th>Email</th>
                <th>Phone Number</th>
                <th>Action</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
        	<?php
        	$i = 0;
            $sql =  "SELECT * FROM user";
            $result = mysqli_query($mysqli,$sql);
            while($row = mysqli_fetch_array($result, MYSQLI_ASSOC)){ 
            	?>
            <tr>
            	<td><?php echo $i+1; ?></td>
                <td><?php echo $row['name'];?></td>
                <td><?php echo $row['email'];?></td>
                <td><?php echo $row['phone'];?></td>
                <td><a href="edit.php?pid=<?php echo $row['id']; ?>">Edit</a></td>
                <td><a href="delete.php?pid=<?php echo $row['id']; ?>">Delete</a></td>
            </tr>
        <?php
        $i++;
         }  ?>
        </tbody>
    </table>
    <div class="footer" style="text-align: center;">
        <a href="register.php">Register</a>
        <a href="login.php">Login</a>
        </div>
</body>
</html>
<?php 
?>

