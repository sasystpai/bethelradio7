<?php

$user="luis";

echo $login=mysql_real_escape_string($user);

$query=sprintf("SELECT * FROM usuarios");

?>