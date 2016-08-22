<!DOCTYPE HTML>  
<html>  
<head>  
<meta charset="utf-8">  
<title>用户注册页面</title>  
</head>  
<style type="text/css"> 
    *{
    /*重置浏览器默认样式*/
    margin: 0;   /*外边距*/
    padding: 0;  /*内边距*/
    }

    a{
        text-decoration: none;  /*去掉超链接的下划线*/
    }
    
    .h1{
        /*background-color: coral;*/
        text-align:center; 
        position: relative;
        color: rebeccapurple;
        padding: 30px 0 0 0;
    }
    
    .div1{
        width: 100%;
        height: 700px;
        background: url(11.jpg);
    }
    
    .div{
        /*background-color: aqua;*/
        width:100%;  
        text-align:center;
        position: absolute;
        margin:40px 0;   /*两个参数时：上下，左右*/
        outline: none;
    }  
    
    .text{ 
        /*background-color: antiquewhite;*/
        font-size:25px;  
        margin:20px 0;
    } 
    
    .text1{ 
        /*background-color: red;*/
        font-size:18px;
        color: red;
        margin:20px 0;
    } 
    
    .button input{
        /*background-color: red;*/
        font-size: 25px;
        color: rebeccapurple;
    }
  
</style>  
<body>
<div class="div1">
<h1 class="h1">注册页面</h1>  
<form method="post" action="3.php">  
<div class="div">  
    <div class="text">  
    用户名:<input type="text" name="name" placeholder="请输入您的用户名"></div>  
    <div class="text">  
    密 码:<input type="password" name="password" placeholder="请输入您的密码"></div>  
    <div class="text">  
    再次输入密码：<input type="password" name="pwd_again" placeholder="请再次确认您的密码"></div>  
    <div class="text">  
       
    <div class="text1">  
    <input type="radio" name="agree" value="是否同意我们的条款">同意我们的条款?</div>  
    
    <div class="button">
    <input type="submit" value="提交">  
    <input type="reset" value="清除">
    </div>
</div> 
</form>
</div>
</body>  
</html>
