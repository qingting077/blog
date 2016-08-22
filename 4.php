<style>
    *{
    /*重置浏览器默认样式*/
    margin: 0;   /*外边距*/
    padding: 0;  /*内边距*/
    }
    
    a{
        text-decoration: none;  /*去掉超链接的下划线*/
        color: deepskyblue;
    }
    
    a:hover{
        background-color: cadetblue;
        color: aquamarine;
        border-radius: 5px;
    }
    
    .img{
        position: relative;
        width: 100%;
        height: 700px;
        background: url(bixin.jpg);
    }
    
    h1{
        color: blueviolet;
    }
    
    .d{
        position: absolute;
        margin:40px;
        color: blueviolet;
    }
    
</style>
<div class="img">

<div class="d">
<?php
echo '<h1 class="h1">Welcom to your blog.</h1>';
echo '<br><span class="span4">Login succesful. Great to see you back.</span>';
echo '<hr><br>';
echo '<a href="6.php" class="a4">Home</a> || <a href="7.php">Logout</a>';

?>
</div>
</div>