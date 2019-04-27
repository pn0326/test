<?php
function primeno($n){
	$c=1;
	$i=2;
	$pn[]=1;
	while($c<=$n){
          $counter = 0; 
          for($j=1;$j<=$i;$j++){ //all divisible factors


                if($i % $j==0){ 

                      $counter++;
                }
          }

        //prime s 2 rules ( divisible by 1 and divisible by itself)
        if($counter==2){
			$pn[]=$i;	
			$c++;
        }
		$i++;
    }
	
	foreach($pn as $val){
		foreach($pn as $val1){
			if($val*$val1<2){
				echo "  ";
			}else{
				echo $val*$val1." ";
			}
		}
		
		echo "<br>";
	}
} 

primeno(10);