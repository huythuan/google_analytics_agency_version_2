<?php

/**
 * @file
 * Admin and OAuth callbacks.
 */

/**
 * Menu callback - admin form for OAuth and other settings.
 */
function google_analytics_agency_admin() {  
	  $form = array();
	  $form['google_analytics_agency_email_field'] = array(
	    '#type' => 'textarea',
	    '#title' => t('Emails'),
	    '#default_value' => variable_get('google_analytics_agency_email_field'),
	    '#description' => t("Enter email address for report, ex: tom@example.com;john@example.com."),
		'#rows' => 3,
		'#resizable' => TRUE,
	    '#required' => FALSE,
	  );
	  return system_settings_form($form);

}


