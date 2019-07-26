<!DOCTYPE html>
<html>
<head>
	<title>Login - User Manager</title>
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
				<h3>User Authentication</h3>
					<form method="post">
						<?php echo e(csrf_field()); ?>

						<table>
							<tr>
								<td>USERNAME: </td>
								<td><input type="text" name="username"></td>
							</tr>
							<tr>
								<td>PASSWORD: </td>
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
									Click <a href="<?php echo e(route('Login.registerView')); ?>">here</a> to register
								</td>
							</tr>
						</table>
					</form>
					<br/>
					<br/>
					<label>
						<?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $err): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
							<?php echo e($err); ?> <br>
						<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?></label>
				</center>
			</td>
			<td width="100"></td>
		</tr>
	</table>
</body>
</html>