<div class="layout">
    <h2 class="introBlockHeading">Мои работы</h2>
    <div class="projectRow">

        <div class="portfolio-grid">
            @foreach ($projects as $project)
                <section class="portfolio-block">
                    <div class="portfolio-image-block">
                        <a class="portfolio-image-block__link" href="{{ $project["link"] }}">
                            <img src="{{ $project["img"] }}" alt="{{ $project["title"] }}"
                                class="projectImage"
                                style="left:0;position: relative;top: 0;" />
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
                                    href="{{ $project["link"] }}">Подробнее</a>
                            </div>
                        </div>
                    </div>
                </section>
            @endforeach
        </div>

    <div class="buttonBlock">
        <div>
            <div style="text-align:center">
                <a href="/projects" class="buttonBlockElement">Больше проектов</a>
            </div>
        </div>
    </div>
</div>
