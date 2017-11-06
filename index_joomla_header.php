<?php

defined('_JEXEC') or die;
// Getting params from template
$params = JFactory::getApplication()->getTemplate(true)->params;
// Remove generator Meta Tag
JFactory::getDocument()->setGenerator('');
$app = JFactory::getApplication();
$doc = JFactory::getDocument();
$this->language = $doc->language;
$this->direction = $doc->direction;
unset($doc->_scripts[$this->baseurl.'/media/jui/css/bootstrap.css']);
//Load bootstrap 3
$doc->addStylesheet('templates/' . $this->template . '/css/bootstrap.min.css');
$doc->addStylesheet('templates/' . $this->template . '/css/bootstrap-theme.min.css');
$doc->addStylesheet('templates/' . $this->template . '/css/main.css');
/*  <link rel="stylesheet" href="css/main.css">
<script type="text/javascript" src="js/script.js"></script>*/
$doc->addScript('http://ajax.googleapis.com/ajax/libs/jqueryui/1.10.3/jquery-ui.min.js');
$doc->addScript('templates/' .$this->template. '/js/skrollr.min.js');
// Logo file or site title param
/*if ($this->params->get('logoFile'))
{
$logo = '<img src="'. JUri::root() . $this->params->get('logoFile') .'" alt="'. $sitename .'" />';
}
elseif ($this->params->get('sitetitle'))
{
$logo = '<span class="site-title" title="'. $sitename .'">'. htmlspecialchars($this->params->get('sitetitle')) .'</span>';
}
else
{
$logo = '<span class="site-title" title="'. $sitename .'">'. $sitename .'</span>';
}*/
?>