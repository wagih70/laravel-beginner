<!DOCTYPE html>
<html>
<head>
	<title>Document</title>
	<link href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">
</head>
<body>
	<div class="container">
		<div class="row">
			<br>
			<div class="col-lg-4">
				@if (count($errors)>0)
				@foreach ($errors->all() as $error)
				<p class="alert alert-danger">{{$error}}</p>
				@endforeach
				@endif
				<form action="" method="post">
					{{csrf_field()}}
					<div class="form-group">
						<input class="form-control" type="text" name="name" placeholder="name" >
					</div>
										<div class="form-group">
						<input class="form-control" type="text" name="Email" placeholder="Email" >
					</div>
					<div class="form-group">
						<input class="btn btn-success" type="submit" >
					</div>
				</form>
			</div>
		</div>
	</div>
</body>
</html>