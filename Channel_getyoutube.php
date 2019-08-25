<!-- PHP 取 youtube 影片id -->
<?php
/**
 * Get Youtube video ID from URL
 *
 * @param string $url
 * @return mixed Youtube video ID or FALSE if not found
 */
function getYoutubeIdFromUrl($url) {
    $parts = parse_url($url);
    if(isset($parts['query'])){
        parse_str($parts['query'], $qs);
        if(isset($qs['v'])){
            return $qs['v'];
        }else if(isset($qs['vi'])){
            return $qs['vi'];
        }
    }
    if(isset($parts['path'])){
        $path = explode('/', trim($parts['path'], '/'));
        return $path[count($path)-1];
    }
    return false;
}
// Test
$urls = array(
    'https://www.youtube.com/watch?v=-5QGfFzTTa4',
    'https://www.youtube.com/watch?v=FFo6AlIJpPo&t=11175s',
    'https://www.youtube.com/watch?v=IIamby8TtOw&t=2389s'
);
foreach($urls as $url){
    echo $url . ' : ' . getYoutubeIdFromUrl($url) . "\n";
}