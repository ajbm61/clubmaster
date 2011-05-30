<?php

namespace Club\UserBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilder;

class Group extends AbstractType
{
  public function buildForm(FormBuilder $builder, array $options)
  {
    $builder->add('group_name');
    $builder->add('group_type','choice',array(
      'choices' => array(
        'static' => 'Static',
        'dynamic' => 'Dynamic'
      )
    ));
    $builder->add('is_active','hidden');
    $builder->add('group','entity',array(
      'class' => 'Club\UserBundle\Entity\Group',
      'required' => false
    ));
    $builder->add('min_age');
    $builder->add('max_age');
    $builder->add('gender','choice',array(
      'choices' => array(
        'male' => 'Male',
        'female' => 'Female'
      )
    ));
  }

  public function getDefaultOptions(array $options)
  {
    return array(
      'data_class' => 'Club\UserBundle\Entity\Group'
    );
  }
}