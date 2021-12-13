<?php
//$input = file_get_contents('php://input');
//$data = json_decode($input);
//$chat_id = $data['message']['chat']['id'];
$text = 'salamaleykum';

$bot_token = "5002383329:AAGfbr-RTuvNP1R_PnVs19_WRXFXsTdDDQk";
file_get_contents("https://api.telegram.org/bot$bot_token/sendMessage?chat_id=1341766485&text=$text");