<?php
/**
 * @package     Joomla.Administrator
 * @subpackage  com_hellonon
 *
 * @copyright   Copyright (C) 2005 - 2015 Open Source Matters, Inc. All rights reserved.
 * @license     GNU General Public License version 2 or later; see LICENSE.txt
 */
 
// No direct access to this file
defined('_JEXEC') or die('Restricted access');
 
/**
 * HelloWorlds View
 *
 * @since  0.0.1
 */
class HelloNonViewHelloNon extends JViewLegacy
{

	/**
	 * View form
	 *
	 * @var         form
	 */
	protected $form = null;

	/**
	 * Display the Hello World view
	 *
	 * @param   string  $tpl  The name of the template file to parse; automatically searches through the template paths.
	 *
	 * @return  void
	 */
	public function display($tpl = null)
	{
		// Get data from the model
		$this->items		= $this->get('Items');
		$this->pagination	= $this->get('Pagination');
 
		// Check for errors.
		if (count($errors = $this->get('Errors')))
		{
			JError::raiseError(500, implode('<br />', $errors));
 
			return false;
		}

		// Set the toolbar
		$this->addToolBar();
 
		// Display the template
		parent::display($tpl);
	}

	/**
	 * Add the page title and toolbar.
	 *
	 * @return  void
	 *
	 * @since   1.6
	 */
	// เพิ่มแถบ Tools Bar ในหน้า  Admin
	protected function addToolBar()
	{
		$input = JFactory::getApplication()->input;
 
		// Hide Joomla Administrator Main menu
		$input->set('hidemainmenu', true);
 
		$isNew = ($this->item->id == 0);
 
		if ($isNew)
		{
			$title = JText::_('COM_HELLONON_MANAGER_HELLONON_NEW');
		}
		else
		{
			$title = JText::_('COM_HELLONON_MANAGER_HELLONON_EDIT');
		}
 

		JToolBarHelper::title($title, 'hellonon');
		JToolBarHelper::save('hellonon.save');
		JToolBarHelper::cancel(
			'hellonon.cancel',
			$isNew ? 'JTOOLBAR_CANCEL' : 'JTOOLBAR_CLOSE'
		);
	}
}