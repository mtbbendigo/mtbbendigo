<?php  
defined('C5_EXECUTE') or die("Access Denied.");
$result_array=$controller->getContentjustimg();
$result_array=$controller->getContentjustimg();
$relPath =$result_array[4];		
echo '<span class="proimglightbox" style="width:100%;height:auto;display:block;text-align:'.$position.';padding-top:'.$spacetop.'px;padding-right:'.$spaceright.'px;padding-bottom:'.$spacebottom.'px;padding-left:'.$spaceleft.'px;">';
echo '<a href="'.$relPath.'" rel="lightbox"  style="width:'.$maxWidth.'px;height:'.$maxHeight.'px" >';
echo $result_array[0];
echo '</a>';
echo '</span>';
?>