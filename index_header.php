<?php
/*error_reporting(E_ALL); ini_set( 'display_errors', 1);*/
session_start(); 
if (!isset($_SESSION["lastSetStyle"])) {$lastSetStyle = "UNSET";}
if (!isset($_SESSION["lastSetColour"])) {$lastSetColour = "UNSET";}
if (!isset($_SESSION["lastSetLayout"])) {$lastSetLayout = "UNSET";}

// The session enables variables to survive a reload


defined('_JEXEC') or die;// stops direct loading of this file
// Getting params from aspect of the Joomla template system
$params = JFactory::getApplication()->getTemplate(true)->params;
// Remove generator Meta Tag
JFactory::getDocument()->setGenerator('');
$app = JFactory::getApplication();
$doc = JFactory::getDocument();
$this->language = $doc->language;
$this->direction = $doc->direction;
unset($doc->_scripts[$this->baseurl.'/media/jui/css/bootstrap.css']);


// Detecting Active Variables
$option   = $app->input->getCmd('option', '');
$view     = $app->input->getCmd('view', '');
$layout   = $app->input->getCmd('layout', '');
$task     = $app->input->getCmd('task', '');
$itemid   = $app->input->getCmd('Itemid', '');
$sitename = $app->getCfg('sitename');

if($task == "edit" || $layout == "form" )
{
	$fullWidth = 1;
}
else
{
	$fullWidth = 0;
}

//Less variables from template
$file = fopen('templates/'.$this->template.'/less/test.less', 'w');
$lessparams = "@page-bg-color:".$this->params->get('pageBackgroundColor').';';
$lessparams .= "@container-bg-color:".$this->params->get('containerBackgroundColor').';';
$lessparams .= "@header-color:".$this->params->get('headerColor').';';
$lessparams .= "@nav-bg-color:".$this->params->get('navigationBackgroundColor').';';
$lessparams .= "@nav-text-color:".$this->params->get('navigationTextColor').';';
$lessparams .= "@nav-text-active-color:".$this->params->get('navigationTextActiveColor').';';
$lessparams .= "@footer-bg-color:".$this->params->get('footerBackgroundColor').';';
$lessparams .= "@footer-text-color:".$this->params->get('footerTextColor').';';
$lessparams .= "@body-text-color:".$this->params->get('bodyTextColor').';';
$lessparams .= "@body-link-color:".$this->params->get('bodyLinkColor').';';
$lessparams .= "@base-size:".$this->params->get('fontSize').';';
$lessparams .= "@font:".$this->params->get('googleFontName').';';
$lessparams .= "@heading-font:".$this->params->get('headingFont').';';
$lessparams .= "@h2-text-size:".$this->params->get('h2TextSize').';';
$lessparams .= "@h2-text-color:".$this->params->get('h2TextColor').';';
$lessparams .= "@h2-font-weight:".$this->params->get('h2FontWeight').';';
$lessparams .= "@h3-text-size:".$this->params->get('h3TextSize').';';
$lessparams .= "@h3-text-color:".$this->params->get('h3TextColor').';';
$lessparams .= "@h3-font-weight:".$this->params->get('h3FontWeight').';';
file_put_contents('templates/'.$this->template.'/less/template-params.less', $lessparams);

// Add JavaScript Frameworks
//JHtml::_('bootstrap.framework');
//Unset old bootstrap
unset($doc->_scripts[$this->baseurl.'/media/jui/css/bootstrap.css']);



//Load bootstrap 3
$doc->addStylesheet('templates/' . $this->template . '/css/bootstrap.min.css');
$doc->addStylesheet('templates/' . $this->template . '/css/bootstrap-theme.min.css');

// Add Stylesheets
//$doc->addStyleSheet('templates/'.$this->template.'/css/template.css');
$doc->addStyleSheet('templates/'.$this->template.'/css/base_style.css');
$doc->addStyleSheet('templates/'.$this->template.'/css/'.$this->template.'.css');


$doc->addStylesheet('templates/' . $this->template . '/css/main.css');

$doc->addScript('http://ajax.googleapis.com/ajax/libs/jqueryui/1.10.3/jquery-ui.min.js');
$doc->addScript('templates/' .$this->template. '/scripts/main.min.js');

/*echo"<br>!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!".$lastSetStyle;
echo"<br>!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!".$lastSetColour;
echo"<br>!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!".$lastSetLayout;*/

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




  <!--
<script>
  window.onload = function() {
  alert("Loaded");
    if (window.jQuery) {  
         //jQuery is loaded  
        alert("Yeah!");
    } else {
         //jQuery is not loaded
        alert("Doesn't Work");
    }
}
</script>
-->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <jdoc:include type="head" />
    <!--    <link href='//fonts.googleapis.com/css?family=<?php echo $this->params->get(' googleFontName ');?>:300,400,700,300italic,400italic,700italic' rel='stylesheet' type='text/css' />-->
    <style type="text/css">
      p {
        font-family: '<?php echo str_replace('+', ' ', $this->params->get('googleFontName'));?>', sans-serif;
      }
    </style>
    <!--[if lt IE 9]>
  <script src="<?php echo $this->baseurl ?>/media/jui/js/html5.js"></script>
  <![endif]-->
  </head>