<div id="group-navigation">  
    <div id="group_sidebar">
        <div id="item-header-avatar">
          <?php bp_group_avatar() ?>
        </div>
    </div>
    <div id="item-nav">
				<div class="sidebar-activity-tabs no-ajax" id="object-nav" role="navigation">
					<ul>

						<?php bp_get_options_nav(); ?>

						<?php do_action( 'bp_group_options_nav' ); ?>
					
					</ul>
				</div>
	</div><!-- #item-nav-alt-sidebar -->

</div>     
