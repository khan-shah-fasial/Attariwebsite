$(".video_testiminials").owlCarousel({
    loop: true,
    margin: 10,
    dots: true,
    navText: [
        '<i class="fa fa-chevron-left"></i>',
        '<i class="fa fa-chevron-right"></i>',
    ],
    responsive: {
        0: {
            items: 1.1,
        },
        768: {
            items: 2,
        },
        960: {
            items: 3,
        },
        1200: {
            items: 3,
        },
    },
});

$(".blog_video_testiminials").owlCarousel({
    loop: true,
    margin: 10,
    dots: true,
    navText: [
        '<i class="fa fa-chevron-left"></i>',
        '<i class="fa fa-chevron-right"></i>',
    ],
    responsive: {
        0: {
            items: 1.1,
        },
        768: {
            items: 2,
        },
        960: {
            items: 2,
        },
        1200: {
            items: 2,
        },
    },
});

$(".projects-covered").owlCarousel({
    loop: true,
    margin: 10,
    autoplay: true,
    autoplayTimeout: 2000,
    nav: true,
    navText: [
        '<i class="fa fa-caret-left"></i>',
        '<i class="fa fa-caret-right"></i>',
    ],
    responsive: {
        0: {
            items: 1.1,
        },
        768: {
            items: 2.1,
        },
        960: {
            items: 3,
        },
        1200: {
            items: 3,
        },
    },
});

$(".professional_students").owlCarousel({
    loop: true,
    margin: 10,
    autoplay: true,
    autoplayTimeout: 2000,
    nav: true,
    navText: [
        '<i class="fa fa-caret-left"></i>',
        '<i class="fa fa-caret-right"></i>',
    ],
    responsive: {
        0: {
            items: 1.1,
        },
        768: {
            items: 2,
        },
        960: {
            items: 2,
        },
        1200: {
            items: 2,
        },
    },
});

$(".other_courses_slider").owlCarousel({
    loop: true,
    margin: 20,
    autoplayTimeout: 2000,
    nav: false,
    navText: [
        '<i class="fa fa-caret-left"></i>',
        '<i class="fa fa-caret-right"></i>',
    ],
    responsive: {
        0: {
            items: 1.1,
        },
        768: {
            items: 4,
        },
        960: {
            items: 4,
        },
        1200: {
            items: 4,
        },
    },
});

$(".trending_course").owlCarousel({
    loop: true,
    margin: 20,
    autoplayTimeout: 2000,
    nav: false,
    navText: [
        '<i class="fa fa-caret-left"></i>',
        '<i class="fa fa-caret-right"></i>',
    ],
    responsive: {
        0: {
            items: 1.1,
        },
        768: {
            items: 5,
        },
        960: {
            items: 5,
        },
        1200: {
            items: 5,
        },
    },
});

$(document).ready(function () {
    var owl = $(".owl-carousel");
    owl.owlCarousel({
        margin: 10,
        nav: true,
        loop: true,
        responsive: {
            0: {
                items: 1.1,
            },
            600: {
                items: 2,
            },
            1000: {
                items: 2,
            },
        },
    });
    $(".owl-prev").html('<i class="fa fa-chevron-left"></i>');
    $(".owl-next").html('<i class="fa fa-chevron-right"></i>');
});

$(document).ready(function () {
    $('[data-fancybox="gallery"]').fancybox();
});

$(document).ready(function () {
    if ($("#counter").length > 0) {
        var a = 0;

        $(window).scroll(function () {
            var oTop = $("#counter").offset().top - window.innerHeight;
            if (a === 0 && $(window).scrollTop() > oTop) {
                $(".counter-value").each(function () {
                    var $this = $(this),
                        countTo = $this.attr("data-count");
                    $({
                        countNum: $this.text(),
                    }).animate(
                        {
                            countNum: countTo,
                        },
                        {
                            duration: 2000,
                            easing: "swing",
                            step: function () {
                                $this.text(Math.floor(this.countNum));
                            },
                            complete: function () {
                                $this.text(this.countNum);
                            },
                        }
                    );
                });
                a = 1;
            }
        });
    }
});

