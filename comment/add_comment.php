<?php
 
require("config.php");
require("helper.php");
 
if (isset($_POST)) {
    $parent_id = ($_POST['reply_id'] == NULL || $_POST['reply_id'] == '') ? 0 : $_POST['reply_id'];
    $email = $_POST['comment_email'];
    $name = $_POST['comment_name'];
    $web = $_POST['comment_web'];
    $comment_text = $_POST['comment_text'];
    $depth_level = $_POST['depth_level'];
    $sql = "INSERT INTO comment(comment_text, parent_id, ip_address, email_address, web_address, created_by) VALUES('$comment_text', $parent_id, '" . $_SERVER['REMOTE_ADDR'] . "', '$email', '$web', '$name')";
    $query = dbQuery($sql);
    $inserted_id = dbInsertId();
    $sql = "SELECT * FROM comment WHERE comment_id=" . $inserted_id;
    $results = dbQuery($sql);
    if ($results) {
        while ($row = dbFetchAssoc($results)) {
            if ($depth_level < 3) {
                $reply_link = "<a href=\"#\" class=\"reply_button\" id=\"{$row['comment_id']}\">REPLY</a><br/>";
            } else {
                $reply_link = '';
            }
            $depth = $depth_level + 1;
            $name = strlen($row['created_by']) ? $row['created_by'] : 'anonymous user';
            echo "<li id=\"li_comment_{$row['comment_id']}\" data-depth-level=\"{$depth}\">" .
            "<div><img src='http://www.static.myw3schools.com/assets/com.png' alt='Smiley face' width='125' height='60' >&nbsp;&nbsp;<span class=\"commenter\">{$name}</span>&nbsp;<span class=\"comment_date\">,  {$row['created_date']}</span></div>" .
            "<div style=\"margin-top:4px;\">{$row['comment_text']}</div>" .
            $reply_link . "</li>";
        }
        echo '<div class="error"><img src="http://www.static.myw3schools.com/assets/vicon.png" alt="Smiley face" width="21" height="19">&nbsp; <span style ="color:green;">Comment posted Sucessfully.</span></div>';
    } else {
        echo '<div class="error">Error in adding comment</div>';
    }
} else {
    echo '<div class="error">Please enter required fields</div>';
}
 ?>
