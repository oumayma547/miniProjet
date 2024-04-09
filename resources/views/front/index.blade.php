@extends('front.layout')

@section('content')
<!-- banner part start-->
<section class="banner_part">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6 col-xl-6">
                <div class="banner_text">
                    <div class="banner_text_iner">

                        <h5>About us</h5>
                        <h2>Higher Institute of Applied Science and Technology of Sousse</h2>
                        <p>L'Institut supérieur des sciences appliquées et de technologie de Sousse ou ISSATSO est un établissement scientifique relevant de l'Université de Sousse (Tunisie). Il est créé en application des dispositions du décret n°1385-2001 du 7 juin 2001.
                            L'institut ouvre ses portes dans les espaces réservés à l'Institut préparatoire aux études d'ingénieur et, dans ce cadre, le contenu de la bibliothèque et le matériel scientifique acquis durant les trois années de la vie de l'institut préparatoire sont exploités.</p>

                        <a href="#" class="btn_1">Read More</a>


                    </div>
                </div>
            </div>
        </div>
    </div>
</section>



<!--::review_part start::-->
<section class="special_cource padding_top">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-xl-5">
                <div class="section_tittle text-center">
                    <h2>Special Courses</h2>
                </div>
            </div>
        </div>
        <div class="row">
            @foreach ($courses as $c)
            <div class="col-sm-6 col-lg-4">
                <div class="single_special_cource">
                    <img src="{{asset('uploads/courses/'.$c->img)}}" class="special_img" alt="123">
                    <div class="special_cource_text">
                        <a href="{{route('front.cat',$c->cat->id)}}" class="btn_4">{{$c->cat->name}}</a>
                        <a href="{{route('front.show',[$c->cat->id,$c->id])}}">
                            <h3>{{$c->name}}</h3>
                        </a>
                        <p>{{$c->small_desc}}</p>
                        <div class="author_info">
                            <div class="author_img">
                                <img src="{{asset('uploads/trainers/'.$c->trainer->img )}}" alt="">
                                <div class="author_info_text">
                                    <p>Conduct by:</p>
                                    <h5>{{$c->trainer->name}}</h5>
                                </div>
                            </div>

                        </div>
                    </div>

                </div>
            </div>
            @endforeach


        </div>
    </div>
</section>
<!--::blog_part end::-->





<!--::blog_part start::-->
<section class="blog_part section_padding">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-xl-5">
                <div class="section_tittle text-center">
                    <p>Our Blog</p>
                    <h2>Students Blog</h2>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-6 col-lg-4 col-xl-4">
                <div class="single-home-blog">
                    <div class="card">
                        <img src="{{asset('front/img')}}/blog/blog_3.png" class="card-img-top" alt="blog">
                        <div class="card-body">
                            <a href="#" class="btn_4">Design</a>
                            <a href="blog.html">
                                <h5 class="card-title">Dry beginning sea over tree</h5>
                            </a>
                            <p>Which whose darkness saying were life unto fish wherein all fish of together called</p>
                            <ul>
                                <li> <span class="ti-comments"></span>2 Comments</li>
                                <li> <span class="ti-heart"></span>2k Like</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-lg-4 col-xl-4">
                <div class="single-home-blog">
                    <div class="card">
                        <img src="{{asset('front/img')}}/blog/blog_2.png" class="card-img-top" alt="blog">
                        <div class="card-body">
                            <a href="#" class="btn_4">Developing</a>
                            <a href="blog.html">
                                <h5 class="card-title">All beginning air two likeness</h5>
                            </a>
                            <p>Which whose darkness saying were life unto fish wherein all fish of together called</p>
                            <ul>
                                <li> <span class="ti-comments"></span>2 Comments</li>
                                <li> <span class="ti-heart"></span>2k Like</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-lg-4 col-xl-4">
                <div class="single-home-blog">
                    <div class="card">
                        <img src="{{asset('front/img')}}/blog/blog_3.png" class="card-img-top" alt="blog">
                        <div class="card-body">
                            <a href="#" class="btn_4">Design</a>
                            <a href="blog.html">
                                <h5 class="card-title">Form day seasons sea hand</h5>
                            </a>
                            <p>Which whose darkness saying were life unto fish wherein all fish of together called</p>
                            <ul>
                                <li> <span class="ti-comments"></span>2 Comments</li>
                                <li> <span class="ti-heart"></span>2k Like</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--::blog_part end::-->

@endsection