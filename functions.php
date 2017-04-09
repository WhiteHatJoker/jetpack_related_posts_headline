//Change the related posts headline
function jetpackme_related_posts_headline( $headline ) {
$headline = sprintf(
            '<h3 class="jp-relatedposts-headline"><em>%s</em></h3>',
            esc_html( 'Similar articles you may find helpful...' )
            );
return $headline;
}
add_filter( 'jetpack_relatedposts_filter_headline', 'jetpackme_related_posts_headline' );

//Do not display the related post context
add_filter( 'jetpack_relatedposts_filter_post_context', '__return_empty_string' );
