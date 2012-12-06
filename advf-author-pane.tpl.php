<?php
// $Id: advf-author-pane.tpl.php,v 1.1.2.11 2009/03/30 15:33:50 michellec Exp $

/**
 * @file
 * Theme implementation to display information about the post/profile author.
 *
 * See author-pane.tpl.php in Author Pane module for a full list of variables.
 */
?>

<div class="author-pane">
 <div class="author-pane-inner">
    <div class="author-pane-name-status author-pane-section">


      <?php if (!empty($picture)): ?>
        <?php print $picture; ?>
      <?php endif; ?>

    </div>
  </div>
</div>
