<!DOCTYPE html>
<html lang="en">

<head>
  <title>Image Gallery</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <link href="https://fonts.googleapis.com/css?family=Josefin+Sans:300i,400,700" rel="stylesheet">
  <link rel="stylesheet" href="fonts/icomoon/style.css">

  <link rel="stylesheet" href="css/bootstrap.min.css">
  <link rel="stylesheet" href="css/magnific-popup.css">
  <link rel="stylesheet" href="css/jquery-ui.css">
  <link rel="stylesheet" href="css/owl.carousel.min.css">
  <link rel="stylesheet" href="css/owl.theme.default.min.css">

  <link rel="stylesheet" href="css/lightgallery.min.css">

  <link rel="stylesheet" href="css/bootstrap-datepicker.css">

  <link rel="stylesheet" href="fonts/flaticon/font/flaticon.css">

  <link rel="stylesheet" href="css/swiper.css">

  <link rel="stylesheet" href="css/aos.css">

  <link rel="stylesheet" href="css/style.css">
  <link rel="stylesheet" type="text/css" href="css/main.css">

  <!-- Favicone Icon -->
  <link rel="shortcut icon" type="image/x-icon" href="images/flogo.png">

  <style type="text/css">
    /* header */
    .site-navbar {
      position: inherit;
    }

    .site-navbar .logo a {
      color: #000;
      text-shadow: 0 0 40px black;
      text-decoration: none;
      font-size: 40px;
      font-weight: 900;
      padding: 0 15px;
    }

    .site-navbar .logo a img {
      width: 300px;
      height: auto;
      /*background-color: #046f6f;*/
      margin-bottom: 20px;
    }

    .site-navbar .iconlogo a img {
      width: 300px;
      height: auto;
      /*background-color: #046f6f;*/
      margin-bottom: 20px;
    }

    .site-navbar .tabs a {
      display: inline;
      /*text-shadow: 0 0 40px black;*/
      text-decoration: none;
      color: #fff;
      font-size: 60px;
      font-weight: 900;
      line-height: initial;
      /*box-shadow: inset 0 0 20px 5px black;*/
      margin-left: 45px;
      /*background-color: #00ffff54;*/
    }

    /*.site-navbar .tabs a:hover{
        box-shadow: inset 0 0 20px 5px #2f6a8c;
        background-color: #00ffff;
      }*/
    .site-navbar .contact {
      margin-top: 45px;
    }

    .site-navbar .contact a {
      display: inline;
      /*text-shadow: 0 0 40px black;*/
      text-decoration: none;
      color: #fff;
      font-size: 60px;
      font-weight: 900;
      line-height: initial;
      /*box-shadow: inset 0 0 20px 5px black;*/
      margin-left: 10px;
      /*background-color: #00ffff54;*/
    }

    /*.site-navbar .contact a:hover{
        box-shadow: inset 0 0 20px 5px #2f6a8c;
        background-color: #00ffff;
      }*/
    @media (max-width: 780px) and (min-width: 280px) {
      .site-navbar .logo a {
        font-size: 36px;
      }

      .site-navbar .tabs a {
        font-size: 2em;
        display: inherit;
        margin-top: 20px;
      }

      .site-navbar .contact a {
        font-size: 2em;
        display: inherit;
        margin-top: 20px;
      }
    }
  </style>

</head>

<style>
  <style>

  /*I love me some border-box*/
  * {
    box-sizing: border-box;
  }

  /*This just stops me getting horizontal scrolling if anything overflows the width*/
  body {
    overflow-x: hidden;
  }

  /*Just removing default browser padding/margin*/
  html,
  body {
    padding: 0;
    margin: 0;
    color: #ebebeb;
  }

  /*Flexbox gives us the flexiness we need. The top just stays put as there is no scrolling on the body due to the page never exceeding viewport height*/
  .Top {
    display: flex;
    align-items: center;
    justify-content: center;
    background-color: darkgreen;
    font-size: 3rem;
    position: relative;
    z-index: 10;
    height: 100px;
  }

  /*This is our main wrapping element, it's made 100vh high to ensure it is always the correct size and then moved into place and padded with negative margin and padding*/
  .Container {
    display: flex;
    overflow: hidden;
    height: 100vh;
    margin-top: -100px;
    padding-top: 100px;
    position: relative;
    width: 100%;
    backface-visibility: hidden;
    will-change: overflow;
  }

  /*All the scrollable sections should overflow and be whatever height they need to be. As they are flex-items (due to being inside a flex container) they could be made to stretch full height at all times if needed.
WebKit inertia scrolling is being added here for any present/future devices that are able to make use of it.
*/
  .Left,
  .Middle,
  .Right {
    overflow: auto;
    height: auto;
    padding: .5rem;
    -webkit-overflow-scrolling: touch;
    -ms-overflow-style: none;
  }

  /*Entirely optional – just wanted to remove the scrollbar on WebKit browsers as I find them ugly*/
  .Left::-webkit-scrollbar,
  .Middle::-webkit-scrollbar,
  .Right::-webkit-scrollbar {
    display: none;
  }

  /*  Left and Right are set sizes while the Middle is set to flex one so it occupies all remaining space. This could be set as a width too if prefereable, perhaps using calc.*/
  .Left {
    width: 12.5rem;
    background-color: gray;
  }

  .Middle {
    flex: 1;
  }

  .Right {
    width: 8.5rem;
    background-color: violet;
  }
</style>

</style>

<!-- <body style="background-color:black;">
 -->
<body >



  <div class="site-wrap">


    <div class="site-mobile-menu">
      <div class="site-mobile-menu-header">
        <div class="site-mobile-menu-close mt-3">
          <span class="icon-close2 js-menu-toggle"></span>
        </div>
      </div>
      <div class="site-mobile-menu-body"></div>
    </div>


    <header class="site-navbar py-3" role="banner">
      <div class="container-full">
        <div class="col-12 col-xl-12 logo">
          <!-- <a href="index.php"><img src="images/logo.PNG"></a> -->
          <a href="index.php"><img src="images/logo.gif" style="width: 100px;height: auto;"></a>
          <a href="index.php" style="color:white"> home </a>
         <a href="admin/home/index.php"style="color:white"> admin </a>
        
          <a href="index.php?coverID=<?php echo $_GET['coverID']; ?>"style="color:white">
            view 1
          </a>
          <a href="video2.php?coverID=<?php echo $_GET['coverID']; ?>"style="color:white">
            view 2
         
         <a href="addvideo.php?coverID=<?php echo $_GET['coverID']; ?>"style="color:white">
            add videos
          </a>


        </div>
      </div>



     

    </header>

