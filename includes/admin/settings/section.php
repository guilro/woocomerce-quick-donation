<?php
global $section;

$section['settings_general'][] = array('id'=>'general','title'=>'', 'validate_callback' =>array( $this, 'validate_section' ));

$section['settings_message'][] = array(
    'id'=>'message',
    'title'=>'Donation Error :', 
    'desc' => '',
    'validate_callback'=>true,
);