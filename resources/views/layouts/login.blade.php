
@extends('layouts.master')
@section('content')
<div class="container m-4 ">
    <div class="row">
            <div class="col-md-4 col-md-offset-6 center_div">

                    <form action="login" method="post">
                       @csrf
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Email address</label>
                        <input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                        <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputPassword1" class="form-label">Password</label>
                        <input type="password"  name="password" class="form-control" id="exampleInputPassword1">
                    </div>

                    <button type="submit" class="btn btn-primary">Login</button>
                    </form>
            </div>
    </div>
</div>
<style>
.center_div{
    margin: 0 auto;
    width:50% /* value of your choice which suits your alignment */
}
</style>
@endsection