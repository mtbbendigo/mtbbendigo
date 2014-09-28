<?php  
defined('C5_EXECUTE') or die("Access Denied.");
if($position==null){$position_span='float:none';}
else{
if($position=='center'){$position_span='margin:0 auto';}
else{$position_span='float:'.$position;}

}
?>

<script type="text/javascript">

$(document).ready(function() {
	$('.jqzoom').jqzoom({
            zoomType: 'standard',
            lens:true,
            preloadImages: false,
            alwaysOn:false
        });
	
});


</script>
<style type="text/javascript">
zoomWindow
</style>
<?php 
$result_array=$controller->getContentjustimg();
$relP =$result_array[4];	
?>
<!--[if gte IE 9]>

<?php 
if($altText!=null){$title=$altText;}else{$title='pro image';}
echo '<span style="width:'.$maxWidth.'px;height:auto;display:block;'.$position_span.';padding-top:'.$spacetop.'px;padding-right:'.$spaceright.'px;padding-bottom:'.$spacebottom.'px;padding-left:'.$spaceleft.'px;">';

echo '<a href="'.$relP.'" class="jqzoom"  title="'.$title.'" >';
echo $result_array[0];

echo '</span>';
echo '</a>';
echo  '<span style="clear:both;display:block;width:100%;height:1px"></span>';
?>
<![endif]-->

<!--[if !IE]><!-->

<?php 
if($altText!=null){$title=$altText;}else{$title='pro image';}
echo '<span style="width:'.$maxWidth.'px;height:auto;display:block;'.$position_span.';padding-top:'.$spacetop.'px;padding-right:'.$spaceright.'px;padding-bottom:'.$spacebottom.'px;padding-left:'.$spaceleft.'px;">';

echo '<a href="'.$relP.'" class="jqzoom"  title="'.$title.'" >';
echo $result_array[0];
echo '</a>';

echo '</span>';
echo  '<span style="clear:both;display:block;width:100%;height:1px"></span>';
?>
<!--<![endif]-->

<!--[if lt IE 9]><?php 
echo '<span style="width:100%;height:auto;display:block;text-align:'.$position.';padding-top:'.$spacetop.'px;padding-right:'.$spaceright.'px;padding-bottom:'.$spacebottom.'px;padding-left:'.$spaceleft.'px;">';
echo($controller->getContentAndGenerate());

echo '</span>';?>

<![endif]-->
