@extends('layouts.app')
@section('content')

<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
</head>
<body>
	<style type="text/css">
		h2	{
			margin-bottom: 30px;
			color: #3f8adb;	}
		body {
			background-color:  #F5F5F5;}

		.btn, .form-control {
			color: white;}

		label {
			color: #3f8adb;}
	</style>
</body>
<div class="container">
	<div class="col-md-10">
	<h2></h2>
		<div class="alert alert-primary" role="alert">
  <h2>Input Data Post</h2>
</div>
	
	<form method="post" action="{{url('/post')}}">
	@csrf
		<table>
			<div class="form-group row">
				<label  class="col-sm-2 col-form-label">Kategori ID</label>
			<div class="col-sm-5">
				<select name="post_cat_id" class="form-control" style="background-color: #3f8adb">
					@foreach($cat as $row)
					<option value="{{$row->cat_id}}">{{$row->cat_name}}</option>
					@endforeach
				</select>	
			</div>
			</div>
		
			<div class="form-group row">
				<label  class="col-sm-2 col-form-label">Tanggal</label>
			<div class="col-sm-5">
				<input type="date" name="post_date" class="form-control" style="background-color: #3f8adb" >
			</div>
			</div>

			
			<div class="form-group row">
				<label  class="col-sm-2 col-form-label">Slug</label>
			<div class="col-sm-5">
				<input type="text" name="post_slug" class="form-control" style="background-color: #3f8adb" >
			</div>
			</div>

			
			<div class="form-group row">
				<label class="col-sm-2 col-form-label">Judul</label>
			<div class="col-sm-5">
				<input type="text" name="post_tittle" class="form-control"  style="background-color: #3f8adb">
			</div>
			</div>

			<div class="form-group row">
				<label  class="col-sm-2 col-form-label">Keterangan</label>
			<div class="col-sm-5">
				<input type="text" name="post_text" class="form-control" style="background-color: #3f8adb" id="inputEmail3">
			</div>
			</div>

		</table>
			<div class="form-group row">
				<button type="submit" class="btn btn-primary">SIMPAN</button>
			</div>

	</form>
</div>
</html>


@endsection