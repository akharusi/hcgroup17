<?php

require_once ('Models/Database.php');
require_once ('Models/KeyWordData.php');

class keyWordDataSet
{
    protected $_dbHandle, $_dbInstance;

    public function __construct()
    {
        $this->_dbInstance = Database::getInstance();
        $this->_dbHandle = $this->_dbInstance->getdbConnection();
    }

    public function fetchAllKeyWords(){

    }

    public function checkKeyWords($keyWord){
        $sqlQuery = 'SELECT keyWord from keywords where keyWord = ?';
        $statement = $this->_dbHandle->prepare($sqlQuery); // prepare a PDO statement
        $statement->execute(array($keyWord)); // execute the PDO statement
        $row = $statement->fetch();
        //echo 'row here';
        if (!$row) {
            //echo 'false here';
            return false;
        }
        else{
            //echo 'true here';
            return true;
        }
    }

}
