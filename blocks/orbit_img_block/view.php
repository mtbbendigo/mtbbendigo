<?php  defined('C5_EXECUTE') or die("Access Denied.");
?>

<?php 
//At least one image must exist.
//Refer to foundationzurb.com orbit documentation.
if (!empty($field_1_image) || !empty($field_2_image) || !empty($field_3_image) || !empty($field_4_image) || !empty($field_5_image)) {
	echo '<div class="slideshow-wrapper">';
		echo '<div class="preloader"></div>';
		//Begin orbit list
		echo '<ul data-orbit data-options="animation:fade;">';//if data-options is removed orbit will slide images right to left.
		if (!empty($field_1_image))
		{
			echo '<li><img src="'.$field_1_image->src. '" width="'.$field_1_image->width.'" height="'.$field_1_image->height.'" alt=""/>';
			if (!empty($field_2_textarea_text))
			{
				echo '<div class="orbit-caption">'.nl2br(htmlentities($field_2_textarea_text, ENT_QUOTES, APP_CHARSET)).'</div>';
			}
			echo '</li>';
		}
		if (!empty($field_3_image))
		{
			echo '<li><img src="'.$field_3_image->src. '" width="'.$field_3_image->width.'" height="'.$field_3_image->height.'" alt=""/>';
			if (!empty($field_4_textarea_text))
			{
				echo '<div class="orbit-caption">'.nl2br(htmlentities($field_4_textarea_text, ENT_QUOTES, APP_CHARSET)).'</div>';
			}
			echo '</li>';
		}
		if (!empty($field_5_image))
		{
			echo '<li><img src="'.$field_5_image->src. '" width="'.$field_5_image->width.'" height="'.$field_5_image->height.'" alt=""/>';
			if (!empty($field_6_textarea_text))
			{
				echo '<div class="orbit-caption">'.nl2br(htmlentities($field_6_textarea_text, ENT_QUOTES, APP_CHARSET)).'</div>';
			}
			echo '</li>';
		}
		if (!empty($field_7_image))
		{
			echo '<li><img src="'.$field_7_image->src. '" width="'.$field_7_image->width.'" height="'.$field_7_image->height.'" alt=""/>';
			if (!empty($field_8_textarea_text))
			{
				echo '<div class="orbit-caption">'.nl2br(htmlentities($field_8_textarea_text, ENT_QUOTES, APP_CHARSET)).'</div>';
			}
			echo '</li>';
		}
		if (!empty($field_9_image))
		{
			echo '<li><img src="'.$field_9_image->src. '" width="'.$field_9_image->width.'" height="'.$field_9_image->height.'" alt=""/>';
			if (!empty($field_10_textarea_text))
			{
				echo '<div class="orbit-caption">'.nl2br(htmlentities($field_10_textarea_text, ENT_QUOTES, APP_CHARSET)).'</div>';
			}
			echo '</li>';
		}
		echo '</ul>';
	echo '</div>';
}
else {
	echo '<h1>Oops! No images were specified for this Block.</h1>';
}
?>

