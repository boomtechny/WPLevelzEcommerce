<!-- Sidebar
            ============================================= -->
<div class="sidebar nobottommargin col_last clearfix">
	<div class="sidebar-widgets-wrap">
		<?php

		if( is_active_sidebar( 'bt_sidebar' ) ){
			dynamic_sidebar('bt_sidebar' );
		}

		?>
	</div>
</div><!-- .sidebar end -->