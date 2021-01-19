<?php

class KeyWordData
{

    protected $_wordID, $_keyWord;

    public function __construct($dbRow)
    {
        $this->_wordID = $dbRow['wordID'];
        $this->_keyWord = $dbRow['keyWord'];
    }

    public function getWordID() {
        return $this->_wordID;
    }
     public function getKeyWord(){
        return $this->_keyWord;
     }

}