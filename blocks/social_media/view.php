<?php  defined('C5_EXECUTE') or die("Access Denied.");
?>
<div class="social-media-sidebar-container">
<!-- <h2>Social Media</h2>  -->
<ul class="inline-sc-media-list">
<?php  if (!empty($field_1_image)): 
	if (!empty($field_1_image_externalLinkURL)) 
	{ 
		echo '<li><a href="'. $this->controller->valid_url($field_1_image_externalLinkURL).'" target="_blank" title="Facebook">';  
		echo '<img src="'. $field_1_image->src .'" width="'. $field_1_image->width .'" height="'. $field_1_image->height .'" alt="" />'; 
		echo '</a></li>';
	}
 	endif; 
?>

<?php  if (!empty($field_2_image)): 
	if (!empty($field_2_image_externalLinkURL)) 
	{ 
		echo '<li><a href="'. $this->controller->valid_url($field_2_image_externalLinkURL).'" target="_blank" title="TeamApp" >';
		echo '<img src="'. $field_2_image->src .'" width="'. $field_2_image->width .'" height="'. $field_2_image->height.'" alt="" />';
		echo '</a></li>';
	}
  	endif; 
?>

<?php  if (!empty($field_3_image)): 
	if (!empty($field_3_image_externalLinkURL)) 
	{ 
		echo '<li><a href="'. $this->controller->valid_url($field_3_image_externalLinkURL) .'" target="_blank" title="Twitter">';
		echo '<img src="'. $field_3_image->src .'" width="'. $field_3_image->width .'" height="'. $field_3_image->height .'" alt="" />';
		echo '</a></li>';  
	}
  	endif; 
?>
</ul>
</div>
