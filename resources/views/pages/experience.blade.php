
@extends('parts.base')
 
@section('title', __('strings.exp_meta_title'))
@section('description', __('strings.exp_meta_desc'))

@section('main')
<div class="headingIntro">
    <h1>
        <em>{{ __('strings.exp_title') }}</em>
        <strong id="mainHeroTitle">{{ __('strings.nav_experience') }}</strong>
    </h1>
</header>
</header>
@include("parts.skills")

<div class="hrContainer">
    <hr class="hrHomePage4">
</div>

@include('parts.certs')

<div class="MyFullWidth" style="background-color:#f1f1f2;margin-top:0;margin-bottom:0">
    <div class="page-content">
        <div class="workExpJobContainer">
            <div class="ProjectContentOuter">

                <div class="paddingMy" style="clear:none">
                    <div style="cursor:auto;outline:medium none">
                        <h2>TrueConf</h2>
                    </div>
                </div>
            </div>

            <div class="MyCol2">
                <div class="paddingMy" style="clear:none">
                    <h3 class="h2">{{ __('strings.parts_position') }}</h3><span><i>{{ __('strings.exp_tru_date') }}</i></span>
                    <p> <br>
                        {{ __('strings.exp_tru_job') }}
                    </p>
                </div>

                <div class="hrContainer" style="margin-bottom:20px;">
                    <hr class="hrHomePage" style="width:100%">
                </div>

            </div>
        </div>



        
        <div class="workExpJobContainer">
            <div class="ProjectContentOuter">

                <div class="paddingMy" style="clear:none">
                    <div style="cursor:auto;outline:medium none">
                        <h2>{{ __('strings.exp_cham') }}</h2>
                    </div>
                </div>
            </div>

            <div class="MyCol2">
                <div class="paddingMy" style="clear:none">
                    <h3 class="h2">{{ __('strings.parts_position') }}</h3><span><i>{{ __('strings.exp_cham_date') }}</i></span>
                    <p> <br>
                        {{ __('strings.exp_cham_job') }}
                    </p>
                </div>
                <div class="hrContainer" style="margin-bottom:20px;">
                    <hr class="hrHomePage" style="width:100%">
                </div>
            </div>
        </div>
        
        <div class="workExpJobContainer">
            <div class="ProjectContentOuter">

                <div class="paddingMy" style="clear:none">
                    <div style="cursor:auto;outline:medium none">
                        <h2>{{ Request::getHost() }}</h2>
                        <p class="para">({{ __('strings.exp_this_site') }})</p>
                    </div>

                </div>


            </div>

            <div class="MyCol2">
                <div class="paddingMy" style="clear:none">
                    <h3 class="h2">{{ __('strings.exp_freelance') }}</h3><span><i>{{ __('strings.exp_freelance_date') }}</i></span>
                    <p> <br>
                        {{ __('strings.exp_freelance_job') }}
                    </p>
                </div>
                <div class="hrContainer" style="margin-bottom:20px;">
                    <hr class="hrHomePage" style="width:100%">
                </div>
            </div>
        </div>

    </div>
    <!-- конец раздела опыта -->

    <!-- Начало раздела образования -->

    <section id="text-4" class="widget widget_text">

        <div class="widget-wrap">

            <div class="textwidget">

                <div id="resources">

                    <div class="experienceWrap">
                        <h1 class="introBlockHeading" style="padding-left:0;text-align:left">{{ __('strings.exp_education') }}</h1>
                        <div class="hrContainer" style="margin-bottom:20px;"></div>
                        <div class="left">

                            <h3>
                                {{ __('strings.exp_education_degr') }}
                            </h3>
                            <p>
                                {{ __('strings.exp_education_date') }}
                            </p>
                        </div>

                    </div>
                </div>
            </div>
        </div>
</div>
</section>
<!-- Конец раздела образования -->
@stop