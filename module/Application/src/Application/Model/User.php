<?php
namespace Application\Model;

class User {

    public $Cust_Id;
    public $Cust_FirstName;
    public $Cust_Email;
    public $password;

    public function setPassword($clear_password) {
        $this->password = md5($clear_password);
    }

    function exchangeArray($data) {
        $this->Cust_FirstName = (isset($data['name'])) ?
                $data['name'] : null;
         
        $this->Cust_Email = (isset($data['email'])) ?
                $data['email'] : null;
        
         
        if (isset($data["password"])) {
            $this->setPassword($data["password"]);
        }
    }

}
