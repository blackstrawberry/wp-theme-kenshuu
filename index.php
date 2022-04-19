<?php
get_header();
?>

<div class="container">

	<?php
		if( have_posts() ){
            ?>
            <h2><?php echo single_cat_title(); ?></h2>
            <div class="sentaku">
                <div class="row row-cols-md-4 g-4">
            <?php
			while( have_posts() ){
				
				the_post();
        
                get_template_part('template-parts/content','archive');
			}
            ?>
                </div>
            </div>
            <?php
            the_posts_pagination();
            

		}
	?> 

</div>
	

<?php
get_footer();
?>
