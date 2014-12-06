<?php  defined('C5_EXECUTE') or die("Access Denied.");
?>

<?php  if (!empty($field_1_image)): ?>
	<?php  if (!empty($field_1_image_externalLinkURL)) { ?>
        <a href="<?php  echo $this->controller->valid_url($field_1_image_externalLinkURL); ?>" target="_blank"><?php  } ?>
        <img src="<?php  echo $field_1_image->src; ?>" width="<?php  echo $field_1_image->width; ?>" height="<?php  echo $field_1_image->height; ?>" alt="" style="border: 4px solid white; -moz-box-shadow: 0 0 8px #888; -webkit-box-shadow: 0 0 8px #888; -o-box-shadow: 0 0 8px #888; box-shadow: 0 0 8px #888;"/>
	<?php  if (!empty($field_1_image_externalLinkURL)) { ?></a><?php  } ?>
<?php  endif; ?>


