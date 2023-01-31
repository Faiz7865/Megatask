
$('.owl-carousel').owlCarousel({
  loop:false,
  autoplay:true,
  margin:24,
  items:3,
  stagePadding:20,
  navText:["<div class='nav-btn prev-slide'><i class='uil uil-angle-left'></i></div>","<div class='nav-btn next-slide'><i class='uil uil-angle-right'></i></div>"],
  responsiveClass:true,
  responsive:{
      0:{
          items:1,
          margin:10,
          nav:true
      },
      480:{
          items:1,
          margin:10,
          nav:true
      },
      567:{
          items:2,
          margin:10,
          nav:true
      },
      768:{
          items:2,
          nav:true
      },
      1000:{
          items:2,
          nav:true,
      },
      1440:{
          items:3,
          nav:true,
      }
  }
})


// active class

let switchNavMenuItem = (menuItems) => {

    var current = location.pathname

    $.each(menuItems, (index, item) => {

        $(item).removeClass('active')

        if ((current.includes($(item).attr('href')) && $(item).attr('href') !== "/") || ($(item).attr('href') === "/" && current === "/")){
            $(item).addClass('active')
        }
    })
}

$(document).ready(() => {   
    switchNavMenuItem($('.navbar-nav li a, .navbar-nav li link'))
})