<section class="section-1">
    <div class="container">
        <div class="row">
            <div class="col-12- col-md-8 offset-md-2">
                <div class="section-1__content">
                    <?php if (get_field('section_1')): ?>
                        <?php the_field('section_1'); ?>
                    <?php endif; ?>
                </div>
            </div>
            <div class="col-12">
                <div class="swiper-container swiper-somecontent">
                    <div class="swiper-wrapper">
                        <?php the_content(); ?>
                    </div>
                </div>
                <div class="swiper-button-next"></div>
                <div class="swiper-button-prev"></div>
            </div>
        </div>
    </div>
</section>

