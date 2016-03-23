<?php if($yellow->page->isPage("sidebar")): ?>
<div class="content sidebar">
<div class="container">
<div class="sitename"><h2><a href="<?php echo $yellow->page->base."/" ?>"><i class="sitename-logo"></i><?php echo $yellow->page->getHtml("sitename") ?></a></h2></div>
<?php if($yellow->page->get("navigation") == "navigation-sidebar"): ?>
<?php $page = $yellow->page->getParentTop(false) ?>
<?php $pages = $page ? $page->getChildren(!$page->isVisible()): $yellow->pages->clean() ?>
<?php $yellow->snippet("navigation-sidebar", $pages, true) ?>
<?php else: ?>
<?php $page = $yellow->page->getPage("sidebar") ?>
<?php $page->setPage("main", $yellow->page) ?>
<?php $yellow->page->setLastModified($page->getModified()) ?>
<?php echo $page->getContent() ?>
<?php endif ?>
</div>
</div>
<?php endif ?>
