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

      <img src="{{$p->image}}" class="d-block w-100">
      <div class="carousel-caption " style="flout-start">
        <h3>{{$p->name}}</h3>
        <p>{{$p->description}}</p>
    </div>
    </div>
    @endforeach


  </div>

</div>

<hr>
<div class="table-responsive container p-5 m-5">
<table>
    <tbody>
    <tr>
        @foreach ($item as $i)

        <td class="text-center text-success "><a href="product/{{$i->id}}"> <img src="{{$i->image}}" alt="" width="300px" height="400px"> <h3> {{$i->name}}</h3></a> </td>

        @endforeach
    </tr>
</tbody>
</table>
</div>
<style>
    .image_slider{
        height: 900px;
    }
    .carousel-caption{
        background-color:rgba(13, 13, 13, 0.38) !important;
    }
</style>
@endsection
