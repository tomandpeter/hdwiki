<?php
/**
 * 
 * Hdwiki入口文件
 * @file
 */	

error_reporting(0);
# error_reporting(E_ALL);
set_magic_quotes_runtime(0);

# re-define $mtime global variable
$wgMtime = explode( ' ', microtime() );
$starttime = $wgMtime[1] + $wgMtime[0];

define( 'IN_HDWIKI' , TRUE );
define( 'HDWIKI_ROOT' , dirname( __FILE__ ) );

include HDWIKI_ROOT.'/model/hdwiki.class.php';

$hdwiki = new hdwiki();
$hdwiki->run();
?>