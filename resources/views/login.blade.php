<!DOCTYPE html>
<html>
<head>
	<title>Login - Online Lottery System</title>
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
				<h3>User Authentication</h3>
					<form method="post">
						{{csrf_field()}}
						<table>
							<tr>
								<td>Email: </td>
								<td><input type="text" name="email"></td>
							</tr>
							<tr>
								<td>Password: </td>
								<td><input type="password" name="password"></td>
							</tr>
							<tr>
								<td></td>
								<td><input type="submit" value="Login"></td>
							</tr>
							<tr>
								<td></td>
								<td>
									<br/>
									Click <a href="{{route('Login.registerView')}}">here</a> to register
								</td>
							</tr>
						</table>
					</form>
					<br/>
					<br/>
					<label>
						@foreach($errors->all() as $err)
							{{$err}} <br>
						@endforeach</label>
				</center>
			</td>
			<td width="100"></td>
		</tr>
	</table>
</body>
</html>