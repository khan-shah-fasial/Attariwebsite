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
    if ($(this).parent().hasClass("open")) {
        $("li.accordion").removeClass("open");
        $("li.accordion ul").slideUp();
    } else {
        $("li.accordion ul").slideUp();
        $(this).parent().children("ul").slideDown();
        $("li.accordion").removeClass("open");
        $(this).parent().addClass("open");
    }
});

$("li.accordion1 span").click(function () {
    if ($(this).parent().hasClass("open")) {
        $("li.accordion1").removeClass("open");
        $("li.accordion1 .contentsillabus_div").slideUp();
    } else {
        $("li.accordion1 .contentsillabus_div").slideUp();
        $(this).parent().children(".contentsillabus_div").slideDown();
        $("li.accordion1").removeClass("open");
        $(this).parent().addClass("open");
    }
});

window.onscroll = function () {
    myFunction();
};

// navbar sticky //

var navbar = document.getElementById("vm_nav");
var sticky = navbar.offsetTop;

function myFunction() {
    if (window.pageYOffset >= sticky) {
        navbar.classList.add("sticky");
    } else {
        navbar.classList.remove("sticky");
    }
}

/* success story page load more js open*/

$(document).ready(function () {
    // Check if the device width is less than or equal to 768 pixels (typical for mobile devices)
    if ($(window).width() <= 767) {
        // Hide all but the first three boxes
        $(".content_loadmore:gt(2)").hide();

        // Set up click event for the "Load More" button
        $("#loadMore").on("click", function (e) {
            e.preventDefault();
            // Show the next three hidden boxes
            $(".content_loadmore:hidden:lt(3)").slideDown();
            // If there are no more hidden boxes, hide the "Load More" button
            if ($(".content_loadmore:hidden").length === 0) {
                $("#loadMore").hide();
            }
        });
    }
});
/* success story page load more js close*/
