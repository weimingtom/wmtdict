<?php
/*------------------------------------------------------------------------
	WDict, yet another web-based dictionary

	@author  NGUYEN-DAI Quy <vnpenguin@vnoss.org>
	@license http://www.gnu.org/licenses/gpl.html GPL version 2 or higher
	@date    Sun Jan  8 17:40:22 CET 2006
	@url     http://vnoss.org http://forum.vnoss.org
--------------------------------------------------------------------------*/
$dbname = getenv('MOPAAS_MYSQL13760_NAME');
$dbuser = getenv('MOPAAS_MYSQL13760_USER');
$dbpass = getenv('MOPAAS_MYSQL13760_PASSWORD');
$dbhost = getenv('MOPAAS_MYSQL13760_HOST');
$tblprefix = 'dict_'; // Table prefix

define('DICT_VERSION','dev-20090102');

// Working template in $DICTHOME/template/DICT_TEMPLATE
define('DICT_TEMPLATE','default.tpl');

// Method nearby Words
define('DICT_LIST_TYPE',1); # Query word is in top of list
#define('DICT_LIST_TYPE',2); # Query word is in middle of list

define('DICT_LIST_NUM',24); # Number of item in left list

$DICT = array(
	"jp_cn" => "日中词典",
);

// HTML params
define('HTML_LANG','zh-CN');
define('HTML_DIR','ltr');
?>
