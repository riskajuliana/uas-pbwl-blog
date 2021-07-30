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

		.btn, .form-control {
			color: white;}
		label {
			color: #3f8adb;

	</style>
</head>
<body>
	<div class="container">
	<div class="col-md-10">
<h2></h2>
<div class="alert alert-primary" role="alert">
  <h2>Edit Data Kategori</h2>
</div>
	
	<form action="{{ url('/category/' . $row->cat_id)}}" method="post">
	<input name="_method" type="hidden" value="patch">
	@csrf

	<table>
		<div class="form-group row">
			<label  class="col-sm-2 col-form-label">Nama</label>
		<div class="col-sm-5">
			<input type="text" name="cat_name" value="{{ $row->cat_name}}" style="background-color: #3f8adb" class="form-control">
		</div>
		</div>

		<div class="form-group row">
			<label  class="col-sm-2 col-form-label">Keterangan</label>
		<div class="col-sm-5">
			<input type="text" name="cat_text" value="{{ $row->cat_text}}" class="form-control"  style="background-color: #3f8adb" >
		</div>
		</div>
	</table>
			<div class="form-group row">
			<div class="col-sm-10">

				<input type="submit" value="UPDATE" class="btn" style="background-color: gray">
			<div>
			</div>
	</form>
</div>
</body>
</html>

@endsection