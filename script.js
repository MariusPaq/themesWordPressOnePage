jQuery(document).ready(function( $ ){

//buergerMenu
var iconeBurger = $('#iconebm');
var freins = $('#freinsbm');
var chiffres = $('#chiffresbm');
var accesbm = $('#accesbm');
var navCircle = $('.navCircle');
var logo =$('#logo');
var burgerMenu = $('.burgerMenu');
var header = $('.header');
var bmOpen = 0;

iconeBurger.click(function(){
  if (bmOpen == 0) {
    freins.css('display','block');
    chiffres.css('display','block');
    accesbm.css('display','block');
    navCircle.css('margin-top','-100px');
    logo.css('margin-top','45px');
    burgerMenu.css('margin-top','-10px');
    iconeBurger.css('margin-top','-5px');
    header.css('margin-bottom','-50px');
    bmOpen = 1;
  } else {
    freins.css('display','none');
    chiffres.css('display','none');
    accesbm.css('display','none');
    navCircle.css('margin-top','-150px');
    logo.css('margin-top','95px');
    iconeBurger.css('margin-top','-5px');
    header.css('margin-bottom','0px');
    bmOpen = 0;
  }


});
//buergerMenu

//btnUp
  var btnUp = $('#btn-Up');

  $(window).scroll(function() {
   if ($(window).scrollTop() > 300) {
     btnUp.addClass('show');
   } else {
     btnUp.removeClass('show');
   }
 });

 btnUp.on('click', function(e) {
   e.preventDefault();
   $('html, body').animate({scrollTop:0}, '300');
 });
//btnUp
});
