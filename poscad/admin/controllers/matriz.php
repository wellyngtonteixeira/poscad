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
class PosCadControllerMatriz extends JControllerForm
{

	function teste(){
		$entradas = JFactory::getApplication()->input;
		$form = new JInput($entradas->get('jform', '', 'array'));
		$disciplinas = $form->get('disciplinas', '', 'array');
		if($disciplinas != null){
			print_r("DISCIPLINAS: \n");
			var_dump($disciplinas);
			print_r("DADOS: \n\n");
			print_r($entradas);
		}
		else{
			print_r($entradas);
			print_r("nao carregou disciplinas");
		}
		return true;
	}
}
?>