(function(){
var menu_nav = document.querySelector('.menu-nav');

var p1 = 0, p2 = 300, p3= 0;


setInterval(function(){
  menu_nav.style.backgroundPosition = p1 + "px 0%," + p2 + "px  100%," + p3 + "px 10%, 85% 10%";
  if(p1 > 1700){
    p1 = 0;
    p3= 600;
  }
  if(p2 > 1700){
    p2 = 0;
  }
  if(p3 > 1700){
    p3 = 0;
  }

  p1 +=0.7;
  p2 += 2;
  p3 += 1;
},50);
})();
