<?php  defined('C5_EXECUTE') or die("Access Denied.");
$nh = Loader::helper('navigation');
?>
<div class="article-container">
<article>
	<?php  if (!empty($field_1_textbox_text)): ?>
		<?php echo '<div class="row">';?>
			<?php echo '<div class="large-12 columns">';?>
				<?php echo '<div class="news-article-title"><h5>';?>
					<?php  echo htmlentities($field_1_textbox_text, ENT_QUOTES, APP_CHARSET); ?>
				<?php echo '</h5></div>';?>
			<?php echo '</div>';?>
		<?php echo '</div>';?>
	<?php  endif; ?>

	<div class="row">
		<div class="large-8 columns">
			<?php  if (!empty($field_2_wysiwyg_content)): ?>
				<?php echo'<div class="article-item-text">';?>
					<?php  echo $field_2_wysiwyg_content; ?>
				<?php echo'</div>';?>
			<?php  endif; ?>
		</div>
		<div class="large-4 columns">
			<?php  if (!empty($field_3_image)): ?><!-- Non news items have a left menu -->
				<?php echo '<div class="article-image-container">';?>
					<?php  if (!empty($field_3_image_externalLinkURL)) { ?>
						<a href="<?php  echo $this->controller->valid_url($field_3_image_externalLinkURL); ?>" target="_blank"><?php  } ?>
						<!-- Put Style directly on the image so it wraps the hieght and width -->
						<img src="<?php  echo $field_3_image->src; ?>" width="<?php  echo $field_3_image->width; ?>" height="<?php  echo $field_3_image->height; ?>" alt="" 
							style="border: 4px solid white; -moz-box-shadow: 0 0 8px #888; -webkit-box-shadow: 0 0 8px #888; 
							-o-box-shadow: 0 0 8px #888; box-shadow: 0 0 8px #888;"/>
					<?php  if (!empty($field_3_image_externalLinkURL)) { ?></a><?php  } ?>
				<?php echo '</div>';?>
			<?php  endif; ?>
	
			<?php  if (!empty($field_4_image)): ?>
				<?php echo '<div class="article-image-container">';?>
					<?php  if (!empty($field_4_image_internalLinkCID)) { ?>
						<a href="<?php  echo $nh->getLinkToCollection(Page::getByID($field_4_image_internalLinkCID), true); ?>"><?php  } ?>
						<!-- Put Style directly on the image so it wraps the hieght and width -->
						<img src="<?php  echo $field_4_image->src; ?>" width="<?php  echo $field_4_image->width; ?>" height="<?php  echo $field_4_image->height; ?>" alt="" 
							style="border: 4px solid white; -moz-box-shadow: 0 0 8px #888; -webkit-box-shadow: 0 0 8px #888; 
							-o-box-shadow: 0 0 8px #888; box-shadow: 0 0 8px #888;" />
					<?php  if (!empty($field_4_image_internalLinkCID)) { ?></a><?php  } ?>
				<?php echo '</div>';?>
			<?php  endif; ?>
				
		</div>
	</div>
</article>
</div>

