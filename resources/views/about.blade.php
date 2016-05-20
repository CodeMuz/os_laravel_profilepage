<!-- Stored in resources/views/welcome.blade.php -->

@extends('layouts.master')

@section('title', 'Home')

@section('content')

        <!-- Header -->
<header>
    <div class="profile-wrapper">

        <img class="img-responsive" style="visibility:hidden" src="img/profile.png" alt="">
    </div>
    <div class="panel panel-default about-panel">
        <div class="panel-body">
            <section class="about-text-block">

                <h1>About me</h1>

                <p>Hi I'm Murray, a tech enthusiast, thrill seeker, music lover and explorer. I've lived in
                    London for over a year now and work at the digital agency <b>Captive Minds.</b></p>

                <p>I studied Computer Science and Mathmatics at Bristol University and received an MSc in Advanced
                    Computing.</p>

                <p>I'm passionate about all things digital and how they can be used to benefit society.</p>

                <p>When I'm not at the computer I love to explore the world and experience new cultures, see some of the
                    places you might
                    find me <a href="" onclick="return false;" data-toggle="modal" data-target="#myModal">here</a>.</p>

                <!-- Modal -->
                <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                                            aria-hidden="true">&times;</span></button>
                                <h4 class="modal-title" id="myModalLabel">Travel Map</h4>
                            </div>
                            <div class="modal-body">
                                <iframe src="https://www.google.com/maps/d/embed?mid=1JugdoW0l7ttbn98psy-84lkhVuQ"
                                        width="100%" height="480"></iframe>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                            </div>
                        </div>
                    </div>
                </div>

                <p>The last books I read were: the Foundation Trilogy, Darwin's Ghosts and the Jungle Book. Check out
                    other the things I
                    remember reading <a target="_blank"
                                        href="https://www.goodreads.com/user/show/43312599-murray-wynnes">here</a>.</p>

                <p><a target="_blank" href="resume.pdf" class="btn btn-success"
                      role="button"><i class="fa fa-graduation-cap" aria-hidden="true"></i> Download my resume</a></p>


                <h1>Technical Skills</h1>

                <div class="skill-bars">



                    <span>Code Igniter</span>

                    <div class="progress">
                        <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="20"
                             aria-valuemin="0"
                             aria-valuemax="100" style="width: 70%">
                            <span class="sr-only">20% Complete</span>
                        </div>
                    </div>
                    <span>Zend 1 & 2</span>

                    <div class="progress">
                        <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="60"
                             aria-valuemin="0"
                             aria-valuemax="100" style="width: 78%">
                            <span class="sr-only">60% Complete (warning)</span>
                        </div>
                    </div>
                    <span>Laravel</span>

                    <div class="progress">
                        <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="80"
                             aria-valuemin="0"
                             aria-valuemax="100" style="width: 60%">
                            <span class="sr-only">80% Complete (danger)</span>
                        </div>
                    </div>
                    <span>JavaScript</span>

                    <div class="progress">
                        <div class="progress-bar progress-bar-info" role="progressbar" aria-valuenow="80"
                             aria-valuemin="0"
                             aria-valuemax="100" style="width: 80%">
                            <span class="sr-only">80% Complete (danger)</span>
                        </div>
                    </div>
                    <span>JQuery</span>

                    <div class="progress">
                        <div class="progress-bar progress-bar-info" role="progressbar" aria-valuenow="80"
                             aria-valuemin="0"
                             aria-valuemax="100" style="width: 75%">
                            <span class="sr-only">80% Complete (danger)</span>
                        </div>
                    </div>
                    <span>Angular</span>

                    <div class="progress">
                        <div class="progress-bar progress-bar-info" role="progressbar" aria-valuenow="80"
                             aria-valuemin="0"
                             aria-valuemax="100" style="width: 65%">
                            <span class="sr-only">80% Complete (danger)</span>
                        </div>
                    </div>
                    <span>HTML</span>

                    <div class="progress">
                        <div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="80"
                             aria-valuemin="0"
                             aria-valuemax="100" style="width: 80%">
                            <span class="sr-only">80% Complete (danger)</span>
                        </div>
                    </div>
                    <span>CSS</span>

                    <div class="progress">
                        <div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="80"
                             aria-valuemin="0"
                             aria-valuemax="100" style="width: 70%">
                            <span class="sr-only">80% Complete (danger)</span>
                        </div>
                    </div>

                </div>

                <h1>Competences</h1>

                <div class="skill-bars">

                    <span>Communication</span>

                    <div class="progress">
                        <div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="80"
                             aria-valuemin="0"
                             aria-valuemax="100" style="width: 80%">
                            <span class="sr-only">80% Complete (danger)</span>
                        </div>
                    </div>

                    <span>Critical Thinking</span>

                    <div class="progress">
                        <div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="80"
                             aria-valuemin="0"
                             aria-valuemax="100" style="width: 85%">
                            <span class="sr-only">80% Complete (danger)</span>
                        </div>
                    </div>

                    <span>Creativity</span>

                    <div class="progress">
                        <div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="80"
                             aria-valuemin="0"
                             aria-valuemax="100" style="width: 82%">
                            <span class="sr-only">80% Complete (danger)</span>
                        </div>
                    </div>

                    <span>Problem Solving</span>

                    <div class="progress">
                        <div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="80"
                             aria-valuemin="0"
                             aria-valuemax="100" style="width: 90%">
                            <span class="sr-only">80% Complete (danger)</span>
                        </div>
                    </div>

                    <span>Time management</span>

                    <div class="progress">
                        <div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="80"
                             aria-valuemin="0"
                             aria-valuemax="100" style="width: 80%">
                            <span class="sr-only">80% Complete (danger)</span>
                        </div>
                    </div>
                </div>

            </section>


            <section class="about-text-block">

                <h1>This website</h1>

                <p>This website was built using PHP, HTML5, SCSS and JQuery. For the framework I'm using <a
                            target="_blank" href="https://laravel.com/">Laravel</a> and for a responsive layout
                    I'm using <a href="http://getbootstrap.com/" target="_blank">Bootstrap</a>. The site is
                    built and packaged with <a
                            target="_blank"
                            href="http://gulpjs.com/">Gulp</a> and <a href="https://laravel.com/docs/5.0/elixir"
                                                                      target="_blank">Elixer</a>.
                </p>

                <p>This app is hosted on <a target="_blank" href="https://www.heroku.com/">Heroku</a>
                    and is open-sourced software under the <a href="http://opensource.org/licenses/MIT">MIT license</a>.
                </p>

                <a target="_blank" href="https://github.com/CodeMuz/laravel-profile-page" class="btn btn-primary"
                   role="button"><i class="fa fa-github" aria-hidden="true"></i> View
                    source on Github</a>
            </section>
        </div>
    </div>
</header>

@endsection