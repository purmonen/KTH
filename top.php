<!DOCTYPE html>
<html lang="en">
<head>
  <title>Sami Purmonen</title>
  <meta charset="utf-8">
  <meta name="author" content="Sami Purmonen">
  <meta name="description" content="Sami Purmonen is a student and blogger at KTH." />
  <link rel="stylesheet" type="text/css" href="<?php echo CSS_ROOT; ?>/style.css">
  <link rel="stylesheet" type="text/css" href="<?php echo CSS_ROOT; ?>/blog.css">
  <script type="text/javascript" src="<?php echo JS_ROOT; ?>/scripts.js"></script>
  <script type="text/javascript" src="http://code.jquery.com/jquery-1.10.2.min.js"></script>
  <script>
  $(document).ready(function () {
    var page  = window.location.pathname.match(/\/(\w+)\/$/)[1];
    var link = $('#' + page + '-link');
    if (!link.length) {
      link = $('#home-link');
    }
    link.addClass('selected');
  });
  </script>
  <?php
  if (LOGGED_IN) {
      echo '<style>#wrap {margin-top: 30px}</style>';
  }
  ?>
<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-42807434-2', 'kth.se');
  ga('send', 'pageview');

</script>
</head>
<body>
<?php
if (LOGGED_IN) {
echo <<<_END
<div id="control-wrap">
    <div id="control">
    <a href="$SITE_ROOT/newpost/" id="newpost-link">New post</a>
    <a href="$SITE_ROOT/logout/" id="logout-link">Log out</a>
    </div>
</div>
_END;
}  
?>
<div id="wrap">

  <div id="header">
<?php
if (!LOGGED_IN) {
    echo '<div id="loggedin"><a class="block-link" href="' . SITE_ROOT . '/login/">Login</a></div>';
}
?>
    <div id="logo">
      <h1>Sami Purmonen</h1>
    </div>
    <img src="<?php echo IMG_ROOT; ?>/cool.png" height="100" width="1000" alt="">
  </div>
  <div id="left">
  <div class="nav">
    <h2 class="menu-header">Menu</h2>
    <a href="<?php echo SITE_ROOT; ?>" id="home-link">Home</a>
    <a href="<?php echo SITE_ROOT; ?>/blog/" id="blog-link">Blog</a>
    <a href="<?php echo SITE_ROOT; ?>/portfolio/" id="portfolio-link">Portfolio</a>
    <a href="<?php echo SITE_ROOT; ?>/contact/" id="contact-link">Contact me</a>
  </div>
  <div class="nav links">
    <h2 class="menu-header">Links</h2>
    <a href="http://www.kth.se">KTH</a>
  </div>
  </div>
  
