<!-- Stored in resources/views/welcome.blade.php -->

@extends('layouts.master')

@section('title', 'Home')

@section('content')

    <div class="container home-banner">
            <div class="col-lg-12 banner-header">
                    <h1 class="intro-header" style="visibility:hidden;">My name is Murray Wynnes and I'm a web developer.</h1>
            </div>
    </div>

<div class="profile-panel">
    <div class="container">
        <div class="row">
            <div class="footer-col col-md-4">
                <h3>Location</h3>

                <p>Ashford, Middlesex<br/>United Kingdom</p>
            </div>
            <div class="footer-col col-md-4">
                <h3>Profile</h3>
                <ul class="list-inline">
                    <li>
                        <a target="_blank" data-toggle="tooltip" title="GitHub" href="https://github.com/CodeMuz"
                           class="btn-social btn-outline">
                            <i class="fa fa-fw fa-github" aria-hidden="true"></i>
                        </a>
                    </li>
                    <li>
                        <a target="_blank" data-toggle="tooltip" title="Résumé" href="resume.pdf"
                           class="btn-social btn-outline"><i class="fa fa-fw fa-file"></i></a>
                    </li>
                    <li>
                        <a target="_blank" data-toggle="tooltip" title="LinkedIn"
                           href="https://www.linkedin.com/in/murraywynnes" class="btn-social btn-outline"><i
                                    class="fa fa-fw fa-linkedin"></i></a>
                    </li>
                </ul>
            </div>
            <div class="footer-col col-md-4">
                <h3>Social</h3>
                <ul class="list-inline">
                    <li>
                        <a target="_blank" data-toggle="tooltip" title="Twitter"
                           href="https://twitter.com/MurrayWynnes?lang=en-gb" class="btn-social btn-outline"><i
                                    class="fa fa-fw fa-twitter"></i></a>
                    </li>
                    <li>
                        <a target="_blank" data-toggle="tooltip" title="Instagram"
                           href="https://www.instagram.com/muzzaaaaaa" class="btn-social btn-outline"><i
                                    class="fa fa-fw fa-instagram"></i></a>
                    </li>
                    <li>
                        <a target="_blank" data-toggle="tooltip" title="Google+"
                           href="https://plus.google.com/u/0/110225041102740556595"
                           class="btn-social btn-outline"><i class="fa fa-fw fa-google-plus-official"></i></a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</div>

@endsection