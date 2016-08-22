<meta charset="utf-8">
<style type="text/css"> 
    *{
    /*重置浏览器默认样式*/
    margin: 0;   /*外边距*/
    padding: 0;  /*内边距*/
    }
    .img_m{
        position: relative;
        width: 100%;
        height: 700px;
        background: url(fengye.jpg);
    }
    .span{
        position: relative;
        margin:150px;
        top:150px;  
    }  
</style>
<div class="img_m">
<?php
require('mysql_connect.php');
 
$title=isset($_POST['title']);
if($title != null){
    $title=$_POST['title'];
}
$content=isset($_POST['content']);
if($content !=null){
    $content=$_POST['content'];
}
    
if($title=="" || $content==""){  
    echo ("<span class='sp'>标题或内容不能为空(⊙o⊙)哦~</span><br>");
    echo"<br><span class='sp'><strong><a href='7.php' class='a1'>点击这里重新输入吧~</a></strong></span>";
}
else{   
    $sql="insert into mysql_text values('null','$title','$content')";  
    $result=mysql_query($sql);  
    if(!$result){  
        echo"<span class='sp'>发表不成功！";  
        echo"<span class='sp'><a href='7.php' class='a'>返回</a></span>";  
    }  
    else{   
        echo"<span class='span'>发表成功! <a href='7.php' class='a'>点击进入，再写一篇~</a></span><br>";
        echo"<BR><span class='span'><a href='9.php' class='a'>点击这里查看已发表文章~</a></span><br>"; 
    }  
}

?>
</div>