<?php

$password = 'whatever142';

$salt = random_bytes(16);

$hashed_password = crypt($password, $salt);

echo $hashed_password;


 ?>
