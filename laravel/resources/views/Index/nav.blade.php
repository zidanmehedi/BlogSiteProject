@extends('index/header')

@section('nav')
<!-- nav bar -->
<header id="head-section">
    <nav class="navbar navbar-expand-lg navbar-light custom_nav fixed-top">
        <div class="container">
            <a class="navbar-brand" href="{{route('home.index')}}">ERN</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse menu" id="navbarSupportedContent">
                <ul class="navbar-nav ml-auto js-signin-modal-trigger">
                    <li class="nav-item">
                        <a class="nav-link active" href="#head-section">home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#about-section">about us</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#work-section">our work</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#testimonial-section">testimonial</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#blog-section">blog</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#service">services</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#contact">contact us</a>
                    </li>
                    <li><a class="cd-main-nav__item cd-main-nav__item--signin" href="#0" data-signin="login">Sign
                            in</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
</header>
<!-- nav bar end -->
@yield('footer')
@endsection
