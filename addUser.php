<?php
use App\Tools\Request;

require "vendor/autoload.php";


$data = [
    "userid" => $_POST["user_id"],
    "chatid" => $_POST['chat_id'],
];

echo Request::perform("chat/add", $data, "POST");
