<?php 
function karakter($karakter,$i){
	$hasil = substr_count($karakter, $i);
	echo $hasil;
}

karakter("BOOTCAMP","O");

?>