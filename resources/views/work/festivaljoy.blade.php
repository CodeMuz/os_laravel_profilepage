@extends('layouts.master')

@section('title', 'Captive Health')

@section('content')



    <div class="panel panel-default project-panel">
        <h1>FestivalJoy</h1>

        <p class="text-center">
            <span class="date">May 2015 - Current</span>
        </p>

        <div class="panel-body">

            <div class="row">
                <p>
                    After searching for the next music festivals coming up around europe I wasn't satisfied with the user
                    experience offered by sites such as <a href="http://www.festivalsearcher.com" target="_blank">www.festivalsearcher.com</a>. So using AngularJS and the Google Maps
                    extensions me and a friend built a responsive mapping tool which allows you to filter through marker
                    objects on a map and get a better taste of where and when awesome things are happening
                </p>
                <p>
                    The application is built using
                    AngularJS v1.4.1, Grunt, Karma, Jasmin, Express, and Bower. The JavaScript isn't compressed so the
                    source
                    can be viewed. The data was entered manually and collected from mainly from wikipedia and with the
                    soundcloud plugins, the images from google under suitable licenses.</p>
                </p>

                <div class="col-xs-12 col-md-12">
                    <div class='project-img' style="visibility:hidden" id="loqiva1"></div>
                </div>

                <p>
                    While working on this project I learnt how to follow single page application principles, without
                    using SPA frameworks such as Angular or React, so that we could
                    degrade gracefully for older devices and browsers. For example a technique we employed was to
                    maintain key components in the browser and update the page model through Ajax only when necessary.
                </p>

                <p>Another requirement was to scale authentication through the API over SSL: we used OAuth 2.0 plugins
                    for the social login and the Android app uses HTTP libraries to send device generated token to the
                    server for
                    identification.</p>


                <p>
                    Further, on the web platform we developed several
                    JQuery plugins which extend the
                    basic functionality of forms and Google maps so that when a user clicks on the map then forms are
                    added
                    and submitted dynamically, thus enabling the map as an interactive tool for updating the mobile
                    content.
                </p>

                <div class="col-xs-12 col-md-12">

                    <img src="/img/ip6.png" class="img-responsive" id="loqiva-iphone"/>
                </div>

            </div>

        </div>

    </div>

@endsection