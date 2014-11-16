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

    <?php $uinfo = new User();
    if($uinfo->IsLoggedIn())
    {
        echo('<script src="'.$this->getThemePath().'/javascripts/foundation/foundation.js"></script>');
        echo('<script src="'.$this->getThemePath().'/javascripts/foundation/foundation.orbit.js"></script>');
        echo('<script src="'.$this->getThemePath().'/bower_components/foundation/js/foundation.min.js');
        echo('<script src="'.$this->getThemePath().'/js/app.js"></script>');
    }
    else{
        echo('<script src="'.$this->getThemePath().'/javascripts/vendor/jquery.js"></script>');
        echo('<script src="'.$this->getThemePath().'/javascripts/foundation/foundation.js"></script>');
        echo('<script src="'.$this->getThemePath().'/javascripts/foundation/foundation.orbit.js"></script>');
        echo('<script src="'.$this->getThemePath().'/bower_components/jquery/dist/jquery.min.js"></script>');
        echo('<script src="'.$this->getThemePath().'/bower_components/foundation/js/foundation.min.js"></script>');
        echo('<script src="'.$this->getThemePath().'/js/app.js"></script>');
    }
    ?>
	<script>
        $(document).foundation({
            orbit: {
                animation_speed: 800, pause_on_hover: false
            }
        });
  	</script>

<?php  Loader::element('footer_required'); ?>

</body>
</html>