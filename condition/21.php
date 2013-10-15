<?php
if(
	($_POST['id'] === 'egoing' or $_POST['id'] === 'k8805' or $_POST['id'] === 'sorialgi')
	and
	$_POST['password'] === '111111'
){
	echo 'right';
} else {
	echo 'wrong';
}
?>