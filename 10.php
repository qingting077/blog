<style>
    *{
        margin:0;
        padding:0;
    }
    .img10{
        position: relative;
        width: 100%;
        height: 700px;
        background: url(lanse.jpg);
        color: darkorchid;
    }
         a{
        text-decoration: none;  /*去掉超链接的下划线*/
        color: blue;
    }
    a:hover{
        background-color: cadetblue;
        color: aquamarine;
        border-radius: 5px;
    }
    span{
        color: black;
    }
   
</style>
<div class="img10">
<h1>Welcome to the Coffee Talk Blog</h1>
<br><hr><br>
<?php
require('mysql_connect.php');
$sql='select *from mysql_text';
    $result=mysql_query($sql);
    if(!$result){  
            echo"<span class='span'>您还未发表文章！<a href='7.php'>点击这里开始发表~</a></span>";    
        } 
    while($result_row = mysql_fetch_row($result)){
        echo $result_row[1].'<br>';
        //echo '<br>';
        echo $result_row[2].'<br><br>';
}  //获取并显示结果
  mysql_close($conn);
    echo'<br><br>';
    echo '<span>返回继续发表文章: <a href="7.php">点击这里进入~</a></span>';
?>
 </div>
    