<?php  
require('dblogin.php');
$conn = mysql_connect($db_server_name,$db_username,$db_password)   
    or die("连接数据库失败！");  
   
mysql_select_db($db_database)  
    or die ("不能连接到mysql_login".mysql_error()); 

?>