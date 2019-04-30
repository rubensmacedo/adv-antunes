<?php
/**
 * The template for displaying comments.
 *
 * This is the template that displays the area of the page that contains both the current comments
 * and the comment form.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Acme Themes
 * @subpackage Lawyer Zone
 */

/*
 * If the current post is protected by a password and
 * the visitor has not yet entered the password we will
 * return early without loading the comments.
 */
global $lawyer_zone_customizer_all_values;
if ( post_password_required() ) {
	return;
}
?>
<div id="comments" class="comments-area">
	<?php
	// You can start editing here -- including this comment!
	if ( have_comments() ) : ?>
		<h2 class="comments-title">
            <?php
            $comments_number = get_comments_number();
            if ( '1' === $comments_number ) {
                /* translators: %s: post title */
                printf( _x( 'One Thought to &ldquo;%s&rdquo;', 'comments title', 'lawyer-zone' ), get_the_title() );
            } else {
                printf(
                /* translators: 1: number of comments, 2: post title */
                    _nx(
                        '%1$s Thought to &ldquo;%2$s&rdquo;',
                        '%1$s Thoughts to &ldquo;%2$s&rdquo;',
                        $comments_number,
                        'comments title',
                        'lawyer-zone'
                    ),
                    number_format_i18n( $comments_number ),
                    get_the_title()
                );
            }
            ?>
        </h2>
		<?php if ( get_comment_pages_count() > 1 && get_option( 'page_comments' ) ) : // Are there comments to navigate through? ?>
		<nav id="comment-nav-above" class="navigation comment-navigation" role="navigation">
			<h2 class="screen-reader-text"><?php esc_html_e( 'Comment navigation', 'lawyer-zone' ); ?></h2>
			<div class="nav-links">

				<div class="nav-previous"><?php previous_comments_link( esc_html__( 'Comentários mais antigos', 'lawyer-zone' ) ); ?></div>
				<div class="nav-next"><?php next_comments_link( esc_html__( 'Comentários mais novos', 'lawyer-zone' ) ); ?></div>

			</div><!-- .nav-links -->
		</nav><!-- #comment-nav-above -->
		<?php endif; // Check for comment navigation. ?>

		<ol class="comment-list">
			<?php
				wp_list_comments( array(
					'style'      => 'ol',
					'short_ping' => true,
                    'callback' => 'lawyer_zone_commment_list'
				) );
			?>
		</ol><!-- .comment-list -->
		<?php if ( get_comment_pages_count() > 1 && get_option( 'page_comments' ) ) : // Are there comments to navigate through? ?>
		<nav id="comment-nav-below" class="navigation comment-navigation" role="navigation">
			<h2 class="screen-reader-text"><?php esc_html_e( 'Comment navigation', 'lawyer-zone' ); ?></h2>
			<div class="nav-links">
				<div class="nav-previous"><?php previous_comments_link( esc_html__( 'Older Comments', 'lawyer-zone' ) ); ?></div>
				<div class="nav-next"><?php next_comments_link( esc_html__( 'Newer Comments', 'lawyer-zone' ) ); ?></div>
			</div><!-- .nav-links -->
		</nav><!-- #comment-nav-below -->
		<?php
		endif; // Check for comment navigation.
	endif; // Check for have_comments().

	// If comments are closed and there are comments, let's leave a little note, shall we?
	if ( ! comments_open() && get_comments_number() && post_type_supports( get_post_type(), 'comments' ) ) : ?>
		<p class="no-comments"><?php esc_html_e( 'Os comentários esto fechados.', 'lawyer-zone' ); ?></p>
	<?php
	endif;
	$fields   =  array(
  'url'    => '<br>',
  'author' => '<p class="comment-form-author"><label for="author"></label><input id="author" name="author" type="text" placeholder="Nome" value="" size="30" aria-required="true"></p>',
		'email' => '<p class="comment-form-email" style="display: inline-block; width: 100%;"><label for="email"></label> <input id="email" name="email" type="email" value="" placeholder="Email" size="30" aria-required="true"></p>',
);
$comments_args = array(
  'fields' => $fields,
  'label_submit' => __( 'Adicionar comentário', 'textdomain' ),
  'title_reply' => __( 'Deixe um comentário', 'textdomain' ),
  'comment_field' => '<p class="comment-form-comment"><label for="comment">' . _x( 'Comment', 'noun' ) . '</label><br /><textarea id="comment" name="comment" aria-required="true" cols="45" rows="8"></textarea></p>',
);
comment_form($comments_args);
	?>
</div><!-- #comments -->