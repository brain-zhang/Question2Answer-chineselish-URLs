<?php
/*
	Plugin Name: Question2Answer chinese URI conversion
	Plugin URI: https://github.com/memoryboxes/Question2Answer-chineselish-URLs
	Plugin Description: Converts all chinese locale chars to the corrensponding latin ones, thus avoiding the conversion to encoded URLs. fork from https://github.com/stefkiourk/Question2Answer-greeklish-URLs
	Plugin Version: 1.0
	Plugin Date: 2015-02-02
	Plugin Author: memoryboxes
	Plugin Author URI: http://memoryboxes.github.com
	Plugin License: BSD2
	Plugin Minimum Question2Answer Version: 1.5
	Plugin Update Check URI:
*/

if (!defined('QA_VERSION')) { // don't allow this page to be requested directly from browser
	header('Location: ../../');
	exit;
}

qa_register_plugin_overrides('qa-q-request-overrides.php');
