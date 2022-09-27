@extends('layouts.master')
@section('content')
<div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
  <div class="carousel-indicators">
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
  </div>
  <div class="carousel-inner">

    @foreach ($item as $p)
    <div class="carousel-item {{ $p->id==1? 'active' :''}} image_slider">
        <a href="product/{{$p->id}}">
      <img src="{{$p->image}}" class="d-block w-100"></a>
      <div class="carousel-caption">
        <h3>{{$p->name}}</h3>
        <p>{{$p->description}}</p>
    </div>
    </div>
    @endforeach


  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>
<style>
    .image_slider{
        height: 500px;
    }
    .carousel-caption{
        background-color:rgba(13, 13, 13, 0.38) !important;
    }
</style>
@endsection
