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
 
/**
 * HelloWorld Controller
 *
 * @package     Joomla.Administrator
 * @subpackage  com_helloworld
 * @since       0.0.9
 */
class PosCadControllerDisciplinaMatriz extends JControllerForm
{

	/*public function save($key = null, $urlVar = null){
		$entradas = JFactory::getApplication()->input;
		$form = new JInput($entradas->get('jform', '', 'array'));
		$matrizes = $form->get('matrizes', '', 'array');
		$disciplina = $entradas->get->getInt('id',0);
		$model = JModelLegacy::getInstance('disciplinaMatriz', 'posCadModel');
		$table = $model->getTable('disciplinaMatriz', 'posCadTable');
		$url = $table->getKeyName();
		if($matrizes != null && $disciplina !=0){
			foreach($matrizes as $m){
				$dms = array();
				$dms['matriz'] = (int)$m;
				$dms['disciplina'] = $disciplina;
				//carrega modelo
				parent::save($key = $dms, $urlVar = $url);
				//carrega tabela
				//salva objeto
			}
		}
		else{
			print_r($entradas);
			print_r("nao carregou matrizes ou id == 0");
		}
		return true;
	}*/
}
?>