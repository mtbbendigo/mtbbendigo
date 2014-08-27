<?php  
defined('C5_EXECUTE') or die("Access Denied.");?>

<?php  global $c;
$return_array=$controller->getContentjustimg();
$relPath =$result_array[4];	
$size = @getimagesize($relPath);

if (!$c->isEditMode()) {?>
<script>
    $.backstretch("<?php  echo $return_array[1];?>");
</script>

    
                    
  <?php  }else{?>     <div class="edit_mode"><h2>Pro full image background disabled in edit mode.</h2></div><?php  } ?>