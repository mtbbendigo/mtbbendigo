<?php  defined('C5_EXECUTE') or die("Access Denied.");
?>

<div class="row">
	<div class="large-5 columns">
	<?php  if (!empty($field_1_textarea_text)): ?>
		<?php  echo nl2br(htmlentities($field_1_textarea_text, ENT_QUOTES, APP_CHARSET)); ?>
	<?php  endif; ?>
	
	<?php  if (!empty($field_2_image)): ?>
		<img src="<?php  echo $field_2_image->src; ?>" width="<?php  echo $field_2_image->width; ?>" height="<?php  echo $field_2_image->height; ?>" alt="" />
	<?php  endif; ?>
	</div>
	
	<div class="large-7 columns">
	<?php  if (!empty($field_1_image)): ?>
		<a href="#pop-up" data-rel="popup" data-position-to="window">
			<img src="<?php  echo $field_1_image->src; ?>" 
			width="<?php  echo $field_1_image->width; ?>" 
			height="<?php  echo $field_1_image->height; ?>" 
			alt="" data-transition="pop"/>
		</a>
		<div id="pop-up" data-role="popup">
		<a href="#" data-rel="back">Close</a>
			<img src="<?php  echo $field_1_image->src; ?>" 
			width="<?php  echo $field_1_image->width; ?>" 
			height="<?php  echo $field_1_image->height; ?>" 
			alt="" data-transition="pop"/>
		</div>
	<?php  endif; ?>
	</div>
</div>
