(function(){
  var message = document.getElementById('message');

  function messageRequete(){
    var xhr = new XMLHttpRequest();
    xhr.open('POST', 'http://localhost/TGF/vue/template/message.php');

    xhr.onreadystatechange = function() {
      if (xhr.readyState == 4 && xhr.status == 200){
        message.innerHTML = xhr.responseText;
      }
    };

    xhr.send(null);
  }


  setInterval(function(){
    messageRequete();
  }, 500);
})();

(function(){
  var send_button = document.getElementById('send');
  var message_champ = document.getElementById('enter_champ');


  function sendMessage(){
    var xhr2 = new XMLHttpRequest();
    xhr2.open('POST','http://localhost/TGF/controleur/envoi_message.php');
    xhr2.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
    var message = message_champ.value;
    xhr2.send('message=' + message);
    message_champ.value = "";
  }

  send_button.addEventListener('click', function(e) {
    e.preventDefault();
    sendMessage();
  },false);

})();
