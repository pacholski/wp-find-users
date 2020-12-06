<?php
header ("Content-type: text/html; charset=UTF-8");
$url= ""; // URL to WordPress page: https://example.com/wp/
$data="wp-json/wp/v2/users/";
$json = json_decode(file_get_contents($url.$data), true);
    if($json)
    {
        foreach($json as $users)
        {
            echo $users['id'].". ".$users['name']."<br>";
        }
    }
    else echo "No users were found";
