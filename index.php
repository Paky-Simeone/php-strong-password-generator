<?php 
  function generate_password($length) {

    $generated_password = "";

    for ($i = 0; $i < $length; $i++) {

      $min_chars = implode(range("a","z"));
      $max_chars = implode(range("A","Z"));
      $numbers = range("0","10");
      $special_chars = "\|!/%&()=?'[]°#@§*^£$><.:,;-_";
      $all_chars = $min_chars . $max_chars . $numbers .  $special_chars;

      $rand_char_index = rand(0, strlen($all_chars) -1);

      $rand_char = $all_chars[$rand_char_index];

      $generated_password .= $rand_char;
  }
  return $generated_password;
  }

  // $password_length = (int) $_GET["password-length"] ?? 5;
  $password_length = isset($_GET['password-length']) ? (int) $_GET['password-length'] : 5;

  $form_sent = !empty($_GET);

  if ($form_sent) {

    $generate_password = generate_password($password_length);

    var_dump($password_length);

  }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Password Generator</title>
    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
<form method="GET" action="index.php">
  <div class="mb-3">
    <label for="password-length" class="form-label"> Generatore Password</label>
    <input name="password-length" type="number" class="form-control" id="password-length" >
  </div>
  <input type="submit" class="btn btn-primary" value="Invia" />
</form>

</body>
</html>