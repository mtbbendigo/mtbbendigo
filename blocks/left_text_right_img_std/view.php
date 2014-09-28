<?php  defined('C5_EXECUTE') or die("Access Denied.");
?>
<div class="block-separator">
	<div class="row">
		<div class="large-8 columns">
			<div class="para-container">
				<article>
				<?php  if (!empty($field_1_wysiwyg_content)): ?>
					<?php  echo $field_1_wysiwyg_content; ?>
				<?php  endif; ?>
				</article>
			</div>
		</div>
		<div class="large-4 columns">
			<div class="image-container">
				<?php  if (!empty($field_2_image)): ?>
					<?php  if (!empty($field_2_image_externalLinkURL)) { ?>
						<a href="<?php  echo $this->controller->valid_url($field_2_image_externalLinkURL); ?>" target="_blank"><?php  } ?>
						<!-- Put Style directly on the image so it wraps the hieght and width -->
						<img src="<?php  echo $field_2_image->src; ?>" width="<?php  echo $field_2_image->width; ?>" height="<?php  echo $field_2_image->height; ?>" alt="" style="border: 4px solid white; -moz-box-shadow: 0 0 8px #888; -webkit-box-shadow: 0 0 8px #888; -o-box-shadow: 0 0 8px #888; box-shadow: 0 0 8px #888;" />
					<?php  if (!empty($field_2_image_externalLinkURL)) { ?></a><?php  } ?>
				<?php  endif; ?>
			</div>
		</div>
	</div>
</div>
