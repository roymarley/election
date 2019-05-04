<?php 
function string_acak ($panjang_string)

{
	$str_res = '0123456789ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz';
	return substr(str_shuffle($str_res), 0, $panjang_string);
}

//echo string_acak(panjang string);
echo string_acak(32);

?>