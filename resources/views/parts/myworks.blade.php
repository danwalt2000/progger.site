<div class="layout">
    <h2 class="introBlockHeading">{{ __('strings.nav_my_works') }}</h2>
    <div class="projectRow">

        <div class="portfolio-grid">
            @foreach ($projects as $project)
                <section class="portfolio-block">
                    <div class="portfolio-image-block">
                        <a class="portfolio-image-block__link" href="/projects/{{ $project["link"] }}">
                            <img src="{{ $project["img"] }}" alt="{{ $project["title"] }}"
                                class="projectImage"
                                style="left:0;position: relative;top: 0;" loading="lazy" />
                        </a>
                    </div>
                    <div class="portfolio-content-block">
                        <div class="portfolio-content-block__holder">
                            <div class="portfolio-content-block__text">
                                <div class="portfolio-content-block__sub-title">
                                    {{ $project["title"] }}</div>
                                <div class="portfolio-content-block__title">
                                    {{ $project["second_title"] }}</div>
                                <a class="portfolio-content-block__link"
                                    title="{{ $project["title"] }}"
                                    href="/projects/{{ $project["link"] }}">{{ __('strings.dev_more') }}</a>
                            </div>
                        </div>
                    </div>
                </section>
            @endforeach
        </div>

    <div class="buttonBlock">
        <div>
            <div style="text-align:center">
                <a href="/projects" class="buttonBlockElement">{{ __('strings.projects_more') }}</a>
            </div>
        </div>
    </div>
</div>
