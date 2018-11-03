<?php 

function panggilobject(){
	$age['rater'] = array('akmal','andi');
	$age['score'] = array(4,5);
	$data['itemId'] = 12341822;
	$data['itemName'] = 'desk';
	$data['price'] = 700000;
	$data['freeShiping'] = 700000;
	$data['ratings'] = $age;
	$data['color'] = ['brown','black'];

	echo json_encode($data);
}

panggilobject();
?>