<?php
/**
 * @package     Joomla.Site
 * @subpackage  Templates.protostar
 *
 * @copyright   Copyright (C) 2005 - 2013 Open Source Matters, Inc. All rights reserved.
 * @license     GNU General Public License version 2 or later; see LICENSE.txt
 */

defined('_JEXEC') or die;

// Getting params from template
$params = JFactory::getApplication()->getTemplate(true)->params;

// Remove generator Meta Tag
JFactory::getDocument()->setGenerator('');

$app = JFactory::getApplication();
$doc = JFactory::getDocument();
$this->language = $doc->language;
$this->direction = $doc->direction;

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
//$doc->addScript('templates/' .$this->template. '/js/jquery.easing.1.3.js');
$doc->addScript('templates/' .$this->template. '/js/skrollr.min.js');

// Load optional RTL Bootstrap CSS
//JHtml::_('bootstrap.loadCss', false, $this->direction);

// Add current user information
$user = JFactory::getUser();

// Logo file or site title param
if ($this->params->get('logoFile'))
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
}
?>
  <!DOCTYPE html>
  <html xmlns="http://www.w3.org/1999/xhtml" xml:lang="<?php echo $this->language; ?>" lang="<?php echo $this->language; ?>" dir="<?php echo $this->direction; ?>">

  <head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <jdoc:include type="head" />

    <?php
	// Use of Google Font
	if ($this->params->get('googleFont'))
	{
	?>
      <link href='//fonts.googleapis.com/css?family=<?php echo $this->params->get(' googleFontName ');?>:300,400,700,300italic,400italic,700italic' rel='stylesheet' type='text/css' />
      <style type="text/css">
        p {
          font-family: '<?php echo str_replace('+', ' ', $this->params->get('googleFontName'));?>', sans-serif;
        }
      </style>
      <?php
	}
	?>
        <?php
	if ($this->params->get('headingFont'))
	{
	?>
          <link href='//fonts.googleapis.com/css?family=<?php echo $this->params->get(' headingFont ');?>:300,400,700,300italic,400italic,700italic' rel='stylesheet' type='text/css' />
          <!-- Loading in MerriWeather Sans for Hive -->
          <link href='http://fonts.googleapis.com/css?family=Merriweather+Sans:700' rel='stylesheet' type='text/css'>
          <style type="text/css">
            h1,
            h2,
            h3,
            h4,
            h5,
            h6,
            .site-title {
              font-family: '<?php echo str_replace('+', ' ', $this->params->get('headingFont'));?>', sans-serif;
            }
          </style>
          <?php
	}
	?>

            <!--[if lt IE 9]>
		<script src="<?php echo $this->baseurl ?>/media/jui/js/html5.js"></script>
	<![endif]-->

            <!-- Code for custom popups -->
            <?php include("popup.php"); ?>

              <script>
                function onClickMenu() {
                  if (parseInt(jQuery('.body').css('left')) >= 80) {
                    closeMenu()
                  } else {
                    openMenu();
                  }
                }

                function onClickCover() {
                  closeMenu();
                }
                var scrollPos;

                function openMenu() {
                  scrollPos = jQuery('body').scrollTop();
                  jQuery('.wrapper').animate({
                    left: '80%'
                  });
                  jQuery('.mobile-menu-bar').animate({
                    left: '80%'
                  });
                  jQuery('.off-screen-left').css('display', 'block');
                  jQuery('body').css({
                    position: 'fixed',
                    top: -(document.body.scrollTop)
                  });
                  jQuery('html').css({
                    position: 'fixed',
                    top: -(document.body.scrollTop)
                  });
                  jQuery(".body").on("touchmove", false);
                  jQuery('.cover').fadeIn();
                }

                function closeMenu() {
                  jQuery('.wrapper').animate({
                    left: '0%'
                  });
                  jQuery('.mobile-menu-bar').animate({
                    left: '0%'
                  }, function() {
                    jQuery('.off-screen-left').css('display', 'none');
                  });
                  jQuery('body').css({
                    position: 'inherit'
                  });
                  jQuery('html').css({
                    position: 'inherit'
                  });
                  jQuery('body').scrollTop(scrollPos);
                  jQuery(".body").off("touchmove", false);
                  jQuery('.cover').fadeOut();
                }

                jQuery(document).ready(function() {
                  //init parralax
                  //var skr = skrollr.init();

                  //animate pointer
                  /*var OFFSET_CONST = 30;
                  var originalLeft = jQuery('nav ul .current').position().left + OFFSET_CONST;
                  jQuery('.pointer').animate({left: originalLeft}, 500,'easeOutCubic');

                  jQuery('nav .nav li').mouseover(function() {
                    //stop current animation
                    jQuery('.pointer').stop(true,false);
                    var left = jQuery(this).position().left + OFFSET_CONST;
                    jQuery('.pointer').animate({left: left}, 500,'easeOutCubic');
                  });

                  jQuery('nav .nav').mouseleave(function() {
                    jQuery('.pointer').stop(true,false);
                    jQuery('.pointer').animate({left: originalLeft}, 700,'easeOutCubic');
                  });*/

                  //sticky menu
                  /*jQuery(function() {
                    var menuOffset = jQuery('.navigation')[0].offsetTop;
                    jQuery(document).bind('ready scroll', function() {

                      var docScroll = jQuery(document).scrollTop();
                      if(docScroll >= menuOffset) {
                        jQuery('.navigation').addClass('nav-sticky').css('width','100%');
                        jQuery('.navigation').parent().next().css('margin-top', jQuery('.navigation').height());
                      } else {
                        jQuery('.navigation').removeClass('nav-sticky').removeAttr('width');
                        jQuery('.navigation').parent().next().css('margin-top','0');
                      }
                    });
                  });*/

                });
              
    $doc->addStylesheet('templates/' . $this->template . '/css/main.css');

    </script>
              <meta name="viewport" content="width=device-width, initial-scale=1.0">
              
  </head>

  <body class="site<?php echo ' '.$this->params->get('class-suffix') ?>">

    <!-- Mobile sidebar -->
    <div class='off-screen-left'>
      <div class='off-screen-container'>
        <jdoc:include type="modules" name="mobile-sidebar-left" />
      </div>
    </div>
    <div class='wrapper' id='skrollr-body'>
      <!-- Body -->
      <div class="body">
        <div class='cover' onclick='onClickCover()'></div>
        <div class='mobile-menu-bar'>
          <div class='mobile-menu-btn' onclick='onClickMenu();'>&#9776; <span>menu</span></div>
        </div>
        <!-- Left Off Page -->
        <?php if ($this->countModules('left-off-page')) : ?>
          <div class='left-off-page'>
            <jdoc:include type="modules" name="left-off-page" />
          </div>
          <?php endif; ?>



            <div class="container-fluid header">

              <!-- Float Top -->
              <?php if ($this->countModules('float-top')) : ?>
                <div class='float-top navbar navbar-fixed-top'>
                  <jdoc:include type="modules" name="float-top" />
                </div>
                <?php endif; ?>

                  <!-- Float Top -->
                  <?php if ($this->countModules('float-bottom')) : ?>
                    <div class='float-top navbar navbar-fixed-bottom'>
                      <jdoc:include type="modules" name="float-bottom" />
                    </div>
                    <?php endif; ?>

                      <div class='container header'>
                        <!-- Header -->
                        <header class="row" role="banner">
                          <div id="header_contents">
                            <?php if ($this->countModules('header-left')) : ?>
                              <div class="header-left col-md-offset-1 col-md-6 col-sm-offset-1 col-sm-5 col-xs-8">
                                <a href='<?php echo JURI::base(); ?>'>
                                  <jdoc:include type="modules" name="header-left" style="xhtml" />
                                </a>
                              </div>
                              <?php endif; ?>
                                <?php if ($this->countModules('logo')) : ?>
                                  <div class='logo'>
                                    <a href='<?php echo JURI::base(); ?>'>
                                      <?php echo $logo; ?>
                                    </a>
                                  </div>
                                  <?php endif; ?>
                                    <?php if ($this->countModules('header-right')) : ?> 
                                      <div class='logo-header-right col-lg-offset-1 col-md-offset-1 col-sm-offset-3 col-sm-2 col-xs-4'>
                                        <a href='<?php echo JURI::base(); ?>'>
                                          <jdoc:include type="modules" name="header-right" style="xhtml" />
                                        </a>
                                      </div>
                                      <?php endif; ?>
                          </div>
                        </header>
                      </div>
            </div>

            <div class='container-fluid navigation'>
              <?php if ($this->countModules('navigation')) : ?>
                <div class='container'>
                  <div class='row'>
                    <nav class="nav-horizontal" role="navigation">
                      <jdoc:include type="modules" name="navigation" style="xhtml" />
                      <div class='pointer'></div>
                    </nav>
                  </div>
                </div>
                <?php endif; ?>
            </div>
            

             <div class='container-fluid hero-row'>
	                             <div class="col-xs-12">

    <jdoc:include type="modules" name="hero-full-width" style="xhtml" />
