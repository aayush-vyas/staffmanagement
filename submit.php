<?php
// Database connection
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "staffmanagement";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
	die("Connection failed: " . $conn->connect_error);
}

// File upload
$targetDir = "uploads/";
$fileName = basename($_FILES["avatar"]["name"]);
$targetFilePath = $targetDir . $fileName;
$fileType = pathinfo($targetFilePath, PATHINFO_EXTENSION);

if (move_uploaded_file($_FILES["avatar"]["tmp_name"], $targetFilePath)) {
	// Insert data into database
	$name = $_POST["name"];
	$email = $_POST["email"];
	$gender = $_POST["gender"];
	$age = $_POST["age"];
	$avatar = $fileName;
	$bio = $_POST["bio"];

	$stmt = $conn->prepare("INSERT INTO user_profile (name, email, gender, age, avatar, bio) VALUES (?, ?, ?, ?, ?, ?)");
    $stmt->bind_param("ssssss", $name, $email, $gender, $age, $avatar, $bio);

	if ($stmt->execute()) {
		echo "Profile saved successfully.";
	} else {
		echo "Error: " . $stmt->error;
	}

	$stmt->close();
} else {
	echo "Error uploading file.";
}

$conn->close();
?>
