<?php 
require_once('cmsBase.php');
class TemplateFunctions extends CmsBase{
    var $templateName='default';
    function show(){
        require_once($this->getCurrentTemplatePath().'index.php');
    }
    function getCurrentTemplatePath(){
        return 'templates/'.$this->templateName.'/';
    }
    function setTemplate($templateName){
        $this->templateName=$templateName;
    }
}
?>