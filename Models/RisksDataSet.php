<?php

require_once ('Models/Database.php');
require_once ('Models/riskData.php');
require_once ('Models/rawRiskData.php');

class RisksDataSet {
    protected $_dbHandle, $_dbInstance;
        
    public function __construct() {
        $this->_dbInstance = Database::getInstance();
        $this->_dbHandle = $this->_dbInstance->getdbConnection();
    }

    public function fetchAllRisks() {
        $sqlQuery = 'SELECT rawrisks.riskID, riskTitle, riskDescription, riskType, riskProbability, riskConsequence, raw, riskDate, resID, treatment, mitigation, residualProbability, residualConsequence, residual FROM rawrisks, residualrisks WHERE (rawrisks.riskID = residualrisks.riskID)';
                
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
            $dataSet[] = new rawRiskData($row);
        }
        return $dataSet;
    }		

	
	public function updateResidualRisk($treatment,$mitigation,$residualProbability,$residualConsequence,$riskID) {
		$residual;
		
		if ($residualProbability == 'High' or $residualConsequence == 'High') {
			$residual = 'Prepare';
		} else {
			$residual = 'Monitor';
		}
		$sqlQuery = 'UPDATE residualrisks SET treatment="' . $treatment . '", mitigation="' . $mitigation . '", residualProbability="' . $residualProbability . '", residualConsequence="' . $residualConsequence . '", residual="' . $residual . '" WHERE riskID=' . $riskID;
		$statement = $this->_dbHandle->prepare($sqlQuery); // prepare a PDO statement
		if($statement->execute(array($treatment,$mitigation,$residualProbability,$residualConsequence,$residual,$riskID))) {
			$dataSet = [];
			while ($row = $statement->fetch()) {
				$dataSet[] = new riskData($row);
			} 
		} else {
			return FALSE;
		}
		return $dataSet;
	}


    //Needs editing for raw field in terms of high, IF statements required inside here
    public function addRawRisk($riskTitle,$riskDescription,$riskType,$riskProbability,$riskConsequence,$raw,$riskDate)
    {
        //echo 'new Statement here:      ';
        $sqlQuery = "SELECT riskDescription from rawrisks Where riskDescription ='$riskDescription'";
        $statement = $this->_dbHandle->prepare($sqlQuery); // prepare a PDO statement
        $statement->execute(array($riskDescription));
        $row = $statement->fetch();
        //echo 'row here!!!!!!!!!!!!!!';
        if (!$row) {
            //echo 'if here ????????????';
            $sqlQuery = "INSERT INTO rawrisks(riskTitle,riskDescription,riskType,riskProbability,riskConsequence,raw,riskDate) VALUES ('$riskTitle','$riskDescription','$riskType','$riskProbability','$riskConsequence','$raw','$riskDate')";
            $statement = $this->_dbHandle->prepare($sqlQuery); // prepare a PDO statement
            $statement->execute(array($riskTitle,$riskDescription,$riskType,$riskProbability,$riskConsequence,$raw,$riskDate));
            
			$riskID = $this->_dbHandle->lastInsertId();
			
			$sqlQuery = "INSERT INTO residualrisks (treatment,mitigation,residualProbability,residualConsequence,residual,riskID) VALUES ('Update','Update','Update','Update','Update','$riskID')";
            $statement = $this->_dbHandle->prepare($sqlQuery); // prepare a PDO statement
            $statement->execute(array('Update', 'Update', 'Update', 'Update', 'Update',$riskID));
            return $this->_dbHandle->lastInsertId();
        }
        else {
            //echo 'row exists';
        }
    }




}


