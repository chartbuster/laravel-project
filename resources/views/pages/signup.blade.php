@extends('layouts.default')
@section('content')

    <div class="card mt-5 pl-3 pr-3">
        <div class="card-title">
            <h1>Signup</h1>
            <p class="lead">Enter your details and signup! </p>
        </div>

        <form action="/signup" method="post">

            {{ csrf_field() }}

            <div class="form-group">
                <label for="name">Full Name</label>
                <textarea name="name" class="form-control" id="name" rows="1"></textarea>
            </div>

            <div class="form-group">
                <label for="email">Email address</label>
                <input name="email" type="email" class="form-control" id="exampleFormControlInput1"
                       placeholder="name@example.com">
            </div>

            <div class="form-group">
                <label for="password1">Password</label>
                <textarea name="password1" class="form-control" id="password1" rows="1"></textarea>
            </div>

            <div class="form-group">
                <label for="password2">Confirm Password</label>
                <textarea name="password2" class="form-control" id="password2" rows="1"></textarea>
            </div>


            <button type="signup" class="btn btn-primary mb-2">signup</button>
        </form>
    </div>

@stop