<?php
$name = "Okta";
$address = "Jl. Kauman Lama III No. 19";
$hobbies = array("Football", "Guitar");
$is_married = False;
$school = array('highschool'=>'SMK TELKOM PURWOKERTO','university'=>'none');
$skills = array('1'=>'php','2'=>'mysql','3'=>'html','4'=>'css');
$funcarray = array(
	"name" => $name,
	"address" => $address,
	"hobbies" => $hobbies,
	"is_married" => $is_married,
	"school" => $school,
	"skills" => $skills
);
var_dump($funcarray);
$tampiljson = json_encode($funcarray);
echo $tampiljson;
?>