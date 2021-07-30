@extends('layouts.app')

@section('content')
<!DOCTYPE html>
<html>
<head>
  <title></title>
  <style type="text/css">
    h2  {
      margin-bottom: 30px;
      color: #3f8adb;}

    table th {
      color: white;
      font-family: century gothic;}
    
  </style>
</head>
<body>
 <div class="jumbotron jumbotron-fluid">
  <div class="container text-center">

    <h1 class="display-4">SPORT SHOES</h1>
    <p class="lead">ADIDAS-NIKE-DIADORA-AIRWALK.</p>
    <img src="{{asset('img/Sepatu.png')}}" width="30%">
  </div>
</div>

<div class="container">
    <div class="row">
        <div class="col text-center">

          <h1> Review </h1>
        </div>
      </div>
    <div class="row">
          <div class="col">

<div class="card" >
  <img src="{{asset('img/adidas.png')}}" class="card-img-top" alt="Card image cap">
  <div class="card-body">
    <p class="card-text">adidas Indonesia hadir dengan berbagai produk adidas yang lebih terjangkau secara online. Berbagai produk adidas seperti sepatu adidas, hoodie adidas, hingga aksesoris adidas bisa kamu dapatkan di store adidas</p>
  </div>
</div>
 </div>

       <div class="col">

<div class="card" ">
  <img src="{{asset('img/Nike.png')}}" class="card-img-top" alt="Card image cap">
  <div class="card-body">
    <p class="card-text">Sejak saat itu Nike berkembang pesat menciptakan berbagai jenis sepatu olahraga, mulai dari basic running shoes hingga sepatu basket, bahkan sepatu golf</p>
  </div>
</div>
 </div>
  <div class="col">

<div class="card" ">
  <img src="{{asset('img/diodora.png')}}" class="card-img-top" alt="Card image cap">
  <div class="card-body">
    <p class="card-text">Diadora adalah produk perlengkapan olahraga asal Italia yang mencakup sepak bola, tenis, lari, bersepeda, rugby, sepatu atletik, pakaian, dan produsen aksesori fashion dengan lokasi di Italia, Amerika Serikat, dan Hong Kong</p>
  </div>
</div>
 </div>
   <div class="col">

<div class="card" ">
  <img src="{{asset('img/airwalk.png')}}" class="card-img-top" alt="Card image cap">
  <div class="card-body">
    <p class="card-text">Airwalk hadir sejak tahun 1986 tepatnya di La Costa, California yang mana pada saat itu di dirikan oleh Bill Man yang saat itu sebagai seorang desainer sepatu.</p>
  </div>
</div>
 </div>

 </div>
</div>
</body>
</html>
