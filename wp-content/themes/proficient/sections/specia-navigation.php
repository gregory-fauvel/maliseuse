<header role="banner">

	<div class="container">
		<div class="col-md-12 col-sm-12 col-xs-12 header-center padding-top-25 padding-bottom-20">
			<a class="navbar-brand" href="<?php echo home_url( '/' ); ?>" class="brand">
				<?php
					if(has_custom_logo())
					{	
						the_custom_logo();
					}
					else { 
				?> 
					<span class="site-title"><?php echo esc_html(bloginfo('name')); ?></span>
				<?php	
					}
				?>
				
				<?php
					$description = get_bloginfo( 'description');
					if ($description) : ?>
						<p class="site-description"><?php echo esc_html($description); ?></p>
				<?php endif; ?>
			</a>
		</div>
	</div>
</header>
<nav class='navbar navbar-default nav-center <?php echo esc_attr(specia_sticky_menu()); ?>' role='navigation'>
	
	<div class="container">

		<!-- Mobile Display -->
		<div class="navbar-header">
			<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
				<span class="sr-only"><?php echo __('Toggle navigation','proficient'); ?></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			</button>
		</div>
		<!-- /Mobile Display -->

		<!-- Menu Toggle -->
		<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">

		<?php 
			wp_nav_menu( 
				array(  
					'theme_location' => 'primary_menu',
					'container'  => '',
					'menu_class' => 'nav navbar-nav navbar-right',
					'fallback_cb' => 'specia_fallback_page_menu',
					'walker' => new specia_nav_walker()
					 ) 
				);
		?>
		</div>
		<!-- Menu Toggle -->
		
	</div>
</nav>
<div class="clearfix"></div>
<?php 
if ( !is_page_template( 'templates/template-homepage-one.php' )) {
		specia_breadcrumbs_style(); 
	}
?>