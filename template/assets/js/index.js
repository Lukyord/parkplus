// INDEX FEATURED PRODUCTS THUMBS SWIPER
jQuery(function ($) {
    if ($("#index-featured-products").length) {
        const thumbs = $(this).find(".swiper.swiper-thumbs-index");
        const slides = $(this).find(".swiper.swiper-slides-index");

        //THUMBS
        var swiperThumbs = new Swiper(thumbs[0], {
            allowTouchMove: false,
            slidesPerView: "auto",
            centeredSlides: true,
            watchSlidesVisibility: true,
            watchSlidesProgress: true,
            slideToClickedSlide: true,
            initialSlide: 2,
        });

        //MAIN SLIDES
        const swiperSlides = new Swiper(slides[0], {
            effect: "fade",
            slidesPerView: 1,
            speed: 1400,
            watchSlidesProgress: true,
            watchSlidesVisibility: true,
            slideToClickedSlide: false,
            allowTouchMove: false,
            simulateTouch: false,
            thumbs: {
                swiper: swiperThumbs,
            },
            initialSlide: 2,
        });

        swiperSlides.on("slideChangeTransitionStart", () => {
            const currentSlide = $(
                swiperSlides.slides[swiperSlides.previousIndex]
            );
            const featuredText = currentSlide.find(".featured-text");
            featuredText.addClass("fade-out");

            setTimeout(() => {
                featuredText.removeClass("fade-out");
            }, 1400);
        });

        swiperSlides.on("slideChange", () => {
            const activeIndex = swiperSlides.activeIndex;
            swiperThumbs.slideTo(activeIndex, 400, false);
        });
    }
});

// INDEX FEATURED PRODUCTS TOGGLE GIF SIZE
jQuery(function ($) {
    if ($("#index-featured-products").length) {
        const gifImage = $(this).find(".gif-image");
        const gif = $(this).find(".gif-image-wrapper > img");
        const gifImageButton = $(this).find(".gif-image-button");
        let gifEnlarged = false;

        gif.on("click", function () {
            if (gifEnlarged) {
                gifImage.removeClass("gif-image--large");
            }
        });

        gifImageButton.on("click", function () {
            gifImage.toggleClass("gif-image--large");
            gifEnlarged = true;
        });
    }
});
