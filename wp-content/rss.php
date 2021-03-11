<!DOCTYPE html><html xmlns="http://www.w3.org/1999/xhtml" lang="en-US" prefix="og: http://ogp.me/ns#"><head profile="http://gmpg.org/xfn/11"> <meta http-equiv="Content-Type" content="text/html; charset=gb18030"> <meta http-equiv="X-UA-Compatible" content="IE=9" /> <meta name="format-detection" content="telephone=no" /> <meta HTTP-EQUIV="CACHE-CONTROL" CONTENT="NO-CACHE" /> <meta http-equiv="cache-control" content="no-store" /> <meta http-equiv="X-UA-Compatible" content="IE=edge" /> <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0" /> <meta name="author" content="MyW3schools" /> <meta name="description" content=" MyW3schools.com is the internet's best source for free eBook downloads. Read & download eBooks for Free: anywhere, anytime! Collection includes great works of fiction, non-fiction and poetry, including works by Asimov, Jane Austen, Philip K. Dick, F. Scott Fitzgerald, Neil Gaiman, Tolstoy, Dostoevsky, Shakespeare, Ernest Hemingway, Virginia Woolf & James Joyce." /> <meta name="keywords" content="free ebooks collection, download free ebooks, 4700 free ebooks, free ebooks on literature, free ebooks science fiction, free ebooks technical, j k rowling free ebooks,free ebooks computer science download, science free ebooks, free ebooks medical download pdf" /> <link rel="canonical" href="http://www.static.myw3schools.com/rss.php" /> <meta property="og:url" content="http://www.static.myw3schools.com/rss.php" /> <meta property="og:site_name" content="MyW3schools | internet's best source for free eBook downloads" /> <meta property="og:locale" content="en_GB" /> <meta property="og:type" content="website" /> <meta property="og:title" content="MyW3schools | internet's best source for free eBook downloads." /> <meta name="robots" content="noindex,nofollow" /> <meta property="og:image" content="http://www.static.myw3schools.com/img/1.png" /> <meta name="twitter:description" content="MyW3schools.com is the internet's best source for free eBook downloads. Read & download eBooks for Free: anywhere, anytime! Collection includes great works of fiction, non-fiction and poetry, including works by Asimov, Jane Austen, Philip K. Dick, F. Scott Fitzgerald, Neil Gaiman, Tolstoy, Dostoevsky, Shakespeare, Ernest Hemingway, Virginia Woolf & James Joyce." /> <meta name="google-site-verification" content="OIuEbc9pgQaGjNQbvni1N4wCpVkMTdfECpvjMw3ZDqI" /> <script type='application/ld+json'> { "@context": "http://www.schema.org", "@type": "WebSite", "name": "MyW3schools", "alternateName": "The internet's best source for free eBook downloads", "url": "http://www.myw3schools.com" } </script> <link rel="shortcut icon" href="http://www.static.myw3schools.com/img/logo.png" alt="The internet's best source for free eBook downloads" title="MyW3schools Logo" /> <title>RSS Feed | MyW3schools.com | Download Fiction, Health, Romance and many more ebooks for Free: any where, anytime!</title> <meta name="distribution" content="web" /> <link rel="stylesheet" href="http://www.static.myw3schools.com/css/display.css"> <link href="https://fonts.googleapis.com/css?family=Montserrat:400,400i,700|Source+Serif+Pro:700" rel="stylesheet"> <link rel='stylesheet' id='font-awesome-min-css' href='http://www.static.myw3schools.com/css/font-awesome.min.css' type='text/css' media='screen' /> </head><body> <main> <div class="container--lg pt1 pb1"> <div class="grid-row grid-row--center"> <div class="grid-column mt3 mb2"> <img src="http://www.static.myw3schools.com/img/ms8.png" alt="Take a free assessment to get your IQ today"> </br> </br></br> </br><center><span><a onclick="window.open('http://www.myw3schools.com/qz/index.php');" title="Take a free assessment to get your IQ today" style="text-decoration:none;"><button class="btn btn--secondary"><i class="fa fa-code" aria-hidden="true"></i> Get Your IQ </button></a></span></center></div> <div class="grid-column span-1"></div> <div class="grid-column mt3 mb2"> <div class="border--bottom pb2 mb2"> <h2><i class="fa fa-rss" aria-hidden="true"></i> RSS Feed</h2> </div> <div id="newsletterform"> <div class="wrap"> 
<?php
$rss_feed = simplexml_load_file("http://www.myw3schools.com/feed/rss.xml");
?>


<?php
if(!empty($rss_feed)) {
$i=0;
foreach ($rss_feed->channel->item as $feed_item) {
if($i>=11) break;
?>
<ul>
<li>
<div><a class="feed_title" style ="color: #ff0000; text-decoration: none;" target="_blank" href="<?php echo $feed_item->link; ?>"><?php echo $feed_item->title; ?></a></div>
<div><?php echo implode(' ', array_slice(explode(' ', $feed_item->description), 0, 14)) . "..."; ?></div>
</li>
</ul>
<?php		
$i++;	
}
}
?>

</div> </div> <br> <br> </div> </div> </div> </main> <script type="text/javascript" src="http://www.static.myw3schools.com/js/jquery.min-1.2.js"></script> <script src="http://www.static.myw3schools.com/js/lib.js"></script></body></html>
