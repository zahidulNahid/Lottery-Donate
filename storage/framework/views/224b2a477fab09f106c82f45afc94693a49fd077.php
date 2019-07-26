<!DOCTYPE html>
<html>
<head>
	<title>Buy Lottery - Online Lottery System</title>
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
				<a href="<?php echo e(route('User.lottery')); ?>">Buy Lottery</a> |
				<a href="<?php echo e(route('User.donate')); ?>">Donate MOney</a> |
				<a href="<?php echo e(route('User.ticket')); ?>">Your Lottery</a> |
				<a href="<?php echo e(route('Logout.index')); ?>">Logout</a>
			</td>
			<td width="100"></td>
		</tr>
		<tr>
			<td>
				<br/>
				<center>
				<h3>Buy Lottery</h3>
				<h2>Get Lottery Number</h2>
				
				</center>
			</td>
		</tr>
		
	</table>


	<table>
		<th>
			<tr>
				Buy lot
			</tr>
			<tr>
				Number
			</tr>
		</th>
		
		<td>
			<?php $__currentLoopData = $lottery; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $lot): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
			<tr>
				<?php echo e($lot->lotteryNumber); ?>

			</tr>
			<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
		</td>
	</table>
</body>
</html>