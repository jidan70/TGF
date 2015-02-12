(function(){
var menu_nav = document.querySelector('.menu-nav');

var position_left = 0;


setInterval(function(){
  menu_nav.style.backgroundPosition = position_left + "px 100%";
  if(position_left > 1000){
    position_left = 0;
  }

  position_left += 1;
},100);
})();
