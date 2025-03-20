<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
</head>
<body>

	<h1>Update page.</h1>

	<!-- {{$student->name}}
	{{$student->email}}
	<img src="/student/{{$student->image}}"> -->

	<form action="{{url('update',$student->id)}}" method="POST" enctype="multipart/form-data">

		@csrf
		
		<div>
			<label>Student Name</label>
			<input type="text" name="name" value="{{$student->name}}">
		</div>

		<div>
			<label>Student Surname</label>
			<input type="text" name="surname" value="{{$student->surname}}">
		</div>

		<div>
			<input type="submit" value="Update">
		</div>


	</form>

</body>
</html>