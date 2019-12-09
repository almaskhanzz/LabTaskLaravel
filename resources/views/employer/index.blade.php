<!DOCTYPE html>
<html>
<head>
	<title>Home page</title>
</head>
<body>
	<h1>Welcome Home! {{session('user.name')}}</h1><br/>

	
	<a href="{{route('logout.index')}}">logout</a><br/>

	<h1>Add new job</h1>

	<table>
            <tr>
                <td>Company Name:</td>
                <td><input type="text" name="companyname"></td>
            </tr>
            <tr>
                <td>Job Title</td>
                <td><input type="text" name="jobtitle"></td>
            </tr>
            <tr>
                <td>Location</td>
                <td><input type="text" name="location"></td>
            </tr>
            <tr>
                <td>Salary</td>
                <td><input type="text" name="salary"></td>
            </tr>
			<tr>
                <td></td>
                <td><input type="submit" name="submit" value="Add"></td>
            </tr>
        </table>

</body>
</html>