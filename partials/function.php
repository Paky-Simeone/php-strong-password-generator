<?php 
function generate_password($length) {

$generated_password = "";

for ($i = 0; $i < $length; $i++) {

//   $min_chars = range("a","z");
//   $max_chars = range("A","Z");
//   $numbers = range("0","10");
//   $special_chars = "\|!/%&()=?'[]°#@§*^£$><.:,;-_";
//   $all_chars .= $min_chars . $max_chars . $numbers . $special_chars;
    $all_chars = "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789!@#$%^&*()-+=";

  $rand_char_index = rand(0, strlen($all_chars) -1);

  $rand_char = $all_chars[$rand_char_index];

  $generated_password .= $rand_char;
}
// var_dump($generated_password);
return $generated_password;
}
