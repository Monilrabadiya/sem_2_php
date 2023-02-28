<?php
	$a = 68;
	switch(true)
	{
		case ($a<=100 && $a>=80):{
			echo "you in marit";
			break;
		}
		case ($a<80 && $a>=65):{
			echo "you in 1st class";
			break;
		}
		case ($a<65 && $a>=45):{
			echo "you in 2ed class";
			break;
		}
		case ($a<45 && $a>=33):{
		    echo "you in 3rd class";
			break;
		}
		case($a<33):{
			echo "you fail";
			break;	
		}
		default :{
			echo "enter valide no";
		}
	
	}
	
?>
