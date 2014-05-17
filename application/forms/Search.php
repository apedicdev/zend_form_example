<?php

class Application_Form_Search extends Zend_Form {

    public function init() {
        $this->setName("search");
        $this->setMethod('post');
        $this->setAction('search');

        $this->addElement('text', 'input', array(
            'filters' => array('StringTrim', 'StringToLower'),
            'validators' => array(
                array('StringLength', false, array(1, 50)),
            ),
            'required' => true,
            'label' => 'Text:',
        ));


        $this->addElement('submit', 'search', array(
            'required' => false,
            'ignore' => true,
            'label' => 'search',
        ));
    }

}
