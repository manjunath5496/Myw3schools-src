<?php
 
function format_comments($comments) {
    $html = array();
    $root_id = 0;
    foreach ($comments as $comment)
        $children[$comment['parent_id']][] = $comment;
 

    $loop = !empty($children[$root_id]);
 

    $parent = $root_id;
    $parent_stack = array();
 

    $html[] = '<ul class="comment">';
 
    while ($loop && ( ( $option = each($children[$parent]) ) || ( $parent > $root_id ) )) {
        if ($option === false) {
            $parent = array_pop($parent_stack);
 

            $html[] = str_repeat("\t", ( count($parent_stack) + 1 ) * 2) . '</ul>';
            $html[] = str_repeat("\t", ( count($parent_stack) + 1 ) * 2 - 1) . '</li>';
        } elseif (!empty($children[$option['value']['comment_id']])) {
            $tab = str_repeat("\t", ( count($parent_stack) + 1 ) * 2 - 1);
            $keep_track_depth = count($parent_stack);
            if ($keep_track_depth <= 3) {
                $reply_link = '%1$s%1$s<a href="#" class="reply_button" style="color:red;" id="%2$s">REPLY</a><br/>%1$s';
            } else {
                $reply_link = '';
            }
            $name = strlen($option['value']['created_by']) ? $option['value']['created_by'] : 'anonymous_user';
           
            $html[] = sprintf(
                    '%1$s<li id="li_comment_%2$s" data-depth-level="' . $keep_track_depth . '">' .
                    '%1$s%1$s<div><span class="commenter">%3$s</span>&nbsp;' .
                    '<span class="comment_date">%5$s</span></div>' .
                    '%1$s%1$s<div style="margin-top:4px;">%4$s</div>' .
                    $reply_link . '</li>', $tab, 
                    $option['value']['comment_id'], 
                   '<img src="http://www.static.myw3schools.com/assets/comment.png" alt="Smiley face" width="125" height="60">&nbsp;&nbsp;' . $name, 
                    $option['value']['comment_text'], 
                    ', ' . $option['value']['created_date'] 
            );
			
            $html[] = $tab . "\t" . '<ul class="comment">';
 
            array_push($parent_stack, $option['value']['parent_id']);
            $parent = $option['value']['comment_id'];
        } else {
            $name = strlen($option['value']['created_by']) ? $option['value']['created_by'] : 'anonymous user';
            $keep_track_depth = count($parent_stack);
            if ($keep_track_depth <= 3) {
                $reply_link = '%1$s%1$s<a href="#" class="reply_button" style="color:red;" id="%2$s">REPLY</a><br/>%1$s';
            } else {
                $reply_link = '';
            }
 
            $html[] = sprintf(
                    '%1$s<li id="li_comment_%2$s" data-depth-level="' . $keep_track_depth . '">' .
                    '%1$s%1$s<div><span class="commenter">%3$s</span>&nbsp;' .
                    '<span class="comment_date">%5$s</span></div>' .
                    '%1$s%1$s<div style="margin-top:4px;margin-right: 15px;text-align: justify;">%4$s</div>' .
                    $reply_link . '</li>', str_repeat("\t", ( count($parent_stack) + 1 ) * 2 - 1), 
                    $option['value']['comment_id'], 
                   '<img src="http://www.static.myw3schools.com/assets/comment.png" alt="Smiley face" width="125" height="60">&nbsp;&nbsp;'. $name , 
                    $option['value']['comment_text'], 
                    ', ' . $option['value']['created_date'] 
            );
        }
    }
 
    $html[] = '</ul>';
    return implode("\r\n", $html);
}
 
?>