<div id="main-left">
  <div class="section">

<?php

$index = 0;
if (!$posts) {
  echo 'No posts';
} else {
foreach ($posts as $post) {
    $last = '';
    if ($index === sizeof($posts)-1) {
        $last = ' last-post';
    }
    $title = stripslashes($post['title']);
    $content = stripslashes($post['content']);
    $time = substr($post['time'], 0, 16);
    echo <<<_END
<div class="post $last">
  <div class="post-header">
    <h2><a href="$SITE_ROOT/blog/$post[id]/">$title</a></h2>
    <p class="datetime">Posted by <span class="author">Sami Purmonen</span> on $time</p>
  </div>
  <p class="content">$content</p>
_END;
    if (LOGGED_IN) {
        echo <<<_END
<form action="$SITE_ROOT/deletepost/" method="get" class="delete">
    <input type="hidden" name="id" value="$post[id]">
    <input type="submit" value="Delete" onclick="return confirm('Are you sure?')">
</form>
<form action="$SITE_ROOT/editpost/" method="get" class="update">
    <input type="hidden" name="id" value="$post[id]">
    <input type="submit" value="Edit">
</form>
_END;
    }
    echo '</div>';
    $index++;
}
}
?>

  </div>
</div>
<div id="main-right">
  <div class="section">
    <h2>Confession</h2>
    <p>This blog probably won't be too interesting. It's just for show-off!</p>
  </div>
  <div class="section">
    <h2>Posts</h2>
<?php
foreach ($yearMonths as $yearMonth) {
    $year = $yearMonth['year'];
    $month = $yearMonth['month'];
    $monthString = $yearMonth['monthString'];
    echo <<<_END
    <a class="post-link" href="$SITE_ROOT/blog/$year/$month/">$monthString $year</a>
_END;
}
?>
</div>
</div>