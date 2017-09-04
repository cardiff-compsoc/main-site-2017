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

<div class="ui two column stackable grid container ">
  <div class="column">
    <div class="ui center aligned container">
      <iframe src="https://calendar.google.com/calendar/embed?showTitle=0&amp;showNav=0&amp;showPrint=0&amp;showTabs=0&amp;showCalendars=0&amp;mode=AGENDA&amp;height=400&amp;wkst=1&amp;bgcolor=%23FFFFFF&amp;src=comscisociety%40cardiff.ac.uk&amp;color=%23711616&amp;ctz=Europe%2FLondon" style="border-width:0" width="320" height="400" frameborder="0" scrolling="no"></iframe>
    </div>
  </div>
    <div class="column">
      <div class="ui container">

          <h1 class="ui header">Our Events</h1>
          <p>
            All of CompSoc's events can be found here - bookmark this page or subscribe to our calendar to always keep up to date! Alternatively like our page on Facebook where we will be creating events for all our activities throughout the year.
          </p>
          <h2 class="ui  header">Socials</h2>
          <p>
            We offer socials to cater for all our members - alcoholic, non-alcoholic, tech-focused or just a plain ol' get together. We will also aim to do as many joint socials with other societies as possible.
          </p>
          <h2 class="ui header">Workshops</h2>
          <h2 class="ui header">Academic and Industry talks</h2>
      </div>
    </div>

  </div>


</div>







<?php
  include("./includes/footer.htm");
?>
