<?php

function random($car) {
		$string = "";
		$chaine = "abcdefghijklmnpqrstuvwxy";
		srand((double)microtime()*1000000);
		for($i=0; $i<$car; $i++) {
		$string .= $chaine[rand()%strlen($chaine)];
		}
		return $string;
		}
		

//test.phph
		
?>