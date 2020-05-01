@extends('index/index')

@section('header')
<!-- preloader start -->
<div class="preloader_main">
    <div class="preloader loading">
        <span class="slice"></span>
        <span class="slice"></span>
        <span class="slice"></span>
        <span class="slice"></span>
        <span class="slice"></span>
        <span class="slice"></span>
    </div>
</div>
<!-- preloader end -->

<!-- backtop -->
<div class="backtop">
    <i class="fas fa-long-arrow-alt-up"></i>
</div>
<!-- header part -->
@yield('nav')
@endsection
