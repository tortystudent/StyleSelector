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
          **************************STYLE***********************
          <? $dir="templates/StyleSelector/SRA-WSKvr.3/app/partials/styles"; $handle=opendir($dir); ?>
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
            <? $dir="templates/StyleSelector/SRA-WSKvr.3/app/partials/styles/colours"; $handle=opendir($dir); ?>
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
              

              closedir($handle);
              
              
              ?>
                      </select>
              </form> *************************LAYOUT*****************
              <? $dir="templates/StyleSelector/SRA-WSKvr.3/app/partials/styles/layouts"; $handle=opendir($dir); ?>
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
          $file = "templates/StyleSelector/SRA-WSKvr.3/app/partials/styles/".$setStyle;
          $newStyle = 'templates/StyleSelector/SRA-WSKvr.3/app/partials/_style.scss';

          /*************save style*********/
          error_reporting(E_ALL);
          ini_set('display_errors', 1);
          
          if (!copy($file, $newStyle)) {
          echo "<br><h1>failed to copy</h1>";

          } else {
          echo "<br>STYLE ".$setStyle." ENABLED";
            $lastSetStyle = $setStyle;
            $_SESSION["lastSetStyle"] = $lastSetStyle;
          }
          }
          if(isset($_GET["setColour"])){
          $setColour=$_GET["setColour"];
          echo "select setColour is => ".$setColour;
          error_reporting(E_ALL);
          ini_set('display_errors', 1);
          $colourFile = "templates/StyleSelector/SRA-WSKvr.3/app/partials/styles/colours/".$setColour;
          $newColour = 'templates/StyleSelector/SRA-WSKvr.3/app/partials/_colour.scss';
          
          
          if (!copy($colourFile, $newColour)) {
          echo "<br>failed to copy";
          } else {
          echo "<br>COLOUR ".$setColour." ENABLED";
            $lastSetColour = $setColour;
            $_SESSION["lastSetColour"] = $lastSetColour;
          }
          }
          if(isset($_GET["setLayout"])){
          $setLayout=$_GET["setLayout"];
          echo "select setStyle is => ".$setLayout;
          
          error_reporting(E_ALL);
          ini_set('display_errors', 1);
          $layoutFile = "templates/StyleSelector/SRA-WSKvr.3/app/partials/styles/layouts/".$setLayout;
          $newLayout = 'templates/StyleSelector/SRA-WSKvr.3/app/partials/_layout.scss';
          if (!copy($layoutFile, $newLayout)) {
          echo "<br>failed to copy";
          } else {
          echo "<br>STYLE ".$setLayout." ENABLED";
            $lastSetLayout = $setLayout;
            $_SESSION["lastSetLayout"] = $lastSetLayout;
          }
          }
            
          echo "<br> ***********************************<br>";
                    error_reporting(E_ALL);
          ini_set('display_errors', 1);
              if(isset($_SESSION["lastSetStyle"])){
               echo "<br>  Last selected Style is => ".$_SESSION["lastSetStyle"]."<br>";
              }
            else {
                echo "<br>  Last selected Style is UNSET<br>";
            }

            if(isset($_SESSION["lastSetColour"])){
                echo "Last selected Colour is => ".$_SESSION["lastSetColour"]."<br>";
             } else {
                echo "<br>  Last selected Colour is UNSET<br>";
            }
                
              if(isset($_SESSION["lastSetLayout"])){
                echo "Last selected Layout is => ".$_SESSION["lastSetLayout"]."<br>";
               } else {
                echo "<br>  Last selected Layout is UNSET<br>";
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
