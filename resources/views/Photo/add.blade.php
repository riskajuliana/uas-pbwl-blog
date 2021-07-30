@extends('layouts.app')
@section('content')

<!DOCTYPE html>
<html>
<head>
	<title></title>
	<style type="text/css">
		h2	{
			margin-bottom: 30px;
			color: #3f8adb;}
		body {
			background-color:  #F5F5F5;}
		.btn {
			color: white;}
		label {
			color: #3f8adb;}
	</style>
</head>
<body>
	<div class="container">
	<div class="col-md-10">
	<h2></h2>
	<div class="alert alert-primary" role="alert">
  <h2>Input Data Photo</h2>
</div>
	
	<form method="post" action="{{url('/photo')}}" enctype="multipart/form-data">
	@csrf
		<table>


			<div class="form-group row">			
				<label class="col-sm-2 col-form-label">Judul Post</label>
			<div class="col-sm-5">	
					<select name="pho_post_id" class="form-control" style="background-color: #3f8adb">>
					@foreach($post as $row)
					<option value="{{$row->id}}">{{$row->post_tittle}}</option>
					@endforeach
				</select>	
			</div>
			</div>

			<div class="form-group row">			
				<label  class="col-sm-2 col-form-label">File Foto</label>
			<div class="col-sm-5">	
				<input type="file" name="gambar">
			</div>
			</div>

			<div class="form-group row">			
				<label class="col-sm-2 col-form-label">Tanggal</label>
			<div class="col-sm-5">	
				<input type="date" name="pho_date" class="form-control" style="background-color: #3f8adb" >
			</div>
			</div>

			<div class="form-group row">			
				<label class="col-sm-2 col-form-label">Judul</label>
			<div class="col-sm-5">	
				<input type="text" name="pho_tittle" class="form-control" style="background-color: #3f8adb" >
			</div>
			</div>

			<div class="form-group row">
				<label class="col-sm-2 col-form-label">Keterangan</label>	
			<div class="col-sm-5">	
				<input type="text" name="pho_text" class="form-control" style="background-color: #3f8adb" >
			</div>
			</div>

		</table>
		<div class="form-group row">
			<div class="col-sm-10">
				<button type="submit" class="btn btn-primary">SIMPAN</button></div>
			</div>
	</form>
</div>
</body>
</html>


@endsection