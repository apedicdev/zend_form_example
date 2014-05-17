<?php

class IndexController extends Zend_Controller_Action {

    public function init() {
        /* Initialize action controller here */
    }

    public function indexAction() {
        $form = new Application_Form_Search();
        $request = $this->getRequest();
        if ($request->isPost()) {
            $this->_helper->redirector('index', 'search');
        }
        $this->view->form = $form;
    }

}
