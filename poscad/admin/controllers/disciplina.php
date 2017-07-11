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
class PosCadControllerDisciplina extends JControllerForm
{

	
	protected function postSaveHook(JModelLegacy &$model, $validData = array()){
		$item = $model->getItem();
		$id = ($item->get('id') !=null ? $item->get('id') : 0);
		$entradas = JFactory::getApplication()->input;
		$form = new JInput($entradas->get('jform', '', 'array'));
		$matrizes = $form->get('matrizes', '', 'array');
		$modelo = JModelLegacy::getInstance('disciplinaMatriz', 'posCadModel');
		if($matrizes != null && $id !=0){
			foreach($matrizes as $m){
				$dms = array();
				$dms['matriz'] = (int)$m;
				$dms['disciplina'] = $id;
				$modelo->save($dms);
				//carrega tabela
				//salva objeto
			}
		}
		else{
			print_r($entradas);
			print_r("nao carregou matrizes ou id == 0");
		}
		//return true;
	}
}
?>