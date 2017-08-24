<?php

  /* Events Page
      Uses Google's Calendar API to pull in all our
      events in a nicely formatted way
  */

  // Include standard header and navigation
  include("./includes/header.htm");
  include("./includes/nav.htm");
?>
<link rel='stylesheet' href='./css/fullcalendar.min.css' />



<div id="calendar"></div>





<?php
  include("./includes/footer.htm");
?>
<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.18.1/moment.min.js"></script>
<script src="./js/fullcalendar.min.js"></script>
<script src="./js/gcal.min.js"></script>
