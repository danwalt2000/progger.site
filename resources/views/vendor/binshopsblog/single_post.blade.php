@extends("layouts.app")

@section('title', $post->gen_seo_title())
@section('description', $post->meta_desc)

{{-- {{dd($post->meta_desc)}} --}}
@section('blog-custom-css')
    <link type="text/css" href="{{ asset('binshops-blog.css') }}" rel="stylesheet">
@endsection

@section("content")

    @if(config("binshopsblog.reading_progress_bar"))
        <div id="scrollbar">
            <div id="scrollbar-bg"></div>
        </div>
    @endif

    {{--https://binshops.binshops.com/laravel/packages/binshopsblog-blog-system-for-your-laravel-app/help-documentation/laravel-blog-package-binshopsblog#guide_to_views--}}
    <div id="blogWrap" class='wrap page-content'>
        <div class='blog-posts'>
            <div class='postSingle'>

                @include("binshopsblog::partials.show_errors")
                @include("binshopsblog::partials.full_post_details")


                @if(config("binshopsblog.comments.type_of_comments_to_show","built_in") !== 'disabled')
                    <div class="" id='maincommentscontainer'>
                        <h2 class='text-center' id='binshopsblogcomments'>Comments</h2>
                        @include("binshopsblog::partials.show_comments")
                    </div>
                @else
                    {{--Comments are disabled--}}
                @endif


            </div>
        </div>
        @if($posts)
            <link href="/style/slider.min.css" rel="stylesheet" type="text/css">
            <div class="swiper-container">
                <div class="popular-posts-wrapper">			
                    <div class="textwidget"><h2>Читайте также</h2>
                    <div class="swiper">
                        <ul class="swiper-wrapper">
                            @foreach($posts as $related_post)
                                @if($post->id == $related_post->id) @continue @endif
                                <li class="swiper-slide">
                                    <a href="{{$related_post->url("en")}}" title="{{$related_post->title}}">
                                        <?=$related_post->image_tag("medium", true, ''); ?>
                                    </a>
                                    <div class="wpp-date">Опубликовано {{date('d.m.Y ', strtotime($related_post->post->posted_at))}}</div>
                                    <div class="wpp-desc"><a href="{{$related_post->url("en")}}" class="wpp-post-title">{{$related_post->title}}</a></div>
                                    <div class="wpp-more"><a href="{{$related_post->url("en")}}">Подробнее ➜</a></div>
                                </li>
                            @endforeach
                        </ul>
                    </div>
                </div>
                <div class="swiper-navigation">
                    <div id="nextEl" class="swiper-button-prev"></div>
                    <div id="prevEl" class="swiper-button-next"></div>
                </div>
            </div>
            <script src="/scripts/swiper-bundle.min.js" defer=""></script>
            <script src="/scripts/swiper-script.js" defer=""></script>
        @endif
    </div>

@endsection

@section('blog-custom-js')
    <script src="{{asset('binshops-blog.js')}}"></script>
@endsection