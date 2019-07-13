<!DOCTYPE html>
<html>
<head>
	<title>Delete Book from DB</title>
</head>
<body>
	<form name="delete" method="post">
		<table>
			<tr>
				<th>Enter Book Id to be deleted</th>
				<td><input type="num" name="id">

			</tr>
		</table>
		<input type="submit" name="submit" value="Delete">

	</form>
<?php
include("connection.php");
if(isset($_POST['submit'])){
	$id=$_POST['id'];
	$sql="DELETE FROM book where bid='$id'";
	$data=$conn->query($sql);

	if($data){
		echo "Deleted Successfully";
		header("Location:Bookstore.html");
	}
	else
		die($conn->error);
}
?>
</body>
</html>