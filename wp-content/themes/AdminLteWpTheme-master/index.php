<?php get_header(); ?>

<div class="content-wrapper">
    <!-- Main content -->
    <section class="content">

        <!-- row -->
        <div class="row">
            <?php if(get_option('ad_header') != '') : ?>
                <div class="col-md-12 hidden-xs hidden-sm ad">
                    <?php echo stripslashes(get_option('ad_header')); ?>
                </div>
            <?php endif; ?>
            <?php if(get_option('ad_header_mobile') != '') : ?>
                <div class="col-md-12 visible-xs visible-sm ad">
                    <?php echo stripslashes(get_option('ad_header_mobile')); ?>
                </div>
            <?php endif; ?>
            <?php if (get_option('carousel_check') == 'true') : ?>
                <div class="col-md-<?php echo get_option('carousel_width'); ?>">
                    <div id="carousel" class="carousel slide" data-ride="carousel">
                        <div class="carousel-inner">
                            <?php
                            $i = 0;
                            $carousel_category = get_cat_ID(get_option('carousel_category'));
                            $carousel_count = get_option('carousel_post_count');
                            if (have_posts()) : $ali= new WP_Query("cat=$carousel_category&showposts=$carousel_count");
                                while($ali->have_posts()) : $ali->the_post();
                                    $i++;
                                    ?>
                                    <div class="item <?php if($i == 1) { echo "active";} ?>">
                                        <?php $carousel = wp_get_attachment_image_src(get_post_thumbnail_id(), 'medium');
                                        if (has_post_thumbnail()) { ?>

                                            <img src="<?php echo $carousel[0]; ?>" class="img-responsive"
                                                 alt="<?php the_title(); ?>" title="<?php the_title() ?>" />

                                        <?php } ?>
                                            <div class="carousel-caption">
                                            <a href="<?php the_permalink() ?>">
                                                <?php the_excerpt_rss(); ?>
                                            </a>
                                        </div>
                                    </div>
                                <?php endwhile ?>
                            <?php endif ?>
                        </div>
                        <a class="left carousel-control" href="#carousel" data-slide="prev">
                            <span class="fa fa-angle-left"></span>
                        </a>
                        <a class="right carousel-control" href="#carousel" data-slide="next">
                            <span class="fa fa-angle-right"></span>
                        </a>
                    </div>
                </div>
            <?php endif; ?>
            <?php if (get_option('accordion_check') == 'true') : ?>
                <div class="col-md-<?php echo get_option('accordion_width'); ?>">
                    <div class="box">
                        <div class="box-header with-border">
                            <h3 class="box-title"><?php echo get_option('accordion_title'); ?></h3>
                            <div class="box-tools pull-right">
                                <button class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                                </button>
                                <button class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i>
                                </button>
                            </div>
                        </div><!-- /.box-header -->
                        <div class="box-body">
                            <div class="box-group" id="accordion">
                                <?php
                                $i = 0;
                                $accordion_category = get_cat_ID(get_option('accordion_category'));
                                $accordion_count = get_option('accordion_post_count');
                                if (have_posts()) : $ali= new WP_Query("cat=$accordion_category&showposts=$accordion_count");
                                    while($ali->have_posts()) : $ali->the_post();
                                        $i++;
                                        ?>
                                        <div class="panel box box-primary">
                                            <div class="box-header with-border">
                                                <h4 class="box-title">
                                                    <a data-toggle="collapse" data-parent="#accordion" href="#collapse<?php echo $i; ?>">
                                                        <?php the_title(); ?>
                                                    </a>
                                                </h4>
                                            </div>
                                            <div id="collapse<?php echo $i; ?>" class="panel-collapse collapse">
                                                <div class="box-body">
                                                    <a href="<?php the_permalink() ?>">
                                                        <?php the_excerpt_rss(); ?>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    <?php endwhile ?>
                                <?php endif ?>
                            </div>
                        </div><!-- /.box-body -->
                    </div><!-- /.box -->
                </div>
            <?php endif; ?>
            <?php if (get_option('github_check') == 'true') : ?>
                <div class="col-md-<?php echo get_option('github_width'); ?>">
                    <!-- GitHub Activity Feed -->
                    <div class="box">
                        <div class="box-header with-border">
                            <h3 class="box-title"><?php echo get_option('github_title'); ?></h3>

                            <div class="box-tools pull-right">
                                <button class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                                </button>
                                <button class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i>
                                </button>
                            </div>
                        </div>
                        <!-- /.box-header -->
                        <div class="box-body">
                            <div id="feed"></div>
                        </div>
                        <!-- ./box-body -->
                    </div>
                    <!-- /.box -->
                </div>
            <?php endif; ?>
            <div class="col-md-12">
                <!-- The time line -->
                <ul class="timeline">

                    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
                        <!-- timeline time label -->
                        <li class="time-label">
                            <span class="bg-green"><?php the_time('d.m.Y ') ?></span>
                        </li>
                        <!-- /.timeline-label -->
                        <!-- timeline item -->
                        <li>
                            <i class="fa fa-newspaper-o bg-blue"></i>

                            <div class="timeline-item">
                                <span class="time"><i class="fa fa-clock-o"></i> <?php the_time('H:i') ?></span>

                                <h3 class="timeline-header">
                                    <a href="<?php the_permalink() ?>" alt="<?php the_title(); ?>" title="<?php the_title(); ?> "><?php the_title(); ?></a>
                                </h3>

                                <div class="timeline-body">
                                    <div class="row">
                                        <div class="col-lg-3 col-sm-5">
                                            <div class="caption">
                                                <a href="<?php the_permalink() ?>" title="<?php the_title(); ?>">
                                                    <?php $img = wp_get_attachment_image_src(get_post_thumbnail_id(), 'medium');
                                                    if (has_post_thumbnail()) { ?>

                                                        <img src="<?php echo $img[0]; ?>" class="img-responsive" alt="<?php the_title(); ?>" title="<?php the_title() ?>"/>

                                                    <?php } ?>
                                                </a>
                                            </div>
                                        </div>
                                        <div class="col-lg-9 col-sm-7">
                                            <?php the_excerpt_rss(); ?>
                                            <div style="margin-top: 10px">
                                                <a class="btn btn-primary btn-xs" href="<?php the_permalink() ?>"
                                                   title="<?php the_title(); ?>">Read more</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="timeline-footer">
                                    <p>
                                        <i class="fa fa-user"></i>
                                        <a href="<?php echo esc_url(get_author_posts_url(get_the_author_meta('ID'))); ?>" title="<?php the_author(); ?>"><?php the_author(); ?></a> |
                                        <i class="fa fa-folder-open"></i> <?php the_category(', ') ?> |
                                        <i class="fa fa-comments"></i> <?php comments_number('0 comment', '1 comment', '% comments'); ?>
                                    </p>
                                </div>
                            </div>
                        </li>
                        <!-- END timeline item -->
                    <?php endwhile; ?>
                    <?php else : ?>
                </ul>
                <div class="error-page">
                    <h3><i class="fa fa-warning text-yellow"></i> Oops! Articles not found.</h3>

                    <p>
                        There is no article.
                        Meanwhile, you may <a href="<?php bloginfo('url'); ?>">return to home</a> or try using the
                        search form.
                    </p>

                    <form action="<?php bloginfo('url'); ?>" class="search-form">
                        <div class="input-group">
                            <input type="text" name="s" class="form-control" placeholder="Search">

                            <div class="input-group-btn">
                                <button type="submit" class="btn btn-warning btn-flat"><i class="fa fa-search"></i>
                                </button>
                            </div>
                        </div>
                        <!-- /.input-group -->
                    </form>
                </div>
                <!-- /.error-page -->
                <?php endif; ?>
                </ul>
                <div id="inifiniteLoader"><i class="fa fa-2x fa-refresh fa-spin"></i></div>
            </div>
            <?php if(get_option('ad_footer') != '') : ?>
                <div class="col-md-12 hidden-xs hidden-sm ad">
                    <?php echo stripslashes(get_option('ad_footer')); ?>
                </div>
            <?php endif; ?>
            <?php if(get_option('ad_footer_mobile') != '') : ?>
                <div class="col-md-12 visible-xs visible-sm ad">
                    <?php echo stripslashes(get_option('ad_footer_mobile')); ?>
                </div>
            <?php endif; ?>
            <!-- /.col -->
        </div>
        <!-- /.row -->

    </section>
    <!-- /.content -->
</div><!-- /.content-wrapper -->

<script type="text/javascript">
    jQuery(document).ready(function ($) {
        var count = 2;
        var total = <?php echo $wp_query->max_num_pages; ?>;
        $(window).scroll(function () {
            if ($(window).scrollTop() == $(document).height() - $(window).height()) {
                if (count > total) {
                    return false;
                } else {
                    loadArticle(count);
                }
                count++;
            }
        });

        function loadArticle(pageNumber) {
            $('#inifiniteLoader').show();
            $.ajax({
                url: "<?php echo admin_url(); ?>admin-ajax.php",
                type: 'POST',
                data: "action=infinite_scroll&page_no=" + pageNumber + '&loop_file=loop',
                success: function (html) {
                    $('#inifiniteLoader').hide('1000');
                    $("ul.timeline").append(html);
                }
            });
            return false;
        }

    });
</script>

<?php get_footer(); ?>