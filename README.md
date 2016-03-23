# Lateral theme 0.6.5

Yellow theme with fixed sidebar, inspired by Indexhibit. [See example](http://eatock.com).

## How do I install this?

1. Download and install [Yellow](https://github.com/datenstrom/yellow/).
2. Download lateral.css, copy it into your `system/themes` folder.
3. Download content-main-lateral.php, content-sidebar-lateral.php and footer-lateral.php, copy them into your `system/themes/snippets` folder.
4. Open `system/themes/template/default.html` and change template or create a new one:  

    `<?php $yellow->snippet("header") ?>`  
    `<?php $yellow->snippet("content-sidebar-lateral") ?>`  
    `<?php $yellow->snippet("content-main-lateral") ?>`  
    `<?php $yellow->snippet("footer-lateral") ?>`

5. To enable the theme open file system/config/config.ini and change Theme: lateral.

To uninstall delete the theme files and set default settings.

## How to use lateral theme?

Lateral works with the custom `navigation-sidebar` or with a custom `sidebar.txt`. Otherwise, the classical navigation is displayed. [Learn more](http://developers.datenstrom.se/help/yellow-templates).

Lateral is responsive: when the browser window is minimized, classical navigation is displayed and fixed sidebar is not.

If you install another snippet like blog or wiki, you probably need to adapt them like this:

    <div class="page">
      <div class="content sidebar">
        <div class="container"></div>
      </div>
      <div class="content main">
        <div class="container"></div>
        <div class="footer"></div>
      </div>
    </div>

## [Issue #102](https://github.com/datenstrom/yellow/issues/102#issuecomment-137946128) - If you want a central sidebar

If you want a central sidebar, adjust the header snippet. For example replace:

    <?php if($page = $yellow->pages->find($yellow->lookup->getDirectoryLocation($yellow->page->location).$yellow->page->get("sidebar"))) $yellow->page->setPage("sidebar", $page) ?>

with this line:

    <?php if($page = $yellow->pages->find('/'.$yellow->page->get("sidebar"))) $yellow->page->setPage("sidebar", $page) ?>


