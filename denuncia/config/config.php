<?php

function conectarBD(){
	try{
		$conectPDO=new PDO("mysql:host=localhost;dbname=combateviolencia", "root", "");
		}catch(PDOException $e){
			echo $e->getMessage();
			}
		return $conectPDO;
}
?>