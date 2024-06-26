@extends('layouts.front-panel.app')
@section('title')
    Category Post
@endsection
@section('content')

    <!-- Start top-section Area -->
    <section class="top-section-area section-gap">
        <div class="container">
            <div class="row justify-content-between align-items-center d-flex">
                <div class="col-lg-8 top-left">
                    <h1 class="text-white mb-20">All Post of Category {{$category->name}}</h1>
                    <ul>
                        <li>
                            <a href="{{route('front-panel.index')}}">Home</a
                            ><span class="lnr lnr-arrow-right"></span>
                        </li>
                        <li>
                            <a href="{{route('front-panel.categories.index')}}">Category</a
                            ><span class="lnr lnr-arrow-right"></span>
                        </li>
                        <li><a href="/">Posts</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    <!-- End top-section Area -->

    <!-- Start post Area -->
    <div class="post-wrapper pt-100">
        <!-- Start post Area -->
        <section class="post-area">
            <div class="container">
                <div class="row justify-content-center d-flex">
                    <div class="col-lg-8">
                        <div class="top-posts pt-50">
                            <div class="container">
                                <div class="row justify-content-center">
                                    @if ($category->articles->count() > 0)
                                        @foreach ($category->articles as $article)
                                            <div class="single-posts col-lg-6 col-sm-6">
                                                <img class="img-fluid" src="{{asset('storage/'.$particle->image)}}" alt="{{$particle->image}}" />
                                                <div class="date mt-20 mb-20">{{$particle->created_at->format('D, d M Y H:i')}}</div>
                                                <div class="detail">
                                                    <a href="{{route('front-panel.article.show', $particle->id)}}"
                                                    ><h4 class="pb-20">
                                                            {{$particle->title}}
                                                        </h4></a
                                                    >
                                                    <p>

                                                    </p>
                                                    <p class="footer pt-20">
                                                        <i class="fa fa-heart-o" aria-hidden="true"></i>
                                                        <a href="#">06 Likes</a>
                                                        <i
                                                            class="ml-20 fa fa-comment-o"
                                                            aria-hidden="true"
                                                        ></i>
                                                        <a href="#">02 Comments</a>
                                                    </p>
                                                </div>
                                            </div>
                                        @endforeach
                                    @else
                                        <h1>No posts available</h1>
                                    @endif
                                    <div class="justify-content-center d-flex mb-3">
                                        {{ $articles->links()}}
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    @include('layouts.front-panel.partials.sidebar')
                </div>
            </div>
        </section>
        <!-- End post Area -->
    </div>
    <!-- End post Area -->
@endsection
