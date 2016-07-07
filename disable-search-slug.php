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

register_deactivation_hook( __FILE__ , 'flush_rewrite_rules' );
register_activation_hook( __FILE__ , 'disable_search_slug_flush_rewrite_rules' );

/**
 * Amend rewrite rules and flush rewrite rules when activated.
 *
 * @since 1.0.0
 */
function disable_search_slug_flush_rewrite_rules() {
	// Wipe out the rules for search permalink structure.
	add_filter( 'search_rewrite_rules', '__return_empty_array' );
	flush_rewrite_rules();
}
