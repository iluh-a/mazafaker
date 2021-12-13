<?php
$bot_token = "5002383329:AAGfbr-RTuvNP1R_PnVs19_WRXFXsTdDDQk";
$input = file_get_contents('php://input');
$data = json_decode($input, true);
$chat_id = $data['message']['chat']['id'];
$text = $data['message']['text'];
$api_key = '108856a2254a8616fc93091eb1c18d9f';

$response = file_get_contents("https://api.themoviedb.org/3/search/movie?api_key=$api_key&language=en-US&query=$text&page=1&include_adult=false");
$message = $response['results'];
file_get_contents("https://api.telegram.org/bot$bot_token/sendMessage?chat_id=$chat_id&text=salsa");