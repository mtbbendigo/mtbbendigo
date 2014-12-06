<?php  defined('C5_EXECUTE') or die("Access Denied.");
?>

<?php  if (!empty($field_1_image)): ?>
    <div class="row">
        <div class="small-12 columns">
            <ul class="clearing-thumbs clearing-padding" data-clearing>
                <li><a href="<?php  echo $field_1_image->src; ?>"><img data-caption="<?php  echo $field_1_image_altText; ?>" src="<?php  echo $field_1_image->src; ?>" style="border: 4px solid white; -moz-box-shadow: 0 0 8px #888; -webkit-box-shadow: 0 0 8px #888;
                                    -o-box-shadow: 0 0 8px #888; box-shadow: 0 0 8px #888;"></a></li>
            </ul>
        </div>
    </div>
<?php  endif; ?>


