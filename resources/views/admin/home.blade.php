<!DOCTYPE html>
<html>
<head>
	<title>Home - User Manager</title>
</head>
<body>
	<table border="0" width="100%">
		<tr>
			<td width="100"></td>
			<td align="center">
				<h1>User Manager</h1>
			</td>
			<td width="100"></td>
		</tr>
		<tr>
			<td width="100"></td>
			<td align="center">
				<hr/>
			</td>
			<td width="100"></td>
		</tr>
		<tr>
			<td width="100"></td>
			<td align="center">
				<a href="{{route('Admin.index')}}">Home</a> |
				<a href="users.html">Users</a> |
				<a href="settings.html">Settings</a> |
				<a href="report.html">Report</a> |
				<a href="{{route('landing')}}">Logout</a>
			</td>
			<td width="100"></td>
		</tr>
		<tr>
			<td width="100"></td>
			<td>
				<br/>
				<center>
				<h3>Admin Home</h3>
					<p>Welcome <strong>{{session('fullname')}}</strong></p>
					<p>Your last login was on {{session('last')}}</p>
				</center>
			</td>
			<td width="100"></td>
		</tr>
	</table>
</body>
</html>