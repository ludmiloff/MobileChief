<?php

/* ---------------------------------------------------------------------------- */
/* Text Area Field
/* ---------------------------------------------------------------------------- */

function plchf_msb_page_element_settings_field_text_area($fields, $element_type, $count, $values) {

	// Get the Element Type
	$element_type 	= $element_type;

	// Get the Field Definitions
	$type 			=& $fields['field']['type'];
	$label 			=& $fields['field']['name'];
	$tooltip	 	=& $fields['field']['tooltip'];
	$placeholder=& $fields['field']['placeholder'];
	$field_id		=& $fields['field']['id'];

	// Get the saved Value
	$value			=& $values[''.$field_id.''];

	$output .= '
	<label>'.$label.'
		<a href="#" class="tipsy-se floatr" rel="tooltip" data-placement="top" data-original-title="'.$tooltip.'">
			<img src="'.PLUGINCHIEFMSB.'images/element-icons/element-info.png" width="20" height="20" class="info-tooltip-icon">
		</a>
	</label>';

	$output .= '<textarea name="field['.$element_type.'_'.$count.']['.$field_id.']" placeholder="'.$placeholder.'" >'.$value.'</textarea>';

	echo apply_filters('plchf_msb_page_element_settings_field_text_area_filter', $output);

}

add_action('plchf_msb_page_element_settings_field_text_area','plchf_msb_page_element_settings_field_text_area', 10, 4);