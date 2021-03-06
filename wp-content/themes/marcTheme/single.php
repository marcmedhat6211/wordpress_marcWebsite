<?php get_header(); ?>
<div class="container">
    <?php 
        if(have_posts)
        {
            the_post();
    ?>
    <div class="row">
        <div class="col-md-6">
            <?php the_post_thumbnail("medium"); ?>
            <?php the_category(); ?>
            <h2><?php the_title(); ?></h2>
            <p><?php the_content(); ?></p>
        </div>
    </div>
    <?php
        }
    ?>
</div>
<?php get_footer(); ?>