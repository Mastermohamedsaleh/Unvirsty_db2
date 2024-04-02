const sidebarToggle = document.querySelector("#sidebar-toggle")
sidebarToggle.addEventListener("click",function(){
    document.querySelector("#sidebar").classList.toggle("collapsed")
});


$(document).ready(function () {
    var owl = $('.owl-carousel');
    owl.owlCarousel({
      margin: 10,
      nav: true,
      loop: true,
      responsive: {
        0: {
          items: 1
        },
        600: {
          items: 2
        },
        1000: {
          items: 3
        }
      }
    })
  })
  
    // -----------counting js----------