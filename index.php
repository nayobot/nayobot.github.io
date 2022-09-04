<!--PHP Main File of Nayo Discord Bot Website-->
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
    <div class="presentation">
        <img class="logo" src="imgs/avatar_crop.png" width="350" height="350">
        <br>
        <br>
        <h1>Nayo Discord Bot</h1>
        <p>Multipurpose Bot Based on Anime with lot's of<br>Fun, Cool and Useful Commands : Anime, Hentai,<br>Administration, Waifu and More...</p>
        <br>
        <br>
        <br>
        <br>
        <hr size="6" width="30%" color="#c83430" style="border-radius: 10px;">  
        <br>
        <br>
        <br>
        <br>
        <br>
        <h3>🌸 Waifu System</h3>
        <div class="pres">
            <br>
            <h3>New !</h3>
            <h4>&nbsp;&nbsp;&nbsp;&nbsp;</h4>
            <h4>Create a Bank Account and start <br>buy and collect Waifu ✿>ω< <br>
See your collection and get<br>extra gems and Cukeni every 30<br>Minutes by meeting a Waifu !</h4>
            <h4>&nbsp;&nbsp;&nbsp;&nbsp;</h4>
            <img class="mover-pre" src="https://nayobot.moe/img/waifu_example.jpg">
        </div>
        <br>
        <br>
        <hr size="4" width="20%" color="#c83430" style="border-radius: 10px;">
        <br>
        <br>
        <h3>📻 Anime Radio</h3>
        <div class="pres_3">
            <br>
            <h3>New !</h3>
            <h4>&nbsp;&nbsp;&nbsp;&nbsp;</h4>
            <h4>Listen to Anime Radio diffusing<br>Openings, Endings, Jpop,<br>JMsic, Kpop and Vocaloid !</h4>
            <h4>&nbsp;&nbsp;&nbsp;&nbsp;</h4>
            <img class="mover-pre" src="https://nayobot.moe/img/radio_example.jpg">
        </div>
        <br>
        <br>
        <hr size="4" width="20%" color="#c83430" style="border-radius: 10px;">
        <br>
        <br>
        <h3>⭐ Genshin Impact</h3>
        <div class="pres_3">
            <br>
            <h3>New !</h3>
            <h4>&nbsp;&nbsp;&nbsp;&nbsp;</h4>
            <h4>Introducing Genshin Impact Commands !<br>Search Characters Informations,<br>Artifacts Informations and more...</h4>
            <h4>&nbsp;&nbsp;&nbsp;&nbsp;</h4>
            <img class="mover-pre" src="https://nayobot.moe/img/genshin_example.jpg">
        </div>
        <br>
        <br>
        <hr size="4" width="20%" color="#c83430" style="border-radius: 10px;">
        <br>
        <br>
        <h3>🔖 Anime Features</h3>
        <div class="pres_3">
            <br>
            <h4>Create UA Card from My Hero Academia,<br>make your Yu-Gi-Oh card, get your<br>wanted poster and more...</h4>
            <h4>&nbsp;&nbsp;&nbsp;&nbsp;</h4>
            <img class="mover-pre" src="https://nayobot.moe/img/card_example.jpg">
        </div>
        <br>
        <br>
        <hr size="4" width="20%" color="#c83430" style="border-radius: 10px;">
        <br>
        <br>
        <h3>📋 Anime Informations</h3>
        <div class="pres_2">
            <br>
            <h4>Search Anime Titles and get<br>informations like duration, episodes,<br>community rating a description and more...</h4>
            <h4>&nbsp;&nbsp;&nbsp;&nbsp;</h4>
            <img class="mover-pre" src="https://nayobot.moe/img/search_example.jpg">
        </div>
        <br>
        <br>
        <hr size="4" width="20%" color="#c83430" style="border-radius: 10px;">
        <br>
        <br>
        <h3>😎 Anime Reactions</h3>
        <div class="pres_3">
            <br>
            <h4>React with Fun and Cool<br>Gifs like Angry, Bang,<br>Kill, Cry, Happy and More...</h4>
            <h4>&nbsp;&nbsp;&nbsp;&nbsp;</h4>
            <img class="mover-pre" src="https://nayobot.moe/img/reactions_example.jpg">
        </div>
        <br>
        <br>
        <hr size="4" width="20%" color="#c83430" style="border-radius: 10px;">
        <br>
        <br>
        <h3>🔞 Anime NSFW</h3>
        <div class="pres_3">
            <br>
            <h4 id="spoiler-nsfw">See and Send (NSFW Channels Only) :<br>Hentai, Yaoi, Yuri, Pussy,<br>Lewd, Boobs, Blowjob and more<br>Anime NSFW Images... >///<</h4>
            <h4>&nbsp;&nbsp;&nbsp;&nbsp;</h4>
            <img id="spoiler-nsfw" class="mover-pre" src="https://nayobot.moe/img/nsfw_example.jpg">
        </div>
        <br>
        <br>
        <hr size="4" width="20%" color="#c83430" style="border-radius: 10px;">
        <br>
        <br>
        <h3>🧹 Management</h3>
        <div class="pres_3">
            <br>
            <h4>Keep an eye on your server and<br>manage your server perfectly<br>with Nayo, clone channels, delete it,<br>create other, view Server Stats and More...</h4>
            <h4>&nbsp;&nbsp;&nbsp;&nbsp;</h4>
            <img class="mover-pre" src="https://nayobot.moe/img/admin_example.jpg">
        </div>
        <br>
        <br>
        <hr size="4" width="20%" color="#c83430" style="border-radius: 10px;">
        <br>
        <br>
        <h3>⚖️ Administration and Moderation</h3>
        <div class="pres_3">
            <br>
            <h4>Ban, Kick, Warn, Mute,... members<br>on your server ! With Nayo you can<br>keep an eye on your Members and<br>make sure nobody cause troubles</h4>
            <h4>&nbsp;&nbsp;&nbsp;&nbsp;</h4>
            <img class="mover-pre" src="https://nayobot.moe/img/modo_example.jpg">
        </div>
    </div>
</body>
</html>