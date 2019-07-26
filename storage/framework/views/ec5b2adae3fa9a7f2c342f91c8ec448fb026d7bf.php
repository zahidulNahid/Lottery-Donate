<!DOCTYPE html>
<html>
<head>
	<title>Ticket - Online Lottery System</title>
</head>
<body>
	<table border="0" width="100%">
		<tr>
			<td width="100"></td>
			<td align="center">
				<h1>Online LOttery System</h1>
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
				<a href="<?php echo e(route('User.lottery')); ?>">Buy Lottery</a> |
				<a href="<?php echo e(route('User.donate')); ?>">Donate MOney</a> |
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
				<h3>My Profile</h3>
				<form method="post">
						<table>
							<tr>
								<td>FULL NAME: </td>
								<td><?php echo e(session('fullname')); ?></td>
							</tr>
							<tr>
								<td>EMAIL: </td>
								<td><?php echo e(session('email')); ?></td>
							</tr>
							<tr>
								<td>PHONE: </td>
								<td><?php echo e(session('phone')); ?></td>
							</tr>
							<tr>
								<td>GENDER: </td>
								<td><?php echo e(session('gender')); ?></td>
							</tr>
							<tr>
								<td colspan="2">
									<br/>
									<center>
										<a href="<?php echo e(route('User.index')); ?>">Back</a> 
									</center>
								</td>
							</tr>
						</table>
					</form>
				</center>
			</td>
			<td width="100"></td>
		</tr>
	</table>
</body>
</html>