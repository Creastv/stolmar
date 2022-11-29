<?php $menu = get_field( 'menu', 'option' ); ?>

<div class="header__navigation--overlay">
    <div class="container">
        <div class="header__navigation--details">
            <div class="header__navigation--links">
				<?php
				$defaults = array(
					'theme_location'  => 'header-left-menu',
					'menu'            => 'Header left menu',
					'container_class' => '',
					'container_id'    => '',
					'menu_class'      => 'menu',
					'menu_id'         => '',
					'echo'            => true,
					'fallback_cb'     => 'wp_page_menu',
					'before'          => '',
					'after'           => '',
					'link_before'     => '',
					'link_after'      => '',
					'items_wrap'      => '<ul>%3$s</ul>',
					'depth'           => 0,
					'walker'          => ''
				);
				wp_nav_menu( $defaults );
				?>
            </div>
            <div class="header__navigation--links">
				<?php
				$defaults = array(
					'theme_location'  => 'header-right-menu',
					'menu'            => 'Header right menu',
					'container_class' => '',
					'container_id'    => '',
					'menu_class'      => 'menu',
					'menu_id'         => '',
					'echo'            => true,
					'fallback_cb'     => 'wp_page_menu',
					'before'          => '',
					'after'           => '',
					'link_before'     => '',
					'link_after'      => '',
					'items_wrap'      => '<ul>%3$s</ul>',
					'depth'           => 0,
					'walker'          => ''
				);
				wp_nav_menu( $defaults );
				?>
            </div>
            <div class="header__navigation--address">
                <p class="brand"><?php echo $menu['brand']; ?></p>
                <address><?php echo $menu['address']; ?></address>
                <p>REGON: <?php echo $menu['regon']; ?></p>
                <p>NIP: <?php echo $menu['nip']; ?></p>
                <p>KRS: <?php echo $menu['krs']; ?></p>
            </div>
        </div>
    </div>
</div>