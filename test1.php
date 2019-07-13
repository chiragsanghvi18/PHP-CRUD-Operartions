<!DOCTYPE html>
<html>
<head>
	<title>Bookstore</title>
</head>
<body>
<form name="booklist" acton="" method="post">
	<center>
		<table>
			<tr>
				<th>Book Id</th>
				<td><input type="num" name="bid"></td>
			</tr>
			<tr>
				<th>Book Name</th>
				<td><input type="text" name="bname"></td>
			</tr>
		</table>
		<input type="submit" name="submit" value="Submit">
	</center>
</form>
<?php 
include("connection.php");
if(isset($_POST['submit'])){
$name=$_POST['bname'];
$id=$_POST['bid'];

$query="INSERT INTO book values('$id','$name')";

if($conn->query($query)){
	echo "Data Added Successfully";
	header("location:Bookstore.html");
}
else{
	die($conn->connect_error);
}


}



?>

</body>
</html>