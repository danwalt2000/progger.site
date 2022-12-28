@if(\Auth::check() && \Auth::user()->canManageBinshopsBlogPosts())
    <a href="{{$post->edit_url()}}" class="btn btn-outline-secondary btn-sm pull-right float-right">Edit
        Post</a>
@endif
<div class="breadcrumps">
    <a class="breadcrump breadcrump_arrow" href="/">Главная</a>
    <a class="breadcrump breadcrump_arrow" href="/blog">Блог</a>
    <span class="breadcrump breadcrump_current" href="/blog">{{$post->title}}</span>
</div>
<p class="posted_at">Опубликовано <strong>{{date('d.m.Y ', strtotime($post->post->posted_at))}}</strong></p>
<h1 class='blog_title'>{{$post->title}}</h1>
{{-- <h5 class='blog_subtitle'>{{$post->subtitle}}</h5> --}}

<div class="blogPostImage">
    <div class="aboutPillar"><div class="paddingMy"></div></div>

    <div class="wrapAbout">
        <?=$post->image_tag("thumbnail", false, 'd-block mx-auto'); ?>
    </div>
    <div class="aboutPillar"><div class="paddingMy"></div></div>
</div>

<p class="blog_body_content">
    {!! $post->post_body_output() !!}

    {{--@if(config("binshopsblog.use_custom_view_files")  && $post->use_view_file)--}}
    {{--                                // use a custom blade file for the output of those blog post--}}
    {{--   @include("binshopsblog::partials.use_view_file")--}}
    {{--@else--}}
    {{--   {!! $post->post_body !!}        // unsafe, echoing the plain html/js--}}
    {{--   {{ $post->post_body }}          // for safe escaping --}}
    {{--@endif--}}
</p>

@includeWhen($post->author,"binshopsblog::partials.author",['post'=>$post])
@includeWhen($categories,"binshopsblog::partials.categories",['categories'=>$categories])
