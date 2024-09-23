jQuery(function ($) {
    // $("html, body").addClass("no-scroll");
    // lenis.stop();
    if ($(".scroll-section").length) {
        const panels = $(".scroll-section");
        let currentSectionIndex = 0;
        let touchStartY = 0;
        let touchEndY = 0;
        const swipeThreshold = 50;

        panels.each(function (index) {
            ScrollTrigger.create({
                trigger: $(this),
                start: "top top",
                end: "bottom bottom",
                pin: true,
                pinSpacing: false,
                id: index,
            });
        });

        function scrollToSection(index) {
            if (index == 0) {
                gsap.to(window, {
                    duration: 1,
                    scrollTo: {
                        y: 0,
                        autoKill: false,
                    },
                    ease: "power2.out",
                });
            }

            if (index >= 0 && index < panels.length) {
                gsap.to(window, {
                    duration: 1,
                    scrollTo: {
                        y: panels.eq(index).offset().top,
                        autoKill: false,
                    },
                    onComplete: () => {
                        currentSectionIndex = index;
                    },
                });
            }
        }

        $(window).on("wheel", function (event) {
            const delta = Math.sign(event.originalEvent.deltaY);

            if (delta === 0) return;

            if (delta > 0) {
                scrollToSection(currentSectionIndex + 1);
            } else if (delta < 0) {
                scrollToSection(currentSectionIndex - 1);
            }
        });

        $(window).on("touchstart", function (event) {
            touchStartY = event.originalEvent.touches[0].clientY;
        });

        $(window).on("touchmove", function (event) {
            touchEndY = event.originalEvent.touches[0].clientY;
        });

        $(window).on("touchend", function () {
            let swipeDistance = touchEndY - touchStartY;

            if (Math.abs(swipeDistance) > swipeThreshold) {
                if (swipeDistance < 0) {
                    scrollToSection(currentSectionIndex + 1);
                } else if (swipeDistance > 0) {
                    scrollToSection(currentSectionIndex - 1);
                }
            }
        });
    }
});
