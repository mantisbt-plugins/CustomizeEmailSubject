<?php

form_security_validate( 'plugin_customize_email_subject_config_edit' );

auth_reauthenticate( );
access_ensure_global_level( config_get( 'manage_plugin_threshold' ) );

$t_reset_template = gpc_get_bool( 'reset', false );

if( $t_reset_template ) {
	$t_new_email_subject_template = CustomizeEmailSubjectPlugin::getDefaultTemplate();
} else {
	$t_new_email_subject_template = gpc_get_string( 'email_subject_template', '' );
}

if( plugin_config_get( 'email_subject_template', '' ) != $t_new_email_subject_template ) {
	plugin_config_set( 'email_subject_template', $t_new_email_subject_template );
}


form_security_purge( 'plugin_customize_email_subject_config_edit' );

print_successful_redirect( plugin_page( 'config', true ) );
