<?php 
 require_once __DIR__ ."./partials/function.php";
 require_once __DIR__ ."./partials/process.php";
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
    <input name="password-length" type="number" class="form-control" id="password-length" min="1" max="30">
  </div>
  <input type="submit" class="btn btn-primary" value="Invia" />
</form>
<p>La tua password è: <?php echo $final_pass ?></p>


</body>
</html>