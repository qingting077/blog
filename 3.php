<!--用户注册验证 写入数据库-->
<style>
    *{
    /*重置浏览器默认样式*/
    margin: 0;   /*外边距*/
    padding: 0;  /*内边距*/
    }
     a{
        text-decoration: none;  /*去掉超链接的下划线*/
    }
    
    .a{
        font-size: 30px;
        font-style:oblique; 
        color: rebeccapurple;
    }
    .a:hover{
        background-color: lightsteelblue;
        color: white;
        border-radius: 5px;
    }
    
    .a1{
        font-size: 20px; 
        color: rebeccapurple;
    }
    
    .span{
        position: relative;
        margin:150px;
        top:150px;  
    }  
    
    .sp{
        position: absolute;
        margin:150px;
    }  
    
    .div{
        position: relative;
        width: 100%;
        height: 700px;
        background: url(fengye.jpg);
    }
</style>
<div class="div">
    
<?php  
require('mysql_connect.php');  
$name=isset($_POST['name']);
if($name != null){
    $name=$_POST['name'];
}
$password=isset($_POST['password']);
if($password !=null){
    $password=$_POST['password'];
}  
$pwd_again=isset($_POST['pwd_again']);
if($pwd_again != null){
    $pwd_again=$_POST['pwd_again'];
} 

if($name=="" || $password==""){  
    echo ("<span class='sp'>用户名或者密码不能为空(⊙o⊙)哦~</span><br>");
    echo"<br><span class='sp'><strong><a href='2.php' class='a1'>点击这里重新输入吧~</a></strong></span>";
}
else{  
    if($password != $pwd_again){  
        echo"<span class='sp'>两次输入的密码不一致,请重新输入！</span><br>";  
        echo"<span class='sp'><a href='2.php' class='a'>重新输入吧~</a></span>";
    }  
   
    else{  
        $sql="insert into mysql_login values('null','$name','$password')";  
        $result=mysql_query($sql);  
        if(!$result){  
            echo"<span class='sp'>注册不成功！";  
            echo"<span class='sp'><a href='2.php' class='a'>返回</a></span>";  
        }  
        else{   
            echo"<span class='span'>注册成功! <a href='4.php' class='a'>点击进入 ".$name." 的博客~</a></span>";
        }  
    }
}
    
    ?>
    </div>