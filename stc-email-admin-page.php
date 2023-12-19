<?php
  /*
  Plugin Name:    Admin Emails Page Setup
  Plugin URI:     https://github.com/fabriziodeltufo/stc-emails-admin-page
  Description:    Coordinators Emails Page Settings for SaveTheChildren Resource hub Website.
  Version: 1.0
  Requires PHP:   7.3.8
  Author:         Fabrizio Del Tufo
  Author URI:     https://www.savethechildren.org.uk
  License:        GPLv2 or later
  License URI:    https://www.gnu.org/licenses/gpl-2.0.html
  Text Domain:    rhubpage
  Domain Path:    /languages
  */

  // If this file is called directly, abort.
  if ( !defined( 'WPINC' ) ) {
    die;
  }

  define( 'WPPLUGIN_URL', plugin_dir_url( __FILE__ ) );
  define( 'WPPLUGIN_DIR', plugin_dir_path( __FILE__ ) );

  include( plugin_dir_path( __FILE__ ) . 'includes/rhubpage-menu.php');
  include( plugin_dir_path( __FILE__ ) . 'includes/rhubpage-settings-fields.php');
  include( plugin_dir_path( __FILE__ ) . 'includes/rhubpage-style.php');
