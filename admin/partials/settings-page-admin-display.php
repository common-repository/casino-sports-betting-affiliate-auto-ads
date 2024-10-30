<?php

/**
 * Provide a admin area view for the plugin
 *
 * This file is used to markup the admin-facing aspects of the plugin.
 *
 * @link       https://casinoandsportsplugin.com/
 * @since      1.0.0
 *
 * @package    Settings_Page
 * @subpackage Settings_Page/admin/partials
 */
?>

<!-- This file should primarily consist of HTML with a little bit of PHP. -->

<style>
/* Style the tab */
.tab {
  overflow: hidden;
  border: 1px solid #ccc;
  background-color: #f1f1f1;
}

/* Style the buttons inside the tab */
.tab button {
  background-color: inherit;
  float: left;
  border: none;
  outline: none;
  cursor: pointer;
  padding: 14px 16px;
  transition: 0.3s;
  font-size: 17px;
}

/* Change background color of buttons on hover */
.tab button:hover {
  background-color: #ddd;
}

/* Create an active/current tablink class */
.tab button.active {
  background-color: #ccc;
}

/* Style the tab content */
.tabcontent {
  display: none;
  padding: 6px 12px;
  border: 1px solid #ccc;
  border-top: none;
}
</style>

<!-- // styling for table -->
<style>
#customers {
  font-family: Arial, Helvetica, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

#customers td, #customers th {
  border: 1px solid #ddd;
  padding: 8px;
}

#customers tr:nth-child(even){background-color: #f2f2f2;}

#customers tr:hover {background-color: #ddd;}

#customers th {
  padding-top: 12px;
  padding-bottom: 12px;
  text-align: left;
  background-color: #04AA6D;
  color: white;
}
</style>

<h1>Casino & Sports Betting Affiliate Auto Ads</h1>
<hr>

<div class="tab" style="margin-right:1.5em;">
  <button class="tablinks" onclick="openCity(event, 'London')" id="defaultOpen">Getting Started</button>
  <button class="tablinks" onclick="openCity(event, 'Paris')">Auto Ads</button>
  <button class="tablinks" onclick="openCity(event, 'Tokyo')">Shortcode Insert Ads</button>
</div>

<div id="London" class="tabcontent" style="margin-right:1.5em;">
  <h3>1. Create an account at <a id="bonaFidesLink" target="_blank" href="https://bonafides.ltd/63511/2?l=3">Bona Fides Affiliate Program.</a></h3>
  <p>This is the affiliate program we'll use to promote sports betting and online casino to your visitors, and earn money when people become customers.
  Bona Fides offers one of the highest paying affiliate programs in the industry, you can earn ~50% of all revenue you generate for their casino named 'Fairspin'. Their Casino is one of the largest in the world with everything from
  sports betting, to live casino, to thousands of casino games.
  </p>

  <h3>2. After creating a Bona Fides account, login, go to "My Account" and click "Webmaster Profile". Find the field titled "Nickname for the Top", these numbers are your affiliate ID (see screenshot below).</h3>

  <a target="_blank" href="
    <?php
      echo plugin_dir_url( dirname( __FILE__ ) ) . "../assets/static/affiliate_id.png";
    ?>
    ">
    <img style="max-width:50%;" src="
      <?php
        echo plugin_dir_url( dirname( __FILE__ ) ) . "../assets/static/affiliate_id.png";
      ?>
    ">
  </a>

  <h3>Enter ONLY the NUMBERS (no letters) into the affiliate ID field below (ie. 63511).</h3>

  <div class="wrap">
    <div id="icon-themes" class="icon32"></div>
    <?php settings_errors(); ?>
      <form method="POST" action="options.php">
          <?php
              settings_fields( 'settings_page_general_settings' );
              do_settings_sections( 'settings_page_general_settings' );
          ?>
          <?php submit_button(); ?>
      </form>
  </div>

  <br>

  <h3>3. You're ready to go! Visit the other tabs to enable auto-ads, or insert specific ad placements with the shortcode.</h3>

  <br>

  Need help? Have feedback? Email us at <a href="mailto:info@casinoandsportsplugin.com">info@casinoandsportsplugin.com</a>

</div>

<div id="Paris" class="tabcontent" style="margin-right:1.5em;">
  <h3>Select the types of ads you'd like to enable, click save, and you're done!</h3>
  <p>The images shown for popover and banner ads are rotated through each of the available options. You can view them all on the 'Shortcode Insert Ads' tab.</p>

  <div class="wrap">
    <div id="icon-themes" class="icon32"></div>
    <?php settings_errors(); ?>
      <form method="POST" action="options.php">
          <?php
              settings_fields( 'settings_page_general_settings' );
              do_settings_sections( 'settings_page_general_settings' );
          ?>
          <?php submit_button(); ?>
      </form>
  </div>

  <br><br>

  Need help? Have feedback? Email us at <a href="mailto:info@casinoandsportsplugin.com">info@casinoandsportsplugin.com</a>

  <br>

</div>

