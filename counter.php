
<?php 

    $JSON_URL = "Your JSON API";
    $JSON = file_get_contents($JSON_URL);
    $info = json_decode($JSON, true)['members'];
        
    echo 'Gracze ONLINE: '.count($info);
    
    return count($info);
?>

