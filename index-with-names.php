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

  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <jdoc:include type="head" />
    <link href='//fonts.googleapis.com/css?family=<?php echo $this->params->get(' googleFontName ');?>:300,400,700,300italic,400italic,700italic' rel='stylesheet' type='text/css' />
    <style type="text/css">
      p {
        font-family: '<?php echo str_replace('+', ' ', $this->params->get('googleFontName'));?>', sans-serif;
      }
    </style>
    <!--[if lt IE 9]>
  <script src="<?php echo $this->baseurl ?>/media/jui/js/html5.js"></script>
  <![endif]-->
    <!-- Code for custom popups -->
    <?php include("popup.php"); ?>
      <script>
        function onClickMenu() {
          if (parseInt(jQuery('.body').css('left')) >= 80) {
            closeMenu()
          }
          else {
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
            position: 'fixed'
            , top: -(document.body.scrollTop)
          });
          jQuery('html').css({
            position: 'fixed'
            , top: -(document.body.scrollTop)
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
          }, function () {
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
        jQuery(document).ready(function () {
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
      </script>
  </head>
  <html>

  <body class="site<?php echo ' '.$this->params->get('class-suffix') ?>">
    <!-- Mobile sidebar -->
    <div class='off-screen-left'>
<!--      <div class='off-screen-container'>
        <jdoc:include type="modules" name="mobile-sidebar-left" /> </div>-->
    </div>
    <div class='wrapper' id='skrollr-body'>
      <!-- Body -->
      <div class="body">
<!--        <div class='cover' onclick='onClickCover()'></div>
        <div class='mobile-menu-bar'>
          <div class='mobile-menu-btn' onclick='onClickMenu();'>&#9776; <span>menu</span></div>
        </div>-->
        <!-- Left Off Page -->
        <?php if ($this->countModules('left-off-page')) : ?>
          <div class='left-off-page'>
            <jdoc:include type="modules" name="left-off-page" /> </div>
          <?php endif; ?>
            <!--Sizes :- Used for onscreen indication of the currently active breakpont-->
            <sizes>
              <div id="exsmall">ExSmall: - Phone</div>
              <div id="small"> Small: - phone - landscape</div>
              <div id="medium"> Medium: - Tablet Portrait</div>
              <div id="large"> Large (Tablet: - Landscape) </div>
              <div id="larger">Larger: - Desktop standard</div>
              <div id="exlarge">exLarge: - Desktop large</div>
              <div id="massive"> Massive: - Desktop Massive</div>
              <div id="vast"> Vast: - Desktop Maxium possible</div>
              <php? error_reporting(E_ALL); ini_set( 'display_errors', 1);?> **************************STYLE***********************
                <? $dir="templates/StyleSelector/SRA-WSKvr.2/app/partials/styles"; $handle=opendir($dir); ?>
                  <form> Select a style
                    <select name="setStyle" onchange="this.form.submit()">
                      <option selected value="#">Select Style</option>
                      <?
              while ($file1 = readdir($handle)) {
              if ($file1<>".") {
              if ($file1<>".."){
              if ($file1<>".DS_Store"){
              if ($file1<>"colours"){
              if ($file1<>"layouts"){
              $s="$file1";
              echo('<option value="'.$s.'">'.$file1.'</option>');
              } }}}}
              }
              echo "<br>STYLE ".$setStyle." Selected";
              closedir($handle);
              
              
              ?>
                    </select>
                  </form> ************************COLOUR********************
                  <? $dir="templates/StyleSelector/SRA-WSKvr.2/app/partials/styles/colours"; $handle=opendir($dir); ?>
                    <form> Select a colour
                      <select name="setColour" onchange="this.form.submit()">
                        <option selected value="#">Select Colour</option>
                        <?
              while ($file1 = readdir($handle)) {
              if ($file1<>".") {
              if ($file1<>".."){
              if ($file1<>".DS_Store"){
              $s="$file1";
              echo('<option value="'.$s.'">'.$file1.'</option>');
              } }}}
              
              
              /*while ($file1 = readdir($handle)) {
              if ($file1<>".") {
              if ($file1<>".."){
              if ($file1<>".DS_Store"){
              $s="$file1";
              $ext = array_pop($file1);
              echo("TESTTTTTTT".$ext);
              if ($ext =="css"){
              echo('<option value="'.$s.'">'.$file1.'</option>');
              } }}}}*/
              closedir($handle);
              
              
              ?>
                      </select>
                    </form> *************************LAYOUT*****************
                    <? $dir="templates/StyleSelector/SRA-WSKvr.2/app/partials/styles/layouts"; $handle=opendir($dir); ?>
                      <form> Select a Layout
                        <select name="setLayout" onchange="this.form.submit()">
                          <option selected value="#">Select Layout</option>
                          <?
              while ($file1 = readdir($handle)) {
              if ($file1<>".") {
              if ($file1<>".."){
              if ($file1<>".DS_Store"){
              $s="$file1";
              echo('<option value="'.$s.'">'.$file1.'</option>');
              } }}}
              closedir($handle);
              
              
              ?>
                        </select>
                      </form>
                      <?
          
          
          if(isset($_GET["setStyle"])){
          $setStyle=$_GET["setStyle"];
          echo "select setStyle is => ".$setStyle;
          $file = "templates/StyleSelector/SRA-WSKvr.2/app/styles/".$setStyle;
          
          $file = "templates/StyleSelector/SRA-WSKvr.2/app/partials/styles/".$setStyle;
          
          $newStyle = 'templates/StyleSelector/SRA-WSKvr.2/app/partials/_style.scss';
          /*
          echo "save path is => ".$newStyle;
          */
          /*************save style*********/
          
          error_reporting(E_ALL);
          ini_set('display_errors', 1);
          
          if (!copy($file, $newStyle)) {
          echo "<br><h1>failed to copy</h1>";
          } else {
          echo "<br>STYLE ".$setStyle." ENABLED";
          }
          }
          if(isset($_GET["setColour"])){
          $setColour=$_GET["setColour"];
          echo "select setColour is => ".$setColour;
          error_reporting(E_ALL);
          ini_set('display_errors', 1);
          $colourFile = "templates/StyleSelector/SRA-WSKvr.2/app/partials/styles/colours/".$setColour;
          $newColour = 'templates/StyleSelector/SRA-WSKvr.2/app/partials/_colour.scss';
          
          
          if (!copy($colourFile, $newColour)) {
          echo "<br>failed to copy";
          } else {
          echo "<br>COLOUR ".$setColour." ENABLED";
          }
          }
          if(isset($_GET["setLayout"])){
          $setLayout=$_GET["setLayout"];
          echo "select setStyle is => ".$setLayout;
          
          error_reporting(E_ALL);
          ini_set('display_errors', 1);
          $layoutFile = "templates/StyleSelector/SRA-WSKvr.2/app/partials/styles/layouts/".$setLayout;
          $newLayout = 'templates/StyleSelector/SRA-WSKvr.2/app/partials/_layout.scss';
          if (!copy($layoutFile, $newLayout)) {
          echo "<br>failed to copy";
          } else {
          echo "<br>STYLE ".$setLayout." ENABLED";
          }
          }
          ?>
            </sizes>
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
            <div class="grid">
<!--              <nav>
                <jdoc:include type="modules" name="float-top" />
                <jdoc:include type="modules" name="float-bottom" />
                <jdoc:include type="modules" name="navigation" style="xhtml" /> 
              </nav>-->
              
              <header_left><h1>header-left</h1>
                <jdoc:include type="modules" name="header-left" class="header-left" style="xhtml" />
              </header_left>
              
               <header_right><h1>header-right</h1>
                <a href='<?php echo JURI::base(); ?>'>
                  <jdoc:include type="modules" name="header-right" class="header-right" style="xhtml" /> </a>
              </header_right>
              
              
              <nav><h1>nav</h1>
                <jdoc:include type="modules" name="navigation" style="xhtml" /> 
              </nav>
              
              <hero_full_width><h1>hero-full-width</h1>
                <jdoc:include type="modules" name="hero-full-width" style="xhtml" /> 
              </hero_full_width>
                
              <above_content><h1>above-content</h1>
                <jdoc:include type="modules" name="above-content" style="xhtml" /> 
              </above_content>
              
               <main class="article"><h1>main content</h1>
                <!-- Begin Content -->
                <jdoc:include type="message" />
                <jdoc:include type="component" />
                <!-- End Content -->
              </main>
              
              <below_content><h1>below-content</h1>
                <jdoc:include type="modules" name="below-content" style="xhtml" />
              </below_content>

              <below_content-1><h1>below-content-1</h1>
                <jdoc:include type="modules" name="below-content-1" style="xhtml" />
              </below_content-1>
             
              <below_content-2><h1>below-content-2</h1>
                <jdoc:include type="modules" name="below-content-2" style="xhtml" />
              </below_content-2>

              <below_content-3><h1>below-content-3</h1>
                <jdoc:include type="modules" name="below-content-3" style="xhtml" />
              </below_content-3>
              
              <footer> <h1>footer</h1>
                <jdoc:include type="modules" name="footer" style="xhtml" />hand added content to footer
              </footer>
              
              <footer_left><h1>footer-left</h1>
                <jdoc:include type="modules" name="footer-left" style="xhtml" />
              </footer_left>
              
              <footer_right><h1>footer-right</h1>
                <jdoc:include type="modules" name="footer-right" style="xhtml" />
              </footer_right>
              
              <float_bottom> <h1>flt_btm</h1>
                <jdoc:include type="modules" name="float-bottom" style="xhtml" />
                <h3>hand added content to float_bottom </h3>
              </float_bottom>
            </div>
    </body>
  </html>