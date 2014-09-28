<?php  defined('C5_EXECUTE') or die("Access Denied."); ?>
<!-- Mobile size Social -->

  <!-- Footer -->
  <div id="footer_wrapper">
   <div id="footer_inner_wrapper"> 
  <footer class="row">
    <div class="small-12 large-12 columns">
			<div class="footer-text">
				<br/><?php echo t('All rights reserved&nbsp;')?>&copy; <?php echo date('Y')?> <a href="<?php echo DIR_REL?>/"><?php echo SITE?></a>.
				<br/>
				<?php $u = new User();			
				 if ($u->isRegistered()) { ?>
				<?php  
					if (Config::get("ENABLE_USER_PROFILES")) 
					{
						$userName = '<a href="' . $this->url('/profile') . '">' . $u->getUserName() . '</a>';
					} 
					else 
					{
						$userName = $u->getUserName();
					}
				?>
				<?php echo t('Currently logged in as <b>%s</b>.', $userName)?> <a href="<?php echo $this->url('/login', 'logout')?>"><?php echo t('Sign Out')?></a>
				<?php  } ?>
					
				</div>
    </div>
  </footer>
  </div>
  
</div>

  <script>
  document.write('<script src=' +
  ('__proto__' in {} ? '<?php echo $this->getThemePath() ?>/javascripts/vendor/zepto' : '<?php echo $this->getThemePath() ?>/javascripts/vendor/jquery') +
  '.js><\/script>')
  </script>
  
  <script src="<?php echo $this->getThemePath() ?>/javascripts/foundation/foundation.js"></script>
	<script src="<?php echo $this->getThemePath() ?>/javascripts/foundation/foundation.alerts.js"></script>
	<script src="<?php echo $this->getThemePath() ?>/javascripts/foundation/foundation.clearing.js"></script>
	<script src="<?php echo $this->getThemePath() ?>/javascripts/foundation/foundation.cookie.js"></script>
	<script src="<?php echo $this->getThemePath() ?>/javascripts/foundation/foundation.dropdown.js"></script>
	<script src="<?php echo $this->getThemePath() ?>/javascripts/foundation/foundation.forms.js"></script>
	<script src="<?php echo $this->getThemePath() ?>/javascripts/foundation/foundation.interchange.js"></script>
	<script src="<?php echo $this->getThemePath() ?>/javascripts/foundation/foundation.joyride.js"></script>
	<script src="<?php echo $this->getThemePath() ?>/javascripts/foundation/foundation.magellan.js"></script>
	<script src="<?php echo $this->getThemePath() ?>/javascripts/foundation/foundation.orbit.js"></script>
	<script src="<?php echo $this->getThemePath() ?>/javascripts/foundation/foundation.placeholder.js"></script>
	<script src="<?php echo $this->getThemePath() ?>/javascripts/foundation/foundation.reveal.js"></script>
	<script src="<?php echo $this->getThemePath() ?>/javascripts/foundation/foundation.section.js"></script>
	<script src="<?php echo $this->getThemePath() ?>/javascripts/foundation/foundation.tooltips.js"></script>
	<script src="<?php echo $this->getThemePath() ?>/javascripts/foundation/foundation.topbar.js"></script>
	
	<script>
    	$(document).foundation('orbit', {animation_speed: 800, pause_on_hover: false});
  	</script>

<?php  Loader::element('footer_required'); ?>

</body>
</html>