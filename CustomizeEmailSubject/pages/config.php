<?php
auth_reauthenticate( );
access_ensure_global_level( config_get( 'manage_plugin_threshold' ) );

html_page_top( 'Settings for Customized Email Subject' );

print_manage_menu( );
?>

<br/>
<form action="<?php echo plugin_page( 'config_edit' )?>" method="post">
<?php echo form_security_field( 'plugin_customize_email_subject_config_edit' ) ?>
<table align="center" class="width75" cellspacing="1">

<tr <?php echo helper_alternate_class( )?>>
	<td class="form-title">
		Settings for Customized Email Subject
	</td>
	<td class="center">&nbsp;</td>
</tr>


<tr <?php echo helper_alternate_class( )?>>
	<td class="category">
		Email Subject Template
	</td>
	<td class="center">
		<input type='text' name="email_subject_template" size="120" value="<? echo plugin_config_get('email_subject_template', '') ?>" />
	</td>
</tr>

<tr <?php echo helper_alternate_class( )?>>
	<td class="category">
		available fields
	</td>
	<td class="center">
		project_name, bug_id, summary, handler, priority, severity, reproducibility, status, resolution, projection, category<br />
		seperate the fields from the text by using pipe's
	</td>
</tr>

<tr>
	<td class="center" colspan="3">
		<input type="submit" class="button" value="<?php echo lang_get( 'change_configuration' )?>" />
	</td>
</tr>

</table>
<form>

<?php
html_page_bottom();
