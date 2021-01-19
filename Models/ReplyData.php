<?php

class ReplyData
{
    protected $_replyID, $_postID, $_reply, $_adminID;

    public function __construct($dbRow)
    {
        $this->_replyID = $dbRow['replyID'];
		$this->_postID = $dbRow['postID'];
        $this->_reply = $dbRow['reply'];
		$this->_adminID = $dbRow['adminID'];
    }
	
    public function getReplyID()
    {
        return $this->_replyID;
    }
	
	public function getPostID()
	{
		return $this->_postID;
	}

    public function getReply()
    {
        return $this->reply;
    }
	
	public function getAdminID()
	{
		return $this->_adminID;
	}
}