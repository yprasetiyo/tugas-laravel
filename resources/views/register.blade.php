<!DOCTYPE html>
<html>
<head>
	<title>Form</title>
</head>
<body>
	<h2>Buat Account Baru!</h2>
	<h4>Sign Up Form</h4>

	<form action"/welcome" method="post">
	<input type = "hidden" name = "_token" value = "<?php echo csrf_token() ?>">

		<label for="first">First name :</label><br><br>
		<input type="text" placeholder="First name" id="first"><br>
		<br>
		<label for="last">Last name :</label><br><br>
		<input type="text" placeholder="Last name" id="last"><br>
		<br>
		<label>Gender :</label><br><br>
		<input type="radio" name="gender"> Male <br>
		<input type="radio" name="gender"> Female <br>
		<input type="radio" name="gender"> Other <br>
		<br>
		<label>Nationally</label> <br><br>
		<select>
			<option>Indonesia</option>
			<option>Malaysian</option>
			<option>Singaporean</option>
			<option>Autralian</option>
		</select> <br>
		<br>
		<label>Language Spoken :</label><br><br>
		<input type="checkbox"> Bahasa Indonesia <br>
		<input type="checkbox"> English <br>
		<input type="checkbox"> Other <br>
		<br>
		<label for="bio">Bio :</label><br><br>
		<textarea cols="30" rows="7" id="bio"></textarea>
		<br>
		<input type="submit" value="Sign Up" formaction="D:\Laravel\Tugas_HTML\welcome.html">


	</form>

</body>
</html>