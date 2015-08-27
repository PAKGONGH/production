<?php

class PostsController extends AppController {

    public $helpers = array('Html', 'Form');

    public function index() {
//        pr($this->Post->find('list')); die;
        $this->set('posts', $this->Post->find('all'));
        
    }
    public function view() {
        $this->set('');
    }

}
