<?php include 'includes/header.php' ?>

<h1 style="text-align: center; margin-top: 75px;"><u>Info of registered people</u></h1>


<table style="border-collapse: collapse; width: 100%; color: #021c1e; font-size: 20px; text-align: left; margin-top:25px; margin-bottom: 75px;">
	<tr style="background-color: #004445;
color: white;">
		<th >ID</th>
		<th>Full-Name</th>
		<th>Email</th>
		<th>Password</th>
		<th>Gender</th>
		<th>University Year</th>
	</tr>
<?php
// Connecting to the Database
$servername = "localhost";
$username = "root";
$password = "";
$database = "ruhani";

$conn = new mysqli($servername, $username, $password, $database);

// Check connection
if ($conn->connect_error) {
die("Connection failed: " . $conn->connect_error);
}


$sql = "SELECT * FROM `registration`";
$result = mysqli_query($conn, $sql);

// Find the number of records returned
$num = mysqli_num_rows($result);

if($num> 0){
    while ($row = mysqli_fetch_assoc($result)) {
        echo "<tr> <td>". $row["id"] ."</td><td>". $row["fullName"] ."</td><td>". $row["givenEmail"] ."</td><td>". $row["givenPass"] ."</td><td>". $row["gender"] ."</td><td>". $row["educationYear"] ."</td><tr>";
        

    }
    echo "</table>";
}
else {
	echo "0 result";
}

$conn->close();
?>

</table>


<?php include 'includes/footer.php' ?>

