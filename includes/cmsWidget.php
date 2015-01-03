<?php
require_once('cmsBase.php');
class CmsWidget extends CmsBase{
    var $widgetPath='';
    var $widgetName='';
    var $parameters=array();
    function setWidgetPath($widgetName){
        $this->widgetPath='widgets/'.$widgetName.'/';
        $this->widgetName=$widgetName;
    }
    function getWidgetPath(){
        return $this->widgetPath;
    }
    function display(){
        echo'default output';
    }
    function run($widgetName,$params){
        $this->parameters=$params;
        $this->setWidgetPath($widgetName);
        $this->display();
    }
}
?>