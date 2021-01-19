<?php
require_once('Models/RisksDataSet.php');
require_once('Models/keyWordDataSet.php');
include('simple_html_dom.php');
 
$html = file_get_html('https://globalriskinsights.com/category/politics-2/');
 
//echo $html->find('p', 0)->plaintext;
$risksDataSet = new RisksDataSet();

$keyWordsDataSet = new keyWordDataSet();
$count = 0;
for ($i = 0; $i <= 7; $i++) {
    $riskTitle = $html->find('h3', $i)->plaintext;
    $riskDescription = $html->find('p', $i)->plaintext;
    $riskDate = $html->find('.item-footer', $i)->plaintext;
    //
    $description = $riskTitle.$riskDescription;
    //
    $riskType = 'Political';
    //
    //$riskDescription = preg_replace(" _ ","", $riskDescription);
    $riskKeyWord = explode(' ', $description);
    //var_dump($riskKeyWord);
    //echo $riskKeyWord[1];
    foreach ($riskKeyWord as $word)
    {
        if ($keyWordsDataSet->checkKeyWords($word)==true){
            $count ++;
        }
        //echo $count;
    }
    $riskConsequence = "";
    $riskProbability = "";
    $raw = "";
    if ($count==0){
        $riskConsequence = 'Low';
        $riskProbability = 'Medium';
        $raw = 'Tolerable';
    }
    elseif ($count==1){
        $riskConsequence = 'Medium';
        $riskProbability = 'High';
        $raw = 'Moderate';
    }
    elseif ($count>1){
        $riskConsequence = 'High';
        $riskProbability = 'High';
        $raw = 'Intolerable';
    }

    //echo 'Starting new haha:        ' .$riskDescription;
    //echo $riskType;
    //echo $riskConsequence;
    //echo $riskProbability;
    //echo $raw;
    //echo $date .'<br/>';
    // Adds all the data for rawrisks into the table.

    $risksDataSet->addRawRisk($riskTitle,$riskDescription,$riskType,$riskProbability,$riskConsequence,$raw,$riskDate);
    //var_dump($risksDataSet);
    $count = 0;
}

