<?php
/*
HEA /COTD Settings Page
*/


function rhubpage_settings_cb() {

  // If option is not present , create it.
  if( !get_option( 'rhubpage_settings_email' ) ) {
      add_option( 'rhubpage_settings_email' ); // wp_options : option_name

      // add wp administrator email as default for HEA/COTD emails  //
      $hea_cotd_default_email = get_option( 'admin_email' ); // Settings: Administration Email Address

      $options = array(
        'cotd_field' => $hea_cotd_default_email,
        'hea_field' => $hea_cotd_default_email
      );

      update_option( 'rhubpage_settings_email' , $options  );


  }

  // SECTION DEFINITION: Define (at least) one section for our fields
  add_settings_section(
    // Unique identifier for the section
    'rhubpage_settings_section',
    // Section Title
    __( 'COTD / HEA Section', 'rhubpage' ),
    // Callback for an optional description
    'rhubpage_settings_section_callback',
    // Admin page to add section to
    'rhubpage'
  );

  function rhubpage_settings_section_callback() {
    esc_html_e( 'Insert the corresponding email for each admin. For multiple emails please separate each email address with a comma. ' , 'rhubpage' );
  }



// SETTING EMAIL - COTD FIELD //
  add_settings_field(
    // Unique identifier for field
    'rhubpage_settings_cotd_field',
    // Field Title
    __( 'COTD Admin Email', 'rhubpage'),
    // Callback for field markup
    'rhubpage_settings_cotd_field_callback',
    // Page to go on
    'rhubpage',
    // Section to go in
    'rhubpage_settings_section',

    array( 'class' => 'cotd-email' )

  );


  function rhubpage_settings_cotd_field_callback() {

    $options = get_option( 'rhubpage_settings_email' );

  	$cotd_field = '';
  	if( isset( $options[ 'cotd_field' ] ) ) {
  		$cotd_field = esc_html( $options['cotd_field'] );
  	}

    // else {
    //   $cotd_field = get_option( 'admin_email' ); // Settings: Administration Email Address
    //
    // }

    echo '<input REQUIRED type="text" id="rhubpage_cotd_field" name="rhubpage_settings[cotd_field]" value="' . $cotd_field . '" />';

  }



// SETTING HEA EMAIL FIELD //
  add_settings_field(
    // Unique identifier for field
    'rhubpage_settings_hea_field',
    // Field Title
    __( 'HEA Admin Email', 'rhubpage'),
    // Callback for field markup
    'rhubpage_settings_hea_field_callback',
    // Page to go on
    'rhubpage',
    // Section to go in
    'rhubpage_settings_section',

     array( 'class' => 'hea-email' )
  );


  function rhubpage_settings_hea_field_callback() {

    $options = get_option( 'rhubpage_settings' );

  	$hea_field = '';
  	if( isset( $options[ 'hea_field' ] ) ) {
  		$hea_field = esc_html( $options['hea_field'] );
  	}

    // else {
    //   $hea_field = get_option( 'admin_email' ); // Settings: Administration Email Address
    //
    // }

    echo '<input REQUIRED type="text" id="rhubpage_hea_field" name="rhubpage_settings[hea_field]" value="' . $hea_field . '" />';

  }


// REGISTERING THE SETTINGS //
  register_setting(
    'rhubpage_settings',
    'rhubpage_settings'
  );

}

add_action( 'admin_init', 'rhubpage_settings_cb' );
