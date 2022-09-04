<?php

session_start();

if(!$_SESSION['logged_in']){
    header('Location: error.html');
    exit();
} else{
    $logbutton = 'Logout';
};

extract($_SESSION['userData']);
extract($_SESSION['serversInfo']);

$mysqli = new mysqli("212.192.29.161","antoine","fuiv5jul0evgMDK0", "s61868_NayoDB");

$id = $discord_id . '881215323586580540';

$bank_fetch = $mysqli->query("SELECT * FROM Economy WHERE ID = $id");
if (mysqli_num_rows($bank_fetch) > 0) {
    $bank = '✅';
} else {
    $bank = '❌';
}

$avatar_url = "https://cdn.discordapp.com/avatars/$discord_id/$avatar.png";

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
            <li style="float:right;"><a href="logout.php"><?php echo $logbutton;?></a></li>
        </ul>
    </div>
    <div class="profile">
        <img class="avatar" height="140" width="140" src="<?php echo $avatar_url;?>"/>
        <p class="username"><?php echo $name;?>#<?php echo $digit;?></p>
        <br>
        <br>
        <div class="desc">
            <p style="text-align: center;font-size: 17px;">Number of your servers possessing Nayo : <?php echo $bot_is_in;?></p>
            <p style="text-align: center;font-size: 17px;">Member of Nayo SandBox : <?php echo $in_nayo_sandbox;?></p>
            <p style="text-align: center;font-size: 17px;">Member of Nayo Team : <?php echo $is_on_team;?></p>
            <p style="text-align: center;font-size: 17px;">Bank Account Activated on Nayo SandBox : <?php echo $bank;?></p>
        </div>
    </div>
</body>
</html>    