
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

