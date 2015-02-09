<?php
include_once('../modele/connexion_bdd.php');

if (isset($_POST['message']))
{
  $message = preg_replace('#(\([A-Za-Z]\))#', '<img src="smiley1/$1.png"/>', $_POST['message']);
  $insertion_message = $tgf_base->prepare('INSERT INTO chat(message, date_creation) VALUES(:message, NOW())');
  $insertion_message->execute(array(
    'message' => $message
  ));
  header('Location: ../vue/chat.php');
}
