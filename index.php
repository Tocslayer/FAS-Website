<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Link to external CSS file -->
    <link rel="stylesheet" type="text/css" href="style.css" />
    <!-- Metadata -->
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="keywords" content="Financial, Analysis, Software" />
    <!-- Description / Title / Logo -->
    <meta
      name="description"
      content="This program processes historical stock data and 
              suggests an investment using a predictive algorithm."
    />
    <title>Financial Analysis Software</title>
    <link
      rel="icon"
      href="repo/images/FAS Transparent.png"
      type="FAS Square.png"
    />
  </head>
  <!-- Body -->
  <body>
    <!-- Header -->
    <div class="header-container">
      <div class="header-background"></div>
      <div class="header-logo">
        <a href="index.php">
          <img src="repo/images/FAS.png" alt="FAS Logo" height="70" />
        </a>
      </div>
      <div class="header-title">
        <a href="index.php">
          <h1>Financial Analysis Software</h1>
        </a>
      </div>
      <a href="account.php" class="account-box">
        Account<br />Sign-up | Login
      </a>
    </div>

    <!-- Navigation bar -->
    <div class="navbar">
      <div class="navbar-box"><a href="index.php">Home</a></div>
      <div class="navbar-box"><a href="analysis.php">Analysis</a></div>
      <div class="navbar-box"><a href="finances.php">Finances</a></div>
      <div class="navbar-box"><a href="algorithms.php">Algorithms</a></div>
      <div class="navbar-box"><a href="contact.php">About/Contact</a></div>
    </div>

    <!-- Page content -->
    <div class="bounding-box">
      <div class="main">
        <b>Welcome to FAS!</b>
        <p>Create an account and answer</p>
        <p>a few short questions so</p>
        <p>we can start making</p>
        <p>tailored investment</p>
        <p>recommendations.</p>
      </div>
      <div class="button-container">
        <a href="account.php">
          <button type="button">Sign Up</button>
          <button type="button">Login</button>
        </a>
      </div>
    </div>
  </body>
</html>