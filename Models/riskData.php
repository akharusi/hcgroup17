<?php

class RiskData {
    
    protected $_riskID, $_riskDescription, $_riskType, $_riskProbability, $_riskConsequence, $_raw, $_riskDate, $_residualID, $_treatment, $_mitigation, $_residualProbability, $_residualConsequence, $_residual;
    
    public function __construct($dbRow) {
        $this->_riskID = $dbRow['riskID'];
        $this->_riskDescription = $dbRow['riskDescription'];
        $this->_riskType = $dbRow['riskType'];
        $this->_riskProbability = $dbRow['riskProbability'];
		$this->_riskConsequence = $dbRow['riskConsequence'];
		$this->_raw = $dbRow['raw'];
		$this->_riskDate = $dbRow['riskDate'];
		$this->_residualID = $dbRow['resID'];
		$this->_treatment = $dbRow['treatment'];
		$this->_mitigation = $dbRow['mitigation'];
		$this->_residualProbability = $dbRow['residualProbability'];
		$this->_residualConsequence = $dbRow['residualConsequence'];
		$this->_residual = $dbRow['residual'];
    }

    public function getRiskID() {
        return $this->_riskID;
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
	
	public function getResidualID() {
		return $this->_residualID;
	}
	
	public function getTreatment() {
		return $this->_treatment;
	}
	
	public function getMitigation() {
		return $this->_mitigation;
	}
	
	//Change prob in the database to residualProbability
	public function getResidualProbability() {
		return $this->_residualProbability;
	}
	// Change consequence in the database to residualConsequence
	public function getResidualConsequence() {
		return $this->_residualConsequence;
	}
	
	public function getResidual() {
		return $this->_residual;
	}
}


