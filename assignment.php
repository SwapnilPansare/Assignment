<?php
//Program for Problem Statement 1.
$n        = 2;                                // Number of servers
$load     = array(10,60,50,15,20);            // Server load every minute 
$interval = 5;                                // Time interval of 5 minutes 
for($i = 0; $i < $interval; $i++){
	if($load[$i] < 50){                       // If load is less than 50 %
		$n = floor($n / 2);
	}
	else{                                     // If load is greater than or equal to 50 %  
	     $n = floor(2 * $n + 1);	
	}  	
} 
echo "After $interval minutes, $n server is running<br>";

//Program for Problem Statement 2.
$breads          = 9;
$vada            = 2;
$samosa          = 3;
$vadapav_price   = 10;
$samosapav_price = 15;
$Profit          = 0;
/*
  Loop will continue only till we have minimum of 2 breads as we have to sell a combination of 2 breads with a samosa or vada.
*/
for($i = $breads; $i >= 2; $i = $i - 2){
    //If samosapav price is greater than vadapav price and we have a samosa available.	
	if($samosapav_price > $vadapav_price && $samosa > 0){       
       $Profit = $Profit + $samosapav_price;
       $samosa--;
	}else if($vada > 0){   // If vada is available.
       $Profit = $Profit + $vadapav_price; 
       $vada--;
	}
}
echo "Maximum Profit possible is: " . $Profit;

?>