<?php
include("auth.php");

header("Content-Type: application/json; charset=utf-8");
if ($_POST) {
    if (!isset($_POST["action"])) {
        http_response_code(400);
        die();  
    }

    switch($_POST["action"]) {
        case "register":
            if (!isset($_POST["username"]) || 
                !isset($_POST["password"])) {
                    http_response_code(400);
                    die();
                }
            register($_POST["username"], $_POST["password"]);
            break;
    }    
}
?>