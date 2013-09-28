<!doctype html>
<html>
<head>
    <title>Sami Purmonen</title>
    <meta charset="utf-8">
    <link rel="stylesheet" type="text/css" href="<?php echo CSS_ROOT; ?>/login.css">
    <script>
    window.onload = function() {
        document.getElementById('username').focus();
    }
    </script>
</head>    
<body>
<fieldset>
    <legend>Log in</legend>
    <form id="login-form" action="" method="post">
        <label for="username">Username</label>
        <input type="text" name="username" id="username">
        <label for="password">Password</label>
        <input type="password" name="password" id="password">
        <button type="submit">Enter</button>
    </form>
</fieldset>
</body>
</html>