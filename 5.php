<style> 
    *{
    /*重置浏览器默认样式*/
    margin: 0;   /*外边距*/
    padding: 0;  /*内边距*/
    }

    a{
        text-decoration: none;  /*去掉超链接的下划线*/
        color: blueviolet;
        background-color: cadetblue;
        border-radius: 5px;
    }
    p{
      color: rebeccapurple;  
    }
    a:hover{
        background-color: cadetblue;
        color: aquamarine;
        border-radius: 5px;
    }
    
    .h5{
        /*background-color: coral;*/
        /*text-align:center; */
        position: relative;
        color: rebeccapurple;
        padding: 30px 0 0 0;
    }
    
    .div5{
        width: 100%;
        height: 700px;
        background: url(dongman.jpg);
    }
</style>
<div class="div5">
<h1 class="h5">Welcome to your blog.</h1>
<br>
<p>Please <a href="1.php">login</a> !</p>
</div>