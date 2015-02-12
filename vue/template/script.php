<script src="js/jquery.js"></script>
<script src="js/animate.js"></script>
<script src="bootstrap/dist/js/bootstrap.min.js"></script>
<script src="js/animation_bg.js"></script>
<script>
(function() {
  var login_button = document.getElementById('login');
  var login_button2 = document.getElementById('login2');
  var login_fenetre = document.getElementById('login-window');
  var login_ar = document.getElementById('arriere-login');

  login_button.addEventListener('click', function(){
    login_fenetre.style.display = 'block';
    login_ar.style.display = 'block';
  }, false);

  login_button2.onclick = function(){
    login_fenetre.style.display = 'block';
    login_ar.style.display = 'block';
  };

  login_ar.addEventListener('click', function() {
    login_fenetre.style.display = 'none';
    login_ar.style.display = 'none';
  }, false);

})();
</script>