</div>
    <?php if ($this->countModules('hero')) : ?>
      <div class='container'>
        <div class='hero row'>
          <div class='col-xs-12'>
            <jdoc:include type="modules" name="hero" style="xhtml" />
          </div>
        </div>
      </div>
      <?php endif; ?>
  </div>

            <div class='container-fluid'>
              <div class='container'>
                <div class='row'>
                  <jdoc:include type="modules" name="above-content" style="xhtml" />
                </div>
              </div>
            </div>

            <div class='container'>
              <div class="row content-row">
                <main id="content" role="main" class="col-md-8 col-md-offset-2 col-sm-10 col-sm-offset-1 col-xs-12">
                  <!-- Begin Content -->
                  <jdoc:include type="message" />
                  <jdoc:include type="component" />
                  <!-- End Content -->
                </main>
              </div>
            </div>


            <?php if ($this->countModules('below-content')) : ?>
              <div class='container-fluid strip strip-alt-1 no-bottom'>
                <div class='container'>
                  <div class='row'>
                    <jdoc:include type="modules" name="below-content" style="xhtml" />
                  </div>
                </div>
              </div>
              <?php endif; ?>

              <?php if ($this->countModules('below-content-1')) : ?>
                <div class='container-fluid strip strip-alt-1a no-bottom'>
                  <div class='container'>
                    <div class='row'>
                      <jdoc:include type="modules" name="below-content-1" style="xhtml" />
                    </div>
                  </div>
                </div>
                <?php endif; ?>

                    <?php if ($this->countModules('below-content-2')) : ?>
                      <div class='container-fluid strip strip-alt-2'>
                        <div class='container'>
                          <div class='row social-icons'>
                            <jdoc:include type="modules" name="below-content-2" style="xhtml" />
                          </div>
                        </div>
                      </div>
                      <?php endif; ?>

                        <?php if ($this->countModules('below-content-3')) : ?>
                          <div class='container-fluid strip strip-alt-3'>
                            <div class='container'>
                              <div class='row'>
                                <jdoc:include type="modules" name="below-content-3" style="xhtml" />
                              </div>
                            </div>
                          </div>
                          <?php endif; ?>

                            <?php if ($this->countModules('footer')) : ?>
                              <div class='container-fluid strip footer'>
                                <div class='container'>
                                  <div class='row'>
                                    <jdoc:include type="modules" name="footer" style="xhtml" />
                                    <a href="http://growyourownwebsite.co.uk" target="_blank">
                                      <div id="gyo_footer">
                                      </div>
                                    </a>
                                  </div>
                                </div>
                              </div>
                              <?php endif; ?>

      </div>
    </div>

    <jdoc:include type="modules" name="debug" style="none" />
  </body>

  </html>