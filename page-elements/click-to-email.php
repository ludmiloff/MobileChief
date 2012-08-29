<?php

/* ---------------------------------------------------------------------------- */
/* Add Click To Call Element to the Page Elements Menu
/* ---------------------------------------------------------------------------- */

	function plchf_add_click_to_email_element_click_to_email() {
	
		plchf_msb_add_page_element('Click To Email');
		
	}
	
	add_action('plchf_msb_content_elements','plchf_add_click_to_email_element_click_to_email');

/* ---------------------------------------------------------------------------- */
/* Create Settings for the Click To Call Element
/* ---------------------------------------------------------------------------- */

	function plchf_msb_page_element_settings_click_to_email($count, $values){
		
		// Define Element Type
		$element_type 	= 'Click To Email';
		
		// Define Settings Fields
		$fields[] = array(
			
			'field' 	=> array(
				'type' 			=> 'html',
				'content' 		=> '<p>The Click To Email is a styled button that links to a phone #</p>',
			),
		
		);

		// Define Settings Fields
		$fields[] = array(
			
			'field' 	=> array(
				'type' 			=> 'text',
				'name' 			=> 'Button Text',
				'id' 			=> '_button_text_',
				'tooltip' 		=> 'Enter Button Text Here',
				'placeholder' 	=> 'Button Text',
			),
		
		);
		
		// Define Settings Fields
		$fields[] = array(
			
			'field' 	=> array(
				'type' 			=> 'text',
				'name' 			=> 'Button Email Address',
				'id' 			=> '_button_email_',
				'tooltip' 		=> 'Enter the Phone #',
				'placeholder' 	=> 'Enter an Email Address',
			),
		
		);
				
		// Define Settings Fields
		$fields[] = array(
			
			'field' 	=> array(
				'type' 			=> 'select',
				'name' 			=> 'Button Size',
				'id' 			=> '_button_size_',
				'tooltip' 		=> 'Choose the size of the button',
				'options' 		=> array(
					'btn-mini'	=> 'Mini',
					'btn-small'	=> 'Small',
					'btn-large'	=> 'Large',
				)
			),
		
		);
		
		// Define Settings Fields
		$fields[] = array(
			
			'field' 	=> array(
				'type' 			=> 'select',
				'name' 			=> 'Button Style',
				'id' 			=> '_button_style_',
				'tooltip' 		=> 'Choose the style of the button',
				'options' 		=> array(
					''				=> 'Default',
					'btn-primary'	=> 'Primary',
					'btn-info'		=> 'Info',
					'btn-success'	=> 'Success',
					'btn-danger'	=> 'Warning',
					'btn-inverse'	=> 'Inverse',
				)
			),
		
		);
		
		// Define Settings Fields
		$fields[] = array(
			
			'field' 	=> array(
				'type' 			=> 'select',
				'name' 			=> 'Button Allignment',
				'id' 			=> '_button_align_',
				'tooltip' 		=> 'Choose the alignment of the button',
				'options' 		=> array(
					'floatl'		=> 'Left',
					'floatc'		=> 'Center',
					'floatr'		=> 'Right',
				)
			),
		
		);
		
		// Define Settings Fields
		$fields[] = array(
			
			'field' 	=> array(
				'type' 			=> 'icon_select',
				'name' 			=> 'Button Icon',
				'id' 			=> '_button_icon_',
				'tooltip' 		=> 'Should the Button have an Icon?',
			),
		
		);

		// Define Settings Fields
		$fields[] = array(
			
			'field' 	=> array(
				'type' 			=> 'colorpicker',
				'name' 			=> 'Button Icon Color',
				'id' 			=> '_button_icon_color_',
				'tooltip' 		=> 'Choose the color of the button icon',
			),
		
		);
		
		// Create Element Settings Panel
		plchf_msb_page_element_settings_panel($element_type, $fields, $count, $values);
		
	}
	
	add_action('plchf_msb_page_element_settings_click_to_email','plchf_msb_page_element_settings_click_to_email', 10, 2);

/* ---------------------------------------------------------------------------- */
/* Display Output for the Click To Call Element
/* ---------------------------------------------------------------------------- */

	function plchf_msb_page_element_output_click_to_email($values) {
		
		$text		= $values['_button_text_'];
		$email		= $values['_button_email_'];
		$size 		= ' '.$values['_button_size_'];
		$style 		= ' '.$values['_button_style_'];
		$align		= ' '.$values['_button_align_'];
		$icon		= $values['_button_icon_'];
		$iconcolor	= ' '.$values['_button_icon_color_'];
		
		// Check to see if Icon was set
		if ($icon != 'no-icon') {
			
			// Set Icon Color, Default to White
			if ($iconcolor) {
				$iconcolor = $iconcolor;
			} else {
				$iconcolor = '#fff';
			}
						
			$icon = '<i class="'.$icon.'" style="color:'.$iconcolor.'"></i> ';
		
		} else {
			
			// If No Icon is selected, don't output an icon
			$icon = '';
		
		}
		
		// Output a Paragraph
		echo '
		<p>
			<a href="mailto:'.$email.'" class="btn'.$align.$style.$size.'">'.$icon.$text.'</a>
			<div class="clearfix"></div>
		</p>
		';
		
	}
	
	add_action('plchf_msb_page_element_output_click_to_email','plchf_msb_page_element_output_click_to_email', 10, 1);