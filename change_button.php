<?php

if(!isset($_SESSION)){
    session_start();
}

$result = empty($_SESSION['loggedin']) ? "false" : "true";

echo $result;

?>
