<div class="pt-5">

        <h3 class="mb-5"><?php echo get_comments_number(); ?> <?php echo esc_html__('Comments', 'append'); ?></h3>
        <?php 
        wp_list_comments(array(
            'callback' => 'proshoot_single_comment_markup'
        ));

        the_comments_navigation();
        ?>
        <div class="comment-form-wrap pt-5">
            <?php
            comment_form( );
            ?>
        </div>
    
</div>
