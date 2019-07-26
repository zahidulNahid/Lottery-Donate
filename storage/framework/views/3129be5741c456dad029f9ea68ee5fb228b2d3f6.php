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
				<a href="<?php echo e(route('User.index')); ?>">Home</a> | 
				<a href="profile.html">Profile</a> | 
				<a href="settings.html">Settings</a> | 
				<a href="<?php echo e(route('landing')); ?>">Logout</a>
			</td>
			<td width="100"></td>
		</tr>
		<tr>
			<td width="100"></td>
			<td>
				<br/>
				<center>
				<h3>User Home</h3>
					<p>Welcome <strong><?php echo e(session('fullname')); ?></strong></p>
					<p>Your last login was on <?php echo e(session('last')); ?></p>
				</center>
			</td>
			<td width="100"></td>
		</tr>
	</table>
</body>
</html>