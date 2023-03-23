<?php
include_once('function.php');
	try {
		$request_method = $_SERVER["REQUEST_METHOD"];
		switch($request_method)
		{
			case 'GET':
				getRealisations();
				break;
			default:
				http_response_code(405);
				break;
		}
	} 
	catch (Exception $e) {
		echo $e->getMessage();
		http_response_code(500);
	}
	
	
	function getRealisations()
	{
		header('Content-type: application/json');
		$lesRealisations = GED_getAllRealisations();
		echo json_encode($lesRealisations);
		http_response_code(200);
	}