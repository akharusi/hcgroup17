<?php

class PostData
{
    protected $_postID, $_message,$_reply,$_status;
	
    public function __construct($dbRow)
    {
        $this->_postID = $dbRow['postID'];
		$this->_message = $dbRow['message'];
		$this->_reply = $dbRow['reply'];
		$this->_status = $dbRow['status'];
    }

    public function getPostID()
    {
        return $this->_postID;
    }
	
	public function getMessage()
    {
        return $this->_message;
    }
	
	public function getReply()
	{
		return $this->_reply;
	}
	
	public function getStatus()
	{
		return $this->_status;
	}
}