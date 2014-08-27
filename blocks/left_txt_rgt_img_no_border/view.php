<?php  defined('C5_EXECUTE') or die("Access Denied.");
?>
<article>
	<div class="container-spacer">
	<?php  if (!empty($field_1_textarea_text)): ?>
		<?php  echo '<h3>'.nl2br(htmlentities($field_1_textarea_text, ENT_QUOTES, APP_CHARSET)).'</h3>'; ?>
	<?php  endif; ?>
	</div>
	<div class="row">
		<div class="large-8 columns">
			<div class="para-container">
				<main role="main">
					<?php  if (!empty($field_2_wysiwyg_content)): ?>
						<?php  echo $field_2_wysiwyg_content; ?>
					<?php  endif; ?>
				</main>
			</div>
		</div>
		<div class="large-4 columns">
			<div class="image-container">
			<?php  if (!empty($field_3_image)): ?>
				<?php  if (!empty($field_3_image_externalLinkURL)) { ?><a href="<?php  echo $this->controller->valid_url($field_3_image_externalLinkURL); ?>" target="_blank"><?php  } ?><img src="<?php  echo $field_3_image->src; ?>" width="<?php  echo $field_3_image->width; ?>" height="<?php  echo $field_3_image->height; ?>" alt="" /><?php  if (!empty($field_3_image_externalLinkURL)) { ?></a><?php  } ?>
			<?php  endif; ?>
			</div>
		</div>
	</div>
</article>