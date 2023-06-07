<div id="comments" class="comments">
    <?php if ( post_password_required() ) : ?>
        <p><?php echo esc_html( 'Post is password protected. Enter the password to view any comments.', 'html5blank' ); ?></p>
    <?php else : ?>

        <?php if ( have_comments() ) : ?>
            <h2><?php comments_number(); ?></h2>
            <ul class="list-none">
                <?php wp_list_comments( array(
                    'type'     => 'comment',
                    'callback' => 'html5blankcomments',
                    'format'   => 'html5', // Set the format to 'html5' to avoid <cite> tags.
                ) ); ?>
            </ul>
        <?php elseif ( ! comments_open() && ! is_page() && post_type_supports( get_post_type(), 'comments' ) ) : ?>
            <p><?php echo esc_html( 'Comments are closed here.', 'html5blank' ); ?></p>
        <?php endif; ?>

        <?php comment_form(); ?>

    <?php endif; ?>
</div>
