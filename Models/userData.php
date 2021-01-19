<?php

class UserData {
    
    protected $_userID, $_email, $_firstName, $_lastName, $_contactNo, $_password;
    
    public function __construct($dbRow) {
        $this->_userID = $dbRow['userID'];
		$this->_email = $dbRow['email'];
        $this->_firstName = $dbRow['firstName'];
        $this->_lastName = $dbRow['lastName'];
        $this->_contactNo = $dbRow['contactNo'];
		$this->_password = $dbRow['password'];
    }

    public function getUserID() {
        return $this->_userID;
    }
	
	public function getEmail() {
        return $this->_email;
    }
   
    public function getFirstName() {
       return $this->_firstName;
    }
    
    public function getLastName() {
       return $this->_lastName;
    }
    
    public function getContactNo() {
       return $this->_contactNo;
    }     

	public function getPassword() {
		return $this->_password;
	}
}


