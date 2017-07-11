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
 
JFormHelper::loadFieldClass('list');
 
/**
 * HelloWorld Form Field class for the HelloWorld component
 *
 * @since  0.0.1
 */
class JFormFieldDisciplinaMatriz extends JFormFieldList
{
	/**
	 * The field type.
	 *
	 * @var         string
	 */
	protected $type = 'DisciplinaMatriz';
 
	/**
	 * Method to get a list of options for a list input.
	 *
	 * @return  array  An array of JHtml options.
	 */

	protected function getInput(){
		$html = array();
		$entradas = JFactory::getApplication()->input;
		$idDisciplina = $entradas->get->getInt('id',0);
		$matrizesAll = $this->pegaMatriz();
		$matrizesSelect = $this->pegaMatrizDisciplina($idDisciplina);
		$options = array();

		$html[] = '<fieldset id="jform_matrizes" class="checkboxes" required="true">';
		$html[] = '<ul>';

		foreach ($matrizesAll as $m1) {
			$checked = '';
			foreach($matrizesSelect as $m2){
				if($m1->id == $m2->id)
				$checked = ' checked';
			}
			$html[] = '<li>';
			$html[] = '<input type="checkbox" id="jform_matrizes' .$m1->id. '" name="jform[matrizes][]" value="'
				. $m1->id . '"' . $checked . '/>';

			$html[] = '<label for="jform_matrizes' . $m1->id . '">' . $m1->ncurso . '</label>';
			$html[] = '</li>';
					
				}

		$html[] = '</ul>';
		$html[] = '</fieldset>';

		return implode($html);
	}

	protected function pegaMatriz(){
		$db    = JFactory::getDBO();
		$query = $db->getQuery(true);
		$query->select('#__matriz_curricular.id as id,#__curso.nome as ncurso,curso');
		$query->from('#__matriz_curricular');
		$query->leftJoin('#__curso on curso=#__curso.id');
		$db->setQuery((string) $query);
		$messages = $db->loadObjectList();

		return $messages;
	}

	protected function pegaMatrizDisciplina($id){
		$db    = JFactory::getDBO();
		$query = $db->getQuery(true);
		$query->select('#__matriz_curricular.id as id,#__curso.nome as ncurso');
		$query->from('#__curso');
		$query->innerJoin('#__matriz_curricular on #__curso.id=#__matriz_curricular.curso');
		$query->innerJoin('#__disciplina_matriz_curricular on #__matriz_curricular.id = #__disciplina_matriz_curricular.matriz and #__disciplina_matriz_curricular.disciplina = '.$id);
		$db->setQuery((string) $query);
		$messages = $db->loadObjectList();

		return $messages;
	}
	
}
?>