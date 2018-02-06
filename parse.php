<?php

if(!empty($_REQUEST)){
	file_put_contents("result.html", $_REQUEST['html']);
	echo htmlspecialchars($_REQUEST['html']);
}else{
	echo 'bad request';
}