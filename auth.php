<?php
declare(strict_types=1);

function register(string $username, string $password) {
    $username_length = strlen($username = trim($username));
    $password_length = strlen($password);

    if (!($username_length >= 4 &&
        $username_length <= 16) || 
        !($password_length >= 8 && 
        $password_length <= 16)) {
            http_response_code(400);
            die();    
        }

    echo $username."\n";
    echo password_hash($password, PASSWORD_DEFAULT)."\n";
    login($username, $password); 
}

function login(string $username, string $password) {
    // Some SQL stuff here
    $password_hash = ""; // password hash
    $token = bin2hex(random_bytes(16));
    var_dump($token);
    http_response_code(200);
}
?>