<!DOCTYPE html>
<html>
<head> 
	<title> Sign Up Form</title>
</head>
<body>
	<h1> Buat Account Baru! </h1>
	<h3> Sign Up Form </h3>
	<form action="welcome.html">
		<label for="fn">First Name :</label><br><br>
		<input type= "text" id="fn" name="fn"><br><br>
		<label for="ln">Last Name :</label><br><br>
		<input type="text" id="ln" name="ln"><br><br>

		<label> Gender : </label><br><br>
		<input type="radio" id="male" name="gender" value="male">
		<label for="male"> Male </label><br>
		<input type="radio" id="female" name="gender" value="female">
		<label for="female"> Female </label><br>
		<input type="radio" id="other" name="gender" value="other">
		<label for="other"> Other </label><br><br>
		<label> Nationality : </label><br><br>

		<select>
			<option> Indonesian </option>
			<option> Singaporean </option>
			<option> Malaysian </option>
			<option> Australian </option>
		</select><br><br>

		<label> Language Spoken : </label><br><br>
		<input type= "checkbox" id="LS1" name="LS1" value="Bahasa Indonesia">
		<label for="LS1"> Bahasa Indonesia </label><br>
		<input type= "checkbox" id="LS2" name="LS2" value="English">
		<label for="LS2"> English </label><br>
		<input type= "checkbox" id="LS3" name="LS3" value="Other">
		<label for="LS3"> Other </label><br><br>

		<label> Bio : </label><br><br>
		<textarea cols="35" rows="10"></textarea><br>
		<input type="submit" value="Sign Up">
	</form> 

</body>
</html>