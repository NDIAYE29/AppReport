<?php
try
{
    $strConnection =  'mysql:host=localhost;dbname=projetmateriel1';
    $pdo = new PDO ($strConnection, 'root', '');
}
catch (PDOException $e)
{
    $msg= 'ERREUR PDO dans'. $e->getMessage();
		die($msg);
}
?> 