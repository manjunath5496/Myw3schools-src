<?php 

session_start();

if(!isset($_SESSION['UserData']['Username'])){

	header("location: ../login");

	exit;

}

?>

<!DOCTYPE html><html xmlns="http://www.w3.org/1999/xhtml" lang="en-US" prefix="og: http://ogp.me/ns#"><head profile="http://gmpg.org/xfn/11"> <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" /> <meta http-equiv="X-UA-Compatible" content="IE=9" /> <meta name="format-detection" content="telephone=no" /> <meta HTTP-EQUIV="CACHE-CONTROL" CONTENT="NO-CACHE" /> <meta http-equiv="cache-control" content="no-store" /> <meta http-equiv="X-UA-Compatible" content="IE=edge" /> <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0" /> <meta name="author" content="MyW3schools" /> <meta name="description" content=" MyW3schools.com is the internet's best source for free eBook downloads. Read & download eBooks for Free: anywhere, anytime! Collection includes great works of fiction, non-fiction and poetry, including works by Asimov, Jane Austen, Philip K. Dick, F. Scott Fitzgerald, Neil Gaiman, Tolstoy, Dostoevsky, Shakespeare, Ernest Hemingway, Virginia Woolf & James Joyce." /> <meta name="keywords" content="free ebooks collection, download free ebooks, 4700 free ebooks, free ebooks on literature, free ebooks science fiction, free ebooks technical, j k rowling free ebooks,free ebooks computer science download, science free ebooks, free ebooks medical download pdf" /> <link rel="canonical" href="http://www.myw3schools.com/pass/index.php" /> <meta property="og:url" content="http://www.myw3schools.com/pass/index.php" /> <meta property="og:site_name" content="MyW3schools | internet's best source for free eBook downloads" /> <meta property="og:locale" content="en_GB" /> <meta property="og:type" content="website" /> <meta property="og:title" content="MyW3schools | internet's best source for free eBook downloads." /> <meta name="robots" content="index,follow" /> <meta property="og:image" content="http://www.static.myw3schools.com/img/1.png" /> <meta name="twitter:description" content="MyW3schools.com is the internet's best source for free eBook downloads. Read & download eBooks for Free: anywhere, anytime! Collection includes great works of fiction, non-fiction and poetry, including works by Asimov, Jane Austen, Philip K. Dick, F. Scott Fitzgerald, Neil Gaiman, Tolstoy, Dostoevsky, Shakespeare, Ernest Hemingway, Virginia Woolf & James Joyce." /> <meta name="google-site-verification" content="OIuEbc9pgQaGjNQbvni1N4wCpVkMTdfECpvjMw3ZDqI" /> <script type='application/ld+json'> { "@context": "http://www.schema.org", "@type": "WebSite", "name": "MyW3schools", "alternateName": "The internet's best source for free eBook downloads", "url": "http://www.myw3schools.com"}</script> <link rel="shortcut icon" href="http://www.static.myw3schools.com/img/logo.png" alt="The internet's best source for free eBook downloads" title="MyW3schools Logo" /> <title>Password Generator | MyW3schools.com | Download Fiction, Health, Romance and many more ebooks for Free: any where, anytime!</title> <meta name="distribution" content="web" /><link rel="stylesheet" href="http://www.static.myw3schools.com/css/display.css"> <link href="https://fonts.googleapis.com/css?family=Montserrat:400,400i,700|Source+Serif+Pro:700" rel="stylesheet"> </head><body> <main> <div class="container--lg pt1 pb1"> <div class="grid-row grid-row--center"> <div class="grid-column mt3 mb2"> <img src="http://www.static.myw3schools.com/img/ms8.png" alt="Empower Your Jewish Journey"> </div> <div class="grid-column span-1"></div> <div class="grid-column mt3 mb2"> <div class="border--bottom pb2 mb2"> <h2> Password Generator </h2> </div> <link rel='stylesheet' id='style0236-css' href='http://www.static.myw3schools.com/css/style0236.css' type='text/css' media='screen' /><script src='jquery.js'></script><script type='text/javascript'>
var countselect='';
var $lcl,$ucl,$nl,$sl=0;
	 $(document).ready(function(){
	 var sds = document.getElementById("dum");
  
     var sdss = document.getElementById("dumdiv");
       
	 $('.ckbox').click(function() {
		  $ckidd=$(this).attr('id');
		  if($(this).attr("checked")==true)
		  {
			   $("#"+$ckidd).val($ckidd);
		  }
		  else
		  {
			   $("#"+$ckidd).val(0)
			   if ($ckidd=="lowlen") {$lcl=0; }
			   if ($ckidd=="uplen") {$ucl=0;}
			   if ($ckidd=="nolen") {$nl=0;}
			   if ($ckidd=="symlen") {$sl=0;}
		  }	
	 });	
});
function submitt()
{
	 var chkval = [];
	 $.each($("input:checked"), function(){            
		   chkval.push($(this).val());
	 });
	 var countChecked = function() {
	 countselect = $( "input:checked" ).length;
	 };
	 countChecked();
	 if (countselect==0) {
		  $('#texarea').slideUp('slow');
		  alert("Please select at least one option");		  
	 }
	 var num =$("#mlen").val();
	 var division = num/countselect;	
	 var testarray=new Array("lowlen","uplen","nolen","symlen");
	 for(var i=0;i<=countselect;i++)
	 {
	   if (chkval[i]=="lowlen") {$lcl=division;}
	   if (chkval[i]=="uplen") {$ucl=division;}
	   if (chkval[i]=="nolen") {$nl=division;}
	   if (chkval[i]=="symlen") {$sl=division;}
	 }
	 var one = chkval[0];
	 $len=$("#mlen").val();	
	 if ($len!='') {		  	 
		  if(countselect!=0)
		  {
		  $('#err_msg').html("<font color='green'><img src='loader.gif' border='0' alt='Loading...' /></font>");
			   $.post("ajx-generator.php","length="+$len+"&lowlen="+$lcl+"&uplen="+$ucl+"&nolen="+$nl+"&symlen="+$sl,function(resp){	   
					$('#err_msg').html("");
					$('#texarea').slideDown('slow');	
					$('#texarea').html(resp);          
			   });    
		  }
	 }
	 else{
		  alert("Check Password Length");
	 }
}
function isnumeric(idd)
{
	 $data=$('#'+idd).val();
	 if($data!="")
	 {
		if($data.match('^(0|[1-9][0-9]*)$'))
		{
			 return true;
		}
		else
		{ 
			 $('#'+idd).val("");
			 return false;
		} 
	 } 
}
function checknum(vv)
{
	 var dat = vv.value;
        if (dat>20 || dat<6) {
            alert("Check Password Length");
            vv.value='';
        }
		
}
</script><div class='resp_code frms'> <div align='center' id='content'><b>Password Length (6-20): </b> <input size="2" name="length" maxlength="2" value="8" type="text" id='mlen' class='input_text_class' onkeyup="isnumeric('mlen')" onblur='checknum(this)' style='width:30%;'> <div> <div> <b>Lowercase :</b><br /><br /> <input name="alpha" id='lowlen' value="lowlen" type="checkbox" checked class='ckbox'> ( e.g. abcdef) </div> </br> <div> <b>Uppercase :</b><br /><br /> <input name="mixedcase" id='uplen' value="uplen" type="checkbox" class='ckbox'> ( e.g. ABCDEF) </div> </div></br> <div> <div> <b>Numbers : </b><br /><br /> <input name="numeric" id='nolen' value="nolen" type="checkbox" class='ckbox'> ( e.g. 1234567) </div></br> <div> <b>Symbols : </b><br /><br /> <input name="punctuation" id='symlen' value="symlen" type="checkbox" class='ckbox'> ( e.g. !*_&) </div> </div><br> <div id='err_msg' class='error'></div> <input type="button" value="Generate Password(s)" onclick="submitt()" class="blue_button" /> <input type="button" value="Reset" onclick="location.href='index.php'" class="blue_button" /> </br></br> <div class='texarea' id='texarea'></div> <input name="generate" value="true" type="hidden"></div></div> </div> </div> </div> </main></body></html>		