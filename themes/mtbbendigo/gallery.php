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
						<div class="fullwidth-content-container container-separator">
							<article>
							<?php 
								$g = new Area('Main');
								$g->display($c);
							?>
							</article>
						</div>
					</div>
				</div>
				<div class="video-container">
					<div class="row">
						<div class="large-6 columns">
							<div class="container-separator">
							<?php 
								$a = new Area('Add Left Video');
								$a->display($c);
							?>
							</div>
						</div>
						<div class="large-6 columns">
							<div class="container-separator">
							<?php 
								$v = new Area('Add Right Video');
								$v->display($c);
							?>
							</div>
						</div>
					</div>
				</div>
			</div>
 		</div> <!-- End inner-container -->
        <div class="middle-bottom-border"></div>
        <div class="bottom-content-border"></div>
  	</div>

</div><!-- End top row -->

<div class="footer-separator"></div>

</div>
</div>
</div>
			
<?php  $this->inc('elements/footer.php'); ?>