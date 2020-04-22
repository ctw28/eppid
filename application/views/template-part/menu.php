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
                <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><?php echo $menu['menu']; ?></a>
                <div class="dropdown-menu">
                <?php
                foreach ($menu['sub_menu'] as $submenu) {
                ?>
                    <a class="dropdown-item" href="<?= base_url()?><?php echo $submenu['menu_seo']; ?>"><?php echo $submenu['menu']; ?></a>
                
                <?php              
                }
                echo "</div>";
            echo "</li>";
            }
            else{
              ?>
                <li class="nav-item">
                    <a class="nav-link" href="<?= base_url()?><?php echo $menu['menu_seo']; ?>"><?php echo $menu['menu']; ?> <span class="sr-only">(current)</span></a>
                </li>
              <?php 
            }
        }
        ?>
        </ul>
    </div>
</nav>

