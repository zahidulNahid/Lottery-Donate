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
				<h3>Edit User Information</h3>
				<form method="post">
						<table>
							<tr>
								<td>Our bKash Number: </td>
								<td>01701884413</td>
							</tr>
							<tr>
								<td>Amount: </td>
								<td><input type="text" id="amount"></td>
							</tr>
							<tr>
								<td>TrxId: </td>
								<td><input type="text" name="trxid"></td>
							</tr>
							<tr>
								<td>Phone: </td>
								<td><input type="text" name="phone"></td>
							</tr>
							<tr>
								<td colspan="2">
									<br/>
									<center>
										<a href="<?php echo e(route('User.profile')); ?>">Back</a> | 
										<input type="submit" value="Send">
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
