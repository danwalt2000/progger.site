@extends('parts.base')
 
@section('main')


      <div class="menuFiller">
          <div class="paddingMy"></div>
      </div>

<!-- Конец header -->


<div class="headingIntro homeFV">
    <h1>
        <strong id="mainHeroTitle">{{ __('strings.parts_port') }}</strong>
        <em>{{ __('strings.parts_web_dev') }} </em> 
    </h1>
    <p>
        <a href="#footer" class='HomeHeaderButtons'>{{ __('strings.nav_connect') }}</a>
    </p>
</div>

<div class="scollerContainer">
    <div class="scrollIndicator">
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 22 34">
            <path class="st0"
                  d="M11,33L11,33C5.5,33,1,28.5,1,23V11C1,5.5,5.5,1,11,1h0c5.5,0,10,4.5,10,10v12C21,28.5,16.5,33,11,33z"></path>
        </svg>
        <div></div>
    </div>
</div>
</header>
</header>


<main id="page">
    <div id="content">
        <div class="page-content">
            @include("parts.intro")
            
            <div class="hrContainer">
                <hr class="hrHomePage2">
            </div>

            @include('parts.skills')
            
            <div class="hrContainer">
                <hr class="hrHomePage3">
            </div>

            @include('parts.certs')

            <div class="hrContainer">
                <hr class="hrHomePage4">
            </div>

            @include("parts.myworks")

            @if (App::currentLocale() == "ru")
                <div class="hrContainer">
                    <hr class="hrHomePage5">
                </div>

                @include('parts.blog-preview')
            @endif
        </div>
    </div>
</main>
@stop