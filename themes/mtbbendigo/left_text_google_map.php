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
				<div class="row">
					<div class="large-12 columns">
						<div class="top-bar-container">
						<?php
							$nav = BlockType::getByHandle('autonav');
							$nav->controller->orderBy = 'display_asc';
							$nav->controller->displayPages = 'second_level';
							$nav->controller->displaySubPages = 'all';
							$nav->controller->displaySubPageLevels = 'all';
							$nav->controller->displaySubPageLevelsNum = 1;
							$nav->render('templates/mobile_topbar');
						?>	
					 	</div>
					</div>
				</div>
					
  				<div class="row">
    			<!-- Main Blog Content -->
        		<div class="large-9 push-3 columns" role="content">
	        		<div class="content-container container-separator">
	        			<div class="row">
	        				<div class="large-4 columns">
	        					<article>
						 			<?php  
										$a = new Area('Main');
										$a->display($c);
									?>
						      </article>	
	        				</div>
	        				<div class="large-8 columns">
	        					<div class="map-container">
	        						<div class="map-border">
			        					<?php 
			        						$map = new Area('Premium Google Map');
			        						$map->display($c);
			        					?>
	        						</div>
	        					</div>
	        				</div>
	        			</div>
				      
				      <?php
				      	//I decided to add Designer content blocks here instead of defining full width (large-12) column
				      	//because the Title can be <h2> default and an <hr> can be added as a separator by default.
				      	//NOPE I NEED A BETTER WAY BECAUSE THE LAST BLOCK WILL ALWAYS FINISH WITH A HR
				      	$placesToRide = new Area('Places to Ride');
				      	$u = new user();
				      	$g = Group::getByName('Administrators');
				      	
				      	if ($u->inGroup($g) || $u->isSuperUser()) {
				      		$placesToRide->display($c);
				      	}
				      	else
				      	{
					      	$blocks = $placesToRide->getAreaBlocksArray($c);
					      	$numberOfBlocks = count($blocks);
					      	$index = 0;
					      	$separator = '<div class="block-content-separator">&nbsp;</div>';
					      	echo $separator;
					      	foreach($blocks as $b)
					      	{
					      		$index = $index + 1;
					      		echo '<div class="trails-content-container">';
					      		$b->display();
					      		echo '</div>';
					      		if($index < $numberOfBlocks)
					      		{
					      			echo $separator;
					      		}
					      	}
				      	}
				      	
				      ?>
				      
			      	</div>
    			</div> <!-- End Main Content -->
 
				<!-- Sidebar -->
		 		<div class="large-3 pull-9 columns">
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