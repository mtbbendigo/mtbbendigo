<?php  
defined('C5_EXECUTE') or die("Access Denied.");
$result_array=$controller->getContentjustimg2();

?>
<!--[if !IE]><!-->

<?php 
echo '
<style>
.imgno'.$bID.' {width:'.$width.'px;height:auto  }
</style>';


echo '<span class="mpinaps" style="display:block; width:100%;height:auto;text-align:'.$position.';padding-top:'.$spacetop.'px;padding-right:'.$spaceright.'px;padding-bottom:'.$spacebottom.'px;padding-left:'.$spaceleft.'px;">';

echo '<img src="'.$result_array[1].'" width="'.$result_array[3].'" height="'.$result_array[3].'" class="circle-image-wrap imgno'.$bID.'"/>';

echo '</span>';
?>
<!--<![endif]-->

<!--[if gte IE 9]>

<?php 
echo '
<style>
.imgno'.$bID.' {width:'.$width.'px;height:auto  }
</style>';


echo '<span class="mpinaps" style="display:block; width:100%;height:auto;text-align:'.$position.';padding-top:'.$spacetop.'px;padding-right:'.$spaceright.'px;padding-bottom:'.$spacebottom.'px;padding-left:'.$spaceleft.'px;">';

echo '<img src="'.$result_array[1].'" width="'.$result_array[3].'" height="'.$result_array[3].'" class="circle-image-wrap imgno'.$bID.'"/>';

echo '</span>';
?>
<![endif]-->
<!--[if lt IE 9]><?php 
echo '<span style="width:100%;height:auto;display:block;text-align:'.$position.';padding-top:'.$spacetop.'px;padding-right:'.$spaceright.'px;padding-bottom:'.$spacebottom.'px;padding-left:'.$spaceleft.'px;">';
echo($controller->getContentAndGenerate());
echo '</span>';?>
<![endif]-->