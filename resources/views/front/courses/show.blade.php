@extends('front.layout')

@section('content')
<!-- breadcrumb start-->
<section class="breadcrumb breadcrumb_bg">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="breadcrumb_iner text-center">
                    <div class="breadcrumb_iner_item">
                        <h2>Course Details</h2>
                        <p>Courses<span>/</span>{{$course->cat->name}} <span>/</span>{{$course->name}}</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- breadcrumb start-->

<!--================ Start Course Details Area =================-->
<section class="course_details_area section_padding">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 course_details_left">
                <div class="main_image">
                    <img class="img-fluid" src="{{asset('upload/courses/'.$course->imd)}}" alt="">
                </div>
                <div class="content_wrapper">
                    <h4 class="title_top">Objectives</h4>
                    <div class="content">
                        When you enter into any new area of science, you almost always find yourself with a
                        baffling new language of
                        technical terms to learn before you can converse with the experts. This is certainly
                        true in astronomy both in
                        terms of terms that refer to the cosmos and terms that describe the tools of the trade,
                        the most prevalent
                        being the telescope.
                        <br>
                        <br>
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor
                        incididunt ut labore et dolore
                        magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi
                        ut aliquip ex ea
                        commodoconsequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                        cillum. Lorem ipsum dolor sit
                        amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et
                        dolore magna aliqua. Ut enim
                        ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea
                        commodo consequat. Duis aute
                        irure dolor in reprehenderit in voluptate velit esse cillum.
                    </div>

                    <h4 class="title">Course Outline</h4>
                    <div class="content">
                        <ul class="course_list">
                            <li class="justify-content-between align-items-center d-flex">
                                <p>Introduction Lesson</p>
                                <a class="btn_2 text-uppercase" href="#">View Details</a>
                            </li>
                            <li class="justify-content-between align-items-center d-flex">
                                <p>Basics of HTML</p>
                                <a class="btn_2 text-uppercase" href="#">View Details</a>
                            </li>
                            <li class="justify-content-between align-items-center d-flex">
                                <p>Getting Know about HTML</p>
                                <a class="btn_2 text-uppercase" href="#">View Details</a>
                            </li>
                            <li class="justify-content-between align-items-center d-flex">
                                <p>Tags and Attributes</p>
                                <a class="btn_2 text-uppercase" href="#">View Details</a>
                            </li>
                            <li class="justify-content-between align-items-center d-flex">
                                <p>Basics of CSS</p>
                                <a class="btn_2 text-uppercase" href="#">View Details</a>
                            </li>
                            <li class="justify-content-between align-items-center d-flex">
                                <p>Getting Familiar with CSS</p>
                                <a class="btn_2 text-uppercase" href="#">View Details</a>
                            </li>
                            <li class="justify-content-between align-items-center d-flex">
                                <p>Introduction to Bootstrap</p>
                                <a class="btn_2 text-uppercase" href="#">View Details</a>
                            </li>
                            <li class="justify-content-between align-items-center d-flex">
                                <p>Responsive Design</p>
                                <a class="btn_2 text-uppercase" href="#">View Details</a>
                            </li>
                            <li class="justify-content-between align-items-center d-flex">
                                <p>Canvas in HTML 5</p>
                                <a class="btn_2 text-uppercase" href="#">View Details</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>


            <div class="col-lg-4 right-contents">
                <div class="sidebar_top">
                    <ul>
                        <li>
                            <a class="justify-content-between d-flex" href="#">
                                <p>Trainer’s Name</p>
                                <span class="color">{{$course->trainer->name}}</span>
                            </a>
                        </li>
                        <li>
                            <a class="justify-content-between d-flex" href="#">
                                <p>Schedule </p>
                                <span>2.00 pm to 4.00 pm</span>
                            </a>
                        </li>

                    </ul>
                </div>

                <h4 class="title">Reviews</h4>
                <div class="content">
                    <div class="review-top row pt-40">
                        <div class="col-lg-12">
                            <h6 class="mb-15">Provide Your Rating</h6>
                            <div class="d-flex flex-row reviews justify-content-between">
                                <span>Quality</span>
                                <div class="rating">
                                    <a href="#"><img src="{{asset('front/icon')}}/color_star.svg" alt=""></a>
                                    <a href="#"><img src="{{asset('front/icon')}}/color_star.svg" alt=""></a>
                                    <a href="#"><img src="{{asset('front/icon')}}/color_star.svg" alt=""></a>
                                    <a href="#"><img src="{{asset('front/icon')}}/color_star.svg" alt=""></a>
                                    <a href="#"><img src="{{asset('front/icon')}}/star.svg" alt=""></a>
                                </div>
                                <span>Outstanding</span>
                            </div>
                            <div class="d-flex flex-row reviews justify-content-between">
                                <span>Puncuality</span>
                                <div class="rating">
                                    <a href="#"><img src="{{asset('front/icon')}}/color_star.svg" alt=""></a>
                                    <a href="#"><img src="{{asset('front/icon')}}/color_star.svg" alt=""></a>
                                    <a href="#"><img src="{{asset('front/icon')}}/color_star.svg" alt=""></a>
                                    <a href="#"><img src="{{asset('front/icon')}}/star.svg" alt=""></a>
                                    <a href="#"><img src="{{asset('front/icon')}}/star.svg" alt=""></a>
                                </div>
                                <span>Outstanding</span>
                            </div>
                            <div class="d-flex flex-row reviews justify-content-between">
                                <span>Quality</span>
                                <div class="rating">
                                    <a href="#"><img src="{{asset('front/icon')}}/color_star.svg" alt=""></a>
                                    <a href="#"><img src="{{asset('front/icon')}}/color_star.svg" alt=""></a>
                                    <a href="#"><img src="{{asset('front/icon')}}/color_star.svg" alt=""></a>
                                    <a href="#"><img src="{{asset('front/icon')}}/color_star.svg" alt=""></a>
                                    <a href="#"><img src="{{asset('front/icon')}}/star.svg" alt=""></a>
                                </div>
                                <span>Outstanding</span>
                            </div>

                        </div>
                    </div>
                    <div class="feedeback">
                        <h6>Your Feedback</h6>
                        <textarea name="feedback" class="form-control" cols="10" rows="10"></textarea>
                        <div class="mt-10 text-right">
                            <a href="#" class="btn_1">Read more</a>
                        </div>
                    </div>
               
                </div>
            </div>
        </div>
    </div>
</section>
<!--================ End Course Details Area =================-->
@endsection