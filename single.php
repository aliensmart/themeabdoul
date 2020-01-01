<?php get_header( ) ?>

    <div id="content">

        <div id="primary" class="content-area">
            <main id="main" class="site-main" role ="main">
            <?php if(have_posts(  )) : while(have_posts(  )): the_post(  ); ?>
                <?php get_template_part('template-parts/content'); ?>
            <?php endwhile; else : ?>
                <?php get_template_part('template-parts/content', '404'); ?>
            <?php endif; ?>
            </main>
                <p>single</p>
        </div>
<?php get_sidebar(  ); ?>
<?php get_footer( ) ?>