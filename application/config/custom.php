<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

$config['doc_root'] = 'http://'.$_SERVER['SERVER_NAME'].'/';
$config['root_dir'] = getenv("DOCUMENT_ROOT").'/';
// $config['asset'] = 'http://localhost/data-test/assets/';
$config['asset'] = $config['doc_root'].'/data-test/assets/';

