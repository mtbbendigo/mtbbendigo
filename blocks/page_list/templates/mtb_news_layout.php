<?php 
	defined('C5_EXECUTE') or die("Access Denied.");
	$th = Loader::helper('text');
?>

<?php  if(!$previewMode && $controller->rss):
    $btID = $b->getBlockTypeID();
    $bt = BlockType::getByID($btID);
    $uh = Loader::helper('concrete/urls');
    $rssUrl = $controller->getRssUrl($b, 'blog_rss');
    $rssIcon = $uh->getBlockTypeAssetsURL($bt, 'rss.png');
    $rssTitle = $controller->rssTitle;
    ?>

<?php  endif; ?>
<div class="rss-container">
    <div class="row">
        <div class=" medium-7 columns">
            <h3>Latest News</h3>
        </div>
        <div class=" medium-5 columns">
            <div id="rss">
                <?php //echo ('<a href="'.$rssUrl.'" target="blank">'.t('Subscribe to RSS Feed').'</a>'); ?>
                <?php //echo ('<a href="'.$rssUrl.'" target="_blank"><img src="'.$rssIcon.'" width="14" height="14" alt="'.t('RSS Icon').'" title="'.t('RSS Feed').'"></a>'); ?>
            </div>

        </div>
    </div>
    <link href="<?php  echo BASE_URL.$rssUrl; ?>" rel="alternate" type="application/rss+xml" title="<?php  echo $rssTitle; ?>" />
</div>
<div class="news-article-divider"></div>

	<?php 
	$index = 0; 
	$isFirst = true; //So first item in list can have a different css class (e.g. no top border)
	$excerptBlocks = ($controller->truncateSummaries ? 1 : null); //1 is the number of blocks to include in the excerpt
	$truncateChars = ($controller->truncateSummaries ? $controller->truncateChars : 128);
	foreach ($cArray as $cobj):
		$title = $cobj->getCollectionName();
		$date = $cobj->getCollectionDatePublic(DATE_APP_GENERIC_MDY_FULL);
		$author = $cobj->getVersionObject()->getVersionAuthorUserName();
		$link = $nh->getLinkToCollection($cobj);
		//$firstClass = $isFirst ? 'first-entry' : '';
		
		$entryController = Loader::controller($cobj);
		
		if(method_exists($entryController,'getCommentCountString')) {
			$comments = $entryController->getCommentCountString('%s '.t('Comment'), '%s '.t('Comments'));
		}
		$isFirst = false;
		
		if($index > 0)
		{
			echo '<div class="news-article-divider"></div>';
		}
	?>
	
		<?php 
			$newsBlockTypes = array('left_text_right_img_news', 'right_text_left_img_news', 'top_img_bttm_content_news', 'full_width_text_news', 'text_and_picture_news');
			$excerpt = '';
			$summaryTitle = '';
			$pageBlocks = $cobj->getBlocks('Main');
			if (count($pageBlocks) > 0) {
				foreach ($pageBlocks as $pb) {
					if ($pb->btHandle == $newsBlockTypes[0] || $pb->btHandle == $newsBlockTypes[1] || $pb->btHandle == $newsBlockTypes[2] || $pb->btHandle == $newsBlockTypes[3] || $pb->btHandle == $newsBlockTypes[4]) {
						$summaryTitle = 'Oops! Summary Title is missing.';
// 						if(!empty($pb->getController()->getSummaryTitle()))
// 						{
							$summaryTitle = $pb->getController()->getSummaryTitle();
// 						}
						$excerpt = 'Oops! The News articles content is empty.';
// 						if(!empty($pb->getController()->getContentSummary()))
// 						{
							$excerpt = $pb->getController()->getContentSummary(); //NOTE: getContent() function is specific to the content block type -- it cannot be called on just any kind of block!
						    if ($controller->truncateSummaries) {
						 		//$excerpt = $th->shorten($excerpt, $controller->truncateChars); //Concrete5.4.2.1 and lower
						 	    $excerpt = $th->shortenTextWord($excerpt, $controller->truncateChars); //Concrete5.4.2.2 and higher
						 	}
// 						}
					 break;
					}
				}
			}
			?>
			
			<div class="row">
				<div class="large-12 columns">
					<div class="news-title-link">
						<h4>
							<a href="<?php  echo $link; ?>"><?php  echo $summaryTitle ?></a>
						</h4>
					</div>
				</div>
			</div>
			
			<div class="row">
				<div class="large-12 columns">
					<div class="news-summary-list-container news-excerpt">
						<?php echo '<p>'.$excerpt.'</p>';?>
					</div>
				</div>
			</div>
		
		
		<div class="row">
			<div class="large-12 columns">
				<div class="news-article-footer">
					<span class="news-article-author"><?php echo t('Posted on %s', $date); ?></span>
					<span class="read-more"><?php  echo $comments; ?> <a href="<?php  echo $link; ?>"><?php  echo t('Read full post'); ?> &raquo;</a></span>
				</div>
			</div>
		</div>

		<?php $index = $index + 1;?>
	<?php  endforeach; ?>


<div id="blog-index-foot">

	<?php  if ($paginate && $num > 0 && is_object($pl)): 
		echo '<br/><div class="news-article-divider"></div>'; ?>
		<div id="mtb-news-pagination">
			<?php 
			$summary = $pl->getSummary();
			if ($summary->pages > 1){
				$paginator = $pl->getPagination();
				echo '<div class="row">';
				echo '<div class="small-4 columns">';
				echo '<div class="mtb-pagination-left">&laquo;&nbsp;'.$paginator->getPrevious('Newer Posts').'</div>'; 
				echo '</div><div class="small-4 columns">';
				echo '<div class="hide-for-small"><div id="pagination-numbers">'.$paginator->getPages().'</div></div>';
				echo '</div><div class="small-4 columns">';
				echo '<div class="mtb-pagination-right">'.$paginator->getNext('Older Posts').'&nbsp;&raquo;</div></div>';
				echo '</div>';
			}
			?>
		</div>
	<?php  endif; ?>
</div>


