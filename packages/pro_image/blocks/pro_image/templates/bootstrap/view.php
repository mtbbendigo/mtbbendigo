<?php  
defined('C5_EXECUTE') or die("Access Denied.");
echo '<span  class="mpinaps bnapsimg" style="width:100%;height:auto;display:block;text-align:'.$position.';padding-top:'.$spacetop.'px;padding-right:'.$spaceright.'px;padding-bottom:'.$spacebottom.'px;padding-left:'.$spaceleft.'px;">';
echo($controller->getContentAndGenerate());
echo '</span>';
?>