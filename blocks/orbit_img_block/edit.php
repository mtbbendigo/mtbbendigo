<?php  defined('C5_EXECUTE') or die("Access Denied.");
$al = Loader::helper('concrete/asset_library');
?>

<style type="text/css" media="screen">
	.ccm-block-field-group h2 { margin-bottom: 5px; }
	.ccm-block-field-group td { vertical-align: middle; }
</style>

<div class="ccm-block-field-group">
	<h2>Image1</h2>
	<?php  echo $al->image('field_1_image_fID', 'field_1_image_fID', 'Choose Image', $field_1_image); ?>
</div>

<div class="ccm-block-field-group">
	<h2>Caption1</h2>
	<textarea id="field_2_textarea_text" name="field_2_textarea_text" rows="5" style="width: 95%;"><?php  echo $field_2_textarea_text; ?></textarea>
</div>

<div class="ccm-block-field-group">
	<h2>Image2</h2>
	<?php  echo $al->image('field_3_image_fID', 'field_3_image_fID', 'Choose Image', $field_3_image); ?>
</div>

<div class="ccm-block-field-group">
	<h2>Caption2</h2>
	<textarea id="field_4_textarea_text" name="field_4_textarea_text" rows="5" style="width: 95%;"><?php  echo $field_4_textarea_text; ?></textarea>
</div>

<div class="ccm-block-field-group">
	<h2>Image3</h2>
	<?php  echo $al->image('field_5_image_fID', 'field_5_image_fID', 'Choose Image', $field_5_image); ?>
</div>

<div class="ccm-block-field-group">
	<h2>Caption3</h2>
	<textarea id="field_6_textarea_text" name="field_6_textarea_text" rows="5" style="width: 95%;"><?php  echo $field_6_textarea_text; ?></textarea>
</div>

<div class="ccm-block-field-group">
	<h2>Image4</h2>
	<?php  echo $al->image('field_7_image_fID', 'field_7_image_fID', 'Choose Image', $field_7_image); ?>
</div>

<div class="ccm-block-field-group">
	<h2>Caption4</h2>
	<textarea id="field_8_textarea_text" name="field_8_textarea_text" rows="5" style="width: 95%;"><?php  echo $field_8_textarea_text; ?></textarea>
</div>

<div class="ccm-block-field-group">
	<h2>Image5</h2>
	<?php  echo $al->image('field_9_image_fID', 'field_9_image_fID', 'Choose Image', $field_9_image); ?>
</div>

<div class="ccm-block-field-group">
	<h2>Caption5</h2>
	<textarea id="field_10_textarea_text" name="field_10_textarea_text" rows="5" style="width: 95%;"><?php  echo $field_10_textarea_text; ?></textarea>
</div>


