<?php
/**
 * @file
 * Template implementation to display the image of channel.
 */
?>
<div class="channel-list__img-wrapper">
  <?php foreach ($items as $delta => $item): ?>
    <?php print render($item); ?>
  <?php endforeach; ?>
</div>
