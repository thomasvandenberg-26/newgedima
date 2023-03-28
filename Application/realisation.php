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
		$errJSON= true; 
		if(!empty($json)){
			
			$obj = json_decode($json);
			if(property_exists($obj,"Vote")){
		
			$res = $obj->Vote;
			$errUpdate =false; 
			foreach($res as $unVote){
		
				if(property_exists($unVote,"id_realisation") && property_exists($unVote,"nbJaime"))
				{ 		echo "if";
					$id_rea = $unVote->id_realisation;
					$nbJaime = $unVote->nbJaime;
					$retourUpdate= GED_updateRealisation($id_rea,$nbJaime);
					$errJSON =false; 
				
				if($retourUpdate == 1)
				{
					$messageInfo .= "Realisation" . $id_rea. " modifié avec succès. ";
				
				}
				else{
					$messageInfo = "Erreur"; 
					$errUpdate = True; 
				}
				$errJSON = false; 
			   }
			 }
			 if($errUpdate == false) {
				header('Content-Type: application/json');
				echo json_encode($messageInfo);
				http_response_code(200);
			}
		}
		
		if ($errJSON){
			header('Content-Type: application/json');
			echo json_encode("JSON Object empty or invalid");
			http_response_code(400);
		}
	}
	}	