<?php

class Wp2static_Addon_GitLab_Admin {

	private $plugin_name;
	private $version;

	public function __construct( $plugin_name, $version ) {
		$this->plugin_name = $plugin_name;
		$this->version = $version;

	}

	public function enqueue_scripts() {
		wp_enqueue_script( $this->plugin_name, plugin_dir_url( __FILE__ ) . 'js/wp2static-addon-gitlab-admin.js', array( 'jquery' ), $this->version, false );
	}
}
