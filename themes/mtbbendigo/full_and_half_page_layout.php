<?php 
defined('C5_EXECUTE') or die("Access Denied.");
$this->inc('elements/header.php'); ?>

<div class="row">
	<div class="large-12 columns">
		<div class="title-wrapper">
			<!-- Start Navigation -->
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
			<!-- End Navigation -->
		</div>
	</div>
</div>

<div class="row">
	<div class="large-12 columns">
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
						<div class="full-width-container">
							<?php 
								$a = new Area("Main");
								$a->display($c);
							?>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="large-6 columns">
						<div class="half-width-container">
						<?php 
							$leftBlock = new Area("Add To Left");
							$leftBlock->display($c);
						?>
						</div>
					</div>
					<div class="large-6 columns">
						<div class="half-width-container">
						<?php 
							$rightBlock = new Area("Add To Right");
							$rightBlock->display($c);
						?>
						</div>
					</div>
				</div>	
			</div>
		</div><!-- End inner container border -->
		
		<div class="middle-bottom-border"></div>
 		<div class="bottom-content-border"></div>
		
	</div>
</div><!-- End Row -->

<div class="footer-separator"></div>

</div>
</div>
</div>

<?php  $this->inc('elements/footer.php'); ?>