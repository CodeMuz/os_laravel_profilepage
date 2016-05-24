@extends('layouts.master')

@section('title', 'Captive Health')

@section('content')



    <div class="panel panel-default project-panel">
        <h1><a target="_blank" href="http://festivaljoy.com/">FestivalJoy</a></h1>

        <p class="text-center">
            <span class="date">May 2015 - Current</span>
        </p>

        <div class="panel-body">

            <div class="row">
                <p>
                    After searching for the next music festivals coming up around europe I wasn't satisfied with the
                    user
                    experience offered by sites such as <a href="http://www.festivalsearcher.com" target="_blank">www.festivalsearcher.com</a>.
                    So using AngularJS and the Google Maps
                    extensions me and a friend built a responsive mapping tool which allows you to filter through marker
                    objects on a map and get a better taste of where and when awesome things are happening. There is
                    also integration with the soundcloud API which pulls the latest festival playlists when the
                    festival is selected.
                </p>

                <div class="col-xs-12 col-md-12">
                    <img src="/img/festivaljoy1.png" class="img-responsive" id="festival1"/>
                </div>

                <p>
                    The application is built using
                    AngularJS v1.4.1, Grunt, Karma, Jasmin, Express, and Bower. The source code is maintained in a private repository
                    but the JavaScript isn't compressed so the front end can be viewed in browser. The data was entered manually
                    and collected mainly from Wikipedia and the images are from google under suitable licenses.</p>

                <div class="col-xs-12 col-md-12">
                    <img src="/img/festivaljoy2.png" class="img-responsive" id="festival2"/>
                </div>

                <p>Further, out of interest I built a <a target="_blank"
                                                href="https://play.google.com/store/apps/details?id=com.festivaljoy.app">mobile
                        version</a> and pushed to the app stores, it was made using Ionic with Cordova which uses the same Angular
                    framework but with different routing and the scope is supplied via a firebase API service class.</p>

            </div>

        </div>

    </div>

@endsection