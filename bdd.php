<?php

function connection()
{
    try {
        return new PDO('mysql:host=localhost;dbname=artbox;charset=utf8', 'root', '',
    [
        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
    ]
    );
    } catch (PDOException $e) {
        die('Une erreur est survenue :') . $e->getMessage();
    }
}
