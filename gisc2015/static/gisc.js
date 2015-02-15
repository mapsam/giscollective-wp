jQuery(document).ready(function($){
  /////////////////////////////////////
  // MAIN NAV
  /////////////////////////////////////
  var nav = $('#nav');
  var menu = $('#nav .menu');
  var navButton = $('.nav-expand');
  // mobile button dropdown
  $('button.nav-expand').on('click', function(){
    menu.slideToggle(200);
    navButton.toggleClass('open');
  });
});