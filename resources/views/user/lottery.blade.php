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
				<a href="{{route('User.index')}}">Home</a> | 
				<a href="{{route('User.profile')}}">Profile</a> | 
				<a href="{{route('User.settings')}}">Settings</a> | 
				<a href="{{route('User.lottery')}}">Buy Lottery</a> |
				<a href="{{route('User.donate')}}">Donate MOney</a> |
				<a href="{{route('User.ticket')}}">Your Lottery</a> |
				<a href="{{route('Logout.index')}}">Logout</a>
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
			@foreach($lottery as $lot)
			<tr>
				{{ $lot->lotteryNumber }}
			</tr>
			@endforeach
		</td>
	</table>
</body>
</html>