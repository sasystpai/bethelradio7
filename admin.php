<?php
	

include_once('br_ModuloSeguridad/vistas/FormPrincipal.php');
$OBJForm = new FormPrincipal;
$OBJForm -> MostrarFormPrincipal();

//}
//hash de password

//   if(defined("CRYPT_BLOWFISH") && CRYPT_BLOWFISH) {  
//     echo "Wiii, tengo CRYPT_BLOWFISH!";  
//   }  

//   function crypt_blowfish_bycarluys($password, $digito = 7) {  
// $set_salt = './1234567890ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz';  
// $salt = sprintf('$2a$%02d$', $digito);  
// for($i = 0; $i < 22; $i++)  
// {  
//  $salt .= $set_salt[mt_rand(0, 63)];  
// }  
// return crypt($password, $salt);  
// }

// $password="<br/>123<br/>";
// echo $password;
// $password = crypt_blowfish_bycarluys($password);
// echo $password;  

// echo "<br/>=========================<br/>";

// unset($password);
// $clave="123";
// echo $clave."<br/>";
// $salt = str_replace('=', '.', base64_encode(mcrypt_create_iv(20)));
// $hash = hash_hmac('SHA512', $clave, $salt);
// echo "->>>".$hash."<<<<-<br/>";
// var_dump($hash);
// echo "<br/>----------->".$hash."<------------------";
?>