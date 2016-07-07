# Disable Search Slug

Stops `/search/...` URLs from working, resulting in a WordPress 404 page not found.

## Description 

If bots are attacking your site by appending `/search/a-random-string-or-word`, then those pages may be getting indexed by search engines, or populating search logs.

This plugin disables that permalink structure.

Search forms will still work, and the search results page will use the less index-friendly `?s=search-term` format.

## Installation

### Upload

1. Download the latest tagged archive (choose the "zip" option).
* Go to the __Plugins__ → __Add New__ screen and click the __Upload__ tab.
* Upload the zipped archive directly.
* Go to the Plugins screen and click __Activate__.

### Manual

1. Download the latest tagged archive (choose the "zip" option).
* Unzip the archive.
* Copy the folder to your `/wp-content/plugins/` directory.
* Go to the Plugins screen and click __Activate__.

Check out the Codex for more information about [installing plugins manually](http://codex.wordpress.org/Managing_Plugins#Manual_Plugin_Installation).

### Git

In a terminal, browse to your `/wp-content/plugins/` directory and clone this repository:

~~~sh
git clone git@github.com:GaryJones/disable-search-slug.git
~~~

Then go to your Plugins screen and click __Activate__.

## Updates

This plugin supports the [GitHub Updater](https://github.com/afragen/github-updater) plugin, so if you install that, this plugin becomes automatically updateable direct from GitHub.

## Change Log

Please see [CHANGELOG.md](CHANGELOG.md).

## Credits

Built by [Gary Jones](https://twitter.com/GaryJ)  
Copyright 2016 [Gamajo Tech](https://gamajo.com)
