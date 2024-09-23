jQuery(function ($) {
    if ($(".services-accordion-section").length) {
        $(".services-accordion-section").each(function () {
            var accordionSide = $(this).find(".accordions-side");
            var title = $(this).find("h2.title");

            function updateAccordionPadding() {
                const titleHeight = title.outerHeight();
                accordionSide.css("--offset-top", titleHeight + "px");
            }

            updateAccordionPadding();

            onWindowResize(updateAccordionPadding);
        });
    }
});
