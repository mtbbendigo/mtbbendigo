<?php  defined('C5_EXECUTE') or die("Access Denied.");
?>

<?php 
//IMAGE ROTATORS MUST CONTAIN IMAGES THAT ARE EXACTLY THE SAME WIDTH AND HEIGHT.
?>

<div class="row">
	<div class="large-12 columns">
		<div class="image-rotator-container">
			<ul class="bxslider">
			<?php  if (!empty($field_1_image)): ?>
				<?php echo '<li>';?>
					<?php  if (!empty($field_1_image_externalLinkURL)) { ?>
						<a href="<?php  echo $this->controller->valid_url($field_1_image_externalLinkURL); ?>" target="_blank"><?php  } ?>
						<img src="<?php  echo $field_1_image->src; ?>" width="<?php  echo $field_1_image->width; ?>" height="<?php  echo $field_1_image->height; ?>" alt="" />
						<?php  if (!empty($field_1_image_externalLinkURL)) { ?></a><?php  } ?>
				<?php echo '</li>';?>
			<?php  endif; ?>
			
			<?php  if (!empty($field_2_image)): ?>
				<?php echo '<li>';?>
					<?php  if (!empty($field_2_image_externalLinkURL)) { ?>
						<a href="<?php  echo $this->controller->valid_url($field_2_image_externalLinkURL); ?>" target="_blank"><?php  } ?>
						<!-- Put Style directly on the image so it wraps the hieght and width -->
						<img src="<?php  echo $field_2_image->src; ?>" width="<?php  echo $field_2_image->width; ?>" height="<?php  echo $field_2_image->height; ?>" alt="" />
						<?php  if (!empty($field_2_image_externalLinkURL)) { ?></a><?php  } ?>
				<?php echo '</li>';?>
			<?php  endif; ?>
			
			<?php  if (!empty($field_3_image)): ?>
				<?php echo '<li>';?>
					<?php  if (!empty($field_3_image_externalLinkURL)) { ?>
						<a href="<?php  echo $this->controller->valid_url($field_3_image_externalLinkURL); ?>" target="_blank"><?php  } ?>
						<!-- Put Style directly on the image so it wraps the hieght and width -->
						<img src="<?php  echo $field_3_image->src; ?>" width="<?php  echo $field_3_image->width; ?>" height="<?php  echo $field_3_image->height; ?>" alt="" />
						<?php  if (!empty($field_3_image_externalLinkURL)) { ?></a><?php  } ?>
				<?php echo '</li>';?>
			<?php  endif; ?>
			</ul>
		</div>
	</div>
</div>

<script>
  
$(document).ready(function(){
	$('.bxslider').bxSlider({
		auto: true,
		autoControls: true,
		minSlides: 1,
		maxSlides: 1,
		slideWidth: 670,
		slideMargin: 2,
		mode: 'fade'	
	});
});
</script>