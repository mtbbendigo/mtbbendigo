<?php  defined('C5_EXECUTE') or die("Access Denied.");
?>
<div class="row">
	<div class="large-12 columns">
		<?php  if (!empty($field_1_image)): ?>
			<img src="<?php  echo $field_1_image->src; ?>" width="<?php  echo $field_1_image->width; ?>" height="<?php  echo $field_1_image->height; ?>" alt="" 
			style="border: 4px solid white; -moz-box-shadow: 0 0 8px #888; -webkit-box-shadow: 0 0 8px #888;
			-o-box-shadow: 0 0 8px #888; box-shadow: 0 0 8px #888;"/>
		<?php  endif; ?>
	</div>
	<div class="large-12 columns">
		<article>
			<?php  if (!empty($field_2_wysiwyg_content)): ?>
				<?php  echo $field_2_wysiwyg_content; ?>
			<?php  endif; ?>
		</article>
	</div>
</div>
