<div class="col-lg-4 sidebar-area">
    <div class="single_widget search_widget">
        <div id="imaginary_container">
            {{--          {{route('search')}}--}}
            <form action="/" method="GET">
                <div class="input-group stylish-input-group">
                    <input
                        type="text"
                        class="form-control"
                        placeholder="Search"
                        name="search"
                    />
                    <span class="input-group-addon">
                <button type="submit">
                  <span class="lnr lnr-magnifier"></span>
                </button>
            </span>
                </div>
            </form>
        </div>
    </div>
    <div class="single_widget cat_widget">
        <h4 class="text-uppercase pb-20">post categories</h4>
        <ul>
            @foreach ($categories as $category)
                <li>
                    {{--            {{route('category.post', $category->slug)}}--}}
                    <a href="/">{{$category->name}} <span>{{$category->articles->count()}}</span></a>
                </li>
            @endforeach
        </ul>
    </div>

    <div class="single_widget recent_widget">
        <h4 class="text-uppercase pb-20">Recent Posts</h4>
        <div class="active-recent-carusel">
            @foreach ($latestArticles as $latestArticle)
                <div class="item">
                    <img src="{{asset('storage/'.$latestArticle->image)}}" alt="{{$latestArticle->image}}"
                         width="200px"/>
{{--                    {{route('post', $latestArticle->slug)}}--}}
                    <a href="/">
                        <p class="mt-20 title text-uppercase">
                            {{$latestArticle->title}}
                        </p>
                    </a>
                    <p>
                        {{$latestArticle->created_at->diffForHumans()}}
{{--                        <span>--}}
{{--            <i class="fa fa-heart-o" aria-hidden="true"></i> --}}
{{--                            {{$recentPost->likedUsers->count()}}--}}
{{--            <i class="fa fa-comment-o" aria-hidden="true"></i>--}}
{{--                            {{$recentPost->comments->count()}}</span>--}}
                    </p>
                </div>
            @endforeach
        </div>
    </div>
    <div class="single_widget tag_widget">
        <h4 class="text-uppercase pb-20">Tag Clouds</h4>
        <ul>
            @foreach ($tags->unique('name')->take(10) as $recentTag)
                {{--           {{route('tag.posts', $recentTag->name)}}--}}
                <li><a href="/">#{{$recentTag->name}}</a></li>
            @endforeach
        </ul>
    </div>
</div>
