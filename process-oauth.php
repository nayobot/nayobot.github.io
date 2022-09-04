<?php

if(!isset($_GET['code'])){
    echo 'Please login first before accessing this page';
    exit();
}

$discord_code = $_GET['code'];

$payload = [
    'code'=>$discord_code,
    'client_id'=>'879082395750531093',
    'client_secret'=>'XOZiALYiA5_AfeX3sjRQZT8unlsX3cjO',
    'grant_type'=>'authorization_code',
    'redirect_uri'=>'https://nayobot.moe/test/process-oauth.php',
    'scope'=>'identify%20guilds',
];

$payload_string = http_build_query($payload);
$discord_token_url = "https://discordapp.com/api/oauth2/token";

$ch = curl_init();

curl_setopt($ch, CURLOPT_URL, $discord_token_url);
curl_setopt($ch, CURLOPT_POST, true);
curl_setopt($ch, CURLOPT_POSTFIELDS, $payload_string);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);

$result = curl_exec($ch);

if(!$result){
    echo curl_error($ch);
}

$result = json_decode($result,true);
$access_token = $result['access_token'];

$discord_users_url = "https://discordapp.com/api/users/@me";
$header = array("Authorization: Bearer $access_token", "Content-Type: application/x-www-form-urlencoded");

$ch = curl_init();
curl_setopt($ch, CURLOPT_HTTPHEADER, $header);
curl_setopt($ch, CURLOPT_URL, $discord_users_url);
curl_setopt($ch, CURLOPT_POST, false);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);

$result = curl_exec($ch);

$result = json_decode($result, true);

session_start();

$_SESSION['logged_in'] = true;
$_SESSION['userData'] = [
    'name'=>$result['username'],
    'discord_id'=>$result['id'],
    'avatar'=>$result['avatar'],
    'digit'=>$result['discriminator'],
    'hexacolor'=>$result['accent_color'],
];

$discord_guild_bot_url = 'https://discord.com/api/users/@me/guilds';

$bot_token = 'ODc5MDgyMzk1NzUwNTMxMDkz.YSKjRw.55bWENinbvtV2GUACkAG5Ks4Afw';

$header2 = array("Authorization: Bot $bot_token", "Content-Type: application/x-www-form-urlencoded");

$ch = curl_init();
curl_setopt($ch, CURLOPT_HTTPHEADER, $header2);
curl_setopt($ch, CURLOPT_URL, $discord_guild_bot_url);
curl_setopt($ch, CURLOPT_POST, false);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);

$result2 = curl_exec($ch);
$result2 = json_decode($result2, true);
$count = 0;
$guilds_bot = array();
foreach ($result2 as $v) {
    $guilds_bot[] = $v['id'];
    $count = $count + 1;
};

$discord_users_guild_url = 'https://discord.com/api/users/@me/guilds';

$header3 = array("Authorization: Bearer $access_token", "Content-Type: application/x-www-form-urlencoded");

$ch = curl_init();
curl_setopt($ch, CURLOPT_HTTPHEADER, $header3);
curl_setopt($ch, CURLOPT_URL, $discord_users_guild_url);
curl_setopt($ch, CURLOPT_POST, false);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);

$result3 = curl_exec($ch);

$result3 = json_decode($result3, true);

$count_guild = 0;
$guild_member = '❌';
foreach ($result3 as $v2) {
    if(in_array($v2['id'], $guilds_bot)){
        $count_guild = $count_guild + 1;
    };
    if(in_array('881215323586580540', $guilds_bot)){
        $guild_member = '✅';
    };
};

$discord_role_guild_url = 'https://discord.com/api/guilds/881215323586580540/roles';

$header4 = array("Authorization: Bot $bot_token", "Content-Type: application/x-www-form-urlencoded");

$ch = curl_init();
curl_setopt($ch, CURLOPT_HTTPHEADER, $header4);
curl_setopt($ch, CURLOPT_URL, $discord_role_guild_url);
curl_setopt($ch, CURLOPT_POST, false);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);

$result4 = curl_exec($ch);

$result4 = json_decode($result4, true);

$guild_roles = array();
foreach ($result4 as $v3) {
    $guild_roles[] = $v3['id'];
};

$staff_member = '❌';
foreach ($result4 as $v3) {
    if(in_array('881273316449587212', $guild_roles)){
        $staff_member = '✅';
    };
};

$_SESSION['serversInfo'] = [
    'numbers'=>$count,
    'bot_is_in'=>$count_guild,
    'in_nayo_sandbox'=>$guild_member,
    'is_on_team'=>$staff_member,
];

header("Location: profile.php");
exit();

?>