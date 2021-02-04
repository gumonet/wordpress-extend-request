<?php
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

if ( ! class_exists( 'WPB_Extend_Request' ) ) {

	class WPB_Extend_Request {

		public function __construct() {
			add_action( 'init', array( $this, 'registers_shortcodes' ) );
		}

		public function registers_shortcodes() {
			add_shortcode( 'wpb-extend-request', array( $this, 'extend_request' ) );
		}

		public function extend_request():string {
			$response = wp_remote_get(
				'https://slowfil.es/file?type=js&delay=5000',
				array( 'timeout' => 200 )
			);
			return wp_json_encode( $response['headers'] );
		}
	}
}
