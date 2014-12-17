<?php 
require_once('cmsBase.php');
class TemplateFunctions extends CmsBase{
    var $templateName='default';
    var $widgetPositions=array();
    function setWidget($position,$widgetName){
        if(empty($this->widgetPositions[$position])){
            $this->widgetPositions[$position]=array($widgetName);
        }
        else{
            array_push($this->widgetPositions[$position],$widgetName);
        }
    }
    function show(){
        require_once($this->getCurrentTemplatePath().'index.php');
    }
    function getCurrentTemplatePath(){
        return 'templates/'.$this->templateName.'/';
    }
    function setTemplate($templateName){
        $this->templateName=$templateName;
    }
    function appOutput(){
        require_once('includes/cmsApplication.php');
        $app=new CmsApplication();
        $app->run();
        
    }
    function widgetOutput($position='default'){
        if(!empty($this->widgetPositions[$position])){
            $widgets=$this->widgetPositions[$position];
            foreach($widgets as $widgetName){
                require_once('widgets/'.$widgetName.'/'.$widgetName.'.php');
                $widgetclass=ucfirst($widgetName).'Widget';
                $widget=new $widgetclass();
                $widget->run($widgetName);
            }
        }
    }
}
?>