<!DOCTYPE html>
<html>
<head>
	<title>Display</title>
</head>
<body>
	<center>
	<table border="1">
		<caption>Books</caption>
		<tr>
			<th>Book Id</th>
			<th>Book Name</th>
		</tr>	
<?php 
include("connection.php");
	$sql="SELECT * FROM book";
	$data=$conn->query($sql);
	if($data->num_rows>0){
		while($result=$data->fetch_assoc()){
		echo "<tr>
				<td>".$result['bid']."</td>
				<td>".$result['name']."</td>
			</tr>";
		}		
	}
?>
</table>
</center>
</body>
</html>