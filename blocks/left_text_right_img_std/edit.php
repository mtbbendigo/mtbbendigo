<?php  defined('C5_EXECUTE') or die("Access Denied.");
$al = Loader::helper('concrete/asset_library');
Loader::element('editor_config');
?>

<style type="text/css" media="screen">
	.ccm-block-field-group h2 { margin-bottom: 5px; }
	.ccm-block-field-group td { vertical-align: middle; }
</style>

<div class="ccm-block-field-group">
	<h2>text-content</h2>
	<?php  Loader::element('editor_controls'); ?>
	<textarea id="field_1_wysiwyg_content" name="field_1_wysiwyg_content" class="ccm-advanced-editor"><?php  echo $field_1_wysiwyg_content; ?></textarea>
</div>

<div class="ccm-block-field-group">
	<h2>right-image</h2>
	<?php  echo $al->image('field_2_image_fID', 'field_2_image_fID', 'Choose Image', $field_2_image); ?>

	<table border="0" cellspacing="3" cellpadding="0" style="width: 95%; margin-top: 5px;">
		<tr>
			<td align="right" nowrap="nowrap"><label for="field_2_image_externalLinkURL">Link to URL:</label>&nbsp;</td>
			<td align="left" style="width: 100%;"><?php  echo $form->text('field_2_image_externalLinkURL', $field_2_image_externalLinkURL, array('style' => 'width: 100%;')); ?></td>
		</tr>
	</table>
</div>


