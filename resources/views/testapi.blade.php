<?php
 
$API_Url = 'https://www.googleapis.com/youtube/v3/';
$API_Key = 'AIzaSyCSy4GQvyGWZOa0sDXxDUye6JMIl_f2VZQ';
 
 
// If you don't know the channel ID see below
$channelId = 'UCEe1ees-scoEkTQv3he9PJw';
 
$parameter = [
    'id'=> $channelId,
    'part'=> 'contentDetails',
    'key'=> $API_Key
];
$channel_URL = $API_Url . 'channels?' . http_build_query($parameter);
$json_details = json_decode(file_get_contents($channel_URL), true);

$playlist = $json_details['items']['0']['contentDetails']['relatedPlaylists']['uploads'];
 
$parameter = [
    'part'=> 'snippet',
    'playlistId' => $playlist,
    'maxResults'=> '50',
    'key'=> $API_Key
];
$channel_URL = $API_Url . 'playlistItems?' . http_build_query($parameter);
$json_details = json_decode(file_get_contents($channel_URL), true);

$my_videos = [];
foreach($json_details['items'] as $video){
    //$my_videos[] = $video['snippet']['resourceId']['videoId'];
	$my_videos[] = array( 'v_id'=>$video['snippet']['resourceId']['videoId'], 'v_name'=>$video['snippet']['title'] );
}
 
while(isset($json_details['nextPageToken'])){
    $nxt_page_URL = $channel_URL . '&pageToken=' . $json_details['nextPageToken'];
    $json_details = json_decode(file_get_contents($nxt_page_URL), true);
    foreach($json_details['items'] as $video)
        $my_videos[] = $video['snippet']['resourceId']['videoId'];
}

foreach($my_videos as $video){
 
    if(isset($video)){
        
		echo '<a href="https://www.youtube.com/watch?v='. $video['v_id'] .'" style="background: url(\'https://img.youtube.com/vi/'. $video['v_id'] .'/mqdefault.jpg\')">
					<div>'. $video['v_name'] .'</div>
			</a>';
    }
}

?>
<div id="my_player"><div></div></div>

<script>
 
$(document).ready(function(e){
 
	$('#my_video_list a').on('click',function(e){
 
	e.preventDefault();
 
	var video_url = $(this).attr('href');
 
	
	var video_id = video_url.substring(video_url.search('=')+1,video_url.length);
	
	$('#my_player DIV').html('<iframe width="500" height="300" src="https://www.youtube.com/embed/' + video_id + '" frameborder="0" allowfullscreen></iframe>');
 
	  $('#my_player').fadeIn(500);
 
	});
 
 
	$('#my_player').on('click',function(e){
		$('#my_player').fadeOut(500);
		$('#my_player DIV').empty();
	});
 
 
});
</script>
