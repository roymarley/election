<?php

// fungsi untuk membuat gambar kotak

function cetak_gambar($panjang){

	// Membuat ganjil genap
	if($panjang % 2 == 0){
		echo "$panjang = Bilangan Genap<br>";
	}
	else{
		echo "$panjang = Bilangan Ganjil<br>";
		for ($i=1; $i<=$panjang; $i++)  
		{  
			for ($j=1; $j<=$panjang; $j++)  
			{  
				echo '* ';  
			}  
			echo "</br>";  
		}  
	}

	
}

cetak_gambar(5);

?>