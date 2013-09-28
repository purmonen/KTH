<div id="main-left">
    <form id="newpost" action="" method="post">
        <h2>New post</h2>
        <?php
        connect_db();
        $query = "select * from blog_post where id=$_GET[id]";
        $res = pg_query($query);
        $post = pg_fetch_all($res);
        $post = $post[0];
        ?>
        <p>
        <label for="title">Title</label>
        <input type="text" name="title" id="title" value="<?php echo unescape_db($post['title']); ?>">
        <input type="hidden" name="id" value="<?php echo $post['id'] ?>">
        </p>
        <p>
        <label for="content">Content</label>
        <textarea type="text" name="content" id="content"><?php echo unescape_db($post['content']); ?></textarea>
        </p>
        <button type="submit">Enter</button>
    </form>
</div>
<script>
    document.getElementById('title').focus();    
</script>