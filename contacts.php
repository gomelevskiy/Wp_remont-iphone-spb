<?php
/*
Template Name: Template contact page
*/
?>
<?php get_header(); ?>
<link rel= "stylesheet" href= "<?php bloginfo('template_directory'); ?>/css/contacts.css" media= "all" />
<div class="container" style="margin-bottom: 50px;">
    <div class="row">
        <div class="col-md-12">
            <h2 style="color: #000;"><strong>Адреса:</strong></h2>

            <p class="urban" style="text-align: center;"><span class="around" style="background-color: #d01329;"></span></p>
            <div class="panel-group" id="accordion">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h4 class="panel-title">
                            <a data-toggle="collapse" data-parent="#accordion" href="#c1">
                                <?php the_field('address_1',9); ?>
                            </a>
                        </h4>
                    </div>
                    <div id="c1" class="panel-collapse collapse">
                        <div class="panel-body">
                            <div class="container">
                                <div class="col-md-6">
                                    <?php the_field('info_1',9); ?>
                                </div>
                                <div class="col-md-6">
                                    <?php the_field('map_1',9); ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h4 class="panel-title">
                            <a data-toggle="collapse" data-parent="#accordion" href="#c2">
                                <?php the_field('address_2',9); ?>
                            </a>
                        </h4>
                    </div>
                    <div id="c2" class="panel-collapse collapse">
                        <div class="panel-body">
                            <div class="container">
                                <div class="col-md-6">
                                    <?php the_field('info_2',9); ?>
                                </div>
                                <div class="col-md-6">
                                    <?php the_field('map_2',9); ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h4 class="panel-title">
                            <a data-toggle="collapse" data-parent="#accordion" href="#c3">
                                <?php the_field('address_3',9); ?>
                            </a>
                        </h4>
                    </div>
                    <div id="c3" class="panel-collapse collapse">
                        <div class="panel-body">
                            <div class="container">
                                <div class="col-md-6">
                                    <?php the_field('info_3',9); ?>
                                </div>
                                <div class="col-md-6">
                                    <?php the_field('map_3',9); ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h4 class="panel-title">
                            <a data-toggle="collapse" data-parent="#accordion" href="#c4">
                                <?php the_field('address_4',9); ?>
                            </a>
                        </h4>
                    </div>
                    <div id="c4" class="panel-collapse collapse">
                        <div class="panel-body">
                            <div class="container">
                                <div class="col-md-6">
                                    <?php the_field('info_4',9); ?>
                                </div>
                                <div class="col-md-6">
                                    <?php the_field('map_4',9); ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h4 class="panel-title">
                            <a data-toggle="collapse" data-parent="#accordion" href="#c5">
                                <?php the_field('address_5',9); ?>
                            </a>
                        </h4>
                    </div>
                    <div id="c5" class="panel-collapse collapse">
                        <div class="panel-body">
                            <div class="container">
                                <div class="col-md-6">
                                    <?php the_field('info_5',9); ?>
                                </div>
                                <div class="col-md-6">
                                    <?php the_field('map_5',9); ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h4 class="panel-title">
                            <a data-toggle="collapse" data-parent="#accordion" href="#c6">
                                <?php the_field('address_6',9); ?>
                            </a>
                        </h4>
                    </div>
                    <div id="c6" class="panel-collapse collapse">
                        <div class="panel-body">
                            <div class="container">
                                <div class="col-md-6">
                                    <?php the_field('info_6',9); ?>
                                </div>
                                <div class="col-md-6">
                                    <?php the_field('map_6',9); ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <p class="urban" style="text-align: center;"><span class="around" style="background-color: #780087;"></span></p>
            <div class="panel-group" id="accordion1">

                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h4 class="panel-title">
                            <a data-toggle="collapse" data-parent="#accordion1" href="#c7">
                                <?php the_field('address_7',9); ?>
                            </a>
                        </h4>
                    </div>
                    <div id="c7" class="panel-collapse collapse">
                        <div class="panel-body">
                            <div class="container">
                                <div class="col-md-6">
                                    <?php the_field('info_7',9); ?>
                                </div>
                                <div class="col-md-6">
                                    <?php the_field('map_7',9); ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

            <p class="urban" style="text-align: center;"><span class="around" style="background-color: #3174c3;"></span></p>
            <div class="panel-group" id="accordion2">

                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h4 class="panel-title">
                            <a data-toggle="collapse" data-parent="#accordion2" href="#c8">
                                <?php the_field('address_8',9); ?>
                            </a>
                        </h4>
                    </div>
                    <div id="c8" class="panel-collapse collapse">
                        <div class="panel-body">
                            <div class="container">
                                <div class="col-md-6">
                                    <?php the_field('info_8',9); ?>
                                </div>
                                <div class="col-md-6">
                                    <?php the_field('map_8',9); ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h4 class="panel-title">
                            <a data-toggle="collapse" data-parent="#accordion2" href="#c9">
                                <?php the_field('address_9',9); ?>
                            </a>
                        </h4>
                    </div>
                    <div id="c9" class="panel-collapse collapse">
                        <div class="panel-body">
                            <div class="container">
                                <div class="col-md-6">
                                    <?php the_field('info_9',9); ?>
                                </div>
                                <div class="col-md-6">
                                    <?php the_field('map_9',9); ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

            <p class="urban" style="text-align: center;"><span class="around" style="background-color: #cd700a;"></span></p>
            <div class="panel-group" id="accordion3">

                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h4 class="panel-title">
                            <a data-toggle="collapse" data-parent="#accordion3" href="#c10">
                                <?php the_field('address_10',9); ?>
                            </a>
                        </h4>
                    </div>
                    <div id="c10" class="panel-collapse collapse">
                        <div class="panel-body">
                            <div class="container">
                                <div class="col-md-6">
                                    <?php the_field('info_10',9); ?>
                                </div>
                                <div class="col-md-6">
                                    <?php the_field('map_10',9); ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

        </div>
    </div>
    <div class="row">
        <div class="col-md-6">
            <?php if (have_posts()) : while (have_posts()) : the_post();?>

                <?php the_content(); ?>

            <?php endwhile; endif; ?>
        </div>
        <div class="col-md-6">
            <div class="form-connect">
                <h3>Связаться с нами:</h3>
                <div class="form">
                    <?php the_field('form',9); ?>
                </div>
            </div>
        </div>
    </div>
</div>

<?php get_footer(); ?>
