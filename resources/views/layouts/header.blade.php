<?php
use App\Http\Controllers\ItemController;
$total=0;
if(session()->has('user')){
    $total=itemController::totalCard();

}
?>

<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container-fluid">
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="/home">Home</a>
        </li>
         <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="/login">Login</a>
        </li>





      <form class="d-flex justify-content-start">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success" type="submit">Search</button>
      </form></ul>
    </div>

    <a class="navbar-brand" href="#">card( {{$total}} )</a>

    @if(session()->has("user"))
    <div class="dropdown">
        <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenu2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
         {{session()->get('user')['name']}}
        </button>
        <div class="dropdown-menu" aria-labelledby="dropdownMenu2">
          <button class="dropdown-item" type="button"><a href="/logout">Loguot</a></button>
        </div>
      </div>
      @else
    <a class="navbar-brand" href="\login">Login</a>

      @endif
</nav>

