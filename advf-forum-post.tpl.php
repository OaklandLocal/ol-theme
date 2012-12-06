<?php
// $Id: advf-forum-post.tpl.php,v 1.1.2.21 2009/02/07 04:40:48 michellec Exp $

/**
 * @file
 *
 * Theme implementation: Template for each forum post whether node or comment.
 *
 * All variables available in node.tpl.php and comment.tpl.php for your theme
 * are available here. In addition, Advanced Forum makes available the following
 * variables:
 *
 * - $top_post: TRUE if we are formatting the main post (ie, not a comment)
 * - $reply_link: Text link / button to reply to topic.
 * - %total_posts: Number of posts in topic (not counting first post).
 * - $new_posts: Number of new posts in topic, and link to first new.
 * - $links_array: Unformatted array of links.
 * - $account: User object of the post author.
 * - $name: User name of post author.
 * - $author_pane: Entire contents of advf-author-pane.tpl.php.

 */
?>

<h2><?php print $title ?></h2>

<?php if ($top_post): ?>

  <?php print $topic_header ?>
  
  <?php $classes .= $node_classes; ?>
  <div id="node-<?php print $node->nid; ?>" class="top-post forum-post <?php print $classes; ?> clear-block">

<?php else: ?>
  <?php $classes .= $comment_classes; ?>
  <div id="comment-<?php print $comment->cid; ?>" class="forum-post <?php print $classes; ?> clear-block">
<?php endif; ?>

  <div class="post-info clear-block">

    <?php if (!$top_post): ?>
      <span class="post-num"><?php print $comment_link . ' ' . $page_link; ?></span>
    <?php endif; ?>
  </div>

  <div class="forum-post-wrapper">

    <div class="forum-post-panel-sub">
      <?php print $author_pane; ?>
    </div>

    <div class="forum-post-panel-main clear-block">
      <div class="content">
<p><?php print $submitted ?>
<?php if (!$top_post && !empty($comment->new)): ?>
        <a id="new"><span class="new">(<?php print $new ?>)</span></a>
      <?php endif; ?></p>
        <?php print $content ?>
      </div>

    </div>
  </div>

  <div class="forum-post-footer clear-block">

  </div>
</div>
