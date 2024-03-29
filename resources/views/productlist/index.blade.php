@extends('test')
@include('layout.style')
@include('layout.header')
@section('konten')
<!--breadcrumbs area start-->
<div class="breadcrumbs_area">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="breadcrumb_content">
                    <ul>
                        <li><a href="http://127.0.0.1:8000/home">home</a></li>
                        <li>Product details</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
<!--breadcrumbs area end-->

<!--Other product-->
<section class="pt-60 pb-30">
    <div class="container">
        <div class="row">
            <div class="col text-center">
                <div class="section-title">
                    <h2>Our List Product</h2>
                </div>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-xl-4 col-lg-4 col-md-4 col-sm-6 col-12">
                <div class="single-tranding mb-30">
                    <a href="/rumahan">
                        <div class="tranding-pro-img">
                            <img src="assets/img/product/tranding-1.jpg" alt="">
                        </div>
                        <div class="tranding-pro-title">
                            <h3>Rumahan</h3>
                            <h4>BOOK NOW</h4>
                        </div>

                    </a>
                </div>
            </div>
            <div class="col-xl-4 col-lg-4 col-md-4 col-sm-6 col-12">
                <div class="single-tranding mb-30">
                    <a href="/akad">
                        <div class="tranding-pro-img">
                            <img src="assets/img/product/tranding-2.jpg" alt="">
                        </div>
                        <div class="tranding-pro-title">
                            <h3>Akad</h3>
                            <h4>BOOK NOW</h4>
                        </div>
                    
                    </a>
                </div>
            </div>
            <div class="col-xl-4 col-lg-4 col-md-4 col-sm-6 col-12">
                <div class="single-tranding mb-30">
                    <a href="/gedung">
                        <div class="tranding-pro-img">
                            <img src="assets/img/product/tranding-3.jpg" alt="">
                        </div>
                        <div class="tranding-pro-title">
                            <h3>Gedung</h3>
                            <h4>BOOK NOW</h4>
                        </div>
                    
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>
<!--Other product-->

@include('layout.footer')
@endsection