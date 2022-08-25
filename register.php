<?php

$fullName = $_POST['fullName'];
$givenEmail = $_POST['givenEmail'];
$givenPass = $_POST['givenPass'];
$gender = $_POST['gender'];
$educationYear = $_POST['educationYear'];
// $upload = $_POST['upload'];
// If upload button is clicked ...
// if (isset($_POST['upload'])) {
 
//     $filename = $_FILES["uploadfile"]["name"];
//     $tempname = $_FILES["uploadfile"]["tmp_name"];
//     $folder = "./image/" . $filename;
 
//     $db = mysqli_connect("localhost:8012", "root", "", "geeksforgeeks");
 
//     // Get all the submitted data from the form
//     $sql = "INSERT INTO image (filename) VALUES ('$filename')";
 
//     // Execute query
//     mysqli_query($db, $sql);
 
//     // Now let's move the uploaded image into the folder: image
//     if (move_uploaded_file($tempname, $folder)) {
//         echo "<h3>  Image uploaded successfully!</h3>";
//     } else {
//         echo "<h3>  Failed to upload image!</h3>";
//     }

// Database connection
$conn = new mysqli('localhost','root','','ruhani');
if($conn->connect_error){
    die('Connection Failed : '.$conn->connect_error);
}else{
    $stmt = $conn->prepare("insert into registration (fullName,givenEmail,givenPass,gender,educationYear) values(?, ?, ?, ?, ?)");
    $stmt->bind_param("sssss",$fullName,$givenEmail,$givenPass,$gender,$educationYear);
    $stmt->execute();
    echo "Registration Successful";
    $stmt->close();
    $conn->close();
}

?>