<div id="Tokyo" class="tabcontent" style="margin-right:1.5em;">
  <h3>Inserting ads into your website is easy using our shortcode</h3>
  <h4>Simply add the short code '[caf]' in any post, page, or anywhere else you'd like to insert an ad.</h4>
  <h4 style="margin:0;">You can also select which ad is shown, and which landing page it leads to like this:</h4>
  <h4 style="margin-top:0;">[caf landing_page="3689" ad="61"]</h4>
  <hr>
  <h3>Landing Page Options</h3>
  <p style="margin-bottom:0;">These are the values you can insert into the shortcode's 'landing_page' parameter:</p>
  <ul style="display: inline-flex;margin:0;">
    <li style="margin:1em;font-weight: bold;">'1' = Home Page
      <br>
      <a target="_blank" href="
        <?php
          echo plugin_dir_url( dirname( __FILE__ ) ) . "../assets/landing/1.png";
        ?>
        ">
        <img src="
          <?php
            echo plugin_dir_url( dirname( __FILE__ ) ) . "../assets/landing/1.png";
          ?>
        ">
      </a>
    </li>
    <li style="margin:1em;font-weight: bold;">'2' = Registration Page
      <br>
      <a target="_blank" href="
        <?php
          echo plugin_dir_url( dirname( __FILE__ ) ) . "../assets/landing/2.png";
        ?>
        ">
        <img src="
          <?php
            echo plugin_dir_url( dirname( __FILE__ ) ) . "../assets/landing/2.png";
          ?>
        ">
      </a>
    </li>
  </ul>
  <ul style="display: inline-flex;margin-top:0;">
    <li style="margin:1em;font-weight: bold;">'3688' = Wheel of Fortune
      <br>
      <a target="_blank" href="
        <?php
          echo plugin_dir_url( dirname( __FILE__ ) ) . "../assets/landing/3688.png";
        ?>
        ">
        <img src="
          <?php
            echo plugin_dir_url( dirname( __FILE__ ) ) . "../assets/landing/3688.png";
          ?>
        ">
      </a>
    </li>
    <li style="margin:1em;font-weight: bold;">'3689' = Sports Betting
      <br>
      <a target="_blank" href="
        <?php
          echo plugin_dir_url( dirname( __FILE__ ) ) . "../assets/landing/3689.png";
        ?>
        ">
        <img src="
          <?php
            echo plugin_dir_url( dirname( __FILE__ ) ) . "../assets/landing/3689.png";
          ?>
        ">
      </a>
    </li>
    <li style="margin:1em;font-weight: bold;">'3690' = Fairspin Wheel
      <br>
      <a target="_blank" href="
        <?php
          echo plugin_dir_url( dirname( __FILE__ ) ) . "../assets/landing/3690.png";
        ?>
        ">
        <img src="
          <?php
            echo plugin_dir_url( dirname( __FILE__ ) ) . "../assets/landing/3690.png";
          ?>
        ">
      </a>
    </li>
  </ul>
  <hr>
  <h3>Advertisement Options</h3>
  <p style="margin-bottom:0;">These are the values you can insert into the shortcode's 'ad' parameter:</p>

  <table id="customers">
    <tr>
      <th>Value</th>
      <th>Type</th>
      <th>Size</th>
      <th>Image</th>
    </tr>

    <?php
      global $ad_options;
      foreach ($ad_options as $key => &$val) {
        $localUrl = plugin_dir_url( dirname( __FILE__ ) ) . "../" . $val[3];
        echo '<tr><td>' . "'" . esc_html($key) . "'" . '</td><td>' . esc_html($val[0]) . '</td><td>' . esc_html($val[1]) . 'x' . esc_html($val[2]) . '</td><td><a target="_blank" href="'. esc_url($localUrl) . '"> <img src="'. esc_url($localUrl) . '" style="max-width:100%;max-height:200px;"></a></td></tr>';
      }
    ?>

  </table>

  <br><br>

  Need help? Have feedback? Email us at <a href="mailto:info@casinoandsportsplugin.com">info@casinoandsportsplugin.com</a>

  <br>

</div>


<!-- // scripts below -->
<!-- // scripts below -->
<!-- // scripts below -->

<script>
  function openCity(evt, cityName) {
    try {
      var i, tabcontent, tablinks;
      tabcontent = document.getElementsByClassName("tabcontent");
      for (i = 0; i < tabcontent.length; i++) {
        tabcontent[i].style.display = "none";
      }
      tablinks = document.getElementsByClassName("tablinks");
      for (i = 0; i < tablinks.length; i++) {
        tablinks[i].className = tablinks[i].className.replace(" active", "");
      }
      document.getElementById(cityName).style.display = "block";
      evt.currentTarget.className += " active";
    } catch(err) {
      console.log(err);
    }
  }// end func
  // Get the element with id="defaultOpen" and click on it
  document.getElementById("defaultOpen").click();
  document.getElementById('bonaFidesLink').href = 'https://bonafides.ltd/63511/2?l=3&utm_source=' + window.location.host;
</script>
