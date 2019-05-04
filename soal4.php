<?php
$data1 = array('a','b','c','e','d');
$data2 = array('g','e','f');
$dataBelomUrut = array(
$data1,
$data2,
);
echo "Data sebelum diurutkan <br>";
for ($i=0; $i < count($dataBelomUrut); $i++) { 
	echo implode(", ", $dataBelomUrut[$i]);
	echo "<br>";
}

sort($data1);
sort($data2);
$dataUrut = array(
$data1,
$data2,
);
sort($dataUrut);

echo "Data Setelah diurutkan <br>";
for ($i=0; $i < count($dataUrut); $i++) { 
	echo implode(", ", $dataUrut[$i]);
	echo "<br>";
}

// $cars = array("a", "e", "c");
// sort($cars);
// $clength = count($cars);
// for($x = 0; $x < $clength; $x++) {
//     echo $cars[$x];
//     echo "<br>";
// }
?>
