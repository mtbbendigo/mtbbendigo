<?php  defined('C5_EXECUTE') or die("Access Denied.");

class LineSeparatorBlockController extends BlockController {
	
	protected $btName = 'Line Separator';
	protected $btDescription = 'Adds an hr element as html with top and bottom padding as defined in the sites css file.';
	
	protected $btInterfaceWidth = "700";
	protected $btInterfaceHeight = "450";
	
	protected $btCacheBlockRecord = true;
	protected $btCacheBlockOutput = true;
	protected $btCacheBlockOutputOnPost = true;
	protected $btCacheBlockOutputForRegisteredUsers = false;
	protected $btCacheBlockOutputLifetime = CACHE_LIFETIME;
	








}
