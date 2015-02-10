<?php
include_once('../modele/connexion_bdd.php');

if (isset($_POST['message']))
{
  $message = stripslashes($_POST['message']);
  $message = htmlspecialchars($message);
  $message = nl2br($message);
  $message = preg_replace('#\((.+)\)#isU', '<img style="display=inline;width:20px;" src="smiley1/$1.png"/>', $message);


  $insertion_message = $tgf_base->prepare('INSERT INTO chat(message, date_creation) VALUES(:message, NOW())');
  $insertion_message->execute(array(
    'message' => $message
  ));
  header('Location: ../vue/chat.php#chat-section');
}
