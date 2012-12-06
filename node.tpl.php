<div id="node-<?php print $node->nid; ?>" class="node<?php if ($sticky) { print ' sticky'; } ?><?php if (!$status) { print ' node-unpublished'; } ?> clear-block">

<h2><a href="<?php print $node_url ?>" title="<?php print $title ?>"><?php print $title ?></a></h2>


  <div class="meta">
  <?php if ($submitted): ?>
    <span class="submitted"><?php print $submitted ?></span>
  <?php endif; ?>
  </div>
    <?php print $node->field_image[0]['view']; ?>
    <p><em><?php print $node->field_image[0]['data']['description']; ?></em></p>
  <div class="content">
    <?php print $content ?>
  </div>

        <?php print $links; ?>
    
</div>
