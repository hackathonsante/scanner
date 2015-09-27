<?php
use App\Tools\Request;

require "vendor/autoload.php";


$data = [
    "userid" => $_POST["user_id"],
    "text" => $_POST['text'],
];
$id = $_POST['chat_id'];

echo Request::perform("message/{$id}", $data, "POST");
