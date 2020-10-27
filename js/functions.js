$(document).ready(function() {

  // mobile burger
  
  $('.header-btn').click(function(){
    $(this).toggleClass("is-active");
    $(".menu-wrapper").animate({width:'toggle'}, 600).toggleClass("active");
    //$(".menu-wrapper").toggleClass("active");
    $('body').toggleClass('menu-open');
  });


  // confect menu
  
  $('.btn-confect').click(function(){
    $(this).toggleClass("is-active");
    $(".menu-confect").animate({width:'toggle'}, 600);
    $('.box-menu').toggleClass("active");
  });


  // slider

  $('.hero-slider').slick();

  $('.product-slider').slick({
    dots: true,
    customPaging : function(slider, i) { 
      return '<a><img src="'+$(slider.$slides[i]).find('img').attr('src')+'"></a>'; 
    }
  });

  $('.newbrand-slider').slick({
    dots: false,
    arrows: false,
    infinite: true,
    slidesToShow: 4,
    responsive: [
      {
        breakpoint: 1025,
        settings: {
          slidesToShow: 3,
        }
      },
      {
          breakpoint: 769,
          settings: {
            slidesToShow: 2,
              autoplay: true
          }
      }
    ]
  });

  $('.news-slider').slick({
    dots: false,
    arrows: false,
    infinite: true,
    slidesToShow: 4,
    responsive: [
      {
        breakpoint: 1025,
        settings: {
          slidesToShow: 3,
        }
      },
      {
          breakpoint: 769,
          settings: {
            slidesToShow: 1,
            variableWidth: true
          }
      }
    ]
  });


  // tabs

  $('.tabs__caption').on('click', 'li:not(.active)', function() {
    $(this)
        .addClass('active')
        .siblings()
        .removeClass('active')
        .closest('.tabs')
        .find('.tabs__content')
        .removeClass('active')
        .eq($(this).index())
        .addClass('active');
  });


  // read more

  var moretext = "Больше";
  var lesstext = "Свернуть";
  $('.more-link').on('click', function(){
    if ($(this).hasClass("less")) {
      $(this).removeClass("less");
      $(this).html(moretext);
    } else {
        $(this).addClass("less");
        $(this).html(lesstext);
    }
    $('.more-text').toggleClass('active');
    $('.block-text').toggleClass('active');
  })


  // accordion

  $(function() {
    var items = $(".accordion__caption");
  
    items.on("click",function(){
      if($(this).hasClass("active")) {
        $(this).removeClass("active");
        $(this).next().removeClass("open");
      } else {
        $(this).siblings().removeClass("active");
        $(this).next().siblings().removeClass("open");
        $(this).toggleClass("active");
        $(this).next().toggleClass("open");
      }
    });
  });


  // final countdown

  $('#clock').countdown('2020/03/01', function(event) {
    var $this = $(this).html(event.strftime(''
      + '<div><strong>%d:</strong> <span>дней</span></div> '
      + '<div><strong>%H:</strong> <span>часов</span></div>  '
      + '<div><strong>%M:</strong> <span>минут</span></div>  '
      + '<div><strong>%S</strong> <span>секунд</span></div> '));
  });


  // select

  $('.time').select2({
    dropdownParent: $('.reserve'),
    placeholder: "Время*",
    minimumResultsForSearch: Infinity
  });


  // datepicker

  $('[data-toggle="datepicker"]').datepicker({
    language: 'ru-RU'
  });


  // checkbox

  $('input[type="checkbox"]').on('change', function() {
    $('input[type="checkbox"]').not(this).prop('checked', false);
  });

  // search 
  $('.btn-search').click(function(e) {
    e.preventDefault();
    $('#searchform').addClass('active');
    if ((screen.width < 769)) {
      $('.header').css('padding-bottom', '80px'); 
    }
  });

  $('.search-form__label').click(function() {
    $('#searchform').removeClass('active');
    if ((screen.width < 769)) {
      $('.header').css('padding-bottom', '0'); 
    }
  })

  // enter numbers only
  jQuery('input#phone').bind("change keyup input click", function() {
    if (this.value.match(/[^0-9]/g)) {
        this.value = this.value.replace(/[^0-9]/g, '');
    }
  });

});


// modal on product page

  //   document.addEventListener('DOMContentLoaded', function(){
  //  var modal = document.getElementById("order");
  //  var orderBtn = document.getElementById("order-btn");
  //  var spanClose = document.getElementsByClassName("close")[0];

  //  function showModal() {
  //   modal.classList.toggle("show");
  // }

  // function windowOnClick(event) {
  //     if (event.target == modal) {
  //       showModal();
  //     }
  // }

  // orderBtn ? orderBtn.addEventListener("click", showModal) : null;
  // spanClose ? spanClose.addEventListener("click", showModal) : null;
  // window.addEventListener("click", windowOnClick);

  var modalBtns = document.querySelectorAll(".btn");
  modalBtns.forEach(function(btn){
    btn.onclick = function() {
      var modal = btn.getAttribute('data-modal');
      document.getElementById(modal).style.display = "block";
    }
  });

  var closeBtns = document.querySelectorAll(".close");
  closeBtns.forEach(function(btn){
    btn.onclick = function() {
      var modal = btn.closest('.modal');
      modal.style.display = "none";
    }
  });

  window.onclick = function(event) {
    if (event.target.className === "modal") {
      event.target.style.display = "none";
    }
  }


    // reserve

    var reserve = document.querySelector(".reserve");
    //var reserveBtn = document.querySelector(".reserve-btn");
    var reserveBtn = document.getElementById("reserve-btn");
    var closeButton = document.querySelector(".close");
  
    function toggleReserve(event) {
      reserve.classList.toggle("show");
    }
  
    reserveBtn ? reserveBtn.addEventListener("click", toggleReserve) : null;
    closeButton ? closeButton.addEventListener("click", toggleReserve) : null;
