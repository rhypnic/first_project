<!DOCTYPE html>
<html>
<head>
</head>
<body>
	<h1> Buat Account Baru!</h1>
	<h3> Sign Up Form </h3>
	<form action="welcome" method="POST" >
		@csrf <!-- important csrf -->
		<label> First Name: </label><br><br>
		<input type="text" name="nama_depan">
		<br><br>
		<label> Last Name: </label><br><br>
		<input type="text" name="nama_belakang">
		<br><br>
		<label> Gender: </label><br><br>
		<input type="radio" name="gender" > Male<br>
		<input type="radio" name="gender" > Female<br>
		<input type="radio" name="gender" > Other<br>
		<br>
		<label> Nationality:</label> <br> <br>
		<select>
			
			<option value="0">Indonesian</option>
			<option value="1">Singaporean</option>
			<option value="2">Malaysian</option>
			<option value="3">Australian</option>
		</select>
		<br><br>
		<label> Language Spoken: </label> <br><br>
		<input type="checkbox"> Bahasa Indonesian<br>
		<input type="checkbox"> English<br>
		<input type="checkbox"> Other<br>
		<br>
		<label> Bio:</label><br><br>
		<textarea name="Bio:" cols="30" rows="10"></textarea>
		<br>
		<button> Sign Up </button>
</body>
</html>
