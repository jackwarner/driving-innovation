<?php
// $Id: page.tpl.php,v 1.4 2010/01/07 14:03:31 sunn Exp $
?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
  "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="<?php print $language->language ?>" lang="<?php print $language->language ?>" dir="<?php print $language->dir ?>">
  <head>
    <?php print $head ?>
    <title><?php print $head_title ?></title>
    <?php print $styles ?>
    <?php print $scripts ?>
  </head>
 <body>
<div id="container">
<div id="header">
<div id="logo"><a href="<?php print base_path() ?>"><img src="<?php print $logo ?>" alt="logo"/></a></div>
<div id="nav">
                <?php if (!empty($primary_links)): ?>
                  <?php print theme('links', $primary_links, array('class' => 'links primary-links')); ?>
                <?php endif; ?>
	</div>
	</div><!-- end of header -->
	<div id="content-area">
		<div id="leftside">
			<?php if ($messages): ?><div class="message"><?php print $messages ?></div><?php endif; ?>
		  <div class="tabs"><?php print $tabs ?><?php print $tabs2 ?></div>
		  <?php print $content ?>

		</div><!-- end of leftside -->
		<div id="rightside"><?php print $rightside ?></div>
	</div><!-- end of content-area -->
<div class="clear"></div>
</div><!-- end of container -->
<div id="footer"><?php print $footer_message ?></div>

<?php print $closure ?>


</body>
</html>
