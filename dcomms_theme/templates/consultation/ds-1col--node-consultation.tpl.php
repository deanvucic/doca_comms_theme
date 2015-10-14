<?php

/**
 * @file
 * Display Suite 1 column template.
 */
?>
<<?php print $ds_content_wrapper; print $layout_attributes; ?> class="ds-1col <?php print $classes;?> clearfix">

<?php if (isset($title_suffix['contextual_links'])): ?>
    <?php print render($title_suffix['contextual_links']); ?>
<?php endif; ?>

<?php if ($view_mode == "full"): ?>
    <div class="layout-max spacer page-description">
        <div class="layout-sidebar__main">
            <?php print $node->field_consultation_summary[LANGUAGE_NONE][0]['safe_value']; ?>
        </div>
    </div>

    <?php if(isset($service_links)): ?>
        <div class="layout-max spacer">
            <?php print $service_links; ?>
        </div>
    <?php endif; ?>
  
<?php endif; ?>

<?php print $ds_content; ?>
</<?php print $ds_content_wrapper ?>>

<?php if (!empty($drupal_render_children)): ?>
    <?php print $drupal_render_children ?>
<?php endif; ?>

<?php if ($view_mode == "full" && isset($formal_submission_block['content']) && $consultation['date_status'] === 'current'): ?>
    <div class="bordered palette__light-grey">
        <div class="layout-max">
            <h2 class="spacer">Post-closure Submission</h2>
        </div>
        <?php print render($formal_submission_block['content']); ?>
    </div>
<?php endif; ?>
