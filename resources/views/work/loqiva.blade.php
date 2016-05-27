@extends('layouts.master')

@section('title', 'Captive Health')

@section('content')

    <div class="panel panel-default project-panel">
        <h1>Loqiva</h1>

        <p class="text-center">
            <span class="date">April 2016</span>
        </p>

        <div class="panel-body">

            <div class="row">
                <p>
                    I was part of the team that developed the smarty city mobile app <a
                            target="_blank" href="http://www.loqiva.com/">Loqiva</a>, which used components from apps
                    that were used across the
                    borough of Tower Hamlets with survey APIs. It updates citizens with the location of events and live
                    news feeds. I
                    focused on the web platform and using Zend PHP framework on the server and JScript extensively on
                    the front end to reduce server load. Working
                    closely with designers and potential users, we took care to develop the most user friendly
                    experience possible.
                </p>

                <div class="col-xs-12 col-md-12">
                    <div class='project-img' style="visibility:hidden" id="loqiva1"></div>
                </div>

                <p>
                    While working on this project I learnt how to follow single page application principles, without
                    needing feature rich SPA frameworks, so that we could
                    degrade gracefully for older devices and browsers. For example a technique we employed was to
                    maintain data models in the javascript and update the DOM with changes returned from REST calls.
                </p>

                <p>Another requirement was to scale authentication through the API over SSL: we used OAuth 2.0 plugins
                    for the social login and the Android app uses HTTP libraries to send device generated token to the
                    server for
                    identification.</p>


                <p>
                    On the web platform we developed several
                    JQuery plugins which extend the
                    basic functionality of forms and Google maps so that when a user clicks on the map then forms are
                    added
                    and submitted dynamically, thus enabling the map as an interactive tool for updating the mobile
                    content. The application populates it's content dynamically using the following APIs: Google places,
                    YouTube subscribe services, Twitter API and the Eventful API.
                </p>

                <div class="col-xs-12 col-md-12">

                    <img src="/img/ip6.png" class="img-responsive" id="loqiva-iphone"/>
                </div>

            </div>

        </div>

    </div>

@endsection