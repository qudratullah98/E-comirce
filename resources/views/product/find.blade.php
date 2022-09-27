@extends('layouts.master')
@section('content')
<div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">

  <div class="carousel-inner">

    <div class="carousel-item active image_slider">
      <img src="images/carper.jpg" class="d-block w-100">
      <div class="carousel-caption">
        <h3>{{$id->name}}</h3>
        <p>{{$id->description}}</p>
    </div>
    </div>


  </div>

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
