<?php

/* ---------------------------------------------------------------------------- */
/* Colorpicker Field
/* ---------------------------------------------------------------------------- */

function plchf_msb_page_element_settings_field_colorpicker($fields, $element_type, $count, $values) {
	
	// Get the Element Type
	$element_type 	= $element_type;
	
	$type 			= $fields['field']['type'];
	$label 			= $fields['field']['name'];
	$tooltip	 	= $fields['field']['tooltip'];
	$placeholder	= $fields['field']['placeholder'];
	$field_id		= $fields['field']['id'];
	$default		= $fields['field']['default'];
	
	// Get the saved Value
	$value			= $values[''.$field_id.''];
		
	if ($value) {
		$value = $value;
	} else {
		$value = '#cc3333';
	}
	
	$output .= '
	<label>'.$label.'
		<a href="#" class="tipsy-se floatr" original-title="'.$tooltip.'">
			<img src="'.PLUGINCHIEFMSB.'images/element-icons/element-info.png" width="20px">
		</a>
	</label>';
	
	$output .= '
	<input type="text" name="element['.$element_type.'_'.$count.']['.$field_id.']" id="colorpicker" value="'.$value.'" /> 
	<div id="plchf_msb_colorpicker"></div>
	';
	
	echo apply_filters('plchf_msb_page_element_settings_field_text_area_filter', $output);
}

add_action('plchf_msb_page_element_settings_field_colorpicker','plchf_msb_page_element_settings_field_colorpicker', 10, 4);