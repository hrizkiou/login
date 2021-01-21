<?php
	if(isset($_POST['username']) && isset($_POST['password'])){
		if (!empty($_POST['username']) || !empty($_POST['password'])){
			echo 'your are logged';
		}
	}
	else {
		echo 'Something be wrong';
	}
?>