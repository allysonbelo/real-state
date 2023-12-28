<?php get_header(); ?>
Single

<?php

while (have_posts()) : the_post(); ?>
   <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
      <!-- Conteúdo da postagem aqui -->
   </article>
<?php endwhile;


// usada para exibir links de paginação para postagens divididas em várias páginas.
wp_link_pages(
   array(
      'before'      => '<div class="page-links">' . esc_html__( 'Pages:', 'real-state' ),
      'after'       => '</div>',
      'link_before' => '<span class="page-number">',
      'link_after'  => '</span>',
   )
);

// Remova para não exibir comentários nas postagens
if (comments_open() || get_comments_number()) {
    comments_template();
}

?>

<?php get_footer(); ?>