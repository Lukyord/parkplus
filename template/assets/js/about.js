// ABOUT HERO GRADIENT HEIGHT
jQuery(function ($) {
    if ($(".about-hero-description").length) {
        function getGradientHeight() {
            const aboutHeroDescription = $(".about-hero-description");
            const gradient = $(".about-hero-description .gradient");
            const blueBg = $(".about-hero-description .blue-bg");
            const aboutHeroText = $(".about-hero .hero-text .description");
            const effect = $(".about-hero-description .effect");
            let gradientHeight = 0;
            let effectHeightOffset = 0;

            if ($(window).width() > 991) {
                gradientHeight =
                    aboutHeroDescription.height() - blueBg.height();
            } else {
                effectHeightOffset = effect.height() / 3;
                gradientHeight =
                    aboutHeroText.height() / 2 +
                    Math.min(calcVw(25.641025641), calcRem(6.25));

                aboutHeroDescription.css(
                    "--effect-height",
                    effectHeightOffset + "px"
                );
                console.log("mobile", gradientHeight);
                console.log("mobile", effectHeightOffset);
            }

            gradient.css("--gradient-height", gradientHeight + "px");
        }

        getGradientHeight();

        onWindowResize(getGradientHeight);
    }
});
