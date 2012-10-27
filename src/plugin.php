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

	function wp_head() {
		$typekit = $this->_settings()->_get_value_for('typekit_id');
		if( !empty( $typekit ) ) {
			?>
			<script type="text/javascript" src="//use.typekit.net/<?php echo $typekit ?>.js"></script>
			<script type="text/javascript">try{Typekit.load();}catch(e){}</script>
			<?php
		}
	}



	#####################
	##	Plugin hooks
	#####################

}

$the_plugin = new Lava( __FILE__ );

?>