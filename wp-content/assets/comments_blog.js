$(function() {
    $("#cancel-comment-reply-link").hide();
    $(".reply_button").live('click', function(event) {
        event.preventDefault();
        var id = $(this).attr("id");
        if ($("#li_comment_" + id).find('ul').size() > 0) {
            $("#li_comment_" + id + " ul:first").prepend($("#comment_form_wrapper"));
        } else {
            $("#li_comment_" + id).append($("#comment_form_wrapper"));
        }
        var depth_level = $('#li_comment_' + id).data('depth-level');
        $("#reply_id").attr("value", id);
        $("#depth_level").attr("value", depth_level);
        $("#cancel-comment-reply-link").show();
    });
 
    $("#cancel-comment-reply-link").bind("click", function(event) {
        event.preventDefault();
        $("#reply_id").attr("value", "");
        $("#comment_wrapper").prepend($("#comment_form_wrapper"));
        $(this).hide();
    });
 
    $("#comment_form").bind("submit", function(event) {
        event.preventDefault();
        if ($("#comment_name").val() == "")
        {
            alert("Please enter your name");
            return false;
        }
        if ($("#comment_email").val() == "")
        {
            alert("Please enter your email");
            return false;
        }
        var regex_email = /^([A-Za-z0-9_\-\.])+\@([A-Za-z0-9_\-\.])+\.([A-Za-z]{2,4})$/;
        if (regex_email.test($("#comment_email").val()) == false) {
            alert('Invalid Email Address');
            return false;
        }
        var regex_web = /^((ftp|https?):\/\/)?(www\.)?[a-z0-9\-\.]{3,}\.[a-z]{2,3}$/;
        if ($("#comment_web").val() != "" && regex_web.test($("#comment_web").val()) == false) {
            alert('Invalid Website Address');
            return false;
        }
        if ($("#comment_text").val() == "")
        {
            alert("Please enter your comment");
            return false;
        }
        $.ajax({
            type: "POST",
            //async: false,
            url: "add_comment.php",
            data: $('#comment_form').serialize(),
            dataType: "html",
            cache: false,
            beforeSend: function() {
                $('#comment_wrapper').block({
                    message: 'Please wait....',
                    css: {
                        border: 'none',
                        padding: '15px',
                        backgroundColor: '#ccc',
                        '-webkit-border-radius': '10px',
                        '-moz-border-radius': '10px'
                    },
                    overlayCSS: {
                        backgroundColor: '#ffe'
                    }
                });
            },
            success: function(comment) {
                var reply_id = $("#reply_id").val();
                if (reply_id == "") {
                    $("#comment_wrapper ul:first").prepend(comment);
                }
                else {
                    if ($("#li_comment_" + reply_id).find('ul').size() > 0) {
                        $("#li_comment_" + reply_id + " ul:first").prepend(comment);
                    }
                    else {
                        $("#li_comment_" + reply_id).append('<ul class="comment">' + comment + '</ul>');
                    }
                }
                $("#comment_name").attr("value", "");
                $("#comment_email").attr("value", "");
                $("#comment_web").attr("value", "");
                $("#comment_text").attr("value", "");
                $("#reply_id").attr("value", "");
                $("#cancel-comment-reply-link").hide();
                $("#comment_wrapper").prepend($("#comment_form_wrapper"));
                $('#comment_wrapper').unblock();
            },
            error: function(jqXHR, textStatus, errorThrown) {
                //console.log(textStatus, errorThrown);
                alert(textStatus + " " + errorThrown);
            }
        });
    });
});