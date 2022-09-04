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
    <script type="text/javascript" src="js/script.js"></script>
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
    <div class="c-table-header">
        <h3>🕹️ Commands List</h3>
        <p>* : Optional Arguments</p>
        <p>:3 Prefix is on maintenance, consider using only slash commands</p>
    </div>
    <center>
        <input type="text" id="c-table-input" onkeyup="SearchInput()" placeholder="Search a command..." title="Type a Command Name">
    </center>
    <div class="c-table">
        <table id="c-table-style">
            <tr>
                <th>Name</th>
                <th>Description</th>
                <th>Command Line</th>
                <th>Category</th>
            </tr>
            <tr>
              <td>Help</td>
              <td>🆘 Send Help Menu (Important Links like Documentation and More...), If you need more Help please go to the Support Server</td>
              <td>/help or :3help</td>

              <td>Main</td>
            </tr>
            <tr>

              <td>Anime Search</td>
              <td>🌐 Search Anime Informations by Name</td>
              <td>/anime_search name or keyword</td>

              <td>Fun</td>
            </tr>
            <tr>

              <td>Anime Quiz</td>
              <td>🤔 Start a Anime Quiz, guess the Anime by just a description and a Image</td>
              <td>/anime_quiz</td>

              <td>Fun</td>
            </tr>
            <tr>

              <td>Genshin Characters</td>
              <td>🎮 Get informations about your favorites characters of Genshin Impact !</td>
              <td>/genshin_characters</td>

              <td>Games</td>
            </tr>
            <tr>

              <td>Genshin Artifacts</td>
              <td>🌺 Get informations about artifacts of Genshin Impact</td>
              <td>/genshin_artifacts</td>

              <td>Games</td>
            </tr>
            <tr>

              <td>Genshin Weapons</td>
              <td>🔫 Get informations about weapons of Genshin Impact</td>
              <td>/genshin_weapons</td>

              <td>Games</td>
            </tr>
            <tr>

              <td>Blush</td>
              <td>😳 Send a Blush Anime Gif Reaction</td>
              <td>/blush</td>

              <td>Reactions</td>
            </tr>
            <tr>

              <td>Kiss</td>
              <td>😘 Send a Kiss Anime Gif Reaction with mention a member</td>
              <td>/kiss @member</td>

              <td>Reactions</td>
            </tr>
            <tr>

              <td>Hug</td>
              <td>🤗 Send a Hug Anime Gif Reaction with mention a member</td>
              <td>/hug @member</td>

              <td>Reactions</td>
            </tr>
            <tr>

              <td>Slap</td>
              <td>👋 Send a Slap Anime Gif Reaction with mention a member</td>
              <td>/slap @member</td>

              <td>Reactions</td>
            </tr>
            <tr>

              <td>Kill</td>
              <td>🔪 Send a Kill Anime Gif Reaction with mention a member</td>
              <td>/kill @member</td>

              <td>Reactions</td>
            </tr>
            <tr>

              <td>Pat</td>
              <td>🥺 Send a Pat Anime Gif Reaction with mention a member</td>
              <td>/pat @member</td>

              <td>Reactions</td>
            </tr>
            <tr>

              <td>Disgusted</td>
              <td>🤮 Send a Disgusted Anime Gif Reaction</td>
              <td>/disgusted</td>

              <td>Reactions</td>
            </tr>
            <tr>

              <td>Cry</td>
              <td>😭 Send a Cry Anime Gif Reaction</td>
              <td>/cry</td>

              <td>Reactions</td>
            </tr>
            <tr>

              <td>Angry</td>
              <td>😡 Send a Angry Anime Gif Reaction</td>
              <td>/angry</td>

              <td>Reactions</td>
            </tr>
            <tr>

              <td>Shocked</td>
              <td>😱 Send a Shocked Anime Gif Reaction</td>
              <td>/shocked</td>

              <td>Reactions</td>
            </tr>
            <tr>
              <td>Eat</td>
              <td>🍴 Send a Eat Anime Gif Reaction with mention a member</td>
              <td>/eat @member</td>

              <td>Reactions</td>
            </tr>
            <tr>

              <td>Dab</td>
              <td>😎 Send a Dab Anime Gif Reaction</td>
              <td>/dab</td>

              <td>Reactions</td>
            </tr>
            <tr>

              <td>Wink</td>
              <td>😉 Send a Wink Anime Gif Reaction with mention a member</td>
              <td>/wink @member</td>

              <td>Reactions</td>
            </tr>
            <tr>

              <td>Poke</td>
              <td>👉 Send a Poke Anime Gif Reaction with mention a member</td>
              <td>/poke @member</td>

              <td>Reactions</td>
            </tr>
            <tr>

              <td>Reaction Random</td>
              <td>🎲 Send a Anime Reaction of your choice with select a random user</td>
              <td>/(Anime Reaction)_random</td>

              <td>Reactions</td>
            </tr>
            <tr>

              <td>Hentai</td>
              <td>🔞 Send a Hentai Random Image</td>
              <td>/hentai</td>

              <td>Anime NSFW</td>
            </tr>
            <tr>

              <td>Yaoi</td>
              <td>🔞 Send a Yaoi Random Image</td>
              <td>/yaoi</td>

              <td>Anime NSFW</td>
            </tr>
            <tr>

              <td>Yuri</td>
              <td>🔞 Send a Yuri Random Image</td>
              <td>/yuri</td>

              <td>Anime NSFW</td>
            </tr>
            <tr>

              <td>Lewd</td>
              <td>🔞 Send a Lewd Random Image</td>
              <td>/lewd</td>

              <td>Anime NSFW</td>
            </tr>
            <tr>

              <td>Boobs</td>
              <td>🔞 Send a Boobs Random Image</td>
              <td>/boobs</td>

              <td>Anime NSFW</td>
            </tr>
            <tr>

              <td>Pussy</td>
              <td>🔞 Send a Pussy Random Image</td>
              <td>/pussy</td>

              <td>Anime NSFW</td>
            </tr>
            <tr>

              <td>BlowJob</td>
              <td>🔞 Send a Blowjob Random Image</td>
              <td>/blowjob</td>

              <td>Anime NSFW</td>
            </tr>
            <tr>

              <td>Cum</td>
              <td>🔞 Send a Cum Random Image</td>
              <td>/cum</td>

              <td>Anime NSFW</td>
            </tr>
            <tr>

              <td>Search</td>
              <td>📸 Search a image on the web</td>
              <td>/search (image)</td>

              <td>Events and Fun</td>
            </tr>
            <tr>

              <td>Wanted</td>
              <td>🔎 Transform Your or a Member Pdp into Wanted Pdp</td>
              <td>/wanted @member (Optional)</td>

              <td>Events and Fun</td>
            </tr>
            <tr>

              <td>Yu-Gi-Oh Card</td>
              <td>🃏 Transform Your or a Member Pdp into Yu-Gi-Oh Card</td>
              <td>/yugioh @member (Optional)</td>

              <td>Events and Fun</td>
            </tr>
            <tr>

              <td>Invert</td>
              <td>🎨 Invert Your or a Member Pdp</td>
              <td>/invert @member (Optional)</td>

              <td>Events and Fun</td>
            </tr>
            <tr>

              <td>EightBall</td>
              <td>🎱 Ask a Question and get a Answer</td>
              <td>/eightball (question)</td>

              <td>Events and Fun</td>
            </tr>
            <!--<tr>

              <td>Chinese</td>
              <td>🈵 Transform your sentence into chinese</td>
              <td>:3chinese (sentence)</td>

              <td>Events and Fun</td>
            </tr>-->
            <tr>

              <td>Heads or Tails</td>
              <td>🪙 Start a Heads or Tails</td>
              <td>/headsortails</td>

              <td>Events and Fun</td>
            </tr>
            <tr>

              <td>Dice</td>
              <td>🎲 Start a Dice Throw</td>
              <td>:3dice</td>

              <td>Events and Fun</td>
            </tr>
            <tr>

              <td>Chifumi</td>
              <td>✂️ Start a Chifumi</td>
              <td>:3chifumi</td>

              <td>Events and Fun</td>
            </tr>
            <tr>

              <td>RateGay</td>
              <td>🌈 Guess your Gay Percentage</td>
              <td>/rategay</td>

              <td>Events and Fun</td>
            </tr>
            <tr>

              <td>RateCool</td>
              <td>😎 Guess your Cool Percentage</td>
              <td>/ratecool</td>

              <td>Events and Fun</td>
            </tr>
            <tr>

              <td>RateGeek</td>
              <td>👾 Guess your Geek Percentage</td>
              <td>/rategeek</td>

              <td>Events and Fun</td>
            </tr>
            <tr>

              <td>RateLove</td>
              <td>❤️ Guess The Love Percentage<br>between Two Members</td>
              <td>/ratelove @member1 @member2</td>

              <td>Events and Fun</td>
            </tr>
            <tr>
              <td>🪙 Economy System</td>
              <td>Economy System is Off right now but don't worry, we work on it !</td>
              <td>Soon...</td>

              <td>Economy</td>
            </tr>
            <tr>
              <td>🆙 Leveling System</td>
              <td>XP System is Off right now but don't worry, we work on it !</td>
              <td>Soon...</td>

              <td>Leveling</td>
            </tr>
            <tr>

              <td>Privacy</td>
              <td>🔒 Display The Nayo Privacy Policy</td>
              <td>/privacy</td>

              <td>Informations</td>
            </tr>
            <tr>

              <td>Ping</td>
              <td>🏓 Show Ping Latence of Nayo</td>
              <td>/ping</td>

              <td>Informations</td>
            </tr>
            <tr>

              <td>Nayo Informations</td>
              <td>🗺️ Display The Main Informations about Nayo</td>
              <td>/nayo</td>

              <td>Informations</td>
            </tr>
            <tr>

              <td>Owner</td>
              <td>👑 Display The Owner of the Server</td>
              <td>/server_owner</td>

              <td>Informations</td>
            </tr>
            <tr>

              <td>Server Stats</td>
              <td>🗄️ Display The Main Informations about a Server</td>
              <td>/server_info</td>

              <td>Informations</td>
            </tr>
            <tr>

              <td>Icon</td>
              <td>👤 Show your Avatar or a Member Avatar</td>
              <td>/icon @member (Optional)</td>

              <td>Informations</td>
            </tr>
            <tr>
              <td>Profile</td>
              <td>👥 Display your Profile Informations</td>
              <td>/profile</td>

              <td>Informations</td>
            </tr>
            <tr>

              <td>Ban</td>
              <td>🛠️ Ban a Member on the Server</td>
              <td>/ban @member (Reason) (Optional)</td>

              <td>Administration and Moderation</td>
            </tr>
            <tr>
              <td>Kick</td>
              <td>⏏️ Kick a Member on the Server</td>
              <td>/kick @member (Reason) (Optional)</td>

              <td>Administration and Moderation</td>
            </tr>
            <tr>

              <td>Warn</td>
              <td>⚠️ Warn a Member on the Server and add his name to Warn List</td>
              <td>/warn @member</td>

              <td>Administration and Moderation</td>
            </tr>
            <tr>

              <td>Warn List</td>
              <td>📝 Display The Warn List of a member</td>
              <td>/warnings_list @member</td>

              <td>Administration and Moderation</td>
            </tr>
            <tr>

              <td>Warn Reset</td>
              <td>♻️ Reset the Warns of a Member</td>
              <td>/warnings_clear @member</td>

              <td>Administration and Moderation</td>
            </tr>
            <tr>

              <td>Mute</td>
              <td>🔇 Mute a Member</td>
              <td>/mute @member (Reason) (Optional)</td>

              <td>Administration and Moderation</td>
            </tr>
            <tr>

              <td>Unmute</td>
              <td>🔊 Unmute a Member</td>
              <td>/unmute @member (Reason) (Optional)</td>

              <td>Administration and Moderation</td>
            </tr>
            <tr>

              <td>Lock</td>
              <td>🔒 Lock a Channel (Mean that the channel is inaccessible for @everyone)</td>
              <td>/lock #Channel</td>

              <td>Administration and Moderation</td>
            </tr>
            <tr>

              <td>Unlock</td>
              <td>🔓 Unlock a Channel Locked</td>
              <td>/unlock #Channel</td>

              <td>Administration and Moderation</td>
            </tr>
            <tr>

              <td>NickName</td>
              <td>💱 Change the nickname of a member</td>
              <td>/nickname @member (New NickName)</td>

              <td>Administration and Moderation</td>
            </tr>
            <tr>

              <td>Slow Mode</td>
              <td>🛌 Activate the Slow Mode on the Channel where the command is executed</td>
              <td>/slowmode (Duration Between Messages)</td>

              <td>Administration and Moderation</td>
            </tr>
            <tr>

              <td>Stop Slow Mode</td>
              <td>✋ Disable the Slow Mode on the Channel where the command is executed</td>
              <td>/slowmode_stop</td>

              <td>Administration and Moderation</td>
            </tr>
            <tr>

              <td>Clear Messages</td>
              <td>🗑️ Delete the number of messages you want on the Channel where the command is executed</td>
              <td>:3clear (Number of Messages)</td>

              <td>Administration and Moderation</td>
            </tr>
            <tr>

              <td>Purge Channel</td>
              <td>🚮 Delete all the Messages on the Channel</td>
              <td>/purge</td>

              <td>Administration and Moderation</td>
            </tr>
            <tr>

              <td>Embed</td>
              <td>📤 Send a Custom Embed (Parameters like : description, thumbnail, image can be set)</td>
              <td>/embed</td>

              <td>Administration and Moderation</td>
            </tr>
            <tr>

              <td>Voice Channel</td>
              <td>📢 Create a Voice Channel with the Name you want</td>
              <td>/channel_voice (Name You Want)</td>

              <td>Administration and Moderation</td>
            </tr>
            <tr>

              <td>Text Channel</td>
              <td>👁️‍🗨️ Create a Text Channel with the Name you want</td>
              <td>/channel_text (Name You Want)</td>

              <td>Administration and Moderation</td>
            </tr>
            <tr>

              <td>Delete Channel</td>
              <td>🗑️ Delete a Text Channel</td>
              <td>/channel_delete (Name)</td>

              <td>Administration and Moderation</td>
            </tr>
            <tr>

              <td>Create Role</td>
              <td>🎭 Create the role with the name you want</td>
              <td>/roles_create (Name You Want)</td>

              <td>Administration and Moderation</td>
            </tr>
            <tr>

              <td>Delete Role</td>
              <td>🚮 Delete a Role</td>
              <td>/roles_delete (Name You Want)</td>

              <td>Administration and Moderation</td>
            </tr>
            <tr>

              <td>Show Role</td>
              <td>📋 Show the roles of the server</td>
              <td>/roles_display</td>

              <td>Administration and Moderation</td>
            </tr>
            <tr>

              <td>Create Category</td>
              <td>📁 Create a Category with the Name you want</td>
              <td>/category (Name You Want)</td>

              <td>Administration and Moderation</td>
            </tr>
            <tr>

              <td>Delete Category</td>
              <td>📁 Delete a Category</td>
              <td>/category_delete (Name)</td>

              <td>Administration and Moderation</td>
            </tr>
            <tr>

              <td>Log Nayo Commands</td>
              <td>📦 Log who use a Nayo Command on the server</td>
              <td>/logs</td>

              <td>Administration and Moderation</td>
            </tr>
            <tr>

              <td>Clone a Channel</td>
              <td>2️⃣ Clone a Channel and delete the previous</td>
              <td>/clone (Name)</td>

              <td>Administration and Moderation</td>
            </tr>
            <tr>

              <td>Set Welcome Image</td>
              <td>👋 Set a Welcome Image send in the channel of your choice to new member</td>
              <td>/welcome_enable #Channel</td>

              <td>Administration and Moderation</td>
            </tr>
            <tr>

              <td>Set Farewell Image</td>
              <td>👋 Set a Farewell Image send in the channel of your choice to new member</td>
              <td>/farewell_enable #Channel</td>

              <td>Administration and Moderation</td>
            </tr>
            <tr>

              <td>Reset Farewell Image</td>
              <td>⛔ Disable the Farewell Image</td>
              <td>/farewell_disable</td>

              <td>Administration and Moderation</td>
            </tr>
            <tr>

              <td>Reset Welcome Image</td>
              <td>⛔ Disable the Welcome Image</td>
              <td>/welcome_disable</td>

              <td>Administration and Moderation</td>
            </tr>
        </table>
    </div>
</body>
</html>