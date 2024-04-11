@extends('layouts.front-panel.app')
@section('title')
    All Posts
@endsection
@section('content')

    <!-- Start top-section Area -->
    <section class="top-section-area section-gap">
        <div class="container">
            <div class="row justify-content-between align-items-center d-flex">
                <div class="col-lg-8 top-left">
                    <h1 class="text-white mb-20">All Post</h1>
                    <ul>
                        <li>
                            <a href="/">Home</a
                            ><span class="lnr lnr-arrow-right"></span>
                        </li>
                        <li><a href="/posts">Posts</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    <!-- End top-section Area -->
    <div class="post-wrapper pt-100">
        <!-- Start post Area -->
        <section class="post-area">
            <div class="container">
                <div class="row justify-content-center d-flex">
                    <div class="col-lg-8">
                        <div class="top-posts pt-50">
                            <div class="container">
                                <div class="row justify-content-center">
                                    @if($articles->count() >0)
                                        @foreach ($articles as $article)
                                            <div class="single-posts col-lg-6 col-sm-6">
                                                <img class="img-fluid" src="{{asset('storage/'.$article->image)}}" alt="{{$article->image}}" />
                                                <div class="date mt-20 mb-20">{{$article->created_at->diffForHumans()}}</div>
                                                <div class="detail">
                                                    <a href=""
                                                    ><h4 class="pb-20">
                                                            {{$article->title}}
                                                        </h4></a
                                                    >
                                                    <p>
                                                        {{-- {!! Str::limit($article->body, 400) !!} --}}
                                                    </p>
                                                    <p class="footer pt-20">
                                                        <i class="fa fa-heart-o" aria-hidden="true"></i>
{{--                                                        <a href="#">{{$article->likedUsers->count()}} Likes</a>--}}
                                                        <i
                                                            class="ml-20 fa fa-comment-o"
                                                            aria-hidden="true"
                                                        ></i>
                                                        <a href="#">{{$article->comments->count()}} Comments</a>
                                                    </p>
                                                </div>
                                            </div>
                                        @endforeach
                                    @else
                                        <h3>No post availabe</h3>
                                    @endif
                                    <div class="justify-content-center d-flex mt-5">
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
@endsection
