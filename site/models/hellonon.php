<?php
/**
 * @package     Joomla.Administrator
 * @subpackage  com_hellonon
 *
 * @copyright   Copyright (C) 2005 - 2016 Open Source Matters, Inc. All rights reserved.
 * @license     GNU General Public License version 2 or later; see LICENSE.txt
 */
 
// No direct access to this file
defined('_JEXEC') or die('Restricted access');
 
/**
 * HelloNon Model
 *
 * @since  0.0.1
 */
class HelloNonModelHelloNon extends JModelItem
{
	/**
	 * @var string message
	 */
	protected $message;
 
	/**
	 * Get the message
         *
	 * @return  string  The message to be displayed to the user
	 */
	public function getNonMsg()
	{
		if (!isset($this->message))
		{
			$this->message = 'Hello Non Model From NonMsg Method';
		}
 
		return $this->message;
	}
}