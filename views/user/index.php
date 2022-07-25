<html>
<head>
	<title>Homepage</title>
</head>

<body>
<a href="<?=base_url?>user/register">Add New Data</a><br/><br/>

	<table width='80%' border=0>

	<tr bgcolor='#CCCCCC'>
		<td>DNI</td>
		<td>Name</td>
		<td>Birthdate</td>
		<td>Email</td>
		<td>Sex</td>
		<td>Update</td>
	</tr>
	<?php 
	//while($res = mysql_fetch_array($result)) { // mysql_fetch_array is deprecated, we need to use mysqli_fetch_array 
	while($user = mysqli_fetch_array($users)) { 		
		echo "<tr>";
		echo "<td>".$user['dni']."</td>";
		echo "<td>".$user['name']."</td>";
		echo "<td>".$user['birthdate']."</td>";
		echo "<td>".$user['email']."</td>";	
		echo "<td>".$user['sex']."</td>";	
    echo "<td><a href='".base_url."user/update&id=".$user['id']."'>Edit</a> | <a href='".base_url."user/delete&id=".$user['id']."' onClick=\"return confirm('Are you sure you want to delete?')\">Delete</a></td>";
	}
	?>
	</table>
</body>
</html>