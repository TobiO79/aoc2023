<?php
$lines=file("input2.txt");
$sum=0;
$red=12;
$green=13;
$blue=14;
foreach($lines as $line_num => $line){
        $test=true;
        list($game,$data)=explode(":", $line);
        $ziehungen=explode(";",$data);
        foreach($ziehungen as $ziehung){
                $wuerfel=explode(",",$ziehung);
                foreach($wuerfel as $auswertung){
                        list($anzahl,$farbe)=explode(" ",trim($auswertung));
                        if($farbe=="red" and $anzahl>$red) $test=false;
                        if($farbe=="blue" and $anzahl>$blue) $test=false;
                        if($farbe=="green" and $anzahl>$green) $test=false;
                }
        }
        if($test){
                list($str,$gamenr)=explode(" ",trim($game));
                $sum=$sum+$gamenr;
                print "$sum $gamenr $line\n";
        }
}
?>
