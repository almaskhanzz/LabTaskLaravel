<!DOCTYPE html>
<html>
<head>
	<title>Home page</title>
</head>
<body>
	<h1>Welcome Home! {{session('user.name')}}</h1><br/>
    <a href="{{route('logout.index')}}">Logout</a><br/>

	<h1>Add Employee</h1>
	<table>
		<tr>
			<td>Employer Name:</td>
			<td><input type="text" name="employername"></td>
		</tr>
		<tr>
			<td>Company Name:</td>
			<td><input type="text" name="companyname"></td>
		</tr>
		<tr>
			<td>Contact No</td>
			<td><input type="text" name="contno"></td>
		</tr>
		<tr>
			<td>Username</td>
			<td><input type="text" name="username"></td>
		</tr>
		<tr>
			<td>Password</td>
			<td><input type="password" name="password"></td>
		</tr>
		<tr>
			<td></td>
			<td><input type="submit" name="submit" value="Add"></td>
		</tr>
	</table>

</body>
</html>