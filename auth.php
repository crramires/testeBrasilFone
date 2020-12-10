<?php
include_once("db.php");

try 
{
    if( isset($_POST['emailForm'])  && isset($_POST['passwordForm']) ) {
        $emailAux = $_POST['emailForm'];
        $passwordAux = $_POST['passwordForm'];

        $email = $emailAux;
        $password = md5($passwordAux);

        $stmt->bindparam(":LOGIN", $email);
        $stmt->bindparam(":PASSWORD", $password);

        $stmt->execute();
    }
} 
catch (Trowable $e)
{
    echo 'Algo deu errado!!' . $e->getMessage();
}

?>