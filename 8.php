<style>
     *{
        margin:0;
        padding:0;
    }
    .img8{
        position: relative;
        width: 100%;
        height: 700px;
        background: url(dongman.jpg); 
    }
    span{
        position: absolute;
        margin: 170px;
    }
</style>
<?php  
require('mysql_connect.php'); 
  
$name=isset($_POST['name']);     
if($_POST['name'] == ""){  
  echo "<span class='span'><strong>请填写用户名: <a href='1.php'>返回~</a></strong></span>";   
}
elseif($_POST['password'] == ""){  
            echo "<span class='span'><strong>请填写密码: <a href='1.php'>返回~</a></strong></span>"; 
}
 else 
{   
     $sql="select *from mysql_login ";
     $result=mysql_query($sql);
     if(!$result){  
            echo"<span class='span'>您还未注册！<a href='2.php'>点击这里注册~</a></span>";    
     } 
     echo'<div class="img8">';
         echo '<span>登录成功！ <a href="4.php">点击这里进入博客~</a></span><br>';
    //获取并显示结果 
     echo'</div>';
 }  
   mysql_close($conn);  


?>
