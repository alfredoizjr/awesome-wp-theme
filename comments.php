<?php if (have_comments()) : ?>
	<h4 id="comments"><?php comments_number('No comments', 'One Comment', '%comments'); ?></h4>
	<ul class="comment-list">
		<?php wp_list_comments('callback=aw_comments'); ?>
	</ul>
<?php endif; ?>
<?php
$comment_args = array(
	'label_submit' 			=> 'Submit Comment',
	'title_reply'  			=> 'Post a comment',
	'comment_notes_after' 	=> ''
);

comment_form($comment_args);

paginate_comments_links(array(
    'screen_reader_text'=> __('Pagination','aw-plus-awesome-blog'),
    'prev_text'=> __('Previous','aw-plus-awesome-blog'),
    'next_text'=> __('Next','aw-plus-awesome-blog'),
));
