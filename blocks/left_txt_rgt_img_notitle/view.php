<?php  defined('C5_EXECUTE') or die("Access Denied.");
$nh = Loader::helper('navigation');
?>

<?php  if (!empty($field_1_wysiwyg_content)): ?>
	<?php  echo $field_1_wysiwyg_content; ?>
<?php  endif; ?>

<?php  if (!empty($field_2_image)): ?>
	<?php  if (!empty($field_2_image_internalLinkCID)) { ?><a href="<?php  echo $nh->getLinkToCollection(Page::getByID($field_2_image_internalLinkCID), true); ?>"><?php  } ?><img src="<?php  echo $field_2_image->src; ?>" width="<?php  echo $field_2_image->width; ?>" height="<?php  echo $field_2_image->height; ?>" alt="" /><?php  if (!empty($field_2_image_internalLinkCID)) { ?></a><?php  } ?>
<?php  endif; ?>

<?php  if (!empty($field_3_image)): ?>
	<?php  if (!empty($field_3_image_externalLinkURL)) { ?><a href="<?php  echo $this->controller->valid_url($field_3_image_externalLinkURL); ?>" target="_blank"><?php  } ?><img src="<?php  echo $field_3_image->src; ?>" width="<?php  echo $field_3_image->width; ?>" height="<?php  echo $field_3_image->height; ?>" alt="" /><?php  if (!empty($field_3_image_externalLinkURL)) { ?></a><?php  } ?>
<?php  endif; ?>


