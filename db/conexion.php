<?php
class database
{
    public static  function conectar()
    {
        $db= new mysqli("remotemysql.com","lOWXmNRh2e","0ukDBh0PER","lOWXmNRh2e");
        $r=$db->query("set names 'utf8' ");
        return $db;
    }

}




?>
