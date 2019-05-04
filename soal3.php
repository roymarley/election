<?php

// fungsi untuk membuat gambar kotak

function cetak_gambar($panjang){

	// Membuat ganjil genap
	if($panjang % 2 == 0){
		echo "$panjang = Bilangan Genap<br>";
	}
	else{
		echo "$panjang = Bilangan Ganjil<br>";
		for ($i=4; $i<=$panjang; $i++)  
		{  
			echo "* ";
			for ($j=3; $j<=$panjang; $j++)  
			{  
				echo '= ';
			}  
			for ($j=5; $j<=$panjang; $j++)  
			{  
				echo '* ';
			}  
			echo "</br>";  
		}  
		for ($i=5; $i<=$panjang; $i++)  
		{  
			echo "* ";
			for ($j=2; $j<=$panjang; $j++)  
			{  
				echo '* ';
			}  
			
			echo "</br>";  
		} 
		for ($i=4; $i<=$panjang; $i++)  
		{  
			echo "* ";
			for ($j=3; $j<=$panjang; $j++)  
			{  
				echo '= ';
			}  
			for ($j=5; $j<=$panjang; $j++)  
			{  
				echo '* ';
			}  
			echo "</br>";  
		}  
	}

	
}

cetak_gambar(5);

?>