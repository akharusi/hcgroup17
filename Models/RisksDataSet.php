<?php

require_once ('Models/Database.php');
require_once ('Models/riskData.php');

class RisksDataSet {
    protected $_dbHandle, $_dbInstance;
        
    public function __construct() {
        $this->_dbInstance = Database::getInstance();
        $this->_dbHandle = $this->_dbInstance->getdbConnection();
    }

    public function fetchAllRisks() {
        $sqlQuery = 'SELECT rawrisks.riskID, riskDescription, riskType, riskProbability, riskConsequence, raw, riskDate, resID, treatment, mitigation, residualProbability, residualConsequence, residual FROM rawrisks, residualrisks WHERE (rawrisks.riskID = residualrisks.riskID)';
                
        $statement = $this->_dbHandle->prepare($sqlQuery); // prepare a PDO statement
        $statement->execute(); // execute the PDO statement
        
        $dataSet = [];
        while ($row = $statement->fetch()) {
            $dataSet[] = new RiskData($row);
        }
        return $dataSet;
    }
	
	public function fetchAllRawRisks() {
		$sqlQuery = 'SELECT * FROM rawrisks';
                
        $statement = $this->_dbHandle->prepare($sqlQuery); // prepare a PDO statement
        $statement->execute(); // execute the PDO statement
        
        $dataSet = [];
        while ($row = $statement->fetch()) {
            $dataSet[] = new RiskData($row);
        }
        return $dataSet;
    }		
}


