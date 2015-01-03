<?php
require_once('includes/templateFunctions.php');
$tmpl=new TemplateFunctions();
$tmpl->setWidget('logoPosition','logo');
$tmpl->setWidget('sidebarPosition','hello',array('hello_to'=>'MyCMS'));
$tmpl->show();
?>