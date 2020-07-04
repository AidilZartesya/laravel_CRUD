<!doctype html>
<html>
	<head>
		<title>Form</title>
	</head>
	
  <body>
  	<form action="/welcome" method="POST">
  	@csrf
		<h2> Buat Account Baru! </h2>
		<h3> Sign Up Form </h3>
  
		<p> First Name: </p>
		<input type="text" name="firstname" placeholder="First Name" />
	 
		<p> Last Name: </p>
		<input type="text" name="lastname" placeholder="Last Name" />
	 
		<p> Gender: </p>
		<input type="radio" name="gender" value="male"> Male<br>
		<input type="radio" name="gender" value="female"> Female<br>
		<input type="radio" name="gender" value="other"> Other
		
		<p> Nationality: </p>
		<select>
			<option value="indonesia">Indonesia</option>
			<option value="malaysia">Malaysia</option>
			<option value="singapore">Singapore</option>
		</select>
	 
		<p> Language Spoken: </p>
		<input type="checkbox" name="language" value="bahasa indonesia"> Bahasa Indonesia<br/>
		<input type="checkbox" name="language" value="english"> English<br/>
		<input type="checkbox" name="language" value="other"> Other
		
		<p> Bio: </p>
		<textarea cols="30" rows="10"></textarea><br/>
		
		<button type="signup">Sign Up</button></a>
	  
     </form>
	</body>
</html>