<?php


function generateErrorMessage(string $message){
    echo "<p class='error-message'>$message</p>";
}


function redirectTo($file){
    return header(header: "Location:$file.php");
}


