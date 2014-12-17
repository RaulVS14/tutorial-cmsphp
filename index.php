<?php
require_once('includes/cmsApplication.php');
$app=new CmsApplication();
if(isset($_REQUEST['task'])){
    $task=$_REQUEST['task'];
    switch($task){
        case 'addcontent':
            $app->addcontent();
            break;
        case 'anyothertask':
            $app->anyothertask();
            break;
        
    }
}
else{
    $app->viewcontent();
}
?>