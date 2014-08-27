ccmValidateBlockForm = function() {
	
	if ($('#field_2_image_fID-fm-value').val() == '' || $('#field_2_image_fID-fm-value').val() == 0) {
		ccm_addError('Missing required image: Image');
	}


	return false;
}
