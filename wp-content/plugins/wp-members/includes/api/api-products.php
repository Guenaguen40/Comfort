<?php
/**
 * WP-Members API Functions
 * 
 * This file is part of the WP-Members plugin by Chad Butler
 * You can find out more about this plugin at https://rocketgeek.com
 * Copyright (c) 2006-2021  Chad Butler
 * WP-Members(tm) is a trademark of butlerblog.com
 *
 * @package WP-Members
 * @subpackage WP-Members API Functions
 * @author Chad Butler 
 * @copyright 2006-2021
 */

/**
 * Gets all posts by product key.
 *
 * @since Unknown
 *
 * @global  stdClass  $wpmem
 * @param   string    $product_key
 * @return  array
 */
function wpmem_get_product_post_list( $product_key ) {
	global $wpmem;
	return $wpmem->membership->get_all_posts( $product_key );
}

/**
 * Gets the membership products for a given post.
 *
 * @since 3.3.7
 *
 * @global  stdClass  $wpmem
 * @param   integer   $post_id
 * @return  array
 */
function wpmem_get_post_products( $post_id ) {
	global $wpmem;
	return $wpmem->membership->get_post_products( $post_id );
}

/**
 * Gets access message if user does not have required membership.
 *
 * @since 3.4.0
 *
 * @global  stdClass  $wpmem
 * @param   array     $post_products
 * @return  string    $message
 */
function wpmem_get_access_message( $post_products ) {
	global $wpmem;
	return $wpmem->membership->get_access_message( $post_products );
}

function wpmem_get_products() {
	return wpmem_get_memberships();
}

function wpmem_get_memberships() {
	global $wpmem;
	return ( ! empty( $wpmem->membership->products ) ) ? $wpmem->membership->products : false;
}