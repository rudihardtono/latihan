<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

function asset_uri()
{
	$CI =& get_instance();
	return $CI->config->item('asset');
}

