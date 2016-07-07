=== Disable Search Slug ===
Contributors: GaryJ
Tags: search, permalinks
Requires at least: 1.5.0
Tested up to: 4.6.0
Stable tag: 1.0.1
License: GPLv2 or later
License URI: http://www.gnu.org/licenses/gpl-2.0.html

Stops /search/... URLs from working, resulting in a WordPress 404 page not found.

== Description ==

If bots are attacking your site by appending `/search/a-random-string-or-word`, then those pages may be getting indexed by search engines, or populating search logs.

This plugin disables that permalink structure.

Search forms will still work, and the search results page will use the less index-friendly `?s=search-term` format.

== Installation ==

1. Upload the plugin files to the `/wp-content/plugins/disable-search-slug` directory, or install the plugin through the WordPress plugins screen directly.
1. Activate the plugin through the 'Plugins' screen in WordPress

There are no settings pages. It just works.

== Frequently Asked Questions ==

= Will search forms still work? =

Yes.

= Will URLs at `?s=search-term` still work? =

Yes

== Changelog ==

= 1.0.1 =
* Fix permalink change not persisting through flush rewrite rules.
* Fix change log link.

= 1.0.0 =
* Initial release.

== Upgrade Notice ==

= 1.0.1 =
Critical bug fix for intended functionality.

= 1.0.0 =
Initial release.
