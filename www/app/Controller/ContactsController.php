<?php

// precisa disso se n da erro
App::uses("AppController","Controller");

class ContactsController extends AppController {
    public $helpers = array('Html', 'Form');

    // public function index() {
    //      $this->set('contacts', $this->Contact->find('all'));
    // }
    public function add() {
        if (!empty($this->request->data)) {
            $this->Contact->create();
            if ($this->Contact->save($this->request->data)) {
                $this->Flash->set('Your contact has been saved.');
                $this->redirect('/contact');
            }
        }
}
    protected function index() {
  }
}