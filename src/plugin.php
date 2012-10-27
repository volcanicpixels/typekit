<?php
/*
Plugin Name: {{ lava.name }}
Plugin URI: {{ lava.url }}
Description: {{ lava.description }}
Version: {{ lava.version }}
Author: {{ lava.author }}
Author URI: {{ lava.author_url }}
License: {{ lava.license }}
*/
?>
<?php

include( dirname( __FILE__ ) . '/classes/Plugin.php' );

class Lava extends Lava_Plugin {

	public $_plugin_name = "{{ lava.name }}";
	public $_plugin_version = "{{ lava.version }}";

	public $_plugin_actions = array(
	);

	public $_plugin_filters = array(
	);

	#####################
	#	Auto Hooks
	#####################



	#####################
	##	Plugin hooks
	#####################

}

$the_plugin = new Lava( __FILE__ );

?>