$(document).ready(function () {
    $(".content_one").slice(0, 8).show();
    $("#loadMore_one").on("click", function (e) {
        e.preventDefault();
        $(".content_one:hidden").slice(0, 8).slideDown();
        if ($(".content_one:hidden").length == 0) {
            $("#loadMore_one").text("").addClass("noContent");
        }
    });
});

$(document).ready(function () {
    $(".content_two").slice(0, 8).show();
    $("#loadMore_two").on("click", function (e) {
        e.preventDefault();
        $(".content_two:hidden").slice(0, 8).slideDown();
        if ($(".content_two:hidden").length == 0) {
            $("#loadMore_two").text("").addClass("noContent");
        }
    });
});

// tab functionality start
class TabSlider {
    constructor(
        containerSelector,
        sectionSelector,
        navSelector,
        menuSelector,
        activeLineSelector
    ) {
        this.sectionsContainer = document.querySelector(containerSelector);
        this.sections = document.querySelectorAll(sectionSelector);
        this.nav = document.querySelector(navSelector);
        this.menu = this.nav.querySelector(menuSelector);
        this.links = this.nav.querySelectorAll(".menu-item-link");
        this.activeLine = this.nav.querySelector(activeLineSelector);
        this.activeClass = "active";
        this.activeIndex = 0;
        this.sectionOffset = this.nav.offsetHeight + 24;
        this.isScrolling = true;
        this.userScroll = true;

        this.init();
    }

    setActiveClass() {
        this.links[this.activeIndex].classList.add(this.activeClass);
    }

    removeActiveClass() {
        this.links[this.activeIndex].classList.remove(this.activeClass);
    }

    moveActiveLine() {
        const link = this.links[this.activeIndex];
        const linkX = link.getBoundingClientRect().x;
        const menuX = this.menu.getBoundingClientRect().x;

        this.activeLine.style.transform = `translateX(${
            this.menu.scrollLeft - menuX + linkX
        }px)`;
        this.activeLine.style.width = `${link.offsetWidth}px`;
    }

    setMenuLeftPosition(position) {
        this.menu.scrollTo({
            left: position,
            behavior: "smooth",
        });
    }

    checkMenuOverflow() {
        const activeLink = this.links[this.activeIndex].getBoundingClientRect();
        const offset = 30;

        if (Math.floor(activeLink.right) > window.innerWidth) {
            this.setMenuLeftPosition(
                this.menu.scrollLeft +
                    activeLink.right -
                    window.innerWidth +
                    offset
            );
        } else if (activeLink.left < 0) {
            this.setMenuLeftPosition(
                this.menu.scrollLeft + activeLink.left - offset
            );
        }
    }

    handleActiveLinkUpdate(current) {
        this.removeActiveClass();
        this.activeIndex = current;
        this.checkMenuOverflow();
        this.setActiveClass();
        this.moveActiveLine();
    }

    init() {
        this.moveActiveLine();
        document.documentElement.style.setProperty(
            "--section-offset",
            this.sectionOffset
        );

        this.links.forEach((link, index) =>
            link.addEventListener("click", () => {
                this.userScroll = false;
                this.handleActiveLinkUpdate(index);
            })
        );

        window.addEventListener("scroll", () => {
            const currentIndex =
                this.sectionsContainer.getBoundingClientRect().top < 0
                    ? this.sections.length -
                      1 -
                      [...this.sections]
                          .reverse()
                          .findIndex(
                              (section) =>
                                  window.scrollY >=
                                  section.offsetTop - this.sectionOffset * 2
                          )
                    : 0;

            if (this.userScroll && this.activeIndex !== currentIndex) {
                this.handleActiveLinkUpdate(currentIndex);
            } else {
                window.clearTimeout(this.isScrolling);
                this.isScrolling = setTimeout(
                    () => (this.userScroll = true),
                    100
                );
            }
        });
    }
}

// Initialize the first tab slider
const tabSlider1 = new TabSlider(
    ".page-sections",
    ".page-section",
    ".nav-sections",
    ".menu34",
    ".active-line"
);

// Initialize the second tab slider
const tabSlider2 = new TabSlider(
    ".batch_main_section",
    ".page-section1",
    ".nav-sections",
    ".menu34",
    ".active-line"
);
// tab functionality end
