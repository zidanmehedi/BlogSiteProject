<!DOCTYPE html>
<html lang="en" class="no-js">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Title | A Perfect Place For Your Career</title>
    <link rel="icon" href="{{asset('images/arrow.png')}}">

    <!-- bootstrap css -->
    <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">
    <!-- signin-bar-plugin-css -->
    <link rel="stylesheet" href='{{asset("css/signup-plugin-css/style.css")}}'>
    <!-- google fonts css -->
    <link
        href="https://fonts.googleapis.com/css?family=Courgette|EB+Garamond:400,500,600,700,800|Lato:100,300,400,700,900|Open+Sans:300,400,600,700,800|Oleo+Script:400,700&display=swap&display=swap"
        rel="stylesheet">
    <!-- font awesome css -->
    <link rel="stylesheet" href='{{asset("fontawesome-free-5.9.0-web/css/all.min.css")}}'>
    <!-- slick slider css -->
    <link rel="stylesheet" href="{{asset('css/slick.css')}}">
    <!-- progress bar css -->
    <link rel="stylesheet" href='{{asset("css/progress-bar/style.css")}}'>
    <!-- animation css -->
    <link rel="stylesheet" href='{{asset("css/animate.min.css")}}'>
    <!-- main css -->
    <link rel="stylesheet" href='{{asset("css/style.css")}}'>
    <!-- responsive css -->
    <link rel="stylesheet" href='{{asset("css/responsive.css")}}'>

</head>

