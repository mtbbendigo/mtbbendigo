<?php  defined('C5_EXECUTE') or die("Access Denied.");
$al = Loader::helper('concrete/asset_library');
Loader::element('editor_config');
?>

<style type="text/css" media="screen">
	.ccm-block-field-group h2 { margin-bottom: 5px; }
	.ccm-block-field-group td { vertical-align: middle; }
</style>

<div class="ccm-block-field-group">
	<h2>Title</h2>
	<textarea id="field_1_textarea_text" name="field_1_textarea_text" rows="5" style="width: 95%;"><?php  echo $field_1_textarea_text; ?></textarea>
</div>

<div class="ccm-block-field-group">
	<h2>Content</h2>
	<?php  Loader::element('editor_controls'); ?>
	<textarea id="field_2_wysiwyg_content" name="field_2_wysiwyg_content" class="ccm-advanced-editor"><?php  echo $field_2_wysiwyg_content; ?></textarea>
</div>

<div class="ccm-block-field-group">
	<h2>Image</h2>
	<?php  echo $al->image('field_3_image_fID', 'field_3_image_fID', 'Choose Image', $field_3_image); ?>

	<table border="0" cellspacing="3" cellpadding="0" style="width: 95%; margin-top: 5px;">
		<tr>
			<td align="right" nowrap="nowrap"><label for="field_3_image_externalLinkURL">Link to URL:</label>&nbsp;</td>
			<td align="left" style="width: 100%;"><?php  echo $form->text('field_3_image_externalLinkURL', $field_3_image_externalLinkURL, array('style' => 'width: 100%;')); ?></td>
		</tr>
	</table>
</div>


