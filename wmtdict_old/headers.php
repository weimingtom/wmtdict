<?php 
/*------------------------------------------------------------------------
	WDict, yet another web-based dictionary

	@author  NGUYEN-DAI Quy <vnpenguin@vnoss.org>
	@license http://www.gnu.org/licenses/gpl.html GPL version 2 or higher
	@date    Sun Jan  8 17:40:22 CET 2006
	@url     http://vnoss.org http://forum.vnoss.org 
--------------------------------------------------------------------------*/
// Send no-cache headers
header('Expires: Thu, 21 Jul 1977 07:30:00 GMT');
header('Last-Modified: '.gmdate('D, d M Y H:i:s').' GMT');
header('Cache-Control: post-check=0, pre-check=0', false);
header('Pragma: no-cache');
header('Content-type: text/html; charset=utf-8');

ob_start();

$tpl_main = file_get_contents('template/'.DICT_TEMPLATE);

// Define HTML HEAD
$head['title'] 	= 'wmtdict - 日语在线翻译';
$head['css2'] 	= 'css/style1.css';
$head['css3'] 	= 'css/jquery.autocomplete.css';
$head['js1'] 	= 'js/jquery-1.2.6.min.js';
$head['js2'] 	= 'js/jquery.autocomplete.js';
$head['js3'] 	= 'js/wdict.js';

$tpl_main = str_replace('<!-- html_lang -->', HTML_LANG, $tpl_main);
$tpl_main = str_replace('<!-- html_dir -->', HTML_DIR, $tpl_main);
$tpl_main = str_replace('<!-- dict_head -->', makeHtmlHead($head), $tpl_main);
unset($head);

?>
