@extends('layouts.front-panel.app')
@section('title')
    Tags
@endsection

@section('content')
    <section class="generic-banner relative">
        <div class="container">
            <div class="row height align-items-center justify-content-center">
                <div class="col-lg-10">
                    <div class="generic-banner-content">
                        <h2 class="text-white text-center">The Tags Page</h2>
                        <p class="text-white">
                            This page shows all the Tags that available by the site
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <div class="main-wrapper">
        <!-- Start tags Area -->
        <section class="fashion-area section-gap" id="tags">
            <div class="container">
                <div class="row">
                    @foreach ($tags as $tag)
                        <div class="col-lg-3 col-md-6  ">
{{--                            {{ route('tag.posts', $tag->slug) }}--}}
                            <a href="">
                                <div class="single-tag m-2">
                                    <h4>#{{ $tag->name }}</h4>
                                </div>
                            </a>

                            <!-- Display any other tag-related information here -->
                        </div>
                    @endforeach
                </div>
            </div>
        </section>
        <!-- End tags Area -->
    </div>
@endsection
