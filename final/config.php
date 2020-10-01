<?php
$db_user="root";
$db_pass="";
$db_name="all";


$db=new PDO('mysql:host=localhost;dbname='.$db_name.';characterset=utf8',$db_user,$db_pass);
$db->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
?>