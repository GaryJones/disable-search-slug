<?php

/**
 * Disable Search Slug Plugin
 *
 * @package   Gamajo\DisableSearchSlug
 * @author    Gary Jones
 * @license   GPL-2.0+
 * @copyright 2016 Gamajo Tech
 *
 * @wordpress-plugin
 * Plugin Name:       Disable Search Slug
 * Description:       Stops <code>/search/...</code> URLs from working, resulting in a WordPress 404 page not found.
 * Version:           1.0.0
 * Author:            Gary Jones
 * Text Domain:       disable-search-slug
 * License:           GPL-2.0+
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 * GitHub Plugin URI: https://github.com/GaryJones/disable-search-slug
 * GitHub Branch:     master
 */

// Wipe out rules for search permalink structure on every page load, in case the
// rules are flushed by WP core, another plugin, a user visiting Settings -> Permalinks.
add_action( 'init', function() {
	add_filter( 'search_rewrite_rules', '__return_empty_array' );
} );

register_activation_hook( __FILE__ , function() {
	// Wipe out the rules for search permalink structure, on plugin activation.
	add_filter( 'search_rewrite_rules', '__return_empty_array' );
	flush_rewrite_rules();
} );

register_deactivation_hook( __FILE__ , function() {
	// Undo the change in rules to search rules, and flush the rules, on plugin deactivation.
	remove_filter( 'search_rewrite_rules', '__return_empty_array' );
	flush_rewrite_rules();
} );
