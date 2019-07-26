<!DOCTYPE html>
<html>
<head>
	<title>Settings - Online Lottery System</title>
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
				<a href="<?php echo e(route('User.index')); ?>">Home</a> | 
				<a href="<?php echo e(route('User.profile')); ?>">Profile</a> | 
				<a href="<?php echo e(route('User.settings')); ?>">Settings</a> | 
				<a href="<?php echo e(route('Logout.index')); ?>">Logout</a> 
			</td>
			<td width="100"></td>
		</tr>
		<tr>
			<td width="100"></td>
			<td>
				<br/>
				<center>
				<h3>Change Password</h3>
				<form method="post">
						<table>
							<tr>
								<td>USERNAME: </td>
								<td>sally</td>
							</tr>
							<tr>
								<td>OLD PASSWORD: </td>
								<td><input type="password"></td>
							</tr>
							<tr>
								<td>NEW PASSWORD: </td>
								<td><input type="password"></td>
							</tr>
							<tr>
								<td>RE-TYPE PASSWORD: </td>
								<td><input type="password"></td>
							</tr>
							<tr>
								<td colspan="2">
									<br/>
									<center>
										<a href="<?php echo e(route('User.index')); ?>">Back</a> | 
										<input type="submit" value="Update">
									</center>
								</td>
							</tr>
						</table>
					</form>
					<br/>
					<br/>
					<label>Any message goes here</label>
				</center>
			</td>
			<td width="100"></td>
		</tr>
	</table>
</body>
</html>