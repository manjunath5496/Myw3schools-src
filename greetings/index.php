<?php 
session_start(); 

if(!isset($_SESSION['UserData']['Username'])){
	header("location:../login");
	exit;
}
?>

<?php

require("libs/config.php");
if (isset($_POST["mode"]) && $_POST["mode"] == "send") {
    $smode = db_prepare_input($_POST["smode"]);
    $subject = db_prepare_input($_POST["subject"]);
    $ecard = db_prepare_input($_POST["ecard"]);
    $msg = db_prepare_input($_POST["msg"]);
    $subscribers = $_POST["subscribers"];
    $emailArr = array();

    if ($smode == 2) {
        $s = " AND status = 'A' ";
    } else if ($smode == 3) {
        $s = " AND status = 'I' ";
    }

    if ($smode != 4) {
        $sql = "SELECT * FROM " . TABLE_SUBSCRIBERS . " WHERE 1 $s ORDER BY email_id ASC";
        try {
            $stmt = $DB->prepare($sql);
            $stmt->execute();
            $subResults = $stmt->fetchAll();
        } catch (Exception $ex) {
            echo errorMessage($ex->getMessage());
        }

        foreach ($subResults as $rs) {
            $emailArr[] = stripslashes(($rs["email_id"]));
        }

        $emails = implode(",", $emailArr);
    }

    if (is_array($subscribers) && count($subscribers) > 0) {
        $emailArr = $subscribers;
    }



    $message = '<html><body>';
    $message .= '';
    $message .= '<table style="border-color: #666;width:600px;" cellpadding="10">';
    $message .= '<tr style="background: #eee;"><td><h1><a href="http://www.myw3schools.com/" target="_blank"><img src="http://www.static.myw3schools.com/img/logo.png" alt="myw3schools.com" /></a></h1></td></tr>';
    $message .= "<tr style='background: #eee;'><td>" . $msg . "</td></tr>";
    $message .= "</table>";
    $message .= '<table rules="all" width="600px">';
    $message .= '<tr><td><br><br><hr>This mail is send via <a href="http://www.myw3schools.com/" target="_blank"> www.myw3schools.com/</a>. <b>Please do not reply to this mail.</b></td></tr>';

    $message .= "</table>";
    $message .= "</body></html>";


    require_once '../phpmailer/class.phpmailer.php';
    // defaults to using php "mail()"; 
    // the true param means it will throw exceptions on errors, 
    // which we need to catch
    $mail = new PHPMailer(true);
 $mail->IsSMTP(); 
    try {
        
 $mail->SMTPDebug = 0;                     // enables SMTP debug information (for testing)
        $mail->SMTPAuth = true;                  // enable SMTP authentication
        $mail->SMTPSecure = "ssl";                 // sets the prefix to the servier
        $mail->Host = "mail.myw3schools.com";      // sets GMAIL as the SMTP server
        $mail->Port = 465;                   // set the SMTP port for the GMAIL server

        $mail->Username = 'info@myw3schools.com';  // GMAIL username
        $mail->Password = 'maczen5496';            // GMAIL password must be in single quotes



	   // add your email address and name
        $mail->SetFrom('info@myw3schools.com', 'MyW3schools');

        foreach ($emailArr as $email) {
            $mail->AddAddress($email);
        }

        $mail->Subject = $subject . ' - www.myw3schools.com ';

        $mail->MsgHTML($message);
        $mail->AddAttachment($ecard);      // attachment

        $mail->Send();
        simple_redirect("5.php");
    } catch (phpmailerException $e) {
        #echo $e->errorMessage(); //Pretty error messages from PHPMailer
        simple_redirect("6.php");
    } catch (Exception $e) {
        #echo $e->getMessage(); //Boring error messages from anything else!
        simple_redirect("5.php");
    }
}
?>

