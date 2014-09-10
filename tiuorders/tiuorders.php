<?php

/**
 * [BEGIN_COT_EXT]
 * Hooks=standalone
 * [END_COT_EXT]
 */

/**
 * tiuorders plugin
 *
 * @package tiuorders
 * @version 1.0.0
 * @author CMSWorks Team
 * @copyright Copyright (c) CMSWorks.ru
 * @license BSD
 */

defined('COT_CODE') && defined('COT_PLUG') or die('Wrong URL');

require_once cot_incfile('tiuorders', 'plug');
require_once cot_incfile('products', 'module');
require_once cot_incfile('payments', 'module');
require_once cot_incfile('extrafields');

// Mode choice
if (!in_array($m, array('sales', 'purchases', 'addclaim')))
{
	if (isset($_GET['id']))
	{
		$m = 'order';
	}
	else
	{
		$m = 'neworder';
	}
}

require_once cot_incfile('tiuorders', 'plug', $m);

?>