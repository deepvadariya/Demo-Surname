<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Home</title>
</head>
<body>

	<div align="center">

		<form action="{{url('upload')}}" method="POST" enctype="multipart/form-data">

			@csrf
			
			<div style="padding: 10px;">
				<label>Name</label>
				<input type="text" name="name">
			</div>

			<div style="padding: 10px;">
				<label>Surname</label>
				<input type="text" name="surname">
			</div>

			<div style="padding: 10px;">
				<input type="Submit">
			</div>

		</form>

	</div>

</body>
</html>