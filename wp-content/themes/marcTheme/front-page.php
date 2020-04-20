<?php get_header(); ?>
    <?php /* **SKILLS SECTION** */  ?>
        <section class="skills">
            <h2>Skills</h2>
            <div class="container">
                <?php
                    $args = array(
                        "post_type" => ["skills"],
                        "posts_per_page" => 2
                    );
                    $query = new WP_Query($args); 
                    if($query->have_posts())
                    {
                        while($query->have_posts())
                        {
                            $query->the_post();
                ?>
                <div class="row">
                    <div class="col-md-6">
                        <a href="<?php echo get_the_permalink(); ?>">
                            <h4><?php the_title(); ?></h4>    
                        </a>
                        <br>
                    </div>
                </div>
                <?php
                        }
                    }
                ?>
            </div>
        </section>

    <?php /* **WORK EXPERIENCE SECTION** */  ?>
        <section class="work-exp">
            <h2>Work Experience</h2>
            <div class="container">
                <?php
                    $args = array(
                        "post_type" => ["work_experiences"],
                        "posts_per_page" => 2
                    );
                    $query = new WP_Query($args); 
                    if($query->have_posts())
                    {
                        while($query->have_posts())
                        {
                            $query->the_post();
                ?>
                <div class="row">
                    <div class="col-md-6">
                        <a href="<?php echo get_the_permalink(); ?>">
                            <h4><?php the_title(); ?></h4>    
                        </a>
                        <br>
                    </div>
                </div>
                <?php
                        }
                    }
                ?>
            </div>
        </section>

    <?php /* **EDUCATION SECTION** */  ?>
        <section class="education">
            <h2>Education</h2>
            <div class="container">
                <?php
                    $args = array(
                        "post_type" => ["education"],
                        "posts_per_page" => 2
                    );
                    $query = new WP_Query($args); 
                    if($query->have_posts())
                    {
                        while($query->have_posts())
                        {
                            $query->the_post();
                ?>
                <div class="row">
                    <div class="col-md-6">
                        <a href="<?php echo get_the_permalink(); ?>">
                            <h4><?php the_title(); ?></h4>    
                        </a>
                        <br>
                    </div>
                </div>
                <?php
                        }
                    }
                ?>
            </div>
        </section>
<?php get_footer(); ?>