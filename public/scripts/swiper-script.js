const swiper = new Swiper('.swiper', {
    direction: 'horizontal',
    slidesPerView: 2,
    spaceBetween: 30,
    slidesPerGroup: 2,
    loopFillGroupWithBlank: true,
    loop: true,
    navigation: {
        nextEl: '.swiper-button-next',
        prevEl: '.swiper-button-prev',
    },
});