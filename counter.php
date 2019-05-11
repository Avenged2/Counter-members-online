
<?php 

    $JSON_URL = "https://discordapp.com/api/guilds/524243316565475339/widget.json";
    $JSON = file_get_contents($JSON_URL);
    $info = json_decode($JSON, true)['members'];
        
    echo 'Gracze ONLINE: '.count($info);
    
    return count($info);
?>

