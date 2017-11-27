<?
include "index_joomla_header.php";
include "index_header.php";
?>
  <html>

  <body class="site<?php echo ' ' . $this->params->get('class-suffix') ?>">
    <!-- Mobile sidebar -->
    <div class='off-screen-left'>
      <div class='off-screen-container'>
        <jdoc:include type="modules" name="mobile-sidebar-left" />
      </div>
    </div>
    <div class='wrapper' id='skrollr-body'>
      <!-- Body -->
      <div class="body">
        <div class='cover' onclick='onClickCover()' style="display:none" ;></div>
        <div class='mobile-menu-bar'>
          <div class='mobile-menu-btn' onclick='onClickMenu();'>&#9776; <span>menu</span>
          </div>
        </div>
        <!-- Left Off Page -->
        <?php if ($this->countModules('left-off-page')) : ?>
        <div class='left-off-page'>
          <jdoc:include type="modules" name="left-off-page" />
        </div>
        <?php endif; ?>
        <?
        include "index_sizes.php"
        ?>
          <div class="grid">

            <?php if ($this->countModules('header-left')) : ?>
            <headerLeft>
              <section>
                <div class="header_left">
                  <name>
                    <h1>header-left</h1>
                  </name>
                  <jdoc:include type="modules" name="header-left" class="header-left" style="xhtml" />
                </div>
              </section>
            </headerLeft>
            <?php endif; ?>

            <?php if ($this->countModules('header-right')) : ?>
            <headerRight>
              <section>
                <div class="header_right">
                  <name>
                    <h1>header-right</h1>
                  </name>
                  <a href='<?php echo JURI::base(); ?>'>
                    <jdoc:include type="modules" name="header-right" class="header-right" style="xhtml" />
                  </a>
                </div>
              </section>
            </headerRight>
            <?php endif; ?>

            <?php if ($this->countModules('navigation')) : ?>
            <nav>
              <name>
                <h1>nav</h1>
              </name>
              <jdoc:include type="modules" name="navigation" style="xhtml" />
            </nav>
            <?php endif; ?>

            <?php if ($this->countModules('hero-full-width')) : ?>
            <hero_full_width>
              <section>
                <div class="hero_full_width">
                  <name>
                    <h1>hero-full-width</h1>
                  </name>
                  <jdoc:include type="modules" name="hero-full-width" style="xhtml" />
                </div>
              </section>
            </hero_full_width>
            <?php endif; ?>

            <?php if ($this->countModules('above-content')) : ?>
            <above_content>
              <section class="above-content">
                <name>
                  <h1>above-content</h1>
                </name>
                <jdoc:include type="modules" name="above-content" style="xhtml" />
              </section>
            </above_content>
            <?php endif; ?>

            <?php if ($this->countModules('aside')) : ?>
            <aside>
              <section class="aside">
                <name>
                  <h1>below-content</h1>
                </name>
                <jdoc:include type="modules" name="aside" style="xhtml" />
              </section>
            </aside>
            <?php endif; ?>

            <?php if ($this->countModules('aside-b')) : ?>
            <aside_b>
              <section class="aside-b">
                <name>
                  <h1>below-content</h1>
                </name>
                <jdoc:include type="modules" name="aside-b" style="xhtml" />
              </section>
            </aside_b>
            <?php endif; ?>

            <main>
              <section>
                <name>
                  <h1>main content</h1>
                </name>
                <!-- Begin Content -->
                <jdoc:include type="message" />
                <jdoc:include type="component" />
                <!-- End Content -->
              </section>
            </main>
            <?php if ($this->countModules('below-content')) : ?>
            <below_content>
              <section class="below_content">
                <name>
                  <h1>below-content</h1>
                </name>
                <jdoc:include type="modules" name="below_content" style="xhtml" />
              </section>
            </below_content>
            <?php endif; ?>

            <?php if ($this->countModules('below-content-1')) : ?>
            <below_content-1>
              <section class="below_content-1">
                <name>
                  <h1>below-content-1</h1>
                </name>
                <jdoc:include type="modules" name="below-content-1" style="xhtml" />
                <div class="card">
                  <div class="card-body">
                    This is some text within a card block.
                  </div>
                </div>
                <div class="card">
                  <div class="card-body">
                    This is some text within a card block.
                  </div>
                </div>
                <div class="card">
                  <div class="card-body">
                    This is some text within a card block.
                  </div>
                </div>
                <div class="card">
                  <div class="card-body">
                    This is some text within a card block.
                  </div>
                </div>
              </section>
            </below_content-1>
            <?php endif; ?>

            <?php if ($this->countModules('below-content-2')) : ?>
            <below_content-2>
              <section class="below_content-2">
                <name>
                  <h1>below-content-2</h1>
                </name>
                <jdoc:include type="modules" name="below-content-2" style="xhtml" />
                <div class="card" style="width: 20rem;">
                  <img class="card-img-top" src="..." alt="Card image cap">
                  <div class="card-body">
                    <h4 class="card-title">Sample Card Title</h4>
                    <p class="card-text">He seems sinking under the evidence could not only grieve and a visit. The father is to bless and placed in his length hid...</p>
                    <a href="#" class="btn btn-primary">Tell me more &rarr;</a>
                  </div>
                </div>
              </section>
            </below_content-2>
            <?php endif; ?>

            <?php if ($this->countModules('below-content-3')) : ?>
            <below_content-3>
              <section class="below_content-3">
                <name>
                  <h1>below-content-3</h1>
                </name>
                <jdoc:include type="modules" name="below-content-3" style="xhtml" />
              </section>
            </below_content-3>
            <?php endif; ?>

            <?php if ($this->countModules('footer')) : ?>
            <footer>
              <section class="footer">
                <name>
                  <h1>footer</h1>
                </name>
                <jdoc:include type="modules" name="footer" style="xhtml" /> hand added content to footer
              </section>
            </footer>
            <?php endif; ?>
              
              <?php if ($this->countModules('footer-left')) : ?>

              <footer_left>
                <div class="footer_left">
                  <name>
                    <h1>footer-left</h1>
                  </name>
                  <jdoc:include type="modules" name="footer-left" style="xhtml" />
                </div>
              </footer_left>
            
            <?php endif; ?>
              <footer_right>

                <?php if ($this->countModules('footer-right')) : ?>
                <div class="footer_right">
                  <name>
                    <h1>footer-right</h1>
                  </name>
                  <jdoc:include type="modules" name="footer-right" style="xhtml" />
                </div>
                <?php endif; ?>
              </footer_right>

            <?php if ($this->countModules('float-bottom')) : ?>
            <float_bottom>
              <section class="float_bottom">
                <name>
                  <h1>flt_btm</h1>
                </name>
                <jdoc:include type="modules" name="float-bottom" style="xhtml" />
                <h3>hand added content to float_bottom </h3>
              </section>
            </float_bottom>
            <?php endif; ?>
          </div>
          <!--END grid-->
      </div>
    </div>
  </body>

  </html>