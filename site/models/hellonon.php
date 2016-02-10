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
			//ประกาศ getApp input เพื่อจะใช้ Method input ดึงค่า parameter
			$jinput = JFactory::getApplication()->input;

			//กำหนดดึงจาก input name='id' มี 1 ตัวและ มีค่าเป็น int
			$id = $jinput->get('id', 1 ,'INT');

			switch ($id)
			{
				case 2:
					$this->message = 'Good bye World!';
					break;
				default:
				case 1:
					$this->message = 'Hello World!';
					break;
			}
		}
 
		return $this->message;
	}
}