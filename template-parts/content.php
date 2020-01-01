<article id="post-<?php the_ID(  ); ?>" <?php post_class( ); ?> >

    <header class="entry-header">
        <?php the_title('<h1>', '</h1>' ) ?>
    </header>
    <div class='byline'>
        <?php esc_html_e( 'Author: ' ); the_author( )?>
    </div>
    <div class="entry-content">
    <?php the_content( ) ;?>
    </div>
    <?php if(comments_open( )): ?>
    <?php comments_template( ) ?>
    <?php endif;?>
</article>
