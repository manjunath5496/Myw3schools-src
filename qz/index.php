<!DOCTYPE html><html xmlns="http://www.w3.org/1999/xhtml" lang="en-US" prefix="og: http://ogp.me/ns#"><head profile="http://gmpg.org/xfn/11"> <meta http-equiv="Content-Type" content="text/html; charset=gb18030"> <meta http-equiv="X-UA-Compatible" content="IE=9" /> <meta name="format-detection" content="telephone=no" /> <meta HTTP-EQUIV="CACHE-CONTROL" CONTENT="NO-CACHE" /> <meta http-equiv="cache-control" content="no-store" /> <meta http-equiv="X-UA-Compatible" content="IE=edge" /> <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0" /> <meta name="author" content="MyW3schools" /> <meta name="description" content=" MyW3schools.com is the internet's best source for free eBook downloads. Read & download eBooks for Free: anywhere, anytime! Collection includes great works of fiction, non-fiction and poetry, including works by Asimov, Jane Austen, Philip K. Dick, F. Scott Fitzgerald, Neil Gaiman, Tolstoy, Dostoevsky, Shakespeare, Ernest Hemingway, Virginia Woolf & James Joyce." /> <meta name="keywords" content="free ebooks collection, download free ebooks, 4700 free ebooks, free ebooks on literature, free ebooks science fiction, free ebooks technical, j k rowling free ebooks,free ebooks computer science download, science free ebooks, free ebooks medical download pdf" /> <link rel="canonical" href="http://www.static.myw3schools.com/qz/index.php" /> <meta property="og:url" content="http://www.static.myw3schools.com/qz/index.php" /> <meta property="og:site_name" content="MyW3schools | internet's best source for free eBook downloads" /> <meta property="og:locale" content="en_GB" /> <meta property="og:type" content="website" /> <meta property="og:title" content="MyW3schools | internet's best source for free eBook downloads." /> <meta name="robots" content="noindex,nofollow" /> <meta property="og:image" content="http://www.static.myw3schools.com/img/1.png" /> <meta name="twitter:description" content="MyW3schools.com is the internet's best source for free eBook downloads. Read & download eBooks for Free: anywhere, anytime! Collection includes great works of fiction, non-fiction and poetry, including works by Asimov, Jane Austen, Philip K. Dick, F. Scott Fitzgerald, Neil Gaiman, Tolstoy, Dostoevsky, Shakespeare, Ernest Hemingway, Virginia Woolf & James Joyce." /> <meta name="google-site-verification" content="OIuEbc9pgQaGjNQbvni1N4wCpVkMTdfECpvjMw3ZDqI" /> <style type="text/css">body {font-family: 'Trebuchet MS', 'Helvetica'}.dg-question-label{ font-weight:bold;}</style><script type="text/javascript" src="http://www.static.myw3schools.com/js/mootools-core-1.4.5-minified.js"></script><script type="text/javascript" src="http://www.static.myw3schools.com/js/dg-quiz-maker.js"></script><script type='application/ld+json'> { "@context": "http://www.schema.org", "@type": "WebSite", "name": "MyW3schools", "alternateName": "The internet's best source for free eBook downloads", "url": "http://www.myw3schools.com" } </script> <link rel="shortcut icon" href="http://www.static.myw3schools.com/img/logo.png" alt="The internet's best source for free eBook downloads" title="MyW3schools Logo" /> <title>Get Your IQ | MyW3schools.com | Download Fiction, Health, Romance and many more ebooks for Free: any where, anytime!</title> <meta name="distribution" content="web" /> <link rel="stylesheet" href="http://www.static.myw3schools.com/css/display.css"> <link href="https://fonts.googleapis.com/css?family=Montserrat:400,400i,700|Source+Serif+Pro:700" rel="stylesheet"> <link rel='stylesheet' id='font-awesome-min-css' href='http://www.static.myw3schools.com/css/font-awesome.min.css' type='text/css' media='screen' /> </head><body> <main> <div class="container--lg pt1 pb1"> <div class="grid-row grid-row--center"> <div class="grid-column mt3 mb2"> <img src="http://www.static.myw3schools.com/img/ms8.png" alt="Empower Your Jewish Journey"> </div> <div class="grid-column span-1"></div> <div class="grid-column mt3 mb2"> <div class="border--bottom pb2 mb2"> <h2><i class="fa fa-th-large"></i> This Is Not a Test</h2> <p> Define your IQ by the only metric that matches the pace of change. Take a free assessment to identify your knowledge gap and strength today. </p> </div> <div id="questions"> </div><div id="error"></div><div id="result"></div><script type="text/javascript">

