<?php 
defined('C5_EXECUTE') or die("Access Denied.");
$this->inc('elements/header.php'); ?>

<div class="row">
	<div class=" small-12 large-12 columns">
		<div class="title-wrapper">
			<!-- Start Main Title -->
			<div id="title">
				<h1>
				<?php 
					$main_title = $c->getAttribute('main_title');
					if(isset($main_title))
					{
						echo strtoupper($main_title);
					}
					else 
					{
						echo 'Oops, the Main Title is missing.';
					}
				?>
				</h1>
			</div>
			<!-- End Main Title -->
		</div>
	</div>
</div>
 <!-- Main Page Content and Sidebar -->
 <div class="row">
 	<div class="small-12 large-12 columns">
		<div class="inner-container-border">
			<div class="inner-container">
				<div class="mini-title">
					<h2>
					<?php 
						$mini_title = $c->getAttribute('mini_title');
						if(isset($mini_title))
						{
							echo strtoupper($mini_title);
						}
						else 
						{
							echo 'Oops, The Mini title is missing!';
						}
					?>
					</h2>
				</div>
				
				
				<?php
					//The row and column divs are specified in the mobile_topbar class,
					//This facilitates where the requested Parent page does not have any 
					//child pages - we dont want to show the top bar or create additional rows and columns. 
					$nav = BlockType::getByHandle('autonav');
					$nav->controller->orderBy = 'display_asc';
					$nav->controller->displayPages = 'second_level';
					$nav->controller->displaySubPages = 'all';
					$nav->controller->displaySubPageLevels = 'all';
					$nav->controller->displaySubPageLevelsNum = 1;
					//$nav->render('templates/mobile_topbar');
                    $nav->render('templates/mobile_topbar');
				?>	
					
					
  				<div class="row">
    			<!-- Main Blog Content -->
        		<div class="medium-9 medium-push-3 columns" role="content">
	        		<div class="content-container container-separator">
				      <article>
				 			<?php  
								$a = new Area('Main');
								$a->display($c);
							?>
				      </article>
			      	</div>
    			</div> <!-- End Main Content -->
 
				<!-- Sidebar -->
		 		<div class="medium-3 medium-pull-9 columns">
		 		<div class="container-separator">
					<div class="sidebar-container">
						<div class="hide-for-small">
							<?php
								$nav = BlockType::getByHandle('autonav');
								$nav->controller->orderBy = 'display_asc';
								$nav->controller->displayPages = 'second_level';
								$nav->controller->displaySubPages = 'all';
								$nav->controller->displaySubPageLevels = 'all';
								$nav->render('templates/side_nav');
							?>
						</div>
						<?php 
							$sb = new Area('Side Bar');
							$sb->display($c);
						?>	

					</div>
				</div> <!-- End Sidebar -->
			</div> <!-- end row -->
			</div>
 		</div> <!-- End inner-container -->
  	</div>
  	
 	<div class="middle-bottom-border"></div>
 	<div class="bottom-content-border"></div>
 
 
 	</div>
</div><!-- End top row -->

<div class="footer-separator"></div>

</div>
</div>
</div>
			
<?php  $this->inc('elements/footer.php'); ?>