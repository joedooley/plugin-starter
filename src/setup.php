<?php

namespace DevDesigns\PluginStarter;



/**
 * Define constants for plugins version, path, and URL.
 *
 * @since 1.0.0
 *
 * @param string $version
 * @param string $filepath
 */
function defineConstants( string $version, string $filepath ): void {
	if ( ! defined( 'PLUGIN_STARTER_VERSION' ) ) {
		define( 'PLUGIN_STARTER_VERSION', $version );
	}

	if ( ! defined( 'PLUGIN_STARTER_URL' ) ) {
		define( 'PLUGIN_STARTER_URL', plugin_dir_url( $filepath ) );
	}

	if ( ! defined( 'PLUGIN_STARTER_PATH' ) ) {
		define( 'PLUGIN_STARTER_PATH', plugin_dir_path( $filepath ) );
	}
}
