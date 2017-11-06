<?
include "index_header.php";
include "index_joomla_header.php";
include "index_selector.php"
?>
  <html>

  <body class="site<?php echo ' '.$this->params->get('class-suffix') ?>">
    <!-- Mobile sidebar -->
    <div class='off-screen-left'>
      <div class='off-screen-container'>
        <jdoc:include type="modules" name="mobile-sidebar-left" /> </div>
    </div>
    <div class='wrapper' id='skrollr-body'>
      <!-- Body -->
      <div class="body">
        <div class='cover' onclick='onClickCover()' style="display:none" ;></div>
        <div class='mobile-menu-bar'>
          <div class='mobile-menu-btn' onclick='onClickMenu();'>&#9776; <span>menu</span></div>
        </div>
        <!-- Left Off Page -->
        <?php if ($this->countModules('left-off-page')) : ?>
          <div class='left-off-page'>
            <jdoc:include type="modules" name="left-off-page" /> </div>
          <?php endif; ?>
            <div class="grid">
              <!--              <nav>
                <jdoc:include type="modules" name="float-top" />
                <jdoc:include type="modules" name="float-bottom" />
                <jdoc:include type="modules" name="navigation" style="xhtml" /> 
              </nav>-->
              <header_left>
                <name>
                  <h1>header-left</h1> </name>
                <jdoc:include type="modules" name="header-left" class="header-left" style="xhtml" /> </header_left>
              <header_right>
                <name>
                  <h1>header-right</h1> </name>
                <a href='<?php echo JURI::base(); ?>'>
                  <jdoc:include type="modules" name="header-right" class="header-right" style="xhtml" /> </a>
              </header_right>
              <nav>
                <name>
                  <h1>nav</h1> </name>
                <jdoc:include type="modules" name="navigation" style="xhtml" /> </nav>
              <hero_full_width>
                <name>
                  <h1>hero-full-width</h1> </name>
                <jdoc:include type="modules" name="hero-full-width" style="xhtml" /> </hero_full_width>
              <above_content>
                <name>
                  <h1>above-content</h1> </name>
                <jdoc:include type="modules" name="above-content" style="xhtml" /> </above_content>
              <main class="article">
                <name>
                  <h1>main content</h1> </name>
                <!-- Begin Content -->
                <jdoc:include type="message" />
                <jdoc:include type="component" />
                <!-- End Content -->
              </main>
              <below_content>
                <name>
                  <h1>below-content</h1> </name>
                <jdoc:include type="modules" name="below-content" style="xhtml" /> </below_content>
              <below_content-1>
                <name>
                  <h1>below-content-1</h1> </name>
                <jdoc:include type="modules" name="below-content-1" style="xhtml" /> </below_content-1>
              <below_content-2>
                <name>
                  <h1>below-content-2</h1> </name>
                <jdoc:include type="modules" name="below-content-2" style="xhtml" /> </below_content-2>
              <below_content-3>
                <name>
                  <h1>below-content-3</h1> </name>
                <jdoc:include type="modules" name="below-content-3" style="xhtml" /> </below_content-3>
              <footer>
                <name>
                  <h1>footer</h1> </name>
                <jdoc:include type="modules" name="footer" style="xhtml" />hand added content to footer </footer>
              <footer_left>
                <name>
                  <h1>footer-left</h1> </name>
                <jdoc:include type="modules" name="footer-left" style="xhtml" /> </footer_left>
              <footer_right>
                <name>
                  <h1>footer-right</h1> </name>
                <jdoc:include type="modules" name="footer-right" style="xhtml" /> </footer_right>
              <float_bottom>
                <name>
                  <h1>flt_btm</h1> </name>
                <jdoc:include type="modules" name="float-bottom" style="xhtml" />
                <h3>hand added content to float_bottom </h3> </float_bottom>
            </div>
      </div>
    </div>
  </body>

  </html>