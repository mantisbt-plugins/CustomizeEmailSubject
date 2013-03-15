<?php

Class CustomizeEmailSubjectPlugin extends MantisPlugin {
	function register() {
		$this->name		= 'Customize Email Subject';
		$this->description 	= 'Customize your emails subject. Supports many bug object properties.<br/>Needs some patches to work properly with MantisCore 1.2.14 : <br/>http://www.mantisbt.org/bugs/view.php?id=15647<br/>http://www.mantisbt.org/bugs/view.php?id=15648';
		$this->page		= 'config';

		$this->version		= '0.1';
		$this->requires		= array('MantisCore' => '1.2.14');
		
		$this->author		= 'eCola GmbH, Heiko Schneider-Lange';
		$this->contact		= 'hsl@ecola.com';
		$this->url		= 'http://www.lebensmittel.de';
	}

	function config() {
		return array(
			'email_subject_template' => '[Project: |project_name|, Bug#: |bug_id|]: |summary'
			);
	}
	
	function init() {
	}
	
	function hooks() {
		return array(
			'EVENT_DISPLAY_EMAIL_BUILD_SUBJECT' => 'subject'
		);
	}
	
	function subject( $p_event, $p_chained_param, $p_bug_id ) {
		# bug object
		$coo_bug_object = bug_get( $p_bug_id );
		
		# load template
		$t_email_subject_template_string = plugin_config_get( 'email_subject_template', array() );
		$t_email_subject = '';
		
		# template array
		$t_email_subject_template = explode('|', $t_email_subject_template_string);
		
		# build email subject
		foreach( $t_email_subject_template as $tpl ) {
			switch ( $tpl ) {
			case 'project_name':
				$t_email_subject .= project_get_field($coo_bug_object->project_id, 'name' );
				break;
			case 'bug_id':
				$t_email_subject .= bug_format_id( $coo_bug_object->id );
				break;
			case 'summary':
				$t_email_subject .= $coo_bug_object->summary;
				break;
			case 'handler':
				$t_email_subject .= user_get_realname($coo_bug_object->handler_id);
				break;
			case 'priority':
				$t_email_subject .= get_enum_element('priority', $coo_bug_object->priority, null, $coo_bug_object->project_id);
				break;
			case 'severity':
				$t_email_subject .= get_enum_element('severity', $coo_bug_object->severity, null, $coo_bug_object->project_id);
				break;
			case 'reproducibility':
				$t_email_subject .= get_enum_element('reproducibility', $coo_bug_object->reproducibility, null, $coo_bug_object->project_id);
				break;
			case 'status':
				$t_email_subject .= get_enum_element('status', $coo_bug_object->status, null, $coo_bug_object->project_id);
				break;
			case 'resolution':
				$t_email_subject .= get_enum_element('resolution', $coo_bug_object->resolution, null, $coo_bug_object->project_id);
				break;
			case 'projection':
				$t_email_subject .= get_enum_element('projection', $coo_bug_object->projection, null, $coo_bug_object->project_id);
				break;
			case 'category':
				$t_email_subject .= category_get_field( $coo_bug_object->category_id, 'name' );
				break;
			default:
				$t_email_subject .= $tpl;
				break;
			}
		}
		
		# if something went wrong and subject is empty, take chained subject
		if( $t_email_subject == '' ) {
			$t_email_subject = $p_chained_param;
		}
		
		return $t_email_subject;
	}
}
