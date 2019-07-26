<!DOCTYPE html>
<html>
<head>
	<title>Register - User Manager</title>
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
			<td>
				<br/>
				<center>
				<h3>New User Registration</h3>
				<form method="post">
					<?php echo e(csrf_field()); ?>

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
								<td>USERNAME: </td>
								<td><input type="text" name="username"></td>
							</tr>
							<tr>
								<td>PASSWORD: </td>
								<td><input type="password" name="password"></td>
							</tr>
							<tr>
								<td>RE-PASSWORD: </td>
								<td><input type="password" name="repassword"></td>
							</tr>
							<tr>
								<td></td>
								<td><input type="submit" value="Login"></td>
							</tr>
							<tr>
								<td></td>
								<td>
									<br/>
									Click <a href="<?php echo e(route('Login.loginView')); ?>">here</a> to login
								</td>
							</tr>
						</table>
					</form>
					<br/>
					<br/>
					<label>
						<?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $err): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
							<?php echo e($err); ?> <br>
						<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
					</label>
				</center>
			</td>
			<td width="100"></td>
		</tr>
	</table>
</body>
</html>