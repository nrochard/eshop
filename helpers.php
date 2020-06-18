<?php


function dbConnect()
{
    try {
        $db = new PDO('mysql:host=localhost:3306;dbname=dv19rochard;charset=utf8', 'dv19rochard', 'xT4@i7g7ovMtpuMy', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));//$e contiendra les éventuels messages d’erreur
    } catch (Exception $exception) //$e contiendra les éventuels messages d’erreur
    {
        die('Erreur : ' . $exception->getMessage());
    }
    return $db;
}