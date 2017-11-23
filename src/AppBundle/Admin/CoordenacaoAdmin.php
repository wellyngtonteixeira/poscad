<?php

namespace AppBundle\Admin;

use Sonata\AdminBundle\Admin\AbstractAdmin;
use Sonata\AdminBundle\Datagrid\DatagridMapper;
use Sonata\AdminBundle\Datagrid\ListMapper;
use Sonata\AdminBundle\Form\FormMapper;
use Sonata\AdminBundle\Show\ShowMapper;

class CoordenacaoAdmin extends AbstractAdmin
{
    /**
     * @param DatagridMapper $datagridMapper
     */
    protected function configureDatagridFilters(DatagridMapper $datagridMapper)
    {
        $datagridMapper
            ->add('id')
            ->add('curso.nomeCurso', null, array(
                'label' => 'Curso'))
            ->add('coordenador.matricula', null, array(
                'label' => 'Coordenador'))
            ->add('atual')
            ->add('dt_inicio', null, array(
                'label'=>'Data de Inicio'))
            ->add('dt_termino', null, array(
                'label'=>'Data de Término'))
        ;
    }

    /**
     * @param ListMapper $listMapper
     */
    protected function configureListFields(ListMapper $listMapper)
    {
        $listMapper
            ->add('id', null, array(
                'row_align' => 'center'))
            ->add('curso', null, array(
                'associated_property' => 'nomeCurso', 'sortable'=> true,
                'sort_field_mapping'=> array('fieldName'=>'nomeCurso'),
                'sort_parent_association_mappings' => array(array('fieldName'=>'curso'))))
            ->add('coordenador',null, array(
                'associated_property' => 'matricula', 'sortable'=> true,
                'sort_field_mapping'=> array('fieldName'=>'matricula'),
                'sort_parent_association_mappings' => array(array('fieldName'=>'coordenador'))))
            ->add('atual')
            ->add('dt_inicio', null, array(
                'label'=>'Data de Inicio'))
            ->add('dt_termino', null, array(
                'label'=>'Data de Término'))
            ->add('_action', null, array(
                'actions' => array(
                    'show' => array(),
                ),
            ))
        ;
    }

    /**
     * @param FormMapper $formMapper
     */
    protected function configureFormFields(FormMapper $formMapper)
    {
        $formMapper
            ->add('coordenador')
            ->add('atual')
            ->add('dt_termino')
        ;
    }

    /**
     * @param ShowMapper $showMapper
     */
    protected function configureShowFields(ShowMapper $showMapper)
    {
        $showMapper
            ->add('id')
            ->add('curso',null, array(
                'associated_property' => 'nomeCurso'))
            ->add('coordenador',null, array(
                'associated_property' => 'matricula'))
            ->add('atual')
            ->add('dt_inicio', null, array(
                'label'=>'Data de Inicio'))
            ->add('dt_termino', null, array(
                'label'=>'Data de Término'))
        ;
    }
}
