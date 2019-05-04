<?php

// fungsi untuk memvalivadasi username

function is_valid_username($username){

    if (preg_match('/^[a-z]{8,8}$/', $username))
        return true;
    else
        return false;
}

// fungsi untuk menvalidasi password
 
function is_valid_password($pwd){

    if (preg_match("/^[0-9a-zA-Z_!$@#^&]{8,8}$/", $pwd))
        return true;
    else
        return false;
}

$username = 'oktaokta';
$password = 'qazW_123';

if (is_valid_username($username) === true) {
	echo "Username : " . $username;
	echo "<br>";
	echo "Username bernilai benar";
}
else {
	echo "Username : " . $username;
	echo "<br>";
	echo "Username, merupakan kombinasi dari huruf kecil. Dengan panjang tepat 8 karakter.";
}

echo "<br>";
echo "<br>";

if (is_valid_password($password) === true) {
	echo "Password : " . $password;
	echo "<br>";
	echo "Password bernilai benar";
}
else {
	echo "Password : " . $password;
	echo "<br>";
	echo "Password, merupakan kombinasi dari huruf kecil, huruf besar, angka, dan karakter spesial. Dengan panjang minimal 8 karakter.";
}



?>