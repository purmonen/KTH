<div id="main-left">
    <form id="newpost" action="" method="post">
        <h2>New post</h2>
        <?php
        if (isset($_GET['id'])) {
            echo '<input type="hidden" name="id" value="' . $_GET['id'] . '">';
        }
        ?>
        <p>
        <label for="title">Title</label>
        <input type="text" name="title" id="title" value="<?php echo $data['title'] ?>">
        </p>
        <p>
        <label for="content">Content</label>
        <textarea type="text" name="content" id="content"><?php echo $data['content'] ?></textarea>
        </p>
        <button type="submit">Enter</button>
    </form>
</div>
<script>
    document.getElementById('title').focus();    
</script>