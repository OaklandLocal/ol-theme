<?php
// $Id: page.tpl.php,v 1.1.2.1 2009/02/24 15:34:45 dvessel Exp $
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
  "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="<?php print $language->language ?>" lang="<?php print $language->language ?>" dir="<?php print $language->dir ?>">

<head>
  <title><?php print $head_title; ?></title>
  <?php print $head; ?>
  <?php print $styles; ?>
  <?php print $scripts; ?>
</head>

<body class="<?php print $body_classes; ?>">
<?php if (!empty($admin)) print $admin; ?>
  <div id="page" class="container-16 clear-block">

    <?php if ($top): ?>
      <div id="top-region" class="region grid-16 clear-block">
        <?php print $top; ?>
      </div>
    <?php endif; ?>
    
    <div id="site-header" class="clear-block">
      <div id="branding" class="grid-3 clear-block">
      <?php if ($linked_logo_img): ?>
        <span id="logo" class="grid-3 alpha omega"><?php print $linked_logo_img; ?></span>
      <?php endif; ?>
      <?php if ($linked_site_name): ?>
        <h1 id="site-name" class="grid-3 alpha omega"><?php print $linked_site_name; ?></h1>
      <?php endif; ?>
      <?php if ($site_slogan): ?>
        <div id="site-slogan" class="grid-3 alpha omega"><?php print $site_slogan; ?></div>
      <?php endif; ?>
      </div>

        <div class="region grid-13 clear-block">
            <?php print $login; ?>
        </div>

    <?php if ($main_menu_links || $secondary_menu_links): ?>
      <div id="site-menu" class="grid-16 clear-block">
        <?php //print $main_menu_links; ?>
        <?php print $secondary_menu_links; ?>
      </div>
    <?php endif; ?>


    </div>


    <?php if ($header): ?>
      <div id="header-region" class="region grid-16 clear-block">
        <?php print $header; ?>
      </div>
    <?php endif; ?>
    
    <?php if ($mainmenu): ?>
    <div id="mainmenu" class="region clear-block">
    	<div class="grid-16 clear-block">
        <?php print $mainmenu; ?>
      </div>
    </div>
    <?php endif; ?>

    <div id="main" class="column <?php if ($is_front): ?><?php print ns('grid-16', $left, 5, $right, 3) ?><?php else: ?><?php print ns('grid-16', $left, 4, $right, 3) ?><?php endif; ?>">
          <?php if ($tabs): ?>
            <div class="tabs"><?php print $tabs; ?></div>
        <?php endif; ?>
        <?php print $messages; ?>
        <?php print $help; ?>

            <?php if ($topicheader): ?>
                <div id="topicheader" class="region">
                    <?php print $topicheader; ?>
                </div>
            <?php endif; ?>
    
        <div id="main-content" class="region clear-block">
            <?php print $content; ?>
            <?php if ($is_front): ?>
                <?php print $subcontent; ?>
            <?php endif; ?>
        </div>
    </div>
    
    <?php if ($left): ?>
    <div id="sidebar-left" class="column sidebar region <?php if ($is_front): ?><?php print "grid-5" ?><?php else: ?><?php print "grid-4" ?><?php endif; ?>">
        <?php print $left; ?>
    </div>
    <?php endif; ?>
    
    <?php if ($right): ?>
    <div id="sidebar-right" class="column sidebar region grid-3">
      <span>Advertisements</span>
      <?php print $right; ?>
    </div>
    <?php endif; ?>

    <div id="navigation" class="region grid-16 clear-block">
        <?php print $navigation; ?>
    </div>

    <div id="footer" class="region grid-16 clear-block">
        <?php if ($footer): ?>
            <?php print $footer; ?>
        <?php endif; ?>

        <?php if ($footer_message): ?>
            <div id="footer-message">
                <?php print $footer_message; ?>
            </div>
        <?php endif; ?>
    </div>	

  </div>
  <?php print $closure; ?>
</body>
</html>
