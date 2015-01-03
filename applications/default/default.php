<?php
require_once('includes/cmsApplication.php');
class DefaultApplication extends CmsApplication{
    function addcontent(){
        echo "Add";
    }
    function display(){
        echo "view";
    }
    function anyothertask(){
        echo "other tasks";
    }
}
?>