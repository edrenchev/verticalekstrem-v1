<?php get_header(); ?>

<div class="carousel">

	<?php 
	
		$args = array(
				'post_type' => 'carousel',
				'orderby' => 'post_date',
				'order' => 'DESC',
		);
		$queryObject = new WP_Query($args);
		
		if( $queryObject->have_posts() ) {
			while( $queryObject->have_posts() ){
				$queryObject->the_post();
				echo '<h2>'.the_title().'</h2>';
				echo '<div>'.the_post_thumbnail('medium').'</div>';
				
			}
		}
		wp_reset_postdata();
		
		echo '<hr/>';
	
		$args = array(
				'post_type' => 'service',
				'orderby' => 'post_date',
				'order' => 'DESC',
		);
		$queryObject = new WP_Query($args);
		
		if( $queryObject->have_posts() ) {
			while( $queryObject->have_posts() ){
				$queryObject->the_post();
				echo '<h2>'.the_title().'</h2>';
				echo '<div>'.the_post_thumbnail('medium').'</div>';
				
			}
		}
		wp_reset_postdata();
	
	?>

</div>

<?php get_footer(); ?>