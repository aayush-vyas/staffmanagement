<?php

$conn = mysqli_connect("localhost", "root", "", "staffmanagement");


if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}


$id = $_GET['id'];
$sql = "SELECT * FROM user_profile WHERE id = $id";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
   
    while($row = mysqli_fetch_assoc($result)) {
       
        echo "<h1>{$row['name']}</h1>";
        echo "<p>{$row['email']}</p>";
        echo "<p>{$row['gender']}</p>";
        echo "<p>{$row['age']}</p>";
        echo "<img src='uploads/IMG-20230112-WA0004.jpg' alt='User Avatar' width='200' height='200'>";
        echo "<p>{$row['bio']}</p>";
    }
} else {
    echo "No user profile found";
}


mysqli_close($conn);

?>