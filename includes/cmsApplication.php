<?php
require_once('cmsBase.php');
class CmsApplication extends CmsBase{
    function run(){
        if(isset($_REQUEST['task'])){
            $task=$_REQUEST['task'];
            switch($task){
                case 'addcontent':
                    $this->addcontent();
                    break;
                case 'anyothertask':
                    $this->anyothertask();
                    break;
                default:
                    $this->display();
                    break;
            }
        }
        else{
            $this->display();
        }
    }
    function display(){
        echo 'default display';
    }
}
?>