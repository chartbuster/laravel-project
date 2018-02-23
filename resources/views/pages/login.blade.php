@extends('layouts.default')
@section('content')

    <div class="card mt-5 pl-3 pr-3">
        <div class="card-title">
            <h1>Login</h1>
            <p class="lead">Enter your details and Login! </p>
        </div>

        <form action="/login" method="post">

            {{ csrf_field() }}

            <div class="form-group">
                <label for="username">Email/Username</label>
                <textarea name="name" class="form-control" id="name" rows="1"></textarea>
            </div>


            <div class="form-group">
                <label for="password">Password</label>
                <textarea name="password" class="form-control" id="password" rows="1"></textarea>
            </div>


            <button onclick="outputname()">login</button>
            <script>
                function outputname() {
                    document.write("Login successful!");
                }
            </script>


        </form>
    </div>

@stop