<?php
if ( has_nav_menu( 'menu-2' ) ) {
    // User has assigned menu to this location;
    // output it
    ?>
<nav class="nav navbar">
    <div class="navbar-menu">
        <?php
			wp_nav_menu( array(
				'theme_location' => 'menu-2',
				'menu_id'        => 'single-menu',
                'walker'         => ''
			) );
		?>
    </div>
    <div class='nav-link-container mobile-menu-link'> 
        <?php if($reobiz_option['Offcanvas_layout'] == 'style2'){ ?>
            <a href='#' class="nav-menu-link menu-button">                                                
                <div class="dot-hum"></div>
                <div class="dot-hum"></div>
                <div class="dot-hum"></div>
            </a> 
            <?php } else { ?>
            <a href='#' class="nav-menu-link menu-button">
                <div class="dot1"></div>
                <div class="dot2"></div>
                <div class="dot3"></div>
                <div class="dot4"></div>
                <div class="dot5"></div>
                <div class="dot6"></div>
                <div class="dot7"></div>
                <div class="dot8"></div>
                <div class="dot9"></div>
            </a>
        <?php } ?> 
    </div>
</nav>
<?php } 

?>

<nav class="nav-container mobile-menu-container">
    <div id="mobile_menu_single">
        <ul class="sidenav">
            <li class='nav-link-container'> 
                <?php if($reobiz_option['Offcanvas_layout'] == 'style2'){ ?>
                    <a href='#' class="nav-menu-link menu-button">                                                
                        <div class="dot-hum"></div>
                        <div class="dot-hum"></div>
                        <div class="dot-hum"></div>
                    </a> 
                    <?php } else { ?>
                    <a href='#' class="nav-menu-link menu-button">
                        <div class="dot1"></div>
                        <div class="dot2"></div>
                        <div class="dot3"></div>
                        <div class="dot4"></div>
                        <div class="dot5"></div>
                        <div class="dot6"></div>
                        <div class="dot7"></div>
                        <div class="dot8"></div>
                        <div class="dot9"></div>
                    </a>
                <?php } ?> 
            </li>
            <li>
              <?php
                    wp_nav_menu( array(
                        'theme_location' => 'menu-2',
                        'menu_id'        => 'mobile-single-menu',
                    ) );
                ?>
            </li>
        </ul>
    </div>
</nav>
