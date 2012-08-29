<?php

/* ---------------------------------------------------------------------------- */
/* Colorpicker Field
/* ---------------------------------------------------------------------------- */

function plchf_msb_site_settings_field_colorpicker($fields, $count) {
	
	$type 			= $fields['type'];
	$label 			= $fields['name'];
	$tooltip	 	= $fields['tooltip'];
	$placeholder	= $fields['placeholder'];
	$field_id		= $fields['id'];
	$default		= $fields['default'];
	
	// Get the saved Value
	$value			= plchf_msb_get_site_option($type, $field_id);
		
	if ($value) {
		$value = $value;
	} else {
		$value = '';
	}
	
	$output .= '
	<label>'.$label.'
		<a href="#" class="tipsy-se floatr" original-title="'.$tooltip.'">
			<img src="'.PLUGINCHIEFMSB.'images/element-icons/element-info.png" width="20px">
		</a>
	</label>';
	
	$output .= '
	<input type="text" class="colorpicker" data-colorpicker="colorpicker'.$field_id.'" name="field['.$type.$field_id.']['.$field_id.']" value="'.$value.'" />';
	
	$output .= '
	<div id="colorpicker'.$field_id.'"></div>
	';
	
	echo apply_filters('plchf_msb_site_settings_field_colorpicker_filter', $output);
}

add_action('plchf_msb_site_settings_field_colorpicker','plchf_msb_site_settings_field_colorpicker', 10, 4);