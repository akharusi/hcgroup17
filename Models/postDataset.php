<?php
require_once ('Database.php');
require_once ('Models/PostData.php');

class PostDataSet
{
	protected $_dbHandle, $_dbInstance;

    public function __construct()
    {
        $this->_dbInstance = Database::getInstance();
        $this->_dbHandle = $this->_dbInstance->getdbConnection();
    }
	
	public function addPost($message,$userID) {
		$SQLInsert = "INSERT INTO post(message, userID, status)
                   VALUES ('$message','$userID','Open')";

		$statement = $this->_dbHandle->prepare($SQLInsert);
		$statement->execute(array($message,$userID,'Open'));
		
		$postID = $this->_dbHandle->lastInsertId();
		echo $postID;
		
		$SQLInsert = "INSERT INTO reply(postID, reply, adminID)
                   VALUES ('$postID','An admin will reply back shortly.','1')";

		$statement = $this->_dbHandle->prepare($SQLInsert);
		$statement->execute(array($postID,'An admin will reply back shortly.',1));

		if($statement->rowCount() == 1) {
			header('location: ticket.php');
		}
	}
	
    public function fetchPostsForUser($userID)
    {
        $sqlQuery = 'SELECT post.postID, message, reply, status FROM post,reply WHERE (post.postID = reply.postID AND userID =' . $userID . ')';
        $statement = $this->_dbHandle->prepare($sqlQuery);
        $statement->execute();

        $dataSet = [];
        while ($row = $statement->fetch()) {
            $dataSet[] = new PostData($row);
        }
        return $dataSet;
    }

    public function fetchAlluser()
    {
        $sqlQuery = 'SELECT * FROM schema aee923.post';

        $statement = $this->_dbHandle->prepare($sqlQuery); // prepare a PDO statement
        $statement->execute(); // execute the PDO statement

        $dataSet = [];

        while ($row = $statement->fetch()) {
            $dataSet[] = new PostData($row);
        }
        return $dataSet;
    }
}