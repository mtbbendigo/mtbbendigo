ccmValidateBlockForm = function() {
	
	if ($('#field_3_image_fID-fm-value').val() == '' || $('#field_3_image_fID-fm-value').val() == 0) {
		ccm_addError('Missing required image: Image');
	}


	return false;
}
