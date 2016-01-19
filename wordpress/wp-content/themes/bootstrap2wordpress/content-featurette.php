<?php
$video_featurette_title = get_field('video_featurette_title');
?>

<!-- VIDEO FEATURETTE
================================================== -->
<section id="featurette">
    <div class="container">
        <div class="row">
            <div class="col-sm-8 col-sm-offset-2">
                <h2><?php echo $video_featurette_title ?></h2>
                <?php $loop = new WP_Query( array( 'post_type' => 'video_featurette', 'orderby' => 'post_id', 'order' => 'ASC') ); ?>
                <?php while( $loop->have_posts() ) : $loop->the_post(); ?>
                    <?php the_content(); ?>
                <?php endwhile; ?>
                <?php wp_reset_query(); ?>
            </div>
        </div>
    </div><!-- container -->
</section><!-- featurette -->
