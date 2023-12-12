
	$('.video_testiminials').owlCarousel({
		loop: true,
		margin: 10,
		dots: true,
		navText: ['<i class="fa fa-chevron-left"></i>', '<i class="fa fa-chevron-right"></i>'],
		responsive: {
			0: {
				items: 1.1
			},
			768: {
				items: 2
			},
			960: {
				items: 3
			},
			1200: {
				items: 3
			}
		}
	});
	
	
	$('.blog_video_testiminials').owlCarousel({
		loop: true,
		margin: 10,
		dots: true,
		navText: ['<i class="fa fa-chevron-left"></i>', '<i class="fa fa-chevron-right"></i>'],
		responsive: {
			0: {
				items: 1.1
			},
			768: {
				items: 2
			},
			960: {
				items: 2
			},
			1200: {
				items: 2
			}
		}
	});
	
    $('.projects-covered').owlCarousel({
		loop: true,
        margin: 10,
        autoplay: true,
        autoplayTimeout: 2000,
        nav: true,
		navText: ['<i class="fa fa-caret-left"></i>', '<i class="fa fa-caret-right"></i>'],
		responsive: {
			0: {
				items: 1.1
			},
			768: {
				items: 3
			},
			960: {
				items: 3
			},
			1200: {
				items: 3
			}
		}

	});
	
	
    $('.professional_students').owlCarousel({
		loop: true,
        margin: 10,
        autoplay: true,
        autoplayTimeout: 2000,
        nav: true,
		navText: ['<i class="fa fa-caret-left"></i>', '<i class="fa fa-caret-right"></i>'],
		responsive: {
			0: {
				items: 1
			},
			768: {
				items: 2
			},
			960: {
				items: 2
			},
			1200: {
				items: 2
			}
		}

	});
	
	
    $('.other_courses_slider').owlCarousel({
		loop: true,
        margin: 20,
        autoplayTimeout: 2000,
        nav: false,
		navText: ['<i class="fa fa-caret-left"></i>', '<i class="fa fa-caret-right"></i>'],
		responsive: {
			0: {
				items: 1.1
			},
			768: {
				items: 4
			},
			960: {
				items: 4
			},
			1200: {
				items: 4
			}
		}

	});
	
	
    $('.trending_course').owlCarousel({
		loop: true,
        margin: 20,
        autoplayTimeout: 2000,
        nav: false,
		navText: ['<i class="fa fa-caret-left"></i>', '<i class="fa fa-caret-right"></i>'],
		responsive: {
			0: {
				items: 1
			},
			768: {
				items: 5
			},
			960: {
				items: 5
			},
			1200: {
				items: 5
			}
		}

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
    
      var a = 0;
      $(window).scroll(function () {
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
                  //alert('finished');
                },
              }
            );
          });
          a = 1;
        }
      });
    
$(document).ready(function(){
  $(".content_one").slice(0, 8).show();
  $("#loadMore_one").on("click", function(e){
    e.preventDefault();
    $(".content_one:hidden").slice(0, 8).slideDown();
    if($(".content_one:hidden").length == 0) {
      $("#loadMore_one").text("").addClass("noContent");
    }
  });
  
})


$(document).ready(function(){
  $(".content_two").slice(0, 8).show();
  $("#loadMore_two").on("click", function(e){
    e.preventDefault();
    $(".content_two:hidden").slice(0, 8).slideDown();
    if($(".content_two:hidden").length == 0) {
      $("#loadMore_two").text("").addClass("noContent");
    }
  });
  
})
// tab functionality start
const sectionsContainer = document.querySelector('.page-sections');
const sections = document.querySelectorAll('.page-section');
const nav = document.querySelector('.nav-sections');
const menu34 = nav.querySelector('.menu34');
const links = nav.querySelectorAll('.menu-item-link');
const activeLine = nav.querySelector('.active-line');
const sectionOffset = nav.offsetHeight + 24;
const activeClass = 'active';
let activeIndex = 0;
let isScrolling = true;
let userScroll = true;

const setActiveClass = () => {
  links[activeIndex].classList.add(activeClass);
};

const removeActiveClass = () => {
  links[activeIndex].classList.remove(activeClass);
};

const moveActiveLine = () => {
  const link = links[activeIndex];
  const linkX = link.getBoundingClientRect().x;
  const menuX = menu34.getBoundingClientRect().x;

  activeLine.style.transform = `translateX(${(menu34.scrollLeft - menuX) + linkX}px)`;
  activeLine.style.width = `${link.offsetWidth}px`;
}

const setMenuLeftPosition = position => {
  menu34.scrollTo({
    left: position,
    behavior: 'smooth',
  });
};

const checkMenuOverflow = () => {
  const activeLink = links[activeIndex].getBoundingClientRect();
  const offset = 30;
  
  if (Math.floor(activeLink.right) > window.innerWidth) {
    setMenuLeftPosition(menu34.scrollLeft + activeLink.right - window.innerWidth + offset);
  } else if (activeLink.left < 0) {
    setMenuLeftPosition(menu34.scrollLeft + activeLink.left - offset)
  }
}

const handleActiveLinkUpdate = current => {
  removeActiveClass();
  activeIndex = current;
  checkMenuOverflow();
  setActiveClass();
  moveActiveLine();
};

const init = () => {
  moveActiveLine(links[0]);
  document.documentElement.style.setProperty('--section-offset', sectionOffset);
}

links.forEach((link, index) => link.addEventListener('click', () => {
  userScroll = false;
  handleActiveLinkUpdate(index);
}))

window.addEventListener("scroll", () => {
  const currentIndex = sectionsContainer.getBoundingClientRect().top < 0
    ? (sections.length - 1) - [...sections].reverse().findIndex(section => window.scrollY >= section.offsetTop - sectionOffset * 2)
    : 0;
  
  if (userScroll && activeIndex !== currentIndex) {
    handleActiveLinkUpdate(currentIndex);
  } else {
   	window.clearTimeout(isScrolling);
	  isScrolling = setTimeout(() => userScroll = true, 100); 
  }
});

init();
// tab functionality end
