# Lateral theme 0.6.0

Yellow theme with fixed sidebar

## How do I install this?

1. Download and install [Yellow](https://github.com/datenstrom/yellow/).
2. [Download Lateral theme](https://github.com/nibreh/yellow-theme-lateral/archive/master.zip). If you are using Safari, right click and select 'Download file as'.
3. Copy `master.zip` into your `system/themes` folder.
4. Open `system/config/config.ini` and change `Theme: lateral`.

To uninstall delete the theme files and set default settings.

## How to use lateral theme?

Lateral works with the custom `navigation-sidebar` or with a custom `sidebar.txt`. [Learn more](http://developers.datenstrom.se/help/yellow-templates).

## How the fixed sidebar works?

The body/page wrapper is centered, and the sidebar is fixed with `margin-left:-13em;`.

A scroll bar appears when the fixed sidebar is higher than the web browser window. 

You can disable the fixed position in `lateral.css`: found the class`.with-sidebar .sidebar` and change `position:fixed;` to `position:absolute;`.

## Is it responsive?

Sidebar is not displayed on small screen (take a look at `@media screen and (max-width:32em)`). 

I suggest to install the [burger menu](https://github.com/richi/yellow-plugin-burger-menu) by Richi.

## How to use a central sidebar?

*Not sure if this trick working with latest Yellow 0.6.9*

[Issue #102](https://github.com/datenstrom/yellow/issues/102#issuecomment-137946128) - If you want a central sidebar, adjust the header snippet. For example replace:

    <?php if($page = $yellow->pages->find($yellow->lookup->getDirectoryLocation($yellow->page->location).$yellow->page->get("sidebar"))) $yellow->page->setPage("sidebar", $page) ?>

with this line:

    <?php if($page = $yellow->pages->find('/'.$yellow->page->get("sidebar"))) $yellow->page->setPage("sidebar", $page) ?>


