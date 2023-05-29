@extends('master')
@section('login')
<div class="container">
    <div class="row">
        <div class="col-sm-6 offset-sm-4">
            <form class="card" action="login" method="post">
                @csrf
                <div class="card-body">
                    <div class="form-group">
                    <label for="exampleInputEmail1">Email address</label>
                    <input type="email" class="form-control" name="email" value="{{ old('email') }}" placeholder="Enter email">
                        
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">Password</label>
                        <input type="password" class="form-control" name="password" value="{{ old('password') }}" id="exampleInputPassword1" placeholder="Password">
                    </div>
                    <div class="form-check">
                        <input type="checkbox" class="form-check-input" id="exampleCheck1">
                        <label class="form-check-label" for="exampleCheck1">Check me out</label>
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </div>
            </form>
        </div>
    </div>
</div>
<style>
    .col-sm-6{
        margin-top: 150px;
    }
</style>
@endsection