<?php

function print_content(){
	if ($_GET['page']) {
	include __DIR__ . '/../pages/' . $_GET['page'] . '.php';
}else{
	echo "Ошибка";
}
}

?>