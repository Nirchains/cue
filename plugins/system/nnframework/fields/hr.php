<?php
/**
 * @package         NoNumber Framework
 * @version         16.1.25452
 * 
 * @author          Peter van Westen <peter@nonumber.nl>
 * @link            http://www.nonumber.nl
 * @copyright       Copyright © 2016 NoNumber All Rights Reserved
 * @license         http://www.gnu.org/licenses/gpl-2.0.html GNU/GPL
 */

defined('_JEXEC') or die;

class JFormFieldNN_HR extends JFormField
{
	public $type = 'HR';

	protected function getLabel()
	{
		return '';
	}

	protected function getInput()
	{
		JHtml::stylesheet('nnframework/style.min.css', false, true);

		return '<div class="nn_panel nn_hr"></div>';
	}
}
