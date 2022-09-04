<?php

session_start();

if(!$_SESSION['logged_in']){
    $logbutton = 'Login';
    $logredirect = 'init-oauth.php';
} else{
    $logbutton = 'Logout';
    $logredirect = 'logout.php';
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="css/style.css">
    <title>Nayo Discord Bot</title>
    <meta content="Nayo, Discord, Bot, Anime, Hentai, Useful" name="keywords">
    <meta content="Website of Nayo Discord Bot, The Multipurpose Bot that make your server more lively with Anime, Waifu, Administration, Moderation, Hentai, Genshin Impact, Fun and More Commands !" name="description">
    <link href="imgs/avatar_crop.png" rel="icon">
    <meta name="author" content="Makoto">
    <meta name="theme-color" content="#c83430">
    <meta property="og:image" content="imgs/avatar_crop.png">
    <meta property="twitter:image" content="imgs/avatar_crop.png">
    <meta property="og:title" content="Nayo Discord Bot"/>
    <meta property="og:type" content="website"/>
    <meta property="og:description" content="Website of Nayo Discord Bot"/>
    <meta property="og:url" content="https://nayobot.moe"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
</head>
<body>
    <!--<div class="loader fondu">
        <img src="imgs/avatar_anim.gif" class="preloader">
    </div>-->
    <div class="menu">
        <ul>
            <img class="menuimgs" src="imgs/avatar_crop.png" width="50" height="50">
            <li><a href="index.php">Home</a></li>
            <li><a href="commands.php">Commands</a></li>
            <li><a href="https://docs.nayobot.moe">Documentation</a></li>
            <li><a href="staff.php">Staff</a></li>
            <li><a href="support.php">Support Nayo</a></li>
            <li style="float:right;"><a href="profile.php">Profile</a></li>
            <li style="float:right;"><a href="<?php echo $logredirect?>"><?php echo $logbutton;?></a></li>
        </ul>
    </div>
    <div class="error-404">
        <img class="logo2" src="imgs/avatar_crop.png" width="250" height="250">
        <br>
        <br>
        <h1>Error 503<h1>
        <p>Internal Server Error</p>
        <p>Try refreshing this page or check the support server</p>
        <br>
        <a style="text-decoration: none;" href="https://nayobot.moe/test/index.php">
            <p>Back to Home</p>
        </a>
    </div> 
</body>
</html>