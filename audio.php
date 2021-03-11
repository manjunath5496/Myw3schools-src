<?php

if(strpos($_SERVER['HTTP_USER_AGENT'], 'MSIE|Internet Explorer~i') !== FALSE) 
		echo '&nbsp;';
elseif(strpos($_SERVER['HTTP_USER_AGENT'], 'Firefox') !== FALSE) 
		echo '&nbsp;';
		elseif(strpos($_SERVER['HTTP_USER_AGENT'], 'Chrome') !== FALSE) 
			echo '&nbsp;';
		elseif(strpos($_SERVER['HTTP_USER_AGENT'], 'Safari') !== FALSE) 
			echo 'Your browser does not support the audio element.';		
			
			else 
				echo '&nbsp;';

    ?>