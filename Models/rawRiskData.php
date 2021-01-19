<?php

class rawRiskData {

    protected $_riskID, $_riskTitle, $_riskDescription, $_riskType, $_riskProbability, $_riskConsequence, $_raw, $_riskDate;

    public function __construct($dbRow) {
        $this->_riskID = $dbRow['riskID'];
		$this->_riskTitle = $dbRow['riskTitle'];
        $this->_riskDescription = $dbRow['riskDescription'];
        $this->_riskType = $dbRow['riskType'];
        $this->_riskProbability = $dbRow['riskProbability'];
        $this->_riskConsequence = $dbRow['riskConsequence'];
        $this->_raw = $dbRow['raw'];
        $this->_riskDate = $dbRow['riskDate'];
    }

    public function getRiskID() {
        return $this->_riskID;
    }
	
	public function getRiskTitle() {
        return $this->_riskTitle;
    }

    public function getRiskDescription() {
        return $this->_riskDescription;
    }

    public function getRiskType() {
        return $this->_riskType;
    }

    public function getRiskProbability() {
        return $this->_riskProbability;
    }

    public function getRiskConsequence() {
        return $this->_riskConsequence;
    }

    public function getRaw() {
        return $this->_raw;
    }

    public function getRiskDate() {
        return $this->_riskDate;
    }

}


