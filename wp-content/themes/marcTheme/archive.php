<?php get_header(); ?>
<div class="container">
    <?php 
        if(have_posts)
        {
            while(have_posts)
            {
                the_post();
    ?>
    <div class="row">
        <div class="col-md-6">
            <a href="<?php echo get_the_permalink(); ?>">
                <h2><?php the_title(); ?></h2>    
            </a>
            <?php the_post_thumbnail("medium"); ?>
            <br>
        </div>
    </div>
    <?php
            }
        }
    ?>
</div>
<?php get_footer(); ?>