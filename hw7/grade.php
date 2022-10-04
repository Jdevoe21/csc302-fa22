<?php
require "questions.php";
$request_data = $_POST["responses"];
$responses = json_decode($request_data, true);
$correct = 0;
for($i = 0; $i < count($responses); $i++){
    $is_correct = $responses[$i]["answer"] === $questions[$i]["answer"];
    $responses[$i]["correct"] = $is_correct;
}
echo json_encode($responses);

?>