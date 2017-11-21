<?php
	the_post_thumbnail('full', ['class' => 'img-fluid']);
?>

	<!-- <?php the_title( '<h1>', '</h1>' ); ?> -->

<h1>
	<?php the_field('title'); ?>
</h1>

<p>
	<?php the_field('description'); ?>
</p>

	<img src="<?php the_field('photo'); ?>" alt="">

<?php

// check if the repeater field has rows of data
if( have_rows('services') ):

 	// loop through the rows of data
    while ( have_rows('services') ) : the_row(); 

// echo '<pre>';
// print_r($image);
// echo '</pre>';

    $image = get_sub_field('service_image');
    ?>

<!--         <h2>
        	<?php the_sub_field('service_title'); ?>
		</h2>
 -->
	<img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>">


    <?php endwhile; ?>

<?php else : ?>

    // no rows found

<?php endif; ?>