<?php
// ** Paramètres MySQL ** //
define( 'DB_NAME', getenv('WORDPRESS_DB_NAME') );
define( 'DB_USER', getenv('WORDPRESS_DB_USER') );
define( 'DB_PASSWORD', getenv('WORDPRESS_DB_PASSWORD') );
define( 'DB_HOST', getenv('WORDPRESS_DB_HOST') );

define( 'DB_CHARSET', 'utf8' );
define( 'DB_COLLATE', '' );

// ** Clés de sécurité ** //
define('AUTH_KEY', getenv('AUTH_KEY'));
define('SECURE_AUTH_KEY', getenv('SECURE_AUTH_KEY'));
define('LOGGED_IN_KEY', getenv('LOGGED_IN_KEY'));
define('NONCE_KEY', getenv('NONCE_KEY'));
define('AUTH_SALT', getenv('AUTH_SALT'));
define('SECURE_AUTH_SALT', getenv('SECURE_AUTH_SALT'));
define('LOGGED_IN_SALT', getenv('LOGGED_IN_SALT'));
define('NONCE_SALT', getenv('NONCE_SALT'));

// Préfixe de table pour la base de données WordPress.
$table_prefix = 'wp_';

// Activer le débogage WordPress
define( 'WP_DEBUG', true );
define( 'WP_DEBUG_LOG', true );  // Permet d'écrire les erreurs dans un fichier debug.log
define( 'WP_DEBUG_DISPLAY', false );  // Pour éviter l'affichage direct des erreurs sur le site

// Chemin absolu vers le dossier de WordPress.
if ( ! defined( 'ABSPATH' ) ) {
    define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

// Paramètres WordPress et inclusion des fichiers.
require_once ABSPATH . 'wp-settings.php';