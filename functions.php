<?php


function generateErrorMessage(string $message){
    echo "<p class='error-message'>$message</p>";
}


function redirectTo(string $file){
    return header(header: "Location:$file.php");
}


