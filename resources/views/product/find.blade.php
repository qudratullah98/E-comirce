@extends('layouts.master')
@section('content')

<div class="container p-5 m-5">
    <div class="card mb-3" style="max-width: 540px;">
        <div class="row g-0">
          <div class="col-md-8">
            <a href="/{{$id->image}}" >
            <img class="img" src="{{asset($id->image)}}" class="img-fluid rounded-end" alt="..." ></a>
          </div>
          <div class="col-md-4">
            <div class="card-body">
                <h3>{{$id->name}}</h3>
                <p>{{$id->description}}</p>
                <p class="card-text"><small class="text-muted">{{$id->price}}$</small></p>
            </div>
            <form method="POST" action="/product">
                @csrf
                <input type="hidden" value="{{$id->id}}" name="product_id">
            <button class="btn btn-success float-left">Add Card</button>
            <button class="btn btn-success">Bay</button>
            </form>
          </div>
        </div>
      </div>
</div>
<style>
    .img{
        width: 300px;
        height: 300px;
    }
</style>
@endsection
