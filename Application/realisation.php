<?php
include_once('function.php');
	try {
		$request_method = $_SERVER["REQUEST_METHOD"];
		switch($request_method)
		{
			case 'GET':
				getRealisations();
				break;
			case'PUT':
				postNbJaimes();
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
	function postNbJaimes(){
		$json = file_get_contents('php://input');
		if(!empty($json)){
         $obj = json_decode($json);
		 $res = $obj->Voter;
		 foreach($res as $unVote){
			$id_rea = $unVote->id_rea;
			$nbJaime = $unVote->nbJaime;
			GED_updateRealisation($id_rea,$nbJaime);
			
		 }
	}
}