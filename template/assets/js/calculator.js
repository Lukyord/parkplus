// GET TABLE COLUMN WIDTH
jQuery(window).on("load", function () {
    if ($(".compare-grid").length) {
        $(".compare-grid").each(function () {
            const tableCategoryColumn = $(this).find(".table-category");
            const tableInfoColumn = $(this).find(".table-info");
            const span2 = $(this).find(".td-span-2-m");
            const span4 = $(this).find(".td-span-4-m");

            let vwValue = (6.1538461538 * window.innerWidth) / 100;

            let root = getComputedStyle(document.documentElement);
            let var24px = parseFloat(root.getPropertyValue("--24px")) * 16;

            let tableCategoryColumnWidth = tableCategoryColumn.width();
            let tableInfoColumnWidth = tableInfoColumn.width();

            let span2Width = span2.width() + Math.min(vwValue, var24px);
            let span4Width = span4.width() + Math.min(vwValue, var24px);

            if (tableCategoryColumnWidth !== 0) {
                $(this).css(
                    "--header-category-width",
                    tableCategoryColumnWidth + "px"
                );
            }

            if (tableInfoColumnWidth !== 0) {
                $(this).css("--header-info-width", tableInfoColumnWidth + "px");
            }

            if (span2Width !== 0) {
                $(this).css("--header-category-width", span2Width + "px");
            }

            if (span4Width !== 0) {
                $(this).css("--header-info-width", span4Width + "px");
            }
        });
    }
});

// TABLE TO TAB
jQuery(function ($) {
    function showColumn(tabId) {
        $("table td").hide();
        $("table td:first-child").show();

        const targetColumn = $("td#" + tabId);
        const span4Column = $("td#" + tabId + ".td-span-4-m");
        const span2Column = $(".td-span-2-m");
        targetColumn.show();

        $("table td").removeAttr("colspan");

        if (span4Column.length) {
            span4Column.attr("colspan", 4);
        }
        if (span2Column.length) {
            span2Column.attr("colspan", 2);
        }
    }

    if ($(".compare-grid").length) {
        function changeTableToTab() {
            if ($(window).width() < 992) {
                $(".table-tab").on("click", function (e) {
                    e.preventDefault();

                    const targetId = $(this).attr("href").substring(1);

                    $(".table-tab").removeClass("active");
                    $(this).addClass("active");

                    showColumn(targetId);
                });

                const activeTabId = $(".table-tab.active")
                    .attr("href")
                    .substring(1);
                showColumn(activeTabId);
            } else {
                $("table td").show();
                $("table td").removeAttr("colspan");
            }
        }

        changeTableToTab();

        onWindowResize(changeTableToTab);
    }
});

// TABLE TABS SWIPER
jQuery(function ($) {
    if ($(".compare-grid .table-header").length) {
        $(".compare-grid .table-header .swiper").each(function () {
            const swiperSlides = new Swiper($(this)[0], {
                effect: "slide",
                slidesPerView: "auto",
                speed: 800,
                watchSlidesProgress: true,
                watchSlidesVisibility: true,
                grabCursor: true,
            });
        });
    }
});
