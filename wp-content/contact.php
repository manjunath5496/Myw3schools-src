

<?php
if(isset($_POST['submit'])) 
{

$message=
'Name:	'.$_POST['fullname'].'<br />
Subject:	'.$_POST['subject'].'<br />
Phone Number:	'.$_POST['phone'].'<br />
Email:	'.$_POST['emailid'].'<br />
Message: '.$_POST['comments'].'
';
    require "../phpmailer/class.phpmailer.php"; //include phpmailer class
      
    // Instantiate Class  
    $mail = new PHPMailer();  
      
    // Set up SMTP  
    $mail->IsSMTP();                // Sets up a SMTP connection  
    $mail->SMTPAuth = true;         // Connection with the SMTP does require authorization    
    $mail->SMTPSecure = "ssl";      // Connect using a TLS connection  
    $mail->Host = "mail.myw3schools.com";  //Gmail SMTP server address
    $mail->Port = 465;  //Gmail SMTP port
    $mail->Encoding = '7bit';
    
    // Authentication  
    $mail->Username   = "info@myw3schools.com"; // Your full Gmail address
    $mail->Password   = "maczen5496"; // Your Gmail password
      
    // Compose
    $mail->SetFrom($_POST['emailid'], $_POST['fullname']);
    $mail->AddReplyTo($_POST['emailid'], $_POST['fullname']);
    $mail->Subject = "Enquiry";      // Subject (which isn't required)  
    $mail->MsgHTML($message);
 
    // Send To 

    $mail->AddAddress("info@myw3schools.com", "MyW3schools"); // Where to send it - Recipient
  if($mail->Send()){
  
 echo '<script>window.location.href = "1.html";</script>';
}else{
    
	
	 echo '<script>window.location.href = "2.html";</script>';

	
}     
	unset($mail);

}

?>

<!DOCTYPE html><html xmlns="http://www.w3.org/1999/xhtml" lang="en-US" prefix="og: http://ogp.me/ns#"><head profile="http://gmpg.org/xfn/11"> <meta http-equiv="Content-Type" content="text/html; charset=gb18030"> <meta http-equiv="X-UA-Compatible" content="IE=9" /> <meta name="format-detection" content="telephone=no" /> <meta HTTP-EQUIV="CACHE-CONTROL" CONTENT="NO-CACHE" /> <meta http-equiv="cache-control" content="no-store" /> <meta http-equiv="X-UA-Compatible" content="IE=edge" /> <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0" /> <meta name="author" content="MyW3schools" /> <meta name="description" content=" MyW3schools.com is the internet's best source for free eBook downloads. Read & download eBooks for Free: anywhere, anytime! Collection includes great works of fiction, non-fiction and poetry, including works by Asimov, Jane Austen, Philip K. Dick, F. Scott Fitzgerald, Neil Gaiman, Tolstoy, Dostoevsky, Shakespeare, Ernest Hemingway, Virginia Woolf & James Joyce." /> <meta name="keywords" content="free ebooks collection, download free ebooks, 4700 free ebooks, free ebooks on literature, free ebooks science fiction, free ebooks technical, j k rowling free ebooks,free ebooks computer science download, science free ebooks, free ebooks medical download pdf" /> <link rel="canonical" href="http://www.static.myw3schools.com/contact.php" /> <meta property="og:url" content="http://www.static.myw3schools.com/contact.php" /> <meta property="og:site_name" content="MyW3schools | internet's best source for free eBook downloads" /> <meta property="og:locale" content="en_GB" /> <meta property="og:type" content="website" /> <meta property="og:title" content="MyW3schools | internet's best source for free eBook downloads." /> <meta name="robots" content="noindex,nofollow" /> <meta property="og:image" content="http://www.static.myw3schools.com/img/1.png" /> <meta name="twitter:description" content="MyW3schools.com is the internet's best source for free eBook downloads. Read & download eBooks for Free: anywhere, anytime! Collection includes great works of fiction, non-fiction and poetry, including works by Asimov, Jane Austen, Philip K. Dick, F. Scott Fitzgerald, Neil Gaiman, Tolstoy, Dostoevsky, Shakespeare, Ernest Hemingway, Virginia Woolf & James Joyce." /> <meta name="google-site-verification" content="OIuEbc9pgQaGjNQbvni1N4wCpVkMTdfECpvjMw3ZDqI" /> <script type='application/ld+json'> { "@context": "http://www.schema.org", "@type": "WebSite", "name": "MyW3schools", "alternateName": "The internet's best source for free eBook downloads", "url": "http://www.myw3schools.com" } </script> <style>* { box-sizing: border-box;}input[type=text], select, textarea { width: 100%; padding: 12px; border: 1px solid #ccc; border-radius: 4px; resize: vertical;}</style><link rel="shortcut icon" href="http://www.static.myw3schools.com/img/logo.png" alt="The internet's best source for free eBook downloads" title="MyW3schools Logo" /> <title>Contact Us | MyW3schools.com | Download Fiction, Health, Romance and many more ebooks for Free: any where, anytime!</title> <meta name="distribution" content="web" /> <link rel="stylesheet" href="http://www.static.myw3schools.com/css/display.css"> <link href="http://www.static.myw3schools.com/css/cdex_3.css" rel="stylesheet"> <link rel='stylesheet' id='font-awesome-min-css' href='http://www.static.myw3schools.com/css/font-awesome.min.css' type='text/css' media='screen' /> </head><body> <main> <div class="container--lg pt1 pb1"> <div class="grid-row grid-row--center"> <div class="grid-column mt3 mb2"> <img src="http://www.static.myw3schools.com/img/ms8.png" alt="Empower Your Jewish Journey"> </div> <div class="grid-column span-1"></div> <div class="grid-column mt3 mb2"> <div class="border--bottom pb2 mb2"> <h2><i class="fa fa-industry" aria-hidden="true"></i> Contact Us</h2> </br><p> If you have a question or a comment, please email us at <strong>manjunath5496@gmail.com</strong> or use the form below to contact us. </p> </div> <div id="newsletterform"> <div class="wrap"> <body onload="qikenq.reset();"> <div class="contacten" name="quick_enq_side"> <div class="panel panel-default"> <div class="panel-body"> <form action="#" method="post" name="qikenq_side" id="qikenq"> <input type="text" style="outline: 0" id="email21" name="fullname" placeholder="Name *" title="Please fill in your name" autocomplete="off" spellcheck="false" required> </br></br><input type="text" style="outline: 0" id="email22" name="emailid" placeholder="Email *" title="Please fill in your email address" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$" autocomplete="off" spellcheck="false" required> </br></br><input type="text" style="outline: 0" id="email23" name="subject" placeholder="Subject *" title="Please fill in your subject" autocomplete="off" spellcheck="false" required> </br></br><input type="text" style="outline: 0" id="email24" name="phone" placeholder="Phone Number *" title="Please fill in your phone number" autocomplete="off" spellcheck="false" pattern="[0-9]+" required> </br></br><textarea id="email25" style="outline: 0" rows="2" name="comments" placeholder="Your Message *" title="Please fill in your message" autocomplete="off" spellcheck="false" required></textarea> </br> </br><input name="submit" class="btn btn-outline mr-4 mt-2" type="submit" value="Submit" /> <input type="reset" class="btn btn-outline mr-4 mt-2" value="Reset" /> </form> </div> </div> </div> </body> </div> </div> <br> <br> </div> </div> </div> </main><center></br><script type="text/javascript" src="http://www.static.myw3schools.com/js/jquery.min-1.2.js"></script> <script src="http://www.static.myw3schools.com/js/lib.js"></script></body></html>