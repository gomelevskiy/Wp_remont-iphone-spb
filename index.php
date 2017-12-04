<?php get_header(); ?>
<div class="wrap">
<div id="main" class="container">
    <div class="row">
        <div class="col-md-3">
            <?php get_sidebar(); ?>
        </div>
        <div class="col-md-9">
            <h1><strong><?php the_title();?></strong></h1>
            <div style="margin-top: 20px; margin-bottom: 50px; font-weight: 300; text-align: justify;" class="content-block">
                <?php if (have_posts()) : while (have_posts()) : the_post();?>

                    <?php the_content(); ?>

                <?php endwhile; endif; ?>
            </div>
            <div class="comments-block" style="margin-bottom: 40px;">
                <div class="row">
                    <?php
                    if ( comments_open() || get_comments_number() ) :
                        comments_template();
                    endif;
                    ?>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
<?php get_footer(); ?>