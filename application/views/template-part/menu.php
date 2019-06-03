<nav class="navbar navbar-expand-lg navbar-light bg-light primary-color-container">
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNavDropdown">
    <ul class="navbar-nav">

      <?php
        foreach ($list_menu as $menu) {
            if(isset($menu['sub_menu'])){
      ?>

      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          <?php echo $menu['menu']; ?>
        </a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
            <?php
              foreach ($menu['sub_menu'] as $submenu) {
            ?>
              <a class="dropdown-item" href="#"><?php echo $submenu['menu']; ?></a>
      
      <?php              
          }
          echo "</div>";
          echo "</li>";

            }
            else{
        
      ?>
      <li class="nav-item">
        <a class="nav-link" href="#"><?php echo $menu['menu']; ?> <span class="sr-only">(current)</span></a>
      </li>
      <?php 
          }
        }

      ?>


    </ul>
  </div>
</nav>

