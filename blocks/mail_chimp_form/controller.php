<?php  defined('C5_EXECUTE') or die("Access Denied.");

class MailChimpFormBlockController extends BlockController {
	
	protected $btName = 'Mail Chimp Sign up Form';
	protected $btDescription = 'Enables members to sign up to the clubs newsletter';
	
	protected $btInterfaceWidth = "700";
	protected $btInterfaceHeight = "450";
	
	protected $btCacheBlockRecord = true;
	protected $btCacheBlockOutput = true;
	protected $btCacheBlockOutputOnPost = true;
	protected $btCacheBlockOutputForRegisteredUsers = false;
	protected $btCacheBlockOutputLifetime = CACHE_LIFETIME;
	








}
