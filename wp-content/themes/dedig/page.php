<?php get_header(); ?>
    
        <?php
            $id = 'page_id=' . get_the_ID();
            $current = new WP_Query($id);

            while ($current -> have_posts()) :
                $current -> the_post();
                $title2 = get_post_meta($post->ID, 'bloco_2_title_value_meta', true);
                $content2 = get_post_meta($post->ID, 'bloco_2_content_value_meta', true);
                $title3 = get_post_meta($post->ID, 'bloco_3_title_value_meta', true);
                $content3 = get_post_meta($post->ID, 'bloco_3_content_value_meta', true);
                $title4 = get_post_meta($post->ID, 'bloco_4_title_value_meta', true);
                $content4 = get_post_meta($post->ID, 'bloco_4_content_value_meta', true);
        ?>
        <article>
            <div class="content-block orange-block">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-12 text-block">
                            <h1><?php the_title(); ?></h1>
                            <p><?php the_content(); ?></p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="onda-laranja-bottom"></div>

            <?php if ($title2 != '' && $content2 != ''): ?>
            <div class="container">
                <div class="row content-block">
                    <div class="col-sm-12 text-block">
                        <h1><?php echo $title2; ?></h1>
                        <p><?php echo $content2; ?></p>
                    </div>
                </div>
            </div>
            <?php endif; ?>

            <?php if ($title3 != '' && $content3 != ''): ?>
            <div class="onda-azul-top"></div>
            <div class="content-block blue-block">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12 text-block">
                        <h1><?php echo $title3; ?></h1>
                        <p><?php echo $content3; ?></p>
                    </div>
                </div>
            </div>
            </div>
            <div class="onda-azul-bottom"></div>
            <?php endif; ?>

            <?php if ($title4 != '' && $content4 != ''): ?>
            <div class="container">
                <div class="row content-block">
                    <div class="col-sm-12 text-block">
                        <h1><?php echo $title4; ?></h1>
                        <p><?php echo $content4; ?></p>
                    </div>
                </div>
            </div>
            <?php endif; ?>

        </article>
        <?php endwhile; ?>
<?php get_footer(); ?>
