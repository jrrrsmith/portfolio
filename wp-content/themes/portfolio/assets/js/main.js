$('.menu-button').on('click', function(event) {
  event.preventDefault();
  $(this).toggleClass('menu-open');
  $('#page').toggleClass('menu-open');
});

$(document).ready(function(){

  $.ajaxSetup({cache:false});

  $(".menu-item a").click(function(event){

    event.preventDefault();
    $('.menu-item a').removeClass('current');
    $(this).addClass('current');

    var page_link = $(this).attr("href");

    $("#page").load(page_link);

    setTimeout(function(){
      $('.menu-button').toggleClass('menu-open');
      $('#page').toggleClass('menu-open');
    }, 1000);
    

  return false;
  });

});