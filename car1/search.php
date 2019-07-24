<?php
$conn=mysqli_connect('localhost', 'root', '', 'client_info');
if (!$conn){
	die("fail" . mysql_connect_error());
	
}
else
{
		//echo "success" ;
		

}
?>


<style>.table ,th,td {
		border: 3px  black;
}
</style>

<html>
<head>
<body>
<table class ="table">
<tr>
			<th>Name</th>
			<th>address</th>
			<th>email</th>
			<th>city</th>
			<th>contact</th>
			<th>make</th>
			<th>model</th>
			<th>year</th>
			<th>link</th>
			
</tr>
<?php
$sql_query =   "SELECT name, address, email, city, contact_number, make, model, year, link from my_car ORDER BY sortID DESC;";
$data = $conn->query($sql_query);

while ($table = $data->fetch_assoc())
{
	echo "<tr>
			<td>". $table["name"] ."</td>
			 <td>". $table["address"] ."</td>
			 <td>". $table["email"] ."</td>
			 <td>". $table["city"] ."</td>
			 <td>". $table["contact_number"] ."</td>
			 <td>". $table["make"] ."</td>
			 <td>". $table["model"] ."</td> 
			 <td>". $table["year"] ."</td>
			 <td>". $table["link"] ."</td> 
			 
	</tr>";
}



?>
</table>
<br>
 
</body>
</head>
</html>


