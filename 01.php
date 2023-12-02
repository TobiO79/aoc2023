<?php
$lines=file("input1.txt");
$sum=0;
foreach($lines as $line_num => $line){
        $len=strlen($line);
        for($i=0;$i<$len;$i++){
                if(is_numeric($line[$i])){
                        $a=$line[$i]*10;
                        break;
                }
        }
        for($i=$len-1;$i>=0;$i=$i-1){
                if(is_numeric($line[$i])){
                        $b=$line[$i]*1;
                        break;
                }
        }
        $c=$a+$b;
        $sum=$sum+$c;
        print "$sum $c $line\n";
}
?>
