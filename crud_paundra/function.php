<?php 
function navbar($navbar){
?>
    <header>
      <!-- Navbar -->
      <nav class="navbar navbar-expand-lg bg-light navbar-light">
         <div class="container">
            <a class="navbar-brand" href="#"><img id="valorant-logo" src="gambar/valorant_logo.png" alt="MDB Logo" draggable="false" style="height: 50px; background-color: red;" /></a>
            <button class="navbar-toggler" type="button" data-mdb-toggle="collapse" data-mdb-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
               <i class="fas fa-bars"></i>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
               <ul class="navbar-nav ms-auto align-items-center">
                  <li class="nav-item">
                     <a class="nav-link mx-2" href="halmut.php"><i class="fa-solid fa-house"></i> Home</a>
                  </li>
               </ul>
            </div>
         </div>
      </nav>
      <!-- Navbar -->
   </header>
   <?php
}
?>