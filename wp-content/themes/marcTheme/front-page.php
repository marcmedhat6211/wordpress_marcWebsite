<?php get_header(); ?>
<div class="container allPosts">
    <?php 
        if(have_posts)
        {
            while(have_posts)
            {
                the_post();
    ?>
    <div class="row">
        <div class="col-md-6">
            <?php the_post_thumbnail("medium"); ?>
            <h2><?php the_title(); ?></h2>
            <p><?php the_content(); ?></p>
            <br>
            <br>
            <br>
        </div>
    </div>
    <?php
            }
        }
    ?>
</div>
<?php get_footer(); ?>