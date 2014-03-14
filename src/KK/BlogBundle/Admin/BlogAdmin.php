<?php
// src/KK/BlogBundle/Admin/BlogAdmin.php

namespace KK\BlogBundle\Admin;

use Sonata\AdminBundle\Admin\Admin;
use Sonata\AdminBundle\Datagrid\ListMapper;
use Sonata\AdminBundle\Datagrid\DatagridMapper;
use Sonata\AdminBundle\Validator\ErrorElement;
use Sonata\AdminBundle\Form\FormMapper;
use Sonata\AdminBundle\Show\ShowMapper;
use KK\BlogBundle\Entity\Blog;

class BlogAdmin extends Admin
{
    // Setup the default sort column and order
    protected $datagridValues = array(
        '_sort_order' => 'created_at',
        '_sort_by'    => 'created_at',
    );

    protected function configureFormFields(FormMapper $formMapper)
    {
        $formMapper
            ->add('title')
            ->add('author')
            ->add('blog')
            ->add('file', 'file', array(
                'label' => 'Image',
                'required' => false,
            ))
            ->add('tags')
            ->add('created')
            ->add('updated')
        ;
    }

    public function configureDatagridFilter(DatagridMapper $datagridMapper)
    {
        $datagridMapper
            ->add('title')
            ->add('author')
            ->add('blog')
//            ->add('image')
            ->add('tags')
            ->add('created')
            ->add('updated')
        ;
    }

    public function configureListFields(ListMapper $listMapper)
    {
        $listMapper
            ->add('title')
            ->add('author')
            ->add('blog')
//            ->add('image')
            ->add('tags')
            ->add('created')
            ->add('updated')
            ->add('_action', 'actions', array(
                'actions' => array(
                    'view'   => array(),
                    'edit'   => array(),
                    'delete' => array(),
                )
            ));
    }

    public function configureShowField(ShowMapper $showMapper)
    {
        $showMapper
            ->add('title')
            ->add('author')
            ->add('blog')
            ->add('webPath', 'string', array(
                'template' => 'KKBlogBundle:BlogAdmin:list_image.html.twig'
            ))
            ->add('tags')
            ->add('created')
            ->add('updated')
        ;
    }

    public function getBatchActions()
    {
        // Retrieve the default (currently only the delete action) actions
        $actions = parent::getBatchActions();

        // Check user permissions
        if($this->hasRoute('edit') && $this->isGranted('EDIT') && $this->hasRoute('delete') && $this->isGranted('DELETE')) {
            $actions['extend'] = array(
                'label'            => 'Extend',
                'ask_confirmation' => true // If true, a confirmation will be asked before performing the action
            );

            $actions['deleteNeverActivated'] = array(
                'label'            => 'Delete never activated jobs',
                'ask_confirmation' => true // If true, a confirmation will be asked before performing the action
            );
        }

        return $actions;
    }
}