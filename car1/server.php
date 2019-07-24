<?php
$name = $_REQUEST['name'];
$address = $_REQUEST['address'];
$email = $_REQUEST['email'];
$city = $_REQUEST['city'];
$phone_number = $_REQUEST['phone_number'];
$make  = $_REQUEST['make'];
$model = $_REQUEST['model'];
$year  = $_REQUEST['year'];

$conn=mysqli_connect('localhost', 'root', '', 'client_info');
if (!$conn){
	die("fail" . mysqli_connect_error());
}
else
{
		//echo "success";

}
$url="http://jdpower.com/cars/$make/$model/$year";
$sql_input = "INSERT INTO `my_car` (`name`, `address`, `email`, `city`, `contact_number`, `make`, `model`, `year`, `link`) VALUES ('$name', '$address', '$email', '$city', '$phone_number', '$make', '$model', '$year' , '$url');";
$conn ->query($sql_input);
?>

<style>
.table ,th,td{
	border: 2px solid black;
}
</style>

<html>

 <head>
 </head>
</html>
<html>
<head>
    <body>
	<table  class="table">
		<tr>
			<th>name</th>
			<th>address</th>
			<th>email</th>
			<th>city</th>
			<th>phone_number</th>
			<th>make</th>
			<th>model</th>
			<th>year</th>
			<th>link</th>
		</tr>
		<tr>
			<td><?php echo $name; ?></td>
			<td><?php echo $address; ?></td>
			<td><?php echo $email; ?></td>
			<td><?php echo $city; ?></td>
			<td><?php echo $phone_number; ?></td>
			<td><?php echo $make; ?></td>
			<td><?php echo $model; ?></td>
			<td><?php echo $year; ?></td>
			<td><a id="jdlink" href="<?php echo $url ?>"><?php echo $url ?></a></td>
		</tr>
	</table>
	<br>
 <input type="button" onclick="location.href='index.html'" value="Home">
	</body>
</html>	