<?php
/*
WP Plugin Style
*/

// Load CSS on the backend:admin
function rhubpage_admin_style() {

  wp_enqueue_style('rhubpage-admin-style', WPPLUGIN_URL . 'css/rhubpage-admin-style.css',[],time() );

}
add_action( 'admin_enqueue_scripts', 'rhubpage_admin_style', 100 );


// Load CSS on the frontend
// function rhubpage_style() {
//
//   wp_enqueue_style('rhubpage-style', WPPLUGIN_URL . 'css/rhubpage-style.css',[],time() );
//
// }
// add_action( 'wp_enqueue_scripts', 'rhubpage_style', 100 );
