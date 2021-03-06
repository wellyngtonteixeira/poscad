<?php

namespace AppBundle\Controller;

use Sonata\AdminBundle\Controller\CRUDController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\RedirectResponse;

class CursoAdminController extends CRUDController
{

    public function createAction()
    {
        try{
            return parent::createAction(); // TODO: Change the autogenerated stub
        }catch (\Exception $e)
        {
            $this->addFlash('sonata_flash_error', $e->getMessage());
            return new RedirectResponse(
                $this->admin->generateUrl('create', array('filter' => $this->admin->getFilterParameters()))
            );
        }
    }

    public function editAction($id = null)
    {
        //Salvando valor do Coordenador caso ele seja editado
        $this->admin->setCoordAnterior($this->admin->getObject($id)->getCoordenadorAtual());
        error_log("EDIT-ACTION: valor coordenadorAnterior=".$this->admin->getCoordAnterior());
        return parent::editAction($id); // TODO: Change the autogenerated stub
    }

}
