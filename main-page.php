<?php
/*
Template Name: Template main page
*/
?>

<?php get_template_part( 'header-slider' ); ?>

<section class="call-to-action ribbon-wrap" id="ribbon" style="background-image:url('<?php bloginfo('template_directory'); ?>/img/paralax.png');">
    <div class="section-overlay-layer">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h2 style="color: #fff;" class="strong"><?php the_field('title',5); ?></h2>
                </div>
                <div class="col-md-8 col-md-offset-2">
                    <?php the_field('text',5); ?>
                </div>
            </div>
        </div>
    </div>
</section>

<div class="container">
    <div class="row">
        <div class="col-md-12">
            <h3 class="strong"><?php the_field('title_1',5); ?></h3>
        </div>
        <div class="col-md-6 col-xs-12 col-md-offset-1 col-xs-offset-0">
            <ul style="margin-top: 80px;">
                <?php the_field('text_1',5); ?>
            </ul>
        </div>
        <div class="col-md-3 col-md-offset-2 col-xs-12 col-xs-offset-0 text-center">
            <img style="display: inline;" class="img-responsive" src="<?php the_field('img',5); ?>"/>
        </div>
    </div>
</div>

<div class="container" style="margin-bottom: 50px;">
    <div class="row">
        <div class="col-md-12">
            <h3 class="strong">Наши адреса</h3>
        </div>
        <div class="row">
            <div class="col-xs-12 col-sm-6 col-md-4 text-center" style="margin-bottom: 10px;">
                <div class="address-block" style="margin-left: 10px; margin-right: 10px;">
                    <a href="/контакты/">
                        <div class="urban"><span style="background-color: <?php the_field('color_1',5); ?>;"></span><?php the_field('urban_1',5); ?></div>
                        <p><?php the_field('address_1',5); ?></p>
                        <p style="font-size: 20px;"><?php the_field('tel_1',5); ?></p>
                    </a>
                </div>
            </div>
            <div class="col-xs-12 col-sm-6 col-md-4 text-center" style="margin-bottom: 10px;">
                <div class="address-block" style="margin-left: 10px; margin-right: 10px;">
                    <a href="/контакты/">
                        <div class="urban"><span style="background-color: <?php the_field('color_2',5); ?>;"></span><?php the_field('urban_2',5); ?></div>
                        <p><?php the_field('address_2',5); ?></p>
                        <p style="font-size: 20px;"><?php the_field('tel_2',5); ?></p>
                    </a>
                </div>
            </div>
            <div class="col-xs-12 col-sm-6 col-md-4 text-center" style="margin-bottom: 10px;">
                <div class="address-block" style="margin-left: 10px; margin-right: 10px;">
                    <a href="/контакты/">
                        <div class="urban"><span style="background-color: <?php the_field('color_3',5); ?>;"></span><?php the_field('urban_3',5); ?></div>
                        <p><?php the_field('address_3',5); ?></p>
                        <p style="font-size: 20px;"><?php the_field('tel_3',5); ?></p>
                    </a>
                </div>
            </div>
            <div class="col-xs-12 col-sm-6 col-md-4 text-center" style="margin-bottom: 10px;">
                <div class="address-block" style="margin-left: 10px; margin-right: 10px;">
                    <a href="/контакты/">
                        <div class="urban"><span style="background-color: <?php the_field('color_4',5); ?>;"></span><?php the_field('urban_4',5); ?></div>
                        <p><?php the_field('address_4',5); ?></p>
                        <p style="font-size: 20px;"><?php the_field('tel_4',5); ?></p>
                    </a>
                </div>
            </div>
            <div class="col-xs-12 col-sm-6 col-md-4 text-center" style="margin-bottom: 10px;">
                <div class="address-block" style="margin-left: 10px; margin-right: 10px;">
                    <a href="/контакты/">
                        <div class="urban"><span style="background-color: <?php the_field('color_5',5); ?>;"></span><?php the_field('urban_5',5); ?></div>
                        <p><?php the_field('address_5',5); ?></p>
                        <p style="font-size: 20px;"><?php the_field('tel_5',5); ?></p>
                    </a>
                </div>
            </div>
            <div class="col-xs-12 col-sm-6 col-md-4 text-center" style="margin-bottom: 10px;">
                <div class="address-block" style="margin-left: 10px; margin-right: 10px;">
                    <a href="/контакты/">
                        <div class="urban"><span style="background-color: <?php the_field('color_6',5); ?>;"></span><?php the_field('urban_6',5); ?></div>
                        <p><?php the_field('address_6',5); ?></p>
                        <p style="font-size: 20px;"><?php the_field('tel_6',5); ?></p>
                    </a>
                </div>
            </div>
            <div class="col-xs-12 col-sm-6 col-md-4 text-center" style="margin-bottom: 10px;">
                <div class="address-block" style="margin-left: 10px; margin-right: 10px;">
                    <a href="/контакты/">
                        <div class="urban"><span style="background-color: <?php the_field('color_7',5); ?>;"></span><?php the_field('urban_7',5); ?></div>
                        <p><?php the_field('address_7',5); ?></p>
                        <p style="font-size: 20px;"><?php the_field('tel_7',5); ?></p>
                    </a>
                </div>
            </div>
            <div class="col-xs-12 col-sm-6 col-md-4 text-center" style="margin-bottom: 10px;">
                <div class="address-block" style="margin-left: 10px; margin-right: 10px;">
                    <a href="/контакты/">
                        <div class="urban"><span style="background-color: <?php the_field('color_8',5); ?>;"></span><?php the_field('urban_8',5); ?></div>
                        <p><?php the_field('address_8',5); ?></p>
                        <p style="font-size: 20px;"><?php the_field('tel_8',5); ?></p>
                    </a>
                </div>
            </div>
            <div class="col-xs-12 col-sm-6 col-md-4 text-center" style="margin-bottom: 10px;">
                <div class="address-block" style="margin-left: 10px; margin-right: 10px;">
                    <a href="/контакты/">
                        <div class="urban"><span style="background-color: <?php the_field('color_9',5); ?>;"></span><?php the_field('urban_9',5); ?></div>
                        <p><?php the_field('address_9',5); ?></p>
                        <p style="font-size: 20px;"><?php the_field('tel_9',5); ?></p>
                    </a>
                </div>
            </div>
            <div class="col-xs-12 col-sm-6 col-md-4 text-center" style="margin-bottom: 10px;">
                <div class="address-block" style="margin-left: 10px; margin-right: 10px;">
                    <a href="/контакты/">
                        <div class="urban"><span style="background-color: <?php the_field('color_10',5); ?>;"></span><?php the_field('urban_10',5); ?></div>
                        <p><?php the_field('address_10',5); ?></p>
                        <p style="font-size: 20px;"><?php the_field('tel_10',5); ?></p>
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>

<?php get_footer(); ?>