<?php get_header( ) ?>

    <div id="content">

        <div id="primary" class="content-area">
            <main id="main" class="site-main" role ="main">
                <article id="post-<?php the_ID(  ); ?>" <?php post_class( ); ?> >

                    <header class="entry-header">
                        <h1>
                            index.php
                        </h1>
                    </header>
                    <div class="entry-content">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. 
                        Quis nostrum autem nam eius sed laudantium eligendi! 
                        Aliquam nobis aspernatur quam?
                    </div>
                </article>
            </main>

        </div>
<?php get_sidebar(  ); ?>
<?php get_footer( ) ?>