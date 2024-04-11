@extends('layouts.front-panel.app')
@section('title')
    Categories
@endsection
@section('content')
<!-- Start banner Area -->
<section class="generic-banner relative">
  <div class="container">
    <div class="row height align-items-center justify-content-center">
      <div class="col-lg-10">
        <div class="generic-banner-content">
          <h2 class="text-white text-center">The Category Page</h2>
          <p class="text-white">
            This page shows all the categories that available by the site
          </p>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- End banner Area -->
<!-- About Generic Start -->
    <div class="main-wrapper">
      <!-- Start fashion Area -->
      <section class="fashion-area section-gap" id="fashion">
        <div class="container">
          <div class="row">
           @foreach ($categories as $category)
           <div class="col-lg-3 col-md-6 single-fashion">
{{--               {{route('category.post',$category->slug)}}--}}
            <a href="/"><img class="img-fluid" src="{{asset('storage/'.$category->image)}}" alt="{{$category->image}}" /></a>
            <!--<p class="date">{{$category->created_at->format('D, d M Y H:i')}}</p>-->
{{--               {{route('category.post',$category->slug)}}--}}
            <a href="/"><h4>{{$category->name}}</h4></a>
            <p>{{$category->description}}</p>
          </div>
           @endforeach
          </div>
            <div class="justify-content-center d-flex mt-5">
                {{ $categories->links()}}
            </div>
        </div>
      </section>
      <!-- End fashion Area -->
    </div>
@endsection
