<?php require_once("header.php"); ?>

<?php
if(!$_GET["page"]){	
	$page = "content";
}else if((!file_exists($_GET["page"].".php"))){
	$error = 1;
	$page = "content";
}else{
	$page = $_GET["page"];
}
require_once($page.".php");
?>		

<?php require_once("footer.php"); ?>