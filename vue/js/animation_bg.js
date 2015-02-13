(function(){
var menu_nav = document.querySelector('.menu-nav');

var p1 = 0, p2 = 300, p3= 0;


setInterval(function(){
  menu_nav.style.backgroundPosition = p1 + "px 0%," + p1 +  "px 125%, 50% 100%, 85% 10%, " + p2 + "px 50% ";
  if(p1 > 1700){
    p1 = 0;
    p3= 600;
  }
  if(p2 > 2000){
    p2 = -300;
  }
  if(p3 > 1700){
    p3 = 0;
  }

  p1 +=0.7;
  p2 += 10;
  p3 += 1;
},50);
})();
