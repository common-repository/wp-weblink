<?php
/*
Plugin Name: WP-Weblink
Plugin URI: http://www.bynajmniej.pl/spis-tresci/wtyczka-e-weblink
Description: The wp-weblink plugin let's you install a polish link-exchange system e-weblink.com.
Author: Paweł Zinkiewicz
Version: 0.2
Author URI: http://www.bynajmniej.pl/
*/

add_action('wp_footer', 'dodaj_eweba');

function dodaj_eweba()
{
	include_once('weblink_file.php');
	echo fetch_weblink(' ');

}




?>