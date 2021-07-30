@extends('layouts.app')
@section('content')


<!DOCTYPE html>
<html>
<head>
	<title>Kategori</title>

	<style type="text/css">
		h2	{
			margin-bottom: 30px;
			color: #3f8adb;}
		
		label {
			color: #3f8adb;}

	</style>
	</style>
</head>
<body>
	<div class="container">
	<div class="col-md-10">
	<h2></h2>
	<div class="alert alert-primary" role="alert">
  <h2>Input Data Kategori</h2>
</div>
		<form method="post" action="{{url('/category')}}">
			@csrf
			<table>					
				<div class="form-group row">
							<label class="col-sm-2 col-form-label">Nama</label>
						<div class="col-sm-5">
							<input type="text" name="cat_name" class=" form-control" style="background-color: #3f8adb">
						</div>
				</div>
				<div class="form-group row">
						<label class="col-sm-2 col-form-label">Keterangan</label>
					<div class="col-sm-5">
						<input type="text" name="cat_text" class="form-control" style="background-color: #3f8adb">
					</div>
				</div>
			</table>
				<div class="form-group row">
					<div>
						<div class="col-sm-10">
						<button type="submit" class="btn btn-primary">SIMPAN</button>
						</div>
					</div>
			</form>

		</div>
		</div>
</body>
</html>


@endsection