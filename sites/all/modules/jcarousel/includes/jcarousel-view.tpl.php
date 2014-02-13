
<?php

/**
 * @file jcarousel-view.tpl.php
 * View template to display a list as a carousel.
 */

 $node = node_load(arg(1));

$video_code_arr = explode('?v=',$node->field_game_youtube_video['und'][0]['video_url']);
$video_code = $video_code_arr[1];
$arr = explode('/',$_SERVER['REQUEST_URI']);
if($arr[1] == 'games')
{
?>
<ul class="<?php print $jcarousel_classes; ?>">
   <li class="odd jcarousel-item jcarousel-item-horizontal jcarousel-item-1 jcarousel-item-1-horizontal" style="float: left; list-style: none; width: 246px; " jcarouselindex="1"><a href="<?php print $node->field_game_youtube_video['und'][0]['video_url'];?>"
rel="lightvideo[|width:410px; height:650px;][]"><img class="pop-close" width="160px" height="256px" src="http://img.youtube.com/vi/<?php print $video_code;?>/default.jpg"/></a>
</li>
  <?php foreach ($rows as $id => $row): ?>
    <li class="<?php print $row_classes[$id]; ?> "><?php print $row; ?></li>
  <?php endforeach; ?>

</ul>
<?php
}
else
{
?>
<ul class="<?php print $jcarousel_classes; ?>">
  <?php foreach ($rows as $id => $row): ?>
    <li class="<?php print $row_classes[$id]; ?>"><?php print $row; ?></li>
  <?php endforeach; ?>
</ul>
<?php
}
?>