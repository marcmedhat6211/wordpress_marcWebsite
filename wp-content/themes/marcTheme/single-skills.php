<?php get_header(); ?>
   <div class="container">
   <?php
        if(have_posts(  )){
             the_post(); ?>
        <div class="row">
            <div class="col-md-6">
                <h2><?php the_title(); ?></h2>
                <h3>
                    <?php echo get_field( "language_name" ); ?>
                </h3>
                <p>
                    <?php echo get_field("rate"); ?>
                </p>
            </div>
        </div>
        <?php 
        }
        ?>
   </div>   
<?php get_footer(); ?>