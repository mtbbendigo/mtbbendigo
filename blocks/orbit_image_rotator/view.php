<?php  defined('C5_EXECUTE') or die("Access Denied."); ?>

<?php 
//At least one image must exist.
//Refer to foundationzurb orbit documentation.
if (!empty($field_1_image) || !empty($field_2_image) || !empty($field_3_image) || !empty($field_4_image) || !empty($field_5_image)) {
	echo '<div class="slideshow-wrapper">';
		echo '<div class="preloader"></div>';
		//Begin orbit list
		echo '<ul data-orbit>';
			if (!empty($field_1_image))
			{
				echo '<li><img src="'.$field_1_image->src. '" width="'.$field_1_image->width.'" height="'.$field_1_image->height.'" alt=""/></li>';
			}
			if (!empty($field_2_image))
			{
				echo '<li><img src="'.$field_2_image->src. '" width="'.$field_2_image->width.'" height="'.$field_2_image->height.'" alt=""/></li>';
			}
			if (!empty($field_3_image))
			{
				echo '<li><img src="'.$field_3_image->src. '" width="'.$field_3_image->width.'" height="'.$field_3_image->height.'" alt=""/></li>';
			}
			if (!empty($field_4_image))
			{
				echo '<li><img src="'.$field_4_image->src. '" width="'.$field_4_image->width.'" height="'.$field_4_image->height.'" alt=""/></li>';
			}
			if (!empty($field_5_image))
			{
				echo '<li><img src="'.$field_5_image->src. '" width="'.$field_5_image->width.'" height="'.$field_5_image->height.'" alt=""/></li>';
			}
		echo '</ul>';
	echo '</div>';
}
else {
	echo '<h1>Oops! No images were specified for this Block.</h1>';
}
?>


