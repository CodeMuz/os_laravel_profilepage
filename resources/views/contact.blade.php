<!-- Stored in resources/views/welcome.blade.php -->

@extends('layouts.master')

@section('title', 'Home')

@section('content')

    <header>
        <div class="contact-wrapper">
            Hello, I'd love to hear from you.<br/> Leave your details and I'll get back to you as soon as I can.
        </div>
    </header>

    <div class="panel panel-default contact-panel">
        <div class="panel-body">


            <div id="form-main">
                <form class="form contact-form" action="{{ url('contact') }}" method="POST">

                    <!-- Display Validation Errors -->
                    @include('common.errors')
                    {{ csrf_field() }}

                    <div class="form-group">
                        <input type="text" class="form-control" name="name" placeholder="Name">
                    </div>

                    <div class="form-group">
                        <input type="email" class="form-control" name="email" placeholder="Email">
                    </div>

                    <div class="form-group">
                        <input type="text" class="form-control" name="subject" placeholder="Subject">
                    </div>

                    <div class="form-group">
                        <textarea class="form-control" rows="5" name="message" placeholder="Hello Murray.."></textarea>
                    </div>

                    <button type="submit" class="btn btn-success btn-block"><i class="fa fa-paper-plane fa-3x" aria-hidden="true"></i></button>

                </form>
            </div>
        </div>
@endsection