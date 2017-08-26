<?php
  // Include standard header and navigation
  include("./includes/header.htm");
?>

<div id="homepage" class="ui two column stackable centered grid">
  <div class="column">

    <img id="cdf-logo" class="ui centered fluid tiny  image" src="./img/cdf_logo.jpg">
    <div class="ui divider"></div>
    <img id="compsoc-logo" class="ui centered fluid large image" src="./img/logo.png">
    <h1 class="ui centered header">
      Welcome to&nbsp;Cardiff&nbsp;University<br/>
      Computer&nbsp;Science Society
    </h1>
    <div class="ui horizontal divider">
      <a href="https://www.cardiffstudents.com/activities/society/comscisoc/" target="_blank">
        <button class="ui large red button">Become a member</button>
      </a>
    </div>
    <div id="nav" class="ui four item secondary pointing menu">
      <a href="./events.php"    class="red item">Events</a>
      <a href="./community.php" class="red item">Community</a>
      <a href="./projects.php"  class="red item">Projects</a>
      <a href="./contact.php"   class="red item">Contact</a>
    </div>
  </div>
</div>


<?php include("./includes/footer.htm"); ?>
