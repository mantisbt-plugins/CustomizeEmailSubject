<?php

auth_reauthenticate( );
access_ensure_global_level( config_get( 'manage_plugin_threshold' ) );

layout_page_header( plugin_lang_get( 'title' ) );

layout_page_begin( 'manage_overview_page.php' );
print_manage_menu( 'manage_plugin_page.php' );
?>

<div class="col-md-12 col-xs-12">
<div class="space-10"></div>
<div class="form-container" >

<form action="<?php echo plugin_page( 'config_edit' )?>" method="post">
<?php echo form_security_field( 'plugin_customize_email_subject_config_edit' ) ?>
<div class="widget-box widget-color-blue2">
<div class="widget-header widget-header-small">
	<h4 class="widget-title lighter">
		<i class="ace-icon fa fa-text-width"></i>
		<?php echo plugin_lang_get( 'title' ) . ': ' . plugin_lang_get( 'config' )?>
	</h4>
</div>
<div class="widget-body">
<div class="widget-main no-padding">
<div class="table-responsive">
<!--table align="center" class="width75" cellspacing="1"-->
<table class="table table-bordered table-condensed table-striped">

<tr>
	<th class="category">
		<?php echo plugin_lang_get( 'subject_template' ); ?>
	</th>
	<td>
		<input type='text' name="email_subject_template" size="120" value="<?php echo plugin_config_get('email_subject_template', '') ?>" />
	</td>
</tr>

<tr>
	<th class="category">
		<?php echo plugin_lang_get( 'available_fields' ); ?><br>
		<span class="small">
			<?php echo plugin_lang_get( 'fields_description' ); ?>
		</span>
	</th>
	<td>
		project_name, bug_id, summary, handler, priority, severity, reproducibility, status, resolution, projection, category, reason<br />
	</td>
</tr>

</table>
</div>
</div>
	<div class="widget-toolbox padding-8 clearfix">
		<input type="submit" class="btn btn-primary btn-white btn-round" value="<?php echo lang_get( 'change_configuration' )?>" />
	</div>
</div>
</div>
</form>

</div>
</div>

<?php
layout_page_end();
