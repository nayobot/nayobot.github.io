<?php

$discord_url = "https://discord.com/api/oauth2/authorize?client_id=879082395750531093&redirect_uri=https%3A%2F%2Fnayobot.moe%2Ftest%2Fprocess-oauth.php&response_type=code&scope=identify%20guilds";
header("Location : $discord_url");
exit();

?>