<?php

	$user='root';
	$pwd = 'root';
	$pdo = new PDO('mysql:host=127.0.0.1;dbname=test',$user,$pwd);
	try{
		$sql = 'select * from user;';
		$query = $pdo->query($sql);
		die;



	}catch(Exception $e){
		
		var_dump($e->getMessage());
		die;
	}


