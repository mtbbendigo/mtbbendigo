<?php  defined('C5_EXECUTE') or die("Access Denied.");
$nh = Loader::helper('navigation');
?>
<div class="article-container">
    <article>
        <div class="row">
            <div class="large-12 columns">
                <div class="news-article-title">
                    <h5>
                     <?php  if (!empty($field_1_textbox_text)): ?>
                        <?php  echo htmlentities($field_1_textbox_text, ENT_QUOTES, APP_CHARSET); ?>
                     <?php  endif; ?>
                    </h5>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="large-12 columns">
                <div class="article-item-text">
                    <?php  if (!empty($field_2_wysiwyg_content)): ?>
                        <?php  echo $field_2_wysiwyg_content; ?>
                    <?php  endif; ?>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="large-12 columns">
                <div class="article-image-container">
                    <?php  if (!empty($field_3_image)): ?>
                        <?php  if (!empty($field_3_image_externalLinkURL)) { ?><a href="<?php  echo $this->controller->valid_url($field_3_image_externalLinkURL); ?>" target="_blank"><?php  } ?><img src="<?php  echo $field_3_image->src; ?>" width="<?php  echo $field_3_image->width; ?>" height="<?php  echo $field_3_image->height; ?>" alt="" style="border: 4px solid white; -moz-box-shadow: 0 0 8px #888; -webkit-box-shadow: 0 0 8px #888;
							-o-box-shadow: 0 0 8px #888; box-shadow: 0 0 8px #888;"/>
                            <?php  if (!empty($field_3_image_externalLinkURL)) { ?></a><?php  } ?>
                    <?php  endif; ?>

                    <?php  if (!empty($field_4_image)): ?>
                        <?php  if (!empty($field_4_image_internalLinkCID)) { ?><a href="<?php  echo $nh->getLinkToCollection(Page::getByID($field_4_image_internalLinkCID), true); ?>"><?php  } ?><img src="<?php  echo $field_4_image->src; ?>" width="<?php  echo $field_4_image->width; ?>" height="<?php  echo $field_4_image->height; ?>" alt="" style="border: 4px solid white; -moz-box-shadow: 0 0 8px #888; -webkit-box-shadow: 0 0 8px #888;
							-o-box-shadow: 0 0 8px #888; box-shadow: 0 0 8px #888;"/>
                            <?php  if (!empty($field_4_image_internalLinkCID)) { ?></a><?php  } ?>
                    <?php  endif; ?>

                </div>
            </div>
        </div>


    <article>
</div>