function showWrongAnswer(){
    document.id('error').set('html', 'Wrong answer, Please try again');
}

function showScore() {
	var score = quizMaker.getScore();

	var el = new Element('h3');
	el.set('html', 'Thank you!');
    document.id('result').adopt(el);

	el = new Element('h4');
	el.set('html', 'Score: ' + score.numCorrectAnswers + ' / ' + score.numQuestions);
    document.id('result').adopt(el);

	if(score.incorrectAnswers.length > 0) {
		el = new Element('h4');
		el.set('html', '<a href="index.php"><button>Restart</button></a> </br>  </br> </br> </br>Incorrect Answers:');
        document.id('result').adopt(el);

		for(var i=0;i<score.incorrectAnswers.length;i++) {
			var incorrectAnswer = score.incorrectAnswers[i];
			el = new Element('div');
			el.set('html', '</br><b>' +  incorrectAnswer.questionNumber + ': ' + incorrectAnswer.label + '</b>');
			document.id('result').adopt(el);

			el = new Element('div');
			el.set('html', 'Correct answer : ' + incorrectAnswer.correctAnswer);
            document.id('result').adopt(el);
			el = new Element('div');
			el.set('html', 'Your answer : ' + incorrectAnswer.userAnswer);
            document.id('result').adopt(el);

		}
	}

}

var questions = [
	{
		label : 'A, B and C can do a piece of work in 20, 30 and 60 days respectively. In how many days can A do the work if he is assisted by B and C on every third day?',
		options : ['15 days', '12 days', '18 days'],
		answer : ['15 days'],
		forceAnswer : true
    },
	{
		label : 'The percentage increase in the area of a rectangle, if each of its sides is increased by 20% is:',
		options : ['40%', '44%', '42%'],
		answer : ['44%'],
		forceAnswer : true
    },
	{
		label : 'A two-digit number is such that the product of the digits is 8. When 18 is added to the number, then the digits are reversed. The number is:',
		options : ['24', '18', '81'],
		answer : ['24'],
		forceAnswer : true
    }
    ,
	{
		label : '1397 &times; 1397 = ?',
		options : ['1981809','1951609','1981709'],
		answer : ['1951609'],
		forceAnswer : true
    },
	{
		label : 'In a 100 m race, A can give B 10 m and C 28 m. In the same race B can give C:',
		options : ['20 m','24 m', '28 m'],
		answer : ['20 m'],
		forceAnswer : true
    },
    {
        label: 'A vendor bought toffees at 6 for a rupee. How many for a rupee must he sell to gain 20%?',
        options : ['9','5','2'],
        answer :['5'],
		forceAnswer : true
    }

]

function showAnswerAlert() {

alert("Please select an option!");

	
}
function clearErrorBox() {
    document.id('error').set('html','');
}
var quizMaker = new DG.QuizMaker({
	questions : questions,
	el : 'questions',
    forceCorrectAnswer:false,
	listeners : {
		'finish' : showScore,
		'missinganswer' : showAnswerAlert,
		'sendanswer' : clearErrorBox,
        'wrongAnswer' : showWrongAnswer
	}
});
quizMaker.start(); </script><br> <br> </div> </div> </div> </main><center></script></body></html>