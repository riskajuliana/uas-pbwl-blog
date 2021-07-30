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
		label {
			color: #3f8adb;}
		table th {
			color: white;
			font-family: century gothic;}
	</style>
</head>
<body>

</body>
</html>

<div class="container">

<h2></h2>
<div class="alert alert-primary" role="alert">
 <h2>Data Album</h2>
</div>
	<table class="table">
		<thead class="bg-light">
		<tr style="background-color: #3f8adb">
			<th scope="col">ID</th>
			<th scope="col">PHOTO ID</th>
			<th scope="col">NAMA</th>
			<th scope="col">KETERANGAN</th>
			<th scope="col">EDIT</th>
		</tr>

		@foreach($rows as $row)
		<tr style="background-color: #fffff">
			<td>{{ $row->id }}</td>
			<td>{{ $row->photo->pho_tittle }}</td>
			<td>{{ $row->album_name }}</td>
			<td>{{ $row->album_text }}</td>
			<td>
				<a href="{{ url('album/' . $row->id . '/edit')}}" class="badge badge-success">EDIT</a>
				
				<form action="{{ url('album/' . $row->id)}}" method="post" class="d-inline">
					<input name="_method" type="hidden" value="delete">
					@csrf
					<button class="badge badge-danger">DELETE</button>
				</form>
			</td>
		</tr>
		@endforeach
	</table>
	<a href="{{ url('album/create') }}">Tambah Data</a>
</div>

@endsection