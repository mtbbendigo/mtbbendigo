<?php  
defined('C5_EXECUTE') or die("Access Denied.");
?>
<!--[if gte IE 9]>

<?php 

echo '<span class="mpinaps napsrounded" style="width:100%;height:auto;display:block;text-align:'.$position.';padding-top:'.$spacetop.'px;padding-right:'.$spaceright.'px;padding-bottom:'.$spacebottom.'px;padding-left:'.$spaceleft.'px;">';
echo($controller->getContentAndGenerate());
echo '</span>';
?>
<![endif]-->

<!--[if !IE]><!-->

<?php 

echo '<span class="mpinaps napsrounded" style="width:100%;height:auto;display:block;text-align:'.$position.';padding-top:'.$spacetop.'px;padding-right:'.$spaceright.'px;padding-bottom:'.$spacebottom.'px;padding-left:'.$spaceleft.'px;">';
echo($controller->getContentAndGenerate());
echo '</span>';
?>
<!--<![endif]-->


<!--[if lt IE 9]><?php 
echo '<span style="width:100%;height:auto;display:block;text-align:'.$position.';padding-top:'.$spacetop.'px;padding-right:'.$spaceright.'px;padding-bottom:'.$spacebottom.'px;padding-left:'.$spaceleft.'px;">';
echo($controller->getContentAndGenerate());
echo '</span>';?>
<![endif]-->