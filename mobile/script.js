$(function(){

$('#humberger').click(function(){
  $('.menu').fadeIn();
  $('.header-left').hide();
});

$('.hoge').click(function(){
  $(this).addClass('add');
  $('.pick').addClass('remove');
  $('.rank-items').show();
  $('.pick-items').hide();
});

$('.pick').click(function(){
  $('.rank-items').hide();
  $('.pick-items').show();
  $(this).removeClass('remove');
  $('.hoge').removeClass('add');
});

$('#unko').click(function(){
  $('.menu').hide();
  $('.header-left').show();
})

$('header-right').click(function(){
  $('container').hide();
  $('.search').show();
})

$('.page').click(function(){
  $('html,body').scrollTop(0);
})
});
