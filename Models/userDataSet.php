<?php
session_start();
require_once ('Models/Database.php');
require_once ('Models/userData.php');

class UserDataSet
{
    protected $_dbHandle, $_dbInstance;

    public function __construct()
    {
        $this->_dbInstance = Database::getInstance();
        $this->_dbHandle = $this->_dbInstance->getdbConnection();
    }
	
	public function register($email,$firstName,$lastName,$contactNo,$password) {
		$SQLInsert = "INSERT INTO users (email, firstName, lastName, contactNo, password)
                   VALUES ('$email','$firstName','$lastName','$contactNo','$password')";

		$statement = $this->_dbHandle->prepare($SQLInsert);
		$statement->execute(array($email,$firstName,$lastName,$contactNo,$password));

		if($statement->rowCount() == 1) {
			header('location: index.php');
		}
	}

    public function login($email, $password){
		$SQLQuery = 'SELECT * FROM users WHERE email=?';
		$statement = $this->_dbHandle->prepare($SQLQuery);
		$statement->execute(array($email));
		
		while($row = $statement->fetch()) {	
			$id = $row['userID'];
			$hashed_password = $row['password'];
			$firstName = $row['firstName'];
			$lastName = $row['lastName'];
			if(password_verify($password, $hashed_password)) {
				$_SESSION['id'] = $id;
				$_SESSION['firstName'] = $firstName;
				$_SESSION['lastName'] = $lastName;
				header('location: risks.php');
			} else {
				echo "Error: Invalid email or password";
			}
		}
	}
	
	public function checkIfAdminExists ($userID){
       $sqlQuery = "SELECT userID from admin Where userID ='$userID'";
       $statement = $this->_dbHandle->prepare($sqlQuery); // prepare a PDO statement
       $statement->execute(array($userID));
       $row = $statement->fetch();
       //echo 'row here!!!!!!!!!!!!!!';
       if (!$row) {
           //echo 'dont exists';
           return false;
       }
       else {
           //echo 'exists';
           return true;
       }
   }
}