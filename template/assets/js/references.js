jQuery(function ($) {
    if ($(".references-dropdown").length) {
        $(".references-dropdown").each(function () {
            const dropdown = $(this).find(".dropdown");
            const dropdownTrigger = $(this).find(".dropdown-trigger");
            const tabs = $(this).find(".tabs-container .tab-link");

            // Toggle dropdown on trigger click
            dropdownTrigger.on("click", function (e) {
                e.stopPropagation(); // Prevents the event from bubbling to the document
                dropdown.toggleClass("open");
            });

            // Close dropdown when clicking outside
            $(document).on("click", function (e) {
                if (
                    !dropdownTrigger.is(e.target) &&
                    !dropdown.is(e.target) &&
                    dropdown.has(e.target).length === 0
                ) {
                    dropdown.removeClass("open");
                }
            });

            // Close dropdown when a tab is clicked
            tabs.on("click", function () {
                dropdown.removeClass("open");
            });

            // Prevent dropdown content clicks from triggering the document click handler
            dropdown.on("click", function (e) {
                e.stopPropagation();
            });
        });
    }
});
