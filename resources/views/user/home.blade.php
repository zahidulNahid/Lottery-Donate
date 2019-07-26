<!DOCTYPE html>
<html>
<head>
	<title>Home - Online LOttery Management</title>
</head>
<body>
	<table border="0" width="100%">
		<tr>
			<td width="100"></td>
			<td align="center">
				<h1>Lottery System</h1>
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
				<a href="{{route('User.index')}}">Home</a> | 
				<a href="{{route('User.profile')}}">Profile</a> | 
				<a href="{{route('User.settings')}}">Settings</a> | 
				<a href="{{route('User.lottery')}}">Buy Lottery</a> |
				<a href="{{route('User.donate')}}">Donate MOney</a> |
				<a href="{{route('User.ticket')}}">Your Lottery</a> |
				<a href="{{route('Logout.index')}}">Logout</a>
			</td>
			<td width="100"></td>
		</tr>
		<tr>
			<td width="100"></td>
			<td>
				<br/>
				<center>
				<h3>User Home</h3>
					<p>Welcome <strong>{{session('email')}}</strong></p>
					<p>Your last login was on {{session('last')}}</p>
				</center>
			</td>
			<td width="100"></td>
		</tr>
	</table>
</body>
</html>