<?php include __DIR__. '/main_page_header.php' ?>

<div class="m-5 p-5">
<img class="d-block" src="http://img.youtube.com/vi/{}/mqdefault.jpg" alt="">
</div>


<?php
preg_match('/watch\?v=([^&]*)/','https://www.youtube.com/watch?v=jfC4QcuTk4k',$match);
$match[1]; //youtubeID

echo $match[1];
?>




<!-- 
// preg_match('/watch\?v=([^&]*)/','https://www.youtube.com/watch?v=0TsmU0-_q2s',$match);
// $match[1]; //youtubeID
// http://img.youtube.com/vi/{youtubeID}/mqdefault.jpg



<?php include __DIR__. '/__script.php' ?>
<?php include __DIR__. '/main_page_footer.php' ?>

<?php include __DIR__. '/__html_end.php' ?>