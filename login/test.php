<?php
	session_start();
	
	if(isset($_SESSION['user'])) {
	echo "Your session is running " . $_SESSION['user'];
}else{
	echo "not work";
}

?>