<?php 
defined('C5_EXECUTE') or die("Access Denied.");
$this->inc('elements/header.php'); ?>

<div class="row">
	<div class="large-12 columns">
		<?php
			$nav = BlockType::getByHandle('autonav');
			$nav->controller->orderBy = 'display_asc';
			$nav->controller->displayPages = 'second_level';
			$nav->controller->displaySubPages = 'all';
			$nav->controller->displaySubPageLevels = 'all';
			$nav->controller->displaySubPageLevelsNum = 1;
			$nav->render('templates/sub-menu');
		?>
		
	</div>
</div>


<div class="footer-separator"></div>

</div>
</div>
</div>
			
<?php  $this->inc('elements/footer.php'); ?>