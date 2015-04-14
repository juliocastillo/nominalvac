<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

 // src/Minsal\CatalogoBundle\Entity/Task.php
namespace Minsal\CatalogoBundle\Entity;
class Task {
    protected $task;
    protected $dueDate;
    protected $who;


    public function getTask() {
        return $this->task;
    }
    
    public function setTask($task) {
        $this->task = $task;
    }
    
    public function getDueDate() {
        return $this->dueDate;
    }
    
    public function setDueDate(\DateTime $dueDate = null) {
        $this->dueDate = $dueDate;
    }
    
    public function getWho() {
        return $this->who;
    }
    
    public function setWho($who) {
        $this->who = $who;
    }

    public function getCount() {
        return $this->count;
    }
    
    public function setCount($count) {
        $this->count = $count;
    }

    
}
 