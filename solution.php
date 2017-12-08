<?php
$bas=0;
$son=0;
$handle = fopen ("php://stdin","r");
fscanf($handle,"%d",$n);
$a = array();
 $j=0;
    $k=$n-1;
for($a_i = 0; $a_i < $n; $a_i++) {
   $a_temp = fgets($handle);
   $a[] = explode(" ",$a_temp);
  array_walk($a[$a_i],'intval');
   
       $bas+= $a[$a_i][$j];
    $j++;
   
        $son+=$a[$a_i][$k];
    $k--;
    
    
}
$sonuc = abs($son-$bas);
    echo $sonuc;

?>
