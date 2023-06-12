<?php

$dsn = 'sqlite:FPA_FOD_20170508.sqlite';

$db = new PDO($dsn);

//landing page Controller 
if ($_SERVER['REQUEST_URI'] == '/'){
    $forestsPDO = $db->query('Select DISTINCT NWCG_REPORTING_UNIT_NAME FROM "Fires" order BY NWCG_REPORTING_UNIT_NAME');
    $forests = $forestsPDO->fetchAll(PDO::FETCH_COLUMN);

    require 'views/index.view.php';
    
//forest detail page controller
} else {

    //get forest name
    $forestName = str_replace('-',' ',$_GET['forest']);
    //prepare db 
    $sql = 'Select "FPA_ID","FIRE_NAME","DISCOVERY_DATE","FIRE_YEAR","STAT_CAUSE_DESCR" ,"FIRE_SIZE" FROM "Fires" WHERE NWCG_REPORTING_UNIT_NAME = :forestName ORDER BY "FIRE_YEAR" DESC';
    $forestDetailStmt = $db->prepare($sql);
    $forestDetailStmt->execute([':forestName' => $forestName]);
    $forestsDetail = $forestDetailStmt->fetchAll(PDO::FETCH_ASSOC);

    require 'views/forests.view.php';

}





