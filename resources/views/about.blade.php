<!-- Stored in resources/views/welcome.blade.php -->

@extends('layouts.master')

@section('title', 'Home')

@section('content')

        <!-- Header -->
<header>
    <div class="profile-wrapper"">

        <img class="img-responsive" style="visibility:hidden" src="img/profile.png" alt="">
    </div>
    <div class="panel panel-default about-panel">

        <div class="panel-body">

            <h1>About</h1>

            <p>Hi I'm Murray, a tech enthusiast, a thrill seeker, music lover and social butterfly. I've lived in London for over a year now and work at the digital agency Captive Minds.</p>

            <p>I studied Computer Science and Mathmatics at Bristol University and received an MSc in Advanced
                Computing.</p>

            <p>I'm passionate about all things digital and how they can be used to benefit society.</p>

            <p>When I'm not at the computer I love to explore the world. see map here</p>

            <p>The last books I read were: Jungle Book, Darwins Ghosts and ... Check out some of the things i can
                remember reading <a href="">here</a></p>

        </div>

        <div class="panel-body">
            <h1>This Website</h1>

            About this website
        </div>
    </div>
</header>

@endsection