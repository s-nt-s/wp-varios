<?php
/**
* Plugin Name: Auto-embeds Disabler & Un-en-dash the Double Dash
* Version: 0.1
* Description: Disables the auto-embeds and un-en-dash the Double Dash
* Author: Cyttorak
* Author URI: http://apuntes.pusku.com
* Plugin URI: http://apuntes.pusku.com/34
*
*
* License: GPLv2 or later
*
* Copyright (C) 2012 Dominik Schilling
*
* This program is free software; you can redistribute it and/or
* modify it under the terms of the GNU General Public License
* as published by the Free Software Foundation; either version 2
* of the License, or (at your option) any later version.
*
* This program is distributed in the hope that it will be useful,
* but WITHOUT ANY WARRANTY; without even the implied warranty of
* MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the
* GNU General Public License for more details.
*
* You should have received a copy of the GNU General Public License
* along with this program; if not, write to the Free Software
* Foundation, Inc., 51 Franklin Street, Fifth Floor, Boston, MA 02110-1301, USA.
*/
remove_filter('the_content', array( $GLOBALS['wp_embed'], 'autoembed' ), 8 );
remove_filter('the_content', 'wptexturize');
remove_filter('the_excerpt', 'wptexturize');
remove_filter('comment_text', 'wptexturize');
remove_filter('the_title', 'wptexturize');

