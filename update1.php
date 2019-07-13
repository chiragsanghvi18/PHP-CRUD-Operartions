<!DOCTYPE html>
<html>
<head>
	<title>Update DB</title>
</head>
<body>
<form name="updation" method="post">
	<center>
		<table>
			<tr>
				<th>New Book name</th>
				<td><input type="text" name="nbname">

			</tr>
			<tr>
				<th>Id for which book name to be changed</th>
				<td><input type="num" name="id"> </td>
			</tr>
		</table>
		<input type="submit" name="submit" value="Update">

<?php
include("connection.php");
if(isset($_POST['submit'])){
	$id=$_POST['id'];
	$name=$_POST['nbname'];
	
	$sql="UPDATE book SET name='$name' WHERE bid='$id'";

	$data=$conn->query($sql);
	if($data){
		echo "Updated Successfully";
		header("location:Bookstore.html");
	}
	else {
		die($conn->error);
		}	
}	
?>

	</center>
</form>
</body>
</html>