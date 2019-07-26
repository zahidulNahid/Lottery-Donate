<!DOCTYPE html>
<html>
<head>
	<title>Register - Online Lottery System</title>
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
			<td>
				<br/>
				<center>
				<h3>New User Registration</h3>
				<form method="post">
					{{csrf_field()}}
						<table>
							<tr>
								<td>FULL NAME: </td>
								<td><input type="text" name="fullname"></td>
							</tr>
							<tr>
								<td>EMAIL: </td>
								<td><input type="text" name="email"></td>
							</tr>
							<tr>
								<td>PHONE: </td>
								<td><input type="text" name="phone"></td>
							</tr>
							<tr>
								<td>GENDER: </td>
								<td><input type="text" name="gender"></td>
							</tr>
							<tr>
								<td>NID: </td>
								<td><input type="text" name="nid"></td>
							</tr>
							<tr>
								<td>PASSWORD: </td>
								<td><input type="password" name="password"></td>
							</tr>
							<tr>
								<td>RE-PASSWORD: </td>
								<td><input type="password" name="confirmPass"></td>
							</tr>
							<tr>
								<td></td>
								<td><input type="submit" value="SUBMIT"></td>
							</tr>
							<tr>
								<td></td>
								<td>
									<br/>
									Click <a href="{{route('Login.loginView')}}">here</a> to login
								</td>
							</tr>
						</table>
					</form>
					<br/>
					<br/>
					<label>
						@foreach($errors->all() as $err)
							{{$err}} <br>
						@endforeach
					</label>
				</center>
			</td>
			<td width="100"></td>
		</tr>
	</table>
</body>
</html>