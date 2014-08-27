<?php 
defined('C5_EXECUTE') or die("Access Denied.");
$this->inc('elements/header.php'); ?>
<!-- This is the default page when concrete cant find a page. -->	

<div class="row">
	<div class="large-12 columns">
		<div class="title-wrapper">
			<div id="title">Oops! Something went wrong</div>
		</div>
	</div>
</div>
 <!-- Main Page Content and Sidebar -->
 <div class="row">
 	<div class="large-12 columns">
 
		<div class="inner-container-border">
			<div class="inner-container">
  				<div class="row">
	    			<!-- Main Content -->
	        		<div class="large-12 columns" role="content">
	
		        		<div class="content-container container-separator">
							<?php echo '<h1>Page could not be found. Try clearing the cache.</h1>'?>
					    </div>
					    <div class="content-container container-separator">
					    	<article>
					 			<p>Contact mtbbendigo, let us know something went wrong.</p><br/>
						   	</article>
				      	</div>
	    			</div> 
				</div> <!-- end row -->
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