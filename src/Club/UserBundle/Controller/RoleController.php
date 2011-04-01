<?php

namespace Club\UserBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Club\UserBundle\Entity\Role;
use Club\UserBundle\Form\RoleForm;

class RoleController extends Controller
{
  public function indexAction()
  {
    $dql = "SELECT r FROM Club\UserBundle\Entity\Role r ORDER BY r.role_name";
    $em = $this->get('doctrine.orm.entity_manager');

    $query = $em->createQuery($dql);
    $roles = $query->getResult();

    return $this->render('ClubUser:Role:index.html.twig',array(
      'page' => array('header' => 'User'),
      'roles' => $roles
    ));
  }

  public function newAction()
  {
    $role = new Role();
    $form = RoleForm::create($this->get('form.context'),'role');

    $form->bind($this->get('request'),$role);
    if ($form->isValid()) {
      $em = $this->get('doctrine.orm.entity_manager');
      $em->persist($role);
      $em->flush();

      $this->get('session')->setFlash('notice','Your changes were saved!');

      return new RedirectResponse($this->generateUrl('role'));
    }

    return $this->render('ClubUser:Role:new.html.twig',array(
      'page' => array('header' => 'Role'),
      'form' => $form
    ));
  }

  public function editAction()
  {
  }

  public function deleteAction()
  {
    $em = $this->get('doctrine.orm.entity_manager');
    $role = $em->find('ClubUser:Role',$this->get('request')->get('id'));

    $em->remove($role);
    $em->flush();

    $this->get('session')->setFlash('notify',sprintf('Role %s deleted.',$role->getRoleName()));

    return new RedirectResponse($this->generateUrl('role'));
  }

  public function batchAction()
  {
  }
}