<!DOCTYPE html><html xmlns="http://www.w3.org/1999/xhtml" lang="en-US" prefix="og: http://ogp.me/ns#"><head profile="http://gmpg.org/xfn/11"> <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" /> <meta http-equiv="X-UA-Compatible" content="IE=9" /> <meta name="format-detection" content="telephone=no" /> <meta HTTP-EQUIV="CACHE-CONTROL" CONTENT="NO-CACHE" /> <meta http-equiv="cache-control" content="no-store" /> <meta http-equiv="X-UA-Compatible" content="IE=edge" /> <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0" /> <meta name="author" content="MyW3schools" /> <meta name="description" content=" MyW3schools.com is the internet's best source for free eBook downloads. Read & download eBooks for Free: any where, anytime! Collection includes great works of fiction, non-fiction and poetry, including works by Asimov, Jane Austen, Philip K. Dick, F. Scott Fitzgerald, Neil Gaiman, Tolstoy, Dostoevsky, Shakespeare, Ernest Hemingway, Virginia Woolf & James Joyce." /> <meta name="keywords" content="free ebooks collection, download free ebooks, 4700 free ebooks, free ebooks on literature, free ebooks science fiction, free ebooks technical, j k rowling free ebooks,free ebooks computer science download, science free ebooks, free ebooks medical download pdf" /> <link rel="canonical" href="http://www.myw3schools.com/greetings/index.php" /> <meta property="og:url" content="http://www.myw3schools.com/greetings/index.php" /> <meta property="og:site_name" content="MyW3schools | internet's best source for free eBook downloads" /> <meta property="og:locale" content="en_GB" /> <meta property="og:type" content="website" /> <meta property="og:title" content="MyW3schools | internet's best source for free eBook downloads." /> <meta name="robots" content="noindex,nofollow" /> <meta property="og:image" content="http://www.static.myw3schools.com/img/1.png" /> <meta name="twitter:description" content="MyW3schools.com is the internet's best source for free eBook downloads. Read & download eBooks for Free: any where, anytime! Collection includes great works of fiction, non-fiction and poetry, including works by Asimov, Jane Austen, Philip K. Dick, F. Scott Fitzgerald, Neil Gaiman, Tolstoy, Dostoevsky, Shakespeare, Ernest Hemingway, Virginia Woolf & James Joyce." /> <meta name="google-site-verification" content="OIuEbc9pgQaGjNQbvni1N4wCpVkMTdfECpvjMw3ZDqI" /> <script type='application/ld+json'> { "@context": "http://www.schema.org", "@type": "WebSite", "name": "MyW3schools", "alternateName": "The internet's best source for free eBook downloads", "url": "http://www.myw3schools.com" } </script> <link rel="shortcut icon" href="http://www.static.myw3schools.com/img/logo.png" alt="The internet's best source for free eBook downloads" title="MyW3schools Logo" /> <title> Send Greetings Cards | MyW3schools.com | Download Fiction, Health, Romance and many more ebooks for Free: any where, anytime!</title> <meta name="distribution" content="web" /> <link rel='stylesheet' id='google-http://www.static.myw3schools.com/css/fonts-css' href='http://www.static.myw3schools.com/css/font.css' type='text/css' media='all' /> <link rel='stylesheet' id='font-awesome-min-css' href='http://www.static.myw3schools.com/css/font-awesome.min.css' type='text/css' media='screen' /> <link rel='stylesheet' id='transform-css' href='http://www.static.myw3schools.com/css/transform.css' type='text/css' media='screen' /> <link rel='stylesheet' id='input004-css' href='http://www.static.myw3schools.com/css/input004.css' type='text/css' media='screen' /> <script type="text/javascript" src="http://www.static.myw3schools.com/js/output.min.js"></script><script type="text/javascript" src="../admin/ckeditor/ckeditor.js"></script>
<script type="text/javascript">
            $(document).ready(function() {
               

                // add multiple select / deselect functionality
                $("#all").click(function() {

                    var checkAll = $("#all").prop('checked');
                    if (checkAll) {
                        $(".subscheked").prop("checked", true);
                    } else {
                        $(".subscheked").prop("checked", false);
                    }

                });

                // if all checkbox are selected, check the selectall checkbox
                // and viceversa
                $(".subscheked").click(function() {

                    if ($(".subscheked").length == $(".subscheked:checked").length) {
                        $("#all").attr("checked", "checked");
                    } else {
                        $("#all").removeAttr("checked");
                    }

                });

            });

            function cardPreview(sel) {
                var card_url = sel.options[sel.selectedIndex].value;
                if (card_url != "") {
                    var str = '<a href="' + card_url + '" target="_blank" title="click too see larger image"><img src="' + card_url + '" alt="" width="435"  /></a>';
                    $("#card").html(str);
                } else {
                    $("#card").html("");
                }
            }

            function subscriberSelect(sel) {
                var v = sel.options[sel.selectedIndex].value;

                if (v == 4) {
                    $("#customUser").show();
                } else {
                    $("#customUser").hide();
                }

            }

            function validateForm() {
                var subject = $.trim($("#subject").val());
                var smode = $.trim($("#smode").val());
                var ecard = $.trim($("#ecard").val());
                var msg = $.trim($("#msg").val());

                if (smode == 4) {
                    if ($(".subscheked:checked").length < 1) {

                        alert("You must select atleast one email.");
                        return false;
                    }
                } else if (smode == "") {
                    alert("Select the subscriber to send.");
                    return false;
                }

                if (subject == "") {
                    $("#subject").focus();
                    alert("Enter subject line.");
                    return false;
                } else if (subject.length <= 4) {
                    $("#subject").focus();
                    alert("Subject line must be atleast 5 character.");
                    return false;
                }

                if (ecard == "") {
                    alert("Select a card to send.");
                    $("#ecard").focus();
                    return false;
                }

              

                return true;
            }

        </script> <style>.file-upload__label { display: block; padding: 1em 2em; color: #fff; background: #428bca; border-radius: .4em; transition: background .3s; &: hover { cursor: pointer; background: #000; }: ;}.file-upload__input { position: absolute; left: 0; top: 0; right: 0; bottom: 0; font-size: 1; width: 0; height: 100%; opacity: 0;}input[type="text"]::placeholder {text-align: left;}input[type="text"]:-ms-input-placeholder {text-align: left;}input[type="text"]::-ms-input-placeholder {text-align: left;}.file-upload { position: relative; display: inline-block;}.shaded { color: inherit; background-color: #f5ecdb;}.boxed { margin-top: 1em; margin-bottom: 1em; border: 1px solid #eddab7; padding: 1ex 1em;}</style></head><body itemtype="http://schema.org/WebPage" itemscope="itemscope" class="page-template-default page page-id-497 page-child parent-pageid-490 u-design-responsive-on u-design-menu-auto-arrows-on u-design-menu-drop-shadows-on "> <div id="cover-1"> <div class="clear"></div> <header id="" class="top-segment trans-content-white" style="background-color:white; height:45px"> <div id="" class="bag over-all-nav"> <div class="leftnavi navbar"> <div class="nav-collapse"> <ul class="nav"> <li class="dropdown active"> <a class="pointer" class="dropdown-knob pointer" style=" text-decoration:none; font-weight: bold; color:gray; font-size:13px;margin-top: -10px;"><span class="bari"><i class="fa fa-bars"></i></span> <span class="stripnav dark-xl">&nbsp;&nbsp;</span></a> </br> <ul class="dropdown-menu" role="menu"> <li> <a class="pointer" href="../mail" title="Email">Email</a> </li> <li><a class="pointer" href="../email-marketing" title="Email Marketing">Email Marketing</a></li> <li> <a class="pointer" href="../bulk_mail/index" title="Bulk Email">Bulk Email</a> </li> </ul> </li> </ul> </div> </div> <nav id="rightnav " class="position-navi"> <div class="user-nav"> <a class="pointer" style="color:gray; font-weight: bold; font-size:12px;" href="../home" title="Home">HOME</a> &nbsp; &nbsp; <a class="pointer" href="../admin/index" title="blog"><span style="padding:5px 10px; text-decoration:none; background-color:transparent;font-weight: bold; border:1px solid white; color:gray; font-size:12px;">BLOG</span> </a> &nbsp; &nbsp; <a class="pointer" href="../logout" title="Logout"><span style="padding:5px 10px; text-decoration:none; background-color:#3A5580; font-weight: bold; border:1px solid #3A5580; color:white; font-size:12px;">LOGOUT</span> </a> &nbsp; &nbsp;</div> </nav> </div> </header> <div id="former-text"> <div style="text-align:right"> <canvas id="canvas" width="200" height="200"></canvas>
<script>

                    var canvas = document.getElementById("canvas");

                    var ctx = canvas.getContext("2d");

                    var radius = 100;

                    ctx.translate(100, 100);

                    radius = radius * 0.9;

                    setInterval(drawClock, 1000);



                    function drawClock() {

                        drawFace(ctx, radius);

                        drawNumbers(ctx, radius);

                        drawTime(ctx, radius);

                    }



                    function drawFace(ctx, radius) {

                        var grad;

                        ctx.beginPath();

                        ctx.arc(0, 0, radius, 0, 2 * Math.PI);

                        ctx.fillStyle = 'white';

                        ctx.fill();

                        grad = ctx.createRadialGradient(0, 0, radius * 0.95, 0, 0, radius * 1.05);

                        grad.addColorStop(0, '#67D2C8');

                        grad.addColorStop(0.5, '#67D2C8');

                        grad.addColorStop(1, 'white');

                        ctx.strokeStyle = grad;

                        ctx.lineWidth = radius * 0.1;

                        ctx.stroke();

                        ctx.beginPath();

                        ctx.arc(0, 0, radius * 0.1, 0, 2 * Math.PI);

                        ctx.fillStyle = 'black';

                        ctx.fill();

                    }



                    function drawNumbers(ctx, radius) {

                        var ang;

                        var num;

                        ctx.font = radius * 0.15 + "px arial";

                        ctx.textBaseline = "middle";

                        ctx.textAlign = "center";

                        for (num = 1; num < 13; num++) {

                            ang = num * Math.PI / 6;

                            ctx.rotate(ang);

                            ctx.translate(0, -radius * 0.85);

                            ctx.rotate(-ang);

                            ctx.fillText(num.toString(), 0, 0);

                            ctx.rotate(ang);

                            ctx.translate(0, radius * 0.85);

                            ctx.rotate(-ang);

                        }

                    }



                    function drawTime(ctx, radius) {

                        var now = new Date();

                        var hour = now.getHours();

                        var minute = now.getMinutes();

                        var second = now.getSeconds();

                        hour = hour % 12;

                        hour = (hour * Math.PI / 6) + (minute * Math.PI / (6 * 60)) + (second * Math.PI / (360 * 60));

                        drawHand(ctx, hour, radius * 0.5, radius * 0.07);

                        minute = (minute * Math.PI / 30) + (second * Math.PI / (30 * 60));

                        drawHand(ctx, minute, radius * 0.8, radius * 0.07);

                        second = (second * Math.PI / 30);

                        drawHand(ctx, second, radius * 0.9, radius * 0.02);

                    }



                    function drawHand(ctx, pos, length, width) {

                        ctx.beginPath();

                        ctx.lineWidth = width;

                        ctx.lineCap = "rectangle";

                        ctx.moveTo(0, 1);

                        ctx.rotate(pos);

                        ctx.lineTo(0, -length);

                        ctx.stroke();

                        ctx.rotate(-pos);

                    }

               
 
</script>
</div> </br> </br> <div id="former-text-list" class="bag_24"> <div class="property-content-divider"></div> <div id='before-cont-box-1' class='column_3_of_3 home-cont-box'> <div class='list-text-cover'> <div class="cont_col_1 widget_text secondary_object_category"> <div class="textwidget"> <p style="color:black; text-align:center; font-size:20px;"> </p> <div class="drop-accordion"> <h5 class="panel-title" id="contact-form" style="text-align: left; ">&nbsp;&nbsp;&nbsp;</h5> <div class="contacten" name="quick_enq_side"> <div class="panel panel-default"> <div class="panel-heading"> <h3 class="panel-title" style="font-size:15px;font-weight:bold;"> </h3> </div> <div class="panel-body"> <article> <input type="button" class="knob knob-data" style="font-size:11pt;color:white; background-color:#99CCFF;border:2px solid #99CCFF;" onclick="location.href='admin-area/';" value="Admin" /><form action="" method="post" name="f" onSubmit="return validateForm();"> <input type="hidden" name="mode" value="send" /></br><div class="form-field"> <select class="form-control" name="smode" id="smode" onChange="subscriberSelect(this);"> <option value="">Select Recipients</option> <option value="1">All Recipients</option> <option value="2">Active Recipients Only</option> <option value="3">Inactive Recipients Only</option> <option value="4">Recipient Select</option> </select></div><div id="customUser" style="border:1px solid #000; margin-top:10px;height:200px; background-color: #F7EEEE; color: #3A5580; overflow:scroll;display:none; ">                      

   <?php
                                                        $sql = "SELECT * FROM " . TABLE_SUBSCRIBERS . " WHERE 1 ORDER BY email_id ASC";
                                                        try {
                                                            $stmt = $DB->prepare($sql);
                                                            $stmt->execute();
                                                            $subResults = $stmt->fetchAll();
                                                        } catch (Exception $ex) {
                                                            echo errorMessage($ex->getMessage());
                                                        }

                                                        foreach ($subResults as $rs) {
                                                            ?>
                                                            
                                                  &nbsp;&nbsp;<input type="checkbox" name="subscribers[]" class="subscheked" value="<?php echo stripslashes($rs["email_id"]); ?>" />
                                                                <?php echo stripslashes($rs["email_id"]); ?> </br>
                                                            
                                                            <?php
                                                        }
                                                        ?>
                                                        
                                    <?php                    
                                      if(empty($subResults)) {
                                      
                                      echo '<div class="boxed shaded"> <p style="font-size:15px; text-align:center;color:black"><strong>No Emails Found.</strong> </p> </div>';
                                      }
                                         ?>               
                                                        
                                                        
                                      

                                                </div>


</br><div class="form-field"> <input type="text" class="form-control" name="subject" value="" id="subject" class="textboxes" placeholder="Subject *" autocomplete="off" autocorrect="off" autocapitalize="off" spellcheck="false" required/></div><div class="form-field"> 

<?php
                                                $sql = "SELECT * FROM " . TABLE_CARDS . " WHERE 1 ORDER BY card_id ASC";
                                                try {
                                                    $stmt = $DB->prepare($sql);
                                                    $stmt->execute();
                                                    $cardsResults = $stmt->fetchAll();
                                                } catch (Exception $ex) {
                                                    echo errorMessage($ex->getMessage());
                                                }
                                                ?>


<select class="form-control" name="ecard" id="ecard" onChange="cardPreview(this);">
                                                    <option value="">Select Card</option>
                                                    <?php
                                                    foreach ($cardsResults as $rs) {
                                                        ?>
                                                        <option value="<?php echo stripslashes($rs["card_url"]); ?>"><?php echo stripslashes($rs["card_title"]); ?></option>
                                                        <?php
                                                    }
                                                    ?>
                                                </select>


</div></br><div id="card" style="max-width:435px; max-height:450px; overflow:hidden; margin:0 auto;"></div></br><div class="form-field"> <textarea name="msg" id="editor">Your Message *</textarea> </div> </br> </br> <input type="submit" class="knob knob-data" name="s" style="background-color:#ff7a59;" value="Send"> <input type="reset" class="knob knob-data" onClick="history.go(0)" style="background-color:#3A5580;" value="Reset" /> </form>
<script>

                                            CKEDITOR.replace('editor');



                                            function readURL(input) {

                                                if (input.files && input.files[0]) {

                                                    var reader = new FileReader();

                                                    reader.onload = function(e) {

                                                        $('#preview').attr('src', e.target.result);

                                                    }

                                                    reader.readAsDataURL(input.files[0]);

                                                    $('#preview').show();

                                                }

                                            }

                                            $("#imgInput").change(function() {

                                                readURL(this);

                                            });

                                        
</script></article></br> </br> </div> </div> </div> </br> </br> </div> </div> </div> </div> </div> </br> <center> <img src="http://www.static.myw3schools.com/img/rsb.png" alt="myw3schools.com"> </center> </br> </br> </br> </div> </div> </div> <div class="clear"></div> <div class="property-content-divider"></div> <div class="clear"></div> <div class="clear"></div> <div id="page-footer" style="font-size:12px;background-color:#f1f1f1;"> <div id="footer" class="bag_24 footer-head"> <div itemtype="http://schema.org/WPFooter" itemscope="itemscope"> <div id="footer-content" class="grid_20"> <div> <div class="suggareas"> <p style="text-indent:10px;text-align: justify;-moz-text-align-last: right; text-align-last: left;"> </p> </div> <div class="clear"></div> <div style="font-size:12px;color:gray;text-align:center"> Copyright &#169; 2018 myw3schools. All rights reserved. </div> </div> </div> <div class="tail-to-head"> <a class="pointer" href="#top" style="text-decoration:none"> <font color="gray"> <i class="fa fa-arrow-up" aria-hidden="true"></i> Back to Top</font> </a> </div> </div> </div> </div> <script type='text/javascript' src='http://www.static.myw3schools.com/js/output.min1.js'></script> <script> $(window).bind("pageshow", function(event) { if (event.originalEvent.persisted) { window.location.reload() } }); </script> <script src="http://www.static.myw3schools.com/js/gtag.js?id=UA-131555544-1"></script> <script> window.dataLayer = window.dataLayer || []; function gtag() { dataLayer.push(arguments); } gtag('js', new Date()); gtag('config', 'UA-131555544-1'); </script></body></html> 			