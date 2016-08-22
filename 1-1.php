<!--用户登录验证 从数据库中读取-->
<!--1-1.php与8.php相同效果-->
<style>
    *{
    /*重置浏览器默认样式*/
    margin: 0;   /*外边距*/
    padding: 0;  /*内边距*/
    }
    
    a{
        text-decoration: none;  /*去掉超链接的下划线*/
    }
    
    .p{
        position: absolute;
        margin: 70px  50px ;
    }
    
    .a{
        position: absolute;
        left: 230px;
        top: 190px;
    }
    
    .a:hover{
        background-color: lightsteelblue;
        color: white;
        border-radius: 5px;
    }
    
    .h1{
        position:absolute;
        left:20%;
        top: 120px;
    }
    
    .p1{
        color: royalblue;
    }
    
    .span{
        /*background-color: aqua;*/
        position: relative;
        left: 200px;
        top:190px;
    }
    
    .img{
        position: relative;
        width: 100%;
        height: 700px;
        background: url(fengye.jpg);
    }
</style>

<div class="img">
<?php  
require('mysql_connect.php'); 
    
$name=isset($_POST['name']);
//$sql="select count(0) from mysql_login where name=?";
//$result=mysql_query($sql); 
      
if($_POST['name'] == ""){  
  echo "<span class='span'><strong>请填写用户名: <a href='1.php'>返回~</a></strong></span>";   
}
else{
    if(($name=isset($_POST['name']))&&($name != $_POST['name'])){
        echo '<span class="span"><strong>您还未注册哦。 <a href="2.php">点击这里注册~</a></strong></span>';
    } 
    else{
        if($_POST['password'] == ""){  
            echo "<span class='span'><strong>请填写密码: <a href='1.php'>返回~</a></strong></span>";       
        }
        else{
            if(($password=isset($_POST['password']))&&($password != $_POST['password'])){
                echo '<span class="span"><strong>您输入的密码不正确。<br><br> <a href="1.php" class="a">返回重新填写密码吧~</a> <br><br><a href="5.php" class="a">点击这里找回密码...</a></strong></span>';
            }
            else{
                echo '<strong><p class="p">欢迎来到 '$_POST["name"]' 的博客~</P></strong>';
                echo '<h1 class="h1">:)</h1>';
                echo '<strong><a href="4.php" class="a">进入 '$_POST["name"]' 的博客...</a>';  
            } 
        }
    }
}


?>
</div>