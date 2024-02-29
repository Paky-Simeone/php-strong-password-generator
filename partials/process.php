<?php 
require_once __DIR__ ."/function.php";
  $password_length = (int) $_GET["password-length"] ?? 5;
//   $password_length = isset($_GET['password-length']) ? (int) $_GET['password-length'] : 5;

  $form_sent = !empty($_GET);

  if ($form_sent) {

    $final_pass = generate_password($password_length);

    var_dump($password_length);

  }