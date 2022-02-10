<html>
<head>
<title>Login to University</title>
</head>

<body>
<h1>Welcome to our university</h1>
<form method="post" action="register.php">
<p>Input your data please to register</p>
User name <input type="text" name="name" />
<br/>
User password <input type="password" name="password" />
<br />
<input type="submit" value="Register" /></form>

<form method="post" action="valid.php">
<p>Input user name and password to login</p>
User name <input type="text" name="name" />
<br/>
User password <input type="password" name="password" />
<br />
<input type="submit" value="Login" /></form>
</body>
</html>