$('.btnShowMenu').click(function(){
  'use strict';
  $('.btnShowMenu').toggleClass('selected');
  $('body > header nav').slideToggle();
});
