{{--Used on the index page (so shows a small summary--}}
{{--See the guide on binshops.binshops.com for how to copy these files to your /resources/views/ directory--}}
{{--https://binshops.binshops.com/laravel-blog-package--}}

<div class="published post home">
    <div class="blog-item">
        <a href="15-article">
            <img class="attachment-post-thumbnail" width="260" height="260"
                 alt="{{$post->title}}" src="content/15.jpg">
        </a>
        <header class="entry-header">
            <p class="entry-meta">
                <small>Опубликовано</small>
                <time itemprop="datePublished">{{date('d M Y ', strtotime($post->post->posted_at))}}</time>

                <span class="entry-comments-link">

</span>
            </p>
            <h2 class="entry-title" itemprop="headline"><a rel="bookmark" href="15-article">{{$post->title}}</a></h2>
            <a class="more-link go-right" href="15-article">Продолжить чтение?</a>
        </header>
        <div class="entry-content" itemprop="text"></div>

        <footer class="entry-footer"></footer>


        <div class='text-center blog-image'>
            <?=$post->image_tag("medium", true, ''); ?>
        </div>
        <div class="blog-inner-item">
            <h3 class=''><a href='{{$post->url($locale)}}'>{{$post->title}}</a></h3>
            {{-- <h5 class=''>{{$post->subtitle}}</h5> --}}

            @if (config('binshopsblog.show_full_text_at_list'))
                <p>{!! $post->post_body_output() !!}</p>
            @else
                <p>{!! mb_strimwidth($post->post_body_output(), 0, 400, "...") !!}</p>
            @endif

            <div class="post-details-bottom">
                <span class="light-text">Автор: </span> {{$post->post->author->name}} <span class="light-text">Опубликовано в: </span> {{date('d M Y ', strtotime($post->post->posted_at))}}
            </div>
            <div class='text-center'>
                <a href="{{$post->url($locale)}}" class="btn btn-primary">View Post</a>
            </div>
        </div>
    </div>

</div>

{{-- <h1 class="introBlockHeading" style="padding-bottom:0;">Последние статьи</h1>
<div class="blog-posts clearfix">

    <article class="published post home">
        
    </article>
</div> --}}