<?php
class database
{
    public static  function conectar()
    {
        $db= new mysqli("remotemysql.com","lOWXmNRh2e","0ukDBh0PER","lOWXmNRh2e") ;
        if ($db->connect_errno) {
            echo "Falló la conexión con MySQL: (" . $db->connect_errno . ") " . $db->connect_error;
            die();
        }
        $r=$db->query("set names 'utf8' ");

        return $db;
    }

}




?>
