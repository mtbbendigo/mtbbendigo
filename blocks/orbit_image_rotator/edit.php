<?php  defined('C5_EXECUTE') or die("Access Denied.");
$al = Loader::helper('concrete/asset_library');
?>

<style type="text/css" media="screen">
	.ccm-block-field-group h2 { margin-bottom: 5px; }
	.ccm-block-field-group td { vertical-align: middle; }
</style>

<div class="ccm-block-field-group">
	<h2>image1</h2>
	<?php  echo $al->image('field_1_image_fID', 'field_1_image_fID', 'Choose Image', $field_1_image); ?>
</div>

<div class="ccm-block-field-group">
	<h2>image2</h2>
	<?php  echo $al->image('field_2_image_fID', 'field_2_image_fID', 'Choose Image', $field_2_image); ?>
</div>

<div class="ccm-block-field-group">
	<h2>image3</h2>
	<?php  echo $al->image('field_3_image_fID', 'field_3_image_fID', 'Choose Image', $field_3_image); ?>
</div>

<div class="ccm-block-field-group">
	<h2>image4</h2>
	<?php  echo $al->image('field_4_image_fID', 'field_4_image_fID', 'Choose Image', $field_4_image); ?>
</div>

<div class="ccm-block-field-group">
	<h2>image5</h2>
	<?php  echo $al->image('field_5_image_fID', 'field_5_image_fID', 'Choose Image', $field_5_image); ?>
</div>


