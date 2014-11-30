<?php  defined('C5_EXECUTE') or die("Access Denied.");
?>

<div class="article-container">
    <div class="row">
        <div class="large-12 columns">
            <article>
            <?php  if (!empty($field_1_wysiwyg_content)): ?>
                <?php echo'<div class="article-item-text">';?>
                    <?php  echo $field_1_wysiwyg_content; ?>
                <?php echo '</div>';?>
            <?php  endif; ?>
            </article>
        </div>
    </div>
</div>


