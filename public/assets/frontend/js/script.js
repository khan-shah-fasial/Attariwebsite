
const menu = document.querySelector(".menu");
const menuMain = document.querySelector(".manu_main");
const closeMenu = document.querySelector(".mobile_menu_close");
const goBack = menu.querySelector(".go_back");

const menuTrigger = document.querySelector(".mobile_menu_trigger");

menuMain.addEventListener("click", (e) => {
  if (!menu.classList.contains("active")) {
    return;
  }
  if (e.target.closest(".menu_item_has_children")) {
    const hasChildren = e.target.closest(".menu_item_has_children");
    showSubMenu(hasChildren);
  }
});

goBack.addEventListener("click", () => {
  hideSubMenu();
});
menuTrigger.addEventListener("click", () => {
  toggleMenu();
});
closeMenu.addEventListener("click", () => {
  toggleMenu();
});

document.querySelector(".menu_overlay").addEventListener("click", () => {
  toggleMenu();
});

function toggleMenu() {
  menu.classList.toggle("active");
  document.querySelector(".menu_overlay").classList.toggle("active");
}

function showSubMenu(hasChildren) {
  subMenu = hasChildren.querySelector(".sub_menu");
  subMenu.classList.add("active");
  subMenu.style.animation = "slideLeft 0.5s ease forwards";
  const menuTitle =
    hasChildren.querySelector("i").parentNode.childNodes[0].textContent;
  menu.querySelector(".current_menu_title").innerHTML = menuTitle;
  menu.querySelector(".mobile_menu_head").classList.add("active");
}

function hideSubMenu() {
  subMenu.style.animation = "slideRight 0.5s ease forwards";
  setTimeout(() => {
    subMenu.classList.remove("active");
  }, 300);
  menu.querySelector(".current_menu_title").innerHTML = "";
  menu.querySelector(".mobile_menu_head").classList.remove("active");
}

window.onresize = function () {
  if (this.innerWidth > 991) {
    if (menu.classList.contains("active")) {
      toggleMenu();
    }
  }
};

// ------------------ faq -----------------------

const faqs = document.querySelectorAll(".faq_box");

faqs.forEach((faq) => {
  faq.addEventListener("click", () => {
    faq.classList.toggle("active");
  });
});

// ---------------- query form -----------
const query = document.querySelector(".query_heading");
const box = document.querySelector(".query_form");

query.addEventListener("click", () => {
  box.classList.toggle("active");
});

// -----------------------navbar sticky vmware -------------------------------
 




    // Accordion 
    $("li.accordion span").click(function () {
        if ($(this).parent().hasClass('open')) {
            $("li.accordion").removeClass('open');
            $("li.accordion ul").slideUp();
        } else {
            $("li.accordion ul").slideUp();
            $(this).parent().children('ul').slideDown();
            $("li.accordion").removeClass('open');
            $(this).parent().addClass('open');
        }
    })













// --------========================== old website script ===================---------------------
/*

//AOS.init();
AOS.init({
    duration: 1200,
});

$(document).ready(function () {
    var owl = $("#banner_slider_carousel");
    owl.owlCarousel({
        margin: 0,
        nav: true,
        loop: true,
        autoplay: true,
        autoplayTimeout: 5000,
        responsive: {
            0: {
                items: 2,
            },
            600: {
                items: 3,
            },
            1000: {
                items: 4,
            },
        },
    });
});

$(document).ready(function () {
    var owl = $("#media_slider_carousel");
    owl.owlCarousel({
        margin: 20,
        nav: true,
        loop: true,
        autoplay: true,
        autoplayTimeout: 5000,
        responsive: {
            0: {
                items: 1.2,
            },
            600: {
                items: 3.5,
            },
            1100: {
                items: 4.5,
            },
        },
    });
});

// Slider | Testimonial
$(document).ready(function () {
    var owl = $("#awards_slider");
    owl.owlCarousel({
        margin: 15,
        nav: true,
        loop: true,
        autoplay: true,
        autoplayTimeout: 5000,
        responsive: {
            0: {
                items: 1.2,
            },
            600: {
                items: 2,
            },
            1000: {
                items: 4,
            },
        },
        navText: [
            '<i class="fa fa-angle-left"></i>',
            '<i class="fa fa-angle-right"></i>',
        ], // Add this line
    });
});

// Counter | About
var a = 0;
$(window).scroll(function () {
    if ($("#counter").length) {
        var oTop = $("#counter").offset().top - window.innerHeight;
        if (a == 0 && $(window).scrollTop() > oTop) {
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
    }
});

// Slider | Testimonial
$(document).ready(function () {
    var owl = $(".owl-carousel");
    owl.owlCarousel({
        margin: 15,
        nav: true,
        loop: true,
        autoplay: true,
        autoplayTimeout: 5000,
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
});

// popup

function toggle() {
    var blur = document.getElementById("blur");
    blur.classList.toggle("active");
    var popup = document.getElementById("popup");
    popup.classList.toggle("active");
}

function googleTranslateElementInit() {
    new google.translate.TranslateElement(
        { pageLanguage: "en" },
        "google_translate_element"
    );

    var $googleDiv = $("#google_translate_element .skiptranslate");
    var $googleDivChild = $("#google_translate_element .skiptranslate div");
    $googleDivChild.next().remove();

    $googleDiv
        .contents()
        .filter(function () {
            return this.nodeType === 3 && $.trim(this.nodeValue) !== "";
        })
        .remove();
}

jQuery(document).ready(function ($) {
    $("#example_1").whatsappChatSupport();
});

$(document).ready(function () {
    $(".search_icon").click(function () {
        $(".search-box").toggle();
        $(".search_bar_field input[type='text']").focus();
    });
});

*/

/*-- cookies code open--*/

// ---- ---- Const ---- ---- //
// const cookiesBox = document.querySelector(".cookies_section"),
//     buttons = document.querySelectorAll(".cookies_button");

// ---- ---- Show ---- ---- //
// const executeCodes = () => {
//     if (document.cookie.includes("Ahlawat")) return;
//     cookiesBox.classList.add("show");

//     // ---- ---- Button ---- ---- //
//     buttons.forEach((button) => {
//         button.addEventListener("click", () => {
//             cookiesBox.classList.remove("show");

//             // ---- ---- Time ---- ---- //
//             if (button.id == "cookieAccept") {
//                 document.cookie =
//                     "cookieBy= Ahlawat; max-age=" + 60 * 60 * 24 * 30;
//             }
//         });
//     });
// };

// window.addEventListener("load", executeCodes);

/*-- cookies code close--*/

// toggle sidebar dropdown menu

/*
$(document).ready(function () {
    //jquery for toggle sub menus
    $(".sub-btn").click(function () {
        $(this).next(".sub-menu").slideToggle();
        $(this).find(".dropdown").toggleClass("rotate");
    });

    //jquery for expand and collapse the sidebar
    $(".menu-btn").click(function () {
        $(".side-bar").addClass("active");
        $(".menu-btn").css("visibility", "hidden");
    });

    $(".close-btn").click(function () {
        $(".side-bar").removeClass("active");
        $(".menu-btn").css("visibility", "visible");
    });
});
*/

