<?php 

$method = $_SERVER['REQUEST_METHOD'];

// Process only POST methods from browser.

if($method == 'POST'){
	$requestBody = file_get_contents('php://input');
	$data = json_decode($requestBody, true);
    $inpmsg = $data["msg"];
    
    //Send the user text to rasa server and receive the intent and entities
    $outputmsg = processInputText($inpmsg); 
    
    //Send back the output message as response to the POST request
	$response = new \stdClass();
	$response->text = $outputmsg ;
	echo json_encode($response);
    
}
else
{
	echo "Method not Allowed";
}

function processInputText($inptext)
{
    //Send inptext to rasa-nlu http server and obtain the processed result.
    $rasatext = file_get_contents("http://localhost:5000/parse?q=" . urlencode($inptext));
    //Decode the response text as a json array
    $rasajson = json_decode($rasatext, true);
    
    //Extract the intent
    $rasa_intent = !empty($rasajson["topScoringIntent"]["intent"]) ? $rasajson["topScoringIntent"]["intent"] : '';
    
    //Extract the entities
    $rasa_entities = '';
    if(!empty($rasajson["entities"]))
        {
        foreach ($rasajson["entities"] as $entity)
            {
            $rasa_entities = $rasa_entities . $entity["type"] . '=>' . $entity["entity"] . "<br>";
            }
        }
    //Prepare a reponse text.    
    return '<b>Input:</b> ' . $inptext  . '<br><b>Intent:</b> ' . $rasa_intent . '<br><b>Entities:</b><br>' . $rasa_entities;    
}
?>
