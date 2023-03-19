<!DOCTYPE html>
<html>
<head>
	<title>User Profile</title>
	<link rel="stylesheet" type="text/css" href="style.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	<script src="script.js"></script>
</head>
<body>
	<div class="container">
		<h1>User Profile</h1>
		<form id="profile-form" method="post" enctype="multipart/form-data">
			<label for="name">Name:</label>
			<input type="text" id="name" name="name" required>

			<label for="email">Email:</label>
			<input type="email" id="email" name="email" required>

			<label for="gender">Gender:</label>
			<select id="gender" name="gender">
				<option value="male">Male</option>
				<option value="female">Female</option>
				<option value="other">Other</option>
			</select>

			<label for="age">Age:</label>
			<input type="number" id="age" name="age" min="18" max="100" required>

			<label for="avatar">Avatar:</label>
			<input type="file" id="avatar" name="avatar" accept="image/*" required>

			<label for="bio">Bio:</label>
			<textarea id="bio" name="bio"></textarea>

			<input type="submit" value="Save">
		</form>
	</div>
</body>
</html>
