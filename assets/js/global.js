
// $(document).ready(function () {
//     $('.theme-banner').slick({
//         dots: false,
//         arrows: false,
//         infinite: true,
//         autoplay: true,
//         autoplaySpeed: 2500,
//         speed: 1000,
//         cssEase: 'cubic-bezier(0.7, 0, 0.3, 1)',
//         fade: true,
//         touchThreshold: 100
//     });

//     $('.theme-testi').slick({
//         slidesToShow: 1,
//         slidesToScroll: 1,
//         arrows: false,
//         dots: true,
//         autoplay: true,
//         autoplaySpeed: 2000,
//     });

// });
//**  venobox- image pop  **//
$(document).ready(function(){
    $('.venobox').venobox({
        titleattr: 'data-title',    // default: 'title'
        numeratio: false,            // default: false
        infinigall: true,    // default: false
        spinner: 'wandering-cubes',
        spinColor: '#f28d20',
        titleBackground: '#f28d20',
        closeBackground: '#f28d20',
        closeColor: '#fff',
        titleColor: '#fff',
        arrowsColor: 'rgba(182, 182, 182, 0)',
    });
});

/* auto-open #firstlink on page load */
$("#firstlink").venobox().trigger('click');


//** aboutpage count no. up **//

$(window).scroll(startCounter);
function startCounter() {
    if ($(window).scrollTop() > 200) {
        $(window).off("scroll", startCounter);
        $('.count').each(function () {
            var $this = $(this);
            jQuery({ Counter: 0 }).animate({ Counter: $this.text() }, {
                duration: 3000,
                easing: 'swing',
                step: function () {
                    $this.text(Math.ceil(this.Counter));
                }
            });
        });
    }
}

//*** sticky header  ***//
window.onscroll = function() {myFunction()};

var header = document.getElementById("myHeader");
var sticky = header.offsetTop;

function myFunction() {
  if (window.pageYOffset > sticky) {
    header.classList.add("sticky");
  } else {
    header.classList.remove("sticky");
  }
}



// Add slideDown animation to Bootstrap dropdown when expanding.
  $('.dropdown').on('show.bs.dropdown', function() {
    $(this).find('.dropdown-menu').first().stop(true, true).slideDown();
  });

  // Add slideUp animation to Bootstrap dropdown when collapsing.
  $('.dropdown').on('hide.bs.dropdown', function() {
    $(this).find('.dropdown-menu').first().stop(true, true).slideUp();
  });