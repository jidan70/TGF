<script src="vue/js/jquery.js"></script>
<script src="vue/js/animate.js"></script>
<script src="vue/bootstrap/dist/js/bootstrap.min.js"></script>
<script src="vue/js/animation_bg.js"></script>
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


(function() {
  var verif_pseudo = document.getElementById('verif-pseudo'),
      verif_mail = document.getElementById('verif-mail'),
      verif_pass = document.getElementById('verif-pass'),
      verif_pass2 = document.getElementById('verif-pass2'),
      bouton_signup = document.getElementById('bouton-signup'),
      champ_pseudo = document.getElementById('pseudo_new'),
      champ_mail = document.getElementById('mail'),
      champ_pass = document.getElementById('new_pass'),
      champ_pass2 = document.getElementById('pass_verif');
  var a = false, b = false, c = false, d = false, e = false, f = false;

      function searchMail(){
        var xhr4 = new XMLHttpRequest();
        var mail = champ_mail.value;
        xhr4.open('POST', 'http://localhost/TGF/controleur/search_mail.php');

        xhr4.addEventListener('readystatechange', function(){
          if(xhr4.readyState == 4 && xhr4.status == 200){
            var file_recept = xhr4.responseText;
            if(/^exist/i.test(file_recept)){
              verif_mail.innerHTML = "";
              verif_mail.style.color = "rgb(100,6,6)";
              var text_info = document.createTextNode('this adress already exist');
              verif_mail.appendChild(text_info);
            }
            else if(/^not/i.test(file_recept)){
              verif_mail.innerHTML = "";
              verif_mail.style.color = "green";
              var text_info = document.createTextNode('this adress is valid');
              verif_mail.appendChild(text_info);
            }
          }
        }, false);

        xhr4.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
        xhr4.send('mail=' + mail);
      }

      function searchPseudo(){
        var xhr5 = new XMLHttpRequest();
        var pseudo = champ_pseudo.value;
        xhr5.open('POST', 'http://localhost/TGF/controleur/search_pseudo.php');

        xhr5.addEventListener('readystatechange', function(){
          if(xhr5.readyState == 4 && xhr5.status == 200){
            var file_recept = xhr5.responseText;
            if(/^exist/i.test(file_recept)){
              verif_pseudo.innerHTML = "";
              verif_pseudo.style.color = "rgb(100,6,6)";
              var text_info = document.createTextNode('this pseudo already exist');
              verif_pseudo.appendChild(text_info);
            }
            else if(/^not/i.test(file_recept)){
              verif_pseudo.innerHTML = "";
              verif_pseudo.style.color = "green";
              var text_info = document.createTextNode('this pseudo is valid');
              verif_pseudo.appendChild(text_info);
            }
          }
        }, false);

        xhr5.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
        xhr5.send('pseudo=' + pseudo);
      }




    champ_pseudo.addEventListener('blur', function() {
    if(!/^[A-Za-z\d_-]{7,}$/i.test(champ_pseudo.value)){
      var info = document.createTextNode('Your pseudo must have more then 6 characters (must be letters, numbers, "_" or "-")');
      verif_pseudo.innerHTML = "";
      verif_pseudo.appendChild(info);
      a = false;
    }else{
      verif_pseudo.innerHTML = "";
      a = true;
      searchPseudo();
      setTimeout(function() {
        if(/exist/.test(verif_pseudo.innerHTML)){
          f = false;
        }else{
          f = true;
        }
      },500);
    }
  },false);

  champ_mail.addEventListener('blur', function() {
    if(!/^[A-Za-z0-9\._-]+@[A-Za-z0-9\._-]+\.[A-Za-z]{2,6}$/.test(champ_mail.value)){
      var info = document.createTextNode('Your mail adress is not valid');
      verif_mail.innerHTML = "";
      verif_mail.appendChild(info);
      b = false;
    }else{
      verif_mail.innerHTML = "";
      b = true;
      searchMail();
      setTimeout(function() {
        if(/exist/.test(verif_mail.innerHTML)){
          e = false;
        }else{
          e = true;
        }
      },500);
    }
  },false);

  champ_pass.addEventListener('blur', function() {
    if(!/^[A-Za-z0-9_]{8,}$/.test(champ_pass.value)){
      var info = document.createTextNode('Your password must have more than 7 characters(must be letters, numbers or "_")');
      verif_pass.innerHTML = "";
      verif_pass.appendChild(info);
      c = false;
    }else{
      verif_pass.innerHTML = "";
      c = true;
    }
  },false);

  champ_pass2.addEventListener('blur', function() {
    if(champ_pass.value != champ_pass2.value){
      var info = document.createTextNode('The 2 passwords are different');
      verif_pass2.innerHTML = "";
      verif_pass2.appendChild(info);
      d = false;
    }else{
      verif_pass2.innerHTML = "";
      d = true;
    }
  },false);

  bouton_signup.addEventListener('click', function(ele) {
    if(a == false || b == false || c == false || d == false || e == false || f == false){
      ele.preventDefault();
    }
  }, false);

})();


(function() {
  var bouton_log_form = document.getElementById('bouton-log-form');
  var form_connexion = document.getElementById('form-connexion');
  var verif_login = document.getElementById('verif-login');

  function verif_pseudo(){
    var pseudo = document.getElementById('pseudo').value;
    var pass = document.getElementById('pass').value;
    var xhr3 = new XMLHttpRequest();
    xhr3.open('POST', 'http://localhost/TGF/controleur/verif_connex.php' )

    xhr3.onreadystatechange = function() {
      if (xhr3.readyState == 4 && xhr3.status == 200){
        var pseudo_existe = xhr3.responseText;
        if (/^false/i.test(pseudo_existe)){
          verif_login.innerHTML = "";
          var info_log = document.createTextNode('your password or your pseudo are incorects');
          verif_login.appendChild(info_log);
        }
        else if(/^nothing/i.test(pseudo_existe)){
        }
        else if (/^vrai/i.test(pseudo_existe)){
          verif_login.innerHTML = "";
          verif_login.style.color = "green";
          var info_log = document.createTextNode('your password and your pseudo are corects');
          verif_login.appendChild(info_log);
          form_connexion.submit();
        }
      }
    };
    xhr3.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
    xhr3.send('pseudo=' + pseudo + '&pass=' + pass);
  }

  bouton_log_form.addEventListener('click', function(e){
    e.preventDefault();
    verif_pseudo();
  }, false);

})();


</script>
