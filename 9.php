<!--从数据库中提取数据-->
<style>
    *{
        margin:0;
        padding:0;
    }
    .img9{
        position: relative;
        width: 100%;
        height: 700px;
        background: url(bixin.jpg);
        color: darkorchid;
    }
     a{
        text-decoration: none;  /*去掉超链接的下划线*/
        color: blueviolet;
    }
    a:hover{
        background-color: cadetblue;
        color: aquamarine;
        border-radius: 5px;
    }    
</style>
<div class="img9">
<h1>Welcome to the Coffee Talk Blog</h1>
 
<?php
    require('mysql_connect.php');
    
    $sql="select *from mysql_text";
    $result=mysql_query($sql);
    if(!$result){  
            echo"<span class='span'>您还未发表文章！<a href='7.php'>点击这里开始发表~</a></span>";    
        } 
    while($result_row = mysql_fetch_row($result)){
    echo '<a href="10.php">'.$result_row[2].'</a><br>';
}  //获取并显示结果
  mysql_close($conn);
echo'<br><hr><br>'; 
echo '<a href="6.php" class="a4">Home</a> || Logout';  
    
?>
</div>