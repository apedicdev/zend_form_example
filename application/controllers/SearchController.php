<?php

class SearchController extends Zend_Controller_Action {

    public function init() {
        /* Initialize action controller here */
    }

    public function indexAction() {
        $auth = Zend_Auth::getInstance();
        if ($auth->hasIdentity()) {
            $users = Application_Model_Users::search($_POST['input']);
            $this->view->users = $users;
        } else {
            $this->_helper->redirector('index', 'auth');
        }
    }

}
