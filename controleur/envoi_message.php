<?php
session_start();
include_once('../modele/connexion_bdd.php');

if (isset($_POST['message']) && isset($_SESSION['pseudo']))
{
  $message = stripslashes($_POST['message']);
  $message = htmlspecialchars($message);
  $message = nl2br($message);
  $message = preg_replace('#\((.+)\)#isU', '<img style="display=inline;width:20px;" src="smiley1/$1.png"/>', $message);


  $insertion_message = $tgf_base->prepare('INSERT INTO chat(message, pseudo_message ,date_creation) VALUES(:message, :pseudo, NOW())');
  $insertion_message->execute(array(
    'message' => $message,
    'pseudo' => $_SESSION['pseudo']
  ));
  header('Location: ../vue/chat.php#chat-section');
}
