<?php  defined('C5_EXECUTE') or die("Access Denied.");
$nh = Loader::helper('navigation');
?>
<div class="row">
	<div class="large-12 columns">
		<div class="article-container">
		<article>
			<div class="row">
				<div class="large-8 columns">
					<?php  if (!empty($field_1_wysiwyg_content)): ?>
						<?php echo'<div class="article-item-text">';?>
							<?php  echo $field_1_wysiwyg_content; ?>
						<?php echo'</div>';?>
					<?php  endif; ?>
					
				</div>
				<div class="large-4 columns">
				<?php  if (!empty($field_2_image)): ?>
					<?php echo '<div class="article-image-container">';?>
						<?php  if (!empty($field_2_image_internalLinkCID)) { ?><a href="<?php  echo $nh->getLinkToCollection(Page::getByID($field_2_image_internalLinkCID), true); ?>"><?php  } ?>
							<img src="<?php  echo $field_2_image->src; ?>" width="<?php  echo $field_2_image->width; ?>" height="<?php  echo $field_2_image->height; ?>" alt="" 
								style="border: 4px solid white; -moz-box-shadow: 0 0 8px #888; -webkit-box-shadow: 0 0 8px #888; 
								-o-box-shadow: 0 0 8px #888; box-shadow: 0 0 8px #888;"/>
							<?php  if (!empty($field_2_image_internalLinkCID)) { ?></a><?php  } ?>
					<?php echo '</div>'; ?>
				<?php  endif; ?>
				
				<?php  if (!empty($field_3_image)): ?>
					<?php echo '<div class="article-image-container">';?>
						<?php  if (!empty($field_3_image_externalLinkURL)) { ?><a href="<?php  echo $this->controller->valid_url($field_3_image_externalLinkURL); ?>" target="_blank"><?php  } ?>
							<img src="<?php  echo $field_3_image->src; ?>" width="<?php  echo $field_3_image->width; ?>" height="<?php  echo $field_3_image->height; ?>" alt="" 
								style="border: 4px solid white; -moz-box-shadow: 0 0 8px #888; -webkit-box-shadow: 0 0 8px #888; 
								-o-box-shadow: 0 0 8px #888; box-shadow: 0 0 8px #888;"/>
							<?php  if (!empty($field_3_image_externalLinkURL)) { ?></a><?php  } ?>
					<?php echo '</div>'; ?>
				<?php  endif; ?>	
				</div>
			</div>
		</article>
		</div>
	</div>
</div>

