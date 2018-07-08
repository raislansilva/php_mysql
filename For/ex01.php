<?php

for ($i=0; $i < 100; $i++) { 
	if($i>=20 && $i<50 ){
		continue;
	}

	if($i>50){
		break;
	}


	echo $i."</br>";	
}


?>