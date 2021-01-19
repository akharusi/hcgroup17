<?php
require_once ('Database.php');
require_once ('Models/ReplyData.php');

class ReplyDataset
{
	protected $_dbHandle, $_dbInstance;

    public function __construct()
    {
        $this->_dbInstance = Database::getInstance();
        $this->_dbHandle = $this->_dbInstance->getdbConnection();
    }
	
    public function fetchReplyForAPost($postID)
    {
        $sqlQuery = 'SELECT * FROM reply WHERE postID =?';
        $statement = $this->_dbHandle->prepare($sqlQuery);
        $statement->execute();
		
        $dataSet = [];
        while ($row = $statement->fetch()) {
            $dataSet[] = new ReplyData($row);
        }
        return $dataSet;
    }
}