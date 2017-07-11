<?php
/**
 * @package     Joomla.Administrator
 * @subpackage  com_helloworld
 *
 * @copyright   Copyright (C) 2005 - 2015 Open Source Matters, Inc. All rights reserved.
 * @license     GNU General Public License version 2 or later; see LICENSE.txt
 */
 
// No direct access to this file
defined('_JEXEC') or die('Restricted access');
 
jimport('joomla.form.formfield');
 
/**
 * HelloWorld Form Field class for the HelloWorld component
 *
 * @since  0.0.1
 */
class JFormFieldMatriz extends JFormField
{
	/**
	 * The field type.
	 *
	 * @var         string
	 */
	protected $type = 'Matriz';
 
	/**
	 * Method to get a list of options for a list input.
	 *
	 * @return  array  An array of JHtml options.
	 */
	protected function getOptions()
	{
		$db    = JFactory::getDBO();
		$query = $db->getQuery(true);
		$query->select('#__matriz_curricular.id as id,#__curso.nome as ncurso,curso');
		$query->from('#__matriz_curricular');
		$query->leftJoin('#__curso on curso=#__curso.id');
		$db->setQuery((string) $query);
		$messages = $db->loadObjectList();
		$options  = array();
 
		if ($messages)
		{
			foreach ($messages as $message)
			{
				$options[] = JHtml::_('select.option', $message->id, $message->ncurso);
			}
		}
 
		$options = array_merge(parent::getOptions(), $options);
 
		return $options;
	}
		
}
?>