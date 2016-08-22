<style>
    *{
        margin:0;
        padding:0;
    }
    .img7{
        position: relative;
        width: 100%;
        height: 700px;
        background: url(bixin.jpg);
    }
</style>
<div class="img7">
<h1>Welcome to the Coffee Talk Blog</h1>
<form action="modify_posts.php" method="post">
    <label>
        Title: <input type="text" name="title" placeholder="请输入您的标题">
    </label>  <br><br>
    <label>
        Body: <textarea name="content" cols="40" rows="4" placeholder="输入您要发表的内容~"></textarea>  
    </label><br><br>
    <input type="submit" name="submit" value="post">
</form><br>
<hr>
Home || Logout
    </div>