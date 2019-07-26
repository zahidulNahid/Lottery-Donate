<!DOCTYPE html>
<html>
<head>
	<title>Edit - Online Lottery System</title>
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
				<a href="<?php echo e(route('User.index')); ?>">Home</a> | 
				<a href="<?php echo e(route('User.profile')); ?>">Profile</a> | 
				<a href="<?php echo e(route('User.Settings')); ?>">Settings</a> | 
				<a href="<?php echo e(route('Logout.index')); ?>">Logout</a>
			</td>
			<td width="100"></td>
		</tr>
		<tr>
			<td width="100"></td>
			<td>
				<br/>
				<center>
				<h3>Edit User Information</h3>
				<form method="post">
						<table>
							<tr>
								<td>FULL NAME: </td>
								<td><input type="text" value="<?php echo e($account->fullName); ?>"></td>
							</tr>
							<tr>
								<td>EMAIL: </td>
								<td><input type="text" value="<?php echo e($account->email); ?>"></td>
							</tr>
							<tr>
								<td colspan="2">
									<br/>
									<center>
										<a href="<?php echo e(route('User.profile')); ?>">Back</a> | 
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