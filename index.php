<?php
$bot_token = "5002383329:AAGfbr-RTuvNP1R_PnVs19_WRXFXsTdDDQk";
$input = file_get_contents('php://input');
$data = json_decode($input, true);
$chat_id = $data['message']['chat']['id'];
$text = $data['message']['text'];
$api_key = '6a6dc0a3';

$response = file_get_contents("http://www.omdbapi.com/?apikey=$api_key&s=$text");
$obj = json_decode($response, true);
$movie = $obj['Search'][0]['Title'];

//$title = $movie['Title'];
//$year = $movie['Year'];
//$poster = $movie['Poster'];
//$message = "$title, $year, $poster";
file_get_contents("https://api.telegram.org/bot$bot_token/sendMessage?chat_id=$chat_id&text=$movie");