<body>
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

    <!-- nav bar -->
    <header id="head-section">
        <nav class="navbar navbar-expand-lg navbar-light custom_nav fixed-top">
            <div class="container">
                <a class="navbar-brand" href="index.html">ERN</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse"
                    data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                    aria-label="Toggle navigation">
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

    <!-- sign-bar-plugin-start -->
    <div class="cd-signin-modal js-signin-modal">
        <!-- this is the entire modal form, including the background -->
        <div class="cd-signin-modal__container">
            <!-- this is the container wrapper -->
            <ul class="cd-signin-modal__switcher js-signin-modal-switcher js-signin-modal-trigger">
                <li><a href="#0" data-signin="login" data-type="login">Sign in</a></li>
                <li><a href="#0" data-signin="signup" data-type="signup">New account</a></li>
            </ul>

            <div class="cd-signin-modal__block js-signin-modal-block" data-type="login">
                <!-- log in form -->
                <form class="cd-signin-modal__form">
                    <p class="cd-signin-modal__fieldset">
                        <label
                            class="cd-signin-modal__label cd-signin-modal__label--email cd-signin-modal__label--image-replace"
                            for="signin-email">E-mail</label>
                        <input
                            class="take-left cd-signin-modal__input cd-signin-modal__input--full-width cd-signin-modal__input--has-padding cd-signin-modal__input--has-border"
                            id="signin-email" type="email" placeholder="E-mail">
                        <span class="cd-signin-modal__error">Error message here!</span>
                    </p>

                    <p class="cd-signin-modal__fieldset take-down">
                        <label
                            class="cd-signin-modal__label cd-signin-modal__label--password cd-signin-modal__label--image-replace"
                            for="signin-password">Password</label>
                        <input
                            class="take-left cd-signin-modal__input cd-signin-modal__input--full-width cd-signin-modal__input--has-padding cd-signin-modal__input--has-border"
                            id="signin-password" type="text" placeholder="Password">
                        <a href="#0" class="cd-signin-modal__hide-password js-hide-password">Hide</a>
                        <span class="cd-signin-modal__error">Error message here!</span>
                    </p>

                    <p class="cd-signin-modal__fieldset no-pad">
                        <input type="checkbox" id="remember-me" checked class="cd-signin-modal__input ">
                        <label for="remember-me">Remember me</label>
                    </p>

                    <p class="cd-signin-modal__fieldset">
                        <input class="cd-signin-modal__input cd-signin-modal__input--full-width" type="submit"
                            value="Login">
                    </p>
                </form>

                <p class="cd-signin-modal__bottom-message js-signin-modal-trigger"><a href="#0"
                        data-signin="reset">Forgot your password?</a></p>
            </div> <!-- cd-signin-modal__block -->

            <div class="cd-signin-modal__block js-signin-modal-block" data-type="signup">
                <!-- sign up form -->
                <form class="cd-signin-modal__form">
                    <p class="cd-signin-modal__fieldset">
                        <label
                            class="cd-signin-modal__label cd-signin-modal__label--username cd-signin-modal__label--image-replace"
                            for="signup-username">Username</label>
                        <input
                            class="take-left cd-signin-modal__input cd-signin-modal__input--full-width cd-signin-modal__input--has-padding cd-signin-modal__input--has-border"
                            id="signup-username" type="text" placeholder="Username">
                        <span class="cd-signin-modal__error">Error message here!</span>
                    </p>

                    <p class="cd-signin-modal__fieldset">
                        <label
                            class="cd-signin-modal__label cd-signin-modal__label--email cd-signin-modal__label--image-replace"
                            for="signup-email">E-mail</label>
                        <input
                            class="take-left cd-signin-modal__input cd-signin-modal__input--full-width cd-signin-modal__input--has-padding cd-signin-modal__input--has-border"
                            id="signup-email" type="email" placeholder="E-mail">
                        <span class="cd-signin-modal__error">Error message here!</span>
                    </p>

                    <p class="cd-signin-modal__fieldset take-down">
                        <label
                            class="cd-signin-modal__label cd-signin-modal__label--password cd-signin-modal__label--image-replace"
                            for="signup-password">Password</label>
                        <input
                            class="take-left cd-signin-modal__input cd-signin-modal__input--full-width cd-signin-modal__input--has-padding cd-signin-modal__input--has-border"
                            id="signup-password" type="text" placeholder="Password">
                        <a href="#0" class="cd-signin-modal__hide-password js-hide-password">Hide</a>
                        <span class="cd-signin-modal__error">Error message here!</span>
                    </p>

                    <p class="cd-signin-modal__fieldset no-pad">
                        <input type="checkbox" id="accept-terms" class="cd-signin-modal__input ">
                        <label for="accept-terms">I agree to the <a href="#0">Terms</a></label>
                    </p>

                    <p class="cd-signin-modal__fieldset">
                        <input
                            class="cd-signin-modal__input cd-signin-modal__input--full-width cd-signin-modal__input--has-padding"
                            type="submit" value="Create account">
                    </p>
                </form>
            </div> <!-- cd-signin-modal__block -->

            <div class="cd-signin-modal__block js-signin-modal-block" data-type="reset">
                <!-- reset password form -->
                <p class="cd-signin-modal__message">Lost your password? Please enter your email address. You will
                    receive a link to create a new password.</p>

                <form class="cd-signin-modal__form">
                    <p class="cd-signin-modal__fieldset">
                        <label
                            class="cd-signin-modal__label cd-signin-modal__label--email cd-signin-modal__label--image-replace"
                            for="reset-email">E-mail</label>
                        <input
                            class="cd-signin-modal__input cd-signin-modal__input--full-width cd-signin-modal__input--has-padding cd-signin-modal__input--has-border"
                            id="reset-email" type="email" placeholder="E-mail">
                        <span class="cd-signin-modal__error">Error message here!</span>
                    </p>

                    <p class="cd-signin-modal__fieldset">
                        <input
                            class="cd-signin-modal__input cd-signin-modal__input--full-width cd-signin-modal__input--has-padding"
                            type="submit" value="Reset password">
                    </p>
                </form>

                <p class="cd-signin-modal__bottom-message js-signin-modal-trigger"><a href="#0" data-signin="login">Back
                        to log-in</a></p>
            </div> <!-- cd-signin-modal__block -->
            <a href="#0" class="cd-signin-modal__close js-close">Close</a>
        </div> <!-- cd-signin-modal__container -->
    </div>
    <!-- sign-bar-plugin-end -->

    <!-- banner part start -->
    <section class="banner_slider">
        <div class="previous"><i class="fas fa-chevron-left" aria-hidden="true"></i></div>
        <div class="next"><i class="fas fa-chevron-right " aria-hidden="true"></i></div>

        <div class="banner-part">
            <div class="banner-img" style="background: url(/images/computer-2048166_1280.jpg) no-repeat center;">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-lg-8 col-sm-10">
                            <div class="banner-text text-left wow slideInUp">
                                <h1>build your career staying with us</h1>
                                <p>
                                    Our industry faces shortages in skilled professionals at all levels, and for many
                                    companies
                                    these shortages have reached a dire point. Now is the time to change the image of
                                    the
                                    industry as a viable career choice!
                                </p>
                                <div class="banner-btn-tag">
                                    <a href="#" class="first">know more</a>
                                    <a href="#" class="second">support us</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="banner-img" style="background: url(/images/student-849822_1280.jpg) no-repeat center">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-lg-8 col-sm-10">
                            <div class="banner-text text-center">
                                <h1>if you want to achieve greatness stop asking for permission</h1>
                                <p>No matter where you are in your career, chances are you're in need of a little
                                    motivation
                                    to get to the next step—to go for the job you'll actually love waking up for, to ask
                                    for
                                    that
                                    promotion, to figure out.
                                </p>
                                <div class="banner-btn-tag">
                                    <a href="#" class="first">know more</a>
                                    <a href="#" class="second">support us</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="banner-img" style="background: url(/images/agreement-3489902_1280.jpg) no-repeat center">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-lg-8 col-sm-10">
                            <div class="banner-text text-center">
                                <h1>work hard today, lead tomorrow</h1>
                                <p> the only way to do great work is to love what you do. if you haven't found it yet,
                                    keep
                                    looking & Don't settle. it is never too late to be what you might have been. a mind
                                    troubled
                                    by
                                    doubtcannot focus on the course to victory.
                                </p>
                                <div class="banner-btn-tag">
                                    <a href="#" class="first">know more</a>
                                    <a href="#" class="second">support us</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </section>
    <!-- banner part end -->

    <!-- about-us-start -->
    <section class="about-us" id="about-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-8 col-sm-4 col-md-5">
                    <div class="about-left-image wow zoomIn">
                        <img src="{{asset('images/analytics-2697949_1280.jpg')}}" alt="image">
                    </div>
                </div>
                <div class="col-lg-6 col-12 col-sm-8 col-md-7">
                    <div class="about-text-part text-right wow fadeInRight">
                        <h3>about us</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Maxime temporibus iste amet
                            voluptatibus, quod, doloribus quam odit ratione laudantium vitae esse sit id alias vel
                            aliquid eveniet unde, obcaecati officiis.Lorem ipsum dolor sit amet, consectetur adipisicing
                            elit. Maxime temporibus iste amet
                            voluptatibus, quod, doloribus quam odit ratione laudantium vitae esse sit id alias vel
                            aliquid eveniet unde, obcaecati officiis. <br /><br />Lorem ipsum dolor sit amet,
                            consectetur
                            adipisicing elit. Maxime temporibus iste amet
                            voluptatibus, quod, doloribus quam odit ratione laudantium vitae esse sit id alias vel
                            aliquid eveniet unde, obcaecati officiis.</p>
                    </div>
                </div>

                <div class="col-lg-6 pt-5 col-12 col-sm-8 col-md-7">
                    <div class="about-text-part text-left wow fadeInLeft">
                        <h3>about employee</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Maxime temporibus iste amet
                            voluptatibus, quod, doloribus quam odit ratione laudantium vitae esse sit id alias vel
                            aliquid eveniet unde, obcaecati officiis.Lorem ipsum dolor sit amet, consectetur
                            adipisicing
                            elit. Maxime temporibus iste amet
                            voluptatibus, quod, doloribus quam odit ratione laudantium vitae esse sit id alias vel
                            aliquid eveniet unde, obcaecati officiis. <br /><br />Lorem ipsum dolor sit amet,
                            consectetur
                            adipisicing elit. Maxime temporibus iste amet
                            voluptatibus, quod, doloribus quam odit ratione laudantium vitae esse sit id alias vel
                            aliquid eveniet unde, obcaecati officiis.</p>
                    </div>
                </div>
                <div class="col-lg-6 pt-5 col-8 col-sm-4 col-md-5 no-padd">
                    <div class="about-left-image wow zoomIn">
                        <img src="{{asset('images/banner-3.jpg')}}" alt="image">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- about-us-end -->

    <!-- video and skill-part-start -->
    <section class="video-skill-bg">
        <div class="container" style="z-index: 14 !important; position: relative;">
            <div class="row">
                <!-- video-part -->
                <div class="col-lg-7 col-sm-6">
                    <div id="video_part" class="wow bounceIn">
                        <i data-toggle="modal" data-target=".bs-example-modal-lg" class="fas fa-play-circle"></i>

                        <div class="modal fade bs-example-modal-lg" tabindex="-1" role="dialog">
                            <div class="modal-dialog modal-lg" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h3 class="modal-title" id="myModalLabel">video title</h3>
                                        <button type="button" class="close" data-dismiss="modal"
                                            aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                    </div>
                                    <div class="modal-body video_modal">
                                        <iframe src="https://www.youtube.com/embed/RsQ1tFLwldY" frameborder="0"
                                            allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture"
                                            allowfullscreen></iframe>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- skill-part -->
                <div class="col-lg-5 col-sm-6 skill-bar wow fadeInRight">
                    <h3>some of our skills</h3>

                    <div id="bar1" class="barfiller">
                        <div class="tipWrap">
                            <span class="tip"></span>
                        </div>
                        <span class="fill" data-percentage="28"></span>
                    </div>
                    <p>number one</p>

                    <div id="bar2" class="barfiller">
                        <div class="tipWrap">
                            <span class="tip"></span>
                        </div>
                        <span class="fill" data-percentage="35"></span>
                    </div>
                    <p>number two</p>

                    <div id="bar3" class="barfiller">
                        <div class="tipWrap">
                            <span class="tip"></span>
                        </div>
                        <span class="fill" data-percentage="75"></span>
                    </div>
                    <p>number three</p>

                    <div id="bar4" class="barfiller">
                        <div class="tipWrap">
                            <span class="tip"></span>
                        </div>
                        <span class="fill" data-percentage="90"></span>
                    </div>
                    <p>number four</p>

                </div>
            </div>
        </div>
    </section>
    <!-- video and skill-part-end -->

    <!-- work-part-start -->
    <section class="work" id="work-section">
        <div class="container">
            <div class="row justify-content-center text-center">
                <div class="col-lg-8 col-11 col-sm-10 wow fadeInUp">
                    <div class="work-inner text-center">
                        <h3>our work</h3>
                        <p>Our industry faces shortages in skilled professionals at all levels, and for many companies
                            these shortages have reached a dire point. Now is the time to change the image of the
                            industry as a viable career choice!</p>
                    </div>

                    <ul class="simplefilter">
                        <li class="active" data-filter="all">all</li>
                        <li data-filter="1">creative people</li>
                        <li data-filter="2">graphic</li>
                        <li data-filter="3">develop</li>
                        <li data-filter="4">appes</li>
                        <li data-filter="5">photo</li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="pt-5 filtr-container wow zoomIn">
                <div class="col-6 col-lg-3 col-sm-4 col-md-3 p-1  work_img filtr-item" data-category="1, 5, 3">
                    <img src="{{asset('images/analytics-2697949_1280.jpg')}}" class="w-100" alt="">
                    <div class="work-fill text-center">
                        <div class="work-ovrly">
                            <h3>project title</h3>
                            <a href="#"><i class="fas fa-eye"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-6 col-lg-3 col-sm-4 col-md-3 p-1  work_img filtr-item" data-category="2, 5, 3, 1">
                    <img src="{{asset('images/analyzing-people-3441040_1280.jpg')}}" class="w-100" alt="">
                    <div class="work-fill text-center">
                        <div class="work-ovrly">
                            <h3>project title</h3>
                            <a href="#"><i class="fas fa-eye"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-6 col-lg-3 col-sm-4 col-md-3 p-1  work_img filtr-item" data-category="4">
                    <img src='{{asset("images/computer-2048166_1280.jpg")}}' class="w-100" alt="">
                    <div class="work-fill text-center">
                        <div class="work-ovrly">
                            <h3>project title</h3>
                            <a href="#"><i class="fas fa-eye"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-6 col-lg-3 col-sm-4 col-md-3 p-1  work_img filtr-item" data-category="3, 5">
                    <img src='{{asset("images/student-849822_1280.jpg")}}' class="w-100" alt="">
                    <div class="work-fill text-center">
                        <div class="work-ovrly">
                            <h3>project title</h3>
                            <a href="#"><i class="fas fa-eye"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-6 col-lg-3 col-sm-4 col-md-3 p-1  work_img filtr-item" data-category="2">
                    <img src='{{asset("images/testimonial-bg.jpg")}}' class="w-100" alt="">
                    <div class="work-fill text-center">
                        <div class="work-ovrly">
                            <h3>project title</h3>
                            <a href="#"><i class="fas fa-eye"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-6 col-lg-3 col-sm-4 col-md-3 p-1  work_img filtr-item" data-category="1, 5">
                    <img src='{{asset("images/comments_img.jpg")}}' class="w-100" alt="">
                    <div class="work-fill text-center">
                        <div class="work-ovrly">
                            <h3>project title</h3>
                            <a href="#"><i class="fas fa-eye"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-6 col-lg-3 col-sm-4 col-md-3 p-1  work_img filtr-item" data-category="3, 4">
                    <img src='{{asset("images/w7.jpg")}}' class="w-100" alt="">
                    <div class="work-fill text-center">
                        <div class="work-ovrly">
                            <h3>project title</h3>
                            <a href="#"><i class="fas fa-eye"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-6 col-lg-3 col-sm-4 col-md-3 p-1  work_img filtr-item" data-category="1">
                    <img src='{{asset("images/skill_img.jpg")}}' class="w-100" alt="">
                    <div class="work-fill text-center">
                        <div class="work-ovrly">
                            <h3>project title</h3>
                            <a href="#"><i class="fas fa-eye"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- work-part-end -->

    <!-- testimonial-part start -->
    <section class="testi-monial" id="testimonial-section">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8 col-11 col-sm-10">
                    <div class="testimonial-header text-center wow fadeInUp">
                        <h2>testimonial</h2>
                        <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Doloremque, distinctio sapiente.
                            Animi,iure recusandae Pariatur blanditiis recusandae Pariatur blanditiis</p>
                    </div>
                </div>
            </div>
            <div class="monial-parent">
                <div class="go-back"><i class="fas fa-chevron-left"></i> </div>
                <div class="go-forward"><i class="fas fa-chevron-right"></i> </div>

                <div class="row content-monial wow zoomInDown">
                    <div class="col-lg-3 col-12">
                        <div class="monial-body text-center">
                            <div class="monial-img">
                                <img src='{{asset("images/monial-2.png")}}' alt="missing">
                            </div>
                            <h2 title="Click To Know More"><a href="#">jacob m.</a></h2>
                            <h3>managing director</h3>
                            <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i
                                class="fas fa-star"></i><i class="fas fa-star"></i>
                        </div>
                    </div>
                    <div class="col-lg-3 col-12">
                        <div class="monial-body text-center">
                            <div class="monial-img">
                                <img src='{{asset("images/monial-2.png")}}' alt="missing">
                            </div>
                            <h2 title="Click To Know More"><a href="#">jacob m.</a></h2>
                            <h3>managing director</h3>
                            <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i
                                class="fas fa-star"></i><i class="fas fa-star"></i>
                        </div>
                    </div>
                    <div class="col-lg-3 col-12">
                        <div class="monial-body text-center">
                            <div class="monial-img">
                                <img src='{{asset("images/monial-1.png")}}' alt="missing">
                            </div>
                            <h2 title="Click To Know More"><a href="#">ramika san</a></h2>
                            <h3>chairman</h3>
                            <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i
                                class="fas fa-star"></i><i class="fas fa-star"></i>
                        </div>
                    </div>
                    <div class="col-lg-3 col-12">
                        <div class="monial-body text-center">
                            <div class="monial-img">
                                <img src='{{asset("images/monial-3.png")}}' alt="missing">
                            </div>
                            <h2 title="Click To Know More"><a href="#">mrs. amily ava</a></h2>
                            <h3>producer</h3>
                            <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i
                                class="fas fa-star"></i><i class="fas fa-star"></i>
                        </div>
                    </div>
                    <div class="col-lg-3 col-12">
                        <div class="monial-body text-center">
                            <div class="monial-img">
                                <img src='{{asset("images/monial-3.png")}}' alt="missing">
                            </div>
                            <h2 title="Click To Know More"><a href="#">mrs. amily ava</a></h2>
                            <h3>producer</h3>
                            <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i
                                class="fas fa-star"></i><i class="fas fa-star"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- testimonial-part end -->

    <!-- our-blog-part start -->
    <secction id="blog-section">
        <div class="container">
            <div class="row blog-padd justify-content-center">
                <div class="col-lg-3 col-11 col-sm-10">
                    <div class="blog-header wow fadeInLeft">
                        <h2>our blog</h2>
                        <p><b><i>We provide you a better service. you won't have any complain about our service, it’s
                                    guaranteed.</i></b></p>
                        <br>
                        <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. In non animi, optio est dolorum,
                            excepturi minus suscipit numquam totam esse dolorem, adipisci corrupti necessitatibus. Ipsum
                            beatae error provident tempore distinctio?</p>
                    </div>
                </div>
                <div class="col-lg-9 text-right">
                    <div class="row full-card text-left wow slideInUp">

                        <div class="col-lg-4">
                            <div class="card">
                                <div class="card-img-top">
                                    <img src='{{asset("images/student-849822_1280.jpg")}}' alt="missing">
                                    <div class="img_overlay">
                                        <a href="#"><i class="fas fa-link"></i></a>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <h3 class="card-title">best contructory production industry</h3>
                                    <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Sint
                                        neque vero ipsa iste quod at est veniam quaerat distinctio iusto, quo quidem
                                        fugit minus consequuntur rerum quasi error natus</p>
                                    <a href="#" class="btn btn-secondary">read more</a>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-4">
                            <div class="card">
                                <div class="card-img-top">
                                    <img src='{{asset("images/business-3152586_1280.jpg")}}' alt="missing">
                                    <div class="img_overlay">
                                        <a href="#"><i class="fas fa-link"></i></a>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <h3 class="card-title">best contructory production industry</h3>
                                    <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Sint
                                        neque vero ipsa iste quod at est veniam quaerat distinctio iusto, quo quidem
                                        fugit minus consequuntur rerum quasi error natus</p>
                                    <a href="#" class="btn btn-secondary">read more</a>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-4">
                            <div class="card">
                                <div class="card-img-top">
                                    <img src='{{asset("images/banner-3.jpg")}}' alt="missing">
                                    <div class="img_overlay">
                                        <a href="#"><i class="fas fa-link"></i></a>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <h3 class="card-title">best contructory production industry</h3>
                                    <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Sint
                                        neque vero ipsa iste quod at est veniam quaerat distinctio iusto, quo quidem
                                        fugit minus consequuntur rerum quasi error natus</p>
                                    <a href="#" class="btn btn-secondary">read more</a>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-4">
                            <div class="card">
                                <div class="card-img-top">
                                    <img src='{{asset("images/banner-2.jpg")}}' alt="missing">
                                    <div class="img_overlay">
                                        <a href="#"><i class="fas fa-link"></i></a>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <h3 class="card-title">best contructory production industry</h3>
                                    <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Sint
                                        neque vero ipsa iste quod at est veniam quaerat distinctio iusto, quo quidem
                                        fugit minus consequuntur rerum quasi error natus</p>
                                    <a href="#" class="btn btn-secondary">read more</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="texts-dan-need">
                        <div class="turn-left mr-3"><i class="fas fa-angle-left"></i> </div>
                        <div class="turn-right"><i class="fas fa-angle-right"></i> </div>
                    </div>
                </div>
            </div>
        </div>
    </secction>
    <!-- our-blog-part end -->

    <!-- counter-part start -->
    <section class="counter-part text-center">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-2 col-6 col-sm-2 counter-text">
                    <i class="fas fa-users"></i>
                    <h2 class="counter">20,000</h2>
                    <h4>total employee</h4>
                </div>

                <div class="col-lg-2 col-6 col-sm-2 counter-text">
                    <i class="fas fa-project-diagram"></i>
                    <h2 class="counter">2,657</h2>
                    <h4>projects</h4>
                </div>

                <div class="col-lg-2 col-6 col-sm-2 counter-text">
                    <i class="fas fa-people-carry"></i>
                    <h2 class="counter">700.00</h2>
                    <h4>expert team</h4>
                </div>

                <div class="col-lg-2 col-6 col-sm-2 counter-text">
                    <i class="fas fa-user-tie"></i>
                    <h2 class="counter">8,001</h2>
                    <h4>clients</h4>
                </div>

                <div class="col-lg-2 col-6 col-sm-2 counter-text">
                    <i class="fas fa-trophy"></i>
                    <h2 class="counter">230.00</h2>
                    <h4>awards</h4>
                </div>
            </div>
        </div>
    </section>
    <!-- counter-part end -->

    <!-- our-event-part start -->
    <section id="event">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 header-style">
                    <div class="row">
                        <div class="col-lg-6 col-5">
                            <div class="meeting-head wow fadeInLeft">
                                <h2>our event</h2>
                            </div>
                        </div>
                        <div class="col-lg-5 col-7 text-right course-head-text wow fadeInUp">
                            <a href="#">view updated events <i class="fas fa-long-arrow-alt-right pl-2"
                                    aria-hidden="true"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row event-padding">
                <div class="col-lg-5 col-sm-6">
                    <div class="calendar calendar-first wow fadeInLeft" id="calendar_first">
                        <div class="calendar_header">
                            <button class="switch-month switch-left"> <i class="fas fa-chevron-left"></i></button>
                            <h2></h2>
                            <button class="switch-month switch-right"> <i class="fas fa-chevron-right"></i></button>
                        </div>
                        <div class="calendar_weekdays mb-4"></div>
                        <div class="calendar_content"></div>
                    </div>
                </div>
                <div class="col-lg-6 col-sm-6 pl-sm-0 pr-sm-3 px-md-3 wow fadeInDown">
                    <div class="event-cata">
                        <h3>our next event</h3>
                    </div>
                    <div class="event-main">
                        <div class="event1">
                            <div class="row">
                                <div class="col-lg-3 pr-sm-3 pl-sm-0 col-md-4 px-md-3 col-4 text-center">
                                    <div class="event-time">
                                        <b>25</b>
                                        <div class="mash">
                                            <span>july</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-9 px-sm-0 col-md-8 px-md-3 col-8 event-infos">
                                    <h4>Lorem ipsum dolor sit amet.</h4>
                                    <a href="#">get info. <i class="fas fa-long-arrow-alt-right" aria-hidden="true"></i>
                                    </a>
                                    <div class="edata">
                                        <span><i class="far fa-clock" aria-hidden="true"></i>
                                            10:30 AM
                                        </span>

                                        <span><i class="fas fa-map-marker-alt" aria-hidden="true"></i>
                                            Dhaka, Bangladesh</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="event1 event2">
                            <div class="row">
                                <div class="col-lg-3 pr-sm-3 pl-sm-0 col-md-4 px-md-3 col-4 text-center">
                                    <div class="event-time">
                                        <b>17</b>
                                        <div class="mash">
                                            <span>august</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-9 px-sm-0 col-md-8 px-md-3 col-8 event-infos">
                                    <h4>Lorem ipsum dolor sit amet.</h4>
                                    <a href="#">get info. <i class="fas fa-long-arrow-alt-right" aria-hidden="true"></i>
                                    </a>
                                    <div class="edata">
                                        <span><i class="far fa-clock" aria-hidden="true"></i>
                                            10:30 AM
                                        </span>

                                        <span><i class="fas fa-map-marker-alt" aria-hidden="true"></i>
                                            Dhaka, Bangladesh</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="event1">
                            <div class="row">
                                <div class="col-lg-3 pr-sm-3 pl-sm-0 col-md-4 px-md-3 col-4 text-center">
                                    <div class="event-time">
                                        <b>25</b>
                                        <div class="mash">
                                            <span>october</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-9 px-sm-0 col-md-8 px-md-3 col-8 event-infos">
                                    <h4>Lorem ipsum dolor sit amet.</h4>
                                    <a href="#">get info. <i class="fas fa-long-arrow-alt-right" aria-hidden="true"></i>
                                    </a>
                                    <div class="edata">
                                        <span><i class="far fa-clock" aria-hidden="true"></i>
                                            10:30 AM
                                        </span>

                                        <span><i class="fas fa-map-marker-alt" aria-hidden="true"></i>
                                            Dhaka, Bangladesh</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="event1 event2">
                            <div class="row">
                                <div class="col-lg-3 pr-sm-3 pl-sm-0 col-md-4 px-md-3 col-4 text-center">
                                    <div class="event-time">
                                        <b>17</b>
                                        <div class="mash">
                                            <span>december</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-9 px-sm-0 col-md-8 px-md-3 col-8 event-infos">
                                    <h4>Lorem ipsum dolor sit amet.</h4>
                                    <a href="#">get info. <i class="fas fa-long-arrow-alt-right" aria-hidden="true"></i>
                                    </a>
                                    <div class="edata">
                                        <span><i class="far fa-clock" aria-hidden="true"></i>
                                            10:30 AM
                                        </span>

                                        <span><i class="fas fa-map-marker-alt" aria-hidden="true"></i>
                                            Dhaka, Bangladesh</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-1 text-center">
                    <div class="arrowss">
                        <div class="a-up mr-sm-3">
                            <i class="fas fa-long-arrow-alt-up" aria-hidden="true"></i>
                        </div>
                        <div class="a-down">
                            <i class="fas fa-long-arrow-alt-down" aria-hidden="true"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- our-event-part end -->

    <!-- our-company-section-part start -->
    <section class="company-bg">
        <div class="container">
            <div class="our-company-box text-center">
                <div class="row justify-content-center">
                    <div class="col-lg-8 col-11 col-sm-10">
                        <div class="company-header wow fadeInUp">
                            <h2>our associate</h2>
                            <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Doloremque, distinctio
                                sapiente. Animi, iure recusandae Pariatur blanditiis</p>
                        </div>
                    </div>
                </div>

                <div class="prevs"><i class="fas fa-angle-double-left"></i></div>
                <div class="nexts"><i class="fas fa-angle-double-right"></i></div>

                <div class="autoplay wow zoomInDown">
                    <div class="col-lg-2">
                        <div class="inner-company">
                            <div class="inner-img-box">
                                <a href="#"><img src='{{asset("images/amazon_PNG25.webp")}}' alt="brand"></a>
                            </div>
                            <p>onsectetur adipisicing elit, sedo eiusmod tempor.
                            </p>
                        </div>
                    </div>
                    <div class="col-lg-2">
                        <div class="inner-company">
                            <div class="inner-img-box">
                                <a href="#"><img src='{{asset("images/cocacola_logo_PNG8.png")}}' alt="brand"></a>
                            </div>
                            <p>onsectetur adipisicing elit, sedo eiusmod tempor.
                            </p>
                        </div>
                    </div>
                    <div class="col-lg-2">
                        <div class="inner-company">
                            <div class="inner-img-box">
                                <a href="#"><img src='{{asset("images/adidas_PNG12.webp")}}' alt="brand"></a>
                            </div>
                            <p>onsectetur adipisicing elit, sedo eiusmod tempor.
                            </p>
                        </div>
                    </div>
                    <div class="col-lg-2">
                        <div class="inner-company">
                            <div class="inner-img-box">
                                <a href="#"><img src='{{asset("images/intel_PNG24.png")}}' alt="brand"></a>
                            </div>
                            <p>onsectetur adipisicing elit, sedo eiusmod tempor.
                            </p>
                        </div>
                    </div>
                    <div class="col-lg-2">
                        <div class="inner-company">
                            <div class="inner-img-box">
                                <a href="#"><img src='{{asset("images/nike_PNG10.webp")}}' alt="brand"></a>
                            </div>
                            <p>onsectetur adipisicing elit, sedo eiusmod tempor.
                            </p>
                        </div>
                    </div>
                    <div class="col-lg-2">
                        <div class="inner-company">
                            <div class="inner-img-box">
                                <a href="#"><img src='{{asset("images/webmoney_PNG12.webp")}}' alt="brand"></a>
                            </div>
                            <p>onsectetur adipisicing elit, sedo eiusmod tempor.
                            </p>
                        </div>
                    </div>
                    <div class="col-lg-2">
                        <div class="inner-company">
                            <div class="inner-img-box">
                                <a href="#"><img src='{{asset("images/walt_disney_PNG34.webp")}}' alt="brand"></a>
                            </div>
                            <p>onsectetur adipisicing elit, sedo eiusmod tempor.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- our-company-section-part end -->

    <!-- service-part start -->
    <section id="service">
        <div class="container">
            <div class="row text-center justify-content-center">
                <div class="col-lg-8 col-11">
                    <div class="service-head wow fadeInUp">
                        <h3>pricing plan</h3>
                        <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Aliquid esse praesentium porro
                            modi,
                            unde laudantium voluptas, numquam cupiditate culpa beatae asperiores! Aliquam recusandae</p>
                    </div>
                </div>
            </div>

            <div class="for_device_back"><i class="fas fa-long-arrow-alt-left"></i></div>
            <div class="for_device_forward"><i class="fas fa-long-arrow-alt-right"></i></div>

            <div class="row text-center for_another_device wow zoomIn">
                <div class="col-lg-3 col-6">
                    <div class="plan-box">
                        <span>free trial</span>
                        <img src='{{asset("images/bag.svg")}}' alt="">
                        <ul>
                            <span>$ <b>9.00</b>/month </span>
                            <li>number one</li>
                            <li>number two</li>
                            <li>number three</li>
                            <li>x</li>
                            <li>x</li>
                            <li>x</li>
                            <li>x</li>
                        </ul>
                        <a href="#">Get it</a>
                    </div>
                </div>
                <div class="col-lg-3 col-6">
                    <div class="plan-box">
                        <span>beginner</span>
                        <img src='{{asset("images/beach.svg")}}' alt="">
                        <ul>
                            <span>$ <b>19.99</b>/month </span>
                            <li>number one</li>
                            <li>number two</li>
                            <li>number three</li>
                            <li>number four</li>
                            <li>number five</li>
                            <li>x</li>
                            <li>x</li>
                        </ul>
                        <a href="#">Get it</a>
                    </div>
                </div>
                <div class="col-lg-3 col-6">
                    <div class="plan-box">
                        <span>Standard</span>
                        <img src='{{asset("images/barrel.svg")}}' alt="">
                        <ul>
                            <span>$ <b>39.31</b>/month </span>
                            <li>number one</li>
                            <li>number two</li>
                            <li>number three</li>
                            <li>number four</li>
                            <li>number five</li>
                            <li>number six</li>
                            <li>x</li>
                        </ul>
                        <a href="#">Get it</a>
                    </div>
                </div>
                <div class="col-lg-3 col-6">
                    <div class="plan-box">
                        <span>Premimum</span>
                        <img src='{{asset("images/wagon.svg")}}' alt="">
                        <ul>
                            <span>$ <b>49.99</b>/month </span>
                            <li>number one</li>
                            <li>number two</li>
                            <li>number three</li>
                            <li>number four</li>
                            <li>number five</li>
                            <li>number six</li>
                            <li>number seven</li>
                        </ul>
                        <a href="#">Get it</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- service-part end -->

    <!-- contact-part start -->
    <footer id="contact">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-10 col-sm-6" style="border-right: 1px solid #d5d5d5">
                    <div class="footer-one wow fadeInLeft">
                        <a class="footer-logo" href="index.html">ERN</a>
                        <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Accusamus facere ducimus minus
                            libero eos laudantium fugiat. Animi repellat molestias quaerat unde minus? Eos quos sunt
                            accusantium omnis, repudiandae ducimus minima.</p>
                        <div class="links">
                            <a href="#" class="facebook"><i class="fab fa-facebook-f"></i></a>
                            <a href="#" class="twitter"><i class="fab fa-twitter"></i></a>
                            <a href="#" class="dribbble"><i class="fab fa-dribbble"></i></a>
                            <a href="#" class="pinterest"><i class="fab fa-pinterest-p"></i></a>
                            <a href="#" class="linkedin"><i class="fab fa-linkedin-in"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-5 col-12 col-sm-6">
                    <form class="my-form wow fadeInDown">
                        <div class="form-group">
                            <label for="exampleInputEmail1">Your Name</label>
                            <input type="text" class="form-control" placeholder="Enter your name">
                        </div>
                        <div class="form-group pb-4">
                            <label for="exampleInputEmail1">Email Address</label>
                            <input type="email" class="form-control" id="exampleInputEmail1"
                                aria-describedby="emailHelp" placeholder="Enter your email">
                            <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone
                                else.</small>
                        </div>
                        <div class="form-group">
                            <textarea name="" id="" placeholder="Enter your message"></textarea>
                        </div>
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
                </div>
                <div class="col-lg-3 col-10 col-sm-6" style="border-left: 1px solid #d5d5d5">
                    <div class="footer-three wow fadeInRight">
                        <h5 class="mb-3">Our Location</h5>
                        <h6>1234, Park Street Avenue, Newyork city North America.</h6>

                        <h5 class="mb-3 mt-4">Our Email</h5>
                        <span>numan3447@gmail.com</span> <br>
                        <span class="kom">eleasnuman@gmail.com</span>

                        <h5 class="mb-3 mt-4">Our Website</h5>
                        <h6><a href="#">www.websitename.com</a></h6>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <div class="cpy-place w-100 text-center">
        <h5>Copyright© 2019. All rights reserved by Designer</h5>
    </div>
    <!-- contact-part end -->












    <!-- jquery parts -->
    <script src='{{asset("js/jquery-1.12.4.min.js")}}'></script>
    <script src='{{asset("js/popper.min.js")}}'></script>
    <!-- bootstrap js -->
    <script src='{{asset("js/bootstrap.min.js")}}'></script>
    <!-- signin-bar-plugin-js -->
    <script src='{{asset("js/placeholders.min.js")}}'></script>
    <script src='{{asset("js/main.js")}}'></script>
    <!-- font awesome js -->
    <script src='{{asset("fontawesome-free-5.9.0-web/js/all.min.js")}}'></script>
    <!-- waypoint js -->
    <script src='{{asset("js/waypoints.min.js")}}'></script>
    <!-- counter js -->
    <script src='{{asset("js/jquery.counterup.min.js")}}'></script>
    <!-- calender js -->
    <script src='{{asset("js/calender.js")}}'></script>
    <!-- slick js -->
    <script src='{{asset("js/slick.min.js")}}'></script>
    <!-- filterizer js -->
    <script src='{{asset("js/jquery.filterizr.min.js")}}'></script>
    <!-- wow js -->
    <script src='{{asset("js/wow.min.js")}}'></script>
    <!-- progress bar js -->
    <script src='{{asset("js/jquery.barfiller.js")}}'></script>
    <!-- animation js -->
    <script src='{{asset("js/anijs-min.js")}}'></script>
    <script src='{{asset("js/anijs-helper-scrollreveal-min.js")}}'></script>
    <!-- main js -->
    <script src='{{asset("js/script.js")}}'></script>
</body>

</html>