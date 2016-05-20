<!-- Stored in resources/views/welcome.blade.php -->

@extends('layouts.master')

@section('title', 'Home')

@section('content')

        <!-- Header -->


<div class="panel panel-default work-panel">
    <div class="panel-body">

        <h1>Work and Experience</h1>

        <h2>Captive Health</h2>
        <span class="date">2013 - 2016</span>

        <p>
            Worked on proprietary NHS applications for Captive Health called 'Patient Connect'. They provides
            hospital
            patients
            with information on the hospital services and the location of facilities. The platform is being used in over
            10 hospitals and consists of a web app
            alongside a mobile platform. Some of the features I helped develop were responsive surveys, automatic
            reports and dynamic mapping
            tools ...<a target="_blank" href="work/captive_health">Read More</a>
        </p>

        <h2>Tower Hamlets</h2>
        <span class="date">2013 - 2014</span>

        <p>Developed a content management system used by Tower Hamlets council and for future smart cities called <a
                    target="_blank" href="http://www.loqiva.com/">Loqiva</a>.
            Features provided include surveys, payment channels, rewards, notifications and maps. All content is served
            to mobile application platforms via an API consumed by both android
            and iOS devices....<a target="_blank" href="work/captive_health">Read More</a>

        <p>

        <h2>Insights App</h2>
        <span class="date">Jan - August, 2014</span>

        <p>A responsive application which aggregates social media media profiles and generates charts and stats in
            realtime.</p>

        <h2>Malaria Mapper</h2>
        <span class="date">July, 2014</span>

        <p>Helped researchers at World Health Organisation with displaying malaria data visually so as to make better
            conclusions about the results and the resources needed to mitigate the spread of the tropical disease.</p>

        <h1>Projects</h1>

        <h2>Festival Joy 2015 - current</h2>
        <span class="date">April 21, 2016</span>

        <p>After searchign for the next music festivals comming up around europe I wasn't satisfied with the user
            experience offered by sites such as http://www.festivalsearcher.com/. Using AngularJS and the GoogleMaps
            extensions me and my brother built a responsive mapping tool which allows you to filter through marker
            objects and get a better taste of where and when things are happening. The application is built using
            AngularJS v1.4.1, Grunt, Karma, Jasmin, Express, and Bower. The JavaScript isn't compressed so the source
            can be viewed. The data was entered manually and collected from mainly from wikipedia and with the
            soundcloud plugins, the images from google under suitable licenses.</p>

        <h2>Advent of code (https://github.com/CodeMuz/adventofcode)</h2>
        <span class="date">April 21, 2016</span>

        <p>Over christmas I decided to get invovled with Eric Wastl's Advent of Code game as an excuse to learn some new
            languages, particularly python. So far I've only competed 19/25, you can view my solutions here
            (https://github.com/ChrisPenner/Advent-Of-Code-Polyglot) and I've contributed some of my better solutions to
            the public repository.</p>

        <h2>Twitter Fever</h2> (https://github.com/CodeMuz/twitter-api-beiber)
        <span class="date">April 21, 2016</span>

        <p>A Ruby on Rails app which allows you to search for tweets on a users twitter account and displays the most
            recent ones containing that word. I used Justin Beiber as a use case and the result was that searching for
            the word 'love' quickly depleated your twitter API allowance.</p>

        <h2>Studyswap</h2>
        <span class="date">April 21, 2016</span>

        <p>A final year project at Bristol University, I worked with other students to build a social network for
            academics to be able to share and discuss their research. It was a CodeIgniter application and made of of
            Amazons web services (S3, Elastic Beanstalk, RDS). View my thesis and findings related to the area here.</p>

    </div>
</div>
@endsection