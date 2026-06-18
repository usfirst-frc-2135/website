<?php header('Access-Control-Allow-Origin: *'); ?>

<!DOCTYPE html>
<html lang="en" data-bs-theme="dark">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
  <meta name="description" content="FRC 235 Web Site">
  <meta name="author" content="FRC Team 2135">

  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.13.1/font/bootstrap-icons.min.css">
  <link rel="icon" type="image/png" href="assets/favicon.png">
  <title><?php echo $title; ?></title>

  <!-- Core theme CSS (includes Bootstrap)-->
  <link href="/css/styles.css" rel="stylesheet" />
  <!-- 2135 Customizations -->
  <!-- <link href="css/theme-phs.css" rel="stylesheet"> -->

  <style type="text/css" media="screen">
    .form-check-input {
      /* darken check box borders */
      border-color: rgba(127, 127, 127, 0.75);
    }

    .nav-pills {
      /* navbar pill button text should be white */
      color: "white";
    }

    ul.nav a:hover {
      /* brighten menu text when hovering over an item */
      color: #fff !important;
      background-color: #000;
    }

    .navbar-brand {
      vertical-align: middle;
    }

    h1 {
      color: #3c6098;
    }
  </style>
</head>

<body>

  <!-- Fixed navbar -->
  <nav class="navbar navbar-expand-sm bg-dark sticky-top" data-bs-theme="dark">
    <a class="navbar-brand ms-2" href="/home.php"><img src="/assets/2135-Yellow.png" height="24" alt="2135-Logo"></a>
    <button class="navbar-toggler navbar-dark me-2" type="button" data-bs-toggle="collapse" data-bs-target="#menuItems" aria-controls="menuItems" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon navbar-dark"></span>
    </button>
    <div class="collapse navbar-collapse" id="menuItems">
      <ul class="navbar-nav ms-auto mb-2 mb-lg-0 me-3">
        <ul class="nav nav-pills flex-column flex-sm-row" data-bs-theme="dark">

          <li class="nav-item dropdown">
            <a href="#" class="nav-link dropdown-toggle text-white-50 text-end text-sm-start" data-bs-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">About</a>
            <ul class="dropdown-menu bg-dark">
              <li><a class="dropdown-item text-white-50 text-end text-sm-start" href="/about/team.php">Team</a></li>
              <li><a class="dropdown-item text-white-50 text-end text-sm-start" href="/about/outreach.php">Outreach</a></li>
              <li><a class="dropdown-item text-white-50 text-end text-sm-start" href="/about/leaders.php">Leaders</a></li>
              <li><a class="dropdown-item text-white-50 text-end text-sm-start" href="/about/mentors.php">Mentors</a></li>
              <li><a class="dropdown-item text-white-50 text-end text-sm-start" href="/about/awards.php">Awards</a></li>
              <li><a class="dropdown-item text-white-50 text-end text-sm-start" href="/about/history.php">History</a></li>
            </ul>
          </li>

          <li class="nav-item dropdown">
            <a href="#" class="nav-link dropdown-toggle text-white-50 text-end text-sm-start" data-bs-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">FIRST</a>
            <ul class="dropdown-menu bg-dark">
              <li><a class="dropdown-item text-white-50 text-end text-sm-start" href="/first/overview.php">Overview</a></li>
              <li><a class="dropdown-item text-white-50 text-end text-sm-start" href="/first/2026-rebuilt.php">2026 Rebuilt</a></li>
              <li><a class="dropdown-item text-white-50 text-end text-sm-start" href="/first/2025-reefscape.php">2025 Reefscape</a></li>
              <li><a class="dropdown-item text-white-50 text-end text-sm-start" href="/first/2024-crescendo.php">2024 Crescendo</a></li>
              <li><a class="dropdown-item text-white-50 text-end text-sm-start" href="/first/2023-charged_up.php">2023 Charged Up</a></li>
              <li><a class="dropdown-item text-white-50 text-end text-sm-start" href="/first/2022-rapid_react.php">2022 Rapid React</a></li>
              <li><a class="dropdown-item text-white-50 text-end text-sm-start" href="/first/2020-infinite_recharge.php">2020 Infinite Recharge</a></li>
              <li><a class="dropdown-item text-white-50 text-end text-sm-start" href="/first/2019-deepspace.php">2019 Destination: Deep Space</a></li>
              <li><a class="dropdown-item text-white-50 text-end text-sm-start" href="/first/2018-powerup.php">2018 Power Up</a></li>
              <li><a class="dropdown-item text-white-50 text-end text-sm-start" href="/first/2017-steamworks.php">2017 Steamworks</a></li>
              <li><a class="dropdown-item text-white-50 text-end text-sm-start" href="/first/earlier.php">Previous Games</a></li>
            </ul>
          </li>

          <li class="nav-item dropdown">
            <a href="#" class="nav-link dropdown-toggle text-white-50 text-end text-sm-start" data-bs-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Resources</a>
            <ul class="dropdown-menu bg-dark">
              <li><a class="dropdown-item text-white-50 text-end text-sm-start" href="/resources/calendar.php">Calendar</a></li>
              <li><a class="dropdown-item text-white-50 text-end text-sm-start" href="/resources/meetings.php">Meetings</a></li>
              <li><a class="dropdown-item text-white-50 text-end text-sm-start" href="/resources/teamhandbook.php">Team Handbook</a></li>
              <li><a class="dropdown-item text-white-50 text-end text-sm-start" href="/resources/safetymanual.php">Safety Manual</a></li>
              <li><a class="dropdown-item text-white-50 text-end text-sm-start" href="/resources/teamwear.php">Teamwear</a></li>
            </ul>
          </li>

          <li class="nav-item dropdown">
            <a href="#" class="nav-link dropdown-toggle text-white-50 text-end text-sm-start" data-bs-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Support</a>
            <ul class="dropdown-menu bg-dark">
              <li><a class="dropdown-item text-white-50 text-end text-sm-start" href="/support/sponsors.php">Sponsors</a></li>
              <li><a class="dropdown-item text-white-50 text-end text-sm-start" href="/support/giving.php">Giving</a></li>
            </ul>
          </li>

          <li class="nav-item dropdown">
            <a href="#" class="nav-link dropdown-toggle text-white-50 text-end text-sm-start" data-bs-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">News</a>
            <ul class="dropdown-menu bg-dark">
              <li><a class="dropdown-item text-white-50 text-end text-sm-start" href="/news/blog.php">Blog</a></li>
              <li><a class="dropdown-item text-white-50 text-end text-sm-start" href="/news/photos.php">Photos</a></li>
              <li><a class="dropdown-item text-white-50 text-end text-sm-start" href="/news/videos.php">Videos</a></li>
            </ul>
          </li>

        </ul>
      </ul>
    </div>
  </nav>

  <script>
    // Handle navbar button state toggles
    const currentLocation = location.href;
    const items = document.querySelectorAll("a");
    const length = items.length;

    for (let i = 0; i < items.length; i++) {
      let menuLink = items[i];
      if (menuLink.href === currentLocation) {
        menuLink.classList.add("active");
        menuLink.classList.add("text-light");
        menuLink.classList.remove("text-secondary");
      } else {
        menuLink.classList.remove("active");
        menuLink.classList.remove("text-light");
        menuLink.classList.add("text-secondary");
      }
    }
  </script>
