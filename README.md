# Lateral theme 0.3.0

Yellow theme with fixed sidebar

## How do I install this?

1. Download and install [Yellow](https://github.com/datenstrom/yellow/).
2. Download [lateral.css](https://github.com/nibreh/yellow-theme-lateral/blob/master/lateral.css?raw=true), copy it into your `system/themes` folder.
3. To enable the theme open file `system/config/config.ini` and change `Theme: lateral`.

To uninstall delete the theme files and set default settings.

## How to use lateral theme?

Lateral works with the custom `navigation-sidebar` or with a custom `sidebar.txt`. [Learn more](http://developers.datenstrom.se/help/yellow-templates).

## How the fixed sidebar works?

A scroll bar appears when the fixed sidebar is higher than the web browser window. Otherwise, you can edit the position of `.with-sidebar .sidebar` in `lateral.css`. Change `position:fixed;` to `position:absolute;`

## Is it responsive?

Sidebar is displayed at the top on mobile device.

## How to use a central sidebar?

[Issue #102](https://github.com/datenstrom/yellow/issues/102#issuecomment-137946128) - If you want a central sidebar, adjust the header snippet. For example replace:

    <?php if($page = $yellow->pages->find($yellow->lookup->getDirectoryLocation($yellow->page->location).$yellow->page->get("sidebar"))) $yellow->page->setPage("sidebar", $page) ?>

with this line:

    <?php if($page = $yellow->pages->find('/'.$yellow->page->get("sidebar"))) $yellow->page->setPage("sidebar", $page) ?>


