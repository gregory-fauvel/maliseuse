<?php
/**
 * The template for displaying image attachments.
 *
 * @package Zoom
 * @since 1.0
 */

get_header();
?>
		<div id="primary" class="site-content image-attachment nosidebar">
			<div id="content" role="main">

			<?php while ( have_posts() ) : the_post(); ?>

				<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
					<header class="entry-header">
						<h1 class="entry-title"><?php the_title(); ?></h1>

						<div class="entry-meta">
							<?php
								$metadata = wp_get_attachment_metadata();
								echo esc_html__( 'Published', 'zoom-lite' );
								printf( '<span class="after-published entry-date"><time class="entry-date" datetime="%1$s" pubdate>%2$s</time></span> at <a href="%3$s" title="Link to full-size image">%4$s &times; %5$s</a> in <a href="%6$s" title="Return to %7$s" rel="gallery">%7$s</a>',
									esc_attr( get_the_date( 'c' ) ),
									esc_html( get_the_date() ),
									esc_url( wp_get_attachment_url() ),
									esc_attr( $metadata['width'] ),
									esc_attr( $metadata['height'] ),
									esc_url( get_permalink( $post->post_parent ) ),
									esc_html( get_the_title( $post->post_parent ) )
								);
							?>
						</div><!-- .entry-meta -->

						<nav id="image-navigation">
                        	<div class="image-nav-holder">
							<span class="previous-image"><?php previous_image_link( false, '<i class="fa fa-arrow-left" aria-hidden="true"></i>&nbsp;'.esc_html( get_theme_mod( 'misc_txt_prev', 'Previous' ) ) ); ?></span>
							<span class="next-image"><?php next_image_link( false, esc_html( get_theme_mod( 'misc_txt_next', 'Next' ) ).'&nbsp;<i class="fa fa-arrow-right" aria-hidden="true"></i>' ); ?></span>
                            </div>
						</nav><!-- #image-navigation -->
					</header><!-- .entry-header -->

					<div class="entry-content clearfixafter">

						<div class="entry-attachment">
							<div class="attachment">
								<?php
									/**
									 * Grab the IDs of all the image attachments in a gallery so we can get the URL of the next adjacent image in a gallery,
									 * or the first image (if we're looking at the last image in a gallery), or, in a gallery of one, just the link to that image file
									 */
									$attachments = array_values( get_children( array( 'post_parent' => $post->post_parent, 'post_status' => 'inherit', 'post_type' => 'attachment', 'post_mime_type' => 'image', 'order' => 'ASC', 'orderby' => 'menu_order ID' ) ) );
									foreach ( $attachments as $k => $attachment ) {
										if ( $attachment->ID == $post->ID )
											break;
									}
									$k++;
									// If there is more than 1 attachment in a gallery
									if ( count( $attachments ) > 1 ) {
										if ( isset( $attachments[ $k ] ) )
											// get the URL of the next image attachment
											$next_attachment_url = get_attachment_link( $attachments[ $k ]->ID );
										else
											// or get the URL of the first image attachment
											$next_attachment_url = get_attachment_link( $attachments[ 0 ]->ID );
									} else {
										// or, if there's only 1 image, get the URL of the image
										$next_attachment_url = wp_get_attachment_url();
									}
								?>

								<a href="<?php echo esc_url( $next_attachment_url ); ?>" title="<?php the_title_attribute(); ?>" rel="attachment"><?php
									$attachment_size = apply_filters( 'zoom_theme_attachment_size', array( 1200, 1200 ) ); // Filterable image size.
									echo wp_get_attachment_image( $post->ID, $attachment_size );
								?></a>
							</div><!-- .attachment -->

							<?php if ( ! empty( $post->post_excerpt ) ) : ?>
							<div class="entry-caption">
								<?php the_excerpt(); ?>
							</div>
							<?php endif; ?>
						</div><!-- .entry-attachment -->

						<?php the_content(); ?>
						<?php zoom_custom_wp_link_pages(); ?>

					</div><!-- .entry-content -->

					<footer class="entry-meta">
						<?php if ( ! is_admin_bar_showing() ): edit_post_link( esc_html__( 'Edit', 'zoom-lite' ), ' <span class="edit-link">', '</span>' ); endif; ?>
					</footer><!-- .entry-meta -->
				</article><!-- #post-<?php the_ID(); ?> -->

			<?php endwhile; // end of the loop. ?>

			</div><!-- #content -->
		</div><!-- #primary .site-content -->
        
<?php get_footer(); ?>