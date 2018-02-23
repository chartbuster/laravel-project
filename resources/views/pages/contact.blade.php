@extends('layouts.default')
@section('content')

    <div class="card mt-5 pl-3 pr-3">
        <div class="card-title">
            <h1>Contact Us</h1>
            <p class="lead">Please use this form to contact website owner.</p>
        </div>

        <form action="/contact" method="post">

            {{ csrf_field() }}

            <div class="form-group">
                <label for="email">Email address</label>
                <input name="email" type="email" class="form-control" id="exampleFormControlInput1"
                       placeholder="name@example.com">
            </div>

            <div class="form-group">
                <label for="subject">Subject</label>
                <textarea name="subject" class="form-control" id="subject" rows="1"></textarea>
            </div>

            <div class="form-group">
                <label for="body">Your Message Here</label>
                <textarea name="body" class="form-control" id="body" rows="3"></textarea>
            </div>

            <button type="submit" class="btn btn-primary mb-2">Submit</button>
        </form>
    </div>

@stop