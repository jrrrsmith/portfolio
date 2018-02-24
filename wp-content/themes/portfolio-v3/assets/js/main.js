$('.menu-button').on('click', function(event) {
  event.preventDefault();
  $(this).toggleClass('menu-open');
  $('#page').toggleClass('menu-open');
  $('body').toggleClass('menu-open');
});

// $('#menu-item-46 a').addClass('current');
// $('#menu-item-29 a').addClass('current');

$(document).ready(function(){

  setTimeout(function(){
    $('.initial-load').addClass('hide');
    $('#page').removeClass('fixed');
  }, 2000);

  $.ajaxSetup({cache:false});

  $(".menu-item a").click(function(event){

    event.preventDefault();
    // $('.menu-item a').removeClass('current');
    // $(this).addClass('current');

    var page_link = $(this).attr("href");

    // $("#page").html("<div class='page-loader'><div class='page-loader__inner'><h1 class='page-loader__top'>internet</h1><h1 class='page-loader__bottom'>smith</h1></div></div><div class='page-loader--white'></div>");
    // setTimeout(function(){
    //   $(".page-loader__top, .page-loader__bottom").addClass("in");
    // }, 200);

    setTimeout(function(){
      $('.menu-button').toggleClass('menu-open');
      $('#page').toggleClass('menu-open');
    }, 1000);

    setTimeout(function(){
      $('body').toggleClass('menu-open');
      //$("#page").load(page_link);
    }, 3000);

    setTimeout(function() {window.location = page_link}, 1500);

    // setTimeout(function(){
    //   $("#page").load(page_link);
    // }, 3000);
    

  return false;
  });

  $(".menu-item-28 a").click(function(event){
    event.preventDefault();

    $("#page").html("<div class='page-loader'><div class='page-loader__inner'><h1 class='page-loader__top'>selected</h1><h1 class='page-loader__bottom'>works</h1></div></div><div class='page-loader--white'></div>");
    setTimeout(function(){
      $(".page-loader__top, .page-loader__bottom").addClass("in");
    }, 200);

  });

  $(".menu-item-45 a").click(function(event){
    event.preventDefault();

    $("#page").html("<div class='page-loader'><div class='page-loader__inner'><h1 class='page-loader__top'>internet</h1><h1 class='page-loader__bottom'>who??</h1></div></div><div class='page-loader--white'></div>");
    setTimeout(function(){
      $(".page-loader__top, .page-loader__bottom").addClass("in");
    }, 200);

  });
});

$(window).scroll(function(){
    if ($(window).scrollTop() >= 95) {
      $('.logo-title').addClass('hide');
    }
    else {
      $('.logo-title').removeClass('hide');
    }
});