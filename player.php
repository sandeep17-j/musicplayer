<?php
include("connect.php");
?>
<html>
    <head>
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons"
        rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <link href="style.css" rel="stylesheet">
  <script
  src="https://code.jquery.com/jquery-3.7.1.js"
  integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4="
  crossorigin="anonymous"></script>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    </head>
    <body>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
        <script src="player.js"></script>
        <script src="playlist.js"></script>

  <a class="nav-item col-xl-2 col-lg-2 col-md-2 col-sm-2 col-2" id="menu-bar"><i class="fa-solid fa-bars fa-xl" style="color: #FFD43B;"></i></a><a id="close-menu-bar"><i class="fa-solid fa-xmark"></i></a>
  </i></a>
  <a id="light-theme"><i class="fa-regular fa-sun fa-xl"></i></a><a id="dark-theme"><i class="fa-regular fa-moon fa-xl"></i></a>
<aside id="sub-menu">
  <ul>
    <li><a>About</a></li>
    <li><a>Favourites</a></li>
    <li><a href="login.php">Log Out</a></li>
  </ul>
</aside>

          </nav> 
<main>
          <section class="card" class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-10">
            <section class="card-body" class="row" class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-10">
              <div><i><h5 id="song-name">Nanaku prematho</h5></i></div>
              <div><img src="nanaku-prematho.jpg" id="photo" style="width:211px"></div>
                <div class="progress" style="width:100%;height:5px">
                <div class="progress-bar bg-danger"
                 class="bg-danger progress-bar-striped progress-bar-animated" style="width:50%" aria-valuemin="0" aria-valuemax="100" aria-valuenow="50"></div>
              </div>
              <section class="card-footer col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                <a id="prev"><i class="fa-solid fa-backward"></i></a>
                <a onclick="num()" id="play"><i class="fa-solid fa-play"></i></a>
                <a onclick="pau()" id="pause"><i class="fa-solid fa-pause"></i></a>
                <a id="next"><i class="fa-solid fa-forward"></i></a><hr>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
                <a id="high"> <i class="fa-solid fa-volume-high"></i></a><a id="medium"><i class="fa-solid fa-volume-low" id="mute"></i></a><a id="low">
                  <i class="fa-solid fa-volume-xmark"></i></a>&nbsp&nbsp&nbsp&nbsp<a id="timer"><i class="fa-regular fa-clock fa-xl"></i></a>
                    <button onlcick="okhide()" id="time-ok">ok</button>
                  
              </section>
              <section>
              <input type="text" placeholder="enter sleep time in minutes" id="time">
              <input type="range" id="vol-range" min="0" max="1" step="0.1"></li>
              </section>
</main>

            </div>
</section>
    </body>
</html>