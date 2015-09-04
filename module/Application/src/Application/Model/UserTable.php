<?php

namespace Application\Model;

use Zend\Db\TableGateway\TableGateway;

class UserTable {

    protected $tableGateway;

    public function __construct(TableGateway $tableGateway) {
        $this->tableGateway = $tableGateway;
    }
    
    
    public function fetchAll()      //retrieve all the records in the customer table
     {
         $resultSet = $this->tableGateway->select();
         return $resultSet;
         
     }

    public function saveUser(User $user) {
        $data = array(
            'Cust_FirstName' => $user->Cust_FirstName,
            'Cust_Email' => $user->Cust_Email,
            'password' => $user->password,
        );
        $id = (int) $user->Cust_Id;
        if ($id == 0) {
            $this->tableGateway->insert($data);
        } else {
            if ($this->getUser($id)) {
                $this->tableGateway->update($data, array('id' => $id));
            } else {
                throw new \Exception('User ID does not exist');
            }
        }
    }

    public function getUser($id) {
        $id = (int) $id;
        $rowset = $this->tableGateway->select(array('id' => $id));
        $row = $rowset->current();
        if (!$row) {
            throw new \Exception("Could not find row $id");
        }
        return $row;
    }
    
     /**
     * Get User account by Email
     * @param string $userEmail
     * @throws \Exception
     * @return Row
     */
    public function getUserByEmail($userEmail)
    {
    	$rowset = $this->tableGateway->select(array('email' => $userEmail));
    	$row = $rowset->current();
    	if (!$row) {
    		throw new \Exception("Could not find row $userEmail");
    	}
    	return $row;
    }
}
