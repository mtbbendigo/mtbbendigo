<?php  defined('C5_EXECUTE') or die("Access Denied.");?>

<div class="article-container">
	<div class="row">
		<div class="large-12 columns">
			<article>
			<?php  if (!empty($field_1_textbox_text)): ?>
				<?php echo '<div class="news-article-title"><h5>';?>
					<?php  echo htmlentities($field_1_textbox_text, ENT_QUOTES, APP_CHARSET); ?>
				<?php echo '</h5></div>';?>
			<?php  endif; ?>
		
			<?php  if (!empty($field_2_wysiwyg_content)): ?>
				<?php echo'<div class="article-item-text">';?>
					<?php  echo $field_2_wysiwyg_content; ?>
				<?php echo '</div>';?>
			<?php  endif; ?>
			</article>
		</div>
	</div>
</div>

