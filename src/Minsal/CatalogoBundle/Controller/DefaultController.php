<?php

namespace Minsal\CatalogoBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Minsal\CatalogoBundle\Entity\Task;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('MinsalCatalogoBundle:Default:index.html.twig', array('name' => $name));
    }
    
    public function newAction()
    {
        // create a task and give it some dummy data for this example
        $task = new Task();
        $task->setTask('Write a blog post');
        $task->setDueDate(new \DateTime('tomorrow'));
        $task->setWho('Person');
        $task->setCount('0');
        
        $form = $this->createFormBuilder($task)
            ->add('task', 'text', array('label'=>'Tare realizada: '))
            ->add('count', 'integer', array('label'=>'Cantidad: '))    
            ->add('who', 'text', array('label'=>'Quien? '))
            ->add('dueDate', 'date')                
            ->add('save', 'submit', array('label' => 'Create Task'))
            ->getForm();
        
        return $this->render('MinsalCatalogoBundle:Default:new.html.twig', array(
            'form' => $form->createView(),
    ));
    }
                                                    
    
    
}
