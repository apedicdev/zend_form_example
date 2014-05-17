<?php

class Application_Model_Users extends Zend_Db_Table {

    protected $_name = "users";

    function checkUnique($email) {
        $select = $this->_db->select()
                ->from($this->_name, array('email'))
                ->where('email=?', $email);
        $result = $this->getAdapter()->fetchOne($select);
        if ($result) {
            return true;
        }
        return false;
    }
    
      function search($user) {
        $users=new self();
       
        $select= $users->select()->where("name like '%$user%' or email like '%$user%'");
        return $users->fetchAll($select);
    }
    
    

}
