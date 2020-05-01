@extends('index/nav')

@section('footer')
@yield('content')
<!-- contact-part start -->
<footer id="contact">
    <div class="container">
        <div class="row">
            <div class="col-lg-4 col-10 col-sm-6" style="border-right: 1px solid #d5d5d5">
                <div class="footer-one wow fadeInLeft">
                    <a class="footer-logo" href="{{route('home.index')}}">ERN</a>
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
                        <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter your email">
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
@endsection
