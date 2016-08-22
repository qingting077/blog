<!DOCTYPE HTML>  
<html>  
<head>  
<meta  charset="utf-8">  
    <title>登录页面</title>
</head>   
<style>   
    *{
    /*重置浏览器默认样式*/
    margin: 0;   /*外边距*/
    padding: 0;  /*内边距*/
    }
    
    a{
        text-decoration: none;  /*去掉超链接的下划线*/
    }
    
    .h{
        /*background-color: aqua;*/
        position: relative;
        left: 40px;
    }
    
    .p{
        /*background-color: rebeccapurple;*/
        position: absolute;
        margin: 20px;
        color: rebeccapurple;
        
    }
    
     .div1{
        width: 100%;
        height: 700px;
        background: url(11.jpg);
    }
        
    .div{
        /*background-color: antiquewhite;*/
        width: auto;
        line-height: 1.5;
        text-align: center;
        font-size: 25px;
        margin: 100px 0;
    }

    .button input{
        /*background-color: aquamarine;*/
        font-size: 22px;
        color: rebeccapurple;
    }
    .button input:hover{
        font-size: 22px;
        color: blue;
    }
    
    .button a:hover{
        background-color: gainsboro;
        color:blue;
        border-radius: 5px;
    }
</style>
    
<body>
<div class="div1">
<h1 class="h">:)</h1><p class="p">欢迎来到博客登录页面，啦啦 ^-^</p>
<form method="post" action="8.php">  
<div class="div">  
    用户名:<input type="text" name="name" placeholder="输入您的用户名"><br>  
    密 &nbsp;码:<input type="password" name="password" placeholder="输入您的密码">  
    <div class="button">  
    <input type="submit" value="确定">  
    <input type="reset" value="清除">  
    <a href="2.php">注  册</a>  
    </div>  
</div>
</form>
</div>
</body>  
</html>