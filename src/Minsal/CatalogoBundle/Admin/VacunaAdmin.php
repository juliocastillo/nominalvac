<?php
// src/Minsal/CatalogoBundle/Admin/VacunaAdmin.php

namespace Minsal\CatalogoBundle\Admin;

use Sonata\AdminBundle\Admin\Admin;
use Sonata\AdminBundle\Datagrid\ListMapper;
use Sonata\AdminBundle\Datagrid\DatagridMapper;
use Sonata\AdminBundle\Form\FormMapper;

class VacunaAdmin extends Admin
{
    // Fields to be shown on create/edit forms
    protected function configureFormFields(FormMapper $formMapper)
    {
        $formMapper
            ->add('vacuna', 'text', array(
                'label'=> 'Nombre de la vacuna',
                'help'=>'escriba el nombre en mayusculas',
                'max_length'=>'25',
                'trim'=>false
                ))
            ->add('idsexo', 'entity', array(
                'class' => 'Minsal\CatalogoBundle\Entity\Sexo', 
                'label' => 'Sexo',
                'empty_value'=>'...Seleccione...'
                ))
            ->add('idsitioaplicacion', 'entity', array(
                'class' => 'Minsal\CatalogoBundle\Entity\Sitioaplicacion', 
                'label' => 'Sitio Aplicación',
                'empty_value'=>'...Seleccione...'
                ))
            ->add('useradd', 'integer', array(
                'label' => 'Usuario'
                ))
            ->add('dateadd', 'date', array(
                'label' => 'Fecha de creación'
                ))
            ->add('idestado', 'entity', array(
                'class' => 'Minsal\CatalogoBundle\Entity\Estado', 
                'label' => 'Estado'
                ))
            
        ;
    }

    // Fields to be shown on filter forms
    protected function configureDatagridFilters(DatagridMapper $datagridMapper)
    {
        $datagridMapper
            ->add('vacuna')
        ;
    }

    // Fields to be shown on lists
    protected function configureListFields(ListMapper $listMapper)
    {
        $listMapper
            //->addIdentifier('id')
            ->addIdentifier('vacuna', 'text', array(
                'label'=>'Vacuna'
                ))
            ->add('idsexo', 'text', array(
                'label'=>'Sexo'
                ))
            ->add('idsitioaplicacion', 'text', array(
                'label'=>'Sitio Aplicación'
                ))
            ->add('useradd', 'integer', array(
                'label'=>'Usuario'
                ))
            ->add('dateadd', 'date', array(
                'label'=>'Fecha'
                ))
            ->add('idestado', 'text', array(
                'label'=>'Estado'
                ))
        ;
    }
    
}