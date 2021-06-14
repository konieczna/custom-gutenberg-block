<section class="section-2">
    <div class="container">
        <div class="row">
            <div class="col-12- col-md-8 offset-md-2">
                <div class="section-2__content">
                    <?php if (get_field('section_2')): ?>
                        <?php the_field('section_2'); ?>
                    <?php endif; ?>
                    <?php if (get_field('heading_box')): ?>
                        <span><?php the_field('heading_box'); ?></span>
                    <?php endif; ?>
                </div>
            </div>
            <div class="col-12">
                <div class="row section-2__box">
                    <?php
                    $args = array(
                        'post_status' => 'publish',
                        'order' => 'ASC'
                    );
                    $loop = new WP_Query( $args );
                    while ( $loop->have_posts() ) : $loop->the_post(); ?>
                        <div class="col-12 col-md-4">
                            <div class="section-2__box__item">
                                <h3>
                                    <?php the_title(); ?>
                                </h3>
                                <?php the_content(); ?>
                            </div>
                        </div>
                    <?php  endwhile;
                    wp_reset_postdata();  ?>
                </div>
            </div>
        </div>
    </div>
</section>
