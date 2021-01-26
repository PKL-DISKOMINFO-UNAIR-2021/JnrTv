<?php

function get_curl ($url){

    $curl = curl_init() ;
    curl_setopt($curl, CURLOPT_URL, $url);
    curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
    $result = curl_exec($curl);
    curl_close($curl);
    
    return json_decode($result, true);

}

$result = get_curl('https://www.googleapis.com/youtube/v3/channels?part=snippet,statistics&id=UCEe1ees-scoEkTQv3he9PJw&key=AIzaSyCHzjzVt26LyEnQLDFzTnMuhmzYM5afMy4');

//latest video
$urlvideo = 'https://www.googleapis.com/youtube/v3/search?key=AIzaSyCHzjzVt26LyEnQLDFzTnMuhmzYM5afMy4&channelId=UCEe1ees-scoEkTQv3he9PJw&maxResults=5&order=date&part=snippet';
$result = get_curl($urlvideo);

$latestvideo = $result['items'][0]['id']['videoId'];
$latestvideo1 = $result['items'][1]['id']['videoId'];
$latestvideo2 = $result['items'][2]['id']['videoId'];
$latestvideo3 = $result['items'][3]['id']['videoId'];
$latestvideo4 = $result['items'][4]['id']['videoId'];



?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="/css/vid.css">
</head>
<body>
    
    <div class="container">
        <iframe class="embed-responsive-item" src="https://youtube.com/embed/<?= $latestvideo; ?>?rel=0" allowfullscreen></iframe>
        <iframe class="embed-responsive-item" src="https://youtube.com/embed/<?= $latestvideo1; ?>?rel=0" allowfullscreen></iframe>
        <iframe class="embed-responsive-item" src="https://youtube.com/embed/<?= $latestvideo2; ?>?rel=0" allowfullscreen></iframe>
        <iframe class="embed-responsive-item" src="https://youtube.com/embed/<?= $latestvideo3; ?>?rel=0" allowfullscreen></iframe>
        <iframe class="embed-responsive-item" src="https://youtube.com/embed/<?= $latestvideo4; ?>?rel=0" allowfullscreen></iframe>
        <li onclick="videoslider("https://youtube.com/embed/<?= $latestvideo; ?>?rel=0")"><video src="./video1.mp4"></video></li>
    </div>


    <script>

        function videoslider(links){
            document.querySelector(".slider").src = links;
        }

    </script>

</body>
</html>